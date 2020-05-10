<?php

Class Api_Model extends CI_Model {

	public function select_service_cat() 
	{
		$this->db->select('*');
		$this->db->from('services_category');
		$query = $this->db->get();
		return $query->result();
	}

	public function select_blog()
	{
		$this->db->select('*');
		$this->db->from('blog');
		$this->db->order_by('date DESC');
		$query = $this->db->get();
		return $query->result();
	}

	public function select_blog_details($url)
	{
		$this->db->select('*');
		$this->db->from('blog');
		$this->db->where('url',$url);
		$query = $this->db->get();
		return $query->result();
	}

	public function select_blog_tag($url)
	{
		$this->db->select('*');
		$this->db->from('blog');
		$this->db->where_in('tags',$url);
		$query = $this->db->get();
		return $query->result();
	}

	public function select_service_cat_only($url)
	{
		$this->db->select('service_name');
		$this->db->from('service_cat');
		$this->db->where('service_url',$url);
		$query = $this->db->get();
		return $query->result();
	}

	public function select_sub_service($cat)
	{
		$this->db->select('*');
		$this->db->from('sub_service');
		$this->db->where('service_cat',$cat);
		$query = $this->db->get();
		return $query->result();
	}

	public function select_inner_service($url)
	{
		$this->db->select('*');
		$this->db->from('services');
		$this->db->where('url',$url);
		$query = $this->db->get();
		return $query->result();
	}

	public function select_faq_service($url)
	{
		$this->db->select('*');
		$this->db->from('faq');
		$this->db->where('service_id',$url);
		$query = $this->db->get();
		return $query->result();
	}

	public function select_result_service($url)
	{
		$this->db->select('*');
		$this->db->from('gallery');
		$this->db->where('service_id',$url);
		$query = $this->db->get();
		return $query->result();
	}

	public function select_video_service($url)
	{
		$this->db->select('*');
		$this->db->from('video');
		$this->db->where('category_name',$url);
		$query = $this->db->get();
		return $query->result();
	}

	public function service_cat($url)
	{
		$this->db->select('service.*');
		$this->db->from('services as service');
		$this->db->join('services_category as cat','service.service_cat = cat.id');
		$this->db->where('cat.url',$url);
		$query = $this->db->get();
		return $query->result();
	}

	public function select_case_studies()
	{
		$this->db->select('*');
		$this->db->from('case_studies');
		$query = $this->db->get();
		return $query->result();
	}

	public function select_inner_case($url)
	{
		$this->db->select('*');
		$this->db->from('case_studies');
		$this->db->where('url',$url);
		$query = $this->db->get();
		return $query->result();
	}

	public function select_video_testimonial()
	{
		$this->db->select('*');
		$this->db->from('video_testimonial');
		$query = $this->db->get();
		return $query->result();
	}

	public function select_gallery()
	{
		$this->db->select('*');
		$this->db->from('clinic');
		$query = $this->db->get();
		return $query->result();
	}

	public function select_video()
	{
		$this->db->select('*');
		$this->db->from('video');
		$query = $this->db->get();
		return $query->result();
	}

	public function select_testimonial()
	{
		$this->db->select('*');
		$this->db->from('testimonial');
		$query = $this->db->get();
		return $query->result();
	}

	public function select_blog_recent()
	{
		$this->db->select('*');
	    $this->db->from('blog');
	    $this->db->order_by('date DESC');
	    $this->db->limit('5');
	    $query = $this->db->get();
	    return $query->result();
	}

	public function select_before_after()
	{
		$this->db->select('*');
	    $this->db->from('result_category');
	    $query = $this->db->get();
	    return $query->result();
	}

	public function select_real_result($url)
	{
		$this->db->select('*');
		$this->db->from('gallery');
		$this->db->where('service_id',$url);
		$query = $this->db->get();
		return $query->result();
	}

	public function select_service_blog()
	{
		$this->db->select('*');
	    $this->db->from('blog');
	    $this->db->order_by('date DESC');
	    $this->db->limit('3');
	    $query = $this->db->get();
	    return $query->result();
	}

	public function select_seo_tag($url)
	{
		$this->db->select('*');
		$this->db->from('seo_page');
		$this->db->where('page_name',$url);
		$query = $this->db->get();
		return $query->result();
	}

	public function select_menu()
	{
		$this->db->select('service_category_name,id,url');
		$this->db->from('services_category');
		$query = $this->db->get();
		return $query->result();
	}
}