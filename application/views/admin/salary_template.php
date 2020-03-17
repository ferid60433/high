<?php $this->load->view("admin/inc/header") ?>
<?php $this->load->view("inc/post-meta") ?>
<?php $this->load->view("admin/inc/pre-body") ?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-white">
            <div class="card-heading clearfix mb-3">
                <button type="button" class="btn btn-outline-primary" onclick="window.location='<?= base_url('admin/salaries/template/add') ?>'"><i class="fas fa-plus"></i> Add New</button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table datatables_init" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Salary Grade</th>
                                <th>Basic Salary</th>
                                <th>Overtime Rate</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td>Junior Grade</td>
                                <td>6,999</td>
                                <td>15.00</td>
                                <td><a class="btn btn-outline-info" href="<?= base_url("admin/salaries/template/view") ?>">View</a> | <a class="btn btn-outline-warning" href="<?= base_url("admin/salaries/template/edit") ?>">Edit</a> | <a class="btn btn-outline-danger" href="<?= base_url("admin/salaries/template/delete") ?>">Delete</a></td>
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