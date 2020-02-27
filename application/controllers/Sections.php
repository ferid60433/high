<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Sections extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (strtolower($this->uri->segment(1)) == "sections") show_404();
    }
    public function index()
    {
        $p["title"] = "All Sections";
        $p["page"] = "Sections";
        $this->load->view('admin/sections', $p);
    }
    public function add()
    {
        $p["title"] = "Add New Section";
        $p["page_mother"] = "Sections";
        $p["page"] = "Add";
        $this->load->view('admin/add_section', $p);
    }
}