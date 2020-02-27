<?php $this->load->view("admin/inc/header") ?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-white">
            <div class="card-heading clearfix">
                <div class="row">
                    <div class="col-md-6">
                    <button type="button" class="btn btn-outline-primary" onclick="window.location='<?= base_url('admin/sattendance/add') ?>'"><i class="fas fa-plus"></i> Add Class Attendance</button>
                    <button type="button" class="btn btn-outline-info" onclick="window.location='<?= base_url('admin/sattendance/addsubject') ?>'"><i class="fas fa-plus"></i> Add Subject Attendance</button>
                    </div>
                    <div class="col-md-6">
                        <form>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Class</label>
                                <div class="col-sm-10"> 
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-school"></i></div>
                                        </div>
                                        <select class="form-control" id="gender" name="gender">
                                            <option>Select</option>
                                            <option value="JSS1">JSS1</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="">
                    <div class="card-body">
                        <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="all-tab" data-toggle="tab" href="#all" role="tab" aria-controls="all" aria-selected="true">All sattendance</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="eachSection-tab" data-toggle="tab" href="#eachSection" role="tab" aria-controls="eachSection" aria-selected="false">Section / Arm sattendance (e.g. JSS1 C)</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <td>
                                                SUNDAY
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                MONDAY
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                TUESDAY
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                WEDNESDAY
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                THURSDAY
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                FRIDAY
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                SATURDAY
                                            </td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="eachSection" role="tabpanel" aria-labelledby="eachSection-tab">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <td>
                                                WEDNESDAY
                                            </td>
                                            <td>
                                                10:30 AM-11:10 AM<br>
                                                Subject : Basic Tech<br>
                                                Teacher :<br>
                                                Room : classroom
                                                <div>
                                                    <a href="#" title="Edit" class="btn btn-outline-warning"><i class="fas fa-edit"></i></a>
                                                    <a href="#" title="Delete" class="btn btn-outline-danger"><i class="fas fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                THURSDAY
                                            </td>
                                            <td></td>
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