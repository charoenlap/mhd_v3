<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Program_infection_model
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

class Program_infection_model extends CI_Model {

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
    $this->db->insert('program_infection');
    return $this->db->insert_id();
  }

  public function edit($id, $data)
  {
    $this->db->where('id', $id);
    $this->db->set($data);
    $this->db->update('program_infection');
    return $this->db->affected_rows()==1 ? true : false;
  }

  public function del($id)
  {
    $this->db->where('id', $id);
    $this->db->set( array('del'=>1) );
    $this->db->update('program_infection');
    return $this->db->affected_rows()==1 ? true : false;
  }

  public function getList($id)
  {
    $this->db->where('id', $id);
    $this->db->where('del', 0);
    $query = $this->db->get('program_infection');
    return $query->num_rows() == 1 ? $query->row() : false;
  }

  public function getLists($filter=array(), $start=0, $limit=10, $sort='', $by='')
  {

    if ($start>=0 && $limit>=1) {
      $this->db->limit($limit, $start);
    }
    $this->db->order_by('code', 'ASC');
    $this->db->order_by('name', 'ASC');
    // $this->db->order_by('section', 'ASC');
    if (!empty($sort)) {
      $this->db->order_by($sort, $by);
    }
    if (count($filter)>0) {
      foreach ($filter as $key => $value) {
        $this->db->where($key, $value);
      }
    }
    $this->db->where('del', 0);
    $query = $this->db->get('program_infection');
    return $query->result();
  }
  // ------------------------------------------------------------------------



  // Custom Query ------------------------------------------------------------------------
  public function delByProgram($program_id)
  {
    $this->db->where('program_id', $program_id);
    $this->db->delete('program_infection');
    return $this->db->affected_rows()==1 ? true : false;
  }
}

/* End of file Program_instrument_model.php */
/* Location: ./application/models/Program_instrument_model.php */