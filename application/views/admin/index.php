<?php $this->load->view("admin/inc/header") ?>
<?php $this->load->view("inc/post-meta") ?>
<?php $this->load->view("admin/inc/pre-body") ?>
<div class="row">
    <div class="col-xl-3 col-lg-6 col-md-6">
        <div class="card card-white stats-widget">
            <div class="card-body">
                <div class="float-left">
                    <span class="stats-number"><?= $this->site->count_row("students") ?></span>
                    <p class="stats-info"><a href="<?= base_url("admin/students") ?>">Students</a></p>
                </div>
                <div class="float-right">
                    <i class="fas fa-user-graduate text-primary stats-icon primary"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6">
        <div class="card card-white stats-widget">
            <div class="card-body">
                <div class="float-left">
                    <span class="stats-number"><?= $this->site->count_row("parents") ?></span>
                    <p class="stats-info"><a href="<?= base_url("admin/parents") ?>">Parents</a></p>
                </div>
                <div class="float-right">
                    <i class="fas fa-user-plus stats-icon text-danger danger"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6">
        <div class="card card-white stats-widget">
            <div class="card-body">
                <div class="float-left">
                    <span class="stats-number"><?= $this->site->count_row("teachers") ?></span>
                    <p class="stats-info"><a href="<?= base_url("admin/teachers") ?>">Teachers</a></p>
                </div>
                <div class="float-right">
                    <i class="fas fa-chalkboard-teacher stats-icon text-warning warning"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6">
        <div class="card card-white stats-widget">
            <div class="card-body">
                <div class="float-left">
                    <span class="stats-number"><?= $this->site->count_row("classes") ?></span>
                    <p class="stats-info"><a href="<?= base_url("admin/classes") ?>">Classes</a></p>
                </div>
                <div class="float-right">
                    <i class="fas fa-tasks stats-icon text-success success"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-12">
        <div class="card card-white">
            <div class="card-heading clearfix">
                <h4 class="card-title">2020 Account Summary</h4>
            </div>
            <div class="card-body">
                <div id="chart1">
                    <svg style="height:100%;width:100%"></svg>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-3 col-lg-4 col-md-12">
        <div class="card card-white">
            <div class="card-heading clearfix">
                <h4 class="card-title">Events</h4>
            </div>
            <div class="card-body">

                <div id="external-events">

                    <div id='external-events-list'>
                        <div class="fc-event mb-2 p-2">My Event 1</div>
                        <div class="fc-event mb-2 p-2">My Event 2</div>
                        <div class="fc-event mb-2 p-2">My Event 3</div>
                        <div class="fc-event mb-2 p-2">My Event 4</div>
                        <div class="fc-event mb-2 p-2">My Event 5</div>
                    </div>

                    <p class="mb-0">
                        <input type='checkbox' id='drop-remove' />
                        <label for='drop-remove'>Remove after drop</label>
                    </p>
                </div>

            </div>
        </div>

    </div>
    <div class="col-xl-9 col-lg-8 col-md-12">
        <div class="card card-white">

            <div class="card-body">
                <div id='calendar'></div>
                <div style='clear:both'></div>
            </div>
        </div>

    </div>

</div>
<?php $this->load->view("admin/inc/footer") ?>

<?php $this->load->view("inc/post-script") ?>