<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Program_model
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

class Program_model extends CI_Model {

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
    $this->db->insert('program');
    return $this->db->insert_id();
  }

  public function edit($id, $data)
  {
    $this->db->where('id', $id);
    $this->db->set($data);
    $this->db->update('program');
    return $this->db->affected_rows()==1 ? true : false;
  }

  public function del($id)
  {
    $this->db->where('id', $id);
    $this->db->set( array('del'=>1) );
    $this->db->update('program');
    return $this->db->affected_rows()==1 ? true : false;
  }

  public function getList($id)
  {
    $this->db->where('id', $id);
    $this->db->where('del', 0);
    $query = $this->db->get('program');
    return $query->num_rows() == 1 ? $query->row() : false;
  }
  public function getListsSlug($slug){
    $this->db->where('slug', $slug);
    $this->db->where('del', 0);
    $query = $this->db->get('program');
    return $query->num_rows() == 1 ? $query->row() : false;
  }

  public function getLists($filter=array(), $start=0, $limit=10, $sort='', $by='')
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
    $query = $this->db->get('program');
    return $query->result();
  }
  // ------------------------------------------------------------------------



  // Custom Query ------------------------------------------------------------------------

  public function countLists($filter=array()) 
  {
    if (count($filter)>0) {
      foreach ($filter as $key => $value) {
        $this->db->where($key, $value);
      }
    }
    $query = $this->db->get('program');
    return $query->num_rows();
  }

  public function getProgramBySlug($slug)
  {
    // if($slug == "eqaisyphilis"){
    //   $slug = "eqai-syphilis";
    // }elseif($slug == "eqaihbv"){
    //   $slug = "eqai-hbv";
    // }
    $this->db->where('slug', $slug);
    $this->db->where('del', 0);
    $query = $this->db->get('program');
    return $query->row();
  }

  
  // ------------------------------------------------------------------------

}

/* End of file Program_model.php */
/* Location: ./application/models/Program_model.php */