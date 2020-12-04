<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Payment extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
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
    $lists = $this->model_payment->getLists($filter, $page, $config['per_page'], 'id', 'ASC');
    $data['lists'] = array();
    if (count($lists)>0) {
      foreach ($lists as $key => $value) {
        $value->member_no = $this->model_member->getList($value->member_id)->member_no;
        $data['lists'][] = $value;
      }
    }
    $config['total_rows'] = $this->model_payment->countLists($filter);
    $this->pagination->initialize($config);
    $data['pagination'] = $this->pagination->create_links();

    
    $this->load->template('admin/payment/index', $data);
  }

}


/* End of file Home.php */
/* Location: ./application/controllers/Home.php */