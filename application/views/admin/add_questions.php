<?php $this->load->view("admin/inc/header") ?>
<style>
    .input-group-prepend,
    .input-group-text {
        width: 44px !important;
    }

    div.checker,
    div.radio {
        vertical-align: unset !important;
    }

    div.checker span,
    div.radio span {
        background-position: unset !important;
    }

    .qr:not(:first-child) {
        margin-top: 30px;
    }

    .form-inline label {
        justify-content: unset !important;
    }

    .qNum {
        background: #2c7be5;
        border-radius: 100%;
        width: 30px;
        height: 30px;
        text-align: center;
        color: #fff;
        font-weight: bold;
        padding-top: 4px;
    }

    .qPhrase {
        padding: 2px 5px 2px;
        background: #cecefe;
    }
</style>
<?php $this->load->view("inc/post-meta") ?>
<?php $this->load->view("admin/inc/pre-body") ?>
<div class="row">
    <div class="col-md-8">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-white">
                    <div class="card-heading clearfix">
                        <h4 class="card-title">Question Bank</h4>
                    </div>
                    <div class="card-body">
                        <form class="form-inline row">
                            <div class="form-group row col-md-6">
                                <label class="col-sm-12 col-form-label">Difficulty Level</label>
                                <div class="col-sm-12">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-graduation-cap"></i></div>
                                        </div>
                                        <select class="form-control" id="exam" name="exam">
                                            <option>Select</option>
                                            <option value="bus assistant">High</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row col-md-6">
                                <label class="col-sm-12 col-form-label">Question Group</label>
                                <div class="col-sm-12">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-book"></i></div>
                                        </div>
                                        <select class="form-control" id="class" name="class">
                                            <option>Select</option>
                                            <option value="bus assistant">English 1</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Question</th>
                                        <th>Question Type</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>What is 2 + 2?</td>
                                        <td>Single Answer</td>
                                        <td><button class="btn btn-primary float-right" title="Add Question"><i class="fas fa-plus"></i></button></td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="4"><button class="btn btn-primary float-right" title="Add All Question"><i class="fas fa-plus"></i> Add All Questions</button></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card card-white">
                    <div class="card-heading clearfix">
                        <h4 class="card-title">Associated Questions</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 row qr">
                                <h4 class="col-md-1">1.</h4>
                                <div class="col-md-11" style="margin-top:-5px;">
                                    <div class="card-heading clearfix row">
                                        <h5 class="col-md-7">What is 2 + 2?</h5>
                                        <span class="col-md-5 text-right" style="font-weight:500">1 Mark</span>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="radio" name="single" checked disabled> 1
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="radio" name="single" disabled> 2
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="radio" name="single" disabled> 3
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="radio" name="single" disabled> 4
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12"><button class="btn btn-danger btn-sm float-right"><i class="fas fa-trash"></i> Remove Question 1</button></div>
                            </div>
                            <div class="col-md-12 row qr">
                                <h4 class="col-md-1">2.</h4>
                                <div class="col-md-11" style="margin-top:-5px;">
                                    <div class="card-heading clearfix row">
                                        <h5 class="col-md-7">Who killed James?</h5>
                                        <span class="col-md-5 text-right" style="font-weight:500">1 Mark</span>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="checkbox" checked disabled> John
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="checkbox" disabled> Jacob
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="checkbox" disabled> Jaguar
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="checkbox" disabled checked> Jimmy
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12"><button class="btn btn-danger btn-sm float-right"><i class="fas fa-trash"></i> Remove Question 2</button></div>
                            </div>
                            <div class="col-md-12 row qr">
                                <h4 class="col-md-1">3.</h4>
                                <div class="col-md-11" style="margin-top:-5px;">
                                    <div class="card-heading clearfix row">
                                        <h5 class="col-md-7">What is Biology?</h5>
                                        <span class="col-md-5 text-right" style="font-weight:500">5 Marks</span>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-sm-1">
                                                        <div class="qNum">1</div>
                                                    </div>
                                                    <div class="col-sm-11">
                                                        <h5 class="qPhrase">The study of life</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12"><button class="btn btn-danger btn-sm float-right"><i class="fas fa-trash"></i> Remove Question 3</button></div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-white">
                    <div class="card-heading clearfix">
                        <h4 class="card-title">Online Exam</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Exam Title:</th>
                                    <td>Second Term Exam</td>
                                </tr>
                                <tr>
                                    <th>Exam Type:</th>
                                    <td>Only Duration</td>
                                </tr>
                                <tr>
                                    <th>Date:</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Time From:</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Time To:</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Duration:</th>
                                    <td>40 Minutes</td>
                                </tr>
                                <tr>
                                    <th>Description:</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Random:</th>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <th>Mark Type:</th>
                                    <td>Fixed</td>
                                </tr>
                                <tr>
                                    <th>Pass Value:</th>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <th>Negative Mark:</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Instruction:</th>
                                    <td>Answer All</td>
                                </tr>
                                <tr>
                                    <th>Class:</th>
                                    <td>JSS1</td>
                                </tr>
                                <tr>
                                    <th>Section:</th>
                                    <td>JSS1</td>
                                </tr>
                                <tr>
                                    <th>Student Group:</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Subject:</th>
                                    <td>English Language</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card card-white">
                    <div class="card-heading clearfix">
                        <h4 class="card-title">Question Summary</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Question</th>
                                        <th>Mark</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>What is 2 + 2?</td>
                                        <td>1</td>
                                        <td><button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Who killed James?</td>
                                        <td>1</td>
                                        <td><button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>What is Biology?</td>
                                        <td>5</td>
                                        <td><button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button></td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="2"><b>Total Marks</b></td>
                                        <td colspan="2"><b>7</b></td>
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
    $(document).ready(function() {
        $("#exam_type").change(function() {
            switch (this.value) {
                case "1":
                    $("#date_div").hide();
                    $("#time_div").hide();
                    break;
                case "2":
                    $("#date_div").show();
                    $("#time_div").hide();
                    break;
                case "3":
                    $("#date_div").show();
                    $("#time_div").show();
                    break;
                default:
                    $("#date_div").hide();
                    $("#time_div").hide();
                    break;
            }
        })
        $('input').iCheck({
            checkboxClass: 'icheckbox_square',
            radioClass: 'iradio_square',
            increaseArea: '50%'
        });
    });
</script>
<?php $this->load->view("inc/post-script")?>