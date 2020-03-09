<?php $this->load->view("admin/inc/header") ?>
<style>
    .input-group-prepend,
    .input-group-text {
        width: 44px !important;
    }

    .note-editor {
        width: 96%;
    }
</style>
<div class="row">
    <div class="col-md-12">
        <div class="card card-white">
            <div class="card-body">
                <form class="form-horizontal" role="form" method="post" id="question_bank" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Question Group</label>
                        <div class="col-sm-10">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-book"></i></div>
                                </div>
                                <select name="group" id='group' class='form-control select2'>
                                    <option value="0">Please Select</option>
                                    <option value="57">English Language 1</option>
                                    <option value="58">Mathematics 1</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Difficulty Level</label>
                        <div class="col-sm-10">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-chart-bar"></i></div>
                                </div>
                                <select name="level" id='level' class='form-control select2'>
                                    <option value="0">Please Select</option>
                                    <option value="38">High</option>
                                    <option value="39">Low</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Question</label>
                        <div class="col-sm-10">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-newspaper"></i></div>
                                </div>
                                <textarea class="form-control summernote" id="question" name="question"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Explanation</label>
                        <div class="col-sm-10">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-newspaper"></i></div>
                                </div>
                                <textarea class="form-control summernote" id="explanation" name="explanation"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Upload</label>
                        <div class="col-sm-10">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-camera"></i></div>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class='form-group'> <label for="hints" class="col-sm-2 control-label">
                            Hints </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="hints" name="hints" value="">
                        </div>
                        <span class="col-sm-4 control-label">
                        </span>
                    </div>

                    <div class='form-group'> <label for="mark" class="col-sm-2 control-label">
                            Mark </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="mark" name="mark" value="">
                        </div>
                        <span class="col-sm-4 control-label">
                        </span>
                    </div>

                    <div class='form-group'> <label for="type" class="col-sm-2 control-label">
                            Question Type <span class='text-red'>*</span>
                        </label>
                        <div class="col-sm-6">
                            <select name="type" id='type' class='form-control select2'>
                                <option value="0">Please Select</option>
                                <option value="1">Single Answer</option>
                                <option value="2">Multi Answer</option>
                                <option value="3">Fill in the blanks</option>
                            </select>
                        </div>
                        <span class="col-sm-4 control-label">
                        </span>
                    </div>

                    <div class='form-group' id='totalOptionDiv'> <label for="totalOption" class="col-sm-2 control-label">
                            Total Option </label>
                        <div class="col-sm-6">
                            <select name="totalOption" id='totalOption' class='form-control select2'>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                        <span class="col-sm-4 control-label">
                        </span>
                    </div>

                    <div id="in"></div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-8">
                            <input type="submit" class="btn btn-success" value="Add Question bank">
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/inc/footer") ?>
<?php $this->load->view("admin/inc/summernote") ?>
<script type="text/javascript">
    $(function() {
        $('#totalOptionDiv').hide();
    });

    $(document).ready(function() {
        // var totalOptionID = '0';
        // if(totalOptionID > 0) {
        // $('#totalOptionDiv').show();
        // }

        var typeID = '0';
        if (typeID > 0) {
            $('#totalOptionDiv').show();
        }
    });

    // console.log($('#type').val());
    // if($('#type').val() != '0') {
    //     $('#totalOptionDiv').show();
    // }

    $('#type').change(function() {
        $('#in').children().remove();
        var type = $(this).val();
        if (type == 0) {
            $('#totalOptionDiv').hide();
        } else {
            $('#totalOption').val(0);
            $('#totalOptionDiv').show();
        }
    });

    $('#totalOption').change(function() {
        var totalOpts = parseInt($(this).val());
        var type = $('#type').val();

        if (totalOpts > 0) {
            var opt = [];
            var ans = {};

            for (j = 1; j <= totalOpts; j++) {
                if (type == 3) {
                    opt[j] = $('#answer' + j).val();
                } else {
                    opt[j] = $('#option' + j).val();
                    if ($('#ans' + j).prop('checked')) {
                        ans['#option' + j] = 'checked="checked"';
                    }
                }
            }

            $('#in').children().remove();
            for (i = 1; i <= totalOpts; i++) {
                // if ($('#in').size())
                //     $('#in').append(formHtmlData(i, type, opt[i], ans[i]));
                // else
                $('#in').append(formHtmlData(i, type));
            }

        } else {
            $('#in').children().remove();
        }

    });

    function formHtmlData(id, type, value = '', checked = '') {
        var required = 'required';
        if (type == 1) {
            type = 'radio';
        } else if (type == 2) {
            type = 'checkbox';
            required = '';
        } else if (type == 3) {
            var html = '<div class="form-group coption"><label for="answer' + id + '" class="col-sm-2 control-label">Answer ' + id + '</label><div class="col-sm-4"><input type="text" class="form-control" id="answer' + id + '" name="answer[]" value="' + value + '"></div><div class="col-sm-1"></div><span class="col-sm-4 control-label text-red" id="anserror' + id + '"></span></div>';
            return html;
        }
        var html = '<div class="form-group coption"><label for="option' + id + '" class="col-sm-2 control-label">Option ' + id + '</label><div class="col-sm-4" style="display:inline-table"><input type="text" class="form-control" id="option' + id + '" name="option[]" value="' + value + '"><span class="input-group-addon"><input class="answer" id="ans' + id + '" ' + checked + ' type="' + type + '" name="answer[]" value="' + id + '" data-toggle="tooltip" data-placement="top" title="Correct Answer" ' + required + ' /></span></div><div class="col-sm-3" style="display:inline-table"><input style="padding-top:7px" type="file" name="image' + id + '" id="image' + id + '"></div><span class="col-sm-3 control-label text-red" id="anserror' + id + '"></span></div>';
        return html;
    }
</script>