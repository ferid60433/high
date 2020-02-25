<style>
    .breadcrumb li:not(:first-child):before {
        content: " / ";
        margin: 3px;
    }
</style>
<div class="page-title">
    <div class="col-md-12 row">
        <h3 class="breadcrumb-header col-md-9"><?= $title ?></h3>
        <div class=" col-md-3">
            <ul class="breadcrumb">
                <li><a href="<?=base_url("admin")?>"><i class="fas fa-home"></i> Dashboard</a></li>
                <?php if (isset($page_mother)) { ?>
                    <li><a href="<?=base_url("admin/".strtolower($page_mother))?>"><?= $page_mother ?></a></li>
                <?php } ?>
                <li><?= $page ?></li>
            </ul>
        </div>
    </div>
</div>