<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Users extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (strtolower($this->uri->segment(1)) == "users") show_404();
    }
    public function index()
    {
        $p["title"] = "All Users";
        $p["page"] = "Users";
        $p['users'] = $this->site->run_sql("SELECT u.email, u.status, u.role, t.* FROM users u JOIN staff t ON ( u.id = t.uid) ORDER BY u.id DESC")->result();
        $this->load->view('admin/users', $p);
    }
    public function add()
    {
        $p["title"] = "Add New User";
        $p["page_mother"] = "Users";
        $p["page"] = "Add";
        $this->load->view('admin/add_user', $p);
    }
    public function view($id)
    {
        $p["title"] = "View User";
        $p["page_mother"] = "Users";
        $p["page"] = "View";
        $id = (int) simple_crypt($id, 'd');
        $row = $this->site->run_sql("SELECT u.email, u.status, u.role, p.*
 		FROM users u JOIN staff p ON ( u.id = p.uid) WHERE u.id = '" . $id . "' ")->row();
        if ($id && $row) {
            $p['user'] = $row;
            $this->load->view('admin/view_user', $p);
        } else {
            $this->session->set_flashdata('error_msg', "Sorry, the user account you're looking for can't be found.");
            redirect($_SERVER['HTTP_REFERER']);
        }
    }
}
