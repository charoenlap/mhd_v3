<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Register_program_model
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Register_program_model extends CI_Model {

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  // ------------------------------------------------------------------------


  // Default Query------------------------------------------------------------------------
  public function add($data)
  {
    $this->db->set($data);
    $this->db->insert('register_program');
    return $this->db->insert_id();
  }

  public function edit($id, $data)
  {
    $this->db->where('id', $id);
    $this->db->set($data);
    $this->db->update('register_program');
    return $this->db->affected_rows()==1 ? true : false;
  }

  public function del($id)
  {
    $this->db->where('id', $id);
    $this->db->set( array('del'=>1) );
    $this->db->update('register_program');
    return $this->db->affected_rows()==1 ? true : false;
  }

  public function getList($id)
  {
    $this->db->where('id', $id);
    $this->db->where('del', 0);
    $query = $this->db->get('register_program');
    return $query->num_rows() == 1 ? $query->row() : false;
  }

  public function getLists($filter=array(), $start=0, $limit=10, $sort='', $by='')
  {
    if (count($filter)>0) {
      foreach ($filter as $key => $value) {
        if($key == 'filter_email'){
          $this->db->select('register_program.*,mhd_member.email as email');
          $this->db->join('mhd_member', 'mhd_member.id=mhd_register_program.member_id', 'LEFT');
          $this->db->where('mhd_member.email',$value);
          $this->db->where('mhd_member.del', 0);
        } elseif($key == 'filter_name') {
          $this->db->select('register_program.*,mhd_member.firstname as firstname');
          $this->db->join('mhd_member', 'mhd_member.id=mhd_register_program.member_id', 'LEFT');
          $this->db->where('mhd_member.firstname',$value);
          $this->db->where('mhd_member.del', 0);
        } else {
          $this->db->where($key, $value);
        }
      }
    }
    if ($start>=0 && $limit>=1) {
      $this->db->limit($limit, $start);
    }
    if (!empty($sort) && !empty($by)) {
      $this->db->order_by($sort, $by);
    }

    $this->db->where('mhd_register_program.del', 0);
    $query = $this->db->get('register_program');
    return $query->result();
  }
  // ------------------------------------------------------------------------



  // Custom Query ------------------------------------------------------------------------
  public function getProgramByPayment($payment_id) {
    $this->db->select('mhd_program.name, mhd_register_program.price, mhd_year.year, mhd_program.id as program_id, mhd_register_program.id as register_program_id,mhd_register_program.admin_approve as program_approve');
    $this->db->where('mhd_register_program.payment_id', $payment_id);
    $this->db->join('mhd_program','mhd_program.id=mhd_register_program.program_id','LEFT');
    $this->db->join('mhd_year', 'mhd_year.id=mhd_register_program.year_id', 'LEFT');
    $query = $this->db->get('register_program');
    return $query->result();
  }
  public function updateSlip($register_id, $payment_id=0) {
    $this->db->set('send_slip', 1);
    // $this->db->set('payment_id', (int)$payment_id);
    $this->db->where('register_id', $register_id);
    // $this->db->where('payment_id is null', null, false);
    $this->db->where('payment_id', $payment_id);
    $this->db->update('register_program');
    // echo $this->db->last_query();
    // exit();
    return $this->db->affected_rows()==1 ? true : false;
  }
  public function delmember($id) 
  {
    $this->db->where('member_id', $id);
    $this->db->set(array('del'=>1));
    $this->db->update('register_program');
    return $this->db->affected_rows() == 1 ? true : false;
  }
  public function getListProgram($id)
  {
    $this->db->select('register_program.*, mhd_register_program.price as price, mhd_program.name as program_name');
    $this->db->where('mhd_register_program.member_id',$id);
    $this->db->where('mhd_register_program.del','0');
    $this->db->where('mhd_program.del','0');
    $this->db->order_by('mhd_register_program.id','DESC');
    $this->db->join('mhd_program', 'mhd_program.id = mhd_register_program.program_id', 'LEFT'); 
    $query = $this->db->get('register_program');
    return $query->result();
  }
  public function getListProgramByMemberId($member_id,$company_id=0)
  {
    $this->db->select('register_program.*, mhd_register_program.price as price, mhd_program.name as program_name');
    $this->db->where('mhd_register_program.member_id',$member_id);
    $this->db->where('mhd_register_program.del','0');
    $this->db->order_by('mhd_register_program.id','DESC');
    $this->db->join('mhd_program', 'mhd_program.id = mhd_register_program.program_id', 'LEFT'); 
    $query = $this->db->get('register_program');
    return $query->result();
  }
  public function getListProgramByYear($id, $member_id, $company_id, $year_id)
  {
    $this->db->select('register_program.*, mhd_register_program.price as price, mhd_program.name as program_name, mhd_program.slug as program_slug, mhd_program.price as program_price,mhd_year.year as year');
    $this->db->where('mhd_register_program.member_id',$member_id);
    if ($company_id>0) {
      $this->db->where('mhd_register_program.company_id',$company_id);
    }
    if ($id>0) {
      $this->db->where('mhd_register_program.register_id',$id);
    }
    if ($year_id>0) {
      $this->db->where('mhd_register_program.year_id', $year_id);
    }
    // if ($slip===true) {
    //   $this->db->where('mhd_register_program.send_slip', 1); // send slip only
    // } else if ($slip===false) {
    //   $this->db->where('mhd_register_program.send_slip', 0); // none send slip only
    // }
    $this->db->where('mhd_register_program.del','0');
    $this->db->order_by('mhd_register_program.program_id','ASC');
    $this->db->join('mhd_program', 'mhd_program.id = mhd_register_program.program_id', 'LEFT'); 
    $this->db->join('mhd_year', 'mhd_year.id = mhd_register_program.year_id', 'LEFT'); 
    $query = $this->db->get('register_program');
    // echo $this->db->last_query();
    return $query->result();
  }
  public function getListProgramBySub($id, $member_id, $company_id, $slip=null, $year_id=0)
  {
    $this->db->select('mhd_register_program.*, mhd_register_program.id as id, mhd_register_program.price as price, mhd_program.name as program_name, mhd_program.slug as program_slug');
    $this->db->where('mhd_register_program.sub_member_id',$member_id);
    if ($company_id>0) {
      // $this->db->where('mhd_register_program.company_id',$company_id);
    }
    if ($id>0) {
      // $this->db->where('mhd_register_program.register_id',$id);
    }
    if ($year_id>0) {
      $this->db->where('mhd_register_program.year_id', $year_id);
    }
    if ($slip===true) {
      $this->db->where('mhd_register_program.send_slip', 1); // send slip only
    } else if ($slip===false) {
      $this->db->where('mhd_register_program.send_slip', 0); // none send slip only
    }
    $this->db->where('mhd_register_program.del','0');
    $this->db->order_by('mhd_register_program.id','DESC');
    $this->db->join('mhd_program', 'mhd_program.id = mhd_register_program.program_id', 'LEFT'); 
    $query = $this->db->get('register_program');
    // echo $this->db->last_query();
    // echo '<br>';
    return $query->result();
  }
  public function checkProgramInRegister($id, $program_id, $member_id, $company_id) {
    $this->db->where('register_id', $id);
    $this->db->where('program_id', $program_id);
    $this->db->where('member_id',$member_id);
    $this->db->where('company_id',$company_id);
    $this->db->where('del','0');
    $query = $this->db->get('register_program');
    return $query->num_rows() == 1  ? $query->row()->id : false;
  }
  public function delProgramInRegister($id, $program_id, $member_id, $company_id) {
    $this->db->set('del',1);
    $this->db->where('register_id', $id);
    $this->db->where('program_id', $program_id);
    $this->db->where('member_id',$member_id);
    $this->db->where('company_id',$company_id);
    $query = $this->db->update('register_program');
    return $this->db->affected_rows() == 1 ? true : false;
  }
  public function getListProgramByMemberProgramId($member_id,$program_id)
  {
    $this->db->select('register_program.*, mhd_register_program.price as price, mhd_program.name as program_name');
    $this->db->where('mhd_register_program.member_id',$member_id);
    $this->db->where('mhd_register_program.program_id',$program_id);
    $this->db->where('mhd_register_program.del','0');
    $this->db->order_by('mhd_register_program.id','DESC');
    $this->db->join('mhd_program', 'mhd_program.id = mhd_register_program.program_id', 'LEFT'); 
    $query = $this->db->get('register_program');
    return $query->result();
  }
  
  public function getListProgramByMemberProgramIdYear($member_id,$program_id,$year_id)
  {
    $this->db->select('register_program.*,mhd_member.*, mhd_register_program.price as price, mhd_program.name as program_name, mhd_company.name as hospital');
    $this->db->where('mhd_register_program.member_id',$member_id);
    $this->db->where('mhd_register_program.program_id',$program_id);
    $this->db->where('mhd_register_program.year_id',$year_id);
    $this->db->where('mhd_register_program.del','0');
    $this->db->where('mhd_company.del','0');
    $this->db->where('mhd_member.del','0');
    $this->db->order_by('mhd_register_program.id','DESC');
    $this->db->join('mhd_program', 'mhd_program.id = mhd_register_program.program_id', 'LEFT');
    $this->db->join('mhd_member', 'mhd_member.id = mhd_register_program.member_id', 'LEFT');
    $this->db->join('mhd_company', 'mhd_company.member_id = mhd_register_program.member_id', 'LEFT');
    $query = $this->db->get('register_program');
    return $query->result();
  }

  public function getListProgramByMemberIdYear($id,$year)
  {
    $this->db->select('register_program.*, mhd_register_program.price as price, mhd_program.name as program_name');
    $this->db->where('mhd_register_program.member_id',$id);
    $this->db->where('mhd_register_program.year_id',$year);
    $this->db->where('mhd_register_program.del','0');
    $this->db->where('mhd_program.del','0');
    $this->db->order_by('mhd_register_program.id','ASC');
    $this->db->join('mhd_program', 'mhd_program.id = mhd_register_program.program_id', 'LEFT'); 
    $query = $this->db->get('register_program');
    return $query->result();
  }

  public function getListProgramByMemberIdByYear($id,$year)
  {
    $this->db->select('register_program.*, mhd_register_program.price as price, mhd_program.name as program_name');
    $this->db->where('mhd_register_program.member_id',$id);
    $this->db->where('mhd_register_program.year_id',$year);
    $this->db->where('mhd_register_program.del','0');
    $this->db->where('mhd_program.del','0');
    $this->db->order_by('mhd_register_program.program_id','ASC');
    $this->db->join('mhd_program', 'mhd_program.id = mhd_register_program.program_id', 'LEFT'); 
    $query = $this->db->get('register_program');
    return $query->result();
  }

  public function getListProgramByTrial($filter=array(),$year_id, $program_id,$trial_id)
  {
    if (count($filter)>0) {
      foreach ($filter as $key => $value) {
        $this->db->where($key, $value);
      }
    }
    $this->db->select('register_program.*,mhd_member.*, mhd_register_program.price as price, mhd_program.name as program_name');
    $this->db->where('mhd_register_program.year_id',$year_id);
    $this->db->where('mhd_register_program.program_id',$program_id);
    $this->db->where('mhd_report.trial_id',$trial_id);
    $this->db->where('mhd_register_program.del','0');
    $this->db->where('mhd_program.del','0');
    $this->db->where('mhd_report.del','0');
    $this->db->join('mhd_program', 'mhd_program.id = mhd_register_program.program_id', 'LEFT');
    $this->db->join('mhd_report', 'mhd_report.register_program_id = mhd_register_program.id', 'LEFT');
    $this->db->join('mhd_member', 'mhd_member.id = mhd_register_program.member_id', 'LEFT');
    $query = $this->db->get('register_program');
    return $query->result();
  }

  public function getListByIdMemberNotIn ($member_id,$program_id_register=array())
  {
    $this->db->select('register_program.*, mhd_program.*');
    $this->db->where('mhd_register_program.member_id',$member_id);
    $this->db->where('mhd_register_program.del','0');
    $this->db->where('mhd_program.del','0');
    $this->db->join('mhd_program','mhd_program.id = mhd_register_program.program_id', 'LEFT');
    foreach ($program_id_register as $value){
      $this->db->where_not_in('mhd_program.id',$value);
    }
    $query = $this->db->get('register_program');
    return $query->result();
  }

  public function getListProgramByYearDate($id, $member_id, $company_id, $year_id,$datetime)
  {
    $this->db->select('register_program.*, mhd_register_program.price as price, mhd_program.name as program_name, mhd_program.slug as program_slug, mhd_program.price as program_price,mhd_year.year as year');
    $this->db->where('mhd_register_program.member_id',$member_id);
    if ($company_id>0) {
      $this->db->where('mhd_register_program.company_id',$company_id);
    }
    if ($id>0) {
      $this->db->where('mhd_register_program.register_id',$id);
    }
    if ($year_id>0) {
      $this->db->where('mhd_register_program.year_id', $year_id);
    }
    if($datetime>0){
      $this->db->where('mhd_register_program.date_added',$datetime);
    }
    // if ($slip===true) {
    //   $this->db->where('mhd_register_program.send_slip', 1); // send slip only
    // } else if ($slip===false) {
    //   $this->db->where('mhd_register_program.send_slip', 0); // none send slip only
    // }
    $this->db->where('mhd_register_program.del','0');
    $this->db->order_by('mhd_register_program.id','ASC');
    $this->db->join('mhd_program', 'mhd_program.id = mhd_register_program.program_id', 'LEFT'); 
    $this->db->join('mhd_year', 'mhd_year.id = mhd_register_program.year_id', 'LEFT'); 
    $query = $this->db->get('register_program');
    // echo $this->db->last_query();
    return $query->result();
  }

  public function getRegisterProgramAll(){
    $sql = "SELECT a.member_id as member_id,b.name as program_name,a.date_added as dateAdd,a.admin_approve as admin_approve,a.id as id
    FROM mhd_register_program a LEFT JOIN mhd_program b ON a.program_id = b.id WHERE a.year_id = '4' AND a.del = '0' ORDER BY a.id DESC";
    $query = $this->db->query($sql);
    return $query->result();
  }
  public function registerApprove($id){
    $this->db->where('id',$id);
    $this->db->set('admin_approve','1');
    $this->db->update('register_program');
    return $this->db->affected_rows();
  }
  public function registerdisApprove($id){
    $this->db->where('id',$id);
    $this->db->set('admin_approve','0');
    $this->db->update('register_program');
    return $this->db->affected_rows();
  }
  // ------------------------------------------------------------------------

}

/* End of file Register_program_model.php */
/* Location: ./application/models/Register_program_model.php */