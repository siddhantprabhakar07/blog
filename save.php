<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Save extends CI_Controller {

	
    public function __construct() {
		
        parent::__construct();
        $this->load->helper('url', 'form');
		//$this->load->database();
	
		/*load Model*/
		$this->load->model('Blog');
    }
    //
    //public function index() {
    //
    //    $this->load->view('index.php/form');
    //}
	public function index()
	{
		echo 'at save page';
		var_dump($this->input->post());
		if(!empty($this->input->post())){
			
			
			//$record['title']= $this->input->post('title');
			$record['clust_det'] = $this->input->post('description');
			$record['description'] = $this->input->post('description');
			$record['need_of_activity'] = $this->input->post('need_of_activity');
			$record['intervention'] = $this->input->post('intervention');
			$record['impact'] = $this->input->post('impact');
			$record['key_shareholders'] = $this->input->post('key_shareholds');
			$record['beneficiaries'] = $this->input->post('beneficiaries');
			$record['activity_det'] = $this->input->post('activity_det');
			$record['reference_contact'] = $this->input->post('reference_contact');
			$record['image']= $this->input->post('image');
			var_dump($record);
			$this->input->post('save');
			//$this->Blog->saverecords($record);	

		}
	}
		//if (!empty($this->input->post() != FALSE) {
			//
			//$this->load->library('form_validation');
			//$this->form_validation->set_rules('title', 'Cluster details', 'need of the activity', 'intervention', 'impact', 'Key Shareholders', 'beneficiaries', 'activity details', 'reference contact', 'reference_contact', 'image' );           
			//
			//if ($this->form_validation->run() !== FALSE) {
			//
			//	//$record['title']= $this->input->post('title');
			//	$record['clust_det'] = $this->input->post('description');
			//	echo $this->input->post('description');
			//	$record['need_of_activity'] = $this->input->post('need_of_activity');
			//	$record['intervention'] = $this->input->post('intervention');
			//	$record['impact'] = $this->input->post('impact');
			//	$record['key_shareholders'] = $this->input->post('key_shareholds');
			//	$record['beneficiaries'] = $this->input->post('beneficiaries');
			//	$record['activity_det'] = $this->input->post('activity_det');
			//	$record['reference_contact'] = $this->input->post('reference_contact');
			//	$record['image']= $this->input->post('image');
			//
			//	if (!empty($_FILES['images']['name'][0])) {
			//		
			//		if ($this->upload_files('image_name', $_FILES['images']) !== FALSE) {
			//			
			//			$record['image'] = 'image_name';
			//			var_dump($record['image']);
			//			$this->upload->save($record['image']['name'], (site_url.'/uploads/'));
			//			//$data['error'] = $this->upload->display_errors('<div class="alert alert-danger">', '</div>');
			//		}else{
			//			
			//			$this->Blog->saverecords($record);
			//			//redirect('index.php/saved_data', $data);
			//		}
			//	}
			//
			//	if (!isset($data['error'])) {
			//		
			//		$this->admin_model->add_estate($title, $description, $image_name);    
			//		$this->session->set_flashdata('suc_msg', 'New real estate added successfully'); 
			//	}
			//}
		//}
		
		//return true;
	
		//$data['suc_msg'] = 'data saved';//$this->session->flashdata('suc_msg');
	
		//$this->load->view('saved_data', $data);
	//}	
    
	public function Form_data() {
		
        $config['upload_path'] = './images/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2000;
        $config['max_width'] = 1500;
        $config['max_height'] = 1500;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('image')) {
			
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('index.php/form', $error);
        } else {
			
            $data = array('image_metadata' => $this->upload->data());
            $this->load->view('files/upload_result', $data);
        }
    }

}

?>