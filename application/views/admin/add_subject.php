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
				<?php $this->load->view('msg_view'); ?>
				<?= form_open(''); ?>
				<div class="row m-b-lg">
					<div class="col-md-12">
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Class</label>
							<div class="col-sm-10">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="fas fa-school"></i></div>
									</div>
									<select class="form-control" id="class" name="class" required>
										<option value="">-- Select class --</option>
										<?php foreach ( $classes as $class ) : ?>
											<option value="<?= $class->id; ?>">
												<?= strtoupper($class->name); ?>
											</option>
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
									<select class="form-control" id="teacher" name="teacher" required>
										<option value="">-- Select class teacher --</option>
										<?php foreach ( $teachers as $teacher ) : ?>
											<option value="<?= $teacher->id; ?>">
												<?= strtoupper($teacher->name); ?>
											</option>
										<?php endforeach; ?>
									</select>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Type</label>
							<div class="col-sm-10">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="fas fa-user-plus"></i></div>
									</div>
									<select class="form-control" id="type" name="type">
										<option>Select</option>
										<option value="mandatory">Mandatory</option>
										<option value="optional">Optional</option>
									</select>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Pass Mark</label>
							<div class="col-sm-10">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="fas fa-check"></i></div>
									</div>
									<input type="text" value="<?= set_value('pass_mark', '')?>" class="form-control" placeholder="Pass Mark" id="pass_mark" name="pass_mark">
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Final Mark</label>
							<div class="col-sm-10">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="fas fa-check"></i></div>
									</div>
									<input type="text" value="<?= set_value('final_mark', '')?>" class="form-control" placeholder="Final Mark" id="final_mark" name="final_mark">
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Subject Name</label>
							<div class="col-sm-10">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="fas fa-paper-plane"></i></div>
									</div>
									<input type="text" class="form-control" value="<?= set_value('subject', '')?>" placeholder="Subject Name" id="subject" name="subject">
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Author</label>
							<div class="col-sm-10">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="fas fa-user"></i></div>
									</div>
									<input type="text" class="form-control" value="<?= set_value('author', '');?>" placeholder="Subject Author" name="author">
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Subject Code</label>
							<div class="col-sm-10">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<div class="input-group-text">#</div>
									</div>
									<input type="text" class="form-control" value="<?= set_value('code', ''); ?>" placeholder="Subject Code" name="code">
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
				</div>
				<div class="row">
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