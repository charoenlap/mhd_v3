<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Program extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function lists($page = 0)
  {
    $data = array();
    $data['heading_title'] = 'โปรแกรมทั้งหมด';
    $data['breadcrumbs'] = array(
      'ภาพรวม' => base_url('admin/home'),
      'โปรแกรมทั้งหมด' => base_url('admin/program/lists/page/')
    );

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
      'uri_segment' => 4,
      'base_url' => base_url() . 'admin/program/lists/',
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
    $admin_detail  = json_decode($this->encryption->decrypt($this->session->admin_token));
    $adimn_id = $admin_detail->id;
    $program_list_perm = $this->model_admin->getListByAdmin($adimn_id);
    $program_list = json_decode($program_list_perm->permission_program,true);
    $filter = array();
    $data['lists'] = array();
    foreach ($program_list as $vals){
      $data['lists'][] = $this->model_program->getList($vals);
    }
    // $data['lists'] = $this->model_program->getLists($filter, $page, $config['per_page'], 'id', 'ASC');

    $filter = array();
    $data['lists_program'] = $this->model_register_program->getLists($filter, 0, 999999999);
    $data['program_register'] = array();
    foreach ($data['lists_program'] as $values) {
      $data['program_register'][] = $values->program_id;
    }
    $data['count_program'] = array_count_values($data['program_register']);
    $config['total_rows'] = $this->model_program->countLists($filter);
    $this->pagination->initialize($config);
    $data['pagination'] = $this->pagination->create_links();

    $this->load->template('admin/program/index', $data);
  }

  public function add()
  {
    $data = array();
    $data['heading_title'] = 'เพิ่มโปรแกรม';
    $data['breadcrumbs'] = array(
      'ภาพรวม' => base_url('admin/home'),
      'โปรแกรมทั้งหมด' => base_url('admin/program/lists/page/'),
      'เพิ่มโปรแกรม' => base_url('admin/program/add')
    );
    $data['action'] = base_url('admin/program/add');
    $data['list'] = (object)array('name' => '');

    if ($this->input->server('REQUEST_METHOD') == 'POST') {
      $post = $this->input->post();
      $post['slug'] = url_title(convert_accented_characters($post['name']), 'dash', true);
      $post['date_added'] = date('Y-m-d H:i:s');
      $result = $this->model_program->add($post);
      if ($result == 1) {
        $this->session->set_userdata('success', 'Save successful');
      } else {
        $this->session->set_userdata('error', 'Save fail, something has wrong.');
      }
      redirect('admin/program/lists/page/');
    }

    $data['data']['structure'] = json_encode(array());

    $this->load->template('admin/program/form', $data);
  }

  public function edit($id)
  {
    $data = array();
    $data['heading_title'] = 'แก้ไขโปรแกรม';
    $data['breadcrumbs'] = array(
      'ภาพรวม' => base_url('admin/home'),
      'โปรแกรมทั้งหมด' => base_url('admin/program/lists/page/'),
      'แก้ไขโปรแกรม' => base_url('admin/program/edit/' . $id)
    );
    $data['action'] = base_url('admin/program/edit/' . $id);
    $data['list'] = (object)array('name' => '');

    $data['list'] = $this->model_program->getList($id);

    if ($this->input->server('REQUEST_METHOD') == 'POST') {
      $post = $this->input->post();
      // $post['slug'] = url_title(convert_accented_characters($post['name']), 'dash', true);
      $post['date_modify'] = date('Y-m-d H:i:s');
      $result = $this->model_program->edit($id, $post);
      if ($result == 1) {
        $this->session->set_userdata('success', 'Save successful');
      } else {
        $this->session->set_userdata('error', 'Save fail, something has wrong.');
      }
      redirect('admin/program/lists/page/');
    }

    $this->load->template('admin/program/form', $data);
  }

  public function del($id)
  {
    $result = $this->model_program->del($id);
    if ($result == 1) {
      $this->session->set_userdata('success', 'Delete successful');
    } else {
      $this->session->set_userdata('error', 'Delete fail, something has wrong.');
    }
    redirect('admin/program/lists/page/');
  }



  public function setting($id)
  {
    $program_info = $this->model_program->getList($id);
    $data = array();
    $data['heading_title'] = 'ตั้งค่าโปรแกรม ' . $program_info->name;
    $data['breadcrumbs'] = array(
      'ภาพรวม' => base_url('admin/home'),
      'โปรแกรมทั้งหมด' => base_url('admin/program/lists/page/'),
      'แก้ไขโปรแกรม' => base_url('admin/program/edit/' . $id),
      'ตั้งค่าโปรแกรม' => base_url('admin/program/setting/' . $id)
    );
    $data['action'] = base_url('admin/program/setting/' . $id);

    if ($this->input->server('REQUEST_METHOD') == 'POST') {
      $post = $this->input->post();
      // if ($post['tool'])
      // echo '<pre>';
      // print_r($post['tool']);
      // echo '</pre>';
      // exit();
      if (count($post['tool']['code']>0)) {
        // $this->model_program_tool->delByProgram($id);
        foreach ($post['tool']['code'] as $key => $value) {
          $dataTool = array(
            // 'program_id' => $id,
            'code'       => $value,
            'name'       => $post['tool']['name'][$key],
            'section'    => $post['tool']['section'][$key]
          );
          $result = $this->model_program_tool->edit($key,$dataTool);
        }
      }
      if (count($post['instrument']['code']>0)) {
        // $this->model_program_infection->delByProgram($id);
        foreach ($post['instrument']['code'] as $key => $value) {
          $dataInstrument = array(
            // 'program_id'  => $id,
            'code'        => $value,
            'name'        => $post['instrument']['name'][$key],
            'section'     => $post['instrument']['section'][$key],
            'event'       => json_encode($post['instrument']['event'][$key]),
            'fix_decimal' => $post['instrument']['fix_decimal'][$key]
          );
          $insertInstrument = $this->model_program_infection->edit($key,$dataInstrument);
        }
      }
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

    $data['id'] = $id;

    // default tool
    $filter = array('program_id' => $id);
    $data['tools'] = $this->model_program_tool->getLists($filter, 0, 9999999999,'code','ASC');

    // default instrument
    $filter = array('program_id' => $id);
    $data['instruments'] = $this->model_program_infection->getLists($filter, 0, 9999999999, 'name', 'ASC');


    $show_principle = array(2, 3);
    $data['show_principle'] = $show_principle;
    if (in_array($id, $show_principle)) {
      $filter = array('program_id' => $id);
      $data['principles'] = $this->model_program_principle->getLists($filter, 0, 9999999999);
      // $filter = array('program_id'=>$id);
      // $data['instruments'] = $this->model_program_infection->getLists($filter, 0, 9999999999, 'name', 'ASC');
    }

    // list tool in instrument (Only EQAC)
    if ($id == 1) {
      // Only EQAC
      $filter = array('program_id' => $id, 'section' => 1);
      $data['tools_eqac'] = $this->model_program_tool->getLists($filter, 0, 9999999999);
    }

    $this->load->template('admin/program/setting', $data);
  }
  public function delTool($id,$back_id){
    $delete = $this->model_program_tool->del($id);
    redirect('admin/program/setting/'.$back_id);
  }
  public function delInstruments($id,$back_id){
    $delete = $this->model_program_infection->del($id);
    redirect('admin/program/setting/'.$back_id);
  }
  public function addTool($id){
    $data = array(
      'program_id'  => $id,
      'code'        => '0',
    );
    $insertProgram = $this->model_program_tool->add($data);
    if($insertProgram){
      redirect('admin/program/setting/'.$id);
    }
  }
  public function addInstruments($id){
    $data = array(
      'program_id'  => $id,
      'code'        => '0',
      'fix_decimal' => '0'
    );
    $insertProgram = $this->model_program_infection->add($data);
    if($insertProgram){
      redirect('admin/program/setting/'.$id);
    }
  }
}


/* End of file Home.php */
/* Location: ./application/controllers/Home.php */