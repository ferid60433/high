<?php $this->load->view("admin/inc/header") ?>
<style>
    .input-group-prepend,
    .input-group-text {
        width: 44px !important;
    }

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
                <p>
                    <b>Note:</b> Select student for enroll same class or promote to next class.<br>
                    <b>For Enroll:</b> Student<b> Academic Year</b> will be change but <b>Class</b> will be unchanged. <br>
                    <b>For Promotion: Class</b> and <b>Academic Year</b> both will be change for promotion. Roll and Section automatically generate based on student highest mark.
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card card-white">
            <div class="card-body">
                <div class="alert alert-dark mb-0 text-center" role="alert">
                    Details of Promotion<br>
                    Current Class : JSS 1<br>
                    Promotion Class : JSS 2<br>
                    Current Academic Year : 2019/2020<br>
                    Promotion Academic Year : 2020/2021<br>
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
                                <th>Roll</th>
                                <th>Section/Arm</th>
                                <th>Mark Summary</th>
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
                                <td>3</td>
                                <td>JSS1A</td>
                                <td><a class="text-primary" target="_blank" href="<?= base_url("admin/marks/view") ?>">View Summary</a></td>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input checkbox" type="checkbox" id="gc1">
                                        <label class="form-check-label" for="gc1">
                                            Promote
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