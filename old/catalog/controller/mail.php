<?php 
	class MailController extends Controller {
	    public function register() {
	    	$data = array();
	    	$data['title'] = "Template Email";

	    	$get = json_decode(decrypt(get('data')), true);
	    	$data['email'] = $get['email'];
	    	$data['password'] = $get['pass'];
	    	$data['link'] = MURL.route('home/confirm','e='.encrypt($get['id']));

 	    	$this->view('mail/register',$data); 
	    }
	    public function forgot() {
	    	$data = array();
	    	$data['title'] = "Template Email";

	    	$get = json_decode(decrypt(get('data')), true);
	    	
	    	$filter = array('email'=>$get['email']);
	    	$member = $this->model('member');
	    	$results = $member->getLists($filter);
	    	$get = $results[0];


	    	$ran = rand(10000,99999);
	    	$password = md5(KEY.$ran);

	    	$data['link'] = MURL.route('home/changepass','e='.encrypt(json_encode(array('id'=>$get['id'], 'password'=>$password))));

	    	$data['email'] = $get['email'];
	    	$data['password'] = $ran;

 	    	$this->view('mail/forgot',$data); 
	    }
	}
?>