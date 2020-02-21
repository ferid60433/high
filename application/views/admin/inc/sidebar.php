<!-- start page sidebar -->
<div class="page-sidebar">
    <a class="logo-box" href="<?=base_url()?>">
        <span><?= SCHOOL_NAME ?></span>
        <!-- <i class="icon-school" title="Pin Menu" id="fixed-sidebar-toggle-button"></i> -->
        <i class="icon-close" id="sidebar-toggle-button-close"></i>
    </a>
    <div class="page-sidebar-inner">
        <div class="page-sidebar-menu">
            <ul class="accordion-menu">
                <li>
                    <a href="<?=base_url("admin")?>">
                        <i class="menu-icon icon-home4"></i><span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="<?=base_url("admin/students")?>">
                        <i class="menu-icon icon-school"></i><span>Students</span>
                    </a>
                </li>
                <li>
                    <a href="<?=base_url("admin/parents")?>">
                        <i class="menu-icon icon-people"></i><span>Parents</span>
                    </a>
                </li>
                <li>
                    <a href="<?=base_url("admin/teachers")?>">
                        <i class="menu-icon icon-user-tie"></i><span>Teachers</span>
                    </a>
                </li>
                <li>
                    <a href="<?=base_url("admin/users")?>">
                        <i class="menu-icon icon-profile"></i><span>Users</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="menu-icon icon-address-book"></i><span>Academic</span><i class="accordion-icon fa fa-angle-left"></i>
                    </a>
                    <ul>
                        <li><a href="">Class</a></li>
                        <li><a href="">Section</a></li>
                        <li><a href="">Subject</a></li>
                        <li><a href="">Syllabus</a></li>
                        <li><a href="">Assignment</a></li>
                        <li><a href="">Time Table</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="menu-icon icon-schedule"></i><span>Attendance</span><i class="accordion-icon fa fa-angle-left"></i>
                    </a>
                    <ul>
                        <li><a href="">Students Attendance</a></li>
                        <li><a href="">Teachers Attendance</a></li>
                        <li><a href="">Users Attendance</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="menu-icon icon-file-text2"></i><span>Exam</span><i class="accordion-icon fa fa-angle-left"></i>
                    </a>
                    <ul>
                        <li><a href="">Exam</a></li>
                        <li><a href="">Exam Schedule</a></li>
                        <li><a href="">Grade</a></li>
                        <li><a href="">Exam Attendance</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="menu-icon icon-checkmark"></i><span>Mark</span><i class="accordion-icon fa fa-angle-left"></i>
                    </a>
                    <ul>
                        <li><a href="">Mark</a></li>
                        <li><a href="">Mark Distribution</a></li>
                        <li><a href="">Promotion</a></li>
                    </ul>
                </li>
                <li>
                    <a href="">
                        <i class="menu-icon icon-envelop"></i><span>Message</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="menu-icon icon-video-camera"></i><span>Media</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="menu-icon icon-mail"></i><span>Mail/SMS</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="menu-icon icon-display"></i><span>Online Exam</span><i class="accordion-icon fa fa-angle-left"></i>
                    </a>
                    <ul>
                        <li><a href="">Question Group</a></li>
                        <li><a href="">Question Level</a></li>
                        <li><a href="">Question Bank</a></li>
                        <li><a href="">Online Exam</a></li>
                        <li><a href="">Instruction</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="menu-icon icon-credit-card"></i><span>Payroll</span><i class="accordion-icon fa fa-angle-left"></i>
                    </a>
                    <ul>
                        <li><a href="">Salary Template</a></li>
                        <li><a href="">Hourly Template</a></li>
                        <li><a href="">Manage Salary</a></li>
                        <li><a href="">Make Payment</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="menu-icon icon-database"></i><span>Asset Management</span><i class="accordion-icon fa fa-angle-left"></i>
                    </a>
                    <ul>
                        <li><a href="">Vendor</a></li>
                        <li><a href="">Location</a></li>
                        <li><a href="">Asset Category</a></li>
                        <li><a href="">Asset</a></li>
                        <li><a href="">Asset Assignment</a></li>
                        <li><a href="">Purchase</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="menu-icon icon-briefcase"></i><span>Inventory</span><i class="accordion-icon fa fa-angle-left"></i>
                    </a>
                    <ul>
                        <li><a href="">Category</a></li>
                        <li><a href="">Product</a></li>
                        <li><a href="">Warehouse</a></li>
                        <li><a href="">Supplier</a></li>
                        <li><a href="">Purchase</a></li>
                        <li><a href="">Sale</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="menu-icon icon-airplane"></i><span>Leave Application</span><i class="accordion-icon fa fa-angle-left"></i>
                    </a>
                    <ul>
                        <li><a href="">Leave Category</a></li>
                        <li><a href="">Leave Assign</a></li>
                        <li><a href="">Leave Apply</a></li>
                        <li><a href="">Leave Application</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="menu-icon icon-spell-check"></i><span>Child</span><i class="accordion-icon fa fa-angle-left"></i>
                    </a>
                    <ul>
                        <li><a href="">Activities Category</a></li>
                        <li><a href="">Activities</a></li>
                        <li><a href="">Child Care</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="menu-icon icon-books"></i><span>Library</span><i class="accordion-icon fa fa-angle-left"></i>
                    </a>
                    <ul>
                        <li><a href="">Member</a></li>
                        <li><a href="">Books</a></li>
                        <li><a href="">Issue</a></li>
                        <li><a href="">E-Books</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="menu-icon icon-truck"></i><span>Transport</span><i class="accordion-icon fa fa-angle-left"></i>
                    </a>
                    <ul>
                        <li><a href="">Transport</a></li>
                        <li><a href="">Member</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="menu-icon icon-home3"></i><span>Hostel</span><i class="accordion-icon fa fa-angle-left"></i>
                    </a>
                    <ul>
                        <li><a href="">Hostel</a></li>
                        <li><a href="">Category</a></li>
                        <li><a href="">Member</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="menu-icon icon-calculator"></i><span>Account</span><i class="accordion-icon fa fa-angle-left"></i>
                    </a>
                    <ul>
                        <li><a href="">Fee Type</a></li>
                        <li><a href="">Invoice</a></li>
                        <li><a href="">Payment History</a></li>
                        <li><a href="">Expense</a></li>
                        <li><a href="">Income</a></li>
                        <li><a href="">Global Payment</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="menu-icon icon-bullhorn"></i><span>Announcement</span><i class="accordion-icon fa fa-angle-left"></i>
                    </a>
                    <ul>
                        <li><a href="">Notice</a></li>
                        <li><a href="">Event</a></li>
                        <li><a href="">Holiday</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="menu-icon icon-stats-bars"></i><span>Report</span><i class="accordion-icon fa fa-angle-left"></i>
                    </a>
                    <ul>
                        <li><a href="">Class Report</a></li>
                        <li><a href="">Student Report</a></li>
                        <li><a href="">ID Card Report</a></li>
                        <li><a href="">Admit Card Report</a></li>
                        <li><a href="">Timetable Report</a></li>
                        <li><a href="">Exam Schedule Report</a></li>
                        <li><a href="">Attendance Report</a></li>
                        <li><a href="">Attendance Overview Report</a></li>
                        <li><a href="">Library Books Report</a></li>
                        <li><a href="">Library Card Report</a></li>
                        <li><a href="">Library Book Issue Report</a></li>
                        <li><a href="">Terminal Report</a></li>
                        <li><a href="">Merit Stage Report</a></li>
                        <li><a href="">Tabulation Sheet Report</a></li>
                        <li><a href="">Mark Sheet Report</a></li>
                        <li><a href="">Progress Card Report</a></li>
                        <li><a href="">Online Exam Report</a></li>
                        <li><a href="">Online Exam Question Report</a></li>
                        <li><a href="">Certificate Report</a></li>
                        <li><a href="">Leave Application Report</a></li>
                        <li><a href="">Product Purchase Report</a></li>
                        <li><a href="">Product Sale Report</a></li>
                        <li><a href="">Search Payment Fees Report</a></li>
                        <li><a href="">Fees Report</a></li>
                        <li><a href="">Due Fees Report</a></li>
                        <li><a href="">Balance Fees Report</a></li>
                        <li><a href="">Transaction Report</a></li>
                        <li><a href="">Student Fine Report</a></li>
                        <li><a href="">Salary Report</a></li>
                    </ul>
                </li>
                <li>
                    <a href="">
                        <i class="menu-icon icon-user-plus"></i><span>Visitor Information</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="menu-icon icon-shield"></i><span>Administrator</span><i class="accordion-icon fa fa-angle-left"></i>
                    </a>
                    <ul>
                        <li><a href="">Academic Year</a></li>
                        <li><a href="">Student Group</a></li>
                        <li><a href="">Complain</a></li>
                        <li><a href="">Certificate Template</a></li>
                        <li><a href="">Reset Password</a></li>
                        <li><a href="">Social Link</a></li>
                        <li><a href="">Mail/SMS Template</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="menu-icon icon-cogs"></i><span>Settings</span><i class="accordion-icon fa fa-angle-left"></i>
                    </a>
                    <ul>
                        <li><a href="">General Settings</a></li>
                        <li><a href="">Payment Settings</a></li>
                        <li><a href="">SMS Settings</a></li>
                    </ul>
                </li>
                <li class="menu-divider"></li>
                <li>
                    <a href="<?=base_url("logout")?>">
                        <i class="menu-icon icon-lock"></i><span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- end page sidebar -->