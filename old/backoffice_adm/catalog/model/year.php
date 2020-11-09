<?php  
/**
 * Model Year
 */
class YearModel extends db
{
	public function getLists($filter=array()) 
	{
		if (count($filter)>0) {
			foreach ($filter as $key => $value) {
				$this->where($key, $value);
			}
		}
		$result = $this->get('year');
		return $result->rows;
	}

	public function getList($id)
	{
		$this->where('id', $id);
		$result = $this->get('year');
		return $result->row;
	}

	public function add($data=array())
	{
		return $this->insert('year', $data);
	}

	public function edit($data=array(), $id)
	{
		$this->where('id', $id);
		return $this->update('year', $data);
	}

	public function del($id)
	{
		$this->where('id', $id);
		return $this->delete('year');
	}
}
?>