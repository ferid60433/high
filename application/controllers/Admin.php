<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $p["active"] = "dashboard";
        $p["title"] = "Admin Dashboard";
        $count = $this->site->count_row('users');
        $this->load->view('admin/index', $p);
    }
}
