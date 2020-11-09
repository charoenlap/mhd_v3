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
  }

  public function index()
  {
    $data = array(); 
    
    $data['success'] = $this->session->has_userdata('success') ? $this->session->success : ''; $this->session->unset_userdata('success');
    $data['error'] = $this->session->has_userdata('error') ? $this->session->error : ''; $this->session->unset_userdata('error');

    $member_id = json_decode($this->encryption->decrypt($this->session->token))->id;
    $year_id = $this->model_setting->get('config_register_year_id'); // ? year open
    $program_info = $this->model_program->getList($checkbox_program_id);
    $register_id = $this->model_register->getRegisterByYearAndMember($member_id, $year_id)->id;

    $filter = array(
      'member_id' => $member_id,
      'register_id' => $register_id,
    );
    $this->model_register_program->getList($filter);
    
    $this->load->template('payment/index', $data);
  }

}


/* End of file Payment.php */
/* Location: ./application/controllers/Payment.php */