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
            <div class="card-heading clearfix mb-3">
                <button type="button" class="btn btn-sm btn-outline-primary" onclick="window.location='<?=base_url('admin/library/issue/add')?>'"><i class="fas fa-plus"></i> Issue Book</button>
            </div>
            <div class="card-body">
                <div class="alert alert-dark mb-0 text-center" role="alert">
                    <form class="form-inline row">
                        <div class="col-md-3">
                        </div>
                        <div class="form-group row col-md-4">
                            <label class="col-sm-12 col-form-label">Library ID</label>
                            <div class="col-sm-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-user"></i></div>
                                    </div>
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group row col-md-2">
                            <button type="submit" class="btn btn-primary btn-sm">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="card card-white">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table datatables_init" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Book</th>
                            <th>Serial No</th>
                            <th>Issue Date</th>
                            <th>Due Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td>Biology book</td>
                            <td>101</td>
                            <td>08 Apr 2020</td>
                            <td>30 Apr 2020</td>
                            <td><span class="badge badge-warning">Not Returned</span></td>
                            <td>
                                    <a class="btn btn-sm btn-outline-info" title="View" href="<?= base_url("admin/library/issue/view") ?>"><i class="fas fa-search"></i></a> |
                                    <a class="btn btn-sm btn-outline-warning" title="Edit" href="<?= base_url("admin/library/issue/edit") ?>"><i class="fas fa-edit"></i></a> |
                                    <a class="btn btn-sm btn-outline-danger" title="Return" href="<?= base_url("admin/library/issue/return") ?>"><i class="fas fa-reply"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
<?php $this->load->view("admin/inc/footer") ?>
<?php $this->load->view("inc/post-script") ?>