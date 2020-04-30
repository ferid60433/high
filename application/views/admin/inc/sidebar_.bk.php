<!-- start page sidebar -->
<div class="page-sidebar">
    <a class="logo-box" href="<?=base_url()?>">
        <span><?= $this->settings->general()->school_name ?></span>
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
                        <li><a href="<?=base_url("admin/classes")?>">Classes</a></li>
                        <li><a href="<?=base_url("admin/sections")?>">Sections</a></li>
                        <li><a href="<?=base_url("admin/subjects")?>">Subjects</a></li>
                        <li><a href="<?=base_url("admin/syllabus")?>">Syllabus</a></li>
                        <li><a href="<?=base_url("admin/assignments")?>">Assignments</a></li>
                        <li><a href="<?=base_url("admin/timetable")?>">Timetable</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="menu-icon icon-schedule"></i><span>Attendance</span><i class="accordion-icon fa fa-angle-left"></i>
                    </a>
                    <ul>
                        <li><a href="<?=base_url("admin/sattendance")?>">Students Attendance</a></li>
                        <li><a href="<?=base_url("admin/tattendance")?>">Teachers Attendance</a></li>
                        <li><a href="<?=base_url("admin/uattendance")?>">Users Attendance</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="menu-icon icon-file-text2"></i><span>Exams</span><i class="accordion-icon fa fa-angle-left"></i>
                    </a>
                    <ul>
                        <li><a href="<?=base_url("admin/exams")?>">Exams</a></li>
                        <li><a href="<?=base_url("admin/examschedule")?>">Exam Schedule</a></li>
                        <li><a href="<?=base_url("admin/grades")?>">Grades</a></li>
                        <li><a href="<?=base_url("admin/eattendance")?>">Exam Attendance</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="menu-icon icon-checkmark"></i><span>Marks</span><i class="accordion-icon fa fa-angle-left"></i>
                    </a>
                    <ul>
                        <li><a href="<?=base_url("admin/marks")?>">Marks</a></li>
                        <li><a href="<?=base_url("admin/marksdis")?>">Marks Distribution</a></li>
                        <li><a href="<?=base_url("admin/promotion")?>">Promotion</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?=base_url("admin/messages")?>">
                        <i class="menu-icon icon-envelop"></i><span>Messages</span>
                    </a>
                </li>
                <li>
                    <a href="<?=base_url("admin/media")?>">
                        <i class="menu-icon icon-video-camera"></i><span>Media</span>
                    </a>
                </li>
                <li>
                    <a href="<?=base_url("admin/mails")?>">
                        <i class="menu-icon icon-mail"></i><span>Mails/SMS</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="menu-icon icon-display"></i><span>Online Exams</span><i class="accordion-icon fa fa-angle-left"></i>
                    </a>
                    <ul>
                        <li><a href="<?=base_url("admin/oexams/groups")?>">Question Groups</a></li>
                        <li><a href="<?=base_url("admin/oexams/levels")?>">Question Levels</a></li>
                        <li><a href="<?=base_url("admin/oexams/bank")?>">Question Bank</a></li>
                        <li><a href="<?=base_url("admin/oexams")?>">Online Exams</a></li>
                        <li><a href="<?=base_url("admin/oexams/instructions")?>">Instructions</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="menu-icon icon-credit-card"></i><span>Payroll</span><i class="accordion-icon fa fa-angle-left"></i>
                    </a>
                    <ul>
                        <li><a href="<?=base_url("admin/salaries/template")?>">Salary Template</a></li>
                        <li><a href="<?=base_url("admin/salaries/hourly")?>">Hourly Template</a></li>
                        <li><a href="<?=base_url("admin/salaries")?>">Manage Salary</a></li>
                        <li><a href="<?=base_url("admin/salaries/pay")?>">Make Payment</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="menu-icon icon-database"></i><span>Assets Management</span><i class="accordion-icon fa fa-angle-left"></i>
                    </a>
                    <ul>
                        <li><a href="<?=base_url("admin/assets/vendor")?>">Vendor</a></li>
                        <li><a href="<?=base_url("admin/assets/location")?>">Location</a></li>
                        <li><a href="<?=base_url("admin/assets/category")?>">Asset Category</a></li>
                        <li><a href="<?=base_url("admin/assets")?>">Assets</a></li>
                        <li><a href="<?=base_url("admin/assets/assignment")?>">Asset Assignment</a></li>
                        <li><a href="<?=base_url("admin/assets/purchase")?>">Purchase</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="menu-icon icon-briefcase"></i><span>Inventory</span><i class="accordion-icon fa fa-angle-left"></i>
                    </a>
                    <ul>
                        <li><a href="<?=base_url("admin/inventory/category")?>">Category</a></li>
                        <li><a href="<?=base_url("admin/inventory/product")?>">Product</a></li>
                        <li><a href="<?=base_url("admin/inventory/warehouse")?>">Warehouse</a></li>
                        <li><a href="<?=base_url("admin/inventory/supplier")?>">Supplier</a></li>
                        <li><a href="<?=base_url("admin/inventory/purchase")?>">Purchase</a></li>
                        <li><a href="<?=base_url("admin/inventory/sale")?>">Sale</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="menu-icon icon-airplane"></i><span>Leave Application</span><i class="accordion-icon fa fa-angle-left"></i>
                    </a>
                    <ul>
                        <li><a href="<?=base_url("admin/leave/category")?>">Leave Category</a></li>
                        <li><a href="<?=base_url("admin/leave/assign")?>">Leave Assign</a></li>
                        <li><a href="<?=base_url("admin/leave/apply")?>">Leave Apply</a></li>
                        <li><a href="<?=base_url("admin/leave")?>">Leave Application</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="menu-icon icon-spell-check"></i><span>Child</span><i class="accordion-icon fa fa-angle-left"></i>
                    </a>
                    <ul>
                        <li><a href="<?=base_url("admin/activities/category")?>">Activities Category</a></li>
                        <li><a href="<?=base_url("admin/activities")?>">Activities</a></li>
                        <li><a href="<?=base_url("admin/activities/childcare")?>">Child Care</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="menu-icon icon-books"></i><span>Library</span><i class="accordion-icon fa fa-angle-left"></i>
                    </a>
                    <ul>
                        <li><a href="<?=base_url("admin/library/members")?>">Members</a></li>
                        <li><a href="<?=base_url("admin/library")?>">Books</a></li>
                        <li><a href="<?=base_url("admin/library/issue")?>">Issue</a></li>
                        <li><a href="<?=base_url("admin/library/ebooks")?>">E-Books</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="menu-icon icon-truck"></i><span>Transport</span><i class="accordion-icon fa fa-angle-left"></i>
                    </a>
                    <ul>
                        <li><a href="<?=base_url("admin/transport")?>">Transport</a></li>
                        <li><a href="<?=base_url("admin/transport/members")?>">Members</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="menu-icon icon-home3"></i><span>Hostel</span><i class="accordion-icon fa fa-angle-left"></i>
                    </a>
                    <ul>
                        <li><a href="<?=base_url("admin/hostel")?>">Hostel</a></li>
                        <li><a href="<?=base_url("admin/hostel/category")?>">Category</a></li>
                        <li><a href="<?=base_url("admin/hostel/members")?>">Members</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="menu-icon icon-calculator"></i><span>Accounting</span><i class="accordion-icon fa fa-angle-left"></i>
                    </a>
                    <ul>
                        <li><a href="<?=base_url("admin/accounting/fee")?>">Fee Type</a></li>
                        <li><a href="<?=base_url("admin/accounting/invoice")?>">Invoice</a></li>
                        <li><a href="<?=base_url("admin/accounting/history")?>">Payment History</a></li>
                        <li><a href="<?=base_url("admin/accounting/expense")?>">Expense</a></li>
                        <li><a href="<?=base_url("admin/accounting/income")?>">Income</a></li>
                        <li><a href="<?=base_url("admin/accounting/global")?>">Global Payment</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="menu-icon icon-bullhorn"></i><span>Announcement</span><i class="accordion-icon fa fa-angle-left"></i>
                    </a>
                    <ul>
                        <li><a href="<?=base_url("admin/announcement/notice")?>">Notice</a></li>
                        <li><a href="<?=base_url("admin/announcement/event")?>">Event</a></li>
                        <li><a href="<?=base_url("admin/announcement/holiday")?>">Holiday</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="menu-icon icon-stats-bars"></i><span>Reports</span><i class="accordion-icon fa fa-angle-left"></i>
                    </a>
                    <ul>
                        <li><a href="<?=base_url("admin/reports/class")?>">Class Report</a></li>
                        <li><a href="<?=base_url("admin/reports/student")?>">Student Report</a></li>
                        <li><a href="<?=base_url("admin/reports/idcard")?>">ID Card Report</a></li>
                        <li><a href="<?=base_url("admin/reports/admitcard")?>">Admit Card Report</a></li>
                        <li><a href="<?=base_url("admin/reports/timetable")?>">Timetable Report</a></li>
                        <li><a href="<?=base_url("admin/reports/examschedule")?>">Exam Schedule Report</a></li>
                        <li><a href="<?=base_url("admin/reports/attendance")?>">Attendance Report</a></li>
                        <li><a href="<?=base_url("admin/reports/attendanceoverview")?>">Attendance Overview Report</a></li>
                        <li><a href="<?=base_url("admin/reports/librarybooks")?>">Library Books Report</a></li>
                        <li><a href="<?=base_url("admin/reports/librarycard")?>">Library Card Report</a></li>
                        <li><a href="<?=base_url("admin/reports/libraryissue")?>">Library Book Issue Report</a></li>
                        <li><a href="<?=base_url("admin/reports/terminal")?>">Terminal Report</a></li>
                        <li><a href="<?=base_url("admin/reports/merit")?>">Merit Stage Report</a></li>
                        <li><a href="<?=base_url("admin/reports/tabulation")?>">Tabulation Sheet Report</a></li>
                        <li><a href="<?=base_url("admin/reports/marksheet")?>">Mark Sheet Report</a></li>
                        <li><a href="<?=base_url("admin/reports/progress")?>">Progress Card Report</a></li>
                        <li><a href="<?=base_url("admin/reports/oexam")?>">Online Exam Report</a></li>
                        <li><a href="<?=base_url("admin/reports/oexamquestion")?>">Online Exam Question Report</a></li>
                        <li><a href="<?=base_url("admin/reports/certificate")?>">Certificate Report</a></li>
                        <li><a href="<?=base_url("admin/reports/leave")?>">Leave Application Report</a></li>
                        <li><a href="<?=base_url("admin/reports/productpurchase")?>">Product Purchase Report</a></li>
                        <li><a href="<?=base_url("admin/reports/productsale")?>">Product Sale Report</a></li>
                        <li><a href="<?=base_url("admin/reports/searchpaymentfees")?>">Search Payment Fees Report</a></li>
                        <li><a href="<?=base_url("admin/reports/fees")?>">Fees Report</a></li>
                        <li><a href="<?=base_url("admin/reports/duefees")?>">Due Fees Report</a></li>
                        <li><a href="<?=base_url("admin/reports/balancefees")?>">Balance Fees Report</a></li>
                        <li><a href="<?=base_url("admin/reports/transaction")?>">Transaction Report</a></li>
                        <li><a href="<?=base_url("admin/reports/studentfine")?>">Student Fine Report</a></li>
                        <li><a href="<?=base_url("admin/reports/salary")?>">Salary Report</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?=base_url("admin/visitors")?>">
                        <i class="menu-icon icon-user-plus"></i><span>Visitors Information</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="menu-icon icon-shield"></i><span>Administration</span><i class="accordion-icon fa fa-angle-left"></i>
                    </a>
                    <ul>
                        <li><a href="<?=base_url("admin/administration/year")?>">Academic Year</a></li>
                        <li><a href="<?=base_url("admin/administration/sgroup")?>">Student Group</a></li>
                        <li><a href="<?=base_url("admin/administration/complain")?>">Complain</a></li>
                        <li><a href="<?=base_url("admin/templates/certificate")?>">Certificate Templates</a></li>
                        <li><a href="<?=base_url("admin/administration/password")?>">Reset Password</a></li>
                        <li><a href="<?=base_url("admin/administration/social")?>">Social Link</a></li>
                        <li><a href="<?=base_url("admin/templates/mails")?>">Mail/SMS Templates</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="menu-icon icon-cogs"></i><span>Settings</span><i class="accordion-icon fa fa-angle-left"></i>
                    </a>
                    <ul>
                        <li><a href="<?=base_url("admin/settings")?>">General Settings</a></li>
                        <li><a href="<?=base_url("admin/settings/payment")?>">Payment Settings</a></li>
                        <li><a href="<?=base_url("admin/settings/sms")?>">SMS Settings</a></li>
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