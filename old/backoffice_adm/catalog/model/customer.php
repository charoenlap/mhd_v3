<?php  
/**
 * Model Customer
 */
class CustomerModel extends db
{
	public function getLists($filter=array()) 
	{
		if (count($filter)>0) {
			foreach ($filter as $key => $value) {
				$this->where($key, $value);
			}
        }
        $this->where('del', 0);
		$result = $this->get('member');
		return $result->rows;
	}

	public function getList($id)
	{
        $this->where('id', $id);
        $this->where('del', 0);
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

	public function add($data=array())
	{
		return $this->insert('member', $data);
	}

	public function edit($data=array(), $id)
	{
        $this->where('id', $id);
        $this->where('del', 0);
		return $this->update('member', $data);
	}

	public function del($id)
	{
		$this->where('id', $id);
		// return $this->delete('member');
		return $this->update('member', array('del'=>1));
	}
}
?>