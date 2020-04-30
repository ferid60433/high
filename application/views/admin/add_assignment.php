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
				<?= form_open_multipart(); ?>
				<div class="row m-b-lg">
					<div class="col-md-12">
						
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Title</label>
							<div class="col-sm-10">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="fas fa-list"></i></div>
									</div>
									<input type="text" class="form-control" value="<?= set_value('title', ''); ?>" placeholder="Title" id="title" name="title">
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Description</label>
							<div class="col-sm-10">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="fas fa-book"></i></div>
									</div>
									<textarea type="text" class="form-control" placeholder="Description" id="description" name="description"></textarea>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Deadline</label>
							<div class="col-sm-10">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="fas fa-calendar"></i></div>
									</div>
									<input type="text" class="form-control date-picker" placeholder="20/12/2012"
										   name="deadline" id="deadline">
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
									<select class="form-control" id="class" name="cid" required>
										<option> Select Class </option>
										<?php foreach ( $classes as $class ):?>
											<option value="<?= $class->id; ?>"><?= strtoupper($class->name); ?></option>
										<?php endforeach; ?>
									</select>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Section</label>
							<div class="col-sm-10">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="fas fa-school"></i></div>
									</div>
									<select class="form-control" id="section" name="sid">
										<option> Select Section / Arms </option>
									</select>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Subject</label>
							<div class="col-sm-10">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="fas fa-school"></i></div>
									</div>
									<select class="form-control" id="subject" name="subject">
										<option> Select Subject </option>
									</select>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">File</label>
							<div class="col-sm-10">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="fas fa-camera"></i></div>
									</div>
									<div class="custom-file">
										<input type="file" class="custom-file-input" name="file" id="file">
										<label class="custom-file-label" for="customFile">Choose file</label>
									</div>
								</div>
							</div>
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
        </div>
    </div>
</div>
<?php $this->load->view("admin/inc/footer") ?>
<script>
	$(document).ready(function(){
		//@TODO: .then()
		let base_url = "<?= base_url();?>";
		$('#class').on('change', () =>{
			let class_id = parseInt($(this).find(':selected').val());
			$('#section').empty();
			$('#subject').empty();
			if( class_id > 0 && class_id !== undefined ){
				$.ajax({
					url : base_url + '/ajax/get_section_by_class/',
					method: "POST",
					cache : false,
					data: {class_id},
					success : response => {
						if(response.status){
							let data_list = '<option value=""> Select Section/Arms </option>';
							if( Array.isArray(response.message)) {
								$.each(response.message, (key, value) => {
									data_list += `<option value="${value.id}">${value.name}</option>`;
								});
							}else{
								data_list += `<option value="0">${response.message}</option>`;
							}
							$('#section').append(data_list);
							// fetch the subject also
							let subject_list = '';
							$.get( base_url + '/ajax/get_subjects_by_class?cid=' + class_id, ( response, status) => {
								if( Array.isArray(response.message)) {
									$.each(response.message, (key, value) => {
										subject_list += `<option value="${value.id}">${value.subject}</option>`;
									});
								}else{
									subject_list += `<option>${response.message}</option>`;
								}
								$('#subject').append(subject_list);
							});
						}else{
							alert('error')
						}
					},
					error : response => {
						alert('There was an error fetching the section...');
					}
				});
			}else{
				$('#section').append('<option value="0"> All Section/Arms </option>')
			}
		});
	})
</script>
<?php $this->load->view("inc/post-script")?>
