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
                        <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="parents-tab" data-toggle="tab" href="#parents" role="tab" aria-controls="parents" aria-selected="false">Parents</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="routine-tab" data-toggle="tab" href="#routine" role="tab" aria-controls="routine" aria-selected="false">Routine</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="attendance-tab" data-toggle="tab" href="#attendance" role="tab" aria-controls="attendance" aria-selected="false">Attendance</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="mark-tab" data-toggle="tab" href="#mark" role="tab" aria-controls="mark" aria-selected="false">Mark</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="invoice-tab" data-toggle="tab" href="#invoice" role="tab" aria-controls="invoice" aria-selected="false">Invoice</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="payment-tab" data-toggle="tab" href="#payment" role="tab" aria-controls="payment" aria-selected="false">Payment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="document-tab" data-toggle="tab" href="#document" role="tab" aria-controls="document" aria-selected="false">Document</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="skill-tab" data-toggle="tab" href="#skill" role="tab" aria-controls="skill" aria-selected="false">Skill</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="remark-tab" data-toggle="tab" href="#remark" role="tab" aria-controls="remark" aria-selected="false">Remark</a>
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
                    <div class="tab-pane fade" id="parents" role="tabpanel" aria-labelledby="parents-tab">
                        <div class="row">
                            <div class="col-md-6">Guardian: Mr & Mrs Pitts</div>
                            <div class="col-md-6">Father's Name: Mr Pitts</div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">Mother's Name: Mrs Pitts</div>
                            <div class="col-md-6">Father's Profession: Engineer</div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">Mother's Profession: Teacher</div>
                            <div class="col-md-6">Email: pitts@aol.com</div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">Phone: 08012345678</div>
                            <div class="col-md-6">Username: boomboom</div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">Address: Schoolville ltd. Schoolville ltd.</div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="routine" role="tabpanel" aria-labelledby="routine-tab">
                        <div class="col-md-12 table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>
                                            Day
                                        </th>
                                        <th>
                                            1st Period
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Monday</td>
                                        <td>N/A</td>
                                    </tr>
                                    <tr>
                                        <td>Tuesday</td>
                                        <td>N/A</td>
                                    </tr>
                                    <tr>
                                        <td>Wednesday</td>
                                        <td>
                                            10:30 AM-11:10 AM
                                            Subject : Basic Tech
                                            Teacher :
                                            Room : classroom
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Thursday</td>
                                        <td>N/A</td>
                                    </tr>
                                    <tr>
                                        <td>Friday</td>
                                        <td>N/A</td>
                                    </tr>
                                    <tr>
                                        <td>Saturday</td>
                                        <td>N/A</td>
                                    </tr>
                                    <tr>
                                        <td>Sunday</td>
                                        <td>N/A</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="attendance" role="tabpanel" aria-labelledby="attendance-tab">
                        <div class="col-md-12 table-responsive">
                            <table class="col-md-12 table table-bordered">
                                <tr>
                                    <td>#</td>
                                    <th>1</th>
                                    <th>2</th>
                                    <th>3</th>
                                    <th>4</th>
                                    <th>5</th>
                                    <th>6</th>
                                    <th>7</th>
                                    <th>8</th>
                                    <th>9</th>
                                    <th>10</th>
                                    <th>11</th>
                                    <th>12</th>
                                    <th>13</th>
                                    <th>14</th>
                                    <th>15</th>
                                    <th>16</th>
                                    <th>17</th>
                                    <th>18</th>
                                    <th>19</th>
                                    <th>20</th>
                                    <th>21</th>
                                    <th>22</th>
                                    <th>23</th>
                                    <th>24</th>
                                    <th>25</th>
                                    <th>26</th>
                                    <th>27</th>
                                    <th>28</th>
                                    <th>29</th>
                                    <th>30</th>
                                    <th>31</th>
                                </tr>
                                <tr>
                                    <th>Sep</th>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                </tr>
                                <tr>
                                    <th>Oct</th>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                </tr>
                                <tr>
                                    <th>Nov</th>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                </tr>
                                <tr>
                                    <th>Dec</th>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                </tr>
                                <tr>
                                    <th>Jan</th>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                </tr>
                                <tr>
                                    <th>Feb</th>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td bgcolor="aqua">P</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                </tr>
                                <tr>
                                    <th>Mar</th>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                </tr>
                                <tr>
                                    <th>Apr</th>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                </tr>
                                <tr>
                                    <th>May</th>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                </tr>
                                <tr>
                                    <th>Jun</th>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                </tr>
                                <tr>
                                    <th>Jul</th>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                </tr>
                                <tr>
                                    <th>Aug</th>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                </tr>
                                <tr>
                                    <td colspan="32">Total Holiday: 0, Total Weekend days: 0,Total Present: 1, Total Late With Excuse: 0, Total Late: 0, Total Absent: 0 </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="mark" role="tabpanel" aria-labelledby="mark-tab">
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
                    <div class="tab-pane fade" id="invoice" role="tabpanel" aria-labelledby="invoice-tab">
                        <div class="col-md-12 table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>
                                            #
                                        </th>
                                        <th>
                                            Fee Type
                                        </th>
                                        <th>
                                            Date
                                        </th>
                                        <th>
                                            Status
                                        </th>
                                        <th>
                                            Amount
                                        </th>
                                        <th>
                                            Discount
                                        </th>
                                        <th>
                                            Paid
                                        </th>
                                        <th>
                                            Weaver
                                        </th>
                                        <th>
                                            Fine
                                        </th>
                                        <th>
                                            Due
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            Tuition
                                        </td>
                                        <td>
                                            21 Jan 2020
                                        </td>
                                        <td>
                                            <span class="badge badge-danger">Not Paid</span>
                                        </td>
                                        <td>
                                            58,000.00
                                        </td>
                                        <td>
                                            2,900.00
                                        </td>
                                        <td>
                                            0.00
                                        </td>
                                        <td>
                                            0.00
                                        </td>
                                        <td>
                                            0.00
                                        </td>
                                        <td>
                                            55,100.00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            2
                                        </td>
                                        <td>
                                            ICT
                                        </td>
                                        <td>
                                            21 Jan 2020
                                        </td>
                                        <td>
                                            <span class="badge badge-danger">Not Paid</span>
                                        </td>
                                        <td>
                                            5,000.00
                                        </td>
                                        <td>
                                            0.00
                                        </td>
                                        <td>
                                            0.00
                                        </td>
                                        <td>
                                            0.00
                                        </td>
                                        <td>
                                            0.00
                                        </td>
                                        <td>
                                            5,000.00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            3
                                        </td>
                                        <td>
                                            PTA
                                        </td>
                                        <td>
                                            21 Jan 2020
                                        </td>
                                        <td>
                                            <span class="badge badge-danger">Not Paid</span>
                                        </td>
                                        <td>
                                            1,000.00
                                        </td>
                                        <td>
                                            0.00
                                        </td>
                                        <td>
                                            0.00
                                        </td>
                                        <td>
                                            0.00
                                        </td>
                                        <td>
                                            0.00
                                        </td>
                                        <td>
                                            1,000.00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            4
                                        </td>
                                        <td>
                                            Uniform
                                        </td>
                                        <td>
                                            21 Jan 2020
                                        </td>
                                        <td>
                                            <span class="badge badge-danger">Not Paid</span>
                                        </td>
                                        <td>
                                            10,000.00
                                        </td>
                                        <td>
                                            0.00
                                        </td>
                                        <td>
                                            0.00
                                        </td>
                                        <td>
                                            0.00
                                        </td>
                                        <td>
                                            0.00
                                        </td>
                                        <td>
                                            10,000.00
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td style="font-weight:600;" colspan="4">
                                            Total
                                        </td>
                                        <td>
                                            74,000.00
                                        </td>
                                        <td>
                                            2,900.00
                                        </td>
                                        <td>
                                            0.00
                                        </td>
                                        <td>
                                            0.00
                                        </td>
                                        <td>
                                            0.00
                                        </td>
                                        <td>
                                            71,100.00
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="payment" role="tabpanel" aria-labelledby="payment-tab">
                        <div class="col-md-12 table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>
                                            #
                                        </th>
                                        <th>
                                            Fee Type
                                        </th>
                                        <th>
                                            Date
                                        </th>
                                        <th>
                                            Paid
                                        </th>
                                        <th>
                                            Weaver
                                        </th>
                                        <th>
                                            Fine
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>

                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td style="font-weight:600;" colspan="3">
                                            Total
                                        </td>
                                        <td>
                                            0.00
                                        </td>
                                        <td>
                                            0.00
                                        </td>
                                        <td>
                                            0.00
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="document" role="tabpanel" aria-labelledby="document-tab">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#docMod" style="margin-bottom:10px;margin-left:10px;">Add Document</button>
                        <div class="modal fade" id="docMod" tabindex="-1" role="dialog" aria-labelledby="docModLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form method="post">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="docModLabel">Document upload</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Title</label>
                                                <div class="col-sm-10">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="fas fa-file"></i></div>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="Document Title" id="title" name="title" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">File</label>
                                                <div class="col-sm-10">
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
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Upload</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>
                                            #
                                        </th>
                                        <th>
                                            Title
                                        </th>
                                        <th>
                                            Date
                                        </th>
                                        <th>
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="skill" role="tabpanel" aria-labelledby="skill-tab">
                        <form method="post">
                            <div class="row m-b-lg">
                                <div class="form-group col-md-6 row">
                                    <label class="col-sm-3 col-form-label">Cricket</label>
                                    <div class="col-sm-9">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fas fa-futbol"></i></div>
                                            </div>
                                            <input type="number" class="form-control" placeholder="Cricket" name="cricket">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 row">
                                    <label class="col-sm-3 col-form-label">Running</label>
                                    <div class="col-sm-9">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fas fa-futbol"></i></div>
                                            </div>
                                            <input type="number" class="form-control" placeholder="Running" name="running">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 row">
                                    <label class="col-sm-3 col-form-label">Attitude</label>
                                    <div class="col-sm-9">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fas fa-futbol"></i></div>
                                            </div>
                                            <input type="number" class="form-control" placeholder="Attitude" name="attitude">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 row">
                                    <label class="col-sm-3 col-form-label">Jumping</label>
                                    <div class="col-sm-9">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fas fa-futbol"></i></div>
                                            </div>
                                            <input type="number" class="form-control" placeholder="Jumping" name="jumping">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 row">
                                    <label class="col-sm-3 col-form-label">Jugging</label>
                                    <div class="col-sm-9">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fas fa-futbol"></i></div>
                                            </div>
                                            <input type="number" class="form-control" placeholder="Jugging" name="jugging">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 row">
                                    <label class="col-sm-3 col-form-label">Speaking</label>
                                    <div class="col-sm-9">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fas fa-futbol"></i></div>
                                            </div>
                                            <input type="number" class="form-control" placeholder="Speaking" name="speaking">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 row">
                                    <label class="col-sm-3 col-form-label">Friendship</label>
                                    <div class="col-sm-9">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fas fa-futbol"></i></div>
                                            </div>
                                            <input type="number" class="form-control" placeholder="Friendship" name="friendship">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 row">
                                    <label class="col-sm-3 col-form-label">Football</label>
                                    <div class="col-sm-9">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fas fa-futbol"></i></div>
                                            </div>
                                            <input type="number" class="form-control" placeholder="Football" name="football">
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-block btn-primary btn-sm">Save</button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="remark" role="tabpanel" aria-labelledby="remark-tab">
                        <form method="post">
                            <div class="row m-b-lg">
                                <div class="form-group col-md-6 row">
                                    <label class="col-sm-3 col-form-label">Remark</label>
                                    <div class="col-sm-9">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fas fa-comment"></i></div>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Remark" name="remark">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 row">
                                    <label class="col-sm-3 col-form-label">Attendance</label>
                                    <div class="col-sm-9">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fas fa-calendar"></i></div>
                                            </div>
                                            <input type="number" class="form-control" placeholder="Attendance" name="attendance">
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-block btn-primary btn-sm">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/inc/footer") ?>
<?php $this->load->view("inc/post-script")?>