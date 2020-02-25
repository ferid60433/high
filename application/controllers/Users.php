<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Users extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (strtolower($this->uri->segment(1)) == "users") show_404();
    }
    public function index()
    {
        $p["title"] = "All Users";
        $p["page"] = "Users";
        $this->load->view('admin/users', $p);
    }
    public function add()
    {
        $p["title"] = "Add New User";
        $p["page_mother"] = "Users";
        $p["page"] = "Add";
        $this->load->view('admin/add_user', $p);
    }
    public function view()
    {
        $p["title"] = "View User";
        $p["page_mother"] = "Users";
        $p["page"] = "View";
        $this->load->view('admin/view_user', $p);
    }
}