<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Subjects extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (strtolower($this->uri->segment(1)) == "subjects") show_404();
    }
    public function index()
    {
        $p["title"] = "All Subjects";
        $p["page"] = "Subjects";
		$p['classes'] = $this->site->get_result('classes', 'id,name');
        $this->load->view('admin/subjects', $p);
    }
    public function add(){
		$user_group = $this->session->userdata('user_group');
        $p["title"] = "Add New Subject";
        $p["page_mother"] = "Subjects";
        $p["page"] = "Add";
		$p['teachers'] = $this->site->get_result('teachers', 'id, name');
		$p['classes'] = $this->site->get_result('classes', 'id, name');
		if( $this->input->post()){
			$this->form_validation->set_rules('subject', 'Subject','trim|required|xss_clean');
			$this->form_validation->set_rules('teacher', 'Teacher','trim|required|xss_clean');
			$this->form_validation->set_rules('class', 'Teacher','trim|required|xss_clean');
			$this->form_validation->set_rules('pass_mark', 'Pass Mark','trim|required|xss_clean');
			$this->form_validation->set_rules('final_mark', 'Final Mark','trim|required|xss_clean');
			$this->form_validation->set_rules('code', 'Subject Code','trim|required|xss_clean');
			if( $this->form_validation->run() == false ){
				$this->session->set_flashdata('error_msg', validation_errors());
				$this->load->view('admin/add_subject', $p);
				return;
			}else{
				$data = array(
					'subject' => $this->input->post('subject'),
					'cid' => $this->input->post('class'),
					'tid' => $this->input->post('teacher'),
					'type' => $this->input->post('type'),
					'pass_mark' => $this->input->post('pass_mark'),
					'final_mark' => $this->input->post('final_mark'),
					'author' => $this->input->post('author'),
					'code' => $this->input->post('code'),
				);
				$this->db->trans_start();
				$sub_id = $this->site->insert_data('subjects', $data);
				if( !is_numeric($sub_id) ) {
					$this->session->set_flashdata('error_msg', "Sorry! There was an error creating the subject. ");
					$this->load->view('admin/add_subject', $p);
					return;
				}else{
					$on_page = $this->input->post('on_page');
					$this->db->trans_commit();
					$this->session->set_flashdata('success_msg', "The Subject (" .$this->input->post('name'). ") has been added successfully. " );
					( $on_page === "on" ) ?
						$this->load->view('admin/add_subject', $p) :
						redirect($user_group.'/subjects/add/');

				}
			}
		}else{
			$this->load->view('admin/add_subject', $p);
		}
    }

	function get_subjects(){
		if (!$this->input->is_ajax_request()) { redirect(base_url());}
		header('Content-type: text/json');
		header('Content-type: application/json');
		$response['status'] = false;
		$id = $this->input->post('selected');
		if( !empty( $id )){
			$subjects = $this->site->run_sql("SELECT s.*,t.name as teacher,c.name as class FROM subjects s 
			JOIN teachers t ON (t.id = s.tid)
			JOIN classes c ON (c.id = s.cid)
			WHERE s.cid = '".$id."'
			 ORDER BY s.id DESC")->result();
			$resarray = array();
			if( $subjects ){
				$x = 1; $response['status'] = true;
				foreach( $subjects as $s ){
					$res['sn'] = $x;
					$res['id'] = $s->id;
					$res['subject'] = strtoupper($s->subject);
					$res['author'] = strtoupper($s->author);
					$res['code'] = strtoupper($s->code);
					$res['teacher'] = strtoupper($s->teacher);
					$res['pass_mark'] = $s->pass_mark;
					$res['final_mark'] = $s->final_mark;
					$res['type'] = statusLabel($s->type);
					$edit_btn = '<a class="btn btn-outline-warning" href="'. base_url('admin/subjects/edit/' . simple_crypt($s->id)).'">Edit</a> |';
					$del_btn = '<a class="btn btn-outline-danger" href="'. base_url('admin/subjects/delete/' . simple_crypt($s->id)).'">Delete</a>';
					$res['actions'] = $edit_btn . $del_btn;
					array_push( $resarray, $res );
					$x++;
				}
				$response['message'] = $resarray;
				echo json_encode( $response );exit;
			}
		}
	}
}
