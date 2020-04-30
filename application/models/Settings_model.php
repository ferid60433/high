<?php
class Settings_model extends CI_Model
{
    function general()
    {
        $settings = $this->db->get("general_settings", 1)->row();
        if ($settings !== null) {
            $r = $settings;
        } else {
            $r = new EmptySettings();
        }
        return $r;
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
