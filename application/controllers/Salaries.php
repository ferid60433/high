<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Salaries extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (strtolower($this->uri->segment(1)) == "salaries") show_404();
    }
    public function index()
    {
        $p["title"] = "Manage All Salaries";
        $p["page"] = "Manage Salary";
        $this->load->view('admin/salaries', $p);
    }
    public function template($act = "")
    {
        if (strtolower($act) == "add") {
            $this->add_template();
        } elseif ($act == "view") {
            $this->view_template();
        } elseif ($act == "edit") {
            // $this->edit_template();
        } elseif ($act == "") {
            $p["title"] = "Monthly Salary Template";
            $p["page_mother"] = "Salaries";
            $p["page"] = "Salary Template";
            $this->load->view('admin/salary_template', $p);
        } else {
            show_404();
        }
    }
    private function add_template()
    {
        $p["title"] = "Add Monthly Salary Template";
        $p["page_mother"] = "Salaries";
        $p["page_inner"] = "template";
        $p["page_inner_name"] = "Salary Template";
        $p["page"] = "Add";
        $this->load->view('admin/add_salary_template', $p);
    }
    private function view_template()
    {
        $p["title"] = "View Monthly Salary Template";
        $p["page_mother"] = "Salaries";
        $p["page_inner"] = "template";
        $p["page_inner_name"] = "Salary Template";
        $p["page"] = "View";
        $this->load->view('admin/view_salary_template', $p);
    }
    public function hourly($act = "")
    {
        if (strtolower($act) == "add") {
            $this->add_hourly();
        } elseif ($act == "edit") {
            // $this->edit_hourly();
        } elseif ($act == "") {
            $p["title"] = "Hourly Salary Template";
            $p["page_mother"] = "Salaries";
            $p["page"] = "Hourly Template";
            $this->load->view('admin/hourly_template', $p);
        } else {
            show_404();
        }
    }
    private function add_hourly()
    {
        $p["title"] = "Add Hourly Salary Template";
        $p["page_mother"] = "Salaries";
        $p["page_inner"] = "hourly";
        $p["page_inner_name"] = "Hourly Template";
        $p["page"] = "Add";
        $this->load->view('admin/add_hourly_template', $p);
    }
}
