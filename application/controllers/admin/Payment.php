<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Payment extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index() 
  {

  }

  public function lists($page=0)
  {
    $data = array(); 
    $data['heading_title'] = 'แจ้งชำระเงิน';
    $data['breadcrumbs'] = array(
      'ภาพรวม' => base_url('admin/home'),
      $data['heading_title'] => base_url('admin/payment')
    );
    $data['action'] = base_url('admin/payment');

    $data['success'] = $this->session->has_userdata('success') ? $this->session->success : ''; $this->session->unset_userdata('success');
    $data['error'] = $this->session->has_userdata('error') ? $this->session->error : ''; $this->session->unset_userdata('error');

    
    $config = array(
      'uri_segment' => 4,
      'base_url' => base_url(). 'admin/payment/lists/page/',
      'full_tag_open' => '<div class="btn-group pagination-group mt-3">',
      'full_tag_close' => '</div>',
      'cur_tag_open' => '<button type="button" class="btn btn-primary">',
      'cur_tag_close' => '</button>',
      'num_tag_open' => '<button type="button" class="btn btn-default">',
      'num_tag_close' => '</button>',
      'next_link' => '<button type="button" class="btn btn-default btn-prev">&gt;</button>',
      'prev_link' => '<button type="button" class="btn btn-default btn-next">&lt;</button>',
      'per_page' => 10, // ! this is limit per page
    );
    
    $data['path_image'] = 'upload/';
    $filter = array();
    $lists = $this->model_payment->getLists($filter, $page, $config['per_page'], 'status', 'DESC');
    $data['lists'] = array();
    if (count($lists)>0) {
      foreach ($lists as $key => $value) {
        $value->member_no = $this->model_member->getList($value->member_id)->member_no;
        $value->programs = $this->model_register_program->getProgramByPayment($value->id);
        $data['lists'][] = $value;
      }
    }
    $config['total_rows'] = $this->model_payment->countLists($filter);
    $this->pagination->initialize($config);
    $data['pagination'] = $this->pagination->create_links();

    
    $this->load->template('admin/payment/index', $data);
  }

  public function confirm($id=0) 
  {
    if ($id>0) {
      $admin_info = json_decode($this->encryption->decrypt($this->session->admin_token));
      $update = array('status'=>1, 'date_modify'=>date('Y-m-d H:i:s'), 'admin_id' => $admin_info->id);
      $result = $this->model_payment->edit($id, $update);
      if ($result)
        $this->session->set_userdata('success', 'Confirm payment success');
      else 
        $this->session->set_userdata('error', 'Cant confirm payment.');
    } else {
      $this->session->set_userdata('error', 'Confirm fail, something has wrong.');
    }
    redirect('admin/payment/lists/page/');
  }
  public function unconfirm($id=0) 
  {
    if ($id>0) {
      $admin_info = json_decode($this->encryption->decrypt($this->session->admin_token));
      $update = array('status'=>0, 'date_modify'=>date('Y-m-d H:i:s'), 'admin_id' => $admin_info->id);
      $result = $this->model_payment->edit($id, $update);
      if ($result)
        $this->session->set_userdata('success', 'Unconfirm payment success');
      else 
        $this->session->set_userdata('error', 'Cant unconfirm payment.');
    } else {
      $this->session->set_userdata('error', 'Unconfirm fail, something has wrong.');
    }
    redirect('admin/payment/lists/page/');
  }

}


/* End of file Home.php */
/* Location: ./application/controllers/Home.php */