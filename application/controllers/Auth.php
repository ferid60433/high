<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
        $p["title"] = "Login";
		$this->load->view('accounts/login', $p);
	}
	public function logout()
	{
		redirect(base_url());
	}
}
