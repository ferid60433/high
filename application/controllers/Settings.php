<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Settings extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (strtolower($this->uri->segment(1)) == "settings") show_404();
    }
    public function index()
    {
        $p["title"] = "General Settings";
        $p["page"] = "Settings";
        $p["page_name"] = "General Settings";
        $this->load->view('admin/general_settings', $p);
    }
}