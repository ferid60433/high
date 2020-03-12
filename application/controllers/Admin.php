<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends My_Controller
{
    public function __construct(){
        parent::__construct();
		if( $this->session->userdata('logged_in') ){
			$user_group = $this->session->userdata('user_group');
			if( $user_group !== 'admin') redirect('logout');
		}else{
			redirect('logout');
		}
    }

    public function index(){
        $p["active"] = "dashboard";
        $p["title"] = "Admin Dashboard";
		$count = $this->site->count_row('users');
        $this->load->view('admin/index', $p);
    }
}
