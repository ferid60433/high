<?php
defined('BASEPATH') or exit('No direct script access allowed');
class OExams extends MY_Controller{

	public function index(){
        $p["title"] = "Online Exams";
        $p["page"] = "Online Exams";
        $this->load->view('admin/oexams', $p);
    }

    public function questions(){
        $p["title"] = "Online Exam Question Bank";
        $p["page_mother"] = "OExams";
        $p["page_mother_name"] = "Online Exams";
        $p["page"] = "Add Question Bank";
        $this->load->view('admin/add_questions', $p);
    }

    public function instructions($act = ""){
        if (strtolower($act) == "add") {
            $this->add_instruction();
        } elseif ($act == "view") {
            $this->view_instruction();
        } elseif ($act == "edit") {
            // $this->edit_instruction();
        } elseif ($act == "") {
            $p["title"] = "Online Exam Instructions";
            $p["page_mother"] = "OExams";
            $p["page_mother_name"] = "Online Exams";
            $p["page"] = "Instructions";
            $this->load->view('admin/instructions', $p);
        } else {
            show_404();
        }
    }
    private function view_instruction()
    {
        $p["title"] = "View Online Exam Instruction";
        $p["page_mother"] = "OExams";
        $p["page_mother_name"] = "Online Exams";
        $p["page_inner"] = "instructions";
        $p["page_inner_name"] = "Instructions";
        $p["page"] = "View";
        $this->load->view('admin/view_oexams_instruction', $p);
    }
    private function add_instruction()
    {
        $p["title"] = "Add Online Exam Instruction";
        $p["page_mother"] = "OExams";
        $p["page_mother_name"] = "Online Exams";
        $p["page_inner"] = "instructions";
        $p["page_inner_name"] = "Instructions";
        $p["page"] = "Add";
        $this->load->view('admin/add_oexams_instruction', $p);
    }
    public function add(){
        $p["title"] = "Add New Online Exam";
        $p["page_mother"] = "OExams";
        $p["page_mother_name"] = "Online Exams";
        $p["page"] = "Add";
		$p['classes'] = $this->site->get_result('classes', 'id,name');

		$this->form_validation->set_rules('cid', 'class', 'trim|required|xss_clean');
		$this->form_validation->set_rules('subject', 'Subject', 'trim|required|xss_clean');
		if( $this->form_validation->run() == false ){
			$this->session->set_flashdata('error_msg', validation_errors());
			$this->load->view('admin/add_oexams', $p);
			return;
		}else{

		}

    }

