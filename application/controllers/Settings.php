<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Settings extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (strtolower($this->uri->segment(1)) == "settings") show_404();
    }
    public function index()
    {
        $p["title"] = "General Settings";
        $p["page"] = "Settings";
        $p["page_name"] = "General Settings";
        $settings = $this->db->get("general_settings", 1)->row();
        if ($settings !== null) {
            $p["settings"] = $settings;
        } else {
            $p['settings'] = new EmptySettings();
        }
        if ($this->input->post()) {
            $this->update_general_settings();
        }
        $this->load->view('admin/general_settings', $p);
    }
    private function update_general_settings()
    {
        $data = $_POST;
        if (isset($data['marks_guide'])) {
            $data["marks_guide"] = implode(",", $data["marks_guide"]);
        }
        if (isset($_FILES['logo'])) {
            $config = array(
                'upload_path' => "./assets/img/",
                'allowed_types' => "gif|jpg|png|jpeg",
                'overwrite' => FALSE,
                'max_size' => "2048000",
                'max_height' => "768",
                'max_width' => "1024",
                'encrypt_name'   => TRUE
            );
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('logo')) {
                $data['logo'] = $this->upload->data('file_name');
            }
        }
        $settings = $this->db->get("general_settings", 1)->row();
        if ($settings === null) {
            $r = $this->site->insert_data("general_settings", $data);
        } else {
            $r = $this->db->where("id", $settings->id)->update("general_settings", $data);
        }
        if ($r) {
            $this->session->set_flashdata('success_msg', "Settings Updated Successfully");
        } else {
            $this->session->set_flashdata('error_msg', "Sorry! There was an error updating settings. " . $r);
        }
    }
}
class EmptySettings
{
    public $school_name = "";
    public $phone = "";
    public $email = "";
    public $address = "";
    public $currency = "";
    public $language = "";
    public $default_academic_year = "";
    public $default_attendance = "";
    public $weekends = "";
    public $google_analytics = "";
    public $entry_class = "";
    public $logo = "";
    public $times_school_open = "";
    public $next_term_begins = "";
    public $show_class_position = "";
    public $show_subject_position = "";
    public $chs_on_report = "";
    public $cas_on_Report = "";
    public $cls_on_report = "";
    public $marks_guide = "";
    public $captcha = "";
    public $attendance_notification = "";
    public $theme = "";
}
