<?php $this->load->view("admin/inc/header") ?>
<?php $this->load->view("inc/post-meta") ?>
<?php $this->load->view("admin/inc/pre-body") ?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-white">
            <?php $this->load->view('msg_view'); ?>
            <div class="card-heading clearfix">
                <div class="row">
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-6">
                        <?= form_open(); ?>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Class</label>
                            <div class="col-sm-10">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-school"></i></div>
                                    </div>
                                    <select class="form-control" id="gender" name="class">
                                        <option value="" selected> Select-- </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <?= form_close(); ?>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table datatables_init" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Roll</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    <img class="img img-thumbnail" width="50" src="" /> </td>
                                <td>Fatoye Fajobi</td>
                                <td>2</td>
                                <td>rfatoye@sch.com</td>
                                <td>
                                    <a class="btn btn-sm btn-outline-info" title="View" href="<?= base_url("admin/library/members/view") ?>"><i class="fas fa-search"></i></a> |
                                    <a class="btn btn-sm btn-outline-warning" title="Edit" href="<?= base_url("admin/library/members/edit") ?>"><i class="fas fa-edit"></i></a> |
                                    <a class="btn btn-sm btn-outline-danger" title="Delete" href="<?= base_url("admin/library/members/delete") ?>"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>
                                    <img class="img img-thumbnail" width="50" src="" /> </td>
                                <td>Adetona Akeem</td>
                                <td>5</td>
                                <td>adeadke@sch.com</td>
                                <td>
                                    <a class="btn btn-sm btn-outline-primary" title="Add" href="<?= base_url("admin/library/members/add") ?>"><i class="fas fa-plus"></i></a>
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
<?php $this->load->view("inc/post-script") ?>