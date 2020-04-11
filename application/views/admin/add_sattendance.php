<?php $this->load->view("admin/inc/header") ?>
<style>
    .tab-pane .row {
        margin-top: 15px;
    }

    .form-inline label {
        justify-content: unset !important;
    }
</style>
<?php $this->load->view("inc/post-meta") ?>
<?php $this->load->view("admin/inc/pre-body") ?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-white">
            <div class="card-body">
				<?php $this->load->view('msg_view'); ?>
				<?= form_open('', 'class="form-inline row"')?>
                    <div class="col-md-10 row">
                        <div class="form-group col-md-4">
                            <label class="col-sm-12 col-form-label">Class</label>
                            <div class="col-sm-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-school"></i></div>
                                    </div>
                                    <select class="form-control" id="class" name="class">
                                        <option value="">-- Select --</option>
										<?php foreach( $classes as $c ) : ?>
                                        	<option value="<?= $c->id;?>"
													<?= (isset($class) && $class == $c->id ) ? 'selected' : null;?> >
												<?= strtoupper($c->name); ?>
											</option>
										<?php endforeach;?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="col-sm-12 col-form-label">Section</label>
                            <div class="col-sm-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-school"></i></div>
                                    </div>
									<?php  if(isset($section_id )) : ?>
                                    	<select class="form-control" id="section" name="section">
											<?php foreach( $sections as $section ) : ?>
												<option value="<?= $section->id?>" <?= ($section_id == $section->id) ? 'selected' : null;?> >
													<?= strtoupper($section->name); ?>
												</option>
											<?php endforeach;?>
										</select>
									<?php else :?>
										<select class="form-control" id="section" name="section"></select>
									<?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="col-sm-12 col-form-label">Date</label>
                            <div class="col-sm-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-calendar"></i></div>
                                    </div>
                                    <input type="text" class="form-control date-picker" id="date"
										   value="<?= isset($date) ? date('Y/m/d', strtotime($date)) : null ; ?>" name="date">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row col-md-2">
                        <button type="submit" class="btn btn-primary btn-sm">Attendance</button>
                    </div>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card card-white">
            <div class="card-body">
                <div class="alert alert-dark mb-0 text-center" role="alert">
                    Attendance Details<br>
                    Class : JSS 1<br>
                    Section : JSS 1<br>
                    Day : Thursday<br>
                    Date : 27th February 2020
                </div>
            </div>
        </div>
    </div>
    <?php if(isset($students)) :?>
    	<div class="col-md-12">
        <div class="card card-white">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Name</th>
                                <th>Roll</th>
                                <th>Attendance</th>
                            </tr>
                        </thead>
                        <tbody>
							<?php $x =1; foreach( $students as $student ) : ?>
                            	<tr>
                                <td><?= $x;?>.</td>
                                <td><?= ucwords($student->name);?></td>
                                <td><?= $student->roll; ?></td>
                                <td>
                                    <div class="form-check">
										<?php foreach( attendanceRemarks() as $key => $value ) :?>
											<input class="form-check-input" type="radio" name="att" id="att1" value="<?= $key?>">
											<label class="form-check-label" for="att1"><?= $value?></label>
                                        <?php endforeach; ?>
                                    </div>
                                </td>
                            </tr>
							<?php endforeach; ?>
                        </tbody>
                    </table>
                    <div class="col-md-12"><button class="btn btn-primary btn-sm float-right mt-2">Submit</button></div>
                </div>
            </div>
        </div>
    </div>
	<?php endif; ?>
</div>
<?php $this->load->view("admin/inc/footer") ?>
<script>
	$(document).ready(function(){
		let base_url = "<?= base_url();?>";
		$('#class').on('change', () =>{
			let class_id = parseInt($(this).find(':selected').val());
			$('#section').empty();
			if( class_id > 0 && class_id !== undefined ){
				$.ajax({
					url : base_url + '/ajax/get_section_by_class/',
					method: "POST",
					cache : false,
					data: {class_id},
					success : response => {
						if(response.status){
							let data_list = '<option value="">-- Select Section/Arms --</option>';
							if( Array.isArray(response.message)) {
								$.each(response.message, (key, value) => {
									data_list += `<option value="${value.id}">${value.name}</option>`;
								});
							}else{
								data_list += `<option value="0">${response.message}</option>`;
							}
							$('#section').append(data_list);
						}else{
							alert('error')
						}
					},
					error : response => {
						alert('There was an error fetching the section...');
						console.debug(response);
					}
				});
			}else{
				$('#section').append('<option value="0">-- All Section/Arms --</option>')
			}
		});

		$('#section').change( () => {
			let section_id = parseInt($('#section').find(':selected').val());
			let class_id = parseInt($('#class').find(':selected').val());
			if( section_id !== undefined ){
				$('.data-body').empty();
				$.ajax({
					url : base_url + '/ajax/get_syllabus_by_section/',
					method: "POST",
					cache : false,
					data: {section_id,class_id},
					success : response => {
						if(response.status){
							let data_list = '';
							$.each(response.message, ( key, value ) => {
								data_list += `<tr>
<td>${value.sn}</td><td>${value.title}</td><td>${value.description}</td><td>${value.time_uploaded}</td>
<td>${value.actions}</td>
</tr>`;
							});
							$('.data-body').append(data_list);
						}else{
							alert('error')
						}
					},
					error : response => {
						alert('There was an error fetching the section...');
						console.debug(response);
					}
				});
			}
		});
	})
</script>
<?php $this->load->view("inc/post-script")?>
