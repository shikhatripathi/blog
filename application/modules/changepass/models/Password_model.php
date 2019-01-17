<?php
class Password_model extends CI_Model
{
	
	public function changecurrentpwd($curr_password, $new_password,$conf_password,$user_id){
	$this->db->select('*');
	$this->db->where('user_id', $user_id);
	$this->db->where('upassword',$curr_password);
	$q=$this->db->get('user_reg');
	if($q->num_rows()>0){
	$data=array(
    'upassword'=> $new_password);
	$this->db->where('user_id', $user_id);
	$r=$this->db->update('user_reg', $data);
		if($r){
			return true;

		}
		else{
			return false;
		}
	}else{
		return false;
	}
}//end of function

}//end of class
?>