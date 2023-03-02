<?php
defined('BASEPATH') or exit('No direct script access allowed');



class Admin_Permission extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $data = array();
    $data['heading_title'] = 'Admin Permission';
    $data['add_link'] = base_url('admin/admin_permission/add');
    $data['breadcrumbs'] = array(
      'ภาพรวม' => base_url('admin/home'),
      $data['heading_title'] => base_url('admin/admin_permission')
    );

    $data['action'] = base_url('admin/admin_permission');
    $data['lists'] = array();
    $filter = array();
    // $data['lists'] = $this->model_year->getLists($filter, 0, 99999999999);
    $lists = $this->model_admin_permission->getLists($filter, 0, 99999999999);
    foreach ($lists as $key => $value) {
      $program_json = json_decode($value->permission_program);
      $value->program_jsons = array();
      foreach ($program_json as $value_id) {
        $value->program_jsons[] = $this->model_program->getList($value_id);
      }
      // $filter = array('admin_id' => 0, 'mhd_report.year_id' => $value->id);
      // // $value->report_value = $this->model_report->getReport($filter);
      // $value->report_value = $this->model_report->getReportNavBar($filter);
      $data['lists'][]  = $value;
    }

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

    $this->load->template('admin/admin_permission/index', $data);
  }

  public function add()
  {
    $data = array();
    $data['heading_title'] = 'Permission Add';
    $data['action'] = base_url('admin/admin_permission/add');
    $data['breadcrumbs'] = array(
      'ภาพรวม'                => base_url('admin/home'),
      'Admin'                 => base_url('admin/admin_permission'),
      $data['heading_title']  => base_url('admin/admin_permission/add')
    );
    $filter = array();
    $data['program_list'] = $this->model_program->getLists($filter, 0, 9999999999);
    if ($this->input->post()) {
      $program_json = json_encode($this->input->post('program_permission'));
      $insert_permission = array(
        'name'                =>    $this->input->post('name'),
        'permission_program'  =>    $program_json,
        'date_added'          =>    date('Y-m-d H:i:s'),
        'del'                 =>    "0"
      );
      $insert_perm = $this->model_admin_permission->add($insert_permission);
      if ($insert_perm) {
        $this->session->set_userdata('success', 'บันทึกข้อมูลเสร็จสิ้น');
      } else {
        $this->session->set_userdata('error', 'บันทึกข้อมูลผิดพลาดโปรดลองใหม่อีกครั้ง');
      }
      redirect('admin/admin_permission');
    }
    $this->load->template('admin/admin_permission/form', $data);
  }

  public function edit($id)
  {
    $data = array();
    $data['permission_detail']  = $this->model_admin_permission->getList($id);
    $data['lists_program'] = json_decode($data['permission_detail']->permission_program);
    $data['heading_title'] = 'Permission Add';
    $data['action'] = base_url('admin/admin_permission/edit/' . $id);
    $data['breadcrumbs'] = array(
      'ภาพรวม'                => base_url('admin/home'),
      'Admin'                 => base_url('admin/admin_permission'),
      $data['heading_title']  => base_url('admin/admin_permission/edit/' . $id)
    );
    $filter = array();
    $data['program_list'] = $this->model_program->getLists($filter, 0, 9999999999);
    if ($this->input->post()) {
      $program_json = json_encode($this->input->post('program_permission'));
      $insert_permission = array(
        'name'                =>    $this->input->post('name'),
        'permission_program'  =>    $program_json,
        'date_modify'         =>    date('Y-m-d H:i:s'),
      );
      $insert_perm = $this->model_admin_permission->edit($id, $insert_permission);
      if ($insert_perm) {
        $this->session->set_userdata('success', 'บันทึกข้อมูลเสร็จสิ้น');
      } else {
        $this->session->set_userdata('error', 'บันทึกข้อมูลผิดพลาดโปรดลองใหม่อีกครั้ง');
      }
      redirect('admin/admin_permission');
    }
    $this->load->template('admin/admin_permission/form', $data);
  }
  public function del($id)
  {
    $this->model_admin_permission->del($id);
    $this->session->set_userdata('success', 'ลบข้อมูลเสร็จสิ้น');
    redirect('admin/admin_permission');
  }
}
