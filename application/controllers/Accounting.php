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
    public function history($act = "")
    {
        if (strtolower($act) == "edit") {
            // $this->edit_invoice();
        } elseif ($act == "") {
            $p["title"] = "Payment History";
            $p["page_mother"] = "Accounting";
            $p["page"] = "History";
            $p["page_name"] = "Payment History";
            $this->load->view('admin/account_history', $p);
        } else {
            show_404();
        }
    }
    public function expense($act = "")
    {
        if (strtolower($act) == "add") {
            $this->add_expense();
        } elseif ($act == "view") {
            // $this->view_expense();
        } elseif ($act == "edit") {
            // $this->edit_expense();
        } elseif ($act == "") {
            $p["title"] = "All Expenses";
            $p["page_mother"] = "Accounting";
            $p["page"] = "expense";
            $p["page_name"] = "Expenses";
            $this->load->view('admin/account_expense', $p);
        } else {
            show_404();
        }
    }
    private function add_expense()
    {
        $p["title"] = "Add Expense";
        $p["page_mother"] = "Accounting";
        $p["page_inner"] = "expense";
        $p["page_inner_name"] = "Expenses";
        $p["page"] = "Add";
        $this->load->view('admin/add_account_expense', $p);
    }
    public function income($act = "")
    {
        if (strtolower($act) == "add") {
            $this->add_income();
        } elseif ($act == "view") {
            // $this->view_income();
        } elseif ($act == "edit") {
            // $this->edit_income();
        } elseif ($act == "") {
            $p["title"] = "All Incomes";
            $p["page_mother"] = "Accounting";
            $p["page"] = "income";
            $p["page_name"] = "Incomes";
            $this->load->view('admin/account_income', $p);
        } else {
            show_404();
        }
    }
    private function add_income()
    {
        $p["title"] = "Add Income";
        $p["page_mother"] = "Accounting";
        $p["page_inner"] = "income";
        $p["page_inner_name"] = "Incomes";
        $p["page"] = "Add";
        $this->load->view('admin/add_account_income', $p);
    }
    public function invoice($act = "")
    {
        if (strtolower($act) == "add") {
            $this->add_invoice();
        } elseif ($act == "view") {
            $this->view_invoice();
        } elseif ($act == "edit") {
            // $this->edit_invoice();
        } elseif ($act == "payment") {
            if (strtolower($this->uri->segment(5)) == "add") $this->add_invoice_payment();
            if (strtolower($this->uri->segment(5)) == "view") $this->view_invoice_payment();
            else show_404();
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
    private function add_invoice()
    {
        $p["title"] = "Add Invoice";
        $p["page_mother"] = "Accounting";
        $p["page_inner"] = "invoice";
        $p["page_inner_name"] = "Invoices";
        $p["page"] = "Add";
        $this->load->view('admin/add_account_invoice', $p);
    }
    private function view_invoice()
    {
        $p["title"] = "View Invoice";
        $p["page_mother"] = "Accounting";
        $p["page_inner"] = "invoice";
        $p["page_inner_name"] = "Invoices";
        $p["page"] = "View";
        $this->load->view('admin/view_account_invoice', $p);
    }
    private function add_invoice_payment()
    {
        $p["title"] = "Add Invoice Payment";
        $p["page_mother"] = "Accounting";
        $p["page_inner"] = "invoice";
        $p["page_inner_name"] = "Invoices";
        $p["page"] = "Payment";
        $this->load->view('admin/add_account_invoice_payment', $p);
    }
    private function view_invoice_payment()
    {
        $p["title"] = "View Invoice Payment";
        $p["page_mother"] = "Accounting";
        $p["page_inner"] = "invoice";
        $p["page_inner_name"] = "Invoices";
        $p["page"] = "Payment";
        $this->load->view('admin/view_account_invoice_payment', $p);
    }
}
