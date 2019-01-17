<?php
if(!
defined('BASEPATH'))  exit('No direct script access allowed');

class Dashboard extends MX_Controller {

	
	public function index()
	{
		if($this->session->userdata('session_data')){
		$this->load->view('dashboard-view');}
		else{
			redirect('login');
		}
	}
	//function myfun(){echo "hello!!";}

}
