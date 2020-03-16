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
					$edit_btn = '<a class="btn btn-outline-warning" href="'. base_url('admin/sections/edit/' . simple_crypt($s->id)).'">Edit</a> |';
					$del_btn = '<a class="btn btn-outline-danger" href="'. base_url('admin/sections/delete/' . simple_crypt($s->id)).'">Delete</a>';
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


}
