<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Classes extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (strtolower($this->uri->segment(1)) == "classes") show_404();
    }
    public function index()
    {
        $p["title"] = "All Classes";
        $p["page"] = "Classes";
        $this->load->view('admin/classes', $p);
    }
    public function add()
    {
        $p["title"] = "Add New Class";
        $p["page_mother"] = "Classes";
        $p["page"] = "Add";
        $this->load->view('admin/add_class', $p);
    }
}