

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends  MX_Controller  {

	
	public function index()
	{
		
		$this->load->view('login-view');
	}

	function login_user(){
        $this->load->library('session');
        $email=$this->input->post('uemail');
        $password=$this->input->post('upassword');
        $this->load->model("login_model");
        $user=$this->login_model->verify_user($email,$password);
       
        if($user){
          
            $session_data = array(
                'uname'     =>  $user['uname'],
                'uemail'    =>  $user['uemail'],
                'user_type'     =>  $user['user_type']
            );


            $this->session->set_userdata('session_data', $session_data);
        
            redirect('dashboard');
        }
        else{
           /*$data = array('msg' => 'Username Or Passwrod is Wrong');*/
            //$this->load->view('login');
            echo "something went wrong";
            }
        }       
}    
	

