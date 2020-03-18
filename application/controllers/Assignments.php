<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Assignments extends MY_Controller{

    public function index(){
        $p["title"] = "All Assignments";
        $p["page"] = "Assignments";
		$p['assignments'] = $this->site->get_result('assignments', '*');
		$p['classes'] = $this->site->get_result('classes', 'id,name');
        $this->load->view('admin/assignments', $p);
    }
    public function add(){
        $p["title"] = "Add New Assignment";
        $p["page_mother"] = "Assignments";
        $p["page"] = "Add";
		$p['classes'] = $this->site->get_result('classes', 'id,name');
		if( $this->input->post()) {
			$this->form_validation->set_rules('title', 'Assignment Title', 'trim|required|xss_clean');
			$this->form_validation->set_rules('description', 'Description', 'trim|required|xss_clean');
			$this->form_validation->set_rules('cid', 'class', 'trim|required|xss_clean');
			$this->form_validation->set_rules('subject', 'Subject', 'trim|required|xss_clean');

//			@TODO : Check if the deadline is less than time_uploaded and throw error.
			$data = array(
				'cid' => $this->input->post('cid'),
				'sid' => $this->input->post('sid'),
				'subject' => $this->input->post('subject'),
				'title' => $this->input->post('title', true),
				'description' => $this->input->post('description', true),
				'time_uploaded' => get_now(),
				'deadline' => date('Y/m/d H:i:s', strtotime($this->input->post('deadline'))),
				'uploader' => $this->session->userdata('logged_id'),
			);

			if( $_FILES['file'] ){
				$config = array(
					'upload_path' => "./assets/",
					'overwrite' => FALSE,
					'max_size' => "2048000",
					'encrypt_name'   => TRUE
				);
				$this->load->library('upload', $config);
				if( $this->upload->do_upload('file') ){
					$data['file'] = $this->upload->data('file_name');
				}
			}
			if( $this->site->insert_data('assignments', $data )){
				$this->session->set_flashdata('success_msg', 'Success: The assignments has been uploaded successfully.');
				redirect('admin/syllabus');
			}else{
				$this->session->set_flashdata('error_msg', 'Error: There was an error uploading the assignment');
				$this->load->view('admin/add_assignment', $p);
			}
		}else{
			$this->load->view('admin/add_assignment', $p);
		}
    }
}
