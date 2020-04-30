<?php $this->load->view("admin/inc/header") ?>
<style>
    th {
        font-weight: bold;
    }
</style>
<?php $this->load->view("inc/post-meta") ?>
<?php $this->load->view("admin/inc/pre-body") ?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-white">
            <div class="card-heading clearfix">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="card-title"><?= $this->settings->general()->school_name ?></h4>
                    </div>
                    <div class="col-md-6">
                        <span class="float-right">Create Date : 20 Mar 2020</span>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <h5>From</h5>
                        <h5 style="font-weight:700"><?= $this->settings->general()->school_name ?></h5>
                        <h5><?= $this->settings->general()->address ?></h5>
                        <h5>Phone : <?= $this->settings->general()->phone ?></h5>
                        <h5>Email : <?= $this->settings->general()->email ?></h5>
                    </div>
                    <div class="col-md-4">
                        <h5>To</h5>
                        <h5 style="font-weight:700">Mr & Mrs Ade Ade</h5>
                        <h5>Role: Parent</h5>
                        <h5>17babs street</h5>
                        <h5>Phone: 08159277099</h5>
                        <h5>Email: skills@gmail.com</h5>
                    </div>
                    <div class="col-md-4">
                        <h5 style="font-weight:700">Reference No: 123ASQw</h5>
                        <h5>
                            Payment Status:
                            <a class="text-warning">Partial Paid</a>
                        </h5>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="bg-info text-white">
                                    <tr>
                                        <th>S/N</th>
                                        <th>Description</th>
                                        <th>Unit Price</th>
                                        <th>Quantity</th>
                                        <th>Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Complete Male Uniform</td>
                                        <td>5,000.00</td>
                                        <td>1</td>
                                        <td>5,000.00</td>
                                    </tr>
                                </tbody>
                                <tfoot style="font-weight:500">
                                    <tr>
                                        <td colspan="4" class="text-right">Total Amount (NGN)</td>
                                        <td>5,000.00</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="text-right">Paid (NGN)</td>
                                        <td>1,000.00</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="text-right">Balance (NGN)</td>
                                        <td>4,000.00</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-9"></div>
                    <div class="col-md-3">
                        <div class="alert alert-default">
                            <p>Created By: User</p>
                            <p>Date: 20 Mar 2020</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/inc/footer") ?>
<?php $this->load->view("inc/post-script") ?>