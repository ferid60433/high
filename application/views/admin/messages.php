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
<?php $this->load->view("inc/post-meta") ?>
<?php $this->load->view("admin/inc/pre-body") ?>
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
                            <th>S/N</th>
                            <th>Status</th>
                            <th>Subject</th>
                            <th>Time Initiated</th>
                            <th>Last Message</th>
                            <th>Responds</th>
                        </thead>
                        <?php if ($msg_view == "Conversations" || $msg_view == "Sent" || $msg_view == "Drafts") : ?>
                            <tbody>
								<?php $x= 1; foreach ( $messages as $message ): ?>
                                	<tr onclick="window.location='<?= base_url('admin/messages/view/' . simple_crypt($message['id'])) ?>'">
										<td>
											<div class="form-check">
												<input class="form-check-input checkbox" type="checkbox" id="gc1">
											</div>
										</td>
										<td>
											<?= statusLabel( $message['status']) ; ?>
										</td>
										<td>
											<b><?= ucwords($message['title']);?></b>
										</td>
										<td><?= $message['date_created']; ?></td>
										<td><?= $message['last_sender_name'] . ' - (' .$message['last_message_time'] . ')'; ?></td>
										<td><?= $message['respond_count']; ?></td>
									</tr>
                                <?php endforeach; ?>
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
<?php $this->load->view("inc/post-script")?>
