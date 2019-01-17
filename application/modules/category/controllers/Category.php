<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends MX_Controller {

	
	public function index()
	{if($this->session->userdata('session_data')){
		$this->load->view('category-view');
	} 
	else{
		redirect('dashboard');
	}
	}
		public function blog_user()
	{
			$this->load->model('blog_cat');
		$this->load->helper('url');
		$user=array(
			'category_id' =>random_string('alnum' , '16'),
			'category_name' =>$this->input->post('category_name'),
			'category_slag' =>$this->input->post('category_slag'),
			'created_on' =>$this->input->post('created_on')
			
		);
			$user_id=$this->session->userdata['session_data']['user_id'];

            $category_check=$this->blog_cat->category_check($user['category_name']);
		if($category_check){
			$this->blog_cat->blog_user($user);
			redirect('dashboard');
		}
		else{
	
			echo"wrong catagory";
		}
	}
}
