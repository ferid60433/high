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
    <title> <?= isset($title) ? $title : "Portal" ?> :: <?= SCHOOL_NAME ?></title>

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
	<link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
</head>

<body class="page-sidebar-fixed page-header-fixed">
    <!-- start page loading -->
    <div id="preloader">
        <div class="row loader">
            <div class="loader-icon"></div>
        </div>
    </div>
    <style>
		body{
			font-family: 'Rubik', sans-serif;
		}
        .page-footer {
            background: #fff !important;
            padding: 15px 5px 0 !important;
            width: 100% !important;
            position: fixed !important;
        }
    </style>
