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
    $filter = array();
    $data['programs'] = $this->model_program->getLists($filter, 0, 99999999999);
    $this->load->template('testresult/index', $data);
  }
  public function detail()
  {
    $data = array();
    $data['heading_title'] = 'Trial';
    $data['action'] = base_url('testresult/graph');
    $id_pro = $this->uri->uri_to_assoc();
    $id_program = $id_pro['id'];
    $val_program = $this->model_program->getList($id_program);
    $name = $val_program->name;
    $data['name'] = preg_replace('/[-:& ]/','_',$name);
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
    $data['action'] = base_url('testresult/preview_EQAC'); 
    
    /* 
    variable in form
    'datepick'  = วันที่ได้รับตัวอย่างทดสอบ
    'received_status' = อยู่ในสภาพสมบูรณ์
    'received_status_other' = เนื่องจาก
    'principle[]' = Principle/Method 
    'instrument[]'  = Instrument
    'method[]'  = Reagent
    'result_2[]'  = Result

    //ข้อมูลผู้ส่ง 
    'name_lname' = ชื่อ  name = name_lname
    'tel' = หมายเลขโทรศัพท์ name = tel
    'position' = ตำแหน่ง name = position
    'comment' = ข้อคิดเห็นหรือเสนอแนะเพื่อการพัฒนาปรับปรุง name = comment
    'report_date' = วันที่ทำการทดสอบ name = report_date
    */

    if ($this->input->server('REQUEST_METHOD')=='POST') {
      $insert = array(
        'datepick'                  =>    $this->input->post('datepick'),
        'received_status'           =>    $this->input->post('received_status'),
        'received_status_other'     =>    $this->input->post('received_status_other'),
        'principle[]'               =>    $this->input->post('principle[]'),
        'insrtument[]'              =>    $this->input->post('insrtument[]'),
        'method[]'                  =>    $this->input->post('method[]'),
        'result_2[]'                =>    $this->input->post('result_2[]'),
        
        'name_lname'              =>    $this->input->post('name_lname'),
        'tel'                     =>    $this->input->post('tel'),
        'position'                =>    $this->input->post('position'),
        'comment'                 =>    $this->input->post('comment'),
        'report_date'             =>    $this->input->post('report_date')
      );
      
    }
    $this->session->set_userdata('title','EQAC');
    $this->load->template('testresult/program_report_EQAC',$data);  
  }

  public function program_report_EQAH()
  {
    $data = array();
    $data['heading_title'] = 'รายงานผลการทดสอบ';
    $data['action'] = base_url('testresult/preview_EQAH');
   /* 
    variable in form
    'datepick'  = วันที่ได้รับตัวอย่างทดสอบ
    'received_status' = อยู่ในสภาพสมบูรณ์
    'received_status_other' = เนื่องจาก
    'tools[]' = Code column
    'method[]' = Principle column
    'method_other[1]' = Principle column other input
    'sample[0][]' = Sample1 coloumn
    'sample[1][]' = Sample2 coloumn

    //ข้อมูลผู้ส่ง 
    'name_lname' = ชื่อ  name = name_lname
    'tel' = หมายเลขโทรศัพท์ name = tel
    'position' = ตำแหน่ง name = position
    'comment' = ข้อคิดเห็นหรือเสนอแนะเพื่อการพัฒนาปรับปรุง name = comment
    'report_date' = วันที่ทำการทดสอบ name = report_date
    */

    if ($this->input->server('REQUEST_METHOD')=='POST') {

      $insert = array(
        'datepick'                  =>    $this->input->post('datepick'),
        'received_status'           =>    $this->input->post('received_status'),
        'received_status_other'     =>    $this->input->post('received_status_other'),
        'tools[]'                   =>    $this->input->post('tools[]'),
        'method[]'                  =>    $this->input->post('method[]'),
        'method_other[]'            =>    $this->input->post('method_other[]'),
        'sample[0][]'               =>    $this->input->post('sample[0][]'),
        'sample[1][]'               =>    $this->input->post('sample[1][]'),
        
        'name_lname'              =>    $this->input->post('name_lname'),
        'tel'                     =>    $this->input->post('tel'),
        'position'                =>    $this->input->post('position'),
        'comment'                 =>    $this->input->post('comment'),
        'report_date'             =>    $this->input->post('report_date')
      );

    }
    $this->session->set_userdata('title','EQAH');
    $this->load->template('testresult/program_report_EQAH',$data);
  }

  public function program_report_EQAT()
  {
    $data = array();
    $data['heading_title'] = 'รายงานผลการทดสอบ';
    $data['action'] = base_url('testresult/preview_EQAT');
    /* 
    variable in form
    'datepick'  = วันที่ได้รับตัวอย่างทดสอบ
    'received_status' = อยู่ในสภาพสมบูรณ์
    'received_status_other' = เนื่องจาก
    'tools[]' = Instruments column
    'method[]' = Principle column
    'method_other[1]' = Principle column other input
    'sample[0][]' = Trial 290 coloumn
    'sample[1][]' = Trial 291 coloumn

    //ข้อมูลผู้ส่ง 
    'name_lname' = ชื่อ  name = name_lname
    'tel' = หมายเลขโทรศัพท์ name = tel
    'position' = ตำแหน่ง name = position
    'comment' = ข้อคิดเห็นหรือเสนอแนะเพื่อการพัฒนาปรับปรุง name = comment
    'report_date' = วันที่ทำการทดสอบ name = report_date
    */

    if ($this->input->server('REQUEST_METHOD')=='POST') {

      $insert = array(
        'datepick'                  =>    $this->input->post('datepick'),
        'received_status'           =>    $this->input->post('received_status'),
        'received_status_other'     =>    $this->input->post('received_status_other'),
        'tools[]'                   =>    $this->input->post('tools[]'),
        'method[]'                  =>    $this->input->post('method[]'),
        'method_other[]'            =>    $this->input->post('method_other[]'),
        'sample[0][]'               =>    $this->input->post('sample[0][]'),
        'sample[1][]'               =>    $this->input->post('sample[1][]'),
        
        'name_lname'              =>    $this->input->post('name_lname'),
        'tel'                     =>    $this->input->post('tel'),
        'position'                =>    $this->input->post('position'),
        'comment'                 =>    $this->input->post('comment'),
        'report_date'             =>    $this->input->post('report_date')
      );
    }
    $this->session->set_userdata('title','EQAT');
    $this->load->template('testresult/program_report_EQAT',$data);
  }

  public function program_report_EQAP()
  {
    $data = array();
    $data['heading_title'] = 'รายงานผลการทดสอบ';
    $data['action'] = base_url('testresult/preview_EQAP');
    /* 
    variable in form
    'datepick'  = วันที่ได้รับตัวอย่างทดสอบ
    'received_status' = อยู่ในสภาพสมบูรณ์
    'received_status_other' = เนื่องจาก
    'sample[0][]' = ลำดับที่ coloumn
    'sample[1][]' = ลำดับที่ coloumn
    'file_0'  = file ที่ 1
    'file_1'  = file ที่ 2

    //ข้อมูลผู้ส่ง 
    'name_lname' = ชื่อ  name = name_lname
    'tel' = หมายเลขโทรศัพท์ name = tel
    'position' = ตำแหน่ง name = position
    'comment' = ข้อคิดเห็นหรือเสนอแนะเพื่อการพัฒนาปรับปรุง name = comment
    'report_date' = วันที่ทำการทดสอบ name = report_date
    */

    if ($this->input->server('REQUEST_METHOD')=='POST') {

      $insert = array(
        'datepick'                  =>    $this->input->post('datepick'),
        'received_status'           =>    $this->input->post('received_status'),
        'received_status_other'     =>    $this->input->post('received_status_other'),
        'sample[0][]'               =>    $this->input->post('sample[0][]'),
        'file_0'                    =>    $this->input->post('file_0'),
        'file_1'                    =>    $this->input->post('file_1'),
        
        'name_lname'              =>    $this->input->post('name_lname'),
        'tel'                     =>    $this->input->post('tel'),
        'position'                =>    $this->input->post('position'),
        'comment'                 =>    $this->input->post('comment'),
        'report_date'             =>    $this->input->post('report_date')
      );
    }
    $this->session->set_userdata('title','EQAP');
    $this->load->template('testresult/program_report_EQAP',$data);
  }

  public function program_report_B_EQAM()
  {
    $data = array();
    $data['heading_title'] = 'รายงานผลการทดสอบ';
    $data['action'] = base_url('testresult/preview_B_EQAM');

    /* 
    variable in form
    'datepick'  = วันที่ได้รับตัวอย่างทดสอบ
    'received_status' = อยู่ในสภาพสมบูรณ์
    'received_status_other' = เนื่องจาก
    'tool' = เลือกรายชื่อเครื่อง
    'tool_other'  = รายชื่อเครื่องอื่น ๆ
    'result_0'  = WBC (x109/L)
    'result_1'  = RBC (x1012/L)
    'result_2'  = Hb (g/dL)
    'result_3'  = Hct (%)
    'result_4'  = MCV (fL)
    'result_5'  = MCH (pg)
    'result_6'  = MCHC (g/dL)
    'result_7'  = RDW (%)
    'result_8'  = PLT (x109/L)
    'file_0'  = file ที่ 1
    'file_1'  = file ที่ 2

    //ข้อมูลผู้ส่ง 
    'name_lname' = ชื่อ  name = name_lname
    'tel' = หมายเลขโทรศัพท์ name = tel
    'position' = ตำแหน่ง name = position
    'comment' = ข้อคิดเห็นหรือเสนอแนะเพื่อการพัฒนาปรับปรุง name = comment
    'report_date' = วันที่ทำการทดสอบ name = report_date
    */

    if ($this->input->server('REQUEST_METHOD')=='POST') {

      $insert = array(
        'datepick'                  =>    $this->input->post('datepick'),
        'received_status'           =>    $this->input->post('received_status'),
        'received_status_other'     =>    $this->input->post('received_status_other'),
        'tool'                      =>    $this->input->post('tool'),
        'tool_other'                =>    $this->input->post('tool_other'),
        'result_0'                  =>    $this->input->post('result_0'),
        'result_1'                  =>    $this->input->post('result_1'),
        'result_2'                  =>    $this->input->post('result_2'),
        'result_3'                  =>    $this->input->post('result_3'),
        'result_4'                  =>    $this->input->post('result_4'),
        'result_5'                  =>    $this->input->post('result_5'),
        'result_6'                  =>    $this->input->post('result_6'),
        'result_7'                  =>    $this->input->post('result_7'),
        'result_8'                  =>    $this->input->post('result_8'),
        'file_0'                    =>    $this->input->post('file_0'),
        'file_1'                    =>    $this->input->post('file_1'),
        
        'name_lname'              =>    $this->input->post('name_lname'),
        'tel'                     =>    $this->input->post('tel'),
        'position'                =>    $this->input->post('position'),
        'comment'                 =>    $this->input->post('comment'),
        'report_date'             =>    $this->input->post('report_date')
      );
    }
    $this->session->set_userdata('title','B_EQAM');
    $this->load->template('testresult/program_report_B_EQAM',$data);
  }

  public function program_report_H_EQAM()
  {
    $data = array();
    $data['heading_title'] = 'รายงานผลการทดสอบ';
    $data['action'] = base_url('testresult/preview_H_EQAM');
    /* 
    variable in form
    'datepick'  = วันที่ได้รับตัวอย่างทดสอบ
    'received_status' = อยู่ในสภาพสมบูรณ์
    'received_status_other' = เนื่องจาก
    'sample[0][]' = 6301.1 (%) input number firsttable 
    'sample[1][]' = 6301.2 (%) input number firsttable
    'sum_sec1[0][]'  = 6301.1 (%) input number total id = sum_amount_0
    'sum_sec1[1][]'  = 6301.2 (%) input number total id = sum_amount_0
    'sample[0][]'  = 6301.1 (Found) checkbox  Abnormal WBC เลือกเฉพาะเซลล์หรือความผิดปกติที่ตรวจพบเท่านั้น
    'sample[1][]'  = 6301.2 (Found) checkbox  Abnormal WBC เลือกเฉพาะเซลล์หรือความผิดปกติที่ตรวจพบเท่านั้น
    'sample[0][]'  = 6301.1 radio การรายงานรูปร่าง RBC และการ grading 
    'sample[1][]'  = 6301.2 radio การรายงานรูปร่าง RBC และการ grading
    'sample[0][]'  = 6301.1 (Found) checkbox รายงานรูปร่างเม็ดเลือดแดง
    'sample[1][]'  = 6301.2 (Found) checkbox รายงานรูปร่างเม็ดเลือดแดง
    'sample[0][48]'  = 6301.1 (Found) input text รายงานรูปร่างเม็ดเลือดแดง
    'sample[1][48]'  = 6301.2 (Found) input text รายงานรูปร่างเม็ดเลือดแดง
    'sample[0][]'  = 6301.1 select Platelet estimation
    'sample[1][]'  = 6301.2 select Platelet estimation
    'sample[0][]'  = 6301.1 checkbox Abnormal Platelet
    'sample[1][]'  = 6301.2 checkbox Abnormal Platelet
    'sample[0][]'  = 6301.1 input text Abnormal Platelet
    'sample[1][]'  = 6301.2 input text Abnormal Platelet
    'file_0'  = file ที่ 1
    'file_1'  = file ที่ 2

    //ข้อมูลผู้ส่ง 
    'name_lname' = ชื่อ  name = name_lname
    'tel' = หมายเลขโทรศัพท์ name = tel
    'position' = ตำแหน่ง name = position
    'comment' = ข้อคิดเห็นหรือเสนอแนะเพื่อการพัฒนาปรับปรุง name = comment
    'report_date' = วันที่ทำการทดสอบ name = report_date
    */
    if ($this->input->server('REQUEST_METHOD')=='POST') {

      $insert = array(
        'datepick'                  =>    $this->input->post('datepick'),
        'received_status'           =>    $this->input->post('received_status'),
        'received_status_other'     =>    $this->input->post('received_status_other'),
        'sample'                    =>    $this->input->post('sample'),
        'sum_sec1'                  =>    $this->input->post('sum_sec1'),
        'file_0'                    =>    $this->input->post('file_0'),
        'file_1'                    =>    $this->input->post('file_1'),
        
        'name_lname'              =>    $this->input->post('name_lname'),
        'tel'                     =>    $this->input->post('tel'),
        'position'                =>    $this->input->post('position'),
        'comment'                 =>    $this->input->post('comment'),
        'report_date'             =>    $this->input->post('report_date')
      );
      $this->output->set_output(json_encode($insert));
      // $data['encode_post'] = $this->output->set_output(json_encode());
    }
    $this->session->set_userdata('title','H_EQAM');
    $this->load->template('testresult/program_report_H_EQAM',$data);
  }

  public function program_report_UC_EQAM()
  {
    $data = array();
    $data['heading_title'] = 'รายงานผลการทดสอบ';
    $data['action'] = base_url('testresult/preview_UC_EQAM');
    $filter = array();
    $data['name'] = $this->model_program_infection->getLists($filter, 0, 99999999999);

    /* 
    variable in form
    'datepick'  = วันที่ได้รับตัวอย่างทดสอบ
    'received_status' = อยู่ในสภาพสมบูรณ์
    'received_status_other' = เนื่องจาก
    'sample_1[0]' = Trial 185 radio 
    'sample_1[1]' = Trial 186 radio
    'sample_other_1[0]' = Trial 186 input text 
    'sample_other_1[0]' = Trial 186 input text 
    'file_0'  = file ที่ 1
    'file_1'  = file ที่ 2

    //ข้อมูลผู้ส่ง 
    'name_lname' = ชื่อ  name = name_lname
    'tel' = หมายเลขโทรศัพท์ name = tel
    'position' = ตำแหน่ง name = position
    'comment' = ข้อคิดเห็นหรือเสนอแนะเพื่อการพัฒนาปรับปรุง name = comment
    'report_date' = วันที่ทำการทดสอบ name = report_date
    */

    if ($this->input->server('REQUEST_METHOD')=='POST') {

      $insert = array(
        'datepick'                  =>    $this->input->post('datepick'),
        'received_status'           =>    $this->input->post('received_status'),
        'received_status_other'     =>    $this->input->post('received_status_other'),
        'tool'                      =>    $this->input->post('tool'),
        'tool_other'                =>    $this->input->post('tool_other'),
        'sample_1[0]'               =>    $this->input->post('sample_1[0]'),
        'sample_1[1]'               =>    $this->input->post('sample_1[1]'),
        'sample_other_1[0]'         =>    $this->input->post('sample_other_1[0]'),
        'sample_other_1[1]'         =>    $this->input->post('sample_other_1[1]'),
        'file_0'                    =>    $this->input->post('file_0'),
        'file_1'                    =>    $this->input->post('file_1'),
        
        'name_lname'              =>    $this->input->post('name_lname'),
        'tel'                     =>    $this->input->post('tel'),
        'position'                =>    $this->input->post('position'),
        'comment'                 =>    $this->input->post('comment'),
        'report_date'             =>    $this->input->post('report_date')
      );
    }
    $this->session->set_userdata('title','UC_EQAM');
    $this->load->template('testresult/program_report_UC_EQAM',$data);
  }

  public function program_report_EQAI_SYPHILIS()
  {
    $data = array();
    $data['heading_title'] = 'รายงานผลการทดสอบ';
    $data['action'] = base_url('testresult/preview_EQAI_SYPHILIS');

    /* 
    variable in form
    'datepick'  = วันที่ได้รับตัวอย่างทดสอบ
    'received_status' = อยู่ในสภาพสมบูรณ์
    'received_status_other' = เนื่องจาก
    'tools[0]' = Non treponemal Test (Method) other_id="other_ntp" 
    'tools_other[0]' = Non treponemal Test (Method Other) other_id="other_ntp" 
    'tools[1]' = Treponemal Test (Method) other_id="other_tp" 
    'tools_other[1]' = Treponemal Test (Method) other_id="other_tp"

    'ntp_result' = Non treponemal Test (Instrument/Test Kit/ Brand)  Input text
    'tp_result' = Treponemal Test (Instrument/Test Kit/ Brand)  Input text

    'ntp_lot_number' = Non treponemal Test (Reagent Lot Number)  Input text
    'tp_lot_number' = Treponemal Test (Reagent Lot Number)  Input text

    //ข้อมูลผู้ส่ง 
    'name_lname' = ชื่อ  name = name_lname
    'tel' = หมายเลขโทรศัพท์ name = tel
    'position' = ตำแหน่ง name = position
    'comment' = ข้อคิดเห็นหรือเสนอแนะเพื่อการพัฒนาปรับปรุง name = comment
    'report_date' = วันที่ทำการทดสอบ name = report_date
    */
    if ($this->input->server('REQUEST_METHOD')=='POST') {
      $preview[] = '';
      $preview = array(
        'datepick'                  =>    $this->input->post('datepick'),
        'received_status'           =>    $this->input->post('received_status'),
        'received_status_other'     =>    $this->input->post('received_status_other'),
        'tools'                     =>    $this->input->post('tools'),
        'tool_other'                =>    $this->input->post('tool_other'),
        'ntp_result'                =>    $this->input->post('ntp_result'),
        'tp_result'                 =>    $this->input->post('tp_result'),
        'ntp_lot_number'            =>    $this->input->post('ntp_lot_number'),
        'tp_lot_number'             =>    $this->input->post('tp_lot_number'),

        'name_lname'              =>    $this->input->post('name_lname'),
        'tel'                     =>    $this->input->post('tel'),
        'position'                =>    $this->input->post('position'),
        'comment'                 =>    $this->input->post('comment'),
        'report_date'             =>    $this->input->post('report_date')
      );
    }
    $this->session->set_userdata('title','EQAI_SYPHILIS');
    $this->load->template('testresult/program_report_EQAI_SYPHILIS',$data);
  }

  public function program_report_EQAI_HBV()
  {
    $data = array();
    $data['heading_title'] = 'รายงานผลการทดสอบ';
    $data['action'] = base_url('testresult/preview_EQAI_HBV');

    /* 
    variable in form
    'datepick'  = วันที่ได้รับตัวอย่างทดสอบ
    'received_status' = อยู่ในสภาพสมบูรณ์
    'received_status_other' = เนื่องจาก
    'tool[]'  = Method
    'tool_auto[]' = Automation
    'tool_other[]'  = Other
    'result_1[]'  = Instrument/test kit/ Brand
    'result_2[]'  = Reagent Lot Number
    'result_3[]'  = Catalog number
    'sample_q_li[][]  = HBs Ag, Anti HBs, Anti HBc, HBe Ag, Anti HBe
    'tool_auto2[][]'  = Automation Principle column HBs Ag, Anti HBs
    'tool_reagent[][]'  = Instrument/test kit/ Brand column HBs Ag, Anti HBs
    'tool_lot[][]'   =  Reagent Lot Number
    'tool_catalog[][]'  = Catalog number
    'symbol[][]'  = HBs Ag (IU/ml) , Anti HBs (mlU/ml,IU/L)
    'symbol_new[][]'  = HBsAg (S/CO,COI,Index)กรอกช่องนี้และลงผล Qualitative ด้านบน
    'tool_specimen_hbs[][]' = HBs Ag (IU/ml) , Anti HBs (mlU/ml,IU/L)
    'tool_specimen_hbs_new[][]' = HBsAg (S/CO,COI,Index)กรอกช่องนี้และลงผล Qualitative ด้านบน
    //ข้อมูลผู้ส่ง 
    'name_lname' = ชื่อ  name = name_lname
    'tel' = หมายเลขโทรศัพท์ name = tel
    'position' = ตำแหน่ง name = position
    'comment' = ข้อคิดเห็นหรือเสนอแนะเพื่อการพัฒนาปรับปรุง name = comment
    'report_date' = วันที่ทำการทดสอบ name = report_date
    */

    if ($this->input->server('REQUEST_METHOD')=='POST') {

      $insert = array(
        'datepick'                  =>    $this->input->post('datepick'),
        'received_status'           =>    $this->input->post('received_status'),
        'received_status_other'     =>    $this->input->post('received_status_other'),
        'tool[]'                    =>    $this->input->post('tool[]'),
        'tool_auto[]'               =>    $this->input->post('tool_auto[]'),
        'tool_other[]'              =>    $this->input->post('tool_other[]'),
        'result_1[]'                =>    $this->input->post('result_1[]'),
        'result_2[]'                =>    $this->input->post('result_2[]'),
        'result_3[]'                =>    $this->input->post('result_3[]'),
        'sample_q_li[][]'           =>    $this->input->post('sample_q_li[][]'),
        'tool_auto2[][]'            =>    $this->input->post('tool_auto2[][]'),
        'tool_reagent[][]'          =>    $this->input->post('tool_reagent[][]'),
        'tool_lot[][]'              =>    $this->input->post('tool_lot[][]'),
        'tool_catalog[][]'          =>    $this->input->post('tool_catalog[][]'),
        'symbol[][]'                =>    $this->input->post('symbol[][]'),
        'symbol_new[][]'            =>    $this->input->post('symbol_new[][]'),
        'tool_specimen_hbs[][]'     =>    $this->input->post('tool_specimen_hbs[][]'),
        'tool_specimen_hbs_new[][]' =>    $this->input->post('tool_specimen_hbs_new[][]'),
        

        'name_lname'              =>    $this->input->post('name_lname'),
        'tel'                     =>    $this->input->post('tel'),
        'position'                =>    $this->input->post('position'),
        'comment'                 =>    $this->input->post('comment'),
        'report_date'             =>    $this->input->post('report_date')
      );
    }
    $this->session->set_userdata('title','EQAI_HBV');
    $this->load->template('testresult/program_report_EQAI_HBV',$data);
  }

  public function program_report_EQAB_GRAM()
  {
    $data = array();
    $data['heading_title'] = 'รายงานผลการทดสอบ';
    $data['action'] = base_url('testresult/preview_EQAB_GRAM');

    /* 
    variable in form
    'datepick'  = วันที่ได้รับตัวอย่างทดสอบ
    'received_status' = อยู่ในสภาพสมบูรณ์
    'received_status_other' = เนื่องจาก
    'sample[][]'  =   checkbox รายงานผลการย้อมสี

    //ข้อมูลผู้ส่ง 
    'name_lname' = ชื่อ  name = name_lname
    'tel' = หมายเลขโทรศัพท์ name = tel
    'position' = ตำแหน่ง name = position
    'comment' = ข้อคิดเห็นหรือเสนอแนะเพื่อการพัฒนาปรับปรุง name = comment
    'report_date' = วันที่ทำการทดสอบ name = report_date
    */

    if ($this->input->server('REQUEST_METHOD')=='POST') {

      $insert = array(
        'datepick'                  =>    $this->input->post('datepick'),
        'received_status'           =>    $this->input->post('received_status'),
        'received_status_other'     =>    $this->input->post('received_status_other'),
        'sample[][]'                =>    $this->input->post('sample[][]'),
        
        'name_lname'              =>    $this->input->post('name_lname'),
        'tel'                     =>    $this->input->post('tel'),
        'position'                =>    $this->input->post('position'),
        'comment'                 =>    $this->input->post('comment'),
        'report_date'             =>    $this->input->post('report_date')
      );
    }
    $this->session->set_userdata('title','EQAB_GRAM');
    $this->load->template('testresult/program_report_EQAB_GRAM',$data);
  }

  public function program_report_EQAB_AFB()
  {
    $data = array();
    $data['heading_title'] = 'รายงานผลการทดสอบ';
    $data['action'] = base_url('testresult/preview_EQAB_AFB');

    /* 
    variable in form
    'datepick'  = วันที่ได้รับตัวอย่างทดสอบ
    'received_status' = อยู่ในสภาพสมบูรณ์
    'received_status_other' = เนื่องจาก
    'sample[]'  =   radio รายงานผลการย้อมสี

    //ข้อมูลผู้ส่ง 
    'name_lname' = ชื่อ  name = name_lname
    'tel' = หมายเลขโทรศัพท์ name = tel
    'position' = ตำแหน่ง name = position
    'comment' = ข้อคิดเห็นหรือเสนอแนะเพื่อการพัฒนาปรับปรุง name = comment
    'report_date' = วันที่ทำการทดสอบ name = report_date
    */

    if ($this->input->server('REQUEST_METHOD')=='POST') {

      $insert = array(
        'datepick'                  =>    $this->input->post('datepick'),
        'received_status'           =>    $this->input->post('received_status'),
        'received_status_other'     =>    $this->input->post('received_status_other'),
        'sample[]'                =>    $this->input->post('sample[]'),
        
        'name_lname'              =>    $this->input->post('name_lname'),
        'tel'                     =>    $this->input->post('tel'),
        'position'                =>    $this->input->post('position'),
        'comment'                 =>    $this->input->post('comment'),
        'report_date'             =>    $this->input->post('report_date')
      );
    }
    $this->session->set_userdata('title','EQAB_AFB');
    $this->load->template('testresult/program_report_EQAB_AFB',$data);
  }

  public function program_report_EQAB_IDEN_AST()
  {
    $data = array();
    $data['heading_title'] = 'รายงานผลการทดสอบ';
    $data['action'] = base_url('testresult/preview_EQAB_IDEN_AST');

    /* 
    variable in form
    'datepick'  = วันที่ได้รับตัวอย่างทดสอบ
    'received_status' = อยู่ในสภาพสมบูรณ์
    'received_status_other' = เนื่องจาก
    'result'  =   radio 1.วิธีการที่ท่านใช้ในการตรวจวินิจฉัยเชื้อแบคทีเรียสำหรับตัวอย่างที่ได้รับ
    'result_other'  = radio other 1.วิธีการที่ท่านใช้ในการตรวจวินิจฉัยเชื้อแบคทีเรียสำหรับตัวอย่างที่ได้รับ
    'result_1[]'  = 2.รายงานชนิดของเชื้อแบคทีเรียที่พบในตัวอย่าง Trial 185
    'infection_sec1[0]' = radio 3.วิธีการที่ท่านใช้ในการทดสอบความไวต่อยาปฏิชีวนะสำหรับเชื้อตัวอย่างที่ได้รับ
    'infection_sec1_other[0]' = radio other 3.วิธีการที่ท่านใช้ในการทดสอบความไวต่อยาปฏิชีวนะสำหรับเชื้อตัวอย่างที่ได้รับ
    'tool_sec2[0][]'  = select 4.รายงานผลการทดสอบความไวต่อยาในตารางข้างล่างนี้ "ยา"
    'result_2[0][]' = input 4.รายงานผลการทดสอบความไวต่อยาในตารางข้างล่างนี้ "zone size (mm.)"
    'infection_sec3[0][]' = select 4.รายงานผลการทดสอบความไวต่อยาในตารางข้างล่างนี้ "การแปลผล"
    'result_3[0]' = input 4.รายงานผลการทดสอบความไวต่อยาในตารางข้างล่างนี้ "MIC(μg/ml) (ถ้ามี)"
    'result_4[]'  = input 5.ในกรณีที่ยาบางชนิดที่ท่านทดสอบนั้นมีวิธีการทดสอบที่แตกต่างไปจากที่ให้ข้อมูลโปรดระบุ
    'file_0'  = fileที่ 1 หากท่านประสงค์ต้องการแนบภาพถ่ายการย้อมสี อัพโหลดไฟล์ภาพ 
    'file_1'  = fileที่ 2 หากท่านประสงค์ต้องการแนบภาพถ่ายการย้อมสี อัพโหลดไฟล์ภาพ 
    'file_2'  = fileที่ 3 หากท่านประสงค์ต้องการแนบภาพถ่ายการย้อมสี อัพโหลดไฟล์ภาพ 
    'file_3'  = fileที่ 4 หากท่านประสงค์ต้องการแนบภาพถ่ายการย้อมสี อัพโหลดไฟล์ภาพ 
    
    //ข้อมูลผู้ส่ง 
    'name_lname' = ชื่อ  name = name_lname
    'tel' = หมายเลขโทรศัพท์ name = tel
    'position' = ตำแหน่ง name = position
    'comment' = ข้อคิดเห็นหรือเสนอแนะเพื่อการพัฒนาปรับปรุง name = comment
    'report_date' = วันที่ทำการทดสอบ name = report_date
    */

    if ($this->input->server('REQUEST_METHOD')=='POST') {

      $insert = array(
        'datepick'                  =>    $this->input->post('datepick'),
        'received_status'           =>    $this->input->post('received_status'),
        'received_status_other'     =>    $this->input->post('received_status_other'),
        'result[]'                  =>    $this->input->post('result[]'),
        'result_other[]'            =>    $this->input->post('result_other[]'),
        'result_1[]'                =>    $this->input->post('result_1[]'),
        'infection_sec1[]'          =>    $this->input->post('infection_sec1[]'),
        'infection_sec1_other[]'    =>    $this->input->post('infection_sec1_other[]'),
        'tool_sec2[][]'             =>    $this->input->post('tool_sec2[][]'),
        'infection_sec3[][]'        =>    $this->input->post('infection_sec3[][]'),
        'result_3[]'                =>    $this->input->post('result_3[]'),
        'result_4[]'                =>    $this->input->post('result_4[]'),
        'file_0[]'                  =>    $this->input->post('file_0[]'),
        'file_1[]'                  =>    $this->input->post('file_1[]'),
        'file_2[]'                  =>    $this->input->post('file_2[]'),
        'file_3[]'                  =>    $this->input->post('file_3[]'),
        
        
        'name_lname'              =>    $this->input->post('name_lname'),
        'tel'                     =>    $this->input->post('tel'),
        'position'                =>    $this->input->post('position'),
        'comment'                 =>    $this->input->post('comment'),
        'report_date'             =>    $this->input->post('report_date')
      );
    }
    $this->session->set_userdata('title','EQAB_IDEN_AST');
    $this->load->template('testresult/program_report_EQAB_IDEN_AST',$data);
  }
  public function preview()
{
  $data = array();
    $session_title = $this->session->userdata('title');

      if($session_title=="EQAH"){
      $this->session->unset_userdata('title');
    // content
    $data['method'] = $this->input->post('method');
    $data['method_other'] = $this->input->post('method_other');
    $data['tools'] = $this->input->post('tools');
    }

      if($session_title=="EQAT"){
      $this->session->unset_userdata('title');
    // content
    $data['principle'] = $this->input->post('principle');
    $data['instrument'] = $this->input->post('instrument');
    $data['method'] = $this->input->post('method');
    $data['result_2'] = $this->input->post('result_2');
    }
    // header
    $data['title']  = $this->input->post('title_1');
    $data['datepick']  = $this->input->post('datepick');

    // value member
    $data['name'] = $this->input->post('name_lname');
    $data['tel'] = $this->input->post('tel');
    $data['position'] = $this->input->post('position');
    $data['comment'] = $this->input->post('comment');
    $data['datereport'] = $this->input->post('report_date');

  $received_status = $this->input->post('received_status');
  if($received_status==1){
    $received_stat = "อยู่ในสภาพสมบูรณ์";
    $data['received_status']  = $received_stat;

  } if($received_status==2){
    $received_stat = "อยู่ในสภาพไม่สมบูรณ์ และไม่สามารถนำมาทดสอบได้<br>เนื่องจาก : ";
    $received_other = $this->input->post('received_status_other');
    $data['received_status']  = $received_other;
  }
  $this->session->unset_userdata('EQAI_SYPHI');
  // $this->session->unset_userdata('preview');
  $data['comment'] = $this->input->post('comment');
  $this->load->view('testresult/preview',$data);
}

