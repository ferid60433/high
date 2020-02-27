<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Assignments extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (strtolower($this->uri->segment(1)) == "assignments") show_404();
    }
    public function index()
    {
        $p["title"] = "All Assignments";
        $p["page"] = "Assignments";
        $this->load->view('admin/assignments', $p);
    }
    public function add()
    {
        $p["title"] = "Add New Assignment";
        $p["page_mother"] = "Assignments";
        $p["page"] = "Add";
        $this->load->view('admin/add_assignment', $p);
    }
}