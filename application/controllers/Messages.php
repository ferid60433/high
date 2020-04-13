<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Messages extends MY_Controller{

    public function __construct(){
        parent::__construct();
        if (strtolower($this->uri->segment(1)) == "messages") show_404();
    }

    public function index(){
    	$uid = $this->session->userdata('logged_id');
        $p["title"] = "All Messages";
        $p["page"] = "Messages";
        $p["msg_view"] = "Conversations";
		$messages = $this->site->run_sql("SELECT * FROM message_thread WHERE status = 'active' AND (receiver LIKE '%{$uid}%' OR creator = '{$uid}')")->result();
		$output = array();
		if( $messages ){
			foreach( $messages as $message ){
				$thread_count = $this->site->count_row('messaging', array('thread' => $message->id));
				$res['respond_count'] = $thread_count;
				$res['id'] = $message->id;
				$res['status'] = $message->status;
				$res['title'] = $message->title;
				$res['date_created'] = strtoupper(neatDate($message->date_created) . ' ' . neatTime( $message->date_created ));
				$last_row = $this->site->run_sql("SELECT m.sender, u.user_group, u.title last_sender_name, m.date_time FROM messaging m 
				JOIN users u ON (u.id = m.sender)
				WHERE m.thread = {$message->id} ORDER BY m.id DESC LIMIT 1")->row();
				$res['last_sender_name'] = $last_row->last_sender_name;
				if( $last_row->user_group != 'admin' ){
					$user = $this->site->get_row( $last_row->user_group .'s', 'name', array('uid' => $last_row->sender) )->name;
					$res['last_sender_name'] = $user;
				}
				$res['last_message_time'] = strtoupper(neatDate($last_row->date_time) . ' ' . neatTime( $last_row->date_time));
				array_push( $output, $res);
			}
		}
		$p['messages'] = $output;
		$this->load->view('admin/messages', $p);
    }

    public function drafts(){
		$uid = $this->session->userdata('logged_id');
        $p["title"] = "Draft Messages";
        $p["page_mother"] = "Messages";
        $p["page"] = $p["msg_view"] = "Drafts";
		$messages = $this->site->run_sql("SELECT * FROM message_thread WHERE status = 'draft' AND (receiver LIKE '%{$uid}%' OR creator = '{$uid}')")->result();
		$output = array();
		if( $messages ){
			foreach( $messages as $message ){
				$thread_count = $this->site->count_row('messaging', array('thread' => $message->id));
				$res['respond_count'] = $thread_count;
				$res['id'] = $message->id;
				$res['status'] = $message->status;
				$res['title'] = $message->title;
				$res['date_created'] = strtoupper(neatDate($message->date_created) . ' ' . neatTime( $message->date_created ));
				$last_row = $this->site->run_sql("SELECT m.sender, u.user_group, u.title last_sender_name, m.date_time FROM messaging m 
				JOIN users u ON (u.id = m.sender)
				WHERE m.thread = {$message->id} ORDER BY m.id DESC LIMIT 1")->row();
				$res['last_sender_name'] = $last_row->last_sender_name;
				if( $last_row->user_group != 'admin' ){
					$user = $this->site->get_row( $last_row->user_group .'s', 'name', array('uid' => $last_row->sender) )->name;
					$res['last_sender_name'] = $user;
				}
				$res['last_message_time'] = strtoupper(neatDate($last_row->date_time) . ' ' . neatTime( $last_row->date_time));
				array_push( $output, $res);
			}
		}
		$p['messages'] = $output;
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
			$sender = $this->session->userdata('logged_id');
			$user_group = $this->input->post('user_group');
			$subject = $this->input->post('subject', true);
			$message = $this->input->post('message', true);
			$status = ( $this->input->post('post_type') == 'draft' ) ? 'draft' : 'active';
			$receiver = '';
			$array = array(
				'sender' => $sender,
				'message' => $message,
				'date_time' => get_now()
			);

			if( $user_group == 'student' ) {
				$this->form_validation->set_rules('class', 'Class','trim|required|xss_clean');
				$this->form_validation->set_rules('section', 'Section','trim|required|xss_clean');
				if( $this->form_validation->run() == false ){
					$this->session->set_flashdata('error_msg', validation_errors());
					$this->load->view('admin/compose_message', $p);
					return;
				}else{
					$section_id = $this->input->post('section', true);
					$students = $this->site->get_result('students', 'uid', array('sid' => $section_id));
					foreach ( $students as $student ){
						$receiver .= $student->uid . '|';
					}
					$receiver = rtrim( $receiver, '|');
					$array['receiver'] = $receiver;
				}
			}else{
				$receiver = $this->input->post('receiver');
				$array['receiver'] = $receiver;
			}
			$this->db->trans_start();
			$thread_id = $this->site->insert_data('message_thread', array(
				'creator' => $sender,
				'receiver' => $array['receiver'],
				'title' => $subject,
				'date_created' => get_now(),
				'status' => $status
			));
			$array['thread'] = $thread_id;
			$this->site->insert_data('messaging', $array);
			$this->db->trans_complete();
			if ($this->db->trans_status() === FALSE){
				$this->session->set_flashdata('error_msg', "There was an error creating the message thread.");
				$this->db->trans_rollback();
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				$this->db->trans_commit();
				$this->session->set_flashdata('success_msg', "Message Thread created and sent to the receiver(s).");
				redirect(base_url('admin/messages/view/' . simple_crypt($thread_id)));
			}
			redirect($_SERVER['HTTP_REFERER']);
		}
        $this->load->view('admin/compose_message', $p);
    }

    public function view( $id = '' ){
        $p["title"] = "View Message";
        $p["page_mother"] = "Messages";
        $p["page"] = "View";
        $uid = $this->session->userdata('logged_id');
        $id = simple_crypt( $id, 'd');
        $thread_detail = $this->site->get_row('message_thread', '*', array('id' => $id));
		if( empty( $id ) || !$thread_detail ) {
			$this->session->set_flashdata('error_msg', 'The message thread you are looking for can not be found or not active');
			redirect($_SERVER['HTTP_REFERER']);
		}
		if( $_POST ){
			$message = $this->input->post('message', true);
			$receivers = '';
			$last_row = $this->site->run_sql("SELECT receiver, sender FROM messaging WHERE thread = {$id} ORDER BY id DESC LIMIT 1 ")->row();
			if( $last_row->sender == $uid ){
				$receivers = $last_row->receiver;
			}else{
				$explode = explode( '|', $last_row->receiver);
				$receivers = array_diff( $explode, array($uid));
			}
			$data_array = array(
				'message' => $message,
				'receiver' => $receivers,
				'sender' => $uid,
				'thread' => $id,
				'date_time' => get_now(),
			);
			if( $this->site->insert_data('messaging', $data_array)){
				$this->session->set_flashdata('success_msg', 'Message has been added.');
			}else{
				$this->session->set_flashdata('error_msg', 'An error occured when sending your message.');
			}
			redirect($_SERVER['HTTP_REFERER']);
		}
		$p['thread_detail'] = $thread_detail;
		$uid = $this->session->userdata('logged_id');
		$messages = $this->site->run_sql("SELECT * FROM messaging WHERE thread = {$id} AND ( receiver = {$uid} OR sender = {$uid}) ORDER BY id ASC")->result();
		$message_array = array();
		foreach( $messages as $message ){
			$res['message_id'] = $message->id;
			$res['sender'] = $message->sender;
			$res['receiver'] = $message->receiver;
			$res['message'] = $message->message;
			$res['timestamp'] = neatDate( $message->date_time) . ' ' . neatTime( $message->date_time );
			$res['sender_title'] = 'Me';
			if( $message->sender != $uid ){
				$user = $this->site->get_row('users', 'user_group, title', array('id' => $message->sender));
				if( $user->user_group != 'admin' ){
					$res['sender_title'] = $this->site->get_row( $user->user_group .'s', 'name', array('uid' => $message->sender))->name;
				}
			}
//			if( $message->receiver != $uid ){
//
//				$user = $this->site->get_row('users', 'user_group, title', array('id' => $message->receiver));
//				if( $user->user_group != 'admin' ){
//					$res['receiver_title'] = $this->site->get_row( $user->user_group .'s', 'name', array('uid' => $message->receiver))->name;
//				}
//			}
			array_push( $message_array, $res);
		}
		$p['messages'] = $message_array;
        $this->load->view('admin/view_message', $p);
    }
}
