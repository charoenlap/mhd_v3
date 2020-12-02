<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Register extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $data = array();
    $data['heading_title'] = 'สมัครโปรแกรมปี ' . ($this->session->has_userdata('year') ? $this->session->year : '');
    $data['action'] = base_url('register');

    $data['member_no'] = $this->session->member_info['member_no'];
    $data['email'] = $this->session->member_info['email'];

    $member_id = json_decode($this->encryption->decrypt($this->session->token))->id;
    $year_id = $this->model_setting->get('config_register_year_id'); // ? year open
    $register_id = $this->model_register->getRegisterByYearAndMember($member_id, $year_id)->id;

    if ($this->input->server('REQUEST_METHOD')=='POST') {
      $result = array();
      $total = 0;
      foreach ($this->input->post('program_id') as $checkbox_program_id => $value) {
        if ($value=='1') {
          $program_info = $this->model_program->getList($checkbox_program_id);
          $price = !empty($program_info->price) ? $program_info->price : 0;
          
          $total += (double)$price;
          
          $insert = array(
            'register_id' => $register_id,
            'parent_id' => 0, // ! if you have parentid
            'company_id' => $this->input->post('company_id'),
            'member_id' => $member_id,
            'year_id' => $year_id,
            'program_id' => $checkbox_program_id,
            'price' => $price,
            'date_added' => date('Y-m-d H:i:s')
          );
          $result[] = ($this->model_register_program->add($insert)>0) ? true : false;
        }
      }

      // ? update total in register this year
      $update = array(
        'total' => (double)$total
      );
      $this->model_register->edit($register_id, $update);

      if (in_array(false, $result)) {
        $this->session->set_userdata('error','เกิดข้อผิดพลาดไม่สามารถสมัครได้กรุณาลองใหม่อีกครั้ง');
        redirect('register/receipt');
      } else {
        $this->session->set_userdata('success','สมัครโปรแกรมเรียบร้อยแล้ว เมื่อท่านชำระเงินแล้วสามารถแจ้งชำระเงินได้ที่นี่');
        redirect('register/receipt');
      }
    }

    $filter = array();
    $data['programs'] = $this->model_program->getLists($filter, 0, 99999999999);

    $filter = array('member_id' => $member_id);
    $data['company'] = $this->model_company->getLists($filter, 0, 99999999999);

    $this->load->template('register/index', $data);
  }
  public function receipt(){
    $data = array();
    $json = json_decode($this->encryption->decrypt($this->session->token));
    $data['member_no'] = $json->{'member_no'};
    $data['firstname'] = $json->{'firstname'};
    $data['lastname'] = $json->{'lastname'};
    $data['date_added'] = $json->{'date_added'};
    $data['email'] = $json->{'email'};

    $member_id = $json->{'id'};
    $filter = array('member_id' => $member_id);
    $data['company'] = $this->model_company->getLists($filter, 0, 99999999999);
    $data['program_list'] = $this->model_register_program->getListProgram($member_id);

    // ส่วนของการคำนวณ
    $total = 0;
    $discount = 0;
    $case_one = "false";
    $case_two = "false";
    $case_tree = "false";
    foreach ($data['program_list'] as $key => $value) {
      $total += $value->price;
      if ($value->program_id == 10) {
        $case_one = "true";
      }else if ($value->program_id == 12) {
        $case_two = "true";
      }else if ($value->program_id == 13) {
        $case_tree = "true";
      }
    }
    if ($case_one == "true" && $case_two == "true" && $case_tree == "true") {
      $discount = 500;
    }else if ($case_one == "true" && $case_two == "true") {
      $discount = 200;
    }
    $data['total'] = $total;
    $data['discount'] = $discount;

    $this->load->view('register/receipt', $data);
  }
}
// }


/* End of file Register.php */
/* Location: ./application/controllers/Register.php */