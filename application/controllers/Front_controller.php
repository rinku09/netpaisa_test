<?php

//error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Front_Controller extends CI_Controller {

	public function index()
	{
		$this->load->view('front/article');
	}

}
?>