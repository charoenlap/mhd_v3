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
    $data['heading_title'] = 'Program';
    $data['breadcrumbs'] = array(
      'ภาพรวม' => base_url('admin/home'),
      $data['heading_title'] => base_url('admin/report')
    );

    $data['action'] = base_url('admin/report');
    $data['lists'] = array();
    $filter = array();
    // $data['lists'] = $this->model_year->getLists($filter, 0, 99999999999);
    $lists = $this->model_year->getLists($filter, 0, 99999999999);
    foreach ($lists as $key => $value) {
      $filter = array('admin_id' => 0, 'mhd_report.year_id' => $value->id);
      // $value->report_value = $this->model_report->getReport($filter);
      $value->report_value = $this->model_report->getReportNavBar($filter);
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

    $this->load->template('admin/report/index', $data);
  }

  public function year($slug)
  {
    $data = array();
    $data['heading_title'] = 'Program';
    $data['breadcrumbs'] = array(
      'ภาพรวม'               => base_url('admin/home'),
      $data['heading_title'] => base_url('admin/report/year/' . $slug),
    );

    $data['action'] = base_url('admin/report');
    $admin_detail  = json_decode($this->encryption->decrypt($this->session->admin_token));
    $adimn_id = $admin_detail->id;
    $program_list_perm = $this->model_admin->getListByAdmin($adimn_id);
    $program_list = json_decode($program_list_perm->permission_program,true);
    // $data['permission'] = $admin_detail->authority;
    $year_info = $this->model_year->getYear($slug);
    $data['year'] = $slug;
    // $filter = array(
    // 'year_id' => $year_info->id
    // );
    $data['lists'] = array();
    // $filter = array();
    // // $data['lists'] = $this->model_program->getLists($filter, 0, 99999999999);
    // $lists = $this->model_program->getLists($filter, 0, 99999999999);
    $lists = array();
    foreach ($program_list as $vals){
      $lists[] = $this->model_program->getList($vals);
    }
    foreach ($lists as $key => $value) {
      // $filters = array('program_id' => $value->id, 'year_id' => $year_info->id);
      // $trial_program = $this->model_trial->getLists($filters, 0 ,99999999999);
      // foreach($trial_program as $trial_val){
      //   $filter = array('trial_id' => $trial_val->id);
      //   $value->report_value = $this->model_report->getLists($filter, 0 ,999999999);
      // }
      $filter = array('admin_id' => 0, 'mhd_report.year_id' => $year_info->id, 'mhd_report.program_id' => $value->id);
      // $value->report_value = $this->model_report->getReport($filter);
      $value->report_value = $this->model_report->getReportNavBar($filter);
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

    $this->load->template('admin/report/year', $data);
  }

  public function program($year, $slug)
  {

    $data = array();
    $data['heading_title'] = 'Trial';
    $data['breadcrumbs'] = array(
      'ภาพรวม'               => base_url('admin/home'),
      'Year'                 => base_url('admin/report/year/' . $year),
      $data['heading_title'] => base_url('admin/report/program/' . $year . '/' . $slug),
    );

    $data['action'] = base_url('admin/report');

    $data['year'] = $year;

    $program_info = $this->model_program->getProgramBySlug($slug);
    $id = $program_info->id;

    $year_id = $this->model_year->getYear($year)->id;
    $program = $this->model_program->getList($id);
    $data['name'] = $program->name;
    $data['program_slug'] = $slug;
    $data['lists'] = array();
    $filter = array(
      'program_id' => $program->id,
      'year_id'    => $year_id
    );
    // $data['lists'] = $this->model_trial->getLists($filter);
    $lists = $this->model_trial->getLists($filter, null, null, 'id', 'DESC');
    foreach ($lists as $key => $value) {
      $filter = array('admin_id' => 0, 'mhd_report.trial_id' => $value->id, 'mhd_report.year_id' => $year_id);
      // $value->report_value = $this->model_report->getReport($filter);
      $value->report_value = $this->model_report->getReportNavBar($filter);
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

    $this->load->template('admin/report/program', $data);
  }

  public function trial($year, $program_slug, $trial_slug)
  {

    $data = array();
    // ปรับใหม่จับจาก slug เดิมเอา slug มาเปิดตามชื่อไฟล์เปลี่ยนเอา slug มาเป็น id
    // $program_info = $this->model_program->getListsSlug($program_slug);
    
    // if($program_info->id == '1'){
    //   $data['fileNameOpen'] = "eqac";
    // }elseif($program_info->id == '2'){
    //   $data['fileNameOpen'] = "eqah";
    // }elseif($program_info->id == '3'){
    //   $data['fileNameOpen'] = "eqat";
    // }elseif($program_info->id == '4'){
    //   $data['fileNameOpen'] = "eqap";
    // }elseif($program_info->id == '5'){
    //   $data['fileNameOpen'] = "b-eqam";
    // }elseif($program_info->id == '6'){
    //   $data['fileNameOpen'] = "h-eqam";
    // }elseif($program_info->id == '7'){
    //   $data['fileNameOpen'] = "uc-eqam";
    // }elseif($program_info->id == '8'){
    //   $data['fileNameOpen'] = "eqaisyphilis";
    // }elseif($program_info->id == '9'){
    //   $data['fileNameOpen'] = "eqaihbv";
    // }elseif($program_info->id == '10'){
    //   $data['fileNameOpen'] = "eqab-gram";
    // }elseif($program_info->id == '12'){
    //   $data['fileNameOpen'] = "eqab-afb";
    // }elseif($program_info->id == '13'){
    //   $data['fileNameOpen'] = "iden-ast";
    // }
    // ปรับใหม่จับจาก slug เดิมเอา slug มาเปิดตามชื่อไฟล์เปลี่ยนเอา slug มาเป็น id

    $data['heading_title'] = 'Member In Program';
    $data['breadcrumbs'] = array(
      'ภาพรวม'               => base_url('admin/home'),
      'Year'                 => base_url('admin/report/year/' . $year),
      'Program'              => base_url('admin/report/program/' . $year . '/' . $program_slug),
      $data['heading_title'] => base_url('admin/report/trial/' . $year . '/' . $program_slug . '/' . $trial_slug),
    );

    $data['action'] = base_url('admin/report/trial/' . $year . '/' . $program_slug . '/' . $trial_slug);
    $data['export_link']  = base_url('admin/report/excel_register/' . $year . '/' . $program_slug . '/' . $trial_slug);
    // $data['export_link']  = base_url('admin/report/excel_register/' . $year . '/' . $data['fileNameOpen'] . '/' . $trial_slug);

    $year_info = $this->model_year->getYear($year);
    $year_id = $year_info->id;
    $data['year'] = $year;

    $program_info = $this->model_program->getProgramBySlug($program_slug);
    $program_id = $program_info->id;
    $data['program_slug'] = $program_slug;

    $trial_info = $this->model_trial->getTrialBySlug($trial_slug, $program_id);
    $trial_id = $trial_info->id;
    $data['trial_slug'] = $trial_slug;

    $data['lists'] = array();
    $data['filter_memberno'] = '';
    $data['filter_email'] = '';
    $data['filter_name']  = '';
    if (!empty($this->input->get())) {
      $filter = array(
        'year_id' => $year_id,
        'program_id' => $program_id,
        // add new
        // 'slug'  => $trial_slug
        // 'trial_id' => $trial_id
      );
      if (!empty($this->input->get('filter_memberno'))) {
        $data['filter_memberno'] = $this->input->get('filter_memberno');
        $filter['member_id']  = $this->input->get('filter_memberno');
      }
      if (!empty($this->input->get('filter_email'))) {
        $data['filter_email'] = $this->input->get('filter_email');
        $filter['filter_email']  = $this->input->get('filter_email');
      }
      if (!empty($this->input->get('filter_name'))) {
        $data['filter_name'] = $this->input->get('filter_name');
        $filter['filter_name']  = $this->input->get('filter_name');
      }


      $lists = $this->model_register_program->getLists($filter);
      foreach ($lists as $value) {
        $list_report = $this->model_report->getMemberByMemberIdTrial($value->member_id, $value->year_id, $value->program_id, $trial_id);
        if (!empty($list_report)) {
          $list_report->is_report = 1;
          $data['lists'][] = $list_report;
        } else {
          $list_report = $this->model_register_program->getListProgramByMemberProgramIdYear($value->member_id, $value->program_id, $year_id);
          $list_report->is_report = 0;
          $data['lists'] = $list_report;
        }
        // $data['lists'][] = $value;
      }

      // $lists = $this->model_report->getMemberInReportTrial($filter,$year_id, $program_id, $trial_id);
      // foreach ($lists as $value){
    } else {
      $lists = $this->model_report->getMemberInReport($year_id, $program_id, $trial_id);

      $memberid = array();
      foreach ($lists as $value) {
        $memberid[] = $value->member_id;

        $member_info = $this->model_member->getList($value->member_id);
        $member_info->is_report = 1;
        $member_info->admin_id = $value->admin_id;
        $data['lists'][] = $member_info;
      }

      $filter = array(
        'year_id' => $year_id,
        'program_id' => $program_id,
      );
      $register_programs = $this->model_register_program->getLists($filter);
      foreach ($register_programs as $value) {
        if (!in_array($value->member_id, $memberid)) {

          $member_info = $this->model_member->getList($value->member_id);
          $member_info->is_report = 0;
          $data['lists'][] = $member_info;
        }
      }
    }

    // $report_filter = $this->model_report->getReportFilter($filter,0,'','id','desc');
    // foreach($report_filter as $report_value) {
    //   $data['list_filter'][] = $report_value;
    // }

    // echo '<pre>';
    // print_r($data['lists']);
    // echo '</pre>';



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

    $this->load->template('admin/report/trial', $data);
  }

  public function add_report($year, $program_slug, $trial_slug, $member_id)
  {
    $data = array();
    $data['heading_title'] = 'Add Report';
    $data['add_report'] = true;

    $data['breadcrumbs'] = array(
      'ภาพรวม'               => base_url('admin/home'),
      'Year'                 => base_url('admin/report/year/' . $year),
      'Program'              => base_url('admin/report/program/' . $year . '/' . $program_slug),
      'Trial'                => base_url('admin/report/trial/' . $year . '/' . $program_slug . '/' . $trial_slug),
      $data['heading_title'] => base_url('admin/report/detail/' . $year . '/' . $program_slug . '/' . $trial_slug . '/' . $member_id),
    );

    $data['action'] = base_url('admin/report/add_report/' . $year . '/' . $program_slug . '/' . $trial_slug . '/' . $member_id);
    $data['back_page'] = base_url('admin/report/trial/' . $year . '/' . $program_slug . '/' . $trial_slug);

    $data['year_edit'] = $year;
    $data['program_slug'] = $program_slug;
    $data['trial_slug'] = $trial_slug;
    $program_info = $this->model_program->getProgramBySlug($program_slug);
    $program_id = $program_info->id;

    $trial_info = $this->model_trial->getTrialBySlug($trial_slug, $program_id);
    $trial_id = $trial_info->id;

    $year_id = $this->model_year->getYear($year)->id;

    // $year_id = $this->model_setting->get('config_register_year_id'); // year


    // $member_id = json_decode($this->encryption->decrypt($this->session->token))->id;
    $member_info = $this->model_member->getList($member_id);

    $register_info = $this->model_register->getRegisterByYearAndMember($member_id, $year_id);
    $register_id = $register_info->id;
    $company_id = $register_info->company_id;


    $company_info = $this->model_company->getList($company_id);
    // ! ========== default variable ==========


    // ? ========== initial loading data ==========
    $filter = array('del' => 0);
    $infection_all = $this->model_program_infection->getLists($filter, 0, 9999999999999);
    $data['infection_all'] = $infection_all;

    $filter = array('del' => 0, 'program_id' => $program_id);
    $data['infections'] = $this->model_program_infection->getLists($filter, 0, 9999999999999);

    $filter = array('del' => 0, 'program_id' => $program_id, 'section' => 1);
    $data['infections_sec1'] = $this->model_program_infection->getLists($filter, 0, 9999999999999);

    $filter = array('del' => 0, 'program_id' => $program_id, 'section' => 2);
    $data['infections_sec2'] = $this->model_program_infection->getLists($filter, 0, 9999999999999);

    $filter = array('del' => 0, 'program_id' => $program_id, 'section' => 3);
    $data['infections_sec3'] = $this->model_program_infection->getLists($filter, 0, 9999999999999);

    $filter = array('del' => 0, 'program_id' => $program_id, 'section' => 4);
    $data['infections_sec4'] = $this->model_program_infection->getLists($filter, 0, 9999999999999);

    $filter = array('del' => 0, 'program_id' => $program_id, 'section' => 5);
    $data['infections_sec5'] = $this->model_program_infection->getLists($filter, 0, 9999999999999);

    $filter = array('del' => 0, 'program_id' => $program_id, 'section' => 6);
    $data['infections_sec6'] = $this->model_program_infection->getLists($filter, 0, 9999999999999);

    $filter = array('del' => 0, 'program_id' => $program_id, 'trial_id' => $trial_id);
    $data['specimens'] = $this->model_specimen->getLists($filter, 0, 9999999999999);

    // eqah
    $filter = array('del' => 0, 'program_id' => $program_id);
    $data['principles'] = $this->model_program_principle->getLists($filter, 0, 9999999999999);

    // eqah
    $filter = array('program_id' => $program_id);
    $data['tools'] = $this->model_program_tool->getLists($filter, 0, 9999999999);

    // eqaisyphilis
    $filter = array('program_id' => $program_id, 'section' => 'Qualitative');
    $data['tools_qualitative'] = $this->model_program_tool->getLists($filter, 0, 9999999999);
    $filter = array('program_id' => $program_id, 'section' => 'NTP');
    $data['tools_ntp'] = $this->model_program_tool->getLists($filter, 0, 9999999999);
    $filter = array('program_id' => $program_id, 'section' => 'TP');
    $data['tools_tp'] = $this->model_program_tool->getLists($filter, 0, 9999999999);

    // eqaihbv
    $filter = array('program_id' => $program_id, 'section' => 'auto');
    $data['tools_auto'] = $this->model_program_tool->getLists($filter, 0, 9999999999);

    // only eqac
    $filter = array('program_id' => $program_id, 'section' => 1);
    $data['tools_sec1'] = $this->model_program_tool->getLists($filter, 0, 9999999999);
    $filter = array('program_id' => $program_id, 'section' => 2);
    $data['tools_sec2'] = $this->model_program_tool->getLists($filter, 0, 9999999999);
    $filter = array('program_id' => $program_id, 'section' => 3);
    $data['tools_sec3'] = $this->model_program_tool->getLists($filter, 0, 9999999999);
    // ? ========== initial loading data ==========


    // ? ========== Setting value to <input> ==========
    // Head
    $data['program_id']      = $program_id;
    $data['trial_id']        = $trial_id;
    $data['program_name']    = $program_info->name;
    $data['trial_name']      = $trial_info->name;
    $data['member_id']       = $member_id;
    $data['year_id']         = $year_id;
    $data['register_id']     = $register_id;
    $data['company_id']      = $company_info->id;
    $data['address']         = $company_info->name . ': ' . $company_info->address_1 . ' ' . $company_info->address_2 . ' ' . $company_info->district . ' ' . $company_info->country . ' ' . $company_info->province . ' ' . $company_info->postcode;
    $data['date_report']     = date('d-m-Y', time());
    $data['received_status'] = null;
    $data['received_status_other'] = '';

    // Footer
    $data['name']      = $company_info->name;
    $data['telephone'] = $company_info->telephone;
    $data['position']  = '';
    $data['comment']   = '';
    $data['post_val'] = $this->input->post();

    // ? ========== Setting value to <input> ==========
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      if (!empty($_FILES)) {
        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'jpeg|jpg|png';
        $config['max_size'] = 2048;
        $config['max_width'] = 0; //set 0 for free width
        $config['max_height'] = 0; //set 0 for free height
        $config['remove_spaces'] = true;
        $config['encrypt_name'] = true;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $data['image'] = array();
        foreach ($_FILES as $key => $value) {
          if (!empty($value['tmp_name']) && $value['size'] > 0) {
            if ($this->upload->do_upload($key)) {
              // Files Upload Success
              $uploaded = $this->upload->data();
              $data['image'][] = $uploaded['file_name'];
            } else {
              $this->session->set_userdata('error', 'เกิดข้อผิดพลาดไม่สามารถอัพโหลดรูปภาพได้กรุณาลองใหม่อีกครั้ง ' . $this->upload->display_errors());
              redirect('admin/report/trial/' . $year . '/' . $program_slug . '/' . $trial_slug);
            } // End else
          }
        }
        if ($this->input->post('type') == "submit" && count($data['image']) > 0) {
          $post = $this->input->post();
          unset($post['type'], $post['program_name'], $post['trial_name'], $post['address']);
          foreach($data['image'] as $key => $value){
            $post['file_'.$key] = $value;
          }
          // Change format date
          $post['path'] = base_url('upload/');
          $post['date_report'] = date('Y-m-d', strtotime($post['date_report']));
          $post['save']['report_date'] = date('Y-m-d', strtotime($post['save']['report_date']));
          $post['received_status'] = ($post['received_status'] == 'true') ? 1 : 0;
          $post['admin_id'] = 0; // ready to checking by admin
          $post['save'] = json_encode($post['save']);
          $post['date_added'] = date('Y-m-d H:i:s', time());
          $post['edit_member_id'] = $member_id;
          $post['report_status'] = 0;

          // Check this use has "register > register_program_id" for make sure
          $register_program_id = $this->model_register_program->checkProgramInRegister($post['register_id'], $post['program_id'], $member_id, $post['company_id']);
          $post['register_program_id'] = $register_program_id;

          $result = $this->model_report->add($post);
          $result = $result > 0 ? true : false;
          if ($result) {
            $this->session->set_userdata('success', 'Send report <b>' . $program_info->name . ' - ' . $trial_info->name . '</b> successful');
          } else {
            $this->session->set_userdata('error', 'Fail something has wrong about send report <b>' . $program_info->name . ' - ' . $trial_info->name . '</b> ');
          }
          redirect('admin/report/trial/' . $year . '/' . $program_slug . '/' . $trial_slug);
        }
      } else {
        if ($this->input->post('type') == "submit") {
          $post = $this->input->post();
          unset($post['type'], $post['program_name'], $post['trial_name'], $post['address']);

          // Change format date
          $post['date_report'] = date('Y-m-d', strtotime($post['date_report']));
          $post['save']['report_date'] = date('Y-m-d', strtotime($post['save']['report_date']));
          $post['received_status'] = ($post['received_status'] == 'true') ? 1 : 0;
          $post['admin_id'] = 0; // ready to checking by admin
          $post['save'] = json_encode($post['save']);
          $post['date_added'] = date('Y-m-d H:i:s', time());
          $post['edit_member_id'] = $member_id;
          $post['report_status'] = 0;

          // Check this use has "register > register_program_id" for make sure
          $register_program_id = $this->model_register_program->checkProgramInRegister($post['register_id'], $post['program_id'], $member_id, $post['company_id']);
          $post['register_program_id'] = $register_program_id;

          $result = $this->model_report->add($post);
          $result = $result > 0 ? true : false;
          if ($result) {
            $this->session->set_userdata('success', 'Send report <b>' . $program_info->name . ' - ' . $trial_info->name . '</b> successful');
          } else {
            $this->session->set_userdata('error', 'Fail something has wrong about send report <b>' . $program_info->name . ' - ' . $trial_info->name . '</b> ');
          }
          redirect('admin/report/trial/' . $year . '/' . $program_slug . '/' . $trial_slug);
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
    $this->load->TemplateAdminProgram('report/form/program_report_' . $program_slug, $data);
  }

  public function detail($year, $program_slug, $trial_slug, $member_id)
  {
    $data = array();
    $data['heading_title'] = 'View Report';
    $data['add_report'] = false;
    $data['breadcrumbs'] = array(
      'ภาพรวม'               => base_url('admin/home'),
      'Year'                 => base_url('admin/report/year/' . $year),
      'Program'              => base_url('admin/report/program/' . $year . '/' . $program_slug),
      'Trial'                => base_url('admin/report/trial/' . $year . '/' . $program_slug . '/' . $trial_slug),
      $data['heading_title'] => base_url('admin/report/detail/' . $year . '/' . $program_slug . '/' . $trial_slug . '/' . $member_id),
    );

    $data['action'] = base_url('admin/report/edit_report');
    $data['back_page'] = base_url('admin/report/trial/' . $year . '/' . $program_slug . '/' . $trial_slug);
    // ! ========== default variable ==========
    $data['year_edit'] = $year;
    $data['program_slug'] = $program_slug;
    $data['trial_slug'] = $trial_slug;
    $program_info = $this->model_program->getProgramBySlug($program_slug);
    $program_id = $program_info->id;

    $trial_info = $this->model_trial->getTrialBySlug($trial_slug, $program_id);
    $trial_id = $trial_info->id;

    $year_id = $this->model_year->getYear($year)->id;

    // $year_id = $this->model_setting->get('config_register_year_id'); // year


    // $member_id = json_decode($this->encryption->decrypt($this->session->token))->id;
    $member_info = $this->model_member->getList($member_id);

    $register_info = $this->model_register->getRegisterByYearAndMember($member_id, $year_id);
    $register_id = $register_info->id;
    $company_id = $register_info->company_id;


    $company_info = $this->model_company->getList($company_id);
    // ! ========== default variable ==========


    // ? ========== initial loading data ==========
    $filter = array('del' => 0);
    $infection_all = $this->model_program_infection->getLists($filter, 0, 9999999999999);
    $data['infection_all'] = $infection_all;

    $filter = array('del' => 0, 'program_id' => $program_id);
    $data['infections'] = $this->model_program_infection->getLists($filter, 0, 9999999999999);

    $filter = array('del' => 0, 'program_id' => $program_id, 'section' => 1);
    $data['infections_sec1'] = $this->model_program_infection->getLists($filter, 0, 9999999999999);

    $filter = array('del' => 0, 'program_id' => $program_id, 'section' => 2);
    $data['infections_sec2'] = $this->model_program_infection->getLists($filter, 0, 9999999999999);

    $filter = array('del' => 0, 'program_id' => $program_id, 'section' => 3);
    $data['infections_sec3'] = $this->model_program_infection->getLists($filter, 0, 9999999999999);

    $filter = array('del' => 0, 'program_id' => $program_id, 'section' => 4);
    $data['infections_sec4'] = $this->model_program_infection->getLists($filter, 0, 9999999999999);

    $filter = array('del' => 0, 'program_id' => $program_id, 'section' => 5);
    $data['infections_sec5'] = $this->model_program_infection->getLists($filter, 0, 9999999999999);

    $filter = array('del' => 0, 'program_id' => $program_id, 'section' => 6);
    $data['infections_sec6'] = $this->model_program_infection->getLists($filter, 0, 9999999999999);

    $filter = array('del' => 0, 'program_id' => $program_id, 'trial_id' => $trial_id);
    $data['specimens'] = $this->model_specimen->getLists($filter, 0, 9999999999999);

    // eqah
    $filter = array('del' => 0, 'program_id' => $program_id);
    $data['principles'] = $this->model_program_principle->getLists($filter, 0, 9999999999999);

    // eqah
    $filter = array('program_id' => $program_id);
    $data['tools'] = $this->model_program_tool->getLists($filter, 0, 9999999999);

    // eqaisyphilis
    $filter = array('program_id' => $program_id, 'section' => 'Qualitative');
    $data['tools_qualitative'] = $this->model_program_tool->getLists($filter, 0, 9999999999);
    $filter = array('program_id' => $program_id, 'section' => 'NTP');
    $data['tools_ntp'] = $this->model_program_tool->getLists($filter, 0, 9999999999);
    $filter = array('program_id' => $program_id, 'section' => 'TP');
    $data['tools_tp'] = $this->model_program_tool->getLists($filter, 0, 9999999999);

    // eqaihbv
    $filter = array('program_id' => $program_id, 'section' => 'auto');
    $data['tools_auto'] = $this->model_program_tool->getLists($filter, 0, 9999999999);

    // only eqac
    $filter = array('program_id' => $program_id, 'section' => 1);
    $data['tools_sec1'] = $this->model_program_tool->getLists($filter, 0, 9999999999);
    $filter = array('program_id' => $program_id, 'section' => 2);
    $data['tools_sec2'] = $this->model_program_tool->getLists($filter, 0, 9999999999);
    $filter = array('program_id' => $program_id, 'section' => 3);
    $data['tools_sec3'] = $this->model_program_tool->getLists($filter, 0, 9999999999);
    // ? ========== initial loading data ==========


    // ? ========== Setting value to <input> ==========
    // Head
    $data['program_id']      = $program_id;
    $data['trial_id']        = $trial_id;
    $data['program_name']    = $program_info->name;
    $data['trial_name']      = $trial_info->name;
    $data['member_id']       = $member_id;
    $data['year_id']         = $year_id;
    $data['register_id']     = $register_id;
    $data['company_id']      = $company_info->id;
    $data['address']         = $company_info->name . ': ' . $company_info->address_1 . ' ' . $company_info->address_2 . ' ' . $company_info->district . ' ' . $company_info->country . ' ' . $company_info->province . ' ' . $company_info->postcode;
    $data['date_report']     = date('d-m-Y', time());
    $data['received_status'] = null;
    $data['received_status_other'] = '';

    // Footer
    $data['name']      = $company_info->name;
    $data['telephone'] = $company_info->telephone;
    $data['position']  = '';
    $data['comment']   = '';
    $data['member_no'] = $year . sprintf('%05d', $member_id);

    // ? ========== Setting value to <input> ==========


    // ? ========== Loading old data ==========
    $has_olddata = false;
    $report_id = 0;

    $filter = array(
      'program_id'  => $program_id,
      'trial_id'    => $trial_id,
      'member_id'   => $member_id,
      'year_id'     => $year_id,
      'register_id' => $register_id,
      'company_id'  => $company_info->id
    );

    $report_info = $this->model_report->getReport($filter);
    // $data['file_image'] = array();
    if (count($report_info) > 0) {
      $has_olddata = true;
      $report_info = $report_info[0]; // last send
      // $this->model_report->edit($report_info->id, array('admin_id' => $this->session->admin_info['admin_id']));

      $report_id = $report_info->id;
      $data['report_id'] = $report_info->id;
      $data['path_file'] = $report_info->path;
      $data['file_image'] = array(
        'file_0' => $report_info->file_0,
        'file_1' => $report_info->file_1,
        'file_2' => $report_info->file_2,
        'file_3' => $report_info->file_3,
        'file_4' => $report_info->file_4,
        'file_5' => $report_info->file_5,
        'file_6' => $report_info->file_6,
      );
      $data['date_modify'] = date('Y-m-d H:i:s', time());
      $data['date_report'] = date('d-m-Y', strtotime($report_info->date_report));
      $data['received_status'] = null;
      if ($report_info->received_status == 1) {
        $data['received_status'] = 'true';
      } else if ($report_info->received_status == 0) {
        $data['received_status'] = 'false';
      }
      $data['received_status_other'] = $report_info->received_status_other;
      $data['save'] = json_decode($report_info->save, true);
      if (isset($data['save']['name'])) {
        $data['name'] = $data['save']['name'];
      }
      if (isset($data['save']['telephone'])) {
        $data['telephone'] = $data['save']['telephone'];
      }
      if (isset($data['save']['position'])) {
        $data['position'] = $data['save']['position'];
      }
      if (isset($data['save']['comment'])) {
        $data['comment'] = $data['save']['comment'];
      }
    }

    //   // ? ========== Repleace value for show ==========
    //     $data['program_id']            = $this->input->post('program_id');
    //     $data['trial_id']              = $this->input->post('trial_id');
    //     $data['program_name']          = $this->input->post('program_name');
    //     $data['trial_name']            = $this->input->post('trial_name');
    //     $data['year_id']               = $this->input->post('year_id');
    //     $data['member_id']             = $this->input->post('member_id');
    //     $data['register_id']           = $this->input->post('register_id');
    //     $data['company_id']            = $this->input->post('company_id');
    //     $data['address']               = $this->input->post('address');
    //     $data['date_report']           = $this->input->post('date_report');
    //     $data['received_status']       = $this->input->post('received_status');
    //     $data['received_status_other'] = $this->input->post('received_status_other');

    //     $save = $this->input->post();
    //     $data['save'] = $save['save'];

    //     if (isset($data['save']['name'])) { 
    //       $data['name'] = $data['save']['name']; 
    //     }
    //     if (isset($data['save']['telephone'])) { 
    //       $data['telephone'] = $data['save']['telephone']; 
    //     }
    //     if (isset($data['save']['position'])) { 
    //       $data['position'] = $data['save']['position']; 
    //     }
    //     if (isset($data['save']['comment'])) { 
    //       $data['comment'] = $data['save']['comment']; 
    //     }
    //   // ? ========== Repleace value for show ==========
    // }

    // ? ========== Loading old data ==========





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


    $this->load->TemplateAdminProgram('report/form/program_report_' . $program_slug, $data);
  }

  public function edit_report()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // ? ========== Save to db ==========
      if ($this->input->post('type') == 'submit') {
        $report_id = $this->input->post('report_id');
        $post = $this->input->post();

        unset($post['type'], $post['program_name'], $post['trial_name'], $post['address']);

        $received_status = ($post['received_status'] == 'true') ? 1 : 0;
        $admin_id = 1; // admin already checked
        $save = json_encode($post['save']);
        $date_modify = date('Y-m-d H:i:s', time());
        $edit_member_id = $this->input->post('member_id');
        $update = array(
          'received_status' =>  $received_status,
          'admin_id'        =>  $admin_id,
          'save'            =>  $save,
          'date_modify'     =>  $date_modify,
          'edit_member_id'  =>  $edit_member_id
        );
        unset($post['member_id'], $post['register_id'], $post['program_id'], $post['trial_id'], $post['year_id'], $post['company_id']);
        $this->model_report->edit($report_id, $update);
        $year = $this->input->post('year_edit');
        $trial = $this->input->post('trial_edit');
        $program = $this->input->post('program_edit');
        redirect('admin/report/trial/' . $year . '/' . $program . '/' . $trial);
      }
      // ? ========== Save to db ==========
    }
  }
  public function excel_register($year, $program_slug, $trial_slug)
  {
    $data = array();
    $data['heading_title'] = "Export excel";
    $program_info = $this->model_program->getProgramBySlug($program_slug);
    
    if($program_info->slug == "eqac"){
      $data['program_head'] = $program_info->name;
      $data['report_file_name'] = "_".$trial_slug;
    }else{
      $data['program_head'] = $program_info->name."_".$trial_slug;
    }
    
    $program_info_id = $program_info->id;
    $data['program_id'] = $program_info->id;
    $year_info = $this->model_year->getYear($year);
    $year_info_id = $year_info->id;
    $data['program_register_info'] = $this->model_report->getMemberInReportRegister($program_info_id, $year_info_id, $trial_slug);

    $data['program_slug'] = $program_slug;
    if($program_slug == "iden-ast"){
      $program_slug = "eqab-iden-ast";
    }
    $data['require_export'] = APPPATH . 'views/admin/report/export/export_' . $program_slug . '.php';
    $data['require_export_received'] = APPPATH . 'views/admin/report/excel_received.php';

    // $trial_info = $this->model_trial->getTrialBySlug($trial_slug);
    $trial_info = $this->model_trial->getTrialBySlug($trial_slug,$program_info->id);
    $data['trial_name'] = $trial_info->name;
    $trial_info_id = $trial_info->id;
    $report_info = $this->model_report->getMemberInReport($year_info_id, $program_info_id, $trial_info_id);
    $data['report_info_detail'] = $report_info->member_id;

    // $data['report_info_detail'] = $this->model_company->getListByIdMember($report_info->member_id);
    $filter = array(
      'year_id' => $year_info_id,
      'program_id' => $program_info_id,
    );
    $report_infos = $this->model_register_program->getLists($filter);

    $filter = array('del' => 0, 'program_id' => $program_info_id);
    $data['infections'] = $this->model_program_infection->getLists($filter, 0, 9999999999999);

    // ? ========== initial loading data ==========
    $filter = array('del' => 0);
    $infection_all = $this->model_program_infection->getLists($filter, 0, 9999999999999);
    $data['infection_all'] = $infection_all;

    $filter = array('del' => 0, 'program_id' => $program_info_id);
    $data['infections'] = $this->model_program_infection->getLists($filter, 0, 9999999999999);

    $filter = array('del' => 0, 'program_id' => $program_info_id, 'section' => 1);
    $data['infections_sec1'] = $this->model_program_infection->getLists($filter, 0, 9999999999999);

    $filter = array('del' => 0, 'program_id' => $program_info_id, 'section' => 2);
    $data['infections_sec2'] = $this->model_program_infection->getLists($filter, 0, 9999999999999);

    $filter = array('del' => 0, 'program_id' => $program_info_id, 'section' => 3);
    $data['infections_sec3'] = $this->model_program_infection->getLists($filter, 0, 9999999999999);

    $filter = array('del' => 0, 'program_id' => $program_info_id, 'section' => 4);
    $data['infections_sec4'] = $this->model_program_infection->getLists($filter, 0, 9999999999999);

    $filter = array('del' => 0, 'program_id' => $program_info_id, 'section' => 5);
    $data['infections_sec5'] = $this->model_program_infection->getLists($filter, 0, 9999999999999);

    $filter = array('del' => 0, 'program_id' => $program_info_id, 'section' => 6);
    $data['infections_sec6'] = $this->model_program_infection->getLists($filter, 0, 9999999999999);
    
    $filter = array('del' => 0, 'program_id' => $program_info_id, 'trial_id' => $trial_info_id);
    $data['specimens'] = $this->model_specimen->getLists($filter, 0, 9999999999999);
    
    // eqah
    $filter = array('del' => 0, 'program_id' => $program_info_id);
    $data['principles'] = $this->model_program_principle->getLists($filter, 0, 9999999999999);

    // eqah
    $filter = array('program_id' => $program_info_id);
    $data['tools'] = $this->model_program_tool->getLists($filter, 0, 9999999999);

    // eqaisyphilis
    $filter = array('program_id' => $program_info_id, 'section' => 'Qualitative');
    $data['tools_qualitative'] = $this->model_program_tool->getLists($filter, 0, 9999999999);
    $filter = array('program_id' => $program_info_id, 'section' => 'NTP');
    $data['tools_ntp'] = $this->model_program_tool->getLists($filter, 0, 9999999999);
    $filter = array('program_id' => $program_info_id, 'section' => 'TP');
    $data['tools_tp'] = $this->model_program_tool->getLists($filter, 0, 9999999999);

    // eqaihbv
    $filter = array('program_id' => $program_info_id, 'section' => 'auto');
    $data['tools_auto'] = $this->model_program_tool->getLists($filter, 0, 9999999999);

    // only eqac
    $filter = array('program_id' => $program_info_id, 'section' => 1);
    $data['tools_sec1'] = $this->model_program_tool->getLists($filter, 0, 9999999999);
    $filter = array('program_id' => $program_info_id, 'section' => 2);
    $data['tools_sec2'] = $this->model_program_tool->getLists($filter, 0, 9999999999);
    $filter = array('program_id' => $program_info_id, 'section' => 3);
    $data['tools_sec3'] = $this->model_program_tool->getLists($filter, 0, 9999999999);
    // ? ========== initial loading data ==========
    // foreach ($report_info as $value){
    //   $filter = array(
    //     'year_id' => $value->year_id,
    //     'member_id' =>  $value->member_id
    //   );
    // }
    // $data['report_info'] = $this->model_report->getReport($filter);


    $this->load->view('admin/report/excel_register', $data);
  }
}
