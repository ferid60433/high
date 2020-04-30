<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Roles extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (strtolower($this->uri->segment(1)) == "roles") show_404();
    }
    public function index()
    {
        $p["title"] = "User Roles";
        $p["page"] = "Roles";
        $p['roles'] = $this->db->get("roles")->result();
        $this->load->view('admin/user_roles', $p);
    }
    public function add()
    {
        $p["title"] = "Add User Role";
        $p["page_mother"] = "Roles";
        $p["page"] = "Add";
        $p["modules"] = $this->db->get("modules")->result();
        if ($this->input->post()) {
            $this->form_validation->set_rules('title', 'User Role Title', 'trim|required|xss_clean');
            if ($this->form_validation->run() == false) {
                $this->session->set_flashdata('error_msg', validation_errors());
                $this->load->view('admin/add_user_role', $p);
                return;
            } else {
                $data = array(
                    'title' => $this->input->post('title'),
                    'roles' => implode(",", $this->input->post('roles'))
                );
                $user_id = $this->site->insert_data("roles", $data);
                if (!is_numeric($user_id)) {
                    $this->session->set_flashdata('error_msg', "Sorry! There was an error creating the role.");
                    $this->load->view('admin/add_user_role', $p);
                    return;
                } else {
                    $on_page = $this->input->post('on_page');
                    $this->session->set_flashdata('success_msg', "Role created successfully.");
                    ($on_page === "on") ?
                        $this->load->view('admin/add_subject', $p) :
                        redirect('admin/roles');
                }
            }
        } else {
            $this->load->view('admin/add_user_role', $p);
        }
    }
}
