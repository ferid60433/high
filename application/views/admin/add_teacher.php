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
				<?php $this->load->view('msg_view'); ?>
                <div id="rootWizardStudent">
                    <ul class="nav mb-4  nav-pills nav-fill" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="personal-pills-tab" data-toggle="tab" href="#personal" role="tab" aria-controls="personal" aria-selected="true">Personal Information</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-pills-tab" data-toggle="tab" href="#account" role="tab" aria-controls="contact" aria-selected="false">Contact/Account Information</a>
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
                                                    <input type="text"
														   class="form-control"
														   placeholder="Full Name"
														   value="<?= set_value('name', '')?>"
														   name="name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Designation</label>
                                            <div class="col-sm-10">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="fas fa-user-friends"></i></div>
                                                    </div>
                                                    <input
														type="text"
														class="form-control"
														placeholder="Designation"
														name="designation"
														value="<?= set_value('designation', '')?>"
													>
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
														placeholder="20/12/2012"
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
                                                    <select class="form-control" id="gender" name="gender">
                                                        <option>Select</option>
                                                        <option selected value="male">Male</option>
                                                        <option value="female">Female</option>
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
													<select class="form-control" id="religion" name="religion">
														<option>Select</option>
														<option value="christian">Christianity</option>
														<option value="muslim">Muslim</option>
														<option value="other">Other</option>
													</select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Joined Date</label>
                                            <div class="col-sm-10">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="fas fa-calendar"></i></div>
                                                    </div>
                                                    <input type="text" class="form-control date-picker" placeholder="20/12/2012" name="joined">
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
                                            <label class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="fas fa-envelope"></i></div>
                                                    </div>
                                                    <input type="email" value="<?= set_value('email', '')?>" class="form-control" placeholder="Email" id="email" name="email">
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
                                                    <input type="text" value="<?= set_value('phone', '')?>" class="form-control" placeholder="Phone" name="phone">
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
                                                    <input type="text" value="<?= set_value('address', '')?>" class="form-control" placeholder="Address" id="address" name="address">
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
													<input type="password" class="form-control" placeholder="Confirm Password" id="confirmPassword" name="confirm_password">
												</div>
											</div>
										</div>
                                    </div>
                                </div>
                            </div>
                            <ul class="pagination wizard">
                                <li class="previous d-none"><button type="button" class="btn btn-sm btn-outline-warning">Previous</button></li>
                                <li class="next ml-auto"><button type="button" class="btn btn-sm btn-outline-info">Next</button></li>
                                <button type="submit" class="finish ml-auto d-none btn btn-primary">Finish</button>
                            </ul>
                        </div>
					<?= form_close() ; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/inc/footer") ?>
<?php $this->load->view("inc/post-script")?>
