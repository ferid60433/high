<?php $this->load->view("admin/inc/header") ?>
<style>
    .tab-pane .row {
        margin-top: 15px;
    }

    .m_nav {
        list-style: none;
        padding-left: 0;
    }

    .m_nav .btn {
        text-align: left !important;
    }

    #message_window {
        height: 350px;
        overflow: hidden;
        overflow-y: scroll;
    }

    .bubble_r {
        width: 45%;
        background: #fecda2;
        padding: 10px;
        margin-top: 10px;
        border-radius: 5px;
    }

    .bubble_s {
        width: 45%;
        background: #3b4146;
        padding: 10px;
        float: right;
        color: white;
        text-align: right;
        margin-top: 10px;
        border-radius: 5px;
        margin-right: 10px;
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
                            <label class="col-sm-12 col-form-label">Supplier</label>
                            <div class="col-sm-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-globe"></i></div>
                                    </div>
                                    <select class="form-control" id="sup">
                                        <option>Select</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-form-label">Warehouse</label>
                            <div class="col-sm-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-home"></i></div>
                                    </div>
                                    <select class="form-control" id="Warehouse">
                                        <option>Select</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-form-label">Reference No</label>
                            <div class="col-sm-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-sort"></i></div>
                                    </div>
                                    <input type="text" class="form-control" name="pay_amount">
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
                        <div class="form-group row">
                            <label class="col-sm-12 col-form-label">Description</label>
                            <div class="col-sm-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-newspaper"></i></div>
                                    </div>
                                    <textarea class="form-control" name="comment"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="finish float-right btn btn-primary">Add Purchase</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-9">
        <div class="card card-white">
            <div class="card-heading clearfix">
                <h4 class="card-title"><b>Purchase Item(s)</b></h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-12 col-form-label">Category</label>
                                    <div class="col-sm-12">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fas fa-star"></i></div>
                                            </div>
                                            <select class="form-control" id="product_category">
                                                <option value="0">Select</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-12 col-form-label">Product</label>
                                    <div class="col-sm-12">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fas fa-lightbulb"></i></div>
                                            </div>
                                            <select class="form-control" id="product">
                                                <option value="0">Select</option>
                                                <option data-id="1" data-price="5000" value="1">Complete Male Uniform</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered text-center" id="itemsTable">
                                <thead class="bg-info text-white">
                                    <tr>
                                        <th>S/N</th>
                                        <th>Product</th>
                                        <th>Unit Price</th>
                                        <th>Quantity</th>
                                        <th>Subtotal</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                                <tfoot>
                                    <tr style="font-weight:600;">
                                        <td colspan="3" class="text-right">Total</td>
                                        <td id="tUnit">0</td>
                                        <td id="tPrice">0.00</td>
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
    let delRow = function(e) {
        $(e).parents("tr").remove();
        for (let i = 0; i < $("#itemsTable tbody tr").length; i++) {
            $(`#itemsTable tbody tr:eq(${i})`).find(".row_id").text(i + 1);
        }
    }
    tableData = function(id, name, price) {
        let sn = $("#itemsTable tbody tr").length + 1;
        let html = `<tr><td class="row_id">${sn}</td><td>${name}</td><td>`
        html += `<input type="text" onkeyup="calcTable(this)" class="form-control itemUPrice" `;
        html += `value="${price}" name="itemUPrice[]"></td><td>`
        html += `<input type="text" onkeyup="calcTable(this)" class="form-control itemQty" `;
        html += `name="itemQty[]"></td><td><label class="itemSTotal">0.00</label></td><td>`;
        html += `<a href="javascript:;" class="btn btn-danger" onclick="delRow(this)">`;
        html += `<i class="fas fa-trash"></i></a></td></tr>`;
        return html;
    }
    calcTable = function(e) {
        let price = $(e).parents("tr").find("input.itemUPrice").val() << 0;
        let qty = $(e).parents("tr").find("input.itemQty").val() << 0;
        let label = $(e).parents("tr").find("label.itemSTotal");
        let totalUnit = $("#tUnit");
        let totalPrice = $("#tPrice");
        label.html((price * qty).toFixed(2));
        let totalQ = 0,
            totalP = 0;
        for (let i = 0; i < $("input.itemQty").length; i++) {
            totalQ += parseInt($("input.itemQty")[i].value) << 0;
        }
        for (let i = 0; i < $("label.itemSTotal").length; i++) {
            totalP += parseInt($(`label.itemSTotal:eq(${i})`).html()) << 0;
        }
        totalPrice.html(totalP.toFixed(2));
        totalUnit.html(totalQ);
    }
    $("#product").change(function() {
        if ($(this).val() == 0) return false;
        //send id back and get details or get pre stored details from selected
        let item_name = $("#product option:selected").text();
        let item_id = $("#product option:selected").data("id");
        let item_price = $("#product option:selected").data("price");
        $("#itemsTable tbody").append(tableData(item_id, item_name, item_price));
    });
</script>
<?php $this->load->view("inc/post-script") ?>