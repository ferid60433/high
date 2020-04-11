<?php $this->load->view("admin/inc/header") ?>
<style>
    .media_card {
        height: 350px !important;
        padding-top: 10px !important;
        cursor: pointer;
    }

    .card-overlay:hover {
        display: block;
    }

    .card-overlay {
        display: none;
        position: absolute;
        padding-top: 100px;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #000000b0;
        color: #fff;
    }

    .media_card .card-heading:hover~.card-overlay,
    .media_card .card-body:hover~.card-overlay {
        display: block;
    }

    .card-overlay p {
        margin: auto;
    }

    .card-overlay p.title {
        font-size: 26px;
    }
</style>
<?php $this->load->view("inc/post-meta") ?>
<?php $this->load->view("admin/inc/pre-body") ?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-white">
            <div class="card-heading clearfix mb-3">
                <button type="button" class="btn btn-sm btn-outline-primary" onclick="window.location='<?= base_url('admin/library/ebooks/add') ?>'"><i class="fas fa-plus"></i> Add New</button>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3 text-center">
                        <div class="media_card card card-white">
                            <div class="card-heading clearfix mb-3"></div>
                            <div class="card-body" style="background-image: url(<?= base_url("assets/img/ebook-cover.jpeg") ?>);height: 100%;width: 100%;background-position: center !important;background-size: cover !important;">
                            </div>
                            <div class="card-overlay">
                                <p class="title">Leadership Roles</p>
                                <p class="author">Bishop Ibiyeome</p>
                                <div class="btn-group btn-group-sm mt-3">
                                    <a href="<?= base_url("admin/library/ebooks/view") ?>" title="View" class="btn btn-sm btn-info">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="<?= base_url("admin/library/ebooks/edit") ?>" title="Edit" class="btn btn-sm btn-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="<?= base_url("admin/library/ebooks/delete") ?>" title="Delete" class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/inc/footer") ?>
<?php $this->load->view("inc/post-script") ?>