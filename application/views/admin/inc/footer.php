<?php $this->load->view("inc/footer")?>
<?php $this->load->view("inc/scripts") ?>
<?php $this->load->view("admin/inc/scripts") ?>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script>
    $(document).ready(function(){
        $("a.active").parents("ul.sub-menu").css({"display":"block"});
        $("a.active").parents("li.has-sub").addClass("active-page");
        $("a.active").parents("ul.sub-menu").siblings("a").addClass("active");
    })
</script>

