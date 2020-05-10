<?php

Class Article_model extends CI_Model {

	

	public function select_article()
	{
		$this->db->select('*');
		$this->db->from('article');
		$query = $this->db->get();
		return $query->result();
	}

	public function edit_article($id)
	{
		$condition = array('id' => $id);
		$this->db->select('*');
		$this->db->from('article');
		$this->db->where($condition);
		$query = $this->db->get();
		return $query->result();
	}

	
	public function delete($id)
	{
		return $this->db->delete('article', array('id' => $id));
	}
	


}