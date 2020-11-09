<?php  
/**
 * Controller Member
 */
class MemberController extends Controller
{

	public function index() 
	{
		$data = array();

        $data['title'] = 'รายการแอดมิน';
		$data['breadcrumb'] = array(
			'หน้าหลัก'=>route('home'),
			'รายการแอดมิน'=>route('member'),
		);

		if($this->hasSession('success')) {
			$data['success'] = $this->getSession('success');
			$this->rmSession('success');
		}
		if($this->hasSession('error')) {
			$data['error'] = $this->getSession('error');
			$this->rmSession('error');
		}

		$filter = array();
		$member = $this->model('member');
		$data['results'] = $member->getLists($filter);

		$data['link_add'] = route('member/add');

		$this->view('member/list', $data);
	}

	public function add()
	{
		$data = array();
		$data['result'] = array();

		$member = $this->model('member');
		if (method_post()) {
			$result = $member->add($_POST);
			if ($result>0) {
				$this->setSession('success', 'Add Success');
			} else {
				$this->setSession('error', 'Fail Add');
			}
			redirect('member');
			exit();	
		}

		$data['action'] = route('member/add');
		
		$this->view('member/form', $data);		
	}

	public function edit()
	{
        $data = array();
        
        $data['title']      = 'แก้ไขแอดมิน';
        $data['breadcrumb'] = array(
            'หน้าหลัก'     => route('home'),
            'รายการแอดมิน' => route('member'),
            'แก้ไขแอดมิน'  => route('member/add'),
        );
		$id = get('id');
        $member = $this->model('member');
        $data['user_info'] = $member->getList($id);

        $data['admin_type'] = $member->getAdminType();

		if (method_post()) {
			if ($_POST['password']==$_POST['confirm']) {
				$result = $member->edit($_POST, $id);
				if ($result>0) {
					$this->setSession('success', 'แก้ไขเรียบร้อยแล้ว');
				} else {
					$this->setSession('error', 'ไม่สามารถแก้ไขได้');
				}
			} else {
				$this->setSession('error', 'รหัสผ่านไม่ตรงกัน');
			}
			redirect('member');
			exit();	
		}

		$data['result'] = $member->getList($id);
		$data['action'] = route('member/edit');
		
		$this->view('member/form', $data);	
	}

	public function del() 
	{
		$id = get('id');
		$member = $this->model('member');
		$result = $member->del($id);
		if ($result==1) {
			$this->setSession('success', 'Del Success');
		} else {
			$this->setSession('error', 'Fail Del');
		}
		redirect('member');
		exit();
	}

	public function ajaxList() 
	{
		$data = array();
		$filter = array();
		$member = $this->model('member');
		$results = $member->getLists($filter);
		$data['recordsFiltered'] = count($results);

		$order_list = array('id','admin_type_id','username','date_login');
		$order = (isset($_POST['order'][0]['column'])) ? $order_list[$_POST['order'][0]['column']] : '';
		$by = (isset($_POST['order'][0]['dir'])) ? $_POST['order'][0]['dir'] : '';
		$results = $member->getLists($filter, $order, $by, post('start'), post('length'));
        $i=1;
        $data['data'] = array();
		foreach ($results as $key => $value) {
            $action = '<div class="btn-group btn-group-toggle" data-toggle="buttons">';
            
            if ($value['admin_type_id']!=1) {
				$action .= '<a href="' . route('member/edit', '&id=' . $value['id']) . '" class="btn btn-secondary btn-sm"><i class="fas fa-edit"></i> แก้ไข</a>';
                $action .= '<a href="' . route('member/del', '&id=' . $value['id']) . '" class="btn btn-danger btn-sm" onclick="return confirm(\'ยืนยันการลบข้อมูล\');"><i class="fas fa-trash-alt"></i> ลบ</a>';
            } else {
				$action .= '<a href="#" class="btn btn-secondary btn-sm disabled" disabled><i class="fas fa-edit"></i> แก้ไข</a>';
                $action .= '<a href="#" class="btn btn-danger btn-sm disabled" disabled onclick="alert(\'ไม่สามารถลบได้\');"><i class="fas fa-trash-alt"></i> ลบ</a>';
            }
            $action .= '</div>';
			$data['data'][] = array(
				'no' => $i++,
				'admin_type' => $value['type'],
				'username' => $value['username'],
				'date_login' => $value['date_login'],
				'action' => $action
			);
		}
	    $data['draw'] = post('draw');
	    $data['recordsTotal'] = post('length');
		$this->json($data);
	}



	public function login() 
	{
		$data = array();
		$data['action'] = route('member/login');
		if ($this->hasSession('success')) {
			$data['success'] = $this->getSession('success');
			$this->rmSession('success');
		}
		if ($this->hasSession('error')) {
			$data['error'] = $this->getSession('error');
			$this->rmSession('error');
		}
		if (method_post()) {
			$member = $this->model('member');
			$result = $member->login(post('username'), md5(KEY.post('password')));
			if ($result!=false) {
				$member_info = array(
					'id' => $result['id'],
					'username' => $result['username']
				);
				$this->setSession('token_admin', encrypt(json_encode($member_info)));
				redirect('home');
			} else {
				$this->setSession('error', 'ชื่อผู้ใช้ หรือ รหัสผ่านไม่ถูกต้อง');
				redirect('member/login');
			}
		}

		$this->view('member/login', $data);
	}

	public function logout() 
	{
		$this->rmSession('token_admin');
		redirect('member/login');
	}
}
?>