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
                <form role="form" method="post" enctype="multipart/form-data">
                    <div class="form-group ">
                        <select id="userGroup" class="Group form-control select2" name="userGroup">
                            <option>Select Group</option>
                            <option value="1">Admin</option>
                            <option value="6">Librarian</option>
                            <option value="7">Receptionist</option>
                            <option value="4">Parents</option>
                            <option value="5">Accountant</option>
                            <option value="3">Student</option>
                            <option value="2">Teacher</option>
                        </select>
                    </div>
                    <div id="classDiv" class="form-group " style="display:none;">
                        <select id="classID" class="Group form-control select2" name="classID">
                            <option value="">Select Class</option>
                        </select>
                        <span id="selectDiv" class="control-label">
                        </span>
                    </div>
                    <div id="stdDiv" class="form-group" style="display:none;">
                        <select id="studentID" class="Group form-control select2" name="studentID">
                            <option value="">Select Student</option>
                        </select>
                    </div>
                    <div id="adminDiv" class="form-group" style="display:none;">
                        <select id="systemadminID" class="Group form-control select2" name="systemadminID">
                            <option value="">Select Admin</option>
                        </select>
                    </div>
                    <div id="teacherDiv" class="form-group" style="display:none;">
                        <select id="teacherID" class="Group form-control select2" name="teacherID">
                            <option value="">Select Teacher</option>
                        </select>
                    </div>
                    <div id="parentDiv" class="form-group" style="display:none;">
                        <select id="parentID" class="Group form-control select2" name="parentID">
                            <option value="">Select Parent</option>
                        </select>
                    </div>
                    <div id="userDiv" class="form-group">
                        <select id="userID" class="Group form-control select2" name="userID">
                            <option value="">Select User</option>
                        </select>
                    </div>
                    <div class="form-group ">
                        <input class="form-control" name="subject" value="" placeholder="Subject" />
                    </div>
                    <div class="form-group ">
                        <textarea class="form-control" name="message" rows="10" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button type="button" value="draft" name="submit" class="btn btn-warning"><i class="fa fa-times"></i> Drafts</button>
                            <button type="submit" value="send" name="submit" class="btn btn-primary float-right"><i class="fas fa-paper-plane"></i> Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/inc/footer") ?>
<script>
    $("#userGroup").change(function() {
        if ($(this).val() == 1) {
            $("#classDiv").hide();
            $("#stdDiv").hide();
            $("#teacherDiv").hide();
            $("#parentDiv").hide();
            $("#userDiv").hide();
            $("#adminDiv").show();
        } else if ($(this).val() == 2) {
            $("#classDiv").hide();
            $("#stdDiv").hide();
            $("#adminDiv").hide();
            $("#parentDiv").hide();
            $("#userDiv").hide();
            $("#teacherDiv").show();
        } else if ($(this).val() == 3) {
            $("#classDiv").show();
            $("#stdDiv").show();
            $("#adminDiv").hide();
            $("#teacherDiv").hide();
            $("#userDiv").hide();
            $("#parentDiv").hide();
        } else if ($(this).val() == 4) {
            $("#classDiv").hide();
            $("#stdDiv").hide();
            $("#adminDiv").hide();
            $("#parentDiv").hide();
            $("#teacherDiv").hide();
            $("#userDiv").hide();
            $("#parentDiv").show();
        } else {
            $("#classDiv").hide();
            $("#stdDiv").hide();
            $("#adminDiv").hide();
            $("#parentDiv").hide();
            $("#teacherDiv").hide();
            $("#parentDiv").hide();
            $("#userDiv").show();
        }
    });
</script>