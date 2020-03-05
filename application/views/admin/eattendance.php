<?php $this->load->view("admin/inc/header") ?>
<style>
    .tab-pane .row {
        margin-top: 15px;
    }

    .form-inline label {
        justify-content: unset !important;
    }
</style>
<div class="row">
    <div class="col-md-12">
        <div class="card card-white">
            <div class="card-heading clearfix">
                <div class="row">
                    <div class="col-md-6">
                        <button type="button" class="btn btn-outline-primary" onclick="window.location='<?= base_url('admin/eattendance/add') ?>'"><i class="fas fa-plus"></i> Add Exam Attendance</button>
                    </div>
                    <div class="col-md-6">
                        <form>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Class</label>
                                <div class="col-sm-10">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-school"></i></div>
                                        </div>
                                        <select class="form-control" id="gender" name="gender">
                                            <option>Select</option>
                                            <option value="JSS1">JSS1</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form class="form-inline row">
                    <div class="col-md-10 row">
                        <div class="form-group row col-md-4">
                            <label class="col-sm-12 col-form-label">Select Exam</label>
                            <div class="col-sm-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-graduation-cap"></i></div>
                                    </div>
                                    <select class="form-control" id="exam" name="exam">
                                        <option>Select</option>
                                        <option value="bus assistant">Second Term Exam</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row col-md-4">
                            <label class="col-sm-12 col-form-label">Class</label>
                            <div class="col-sm-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-school"></i></div>
                                    </div>
                                    <select class="form-control" id="class" name="class">
                                        <option>Select</option>
                                        <option value="bus assistant">JSS1</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row col-md-4">
                            <label class="col-sm-12 col-form-label">Subject</label>
                            <div class="col-sm-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-school"></i></div>
                                    </div>
                                    <select class="form-control" id="subject" name="subject">
                                        <option>Select</option>
                                        <option value="bus assistant">English</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row col-md-2">
                        <button type="submit" class="btn btn-primary btn-lg">View Attendance</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card card-white">
            <div class="card-body">
                <div class="">
                    <div class="card-body">
                        <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="all-tab" data-toggle="tab" href="#all" role="tab" aria-controls="all" aria-selected="true">All Exam Attendance</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="eachSection-tab" data-toggle="tab" href="#eachSection" role="tab" aria-controls="eachSection" aria-selected="false">Section / Arm Exam Attendance (e.g. JSS1 C)</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                                <div class="table-responsive">
                                    <table class="display table datatables_init" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Photo</th>
                                                <th>Name</th>
                                                <th>Roll</th>
                                                <th>Email</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1.</td>
                                                <td></td>
                                                <td>John Green</td>
                                                <td>26</td>
                                                <td>jg@svl.com</td>
                                                <td><span class="badge badge-danger">Absent</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="eachSection" role="tabpanel" aria-labelledby="eachSection-tab">
                                <div class="table-responsive">
                                    <table class="display table" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Photo</th>
                                                <th>Name</th>
                                                <th>Roll</th>
                                                <th>Email</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1.</td>
                                                <td></td>
                                                <td>John Green</td>
                                                <td>26</td>
                                                <td>jg@svl.com</td>
                                                <td><span class="badge badge-danger">Absent</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/inc/footer") ?>