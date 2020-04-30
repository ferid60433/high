<?php $this->load->view("admin/inc/header") ?>
<?php $this->load->view("inc/post-meta") ?>
<?php $this->load->view("admin/inc/pre-body") ?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-white">
            <div class="card-heading clearfix mb-3">
                <button type="button" class="btn btn-sm btn-outline-primary" onclick="window.location='<?= base_url('admin/roles/add') ?>'"><i class="fas fa-plus"></i> Add New</button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table datatables_init" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Role</th>
                                <th>Permissions</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $x = 1;
                            foreach ($roles as $role) : ?>
                                <tr>
                                    <td><?= "$x." ?></td>
                                    <td><?= $role->title ?></td>
                                    <td>
                                        <?php if ($role->id != 1) :
                                            $roles_actions = [];
                                            $role_roles = explode(",", $role->roles);
                                            foreach ($role_roles as $id) {
                                                $t = $this->site->get_row("modules", "*", "id = $id")->title;
                                                array_push($roles_actions, "<span class='badge badge-info'>$t</span>");
                                            }
                                            $roles_actions = implode(", ", $roles_actions);
                                            echo $roles_actions;
                                        endif; ?>
                                    </td>
                                    <td>
                                        <?php if ($role->id != 1) : ?>
                                            <a class="btn btn-sm btn-outline-warning" title="Edit" href="<?= base_url("admin/roles/edit/" . simple_crypt($role->id) . '/') ?>">
                                                <i class="fas fa-edit"></i>
                                            </a> |
                                            <a class="btn btn-sm btn-outline-danger" title="Delete" href="<?= base_url("admin/roles/delete") ?>">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php $x++;
                            endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/inc/footer") ?>
<?php $this->load->view("inc/post-script") ?>