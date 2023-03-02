<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Home extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $data = array(); 
    $data['heading_title'] = 'ภาพรวม';
    $data['breadcrumbs'] = array(
      'ภาพรวม' => base_url('admin/home')
    );
    $filter = array('admin_id' => 0);
    $data['report_info'] = $this->model_report->getReportNavBar($filter);
    $data['report_trial'] = array_count_values(array_column($data['report_info'],'trial_del'));
    $filter = array('del' => 0,'admin_id' => 0,'status' =>  0);
    $data['payment_info'] = $this->model_payment_assign->getPayment_assigns($filter);
    $filter = array('del' => 0);
    $data['member_info'] = $this->model_member->getMembers($filter);
    $this->load->template('admin/home', $data);
  }

}


/* End of file Home.php */
/* Location: ./application/controllers/Home.php */