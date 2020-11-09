<?php  
/**
 * Model Trial
 */
class TrialModel extends db
{
	public function getLists($program_id,$filter=array()) 
	{
		$this->where('t.program_id', $program_id);
		if (count($filter)>0) {
			foreach ($filter as $key => $value) {
				$this->where($key, $value);
			}
		}
		$this->join('year y', 'y.id=t.year_id', 'LEFT');
		$this->select('t.*, y.name as year');
		$result = $this->get('trial t');
		return $result->rows;
	}

	public function getList($program_id,$id)
	{
		$this->where('t.program_id', $program_id);
		$this->where('t.id', $id);
		$this->join('year y', 'y.id=t.year_id', 'LEFT');
		$this->select('t.*, y.name as year');
		$result = $this->get('trial t');
		return $result->row;
	}

	public function findName($program_id, $year_id, $name, $id=0) {
		if ($id>0) {
			$this->where('id', $id, '!=');
		}
		$this->where('program_id',$program_id);
		$this->where('year_id',$year_id);
		$this->where('name', $name);
		$result = $this->get('trial');
		return ($result->num_rows == 1) ? true : false;
	}

	public function add($data=array())
	{
		return $this->insert('trial', $data);
	}

	public function edit($data=array(), $program_id, $id)
	{
		$this->where('program_id', $program_id);
		$this->where('id', $id);
		return $this->update('trial', $data);
	}

	public function del($id)
	{
		$this->where('id', $id);
		$update = array(
			'del'=>1,
			'date_modify'=>date('Y-m-d H:i:s',time())
		);
		return $this->update('trial', $update);
	}
}
?>