    /*
     * Add banks edit bank and show lists of question bank
     * */
    public function bank($act = ""){
		$uid = $this->session->userdata('logged_in');
		$p['page_action'] = '';
		$p["title"] = "Online Exam Question Bank";
		$p["page_mother"] = "OExams";
		$p["page_mother_name"] = "Online Exams";
		$p["page"] = "Question Bank";
        if (strtolower($act) == "add") {
			$p['page_action'] = 'add';
			$p['groups'] = $this->site->get_result('oexam_group', '*', array('created_by' => $uid ));
			$p['levels'] = $this->site->get_result('oexam_level', '*', array('created_by' => $uid ));

			$this->form_validation->set_rules('question', 'Question','trim|required|xss_clean');
			if( $this->form_validation->run() == false ){
				$this->session->set_flashdata('error_msg', validation_errors());
				$this->load->view('admin/oexams_bank', $p);
				return;
			}else{

				$data = array(
					'qgroup' => $this->input->post('group'),
					'level' => $this->input->post('level'),
					'question' => $this->input->post('question', true),
					'hint' => $this->input->post('hint', true),
					'mark' => $this->input->post('mark', true),
					'uid' => $uid
				);
				$type = $this->input->post('type');
				$data['question_type'] = $type;
				$this->db->trans_start();
				$qid = $this->site->insert_data('oexam_questions', $data);
				if( is_numeric( $qid ) ) {
					// lets switch the question type single answer = 1 , multi answer = 2, fill in the gap = 3
					$option = $this->input->post('option');
					$option_count = count( $option );
					$answer = $this->input->post('answer');
					$option_array = array();

					for( $x = 0; $x < $option_count; $x++){
						$res['qid'] = $qid;
						$res['option_value'] = trim( $option[$x] );
						$y = 'answer_' . ($x + 1);
						$res['is_answer'] =  ( $this->input->post($y) == 'on' )?  1 : 0;
						array_push( $option_array, $res);
					}
					$this->site->insert_batch('oexam_options', $option_array );
					$this->db->trans_complete();
					if ($this->db->trans_status() === FALSE){
						$this->session->set_flashdata('error_msg', "There was an error creating the parent' account.");
						$this->db->trans_rollback();
						$this->load->view('admin/oexams_bank', $p);
						return;
					}else{
						$this->db->trans_commit();
						$this->session->set_flashdata('success_msg', "Exam question has been added successfully.");
						redirect('admin/oexams/bank/');
					}
				}

			}

        } elseif ($act == "view") {
            $this->view_bank();
        } elseif ($act == "edit") {
            // $this->edit_bank();
        } elseif ($act == "") {
        	$p['questions'] = $this->site->run_sql("SELECT q.*, g.title group_title, l.title level_title FROM oexam_questions q 
			JOIN oexam_group g ON (g.id = q.qgroup) 
			LEFT JOIN oexam_level l ON (l.id = q.level) WHERE q.uid = '".$uid."' ORDER BY q.id DESC ")->result();
			$this->load->view('admin/oexams_bank', $p);
        } else {
            show_404();
        }
    }


    private function view_bank(){
        $p["title"] = "View Online Exam Question Bank";
        $p["page_mother"] = "OExams";
        $p["page_mother_name"] = "Online Exams";
        $p["page_inner"] = "bank";
        $p["page_inner_name"] = "Question Bank";
        $p["page"] = "View";
        $this->load->view('admin/view_oexams_bank', $p);
    }

    public function groups($act = "", $gid = ""){
		$p["title"] = "Online Exam Question Groups";
		$p["page_mother"] = "OExams";
		$p["page_mother_name"] = "Online Exams";
		$p["page"] = "Question Groups";
		$p['action_type'] = '';
		$uid = $this->session->userdata('logged_id');
		if (strtolower($act) == "add") {
			$p['action_type'] = 'add';
			$this->form_validation->set_rules('title', 'Title','trim|required|xss_clean');
			if( $this->form_validation->run() == false ){
				$this->session->set_flashdata('error_msg', validation_errors());
				$this->load->view('admin/oexams_group', $p);
				return;
			}else{
				$data = array(
					'title' => trim($this->input->post('title')),
					'created_by' => $uid,
				);
				if( $this->site->insert_data('oexam_group', $data )){
					$this->session->set_flashdata('success_msg', 'The exam group has been created.');
					redirect('admin/oexams/groups');
				}else{
					$this->session->set_flashdata('error_msg', 'There was an error creating the exam group.');
					$this->load->view('admin/oexams_group', $p);
					return;
				}
			}
        }elseif( strtolower($act == 'edit')) {
			$p['action_type'] = 'edit';
			$gid = simple_crypt( $gid, 'd');
			$row = $this->site->get_row('oexam_group', 'id,title', array('id' => $gid));
			if( !$row ){
				$this->session->set_flashdata('error_msg', "The group name you are looking for doesn't exist, or you don't have access to it. ");
				redirect('admin/groups');
			}else{
				$p['group_title'] = $row->title;
			}
			$this->form_validation->set_rules('title', 'Title','trim|required|xss_clean');
			if( $this->form_validation->run() == false ){
				$this->session->set_flashdata('error_msg', validation_errors());
				$this->load->view('admin/oexams_group', $p);
				return;
			}else{
				$data = array(
					'title' => trim($this->input->post('title')),
				);
				if( $this->site->update('oexam_group', $data, array('id' => $gid) )){
					$this->session->set_flashdata('success_msg', 'The exam group has been updated successfully..');
					redirect('admin/oexams/groups');
				}else{
					$this->session->set_flashdata('error_msg', 'There was an error updating the exam group.');
					$this->load->view('admin/oexams_group', $p);
					return;
				}
			}
		} elseif ($act == "") {
            $p['groups'] = $this->site->get_result('oexam_group', '*');
            $this->load->view('admin/oexams_group', $p);
        } else {
            show_404();
        }
    }

    public function levels($act = "", $gid = ''){
		$p["title"] = "Online Exam Question Levels";
		$p["page_mother"] = "OExams";
		$p["page_mother_name"] = "Online Exams";
		$p["page"] = "Question Levels";
		$p['action_type'] = '';
		$uid = $this->session->userdata('logged_id');
		if (strtolower($act) == "add") {
			$p['action_type'] = 'add';
			$this->form_validation->set_rules('title', 'Title','trim|required|xss_clean');
			if( $this->form_validation->run() == false ){
				$this->session->set_flashdata('error_msg', validation_errors());
				$this->load->view('admin/oexams_level', $p);
				return;
			}else{
				$data = array(
					'title' => trim($this->input->post('title')),
					'created_by' => $uid,
				);
				if( $this->site->insert_data('oexam_level', $data )){
					$this->session->set_flashdata('success_msg', 'The exam question level has been created.');
					redirect('admin/oexams/levels');
				}else{
					$this->session->set_flashdata('error_msg', 'There was an error creating the exam group.');
					$this->load->view('admin/oexams_level', $p);
					return;
				}
			}
		}elseif( strtolower($act == 'edit')) {
			$p['action_type'] = 'edit';
			$gid = simple_crypt( $gid, 'd');
			$row = $this->site->get_row('oexam_level', 'id,title', array('id' => $gid));
			if( !$row ){
				$this->session->set_flashdata('error_msg', "The group name you are looking for doesn't exist, or you don't have access to it. ");
				redirect('admin/oexams_level');
			}else{
				$p['level_title'] = $row->title;
			}
			$this->form_validation->set_rules('title', 'Title','trim|required|xss_clean');
			if( $this->form_validation->run() == false ){
				$this->session->set_flashdata('error_msg', validation_errors());
				$this->load->view('admin/oexams_level', $p);
				return;
			}else{
				$data = array(
					'title' => trim($this->input->post('title')),
				);
				if( $this->site->update('oexam_level', $data, array('id' => $gid) )){
					$this->session->set_flashdata('success_msg', 'The exam level has been updated successfully..');
					redirect('admin/oexams/levels');
				}else{
					$this->session->set_flashdata('error_msg', 'There was an error updating the exam level.');
					$this->load->view('admin/oexams_level', $p);
					return;
				}
			}
		} elseif ($act == "") {
			$p['levels'] = $this->site->get_result('oexam_level', '*');
			$this->load->view('admin/oexams_level', $p);
		} else {
			show_404();
		}
    }

	private function add_bank(){
		$p["title"] = "Add Online Exam Question Bank";
		$p["page_mother"] = "OExams";
		$p["page_mother_name"] = "Online Exams";
		$p["page_inner"] = "bank";
		$p["page_inner_name"] = "Question Bank";
		$p["page"] = "Add";
		$this->load->view('admin/add_oexams_bank', $p);
	}

}
