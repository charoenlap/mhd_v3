<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Register_model
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

class Register_model extends CI_Model {

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
    $this->db->insert('register');
    return $this->db->insert_id();
  }

  public function edit($id, $data)
  {
    $this->db->where('id', $id);
    $this->db->set($data);
    $this->db->update('register');
    return $this->db->affected_rows()==1 ? true : false;
  }

  public function del($id)
  {
    $this->db->where('id', $id);
    $this->db->set( array('del'=>1) );
    $this->db->update('register');
    return $this->db->affected_rows()==1 ? true : false;
  }

  public function getList($id)
  {
    $this->db->where('id', $id);
    $this->db->where('del', 0);
    $query = $this->db->get('register');
    return $query->num_rows() == 1 ? $query->row() : false;
  }

  public function getLists($filter=array(), $start=0, $limit=10, $sort='', $by='')
  {
    if (count($filter)>0) {
      foreach ($filter as $key => $value) {
        // $this->db->where($key, $value);
        if($key == 'firstname'){
          $this->db->select('register.*,mhd_member.firstname as firstname');
          $this->db->join('mhd_member', 'mhd_member.id=mhd_register.member_id', 'LEFT');
          $this->db->where('mhd_member.firstname',$value);
        } elseif($key == 'year_id') {
          if($value > 0){
            $this->db->where('register.year_id',$value);
          } else {
            $this->db->where('register.year_id >',0);
          }
        } elseif($key == 'email') {
          $this->db->select('register.*,mhd_member.email as email');
          $this->db->join('mhd_member', 'mhd_member.id=mhd_register.member_id', 'LEFT');
          $this->db->where('mhd_member.email',$value);
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

    $this->db->where('register.del', 0);
    $query = $this->db->get('register');
    return $query->result();
  }
  // ------------------------------------------------------------------------



  // Custom Query ------------------------------------------------------------------------
  public function delmember($id) 
  {
    $this->db->where('member_id', $id);
    $this->db->set(array('del'=>1));
    $this->db->update('register');
    return $this->db->affected_rows() == 1 ? true : false;
  }
  public function getRegisterByYearAndMember($member_id, $year_id) 
  {
    $this->db->where('member_id', $member_id);
    $this->db->where('year_id', $year_id);
    $this->db->where('del', 0);
    $query = $this->db->get('register');
    return $query->num_rows() == 1 ? $query->row() : false;
  }

  public function countLists($filter=array())
  {
    // $this->db->select('mhd_register.*, mhd_member.member_no');
    if (count($filter)>0) {
      foreach ($filter as $key => $value) {
        if($key == 'firstname'){
          $this->db->select('register.*,mhd_member.firstname as firstname');
          $this->db->join('mhd_member', 'mhd_member.id=mhd_register.member_id', 'LEFT');
          $this->db->where('mhd_member.firstname',$value);
        } elseif($key == 'year_id') {
          if($value > 0){
            $this->db->where('register.year_id',$value);
          } else {
            $this->db->where('register.year_id >',0);
          }
        } elseif($key == 'email') {
          $this->db->select('register.*,mhd_member.email as email');
          $this->db->join('mhd_member', 'mhd_member.id=mhd_register.member_id', 'LEFT');
          $this->db->where('mhd_member.email',$value);
        } elseif($key == 'company_name') {
          $this->db->select('register.*,mhd_company.name as name');
          $this->db->join('mhd_company', 'mhd_company.id=mhd_register.company_id', 'LEFT');
          $this->db->where('mhd_company.name',$value);
        } else {
          $this->db->where($key, $value);
        }
      }
    }
    // $this->db->join('mhd_member','mhd_member.id = mhd_register.member_id','LEFT');
    // $this->db->where('mhd_member.del', 0);
    $query = $this->db->get('register');
    return $query->num_rows();
  }

  public function getListsByMember($filter=array(), $start=0, $limit=10, $sort='', $by='')
  {
    if (count($filter)>0) {
      foreach ($filter as $key => $value) {
        // $this->db->where($key, $value);
        if($key == 'firstname'){
          $this->db->select('register.*,mhd_member.firstname as firstname');
          $this->db->join('mhd_member', 'mhd_member.id=mhd_register.member_id', 'LEFT');
          $this->db->where('mhd_member.firstname',$value);
        } elseif($key == 'year_id') {
          if($value > 0){
            $this->db->where('register.year_id',$value);
          } else {
            $this->db->where('register.year_id >',0);
          }
        } elseif($key == 'email') {
          $this->db->select('register.*,mhd_member.email as email');
          $this->db->join('mhd_member', 'mhd_member.id=mhd_register.member_id', 'LEFT');
          $this->db->where('mhd_member.email',$value);
        } elseif($key == 'company_name') {
          $this->db->select('register.*,mhd_company.name as name');
          $this->db->join('mhd_company', 'mhd_company.id=mhd_register.company_id', 'LEFT');
          $this->db->where('mhd_company.name',$value);
        } elseif($key == 'mhd_register.member_id') {
          $this->db->where($key, $value);
        } else {
          $this->db->select('(SELECT COUNT(payment_id) FROM mhd_payment_assign WHERE status = 0 AND payment_id = mhd_payment.id ) AS c_payment,
          (SELECT COUNT(payment_id) FROM mhd_payment_assign WHERE status = 1 AND payment_id = mhd_payment.id) AS payment_confirm,mhd_register.*');
          // $this->db->where($key, $value);
        }
      }
    }
    if ($start>=0 && $limit>=1) {
      $this->db->limit($limit, $start);
    }
    if (!empty($sort) && !empty($by)) {
      $this->db->order_by($sort, $by);
    }
    $this->db->join('mhd_payment','mhd_register.id = mhd_payment.register_id');
    $this->db->order_by('c_payment','DESC');
    // $this->db->order_by('payment_confirm','DESC');
    // $this->db->order_by('mhd_register.id','DESC');
    // $this->db->order_by('mhd_payment.date_modify','DESC');
    $this->db->where('mhd_payment.del',0);
    $this->db->where('register.del', 0);
    $query = $this->db->get('register');
    return $query->result();
  }
  // ------------------------------------------------------------------------

}

/* End of file Register_model.php */
/* Location: ./application/models/Register_model.php */