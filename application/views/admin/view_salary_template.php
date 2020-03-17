<?php $this->load->view("admin/inc/header") ?>
<style>
    .tab-pane .row {
        margin-top: 15px;
    }
</style>
<?php $this->load->view("inc/post-meta") ?>
<?php $this->load->view("admin/inc/pre-body") ?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-white">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">Salary Grade: B</div>
                    <div class="col-md-12">Basic Salary: 6,999.00</div>
                    <div class="col-md-12">Overtime Rate(Per Hour): 10.00</div>
                    <div class="col-md-6">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th colspan="2">Allowances</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        House Rent
                                    </td>
                                    <td>
                                        69.00
                                    </td>
                                </tr>
                                <tr style="font-weight:500;">
                                    <td>Total Allowances</td>
                                    <td>69.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th colspan="2">Deductions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        Provident Fund
                                    </td>
                                    <td>
                                        69.00
                                    </td>
                                </tr>
                                <tr style="font-weight:500;">
                                    <td>Total Deductions</td>
                                    <td>69.00</td>
                                </tr>
                            </tbody>
                        </table>
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
                                                <td>7,068.00</td>
                                            </tr>
                                            <tr>
                                                <td>Total Deductions</td>
                                                <td>69.00</td>
                                            </tr>
                                            <tr style="font-weight:500;">
                                                <td>Net Salary</td>
                                                <td>6,999.00</td>
                                            </tr>
                                        </table>
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
<?php $this->load->view("admin/inc/footer") ?>
<?php $this->load->view("inc/post-script") ?>