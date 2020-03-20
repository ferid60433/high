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
                        <h4 class="card-title"><?= SCHOOL_NAME ?></h4>
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
                        <h5 style="font-weight:700">Skilzcore</h5>
                        <h5>17babs street</h5>
                        <h5>Phone: 08159277099</h5>
                        <h5>Email: skills@gmail.com</h5>
                    </div>
                    <div class="col-md-4">
                        <h5>To</h5>
                        <h5 style="font-weight:700"><?= SCHOOL_NAME ?></h5>
                        <h5>Warehouse Name : Thinkally</h5>
                        <h5>12, runway, off-airport rd, methuselah</h5>
                        <h5>Phone : 09088112151</h5>
                        <h5>Email : think@thinkally.net</h5>
                    </div>
                    <div class="col-md-4">
                        <h5 style="font-weight:700">Reference No: 123ASQw</h5>
                        <h5>
                            Payment Status:
                            <a class="text-warning">Partial Paid</a>
                            <a class="text-danger">Pending</a>
                            <a class="text-success">Paid</a>
                        </h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Description</th>
                                        <th>Unit Price</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/inc/footer") ?>
<?php $this->load->view("inc/post-script") ?>