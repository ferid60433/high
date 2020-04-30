<!DOCTYPE html>
<html lang="en">

<head>

    <!-- metas -->
    <meta charset="utf-8">
    <meta name="author" content="Chitrakoot Web" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="admin,dashboard" />
    <meta name="description" content="Schoolville High" />

    <!-- title  -->
    <title> <?= isset($title) ? $title : "Portal" ?> :: <?= $this->settings->general()->school_name ?></title>

    <!-- favicon -->
    <link rel="shortcut icon" href="img/logos/favicon.png">
    <link rel="apple-touch-icon" href="img/logos/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/logos/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/logos/apple-touch-icon-114x114.png">

    <!-- common plugins -->
    <link rel="stylesheet" href="<?= base_url("assets/plugins/bootstrap/css/bootstrap.min.css") ?>" />
    <link rel="stylesheet" href="<?= base_url("assets/plugins/font-awesome/css/font-awesome.min.css") ?>" />
    <link rel="stylesheet" href="<?= base_url("assets/plugins/icomoon/style.css") ?>" />
    <link rel="stylesheet" href="<?= base_url("assets/plugins/uniform/css/default.css") ?>" />
    <link rel="stylesheet" href="<?= base_url("assets/plugins/switchery/switchery.min.css") ?>" />

    <!-- custom css -->
    <link rel="stylesheet" href="<?= base_url("assets/css/styles.css") ?>" />

    <!-- full-calendar plugin -->
    <link rel="stylesheet" href="<?= base_url("assets/plugins/full-calendar/core/main.css") ?>" />
    <link rel="stylesheet" href="<?= base_url("assets/plugins/full-calendar/daygrid/main.css") ?>" />
    <link rel="stylesheet" href="<?= base_url("assets/plugins/full-calendar/timegrid/main.css") ?>" />
    <link rel="stylesheet" href="<?= base_url("assets/plugins/full-calendar/list/main.css") ?>" />
    <!-- datatables plugin -->
    <link rel="stylesheet" href="<?= base_url("assets/plugins/datatables/css/jquery.datatables.min.css") ?>" />
    <link rel="stylesheet" href="<?= base_url("assets/plugins/datatables/css/jquery.datatables_themeroller.css") ?>" />
    <!-- bootstrap-datepicker plugin -->
    <link rel="stylesheet" href="<?= base_url("assets/plugins/bootstrap-datepicker/css/datepicker.css") ?>" />
    <!-- bootstrap-clockpicker plugin -->
    <link rel="stylesheet" href="<?= base_url("assets/plugins/bootstrap-clockpicker/css/bootstrap-clockpicker.min.css") ?>" />
    <style>
        .dt-buttons {
            margin-bottom: 5px !important;
        }
    </style>

    <style>
        .page-footer {
            background: #fff !important;
            padding: 15px 40px 0 !important;
            position: fixed !important;
            width: 100%;
            z-index: 2;
        }

        a.active {
            color: #2c7be5;
            font-weight: 500;
        }
    </style>
</head>

