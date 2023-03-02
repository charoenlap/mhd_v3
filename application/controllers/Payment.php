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
    $data['success'] = $this->session->has_userdata('success') ? $this->session->success : '';
    $this->session->unset_userdata('success');
    $data['error'] = $this->session->has_userdata('error') ? $this->session->error : '';
    $this->session->unset_userdata('error');
    $data['uploadFailed'] = $this->session->has_userdata('uploadFailed') ? $this->session->uploadFailed : '';
    $this->session->unset_userdata('uploadFailed');
    $data['uploadSuccess'] = $this->session->has_userdata('uploadSuccess') ? $this->session->uploadSuccess : '';
    $this->session->unset_userdata('uploadSuccess');
    $data['action'] = base_url('payment/do_upload');
    $data['user_detail'] = $this->session->member_info['member_no'];
    $data['link_register'] = base_url('register');

    $json = $this->encryption->decrypt($this->session->token);
    $jsondata = json_decode($json);
    $data['firstname'] = $jsondata->{'firstname'};
    $data['lastname'] = $jsondata->{'lastname'};

    // Find register_id for find program in register
    $member_id = json_decode($this->encryption->decrypt($this->session->token))->id;
    $year_id = $this->model_setting->get('config_register_year_id'); // year
    $register_info = $this->model_register->getRegisterByYearAndMember($member_id, $year_id);
    $company_id = $register_info->company_id;
    $register_id = (int) $register_info->id;

    // Get List Program
    // $data['program_list'] = $this->model_register_program->getListProgramByYear($register_id, $member_id, $company_id, false);
    $data['program_list'] = $this->model_register_program->getListProgramByYear($register_id, $member_id, $company_id,$year_id);

    $data['json_payment'] = array();
    foreach ($data['program_payments'] as $key => $vals) {
      $data['json_payment'][] = json_decode($vals->program_payment);
    }
    $filter = array();
    $programs = $this->model_program->getLists($filter, 0, 99999999999);

    // Condition discount only program
    $total = 0;
    $discount = 0;
    $price_slip = 0;
    $case_one = "false";
    $case_two = "false";
    $case_tree = "false";
    $data['program_send_slip'] = array();
    foreach ($data['program_list'] as $key => $value) {
      $total += $value->price;
      if ($value->program_id == 10) {
        $case_one = "true";
      } else if ($value->program_id == 12) {
        $case_two = "true";
      } else if ($value->program_id == 13) {
        $case_tree = "true";
      }
      $payment_info = $this->model_payment->getList($value->payment_id);
      $data['program_payments'] = $this->model_payment_assign->getPaymentById($payment_info->id);
      $data['payment_info'] = $this->model_payment->getList($value->payment_id);
      $data['payment_program'] = json_decode($payment_info->payment_program);
      $data['program_send_slip'][]  = $value->send_slip;
      $payment = 0;
      foreach ($programs as $program) {
        foreach ($data['payment_program'] as $payment_value) {
          if ($program->id == $payment_value) {
            $payment += (float)$program->price;
          }
        }
      }
      $data['payment_pros'] = $payment;
      $data['program_list'][$key]->payment_method = $payment_info->payment_method;
      $data['program_list'][$key]->image = $payment_info->image;
      if ($case_one == "true" && $case_two == "true" && $case_tree == "true") {
        $discount = 500;
      } else if ($case_one == "true" && $case_two == "true") {
        $discount = 200;
      }
      if($value->send_slip == 1){
        foreach($programs as $program_slip){
          if($program_slip->id == $value->program_id){
            $price_slip += $program_slip->price;
          }
        }
      }
    }

    // if ($case_one == "true" && $case_two == "true" && $case_tree == "true") {
    //   $discount = 500;
    // } else if ($case_one == "true" && $case_two == "true") {
    //   $discount = 200;
    // }
    // if($value->send_slip == 1){
    //   foreach($programs as $program_slip){
    //     if($program_slip->id == $value->program_id){
    //       $price_slip += $program_slip->price;
    //     }
    //   }
    // }

    if($discount > 0 ){
      $data['price_slip'] = $price_slip - $discount; 
    } else {
      $data['price_slip'] = $price_slip;
    }
    $total_discount = $total - $discount;
    $data['total_payments'] = $total_discount - $data['price_slip'];
    $data['discount'] = $discount;
    $data['total'] = $total;
    $this->load->template('payment/index', $data);
  }

  public function do_upload()
  {
    $json = $this->encryption->decrypt($this->session->token);
    $jsondata = json_decode($json);
    $member_no = $jsondata->{'member_no'};
    if ($this->input->server('REQUEST_METHOD') == 'POST') {
      if ($this->input->post('bank_comp') != '') {
        $bank = $this->input->post('bank_comp');
      }
      if ($this->input->post('bank_oth') != '') {
        $bank = $this->input->post('bank_oth');
      }

      // find register id
      $member_id = json_decode($this->encryption->decrypt($this->session->token))->id;
      $year_id = $this->model_setting->get('config_register_year_id'); // year
      $register_info = $this->model_register->getRegisterByYearAndMember($member_id, $year_id);
      $company_id = $register_info->company_id;
      $register_id = isset($register_info->id) ? $register_info->id : 0;

      $filter = array();
      $programs = $this->model_program->getLists($filter, 0, 99999999999);
      // $price_total = 0;
      // foreach ($programs as $program){
      //   foreach ($json_program as $val_total){
      //     if($program->id == $val_total){
      //       $price_total += (double)$program->price;
      //     }
      //   }
      // }

      //upload image
      $config['upload_path'] = './upload/';
      $config['allowed_types'] = 'jpeg|jpg|png';
      $config['max_size'] = 2048;
      $config['max_width'] = 0; //set 0 for free width
      $config['max_height'] = 0; //set 0 for free height
      $config['remove_spaces'] = true;
      $config['encrypt_name'] = true;

      $this->load->library('upload', $config);
      $this->upload->initialize($config);
      if (!$this->upload->do_upload('inputSlip')) {
        $this->session->set_userdata('uploadFailed', 'เกิดข้อผิดพลาดไม่สามารถแจ้งชำระเงินได้กรุณาลองใหม่อีกครั้ง ' . $this->upload->display_errors());
      } else {
        $uploaded = $this->upload->data();
        $image = $uploaded['file_name'];

        $filter = array(
          'mhd_payment.register_id' => $register_id,
          'mhd_payment.member_id'   => $member_id,
        );
        $payment_info = $this->model_payment->getLists($filter);
        $payment_info = $payment_info[0];
        $payment_program = json_decode($payment_info->payment_program);

        $data['program_list'] = $this->model_register_program->getListProgramByYear($register_id, $member_id, $company_id,$year_id);
        // $program_payments = $this->model_payment->getPaymentByMemberIdRegisterId($member_id,$register_id);
        $total = 0;
        $discount = 0;
        $case_one = "false";
        $case_two = "false";
        $case_tree = "false";
        $program_price = 0;
        $value_payment = $this->input->post('program_payment_list');

        $register_value_program = array();
        foreach ($data['program_list'] as $key => $values) {
          $register_value_program[] = $values->program_id;
        }

        if (!empty($value_payment)) {

          foreach ($this->input->post('program_payment_list') as $key => $val) {
            if ($val == 10) {
              $case_one = "true";
            } else if ($val == 12) {
              $case_two = "true";
            } else if ($val == 13) {
              $case_tree = "true";
            }
            if ($case_one == "true" && $case_two == "true" && $case_tree == "true") {
              $discount = 500;
            } else if ($case_one == "true" && $case_two == "true") {
              $discount = 200;
            }
            foreach ($programs as $program) {
              if ($val == $program->id) {
                $program_price += (float)$program->price;

              }
            }
            if ($discount > 0) {
              $price_total = $program_price - $discount;
            } else {
              $price_total = $program_price;
            }
          }
        }
        if($payment_info->total > 0 && !empty($payment_info->total)){
          $total_payment = $price_total + $payment_info->total; 
        } else {
          $total_payment = $price_total;
        }

        $update = array(
          'register_id'     => $register_id,
          'member_id'       => $member_no,
          'admin_id'        => 0, // admin for check data
          'image'           => $image,
          'bank_name'       => $bank,
          'payment_method'  => 'bank_transfer',
          'payment_program' => json_encode($value_payment),
          'total'           => $total_payment,
          'slip_date'       => $this->input->post('date_payment'),
          'slip_time'       => $this->input->post('time_payment'),
          'date_modify'     => date('Y-m-d H:i:s'),
        );
        $insert_assign = array(
          'payment_id'        => $payment_info->id,
          'program_payment'   => json_encode($value_payment),
          'admin_id'          => 0, // admin for check data
          'status'            => 0,
          'image'             => $image,
          'date_added'        => date('Y-m-d H:i:s')
        );
        $resultpayment = $this->model_payment->edit($payment_info->id, $update);
        $add_payment_assign = $this->model_payment_assign->add($insert_assign);

        //find register program and update flag payments  
        $register_progs = $this->model_register_program->getListProgramByMemberIdYear($member_id,$year_id);
        foreach($register_progs as $value_pro){
          $register_values = array(
            'send_slip'   =>  1 ,
            'date_modify' =>  date('Y-m-d H:i:s')
          );
          foreach($value_payment as $value_pay){
            if($value_pay == $value_pro->program_id){
              $edit_register_program = $this->model_register_program->edit($value_pro->id,$register_values);
            }
          }
        }

        if ($resultpayment && $add_payment_assign && $edit_register_program > 0) {
          $this->session->set_userdata('uploadSuccess', 'แจ้งชำระเงินเรียบร้อยแล้ว รอเจ้าหน้าที่ตรวจสอบระบบ');
        } else {
          $this->session->set_userdata('uploadFailed', 'เกิดข้อผิดพลาดในการบันทึกข้อมูล กรุณาติดต่อเจ้าหน้าที่');
        }
      }
      redirect('payment');
    }
  }
}

/* End of file Payment.php */
/* Location: ./application/controllers/Payment.php */
