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
                    <form id="wizardFormStudent" method="post">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="subject" role="tabpanel">
                                <div class="row m-b-lg">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Role</label>
                                            <div class="col-sm-10">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="fas fa-users"></i></div>
                                                    </div>
                                                    <select class="form-control" id="role" required>
                                                        <option>Select Role</option>
                                                        <?php foreach ($roles as $role) : ?>
                                                            <option value="<?= $role->id; ?>">
                                                                <?= strtoupper($role->title); ?>
                                                            </option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">User</label>
                                            <div class="col-sm-10">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="fas fa-user"></i></div>
                                                    </div>
                                                    <select class="form-control" id="user" name="user" required>
                                                        <option>Select User</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">New Password</label>
                                            <div class="col-sm-10">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="fas fa-key"></i></div>
                                                    </div>
                                                    <input type="password" id="password" class="form-control" name="password" placeholder="New">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Re-Enter Password</label>
                                            <div class="col-sm-10">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="fas fa-key"></i></div>
                                                    </div>
                                                    <input type="password" class="form-control" name="confirm_password" placeholder="Confirm">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" class="finish float-right btn btn-primary btn-sm">Reset Password</button>
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
        $('#role').on('change', () => {
            let role = $("#role").val();
            let cond = "";
            table = "staff";
            if (parseInt(role) >= 1) {
                cond = `u.role = '${role}'`;
            } else {
                cond = `u.user_group = '${role}'`;
                table = role + "s";
            }
            $('#user').empty();
            if (role != 0 && role !== undefined) {
                $.ajax({
                    url: base_url + '/ajax/get_users_by_role/',
                    method: "POST",
                    cache: false,
                    data: {
                        cond,
                        table
                    },
                    success: response => {
                        if (response.status) {
                            let data_list = '<option> Select User </option>';
                            if (Array.isArray(response.message)) {
                                $.each(response.message, (key, value) => {
                                    data_list += `<option value="${value.id}">${value.name}</option>`;
                                });
                            } else {
                                data_list += `<option value="0">${response.message}</option>`;
                            }
                            $('#user').append(data_list);
                        } else {
                            alert('error')
                        }
                    },
                    error: response => {
                        alert('There was an error fetching the section...');
                        console.debug(response);
                    }
                });
            } else {
                $('#user').append('<option value="0"> Select User </option>')
            }
        });
    });
</script>
<?php $this->load->view("inc/post-script") ?>