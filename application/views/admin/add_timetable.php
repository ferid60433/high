<?php $this->load->view("admin/inc/header") ?>
<style>
    .input-group-prepend,
    .input-group-text {
        width: 44px !important;
    }
</style>
<?php $this->load->view("inc/post-meta") ?>
<?php $this->load->view("admin/inc/pre-body") ?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-white">
            <div class="card-body">
                
                <div id="rootWizardStudent">
                    <form id="wizardFormStudent">
                        <div class="tab-content" id="myTabContent">
                            <div class="row m-b-lg">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">School Year</label>
                                        <div class="col-sm-10">
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
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Class</label>
                                        <div class="col-sm-10">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fas fa-school"></i></div>
                                                </div>
                                                <select class="form-control" id="class" name="class">
                                                    <option>Select</option>
                                                    <?php foreach ($classes as $class) : ?>
                                                        <option value="<?= $class->id; ?>"><?= strtoupper($class->name); ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Section</label>
                                        <div class="col-sm-10">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fas fa-school"></i></div>
                                                </div>
                                                <select class="form-control" id="section" name="section">
                                                    <option>Select</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Subject</label>
                                        <div class="col-sm-10">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fas fa-school"></i></div>
                                                </div>
                                                <select class="form-control" id="subject" name="subject">
                                                    <option>Select</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Day</label>
                                        <div class="col-sm-10">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fas fa-calendar"></i></div>
                                                </div>
                                                <select class="form-control" id="day" name="day">
                                                    <option>Select</option>
                                                    <option value="SUNDAY">SUNDAY</option>
                                                    <option value="MONDAY">MONDAY</option>
                                                    <option value="TUESDAY">TUESDAY</option>
                                                    <option value="WEDNESDAY">WEDNESDAY</option>
                                                    <option value="THURSDAY">THURSDAY</option>
                                                    <option value="FRIDAY">FRIDAY</option>
                                                    <option value="SATURDAY">SUNDAY</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Teacher</label>
                                        <div class="col-sm-10">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fas fa-user-plus"></i></div>
                                                </div>
                                                <select class="form-control" id="teacher" name="teacher">
                                                    <option>Select</option>
                                                    <?php foreach ($teachers as $teacher) : ?>
                                                        <option value="<?= $teacher->id; ?>"><?= strtoupper($teacher->name); ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Start Time</label>
                                        <div class="col-sm-10">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fas fa-clock"></i></div>
                                                </div>
                                                <input type="text" class="form-control time-picker" placeholder="10:00 AM">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">End Time</label>
                                        <div class="col-sm-10">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fas fa-clock"></i></div>
                                                </div>
                                                <input type="text" class="form-control time-picker" placeholder="10:45 AM">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Room</label>
                                        <div class="col-sm-10">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fas fa-school"></i></div>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Classroom">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Stay On Page</label>
                                        <div class="col-sm-10">
                                            <div class="input-group mb-3">
                                                <input type="checkbox" class="form-control" name="on_page">
                                                <span class="help-block">Stay on this page after adding?</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" class="finish float-right btn btn-primary btn-sm">Finish</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/inc/footer") ?>
<script>
    $(document).ready(function() {
        let base_url = "<?= base_url(); ?>";
        $('#class').on('change', () => {
            let class_id = $("#class").val();
            $('#section').empty();
            $('#subject').empty();
            if (class_id > 0 && class_id !== undefined) {
                $.ajax({
                    url: base_url + 'ajax/get_section_by_class/',
                    method: "POST",
                    cache: false,
                    data: {
                        class_id
                    },
                    success: response => {
                        if (response.status) {
                            let data_list = '<option value="">Select</option>';
                            if (Array.isArray(response.message)) {
                                $.each(response.message, (key, value) => {
                                    data_list += `<option value="${value.id}">${value.name}</option>`;
                                });
                            } else {
                                data_list += `<option value="0">${response.message}</option>`;
                            }
                            $('#section').append(data_list);
                        } else {
                            alert('error')
                        }
                    },
                    error: response => {
                        alert('There was an error processing request');
                        console.debug(response);
                    }
                });
                $.ajax({
                    url: base_url + 'ajax/get_subjects_by_class/',
                    method: "get",
                    cache: false,
                    data: {
                        "cid": class_id
                    },
                    success: response => {
                        if (response.status) {
                            let data_list = '<option value="">Select</option>';
                            if (Array.isArray(response.message)) {
                                $.each(response.message, (key, value) => {
                                    data_list += `<option value="${value.id}">${value.subject}</option>`;
                                });
                            } else {
                                data_list += `<option value="0">${response.message}</option>`;
                            }
                            $('#subject').append(data_list);
                        } else {
                            alert('error')
                        }
                    },
                    error: response => {
                        alert('There was an error processing request');
                        console.debug(response);
                    }
                });
            } else {
                $('#subject').append('<option value="0">Select</option>')
            }
        });
    });
</script>
<?php $this->load->view("inc/post-script") ?>