public function preview_EQAC(){
    $data = array();
    $session_title = $this->session->userdata('title');

      if($session_title=="EQAC"){
      $this->session->unset_userdata('title');
    // content
    $data['principle'] = $this->input->post('principle');
    $data['instrument'] = $this->input->post('instrument');
    $data['method'] = $this->input->post('method');
    $data['result_2'] = $this->input->post('result_2');
  }
  $received_status = $this->input->post('received_status');
  if($received_status==1){
    $received_stat = "อยู่ในสภาพสมบูรณ์";
    $data['received_status']  = $received_stat;

  } if($received_status==2){
    $received_stat = "อยู่ในสภาพไม่สมบูรณ์ และไม่สามารถนำมาทดสอบได้<br>เนื่องจาก : ";
    $received_other = $this->input->post('received_status_other');
    $data['received_status']  = $received_other;
  }
  // header
  $data['title']  = $this->input->post('title_1');
  $data['datepick']  = $this->input->post('datepick');

  // info member
  $data['name'] = $this->input->post('name_lname');
  $data['tel'] = $this->input->post('tel');
  $data['position'] = $this->input->post('position');
  $data['comment'] = $this->input->post('comment');
  $data['datereport'] = $this->input->post('report_date');
  $this->load->view('testresult/preview_EQAC',$data);
}

