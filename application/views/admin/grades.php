<?php $this->load->view("admin/inc/header") ?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-white">
            <div class="card-heading clearfix mb-3">
                <button type="button" class="btn btn-outline-primary" onclick="window.location='<?=base_url('admin/grades/add')?>'"><i class="fas fa-plus"></i> Add New</button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="display table datatables_init" style="width: 100%;">
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
                                <td><a class="btn btn-outline-warning" href="<?=base_url("admin/grades/edit")?>">Edit</a> | <a class="btn btn-outline-danger" href="<?=base_url("admin/grades/delete")?>">Delete</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/inc/footer") ?>