<?php $this->load->view("admin/inc/header") ?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-white">
            <div class="card-heading clearfix">
                <button type="button" class="btn btn-outline-primary float-right" onclick="window.location='<?=base_url('admin/timetable/add')?>'"><i class="fas fa-plus"></i> Add New</button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="display table datatables_init" style="width: 100%;">
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
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td>Anger Management</td>
                                <td>finish ml-auto d-none btn-primary btn-lg</td>
                                <td>2020-02-26</td>
                                <td>JSS1</td>
                                <td>-</td>
                                <td>img.jpg</td>
                                <td><a class="btn btn-outline-info" href="<?=base_url("admin/timetable/download")?>">Download</a> | <a class="btn btn-outline-warning" href="<?=base_url("admin/timetable/edit")?>">Edit</a> | <a class="btn btn-outline-danger" href="<?=base_url("admin/timetable/delete")?>">Delete</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/inc/footer") ?>