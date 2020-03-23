<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Accounting extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (strtolower($this->uri->segment(1)) == "accounting") show_404();
    }
    public function index()
    {
        return redirect("admin/accounting/fee");
    }
    public function fee()
    {
        $p["title"] = "All Fee Types";
        $p["page_mother"] = "Accounting";
        $p["page"] = "Fee";
        $p["page_name"] = "Fee Types";
        $this->load->view('admin/account_fee_types', $p);
    }
}