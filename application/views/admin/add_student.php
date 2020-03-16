<?php $this->load->view("admin/inc/header") ?>
<style>
    .input-group-prepend,
    .input-group-text {
        width: 44px !important;
    }
</style>
<?php $this->load->view("inc/post-meta") ?>
<?php $this->load->view("admin/inc/pre-body") ?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-white">
            <div class="card-body">
                <div id="rootWizardStudent">
                    <ul class="nav mb-4  nav-pills nav-fill" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="personal-pills-tab" data-toggle="tab" href="#personal" role="tab" aria-controls="personal" aria-selected="true">Personal Information</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-pills-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact Information</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-pills-tab" data-toggle="tab" href="#level" role="tab" aria-controls="level" aria-selected="false">Class</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="finish-pills-tab" data-toggle="tab" href="#account" role="tab" aria-controls="account" aria-selected="false">Account</a>
                        </li>

                    </ul>
                    <div class="progress progress-sm m-t-sm">
                        <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                        </div>
                    </div>
					<?= form_open_multipart('', 'id="wizardFormStudent"')?>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="personal" role="tabpanel">
                                <div class="row m-b-lg">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Name</label>
                                            <div class="col-sm-10">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="fas fa-user"></i></div>
                                                    </div>
                                                    <input type="text" class="form-control"
														   placeholder="Full Name" id="fullName"
														   name="name" value="<?= set_value('name', '')?>">
													<?= form_error('name'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Guardian</label>
                                            <div class="col-sm-10">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="fas fa-user-friends"></i></div>
                                                    </div>
                                                    <select class="form-control" id="guardian" required name="guardian">
														<option value="" selected>-- Select Guardian --</option>
														<?php foreach( $guardian as $g ): ?>
                                                        <option
															<?= set_select('guardian')?>
															value="<?= $g->uid; ?>"><?= ucwords($g->guardian_name)?></option>
														<?php endforeach; ?>
                                                    </select>
													<?= form_error('guardian'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Date of Birth</label>
                                            <div class="col-sm-10">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="fas fa-calendar"></i></div>
                                                    </div>
                                                    <input
														type="text"
														class="form-control date-picker"
														placeholder="20/12/2012" id="dateOfBirth"
														name="dob">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Gender</label>
                                            <div class="col-sm-10">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="fas fa-restroom"></i></div>
                                                    </div>
                                                    <select class="form-control" id="gender"required name="gender">
                                                        <option value="">Select</option>
                                                        <option value="male" selected>Male</option>
                                                        <option value="female">Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Blood Group</label>
                                            <div class="col-sm-10">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="fas fa-tint"></i></div>
                                                    </div>
                                                    <select class="form-control" name="blood_group">
                                                        <option value="">Select</option>
                                                        <option value="A+">A+</option>
                                                        <option value="A-">A-</option>
                                                        <option value="B+">B+</option>
                                                        <option value="B-">B-</option>
                                                        <option value="O+">O+</option>
                                                        <option value="O-">O-</option>
                                                        <option value="AB+">AB+</option>
                                                        <option value="AB-">AB-</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Passport Photo</label>
                                            <div class="col-sm-10">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="fas fa-camera"></i></div>
                                                    </div>
                                                    <div class="custom-file">
                                                        <input type="file" name="pic" class="custom-file-input" id="customFile">
                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Religion</label>
                                            <div class="col-sm-10">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="fas fa-place-of-worship"></i></div>
                                                    </div>
                                                    <input type="text" value="<?= set_value('religion', '')?>" class="form-control" placeholder="Religion" name="religion">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel">
                                <div class="row m-b-lg">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="fas fa-envelope"></i></div>
                                                    </div>
                                                    <input type="email" class="form-control" value="<?= set_value('email', '')?>" placeholder="Email" id="email" name="email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Phone</label>
                                            <div class="col-sm-10">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="fas fa-phone"></i></div>
                                                    </div>
                                                    <input type="text" class="form-control" value="<?= set_value('phone', '')?>" placeholder="Phone" id="phone" name="phone">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Address</label>
                                            <div class="col-sm-10">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="fas fa-map-marker"></i></div>
                                                    </div>
                                                    <input type="text" class="form-control" value="<?= set_value('address', '')?>" placeholder="Address" id="address" name="address">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">State</label>
                                            <div class="col-sm-10">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="fas fa-globe"></i></div>
                                                    </div>
													<select class="form-control" id="country" name="state">
														<option>Select</option>
														<option value="lagos">Lagos State</option>
													</select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Country</label>
                                            <div class="col-sm-10">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="fas fa-flag-usa"></i></div>
                                                    </div>
                                                    <select class="form-control" id="country" name="country">
                                                        <option value="">Select</option>
                                                        <option value="nigeria">Nigeria</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="level" role="tabpanel">
                                <div class="row m-b-lg">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Class</label>
                                            <div class="col-sm-10">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="fas fa-building"></i></div>
                                                    </div>
                                                    <select class="form-control" id="class" name="class">
                                                        <option>Select</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Section/Arm</label>
                                            <div class="col-sm-10">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="fas fa-puzzle-piece"></i></div>
                                                    </div>
                                                    <select class="form-control" id="section" name="section">
                                                        <option>Select</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Admission NO</label>
                                            <div class="col-sm-10">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">#</div>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Admission Number" id="admin_no" name="admin_no">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Roll</label>
                                            <div class="col-sm-10">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="fas fa-sort-numeric-up"></i></div>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Number on Roll" id="roll" name="roll">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Extra Curricular Activities</label>
                                            <div class="col-sm-10">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="fas fa-futbol"></i></div>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Student Activities" name="activities">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Remarks</label>
                                            <div class="col-sm-10">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="fas fa-comment"></i></div>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Remarks" name="remark">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="account" role="tabpanel">
                                <div class="row m-b-lg">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Username</label>
                                            <div class="col-sm-10">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="fas fa-user-shield"></i></div>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Username" id="username" name="username">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Password</label>
                                            <div class="col-sm-10">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="fas fa-key"></i></div>
                                                    </div>
                                                    <input type="password" class="form-control" placeholder="Password" id="password" name="password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Confirm Password</label>
                                            <div class="col-sm-10">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="fas fa-key"></i></div>
                                                    </div>
                                                    <input type="password" class="form-control" placeholder="Confirm Password" id="confirmPassword" name="confirmPassword">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="pagination wizard">
                                <li class="previous d-none"><button type="button" class="btn btn-outline-warning">Previous</button></li>
                                <li class="next ml-auto"><button type="button" class="btn btn-outline-info">Next</button></li>
                                <button type="submit" class="finish ml-auto d-none btn btn-primary">Finish</button>
                            </ul>
                        </div>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/inc/footer") ?>
<?php $this->load->view("inc/post-script")?>
