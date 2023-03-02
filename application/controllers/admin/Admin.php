<?php
defined('BASEPATH') or exit('No direct script access allowed');



class Admin extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    if($this->session->has_userdata('admin_token')){
      $data = array();
      $data['heading_title'] = 'Admin';
      $data['add_link'] = base_url('admin/admin/add');
      $data['breadcrumbs'] = array(
        'ภาพรวม' => base_url('admin/home'),
        $data['heading_title'] => base_url('admin/admin')
      );
      $data['admin_session'] = json_decode($this->encryption->decrypt($this->session->admin_token));
      $data['action'] = base_url('admin/admin');
      $data['lists'] = array();
      $filter = array();
      // $data['lists'] = $this->model_year->getLists($filter, 0, 99999999999);
      $data['lists'] = $this->model_admin->getLists($filter, 0, 99999999999);
      // foreach ($lists as $key => $value) {
      //   $filter = array('admin_id' => 0, 'mhd_report.year_id' => $value->id);
      //   // $value->report_value = $this->model_report->getReport($filter);
      //   $value->report_value = $this->model_report->getReportNavBar($filter);
      //   $data['lists'][]  = $value;
      // }
  
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
  
      $this->load->template('admin/admin/index', $data);
    } else {
      redirect('admin/user');
    }

  }

  public function add()
  {
    if($this->session->has_userdata('admin_token')){
      $data = array();
      $data['heading_title'] = 'Admin Add';
      $data['action'] = base_url('admin/admin/add');
      $data['breadcrumbs'] = array(
        'ภาพรวม'                => base_url('admin/home'),
        'Admin'                 => base_url('admin/admin'),
        $data['heading_title']  => base_url('admin/admin/add')
      );
      $data['admin_author'] = $this->model_admin->getAuthority();
      $filter = array();
      $data['permission_list'] = $this->model_admin_permission->getLists($filter,0,9999999999);
      if($this->input->post()){
        $insert_admin = array(
          'username'      =>  $this->input->post('username'),
          'password'      =>  md5($this->input->post('password')),
          'authority_id'  =>  $this->input->post('authority'),
          'permission_id' =>  $this->input->post('permission_id'),
          'date_added'    =>  date('Y-m-d H:i:s'),
          'del'           =>  "0"
        );
        $insert_admin_new = $this->model_admin->add($insert_admin);
        if($insert_admin_new){
          $this->session->set_userdata('success', 'บันทึกข้อมูลเสร็จสิ้น');
        } else {
          $this->session->set_userdata('error', 'บันทึกข้อมูลผิดพลาดโปรดลองใหม่อีกครั้ง');
        }
        redirect('admin/admin');
      }
      $this->load->template('admin/admin/form',$data);
    } else {
      redirect('admin/user');
    }
  }

  public function edit($id)
  {
    if($this->session->has_userdata('admin_token')){
      $data = array();
      $data['heading_title'] = 'Admin edit';
      $data['action'] = base_url('admin/admin/edit/'.$id);
      $data['breadcrumbs'] = array(
        'ภาพรวม'                => base_url('admin/home'),
        'Admin'                 => base_url('admin/admin'),
        $data['heading_title']  => base_url('admin/admin/edit/'.$id)
      );
      $data['admin_author'] = $this->model_admin->getAuthority();
      $data['admin_detail'] = $this->model_admin->getList($id);
      $filter = array();
      $data['permission_list'] = $this->model_admin_permission->getLists($filter,0,9999999999);
      if($this->input->post()){
        $edit_admin = array(
          'username'      =>  $this->input->post('username'),
          'authority_id'  =>  $this->input->post('authority'),
          'permission_id' =>  $this->input->post('permission_id'),
          'date_modify'   =>  date('Y-m-d H:i:s'),
          'del'           =>  "0"
        );
        $edit_admin_new = $this->model_admin->edit($id,$edit_admin);
        if($edit_admin_new){
          $this->session->set_userdata('success', 'บันทึกข้อมูลเสร็จสิ้น');
        } else {
          $this->session->set_userdata('error', 'บันทึกข้อมูลผิดพลาดโปรดลองใหม่อีกครั้ง');
        }
        redirect('admin/admin');
      }
      $this->load->template('admin/admin/form',$data);
    } else {
      redirect('admin/user');
    }
  }
  public function del($id)
  {
    $this->model_admin->del($id);
    $this->session->set_userdata('success', 'ลบข้อมูลเสร็จสิ้น');
    redirect('admin/admin');
  }

  public function programs($status=array()){
    $data = array();
    $data['heading_title'] = 'จัดการสถานะโปรแกรม (สมัคร)';
    if($status){
      $data['success'] = "บันทึกข้อมูลเสร็จสิ้น";
    }
    $data['breadcrumbs'] = array(
      'ภาพรวม' => base_url('admin/home'),
      $data['heading_title'] => base_url('admin/admin/programs')
    );

    $filter = array();
    $data['lists'] = $this->model_program->getLists($filter,0,999999);

    if($_SERVER['REQUEST_METHOD'] == "POST"){
      foreach ($_POST['programs_status'] as $key => $value) {
        $dataUpdate = array(
          'programs_status' => $value
        );
        $update = $this->model_program->edit($key,$dataUpdate);
      }
      redirect('admin/admin/programs/success');
    }

    $this->load->template('admin/admin/programs',$data);
  }
}
