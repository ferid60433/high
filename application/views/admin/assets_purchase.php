<?php $this->load->view("admin/inc/header") ?>
<?php $this->load->view("inc/post-meta") ?>
<?php $this->load->view("admin/inc/pre-body") ?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-white">
            <div class="card-heading clearfix mb-3">
                <button type="button" class="btn btn-sm btn-outline-primary" onclick="window.location='<?=base_url('admin/assets/purchase/add')?>'"><i class="fas fa-plus"></i> Add New</button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table datatables_init" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Asset</th>
                                <th>Vendor</th>
                                <th>Quantity</th>
                                <th>Unit</th>
                                <th>Purchase Price</th>
                                <th>Purchase Date</th>
                                <th>Service Date</th>
                                <th>Expire Date</th>
                                <th>Purchase By</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td>HP All In One</td>
                                <td>Adekoniye Adedoyin</td>
                                <td>2</td>
                                <td>Piece</td>
                                <td>120000</td>
                                <td>07 Jan 2020</td>
                                <td>23 Mar 2020</td>
                                <td>22 Nov 2030</td>
                                <td>Mr John</td>
                                <td><a class="btn btn-sm btn-outline-warning" href="<?=base_url("admin/assets/purchase/edit")?>">Edit</a> | <a class="btn btn-sm btn-outline-danger" href="<?=base_url("admin/assets/purchase/delete")?>">Delete</a>| <a class="btn btn-sm btn-outline-warning" href="<?=base_url("admin/assets/purchase/disapprove")?>">Disapprove</a></td>
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