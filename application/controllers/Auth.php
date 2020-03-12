<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if( $this->session->userdata('logged_in') ){
			$from = cleanit( $this->session->userdata('from') );
			if( !empty( $from) ){
				redirect($from);
			}else{
				redirect('start');
			}
		}
	}
	public function index(){
        $p["title"] = "Login";
		$this->form_validation->set_rules('email', 'Email Address','trim|required|valid_email|xss_clean');
		$this->form_validation->set_rules('password', 'Password','trim|required|xss_clean|min_length[6]|max_length[15]');
		if( $this->form_validation->run() == false ){
			$this->session->set_flashdata('error_msg', validation_errors());
			$this->load->view('accounts/login', $p);
			return;
		}else{
			$data = array(
				'email' => $this->input->post('email', true),
				'password' => $this->input->post('password', true)
			);
			$response = $this->user->login($data);
			$this->login_switch( $response );
			$this->load->view('accounts/login', $p);
		}
	}
	protected function login_switch( $res ){
		if( !$res['status'] ) {
			switch ($res['string'] ){
				case 'password_mismatch':
					$this->session->set_flashdata('error_msg', 'Password does not match.');
					break;
				case 'email_not_found':
					$this->session->set_flashdata('error_msg', 'Email address can not be found.');
					break;
			}
		}else{
			// switch the user module
			$this->session->set_flashdata('success_msg', 'Logged in successfully.');
			$from = cleanit( $this->session->userdata('from') );
			$user = $res['string'];
			$user_group = $user->user_group;
			$session_data = array(
				'logged_in' => true,
				'logged_id' => $user->id,
				'email' => $user->email,
				'user_group' => $user_group,
				'role' => $user->role
			);
			$this->session->set_userdata($session_data);
			isset( $from ) ?
					redirect( $from )
				:
				redirect( $user_group);
//				( $user_type == 'admin')
//					? redirect('admin') :
//					redirect($user_type.'s');
		}
	}

	public function create(){
		$p["title"] = "create";
		if( $this->input->post() ){
			// dummy registration
			$salt = salt(50);
			$data = array(
				'email' => $_POST['email'],
				'password' => shaPassword($this->input->post('password'), $salt),
				'salt' => $salt,
				'user_group' => 'admin',
				'role' => '2',
				'ip' => $_SERVER['REMOTE_ADDR'],
				'date_registered' => get_now(),
				'last_login' => get_now(),
			);
			$user = $this->user->create_account($data);
			if( !is_numeric($user) ) {
				$this->session->set_flashdata('error_msg', "Sorry! There was an error creating the account. " . $user);
				$this->load->view('accounts/login', $p);
			}else{
				$this->session->set_flashdata('success_msg', "Account created successfully.");
				redirect('auth');
			}
		}else{
			$this->load->view('accounts/create', $p);
		}
	}


}
