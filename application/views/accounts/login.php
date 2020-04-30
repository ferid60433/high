<?php $this->load->view("inc/meta") ?>
<?php $this->load->view("inc/post-meta") ?>
<!-- start page container -->
<div class="page-container" style="height:100vh !important">
    <!-- start page inner -->
    <div class="page-inner login-page" style="margin-top: -1px;background:url(<?= base_url("assets/img/main.jpg") ?>)">
        <div id="main-wrapper" class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 login-box">
                    <h3 class="mt-5">Welcome to <br> <b><?= $this->settings->general()->school_name ?></b><br> Portal</h3>
                    <h4 class="login-title mt-5">Sign in to your account</h4>
                    <?php $this->load->view('msg_view'); ?>
                    <?= form_open(''); ?>
                    <div class="form-group">
                        <label for="login">Email address</label>
                        <input type="email" name="email" value="<?= set_value('email', ''); ?>" class="form-control" id="login">
                        <?= form_error('email'); ?>
                    </div>
                    <div class="form-group">
                        <label for="pass">Password</label>
                        <input type="password" name="password" class="form-control" id="pass">
                        <?= form_error('password'); ?>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                    <!-- <a href="register.html" class="btn btn-sm btn-outline-primary">Register</a> -->
                    <a href="<?= base_url('forgot') ?>" class="forgot-link">Forgot password?</a>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
        <!-- end page right sidebar -->
    </div>
    <!-- end page content -->
</div>
<!-- end page container -->

<?php $this->load->view("inc/scripts") ?>
<?php $this->load->view("inc/post-script") ?>