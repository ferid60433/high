<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Ajax extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        if (strtolower($this->uri->segment(1)) == "sections") show_404();
    }
    public function index(){ redirect(base_url());}

	function get_sections(){
		if (!$this->input->is_ajax_request()) { redirect(base_url());}
		header('Content-type: text/json');
		header('Content-type: application/json');
		$response['status'] = false;
		$id = $this->input->post('selected');
		if( !empty( $id )){
			$sections = $this->site->run_sql("SELECT s.*,t.name as teacher,c.name as class FROM sections s 
		JOIN teachers t ON (t.id = s.tid)
		JOIN classes c ON (c.id = s.cid)
		WHERE s.cid = '".$id."'
		 ORDER BY s.id DESC")->result();
			$resarray = array();
			if( $sections ){
				$x = 1; $response['status'] = true;
				foreach( $sections as $s ){
					$res['sn'] = $x;
					$res['id'] = $s->id;
					$res['class'] = strtoupper($s->class);
					$res['section'] = strtoupper($s->name);
					$res['capacity'] = $s->capacity;
					$res['tid'] = $s->tid;
					$res['teacher'] = $s->teacher;
					$res['note'] = substr(trim($s->note), 0, 10);
					$edit_btn = '<a class="btn btn-sm btn-outline-warning" title="Edit" href="'. base_url('admin/sections/edit/' . simple_crypt($s->id)).'"><i class="fas fa-edit"></i></a> |';
					$del_btn = '<a class="btn btn-sm btn-outline-danger" title="Delete" href="'. base_url('admin/sections/delete/' . simple_crypt($s->id)).'"><i class="fas fa-trash"></i></a>';
					$res['actions'] = $edit_btn . $del_btn;
					array_push( $resarray, $res );
					$x++;
				}
				$response['message'] = $resarray;
				echo json_encode( $response );exit;
			}
		}
	}


	function get_section_by_class(){
		if (!$this->input->is_ajax_request()) { redirect(base_url());}
		header('Content-type: text/json');
		header('Content-type: application/json');
		$response['status'] = false;
		$id = $this->input->post('class_id');
		if( !empty( $id )){
			$sections = $this->site->run_sql("SELECT * FROM sections WHERE cid = '".$id."' ORDER BY id DESC")->result();
			$resarray = array();
			$x = 1; $response['status'] = true;
			if( $sections ){
				foreach( $sections as $s ){
					$res['id'] = $s->id;
					$res['name'] = strtoupper($s->name);
					array_push( $resarray, $res );
					$x++;
				}
				$response['message'] = $resarray;
				echo json_encode( $response );exit;
			}else{
				$response['message'] = "All Section / Arms";
			}
		}
    }
	function get_subjects_by_class(){
		if (!$this->input->is_ajax_request()) { redirect(base_url());}
		header('Content-type: text/json');
		header('Content-type: application/json');
		$response['status'] = false;
		$id = $this->input->get('cid');
		if( !empty( $id )){
			$subjects = $this->site->run_sql("SELECT id, subject, code FROM subjects WHERE cid = '".$id."' ORDER BY id DESC")->result();
			$resarray = array();
			$x = 1; $response['status'] = true;
			if( $subjects ){
				foreach( $subjects as $s ){
					$res['id'] = $s->id;
					$res['subject'] = strtoupper($s->subject . ' - ' . $s->code);
					array_push( $resarray, $res );
					$x++;
				}
				$response['message'] = $resarray;
			}else{
				$response['message'] = "No Subject has been set for this class. Please set it before proceeding";
			}
			echo json_encode( $response );exit;
		}
	}
	function get_syllabus_by_section(){
		if (!$this->input->is_ajax_request()) { redirect(base_url());}
		header('Content-type: text/json');
		header('Content-type: application/json');
		$response['status'] = false;
		$sid = $this->input->post('section_id');
		$cid = $this->input->post('class_id');
		if( !empty( $cid )){
			$sections = $this->site->run_sql("SELECT * FROM syllabus WHERE cid = '".$cid."' AND sid = '".$sid."' ORDER BY id DESC")->result();
			$resarray = array();
			$x = 1; $response['status'] = true;
			if( $sections ){
				foreach( $sections as $s ){
					$res['sn'] = $x;
					$res['id'] = $s->id;
					$res['title'] = ucwords($s->title);
					$res['description'] = $s->description;
					$res['syllabus'] = $s->syllabus;
					$res['time_uploaded'] = neatDate($s->time_uploaded) . ' ' . neatTime($s->time_uploaded);
					$res['actions'] = '<a class="btn btn-outline-info" title="Download" href="' .base_url('admin/syllabus/download/'). '"><i class="fas fa-download"></i></a> |
<a class="btn btn-outline-primary" title="Edit" href="' .base_url('admin/syllabus/edit/' . simple_crypt($s->id)). '"><i class="fas fa-edit"></i></a> ';
					array_push( $resarray, $res );
					$x++;
				}
				$response['message'] = $resarray;
			}else{
				$response['message'] = "All Section / Arms";
			}
			echo json_encode( $response );exit;
		}
	}
	function get_assignments_by_section(){
		if (!$this->input->is_ajax_request()) { redirect(base_url());}
		header('Content-type: text/json');
		header('Content-type: application/json');
		$response['status'] = false;
		$sid = $this->input->post('section_id');
		$cid = $this->input->post('class_id');
		if( !empty( $cid )){
			$sections = $this->site->run_sql("SELECT a.*, 
			u.title user,
			c.name class FROM assignments a
			JOIN classes c ON (c.id = a.cid)
			JOIN users u ON (u.id = a.uploader)
			WHERE a.cid = '".$cid."' AND a.sid = '".$sid."'
			ORDER BY id DESC")->result();
			$resarray = array();
			$x = 1; $response['status'] = true;
			if( $sections ){
				foreach( $sections as $s ){
					$section = '';
					if( $s->sid != 0 ) {
						$section = $this->site->get_row('sections', 'name', array('id' => $s->sid))->name;
					}
					$res['sn'] = $x;
					$res['id'] = $s->id;
					$res['title'] = ucwords($s->title);
					$res['user'] = strtoupper($s->user);
					$res['description'] = substr($s->description, 0, 20);
					$res['deadline'] = neatDate($s->deadline) . ' ' . neatTime($s->deadline);
					$res['class'] = strtoupper($s->class . ' ' . $section );
					$res['file'] ='file URL';
					$res['actions'] = '<a class="btn btn-sm btn-outline-info" title="Download" href="' .base_url('admin/assignments/download/'). '"><i class="fas fa-download"></i></a> |
<a class="btn btn-sm btn-outline-primary" title="Edit" href="' .base_url('admin/assignments/edit/' . simple_crypt($s->id)). '"><i class="fas fa-edit"></i></a> | 
<a class="btn btn-sm btn-outline-danger" title="Delete" href="' .base_url('admin/assignments/delete/' . simple_crypt($s->id)). '"><i class="fas fa-trash"></i></a>
 ';
					array_push( $resarray, $res );
					$x++;
				}
				$response['message'] = $resarray;
			}else{
				$response['message'] = "No Assignment For This Particular Class, section.";
			}
			echo json_encode( $response );exit;
		}
	}


	function get_user_group_detail(){
		if (!$this->input->is_ajax_request()) { redirect(base_url());}
		header('Content-type: text/json');
		header('Content-type: application/json');
		$response['status'] = false;
		$type = $this->input->get('type');
		if( !empty( $type )){
			$results = '';
			if(!in_array( $type, array('student', 'parent', 'teacher'))){
				$results = $this->site->get_result('users', 'id, title as name, email', array('user_group' => $type ) );
			}else{
				$table = $type .'s';
				$results = $this->site->run_sql("SELECT u.id, u.email, t.name FROM users u JOIN {$table} t ON(t.uid = u.id) WHERE u.user_group = '{$type}'")->result();
			}
			$resarray = array();
			$x = 1; $response['status'] = true;
			if( !empty( $results ) ){
				foreach( $results as $s ){
					$res['id'] = $s->id;
					$res['name'] = strtoupper($s->name);
					$res['email'] = $s->email;
					array_push( $resarray, $res );
					$x++;
				}
				$response['message'] = $resarray;
			}else{
				$response['message'] = "No Result Found.";
			}
			echo json_encode( $response );exit;
		}
	}


}