public function preview_EQAH(){
    $data = array();
    $session_title = $this->session->userdata('title');

    if($session_title=="EQAH"){
      $this->session->unset_userdata('title');
    // content
    $data['method'] = $this->input->post('method');
    $data['method_other'] = $this->input->post('method_other');
    $data['tools'] = $this->input->post('tools');
    $data['sample'] = $this->input->post('sample');
    }
  $received_status = $this->input->post('received_status');
  if($received_status==1){
    $received_stat = "อยู่ในสภาพสมบูรณ์";
    $data['received_status']  = $received_stat;

  } if($received_status==2){
    $received_stat = "อยู่ในสภาพไม่สมบูรณ์ และไม่สามารถนำมาทดสอบได้<br>เนื่องจาก : ";
    $received_other = $this->input->post('received_status_other');
    $data['received_status']  = $received_other;
  }
  // header
  $data['title']  = $this->input->post('title_1');
  $data['datepick']  = $this->input->post('datepick');

  // info member
  $data['name'] = $this->input->post('name_lname');
  $data['tel'] = $this->input->post('tel');
  $data['position'] = $this->input->post('position');
  $data['comment'] = $this->input->post('comment');
  $data['datereport'] = $this->input->post('report_date');
  $this->load->view('testresult/preview_EQAH',$data);
}

