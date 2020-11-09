<?php  
/**
 * Controller Home
 */
class HomeController extends Controller
{

	public function index() 
	{
		$data = array();

		if($this->hasSession('success')) {
			$data['success'] = $this->getSession('success');
			$this->rmSession('success');
		}
		if($this->hasSession('error')) {
			$data['error'] = $this->getSession('error');
			$this->rmSession('error');
		}

		$filter = array();
		// $home = $this->model('home');
		// $data['results'] = $home->getLists($filter);

		$data['link_add'] = route('home/add');

		$this->view('home/dashboard', $data);
	}

	public function add()
	{
		$data = array();
		$data['result'] = array();

		$home = $this->model('home');
		if (method_post()) {
			$result = $home->add($_POST);
			if ($result>0) {
				$this->setSession('success', 'Add Success');
			} else {
				$this->setSession('error', 'Fail Add');
			}
			redirect('home');
			exit();	
		}

		$data['action'] = route('home/add');
		
		$this->view('home/form', $data);		
	}

	public function edit()
	{
		$data = array();

		$id = get('id');
		$home = $this->model('home');

		if (method_post()) {
			$result = $home->edit($_POST, $id);
			if ($result>0) {
				$this->setSession('success', 'Edit Success');
			} else {
				$this->setSession('error', 'Fail Edit');
			}
			redirect('home');
			exit();	
		}

		$data['result'] = $home->getList($id);
		$data['action'] = route('home/edit');
		
		$this->view('home/form', $data);	
	}

	public function del() 
	{
		$id = get('id');
		$home = $this->model('home');
		$result = $home->del($id);
		if ($result==1) {
			$this->setSession('success', 'Del Success');
		} else {
			$this->setSession('error', 'Fail Del');
		}
		redirect('home');
		exit();
	}
}
?>