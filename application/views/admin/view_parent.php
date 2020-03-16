<?php $this->load->view("admin/inc/header") ?>
<style>
    .tab-pane .row {
        margin-top: 15px;
    }
</style>
<?php $this->load->view("inc/post-meta") ?>
<?php $this->load->view("admin/inc/pre-body") ?>
<div class="row">
    <div class="col-md-3">
        <div class="card card-white">
            <div class="card-body user-profile-card">
                <img
					src="<?= ( $parent->pic) ?
						base_url('assets/img/' . $parent->pic) :
						base_url('assets/img/avatars/profile.jpg')?>"
					class="user-profile-image rounded-circle" alt="<?= $parent->guardian_name; ?>" />
                <h4 class="text-center m-t-lg">
					<?= ( !empty( $parent->guardian_name)) ?
						ucwords($parent->guardian_name) :
						ucwords( $parent->father_name) ?>
				</h4>
                <p class="text-center">Parent</p>

                <table class="table table-bordered">
                    <tr>
                        <td class="text-left">Phone </td>
                        <td><a href="tel:<?= $parent->phone;?>"><?= $parent->phone?></a></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-9">
        <div class="card card-white">
            <div class="card-body">
                <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="children-tab" data-toggle="tab" href="#children" role="tab" aria-controls="children" aria-selected="false">Children</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="document-tab" data-toggle="tab" href="#document" role="tab" aria-controls="document" aria-selected="false">Document</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row">
                            <div class="col-md-6">Father's Name: <?= ucwords( $parent->father_name); ?></div>
                            <div class="col-md-6">Father's Profession: <?= ucwords($parent->father_prof)?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">Mother's Name: <?= ucwords($parent->mother_name ) ;?></div>
                            <div class="col-md-6">Mother's Profession: <?= ucwords($parent->mother_prof)?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">Email: <?= $parent->email; ?></div>
                            <div class="col-md-6">Phone: <?= $parent->phone;?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">Address: <?= ucwords($parent->address); ?></div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="children" role="tabpanel" aria-labelledby="children-tab">
                        <div class="col-md-12 table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>
                                            #
                                        </th>
                                        <th>
                                            Photo
                                        </th>
                                        <th>
                                            Name
                                        </th>
                                        <th>
                                            Roll
                                        </th>
                                        <th>
                                            Class
                                        </th>
                                        <th>
                                            Section/Arm
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
									<?php $x=1; foreach ( $children as $child ): ?>
                                    <tr>
                                        <td>
                                            <?= $x;?>
                                        </td>
                                        <td>
                                            <img
												src="<?= (isset( $child->pic)) ?
													base_url('assets/img/' . $child->pic) :
													base_url("assets/img/avatars/user-dropdown.jpg");
												?>"
												alt="<?= $child->name; ?>"
												class="rounded-circle">
                                        </td>
                                        <td>
                                            <?= ucwords($child->name); ?>
                                        </td>
                                        <td>
                                            <?= $child->roll;?>
                                        </td>
                                        <td>
                                            <?= $child->class; ?>
                                        </td>
                                        <td>
											<?= $child->section; ?>
                                        </td>
                                    </tr>
									<?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="document" role="tabpanel" aria-labelledby="document-tab">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#docMod" style="margin-bottom:10px;margin-left:10px;">Add Document</button>
                        <div class="modal fade" id="docMod" tabindex="-1" role="dialog" aria-labelledby="docModLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form method="post">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="docModLabel">Document upload</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Title</label>
                                                <div class="col-sm-10">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="fas fa-file"></i></div>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="Document Title" id="title" name="title" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">File</label>
                                                <div class="col-sm-10">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="fas fa-upload"></i></div>
                                                        </div>
                                                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Upload</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>
                                            #
                                        </th>
                                        <th>
                                            Title
                                        </th>
                                        <th>
                                            Date
                                        </th>
                                        <th>
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>

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
<?php $this->load->view("admin/inc/footer") ?>
<?php $this->load->view("inc/post-script")?>
