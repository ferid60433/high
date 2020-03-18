<?php $this->load->view("admin/inc/header") ?>
<?php $this->load->view("inc/post-meta") ?>
<?php $this->load->view("admin/inc/pre-body") ?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-white">
            <div class="card-heading clearfix mb-3">
                <button type="button" class="btn btn-outline-primary" onclick="window.location='<?=base_url('admin/assets/add')?>'"><i class="fas fa-plus"></i> Add New</button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table datatables_init" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Serial</th>
                                <th>Title</th>
                                <th>Status</th>
                                <th>Category</th>
                                <th>Location</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td>01992018291</td>
                                <td>HP All In One</td>
                                <td>In Storage</td>
                                <td>Main</td>
                                <td>Akwa Ibom</td>
                                <td><a class="btn btn-outline-primary" href="<?=base_url("admin/assets/edit")?>">Edit</a> | <a class="btn btn-outline-warning" href="<?=base_url("admin/assets/edit")?>">Edit</a> | <a class="btn btn-outline-danger" href="<?=base_url("admin/assets/delete")?>">Delete</a></td>
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