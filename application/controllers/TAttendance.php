<?php
defined('BASEPATH') or exit('No direct script access allowed');
class TAttendance extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (strtolower($this->uri->segment(1)) == "tattendance") show_404();
    }
    public function index()
    {
        $p["title"] = "All Teachers Attendance";
        $p["page"] = "TAttendance";
        $p["page_name"] = "Teachers Attendance";
        $this->load->view('admin/tattendance', $p);
    }
    public function add()
    {
        $p["title"] = "Add New Teachers Attendance";
        $p["page_mother"] = "TAttendance";
        $p["page_mother_name"] = "Teachers Attendance";
        $p["page"] = "Add";
        $this->load->view('admin/add_tattendance', $p);
    }
    public function view()
    {
        $p["title"] = "View Teacher Attendance";
        $p["page_mother"] = "TAttendance";
        $p["page_mother_name"] = "Teachers Attendance";
        $p["page"] = "View";
        $this->load->view('admin/view_tattendance', $p);
    }
}