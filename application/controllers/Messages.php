<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Messages extends MY_Controller{
    public function __construct(){
        parent::__construct();
        if (strtolower($this->uri->segment(1)) == "messages") show_404();
    }

    public function index(){
        $p["title"] = "All Messages";
        $p["page"] = "Messages";
        $p["msg_view"] = "Conversations";
        $this->load->view('admin/messages', $p);
    }
    public function drafts()
    {
        $p["title"] = "Draft Messages";
        $p["page_mother"] = "Messages";
        $p["page"] = $p["msg_view"] = "Drafts";
        $this->load->view('admin/messages', $p);
    }
    public function sent()
    {
        $p["title"] = "Sent Messages";
        $p["page_mother"] = "Messages";
        $p["page"] = $p["msg_view"] = "Sent";
        $this->load->view('admin/messages', $p);
    }
    public function trash()
    {
        $p["title"] = "Trash Messages";
        $p["page_mother"] = "Messages";
        $p["page"] = $p["msg_view"] = "Trash";
        $this->load->view('admin/messages', $p);
    }
    public function compose(){
        $p["title"] = "Compose Message";
        $p["page_mother"] = "Messages";
        $p["page"] = "Compose";
		$p['classes'] = $this->site->get_result('classes', 'id,name');
        $p['user_groups'] = $this->site->run_sql("SELECT DISTINCT(user_group) FROM users WHERE status = 'active' ")->result();
        if( $_POST ){
			var_dump($_POST);
			exit;
		}
        $this->load->view('admin/compose_message', $p);
    }
    public function view()
    {
        $p["title"] = "View Message";
        $p["page_mother"] = "Messages";
        $p["page"] = "View";
        $this->load->view('admin/view_message', $p);
    }
}
