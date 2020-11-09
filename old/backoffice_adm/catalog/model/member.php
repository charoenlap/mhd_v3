<?php  
/**
 * Model Member
 */
class MemberModel extends db
{
	public function getLists($filter=array(), $orderby='', $sort='', $start=null, $limit=null) 
	{
		if (count($filter)>0) {
			foreach ($filter as $key => $value) {
				$this->where($key, $value);
			}
		}
		if ($start!=null&&$limit!=null) {
			$this->limit($start,$limit);
		}
		if (!empty($orderby)&&!empty($sort)) {
			$this->order_by($orderby, $sort);
        }
        $this->join('admin_type at', 'at.id=a.admin_type_id', 'left');
        $this->select('a.*, at.type, at.id as admin_type_id');
		$result = $this->get('admin a');
		return $result->rows;
	}

	public function getList($id)
	{
		$this->where('id', $id);
		$result = $this->get('admin');
		return $result->row;
	}

	public function add($data=array())
	{
		return $this->insert('admin', $data);
	}

	public function edit($data=array(), $id)
	{
		$this->where('id', $id);
		return $this->update('admin', $data);
	}

	public function del($id)
	{
		$this->where('id', $id);
		return $this->delete('admin');
	}




	public function login($username, $password) {
		$this->where('username', $username);
		$this->where('password', $password);
		$result = $this->get('admin');
		$return = ($result->num_rows==1) ? $result->row : false;

		if ($return!=false) {
			$this->where('id', $return['id']);
			$this->update('admin', array('date_login'=>date('Y-m-d H:i:s', time())));
		}

		return $return;
    }
    


    public function getAdminType() {
        $result = $this->get('admin_type');
        return $result->rows;
    }
}
?>