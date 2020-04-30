<?php $this->load->view("admin/inc/header") ?>
<?php $this->load->view("inc/post-meta") ?>
<?php $this->load->view("admin/inc/pre-body") ?>
<div class="row">
	<div class="col-md-12">
		<div class="card card-white">
			<?php if (empty($action_type)) : ?>
				<div class="card-heading clearfix mb-3">
					<button type="button" class="btn btn-outline-primary" onclick="window.location='<?= base_url('admin/oexams/levels/add') ?>'"><i class="fas fa-plus"></i> Add New</button>
				</div>
			<?php endif; ?>
			<div class="card-body">
				
				<?php if ($action_type == 'add') : ?>
					<div class="col-md-12">
						<?= form_open(); ?>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Title</label>
							<div class="col-sm-10">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="fas fa-book"></i></div>
									</div>
									<input type="text" name="title" value="<?= set_value('title', '') ?>" class="form-control" placeholder="Level Name">
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
				<?php elseif ($action_type == 'edit') : ?>
					<div class="col-md-12">
						<?= form_open(); ?>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Title</label>
							<div class="col-sm-10">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="fas fa-book"></i></div>
									</div>
									<input type="text" name="title" value="<?= set_value('title', $level_title) ?>" class="form-control" placeholder="Level Name">
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
						<table class="display table datatables_init" style="width: 100%;">
							<thead>
								<tr>
									<th>S/N</th>
									<th>Title</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $x = 1;
								foreach ($levels as $level) :  ?>
									<tr>
										<td><?= $x; ?>.</td>
										<td><?= ucwords($level->title); ?></td>
										<td>
											<a class="btn btn-sm btn-outline-warning" title="Edit" href="<?= base_url("admin/oexams/levels/edit/" . simple_crypt($level->id)) ?>">
												<i class="fas fa-edit"></i>
											</a> |
											<a class="btn btn-sm btn-outline-danger" title="Edit" href="<?= base_url("admin/oexams/levels/delete") ?>"><i class="fas fa-trash"></i></a>
										</td>
									</tr>
								<?php $x++;
								endforeach; ?>
							</tbody>
						</table>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view("admin/inc/footer") ?>
<?php $this->load->view("inc/post-script") ?>