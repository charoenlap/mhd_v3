<?php
defined('BASEPATH') or exit('No direct script access allowed');



class Member extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function lists($page=0)
  {
    $data = array();
    $data['heading_title'] = 'จัดการสมาชิก';
    $data['breadcrumbs'] = array(
      'ภาพรวม' => base_url('admin/home'),
      $data['heading_title'] => base_url('admin/member/lists/0')
    );

    $data['action'] = base_url('admin/member/lists/0');

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


    $config = array(
        'base_url' => base_url(). 'admin/member/lists/0',
        'full_tag_open' => '<div class="btn-group mt-3">',
        'full_tag_close' => '</div>',
        'cur_tag_open' => '<button type="button" class="btn btn-sm btn-primary">',
        'cur_tag_close' => '</button>',
        'num_tag_open' => '<button type="button" class="btn btn-sm btn-default">',
        'num_tag_close' => '</button>',
        'next_link' => '<button type="button" class="btn btn-sm btn-default">&gt;</button>',
        'prev_link' => '<button type="button" class="btn btn-sm btn-default">&lt;</button>',
        'per_page' => 10, // ! this is limit per page
    );

    $filter = array();
    $lists = $this->model_member->getLists($filter, $page, $config['per_page'], 'id', 'desc');
    $data['lists'] = array();
    foreach ($lists as $key => $value) {
      // ? ตรวจสอบการชำระเงิน
      // $value['payment_status'] = true;
      // $value['payment_status'] = false;
      $value->payment_status = null;

      $data['lists'][] = $value;
      
    }
    $config['total_rows'] = $this->model_year->countLists($filter);
   
    $this->pagination->initialize($config);
    $data['pagination'] = $this->pagination->create_links();

    $this->load->template('admin/member/index', $data);
  }

  public function edit($id)
  {
    $data = array();
    $data['heading_title'] = 'แก้ไขข้อมูลผู้สมัคร';
    $data['breadcrumbs'] = array(
      'ภาพรวม' => base_url('admin/home'),
      'จัดการสมาชิก' => base_url('admin/member/lists/0'),
      $data['heading_title'] => base_url('admin/member/edit/'.$id)
    ); 
    $data['action'] = base_url('admin/member/edit/'.$id);

    $data['member'] = $this->model_member->getList($id);
    $data['company'] = $this->model_company->getList($data['member']->id);


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

    if ($this->input->server('REQUEST_METHOD')=='POST') {
      $check = $this->model_member->findEmail($this->input->post('email'), $id);
      if ($check) {
        $update = array(
          'email' => $this->input->post('email'),
          'firstname' => $this->input->post('firstname'),
          'lastname' => $this->input->post('lastname'),
          'confirm' => $this->input->post('confirm'),
          'date_modify' => date('Y-m-d H:i:s')
        );
        if ($this->input->post('password')) {
          $update['password'] = md5($this->input->post('password'));
        } 
        $result_member = $this->model_member->edit($id, $update);
        


        // ! you can update system for (1user more company address)
        // ? find id address
        $company_info = $this->model_company->getListByIdMember($id);
        // ? update address
        $update = array(
          'name' => $this->input->post('hospital'),
          'room' => $this->input->post('room'),
          'address_1' => $this->input->post('address_1'),
          'address_2' => $this->input->post('address_2'),
          'district' => $this->input->post('district'),
          'country' => $this->input->post('country'),
          'province' => $this->input->post('province'),
          'postcode' => $this->input->post('postcode'),
          'date_modify' => date('Y-m-d H:i:s')
        );
        $result_company = $this->model_company->edit($company_info->id, $update);

        if ($result_member&&$result_company) {
          $this->session->set_userdata('success','แก้ไขข้อมูลผู้สมัครเรียบร้อยแล้ว');
          redirect('admin/member/lists/0/');
        } else {
          $this->session->set_userdata('error', 'เกิดข้อผิดพลาดในการแก้ไขข้อมูลผู้สมัคร');
          redirect('admin/member/edit/'.$id);
        }
        
      } else {
        $this->session->set_userdata('error', 'อีเมลนี้มีคนอื่นใช้งานแล้ว');
        redirect('admin/member/edit/'.$id);
      }
      
    }

    $this->load->template('admin/member/form', $data);
  }

  public function del($id) 
  {
    $this->model_member->del($id);
    $this->model_company->delmember($id); // ? update del all company
    $this->model_register->delmember($id); // ? update del register
    $this->model_register_program->delmember($id); // ? update del program register
    
    redirect('admin/member/lists/0');
  }


  public function sendEmailConfirm($id)
  {
    $member_info = $this->model_member->getList($id);

    $this->model_member->edit($member_info->id, array('date_modify'=>date('Y-m-d H:i:s')));
    $dataemail = array(
      'name' => $member_info->firstname.' '.$member_info->lastname,
      'email' => $member_info->email,
      'link' => base_url('member/forgot'),
      'link_confirm' => base_url('member/confirm?email='.$member_info->email)
    );
    $message = $this->load->view('email/register', $dataemail, true);
    $subject = 'สมัครสมาชิก โครงการประเมินคุณภาพทางห้องปฏิบัติการโดยองค์กรภายนอก';
    
    if ($this->email->smtpsend($member_info->email, $subject, $message)) {
      $this->session->set_userdata('success', 'ส่งอีเมล ยืนยันการสมัครให้ '.$member_info->email.' แล้ว');
    } else {
      $this->session->set_userdata('error', 'เกิดข้อผิดพลาดในการส่งอีเมล');
    }
    redirect('admin/member/lists/0');
  }

  public function sendEmailForgot($id)
  {
    $member_info = $this->model_member->getList($id);
    $code = rand(10000,99999);
    $this->model_member->edit($member_info->id, array('forget_code'=>$code,'date_modify'=>date('Y-m-d H:i:s')));
    $dataemail = array(
      'name' => $member_info->firstname.' '.$member_info->lastname,
      'link' => base_url('member/change?email='.$member_info->email.'&code='.$code)
    );
    $message = $this->load->view('email/forgot', $dataemail, true);
    $subject = 'ลืมรหัสผ่าน โครงการประเมินคุณภาพทางห้องปฏิบัติการโดยองค์กรภายนอก';
    if ($this->email->smtpsend($member_info->email, $subject, $message)) {
      $this->session->set_userdata('success', 'ส่งอีเมลรีเซทรหัสผ่านให้ '.$member_info->email.' แล้ว');
    } else {
      $this->session->set_userdata('error', 'เกิดข้อผิดพลาดในการส่งอีเมล');
    }
    redirect('admin/member/lists/0');
  }

}