public function preview_B_EQAM(){
    $data = array();
    $session_title = $this->session->userdata('title');

    if($session_title=="B_EQAM"){
      $this->session->unset_userdata('title');
    // content
    $data['result_0'] = $this->input->post('result_0');
    $data['result_1'] = $this->input->post('result_1');
    $data['result_2'] = $this->input->post('result_2');
    $data['result_3'] = $this->input->post('result_3');
    $data['result_4'] = $this->input->post('result_4');
    $data['result_5'] = $this->input->post('result_5');
    $data['result_6'] = $this->input->post('result_6');
    $data['result_7'] = $this->input->post('result_7');
    $data['result_8'] = $this->input->post('result_8');
    }
  $received_status = $this->input->post('received_status');
  if($received_status==1){
    $received_stat = "อยู่ในสภาพสมบูรณ์";
    $data['received_status']  = $received_stat;

  } if($received_status==2){
    $received_stat = "อยู่ในสภาพไม่สมบูรณ์ และไม่สามารถนำมาทดสอบได้<br>เนื่องจาก : ";
    $received_other = $this->input->post('received_status_other');
    $data['received_status']  = $received_other;
  }
  // header
  $data['title']  = $this->input->post('title_1');
  $data['datepick']  = $this->input->post('datepick');

  // info member
  $data['name'] = $this->input->post('name_lname');
  $data['tel'] = $this->input->post('tel');
  $data['position'] = $this->input->post('position');
  $data['comment'] = $this->input->post('comment');
  $data['datereport'] = $this->input->post('report_date');
  $this->load->view('testresult/preview_B_EQAM',$data);
}

