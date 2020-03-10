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
    public function folders()
    {
        $p["title"] = "View Folder";
        $p["page_mother"] = "Media";
        $p["page"] = "Folder Name";
        $this->load->view('admin/media_folder', $p);
    }
    public function files()
    {
        $p["title"] = "View File";
        $p["page_mother"] = "Media";
        $p["page"] = "File Name";
        $this->load->view('admin/media_file', $p);
    }
}