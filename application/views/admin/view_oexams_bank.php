<?php $this->load->view("admin/inc/header") ?>
<style>
    div.checker,
    div.radio {
        vertical-align: unset !important;
    }

    div.checker span,
    div.radio span {
        background-position: unset !important;
    }

    .card-body .row {
        margin-top: 10px;
    }

    .qNum {
        background: #2c7be5;
        border-radius: 100%;
        width: 30px;
        height: 30px;
        text-align: center;
        color: #fff;
        font-weight: bold;
        padding-top: 4px;
    }

    .qPhrase {
        padding: 2px 5px 2px;
        background: #cecefe;
    }
</style>
<?php $this->load->view("inc/post-meta") ?>
<?php $this->load->view("admin/inc/pre-body") ?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-white">
            <div class="card-heading clearfix row">
                <h4 class="col-md-7"><?= $q->question ?></h4>
                <span class="col-md-5 text-right" style="font-weight:500"><?= $q->mark ?> Mark<?= ($q->mark > 1) ? "s" : "" ?></span>
            </div>
            <?php $options = $this->site->get_result("oexam_options", "*", "qid = $q->id");
            if ($q->question_type != 3) : ?>
                <div class="card-body">
                    <div class="row">
                        <?php foreach ($options as $option) : ?>
                            <div class="col-sm-6 mt-3">
                                <input type="<?= ($q->question_type == '1') ? 'radio' : 'checkbox'; ?>" name="single" value="<?= $option->option_value ?>" <?= ($option->is_answer) ? "checked" : "" ?>> <?= $option->option_value ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php else : ?>
                <div class="card-body">
                    <div class="row">
                        <?php $x = 1;
                        foreach ($options as $option) : ?>
                            <div class="col-sm-12 mt-3">
                                <div class="row">
                                    <div class="col-sm-1">
                                        <div class="qNum"><? $x ?></div>
                                    </div>
                                    <div class="col-sm-11">
                                        <h5 class="qPhrase"><?= $option->option_value ?></h5>
                                    </div>
                                </div>
                            </div>
                        <?php $x++;
                        endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php $this->load->view("admin/inc/footer") ?>
<script>
    $(document).ready(function() {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square',
            radioClass: 'iradio_square',
            increaseArea: '50%'
        });
    });
</script>
<?php $this->load->view("inc/post-script") ?>