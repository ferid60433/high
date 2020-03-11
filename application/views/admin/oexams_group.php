<?php $this->load->view("admin/inc/header") ?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-white">
            <div class="card-heading clearfix mb-3">
                <button type="button" class="btn btn-outline-primary" onclick="window.location='<?=base_url('admin/oexams/groups/add')?>'"><i class="fas fa-plus"></i> Add New</button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="display table datatables_init" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Title</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td>English Language 1</td>
                                <td><a class="btn btn-outline-warning" href="<?=base_url("admin/oexams/groups/edit")?>">Edit</a> | <a class="btn btn-outline-danger" href="<?=base_url("admin/oexams/groups/delete")?>">Delete</a></td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>Mathematics 1</td>
                                <td><a class="btn btn-outline-warning" href="<?=base_url("admin/oexams/groups/edit")?>">Edit</a> | <a class="btn btn-outline-danger" href="<?=base_url("admin/oexams/groups/delete")?>">Delete</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/inc/footer") ?>