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
				'username' => $this->input->post('email', true),
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
			$this->sesion->set_flashdata('success_msg', 'Logged in successfully.');
			$from = cleanit( $this->session->userdata('from') );
			$user = $res['string'];
			$user_type = $user->user_type;
			$session_data = array(
				'logged_in' => true,
				'logged_id' => $user->id,
				'email' => $user->email,
				'user_type' => $user_type,
				'role' => $user->role
			);
			$this->session->set_userdata($session_data);
			isset( $from ) ?
					redirect( $from )
				:
				( $user_type == 'admin')
					? redirect('admin') :
					redirect($user_type.'s');
		}
	}

}
