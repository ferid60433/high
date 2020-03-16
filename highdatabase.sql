-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 16, 2020 at 01:16 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `high`
--

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `tid` int(11) NOT NULL,
  `class_numeric` varchar(10) NOT NULL,
  `note` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `name`, `tid`, `class_numeric`, `note`) VALUES
(6, 'jss 1', 1, '123', 'jss1');

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `iclass` varchar(20) NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `title`, `iclass`, `url`) VALUES
(1, 'Students', 'icon-school', 'students'),
(2, 'Parents', 'icon-people', 'parents'),
(3, 'Teachers', 'icon-user-tie', 'teachers'),
(4, 'Users', 'icon-profile', 'users'),
(5, 'Academic', 'icon-address-book', ''),
(6, 'Attendance', 'icon-schedule', ''),
(7, 'Exams', 'icon-file-text2', ''),
(8, 'Marks', 'icon-checkmark', ''),
(9, 'Messages', 'icon-envelop', 'messages'),
(10, 'Media', 'icon-video-camera', 'media'),
(11, 'Mails / SMS', 'icon-mail', 'mails'),
(12, 'Online Exams', 'icon-display', ''),
(13, 'Payroll', 'icon-credit-card', ''),
(14, 'Assets Management', 'icon-database', ''),
(15, 'Inventory', 'icon-briefcase', ''),
(16, 'Leave Application', 'icon-airplane', ''),
(17, 'Child', 'icon-spell-check', ''),
(18, 'Library', 'icon-books', ''),
(19, 'Transport', 'icon-truck', ''),
(20, 'Hostel', 'icon-home3', ''),
(21, 'Accounting', 'icon-calculator', ''),
(22, 'Announcement', 'icon-bullhorn', ''),
(23, 'Reports', 'icon-stats-bars', ''),
(24, 'Visitors Information', 'icon-user-plus', 'visitors'),
(25, 'Administration', 'icon-shield', ''),
(26, 'Settings', 'icon-cogs', '');

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `guardian_name` varchar(50) NOT NULL,
  `pic` varchar(50) NOT NULL,
  `father_name` varchar(40) NOT NULL,
  `father_dob` varchar(20) NOT NULL,
  `mother_name` varchar(50) NOT NULL,
  `mother_dob` varchar(50) NOT NULL,
  `father_prof` varchar(50) NOT NULL,
  `mother_prof` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`id`, `uid`, `guardian_name`, `pic`, `father_name`, `father_dob`, `mother_name`, `mother_dob`, `father_prof`, `mother_prof`, `phone`, `address`) VALUES
(2, 4, 'Parent Guardian', '', 'Father\'s Name', '2020/03/10', 'Mother\'s Name', '1970/01/01', 'Welder', 'Tailor', '08299229988', '');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `roles` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `roles`) VALUES
(1, 'Super Admin', '{[\r\n\r\n]}');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `capacity` varchar(10) NOT NULL,
  `cid` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `note` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `name`, `category`, `capacity`, `cid`, `tid`, `note`) VALUES
