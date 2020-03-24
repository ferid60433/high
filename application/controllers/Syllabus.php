<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Syllabus extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (strtolower($this->uri->segment(1)) == "syllabus") show_404();
    }
    public function index(){
        $p["title"] = "All Syllabus";
        $p["page"] = "Syllabus";
        $p['syllabus'] = $this->site->get_result('syllabus', '*');
		$p['classes'] = $this->site->get_result('classes', 'id,name');
        $this->load->view('admin/syllabus', $p);
    }

    public function add(){
        $p["title"] = "Add New Syllabus";
        $p["page_mother"] = "Syllabus";
        $p["page"] = "Add";
        $p['classes'] = $this->site->get_result('classes', 'id,name');
		if( $this->input->post()) {
			$this->form_validation->set_rules('title', 'Syllabus Title', 'trim|required|xss_clean');
			$this->form_validation->set_rules('description', 'Description', 'trim|required|xss_clean');
			$this->form_validation->set_rules('cid', 'class', 'trim|required|xss_clean');
			$data = array(
				'cid' => $this->input->post('cid'),
				'sid' => $this->input->post('sid'),
				'title' => $this->input->post('title', true),
				'description' => $this->input->post('description', true),
				'time_uploaded' => get_now(),
			);

			if( $_FILES['syllabus'] ){
				$config = array(
					'upload_path' => "./assets/",
					'overwrite' => FALSE,
					'max_size' => "2048000",
					'encrypt_name'   => TRUE
				);
				$this->load->library('upload', $config);
				if( $this->upload->do_upload('syllabus') ){
					$data['syllabus'] = $this->upload->data('file_name');
				}
			}

			if( $this->site->insert_data('syllabus', $data )){
				$this->session->set_flashdata('success_msg', 'Success: The syllabus has been uploaded successfully.');
				redirect('admin/syllabus');
			}else{
				$this->session->set_flashdata('error_msg', 'Error: There was an error uploading the syllabus');
				$this->load->view('admin/add_syllabus', $p);
			}
		}else{
			$this->load->view('admin/add_syllabus', $p);
		}
    }
}
