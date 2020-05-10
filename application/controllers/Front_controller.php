<?php

//error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Front_Controller extends CI_Controller {

	public function index()
	{
			$this->load->model('Front_Model');
    	    $config = array();
            $config["base_url"] = base_url() . "article";
            $config["total_rows"] = $this->Front_Model->record_count();
            $config["per_page"] = 2;
            $config["uri_segment"] = 2;
            $config['first_link'] = 'First';
            $config['first_tag_open'] = '<li>';
            $config['first_tag_close'] = '</li>';
            $config['last_link'] = 'Last';
            $config['last_tag_open'] = '<li>';
            $config['last_tag_close'] = '</li>';
            $config['next_link'] = '&gt;';
            $config['next_tag_open'] = '<li>';
            $config['next_tag_close'] = '</li>';
            $config['prev_link'] = '&lt;';
            $config['prev_tag_open'] = '<li>';
            $config['prev_tag_close'] = '</li>';
            $config['cur_tag_open'] = '<li><a class="current">';
            $config['cur_tag_close'] = '</a></li>';
    		$this->load->library('pagination');
            $this->pagination->initialize($config);
    
            $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
    
            $data["links"] = $this->pagination->create_links();
			$data['article'] = $this->Front_Model->fetch_article($config["per_page"], $page);
			$this->load->view('front/article', $data);
	}

	public function article_details()
	{
		$url = $this->uri->segment('2');
		$this->load->model('Front_Model');
		$data['details'] = $this->Front_Model->fetch_single_article($url);
		$this->load->view('front/article-details',$data);
	}

}
?>