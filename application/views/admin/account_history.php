<?php $this->load->view("admin/inc/header") ?>
<?php $this->load->view("inc/post-meta") ?>
<?php $this->load->view("admin/inc/pre-body") ?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-white">
            <div class="card-heading clearfix mb-3">
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table datatables_init" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Student</th>
                                <th>Fee Type</th>
                                <th>Method</th>
                                <th>Amount</th>
                                <th>Date</th>
                                <th>Payment By</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td>David King</td>
                                <td>Tuition</td>
                                <td>Cash</td>
                                <td>150.00</td>
                                <td>21 Jan 2020</td>
                                <td><?= SCHOOL_NAME ?></td>
                                <td>
                                    <a class="btn btn-sm btn-outline-warning" title="Edit" href="<?= base_url("admin/accounting/invoice/edit") ?>">
                                        <i class="fas fa-edit"></i>
                                    </a> |
                                    <a class="btn btn-sm btn-outline-danger" title="Delete" href="<?= base_url("admin/accounting/invoice/delete") ?>">
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