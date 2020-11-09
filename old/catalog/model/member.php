<?php  
/**
 * Model Member
 */
class MemberModel extends db
{
	public function getLists($filter=array()) 
	{
		if (count($filter)>0) {
			foreach ($filter as $key => $value) {
				$this->where($key, $value);
			}
		}
		$result = $this->get('member');
		return $result->rows;
	}

	public function getList($id)
	{
		$this->where('id', $id);
		$result = $this->get('member');
		return $result->row;
	}

	public function findEmail($email) {
        $this->where('email', $email);
        $this->where('del', 0);
		$result = $this->get('member');
		if ($result->num_rows==1) {
			return true;
		} else {
			return false;
		}
	}

	public function login($email,$pass) {
		$this->where('email', $email);
		$this->where('password', $pass);
		$this->where('status', 3);
		$result = $this->get('member');
		$return = ($result->num_rows==1) ? $result->row : false;

		if ($return!=false) {
			$this->where('id', $return['id']);
			$this->update('member', array('date_login'=>date('Y-m-d H:i:s')));
		}

		return $return;
	}

	public function add($data=array())
	{
		return $this->insert('member', $data);
	}

	public function edit($data=array(), $id)
	{
		$this->where('id', $id);
		return $this->update('member', $data);
	}

	public function del($id)
	{
		$this->where('id', $id);
		return $this->delete('member');
	}
}
?>