<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Media extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (strtolower($this->uri->segment(1)) == "media") show_404();
    }
    public function index()
    {
        $p["title"] = "All Media";
        $p["page"] = "Media";
        $this->load->view('admin/media', $p);
    }
    public function view()
    {
        $p["title"] = "View Media";
        $p["page_mother"] = "Media";
        $p["page"] = "View";
        $this->load->view('admin/view_media', $p);
    }
}