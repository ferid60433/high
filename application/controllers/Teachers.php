<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Teachers extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (strtolower($this->uri->segment(1)) == "teachers") show_404();
	}
	public function index()
	{
		$p["title"] = "All Teachers";
		$p["page"] = "Teachers";
		$p['teachers'] = $this->site->run_sql("SELECT u.email, u.status, t.* FROM users u JOIN teachers t ON ( u.id = t.uid) ORDER BY u.id DESC")->result();
		$this->load->view('admin/teachers', $p);
	}
	public function add()
	{
		$p["title"] = "Add New Teacher";
		$p["page_mother"] = "Teachers";
		$p["page"] = "Add";
		if ($this->input->post()) {
			$this->form_validation->set_rules('name', 'Teacher name', 'trim|required|xss_clean');
			$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email|xss_clean');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|min_length[6]|max_length[50]');
			$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|xss_clean|min_length[6]|max_length[50]|matches[password]');
			if ($this->form_validation->run() == false) {
				$this->session->set_flashdata('error_msg', validation_errors());
				$this->load->view('admin/add_teacher', $p);
				return;
			} else {
				$data = array(
					'name' => $this->input->post('name'),
					'designation' => $this->input->post('designation'),
					'dob' => date('Y/m/d', strtotime($this->input->post('dob'))),
					'gender' => $this->input->post('gender'),
					'religion' => $this->input->post('religion'),
					'joined' => date('Y/m/d', strtotime($this->input->post('joined'))),
					'address' => $this->input->post('address'),
					'phone' => $this->input->post('phone'),
				);
				$salt = salt(50);
				$user_data = array(
					'email' => $_POST['email'],
					'password' => shaPassword($this->input->post('password'), $salt),
					'salt' => $salt,
					'user_group' => 'teacher',
					'role' => '0',
					'ip' => $_SERVER['REMOTE_ADDR'],
					'date_registered' => get_now(),
					'last_login' => get_now(),
				);
				$this->db->trans_start();
				$user_id = $this->user->create_account($user_data);
				if (!is_numeric($user_id)) {
					$this->session->set_flashdata('error_msg', "Sorry! There was an error creating the account. " . $user_id);
					$this->load->view('admin/add_teacher', $p);
					return;
				} else {
					// lets populate the parent table
					$data['uid'] = $user_id;
					if ($_FILES['pic']) {
						$config = array(
							'upload_path' => "./assets/img/",
							'allowed_types' => "gif|jpg|png|jpeg",
							'overwrite' => FALSE,
							'max_size' => "2048000",
							'max_height' => "768",
							'max_width' => "1024",
							'encrypt_name'   => TRUE
						);
						$this->load->library('upload', $config);
						if ($this->upload->do_upload('pic')) {
							$data['pic'] = $this->upload->data('file_name');
						}
					}
					$parent_id = $this->user->create_account($data, 'teachers');
					$this->db->trans_complete();
					if ($this->db->trans_status() === FALSE) {
						$this->session->set_flashdata('error_msg', "There was an error creating the parent' account.");
						$this->db->trans_rollback();
					} else {
						$this->db->trans_commit();
						$this->session->set_flashdata('success_msg', "Account created successfully.");
						redirect('admin/teachers/');
					}
				}
			}
		} else {
			$this->load->view('admin/add_teacher', $p);
		}
	}

	public function view($id)
	{
		$p["title"] = "View Teacher";
		$p["page_mother"] = "Teachers";
		$p["page"] = "View";
		$id = (int) simple_crypt($id, 'd');
		$row = $this->site->run_sql("SELECT u.email, u.status, p.*
 		FROM users u JOIN teachers p ON ( u.id = p.uid) WHERE u.id = '" . $id . "' ")->row();
		if ($id && $row) {
			$p['teacher'] = $row;
			$this->load->view('admin/view_teacher', $p);
		} else {
			$this->session->set_flashdata('error_msg', "Sorry, the teacher account you're looking for can't be found.");
			redirect($_SERVER['HTTP_REFERER']);
		}
	}
}
