<?php $this->load->view("admin/inc/header") ?>
<style>
    .tab-pane .row {
        margin-top: 15px;
    }

    .m_nav {
        list-style: none;
        padding-left: 0;
    }

    .m_nav .btn {
        text-align: left !important;
    }
</style>
<?php $this->load->view("inc/post-meta") ?>
<?php $this->load->view("admin/inc/pre-body") ?>
<div class="row">
    <div class="col-md-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-white">
                    <div class="card-heading clearfix">
                        <h4 class="card-title">Folders</h4>
                    </div>
                    <div class="card-body">
                        <ul class="m_nav">
                            <li><a class="btn btn-default btn-block" href="<?= base_url("admin/messages") ?>"><i class="fas fa-envelope"></i> Conversations</a></li>
                            <li><a class="btn btn-default btn-block" href="<?= base_url("admin/messages/drafts") ?>"><i class="fas fa-save"></i> Drafts</a></li>
                            <li><a class="btn btn-default btn-block" href="<?= base_url("admin/messages/sent") ?>"><i class="fas fa-paper-plane"></i> Sent</a></li>
                            <li><a class="btn btn-default btn-block" href="<?= base_url("admin/messages/trash") ?>"><i class="fas fa-trash"></i> Trash</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-9">
        <div class="card card-white">
            <div class="card-heading clearfix">
                <h4 class="card-title">Compose New Message</h4>
            </div>
            <div class="card-body">
				<?= form_open_multipart('', 'id="message_form"'); ?>
                    <div class="form-group ">
                        <select id="userGroup" class="Group form-control select2" name="userGroup">
                            <option> -- Select Group --</option>
                            <?php foreach ($user_groups as $g) : ?>
                                <option value="<?= strtolower($g->user_group); ?>"><?= ucwords($g->user_group) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
					<div id="classDiv" style="display: none;">
						<div class="form-group">
							<select class="Group form-control select2" id="cid" name="class">
								<option value="">-- Select Class --</option>
								<?php foreach( $classes as $c ) : ?>
									<option value="<?= $c->id?>"><?= ucwords($c->name); ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="form-group">
							<select id="section" class="Group form-control select2" name="section">
								<option value="">-- Select Section/Arms --</option>
							</select>
						</div>
					</div>
                    <div id="stdDiv" class="form-group" style="display:none;">
                        <select id="studentID" class="Group form-control select2" name="studentID">
                            <option value="">-- Select Student --</option>
                        </select>
                    </div>
                    <div id="adminDiv" class="form-group" style="display:none;">
                        <select id="systemadminID" class="Group form-control select2" name="systemadminID">
                            <option value="">-- Select Admin --</option>
                        </select>
                    </div>
                    <div id="teacherDiv" class="form-group" style="display:none;">
                        <select id="teacherID" class="Group form-control select2" name="teacherID">
                            <option value="">-- Select Teacher -- </option>
                        </select>
                    </div>
                    <div id="parentDiv" class="form-group" style="display:none;">
                        <select id="parentID" class="Group form-control select2" name="parentID">
                            <option value="">-- Select Parent --</option>
                        </select>
                    </div>
                    <div id="userDiv" class="form-group">
                        <select id="userID" class="Group form-control select2" name="userID">
                            <option value="">-- Select User --</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="subject" placeholder="Subject" />
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="10" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" name="attachment">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
							<input type="hidden" name="post_type" id="post_type" value="">
                            <button type="button" id="draft" class="btn btn-warning"><i class="fa fa-times"></i> Drafts</button>
                            <button type="submit" name="submit" class="btn btn-primary float-right"><i class="fas fa-paper-plane"></i> Send</button>
                        </div>
                    </div>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/inc/footer") ?>
