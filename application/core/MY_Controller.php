<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		// Get the general settings
		if ($this->session->userdata('logged_in')) {
			$user_group = $this->session->userdata('user_group');
			$role = $this->session->userdata('role');
			// which controller are you accessing?
			$controller = $this->uri->segment(1);
			$url = $this->uri->uri_string();
			// var_dump($controller);exit;
			if ($role < 2) {
				if ($controller !== $user_group) {
					redirect($user_group);
				}
			} else {
				$role = $this->db->where("id", $role)->get("roles")->row();
				$actions = explode(",", $role->roles);
				$urls = ["admin"];
				foreach ($actions as $a) {
					$m = $this->db->where("id", $a)->get("modules")->row();
					if ($m->url != "" || $m->url != null) {
						array_push($urls, "admin/$m->url");
					}
					$sm = $this->db->where("mid", $m->id)->get("submodules")->result();
					if (count($sm) > 0) {
						foreach ($sm as $s) {
							array_push($urls, "admin/$s->url");
						}
					}
				}
				if (!in_array($url, $urls)) {
					$this->session->set_flashdata('error_msg', "You have no authorization to view the requested url.");
					redirect($user_group);
				}
			}
		} else {
			redirect('logout');
		}
	}
}
