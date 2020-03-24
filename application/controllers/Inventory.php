<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Inventory extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (strtolower($this->uri->segment(1)) == "inventory") show_404();
    }
    public function index()
    {
        return redirect("admin/inventory/product");
    }
    public function supplier($act = "")
    {
        if (strtolower($act) == "add") {
            $this->add_supplier();
        } elseif ($act == "edit") {
            // $this->edit_supplier();
        } elseif ($act == "") {
            $p["title"] = "Inventory Suppliers";
            $p["page_mother"] = "Inventory";
            $p["page"] = "Suppliers";
            $this->load->view('admin/inventory_suppliers', $p);
        } else {
            show_404();
        }
    }
    private function add_supplier()
    {
        $p["title"] = "Add Supplier";
        $p["page_mother"] = "Inventory";
        $p["page_inner"] = "supplier";
        $p["page_inner_name"] = "Suppliers";
        $p["page"] = "Add";
        $this->load->view('admin/add_inventory_supplier', $p);
    }
    public function product($act = "")
    {
        if (strtolower($act) == "add") {
            $this->add_product();
        } elseif ($act == "edit") {
            // $this->edit_product();
        } elseif ($act == "") {
            $p["title"] = "Inventory Products";
            $p["page_mother"] = "Inventory";
            $p["page"] = "Products";
            $this->load->view('admin/inventory_products', $p);
        } else {
            show_404();
        }
    }
    private function add_product()
    {
        $p["title"] = "Add Product";
        $p["page_mother"] = "Inventory";
        $p["page_inner"] = "product";
        $p["page_inner_name"] = "Products";
        $p["page"] = "Add";
        $this->load->view('admin/add_inventory_product', $p);
    }
    public function warehouse($act = "")
    {
        if (strtolower($act) == "add") {
            $this->add_warehouse();
        } elseif ($act == "edit") {
            // $this->edit_warehouse();
        } elseif ($act == "") {
            $p["title"] = "Inventory Warehouses";
            $p["page_mother"] = "Inventory";
            $p["page"] = "Warehouses";
            $this->load->view('admin/inventory_warehouse', $p);
        } else {
            show_404();
        }
    }
    private function add_warehouse()
    {
        $p["title"] = "Add Warehouse";
        $p["page_mother"] = "Inventory";
        $p["page_inner"] = "warehouse";
        $p["page_inner_name"] = "Warehouses";
        $p["page"] = "Add";
        $this->load->view('admin/add_inventory_warehouse', $p);
    }
    public function purchase($act = "")
    {
        if (strtolower($act) == "add") {
            $this->add_purchase();
        } elseif ($act == "view") {
            $this->view_purchase();
        } elseif ($act == "edit") {
            // $this->edit_purchase();
        } elseif ($act == "") {
            $p["title"] = "Inventory Purchases";
            $p["page_mother"] = "Inventory";
            $p["page"] = "Purchases";
            $this->load->view('admin/inventory_purchase', $p);
        } else {
            show_404();
        }
    }
    private function add_purchase()
    {
        $p["title"] = "Add Purchase";
        $p["page_mother"] = "Inventory";
        $p["page_inner"] = "purchase";
        $p["page_inner_name"] = "Purchases";
        $p["page"] = "Add";
        $this->load->view('admin/add_inventory_purchase', $p);
    }
    private function view_purchase()
    {
        $p["title"] = "View Purchase";
        $p["page_mother"] = "Inventory";
        $p["page_inner"] = "purchase";
        $p["page_inner_name"] = "Purchases";
        $p["page"] = "View";
        $this->load->view('admin/view_inventory_purchase', $p);
    }
    public function sale($act = "")
    {
        if (strtolower($act) == "add") {
            $this->add_sale();
        } elseif ($act == "view") {
            $this->view_sale();
        } elseif ($act == "edit") {
            // $this->edit_sale();
        } elseif ($act == "") {
            $p["title"] = "Inventory Sales";
            $p["page_mother"] = "Inventory";
            $p["page"] = "Sales";
            $this->load->view('admin/inventory_sale', $p);
        } else {
            show_404();
        }
    }
    private function add_sale()
    {
        $p["title"] = "Add Sale";
        $p["page_mother"] = "Inventory";
        $p["page_inner"] = "sale";
        $p["page_inner_name"] = "Sales";
        $p["page"] = "Add";
        $this->load->view('admin/add_inventory_sale', $p);
    }
    private function view_sale()
    {
        $p["title"] = "View Sale";
        $p["page_mother"] = "Inventory";
        $p["page_inner"] = "sale";
        $p["page_inner_name"] = "Sales";
        $p["page"] = "View";
        $this->load->view('admin/view_inventory_sale', $p);
    }
    public function category($act = "")
    {
        if (strtolower($act) == "add") {
            $this->add_category();
        } elseif ($act == "edit") {
            // $this->edit_category();
        } elseif ($act == "") {
            $p["title"] = "Inventory Categories";
            $p["page_mother"] = "Inventory";
            $p["page"] = "Categories";
            $this->load->view('admin/inventory_category', $p);
        } else {
            show_404();
        }
    }
    private function add_category()
    {
        $p["title"] = "Add Category";
        $p["page_mother"] = "Inventory";
        $p["page_inner"] = "category";
        $p["page_inner_name"] = "Categories";
        $p["page"] = "Add";
        $this->load->view('admin/add_inventory_category', $p);
    }
}
