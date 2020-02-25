<?php $this->load->view("inc/meta") ?>
    <!-- start page container -->
    <div class="page-container" style="height:100vh !important">
        <!-- start page inner -->
        <div class="page-inner login-page" style="margin-top: -1px;">
            <div id="main-wrapper" class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6 login-box">
                        <h4 class="login-title">Sign in to your account</h4>
                        <form action="<?=base_url("admin")?>" method="post">
                            <div class="form-group">
                                <label for="login">Email address</label>
                                <input type="email" name="login" class="form-control" id="login">
                            </div>
                            <div class="form-group">
                                <label for="pass">Password</label>
                                <input type="password" name="password" class="form-control" id="pass">
                            </div>
                            <button class="btn btn-primary">Login</button>
                            <!-- <a href="register.html" class="btn btn-outline-primary">Register</a> -->
                            <a href="index.html" class="forgot-link">Forgot password?</a>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end page right sidebar -->
        </div>
        <!-- end page content -->
    </div>
    <!-- end page container -->

    <?php $this->load->view("inc/scripts") ?>

</body>

</html>