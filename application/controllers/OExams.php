<?php
defined('BASEPATH') or exit('No direct script access allowed');
class OExams extends CI_Controller
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
        $this->load->view('admin/oexams', $p);
    }
    public function questions()
    {
        $p["title"] = "Online Exam Question Bank";
        $p["page_mother"] = "OExams";
        $p["page_mother_name"] = "Online Exams";
        $p["page"] = "Add Question Bank";
        $this->load->view('admin/add_questions', $p);
    }
    public function instructions($act = "")
    {
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
    public function add()
    {
        $p["title"] = "Add New Online Exam";
        $p["page_mother"] = "OExams";
        $p["page_mother_name"] = "Online Exams";
        $p["page"] = "Add";
        $this->load->view('admin/add_oexams', $p);
    }
    public function bank($act = "")
    {
        if (strtolower($act) == "add") {
            $this->add_bank();
        } elseif ($act == "view") {
            $this->view_bank();
        } elseif ($act == "edit") {
            // $this->edit_bank();
        } elseif ($act == "") {
            $p["title"] = "Online Exam Question Bank";
            $p["page_mother"] = "OExams";
            $p["page_mother_name"] = "Online Exams";
            $p["page"] = "Question Bank";
            $this->load->view('admin/oexams_bank', $p);
        } else {
            show_404();
        }
    }
    private function add_bank()
    {
        $p["title"] = "Add Online Exam Question Bank";
        $p["page_mother"] = "OExams";
        $p["page_mother_name"] = "Online Exams";
        $p["page_inner"] = "bank";
        $p["page_inner_name"] = "Question Bank";
        $p["page"] = "Add";
        $this->load->view('admin/add_oexams_bank', $p);
    }
    private function view_bank()
    {
        $p["title"] = "View Online Exam Question Bank";
        $p["page_mother"] = "OExams";
        $p["page_mother_name"] = "Online Exams";
        $p["page_inner"] = "bank";
        $p["page_inner_name"] = "Question Bank";
        $p["page"] = "View";
        $this->load->view('admin/view_oexams_bank', $p);
    }
    public function groups($act = "")
    {
        if (strtolower($act) == "add") {
            $this->add_group();
        } elseif ($act == "") {
            $p["title"] = "Online Exam Question Groups";
            $p["page_mother"] = "OExams";
            $p["page_mother_name"] = "Online Exams";
            $p["page"] = "Question Groups";
            $this->load->view('admin/oexams_group', $p);
        } else {
            show_404();
        }
    }
    private function add_group()
    {
        $p["title"] = "Add Online Exam Question Group";
        $p["page_mother"] = "OExams";
        $p["page_mother_name"] = "Online Exams";
        $p["page_inner"] = "groups";
        $p["page_inner_name"] = "Question Group";
        $p["page"] = "Add";
        $this->load->view('admin/add_oexams_group', $p);
    }
    public function levels($act = "")
    {
        if (strtolower($act) == "add") {
            $this->add_level();
        } elseif ($act == "") {
            $p["title"] = "Online Exam Question Levels";
            $p["page_mother"] = "OExams";
            $p["page_mother_name"] = "Online Exams";
            $p["page"] = "Question Levels";
            $this->load->view('admin/oexams_level', $p);
        } else {
            show_404();
        }
    }
    private function add_level()
    {
        $p["title"] = "Add Online Exam Question Level";
        $p["page_mother"] = "OExams";
        $p["page_mother_name"] = "Online Exams";
        $p["page_inner"] = "levels";
        $p["page_inner_name"] = "Question Level";
        $p["page"] = "Add";
        $this->load->view('admin/add_oexams_level', $p);
    }
}
