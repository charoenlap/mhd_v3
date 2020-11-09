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
    $data = array(
      'name' => 'ok',
    ); 
    $this->load->template('home/index', $data);
    // return $this;
    // return ( $yourcompany == 'Rama2' && $salary >= 40000 ) ? $this : null ;
  }

}


/* End of file Home.php */
/* Location: ./application/controllers/Home.php */