<?php $this->load->view("admin/inc/header") ?>
<style>
    .input-group-prepend,
    .input-group-text {
        width: 44px !important;
    }

    .setting-fieldset {
        border: 1px solid #DBDEE0 !important;
        padding: 15px !important;
        margin: 0 0 25px 0 !important;
        box-shadow: 0px 0px 0px 0px #000;
    }

    .setting-legend {
        font-size: 1.1em !important;
        font-weight: 500 !important;
        text-align: left !important;
        width: auto;
        color: #428BCA;
        padding: 5px 15px;
        border: 1px solid #DBDEE0 !important;
        margin: 0px;
    }
</style>
<?php $this->load->view("inc/post-meta") ?>
<?php $this->load->view("admin/inc/pre-body") ?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-white">
            <div class="card-body">

                <div id="rootWizardStudent">
                    <form id="wizardFormStudent" method="post">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="subject" role="tabpanel">
                                <fieldset class="setting-fieldset">
                                    <legend class="setting-legend">Site Configuration</legend>
                                    <div class="row m-b-lg">
                                        <div class="col-md-4 mt-2">
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-form-label">School Name</label>
                                                <div class="col-sm-12">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="fas fa-school"></i></div>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="School Name" name="school_name" value="<?= set_value('school_name', "$settings->school_name") ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mt-2">
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-form-label">Phone No</label>
                                                <div class="col-sm-12">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="fas fa-phone"></i></div>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="Phone No" name="phone" value="<?= set_value('phone', "$settings->phone") ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mt-2">
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-form-label">School Email</label>
                                                <div class="col-sm-12">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="fas fa-envelope"></i></div>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="School Email" name="email" value="<?= set_value('email', "$settings->email") ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mt-2">
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-form-label">School Address</label>
                                                <div class="col-sm-12">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="fas fa-map-marker"></i></div>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="School Address" name="address" value="<?= set_value('address', "$settings->address") ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mt-2">
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-form-label">Currency Code</label>
                                                <div class="col-sm-12">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="fas fa-dollar-sign"></i></div>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="Currency Code" name="currency" value="<?= set_value('currency', "$settings->currency") ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mt-2">
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-form-label">Language</label>
                                                <div class="col-sm-12">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="fas fa-globe"></i></div>
                                                        </div>
                                                        <select type="text" class="form-control" name="language">
                                                            <option value="english">English</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mt-2">
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-form-label">Default Academic Year</label>
                                                <div class="col-sm-12">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="fas fa-calendar"></i></div>
                                                        </div>
                                                        <select type="text" class="form-control" name="default_academic_year">
                                                            <option>Select</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mt-2">
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-form-label">Default Attendance</label>
                                                <div class="col-sm-12">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="fas fa-check"></i></div>
                                                        </div>
                                                        <select type="text" class="form-control" name="default_attendance">
                                                            <option value="per_day">Per Day Wise</option>
                                                            <option value="per_subject">Per Subject Wise</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mt-2">
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-form-label">Weekends</label>
                                                <div class="col-sm-12">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="fas fa-home"></i></div>
                                                        </div>
                                                        <select type="text" class="form-control" name="weekends" multiple>
                                                            <option value="monday">Monday</option>
                                                            <option value="tuesday">Tuesday</option>
                                                            <option value="wednesday">Wednesday</option>
                                                            <option value="thursday">Thursday</option>
                                                            <option value="friday">Friday</option>
                                                            <option value="saturday">Saturday</option>
                                                            <option value="sunday">Sunday</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mt-2">
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-form-label">Google Analytics</label>
                                                <div class="col-sm-12">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="fab fa-google"></i></div>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="Google Analytics" name="google_analytics" value="<?= set_value('google_analytics', "$settings->google_analytics") ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mt-2">
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-form-label">Entry Class</label>
                                                <div class="col-sm-12">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="fas fa-book"></i></div>
                                                        </div>
                                                        <select type="text" class="form-control" name="entry_class">
                                                            <option>Select</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mt-2">
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-form-label">Logo</label>
                                                <div class="col-sm-12">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="fas fa-image"></i></div>
                                                        </div>
                                                        <div class="custom-file">
                                                            <input type="file" name="logo" class="custom-file-input" id="customFile">
                                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mt-2">
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-form-label">No Of Times School Opened</label>
                                                <div class="col-sm-12">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="fas fa-school"></i></div>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="No Of Times School Opened" name="times_school_open" value="<?= set_value('times_school_open', "$settings->times_school_open") ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mt-2">
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-form-label">Next Term Begins</label>
                                                <div class="col-sm-12">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="fas fa-calendar"></i></div>
                                                        </div>
                                                        <input type="text" class="form-control date-picker" placeholder="Next Term Begins" name="next_term_begins" value="<?= set_value('next_term_begins', "$settings->next_term_begins") ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mt-2">
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-form-label">Show Class Position</label>
                                                <div class="col-sm-12">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="fas fa-sort-numeric-down"></i></div>
                                                        </div>
                                                        <select type="text" class="form-control" name="show_class_position">
                                                            <option value="0">No</option>
                                                            <option value="1">Yes</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mt-2">
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-form-label">Show Subject Position</label>
                                                <div class="col-sm-12">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="fas fa-sort-numeric-down"></i></div>
                                                        </div>
                                                        <select type="text" class="form-control" name="show_subject_position">
                                                            <option value="0">No</option>
                                                            <option value="1">Yes</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mt-2">
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-form-label">Show Cumulative Highest Score On Report</label>
                                                <div class="col-sm-12">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="fas fa-newspaper"></i></div>
                                                        </div>
                                                        <select type="text" class="form-control" name="chs_on_report">
                                                            <option value="0">No</option>
                                                            <option value="1">Yes</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mt-2">
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-form-label">Show Cumulative Average Score On Report</label>
                                                <div class="col-sm-12">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="fas fa-sort-numeric-down"></i></div>
                                                        </div>
                                                        <select type="text" class="form-control" name="cas_on_Report">
                                                            <option value="0">No</option>
                                                            <option value="1">Yes</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mt-2">
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-form-label">Show Cumulative Lowest Score On Report</label>
                                                <div class="col-sm-12">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="fas fa-sort-numeric-down"></i></div>
                                                        </div>
                                                        <select type="text" class="form-control" name="cls_on_report">
                                                            <option value="0">No</option>
                                                            <option value="1">Yes</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="setting-fieldset">
                                    <legend class="setting-legend">Mark</legend>
                                    <div class="row m-b-lg">
                                        <div class="col-md-3 mt-2">
                                            <div class="input-group mb-3">
                                                <input type="checkbox" class="form-control" name="marks_guide[]" value="C.A.">
                                                <span class="help-block">C.A.</span>
                                            </div>
                                        </div>
                                        <div class="col-md-3 mt-2">
                                            <div class="input-group mb-3">
                                                <input type="checkbox" class="form-control" name="marks_guide[]" value="Exam">
                                                <span class="help-block">Exam</span>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="setting-fieldset">
                                    <legend class="setting-legend">Captcha</legend>
                                    <div class="row m-b-lg">
                                        <div class="col-md-4 mt-2">
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-form-label">Show Captcha On Login</label>
                                                <div class="col-sm-12">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="fas fa-lock"></i></div>
                                                        </div>
                                                        <select type="text" class="form-control" name="captcha">
                                                            <option value="0">No</option>
                                                            <option value="1">Yes</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="setting-fieldset">
                                    <legend class="setting-legend">Attendance Notification</legend>
                                    <div class="row m-b-lg">
                                        <div class="col-md-4 mt-2">
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-form-label">Attendance Notification</label>
                                                <div class="col-sm-12">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="fas fa-exclamation"></i></div>
                                                        </div>
                                                        <select type="text" class="form-control" name="attendance_notification">
                                                            <option value="none">None</option>
                                                            <option value="email">Email</option>
                                                            <option value="sms">Sms</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="setting-fieldset">
                                    <legend class="setting-legend">Theme & Appearance</legend>
                                </fieldset>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" class="finish float-right btn btn-primary btn-sm">Save Settings</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/inc/footer") ?>
<?php $this->load->view("inc/post-script") ?>