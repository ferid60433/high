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
    public function password()
    {
        $p["title"] = "Reset User Password";
        $p["page_mother"] = "Administration";
        $p["page"] = "password";
        $p["page_name"] = "Reset Password";
        $this->load->view('admin/admin_password', $p);
    }
    public function sgroup()
    {
        $p["title"] = "All Student Groups";
        $p["page_mother"] = "Administration";
        $p["page"] = "sgroup";
        $p["page_name"] = "Student Group";
        $this->load->view('admin/student_group', $p);
    }
    public function complain($act = "")
    {
        if (strtolower($act) == "add") {
            $this->add_complain();
        } elseif ($act == "edit") {
            // $this->edit_complain();
        } elseif ($act == "") {
            $p["title"] = "All Complaints";
            $p["page_mother"] = "Administration";
            $p["page"] = "complain";
            $p["page_name"] = "Complain";
            $this->load->view('admin/admin_complain', $p);
        } else {
            show_404();
        }
    }
    private function add_complain()
    {
        $p["title"] = "Add complain";
        $p["page_mother"] = "Administration";
        $p["page_inner"] = "complain";
        $p["page_inner_name"] = "Student Groups";
        $p["page"] = "Add";
        $this->load->view('admin/add_admin_complain', $p);
    }
    private function view_complain()
    {
        $p["title"] = "View complain";
        $p["page_mother"] = "Administration";
        $p["page_inner"] = "complain";
        $p["page_inner_name"] = "Student Groups";
        $p["page"] = "View";
        $this->load->view('admin/view_admin_complain', $p);
    }
}
