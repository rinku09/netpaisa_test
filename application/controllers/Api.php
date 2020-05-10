<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {


	public function __construct() {
		header("Access-Control-Allow-Origin: *");
		parent::__construct();
        date_default_timezone_set("Asia/Kolkata");
        $this->load->model('Api_Model');
   }

   
   // appointment form data fetching in front-end
	public function get_service_cat()
	{
		$data = $this->Api_Model->select_service_cat();
		echo json_encode($data);
	}

	public function service_cat()
	{
		$url = $_GET['url'];
		$data = $this->Api_Model->service_cat($url);
		if (!empty($data)) {
			echo json_encode($data);
		}else{
			return http_response_code(401);
		}
		
	}

	public function get_blog()
	{
		$data = $this->Api_Model->select_blog();
		// $data['date'] = date('M d, Y', strtotime($data[0]->blog_date));
		echo json_encode($data);
	}

	public function blog_details()
	{
		$url = $_GET['url'];
		$data = $this->Api_Model->select_blog_details($url);
		echo json_encode($data);
	}

	public function get_recent_blog()
	{
		// $url = $_GET['url'];
		$data = $this->Api_Model->select_blog_recent();
		echo json_encode($data);
	}

	public function blog_tag()
	{
		$tag = $_GET['url'];
		$url = str_replace('-', ' ', $tag);
		$data = $this->Api_Model->select_blog_tag($url);
		echo json_encode($data);
	}

	public function sub_service()
	{
		$url = $_GET['url'];
		$cat1 = $this->Api_Model->select_service_cat_only($url);
		$cat = $cat1[0]->service_name;
		$data = $this->Api_Model->select_sub_service($cat);
		if (!empty($data)) {
			echo json_encode($data);
		}else{
			return http_response_code(401);
		}
	}

	public function inner_service()
	{
		$url = $_GET['url'];
		$data = $this->Api_Model->select_inner_service($url);
		if (!empty($data)) {
			echo json_encode($data);
		}else{
			return http_response_code(401);
		}
	}

	public function faq_service()
	{
		$url = $_GET['url'];
		$data = $this->Api_Model->select_faq_service($url);
		echo json_encode($data);
	}

	public function result_service()
	{
		$url = $_GET['url'];
		$data = $this->Api_Model->select_result_service($url);
		echo json_encode($data);
	}

	public function video_service()
	{
		$url = $_GET['url'];
		$data = $this->Api_Model->select_video_service($url);
		echo json_encode($data);
	}

	public function get_case_studies()
	{
		$data = $this->Api_Model->select_case_studies();
		echo json_encode($data);
	}

	public function case_inner()
	{
		$url = $_GET['url'];
		$data = $this->Api_Model->select_inner_case($url);
		echo json_encode($data);
	}

	public function video_testimonial()
	{
		$data = $this->Api_Model->select_video_testimonial();
		echo json_encode($data);
	}

	public function get_gallery()
	{
		$data = $this->Api_Model->select_gallery();
		echo json_encode($data);
	}

	public function get_testimonial()
	{
		$data = $this->Api_Model->select_testimonial();
		echo json_encode($data);
	}

	public function get_before_after()
	{
		$data = $this->Api_Model->select_before_after();
		echo json_encode($data);
	}

	public function video()
	{
		$data = $this->Api_Model->select_video();
		echo json_encode($data);
	}

	public function get_real_result()
	{
		$url = $_GET['url'];
		$data = $this->Api_Model->select_real_result($url);
		echo json_encode($data);
	}

	public function service_blog()
	{
		$data = $this->Api_Model->select_service_blog();
		echo json_encode($data);
	}

	public function seo_tag()
	{
		$name = $_GET['url'];
		$url = str_replace('-', ' ', $name);
		$data = $this->Api_Model->select_seo_tag($url);
		echo json_encode($data);
	}

	public function menu_category()
	{
		$data = $this->Api_Model->select_menu();
		$data11 = [];
		foreach ($data as $key => $value) {
			$data1 = $value->id;
			$main = $value->service_category_name;
			$url = $value->url;
			$sql = $this->db->select('service_name,url')->from('services')->where_in('service_cat',$data1)->get()->result();
			foreach ($sql as $key1 => $value1) {
				
			 $cat_array[] =  $value1;
				
				
			}

			$data11[] = array('cat'=>$main,
				'url' => $url,
				'sub' => $cat_array);
			$cat_array = [];
		}

	 //echo "<pre>";
	//	print_r($menu);
		
		echo json_encode($data11);
	}

}
