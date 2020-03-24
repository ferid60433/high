<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Roles extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (strtolower($this->uri->segment(1)) == "roles") show_404();
    }
    public function index()
    {
        $p["title"] = "User Roles";
        $p["page"] = "Roles";
        $this->load->view('admin/user_roles', $p);
    }
    public function add()
    {
        $p["title"] = "Add User Role";
        $p["page_mother"] = "Roles";
        $p["page"] = "Add";
        $this->load->view('admin/add_user_role', $p);
    }
}