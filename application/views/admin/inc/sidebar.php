<!-- start page sidebar -->
<div class="page-sidebar">
    <a class="logo-box" href="<?= base_url() ?>">
        <span style="font-size:12px;"><?= $this->settings->general()->school_name ?></span>
        <!-- <i class="icon-school" title="Pin Menu" id="fixed-sidebar-toggle-button"></i> -->
        <i class="icon-close" id="sidebar-toggle-button-close"></i>
    </a>
    <?php
    $ug = $this->session->userdata("role");
    $role = $this->site->get_row("roles", "*", "id = $ug");
    $actions = explode(",", $role->roles);
    ?>
    <div class="page-sidebar-inner">
        <div class="page-sidebar-menu">
            <ul class="accordion-menu">
                <li>
                    <a href="<?= base_url("admin") ?>" class="<?= (isset($active) && $active == "dashboard") ? "active" : "" ?>">
                        <i class="menu-icon icon-home4"></i><span>Dashboard</span>
                    </a>
                </li>
                <?php foreach ($this->menu->modules() as $module) : ?>
                    <?php
                    $url = explode("/", strtolower($this->uri->uri_string()));
                    $l = $url[count($url) - 1];
                    if (strlen($l) > 30) array_pop($url);
                    $l = $url[count($url) - 1];
                    if ($l == "add" || $l == "edit" || $l == "view" || $l == "questions") {
                        array_pop($url);
                        $l = $url[count($url) - 1];
                        if ($l == "add" || $l == "edit" || $l == "view" || $l == "payment") {
                            array_pop($url);
                        }
                        $url = implode("/", $url);
                    } else {
                        $url = $this->uri->uri_string();
                    }
                    if (in_array($module->id, $actions) || $ug == 1) :
                        $submodules = $this->menu->submodules($module->id);
                        if (count($submodules) < 1) :
                    ?>
                            <li>
                                <a href="<?= base_url("admin/$module->url") ?>" class="<?= ($url == "admin/$module->url") ? "active" : "" ?>">
                                    <i class="menu-icon <?= $module->iclass ?>"></i><span><?= $module->title ?></span>
                                </a>
                            </li>
                        <?php else : ?>
                            <li>
                                <a href="javascript:void(0);">
                                    <i class="menu-icon <?= $module->iclass ?>"></i><span><?= $module->title ?></span><i class="accordion-icon fa fa-angle-left"></i>
                                </a>
                                <ul>
                                    <?php foreach ($submodules as $submodule) : ?>
                                        <li>
                                            <a href="<?= base_url("admin/$submodule->url") ?>" class="<?= ($url == "admin/$submodule->url") ? "active" : "" ?>">
                                                <?= $submodule->title ?>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                    <?php endif;
                    endif; ?>
                <?php endforeach; ?>
                <li class="menu-divider"></li>
                <li>
                    <a href="<?= base_url("logout") ?>">
                        <i class="menu-icon icon-lock"></i><span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- end page sidebar -->