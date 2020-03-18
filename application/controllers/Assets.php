<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Assets extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (strtolower($this->uri->segment(1)) == "assets") show_404();
    }
    public function index()
    {
        $p["title"] = "All Assets";
        $p["page"] = "Assets";
        $this->load->view('admin/assets', $p);
    }
    public function vendor($act = "")
    {
        if (strtolower($act) == "add") {
            $this->add_vendor();
        } elseif ($act == "view") {
            $this->view_vendor();
        } elseif ($act == "edit") {
            // $this->edit_vendor();
        } elseif ($act == "") {
            $p["title"] = "Assets Vendors";
            $p["page_mother"] = "Assets";
            $p["page"] = "Vendors";
            $this->load->view('admin/assets_vendor', $p);
        } else {
            show_404();
        }
    }
    private function add_vendor()
    {
        $p["title"] = "Add Vendor";
        $p["page_mother"] = "Assets";
        $p["page_inner"] = "vendor";
        $p["page_inner_name"] = "Vendors";
        $p["page"] = "Add";
        $this->load->view('admin/add_assets_vendor', $p);
    }
    private function view_vendor()
    {
        $p["title"] = "View Vendor";
        $p["page_mother"] = "Assets";
        $p["page_inner"] = "vendor";
        $p["page_inner_name"] = "Vendors";
        $p["page"] = "View";
        $this->load->view('admin/view_assets_vendor', $p);
    }
    public function view()
    {
        $p["title"] = "View Salary";
        $p["page_mother"] = "Salaries";
        $p["page"] = "View";
        $this->load->view('admin/view_salary', $p);
    }
    public function add()
    {
        $p["title"] = "Add Salary";
        $p["page_mother"] = "Salaries";
        $p["page"] = "Add";
        $this->load->view('admin/add_salary', $p);
    }
}
