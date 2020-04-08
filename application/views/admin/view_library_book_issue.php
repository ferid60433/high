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
                <h4 class="text-center m-t-lg">Brad Pitts</h4>
                <p class="text-center">Student</p>
                <table class="table table-bordered">
                    <tr>
                        <td class="text-left">Library ID </td>
                        <td> 201935</td>
                    </tr>
                    <tr>
                        <td class="text-left">Registration No </td>
                        <td> 001</td>
                    </tr>
                    <tr>
                        <td class="text-left">Roll No</td>
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

    <div class="col-md-9">
        <div class="card card-white">
            <div class="card-body">
                <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="info-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="info" aria-selected="true">Book Info</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="info-tab">
                        <div class="row">
                            <div class="col-md-6">Book: Biology book</div>
                            <div class="col-md-6">Author: Adeniji</div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">Serial No: 101</div>
                            <div class="col-md-6">Issue Date: 08 Apr 2020</div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">Due Date: 30 Apr 2020</div>
                            <div class="col-md-6">Return Date:</div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">Note: </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/inc/footer") ?>
<?php $this->load->view("inc/post-script") ?>