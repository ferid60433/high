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
<script src="<?= base_url("assets/plugins/toastr/toastr.min.js")?>"></script>