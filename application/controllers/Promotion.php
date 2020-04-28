<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Promotion extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (strtolower($this->uri->segment(1)) == "promotion") show_404();
    }
    public function index()
    {
        $p["title"] = "Promotion";
        $p["page"] = "Promotion";
        $this->load->view('admin/promotion', $p);
    }
    public function add()
    {
        $p["title"] = "Add Promotion";
        $p["page_mother"] = "Promotion";
        $p["page"] = "Add";
        $this->load->view('admin/add_promotion', $p);
    }
}