<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Testresult extends CI_Controller
{
    public function __construct()
  {
    parent::__construct();
  }
  public function index()
  {
    $data = array();
    $data['heading_title'] = 'แจ้งส่งผลการทดสอบ ';
    $data['action'] = base_url('testresult/detail');
    $data['test_result'] = 280;
    $filter = array();
    $data['programs'] = $this->model_program->getLists($filter, 0, 99999999999);

    $this->load->template('testresult/index', $data);
  }
  public function detail()
  {
    $data = array();
    $data['heading_title'] = 'Trial';
    $data['action'] = base_url('testresult/graph');
    $this->load->template('testresult/detail',$data);
  }
  public function graph()
  {
    $data = array();
    $data['heading_title'] = 'Graph';
    $this->load->template('testresult/graph',$data);  
  }
  public function program_report_EQAC()
  {
    $data = array();
    $data['heading_title'] = 'รายงานผลการทดสอบ';
    $data['action'] = base_url('testresult/program_report_EQAC');
    array('datepick','received_status','received_status_other',
    'principle[1-24]','instrument[1-24]','method[1-24]','result_2[1-24]','name_lname','tel','position','comment','report_date');

    if ($this->input->server('REQUEST_METHOD')=='POST') {
      $insert = array(
        'datepick'   =>    $this->input->post('datepick'),
        'received_status'   =>    $this->input->post('received_status'),
        'received_status_other'   =>    $this->input->post('received_status_other'),
        'name_lname'   =>    $this->input->post('name_lname'),
        'tel'   =>    $this->input->post('tel'),
        'position'   =>    $this->input->post('position'),
        'comment'   =>    $this->input->post('comment'),
        'report_date'   =>    $this->input->post('report_date')
      );
    }
    $this->load->template('testresult/program_report_EQAC',$data);  
  }

  public function program_report_EQAH()
  {
    $data = array();
    $data['heading_title'] = 'รายงานผลการทดสอบ';
    $data['action'] = base_url('testresult/program_report_EQAH');
    $this->load->template('testresult/program_report_EQAH',$data);
  }

  public function program_report_EQAT()
  {
    $data = array();
    $data['heading_title'] = 'รายงานผลการทดสอบ';
    $data['action'] = base_url('testresult/program_report_EQAT');
    $this->load->template('testresult/program_report_EQAT',$data);
  }

  public function program_report_EQAP()
  {
    $data = array();
    $data['heading_title'] = 'รายงานผลการทดสอบ';
    $data['action'] = base_url('testresult/program_report_EQAP');
    $this->load->template('testresult/program_report_EQAP',$data);
  }

  public function program_report_B_EQAM()
  {
    $data = array();
    $data['heading_title'] = 'รายงานผลการทดสอบ';
    $data['action'] = base_url('testresult/program_report_H_EQAM');
    $this->load->template('testresult/program_report_B_EQAM',$data);
  }

  public function program_report_H_EQAM()
  {
    $data = array();
    $data['heading_title'] = 'รายงานผลการทดสอบ';
    $data['action'] = base_url('testresult/program_report_H_EQAM');

    if ($this->input->server('REQUEST_METHOD')=='POST') {
      $insert = array(
        'datepick'  =>  $this->input->post('datepick'),
      );
      $result[] = ($insert)>0 ? true : false;

      $config['upload_path']          =   './upload/';
      $config['allowed_types']        =   'jpeg|jpg|png';
      $config['max_size']             =   2048;
      $config['max_width']            =   0; //set 0 for free width
      $config['max_height']           =   0; //set 0 for free height
      $this->load->library('upload', $config);
      $this->upload->initialize($config);
      if (!$this->upload->do_upload('file_0')) {
        $this->session->set_userdata('uploadFailed','เกิดข้อผิดพลาดไม่สามารถ อัพโหลดไฟล์ได้กรุณาลองใหม่อีกครั้ง');
        redirect('testresult/program_report_H_EQAM');
      } else {
        $this->session->set_userdata('uploadSuccess','อัพโหลดไฟล์สำเร็จ');
        $this->upload->do_upload('file_1');
        
        redirect('testresult/program_report_H_EQAM');
      }
    }
    $this->load->template('testresult/program_report_H_EQAM',$data);
  }

  public function program_report_UC_EQAM()
  {
    $data = array();
    $data['heading_title'] = 'รายงานผลการทดสอบ';
    $data['action'] = base_url('testresult/program_report_UC_EQAM');
    $this->load->template('testresult/program_report_UC_EQAM',$data);
  }

  public function program_report_EQAI_SYPHI()
  {
    $data = array();
    $data['heading_title'] = 'รายงานผลการทดสอบ';
    $data['action'] = base_url('testresult/program_report_EQAI_SYPHI');
    $this->load->template('testresult/program_report_EQAI_SYPHI',$data);
  }

  public function program_report_EQAI_HBV()
  {
    $data = array();
    $data['heading_title'] = 'รายงานผลการทดสอบ';
    $data['action'] = base_url('testresult/program_report_EQAI_HBV');
    $this->load->template('testresult/program_report_EQAI_HBV',$data);
  }

  public function program_report_EQAB_GRAM()
  {
    $data = array();
    $data['heading_title'] = 'รายงานผลการทดสอบ';
    $data['action'] = base_url('testresult/program_report_EQAB_GRAM');
    $this->load->template('testresult/program_report_EQAB_GRAM',$data);
  }
}

?>