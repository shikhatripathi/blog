<?php
class Login_model extends CI_model{
 
 
 
		
		/*public function login_user(){
			
			  $this->db->select('*');
			  $this->db->from('AlumniReg');
			  $this->db->where('user_email',$email);
			  $this->db->where('user_password',$password);
			 
			  if($query=$this->db->get())
			  {
			      return $query->result_array();
			  }
			  else{
			    return false;
			  }
			 }*/ 
		function verify_user($email, $password){
        $this->db->select('*');
	    //$this->db->from('AlumniReg'); 
        $this->db->where('uemail', $email);
        $this->db->where('upassword', $password);
        $q = $this->db->get('user_reg');
         
        if($q->num_rows()>0){
            return $q->row_array();
            //print_r($q->row_array());
        }else{
            return false;
        }
    }// end of function verify user
	

		
}
	