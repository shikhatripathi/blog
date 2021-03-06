<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends MX_Controller {

	public function _construct()
	{
		parent::_construct();
		$this->load->helper('url' ,'form');
	
	}
	
	public function index()
	{
		$this->load->view('form-view');

	}
	public function register_user()
	{
			$this->load->model('form_model');
			$this->load->helper('string');
			//echo random_string('alnum','16');
		$user=array(
			'user_id'=>random_string('alnum','16'),
			'uname' =>$this->input->post('uname'),
			'umobile' =>$this->input->post('umobile'),
			'uaddress' =>$this->input->post('uaddress'),
			'uemail' =>$this->input->post('uemail'),
			'upassword' =>$this->input->post('upassword'),
			'ublog'=>$this->input->post('ublog'),
			 'user_type'       => 2
		);
		$email_check=$this->form_model->email_check($user['uemail']);
		if($email_check){
			$this->form_model->register_user($user);
			redirect('login');
		}
		else{
			redirect('form');
			echo"You are already registered";
		}
	}
	
}