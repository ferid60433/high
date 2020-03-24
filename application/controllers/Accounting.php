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
    public function fee($act = "")
    {
        if (strtolower($act) == "add") {
            $this->add_fee();
        } elseif ($act == "edit") {
            // $this->edit_fee();
        } elseif ($act == "") {
            $p["title"] = "All Fee Types";
            $p["page_mother"] = "Accounting";
            $p["page"] = "Fee";
            $p["page_name"] = "Fee Types";
            $this->load->view('admin/account_fee_types', $p);
        } else {
            show_404();
        }
    }
    private function add_fee()
    {
        $p["title"] = "Add Fee Type";
        $p["page_mother"] = "Accounting";
        $p["page_inner"] = "fee";
        $p["page_inner_name"] = "Fee Types";
        $p["page"] = "Add";
        $this->load->view('admin/add_account_fee', $p);
    }
    public function invoice($act = "")
    {
        if (strtolower($act) == "add") {
            // $this->add_invoice();
        } elseif ($act == "edit") {
            // $this->edit_invoice();
        } elseif ($act == "") {
            $p["title"] = "All Invoices";
            $p["page_mother"] = "Accounting";
            $p["page"] = "Invoice";
            $p["page_name"] = "Invoices";
            $this->load->view('admin/account_invoice', $p);
        } else {
            show_404();
        }
    }
}
