<div class="page-container">
    <?php $this->load->view("admin/inc/sidebar") ?>
    <div class="page-content" style="margin-bottom:25px;">
        <div class="page-header">
            <div class="search-form">
                <form action="#" method="GET">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control search-input" placeholder="Type something...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" id="close-search" type="button"><i class="icon-close"></i></button>
                        </span>
                    </div>
                </form>
            </div>
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <div class="logo-sm">
                            <a href="javascript:void(0)" id="sidebar-toggle-button"><i class="fa fa-bars"></i></a>
                            <a class="logo-box" href="<?= base_url() ?>"><span><?= $this->settings->general()->school_name ?></span></a>
                        </div>
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <i class="fa fa-angle-down"></i>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="javascript:void(0)" id="collapsed-sidebar-toggle-button"><i class="fa fa-bars"></i></a></li>
                            <li><a href="javascript:void(0)" id="toggle-fullscreen"><i class="fa fa-expand"></i></a></li>
                            <li><a href="javascript:void(0)" id="search-button"><i class="fa fa-search"></i></a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell"></i></a>
                                <ul class="dropdown-menu dropdown-lg dropdown-content">
                                    <li class="drop-title">Notifications<a href="#" class="drop-title-link"><i class="fa fa-angle-right"></i></a></li>
                                    <li class="slimscroll dropdown-notifications">
                                        <ul class="list-unstyled dropdown-oc">
                                            <li>
                                                <a href="#"><span class="notification-badge bg-primary"><i class="fa fa-photo"></i></span>
                                                    <span class="notification-info">Finished uploading website.
                                                        <small class="notification-date">20:00</small>
                                                    </span></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown user-dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <img src="<?= base_url("assets/img/avatars/user-dropdown.jpg") ?>" alt="" class="rounded-circle">
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?=base_url("admin/profile")?>">Profile</a></li>
                                    <li>
                                        <a href="<?=base_url("admin/messages")?>">
                                            <!-- <span class="badge float-right badge-danger">42</span> -->
                                            Messages
                                        </a>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="<?=base_url("admin/profile/reset")?>">Reset Password</a></li>
                                    <li><a href="<?=base_url("logout")?>">Log Out</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="page-inner">
            <?php if (isset($active) && $active == "dashboard");
            else $this->load->view("admin/inc/breadcrumb") ?>
            <?php $this->load->view("msg_view") ?>
            <div id="main-wrapper">