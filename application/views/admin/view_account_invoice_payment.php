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
                    <div class="col-md-6"> <span class="float-right">Create Date : 20 Mar 2020</span> </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <h5>From</h5>
                        <h5 style="font-weight:700"><?= SCHOOL_NAME ?></h5>
                        <h5>12, runway, off-airport rd, methuselah</h5>
                        <h5>Phone : 09088112151</h5>
                        <h5>Email : think@thinkally.net</h5>
                    </div>
                    <div class="col-md-4">
                        <h5>To</h5>
                        <h5 style="font-weight:700">David King</h5>
                        <h5>Roll : 22</h5>
                        <h5>Class : JSS 1</h5>
                        <h5>Admission NO : demo0090</h5>
                        <h5>Email : davidking@gmail.com</h5>
                    </div>
                    <div class="col-md-4">
                        <h5 style="font-weight:700">Invoice S-521</h5>
                        <h5> Payment Method: Cash </h5>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="bg-info text-white">
                                    <tr>
                                        <th>S/N</th>
                                        <th>Fee Type</th>
                                        <th>Amount</th>
                                        <th>Weaver</th>
                                        <th>Fine</th>
                                        <th>Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> 1 </td>
                                        <td> Tuition </td>
                                        <td> 500.00 </td>
                                        <td> 0.00 </td>
                                        <td> 0.00 </td>
                                        <td> 500.00 </td>
                                    </tr>
                                    <tr>
                                        <td> 2 </td>
                                        <td> Sports </td>
                                        <td> 200.00 </td>
                                        <td> 0.00 </td>
                                        <td> 0.00 </td>
                                        <td> 200.00 </td>
                                    </tr>
                                    <tr>
                                        <td> 3 </td>
                                        <td>ICT </td>
                                        <td> 850.00 </td>
                                        <td> 0.00 </td>
                                        <td> 0.00 </td>
                                        <td> 850.00 </td>
                                    </tr>
                                    <tr>
                                        <td> 4 </td>
                                        <td> Uniforms </td>
                                        <td> 500.00 </td>
                                        <td> 0.00 </td>
                                        <td> 0.00 </td>
                                        <td> 500.00 </td>
                                    </tr>
                                </tbody>
                                <tfoot style="font-weight:500">
                                    <tr>
                                        <td colspan="2" class="text-right">Total (NGN)</td>
                                        <td>2,050.00</td>
                                        <td>0.00</td>
                                        <td>0.00</td>
                                        <td>2,050.00</td>
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
                            <p>Date: 21 Jan 2020</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/inc/footer") ?>
<?php $this->load->view("inc/post-script") ?>