<?php $this->load->view("admin/inc/header") ?>
<?php $this->load->view("inc/post-meta") ?>
<?php $this->load->view("admin/inc/pre-body") ?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-white">
            <div class="card-heading clearfix mb-3">
                <button type="button" class="btn btn-outline-primary" onclick="window.location='<?=base_url('admin/oexams/bank/add')?>'"><i class="fas fa-plus"></i> Add New</button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table datatables_init" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Difficulty Level</th>
                                <th>Question</th>
                                <th>Question Group</th>
                                <th>Question Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td>Low</td>
                                <td>Who killed James?</td>
                                <td>English 1</td>
                                <td>Single Answer</td>
                                <td><a class="btn btn-sm btn-outline-info" href="<?=base_url("admin/oexams/bank/view")?>">View</a> | <a class="btn btn-sm btn-outline-warning" href="<?=base_url("admin/oexams/bank/edit")?>">Edit</a> | <a class="btn btn-sm btn-outline-danger" href="<?=base_url("admin/oexams/bank/delete")?>">Delete</a></td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>Low</td>
                                <td>Who is 2 + 8?</td>
                                <td>Mathematics 1</td>
                                <td>Single Answer</td>
                                <td><a class="btn btn-sm btn-outline-info" href="<?=base_url("admin/oexams/bank/view")?>">View</a> | <a class="btn btn-sm btn-outline-warning" href="<?=base_url("admin/oexams/bank/edit")?>">Edit</a> | <a class="btn btn-sm btn-outline-danger" href="<?=base_url("admin/oexams/bank/delete")?>">Delete</a></td>
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