public function preview_EQAP(){
  $data = array();
  $session_title = $this->session->userdata('title');

  if($session_title=="EQAP"){
    $this->session->unset_userdata('title');
    $data['sample_0'] = $this->input->post('sample[0]');
    $data['sample_1'] = $this->input->post('sample[1]');
    $data['file_0'] = $this->input->post('file_0');
    $data['file_1'] = $this->input->post('file_1');
  }
  $received_status = $this->input->post('received_status');
  if($received_status==1){
  $received_stat = "อยู่ในสภาพสมบูรณ์";
  $data['received_status']  = $received_stat;

  } if($received_status==2){
  $received_stat = "อยู่ในสภาพไม่สมบูรณ์ และไม่สามารถนำมาทดสอบได้<br>เนื่องจาก : ";
  $received_other = $this->input->post('received_status_other');
  $data['received_status']  = $received_other;
  }
  // header
  $data['title']  = $this->input->post('title_1');
  $data['datepick']  = $this->input->post('datepick');

  // info member
  $data['name'] = $this->input->post('name_lname');
  $data['tel'] = $this->input->post('tel');
  $data['position'] = $this->input->post('position');
  $data['comment'] = $this->input->post('comment');
  $data['datereport'] = $this->input->post('report_date');
  $this->load->view('testresult/preview_EQAP',$data);
}

