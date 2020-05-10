<?php

error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
	parent::__construct();

	$this->load->helper('form');
	    $this->load->library('form_validation');
	    $this->load->model('Admin_mod');
	    $this->load->model('Admin_form_model');
	  //echo CI_VERSION;  
    }

	
	
	
     public function index()
	{
		$data['page'] = 'Admin/login';
		$this->load->view('layout', $data);
	}

	// Check for user login process
	public function login(){
		if($_POST){
			$email      =   $this->input->post('email',true); 
			$password   =   $this->input->post('password',true); 
			
			$rs_data    =   $this->Admin_mod->login_authorize();  
			
			if($rs_data['status']=="success"){
			   $this->session->set_userdata("userinfo",$rs_data['result']);   
			   $this->session->set_userdata("isLogin",'yes'); 
			   $this->session->set_userdata("user_type",$rs_data['result']->user_type); 
			 redirect(base_url('Admin/dashboard'));
			}else{
				if($rs_data['error_msg'] != '')
				{
					$this->session->set_flashdata("error", $rs_data['error_msg']);	
				}
				redirect(base_url('Admin/login'));
			}
                
		}else{
			if($this->session->userdata('isLogin') == 'yes') {       	
				redirect(base_url('Admin/dashboard'));
			}else{
		   
				$data['page'] = 'Admin/login';
				$this->load->view('layout', $data);
			}
		}
    }

    
    
 	public function dashboard()
	{
	// echo "sdF";die;
		 if($this->session->userdata('isLogin') == 'yes'){       	
			 $data['page'] = 'Admin/dashboard';
		     $this->load->view('admin_layout', $data);
		}else{
		   redirect(base_url('Admin/login'));
		}
	}

	public function logout() 
        {
		$this->session->sess_destroy();
	        redirect(base_url().'Admin');	
      
	}
	
	
    public function contact() 
    {
		if($this->session->userdata('isLogin') == 'yes'){ 
		
		 $data['contact'] = $this->Admin_form_model->select_contact();      	
		 $data['page'] = 'Admin/contact_form';
		 $this->load->view('admin_layout', $data);
		}else{
		   redirect(base_url('Admin/login'));
		}
		
    }
	
	public function appoinment() 
    {
    	if($this->session->userdata('isLogin') == 'yes'){ 
		 $data['select_appointment'] = $this->Admin_form_model->select_appointment();     	
		 $data['page'] = 'Admin/appointment_form';
		 $this->load->view('admin_layout', $data);
		}else{
		   redirect(base_url('Admin/login'));
		}
	
    }
	
}