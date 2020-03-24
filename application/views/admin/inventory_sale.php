<?php $this->load->view("admin/inc/header") ?>
<?php $this->load->view("inc/post-meta") ?>
<?php $this->load->view("admin/inc/pre-body") ?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-white">
            <div class="card-heading clearfix mb-3">
                <button type="button" class="btn btn-sm btn-outline-primary" onclick="window.location='<?= base_url('admin/inventory/sale/add') ?>'"><i class="fas fa-plus"></i> Add New</button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table datatables_init" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Reference No</th>
                                <th>Role</th>
                                <th>User</th>
                                <th>Date</th>
                                <th>File</th>
                                <th>Grand Total</th>
                                <th>Paid</th>
                                <th>Balance</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td>202</td>
                                <td>Parent</td>
                                <td>Mr & Mrs Ade Ade</td>
                                <td>01 Dec 2018</td>
                                <td><span class="badge badge-info"><a href="#">file.pdf</a></span></td>
                                <td>5000.00</td>
                                <td>1000.00</td>
                                <td>4000.00</td>
                                <td>
                                    <a class="btn btn-sm btn-outline-info" title="View" href="<?= base_url("admin/inventory/sale/view") ?>">
                                        <i class="fas fa-search"></i>
                                    </a> |
                                    <a class="btn btn-sm btn-outline-warning" title="Edit" href="<?= base_url("admin/inventory/sale/edit") ?>">
                                        <i class="fas fa-edit"></i>
                                    </a> |
                                    <a class="btn btn-sm btn-outline-danger" title="Delete" href="<?= base_url("admin/inventory/sale/delete") ?>">
                                        <i class="fas fa-trash"></i>
                                    </a> |
                                    <a class="btn btn-sm btn-outline-success" title="Add Payment" href="javascript:;" data-toggle="modal" data-target="#addPayMod">
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
<div class="modal fade" id="addPayMod" tabindex="-1" role="dialog" aria-labelledby="addPayModLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form method="post">
                <div class="modal-header">
                    <h4 class="modal-title" id="addPayModLabel">Add Payment</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Date</label>
                                <div class="col-sm-12">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-calendar"></i></div>
                                        </div>
                                        <input class="form-control date-picker" placeholder="Date" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Amount</label>
                                <div class="col-sm-12">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-credit-card"></i></div>
                                        </div>
                                        <input class="form-control" placeholder="Amount" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">File</label>
                                <div class="col-sm-12">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-upload"></i></div>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Reference No</label>
                                <div class="col-sm-12">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-sort-numeric-down"></i></div>
                                        </div>
                                        <input class="form-control date-picker" placeholder="Date" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Payment Method</label>
                                <div class="col-sm-12">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-credit-card"></i></div>
                                        </div>
                                        <select class="form-control" id="payMethod" name="payMethod">
                                            <option>Select</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add Payment</button>
                </div>
            </form>
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
                                <th>Reference No</th>
                                <th>Amount</th>
                                <th>Paid By</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>20 Mar 2020</td>
                                <td>1023812</td>
                                <td>1000.00</td>
                                <td>Cash</td>
                                <td>
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