<?php
defined('BASEPATH') or exit('No direct script access allowed');
class UAttendance extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (strtolower($this->uri->segment(1)) == "uattendance") show_404();
    }
    public function index()
    {
        $p["title"] = "All Users Attendance";
        $p["page"] = "UAttendance";
        $p["page_name"] = "Users Attendance";
        $this->load->view('admin/uattendance', $p);
    }
    public function add()
    {
        $p["title"] = "Add New Users Attendance";
        $p["page_mother"] = "UAttendance";
        $p["page_mother_name"] = "Users Attendance";
        $p["page"] = "Add";
        $this->load->view('admin/add_uattendance', $p);
    }
    public function view()
    {
        $p["title"] = "View User Attendance";
        $p["page_mother"] = "UAttendance";
        $p["page_mother_name"] = "Users Attendance";
        $p["page"] = "View";
        $this->load->view('admin/view_uattendance', $p);
    }
}