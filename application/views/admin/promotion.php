<?php $this->load->view("admin/inc/header") ?>
<style>
    .input-group-prepend,
    .input-group-text {
        width: 44px !important;
    }

    .adv .row {
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
                <p>
                    <b>Note : </b>Select promotional academic year and class where you want to promote.<br>
                    <b>For Normal : </b> No need to fulfill student pass mark in exam. <br>
                    <b>For Advance : </b> You may change each subject pass mark. Also Specifically you can select semester or mark percentage or both which student must pass within those criteria.
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card card-white">
            <div class="card-body">
                <form class="form-inline row">
                    <div class="form-group row col-md-3">
                        <label class="col-sm-12 col-form-label">Academic Year</label>
                        <div class="col-sm-12">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-clock"></i></div>
                                </div>
                                <select class="form-control" id="year" name="year">
                                    <option>Select</option>
                                    <option value="bus assistant">2019/2020</option>
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
                        <label class="col-sm-12 col-form-label">Promotion Academic Year</label>
                        <div class="col-sm-12">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-clock"></i></div>
                                </div>
                                <select class="form-control" id="year" name="year">
                                    <option>Select</option>
                                    <option value="bus assistant">2020/2021</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row col-md-3">
                        <label class="col-sm-12 col-form-label">Promotion Class</label>
                        <div class="col-sm-12">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-school"></i></div>
                                </div>
                                <select class="form-control" id="class" name="class">
                                    <option>Select</option>
                                    <option value="bus assistant">JSS2</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card card-white">
            <div class="card-body">
                <div class="alert alert-dark mb-0 text-center" role="alert">
                    <div class="form-check">
                        <input class="form-check-input promo_type" type="radio" name="promo_type" id="val1" value="normal" checked>
                        <label class="form-check-label" for="val1">
                            Normal
                        </label>
                        <input class="form-check-input promo_type" type="radio" name="promo_type" id="val2" value="advance">
                        <label class="form-check-label" for="val2">
                            Advance
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form class="col-md-12" method="post" action="<?= base_url("admin/promotion/add") ?>">
        <div class="row">
            <div class="col-md-12 advance_section d-none">
                <div class="card card-white">
                    <div class="card-body adv">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="alert alert-dark mb-0" role="alert">
                                    <div class="row">
                                        <div class="col-md-4">
                                            Exam
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-check">
                                                <input class="form-check-input checkbox" type="checkbox" id="ex1" checked>
                                                <label class="form-check-label" for="ex1">
                                                    Second Term Exam
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="alert alert-dark mb-0" role="alert">
                                    <div class="row">
                                        <div class="col-md-4">
                                            Mark Percentage/Distribution
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-check">
                                                <input class="form-check-input checkbox" type="checkbox" id="md1" checked>
                                                <label class="form-check-label" for="md1">
                                                    C.A.
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input checkbox" type="checkbox" id="md2" checked>
                                                <label class="form-check-label" for="md2">
                                                    Exam
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert alert-dark mb-0" role="alert">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-form-label">English Pass Mark</label>
                                                <div class="col-sm-12">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="fas fa-check"></i></div>
                                                        </div>
                                                        <input type="text" value="40" class="form-control" placeholder="English Pass Mark">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card card-white">
                    <div class="card-body">
                        <div class="col-md-12 text-center"><button class="btn btn-primary btn-lg mt-2">Promotion Mark Setting</button></div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<?php $this->load->view("admin/inc/footer") ?>
<script>
    $(".promo_type").click(function() {
        switch (this.value) {
            case "advance":
                $(".advance_section").removeClass("d-none");
                break;
            default:
                $(".advance_section").addClass("d-none");
        }
    })
</script>