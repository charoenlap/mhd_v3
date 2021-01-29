<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $year = $this->model_setting->get('config_register_open')==1 ?$this->model_year->getList( $this->model_setting->get('config_register_year_id') )->year : false;
        $this->session->set_userdata('year', $year);
    }

    public function index()
    {
        $data = array();
        $data['heading_title'] = 'สมัครโปรแกรมปี ' . ($this->session->has_userdata('year') ? $this->session->year : '');
        $data['action'] = base_url('register');

        $data['member_no'] = $this->session->member_info['member_no'];
        $data['email'] = $this->session->member_info['email'];

        $member_id = json_decode($this->encryption->decrypt($this->session->token))->id;
        $year_id = $this->model_setting->get('config_register_year_id'); // year
        $data['year'] = $this->model_year->getList($year_id)->year;
        $data['year_open'] = $this->model_setting->get('config_register_open') == 1 ? true : false; // now is open?
        $register_info = $this->model_register->getRegisterByYearAndMember($member_id, $year_id);
        $register_id = isset($register_info->id) ? $register_info->id : 0; // debug when register error not found id
        $company_id = 0;


        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $company_id = $this->input->post('company_id');
          
            if ($register_id==0) { // not found register in this year and add new register this year
              $insert = array(
                'parent_id' => 0,
                'member_id' => $member_id,
                'company_id' => $company_id,
                'year_id' => $year_id,
                'total' => 0,
                'date_added' => date('Y-m-d H:i:s'),
                'date_modify' => '',
                'del' => 0
              );
              $register_id = $this->model_register->add($insert);
            }
            

            $result = array();
            $total = 0;
            foreach ($this->input->post('program_id') as $checkbox_program_id => $value) {
                if ($value == '1') {
                    $program_info = $this->model_program->getList($checkbox_program_id);
                    $price = !empty($program_info->price) ? $program_info->price : 0;
                    $total += (double) $price;

                    // check program in this year
                    $register_program_id = $this->model_register_program->checkProgramInRegister($register_id, $checkbox_program_id, $member_id, $company_id);
                    
                    $insert = array(
                        'register_id' => $register_id,
                        'parent_id' => 0, // ! if you have parentid
                        'company_id' => $company_id,
                        'member_id' => $member_id,
                        'year_id' => $year_id,
                        'program_id' => $checkbox_program_id,
                        'price' => $price,
                        'date_added' => date('Y-m-d H:i:s'),
                    );
                    if ($register_program_id != false && $register_program_id > 0) {
                      // find old register program and update it
                      $result[] = ($this->model_register_program->edit($register_program_id, $insert) == 1) ? true : false;
                    } else {
                      $result[] = ($this->model_register_program->add($insert) > 0) ? true : false;
                    }
                }
            }

            // ? update total in register this year
            $update = array(
                'total' => (double) $total,
            );
            $this->model_register->edit($register_id, $update);

            if (in_array(false, $result)) {
                $this->session->set_userdata('error', 'เกิดข้อผิดพลาดไม่สามารถสมัครได้กรุณาลองใหม่อีกครั้ง');
                redirect('register');
            } else {
                $this->session->set_userdata('success', 'สมัครโปรแกรมเรียบร้อยแล้ว เมื่อท่านชำระเงินแล้วสามารถแจ้งชำระเงินได้ที่นี่');
                redirect('register/receipt');
            }
        }

        $filter = array();
        $data['programs'] = $this->model_program->getLists($filter, 0, 99999999999);

        // filter choose program
        $program_choose = $this->model_register_program->getListProgramByYear($register_id, $member_id, $company_id, null, $year_id);
        $data['program_choose'] = array(); 
        $data['program_slip'] = array();
        foreach ($program_choose as $key => $value) {
          $data['program_choose'][] = $value->program_id;
          $data['program_slip'][$value->program_id] = $value->send_slip;
        }

        $filter = array('member_id' => $member_id);
        $data['company'] = $this->model_company->getLists($filter, 0, 99999999999);

        $this->load->template('register/index', $data);
    }
    public function receipt()
    {
        $data = array();
        $json = json_decode($this->encryption->decrypt($this->session->token));
        $data['member_no'] = $json->{'member_no'};
        $data['firstname'] = $json->{'firstname'};
        $data['lastname'] = $json->{'lastname'};
        $data['date_added'] = $json->{'date_added'};
        $data['email'] = $json->{'email'};

        
        $member_id = json_decode($this->encryption->decrypt($this->session->token))->id;
        $year_id = $this->model_setting->get('config_register_year_id'); // year
        $data['year'] = $this->model_year->getList($year_id)->year;
        $data['year_open'] = $this->model_setting->get('config_register_open') == 1 ? true : false; // now is open?
        $register_info = $this->model_register->getRegisterByYearAndMember($member_id, $year_id);
        $company_id = $register_info->company_id;
        $register_id = isset($register_info->id) ? $register_info->id : 0; // debug when register error not found id

        $filter = array('member_id' => $member_id);
        $data['company'] = $this->model_company->getLists($filter, 0, 99999999999);
        $data['program_list'] = $this->model_register_program->getListProgramByYear($register_id, $member_id, $company_id, false);
        // $data['program_list'] = $this->model_register_program->getListProgram($member_id);

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
            } else if ($value->program_id == 12) {
                $case_two = "true";
            } else if ($value->program_id == 13) {
                $case_tree = "true";
            }
        }
        if ($case_one == "true" && $case_two == "true" && $case_tree == "true") {
            $discount = 500;
        } else if ($case_one == "true" && $case_two == "true") {
            $discount = 200;
        }
        $data['total'] = $total;
        $data['total_text'] = $this->num2wordThai( $total );
        $data['discount'] = $discount;

        $this->load->view('register/receipt', $data);
    }

    public function num2wordThai($number=0) 
    {
        $number = number_format($number, 2, '.', '');

        $textnum = array('ศูนย์','หนึ่ง','สอง','สาม','สี่','ห้า','หก','เจ็ด','แปด','เก้า','สิบ');
        $textchar = array('','สิบ','ร้อย','พัน','หมื่น','แสน','ล้าน');

        $number = str_replace(',','',$number);
        $number = str_replace(' ','',$number);
        $number = str_replace('บาท','',$number);
        $number = explode('.',$number);
        
        if (sizeof($number)>2) {
            return 'error'; 
            exit;
        } else {
            $convert = '';
            $strlen = strlen($number[0]);
            for ($i=0; $i<$strlen; $i++) :
                $n = substr($number[0], $i, 1);
                if ($n != 0 ) :
                    if ($i==($strlen-1) && $n==1) { $convert .= 'เอ็ด'; }
                    elseif ($i==($strlen-2) && $n==2) { $convert .= 'ยี่'; }
                    elseif ($i==($strlen-2) && $n==1) { $convert .= ''; }
                    else {$convert .= $textnum[$n]; }
                    $convert .= $textchar[$strlen-$i-1];
                endif; 
            endfor;
            $convert .= 'บาท';

            if ($number[1]=='0' || $number[1]=='00' || $number[1]=='') :
                $convert .= 'ถ้วน';
            else:
                $strlen = strlen($number[0]);
                for ($i=0; $i<$strlen; $i++) :
                    $n = substr($number[1], $i, 1);
                    if ($n != 0 ) :
                        if ($i==($strlen-1) && $n==1) { $convert .= 'เอ็ด'; }
                        elseif ($i==($strlen-2) && $n==2) { $convert .= 'ยี่'; }
                        elseif ($i==($strlen-2) && $n==1) { $convert .= 'สิบ'; }
                        else {$convert .= $textnum[$n]; }
                        $convert .= $textchar[$strlen-$i-1];
                    endif; 
                endfor;
                $convert .= 'สตางค์';
            endif;
            return $convert;
        }
        
    }

    

}
// }

/* End of file Register.php */
/* Location: ./application/controllers/Register.php */
