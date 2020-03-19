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
    public function assignment($act = "")
    {
        if (strtolower($act) == "add") {
            $this->add_assignment();
        } elseif ($act == "edit") {
            // $this->edit_assignment();
        } elseif ($act == "") {
            $p["title"] = "Assets Assignments";
            $p["page_mother"] = "Assets";
            $p["page"] = "Assignments";
            $this->load->view('admin/assets_assignment', $p);
        } else {
            show_404();
        }
    }
    private function add_assignment()
    {
        $p["title"] = "Add assignment";
        $p["page_mother"] = "Assets";
        $p["page_inner"] = "assignment";
        $p["page_inner_name"] = "Assignments";
        $p["page"] = "Add";
        $this->load->view('admin/add_assets_assignment', $p);
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
    public function purchase($act = "")
    {
        if (strtolower($act) == "add") {
            $this->add_purchase();
        } elseif ($act == "edit") {
            // $this->edit_purchase();
        } elseif ($act == "") {
            $p["title"] = "Assets Purchases";
            $p["page_mother"] = "Assets";
            $p["page"] = "Purchases";
            $this->load->view('admin/assets_purchase', $p);
        } else {
            show_404();
        }
    }
    private function add_purchase()
    {
        $p["title"] = "Add Purchase";
        $p["page_mother"] = "Assets";
        $p["page_inner"] = "purchase";
        $p["page_inner_name"] = "Purchases";
        $p["page"] = "Add";
        $this->load->view('admin/add_assets_purchase', $p);
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
        $p["page_inner"] = "category";
        $p["page_inner_name"] = "Categories";
        $p["page"] = "Add";
        $this->load->view('admin/add_assets_category', $p);
    }
    public function view()
    {
        $p["title"] = "View Asset";
        $p["page_mother"] = "Assets";
        $p["page"] = "View";
        $this->load->view('admin/view_asset', $p);
    }
    public function add()
    {
        $p["title"] = "Add Asset";
        $p["page_mother"] = "Assets";
        $p["page"] = "Add";
        $this->load->view('admin/add_asset', $p);
    }
}
