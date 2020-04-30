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
                            <table class="table table-bordered" style="width: 100%;">
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
                                        <td>Partial</td>
                                        <td>28-Mar-2020</td>
                                        <td>
                                            <a class="btn btn-sm btn-outline-info" title="View" href="javascript:;" data-toggle="modal" data-target="#viewInvoiceMod">
                                                <i class="fas fa-search"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot style="font-weight:500">
                                    <tr>
                                        <td>Total</td>
                                        <td>2050</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>2050</td>
                                    </tr>
                                </tfoot>
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
                <form>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Fees Name</th>
                                    <th>Fees Amount</th>
                                    <th>Due</th>
                                    <th>Paid Amount</th>
                                    <th>Weaver</th>
                                    <th>Fine</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Tuition</td>
                                    <td>55100.00</td>
                                    <td>55100.00</td>
                                    <td>
                                        <input type="text" class="form-control itemPaid" onkeyup="calcPW(this)" />
                                    </td>
                                    <td>
                                        <input type="text" class="form-control itemWeaver" onkeyup="calcPW(this)" />
                                    </td>
                                    <td>
                                        <input type="text" class="form-control itemFine" onkeyup="calcTotal()" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Tuition</td>
                                    <td>49.00</td>
                                    <td>49.00</td>
                                    <td>
                                        <input type="text" class="form-control itemPaid" onkeyup="calcPW(this)" />
                                    </td>
                                    <td>
                                        <input type="text" class="form-control itemWeaver" onkeyup="calcPW(this)" />
                                    </td>
                                    <td>
                                        <input type="text" class="form-control itemFine" onkeyup="calcTotal()" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Tuition</td>
                                    <td>9800.00</td>
                                    <td>9300.00</td>
                                    <td>
                                        <input type="text" class="form-control itemPaid" onkeyup="calcPW(this)" />
                                    </td>
                                    <td>
                                        <input type="text" class="form-control itemWeaver" onkeyup="calcPW(this)" />
                                    </td>
                                    <td>
                                        <input type="text" class="form-control itemFine" onkeyup="calcTotal()" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>ICT</td>
                                    <td>1485.00</td>
                                    <td>635.00</td>
                                    <td>
                                        <input type="text" class="form-control itemPaid" onkeyup="calcPW(this)" />
                                    </td>
                                    <td>
                                        <input type="text" class="form-control itemWeaver" onkeyup="calcPW(this)" />
                                    </td>
                                    <td>
                                        <input type="text" class="form-control itemFine" onkeyup="calcTotal()" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Sports</td>
                                    <td>200.00</td>
                                    <td>0.00</td>
                                    <td>
                                        Paid
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Uniforms</td>
                                    <td>4704.00</td>
                                    <td>4204.00</td>
                                    <td>
                                        <input type="text" class="form-control itemPaid" onkeyup="calcPW(this)" />
                                    </td>
                                    <td>
                                        <input type="text" class="form-control itemWeaver" onkeyup="calcPW(this)" />
                                    </td>
                                    <td>
                                        <input type="text" class="form-control itemFine" onkeyup="calcTotal()" />
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td></td>
                                    <td class="f-bold">Total</td>
                                    <td>71338.00</td>
                                    <td>69288.00</td>
                                    <td id="tPaid">0.00</td>
                                    <td id="tWeaver">0.00</td>
                                    <td id="tFine">0.00</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td colspan="3">Total Collection (Paid+Fine)</td>
                                    <td id="tPaidFine" colspan="3">0.00</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td colspan="3">Payment Type</td>
                                    <td colspan="2">
                                        <select class="form-control" id="payType">
                                            <option value="0">Select</option>
                                            <option value="Cheque">Cheque</option>
                                            <option value="Cash">Cash</option>
                                        </select>
                                    </td>
                                    <td>
                                        <button class="btn btn-block btn-primary">Submit</button>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </form>
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
                <div style="border: #e6e8eb 1px solid; padding:15px;">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h3><?= $this->settings->general()->school_name ?></h3>
                            <p><?= $this->settings->general()->address ?></p>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <td>Invoice Number: INV-G-521</td>
                                <td>Clearance: PARTIAL</td>
                                <td>Date: 24-Mar-2020</td>
                            </tr>
                            <tr>
                                <td>Name: Tolani Dona</td>
                                <td>Class: JSS 1, Roll: 7, Section: JSS 1</td>
                                <td>Group:</td>
                            </tr>
                            <tr>
                                <th colspan="3" class="text-center f-bold">Student Copy</th>
                            </tr>
                            <tr>
                                <td colspan="3" style="border-top:unset;">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Fees Name</th>
                                                <th class="text-right">Amount (NGN)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Tuition</td>
                                                <td class="text-right">500</td>
                                            </tr>
                                            <tr>
                                                <td>Sports</td>
                                                <td class="text-right">200</td>
                                            </tr>
                                            <tr>
                                                <td>ICT</td>
                                                <td class="text-right">850</td>
                                            </tr>
                                            <tr>
                                                <td>Uniforms</td>
                                                <td class="text-right">500</td>
                                            </tr>
                                        </tbody>
                                        <tfoot class="text-danger">
                                            <tr>
                                                <th class="f-bold">Total</th>
                                                <th class="text-right f-bold">2050</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Print</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/inc/footer") ?>
<script>
    calcPW = function(e) {
        let price = parseFloat($(e).parents("tr").find("td:eq(3)").html()) << 0;
        let pa = parseFloat($(e).parents("tr").find("input.itemPaid").val()) << 0;
        let w = parseFloat($(e).parents("tr").find("input.itemWeaver").val()) << 0;
        let t = pa + w;
        if (t > price) {
            toastr["error"]("Paid amount and weaver cannot be more than amount due!");
            if ($(e).hasClass("itemPaid")) {
                $(e).val(price - w);
            } else {
                $(e).val(price - pa);
            }
        }
        calcTotal();
    }
    calcTotal = function() {
        let tFine = $("#tFine");
        let tWeaver = $("#tWeaver");
        let tPaidFine = $("#tPaidFine");
        let tPaid = $("#tPaid");
        let tf = 0,
            tw = 0,
            tpf = 0,
            tp = 0;
        for (let i = 0; i < $("input.itemFine").length; i++) {
            tf += parseInt($("input.itemFine")[i].value) << 0;
        }
        for (let i = 0; i < $("input.itemWeaver").length; i++) {
            tw += parseInt($(`input.itemWeaver:eq(${i})`).val()) << 0;
        }
        for (let i = 0; i < $("input.itemPaid").length; i++) {
            tp += parseInt($(`input.itemPaid:eq(${i})`).val()) << 0;
        }
        tpf = tf + tp;
        tFine.html(tf.toFixed(2));
        tWeaver.html(tw.toFixed(2));
        tPaidFine.html(tpf.toFixed(2));
        tPaid.html(tp.toFixed(2));
    }
</script>
<?php $this->load->view("inc/post-script") ?>