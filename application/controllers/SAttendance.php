<?php
defined('BASEPATH') or exit('No direct script access allowed');
class SAttendance extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (strtolower($this->uri->segment(1)) == "sattendance") show_404();
    }
    public function index()
    {
        $p["title"] = "All Students Attendance";
        $p["page"] = "SAttendance";
        $p["page_name"] = "Students Attendance";
        $this->load->view('admin/sattendance', $p);
    }
    public function add()
    {
        $p["title"] = "Add New Student Attendance";
        $p["page_mother"] = "SAttendance";
        $p["page_mother_name"] = "Students Attendance";
        $p["page"] = "Add";
        $this->load->view('admin/add_sattendance', $p);
    }
}