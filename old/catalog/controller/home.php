<?php 
	class HomeController extends Controller {
		public function __construct() {
			if ($this->hasSession('token')) {
				$token = json_decode(decrypt($this->getSession('token')),true);
				$id = $token['id'];
				$member = $this->model('member');
				$result = $member->getList($id);
				if (count($result)==0) {
					$this->setSession('error', 'ไม่มีสิทธิ์ในการเข้าถึงหน้า '.get('route'));
					redirect('member/logout');	
				}
			} else {
				// $this->setSession('error', 'ไม่มีสิทธิ์ในการเข้าถึงหน้า '.get('route'));
				redirect('member/logout');
			}
		}

		public function index() {
			$data = array();
			$data['title'] = "หน้าหลัก";
			$style = array(
				'assets/home.css'
			);
			$data['style'] 	= $style;

			$data['link_register'] = route('member/register');

			if ($this->hasSession('success')) {
				$data['success'] = $this->getSession('success');
				$this->rmSession('success');
			}
			if ($this->hasSession('error')) {
				$data['error'] = $this->getSession('error');
				$this->rmSession('error');
			}

	    	$this->view('home/dashboard',$data); 
		}
	    

	    public function log() {
	    	header('Content-Type: text/html; charset=utf-8');
	    	$data = array();
	    	if (get('path')) {
	    		$path = get('path');
	    	} else {
	    		redirect('home/log','&path=./log/');
	    	}
	    	$data['result'][] = getLogs($path);
	    	$this->view('log',$data);
	    }

	    

	    

	    
	    

	    
	}
?>