<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Result extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $data = array();
    $this->load->template('result/index', $data);
  }

}


/* End of file Home.php */
/* Location: ./application/controllers/Home.php */