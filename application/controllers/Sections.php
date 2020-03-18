<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Sections extends MY_Controller
{
    public function index(){
        $p["title"] = "All Sections";
        $p["page"] = "Sections";
		$p['classes'] = $this->site->get_result('classes', 'id,name');
		$this->load->view('admin/sections', $p);
    }

    public function add(){
		$user_group = $this->session->userdata('user_group');
        $p["title"] = "Add New Section";
        $p["page_mother"] = "Sections";
        $p["page"] = "Add";
		$p['teachers'] = $this->site->get_result('teachers', 'id, name');
		$p['classes'] = $this->site->get_result('classes', 'id, name');
		if( $this->input->post() ){
			$this->form_validation->set_rules('name', 'Section Name','trim|required|xss_clean');
			$this->form_validation->set_rules('category', 'Category','trim|required|xss_clean');
			$this->form_validation->set_rules('teacher', 'Class Teacher','trim|required|xss_clean');
			$this->form_validation->set_rules('class', 'Class','trim|required|xss_clean');
			if( $this->form_validation->run() == false ){
				$this->session->set_flashdata('error_msg', validation_errors());
				$this->load->view('admin/add_section', $p);
				return;
			}else{
				// check that the class already exist
				$name = trim(strtolower($this->input->post('name', true)));
				$class = trim(strtolower($this->input->post('class', true)));
				$row = $this->site->get_row('sections', '*',
					array('name' => $name, 'cid' => $class)) ;
				if( $row ){
					$this->session->set_flashdata('error_msg', "Heads up! Seems like the section already exist for this class " .
						anchor(base_url( $user_group .'/sections/'), 'Search for it by clicking here'));
					$this->load->view('admin/add_section', $p);
					return;
				}
				$data = array(
					'name' => trim(strtolower($this->input->post('name', true))),
					'category' => $this->input->post('category', true),
					'capacity' => $this->input->post('capacity', true),
					'tid' => $this->input->post('teacher', true),
					'cid' => $this->input->post('class', true),
					'note' => $this->input->post('note', true),
				);
				$this->db->trans_start();
				$this->site->insert_data('sections', $data);
				$on_page = $this->input->post('on_page');
				$this->db->trans_complete();
				if ($this->db->trans_status() === FALSE){
					$this->session->set_flashdata('error_msg', "There was an error adding the class.");
					$this->load->view('admin/add_section', $p);
				}else{
					$this->db->trans_commit();
					$this->session->set_flashdata('success_msg', "The Section (" .$name. ") has been added successfully. " );
					( $on_page === "on" ) ?
						$this->load->view('admin/add_section', $p) :
						redirect($user_group.'/add_section');
				}
			}
		}else{
			$this->load->view('admin/add_section', $p);
		}
    }
}
