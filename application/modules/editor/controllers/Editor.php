<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Editor extends MX_Controller {


	 
	public function index()
	{
		$this->load->view('editor-view');
	}
	function submit_data(){
       $this->load->model('Editor_model');
       $this->Editor_model->submit_data();
       $user=array(
		
			'blog' =>$this->input->post('blog'));
	}
}
