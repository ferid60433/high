<?php
defined('BASEPATH') or exit('No direct script access allowed');
class MarksDis extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (strtolower($this->uri->segment(1)) == "marksdis") show_404();
    }
    public function index()
    {
        $p["title"] = "All Marks Distribution/Percentage";
        $p["page"] = "MarksDis";
        $p["page_name"] = "Marks Distribution";
        $this->load->view('admin/marksdis', $p);
    }
    public function add()
    {
        $p["title"] = "Add New Mark Distribution";
        $p["page_mother"] = "MarksDis";
        $p["page_mother_name"] = "Marks Distribution";
        $p["page"] = "Add";
        $this->load->view('admin/add_marksdis', $p);
    }
}