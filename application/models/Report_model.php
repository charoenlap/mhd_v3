<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Report_model
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

class Report_model extends CI_Model {

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
    $this->db->insert('report');
    return $this->db->insert_id();
  }

  public function edit($id, $data)
  {
    $this->db->where('id', $id);
    $this->db->set($data);
    $this->db->update('report');
    return $this->db->affected_rows()==1 ? true : false;
  }

  public function del($id)
  {
    $this->db->where('id', $id);
    $this->db->set( array('del'=>1) );
    $this->db->update('report');
    return $this->db->affected_rows()==1 ? true : false;
  }

  public function getList($id)
  {
    $this->db->where('id', $id);
    $this->db->where('del', 0);
    $query = $this->db->get('report');
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

    // $this->db->where('del', 0);
    $query = $this->db->get('report');
    return $query->result();
  }
  // ------------------------------------------------------------------------



  // Custom Query ------------------------------------------------------------------------
  public function getReport($filter=array()) 
  {
    if (count($filter)>0) {
      foreach ($filter as $key => $value) {
        $this->db->where($key, $value);
      }

      $query = $this->db->get('report');
      return $query->result();
    }
  }
  public function getReportOne($filter=array()) 
  {
    if (count($filter)>0) {
      foreach ($filter as $key => $value) {
        $this->db->where($key, $value);
      }
      $this->db->order_by('id','DESC');
      $this->db->limit('1');
      $query = $this->db->get('report');
      return $query->row();
    }
  }

  public function getReportNavBar($filter=array()) 
  {
    $this->db->select('report.*,mhd_program_trial.del as trial_del');
    if (count($filter)>0) {
      foreach ($filter as $key => $value) {
          $this->db->where($key, $value);
      }
      $this->db->join('mhd_program_trial','mhd_program_trial.id = mhd_report.trial_id','LEFT');
      $query = $this->db->get('report');
      return $query->result();
    }
  }

  public function getMemberInReportTrial($filter=array(),$year_id, $program_id, $trial_id)
  {
    $this->db->select('report.*,mhd_member.*, mhd_company.name as hospital');
    if (count($filter)>0) {
      foreach ($filter as $key => $value) {
        $this->db->where($key, $value);
      }
    }
    $this->db->where('year_id', $year_id);
    $this->db->where('program_id', $program_id);
    $this->db->where('trial_id', $trial_id);
    $this->db->join('mhd_company', 'mhd_company.id = mhd_report.company_id', 'LEFT');
    $this->db->join('mhd_member', 'mhd_member.id = mhd_report.member_id', 'LEFT');
    $query = $this->db->get('report');
    return $query->result();
  }

  public function getMemberInReport($year_id, $program_id, $trial_id)
  {
    $this->db->where('year_id', $year_id);
    $this->db->where('program_id', $program_id);
    $this->db->where('trial_id', $trial_id);
    $query = $this->db->get('report');
    return $query->result();
  }
  public function getMemberInReportRegister($program_id,$year_id,$slug)
  {
    $this->db->select('report.*, concat(mhd_year.year, SUBSTR(mhd_member.member_no,-4)) as member_no, mhd_report.date_report as date_report, mhd_register_program.price as price, mhd_program.code as code_program
    ,mhd_company.room as room_comp, mhd_company.name as name_comp, mhd_program_trial.name as name_trial ');
    $this->db->where('mhd_register_program.del','0');
    $this->db->where('mhd_year.del','0');
    $this->db->where('mhd_report.year_id',$year_id);
    $this->db->where('mhd_program.del','0');
    $this->db->where('mhd_member.del','0');
    $this->db->where('mhd_company.del','0');
    $this->db->where('mhd_program_trial.del','0');
    $this->db->where('mhd_report.program_id', $program_id);
    // add new 
    $this->db->where('mhd_program_trial.slug',$slug);
    $this->db->join('mhd_year', 'mhd_year.id = mhd_report.year_id', 'LEFT');
    $this->db->join('mhd_program_trial', 'mhd_program_trial.id = mhd_report.trial_id', 'LEFT');
    $this->db->join('mhd_member', 'mhd_member.id = mhd_report.member_id', 'LEFT');
    $this->db->join('mhd_company', 'mhd_company.member_id = mhd_report.member_id', 'LEFT');
    $this->db->join('mhd_program', 'mhd_program.id = mhd_report.program_id', 'LEFT');
    // $this->db->join('mhd_register_program', 'mhd_report.register_program_id = mhd_register_program.program_id', 'LEFT'); 
    $this->db->join('mhd_register_program', 'mhd_register_program.id = mhd_report.register_program_id', 'LEFT'); 
    $query = $this->db->get('report');
    return $query->result();
  }

  // =
  public function getReportFilter($filter=array(),$start=0,$limit=10,$sort='',$by='') 
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

      $query = $this->db->get('report');
      return $query->result();
  }

  public function getMemberByMemberIdTrial($member_id,$year_id, $program_id, $trial_id)
  {
    $this->db->select('report.*,mhd_member.*, mhd_company.name as hospital');
    $this->db->where('mhd_report.member_id', $member_id);
    $this->db->where('mhd_report.year_id', $year_id);
    $this->db->where('mhd_report.program_id', $program_id);
    $this->db->where('mhd_report.trial_id', $trial_id);
    $this->db->join('mhd_member', 'mhd_member.id = mhd_report.member_id', 'LEFT');
    $this->db->join('mhd_company', 'mhd_company.member_id = mhd_report.member_id', 'LEFT');
    $query = $this->db->get('report');
    // return $query->result();
    return $query->row();
  }
  // ------------------------------------------------------------------------

}

/* End of file Report_model.php */
/* Location: ./application/models/Report_model.php */