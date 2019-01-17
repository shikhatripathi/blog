<?php
class Changepass extends MX_Controller
{
public function index()
{if($this->session->userdata('session_data')){
	$this->load->view('change-pass');
}
else {
	redirect('login');
}

}



public function updatepwd(){
	
	$curr_password=$this->input->post('password');
	$new_password=$this->input->post('newpass');
	$conf_password=$this->input->post('confpassword');
	$this->load->model('password_model');
	//$session_data['user_id'];
	//$userid=1;
	//$passwd=$this->password_model->getCurrPassword($userid);
	//var_dump($new_password);
	//var_dump($conf_password);
	//exit;
	$user_id=$this->session->userdata['session_data']['user_id'];
	//var_dump($user_id);
	//exit;
	if ($new_password == $conf_password){
		//echo "true";exit;
			$result=$this->load->password_model->changecurrentpwd($curr_password, $new_password,$conf_password,$user_id);

	
redirect('dashboard');
		//	if ($result) {
		//	echo $result.'yes';

			//}
			//else{echo $result.'no';}
	//eprint_r($passwd);
			
		}
	else{
		redirect('login');
	}


	 //echo $user_id;
	//exit();

//}
//else{
	//echo validation_errors();
//}


}


}
?>
