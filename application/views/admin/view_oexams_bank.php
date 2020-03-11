<?php $this->load->view("admin/inc/header") ?>
<style>
    div.checker, div.radio {
        vertical-align: unset !important;
    }

    div.checker span, div.radio span {
        background-position: unset !important;
    }

    .card-body .row {
        margin-top: 10px;
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