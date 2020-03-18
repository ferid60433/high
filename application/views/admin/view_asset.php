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
                                <th>Serial</th>
                                <td>01992018291</td>
                            </tr>
                            <tr>
                                <th>Title</th>
                                <td>HP All In One</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>Checked Out</td>
                            </tr>
                            <tr>
                                <th>Category</th>
                                <td>Computers</td>
                            </tr>
                            <tr>
                                <th>Location</th>
                                <td>Akwa Ibom</td>
                            </tr>
                            <tr>
                                <th>Condition</th>
                                <td>New</td>
                            </tr>
                            <tr>
                                <th>Create Date</th>
                                <td>18 Mar 2020</td>
                            </tr>
                            <tr>
                                <th>Attachment</th>
                                <td></td>
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