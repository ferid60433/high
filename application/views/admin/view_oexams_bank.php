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
    .qNum{
        background: #2c7be5;
        border-radius: 100%;
        width:30px;
        height:30px;
        text-align:center;
        color:#fff;
        font-weight:bold;
        padding-top:4px;
    }
    .qPhrase{
        padding:2px 5px 2px;
        background: #cecefe;
    }
</style>
<div class="row">
    <div class="col-md-12">
        <div class="card card-white">
            <div class="card-heading clearfix row">
                <h4 class="col-md-7">Who killed James?</h4>
                <span class="col-md-5 text-right" style="font-weight:500">1 Mark</span>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <input type="checkbox" checked> John
                    </div>
                    <div class="col-sm-6">
                        <input type="checkbox"> Jacob
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <input type="checkbox"> Jaguar
                    </div>
                    <div class="col-sm-6">
                        <input type="checkbox" checked> Jimmy
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card card-white">
            <div class="card-heading clearfix row">
                <h4 class="col-md-7">What is 2 + 2?</h4>
                <span class="col-md-5 text-right" style="font-weight:500">1 Mark</span>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <input type="radio" name="single" checked> 1
                    </div>
                    <div class="col-sm-6">
                        <input type="radio" name="single"> 2
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <input type="radio" name="single"> 3
                    </div>
                    <div class="col-sm-6">
                        <input type="radio" name="single"> 4
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card card-white">
            <div class="card-heading clearfix row">
                <h4 class="col-md-7">What is Biology?</h4>
                <span class="col-md-5 text-right" style="font-weight:500">5 Marks</span>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-1">
                                <div class="qNum">1</div>
                            </div>
                            <div class="col-sm-11">
                                <h5 class="qPhrase">The study of life</h5>
                            </div>
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
        $('input').iCheck({
            checkboxClass: 'icheckbox_square',
            radioClass: 'iradio_square',
            increaseArea: '50%'
        });
    });
</script>