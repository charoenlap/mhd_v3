<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Member_model
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

class Member_model extends CI_Model {

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function getLists($filter=array(), $start=false, $limit=false, $sort='', $by='asc')
  {
    if ($start>=0 && $limit>=1) {
      $this->db->limit($limit, $start);
    }
    if (!empty($sort)) {
      $this->db->order_by($sort, $by);
    }
    if (count($filter)>0) {
      foreach ($filter as $key => $value) {
        $this->db->where($key, $value);
      }
    }
    $this->db->select('member.*, concat(mhd_year.year,mhd_member.member_no) as member_no, mhd_company.name as hospital');
    $this->db->join('mhd_register', 'mhd_register.member_id = mhd_member.id', 'LEFT'); 
    $this->db->join('mhd_company', 'mhd_company.id = mhd_register.company_id AND mhd_company.member_id = mhd_member.id', 'LEFT');
    $this->db->join('mhd_year', 'mhd_year.id = mhd_register.year_id', 'LEFT');
    $this->db->where('mhd_member.del', 0);
    $this->db->where('mhd_year.del', 0);
    $this->db->where('mhd_company.del', 0);
    $this->db->where('mhd_register.del', 0);
    $query = $this->db->get('member');
    return $query->result();
  }

  public function getList($id)
  {
    $this->db->select('member.*, concat(mhd_year.year,mhd_member.member_no) as member_no, mhd_company.name as hospital');
    $this->db->where('mhd_member.id', $id);
    $this->db->join('mhd_register', 'mhd_register.member_id = mhd_member.id', 'LEFT'); 
    $this->db->join('mhd_company', 'mhd_company.id = mhd_register.company_id AND mhd_company.member_id = mhd_member.id', 'LEFT');
    $this->db->join('mhd_year', 'mhd_year.id = mhd_register.year_id', 'LEFT');
    $this->db->where('mhd_member.del', 0);
    $this->db->where('mhd_year.del', 0);
    $this->db->where('mhd_company.del', 0);
    $this->db->where('mhd_register.del', 0);
    $query = $this->db->get('member');

    return $query->row();
  }

  public function add($data)
  {
    $this->db->set($data);
    $this->db->insert('member');
    $id = $this->db->insert_id();
    
    $this->db->query('UPDATE mhd_member SET member_no = LPAD(mhd_member.id,4,0) WHERE id = \''.$id.'\'');
    return $id;
  }

  public function edit($id, $data) 
  {
    $this->db->set($data);
    $this->db->where('id', $id);
    $this->db->update('member');
    return $this->db->affected_rows() == 1 ? true : false;
  }

  public function del($id) 
  {
    $this->db->set('del', 1);
    $this->db->where('id', $id);
    $this->db->update('member');
    return $this->db->affected_rows() == 1 ? true : false;
  }

  // ------------------------------------------------------------------------


  public function login($email, $password) 
  {
    $this->db->where('email', $email);
    $this->db->where('password', $password);
    // $this->db->where('confirm', 1);
    $this->db->where('del', 0);
    $query = $this->db->get('member');
    return $query->num_rows() == 1 ? $query->row() : false;
  }

  public function checkConfirm($email, $password)
  {
    $this->db->where('email', $email);
    $this->db->where('password', $password);
    $this->db->where('del', 0);
    $this->db->where('confirm', 1);
    $query = $this->db->get('member');
    return $query->num_rows() == 1 ? true : false;
  }

  public function findEmail($email, $id=null) 
  {
    if ($id>0) {
      $this->db->where('id', $id, '!='); // ? เช็คอีเมลในระบบที่ไม่ใช่ไอดีนี้
    }
    $this->db->where('email', $email);
    $this->db->where('del', 0);
    $query = $this->db->get('member');
    return $query->num_rows() == 1 ? true : false;
  }

  public function getListByEmail($email)
  {
    $this->db->where('email', $email);
    $this->db->where('del', 0);
    $query = $this->db->get('member');
    return $query->row();
  }

  public function getEmailAndCode($email, $code)
  {
    $this->db->where('email', $email);
    $this->db->where('forget_code', $code);
    $this->db->where('del', 0);
    $query = $this->db->get('member');
    return $query->num_rows() == 1 ? true : false;
  }

}

/* End of file Member_model.php */
/* Location: ./application/models/Member_model.php */