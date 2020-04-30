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
							<label class="col-sm-2 col-form-label">Class Name</label>
							<div class="col-sm-10">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="fas fa-list"></i></div>
									</div>
									<input
										type="text"
										class="form-control"
										placeholder="Class Name"
										name="class_name">
								</div>
								<?= form_error('class_name'); ?>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Class Numeric</label>
							<div class="col-sm-10">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<div class="input-group-text">#</div>
									</div>
									<input
										type="text"
										class="form-control"
										placeholder="Class Numeric"
										name="class_numeric">
								</div>
								<?= form_error('class_numeric'); ?>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Teacher</label>
							<div class="col-sm-10">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="fas fa-user-plus"></i></div>
									</div>
									<select class="form-control" id="teacher" required name="teacher">
										<option value="" selected>Select</option>
										<?php foreach ( $teachers as $teacher ) : ?>
											<option value="<?= $teacher->id; ?>">
												<?= ucwords($teacher->name); ?>
											</option>
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
									<textarea type="text" class="form-control" placeholder="Note" name="note"></textarea>
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
