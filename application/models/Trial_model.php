<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Trial_model
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

class Trial_model extends CI_Model {

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
    $this->db->insert('program_trial');
    return $this->db->insert_id();
  }

  public function edit($id, $data)
  {
    $this->db->where('id', $id);
    $this->db->set($data);
    $this->db->update('program_trial');
    return $this->db->affected_rows()==1 ? true : false;
  }

  public function del($id)
  {
    $this->db->where('id', $id);
    $this->db->set( array('del'=>1) );
    $this->db->update('program_trial');
    return $this->db->affected_rows()==1 ? true : false;
  }

  public function getList($id)
  {
    $this->db->where('id', $id);
    $this->db->where('del', 0);
    $query = $this->db->get('program_trial');
    return $query->num_rows() == 1 ? $query->row() : false;
  }

  public function getLists($filter=array(), $start=0, $limit=10, $sort='', $by='')
  {
    $this->db->select('mhd_program_trial.*,mhd_program_trial.id as id,mhd_year.year as year');
    if (count($filter)>0) {
      foreach ($filter as $key => $value) {
        $this->db->where('mhd_program_trial.'.$key, $value);
      }
    }
    if ($start>=0 && $limit>=1) {
      $this->db->limit($limit, $start);
    }
    if (!empty($sort) && !empty($by)) {
      $this->db->order_by($sort, $by);
    }
    $this->db->where('mhd_program_trial.del', 0);
    $this->db->join('mhd_year','mhd_year.id = mhd_program_trial.year_id','LEFT');
    $query = $this->db->get('program_trial');
    return $query->result();
  }
  // ------------------------------------------------------------------------



  // Custom Query ------------------------------------------------------------------------
  public function getTrialBySlug($slug)
  {
    $this->db->where('slug', $slug);
    $this->db->where('del', 0);
    $query = $this->db->get('program_trial');
    return $query->row();
  }
  // ------------------------------------------------------------------------

}

/* End of file Trial_model.php */
/* Location: ./application/models/Trial_model.php */