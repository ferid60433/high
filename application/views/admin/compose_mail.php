<?php $this->load->view("admin/inc/header") ?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-white">
            <div class="card-body">
                <div class="">
                    <div class="card-body">
                        <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="mail-tab" data-toggle="tab" href="#mail" role="tab" aria-controls="mail" aria-selected="true">Email</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="sms-tab" data-toggle="tab" href="#sms" role="tab" aria-controls="sms" aria-selected="false">SMS</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="mail" role="tabpanel" aria-labelledby="mail-tab">
                                <form>
                                    <div class="form-group row">
                                        <label for="" class="col-xl-3 col-lg-4 col-form-label">Role</label>
                                        <div class="col-xl-9 col-lg-8">
                                            <select id="userGroup" class="Group form-control select2" name="userGroup">
                                                <option>Select Group</option>
                                                <option value="1">Admin</option>
                                                <option value="6">Librarian</option>
                                                <option value="7">Receptionist</option>
                                                <option value="4">Parents</option>
                                                <option value="5">Accountant</option>
                                                <option value="3">Student</option>
                                                <option value="2">Teacher</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-xl-3 col-lg-4 col-form-label">Users</label>
                                        <div class="col-xl-9 col-lg-8">
                                            <select id="userID" class="Group form-control select2" name="userID">
                                                <option value="">Select User</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-xl-3 col-lg-4 col-form-label">Template</label>
                                        <div class="col-xl-9 col-lg-8">
                                            <select id="userID" class="Group form-control select2" name="userID">
                                                <option value="">Select Template</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-xl-3 col-lg-4 col-form-label">Subject</label>
                                        <div class="col-xl-9 col-lg-8">
                                            <input class="form-control" name="subject" value="" placeholder="Subject" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-4 col-form-label">Message</label>
                                        <div class="col-xl-9 col-lg-8">
                                            <textarea class="summernote"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-xl-9 col-lg-8 offset-xl-3 offset-lg-4">
                                            <button type="submit" class="btn btn-primary btn-lg float-right">Send</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="sms" role="tabpanel" aria-labelledby="sms-tab">
                                <form>
                                    <div class="form-group row">
                                        <label for="" class="col-xl-3 col-lg-4 col-form-label">Role</label>
                                        <div class="col-xl-9 col-lg-8">
                                            <select id="userGroup" class="Group form-control select2" name="userGroup">
                                                <option>Select Group</option>
                                                <option value="1">Admin</option>
                                                <option value="6">Librarian</option>
                                                <option value="7">Receptionist</option>
                                                <option value="4">Parents</option>
                                                <option value="5">Accountant</option>
                                                <option value="3">Student</option>
                                                <option value="2">Teacher</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-xl-3 col-lg-4 col-form-label">Users</label>
                                        <div class="col-xl-9 col-lg-8">
                                            <select id="userID" class="Group form-control select2" name="userID">
                                                <option value="">Select User</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-xl-3 col-lg-4 col-form-label">Template</label>
                                        <div class="col-xl-9 col-lg-8">
                                            <select id="userID" class="Group form-control select2" name="userID">
                                                <option value="">Select Template</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-xl-3 col-lg-4 col-form-label">Send By</label>
                                        <div class="col-xl-9 col-lg-8">
                                            <select id="userID" class="Group form-control select2" name="userID">
                                                <option value="">Select Sender</option>
                                                <option value="Clickatell">Clickatell</option>
                                                <option value="Twilio">Twilio</option>
                                                <option value="Bulk">Bulk</option>
                                                <option value="MSG91">MSG91</option>
                                                <option value="Muthofun">Muthofun</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-4 col-form-label">Message</label>
                                        <div class="col-xl-9 col-lg-8">
                                            <textarea class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-xl-9 col-lg-8 offset-xl-3 offset-lg-4">
                                            <button type="submit" class="btn btn-primary btn-lg float-right">Send</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/inc/footer") ?>
<?php $this->load->view("admin/inc/summernote")?>