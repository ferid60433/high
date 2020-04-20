<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Administration extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (strtolower($this->uri->segment(1)) == "administration") show_404();
    }
    public function index()
    {
        return redirect("admin/administration/year");
    }
    public function year()
    {
        $p["title"] = "All Academic Years";
        $p["page_mother"] = "Administration";
        $p["page"] = "year";
        $p["page_name"] = "Academic Year";
        $this->load->view('admin/academic_year', $p);
    }
    public function sgroup()
    {
        $p["title"] = "All Student Groups";
        $p["page_mother"] = "Administration";
        $p["page"] = "sgroup";
        $p["page_name"] = "Student Group";
        $this->load->view('admin/student_group', $p);
    }
}
