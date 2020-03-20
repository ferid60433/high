<?php $this->load->view("admin/inc/header") ?>
<?php $this->load->view("inc/post-meta") ?>
<?php $this->load->view("admin/inc/pre-body") ?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-white">
            <div class="card-heading clearfix mb-3">
                <button type="button" class="btn btn-sm btn-outline-primary" onclick="window.location='<?=base_url('admin/oexams/add')?>'"><i class="fas fa-plus"></i> Add New</button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table datatables_init" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Exam Title</th>
                                <th>Published</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
							<?php $x= 1; foreach( $exams as $exam ) : ?>
								<tr>
									<td><?= $x; ?>.</td>
									<td><?= ucwords($exam->title); ?></td>
									<td><?= statusLabel($exam->published); ?></td>
									<td>
										<a class="btn btn-outline-info" href="<?=base_url("admin/oexams/questions/" .simple_crypt($exam->id))?>">Add Questions</a> |
										<a class="btn btn-outline-warning" href="<?=base_url("admin/oexams/edit/" . simple_crypt($exam->id))?>">Edit</a> |
										<a class="btn btn-outline-danger" href="<?=base_url("admin/oexams/delete")?>">Delete</a>
									</td>
								</tr>
							<?php $x++; endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/inc/footer") ?>
<?php $this->load->view("inc/post-script")?>
