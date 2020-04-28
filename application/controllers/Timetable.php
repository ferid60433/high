<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Timetable extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (strtolower($this->uri->segment(1)) == "timetable") show_404();
    }
    public function index()
    {
        $p["title"] = "All Timetable";
        $p["page"] = "Timetable";
        $this->load->view('admin/timetable', $p);
    }
    public function add()
    {
        $p["title"] = "Add New Timetable";
        $p["page_mother"] = "Timetable";
        $p["page"] = "Add";
        $p['classes'] = $this->db->get("classes")->result();
        $p['teachers'] = $this->db->get("teachers")->result();
        if ($this->input->post()) {
            $this->form_validation->set_rules('subject', 'Subject', 'trim|required|xss_clean');
            $this->form_validation->set_rules('teacher', 'Teacher', 'trim|required|xss_clean');
            $this->form_validation->set_rules('class', 'Teacher', 'trim|required|xss_clean');
            $this->form_validation->set_rules('pass_mark', 'Pass Mark', 'trim|required|xss_clean');
            $this->form_validation->set_rules('final_mark', 'Final Mark', 'trim|required|xss_clean');
            $this->form_validation->set_rules('code', 'Subject Code', 'trim|required|xss_clean');
            if ($this->form_validation->run() == false) {
                $this->session->set_flashdata('error_msg', validation_errors());
                $this->load->view('admin/add_timetable', $p);
                return;
            } else {
                $data = array(
                    'subject' => $this->input->post('subject'),
                    'cid' => $this->input->post('class'),
                    'tid' => $this->input->post('teacher'),
                    'type' => $this->input->post('type'),
                    'pass_mark' => $this->input->post('pass_mark'),
                    'final_mark' => $this->input->post('final_mark'),
                    'author' => $this->input->post('author'),
                    'code' => $this->input->post('code'),
                );
                $this->db->trans_start();
                $sub_id = $this->site->insert_data('subjects', $data);
                if (!is_numeric($sub_id)) {
                    $this->session->set_flashdata('error_msg', "Sorry! There was an error creating the subject. ");
                    $this->load->view('admin/add_timetable', $p);
                    return;
                } else {
                    $on_page = $this->input->post('on_page');
                    $this->db->trans_commit();
                    $this->session->set_flashdata('success_msg', "The Subject has been added successfully. ");
                    ($on_page === "on") ?
                        $this->load->view('admin/add_timetable', $p) :
                        redirect('admin/timetable/add/');
                }
            }
        } else {
            $this->load->view('admin/add_timetable', $p);
        }
    }
}
