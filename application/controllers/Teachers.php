<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Teachers extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (strtolower($this->uri->segment(1)) == "teachers") show_404();
    }
    public function index()
    {
        $p["title"] = "All Teachers";
        $p["page"] = "Teachers";
        $this->load->view('admin/teachers', $p);
    }
    public function add()
    {
        $p["title"] = "Add New Teacher";
        $p["page_mother"] = "Teachers";
        $p["page"] = "Add";
        $this->load->view('admin/add_teacher', $p);
    }
    public function view()
    {
        $p["title"] = "View Teacher";
        $p["page_mother"] = "Teachers";
        $p["page"] = "View";
        $this->load->view('admin/view_teacher', $p);
    }
}
