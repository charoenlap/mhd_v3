<?php 
	class CommonController extends Controller {
	    public function header($data=array()) {
			$programs = $this->model('programs');
			$data['menu_programs'] = $programs->getLists();
	    	$this->render('common/header',$data);
	    }
	    public function footer($data=array()){
	    	$this->render('common/footer',$data);
	    }
	}
?>