public function preview_EQAT(){
  $data = array();
  $session_title = $this->session->userdata('title');

  if($session_title=="EQAT"){
    $this->session->unset_userdata('title');
    $data['tools'] = $this->input->post('tools');
    $data['method'] = $this->input->post('method');
    $data['method_other'] = $this->input->post('method_other');
    $data['sample'] = $this->input->post('sample');
  }
  $received_status = $this->input->post('received_status');
  if($received_status==1){
  $received_stat = "อยู่ในสภาพสมบูรณ์";
  $data['received_status']  = $received_stat;

  } if($received_status==2){
  $received_stat = "อยู่ในสภาพไม่สมบูรณ์ และไม่สามารถนำมาทดสอบได้<br>เนื่องจาก : ";
  $received_other = $this->input->post('received_status_other');
  $data['received_status']  = $received_other;
  }
  // header
  $data['title']  = $this->input->post('title_1');
  $data['datepick']  = $this->input->post('datepick');

  // info member
  $data['name'] = $this->input->post('name_lname');
  $data['tel'] = $this->input->post('tel');
  $data['position'] = $this->input->post('position');
  $data['comment'] = $this->input->post('comment');
  $data['datereport'] = $this->input->post('report_date');
  $this->load->view('testresult/preview_EQAT',$data);
}

