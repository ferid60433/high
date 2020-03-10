<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Mails extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (strtolower($this->uri->segment(1)) == "mails") show_404();
    }
    public function index()
    {
        $p["title"] = "All Mails / SMS";
        $p["page"] = "Mails";
        $p["page_name"] = "Mails And SMS";
        $this->load->view('admin/mails', $p);
    }
    public function compose()
    {
        $p["title"] = "Compose New Mail";
        $p["page_mother"] = "Mails";
        $p["page_mother_name"] = "Mails And SMS";
        $p["page"] = "Compose";
        $this->load->view('admin/compose_mail', $p);
    }
}