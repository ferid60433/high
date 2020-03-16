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
                        <td class="text-left">Admission No </td>
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

    <div class="col-md-9">
        <div class="card card-white">
            <div class="card-body">
                <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="mark-tab" data-toggle="tab" href="#mark" role="tab" aria-controls="mark" aria-selected="true">Mark</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="mark" role="tabpanel" aria-labelledby="mark-tab">
                        <div class="col-md-12 table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                    <td>
                                        Second Term Exam
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table class="table table-bordered">
                                            <thead class="text-center" style="background: #c7c7c7">
                                                <tr>
                                                    <th rowspan="2">Subject</th>
                                                    <th colspan="2">C.A.</th>
                                                    <th colspan="2">Exam</th>
                                                    <th colspan="3">Total</th>
                                                </tr>
                                                <tr style="background: #b59e9e;">
                                                    <td>Mark</td>
                                                    <td style="background: #9ab0c7">Highest Mark</td>
                                                    <td>Mark</td>
                                                    <td style="background: #9ab0c7">Highest Mark</td>
                                                    <td>Mark</td>
                                                    <td style="background: #93b3ab">Point</td>
                                                    <td style="background: #93b3ab">Grade</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Basic Tech</td>
                                                    <td>30</td>
                                                    <td>30</td>
                                                    <td>50</td>
                                                    <td>56</td>
                                                    <td>80</td>
                                                    <td></td>
                                                    <td>A</td>
                                                </tr>
                                                <tr>
                                                    <td>Agric</td>
                                                    <td>30</td>
                                                    <td>30</td>
                                                    <td>50</td>
                                                    <td>56</td>
                                                    <td>80</td>
                                                    <td></td>
                                                    <td>A</td>
                                                </tr>
                                                <tr>
                                                    <td>English</td>
                                                    <td>30</td>
                                                    <td>30</td>
                                                    <td>50</td>
                                                    <td>56</td>
                                                    <td>80</td>
                                                    <td></td>
                                                    <td>A</td>
                                                </tr>
                                                <tr>
                                                    <td>Mathematics</td>
                                                    <td>30</td>
                                                    <td>30</td>
                                                    <td>50</td>
                                                    <td>56</td>
                                                    <td>80</td>
                                                    <td></td>
                                                    <td>A</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        Total Marks: 320, Average Mark: 80, Average Point: , Average Grade: A
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-12 table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                    <td>
                                        Third Term Exam
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table class="table table-bordered">
                                            <thead class="text-center" style="background: #c7c7c7">
                                                <tr>
                                                    <th rowspan="2">Subject</th>
                                                    <th colspan="2">C.A.</th>
                                                    <th colspan="2">Exam</th>
                                                    <th colspan="3">Total</th>
                                                </tr>
                                                <tr style="background: #b59e9e;">
                                                    <td>Mark</td>
                                                    <td style="background: #9ab0c7">Highest Mark</td>
                                                    <td>Mark</td>
                                                    <td style="background: #9ab0c7">Highest Mark</td>
                                                    <td>Mark</td>
                                                    <td style="background: #93b3ab">Point</td>
                                                    <td style="background: #93b3ab">Grade</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Basic Tech</td>
                                                    <td>30</td>
                                                    <td>30</td>
                                                    <td>50</td>
                                                    <td>56</td>
                                                    <td>80</td>
                                                    <td></td>
                                                    <td>A</td>
                                                </tr>
                                                <tr>
                                                    <td>Agric</td>
                                                    <td>30</td>
                                                    <td>30</td>
                                                    <td>50</td>
                                                    <td>56</td>
                                                    <td>80</td>
                                                    <td></td>
                                                    <td>A</td>
                                                </tr>
                                                <tr>
                                                    <td>English</td>
                                                    <td>30</td>
                                                    <td>30</td>
                                                    <td>50</td>
                                                    <td>56</td>
                                                    <td>80</td>
                                                    <td></td>
                                                    <td>A</td>
                                                </tr>
                                                <tr>
                                                    <td>Mathematics</td>
                                                    <td>30</td>
                                                    <td>30</td>
                                                    <td>50</td>
                                                    <td>56</td>
                                                    <td>80</td>
                                                    <td></td>
                                                    <td>A</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        Total Marks: 320, Average Mark: 80, Average Point: , Average Grade: A
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/inc/footer") ?>
<?php $this->load->view("inc/post-script")?>