<?php $this->load->view("admin/inc/header") ?>
<style>
    .tab-pane .row {
        margin-top: 15px;
    }

    .form-inline label {
        justify-content: unset !important;
    }
</style>
<?php $this->load->view("inc/post-meta") ?>
<?php $this->load->view("admin/inc/pre-body") ?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-white">
            <div class="card-body">
                <form class="form-inline row">
                    <div class="col-md-10 row">
                        <div class="form-group row col-md-4">
                            <label class="col-sm-12 col-form-label">Class</label>
                            <div class="col-sm-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-school"></i></div>
                                    </div>
                                    <select class="form-control" id="class" name="class">
                                        <option>Select</option>
                                        <option value="bus assistant">JSS1</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row col-md-4">
                            <label class="col-sm-12 col-form-label">Section</label>
                            <div class="col-sm-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-school"></i></div>
                                    </div>
                                    <select class="form-control" id="section" name="section">
                                        <option>Select</option>
                                        <option value="bus assistant">JSS1</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row col-md-4">
                            <label class="col-sm-12 col-form-label">Student</label>
                            <div class="col-sm-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-school"></i></div>
                                    </div>
                                    <select class="form-control" id="Student" name="Student">
                                        <option>Select</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row col-md-2">
                        <button type="submit" class="btn btn-primary btn-sm">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-3">
                <div class="card card-white">
                    <div class="card-body user-profile-card">
                        <img src="<?= base_url("assets/img/avatars/profile.jpg") ?>" class="user-profile-image rounded-circle" alt="" />
                        <table class="table table-bordered">
                            <tr>
                                <td class="text-left">Registration No </td>
                                <td> 001</td>
                            </tr>
                            <tr>
                                <td class="text-left">Name </td>
                                <td> Brad Pitts</td>
                            </tr>
                            <tr>
                                <td class="text-left">Class</td>
                                <td> JSS1</td>
                            </tr>
                            <tr>
                                <td class="text-left">Roll No</td>
                                <td> 2</td>
                            </tr>
                            <tr>
                                <td class="text-left">Arm/Section</td>
                                <td> -</td>
                            </tr>
                            <tr>
                                <td class="text-left">Group</td>
                                <td> -</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-9">
                <div class="card card-white">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Invoice No</th>
                                        <th>Total Pay</th>
                                        <th>Weaver</th>
                                        <th>Fine</th>
                                        <th>Total Collection</th>
                                        <th>Clearance</th>
                                        <th>Payment Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>INV-G-521</td>
                                        <td>2050</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>2050</td>
                                        <td>Paid</td>
                                        <td>28-Mar-2020</td>
                                        <td>
                                            <a class="btn btn-sm btn-outline-info" title="View" href="javascript:;" data-toggle="modal" data-target="#viewInvoiceMod">
                                                <i class="fas fa-search"></i>
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
    </div>
    <div class="col-md-12">
        <div class="card card-white">
            <div class="card-body">
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="viewInvoiceMod" tabindex="-1" role="dialog" aria-labelledby="viewInvoiceModLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="viewInvoiceModLabel">View Invoice</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h3><?= SCHOOL_NAME ?></h3>
                    </div>
                </div>
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
                                    <a class="btn btn-sm btn-outline-info" title="View" href="<?= base_url("admin/accounting/invoice/payment/view") ?>">
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