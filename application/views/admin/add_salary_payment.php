<?php $this->load->view("admin/inc/header") ?>
<style>
    .tab-pane .row {
        margin-top: 15px;
    }
</style>
<?php $this->load->view("inc/post-meta") ?>
<?php $this->load->view("admin/inc/pre-body") ?>
<div class="row">
    <div class="col-md-3">
        <div class="card card-white">
            <div class="card-body user-profile-card">
                <img src="<?= base_url("assets/img/avatars/profile.jpg") ?>" class="user-profile-image rounded-circle" alt="" />
                <h4 class="text-center m-t-lg">Mrs Chinenye</h4>
                <p class="text-center">Teacher</p>
                <table class="table table-bordered">
                    <tr>
                        <td class="text-left">Gender </td>
                        <td> Female</td>
                    </tr>
                    <tr>
                        <td class="text-left">Date of Birth </td>
                        <td> 01 Feb 2000</td>
                    </tr>
                    <tr>
                        <td class="text-left">Join Date</td>
                        <td> 01 Feb 2000</td>
                    </tr>
                    <tr>
                        <td class="text-left">Phone</td>
                        <td> 09023251661</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card card-white">
            <div class="card-heading clearfix">
                <h4 class="card-title">Payment History </h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table datatables_init" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Month</th>
                                <th>Date</th>
                                <th>Net Salary</th>
                                <th>Payment Amount</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td>Mar 2019</td>
                                <td>04 Mar 2019</td>
                                <td>6999</td>
                                <td>6999</td>
                                <td><a class="btn btn-sm btn-outline-info" title="View" href="<?= base_url("admin/salaries/pay/view") ?>"><i class="fas fa-search"></i></a> | <a class="btn btn-sm btn-outline-danger" title="Delete" href="<?= base_url("admin/salaries/pay/delete") ?>"><i class="fas fa-trash"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card card-white">
            <div class="card-heading clearfix">
                <h4 class="card-title">Make Payment </h4>
            </div>
            <div class="card-body">
                <div class="row m-b-lg">
                    <div class="col-md-12">
                        <div class="form-group row">
                            <label class="col-sm-12 col-form-label">Gross Salary</label>
                            <div class="col-sm-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-credit-card"></i></div>
                                    </div>
                                    <input type="text" disabled class="form-control" name="gross_sal">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-form-label">Total Deductions</label>
                            <div class="col-sm-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-credit-card"></i></div>
                                    </div>
                                    <input type="text" disabled class="form-control" name="total_d">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-form-label">Net Salary</label>
                            <div class="col-sm-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-credit-card"></i></div>
                                    </div>
                                    <input type="text" disabled class="form-control" name="net_sal">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-form-label">Date</label>
                            <div class="col-sm-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-calendar"></i></div>
                                    </div>
                                    <input type="text" class="form-control date-picker" placeholder="Exam Date">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-form-label">Payment Amount</label>
                            <div class="col-sm-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-credit-card"></i></div>
                                    </div>
                                    <input type="text" class="form-control" name="pay_amount">
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
                                    <select class="form-control" id="pay_method">
                                        <option>Select</option>
                                        <option value="1">Cash</option>
                                        <option value="2">Cheque</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-form-label">Comment</label>
                            <div class="col-sm-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-comments"></i></div>
                                    </div>
                                    <input type="text" class="form-control" name="comment">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="finish float-right btn btn-primary">Pay Salary</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/inc/footer") ?>
<?php $this->load->view("inc/post-script") ?>