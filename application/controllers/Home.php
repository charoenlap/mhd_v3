<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Home extends CI_Controller
{

    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $data = array(); 

    $data['bgcontent'] = "background:url('".base_url()."assets/img/bghome.jpg') no-repeat center center / cover;";

    $data['banner'] = $this->model_content->getContentList(184)->picture1;

    $this->load->TemplateHome('home/index', $data);
  }


  public function contentcat($catid) // หมวดหมู่หน้า
  {
    $data = array();
    $result = $this->model_content->getCatList($catid);
    $result2 = $this->model_content->getContentListByCat($catid);
    $result3 = $this->model_content->getContentByCat($catid);

    $data['result_cat'] = $result;
    $data['result_content'] = $result2;
    $data['result_con'] = $result3;
    $this->load->TemplateHome('home/cat', $data);
  }

  public function content($id) // หน้า มีอ้างอิงจาก cat 
  {
    $data = array();
    $data['result'] = $this->model_content->getContentList($id);
    $this->load->TemplateHome('home/content', $data);
  }
  public function about_schemes()
  {
    $data = array();
    $this->load->TemplateHome('home/about_schemes', $data);
  }
}


/* End of file Home.php */
/* Location: ./application/controllers/Home.php */