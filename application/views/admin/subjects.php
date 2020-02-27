<?php $this->load->view("admin/inc/header") ?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-white">
            <div class="card-heading clearfix">
                <button type="button" class="btn btn-outline-primary float-right" onclick="window.location='<?=base_url('admin/subjects/add')?>'"><i class="fas fa-plus"></i> Add New</button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="display table datatables_init" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Subject</th>
                                <th>Author</th>
                                <th>Code</th>
                                <th>Teacher</th>
                                <th>Pass Mark</th>
                                <th>Final Mark</th>
                                <th>Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td>English</td>
                                <td>Teachers</td>
                                <td>ENG101</td>
                                <td>Mrs Chinenye</td>
                                <td>40</td>
                                <td>100</td>
                                <td><span class="badge badge-info">mandatory</span></td>
                                <td><a class="btn btn-outline-warning" href="<?=base_url("admin/subjects/edit")?>">Edit</a> | <a class="btn btn-outline-danger" href="<?=base_url("admin/subjects/delete")?>">Delete</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/inc/footer") ?>