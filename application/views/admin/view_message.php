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

    #message_window {
        height: 350px;
        overflow: hidden;
        overflow-y: scroll;
    }

    .bubble_r {
        width: 45%;
        background: #fecda2;
        padding: 10px;
        margin-top: 10px;
        border-radius: 5px;
    }

    .bubble_s {
        width: 45%;
        background: #3b4146;
        padding: 10px;
        float: right;
        color: white;
        text-align: right;
        margin-top: 10px;
        border-radius: 5px;
        margin-right: 10px;
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
                            <li><a class="btn btn-default btn-block" href="<?= base_url("admin/messages") ?>"><i class="fas fa-envelope"></i> Conversations</a></li>
                            <li><a class="btn btn-default btn-block" href="<?= base_url("admin/messages/drafts") ?>"><i class="fas fa-save"></i> Drafts</a></li>
                            <li><a class="btn btn-default btn-block" href="<?= base_url("admin/messages/sent") ?>"><i class="fas fa-paper-plane"></i> Sent</a></li>
                            <li><a class="btn btn-default btn-block" href="<?= base_url("admin/messages/trash") ?>"><i class="fas fa-trash"></i> Trash</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-9">
		<?php $this->load->view('msg_view'); ?>
        <div class="card card-white">
            <div class="card-heading clearfix">
                <h4 class="card-title">Conversation: <b><?= strtoupper($thread_detail->title)?></b></h4>
            </div>
            <div class="card-body">
                <div id="message_window">
					<?php
					$uid = $this->session->userdata('logged_id');
					foreach ( $messages as $message ) : ?>
					<div class="row">
						<div class="col-md-12">
							<div class="<?= ( $message['sender'] == $uid) ? 'bubble_s' : 'bubble_r'; ?>">
								<div class="person">
									<b><?= $message['sender_title']; ?></b>&nbsp;
									<small><i class="fas fa-clock"></i> <?= strtoupper($message['timestamp']);?></small>
								</div>
								<p class="msg">
									<?= $message['message']; ?>
								</p>
							</div>
						</div>
					</div>
					<?php endforeach;?>
                </div>
                <hr>
                <?= form_open_multipart(); ?>
                    <div class="form-group">
                        <textarea class="form-control" required name="message" rows="3" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
							<input type="hidden" name="thread" value="<?= $thread_detail->id ?>">
                            <button type="submit" name="submit" class="btn btn-primary float-right"><i class="fas fa-paper-plane"></i> Send</button>
                        </div>
                    </div>
                <?= form_open_multipart(); ?>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/inc/footer") ?>
<?php $this->load->view("inc/post-script")?>
