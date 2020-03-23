<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Students extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (strtolower($this->uri->segment(1)) == "students") show_404();
	}
	public function index()
	{
		$p["title"] = "All Students";
		$p["page"] = "Students";
		$p['students'] = $this->site->run_sql("SELECT u.email, u.status, s.* FROM users u JOIN students s ON ( u.id = s.uid) ORDER BY u.id DESC")->result();
		$p['classes'] = $this->site->run_sql("SELECT c.id, c.name, s.name section FROM classes c JOIN sections s ON (s.cid = c.id) ORDER BY c.id DESC")->result();
		$this->load->view('admin/students', $p);
	}

	/*
     * Add student to the student
     * Access: admin user_group*/
	public function add()
	{
		$p["title"] = "Add New Student";
		$p["page_mother"] = "Students";
		$p["page"] = "Add";
		$p['guardians'] = $this->site->get_result('parents', 'uid, guardian_name, father_name');
		$p['classes'] = $this->site->get_result('classes', 'id, name');
		$p['sections'] = $this->site->get_result('sections', 'id, name');
		if ($this->input->post()) {
			$this->form_validation->set_rules('name', 'Student name', 'trim|required|xss_clean');
			$this->form_validation->set_rules('guardian', 'Guardian', 'trim|required|xss_clean');
			$this->form_validation->set_rules('dob', 'Date of birth', 'trim|required|xss_clean');
			$this->form_validation->set_rules('cid', 'Class', 'trim|required|xss_clean');
			$this->form_validation->set_rules('gender', 'Gender', 'trim|required|xss_clean');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|min_length[6]|max_length[50]');
			$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|xss_clean|min_length[6]|max_length[50]');

			if ($this->form_validation->run() == false) {
				$this->session->set_flashdata('error_msg', validation_errors());
				$this->load->view('admin/add_student', $p);
				return;
			} else {
				$data = array(
					'gid' => $this->input->post('guardian'),
					'name' => $this->input->post('name'),
					'dob' => date('Y/m/d', strtotime($this->input->post('dob'))),
					'gender' => $this->input->post('gender'),
					'blood_group' => $this->input->post('blood_group'),
					'religion' => $this->input->post('religion'),
					'phone' => $this->input->post('phone'),
					'address' => $this->input->post('address'),
					'state' => $this->input->post('state'),
					'country' => $this->input->post('country'),
					'cid' => $this->input->post('cid'),
					'sid' => $this->input->post('sid'),
					'adm_no' => $this->input->post('adm_no'),
					'activities' => $this->input->post('activities'),
					'remarks' => $this->input->post('remarks')
				);
				$salt = salt(50);
				$user_data = array(
					'email' => $_POST['email'],
					'title' => 'Student',
					'password' => shaPassword($this->input->post('password'), $salt),
					'salt' => $salt,
					'user_group' => 'student',
					'role' => '0',
					'ip' => $_SERVER['REMOTE_ADDR'],
					'date_registered' => get_now(),
					'last_login' => get_now(),
					'status' => 'active'
				);
				$this->db->trans_start();

				$user_id = $this->user->create_account($user_data);
				if (!is_numeric($user_id)) {
					$this->session->set_flashdata('error_msg', "Sorry! There was an error creating the account. " . $user_id);
					$this->load->view('admin/add_student', $p);
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
					$parent_id = $this->user->create_account($data, 'students');
					$this->db->trans_complete();
					if ($this->db->trans_status() === FALSE) {
						$this->session->set_flashdata('error_msg', "There was an error creating the parent' account.");
						$this->db->trans_rollback();
					} else {
						$this->db->trans_commit();
						$this->session->set_flashdata('success_msg', "Account created successfully.");
						redirect('admin/students/');
					}
				}
			}
		} else {
			$this->load->view('admin/add_student', $p);
		}
	}

	public function view()
	{
		$p["title"] = "View Student";
		$p["page_mother"] = "Students";
		$p["page"] = "View";
		$this->load->view('admin/view_student', $p);
	}
}
