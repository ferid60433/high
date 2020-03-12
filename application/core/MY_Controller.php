<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    function __construct() {
        parent::__construct();
        // Get the general settings
		if( $this->session->userdata('logged_in') ){
			$user_group = $this->session->userdata('user_group');
			// which controller are you accessing?
			$controller = $this->uri->segment(1);
			if( $controller !== $user_group){redirect($user_group);}
		}else{
			redirect('logout');
		}

		if(strtolower($this->uri->segment(1)) == "parents") show_404();
    }
}
