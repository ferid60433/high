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
}
