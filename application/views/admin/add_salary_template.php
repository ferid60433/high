<?php $this->load->view("admin/inc/header") ?>
<style>
    .input-group-prepend,
    .input-group-text {
        width: 44px !important;
    }
</style>
<?php $this->load->view("inc/post-meta") ?>
<?php $this->load->view("admin/inc/pre-body") ?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-white">
            <div class="card-body">
                <div id="rootWizardStudent">
                    <form id="wizardFormStudent">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="subject" role="tabpanel">
                                <div class="row m-b-lg">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Salary Grade</label>
                                            <div class="col-sm-10">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="fas fa-clock"></i></div>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Salary Grade">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Basic Salary(&#8358;)</label>
                                            <div class="col-sm-10">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="fas fa-credit-card"></i></div>
                                                    </div>
                                                    <input type="text" id="basicSalary" class="form-control" placeholder="Basic Salary(&#8358;)">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Overtime Rate(&#8358;)</label>
                                            <div class="col-sm-10">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="fas fa-credit-card"></i></div>
                                                    </div>
                                                    <input type="text" class="form-control date-picker" placeholder="Overtime Rate Per Hour(&#8358;)">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="allowanceTable">
                                                <thead>
                                                    <tr>
                                                        <th colspan="3">Allowances</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><input class="form-control" placeholder="Enter Allowance Label" name="aLabel[]" /></td>
                                                        <td><input class="form-control aValue" placeholder="Value (&#8358;)" name="aValue[]" /></td>
                                                        <td><a onclick="newRow(this)" href="javascript:;" class="btn btn-primary" data-row-type="allowance"><i class="fas fa-plus"></i></a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="deductionTable">
                                                <thead>
                                                    <tr>
                                                        <th colspan="3">Deductions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><input class="form-control" placeholder="Enter Deduction Label" name="dLabel[]" /></td>
                                                        <td><input class="form-control dValue" placeholder="Value (&#8358;)" name="dValue[]" /></td>
                                                        <td><a onclick="newRow(this)" href="javascript:;" class="btn btn-primary" data-row-type="deduction"><i class="fas fa-plus"></i></a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-6"></div>
                                    <div class="col-md-6">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th colspan="2">Total Salary Details</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <table class="table table-bordered">
                                                            <tr>
                                                                <td>Gross Salary</td>
                                                                <td><input class="form-control" name="grossSalary" id="grossSalary" value="0" disabled /></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Total Deductions</td>
                                                                <td><input class="form-control" name="totalDeduction" id="totalDeduction" value="0" disabled /></td>
                                                            </tr>
                                                            <tr style="font-weight:500;">
                                                                <td>Net Salary</td>
                                                                <td><input class="form-control" name="netSalary" id="netSalary" value="0" disabled /></td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" class="finish float-right btn btn-primary btn-sm">Finish</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/inc/footer") ?>
<script>
    let newRow = function(e) {
        let $rt = $(e).data("row-type");
        let $table = $(`#${$rt}Table`);
        let $str = '<tr><td><input class="form-control" placeholder="Enter ';
        $str += ($rt === "allowance") ? 'Allowance' : 'Deduction';
        $str += ' Label" name="';
        $str += ($rt === "allowance") ? 'aLabel[]" ' : 'dLabel[]" ';
        $str += '/></td>';
        $str += '<td><input class="form-control ';
        $str += ($rt === "allowance") ? 'aValue" ' : 'dValue" ';
        $str += 'onchange="calcForm()" placeholder="Value (&#8358;)" name="';
        $str += ($rt === "allowance") ? 'aValue[]" ' : 'dValue[]" ';
        $str += ' /></td>';
        $str += '<td><a href="javascript:;" class="btn btn-primary" data-row-type="' + $rt;
        $str += '" onclick="newRow(this)"';
        $str += '><i class="fas fa-plus"></i></a> ';
        $str += '<a href="javascript:;" class="btn btn-danger" ';
        $str += 'onclick="delRow(this)"';
        $str += '><i class="fas fa-trash"></i></a></td></tr>';
        $table.find("tbody").append($str)
    }
    let delRow = function(e) {
        $(e).parents("tr").remove();
        calcForm();
    }
    let calcForm = function() {
        let basicSalary = parseInt($("#basicSalary").val()) << 0;
        let netSalary = $("#netSalary");
        let grossSalary = $("#grossSalary");
        let totalDeduction = $("#totalDeduction");
        let totalD = 0;
        for (let i = 0; i < $(".dValue").length; i++) {
            totalD += parseInt($(".dValue")[i].value) << 0;
        }
        totalDeduction.val(totalD);
        let totalA = 0;
        for (let i = 0; i < $(".aValue").length; i++) {
            totalA += parseInt($(".aValue")[i].value) << 0;
        }
        let grossValue = basicSalary + totalA;
        grossSalary.val(grossValue)
        netSalary.val(grossValue - totalD);
    }
    $("input").change(calcForm);
</script>
<?php $this->load->view("inc/post-script") ?>