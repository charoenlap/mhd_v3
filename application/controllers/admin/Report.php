<?php
defined('BASEPATH') or exit('No direct script access allowed');



class Report extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index() 
  {
    $data = array();
    $data['heading_title'] = 'จัดการสมาชิก';
    $data['breadcrumbs'] = array(
      'ภาพรวม' => base_url('admin/home'),
      $data['heading_title'] => base_url('admin/member/lists/'.$page)
    );

    $data['action'] = base_url('admin/member/lists/'.$page);

    if ($this->session->has_userdata('success')) {
        $data['success'] = $this->session->success;
        $this->session->unset_userdata('success');
    } else {
        $data['success'] = '';
    }
    if ($this->session->has_userdata('error')) {
        $data['error'] = $this->session->error;
        $this->session->unset_userdata('error');
    } else {
        $data['error'] = '';
    }

    $this->load->template('admin/member/index', $data);
  }
}