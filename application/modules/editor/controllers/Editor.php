<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Editor extends MX_Controller {


	 
	public function index()
	{
		$this->load->view('editor-view');
	}
	function submit_data(){
       $this->load->model('Editor_model');
	}
}
