<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Story extends CI_Controller {
	
	public function savedata(){
		
		if(!empty($this->input->post())){
			
			$data = array(
						  'cluster_det' => $this->input->post('Clust_det'),
						  'need_of_activity' => $this->input->post('need_of_the_activity'),
						  'intervention' => $this->input->post('intervention'),
						  'impact' => $this->input->post('impact'),
						  'key_stakeholders' => $this->input->post('Key_stakeholders'),
						  'beneficiaries' => $this->input->post('beneficiaries'),
						  'activity_det' => $this->input->post('activity_det'),
						  'reference_contact' => $this->input->post('reference_contact'),
						  'image' => 'imageaddress',//$this->input->post('image')
						  'title' => $this->input->post('title')
						  );
			
			$res = $this->db->insert('blog', $data);
			$id = $this->db->insert_id();
			
			$id = 2;
			
			$this->db->select('*');
			$this->db->from('blog');
			$this->db->where('id', $id);
			$blog_data['blog_data'] = $this->db->get()->result_array();
			
			$this->load->view('savedata', $blog_data);
			return true;
		
		}else{
			
			$id = 2;
			$this->db->select('*');
			$this->db->from('blog');
			$this->db->where('id', $id);
			$blog_data['blog_data'] = $this->db->get()->result_array();
			return true;
		}
		
	}
    
	public function index()
	{
		$this->load->view('savedata');
	}
	
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