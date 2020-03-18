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
                        <td class="text-left">Phone</td>
                        <td> 09023251661</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-9">
        <div class="card card-white">
            <div class="card-body">
                <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="salary-tab" data-toggle="tab" href="#salary" role="tab" aria-controls="salary" aria-selected="true">Salary Info</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="salary" role="tabpanel" aria-labelledby="salary-tab">
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
    </div>
</div>
<?php $this->load->view("admin/inc/footer") ?>
<?php $this->load->view("inc/post-script") ?>