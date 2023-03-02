<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Register extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $data = array();
    $data['heading_title'] = 'สมัครโปรแกรม';

    $data['lists'] = $this->model_register_program->getRegisterProgramAll();

    $this->load->template('admin/register/index', $data);
  }
  public function updateApprove($id)
  {
    $update = $this->model_register_program->registerApprove($id);
    redirect('admin/register/index');
  }
  public function updateDisapproved($id)
  {
    $update = $this->model_register_program->registerdisApprove($id);
    redirect('admin/register/index');
  }
}


/* End of file Home.php */
/* Location: ./application/controllers/Home.php */