<?php $this->load->view("admin/inc/header") ?>
<?php $this->load->view("inc/post-meta") ?>
<?php $this->load->view("admin/inc/pre-body") ?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-white">
            <div class="card-heading clearfix">
                <div class="row">
                    <div class="col-md-6">
                        <button type="button" class="btn btn-sm btn-outline-primary" onclick="window.location='<?= base_url('admin/syllabus/add') ?>'"><i class="fas fa-plus"></i> Add New</button>
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
                <div class="table-responsive">
                    <table class="table datatables_init" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Date</th>
                                <th>Uploader</th>
                                <th>File</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td>Anger Management</td>
                                <td>finish ml-auto d-none btn-primary btn-sm</td>
                                <td>2020-02-26</td>
                                <td>-</td>
                                <td>img.jpg</td>
                                <td><a class="btn btn-sm btn-outline-info" title="View" href="<?=base_url("admin/syllabus/download")?>">Download</a> | <a class="btn btn-sm btn-outline-warning" title="Edit" href="<?=base_url("admin/syllabus/edit")?>"><i class="fas fa-edit"></i></a> | <a class="btn btn-sm btn-outline-danger" title="Delete" href="<?=base_url("admin/syllabus/delete")?>"><i class="fas fa-trash"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/inc/footer") ?>
<?php $this->load->view("inc/post-script")?>