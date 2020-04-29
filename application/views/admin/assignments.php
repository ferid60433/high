<?php $this->load->view("admin/inc/header") ?>
<!-- page styles here -->
<?php $this->load->view("inc/post-meta") ?>
<?php $this->load->view("admin/inc/pre-body") ?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-white">
			<?php $this->load->view('msg_view'); ?>
            <div class="card-heading clearfix">
                <div class="row">
                    <div class="col-md-6">
                        <button type="button" class="btn btn-sm btn-outline-primary" onclick="window.location='<?= base_url('admin/assignments/add') ?>'"><i class="fas fa-plus"></i> Add New</button>
                    </div>
                    <div class="col-md-6">
						<form>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">Class</label>
								<div class="col-sm-5">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<div class="input-group-text"><i class="fas fa-school"></i></div>
										</div>
										<select class="form-control" id="class" name="class">
											<option value=""> Select Class </option>
											<?php foreach ( $classes as $class ):?>
												<option value="<?= $class->id; ?>"><?= strtoupper($class->name); ?></option>
											<?php endforeach; ?>
										</select>
									</div>
								</div>
								<div class="col-sm-5">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<div class="input-group-text"><i class="fas fa-school"></i></div>
										</div>
										<select class="form-control" id="section" name="section"></select>
									</div>
								</div>
							</div>
						</form>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table datatables_init" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Deadline</th>
                                <th>Class</th>
                                <th>Uploader</th>
                                <th>File</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="data-body"></tbody>

                    </table>
                </div>
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
				$('#section').append('<option value="0"> All Section/Arms </option>')
			}
		});

		$('#section').change( () => {
			let section_id = parseInt($('#section').find(':selected').val());
			let class_id = parseInt($('#class').find(':selected').val());
			if( section_id !== undefined ){
				$('.data-body').empty();
				$.ajax({
					url : base_url + '/ajax/get_assignments_by_section/',
					method: "POST",
					cache : false,
					data: {section_id,class_id},
					success : response => {
						if(response.status){
							let data_list = '';
							$.each(response.message, ( key, value ) => {
								data_list += `<tr>
<td>${value.sn}</td><td>${value.title}</td><td>${value.description}</td><td>${value.deadline}</td>
<td>${value.class}</td><td>${value.user}</td><td>${value.file}</td>
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
