<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Payment
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Payment extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->helper('url', 'form');
  }

  public function index()
  {
    $data = array();
    $data['success'] = $this->session->has_userdata('success') ? $this->session->success : ''; $this->session->unset_userdata('success');
    $data['error'] = $this->session->has_userdata('error') ? $this->session->error : ''; $this->session->unset_userdata('error');
    $data['uploadFailed'] = $this->session->has_userdata('uploadFailed') ? $this->session->uploadFailed : ''; $this->session->unset_userdata('uploadFailed');
    $data['uploadSuccess'] = $this->session->has_userdata('uploadSuccess') ? $this->session->uploadSuccess : ''; $this->session->unset_userdata('uploadSuccess');
    $data['action'] = base_url('payment/do_upload');
    $data['user_detail'] = $this->session->member_info['member_no'];

    $json = $this->encryption->decrypt($this->session->token);
    $jsondata = json_decode($json);
    $data['firstname'] = $jsondata->{'firstname'};
    $data['lastname'] = $jsondata->{'lastname'};


    $member_id = $jsondata->{'id'};
    $data['program_list'] = $this->model_register_program->getListProgram($member_id);
    // คำนวณ
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
    $data['discount'] = $discount;
    $data['total'] = $total;
    $this->load->template('payment/index', $data);

  }

  public function do_upload()
  {
    $json = $this->encryption->decrypt($this->session->token);
    $jsondata = json_decode($json);
    $member_no = $jsondata->{'member_no'};
    if ($this->input->server('REQUEST_METHOD')=='POST') {
      if($this->input->post('bank_comp')!=''){
        $bank = $this->input->post('bank_comp');
      }if($this->input->post('bank_oth')!=''){
        $bank = $this->input->post('bank_oth');
      }
      $image = $_FILES['inputSlip']['name'];
      $insert = array(
        'member_id'   =>    $member_no,
        'admin_id'    =>    0, // admin for check data
        'image'       =>    $image,
        'bank_name'   =>    $bank,
        'date_added'  =>    $this->input->post('date_payment'),
        'time_stamp'  =>    $this->input->post('time_payment'),
      );
      $result[] = ($insert)>0 ? true : false;

      //upload image
      $config['upload_path']          =   './upload/';
      $config['allowed_types']        =   'jpeg|jpg|png';
      $config['max_size']             =   2048;
      $config['max_width']            =   0; //set 0 for free width
      $config['max_height']           =   0; //set 0 for free height
      $this->load->library('upload', $config);
      $this->upload->initialize($config);
      if (in_array(!$this->upload->do_upload('inputSlip'),$result)) {
        $this->session->set_userdata('uploadFailed','เกิดข้อผิดพลาดไม่สามารถแจ้งชำระเงินได้กรุณาลองใหม่อีกครั้ง');
        redirect('payment');
      } else {
        $this->session->set_userdata('uploadSuccess','แจ้งชำระเงินเรียบร้อยแล้ว');
        $this->model_payment->add($insert);
        redirect('payment');
      }
    }
  }
}

/* End of file Payment.php */
 /* Location: ./application/controllers/Payment.php */