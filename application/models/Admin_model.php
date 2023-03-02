<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Admin_model
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

class Admin_model extends CI_Model {

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function login($username, $password)
  {
    $this->db->where('username', $username);
    $this->db->where('password', $password);
    $query = $this->db->get('admin');
    return $query->num_rows() == 1 ? $query->row() : false;
  }

  public function edit($id, $data)
  {
    $this->db->where('id', $id);
    $this->db->set($data);
    $this->db->update('admin');
    return $this->db->affected_rows();
  }

  // EDIT
  public function add($data)
  {
    $this->db->set($data);
    $this->db->insert('admin');
    return $this->db->insert_id();
  }

  public function del($id)
  {
    $this->db->set('del', 1);
    $this->db->where('id', $id);
    $this->db->update('admin');
    return $this->db->affected_rows() == 1 ? true : false;
  }

  public function getList($id)
  {
    $this->db->where('id', $id);
    $this->db->where('del', 0);
    $query = $this->db->get('admin');
    return $query->row();
  }

  public function getListByAdmin($id)
  {
    $this->db->where('mhd_admin.id', $id);
    $this->db->join('mhd_admin_permission', 'mhd_admin_permission.id = mhd_admin.permission_id', 'LEFT');
    $this->db->where('mhd_admin.del', 0);
    $this->db->where('mhd_admin_permission.del', 0);
    $query = $this->db->get('admin');
    return $query->row();
  }


  public function getLists($filter=array(), $start=0, $limit='', $sort='', $by='')
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
    $this->db->where('del', 0);
    $query = $this->db->get('admin');
    return $query->result();
  }

  public function getAuthority()
  {
    $query = $this->db->get('admin_authority');
    return $query->result();
  }

  // ------------------------------------------------------------------------

}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */