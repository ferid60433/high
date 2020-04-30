<?php $this->load->view("admin/inc/header") ?>
<style>
    .input-group-prepend,
    .input-group-text {
        width: 44px !important;
    }

    .setting-fieldset {
        border: 1px solid #DBDEE0 !important;
        padding: 15px !important;
        margin: 0 0 25px 0 !important;
        box-shadow: 0px 0px 0px 0px #000;
    }

    .setting-legend {
        font-size: 1.1em !important;
        font-weight: 500 !important;
        text-align: left !important;
        width: auto;
        color: #428BCA;
        padding: 5px 15px;
        border: 1px solid #DBDEE0 !important;
        margin: 0px;
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
                                <fieldset class="setting-fieldset">
                                    <legend class="setting-legend">Site Configuration</legend>
                                    <div class="row m-b-lg">
                                        <div class="col-md-4">
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-form-label">School Name</label>
                                                <div class="col-sm-12">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="fas fa-school"></i></div>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="School Name" name="school_name">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" class="finish float-right btn btn-primary btn-sm">Save Settings</button>
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