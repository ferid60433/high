<style>
    .breadcrumb li:not(:first-child):before {
        content: "/";
        margin: 0 5px 0 5px;
    }

    .breadcrumb {
        position: absolute;
        right: 0;
    }
</style>
<div class="page-title">
    <div class="col-md-12">
        <div class="row">
            <h3 class="breadcrumb-header col-md-9"><?= $title ?></h3>
            <div class="col-md-3 text-right">
                <ul class="breadcrumb text-right">
                    <li><a href="<?= base_url("admin") ?>"><i class="fas fa-home"></i> Dashboard</a></li>
                    <?php if (isset($page_mother)) : ?>
                        <li><a href="<?= base_url("admin/" . strtolower($page_mother)) ?>"><?= (isset($page_mother_name)) ? $page_mother_name : $page_mother ?></a></li>
                    <?php endif; ?>
                    <li><?= (isset($page_name)) ? $page_name : $page  ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>