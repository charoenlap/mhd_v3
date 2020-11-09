<?php  
/**
 * Controller Programs
 */
class ProgramsController extends Controller
{

	public function index() 
	{
		$data = array();
		$programs = $this->model('programs');
		$program_info = $programs->findCode(get('program'));
		$program_id = $program_info['id'];
		

		$data['breadcrumb'] = array(
			'หน้าหลัก'=>route('home'),
			'โปรแกรม'=>route('programs','program='.get('program')),
		);

		$program_info = $programs->getList($program_id);
		$data['title'] = $program_info['name'];

		if($this->hasSession('success')) {
			$data['success'] = $this->getSession('success');
			$this->rmSession('success');
		}
		if($this->hasSession('error')) {
			$data['error'] = $this->getSession('error');
			$this->rmSession('error');
		}

		$filter = array();
		$data['results'] = $programs->getLists($filter);

		$data['link_add'] = route('programs/add', 'program='.get('program'));

		$this->view('programs/list', $data);
	}

	public function add()
	{
		$data = array();
		$data['result'] = array();
		$programs = $this->model('programs');
		$program_info = $programs->findCode(get('program'));
		$program_id = $program_info['id'];

		$data['breadcrumb'] = array(
			'หน้าหลัก'=>route('home'),
			'โปรแกรม'=>route('programs','program='.get('program')),
			'เพิ่ม Trial'=>route('programs/add','program='.get('program')),
		);

		
		$program_info = $programs->getList($program_id);
		$data['title'] = 'เพิ่ม Trial ของ '.$program_info['name'];

		$year = $this->model('year');
		$data['years'] = $year->getLists();

		$trial = $this->model('trial');
		if (method_post()) {
			$token_admin = json_decode(decrypt($this->getSession('token_admin')), true);
			$_POST['admin_id'] = $token_admin['id'];
			$_POST['program_id'] = $program_id;
			$_POST['date_expire'] = date('Y-m-d H:i:s', strtotime(str_replace('/','-',$_POST['date_expire']).' 23:59:59'));
			$_POST['date_added'] = date('Y-m-d H:i:s', time());
			$_POST['date_modify'] = date('Y-m-d H:i:s', time());
			$result = $trial->add($_POST);
			if ($result>0) {
				$this->setSession('success', 'เพิ่ม Trial เรียบร้อยแล้ว');
			} else {
				$this->setSession('error', 'เกิดข้อผิดพลาดในการเพิ่ม Trial');
			}
			redirect('programs', '&program='.get('program'));
			exit();	
		}

		$data['action'] = route('programs/add','program='.get('program'));
		$data['ajax'] = route('programs/ajaxCheckTrial');
		
		$this->view('programs/form', $data);		
	}

	public function edit()
	{
		$data = array();
		$programs = $this->model('programs');
		$program_info = $programs->findCode(get('program'));
		$program_id = $program_info['id'];

		$data['breadcrumb'] = array(
			'หน้าหลัก'=>route('home'),
			'โปรแกรม'=>route('programs','program='.get('program')),
			'แก้ไข Trial'=>route('programs/edit','program='.get('program')),
		);

		$program_info = $programs->getList($program_id);
		$data['title'] = 'แก้ไข Trial ของ '.$program_info['name'];

		$year = $this->model('year');
		$data['years'] = $year->getLists();

		$trial = $this->model('trial');
		$data['trial_info'] = $trial->getList($program_id, get('id'));
		if (method_post()) {
			$token_admin = json_decode(decrypt($this->getSession('token_admin')), true);
			$_POST['admin_id'] = $token_admin['id'];
			$_POST['date_expire'] = date('Y-m-d H:i:s', strtotime(str_replace('/','-',$_POST['date_expire']).' 23:59:59'));
			$_POST['date_modify'] = date('Y-m-d H:i:s', time());
			$result = $trial->edit($_POST, $program_id, get('id'));
			if ($result>0) {
				$this->setSession('success', 'แก้ไข Trial เรียบร้อย');
			} else {
				$this->setSession('error', 'เกิดข้อผิดพลาดในการแก้ไข Trial');
			}
			redirect('programs','&program='.get('program'));
			exit();	
		}
		
		// $data['result'] = $programs->getList($id);
		$data['action'] = route('programs/edit','program='.get('program').'&id='.get('id'));
		$data['ajax'] = route('programs/ajaxCheckTrial');
		
		$this->view('programs/form', $data);	
	}

	public function del() 
	{
		$program_id = get('program_id');
		$programs = $this->model('programs');
		$result = $programs->del($id);
		if ($result==1) {
			$this->setSession('success', 'Del Success');
		} else {
			$this->setSession('error', 'Fail Del');
		}
		redirect('programs');
		exit();
	}



	public function ajaxList() 
	{
		$data = array();
		$filter = array();
		$trial = $this->model('trial');
		$programs = $this->model('programs');
		$program_info = $programs->findCode(post('program'));
		$program_id = $program_info['id'];
		$results = $trial->getLists($program_id, $filter);
		$data['recordsFiltered'] = count($results);

		$order_list = array('t.id','t.admin_id','t.name','t.date_expire');
		$order = (isset($_POST['order'][0]['column'])) ? $order_list[$_POST['order'][0]['column']] : '';
		$by = (isset($_POST['order'][0]['dir'])) ? $_POST['order'][0]['dir'] : '';
		$results = $trial->getLists($program_id, $filter, $order, $by, post('start'), post('length'));
        $i=1;
        $data['data'] = array();
		foreach ($results as $key => $value) {
            $action = '<div class="btn-group btn-group-toggle" data-toggle="buttons">';
				$action .= '<a href="' . route('programs/edit', 'program='.post('program').'&id=' . $value['id']) . '" class="btn btn-secondary btn-sm"><i class="fas fa-edit"></i> แก้ไข</a>';
                $action .= '<a href="' . route('programs/del', 'program='.post('program').'&id=' . $value['id']) . '" class="btn btn-danger btn-sm" onclick="return confirm(\'ยืนยันการลบข้อมูล\');"><i class="fas fa-trash-alt"></i> ลบ</a>';
            $action .= '</div>';
			$data['data'][] = array(
				'no' => $i++,
				'year' => $value['year'],
				'trial' => $value['name'],
				'expire' => !empty($value['date_expire']) ? date('d/m/Y',strtotime($value['date_expire'])) : '',
				'action' => $action
			);
		}
	    $data['draw'] = post('draw');
	    $data['recordsTotal'] = post('length');
		$this->json($data);
	}

	public function ajaxCheckTrial() {
		$trial = $this->model('trial');
		$programs = $this->model('programs');
		$program_info = $programs->findCode(post('program'));
		$program_id = $program_info['id'];
		$data = $trial->findName($program_id, post('year_id'), post('name'), post('id'));
		$this->json($data);
	}
}
?>