public function preview_EQAB_AFB(){
  $data = array();
  $session_title = $this->session->userdata('title');

  if($session_title=="EQAB_AFB"){
    $this->session->unset_userdata('title');
    $data['result'] = $this->input->post('result');
    $data['result_other'] = $this->input->post('result_other');
    $data['sample'] = $this->input->post('sample');
  }
  $received_status = $this->input->post('received_status');
  if($received_status==1){
  $received_stat = "อยู่ในสภาพสมบูรณ์";
  $data['received_status']  = $received_stat;

  } if($received_status==2){
  $received_stat = "อยู่ในสภาพไม่สมบูรณ์ และไม่สามารถนำมาทดสอบได้<br>เนื่องจาก : ";
  $received_other = $this->input->post('received_status_other');
  $data['received_status']  = $received_other;
  }

  // header
  $data['title']  = $this->input->post('title_1');
  $data['datepick']  = $this->input->post('datepick');

  // info member
  $data['name'] = $this->input->post('name_lname');
  $data['tel'] = $this->input->post('tel');
  $data['position'] = $this->input->post('position');
  $data['comment'] = $this->input->post('comment');
  $data['datereport'] = $this->input->post('report_date');
  $this->load->view('testresult/preview_EQAB_AFB',$data);
}

public function preview_EQAB_GRAM(){
  $data = array();
  $session_title = $this->session->userdata('title');

  if($session_title=="EQAB_GRAM"){
    $this->session->unset_userdata('title');
    $data['sample'] = $this->input->post('sample');
  }
  $received_status = $this->input->post('received_status');
  if($received_status==1){
  $received_stat = "อยู่ในสภาพสมบูรณ์";
  $data['received_status']  = $received_stat;

  } if($received_status==2){
  $received_stat = "อยู่ในสภาพไม่สมบูรณ์ และไม่สามารถนำมาทดสอบได้<br>เนื่องจาก : ";
  $received_other = $this->input->post('received_status_other');
  $data['received_status']  = $received_other;
  }

  // header
  $data['title']  = $this->input->post('title_1');
  $data['datepick']  = $this->input->post('datepick');

  // info member
  $data['name'] = $this->input->post('name_lname');
  $data['tel'] = $this->input->post('tel');
  $data['position'] = $this->input->post('position');
  $data['comment'] = $this->input->post('comment');
  $data['datereport'] = $this->input->post('report_date');
  $this->load->view('testresult/preview_EQAB_GRAM',$data);
}

public function preview_EQAB_IDEN_AST(){

  $data = array();
  $session_title = $this->session->userdata('title');

  if($session_title=="EQAB_IDEN_AST"){
    $this->session->unset_userdata('title');
    $data['result'] = $this->input->post('result');
    $data['result_1'] = $this->input->post('result_1');
    $data['result_other'] = $this->input->post('result_other');
    $data['infection_sec1'] = $this->input->post('infection_sec1');
    $data['infection_sec1_other'] = $this->input->post('infection_sec1_other');
    $data['tool_sec2'] = $this->input->post('tool_sec2');
    $data['result_2'] = $this->input->post('result_2');
    $data['infection_sec3'] = $this->input->post('infection_sec3');
    $data['result_3'] = $this->input->post('result_3');
    $data['result_4'] = $this->input->post('result_4');
    $data['file_0'] = $this->input->post('file_0');
    $data['file_1'] = $this->input->post('file_1');
    $data['file_2'] = $this->input->post('file_2');
    $data['file_3'] = $this->input->post('file_3');
  }
  $received_status = $this->input->post('received_status');
  if($received_status==1){
  $received_stat = "อยู่ในสภาพสมบูรณ์";
  $data['received_status']  = $received_stat;

  } if($received_status==2){
  $received_stat = "อยู่ในสภาพไม่สมบูรณ์ และไม่สามารถนำมาทดสอบได้<br>เนื่องจาก : ";
  $received_other = $this->input->post('received_status_other');
  $data['received_status']  = $received_other;
  }

  // header
  $data['title']  = $this->input->post('title_1');
  $data['datepick']  = $this->input->post('datepick');

  // info member
  $data['name'] = $this->input->post('name_lname');
  $data['tel'] = $this->input->post('tel');
  $data['position'] = $this->input->post('position');
  $data['comment'] = $this->input->post('comment');
  $data['datereport'] = $this->input->post('report_date');
  $this->load->view('testresult/preview_EQAB_IDEN_AST',$data);
}

