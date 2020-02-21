<?php $this->load->view("inc/meta") ?>
<!-- start page content -->
<div class="page-container page-error">
    <div class="page-content">
        <!-- start page inner -->
        <div class="page-inner">
            <div id="main-wrapper" class="container">
                <div class="row">
                    <div class="col-md-6 center">
                        <h1 class="error-page-logo">404</h1>
                        <p class="error-page-top-text">Oops.. Something went wrong..</p>
                        <p class="error-page-bottom-text">We can't seem to find the page you're looking for.</p>
                        <!-- <a href="#" class="btn btn-primary m-b-xxs">Help Center</a> -->
                        <a href="<?=base_url()?>" class="btn btn-secondary m-b-xxs">Return Home</a>
                    </div>
                </div>
                <!-- Row -->
            </div>
            <!-- end page main wrapper -->
        </div>
        <!-- end page inner -->
        <!-- end page right sidebar -->
    </div>
    <!-- end page content -->
</div>
<?php $this->load->view("inc/scripts") ?>
</body>

</html>