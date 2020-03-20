<?php $this->load->view("admin/inc/header") ?>
<?php $this->load->view("inc/post-meta") ?>
<?php $this->load->view("admin/inc/pre-body") ?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-white">
            <div class="card-heading clearfix mb-3">
                <button type="button" class="btn btn-sm btn-outline-primary" onclick="window.location='<?=base_url('admin/grades/add')?>'"><i class="fas fa-plus"></i> Add New</button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table datatables_init" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Grade Name</th>
                                <th>Class</th>
                                <th>Grade Point</th>
                                <th>Mark From</th>
                                <th>Mark Up To</th>
                                <th>Note</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td>A</td>
                                <td>JSS1</td>
                                <td>5.0</td>
                                <td>70</td>
                                <td>100</td>
                                <td>Excellent</td>
                                <td><a class="btn btn-sm btn-outline-warning" title="Edit" href="<?=base_url("admin/grades/edit")?>"><i class="fas fa-edit"></i></a> | <a class="btn btn-sm btn-outline-danger" title="Delete" href="<?=base_url("admin/grades/delete")?>"><i class="fas fa-trash"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/inc/footer") ?>
<?php $this->load->view("inc/post-script")?>