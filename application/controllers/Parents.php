<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Parents extends MY_Controller
{
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $p["title"] = "All Parents";
        $p["page"] = "Parents";
        $p['parents'] = $this->site->run_sql("SELECT u.email, u.status, p.* FROM users u JOIN parents p ON ( u.id = p.uid) ORDER BY u.id DESC")->result();
        $this->load->view('admin/parents', $p);
    }
    public function add(){
        $p["title"] = "Add New Parent";
        $p["page_mother"] = "Parents";
        $p["page"] = "Add";
        if( $this->input->post()){
			$this->form_validation->set_rules('guardian_name', 'Guardian name','trim|required|xss_clean');
			$this->form_validation->set_rules('email', 'Email Address','trim|required|valid_email|xss_clean');
			$this->form_validation->set_rules('password', 'Password','trim|required|xss_clean|min_length[6]|max_length[50]');
			$this->form_validation->set_rules('confirm_password', 'Confirm Password','trim|required|xss_clean|min_length[6]|max_length[50]');
			if( $this->form_validation->run() == false ){
				$this->session->set_flashdata('error_msg', validation_errors());
				$this->load->view('admin/add_parent', $p);
				return;
			}else{
				$data = array(
					'guardian_name' => $this->input->post('guardian_name'),
					'father_name' => $this->input->post('father_name'),
					'father_dob' => date('Y/m/d', strtotime($this->input->post('father_dob'))),
					'mother_name' => $this->input->post('mother_name'),
					'mother_dob' => date('Y/m/d', strtotime($this->input->post('mother_dob'))),
					'father_prof' => $this->input->post('father_prof'),
					'mother_prof' => $this->input->post('mother_prof'),
					'phone' => $this->input->post('phone'),
					'address' => $this->input->post('address'),
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
				if( !is_numeric($user_id) ) {
					$this->session->set_flashdata('error_msg', "Sorry! There was an error creating the account. " . $user_id);
					$this->load->view('admin/add_parent', $p);
					return;
				}else{
					// lets populate the parent table
					$data['uid'] = $user_id;
					if( $_FILES['pic'] ){
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
						if( $this->upload->do_upload('pic') ){
							$data['guardian_pic'] = $this->upload->data('file_name');
						}
					}
					$parent_id = $this->user->create_account($data, 'parents');
					$this->db->trans_complete();
					if ($this->db->trans_status() === FALSE){
						$this->session->set_flashdata('error_msg', "There was an error creating the parent' account.");
						$this->db->trans_rollback();
					}else{
						$this->db->trans_commit();
						$this->session->set_flashdata('success_msg', "Account created successfully.");
						redirect('admin/parents/');
					}

				}
			}
		}else{
			$this->load->view('admin/add_parent', $p);
		}
    }


    public function view($id){
        $p["title"] = "View Parent";
        $p["page_mother"] = "Parents";
        $p["page"] = "View";
		$id = (int)simple_crypt($id , 'd');
		$row = $this->site->run_sql("SELECT u.email, u.status, p.*
 		FROM users u JOIN parents p ON ( u.id = p.uid) WHERE u.id = '".$id."' ")->row();
		if( $id && $row ){
			$p['parent'] = $row;
			$this->load->view('admin/view_parent', $p);
		}else{
			$this->session->set_flashdata('error_msg', "Sorry, the parent account you're looking for can't be found.");
			redirect($_SERVER['HTTP_REFERER']);
		}
    }
}
