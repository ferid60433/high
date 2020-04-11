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
                        <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Profile</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row">
                            <div class="col-md-6">Group/Club: Drama</div>
                            <div class="col-md-6">Optional Subjects: </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">Date of Birth: 04 Apr 2001</div>
                            <div class="col-md-6">Gender: Male</div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">Blood Group: A+</div>
                            <div class="col-md-6">Religion: Christianity</div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">Email: bp@svl.com</div>
                            <div class="col-md-6">Phone: 08012345678</div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">State: Lagos</div>
                            <div class="col-md-6">Country: Nigeria</div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">Remarks: Very attentive</div>
                            <div class="col-md-6">Username: bpitts</div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">Address: Schoolville ltd.</div>
                            <div class="col-md-6">Extra Curricular Activities: </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/inc/footer") ?>
<?php $this->load->view("inc/post-script")?>