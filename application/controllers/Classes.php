<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Classes extends MY_Controller
{
    public function __construct(){
        parent::__construct();
    }


    public function index()
    {
        $p["title"] = "All Classes";
        $p["page"] = "Classes";
        $p['classes'] = $this->site->run_sql("SELECT c.*,t.name as teacher, t.id as teacher_id FROM classes c JOIN teachers t ON (t.id = c.tid) ORDER BY c.id DESC")->result();
		$this->load->view('admin/classes', $p);
    }
    public function add(){
    	$user_group = $this->session->userdata('user_group');
        $p["title"] = "Add New Class";
        $p["page_mother"] = "Classes";
        $p["page"] = "Add";
        $p['teachers'] = $this->site->get_result('teachers', 'id, name');
        if( $this->input->post() ){
			$this->form_validation->set_rules('class_name', 'Class Name','trim|required|xss_clean');
			$this->form_validation->set_rules('class_numeric', 'Class Numeric','trim|required|xss_clean');
			$this->form_validation->set_rules('teacher', 'Class Teacher','trim|required|xss_clean');
			if( $this->form_validation->run() == false ){
				$this->session->set_flashdata('error_msg', validation_errors());
				$this->load->view('admin/add_class', $p);
				return;
			}else{
				// check that the class already exist
				$class_name = trim(strtolower($this->input->post('class_name', true)));
				$row = $this->site->get_row('classes', 'id, name', array('name' => $class_name)) ;
				if( $row ){
					$this->session->set_flashdata('error_msg', "Heads up! Seems like the class already exist " .
						anchor(base_url( $user_group .'/classes/'), 'Search for it by clicking here'));
					$this->load->view('admin/add_class', $p);
					return;
				}
				$data = array(
					'name' => trim(strtolower($this->input->post('class_name', true))),
					'class_numeric' => $this->input->post('class_numeric', true),
					'tid' => $this->input->post('teacher', true),
					'note' => $this->input->post('note', true),
				);

				$this->db->trans_start();
				$this->site->insert_data('classes', $data);
				$on_page = $this->input->post('on_page');
				$this->db->trans_complete();
				if ($this->db->trans_status() === FALSE){
					$this->session->set_flashdata('error_msg', "There was an error adding the class.");
					$this->load->view('admin/add_class', $p);
				}else{
					$this->db->trans_commit();
					$this->session->set_flashdata('success_msg', "The class (" .$class_name. ") has been added successfully. " );
					( $on_page === "on" ) ?
						$this->load->view('admin/add_class', $p) :
						redirect($user_group.'/classes');
				}
			}
		}else{
			$this->load->view('admin/add_class', $p);
		}
    }
}
