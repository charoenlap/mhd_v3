<?php 
	class DashboardController extends Controller {
	    public function index() {
	    	$data = array();
	    	$data['title'] = "EQAS-MUMT";
	    	$style = array(
	    		'assets/home.css'
	    	);
	    	$data['style'] 	= $style;

	    	$data['link_register'] = route('home/register');

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
	}
?>