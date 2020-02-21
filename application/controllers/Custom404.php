<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Custom404 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $this->output->set_status_header('404');
        $p['title'] = "Page Not Found";
        $p['active'] = "none";
        $this->load->view('err/_404', $p);
    }
}
