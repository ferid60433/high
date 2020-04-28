<?php
defined('BASEPATH') or exit('No direct script access allowed');
class EAttendance extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (strtolower($this->uri->segment(1)) == "eattendance") show_404();
    }
    public function index()
    {
        $p["title"] = "All Exam Attendance";
        $p["page"] = "EAttendance";
        $p["page_name"] = "Exam Attendance";
        $this->load->view('admin/eattendance', $p);
    }
    public function add()
    {
        $p["title"] = "Add New Exam Attendance";
        $p["page_mother"] = "EAttendance";
        $p["page_mother_name"] = "Exam Attendance";
        $p["page"] = "Add";
        $this->load->view('admin/add_eattendance', $p);
    }
}