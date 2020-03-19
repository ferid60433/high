<?php $this->load->view("admin/inc/header") ?>
<!-- page styles here -->
<?php $this->load->view("inc/post-meta") ?>
<?php $this->load->view("admin/inc/pre-body") ?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-white">
            <div class="card-heading clearfix mb-3">
                <button type="button" class="btn btn-outline-primary" onclick="window.location='<?=base_url('admin/classes/add')?>'"><i class="fas fa-plus"></i> Add New</button>
            </div>
            <div class="card-body">
				<?php $this->load->view('msg_view'); ?>
                <div class="table-responsive">
                    <table class="table datatables_init" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Class</th>
                                <th>Class Numeric</th>
                                <th>Teacher in Charge</th>
                                <th>Note</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
						<?php $x = 1;  foreach( $classes as $class ) : ?>
                            <tr>
                                <td><?= $x;?></td>
                                <td><?= ucwords($class->name); ?></td>
                                <td><?= $class->class_numeric; ?></td>
								<td>
									<a title="<?= ucwords($class->teacher)?>" href="<?= base_url('admin/teachers/?id=' .simple_crypt($class->tid))?>">
										<?= ucwords($class->teacher)?>
									</a>
								</td>
                                <td><?= substr( $class->note, 0, 10 )?></td>
                                <td>
									<a class="btn btn-sm btn-outline-warning"
									   href="<?=base_url("admin/classes/edit/" . simple_crypt($class->id))?>">Edit</a> |
									<a class="btn btn-sm btn-outline-danger"
									   href="<?=base_url("admin/classes/delete/" . simple_crypt($class->id))?>">Delete</a>
								</td>
                            </tr>
						<?php $x++; endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/inc/footer") ?>
<?php $this->load->view("inc/post-script")?>