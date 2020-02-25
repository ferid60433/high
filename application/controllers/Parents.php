<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Parents extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if(strtolower($this->uri->segment(1)) == "parents") show_404();
    }
    public function index()
    {
        $p["title"] = "All Parents";
        $p["page"] = "Parents";
        $this->load->view('admin/parents', $p);
    }
    public function add()
    {
        $p["title"] = "Add New Parent";
        $p["page_mother"] = "Parents";
        $p["page"] = "Add";
        $this->load->view('admin/add_parent', $p);
    }
    public function view()
    {
        $p["title"] = "View Parent";
        $p["page_mother"] = "Parents";
        $p["page"] = "View";
        $this->load->view('admin/view_parent', $p);
    }
}
