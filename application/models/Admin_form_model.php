<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);

class Admin_form_model extends CI_Model {

	
	public function select_appointment()
	{
		$this->db->select('*');
		$this->db->from('appointment_form');
		$query = $this->db->get();
		return $query->result();
	}

	public function select_contact()
	{
		$this->db->select('*');
		$this->db->from('contact_us');
		$query = $this->db->get();
		return $query->result();
	}
}
