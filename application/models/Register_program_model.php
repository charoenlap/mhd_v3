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
        $this->db->where($key, $value);
      }
    }
    if ($start>=0 && $limit>=1) {
      $this->db->limit($limit, $start);
    }
    if (!empty($sort) && !empty($by)) {
      $this->db->order_by($sort, $by);
    }
    $this->db->where('del', 0);
    $query = $this->db->get('register_program');
    return $query->result();
  }
  // ------------------------------------------------------------------------



  // Custom Query ------------------------------------------------------------------------
  public function updateSlip($register_id, $member_id, $year_id, $company_id) {
    $this->db->set('send_slip', 1);
    $this->db->where('register_id', $register_id);
    $this->db->update('register_program');
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
    $this->db->order_by('mhd_register_program.id','DESC');
    $this->db->join('mhd_program', 'mhd_program.id = mhd_register_program.program_id', 'LEFT'); 
    $query = $this->db->get('register_program');
    return $query->result();
  }
  public function getListProgramByYear($id, $member_id, $company_id, $slip=null)
  {
    $this->db->select('register_program.*, mhd_register_program.price as price, mhd_program.name as program_name');
    $this->db->where('mhd_register_program.member_id',$member_id);
    if ($company_id>0) {
      $this->db->where('mhd_register_program.company_id',$company_id);
    }
    if ($id>0) {
      $this->db->where('mhd_register_program.register_id',$id);
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
    return $query->result();
  }
  public function checkProgramInRegister($id, $program_id, $member_id, $company_id) {
    $this->db->where('register_id', $id);
    $this->db->where('program_id', $program_id);
    $this->db->where('member_id',$member_id);
    $this->db->where('company_id',$company_id);
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
  // ------------------------------------------------------------------------

}

/* End of file Register_program_model.php */
/* Location: ./application/models/Register_program_model.php */