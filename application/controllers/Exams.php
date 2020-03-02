<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Exams extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (strtolower($this->uri->segment(1)) == "exams") show_404();
    }
    public function index()
    {
        $p["title"] = "All Exams";
        $p["page"] = "Exams";
        $this->load->view('admin/exams', $p);
    }
    public function add()
    {
        $p["title"] = "Add New Exam";
        $p["page_mother"] = "Exams";
        $p["page"] = "Add";
        $this->load->view('admin/add_exam', $p);
    }
    public function view()
    {
        $p["title"] = "View Exam";
        $p["page_mother"] = "Exams";
        $p["page"] = "View";
        $this->load->view('admin/view_exam', $p);
    }
}