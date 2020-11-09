<?php  
/**
 * Model Programs
 */
class ProgramsModel extends db
{
	public function getLists($filter=array()) 
	{
		if (count($filter)>0) {
			foreach ($filter as $key => $value) {
				$this->where($key, $value);
			}
		}
		$result = $this->get('programs');
		return $result->rows;
	}

	public function getList($id)
	{
		$this->where('id', $id);
		$result = $this->get('programs');
		return $result->row;
	}

	public function findCode($code) {
		$this->where('del', 0);
		$this->where('code', $code);
		$result = $this->get('programs');
		return $result->row;
	}

	public function add($data=array())
	{
		return $this->insert('programs', $data);
	}

	public function edit($data=array(), $id)
	{
		$this->where('id', $id);
		return $this->update('programs', $data);
	}

	public function del($id)
	{
		$this->where('id', $id);
		return $this->delete('programs');
	}
}
?>