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
                    <div class="col-md-4"></div>
                    <div class="form-group row col-md-4">
                        <label class="col-sm-12 col-form-label">Role</label>
                        <div class="col-sm-12">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-user-plus"></i></div>
                                </div>
                                <select class="form-control" id="role" name="role">
                                    <option>Select</option>
                                    <option value="bus assistant">Bus Assistant</option>
                                    <option value="moderator">Moderator</option>
                                    <option value="receptionist">Receptionist</option>
                                    <option value="librarian">Librarian</option>
                                    <option value="accountant">Accountant</option>
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
                <div class="table-responsive">
                    <table class="table datatables_init" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Join Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td></td>
                                <td>Mrs Chinenye</td>
                                <td>chi@school.com</td>
                                <td>10 March 2012</td>
                                <td><a class="btn btn-outline-info" href="<?= base_url("admin/salaries/pay/add") ?>">Make Payment</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/inc/footer") ?>
<?php $this->load->view("inc/post-script") ?>