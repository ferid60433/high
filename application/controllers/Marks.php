<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Marks extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (strtolower($this->uri->segment(1)) == "marks") show_404();
    }
    public function index()
    {
        $p["title"] = "All Marks";
        $p["page"] = "Marks";
        $this->load->view('admin/marks', $p);
    }
    public function add()
    {
        $p["title"] = "Add New Marks";
        $p["page_mother"] = "Marks";
        $p["page"] = "Add";
        $this->load->view('admin/add_mark', $p);
    }
    public function view()
    {
        $p["title"] = "View Mark";
        $p["page_mother"] = "Marks";
        $p["page"] = "View";
        $this->load->view('admin/view_mark', $p);
    }
}