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
            <div class="card-body">
                <div class="row m-b-lg">
                    <div class="col-md-12">
                        <div class="form-group row">
                            <label class="col-sm-12 col-form-label">Class</label>
                            <div class="col-sm-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-school"></i></div>
                                    </div>
                                    <select class="form-control" id="sup">
                                        <option>Select</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-form-label">Student</label>
                            <div class="col-sm-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-graduation-cap"></i></div>
                                    </div>
                                    <select class="form-control" id="Warehouse">
                                        <option>Select</option>
                                    </select>
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
                                    <input type="text" class="form-control date-picker" placeholder="Date">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-form-label">Payment Status</label>
                            <div class="col-sm-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-credit-card"></i></div>
                                    </div>
                                    <select class="form-control" id="payment_status">
                                        <option value="0">Select</option>
                                        <option value="due">Due</option>
                                        <option value="partial">Partial</option>
                                        <option value="paid">Paid</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row" id="pay_method_div" style="display: none;">
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
                        <button type="submit" class="finish float-right btn btn-primary">Add Invoice</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-9">
        <div class="card card-white">
            <div class="card-heading clearfix">
                <h4 class="card-title"><b>Fees Type(s)</b></h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-12 col-form-label">Fee Type</label>
                                    <div class="col-sm-12">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fas fa-star"></i></div>
                                            </div>
                                            <select class="form-control" id="fee_type">
                                                <option value="0">Select</option>
                                                <option value="Tuition">Tuition</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered text-center" id="feesTable">
                                <thead class="bg-info text-white">
                                    <tr>
                                        <th>S/N</th>
                                        <th>Fee Type</th>
                                        <th>Amount</th>
                                        <th>Discount(%)</th>
                                        <th>Subtotal</th>
                                        <th>Paid Amount</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                                <tfoot>
                                    <tr style="font-weight:600;">
                                        <td colspan="2" class="text-right">Total</td>
                                        <td id="tAmount">0.00</td>
                                        <td id="tDiscount">0.00</td>
                                        <td id="total">0.00</td>
                                        <td id="tPaid">0.00</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/inc/footer") ?>
<script>
    delRow = function(e) {
        $(e).parents("tr").remove();
        for (let i = 0; i < $("#feesTable tbody tr").length; i++) {
            $(`#feesTable tbody tr:eq(${i})`).find(".row_id").text(i + 1);
        }
    }
    tableData = function(name) {
        let disabled = ($("#payment_status").val() == "0" || $("#payment_status").val() == "due") ? "disabled" : "";
        let sn = $("#feesTable tbody tr").length + 1;
        let html = `<tr><td class="row_id">${sn}</td><td>${name}</td><td>`;
        html += `<input type="text" onkeyup="calcAmount(this)" class="form-control itemAmount" `;
        html += `name="itemAmount[]"></td><td>`;
        html += `<input type="text" onkeyup="calcAmount(this)" class="form-control itemDiscount" `;
        html += `name="itemDiscount[]"></td><td><label class="itemSTotal">0.00</label></td><td>`;
        html += `<input type="text" onkeyup="calcPaid(this)" class="form-control itemPaid" `;
        html += `name="itemPaid[]" ${disabled}></td><td>`;
        html += `<a href="javascript:;" class="btn btn-danger" onclick="delRow(this)">`;
        html += `<i class="fas fa-trash"></i></a></td></tr>`;
        return html;
    }
    calcAmount = function(e) {
        let am = $(e).parents("tr").find("input.itemAmount").val() << 0;
        let dis = $(e).parents("tr").find("input.itemDiscount").val() << 0;
        let label = $(e).parents("tr").find("label.itemSTotal");
        $(e).parents("tr").find("input.itemPaid").val("");
        if (dis < 1) {
            label.html((am).toFixed(2));
        } else {
            let d = Math.round(dis * 100.0 / 100.0) / 100;
            let p = parseFloat(am * d);
            label.html((am - p).toFixed(2));
        }
        calcTotal();
    }
    calcPaid = function(e){
        let price = parseFloat($(e).parents("tr").find("label.itemSTotal").html()) << 0;
        if($(e).val() > price){
            $(e).val(price)
        }
        calcTotal();
    }
    calcTotal = function(e) {
        let tAmount = $("#tAmount");
        let tDiscount = $("#tDiscount");
        let total = $("#total");
        let tPaid = $("#tPaid");
        let ta = 0,
            td = 0,
            tt = 0,
            tp = 0;
        for (let i = 0; i < $("input.itemAmount").length; i++) {
            ta += parseInt($("input.itemAmount")[i].value) << 0;
        }
        for (let i = 0; i < $("input.itemDiscount").length; i++) {
            td += parseInt($(`input.itemDiscount:eq(${i})`).val()) << 0;
        }
        for (let i = 0; i < $("input.itemPaid").length; i++) {
            tp += parseInt($(`input.itemPaid:eq(${i})`).val()) << 0;
        }
        for (let i = 0; i < $("label.itemSTotal").length; i++) {
            tt += parseInt($(`label.itemSTotal:eq(${i})`).html()) << 0;
        }
        tAmount.html(ta.toFixed(2));
        tDiscount.html(td.toFixed(2));
        total.html(tt.toFixed(2));
        tPaid.html(tp.toFixed(2));
    }
    $("#fee_type").change(function() {
        if ($(this).val() == 0) return false;
        //send id back and get details or get pre stored details from selected
        let item_name = $(this).val();
        $("#feesTable tbody").append(tableData(item_name));
    });
    $("#payment_status").change(function() {
        switch (this.value) {
            case "paid":
            case "partial":
                $("#pay_method_div").show();
                $(".itemPaid").removeAttr("disabled");
                break;
            case "due":
            default:
                $("#pay_method_div").hide();
                $(".itemPaid").each((i, v) => {
                    v.disabled = "disabled";
                })
                break;
        }
    });
</script>
<?php $this->load->view("inc/post-script") ?>