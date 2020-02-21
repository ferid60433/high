<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $p["active"] = "dashboard";
        $p["title"] = "Admin Dashboard";
        $this->load->view('admin/index', $p);
    }
    public function students()
    {
        $p["title"] = "Students";
        $this->load->view('admin/students', $p);
    }
    public function parents()
    {
        $p["title"] = "Parents";
        $this->load->view('admin/parents', $p);
    }
    public function teachers()
    {
        $p["title"] = "Teachers";
        $this->load->view('admin/teachers', $p);
    }
    public function users()
    {
        $p["title"] = "Users";
        $this->load->view('admin/users', $p);
    }
    public function add_student()
    {
        $p["title"] = "Add New Student";
        $this->load->view('admin/add_student', $p);
    }
    public function add_parent()
    {
        $p["title"] = "Add New Parent";
        $this->load->view('admin/add_parent', $p);
    }
    public function view_student()
    {
        $p["title"] = "View Student";
        $this->load->view('admin/view_student', $p);
    }
}
