<?php
defined('BASEPATH') or exit('No direct script access allowed');
class SAttendance extends MY_Controller{
    public function __construct(){
        parent::__construct();
        if (strtolower($this->uri->segment(1)) == "sattendance") show_404();
    }

    public function index(){
        $p["title"] = "All Students Attendance";
        $p["page"] = "SAttendance";
        $p["page_name"] = "Students Attendance";
        $this->load->view('admin/sattendance', $p);
    }

    public function add(){
        $p["title"] = "Add New Class Attendance";
        $p["page_mother"] = "SAttendance";
        $p["page_mother_name"] = "Students Attendance";
        $p["page"] = "Add";
		$p['classes'] = $this->site->get_result('classes', 'id,name');
		if( $this->input->post()) {
			$this->form_validation->set_rules('class', 'Class', 'trim|required|xss_clean');
			$this->form_validation->set_rules('section', 'Section', 'trim|required|xss_clean');
			if( $this->form_validation->run() == false ){
				$this->session->set_flashdata('error_msg', validation_errors());
				$this->load->view('admin/add_sattendance', $p);
				return;
			}
			$cid = $this->input->post('class');
			$section_id = $this->input->post('section');
			$p['class'] = $cid;
			$p['section_id'] = $section_id;
			$p['sections'] = $this->site->get_result('sections', 'id,name', array('cid' => $cid));
			$p['students'] = $this->site->get_result('students', 'id, name,roll', array('cid' => $cid, 'sid' => $section_id));
			$p['date'] = $this->input->post('date');
			$this->load->view('admin/add_sattendance', $p);
		}else{
			$this->load->view('admin/add_sattendance', $p);
		}
    }
    public function addsubject()
    {
        $p["title"] = "Add New Subject Attendance";
        $p["page_mother"] = "SAttendance";
        $p["page_mother_name"] = "Students Attendance";
        $p["page"] = "Add";
        $this->load->view('admin/add_subsattendance', $p);
    }
    public function view()
    {
        $p["title"] = "View Student Attendance";
        $p["page_mother"] = "SAttendance";
        $p["page_mother_name"] = "Students Attendance";
        $p["page"] = "View";
        $this->load->view('admin/view_sattendance', $p);
    }
}
