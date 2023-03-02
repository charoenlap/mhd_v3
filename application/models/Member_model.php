 <?php
  defined('BASEPATH') or exit('No direct script access allowed');

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

  class Member_model extends CI_Model
  {

    // ------------------------------------------------------------------------

    public function __construct()
    {
      parent::__construct();
    }

    // ------------------------------------------------------------------------


    // ------------------------------------------------------------------------
    public function getAll($year)
    {

      // $this->db->select('member.*, concat(mhd_year.year, SUBSTR(mhd_member.member_no,-5)) as member_no, mhd_company.name as hospital');
      // $this->db->join('mhd_register', 'mhd_register.member_id = mhd_member.id', 'LEFT'); 
      // $this->db->join('mhd_company', 'mhd_company.id = mhd_register.company_id AND mhd_company.member_id = mhd_member.id', 'LEFT');
      // $this->db->join('mhd_year', 'mhd_year.id = mhd_register.year_id', 'LEFT');
      // $this->db->where('mhd_member.del', 0);
      // $this->db->where('mhd_year.del', 0);
      // $this->db->where('mhd_company.del', 0);
      // $this->db->where('mhd_register.del', 0);
      $this->db->select(
        'mhd_member.oldref AS member_no,
      mhd_member.date_added AS date_paper,
      mhd_company.name AS hospital_name,
      mhd_member.firstname AS firstname,
      mhd_member.lastname AS lastname,
      mhd_company.address_1,
      mhd_company.address_2,
      mhd_company.district,
      mhd_company.country,
      mhd_company.province,
      mhd_company.postcode,
      mhd_company.fax,
      mhd_member.email,
      mhd_company.total_bed,
      mhd_company.type_hospital,
      mhd_company.type_hospital_other,
      '
      );

      $this->db->join('mhd_company', 'mhd_company.member_id = mhd_member.id', 'LEFT');
      if (!empty($year)) {
        $this->db->where('YEAR(mhd_member.date_added)', $year);
      }
      $query = $this->db->get('member');
      return $query->result();
    }
    public function getLists($filter = array(), $start = false, $limit = false, $sort = '', $by = 'asc')
    {

      if (!empty($sort)) {
        $this->db->order_by($sort, $by);
      }
      if (count($filter) > 0) {
        foreach ($filter as $key => $value) {
          if ($key == 'email' || $key == 'firstname') {
            $this->db->or_like('mhd_member.' . $key, $value);
          } else if ($key == 'member_no') {
            $this->db->where('(mhd_member.member_no = "' . sprintf('%011d', (int)substr($value, -5)) . '" OR mhd_member.member_no = "' . sprintf('%011d', (int)$value) . '")', NULL, FALSE);
            // $this->db->where($key, sprintf('%011d', $value));
            // $this->db->or_where($key, sprintf('%011d', $value));
          } else {
            $this->db->where($key, $value);
          }
        }
      } else {
        if ($start >= 0 && $limit >= 1) {
          $this->db->limit($limit, $start);
        }
      }
      $this->db->select('member.*, concat(mhd_year.year, SUBSTR(mhd_member.member_no,-4)) as member_no, mhd_company.name as hospital, mhd_year.year as year');
      $this->db->join('mhd_register', 'mhd_register.member_id = mhd_member.id', 'LEFT');
      $this->db->join('mhd_company', 'mhd_company.id = mhd_register.company_id AND mhd_company.member_id = mhd_member.id', 'LEFT');
      $this->db->join('mhd_year', 'mhd_year.id = mhd_register.year_id', 'LEFT');
      $this->db->where('mhd_member.del', 0);
      $this->db->where('mhd_year.del', 0);
      $this->db->where('mhd_company.del', 0);
      $this->db->where('mhd_register.del', 0);
      $query = $this->db->get('member');
      // echo $this->db->last_query();
      return $query->result();
    }
    public function countLists($filter = array(), $start = false, $limit = false, $sort = '', $by = 'asc')
    {
      if ($start >= 0 && $limit >= 1) {
        // $this->db->limit($limit, $start);
      }
      if (!empty($sort)) {
        $this->db->order_by($sort, $by);
      }
      if (count($filter) > 0) {
        foreach ($filter as $key => $value) {
          $this->db->where($key, $value);
        }
      }
      $this->db->select('member.*, concat(mhd_year.year,mhd_member.member_no) as member_no, mhd_company.name as hospital');
      $this->db->join('mhd_register', 'mhd_register.member_id = mhd_member.id', 'LEFT');
      $this->db->join('mhd_company', 'mhd_company.id = mhd_register.company_id AND mhd_company.member_id = mhd_member.id', 'LEFT');
      $this->db->join('mhd_year', 'mhd_year.id = mhd_register.year_id', 'LEFT');
      $this->db->where('mhd_member.del', 0);
      // $this->db->where('mhd_year.del', 0);
      // $this->db->where('mhd_company.del', 0);
      // $this->db->where('mhd_register.del', 0);
      $query = $this->db->get('member');
      // echo $this->db->last_query();
      return $query->num_rows();
    }

    public function getList($id)
    {
      $this->db->select('member.*, concat(mhd_year.year,SUBSTR(mhd_member.member_no,-5)) as member_no, mhd_company.name as hospital, mhd_company.room as hospital_room, mhd_company.id as company_id');
      $this->db->where('mhd_member.id', $id);
      $this->db->join('mhd_register', 'mhd_register.member_id = mhd_member.id', 'LEFT');
      $this->db->join('mhd_company', 'mhd_company.id = mhd_register.company_id AND mhd_company.member_id = mhd_member.id', 'LEFT');
      $this->db->join('mhd_year', 'mhd_year.id = mhd_register.year_id', 'LEFT');
      $this->db->where('mhd_member.del', 0);
      // $this->db->where('mhd_year.del', 0);
      // $this->db->where('mhd_company.del', 0);
      // $this->db->where('mhd_register.del', 0);
      $query = $this->db->get('member');
      // echo $this->db->last_query();
      return $query->row();
    }


    public function add($data)
    {
      $this->db->set($data);
      $this->db->insert('member');
      $id = $this->db->insert_id();

      $this->db->query('UPDATE mhd_member SET member_no = LPAD(mhd_member.id,11,0) WHERE id = \'' . $id . '\'');
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

    public function findEmail($email, $id = null, $iswait = null)
    {
      if ($id > 0) {
        $this->db->where('id', $id, '!='); // ? เช็คอีเมลในระบบที่ไม่ใช่ไอดีนี้
      }
      if ($iswait === true || $iswait === false) {
        $this->db->where('is_waiting', $iswait);
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
      return $query->num_rows() == 1 ? $query->row() : false;
    }

    public function getEmailAndCode($email, $code)
    {
      $this->db->where('email', $email);
      $this->db->where('forget_code', $code);
      $this->db->where('del', 0);
      $query = $this->db->get('member');
      return $query->num_rows() == 1 ? true : false;
    }

    public function getListByCode($code)
    {
      $this->db->where('member_no', $code);
      $this->db->where('del', 0);
      $query = $this->db->get('member');
      return $query->row();
    }

    public function getListById($id)
    {
      $this->db->where('mhd_member.id', $id);
      $this->db->where('mhd_member.del', 0);
      $query = $this->db->get('member');
      return $query->row();
    }

    public function findWaitingEmail($email)
    {
      $this->db->where('email', trim($email));
      $this->db->where('del', 0);
      $this->db->where('is_waiting', 1);
      $query = $this->db->get('member');
      return $query->num_rows() == 1 ? $query->row()->id : false;
    }

    public function getListsByYear($filter = array(), $start = false, $limit = false, $sort = '', $by = '')
    {

      if (!empty($sort)) {
        $this->db->order_by($sort, $by);
      }
      if (count($filter) > 0) {
        foreach ($filter as $key => $value) {
          if ($key == 'email' || $key == 'firstname') {
            $this->db->or_like('mhd_member.' . $key, $value);
          } else if ($key == 'member_no') {
            $this->db->where('(mhd_member.member_no = "' . sprintf('%011d', (int)substr($value, -5)) . '" OR mhd_member.member_no = "' . sprintf('%011d', (int)$value) . '")', NULL, FALSE);
            // $this->db->where($key, sprintf('%011d', $value));
            // $this->db->or_where($key, sprintf('%011d', $value));
          // } else if ($key == 'year') {
          //   $this->db->where('mhd_year.year ='.(int)$value);
          } else {
            $this->db->where($key, $value);
          }
        }
      } else {
        if ($start >= 0 && $limit >= 1) {
          $this->db->limit($limit, $start);
        }
      }
      $this->db->select('member.*, concat(mhd_year.year, SUBSTR(mhd_member.member_no,-5)) 
      as member_no, mhd_company.name as hospital, mhd_company.type_hospital as type_hospital,mhd_company.type_hospital_other as type_hospital_other,mhd_company.room as room,mhd_company.address_1 as address_1, mhd_company.address_2 as address_2, mhd_company.district as district, 
      mhd_company.country as country, mhd_company.province province, mhd_company.postcode as post_code, mhd_company.fax as fax, mhd_company.total_bed as total_bed
      ,mhd_register.member_id as member_regis_id,mhd_register.total as regis_total, mhd_year.id as year_id');
      $this->db->join('mhd_register', 'mhd_register.member_id = mhd_member.id', 'LEFT');
      $this->db->join('mhd_company', 'mhd_company.id = mhd_register.company_id AND mhd_company.member_id = mhd_member.id', 'LEFT');
      $this->db->join('mhd_year', 'mhd_year.id = mhd_register.year_id', 'LEFT');
      $this->db->where('mhd_member.del', 0);
      $this->db->where('mhd_year.del', 0);
      $this->db->where('mhd_company.del', 0);
      $this->db->where('mhd_register.del', 0);
      // $query = $this->db->get('member');
      $query = $this->db->get('member');
      // echo $this->db->last_query();
      return $query->result();
    }
    public function getListsByYearNew($filter = array(), $start = false, $limit = false, $sort = '', $by = '')
    {

      if (!empty($sort)) {
        $this->db->order_by($sort, $by);
      }
      if (count($filter) > 0) {
        foreach ($filter as $key => $value) {
          if ($key == 'email' || $key == 'firstname') {
            $this->db->or_like('mhd_member.' . $key, $value);
          } else if ($key == 'member_no') {
            $this->db->where('(mhd_member.member_no = "' . sprintf('%011d', (int)substr($value, -5)) . '" OR mhd_member.member_no = "' . sprintf('%011d', (int)$value) . '")', NULL, FALSE);
            // $this->db->where($key, sprintf('%011d', $value));
            // $this->db->or_where($key, sprintf('%011d', $value));
          // } else if ($key == 'year') {
          //   $this->db->where('mhd_year.year ='.(int)$value);
          } else {
            $this->db->where($key, $value);
          }
        }
      } else {
        if ($start >= 0 && $limit >= 1) {
          $this->db->limit($limit, $start);
        }
      }
      $this->db->select('member.*, concat(mhd_year.year, SUBSTR(mhd_member.member_no,-5)) 
      as member_no, mhd_company.name as hospital, mhd_company.type_hospital as type_hospital,mhd_company.type_hospital_other as type_hospital_other,mhd_company.room as room,mhd_company.address_1 as address_1, mhd_company.address_2 as address_2, mhd_company.district as district, 
      mhd_company.country as country, mhd_company.province province, mhd_company.postcode as post_code, mhd_company.fax as fax, mhd_company.total_bed as total_bed
      ,mhd_register.member_id as member_regis_id,mhd_register.total as regis_total, mhd_year.id as year_id, GROUP_CONCAT(mhd_register_program.bill_title_en)');
      $this->db->join('mhd_register', 'mhd_register.member_id = mhd_member.id', 'LEFT');
      $this->db->join('mhd_company', 'mhd_company.id = mhd_register.company_id AND mhd_company.member_id = mhd_member.id', 'LEFT');
      $this->db->join('mhd_year', 'mhd_year.id = mhd_register.year_id', 'LEFT');
      $this->db->join('mhd_register_program', 'mhd_register_program.member_id = mhd_member.id', 'LEFT');
      $this->db->where('mhd_member.del', 0);
      $this->db->where('mhd_year.del', 0);
      $this->db->where('mhd_company.del', 0);
      $this->db->where('mhd_register.del', 0);
      $this->db->group_by('mhd_member.id');
      // $query = $this->db->get('member');
      $query = $this->db->get('member');
      // echo $this->db->last_query();
      return $query->result();
    }
    public function testlist($filter = array(), $start = false, $limit = false, $sort = '', $by = 'asc')
    {
      if (!empty($sort)) {
        $this->db->order_by($sort, $by);
      }
      if (count($filter) > 0) {
        foreach ($filter as $key => $value) {
          if ($key == 'email' || $key == 'firstname') {
            $this->db->or_like('mhd_member.' . $key, $value);
          } else if ($key == 'member_no') {
            $this->db->where('(mhd_member.member_no = "' . sprintf('%011d', (int)substr($value, -5)) . '" OR mhd_member.member_no = "' . sprintf('%011d', (int)$value) . '")', NULL, FALSE);
            // $this->db->where($key, sprintf('%011d', $value));
            // $this->db->or_where($key, sprintf('%011d', $value));
          } else {
            $this->db->where($key, $value);
          }
        }
      } else {
        if ($start >= 0 && $limit >= 1) {
          $this->db->limit($limit, $start);
        }
      }
      $this->db->select('member.*, concat(mhd_year.year, SUBSTR(mhd_member.member_no,-5)) as member_no, mhd_company.name as hospital, mhd_company.temp_oldaddress as oldaddress,mhd_company.fax as fax,mhd_company.total_bed as total_bed,mhd_company.type_hospital as type_hospital,mhd_register_program.program_id as program_id');
      $this->db->join('mhd_register', 'mhd_register.member_id = mhd_member.id', 'LEFT');
      $this->db->join('mhd_company', 'mhd_company.id = mhd_register.company_id AND mhd_company.member_id = mhd_member.id', 'LEFT');
      $this->db->join('mhd_year', 'mhd_year.id = mhd_register.year_id', 'LEFT');
      $this->db->join('mhd_register_program', 'mhd_register_program.register_id = mhd_member.id', 'LEFT');
      $this->db->where('mhd_member.del', 0);
      $this->db->where('mhd_year.del', 0);
      $this->db->where('mhd_company.del', 0);
      $this->db->where('mhd_register.del', 0);
      $query = $this->db->get('member');
      // echo $this->db->last_query();
      return $query->result();
    }

    public function getListReport($filter = array(), $start = false, $limit = false, $sort = '', $by = 'asc')
    {
      if (!empty($sort)) {
        $this->db->order_by($sort, $by);
      }
      if (count($filter) > 0) {
        foreach ($filter as $key => $value) {
          if ($key == 'email' || $key == 'firstname') {
            $this->db->or_like('mhd_member.' . $key, $value);
          } else if ($key == 'member_no') {
            $this->db->where('(mhd_member.member_no = "' . sprintf('%011d', (int)substr($value, -5)) . '" OR mhd_member.member_no = "' . sprintf('%011d', (int)$value) . '")', NULL, FALSE);
            // $this->db->where($key, sprintf('%011d', $value));
            // $this->db->or_where($key, sprintf('%011d', $value));
          } else {
            $this->db->where($key, $value);
          }
        }
      } else {
        if ($start >= 0 && $limit >= 1) {
          $this->db->limit($limit, $start);
        }
      }
      $this->db->select('member.*, concat(mhd_year.year, SUBSTR(mhd_member.member_no,-5)) as member_no, mhd_company.name as hospital, mhd_company.temp_oldaddress as oldaddress,mhd_company.fax as fax,mhd_company.total_bed as total_bed,mhd_company.type_hospital as type_hospital,mhd_register_program.program_id as program_id');
      $this->db->join('mhd_register', 'mhd_register.member_id = mhd_member.id', 'LEFT');
      $this->db->join('mhd_company', 'mhd_company.id = mhd_register.company_id AND mhd_company.member_id = mhd_member.id', 'LEFT');
      $this->db->join('mhd_year', 'mhd_year.id = mhd_register.year_id', 'LEFT');
      $this->db->join('mhd_register_program', 'mhd_register_program.register_id = mhd_member.id', 'LEFT');
      $this->db->where('mhd_member.del', 0);
      $this->db->where('mhd_year.del', 0);
      $this->db->where('mhd_company.del', 0);
      $this->db->where('mhd_register.del', 0);
      $query = $this->db->get('member');
      // echo $this->db->last_query();
      return $query->result();
    }
    public function getMembers($filter=array()) 
    {
      if (count($filter)>0) {
        foreach ($filter as $key => $value) {
          $this->db->where($key, $value);
        }
  
        $query = $this->db->get('member');
        return $query->result();
      }
    }
    public function reportMemberList_bak($year){
      $year = 4;
      
      $this->db->select('mhd_company.name as hospital,
      mhd_member.firstname as firstname,
      mhd_member.lastname as lastname,
      mhd_company.address_1 as address_1,
      mhd_company.district as district,
      mhd_company.country as country,
      mhd_company.province as province,
      mhd_company.postcode as postcode,
      mhd_member.telephone as telephone,
      mhd_company.fax as fax,
      mhd_member.email as email,
      mhd_company.total_bed as total_bed,
      mhd_company.type_hospital as type_hospital,
      mhd_company.room as room,
      mhd_member.date_added as date_added,
      concat(mhd_year.year, SUBSTR(mhd_member.member_no,-5)) as member_no, 
      GROUP_CONCAT(mhd_register_program.bill_contact) AS bill_contact, 
      GROUP_CONCAT(mhd_register_program.bill_title_th) AS bill_title_th, 
      GROUP_CONCAT(mhd_register_program.bill_company) AS bill_company,
      GROUP_CONCAT(mhd_register_program.bill_address) AS bill_address,
      GROUP_CONCAT(mhd_register_program.program_id) AS program_id,
      group_concat(mhd_register_program.sub_member_id) as sub_member_id');
      $this->db->join('mhd_register','mhd_register.member_id = mhd_member.id','LEFT');
      $this->db->join('mhd_company','mhd_company.id = mhd_register.company_id AND mhd_company.member_id = mhd_member.id','LEFT');
      $this->db->join('mhd_year', 'mhd_year.id = mhd_register.year_id', 'LEFT');
      $this->db->join('mhd_register_program', 'mhd_register_program.register_id = mhd_member.id', 'LEFT');
      // $this->db->join('mhd_program', 'mhd_program.id = mhd_register_program.program_id', 'LEFT');
      $this->db->where('mhd_register.year_id',$year);
      $this->db->where('mhd_member.del','0');
      // $this->db->where('mhd_program.del','0');
      $this->db->order_by('mhd_member.id','DESC');
      $this->db->group_by('mhd_member.id');
      $query = $this->db->get('member');
      return $query->result();

    }
    public function reportMemberList($year){
      $sql    = ("SELECT mhd_company.name as hospital,
      mhd_member.firstname as firstname,
      mhd_member.lastname as lastname,
      mhd_company.address_1 as address_1,
      mhd_company.district as district,
      mhd_company.country as country,
      mhd_company.province as province,
      mhd_company.postcode as postcode,
      mhd_member.telephone as telephone,
      mhd_company.fax as fax,
      mhd_member.email as email,
      mhd_company.total_bed as total_bed,
      mhd_company.type_hospital as type_hospital,
      mhd_company.room as room,
      mhd_member.date_added as date_added,
      concat(mhd_year.year, SUBSTR(mhd_member.member_no,-5)) as member_no, 
      (SELECT mhd_company.room as room_eqac FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '1' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as room_eqac,
      (SELECT mhd_company.room as room_eqah FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '2' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as room_eqah,
      (SELECT mhd_company.room as room_eqat FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '3' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as room_eqat,
      (SELECT mhd_company.room as room_eqap FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '4' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as room_eqap,
      (SELECT mhd_company.room as room_beqam FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '5' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as room_beqam,
      (SELECT mhd_company.room as room_heqam FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '6' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as room_heqam,
      (SELECT mhd_company.room as room_uceqam FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '7' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as room_uceqam,
      (SELECT mhd_company.room as room_syphilis FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '8' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as room_syphilis,
      (SELECT mhd_company.room as room_hbv FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '9' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as room_hbv,
      (SELECT mhd_company.room as room_gram FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '10' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as room_gram,
      (SELECT mhd_company.room as room_afb FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '12' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as room_afb,
      (SELECT mhd_company.room as room_iden FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '13' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as room_iden,

      (SELECT mhd_register_program.sub_member_id as sub_member_id_eqac FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '1' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as sub_member_id_eqac,
      (SELECT mhd_register_program.sub_member_id as sub_member_id_eqah FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '2' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as sub_member_id_eqah,
      (SELECT mhd_register_program.sub_member_id as sub_member_id_eqat FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '3' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as sub_member_id_eqat,
      (SELECT mhd_register_program.sub_member_id as sub_member_id_eqap FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '4' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as sub_member_id_eqap,
      (SELECT mhd_register_program.sub_member_id as sub_member_id_beqam FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '5' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as sub_member_id_beqam,
      (SELECT mhd_register_program.sub_member_id as sub_member_id_heqam FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '6' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as sub_member_id_heqam,
      (SELECT mhd_register_program.sub_member_id as sub_member_id_uceqam FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '7' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as sub_member_id_uceqam,
      (SELECT mhd_register_program.sub_member_id as sub_member_id_syphilis FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '8' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as sub_member_id_syphilis,
      (SELECT mhd_register_program.sub_member_id as sub_member_id_hbv FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '9' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as sub_member_id_hbv,
      (SELECT mhd_register_program.sub_member_id as sub_member_id_gram FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '10' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as sub_member_id_gram,
      (SELECT mhd_register_program.sub_member_id as sub_member_id_afb FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '12' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as sub_member_id_afb,
      (SELECT mhd_register_program.sub_member_id as sub_member_id_iden FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '13' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as sub_member_id_iden,

      (SELECT mhd_register_program.bill_contact as eqac FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '1' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as eqac,
      (SELECT mhd_register_program.bill_contact as eqah FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '2' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as eqah,
      (SELECT mhd_register_program.bill_contact as eqat FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '3' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as eqat,
      (SELECT mhd_register_program.bill_contact as eqap FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '4' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as eqap,
      (SELECT mhd_register_program.bill_contact as beqam FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '5' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as beqam,
      (SELECT mhd_register_program.bill_contact as heqam FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '6' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as heqam,
      (SELECT mhd_register_program.bill_contact as uceqam FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '7' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as uceqam,
      (SELECT mhd_register_program.bill_contact as syphilis FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '8' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as syphilis,
      (SELECT mhd_register_program.bill_contact as hbv FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '9' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as hbv,
      (SELECT mhd_register_program.bill_contact as gram FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '10' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as gram,
      (SELECT mhd_register_program.bill_contact as afb FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '12' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as afb,
      (SELECT mhd_register_program.bill_contact as iden FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '13' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as iden,
      (SELECT mhd_register_program.bill_title_th as eqac_2 FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '1' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as eqac_2,
      (SELECT mhd_register_program.bill_title_th as eqah_2 FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '2' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as eqah_2,
      (SELECT mhd_register_program.bill_title_th as eqat_2 FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '3' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as eqat_2,
      (SELECT mhd_register_program.bill_title_th as eqap_2 FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '4' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as eqap_2,
      (SELECT mhd_register_program.bill_title_th as beqam_2 FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '5' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as beqam_2,
      (SELECT mhd_register_program.bill_title_th as heqam_2 FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '6' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as heqam_2,
      (SELECT mhd_register_program.bill_title_th as uceqam_2 FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '7' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as uceqam_2,
      (SELECT mhd_register_program.bill_title_th as syphilis_2 FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '8' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as syphilis_2,
      (SELECT mhd_register_program.bill_title_th as hbv_2 FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '9' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as hbv_2,
      (SELECT mhd_register_program.bill_title_th as gram_2 FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '10' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as gram_2,
      (SELECT mhd_register_program.bill_title_th as afb_2 FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '12' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as afb_2,
      (SELECT mhd_register_program.bill_title_th as iden_2 FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '13' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as iden_2,
      (SELECT mhd_register_program.bill_company as eqac_3 FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '1' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as eqac_3,
      (SELECT mhd_register_program.bill_company as eqah_3 FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '2' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as eqah_3,
      (SELECT mhd_register_program.bill_company as eqat_3 FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '3' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as eqat_3,
      (SELECT mhd_register_program.bill_company as eqap_3 FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '4' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as eqap_3,
      (SELECT mhd_register_program.bill_company as beqam_3 FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '5' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as beqam_3,
      (SELECT mhd_register_program.bill_company as heqam_3 FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '6' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as heqam_3,
      (SELECT mhd_register_program.bill_company as uceqam_3 FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '7' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as uceqam_3,
      (SELECT mhd_register_program.bill_company as syphilis_3 FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '8' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as syphilis_3,
      (SELECT mhd_register_program.bill_company as hbv_3 FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '9' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as hbv_3,
      (SELECT mhd_register_program.bill_company as gram_3 FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '10' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as gram_3,
      (SELECT mhd_register_program.bill_company as afb_3 FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '12' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as afb_3,
      (SELECT mhd_register_program.bill_company as iden_3 FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '13' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as iden_3,
      (SELECT mhd_register_program.bill_address as eqac_4 FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '1' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as eqac_4,
      (SELECT mhd_register_program.bill_address as eqah_4 FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '2' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as eqah_4,
      (SELECT mhd_register_program.bill_address as eqat_4 FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '3' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as eqat_4,
      (SELECT mhd_register_program.bill_address as eqap_4 FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '4' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as eqap_4,
      (SELECT mhd_register_program.bill_address as beqam_4 FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '5' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as beqam_4,
      (SELECT mhd_register_program.bill_address as heqam_4 FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '6' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as heqam_4,
      (SELECT mhd_register_program.bill_address as uceqam_4 FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '7' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as uceqam_4,
      (SELECT mhd_register_program.bill_address as syphilis_4 FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '8' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as syphilis_4,
      (SELECT mhd_register_program.bill_address as hbv_4 FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '9' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as hbv_4,
      (SELECT mhd_register_program.bill_address as gram_4 FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '10' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as gram_4,
      (SELECT mhd_register_program.bill_address as afb_4 FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '12' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as afb_4,
      (SELECT mhd_register_program.bill_address as iden_4 FROM mhd_program LEFT JOIN mhd_register_program ON mhd_program.id = mhd_register_program.program_id WHERE program_id = '13' AND mhd_register_program.member_id = mhd_member.id LIMIT 0,1) as iden_4
      FROM mhd_member 
      left join mhd_register on mhd_register.member_id = mhd_member.id
      left join mhd_company on mhd_company.id = mhd_register.company_id
      left join mhd_year on mhd_year.id = mhd_register.year_id
      left join mhd_register_program on mhd_register_program.register_id = mhd_member.id WHERE mhd_register.year_id =".$year." AND mhd_member.del = 0 group by mhd_member.id order by mhd_member.id desc");
      $query  = $this->db->query($sql);
      return $query->result();
    }
  }

/* End of file Member_model.php */
/* Location: ./application/models/Member_model.php */