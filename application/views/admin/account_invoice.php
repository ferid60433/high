<?php $this->load->view("admin/inc/header") ?>
<?php $this->load->view("inc/post-meta") ?>
<?php $this->load->view("admin/inc/pre-body") ?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-white">
            <div class="card-heading clearfix mb-3">
                <button type="button" class="btn btn-sm btn-outline-primary" onclick="window.location='<?= base_url('admin/accounting/invoice/add') ?>'"><i class="fas fa-plus"></i> Add New</button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table datatables_init" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Student</th>
                                <th>Class</th>
                                <th>Total</th>
                                <th>Discount</th>
                                <th>Paid</th>
                                <th>Weaver</th>
                                <th>Balance</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td>David King</td>
                                <td>JSS 1</td>
                                <td>74,000.00</td>
                                <td>2,900.00</td>
                                <td>150.00</td>
                                <td>0.00</td>
                                <td>70,950.00</td>
                                <td><span class="badge badge-warning"><a href="#">Partially Paid</a></span></td>
                                <td>21 Jan 2020</td>
                                <td>
                                    <a class="btn btn-sm btn-outline-info" title="View" href="<?= base_url("admin/accounting/invoice/view") ?>">
                                        <i class="fas fa-search"></i>
                                    </a> |
                                    <a class="btn btn-sm btn-outline-warning" title="Edit" href="<?= base_url("admin/accounting/invoice/edit") ?>">
                                        <i class="fas fa-edit"></i>
                                    </a> |
                                    <a class="btn btn-sm btn-outline-danger" title="Delete" href="<?= base_url("admin/accounting/invoice/delete") ?>">
                                        <i class="fas fa-trash"></i>
                                    </a> |
                                    <a class="btn btn-sm btn-outline-success" title="Payment" href="<?= base_url("admin/accounting/invoice/payment") ?>">
                                        <i class="fas fa-credit-card"></i>
                                    </a> |
                                    <a class="btn btn-sm btn-outline-primary" title="View Payments" href="javascript:;" data-toggle="modal" data-target="#viewPayMod">
                                        <i class="fas fa-list"></i>
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
<div class="modal fade" id="viewPayMod" tabindex="-1" role="dialog" aria-labelledby="viewPayModLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="viewPayModLabel">View Payments</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Date</th>
                                <th>Paid By</th>
                                <th>Payment Amount</th>
                                <th>Weaver</th>
                                <th>Fine</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>24 Mar 2020</td>
                                <td>Cash</td>
                                <td>2,050.00</td>
                                <td>0.00</td>
                                <td>0.00</td>
                                <td>
                                    <a class="btn btn-sm btn-outline-info" title="View" href="#">
                                        <i class="fas fa-search"></i>
                                    </a> |
                                    <a class="btn btn-sm btn-outline-danger" title="Delete" href="#">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/inc/footer") ?>
<?php $this->load->view("inc/post-script") ?>