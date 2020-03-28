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
        <div class="row">
            <div class="col-md-12">
                <div class="card card-white">
                    <div class="card-body user-profile-card">
                        <img src="<?= base_url("assets/img/avatars/profile.jpg") ?>" class="user-profile-image rounded-circle" alt="" />
                        <h4 class="text-center m-t-lg">Brad Pitts</h4>
                        <p class="text-center">Student</p>
                        <table class="table table-bordered">
                            <tr>
                                <td class="text-left">Registration No </td>
                                <td> 001</td>
                            </tr>
                            <tr>
                                <td class="text-left">Roll</td>
                                <td> 2</td>
                            </tr>
                            <tr>
                                <td class="text-left">Class</td>
                                <td> JSS1</td>
                            </tr>
                            <tr>
                                <td class="text-left">Arm/Section</td>
                                <td> -</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card card-white">
                    <div class="card-heading clearfix">
                        <h4 class="card-title">Invoice Payment</h4>
                    </div>
                    <div class="card-body">
                        <div class="row m-b-lg">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-12 col-form-label">Payment Method</label>
                                    <div class="col-sm-12">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fas fa-credit-card"></i></div>
                                            </div>
                                            <select class="form-control" id="payMethod" name="payMethod">
                                                <option value="0">Select</option>
                                                <option value="Cash">Cash</option>
                                                <option value="Cheque">Cheque</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="finish float-right btn btn-primary">Add Payment</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-9">
        <div class="card card-white">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="feesTable">
                        <thead class="bg-info text-white">
                            <tr>
                                <th>S/N</th>
                                <th>Fee Type</th>
                                <th>Amount</th>
                                <th>Due</th>
                                <th>Paid Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Tuition</td>
                                <td>58000</td>
                                <td><label class="itemDue">54950</label></td>
                                <td><input class="form-control itemPaid" type="text" value=""></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>ICT</td>
                                <td>5000</td>
                                <td><label class="itemDue">5000</label></td>
                                <td><input class="form-control itemPaid" type="text" value=""></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>PTA</td>
                                <td>1000</td>
                                <td><label class="itemDue">1000</label></td>
                                <td><input class="form-control itemPaid" type="text" value=""></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Uniforms</td>
                                <td>10000</td>
                                <td><label class="itemDue">10000</label></td>
                                <td><input class="form-control itemPaid" type="text" value=""></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr style="font-weight:600;">
                                <td colspan="2" class="text-right">Total</td>
                                <td id="tAmount">74,000.00</td>
                                <td id="tDue">70,950.00</td>
                                <td id="tPaid">0.00</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/inc/footer") ?>
<script>
    $(".itemPaid").keyup(function() {
        let price = parseFloat($(this).parents("tr").find("label.itemDue").html()) << 0;
        if ($(this).val() > price) {
            $(this).val(price)
        }
        let tPaid = $("#tPaid"),
            tp = 0;
        for (let i = 0; i < $("input.itemPaid").length; i++) {
            tp += parseInt($(`input.itemPaid:eq(${i})`).val()) << 0;
        }
        tPaid.html(tp.toFixed(2));
    })
</script>
<?php $this->load->view("inc/post-script") ?>