<?php

//error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_article extends CI_Controller {


	public function __construct() {
		parent::__construct();
	
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('Article_model');
    }

	

	public function index()
	{
		$data['res'] = $this->Article_model->select_article();
		$data['page'] = 'Admin/article/list-article';
		$this->load->view('admin_layout', $data);
	}


	public function add()
	{
	    $data['page'] = 'Admin/article/add-article';
		$this->load->view('admin_layout', $data);
	}	
	
	public function create_article()
	{
			//==========Upload Image=============//
		if(isset($_FILES['article_image']['name']) && !empty($_FILES['article_image']['name'])) 
		{
			$this->load->library('upload');
			$folderName = './assets/article/';
			//'./assets/article1/';
			if(!is_dir($folderName)) 
			{
				mkdir($folderName,0777, true);
			}
			$article_image			=	time().str_replace(' ','-',$_FILES['article_image']['name']);
			
			$config['upload_path'] 		= 	$folderName;
			$config['file_name'] 		= 	$article_image;
			$config['encrypt_name'] = TRUE;
			$config['allowed_types'] 	= 	'gif|jpg|jpeg|png|GIF|JPEG|JPG|PNG';
			$this->upload->initialize($config);
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('article_image'))
			{
				$result['error_msg']   = $this->upload->display_errors();
				$result['status'] = 'error';
				return $result;  
			}
			else
			{
				$image_fol = base_url().$folderName;
				$article_image=$this->upload->data()['file_name'];
				$postdata['article_image']		=	(isset($article_image) && !empty($article_image)) ? $article_image : 
				unlink($image_fol);
			}
		}
		
		
		//==========Upload Image=============//
		if(isset($_FILES['article_image_inner']['name']) && !empty($_FILES['article_image_inner']['name'])) 
		{
			$this->load->library('upload');
			$folderName = './assets/article_inner/';
			//'./assets/article1/';
			if(!is_dir($folderName)) 
			{
				mkdir($folderName,0777, true);
			}
			$article_image_inner			=	time().str_replace(' ','-',$_FILES['article_image_inner']['name']);
			
			$config['upload_path'] 		= 	$folderName;
			$config['file_name'] 		= 	$article_image_inner;
			$config['encrypt_name'] = TRUE;
			$config['allowed_types'] 	= 	'gif|jpg|jpeg|png|GIF|JPEG|JPG|PNG';
			$this->upload->initialize($config);
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('article_image_inner'))
			{
				$result['error_msg']   = $this->upload->display_errors();
				$result['status'] = 'error';
				return $result;  
			}
			else
			{
				$image_fol = base_url().$folderName;
				$article_image_inner=$this->upload->data()['file_name'];
				$postdata['article_image_inner']		=	(isset($article_image_inner) && !empty($article_image_inner)) ? $article_image_inner : 
				unlink($image_fol);
			}
		}
		
		//==========Upload Image=============//
		$postdata['article_title'] = $this->input->post('article_title',TRUE);
		$postdata['article'] = $this->input->post('article',TRUE);
		$postdata['alt_image_name'] = $this->input->post('alt_image_name',TRUE);
		$postdata['article_date'] = $this->input->post('article_date',TRUE);
		$postdata['creation_date'] = date("Y-m-d");
		$postdata['url'] = $this->input->post('url',TRUE);
		$postdata['status'] = $this->input->post('status',TRUE);
		$this->db->insert('article', $postdata);
		redirect('admin-article');
	}

	public function edit($id)
	{
		$data['id'] = $id;
		$data['res'] = $this->Article_model->edit_article($id);
		$data['page'] = 'Admin/article/edit-article';
		$this->load->view('admin_layout', $data);
	}

	public function update_article($id)
	{
	   	// pr($_FILES);die;	//==========Upload Image=============//
		if(isset($_FILES['article_image']['name']) && !empty($_FILES['article_image']['name'])) 
		{
			$this->load->library('upload');
			$folderName = './assets/article/';
			if(!is_dir($folderName)) 
			{
				mkdir($folderName,0777, true);
			}
			$article_image					=	time().str_replace(' ','-',$_FILES['article_image']['name']);
			
			$config['upload_path'] 		= 	$folderName;
			$config['file_name'] 		= 	$article_image;
			$config['encrypt_name'] = TRUE;
			$config['allowed_types'] 	= 	'gif|jpg|jpeg|png|GIF|JPEG|JPG|PNG';
			$this->upload->initialize($config);
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('article_image'))
			{
				$result['error_msg']   = $this->upload->display_errors();
				$result['status'] = 'error';
				return $result;  
			}
			else
			{
				$image_fol = base_url().$folderName;
				$article_image=$this->upload->data()['file_name'];
				$postdata['article_image']		=	(isset($article_image) && !empty($article_image)) ? $article_image : 
				unlink($image_fol);
			}
		}
		
		
		if(isset($_FILES['article_image_inner']['name']) && !empty($_FILES['article_image_inner']['name'])) 
		{
			$this->load->library('upload');
			$folderName = './assets/article_inner/';
			if(!is_dir($folderName)) 
			{
				mkdir($folderName,0777, true);
			}
			$article_image_inner					=	time().str_replace(' ','-',$_FILES['article_image_inner']['name']);
			
			$config['upload_path'] 		= 	$folderName;
			$config['file_name'] 		= 	$article_image_inner;
			$config['encrypt_name'] = TRUE;
			$config['allowed_types'] 	= 	'gif|jpg|jpeg|png|GIF|JPEG|JPG|PNG';
			$this->upload->initialize($config);
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('article_image_inner'))
			{
				$result['error_msg']   = $this->upload->display_errors();
				$result['status'] = 'error';
				return $result;  
			}
			else
			{
				$image_fol = base_url().$folderName;
				$article_image_inner=$this->upload->data()['file_name'];
				$postdata['article_image_inner']		=	(isset($article_image_inner) && !empty($article_image_inner)) ? $article_image_inner : 
				unlink($image_fol);
			}
		}
		
		// pr($config);die;
		//==========Upload Image=============//
		$postdata['article_title'] = $this->input->post('article_title',TRUE);
		$postdata['article'] = $this->input->post('article',TRUE);
		$postdata['alt_image_name'] = $this->input->post('alt_image_name',TRUE);
		$postdata['article_date'] = $this->input->post('article_date',TRUE);
		$postdata['creation_date'] = date("Y-m-d");
		$postdata['url'] = $this->input->post('url',TRUE);
		$postdata['status'] = $this->input->post('status',TRUE);
		$this->db->where('id',$id);
		$this->db->update('article', $postdata);
		redirect('admin-article');	
	}
	    
	public function delete($id)
	{
		$result = $this->Article_model->delete($id);
      	redirect('admin-article');	
	}


}