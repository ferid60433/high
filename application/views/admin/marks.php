<?php $this->load->view("admin/inc/header") ?>
<style>
    .tab-pane .row {
        margin-top: 15px;
    }

    .form-inline label {
        justify-content: unset !important;
    }
</style>
<?php $this->load->view("inc/post-meta") ?>
<?php $this->load->view("admin/inc/pre-body") ?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-white">
            <div class="card-heading clearfix">
                <div class="row">
                    <div class="col-md-6">
                        <button type="button" class="btn btn-sm btn-outline-primary" onclick="window.location='<?= base_url('admin/marks/add') ?>'"><i class="fas fa-plus"></i> Add Marks</button>
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
                <div class="">
                    <div class="card-body">
                        <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="all-tab" data-toggle="tab" href="#all" role="tab" aria-controls="all" aria-selected="true">All Students</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="eachSection-tab" data-toggle="tab" href="#eachSection" role="tab" aria-controls="eachSection" aria-selected="false">Section / Arm Marks (e.g. JSS1 C)</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                                <div class="table-responsive">
                                    <table class="table datatables_init" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Photo</th>
                                                <th>Name</th>
                                                <th>Roll</th>
                                                <th>Email</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1.</td>
                                                <td></td>
                                                <td>John Green</td>
                                                <td>26</td>
                                                <td>jg@svl.com</td>
                                                <td><a class="btn btn-sm btn-outline-info" title="View" href="<?= base_url("admin/marks/view") ?>"><i class="fas fa-search"></i></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="eachSection" role="tabpanel" aria-labelledby="eachSection-tab">
                                <div class="table-responsive">
                                    <table class="table" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Photo</th>
                                                <th>Name</th>
                                                <th>Roll</th>
                                                <th>Email</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1.</td>
                                                <td></td>
                                                <td>John Green</td>
                                                <td>26</td>
                                                <td>jg@svl.com</td>
                                                <td><a class="btn btn-sm btn-outline-info" title="View" href="<?= base_url("admin/marks/view") ?>"><i class="fas fa-search"></i></a></td>
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
<?php $this->load->view("inc/post-script")?>