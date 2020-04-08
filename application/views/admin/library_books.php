<?php $this->load->view("admin/inc/header") ?>
<?php $this->load->view("inc/post-meta") ?>
<?php $this->load->view("admin/inc/pre-body") ?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-white">
            <div class="card-heading clearfix mb-3">
                <button type="button" class="btn btn-sm btn-outline-primary" onclick="window.location='<?=base_url('admin/library/add')?>'"><i class="fas fa-plus"></i> Add New</button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table datatables_init" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Name</th>
                                <th>Author</th>
                                <th>Subject Code</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Rack No</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td>Biology book</td>
                                <td>Martha Mary</td>
                                <td>BIO001</td>
                                <td>4800</td>
                                <td>20</td>
                                <td>8</td>
                                <td><span class="badge badge-info">Available</span></td>
                                <td><a class="btn btn-sm btn-outline-warning" title="Edit" href="<?=base_url("admin/library/edit")?>"><i class="fas fa-edit"></i></a> | <a class="btn btn-sm btn-outline-danger" title="Delete" href="<?=base_url("admin/library/delete")?>"><i class="fas fa-trash"></i></a></td>
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