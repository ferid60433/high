<?php $this->load->view("admin/inc/header") ?>
<?php $this->load->view("inc/post-meta") ?>
<?php $this->load->view("admin/inc/pre-body") ?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-white">
            <div class="card-heading clearfix mb-3">
                <button type="button" class="btn btn-sm btn-outline-primary" onclick="window.location='<?=base_url('admin/inventory/supplier/add')?>'"><i class="fas fa-plus"></i> Add New</button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table datatables_init" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Company Name</th>
                                <th>Supplier name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td>Skilzcore</td>
                                <td>Ade Ade</td>
                                <td>think@thinkally.net</td>
                                <td>09088112151</td>
                                <td>12, runway, off-airport rd, methuselah</td>
                                <td><a class="btn btn-sm btn-outline-warning" title="Edit" href="<?=base_url("admin/inventory/supplier/edit")?>"><i class="fas fa-edit"></i></a> | <a class="btn btn-sm btn-outline-danger" title="Delete" href="<?=base_url("admin/inventory/supplier/delete")?>"><i class="fas fa-trash"></i></a></td>
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