<script>
<<<<<<< HEAD
    let base_url = "<?= base_url(); ?>";
    $("#userGroup").change(function() {
        let global_options = '';
        let type = $(this).val();
        $.get(base_url + `/ajax/get_user_group_detail?type=${type}`, (response, status) => {
            if (Array.isArray(response.message)) {
                $.each(response.message, (key, value) => {
                    global_options += `<option value="${value.id}">${value.name}  - (${value.email})</option>`;
                });
            } else {
                global_options = `<option>${response.message}</option>`;
            }
            alert(global_options)
        });
        console.log(global_options);
        if ($(this).val() == 'admin') {
            // admin
            $('#classDiv, #stdDiv, #teacherDiv, #parentDiv, #userDiv').hide();
            $("#adminDiv").show();
            $('#systemadminID').append(global_options);

        } else if ($(this).val() == 'teacher') {
            // teacher
            $('#classDiv, #stdDiv, #adminDiv, #parentDiv, #userDiv').hide();
            $("#teacherDiv").show();
            $('#teacherID').append(global_options);

        } else if ($(this).val() == 'student') {
            // student
            $('#teacherDiv, #stdDiv, #adminDiv, #parentDiv, #userDiv').hide();
            $("#classDiv").show();
            $('#studentID').append(global_options);
        } else if ($(this).val() == 'parent') {
            // Parent
            $('#teacherDiv, #stdDiv, #adminDiv, #classDiv, #userDiv').hide();
            $("#parentDiv").show();
            $('#parentID').append(global_options);
        } else {
            $('#teacherDiv, #stdDiv, #adminDiv, #classDiv, #parentDiv').hide();
            $("#userDiv").show();
            $('#userIDID').append(global_options);
        }
    });
=======
	$(document).ready(function () {
		let base_url = "<?= base_url();?>";
		$("#userGroup").change(function() {

			let type = $(this).val();
			let global_options = '';
			$.get( base_url + `/ajax/get_user_group_detail?type=${type}`, ( response, status) => {
				if( Array.isArray(response.message)) {
					$.each(response.message, (key, value) => {
						global_options += `<option value="${value.id}">${value.name}  - (${value.email})</option>`;
					});
				}else{
					global_options += `<option>${response.message}</option>`;
				}
				if ($(this).val() == 'admin') {
					// admin
					$('#systemadminID').empty();
					$('#systemadminID').append('<option>-- Select Admin --</option>');
					$('#classDiv, #stdDiv, #teacherDiv, #parentDiv, #userDiv').hide();
					$("#adminDiv").show();
					$('#systemadminID').append(global_options);

				} else if ($(this).val() == 'teacher') {
					// teacher
					$('#teacherID').empty();
					$('#teacherID').append('<option>-- Select Teacher --</option>');
					$('#classDiv, #stdDiv, #adminDiv, #parentDiv, #userDiv').hide();
					$("#teacherDiv").show();
					$('#teacherID').append(global_options);

				} else if ($(this).val() == 'student') {
					// student
					$('#studentID').empty();
					$('#studentID').append('<option>-- Select Student --</option>');
					$('#teacherDiv, #stdDiv, #adminDiv, #parentDiv, #userDiv').hide();
					$("#classDiv").show();
					$('#studentID').append(global_options);
				} else if ($(this).val() == 'parent') {
					// Parent
					$('#parentID').empty();
					$('#parentID').append('<option>-- Select parent --</option>');
					$('#teacherDiv, #stdDiv, #adminDiv, #classDiv, #userDiv').hide();
					$("#parentDiv").show();
					$('#parentID').append(global_options);
				} else {
					$('#userID').empty();
					$('#userID').append('<option>-- Select user --</option>');
					$('#teacherDiv, #stdDiv, #adminDiv, #classDiv, #parentDiv').hide();
					$("#userDiv").show();
					$('#userID').append(global_options);
				}

			});
		});


		$('#cid').on('change', () =>{
			let class_id = $('#cid').val();
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

		$('#draft').on('click', () => {
			alert('Clicked here');
			// $('#post_type').val('draft');
			$('#message_form').submit();
			alert('Message form has been sent');
		});
	});


>>>>>>> 6423b22904eaade3a72c1802584a2b2304fef7bf
</script>
<?php $this->load->view("inc/post-script") ?>