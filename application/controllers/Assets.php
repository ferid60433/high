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
    public function location($act = "")
    {
        if (strtolower($act) == "add") {
            $this->add_location();
        } elseif ($act == "edit") {
            // $this->edit_location();
        } elseif ($act == "") {
            $p["title"] = "Assets Locations";
            $p["page_mother"] = "Assets";
            $p["page"] = "Locations";
            $this->load->view('admin/assets_location', $p);
        } else {
            show_404();
        }
    }
    private function add_location()
    {
        $p["title"] = "Add Location";
        $p["page_mother"] = "Assets";
        $p["page_inner"] = "location";
        $p["page_inner_name"] = "Locations";
        $p["page"] = "Add";
        $this->load->view('admin/add_assets_location', $p);
    }
    public function category($act = "")
    {
        if (strtolower($act) == "add") {
            $this->add_category();
        } elseif ($act == "edit") {
            // $this->edit_category();
        } elseif ($act == "") {
            $p["title"] = "Assets Categories";
            $p["page_mother"] = "Assets";
            $p["page"] = "Categories";
            $this->load->view('admin/assets_category', $p);
        } else {
            show_404();
        }
    }
    private function add_category()
    {
        $p["title"] = "Add Category";
        $p["page_mother"] = "Assets";
        $p["page_inner"] = "Category";
        $p["page_inner_name"] = "Categories";
        $p["page"] = "Add";
        $this->load->view('admin/add_assets_category', $p);
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
