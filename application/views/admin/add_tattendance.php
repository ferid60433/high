<?php $this->load->view("admin/inc/header") ?>
<style>
    .tab-pane .row {
        margin-top: 15px;
    }

    .form-inline label {
        justify-content: unset !important;
    }
</style>
<div class="row">
    <div class="col-md-12">
        <div class="card card-white">
            <div class="card-body">
                <form class="form-inline row">
                    <div class="col-md-3"></div>
                    <div class="form-group row col-md-4">
                        <label class="col-sm-12 col-form-label">Date</label>
                        <div class="col-sm-12">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-calendar"></i></div>
                                </div>
                                <input type="text" class="form-control date-picker" id="date" name="date">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row col-md-4">
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
                    Attendance Details<br>
                    Day : Friday<br>
                    Date : 28th February 2020
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card card-white">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="display table" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Attendance</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td></td>
                                <td>Mrs Chinenye</td>
                                <td>chi@school.com</td>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="att" id="att1" value="P">
                                        <label class="form-check-label" for="att1">
                                            Present
                                        </label>
                                        <input class="form-check-input" type="radio" name="att" id="att2" value="LWE">
                                        <label class="form-check-label" for="att2">
                                            Late With Excuse
                                        </label>
                                        <input class="form-check-input" type="radio" name="att" id="att3" value="L">
                                        <label class="form-check-label" for="att3">
                                            Late
                                        </label>
                                        <input class="form-check-input" type="radio" name="att" id="att4" value="A">
                                        <label class="form-check-label" for="att4">
                                            Absent
                                        </label>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="col-md-12"><button class="btn btn-primary btn-lg float-right mt-2">Submit</button></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/inc/footer") ?>