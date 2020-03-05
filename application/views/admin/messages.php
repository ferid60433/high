<?php $this->load->view("admin/inc/header") ?>
<style>
    .tab-pane .row {
        margin-top: 15px;
    }

    .m_nav {
        list-style: none;
        padding-left: 0;
    }

    .m_nav .btn {
        text-align: left !important;
    }
</style>
<div class="row">
    <div class="col-md-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-white">
                    <div class="card-body">
                        <div>
                            <button onclick="window.location='<?= base_url('admin/messages/compose') ?>'" class="btn btn-info btn-block"><i class="far fa-edit"></i> Compose</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card card-white">
                    <div class="card-heading clearfix">
                        <h4 class="card-title">Folders</h4>
                    </div>
                    <div class="card-body">
                        <ul class="m_nav">
                            <li><a class="btn <?= ($msg_view == "Conversations") ? "btn-primary" : "btn-default" ?> btn-block" href="<?= base_url("admin/messages") ?>"><i class="fas fa-envelope"></i> Conversations</a></li>
                            <li><a class="btn <?= ($msg_view == "Drafts") ? "btn-primary" : "btn-default" ?> btn-block" href="<?= base_url("admin/messages/drafts") ?>"><i class="fas fa-save"></i> Drafts</a></li>
                            <li><a class="btn <?= ($msg_view == "Sent") ? "btn-primary" : "btn-default" ?> btn-block" href="<?= base_url("admin/messages/sent") ?>"><i class="fas fa-paper-plane"></i> Sent</a></li>
                            <li><a class="btn <?= ($msg_view == "Trash") ? "btn-primary" : "btn-default" ?> btn-block" href="<?= base_url("admin/messages/trash") ?>"><i class="fas fa-trash"></i> Trash</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-9">
        <div class="card card-white">
            <div class="card-heading clearfix">
                <h4 class="card-title"><?= $msg_view ?></h4>
            </div>
            <div class="card-body">
                <div class="btn-group mb-3">
                    <button class="btn btn-info" id="markAll"><i class="fas fa-check"></i></button>
                    <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                    <button class="btn btn-primary"><i class="fas fa-recycle"></i></button>
                </div>
                <div class="table-responsive">
                    <table class="table nb_init table-hover">
                        <thead>
                            <th>#</th>
                            <th>Status</th>
                            <th>Name</th>
                            <th>Subject</th>
                            <th>Attachment</th>
                            <th>Time</th>
                            <th>Reply</th>
                        </thead>
                        <?php if ($msg_view == "Conversations") : ?>
                            <tbody>
                                <tr onclick="window.location='<?= base_url('admin/messages/view') ?>'">
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input checkbox" type="checkbox" id="gc1">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="text-warning">
                                            <i class="far fa-star"></i>
                                        </div>
                                    </td>
                                    <td>
                                        Schoolville High
                                    </td>
                                    <td>
                                        <b>PAYMENT DEADLINE</b>
                                    </td>
                                    <td>
                                        <i class="fas fa-paperclip"></i>
                                    </td>
                                    <td>25 Feb 2019 12:47:49 PM</td>
                                    <td><span class="badge badge-info">2</span></td>
                                </tr>
                            </tbody>
                        <?php endif; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/inc/footer") ?>
<script>
    let $checked = false;
    $('#markAll').click(function() {
        if (!$checked) {
            $('.checkbox').parent().addClass("checked");
            $checked = true;
        } else {
            $('.checkbox').parent().removeClass("checked");
            $checked = false;
        }
    })
</script>