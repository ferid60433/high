<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Timetable extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (strtolower($this->uri->segment(1)) == "timetable") show_404();
    }
    public function index()
    {
        $p["title"] = "All Timetable";
        $p["page"] = "Timetable";
        $this->load->view('admin/timetable', $p);
    }
    public function add()
    {
        $p["title"] = "Add New Timetable";
        $p["page_mother"] = "Timetable";
        $p["page"] = "Add";
        $this->load->view('admin/add_timetable', $p);
    }
}