<?php $this->load->view("admin/inc/header") ?>
<!-- page styles here -->
<?php $this->load->view("inc/post-meta") ?>
<?php $this->load->view("admin/inc/pre-body") ?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-white">
            <div class="card-heading clearfix mb-3">
                <button type="button" class="btn btn-outline-primary" onclick="window.location='<?=base_url('admin/classes/add')?>'"><i class="fas fa-plus"></i> Add New</button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="display table datatables_init" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Class</th>
                                <th>Class Numeric</th>
                                <th>Teacher in Charge</th>
                                <th>Note</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td>JSS 1</td>
                                <td>7</td>
                                <td>Mrs Chinenye</td>
                                <td>-</td>
                                <td><a class="btn btn-outline-warning" href="<?=base_url("admin/classes/edit")?>">Edit</a> | <a class="btn btn-outline-danger" href="<?=base_url("admin/classes/delete")?>">Delete</a></td>
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