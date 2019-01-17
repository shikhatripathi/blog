<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Images extends MX_Controller {

	function __construct() 
		{
			Parent::__construct();
			$this->load->helper('form');
			$this->load->model('test_model');
			$this->load->module('template');
			$this->load->library('session');
		}
	public function index()
	{	
		$this->load->model('test_model');

		$images = $this->test_model->get_images();

		//var_dump($images);exit;

		$data = array(
			'images'	=>	$images
		);
		$this->load->view('test-view', $data);
			
	}//end of index


	function upload_file(){
			
			$this->load->model('test_model');
			$fname = $this->input->post('file_name');
           	


            $path = '/var/www/html/edu_bills/uploads/images';
            $image_path='uploads/images';
      
            $new_name = date('ymd') . time();
             
         if (!file_exists($path)) {
	            mkdir($path, 0755, true);
	         }

                $config['upload_path']          = $path;
                $config['allowed_types']        = 'pdf|doc|docx|jpg|jpeg|gif|text|png';
                $config['max_size']             = 1000;
                $config['max_width']            = 1800;
                $config['max_height']           = 700;
                $config['file_name']            = $new_name;
               
                

                $this->load->library('upload', $config);

                             
               
                if(!$this->upload->do_upload('myfile'))
                {
                        
                        
                        $this->session->set_flashdata('error', $this->upload->display_errors());
                        redirect('template/test');
                       // $this->load->view('slider-images-view', $error);
                }
                else
                {
                                                 
                        $image_details = $this->upload->data();

                        $img_data = array(

                        	'image_name'		=>	$fname,	
							'path'				=>	$image_path,
							'file_name'			=>	$image_details['file_name'],
							'upload_time'		=>	date('Y-m-d h:m:s')

                        );

                    //var_dump($img_data);exit;
                    $result = $this->test_model->submit_image_details($img_data);
                        
                        if ($result){ 
                           $this->session->set_flashdata('success', 'file uploaded successfully');
                        }
                        else
                        {
                          $this->session->set_flashdata('error', 'File uploaded but data not saved');
                        }
                       
                         redirect('template/test');

                }

	}//end of function upload_file



	function delete_img(){
			$this->load->model('test_model');
			$del_image_id = $this->input->post('del_id');

			$image_details = $this->test_model->get_details($del_image_id);
			$path = $image_details['path'];
			$file_name = $image_details['file_name'];


			$file_status = $path.'/'.$file_name; 
		        if (file_exists($file_status))
		        {
		            $del_status = unlink($file_status);
		            //var_dump($del_status);exit;
		           	if ($del_status) {
		           		$result = $this->test_model->delete_image($del_image_id);
		           		$this->session->set_flashdata('success', 'Image deleted successfully');
		           	}else{
		           		$this->session->set_flashdata('error', 'Deletion failed');
		           	}
		            
		        }

		   redirect('template/test');
	}//end of function 


}//end of class



