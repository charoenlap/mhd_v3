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

  // -----------oldpayment
  public function lists($page = 0)
  {
    $data = array();
    $data['heading_title'] = 'แจ้งชำระเงิน';
    $data['breadcrumbs'] = array(
      'ภาพรวม' => base_url('admin/home'),
      $data['heading_title'] => base_url('admin/payment')
    );
    $data['action'] = base_url('admin/payment/lists/' . $page);

    $data['success'] = $this->session->has_userdata('success') ? $this->session->success : '';
    $this->session->unset_userdata('success');
    $data['error'] = $this->session->has_userdata('error') ? $this->session->error : '';
    $this->session->unset_userdata('error');

    $filter = array();
    $data['programs'] = $this->model_program->getLists($filter, 0, 99999999999);
    $config = array(
      'uri_segment' => 4,
      'base_url' => base_url() . 'admin/payment/lists/',
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
    $data['filter_date'] = '';
    $data['filter_status'] = null;
    $data['filter_member'] = '';
    $data['path_image'] = 'upload/';
    $filter = array();
    if ($this->input->server('REQUEST_METHOD') == 'POST') {
      if (!empty($this->input->post('filter_date'))) {
        $data['filter_date'] = $this->input->post('filter_date');
        $filter['mhd_payment.slip_date'] = implode('-', array_reverse(explode('/', $this->input->post('filter_date'))));
      }
      if ($this->input->post('filter_status') != 'null') {
        $data['filter_status'] = (int)$this->input->post('filter_status');
        $filter['mhd_payment.status'] = (int)$data['filter_status'];
      }
      if (!empty($this->input->post('filter_member'))) {
        $data['filter_member'] = $this->input->post('filter_member');
        $filter['mhd_member.member_no'] = substr($this->input->post('filter_member'), 4, strlen($this->input->post('filter_member')));
        // $filter['mhd_member.id'] = $this->input->post('filter_member');
      }
      if ($this->input->post('filter_print') != 'null') {
        $data['filter_print'] = $this->input->post('filter_print');
        $filter['mhd_payment.confirm_print'] = (int)$this->input->post('filter_print');
      }
    }
    $lists = $this->model_payment->getLists($filter, $page, $config['per_page'], 'id', 'DESC');
    $data['lists'] = array();
    if (count($lists) > 0) {
      foreach ($lists as $key => $value) {
        $value->member_no = $this->model_member->getList($value->member_id)->member_no;
        $value->member_no = substr($value->member_no, 0, 4) . sprintf('%04d', substr($value->member_no, 4));
        $value->programs = $this->model_register_program->getProgramByPayment($value->id);
        $value->program_pay = json_decode($value->payment_program);
        $data['lists'][] = $value;
      }
    }

    $config['total_rows'] = $this->model_payment->countLists($filter);
    $this->pagination->initialize($config);
    $data['pagination'] = $this->pagination->create_links();

    $this->load->template('admin/payment/index', $data);
  }

  
  // ----------NEWPAYMENT
  public function lists_register($page = 0)
  {
    $data = array();
    $data['heading_title'] = 'แจ้งชำระเงิน';
    $data['breadcrumbs'] = array(
      'ภาพรวม' => base_url('admin/home'),
      $data['heading_title'] => base_url('admin/payment')
    );
    // $data['action'] = base_url('admin/payment/lists_register/' . $page);
    $data['action'] = base_url('admin/payment/submit_admin/');
    $data['action_1'] = base_url('admin/payment/lists_register/');

    $data['success'] = $this->session->has_userdata('success') ? $this->session->success : '';
    $this->session->unset_userdata('success');
    $data['error'] = $this->session->has_userdata('error') ? $this->session->error : '';
    $this->session->unset_userdata('error');

    $filter_s = array();
    $data['programs'] = $this->model_program->getLists($filter_s, 0, 99999999999);

    $filter_s = array();
    $data['year_info'] = $this->model_year->getLists($filter_s, 0, 9999999999);
    $year_id_config = $this->model_setting->get('config_register_year_id');

    $config = array(
      'uri_segment' => 4,
      'base_url' => base_url() . 'admin/payment/lists_register/',
      'full_tag_open' => '<div class="btn-group pagination-group mt-3">',
      'full_tag_close' => '</div>',
      'cur_tag_open' => '<button type="button" class="btn btn-primary">',
      'cur_tag_close' => '</button>',
      'num_tag_open' => '<button type="button" class="btn btn-default">',
      'num_tag_close' => '</button>',
      'first_link' => '<button type="button" class="btn btn-default btn-prev">First</button>',
      'last_link' => '<button type="button" class="btn btn-default btn-prev">Last</button>',
      'next_link' => '<button type="button" class="btn btn-default btn-prev">&gt;</button>',
      'prev_link' => '<button type="button" class="btn btn-default btn-next">&lt;</button>',
      'per_page' => 10, // ! this is limit per page
    );

    $filter = array(
      'mhd_register.total >' => '0',
      // 'mhd_register.del' => '0'
    );
    if ($this->input->get('filter_member')) {
      $data['filter_member'] = $this->input->get('filter_member');
      $filter['mhd_register.member_id'] = $this->input->get('filter_member');
    } else {
      $data['filter_member'] = '';
    }

    // EMAIL
    if ($this->input->get('filter_email')) {
      $data['filter_email'] = $this->input->get('filter_email');
      $filter['email'] = $this->input->get('filter_email');
    } else {
      $data['filter_email'] = '';
    }

    // HOSPITAL
    if ($this->input->get('filter_company')) {
      $data['filter_company'] = $this->input->get('filter_company');
      $filter['company_name'] = $this->input->get('filter_company');
    } else {
      $data['filter_company'] = '';
    }
    if ($this->input->get('filter_name')) {
      $data['filter_name'] = $this->input->get('filter_name');
      $filter['firstname'] = $this->input->get('filter_name');
    } else {
      $data['filter_name'] = '';
    }
    if ($this->input->get('filter_year')) {
      $data['filter_year'] = $this->input->get('filter_year');
      $filter['mhd_register.year_id'] = $this->input->get('filter_year');
    } else {
      $data['filter_year'] = '';
    }

    // $list = $this->model_register->getLists($filter, $page, $config['per_page'], 'mhd_register.id', 'DESC');
    $list = $this->model_register->getListsByMember($filter, $page, $config['per_page'], null , null);
    $data['lists'] = array();
    if (count($list) > 0) {
      foreach ($list as $key => $value) {
        $value->member_no   = $this->model_member->getList($value->member_id)->member_no;
        $value->member_no   = substr($value->member_no, 0, 4) . sprintf('%04d', substr($value->member_no, 4));
        $value->member_name = $this->model_member->getList($value->member_id)->firstname . ' ' . $this->model_member->getList($value->member_id)->lastname;
        $value->program_register = $this->model_register_program->getListProgramByYear($value->id, $value->member_id, $value->company_id, $value->year_id);
        $value->email = $this->model_member->getList($value->member_id)->email;
        $value->hospital = $this->model_member->getList($value->member_id)->hospital;
        $payment_value = $this->model_payment->getPaymentByMemberIdRegisterId($value->member_id, $value->id);
        if (!empty($payment_value)) {
          foreach ($payment_value as $value_payment) {
            $payment_assign = $this->model_payment_assign->getPaymentById($value_payment->id);
            $filters = array('del' => 0, 'admin_id' => 0, 'status' => 0, 'payment_id' => $value_payment->id);
            $payment_assign_count = $this->model_payment_assign->getPayment_assigns($filters);
          }
          $value->payment_count = count($payment_assign_count);
          if (!empty($payment_assign)) {
            $value->payment_check = 1;
            } else {
              $value->payment_check = 0;
            }
          }
          $data['lists'][] = $value;
        }
      }
    $config['reuse_query_string'] = TRUE;
    $config['total_rows'] = $this->model_register->countLists($filter);
    $this->pagination->initialize($config);
    $data['pagination'] = $this->pagination->create_links();

    $this->load->template('admin/payment/list_register', $data);
  }

  public function lists_payment($member_id, $register_id)
  {
    $data = array();
    $data['heading_title'] = 'แจ้งชำระเงิน';
    $data['breadcrumbs'] = array(
      'ภาพรวม' => base_url('admin/home'),
      $data['heading_title'] => base_url('admin/payment')
    );
    $data['action'] = base_url('admin/payment/submit_admin/');
    $data['action_confirm'] = base_url('admin/payment/confirm/');

    $data['success'] = $this->session->has_userdata('success') ? $this->session->success : '';
    $this->session->unset_userdata('success');
    $data['error'] = $this->session->has_userdata('error') ? $this->session->error : '';
    $this->session->unset_userdata('error');
    $filter = array();
    $data['programs'] = $this->model_program->getLists($filter, 0, 99999999999);

    $filter = array('member_id' => $member_id, 'register_id' => $register_id);
    $list = $this->model_payment->getLists($filter);
    $data['lists'] = array();
    if (count($list) > 0) {
      foreach ($list as $key => $value) {
        $value->member_no = $this->model_member->getList($value->member_id)->member_no;
        $value->member_no = substr($value->member_no, 0, 4) . sprintf('%04d', substr($value->member_no, 4));
        $value->hospital = $this->model_member->getList($value->member_id)->hospital;
        $value->programs = $this->model_register_program->getProgramByPayment($value->id);
        $value->program_pay = json_decode($value->payment_program);
        $value->payments = $this->model_payment_assign->getPaymentById($value->id);
        $data['payment_info'] = $this->model_payment_assign->getPaymentById($value->id);
        $data['lists'][] = $value;
      }
    }

    // $config['total_rows'] = $this->model_payment->countLists($filter);
    // $this->pagination->initialize($config);
    // $data['pagination'] = $this->pagination->create_links();

    $this->load->template('admin/payment/list_payment', $data);
  }

  public function check_print($id = 0)
  {
    if ($id > 0) {
      $update = array('confirm_print' => 1);
      $result = $this->model_payment->edit($id, $update);
      if ($result)
        $this->session->set_userdata('success', 'Confirm print success');
      else
        $this->session->set_userdata('error', 'Cant print payment.');
    } else {
      $this->session->set_userdata('error', 'Confirm print fail, something has wrong.');
    }
    redirect('admin/payment/lists/page/');
  }

  public function submit_admin()
  {
    if ($this->input->server('REQUEST_METHOD') == 'POST') {
      $admin_approve = $this->input->post('admin_approve');
      $register_program_id = $this->input->post('register_program_id');
      if (isset($admin_approve)) {
        foreach ($admin_approve as $key => $value) {
          $update = array(
            'admin_approve' => $value,
            'date_modify'   => date('Y-m-d H:i:s')
          );
          $register_program_value = $this->model_register_program->edit($register_program_id[$key], $update);
        }
        if ($register_program_value)
          $this->session->set_userdata('success', 'Approve payment success');
        else
          $this->session->set_userdata('error', 'Cant approve payment.');
      } else {
        $this->session->set_userdata('error', 'Approve fail, something has wrong.');
      }
    }
    // redirect('admin/payment/lists/page/');
    redirect('admin/payment/lists_register/page/');
  }

  public function confirm($id = 0, $member_id, $register_id)
  {
    if ($id > 0) {
      $admin_info = json_decode($this->encryption->decrypt($this->session->admin_token));
      $update = array('status' => 1, 'date_modify' => date('Y-m-d H:i:s'), 'admin_id' => $admin_info->id);
      // $result = $this->model_payment->edit($id, $update);  
      $result = $this->model_payment_assign->edit($id, $update);
      if ($result)
        $this->session->set_userdata('success', 'Confirm payment success');
      else
        $this->session->set_userdata('error', 'Cant confirm payment.');
    } else {
      $this->session->set_userdata('error', 'Confirm fail, something has wrong.');
    }
    // redirect('admin/payment/lists/page/');
    redirect('admin/payment/lists_payment/' . $member_id . '/' . $register_id);
  }
  public function unconfirm($id = 0, $member_id, $register_id)
  {
    if ($id > 0) {
      $admin_info = json_decode($this->encryption->decrypt($this->session->admin_token));
      $update = array('status' => 0, 'date_modify' => date('Y-m-d H:i:s'), 'admin_id' => 0);
      // $result = $this->model_payment->edit($id, $update);
      $result = $this->model_payment_assign->edit($id, $update);
      if ($result)
        $this->session->set_userdata('success', 'Unconfirm payment success');
      else
        $this->session->set_userdata('error', 'Cant unconfirm payment.');
    } else {
      $this->session->set_userdata('error', 'Unconfirm fail, something has wrong.');
    }
    // redirect('admin/payment/lists/page/');
    redirect('admin/payment/lists_payment/' . $member_id . '/' . $register_id);
  }
}


/* End of file Home.php */
/* Location: ./application/controllers/Home.php */