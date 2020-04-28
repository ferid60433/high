<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Library extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (strtolower($this->uri->segment(1)) == "library") show_404();
    }
    public function index()
    {
        $p["title"] = "All Library Books";
        $p["page"] = "Library";
        $this->load->view('admin/library_books', $p);
    }
    public function add()
    {
        $p["title"] = "Add Book";
        $p["page_mother"] = "Library";
        $p["page"] = "Add";
        $this->load->view('admin/add_library_book', $p);
    }
    public function ebooks($act = "")
    {
        if (strtolower($act) == "add") {
            $this->add_ebook();
        } elseif ($act == "edit") {
            // $this->edit_ebook();
        } elseif ($act == "view") {
            $this->view_ebook();
        } elseif ($act == "") {
            $p["title"] = "All Ebooks";
            $p["page_mother"] = "Library";
            $p["page"] = "E-Books";
            $this->load->view('admin/library_ebooks', $p);
        } else {
            show_404();
        }
    }
    private function add_ebook()
    {
        $p["title"] = "Add Ebook";
        $p["page_mother"] = "Library";
        $p["page_inner"] = "ebooks";
        $p["page_inner_name"] = "Ebooks";
        $p["page"] = "Add";
        $this->load->view('admin/add_library_ebook', $p);
    }
    public function view_ebook()
    {
        $p["title"] = "View Ebook";
        $p["page_mother"] = "Library";
        $p["page_inner"] = "ebooks";
        $p["page_inner_name"] = "Ebooks";
        $p["page"] = "View";
        $this->load->view('admin/view_library_ebook', $p);
    }
    public function members($act = "")
    {
        if (strtolower($act) == "add") {
            $this->add_member();
        } elseif ($act == "edit") {
            // $this->edit_fee();
        } elseif ($act == "view") {
            $this->view_member();
        } elseif ($act == "") {
            $p["title"] = "All Library Members";
            $p["page_mother"] = "Library";
            $p["page"] = "Members";
            $this->load->view('admin/library_members', $p);
        } else {
            show_404();
        }
    }
    private function add_member()
    {
        $p["title"] = "Add Library Member";
        $p["page_mother"] = "Library";
        $p["page_inner"] = "members";
        $p["page_inner_name"] = "Members";
        $p["page"] = "Add";
        $this->load->view('admin/add_library_member', $p);
    }
    private function view_member()
    {
        $p["title"] = "View Member";
        $p["page_mother"] = "Library";
        $p["page_inner"] = "members";
        $p["page_inner_name"] = "Members";
        $p["page"] = "View";
        $this->load->view('admin/view_library_member', $p);
    }
    public function issue($act = "")
    {
        if (strtolower($act) == "add") {
            $this->add_book_issue();
        } elseif ($act == "edit") {
            // $this->edit_book_issue();
        } elseif ($act == "view") {
            $this->view_book_issue();
        } elseif ($act == "return") {
            // $this->return_book();
        } elseif ($act == "") {
            $p["title"] = "All Books Issued";
            $p["page_mother"] = "Library";
            $p["page"] = "Issue";
            $this->load->view('admin/library_book_issue', $p);
        } else {
            show_404();
        }
    }
    private function view_book_issue()
    {
        $p["title"] = "View Book Issue";
        $p["page_mother"] = "Library";
        $p["page_inner"] = "issue";
        $p["page_inner_name"] = "Issue";
        $p["page"] = "View";
        $this->load->view('admin/view_library_book_issue', $p);
    }
    public function add_book_issue()
    {
        $p["title"] = "Issue Book";
        $p["page_mother"] = "Library";
        $p["page_inner"] = "issue";
        $p["page_inner_name"] = "Issue";
        $p["page"] = "Add";
        $this->load->view('admin/add_library_book_issue', $p);
    }
}
