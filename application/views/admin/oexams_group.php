<?php $this->load->view("admin/inc/header") ?>
<?php $this->load->view("inc/post-meta") ?>
<?php $this->load->view("admin/inc/pre-body") ?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-white">
			<?php if( !empty( $acttion_type )) : ?>
            <div class="card-heading clearfix mb-3">
                <button type="button" class="btn btn-sm btn-outline-primary" onclick="window.location='<?=base_url('admin/oexams/groups/add')?>'"><i class="fas fa-plus"></i> Add New</button>
            </div>
			<?php endif; ?>
            <div class="card-body">
				<?php $this->load->view('msg_view'); ?>
				<?php if( $action_type == 'add' ) : ?>
				<div class="col-md-12">
					<?= form_open(); ?>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Title</label>
						<div class="col-sm-10">
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<div class="input-group-text"><i class="fas fa-book"></i></div>
								</div>
								<input type="text" name="title" value="<?= set_value('title', '')?>" class="form-control" placeholder="Group Name">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<button type="submit" class="finish float-right btn btn-primary btn-lg">Finish</button>
						</div>
					</div>
					<?= form_close(); ?>
				</div>
				<?php elseif( $action_type == 'edit' ) :?>
					<div class="col-md-12">
						<?= form_open(); ?>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Title</label>
							<div class="col-sm-10">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="fas fa-book"></i></div>
									</div>
									<input type="text" name="title" value="<?= set_value('title', $group_title)?>" class="form-control" placeholder="Group Name">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<button type="submit" class="finish float-right btn btn-primary btn-lg">Update</button>
							</div>
						</div>
						<?= form_close(); ?>
					</div>
				<?php else : ?>
                <div class="table-responsive">
                    <table class="table datatables_init" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Title</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
							<?php $x =1;  foreach($groups as $group ):  ?>
								<tr>
									<td><?= $x ;?>.</td>
									<td><?= ucwords($group->title); ?></td>
									<td>
										<a class="btn btn-sm btn-outline-warning"
										   href="<?=base_url("admin/oexams/groups/edit/" . simple_crypt( $group->id))?>">
											Edit
										</a> |
										<a class="btn btn-sm btn-outline-danger"
										   href="<?=base_url("admin/oexams/groups/delete")?>">Delete</a>
									</td>
                            	</tr>
							<?php $x++; endforeach; ?>
                        </tbody>
                    </table>
                </div>
				<?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/inc/footer") ?>
<?php $this->load->view("inc/post-script")?>
