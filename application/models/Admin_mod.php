<?php

Class Admin_mod extends CI_Model {



 function login_authorize() {		
        $this->form_validation->set_rules('email', "Email Address", 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $email = $this->security->xss_clean($this->input->post('email', true));
		$password = $this->security->xss_clean($this->input->post('password', true));
        $data = array();
        if ($this->form_validation->run() === false) {           
        }
			$this->db->where("email", $email);
			$query = $this->db->get("credential");	
			if ($query->num_rows() > 0){
			$row = $query->row();            
				// if($row->user_type==1){
					if (md5($password) == $row->password){
					$user_info = $row;  
					unset($user_info->password);
					//-----------------------------------------------------
				
					    if($user_info->status == "inactive") {
							$data['error_msg'] = "Your account has been inactive";
							$data['status'] = 'error';
							return $data;
						}else{	
							$data['status'] = 'success';
							$data['result'] = $user_info;
							
							//---------- end ---------------------------------------
						}                
					 return $data;
					}
				// }
            }
        $data['error_msg'] = "Invalid login credentials";
        $data['status'] = 'error';
        return $data;
    }
	
	
}