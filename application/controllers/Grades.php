<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Grades extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (strtolower($this->uri->segment(1)) == "grades") show_404();
    }
    public function index()
    {
        $p["title"] = "All Grades";
        $p["page"] = "Grades";
        $this->load->view('admin/grades', $p);
    }
    public function add()
    {
        $p["title"] = "Add New Grade";
        $p["page_mother"] = "Grades";
        $p["page"] = "Add";
        $this->load->view('admin/add_grade', $p);
    }
}