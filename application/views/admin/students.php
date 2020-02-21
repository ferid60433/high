<?php $this->load->view("admin/inc/header") ?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-white">
            <div class="card-heading clearfix">
                <h4 class="card-title">Students</h4>
                <button type="button" class="btn btn-outline-primary float-right" onclick="window.location='<?=base_url('admin/add_student')?>'"><i class="fas fa-plus"></i> Add New</button>
            </div>
            <div class="card-body">
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
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td></td>
                                <td>Brad Pitts</td>
                                <td>3</td>
                                <td>bp@svl.com</td>
                                <td><span class="badge badge-info">active</span></td>
                                <td><a class="btn btn-outline-info" href="<?=base_url("admin/view_student")?>">View</a> | <a class="btn btn-outline-warning" href="<?=base_url("admin/edit_student")?>">Edit</a> | <a class="btn btn-outline-danger" href="<?=base_url("admin/del_student")?>">Delete</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/inc/footer") ?>