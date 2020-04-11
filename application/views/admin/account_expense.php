<?php $this->load->view("admin/inc/header") ?>
<?php $this->load->view("inc/post-meta") ?>
<?php $this->load->view("admin/inc/pre-body") ?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-white">
            <div class="card-heading clearfix mb-3">
                <button type="button" class="btn btn-sm btn-outline-primary" onclick="window.location='<?= base_url('admin/accounting/expense/add') ?>'"><i class="fas fa-plus"></i> Add New</button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table datatables_init" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Name</th>
                                <th>Date</th>
                                <th>User</th>
                                <th>Amount</th>
                                <th>Note</th>
                                <th>File</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td>Miscellaneous</td>
                                <td>21 Jan 2020</td>
                                <td>Amy Jameson</td>
                                <td>74,000.00</td>
                                <td>Note</td>
                                <td><span class="badge badge-info"><a href="#">file.pdf</a></span></td>
                                <td>
                                    <a class="btn btn-sm btn-outline-warning" title="Edit" href="<?= base_url("admin/accounting/expense/edit") ?>">
                                        <i class="fas fa-edit"></i>
                                    </a> |
                                    <a class="btn btn-sm btn-outline-danger" title="Delete" href="<?= base_url("admin/accounting/expense/delete") ?>">
                                        <i class="fas fa-trash"></i>
                                    </a> 
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