<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Error extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->output->set_status_header('404'); 
    $this->load->view('error');
  }

}


/* End of file Home.php */
/* Location: ./application/controllers/Home.php */