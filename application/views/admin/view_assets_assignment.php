<?php $this->load->view("admin/inc/header") ?>
<style>
    th{
        font-weight:bold;
    }
</style>
<?php $this->load->view("inc/post-meta") ?>
<?php $this->load->view("admin/inc/pre-body") ?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-white">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" style="width: 100%;">
                        <tbody>
                            <tr>
                                <th>Role</th>
                                <td>Accountant</td>
                            </tr>
                            <tr>
                                <th>Checkout To</th>
                                <td>Mr John</td>
                            </tr>
                            <tr>
                                <th>Asset</th>
                                <td>HP All In One</td>
                            </tr>
                            <tr>
                                <th>Assign Quantity</th>
                                <td>1</td>
                            </tr>
                            <tr>
                                <th>Due Date</th>
                                <td>18 Mar 2020</td>
                            </tr>
                            <tr>
                                <th>Checkout Date</th>
                                <td>02 Mar 2020</td>
                            </tr>
                            <tr>
                                <th>Checkin Date</th>
                                <td>17 Mar 2020</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>Checked Out</td>
                            </tr>
                            <tr>
                                <th>Note</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Location</th>
                                <td>Akwa Ibom</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/inc/footer") ?>
<?php $this->load->view("inc/post-script")?>