<?php $this->load->view("admin/inc/header") ?>
<style>
    .media_card {
        height: 202.5px !important;
        padding-top: 10px !important;
    }

    .media_card .fa-5x {
        font-size: 128px;
    }
</style>
<?php $this->load->view("inc/post-meta") ?>
<?php $this->load->view("admin/inc/pre-body") ?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-white">
            <div class="card-heading clearfix mb-3">
                <div class="modal fade" id="folderMod" tabindex="-1" role="dialog" aria-labelledby="folderModLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form method="post">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="folderModLabel">Create Folder</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group row">
                                        <label class="col-sm-12 col-form-label">Folder Name</label>
                                        <div class="col-sm-12">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fas fa-folder"></i></div>
                                                </div>
                                                <input maxlength="20" type="text" class="form-control" placeholder="Folder Name" id="name" name="name" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Create</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#folderMod"><i class="fas fa-folder-plus"></i> Add New Folder</button>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2" title="New File">
                        <div class="modal fade" id="fileMod" tabindex="-1" role="dialog" aria-labelledby="fileModLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form method="post">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="fileModLabel">Upload File</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group row">
                                                <label class="col-sm-12 col-form-label">File</label>
                                                <div class="col-sm-12">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="fas fa-upload"></i></div>
                                                        </div>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="customFile">
                                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Upload</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <a href="#" data-toggle="modal" data-target="#fileMod">
                            <div class="media_card card card-white bg-primary text-white text-center">
                                <div class="card-heading clearfix mb-3"></div>
                                <div class="card-body">
                                    <i class="fas fa-plus fa-5x"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-2 text-center">
                        <a href="<?=base_url("admin/media/folders")?>">
                            <div class="media_card card card-white bg-dark text-white">
                                <div class="card-heading clearfix mb-3"></div>
                                <div class="card-body">
                                    <i class="fas fa-folder fa-5x"></i>
                                    <p>Folder Name</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-2 text-center">
                        <a href="<?=base_url("admin/media/files")?>">
                            <div class="media_card card card-white bg-warning text-white">
                                <div class="card-heading clearfix mb-3"></div>
                                <div class="card-body">
                                    <i class="fas fa-file fa-5x"></i>
                                    <p>payment_invoice.pdf</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/inc/footer") ?>
<?php $this->load->view("inc/post-script")?>