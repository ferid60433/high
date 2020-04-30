<?php $this->load->view("admin/inc/header") ?>
<style>
    .input-group-prepend,
    .input-group-text {
        width: 44px !important;
    }

    div.checker,
    div.radio {
        vertical-align: unset !important;
    }

    div.checker span,
    div.radio span {
        background-position: unset !important;
    }

    .qr:not(:first-child) {
        margin-top: 30px;
    }

    .form-inline label {
        justify-content: unset !important;
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
    <div class="col-md-8">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-white">
                    <div class="card-heading clearfix">
                        <h4 class="card-title">Question Bank</h4>
                    </div>
                    <div class="card-body">
                        
                        <?= form_open('', 'class="form-inline row" id="question_filter_form"'); ?>
                        <input type="hidden" name="post_type" value="filter_form">
                        <div class="form-group row col-md-6">
                            <label class="col-sm-12 col-form-label">Difficulty Level</label>
                            <div class="col-sm-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-graduation-cap"></i></div>
                                    </div>
                                    <select class="form-control" id="level" name="level">
                                        <option value=""> Select level of question </option>
                                        <?php foreach ($levels as $l) : ?>
                                            <option value="<?= $l->id; ?>" <?php if (isset($level) && $level == $l->id) {
                                                                                echo 'selected';
                                                                            } ?>>
                                                <?= ucwords($l->title); ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row col-md-6">
                            <label class="col-sm-12 col-form-label">Question Group</label>
                            <div class="col-sm-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-book"></i></div>
                                    </div>
                                    <select class="form-control" id="group" name="group">
                                        <option value=""> Select group question </option>
                                        <?php foreach ($groups as $g) : ?>
                                            <option value="<?= $g->id ?>" <?php if (isset($group) && $group == $g->id) {
                                                                                echo 'selected';
                                                                            } ?>>
                                                <?= ucwords($g->title); ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <?= form_close() ?>
                        <div class="table-responsive">
                            <table class="table">
                                <?php if (isset($questions)) : ?>
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Question</th>
                                            <th>Question Type</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (count($questions)) : $x = 1;
                                            foreach ($questions as $q) : ?>
                                                <tr>
                                                    <td><?= $x; ?>.</td>
                                                    <td><?= $q->question; ?></td>
                                                    <td><?= getQuestionType($q->question_type); ?></td>
                                                    <td>
                                                        <?= form_open(); ?>
                                                        <input type="hidden" name="question_id" value="<?= $q->id; ?>">
                                                        <input type="hidden" name="exam_id" value="<?= $exam->id; ?>">
                                                        <input type="hidden" name="post_type" value="add_question">
                                                        <button type="submit" class="btn btn-primary float-right" title="Add Question">
                                                            <i class="fas fa-plus"></i>
                                                        </button>
                                                        <?= form_close(); ?>
                                                    </td>
                                                </tr>
                                            <?php $x++;
                                            endforeach;
                                        else : ?>
                                            <tr>
                                                <td colspan="4">No question in the selected filter</td>
                                            </tr>
                                        <?php endif; ?>
                                    </tbody>
                                    <tfoot>
                                        <?php if (count($questions)) : ?>
                                            <tr>
                                                <td colspan="4">
                                                    <button data-level="<?= $level; ?>" data-group="<?= $group ?>" data-exam_id="<?= $exam->id; ?>" class="btn btn-primary float-right all-question" title="Add All Question">
                                                        <i class="fas fa-plus"></i> Add All Questions</button>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                    </tfoot>
                                <?php endif; ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card card-white">
                    <div class="card-heading clearfix">
                        <h4 class="card-title">Associated Questions</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <?php $x = 1;
                            $totalMarks = 0;
                            foreach ($aquestions as $q) : $totalMarks += (int) $q['mark']; ?>
                                <div class="col-md-12 row qr">
                                    <h4 class="col-md-1"><?= $x; ?>.</h4>
                                    <div class="col-md-11" style="margin-top:-5px;">
                                        <div class="card-heading clearfix row">
                                            <h5 class="col-md-7"><?= $q['question']; ?></h5>
                                            <span class="col-md-5 text-right" style="font-weight:500"><?= $q['mark']; ?> Mark</span>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <?php
                                                $out_explode = explode('---', $q['options']);
                                                foreach ($out_explode as $out) :
                                                    $in_explode = explode('||', $out);
                                                ?>
                                                    <?php if ($q['question_type'] == '3') : ?>
                                                        <div class="col-sm-1">
                                                            <div class="qNum"><?= ucwords($in_explode[0]); ?></div>
                                                        </div>
                                                        <div class="col-sm-11">
                                                            <h5 class="qPhrase"><?= $in_explode[1]; ?></h5>
                                                        </div>
                                                    <?php else : ?>
                                                        <div class="col-sm-6 mt-1">
                                                            <input type="<?= ($q['question_type'] == '1') ? 'radio' : 'checkbox'; ?>" name="<?= $in_explode[0]; ?>" <?= ($in_explode[1] == 1) ? 'checked' : null; ?> disabled> <?= ucwords($in_explode[0]); ?>
                                                        </div>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <?= form_open(); ?>
                                        <input type="hidden" name="post_type" value="remove_question" />
                                        <input type="hidden" name="question_id" value="<?= $q['id']; ?>" />
                                        <button type="submit" class="btn btn-danger btn-sm float-right"><i class="fas fa-trash"></i>
                                            Remove Question #<?= $x; ?>
                                        </button>
                                        <?= form_close(); ?>
                                    </div>
                                </div>

                            <?php $x++;
                            endforeach; ?>
                        </div>
                        <div class="row">
                            <h4 class="col-md-12" style="font-weight: 600;">Total Marks: <?= ($exam->mark_type == "percentage") ? "100%" : $totalMarks ?></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-white">
                    <div class="card-heading clearfix">
                        <h4 class="card-title">Online Exam</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Exam Title:</th>
                                    <td><?= ucwords($exam->title); ?></td>
                                </tr>
                                <tr>
                                    <th>Exam Type:</th>
                                    <td><?= ucwords($exam->exam_type) ?></td>
                                </tr>
                                <tr>
                                    <th>Date:</th>
                                    <td><?= date('Y-m-d', strtotime($exam->start_date)); ?></td>
                                </tr>
                                <tr>
                                    <th>Time From:</th>
                                    <td><?= date('H:i:s', strtotime($exam->start_time)); ?></td>
                                </tr>
                                <tr>
                                    <th>Time To:</th>
                                    <td><?= date('H:i:s', strtotime($exam->end_time)); ?></td>
                                </tr>
                                <tr>
                                    <th>Duration:</th>
                                    <td><?= $exam->duration ?> Minutes</td>
                                </tr>
                                <tr>
                                    <th>Description:</th>
                                    <td><?= $exam->description; ?></td>
                                </tr>
                                <tr>
                                    <th>Random:</th>
                                    <td><?= ($exam->random == '1') ? 'Yes' : 'No'; ?></td>
                                </tr>
                                <tr>
                                    <th>Mark Type:</th>
                                    <td><?= ucwords($exam->mark_type); ?></td>
                                </tr>
                                <tr>
                                    <th>Pass Mark:</th>
                                    <td><?= $exam->pass_mark ?></td>
                                </tr>
                                <tr>
                                    <th>Negative Mark:</th>
                                    <td><?= $exam->negative_mark; ?></td>
                                </tr>
                                <tr>
                                    <th>Instruction:</th>
                                    <td><?= $exam->instruction; ?></td>
                                </tr>
                                <tr>
                                    <th>Class:</th>
                                    <td><?= strtoupper($exam->class_name); ?></td>
                                </tr>
                                <tr>
                                    <th>Section:</th>
                                    <td><?= strtoupper($exam->section_name); ?></td>
                                </tr>
                                <tr>
                                    <th>Subject:</th>
                                    <td><?= ucwords($exam->subject); ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/inc/footer") ?>
<script>
    $(document).ready(function() {
        $("#exam_type").change(function() {
            switch (this.value) {
                case "1":
                    $("#date_div").hide();
                    $("#time_div").hide();
                    break;
                case "2":
                    $("#date_div").show();
                    $("#time_div").hide();
                    break;
                case "3":
                    $("#date_div").show();
                    $("#time_div").show();
                    break;
                default:
                    $("#date_div").hide();
                    $("#time_div").hide();
                    break;
            }
        })
        $('input').iCheck({
            checkboxClass: 'icheckbox_square',
            radioClass: 'iradio_square',
            increaseArea: '50%'
        });
    });
</script>
<script>
    $(document).ready(() => {
        $('#group, #level').change(() => {
            let group_id = $('#group').val();
            let level_id = $('#level').val();
            $('#question_filter_form').submit();
        })
    });
</script>
<?php $this->load->view("inc/post-script") ?>