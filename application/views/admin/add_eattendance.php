<?php $this->load->view("admin/inc/header") ?>
<style>
    .tab-pane .row {
        margin-top: 15px;
    }

    .form-inline label {
        justify-content: unset !important;
    }
</style>
<?php $this->load->view("inc/post-meta") ?>
<?php $this->load->view("admin/inc/pre-body") ?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-white">
            <div class="card-body">
                <form class="form-inline row">
                    <div class="col-md-10 row">
                        <div class="form-group row col-md-3">
                            <label class="col-sm-12 col-form-label">Select Exam</label>
                            <div class="col-sm-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-graduation-cap"></i></div>
                                    </div>
                                    <select class="form-control" id="exam" name="exam">
                                        <option>Select</option>
                                        <option value="bus assistant">Second Term Exam</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row col-md-3">
                            <label class="col-sm-12 col-form-label">Class</label>
                            <div class="col-sm-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-school"></i></div>
                                    </div>
                                    <select class="form-control" id="class" name="class">
                                        <option>Select</option>
                                        <option value="bus assistant">JSS1</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row col-md-3">
                            <label class="col-sm-12 col-form-label">Section</label>
                            <div class="col-sm-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-school"></i></div>
                                    </div>
                                    <select class="form-control" id="section" name="section">
                                        <option>Select</option>
                                        <option value="bus assistant">JSS1</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row col-md-3">
                            <label class="col-sm-12 col-form-label">Subject</label>
                            <div class="col-sm-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-school"></i></div>
                                    </div>
                                    <select class="form-control" id="subject" name="subject">
                                        <option>Select</option>
                                        <option value="bus assistant">English</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row col-md-2">
                        <button type="submit" class="btn btn-primary btn-lg">Attendance</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card card-white">
            <div class="card-body">
                <div class="alert alert-dark mb-0 text-center" role="alert">
                    Exam Attendance Details<br>
                    Exam : Second Term Exam<br>
                    Class : JSS 1<br>
                    Section : JSS 1<br>
                    Subject : Agricultire
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card card-white">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Roll</th>
                                <th>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="markAll">
                                        Action
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td></td>
                                <td>Brad Pitts</td>
                                <td>bp@svl.com</td>
                                <td>3</td>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input checkbox" type="checkbox" id="gc1">
                                        <label class="form-check-label" for="gc1">
                                            Present
                                        </label>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/inc/footer") ?>
<script>
    $('#markAll').change(function() {
        if (this.checked) {
            $('.checkbox').parent().addClass("checked");
        } else {
            $('.checkbox').parent().removeClass("checked");
        }
    })
</script>
<?php $this->load->view("inc/post-script")?>