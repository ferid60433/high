<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ExamSchedule extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (strtolower($this->uri->segment(1)) == "examschedule") show_404();
    }
    public function index()
    {
        $p["title"] = "All Exam Schedule";
        $p["page"] = "ExamSchedule";
        $p["page_name"] = "Exam Schedule";
        $this->load->view('admin/examschedule', $p);
    }
    public function add()
    {
        $p["title"] = "Add New Exam Schedule";
        $p["page_mother"] = "ExamSchedule";
        $p["page_mother_name"] = "Exam Schedule";
        $p["page"] = "Add";
        $this->load->view('admin/add_examschedule', $p);
    }
}