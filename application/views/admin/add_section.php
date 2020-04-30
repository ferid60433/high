<?php $this->load->view("admin/inc/header") ?>
<style>
    .input-group-prepend,
    .input-group-text {
        width: 44px !important;
    }
</style>
<?php $this->load->view("inc/post-meta") ?>
<?php $this->load->view("admin/inc/pre-body") ?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-white">
            <div class="card-body">
				<?= form_open(''); ?>
				<div class="row m-b-lg">
					<div class="col-md-12">
						
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Section Name</label>
							<div class="col-sm-10">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="fas fa-paper-plane"></i></div>
									</div>
									<input type="text"
										   value="<?= set_value('name', ''); ?>"
										   class="form-control" placeholder="Section Name/Arm" name="name">
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Category</label>
							<div class="col-sm-10">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="fas fa-list"></i></div>
									</div>
									<input type="text" value="<?= set_value('category', ''); ?>" class="form-control" placeholder="Category" name="category">
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Capacity</label>
							<div class="col-sm-10">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<div class="input-group-text">#</div>
									</div>
									<input type="number"
										   class="form-control" placeholder="Capacity of Student" name="capacity">
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Class</label>
							<div class="col-sm-10">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="fas fa-school"></i></div>
									</div>
									<select class="form-control" id="class" name="class">
										<option> Select Class</option>
										<?php foreach ( $classes as $class ) :?>
											<option value="<?= $class->id; ?>"><?= strtoupper($class->name); ?></option>
										<?php endforeach; ?>
									</select>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Teacher</label>
							<div class="col-sm-10">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="fas fa-user-plus"></i></div>
									</div>
									<select class="form-control" id="teacher" name="teacher">
										<option> Select Teacher for this Section/Arm</option>
										<?php foreach ( $teachers as $teacher ) :?>
											<option value="<?= $teacher->id; ?>"><?= ucwords( $teacher->name); ?></option>
										<?php endforeach; ?>
									</select>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Note</label>
							<div class="col-sm-10">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="fas fa-book"></i></div>
									</div>
									<textarea type="text" class="form-control" placeholder="Note" id="note" name="note"></textarea>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Stay On Page</label>
							<div class="col-sm-10">
								<div class="input-group mb-3">
									<input
										type="checkbox"
										class="form-control"
										name="on_page">
									<span class="help-block">Stay on this page after adding?</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<button type="submit" class="finish float-right btn btn-primary btn-sm">Finish</button>
					</div>
				</div>
				<?= form_close(); ?>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/inc/footer") ?>
<?php $this->load->view("inc/post-script")?>