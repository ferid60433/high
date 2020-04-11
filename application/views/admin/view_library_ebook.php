<?php $this->load->view("admin/inc/header") ?>
<?php $this->load->view("inc/post-meta") ?>
<?php $this->load->view("admin/inc/pre-body") ?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-white">
            <div class="card-heading clearfix mb-3">
                <h4 class="card-title">The Book Title</h4>
            </div>
            <div class="card-body">
                <embed class="pdfobject" src="<?=base_url("assets/pdf/file.pdf")?>" type="application/pdf" style="overflow: auto; width: 100%; height: 900px;">
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/inc/footer") ?>
<?php $this->load->view("inc/post-script") ?>