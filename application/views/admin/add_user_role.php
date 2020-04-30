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
                                            <label class="col-sm-2 col-form-label">User Role</label>
                                            <div class="col-sm-10">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="fas fa-user-check"></i></div>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="User Role" name="title">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Actions</label>
                                            <div class="col-sm-10">
                                                <div class="row">
                                                    <?php foreach ($modules as $m) : ?>
                                                        <div class="col-md-4">
                                                            <div class="form-check">
                                                                <div class="checker" id="uniform-<?= $m->title ?>">
                                                                    <span>
                                                                        <input name="roles[]" class="form-check-input" value="<?= $m->id ?>" type="checkbox" id="<?= $m->title . "-" . $m->id ?>" <?= ($m->url == "messages") ? "checked" : "" ?>>
                                                                    </span>
                                                                </div>
                                                                <label class="form-check-label" for="<?= $m->title . "-" . $m->id ?>">
                                                                    <?= $m->title ?>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    <?php endforeach; ?>
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
<?php $this->load->view("inc/post-script") ?>