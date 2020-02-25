<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Students extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if(strtolower($this->uri->segment(1)) == "students") show_404();
    }
    public function index()
    {
        $p["title"] = "All Students";
        $p["page"] = "Students";
        $this->load->view('admin/students', $p);
    }
    public function add()
    {
        $p["title"] = "Add New Student";
        $p["page_mother"] = "Students";
        $p["page"] = "Add";
        $this->load->view('admin/add_student', $p);
    }
    public function view()
    {
        $p["title"] = "View Student";
        $p["page_mother"] = "Students";
        $p["page"] = "View";
        $this->load->view('admin/view_student', $p);
    }
}