<body class="page-sidebar-fixed page-header-fixed">

    <!-- start page loading -->
    <div id="preloader">
        <div class="row loader">
            <div class="loader-icon"></div>
        </div>
    </div>
    <div class="page-container">
        <?php $this->load->view("admin/inc/sidebar") ?>
        <div class="page-content">
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
                                                        <span class="notification-info">Finished uploading photos to gallery <b>"South Africa"</b>.
                                                            <small class="notification-date">20:00</small>
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><span class="notification-badge bg-primary"><i class="fa fa-at"></i></span>
                                                        <span class="notification-info"><b>John Doe</b> mentioned you in a post "Update v1.5".
                                                            <small class="notification-date">06:07</small>
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><span class="notification-badge bg-danger"><i class="fa fa-bolt"></i></span>
                                                        <span class="notification-info">4 new special offers from the apps you follow!
                                                            <small class="notification-date">Yesterday</small>
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><span class="notification-badge bg-success"><i class="fa fa-bullhorn"></i></span>
                                                        <span class="notification-info">There is a meeting with <b>Ethan</b> in 15 minutes!
                                                            <small class="notification-date">Yesterday</small>
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
                                        <li><a href="#">Profile</a></li>
                                        <li><a href="#"><span class="badge float-right badge-danger">42</span>Messages</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#">Account Settings</a></li>
                                        <li><a href="#">Log Out</a></li>
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
                <div id="main-wrapper">
                    <div class="row">

                    </div>
                </div>
            </div>
        </div>
        <div class="page-footer text-right">
            <p>Copyright &copy; <?= date("Y") . " " . $this->settings->general()->school_name ?> All rights reserved.</p>
        </div>
    </div>
    <script src="<?= base_url("assets/plugins/jquery/jquery-3.1.0.min.js") ?>"></script>
    <script src="<?= base_url("assets/plugins/popper/js/popper.min.js") ?>"></script>
    <script src="<?= base_url("assets/plugins/bootstrap/js/bootstrap.min.js") ?>"></script>
    <script src="<?= base_url("assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js") ?>"></script>
    <script src="<?= base_url("assets/plugins/uniform/js/jquery.uniform.standalone.js") ?>"></script>
    <script src="<?= base_url("assets/plugins/switchery/switchery.min.js") ?>"></script>
    <script src="<?= base_url("assets/js/main.js") ?>"></script>
    <?php if (isset($active) && $active == "dashboard") { ?>
        <!-- chartjs -->
        <script src="<?= base_url("assets/plugins/chartjs/chart.min.js") ?>"></script>

        <!-- d3.min -->
        <script src="<?= base_url("assets/plugins/d3/d3.min.js") ?>"></script>

        <!-- nv.d3.min -->
        <script src="<?= base_url("assets/plugins/nvd3/nv.d3.min.js") ?>"></script>

        <!-- float chart -->
        <script src="<?= base_url("assets/plugins/flot/jquery.flot.min.js") ?>"></script>

        <!-- float time -->
        <script src="<?= base_url("assets/plugins/flot/jquery.flot.time.min.js") ?>"></script>

        <!-- float symbol -->
        <script src="<?= base_url("assets/plugins/flot/jquery.flot.symbol.min.js") ?>"></script>

        <!-- float resize -->
        <script src="<?= base_url("assets/plugins/flot/jquery.flot.resize.min.js") ?>"></script>

        <!-- float tooltip -->
        <script src="<?= base_url("assets/plugins/flot/jquery.flot.tooltip.min.js") ?>"></script>

        <!-- float pie -->
        <script src="<?= base_url("assets/plugins/flot/jquery.flot.pie.min.js") ?>"></script>

        <!-- float pie -->
        <script src="<?= base_url("assets/js/pages/dashboard.js") ?>"></script>

        <!-- Calendar -->
        <!-- full calendar event -->
        <script src="<?= base_url("assets/js/pages/calendar-event.js") ?>"></script>

        <!-- full calendar core -->
        <script src='<?= base_url("assets/plugins/full-calendar/core/main.min.js") ?>'></script>

        <!-- full calendar interaction -->
        <script src='<?= base_url("assets/plugins/full-calendar/interaction/main.min.js") ?>'></script>

        <!-- full calendar daygrid -->
        <script src='<?= base_url("assets/plugins/full-calendar/daygrid/main.min.js") ?>'></script>

        <!-- full calendar timegrid -->
        <script src='<?= base_url("assets/plugins/full-calendar/timegrid/main.min.js") ?>'></script>

        <!-- full calendar list -->
        <script src='<?= base_url("assets/plugins/full-calendar/list/main.min.js") ?>'></script>
    <?php } ?>
    <script src="<?= base_url("assets/plugins/datatables/js/jquery.datatables.min.js") ?>"></script>
    <script src="<?= base_url("assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js") ?>"></script>
    <script src="<?= base_url("assets/js/pages/table-data.js") ?>"></script>
    <script src="<?= base_url("assets/plugins/jquery-validation/jquery.validate.min.js") ?>"></script>
    <script src="<?= base_url("assets/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js") ?>"></script>
    <script src="<?= base_url("assets/plugins/bootstrap-clockpicker/js/bootstrap-clockpicker.min.js") ?>"></script>
    <script src="<?= base_url("assets/js/pages/form-wizard.js") ?>"></script>
    <script src="<?= base_url("assets/js/pages/form-elements.js") ?>"></script>
    <?php if (isset($page_mother) && $page_mother == "OExams") : ?>
        <link href="<?= base_url("assets/plugins/icheck/square/_all.css") ?>" rel="stylesheet">
        <script src="<?= base_url("assets/plugins/icheck/icheck.js") ?>"></script>
    <?php endif; ?>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script>
        $(document).ready(function() {
            $("a.active").parents("ul.sub-menu").css({
                "display": "block"
            });
            $("a.active").parents("ul.sub-menu").siblings("a").addClass("active");
        })
    </script>

</body>

</html>