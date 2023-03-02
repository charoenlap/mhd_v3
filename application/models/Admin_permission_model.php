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

class Admin_permission_model extends CI_Model {

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function edit($id, $data)
  {
    $this->db->where('id', $id);
    $this->db->set($data);
    $this->db->update('admin_permission');
    return $this->db->affected_rows();
  }

  // EDIT
  public function add($data)
  {
    $this->db->set($data);
    $this->db->insert('admin_permission');
    return $this->db->insert_id();
  }

  public function del($id)
  {
    $this->db->set('del', 1);
    $this->db->where('id', $id);
    $this->db->update('admin_permission');
    return $this->db->affected_rows() == 1 ? true : false;
  }

  public function getList($id)
  {
    $this->db->where('id', $id);
    $this->db->where('del', 0);
    $query = $this->db->get('admin_permission');
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
    $query = $this->db->get('admin_permission');
    return $query->result();
  }

  // ------------------------------------------------------------------------

}

/* End of file Admin_permssion_model.php */
/* Location: ./application/models/Admin_permssion_model.php */