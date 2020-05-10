<?php

Class Front_model extends CI_Model {

	public function record_count() {
		return $this->db->count_all("article");
	}

		
	public function fetch_article($limit, $start) {
		$this->db->limit($limit, $start);
		$this->db->where('status','yes');
		$this->db->order_by('article_date','desc');
        $query = $this->db->get("article");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }

    public function fetch_single_article($url)
    {
    	$this->db->select('*');
    	$this->db->from('article');
    	$this->db->where('url',$url);
    	$this->db->where('status','yes');
    	$query = $this->db->get();
    	return $query->row();
    }
}