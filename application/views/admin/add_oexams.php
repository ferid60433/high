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
				<?= form_open(); ?>
				<div class="row m-b-lg">
					<div class="col-md-12">
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Exam Title</label>
							<div class="col-sm-10">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="fas fa-book"></i></div>
									</div>
									<input type="text" name="title" required class="form-control" placeholder="Exam Title">
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
									<textarea name="description" class="form-control" placeholder="Description"></textarea>
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
									<select class="form-control" id="class" name="cid">
										<option> Select Class </option>
										<?php foreach ( $classes as $class ):?>
											<option value="<?= $class->id; ?>"><?= strtoupper($class->name); ?></option>
										<?php endforeach; ?>
									</select>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Section/Arms</label>
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
							<label class="col-sm-2 col-form-label">Instruction</label>
							<div class="col-sm-10">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="fas fa-book"></i></div>
									</div>
									<input type="text" name="instruction" class="form-control" />
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Exam Status</label>
							<div class="col-sm-10">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="fas fa-list"></i></div>
									</div>
									<select class="form-control" id="exam_status" name="exam_status">
										<option value="">Exam Status (Optional)</option>
										<option value="one_time">One Time</option>
										<option value="multiple_time">Multiple Times</option>
									</select>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Exam Type</label>
							<div class="col-sm-10">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="fas fa-list"></i></div>
									</div>
									<select class="form-control" id="exam_type" name="exam_type">
										<option value="">Select Exam Type</option>
										<option value="duration">Only Duration</option>
										<option value="date_duration">Date and Duration</option>
										<option value="date_time_duration">Date, Time and Duration</option>
									</select>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Duration (in minutes)</label>
							<div class="col-sm-10">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="fas fa-clock"></i></div>
									</div>
									<input type="text" name="duration" class="form-control" placeholder="Duration">
								</div>
							</div>
						</div>
						<div id="date_div" style="display: none;">
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">Date</label>
								<div class="col-sm-10">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<div class="input-group-text"><i class="fas fa-calendar"></i></div>
										</div>
										<input type="text" name="start_date" class="form-control date-picker" placeholder="Exam Date">
									</div>
								</div>
							</div>
						</div>
						<div id="time_div" style="display: none;">
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">Time From</label>
								<div class="col-sm-10">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<div class="input-group-text"><i class="fas fa-clock"></i></div>
										</div>
										<input type="text" name="start_time" class="form-control time-picker" placeholder="10:00 AM">
									</div>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">Time To</label>
								<div class="col-sm-10">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<div class="input-group-text"><i class="fas fa-clock"></i></div>
										</div>
										<input type="text" name="end_time" class="form-control time-picker" placeholder="10:45 AM">
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Mark Type</label>
							<div class="col-sm-10">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="fas fa-check"></i></div>
									</div>
									<select class="form-control" id="mark_type" name="mark_type">
										<option value=""> Select Mark Type </option>
										<option value="percentage">Percentage</option>
										<option value="fixed">Fixed</option>
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
									<input type="number" name="pass_mark" class="form-control" placeholder="Pass Mark">
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Negative Mark</label>
							<div class="col-sm-10">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="fas fa-minus-square"></i></div>
									</div>
									<input type="number" name="negative_mark" class="form-control" placeholder="Negative Mark">
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Random</label>
							<div class="col-sm-10">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="fas fa-random"></i></div>
									</div>
									<select class="form-control" id="random" name="random">
										<option>Select</option>
										<option value="1">Yes</option>
										<option value="0">No</option>
									</select>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Published</label>
							<div class="col-sm-10">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="fas fa-globe"></i></div>
									</div>
									<select class="form-control" id="poublished" name="published" required>
										<option value=""> Select Status</option>
										<option value="active">Make Active</option>
										<option value="suspend">Suspend</option>
									</select>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<button type="submit" class="finish btn-sm float-right btn btn-primary btn-lg">Finish</button>
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
<script>
    $("#exam_type").change(function() {
        switch (this.value) {
            case "duration":
                $("#date_div").hide();
                $("#time_div").hide();
                break;
            case "date_duration":
                $("#date_div").show();
                $("#time_div").hide();
                break;
            case "date_time_duration":
                $("#date_div").show();
                $("#time_div").show();
                break;
            default:
                $("#date_div").hide();
                $("#time_div").hide();
                break;
        }
    })
</script>
<?php $this->load->view("inc/post-script")?>
