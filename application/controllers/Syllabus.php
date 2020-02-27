<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Syllabus extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (strtolower($this->uri->segment(1)) == "syllabus") show_404();
    }
    public function index()
    {
        $p["title"] = "All Syllabus";
        $p["page"] = "Syllabus";
        $this->load->view('admin/syllabus', $p);
    }
    public function add()
    {
        $p["title"] = "Add New Syllabus";
        $p["page_mother"] = "Syllabus";
        $p["page"] = "Add";
        $this->load->view('admin/add_syllabus', $p);
    }
}