(1, 'nelson mandela', 'JSS1-GROUP', '20', 6, 1, 'class for all'),
(2, 'gold', 'Gold Class', '10', 6, 1, 'Awesome       ');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cid` int(11) NOT NULL,
  `sid` int(11) NOT NULL COMMENT 'Section ID',
  `gid` int(11) NOT NULL COMMENT 'Guadian ID',
  `dob` datetime NOT NULL,
  `gender` varchar(10) NOT NULL,
  `blood_group` varchar(3) NOT NULL,
  `pic` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(100) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `adm_no` varchar(50) NOT NULL,
  `roll` varchar(10) NOT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `activities` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `tid` int(11) NOT NULL COMMENT 'Teacher ID',
  `cid` int(11) NOT NULL COMMENT 'Class ID',
  `sid` int(11) NOT NULL COMMENT 'Section ID',
  `subject` varchar(50) NOT NULL,
  `code` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `pass_mark` varchar(10) NOT NULL,
  `final_mark` varchar(10) NOT NULL,
  `author` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `tid`, `cid`, `sid`, `subject`, `code`, `type`, `pass_mark`, `final_mark`, `author`) VALUES
(1, 1, 6, 0, 'Maths', 'MTH101', '', '30', '70', 'Jegbengo');

-- --------------------------------------------------------

--
-- Table structure for table `submodules`
--

CREATE TABLE `submodules` (
  `id` int(11) NOT NULL,
  `mid` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `iclass` varchar(20) DEFAULT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `submodules`
--

INSERT INTO `submodules` (`id`, `mid`, `title`, `iclass`, `url`) VALUES
(1, 5, 'Classes', '', 'classes'),
(2, 5, 'Sections', '', 'sections'),
(3, 5, 'Subjects', '', 'subjects'),
(4, 5, 'Syllabus', '', 'syllabus'),
(5, 5, 'Assignments', '', 'assignments'),
(6, 5, 'Timetable', '', 'timetable'),
(7, 6, 'Students Attendance', '', 'sattendance'),
(8, 6, 'Teachers Attendance', '', 'tattendance'),
(9, 6, 'Users Attendance', '', 'uattendance'),
(10, 7, 'Exams', '', 'exams'),
(11, 7, 'Exam Schedule', '', 'examschedule'),
(12, 7, 'Grades', '', 'grades'),
(13, 7, 'Exam Attendance', '', 'eattendance'),
(14, 8, 'Marks', '', 'marks'),
(15, 8, 'Marks Distribution', '', 'marksdis'),
(16, 8, 'Promotion', '', 'promotion'),
(17, 12, 'Question Groups', '', 'oexams/groups'),
(18, 12, 'Question Levels', '', 'oexams/levels'),
(19, 12, 'Question Bank', '', 'oexams/bank'),
(20, 12, 'Online Exams', '', 'oexams'),
(21, 12, 'Instructions', '', 'oexams/instructions'),
(22, 13, 'Salary Template', '', 'salaries/template'),
(23, 13, 'Hourly Template', '', 'salaries/hourly'),
(24, 13, 'Manage Salary', '', 'salaries'),
(25, 13, 'Make Payment', '', 'salaries/pay'),
(26, 14, 'Vendor', '', 'assets/vendor'),
(27, 14, 'Location', '', 'assets/location'),
(28, 14, 'Asset Category', '', 'assets/category'),
(29, 14, 'Assets', '', 'assets'),
(30, 14, 'Asset Assignment', '', 'assets/assignment'),
(31, 14, 'Purchase', '', 'assets/purchase'),
(32, 15, 'Category', '', 'inventory/category'),
(33, 15, 'Product', '', 'inventory/product'),
(34, 15, 'Warehouse', '', 'inventory/warehouse'),
(35, 15, 'Supplier', '', 'inventory/supplier'),
(36, 15, 'Purchase', '', 'inventory/purchase'),
(37, 15, 'Sale', '', 'inventory/sale'),
(38, 16, 'Leave Category', '', 'leave/category'),
(39, 16, 'Leave Assign', '', 'leave/assign'),
(40, 16, 'Leave Apply', '', 'leave/apply'),
(41, 16, 'Leave Application', '', 'leave'),
(42, 17, 'Activities Category', '', 'activities/category'),
(43, 17, 'Activities ', '', 'activities'),
(44, 17, 'Child Care', '', 'activities/childcare'),
(45, 18, 'Members', '', 'library/members'),
(46, 18, 'Books', '', 'library'),
(47, 18, 'Issue', '', 'library/issue'),
(48, 18, 'E-Books', '', 'library/ebooks'),
(49, 19, 'Transport', '', 'transport'),
(50, 19, 'Members', '', 'transport/members'),
(51, 20, 'Hostel', '', 'hostel'),
(52, 20, 'Category', '', 'hostel/category'),
(53, 20, 'Members', '', 'hostel/members'),
(54, 21, 'Fee Type', '', 'accounting/fee'),
(55, 21, 'Invoice', '', 'accounting/invoice'),
(56, 21, 'Payment History', '', 'accounting/history'),
(57, 21, 'Expense', '', 'accounting/expense'),
(58, 21, 'Income', '', 'accounting/income'),
(59, 21, 'Global Payment', '', 'accounting/global'),
(60, 22, 'Notice', '', 'announcement/notice'),
(61, 22, 'Event', '', 'announcement/event'),
(62, 22, 'Holiday', '', 'announcement/holiday'),
(63, 23, 'Class Report', NULL, 'reports/class'),
(64, 23, 'Student Report', NULL, 'reports/student'),
(65, 23, 'ID Card Report', NULL, 'reports/idcard'),
(66, 23, 'Admit Card Report', NULL, 'reports/admitcard'),
(67, 23, 'Timetable Report', NULL, 'reports/timetable'),
(68, 23, 'Exam Schedule Report', NULL, 'reports/examschedule'),
(69, 23, 'Attendance Report', NULL, 'reports/attendance'),
(70, 23, 'Attendance Overview Report', NULL, 'reports/attendanceoverview'),
(71, 23, 'Library Books Report', NULL, 'reports/librarybooks'),
(72, 23, 'Library Card Report', NULL, 'reports/librarycard'),
(73, 23, 'Library Book Issue Report', NULL, 'reports/libraryissue'),
(74, 23, 'Terminal Report', NULL, 'reports/terminal'),
(75, 23, 'Merit Stage Report', NULL, 'reports/merit'),
(76, 23, 'Tabulation Sheet Report', NULL, 'reports/tabulation'),
(77, 23, 'Mark Sheet Report', NULL, 'reports/marksheet'),
(78, 23, 'Progress Card Report', NULL, 'reports/progress'),
(79, 23, 'Online Exam Report', NULL, 'reports/oexam'),
(80, 23, 'Online Exam Question Report', NULL, 'reports/oexamquestion'),
(81, 23, 'Certificate Report', NULL, 'reports/certificate'),
(82, 23, 'Leave Application Report', NULL, 'reports/leave'),
(83, 23, 'Product Purchase Report', NULL, 'reports/productpurchase'),
(84, 23, 'Product Sale Report', NULL, 'reports/productsale'),
(85, 23, 'Search Payment Fees Report', NULL, 'reports/searchpaymentfees'),
(86, 23, 'Fees Report', NULL, 'reports/fees'),
(87, 23, 'Due Fees Report', NULL, 'reports/duefees'),
(88, 23, 'Balance Fees Report', NULL, 'reports/balancefees'),
(89, 23, 'Transaction Report', NULL, 'reports/transaction'),
(90, 23, 'Student Fine Report', NULL, 'reports/studentfine'),
(91, 23, 'Salary Report', NULL, 'reports/salary'),
(92, 25, 'Academic Year', NULL, 'administration/year'),
(93, 25, 'Student Group', NULL, 'administration/sgroup'),
(94, 25, 'Complain', NULL, 'administration/complain'),
(95, 25, 'Certificate Templates', NULL, 'templates/certificate'),
(96, 25, 'Reset Password', NULL, 'administration/password'),
(97, 25, 'Social Link', NULL, 'administration/social'),
(98, 25, 'Mail / SMS', NULL, 'templates/mails'),
(99, 26, 'General Settings', NULL, 'settings'),
(100, 26, 'Payment Settings', NULL, 'settings/payment'),
(101, 26, 'SMS Settings', NULL, 'settings/sms');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `dob` datetime NOT NULL,
  `designation` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `joined` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `uid`, `name`, `pic`, `phone`, `dob`, `designation`, `gender`, `religion`, `joined`, `address`) VALUES
(1, 6, 'Mr Teacher', '', '08199227788', '2020-03-16 00:00:00', 'Main Teacher', 'male', 'muslim', '2020/03/02', '540 a Aina Akingbala Street');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `salt` varchar(100) NOT NULL,
  `user_group` varchar(20) NOT NULL,
  `auth_code` varchar(50) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `role` int(11) NOT NULL DEFAULT '0',
  `date_registered` datetime NOT NULL,
  `last_login` datetime NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `title`, `email`, `password`, `salt`, `user_group`, `auth_code`, `ip`, `role`, `date_registered`, `last_login`, `status`) VALUES
(1, '', 'admin@gmail.com', '44e9b3c00790da33cd804ebc631a8a811d1a0d1ff8e2f93d10d9538cded31697', '0C7I8ll#GFpR!HOZ2twB67*@GKD=9y0?75szh(xwVNA3oQ#|tn', 'admin', '', '127.0.0.1', 2, '2020-03-11 09:00:52', '2020-03-16 08:14:51', ''),
(4, '', 'parent@gmail.com', '9dca2f50b7e80f50f3de8af8b0d89131409e8f73dae4b1e861d99e18f7ae483d', '1$:jqM*E|h3cMkmuIW_)?LEIQbPDYHkyb@:ft$DPDO>@E64VNV', 'teacher', '', '::1', 0, '2020-03-11 13:29:31', '2020-03-11 13:29:31', 'active'),
(6, '', 'teacher@gmail.com', '6f2f1faf9b98c090fb6e1a831412eb1c1b52f8292caac1f2f7f437cd507ada3d', 'Z7+k?!e;%LlhAhGFKmCfj;&N+MnF8q%J(Le_#5D78.L@|H9prF', 'teacher', '', '::1', 0, '2020-03-11 16:27:51', '2020-03-11 16:27:51', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submodules`
--
ALTER TABLE `submodules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `submodules`
--
ALTER TABLE `submodules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
