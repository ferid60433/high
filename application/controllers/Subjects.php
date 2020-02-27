<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Subjects extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (strtolower($this->uri->segment(1)) == "subjects") show_404();
    }
    public function index()
    {
        $p["title"] = "All Subjects";
        $p["page"] = "Subjects";
        $this->load->view('admin/subjects', $p);
    }
    public function add()
    {
        $p["title"] = "Add New Subject";
        $p["page_mother"] = "Subjects";
        $p["page"] = "Add";
        $this->load->view('admin/add_subject', $p);
    }
}