public function preview_EQAI_HBV(){
  $data = array();
  $session_title = $this->session->userdata('title');

  if($session_title=="EQAI_HBV"){
    $this->session->unset_userdata('title');
    $data['tool'] = $this->input->post('tool');
    $data['tool_auto'] = $this->input->post('tool_auto');
    $data['tool_other'] = $this->input->post('tool_other');
    $data['result_1'] = $this->input->post('result_1');
    $data['result_2'] = $this->input->post('result_2');
    $data['result_3'] = $this->input->post('result_3');
    $data['sample_q_li'] = $this->input->post('sample_q_li');
    $data['tool_auto2'] = $this->input->post('tool_auto2');
    $data['tool_reagent'] = $this->input->post('tool_reagent');
    $data['tool_lot'] = $this->input->post('tool_lot');
    $data['tool_catalog'] = $this->input->post('tool_catalog');
    $data['symbol'] = $this->input->post('symbol');
    $data['tool_specimen_hbs'] = $this->input->post('tool_specimen_hbs');
    $data['symbol_new'] = $this->input->post('symbol_new');
    $data['tool_specimen_hbs_new'] = $this->input->post('tool_specimen_hbs_new');
  }
  $received_status = $this->input->post('received_status');
  if($received_status==1){
  $received_stat = "อยู่ในสภาพสมบูรณ์";
  $data['received_status']  = $received_stat;

  } if($received_status==2){
  $received_stat = "อยู่ในสภาพไม่สมบูรณ์ และไม่สามารถนำมาทดสอบได้<br>เนื่องจาก : ";
  $received_other = $this->input->post('received_status_other');
  $data['received_status']  = $received_other;
  }

  // header
  $data['title']  = $this->input->post('title_1');
  $data['datepick']  = $this->input->post('datepick');

  // info member
  $data['name'] = $this->input->post('name_lname');
  $data['tel'] = $this->input->post('tel');
  $data['position'] = $this->input->post('position');
  $data['comment'] = $this->input->post('comment');
  $data['datereport'] = $this->input->post('report_date');
  $this->load->view('testresult/preview_EQAI_HBV',$data);
}

public function preview_EQAI_SYPHILIS(){
  $data = array();
  $session_title = $this->session->userdata('title');

  if($session_title=="EQAI_SYPHILIS"){
    $this->session->unset_userdata('title');
    $data['tools'] = $this->input->post('tools');
    $data['tools_other'] = $this->input->post('tools_other');
    $data['ntp_result'] = $this->input->post('ntp_result');
    $data['tp_result'] = $this->input->post('tp_result');
    $data['ntp_lot_number'] = $this->input->post("ntp_lot_number");
    $data['tp_lot_number'] = $this->input->post('tp_lot_number');
  }
  $received_status = $this->input->post('received_status');
  if($received_status==1){
  $received_stat = "อยู่ในสภาพสมบูรณ์";
  $data['received_status']  = $received_stat;

  } if($received_status==2){
  $received_stat = "อยู่ในสภาพไม่สมบูรณ์ และไม่สามารถนำมาทดสอบได้<br>เนื่องจาก : ";
  $received_other = $this->input->post('received_status_other');
  $data['received_status']  = $received_other;
  }

  // header
  $data['title']  = $this->input->post('title_1');
  $data['datepick']  = $this->input->post('datepick');

  // info member
  $data['name'] = $this->input->post('name_lname');
  $data['tel'] = $this->input->post('tel');
  $data['position'] = $this->input->post('position');
  $data['comment'] = $this->input->post('comment');
  $data['datereport'] = $this->input->post('report_date');
  $this->load->view('testresult/preview_EQAI_SYPHILIS',$data);
}

public function preview_H_EQAM(){
  $data = array();
  $session_title = $this->session->userdata('title');

  if($session_title=="H_EQAM"){
    $this->session->unset_userdata('title');
    $data['sample'] = $this->input->post('sample');
    $data['sum_sec1'] = $this->input->post('sum_sec1');
    $data['file_0'] = $this->input->post('file_0');
    $data['file_1'] = $this->input->post('file_1');
    $data['submit'] = $this->input->post('submit');
  }
  $received_status = $this->input->post('received_status');
  if($received_status==1){
  $received_stat = "อยู่ในสภาพสมบูรณ์";
  $data['received_status']  = $received_stat;

  } if($received_status==2){
  $received_stat = "อยู่ในสภาพไม่สมบูรณ์ และไม่สามารถนำมาทดสอบได้<br>เนื่องจาก : ";
  $received_other = $this->input->post('received_status_other');
  $data['received_status']  = $received_other;
  }

  // header
  $data['title']  = $this->input->post('title_1');
  $data['datepick']  = $this->input->post('datepick');

  // info member
  $data['name'] = $this->input->post('name_lname');
  $data['tel'] = $this->input->post('tel');
  $data['position'] = $this->input->post('position');
  $data['comment'] = $this->input->post('comment');
  $data['datereport'] = $this->input->post('report_date');
  $this->load->view('testresult/preview_H_EQAM',$data);
}

public function preview_UC_EQAM(){
  $data = array();
  $session_title = $this->session->userdata('title');

  if($session_title=="UC_EQAM"){
    $this->session->unset_userdata('title');
      $config['upload_path'] = '.';
      $config['allowed_types'] = 'jpeg|jpg|png';
      $config['max_size'] = 2048;
      $config['max_width'] = 0; //set 0 for free width
      $config['max_height'] = 0; //set 0 for free height
      $config['remove_spaces'] = true;
      $config['encrypt_name'] = true;

      $this->load->library('upload', $config);
      $this->upload->initialize($config);
  }
  $received_status = $this->input->post('received_status');
  if($received_status==1){
  $received_stat = "อยู่ในสภาพสมบูรณ์";
  $data['received_status']  = $received_stat;

  } if($received_status==2){
  $received_stat = "อยู่ในสภาพไม่สมบูรณ์ และไม่สามารถนำมาทดสอบได้<br>เนื่องจาก : ";
  $received_other = $this->input->post('received_status_other');
  $data['received_status']  = $received_other;
  }

  // header
  $data['title']  = $this->input->post('title_1');
  $data['datepick']  = $this->input->post('datepick');

  // info member
  $data['name'] = $this->input->post('name_lname');
  $data['tel'] = $this->input->post('tel');
  $data['position'] = $this->input->post('position');
  $data['comment'] = $this->input->post('comment');
  $data['datereport'] = $this->input->post('report_date');
  $this->load->view('testresult/preview_UC_EQAM',$data);
}

}