<?php
defined('BASEPATH') or exit('No direct script access allowed');
class OExams extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		if (strtolower($this->uri->segment(1)) == "oexams") show_404();
	}
	public function index()
	{
		$p["title"] = "Online Exams";
		$p["page"] = "Online Exams";
		$p['exams'] = $this->site->get_result('oexam', 'id, title,published', array('id' => $this->session->userdata('logged_id')));
		$this->load->view('admin/oexams', $p);
	}

	public function questions($exam_id)
	{
		$exam_id = simple_crypt($exam_id, 'd');
		$row = $this->site->get_row('oexam', '*', array('id' => $exam_id));
		if (!$exam_id || !$row) {
			show_404();
		}
		$result = $this->site->run_sql("SELECT o.*, cl.name class_name, se.name section_name, su.subject
		FROM oexam o JOIN classes cl ON (cl.id = o.cid) 
		LEFT JOIN sections se ON (se.id = o.sid)
		LEFT JOIN subjects su ON (su.id = o.subject)
		WHERE o.id = '" . $exam_id . "' ")->row();
		$p['exam'] = $result;

		$questions = $this->site->get_result('oexam_question', '*', array('oexam_id' => $exam_id));
		$output = array();
		foreach ($questions as $q) {
			$res['id'] = $q->id;
			$bank = $this->site->get_row('oexam_questions', 'question,id,question_type,mark', array('id' => $q->question_id));
			$res['question'] = $bank->question;
			$res['question_type'] = $bank->question_type;
			$res['mark'] = $bank->mark;
			$options = $this->site->run_sql("SELECT GROUP_CONCAT(CONCAT(option_value, '||',is_answer) SEPARATOR '---') as options FROM oexam_options
			WHERE qid = '" . $bank->id . "' GROUP BY qid")->row()->options;
			$res['options'] = $options;
			array_push($output, $res);
		}
		$p['aquestions'] = $output;

		if ($_POST) {
			$post_type = $this->input->post('post_type');
			if ($post_type == 'filter_form') {
				$group_id = $this->input->post('group');
				$level_id = $this->input->post('level');
				$p['group'] = $group_id;
				$p['level'] = $level_id;
				$query = "SELECT o.id,o.question,o.question_type FROM oexam_questions o 
			WHERE NOT EXISTS( SELECT * FROM oexam_question WHERE oexam_id = o.id) AND ";
				if (!empty($group_id)) {
					$query .= " o.qgroup = '" . $group_id . "' ";
				} elseif (!empty($level_id)) {
					$query .= " o.level = '" . $level_id . "' ";
				} elseif (!empty($group_id) && !empty($level_id)) {
					$query .= " o.qgroup = '" . $group_id . "' AND o.level = '" . $level_id . "' ";
				}
				$query .= " ORDER BY o.id DESC";
				$questions = $this->site->run_sql($query)->result();
				$p['questions'] = $questions;
			} elseif ($post_type == 'add_question') {
				$data = array(
					'oexam_id' => $this->input->post('exam_id'),
					'question_id' => $this->input->post('question_id'),
				);
				if ($this->site->insert_data('oexam_question', $data)) {
					$this->session->set_flashdata('success_msg', 'The Question has been added to the exam successfully.');
				} else {
					$this->session->set_flashdata('error_msg', 'There was an error submitting the question.');
				}
				redirect($_SERVER['HTTP_REFERER']);
			} elseif ($post_type == 'remove_question') {
				try {
					$id = $this->input->post('question_id', true);
					if ($this->site->delete('oexam_question', array('id' => $id))) {
						$this->session->set_flashdata('success_msg', 'The question has been removed from the question bank.');
					}
				} catch (Exception $e) {
					$this->session->set_flashdata('error_msg', 'There was an error removing the question from the bank.');
				}
				redirect($_SERVER['HTTP_REFERER']);
			}
		}
		$p["title"] = "Online Exam Question Bank";
		$p["page_mother"] = "OExams";
		$p["page_mother_name"] = "Online Exams";
		$p["page"] = "Add Question Bank";
		$p['groups'] = $this->site->get_result('oexam_group', 'id, title');
		$p['levels'] = $this->site->get_result('oexam_level', 'id, title');
		$this->load->view('admin/add_questions', $p);
	}
	/*
     * Add new Online Examination
     * */
	public function add()
	{
		$p["title"] = "Add New Online Exam";
		$p["page_mother"] = "OExams";
		$p["page_mother_name"] = "Online Exams";
		$p["page"] = "Add";
		$p['classes'] = $this->site->get_result('classes', 'id,name');
		$this->form_validation->set_rules('title', 'Exam Title', 'trim|required|xss_clean');
		$this->form_validation->set_rules('cid', 'class', 'trim|required|xss_clean');
		$this->form_validation->set_rules('subject', 'Subject', 'trim|required|xss_clean');
		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('error_msg', validation_errors());
			$this->load->view('admin/add_oexams', $p);
			return;
		} else {
			$data = array(
				'title' => $this->input->post('title', true),
				'description' => $this->input->post('description', true),
				'cid' => $this->input->post('cid', true),
				'sid' => $this->input->post('sid', true),
				'subject' => $this->input->post('subject', true),
				'instruction' => $this->input->post('instruction', true),
				'duration' => $this->input->post('duration', true),
				'exam_status' => $this->input->post('exam_status', true),
				'start_date' => date('Y-m-d', strtotime($this->input->post('start_date', true))),
				'start_time' => date('H:i:s', strtotime($this->input->post('start_time', true))),
				'end_time' => date('H:i:s', strtotime($this->input->post('end_time', true))),
				'mark_type' => $this->input->post('mark_type', true),
				'exam_type' => $this->input->post('exam_type', true),
				'pass_mark' => $this->input->post('pass_mark', true),
				'negative_mark' => $this->input->post('negative_mark', true),
				'random' => $this->input->post('random', true),
				'published' => $this->input->post('published', true),
				'uid' =>  $this->session->userdata('logged_id'),
			);
			$url = $this->site->generate_code('oexam', 'url');
			$data['url'] = $url;

			if ($this->site->insert_data('oexam', $data)) {
				$link = anchor(base_url('cbt/' . $url), 'Exam link');
				$this->session->set_flashdata('success_msg', 'Success: The exam has been posted successfully. ' . $link);
				redirect($_SERVER['HTTP_REFERER']);
			} else {
				$this->session->set_flashdata('error_msg', 'Error: There was an error posting the exam. Please try again, and if error persist. contact webmaster.');
				$this->load->view('admin/add_oexams', $p);
				return;
			}
		}
	}

	/*
     * Add banks edit bank and show lists of question bank
     * */
	public function bank($act = "")
	{
		$uid = $this->session->userdata('logged_in');
		$p['page_action'] = '';
		$p["title"] = "Online Exam Question Bank";
		$p["page_mother"] = "OExams";
		$p["page_mother_name"] = "Online Exams";
		$p["page"] = "Question Bank";
		if (strtolower($act) == "add") {
			$p['page_action'] = 'add';
			$p['groups'] = $this->site->get_result('oexam_group', '*', array('created_by' => $uid));
			$p['levels'] = $this->site->get_result('oexam_level', '*', array('created_by' => $uid));

			$this->form_validation->set_rules('question', 'Question', 'trim|required|xss_clean');
			if ($this->form_validation->run() == false) {
				$this->session->set_flashdata('error_msg', validation_errors());
				$this->load->view('admin/oexams_bank', $p);
				return;
			} else {

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
				if (is_numeric($qid)) {
					// lets switch the question type single answer = 1 , multi answer = 2, fill in the gap = 3
					$option = $this->input->post('option');
					$option_count = count($option);
					$answer = $this->input->post('answer');
					$option_array = array();

					for ($x = 0; $x < $option_count; $x++) {
						$res['qid'] = $qid;
						$res['option_value'] = trim($option[$x]);
						$y = 'answer_' . ($x + 1);
						$res['is_answer'] =  ($this->input->post($y) == 'on') ?  1 : 0;
						array_push($option_array, $res);
					}
					$this->site->insert_batch('oexam_options', $option_array);
					$this->db->trans_complete();
					if ($this->db->trans_status() === FALSE) {
						$this->session->set_flashdata('error_msg', "There was an error creating the parent' account.");
						$this->db->trans_rollback();
						$this->load->view('admin/oexams_bank', $p);
						return;
					} else {
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
			LEFT JOIN oexam_level l ON (l.id = q.level) WHERE q.uid = '" . $uid . "' ORDER BY q.id DESC ")->result();
			$this->load->view('admin/oexams_bank', $p);
		} else {
			show_404();
		}
	}


	private function view_bank()
	{
		$p["title"] = "View Online Exam Question Bank";
		$p["page_mother"] = "OExams";
		$p["page_mother_name"] = "Online Exams";
		$p["page_inner"] = "bank";
		$p["page_inner_name"] = "Question Bank";
		$p["page"] = "View";
		$id = (int) simple_crypt($this->uri->segment(5), "d");
		$row = $this->site->run_sql("SELECT q.*, g.title group_title, l.title level_title FROM oexam_questions q 
		JOIN oexam_group g ON (g.id = q.qgroup) 
		LEFT JOIN oexam_level l ON (l.id = q.level) WHERE q.id = '" . $id . "' ORDER BY q.id DESC ")->row();
		if ($id && $row) {
			$p['q'] = $row;
			$this->load->view('admin/view_oexams_bank', $p);
		} else {
			$this->session->set_flashdata('error_msg', "Sorry, the question you're looking for can't be found.");
			redirect($_SERVER['HTTP_REFERER']);
		}
	}

	public function groups($act = "", $gid = "")
	{
		$p["title"] = "Online Exam Question Groups";
		$p["page_mother"] = "OExams";
		$p["page_mother_name"] = "Online Exams";
		$p["page"] = "Question Groups";
		$p['action_type'] = '';
		$uid = $this->session->userdata('logged_id');
		if (strtolower($act) == "add") {
			$p['action_type'] = 'add';
			$this->form_validation->set_rules('title', 'Title', 'trim|required|xss_clean');
			if ($this->form_validation->run() == false) {
				$this->session->set_flashdata('error_msg', validation_errors());
				$this->load->view('admin/oexams_group', $p);
				return;
			} else {
				$data = array(
					'title' => trim($this->input->post('title')),
					'created_by' => $uid,
				);
				if ($this->site->insert_data('oexam_group', $data)) {
					$this->session->set_flashdata('success_msg', 'The exam group has been created.');
					redirect('admin/oexams/groups');
				} else {
					$this->session->set_flashdata('error_msg', 'There was an error creating the exam group.');
					$this->load->view('admin/oexams_group', $p);
					return;
				}
			}
		} elseif (strtolower($act == 'edit')) {
			$p['action_type'] = 'edit';
			$gid = simple_crypt($gid, 'd');
			$row = $this->site->get_row('oexam_group', 'id,title', array('id' => $gid));
			if (!$row) {
				$this->session->set_flashdata('error_msg', "The group name you are looking for doesn't exist, or you don't have access to it. ");
				redirect('admin/groups');
			} else {
				$p['group_title'] = $row->title;
			}
			$this->form_validation->set_rules('title', 'Title', 'trim|required|xss_clean');
			if ($this->form_validation->run() == false) {
				$this->session->set_flashdata('error_msg', validation_errors());
				$this->load->view('admin/oexams_group', $p);
				return;
			} else {
				$data = array(
					'title' => trim($this->input->post('title')),
				);
				if ($this->site->update('oexam_group', $data, array('id' => $gid))) {
					$this->session->set_flashdata('success_msg', 'The exam group has been updated successfully..');
					redirect('admin/oexams/groups');
				} else {
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

	public function levels($act = "", $gid = '')
	{
		$p["title"] = "Online Exam Question Levels";
		$p["page_mother"] = "OExams";
		$p["page_mother_name"] = "Online Exams";
		$p["page"] = "Question Levels";
		$p['action_type'] = '';
		$uid = $this->session->userdata('logged_id');
		if (strtolower($act) == "add") {
			$p['action_type'] = 'add';
			$this->form_validation->set_rules('title', 'Title', 'trim|required|xss_clean');
			if ($this->form_validation->run() == false) {
				$this->session->set_flashdata('error_msg', validation_errors());
				$this->load->view('admin/oexams_level', $p);
				return;
			} else {
				$data = array(
					'title' => trim($this->input->post('title')),
					'created_by' => $uid,
				);
				if ($this->site->insert_data('oexam_level', $data)) {
					$this->session->set_flashdata('success_msg', 'The exam question level has been created.');
					redirect('admin/oexams/levels');
				} else {
					$this->session->set_flashdata('error_msg', 'There was an error creating the exam group.');
					$this->load->view('admin/oexams_level', $p);
					return;
				}
			}
		} elseif (strtolower($act == 'edit')) {
			$p['action_type'] = 'edit';
			$gid = simple_crypt($gid, 'd');
			$row = $this->site->get_row('oexam_level', 'id,title', array('id' => $gid));
			if (!$row) {
				$this->session->set_flashdata('error_msg', "The group name you are looking for doesn't exist, or you don't have access to it. ");
				redirect('admin/oexams_level');
			} else {
				$p['level_title'] = $row->title;
			}
			$this->form_validation->set_rules('title', 'Title', 'trim|required|xss_clean');
			if ($this->form_validation->run() == false) {
				$this->session->set_flashdata('error_msg', validation_errors());
				$this->load->view('admin/oexams_level', $p);
				return;
			} else {
				$data = array(
					'title' => trim($this->input->post('title')),
				);
				if ($this->site->update('oexam_level', $data, array('id' => $gid))) {
					$this->session->set_flashdata('success_msg', 'The exam level has been updated successfully..');
					redirect('admin/oexams/levels');
				} else {
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
}
