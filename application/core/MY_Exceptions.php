<?php
// application/core/MY_Exceptions.php
class MY_Exceptions extends CI_Exceptions {

    public function show_404($page = '', $log_error = TRUE)
    {
        $CI =& get_instance();
        $CI->output->set_status_header('404');
        $CI->load->view('err/_404');
        echo $CI->output->get_output();
        exit;
    }
}