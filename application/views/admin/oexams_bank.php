<?php $this->load->view("admin/inc/header") ?>
<style>
	.input-group-prepend,
	.input-group-text {
		width: 44px !important;
	}

	.note-editor {
		width: 94%;
	}

	.checkers input {
		width: 22px;
		height: 16px;
	}
</style>
<?php $this->load->view("inc/post-meta") ?>
<?php $this->load->view("admin/inc/pre-body") ?>
<div class="row">
	<div class="col-md-12">
		<div class="card card-white">

			<?php if (empty($page_action)) : ?>
				<div class="card-heading clearfix mb-3">
					<button type="button" class="btn btn-outline-primary" onclick="window.location='<?= base_url('admin/oexams/bank/add') ?>'"><i class="fas fa-plus"></i> Add New</button>
				</div>
			<?php endif; ?>
			<div class="card-body">
				
				<?php if ($page_action == 'add') : ?>
					<?= form_open(); ?>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Question Group</label>
						<div class="col-sm-10">
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<div class="input-group-text"><i class="fas fa-book"></i></div>
								</div>
								<select name="group" id='group' class='form-control'>
									<option value=""> Select Group </option>
									<?php foreach ($groups as $group) : ?>
										<option value="<?= $group->id ?>"><?= ucwords($group->title); ?></option>
									<?php endforeach; ?>
								</select>
							</div>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Difficulty Level</label>
						<div class="col-sm-10">
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<div class="input-group-text"><i class="fas fa-chart-bar"></i></div>
								</div>
								<select name="level" id='level' class='form-control'>
									<option value=""> Select Level </option>
									<?php foreach ($levels as $level) : ?>
										<option value="<?= $level->id ?>"><?= ucwords($level->title); ?></option>
									<?php endforeach; ?>
								</select>
							</div>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Question</label>
						<div class="col-sm-10">
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<div class="input-group-text"><i class="fas fa-newspaper"></i></div>
								</div>
								<textarea class="form-control summernote" id="question" name="question"></textarea>
							</div>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Hints</label>
						<div class="col-sm-10">
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<div class="input-group-text"><i class="fas fa-info"></i></div>
								</div>
								<input type="text" class="form-control" id="hint" name="hint" placeholder="optional">
							</div>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Mark</label>
						<div class="col-sm-10">
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<div class="input-group-text"><i class="fas fa-check"></i></div>
								</div>
								<input type="text" class="form-control" id="mark" name="mark" placeholder="Mark value for this">
							</div>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Question Type</label>
						<div class="col-sm-10">
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<div class="input-group-text"><i class="fas fa-question"></i></div>
								</div>
								<select name="type" id='type' class='form-control select2'>
									<option value="0">Please Select</option>
									<option value="1">Single Answer</option>
									<option value="2">Multi Answer</option>
									<option value="3">Fill in the blanks</option>
								</select>
							</div>
						</div>
					</div>
					<div class="form-group row" id='totalOptionDiv'>
						<label class="col-sm-2 col-form-label">Total Option</label>
						<div class="col-sm-10">
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<div class="input-group-text"><i class="fas fa-sort"></i></div>
								</div>
								<select name="totalOption" id='totalOption' class='form-control'>
									<option>Please select number of options </option>
									<?php for ($x = 1; $x < 11; $x++) : ?>
										<?= '<option value="' . $x . '">' . $x . '</option>' ?>;
									<?php endfor; ?>
								</select>
							</div>
						</div>
					</div>
					<div id="in"></div>
					<div class="form-group">
						<input type="submit" class="btn btn-primary float-right" value="Add Question bank">
					</div>
					<?= form_close() ?>
				<?php else : ?>
					<div class="table-responsive">
						<table class="table datatables_init" style="width: 100%;">
							<thead>
								<tr>
									<th>S/N</th>
									<th>Difficulty Level</th>
									<th>Question</th>
									<th>Question Group</th>
									<th>Question Type</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $x = 1;
								foreach ($questions as $q) : ?>
									<tr>
										<td><?= $x; ?>.</td>
										<td><?= $q->level_title; ?></td>
										<td><?= $q->question; ?></td>
										<td><?= $q->group_title ?></td>
										<td><?= getQuestionType($q->question_type); ?></td>
										<td>
											<a class="btn btn-sm btn-outline-info" title="View" href="<?= base_url("admin/oexams/bank/view/" . simple_crypt($q->id)); ?>"><i class="fas fa-search"></i></a> |
											<a class="btn btn-sm btn-outline-warning" title="Edit" href="<?= base_url("admin/oexams/bank/edit/" . simple_crypt($q->id)) ?>"><i class="fas fa-edit"></i></a> |
											<a class="btn btn-sm btn-outline-danger" title="Delete" href="<?= base_url("admin/oexams/bank/delete") ?>"><i class="fas fa-trash"></i></a></td>

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
<?php $this->load->view("admin/inc/summernote") ?>
<script type="text/javascript">
	$(function() {
		$('#totalOptionDiv').hide();
	});

	$(document).ready(function() {
		// var totalOptionID = '0';
		// if(totalOptionID > 0) {
		// $('#totalOptionDiv').show();
		// }

		var typeID = '0';
		if (typeID > 0) {
			$('#totalOptionDiv').show();
		}
	});

	// console.log($('#type').val());
	// if($('#type').val() != '0') {
	//     $('#totalOptionDiv').show();
	// }

	$('#type').change(function() {
		$('#in').children().remove();
		var type = $(this).val();
		if (type == 0) {
			$('#totalOptionDiv').hide();
		} else {
			$('#totalOption').val(0);
			$('#totalOptionDiv').show();
		}
	});

	$('#totalOption').change(function() {
		var totalOpts = parseInt($(this).val());
		var type = $('#type').val();

		if (totalOpts > 0) {
			var opt = [];
			var ans = {};

			for (j = 1; j <= totalOpts; j++) {
				if (type == 3) {
					opt[j] = $('#answer' + j).val();
				} else {
					opt[j] = $('#option' + j).val();
					if ($('#ans' + j).prop('checked')) {
						ans['#option' + j] = 'checked="checked"';

					}
				}
			}

			$('#in').children().remove();
			for (i = 1; i <= totalOpts; i++) {
				// if ($('#in').size())
				//     $('#in').append(formHtmlData(i, type, opt[i], ans[i]));
				// else
				$('#in').append(formHtmlData(i, type));
			}

		} else {
			$('#in').children().remove();
		}

	});

	function formHtmlData(id, type, value = '', checked = '') {
		var required = 'required';
		if (type == 1) {
			type = 'radio';
		} else if (type == 2) {
			type = 'checkbox';
			required = '';
		} else if (type == 3) {
			var html = '<div class="form-group row">' +
				'<label class="col-sm-2 col-form-label">Answer ' + id + '</label>' +
				'<div class="col-sm-10">' +
				'<div class="input-group mb-3">' +
				'<div class="input-group-prepend">' +
				'<div class="input-group-text"><i class="fas fa-expand"></i></div>' +
				'</div>' +
				'<input id="answer' + id + 'type="text" class="form-control" name="answer[]" value="' + value + '">' +
				'</div>' +
				'</div>' +
				'</div>';
			return html;
		}

		var html = '<div class="form-group row">' +
			'<label class="col-sm-2 col-form-label">Option ' + id + '</label>' +
			'<div class="col-sm-10">' +
			'<div class="row">' +
			'<div class="input-group col-sm-8">' +
			'<input type="text" class="form-control" name="option[]" id="option' + id + '" value="' + value + '">' +
			'<div class="input-group-prepend last">' +
			'<div class="input-group-text">' +
			'<div class="checkers"><span class="">' +
			'<input' + checked + ' type="' + type + '" name="answer_' + id + '" >' +
			'</span></div>' +
			'</div>' +
			'</div>' +
			'</div>' +
			'</div>' +
			'</div>' +
			'</div>';
		return html;
	}
</script>
<?php $this->load->view("inc/post-script") ?>