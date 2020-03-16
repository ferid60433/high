<?php $this->load->view("admin/inc/header") ?>
<?php $this->load->view("inc/post-meta") ?>
<?php $this->load->view("admin/inc/pre-body") ?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-white">
            <div class="card-heading clearfix">
                <div class="row">
                    <div class="col-md-6">
                        <button type="button" class="btn btn-outline-primary" onclick="window.location='<?= base_url('admin/sections/add') ?>'"><i class="fas fa-plus"></i> Add New</button>
                    </div>
                    <div class="col-md-6">
                        <form>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Class</label>
                                <div class="col-sm-10">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-school"></i></div>
                                        </div>
                                        <select class="form-control" id="class" name="class">
                                            <option>-- Select --</option>
											<?php foreach ( $classes as $class ) : ?>
												<option value="<?= $class->id; ?>"><?= strtoupper($class->name); ?></option>
											<?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="sections" class="display table datatables_init" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>S/N</th>
								<th>Class</th>
								<th>Section</th>
								<th>Category</th>
                                <th>Capacity</th>
                                <th>Teacher</th>
                                <th>Note</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="data-body">
                        </tbody>
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
			let selected = parseInt($(this).find(':selected').val());
			$('.data-body').empty();
			if( selected > 0 ){
				$('.data-body').empty();
				$.ajax({
					url : base_url + '/admin/sections/get_sections/',
					method: "POST",
					cache : false,
					data: {selected},
					success : response => {
						if(response.status){
							let data_list = '';
							$.each(response.message, ( key, value ) => {
								data_list += `<tr>
<td>${value.sn}</td><td>${value.class}</td><td>${value.section}</td><td>${value.capacity}</td><td>${value.id}</td><td>${value.teacher}</td><td>${value.note}</td>
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

