<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Member extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
  }
  public function create_excel(){
    $year = $_POST['export_year'];

    $this->load->model('model_member');
    $this->load->model('model_year');
    $this->load->model('model_program');

    $dataPrograms = $this->model_program->getLists($filters, 0, 99999999999);
    $datayear     = $this->model_year->getYear($year);
    $data         = $this->model_member->reportMemberList($datayear->id);
    // echo "<pre>";
    // print_r($data);
    // echo "</pre>";


    // export
    $filName = "file_export/export.csv";
    $objWrite = fopen("file_export/export.csv", "w");
    fputs($objWrite,(chr(0xEF).chr(0xBB).chr(0xBF)));
    $dataHead = array(array('มหายเลขสมาชิกเดิม','วันที่สมัครรับ เอกสาร','ชื่อโรงพยาบาล','ชื่อ','นามสกุล','เลขที่','หมู่','ถนน','ตำบล','อำเภอ','จังหวัด','รหัสไปรษณีย์','ตึก','ชั้น','โทรศัพท์','FAX','E-mail','จำนวนเตียง','ประเภทโรงพยาบาล','สังกัด'));
    for ($i = 0; $i <= 5; $i++) {
        foreach($dataPrograms as $val){
            array_push($dataHead[0],$val->name);
        }
    }
    $dataBody = array();
    foreach($data as $value){
      $dataBody[] = array(
        $value->member_no,
        ($value->date_added == '' || $value->date_added == 0?"ยังไม่ได้รับการยืนยันตัวตน":$value->date_added),
        $value->hospital,
        $value->firstname,
        $value->lastname,
        $value->address_1,
        '',
        '',
        $value->district,
        $value->country,
        $value->province,
        $value->postcode,
        '',
        '',
        $value->telephone,
        ($value->fax == ''?"ไม่ได้ระบุเบอร์":$value->fax),
        $value->email,
        ($value->total_bed == 0?"ไม่ได้ระบุจำนวนเตียง":($value->total_bed == 1?"น้อยกว่า 100 เตียง":($value->total_bed == 2?"101 - 300 เตียง":($value->total_bed == 3?"301 - 500 เตียง":($value->total_bed == 4?"มากกว่า 500 เตียง":"ไม่ได้ระบุจำนวนเตียง"))))),
        ($value->type_hospital == ''?"ไม่ได้ระบุประเภท":$value->type_hospital),
        '',
        $value->sub_member_id_eqac,
        $value->sub_member_id_eqah,
        $value->sub_member_id_eqat,
        $value->sub_member_id_eqap,
        $value->sub_member_id_beqam,
        $value->sub_member_id_heqam,
        $value->sub_member_id_uceqam,
        $value->sub_member_id_syphilis,
        $value->sub_member_id_hbv,
        $value->sub_member_id_gram,
        $value->sub_member_id_afb,
        $value->sub_member_id_iden,
        $value->room_eqac,
        $value->room_eqah,
        $value->room_eqat,
        $value->room_eqap,
        $value->room_beqam,
        $value->room_heqam,
        $value->room_uceqam,
        $value->room_syphilis,
        $value->room_hbv,
        $value->room_gram,
        $value->room_afb,
        $value->room_iden,
        $value->eqac, 
        $value->eqah,
        $value->eqat,
        $value->eqap, 
        $value->beqam, 
        $value->heqam, 
        $value->uceqam, 
        $value->syphilis, 
        $value->hbv, 
        $value->gram, 
        $value->afb, 
        $value->iden, 
        $value->eqac_2, 
        $value->eqah_2,
        $value->eqat_2,
        $value->eqap_2, 
        $value->beqam_2, 
        $value->heqam_2, 
        $value->uceqam_2, 
        $value->syphilis_2, 
        $value->hbv_2, 
        $value->gram_2, 
        $value->afb_2, 
        $value->iden_2, 
        $value->eqac_3, 
        $value->eqah_3,
        $value->eqat_3,
        $value->eqap_3, 
        $value->beqam_3, 
        $value->heqam_3, 
        $value->uceqam_3, 
        $value->syphilis_3, 
        $value->hbv_3, 
        $value->gram_3, 
        $value->afb_3, 
        $value->iden_3, 
        $value->eqac_4, 
        $value->eqah_4,
        $value->eqat_4,
        $value->eqap_4, 
        $value->beqam_4, 
        $value->heqam_4, 
        $value->uceqam_4, 
        $value->syphilis_4, 
        $value->hbv_4, 
        $value->gram_4, 
        $value->afb_4, 
        $value->iden_4,
      );
    }
    fputcsv($objWrite,array('ผู้ทำการสมัครสมาชิก','','','','','ที่อยู่','','','','','','','','','','','','','','','หมายเลขสมาชิกสมาชิก','','','','','','','','','','','','ชื่อห้องปฏิบัติการ','','','','','','','','','','','','ผู้รับผิดชอบ','','','','','','','','','','','','ประกาศนีย์บัตร','','','','','','','','','','','','ผู้ชำระเงิน','','','','','','','','','','','','ที่อยู่จัดส่งใบเสร็จ','','','','','','','','','','','',));
    foreach($dataHead as $fields){
      fputcsv($objWrite,$fields);
    }
    foreach($dataBody as $fieldsdata){
      fputcsv($objWrite,$fieldsdata);
    }
    fclose($objWrite);
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="รายการผู้สมัครหลัก_'.date("F").'_'. $year_filter.'.csv"');
    readfile("file_export/export.csv");
  }
  public function create_excel_bak()
  {
    $data = array();
    $this->load->model('model_member');
    $this->load->model('model_program');
    $this->load->model('model_year');
    $filter = array();
    if ($this->input->post('export_year')) {
      $year_filter = $this->input->post('export_year');
      $filter['year'] = $this->input->post('export_year');
      $data['year_filter'] = $this->input->post('export_year');
    } else {
      $year_filter = '';
    }

    // $fileName = 'employee.xlsx';
    $lists = $this->model_member->getListsByYear($filter, '', '', 'id', 'desc');
    // $lists = $this->model_member->getListsByYearNew($filter, '', '', 'id', 'desc');
    $filter_year = array();
    $year_lists = $this->model_year->getLists($filter_year, 0, 99999999999);
    $filters = array();
    $data['programs'] = $this->model_program->getLists($filters, 0, 99999999999);
    $list_vals = array();
    foreach ($lists as $list_val) {
      foreach ($year_lists as $year_list) {
        if ($year_list->year == $year_filter) {
          $filters_years = $year_list->id;
        }
      }
      $list_regis = $this->model_register_program->getListProgramByMemberIdYear($list_val->id, $filters_years);
      $list_vals[] = array(
        'list_value' =>   $list_val,
        'list_regis'  =>  $list_regis
      );
    }

    $data['list_value'] = array();
    $data['list_register'] = array();
    foreach ($list_vals as $vals) {
      $data['list_value'][] = $vals['list_value'];
      $data['list_register'][] = $vals['list_regis'];
    }
    
    $this->load->view('admin/member/create_excel', $data);
  }
  public function show()
  {
    $this->load->model('model_member');
    $this->load->model('model_program');
    $this->load->model('model_year');
    $data['action'] = base_url('admin/member/show/');
    $data['action_export'] = base_url('admin/member/create_excel');

    $filter = array();
    if ($this->input->post('export_year')) {
      $data['filter_year'] = $this->input->post('export_year');
      $filter['year'] = $this->input->post('export_year');
      $filter_years = $this->input->post('export_year');
    } else {
      $data['filter_year'] = '';
    }
    $filter_year = array();
    $year_lists = $this->model_year->getLists($filter_year, 0, 99999999999);
    $lists = $this->model_member->getListsByYear($filter, '', '', 'id', 'desc');
    $filters = array();
    $data['programs'] = $this->model_program->getLists($filters, 0, 99999999999);
    $programs = $this->model_program->getLists($filters, 0, 99999999999);
    $data['lists'] = array();
    $data['lists_item'] = array();
    foreach ($lists as $key => $value) {
      foreach ($year_lists as $year_list) {
        if ($year_list->year == $filter_years) {
          $filters_years = $year_list->id;
        }
      }
      $value->payment_status = null;
      // $list_regis = $this->model_register_program->getListProgramByMemberProgramId($value->id,$program_id);
      $list_regis = $this->model_register_program->getListProgramByMemberIdYear($value->id, $filters_years);
      // $list_regis = $this->model_register_program->getListProgram($value->id);

      // $data['lists_item'][] = $list_regis;

      $data['lists'][] = array(
        'list_value' => $value,
        'list_regis'  =>  $list_regis
      );
    }
    // return $this->load->template('admin/member/export', $data);
    $this->load->view('admin/member/export', $data);
  }
  public function lists($page = 0)
  {
    $data = array();
    $data['heading_title'] = 'จัดการสมาชิก';
    $data['breadcrumbs'] = array(
      'ภาพรวม' => base_url('admin/home'),
      $data['heading_title'] => base_url('admin/member/lists/' . $page)
    );

    // $data['action'] = base_url('admin/member/lists/' . $page);
    $data['action'] = base_url('admin/member/lists/');
    $data['action_export'] = base_url('admin/member/show/');

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
    $filter = array();
    $data['year_info'] = $this->model_year->getLists($filter, 0, 9999999999);
    $filter = array();

    // if ($this->input->post('filter_memberno')) {
    //   $data['filter_memberno'] = $this->input->post('filter_memberno');
    //   $filter['member_no'] = $this->input->post('filter_memberno');
    // } else {
    //   $data['filter_memberno'] = '';
    // }
    // if ($this->input->post('filter_email')) {
    //   $data['filter_email'] = $this->input->post('filter_email');
    //   $filter['email'] = $this->input->post('filter_email');
    // } else {
    //   $data['filter_email'] = '';
    // }
    // if ($this->input->post('filter_name')) {
    //   $data['filter_name'] = $this->input->post('filter_name');
    //   $filter['firstname'] = $this->input->post('filter_name');
    // } else {
    //   $data['filter_name'] = '';
    // }
    // if ($this->input->post('filter_year')) {
    //   $data['filter_year'] = $this->input->post('filter_year');
    //   $filter['year'] = $this->input->post('filter_year');
    // } else {
    //   $data['filter_year'] = '';
    // }
    if ($this->input->get('filter_memberno')) {
      $data['filter_memberno'] = $this->input->get('filter_memberno');
      $filter['member_no'] = $this->input->get('filter_memberno');
    } else {
      $data['filter_memberno'] = '';
    }
    if ($this->input->get('filter_email')) {
      $data['filter_email'] = $this->input->get('filter_email');
      $filter['email'] = $this->input->get('filter_email');
    } else {
      $data['filter_email'] = '';
    }
    if ($this->input->get('filter_name')) {
      $data['filter_name'] = $this->input->get('filter_name');
      $filter['firstname'] = $this->input->get('filter_name');
    } else {
      $data['filter_name'] = '';
    }
    if ($this->input->get('filter_year')) {
      $data['filter_year'] = $this->input->get('filter_year');
      $filter['year'] = $this->input->get('filter_year');
    } else {
      $data['filter_year'] = '';
    }

    $config = array(
      'uri_segment' => 4,
      'base_url' => base_url() . 'admin/member/lists/',
      'full_tag_open' => '<div class="btn-group pagination-group mt-3">',
      'full_tag_close' => '</div>',
      'cur_tag_open' => '<button type="button" class="btn btn-primary">',
      'cur_tag_close' => '</button>',
      'num_tag_open' => '<button type="button" class="btn btn-default">',
      'num_tag_close' => '</button>',
      'next_link' => '<button type="button" class="btn btn-default btn-prev">&gt;</button>',
      'prev_link' => '<button type="button" class="btn btn-default btn-next">&lt;</button>',
      'first_link' => '<button type="button" class="btn btn-default btn-prev">First</button>',
      'last_link' => '<button type="button" class="btn btn-default btn-prev">Last</button>',
      'per_page' => 10, // ! this is limit per page
    );
    $lists = $this->model_member->getLists($filter, $page, $config['per_page'], 'year', 'desc');
    $data['lists'] = array();
    foreach ($lists as $key => $value) {
      // ? ตรวจสอบการชำระเงิน
      // $value['payment_status'] = true;
      // $value['payment_status'] = false;
      $value->payment_status = null;
      $data['lists'][] = $value;
    }
    $config['reuse_query_string'] = TRUE;
    $config['total_rows'] = $this->model_member->countLists($filter);
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
      $data['heading_title'] => base_url('admin/member/edit/' . $id)
    );
    $data['action'] = base_url('admin/member/edit/' . $id);

    $data['member'] = $this->model_member->getList($id);
    if (isset($data['member']->id)) {
      // $data['company'] = $this->model_company->getList($data['member']->id);
      $data['company'] = $this->model_company->getListByIdMember($data['member']->id);
      if (!isset($data['company']->id)) {
        $data['company']            = new stdClass();
        $data['company']->name      = '';
        $data['company']->room      = '';
        $data['company']->address_1 = '';
        $data['company']->address_2 = '';
        $data['company']->district  = '';
        $data['company']->country   = '';
        $data['company']->province  = '';
        $data['company']->postcode  = '';
      }
    } else {
      $data['member']            = new stdClass();
      $data['member']->email     = '';
      $data['member']->firstname = '';
      $data['member']->lastname  = '';
      $data['member']->telephone = '';
      $data['member']->confirm   = 0;
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

    if ($this->input->server('REQUEST_METHOD') == 'POST') {
      $check = $this->model_member->findEmail($this->input->post('email'), $id);
      if ($check) {
        $update = array(
          'email'       => $this->input->post('email'),
          'firstname'   => $this->input->post('firstname'),
          'lastname'    => $this->input->post('lastname'),
          'telephone'   => $this->input->post('telephone'),
          'confirm'     => $this->input->post('confirm'),
          'date_modify' => date('Y-m-d H:i:s')
        );
        if ($this->input->post('password')) {
          $update['password'] = md5($this->input->post('password'));
        }
        $result_member = $this->model_member->edit($id, $update);



        // ! you can update system for (1user more company address)
        // ? find id address
        $company_info = $this->model_company->getListByIdMember($id);
        if (isset($company_info->id) && $company_info->id > 0) {
          // ? update address
          if($this->input->post('type_hospital') !== "อื่นๆ"){
            $type_hospital_other = "";
          }else{
            $type_hospital_other = $this->input->post("type_hospital_other");
          }
          $update = array(
            'name'                => $this->input->post('hospital'),
            'type_hospital'       => $this->input->post('type_hospital'),
            'type_hospital_other' => $type_hospital_other,
            'total_bed'           => $this->input->post('total_bed'),
            'room'                => $this->input->post('room'),
            'address_1'           => $this->input->post('address_1'),
            'address_2'           => $this->input->post('address_2'),
            'district'            => $this->input->post('district'),
            'country'             => $this->input->post('country'),
            'province'            => $this->input->post('province'),
            'postcode'            => $this->input->post('postcode'),
            'date_modify'         => date('Y-m-d H:i:s')
          );
          $result_company = $this->model_company->edit($company_info->id, $update);
        } else {
          // ? update address
          $insert = array(
            'member_id'           => $id,
            'name'                => $this->input->post('hospital'),
            'type_hospital'       => $this->input->post('type_hospital'),
            'type_hospital_other' => $this->input->post('type_hospital_other'),
            'total_bed'           => $this->input->post('total_bed'),
            'room'                => $this->input->post('room'),
            'address_1'           => $this->input->post('address_1'),
            'address_2'           => $this->input->post('address_2'),
            'district'            => $this->input->post('district'),
            'country'             => $this->input->post('country'),
            'province'            => $this->input->post('province'),
            'postcode'            => $this->input->post('postcode'),
            'date_modify'         => date('Y-m-d H:i:s')
          );
          $result_company = $this->model_company->add($insert);
        }


        if ($result_member && $result_company) {
          $this->session->set_userdata('success', 'แก้ไขข้อมูลผู้สมัครเรียบร้อยแล้ว');
          redirect('admin/member/lists/0/');
        } else {
          $this->session->set_userdata('error', 'เกิดข้อผิดพลาดในการแก้ไขข้อมูลผู้สมัคร');
          redirect('admin/member/edit/' . $id);
        }
      } else {
        $this->session->set_userdata('error', 'อีเมลนี้มีคนอื่นใช้งานแล้ว');
        redirect('admin/member/edit/' . $id);
      }
    }

    $this->load->template('admin/member/form', $data);
  }

  public function edit_register($id, $year)
  {
    $data = array();
    $data['heading_title'] = 'แก้ไขโปรแกรมที่สมัคร';
    $data['breadcrumbs'] = array(
      'ภาพรวม' => base_url('admin/home'),
      'จัดการสมาชิก' => base_url('admin/member/lists/0'),
      $data['heading_title'] => base_url('admin/member/edit_register/' . $id . '/' . $year)
    );
    $data['action'] = base_url('admin/member/edit_register/' . $id . '/' . $year);

    $data['member'] = $this->model_member->getList($id);
    if (isset($data['member']->id)) {
      // $data['company'] = $this->model_company->getList($data['member']->id);
      $data['company'] = $this->model_company->getListByIdMember($data['member']->id);
      if (!isset($data['company']->id)) {
        $data['company']            = new stdClass();
        $data['company']->name      = '';
        $data['company']->room      = '';
        $data['company']->address_1 = '';
        $data['company']->address_2 = '';
        $data['company']->district  = '';
        $data['company']->country   = '';
        $data['company']->province  = '';
        $data['company']->postcode  = '';
      }
    } else {
      $data['member']            = new stdClass();
      $data['member']->email     = '';
      $data['member']->firstname = '';
      $data['member']->lastname  = '';
      $data['member']->telephone = '';
      $data['member']->confirm   = 0;
    }
    $filter = array();
    $data['programs'] = $this->model_program->getLists($filter, 0, 99999999999);
    $year_id = $this->model_year->getYear($year);
    $year_id_info = $year_id->id;
    $register_info = $this->model_register_program->getListProgramByMemberIdByYear($id, $year_id_info);
    $data['member_info'] = $this->model_member->getListById($id);
    $data['test_register'] = array();
    $data['program_id_register'] = array();
    foreach ($register_info as $key_regis => $val_regis) {
      $data['total_price'] += $val_regis->price;
      $data['test_register'][] = $val_regis;
      $data['program_id_register'][] = $val_regis->program_id;
    }
    $data['program_register_value'] = array();
    foreach ($data['programs'] as $program_value) {
      $data['program_register_value'][] = $program_value->id;
    }
    $program_register_program = array_diff($data['program_register_value'], $data['program_id_register']);
    $data['program_value'] = array();
    foreach ($program_register_program as $value_program) {
      $data['program_value'][] =  $this->model_program->getList($value_program);
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

    if ($this->input->server('REQUEST_METHOD') == 'POST') {
      $post = $this->input->post();
      foreach ($this->input->post('program_register') as $key_val => $values) {
        $update = array(
          'program_id'    =>  $values,
          'bill_company'  =>  $post['bill_company'][$key_val],
          'bill_name'     =>  $post['bill_name'][$key_val],
          'bill_contact'  =>  $post['bill_contact'][$key_val],
          'bill_address'  =>  $post['bill_address'][$key_val],
          'bill_title_th' =>  $post['bill_title_th'][$key_val],
          'bill_title_en' =>  $post['bill_title_en'][$key_val],
          'date_modify'   =>  date('Y-m-d H:i:s')
        );
        $edit_register_test = $this->model_register_program->edit($post['register_program_id'][$key_val], $update);
      }
      $total_values = 0;
      $member_info = $this->model_member->getList($id);
      $register_id = $this->model_register->getRegisterByYearAndMember($id, $year_id_info);
      $payment_id_info  = $this->model_payment->getPaymentByMemberIdRegister($id, $register_id->id)->id;
      if (count($post['new_test_id']) > 0) {
        foreach ($post['new_test_id'] as $value_test_id) {
          $program_price_register  = $this->model_program->getList($value_test_id)->price;
          $add_register = array(
            'company_id'    =>  $member_info->company_id,
            'register_id'   =>  $register_id->id,
            'parent_id'     =>  0,
            'member_id'     =>  $id,
            'year_id'       =>  $year_id_info,
            'program_id'    =>  $value_test_id,
            'price'         =>  $program_price_register,
            'payment_id'    =>  $payment_id_info,
            'send_slip'     =>  0,
            'admin_approve' =>  0,
            'date_added'    =>  date('Y-m-d H:i:s'),
            'del'           =>  0,
          );
          $add_register_result = $this->model_register_program->add($add_register);
          $total_values += (float)$program_price_register;
          $total_register = $program_price_register + $register_id->total;
          $update_register = array(
            'total'       =>  (float)$total_register,
            'date_modify' =>  date('Y-m-d H:i:s')
          );
          $edit_register = $this->model_register->edit($register_id->id, $update_register);
        }
      }

      if ($edit_register_test > 0 || ($add_register_result && $edit_register)) {
        $this->session->set_userdata('success', 'แก้ไขข้อมูลโปรแกรมผู้สมัครเรียบร้อยแล้ว');
        redirect('admin/member/edit_register/' . $id . '/' . $year);
      } else {
        $this->session->set_userdata('error', 'เกิดข้อผิดพลาดในการแก้ไขข้อมูลผู้สมัคร');
        redirect('admin/member/edit_register/' . $id . '/' . $year);
      }
    }

    $this->load->template('admin/member/form_register', $data);
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

    $this->model_member->edit($member_info->id, array('date_modify' => date('Y-m-d H:i:s')));
    $dataemail = array(
      'name' => $member_info->firstname . ' ' . $member_info->lastname,
      'email' => $member_info->email,
      'link' => base_url('member/forgot'),
      'link_confirm' => base_url('member/confirm/' . urlencode(base64_encode($member_info->email)))
    );
    $message = $this->load->view('email/register', $dataemail, true);
    $subject = 'สมัครสมาชิก โครงการประเมินคุณภาพทางห้องปฏิบัติการโดยองค์กรภายนอก';

    if ($this->email->smtpsend($member_info->email, $subject, $message)) {
      $this->session->set_userdata('success', 'ส่งอีเมล ยืนยันการสมัครให้ ' . $member_info->email . ' แล้ว');
    } else {
      $this->session->set_userdata('error', 'เกิดข้อผิดพลาดในการส่งอีเมล');
    }
    redirect('admin/member/lists/');
  }

  public function sendEmailForgot($id)
  {
    $member_info = $this->model_member->getList($id);
    $code = rand(10000, 99999);
    $this->model_member->edit($member_info->id, array('forget_code' => $code, 'date_modify' => date('Y-m-d H:i:s')));
    $dataemail = array(
      'name' => $member_info->firstname . ' ' . $member_info->lastname,
      'link' => base_url('member/change/' . $member_info->email . '/' . $code)
    );
    $message = $this->load->view('email/forgot', $dataemail, true);
    $subject = 'ลืมรหัสผ่าน โครงการประเมินคุณภาพทางห้องปฏิบัติการโดยองค์กรภายนอก';
    if ($this->email->smtpsend($member_info->email, $subject, $message)) {
      $this->session->set_userdata('success', 'ส่งอีเมลรีเซทรหัสผ่านให้ ' . $member_info->email . ' แล้ว');
    } else {
      $this->session->set_userdata('error', 'เกิดข้อผิดพลาดในการส่งอีเมล');
    }
    redirect('admin/member/lists/');
  }

  // test
  public function test()
  {
    // $filter = array();
    // $page = 1;
    // $limit = 10;
    $data['lists'] = $this->model_member->testlist($filter, $page, $limit, 'id', 'desc');
    $this->load->view('admin/member/test', $data);
  }

  public function del_register($register_id)
  {
    $register_info = $this->model_register_program->getList($register_id);
    $register_id_val = $register_info->id;
    $year = $this->model_year->getList($register_info->year_id)->year;
    $register_infos = $this->model_register->getRegisterByYearAndMember($register_info->member_id, $register_info->year_id);
    $price_program = $register_infos->total - $register_info->price;
    $update = array(
      'total' =>  $price_program,
      'date_modify' => date('Y-m-d H:i:s')
    );
    $register_edit = $this->model_register->edit($register_infos->id, $update);
    $result = $this->model_register_program->del($register_id_val);
    if ($result && $register_edit) {
      $this->session->set_userdata('success', 'Delete register program success');
    } else {
      $this->session->set_userdata('error', 'Delete register program fail');
    }
    redirect('admin/member/edit_register/' . $register_info->member_id . '/' . $year);
  }
}
