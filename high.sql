-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 24, 2020 at 12:23 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `high`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

DROP TABLE IF EXISTS `assignments`;
CREATE TABLE IF NOT EXISTS `assignments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `uploader` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `subject` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `time_uploaded` datetime NOT NULL,
  `deadline` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `assignments`
--

INSERT INTO `assignments` (`id`, `cid`, `sid`, `uploader`, `title`, `description`, `subject`, `file`, `time_uploaded`, `deadline`) VALUES
(1, 6, 2, 1, 'Algebra Assignment', 'Assignment for algebra', 1, '', '2020-03-17 13:33:15', '2020-03-10 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

DROP TABLE IF EXISTS `classes`;
CREATE TABLE IF NOT EXISTS `classes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `tid` int(11) NOT NULL,
  `class_numeric` varchar(10) NOT NULL,
  `note` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `name`, `tid`, `class_numeric`, `note`) VALUES
(6, 'jss 1', 1, '123', 'jss1');

-- --------------------------------------------------------

--
-- Table structure for table `message_thread`
--

DROP TABLE IF EXISTS `message_thread`;
CREATE TABLE IF NOT EXISTS `message_thread` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `creator` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `status` varchar(20) NOT NULL COMMENT 'active||thrash||draft',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `messaging`
--

DROP TABLE IF EXISTS `messaging`;
CREATE TABLE IF NOT EXISTS `messaging` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `receiver` int(11) NOT NULL,
  `sender` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `thread` varchar(20) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

DROP TABLE IF EXISTS `modules`;
CREATE TABLE IF NOT EXISTS `modules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `iclass` varchar(20) NOT NULL,
  `url` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `title`, `iclass`, `url`) VALUES
(1, 'Students', 'icon-school', 'students'),
(2, 'Parents', 'icon-people', 'parents'),
(3, 'Teachers', 'icon-user-tie', 'teachers'),
(4, 'Users', 'icon-profile', 'users'),
(5, 'Roles', 'icon-user-check', 'roles'),
(6, 'Academic', 'icon-address-book', ''),
(7, 'Attendance', 'icon-schedule', ''),
(8, 'Exams', 'icon-file-text2', ''),
(9, 'Marks', 'icon-checkmark', ''),
(10, 'Messages', 'icon-envelop', 'messages'),
(11, 'Media', 'icon-video-camera', 'media'),
(12, 'Mails / SMS', 'icon-mail', 'mails'),
(13, 'Online Exams', 'icon-display', ''),
(14, 'Payroll', 'icon-credit-card', ''),
(15, 'Assets Management', 'icon-database', ''),
(16, 'Inventory', 'icon-briefcase', ''),
(17, 'Leave Application', 'icon-airplane', ''),
(18, 'Child', 'icon-spell-check', ''),
(19, 'Library', 'icon-books', ''),
(20, 'Transport', 'icon-truck', ''),
(21, 'Hostel', 'icon-home3', ''),
(22, 'Accounting', 'icon-calculator', ''),
(23, 'Announcement', 'icon-bullhorn', ''),
(24, 'Reports', 'icon-stats-bars', ''),
(25, 'Visitors Information', 'icon-user-plus', 'visitors'),
(26, 'Administration', 'icon-shield', ''),
(27, 'Settings', 'icon-cogs', '');

-- --------------------------------------------------------

--
-- Table structure for table `oexam`
--

DROP TABLE IF EXISTS `oexam`;
CREATE TABLE IF NOT EXISTS `oexam` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `cid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `subject` int(11) NOT NULL,
  `instruction` varchar(255) NOT NULL,
  `exam_status` varchar(20) NOT NULL,
  `exam_type` varchar(20) NOT NULL,
  `duration` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `mark_type` varchar(20) NOT NULL,
  `pass_mark` int(11) NOT NULL,
  `negative_mark` int(11) NOT NULL,
  `random` int(1) NOT NULL,
  `published` varchar(20) NOT NULL,
  `uid` int(11) NOT NULL,
  `url` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oexam`
--

INSERT INTO `oexam` (`id`, `title`, `description`, `cid`, `sid`, `subject`, `instruction`, `exam_status`, `exam_type`, `duration`, `start_date`, `start_time`, `end_time`, `mark_type`, `pass_mark`, `negative_mark`, `random`, `published`, `uid`, `url`) VALUES
(1, 'General Aptitude Test', 'General Aptitude Test exam testing', 6, 2, 1, 'Just do your thing...', '', 'duration', 30, '2020-03-28', '15:05:00', '17:30:00', 'percentage', 30, 2, 1, 'active', 1, '52146879');

-- --------------------------------------------------------

--
-- Table structure for table `oexam_group`
--

DROP TABLE IF EXISTS `oexam_group`;
CREATE TABLE IF NOT EXISTS `oexam_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oexam_group`
--

INSERT INTO `oexam_group` (`id`, `title`, `created_by`) VALUES
(1, 'FMCS exam', 1),
(2, 'UTME 2022', 1);

-- --------------------------------------------------------

--
-- Table structure for table `oexam_level`
--

DROP TABLE IF EXISTS `oexam_level`;
CREATE TABLE IF NOT EXISTS `oexam_level` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `created_by` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oexam_level`
--

INSERT INTO `oexam_level` (`id`, `title`, `created_by`) VALUES
(1, 'Low', 1),
(2, 'High', 1),
(3, 'Medium', 1);

-- --------------------------------------------------------

--
-- Table structure for table `oexam_options`
--

DROP TABLE IF EXISTS `oexam_options`;
CREATE TABLE IF NOT EXISTS `oexam_options` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `qid` int(11) NOT NULL,
  `option_value` varchar(255) NOT NULL,
  `is_answer` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oexam_options`
--

INSERT INTO `oexam_options` (`id`, `qid`, `option_value`, `is_answer`) VALUES
(1, 1, 'Animal place or thing', 1),
(2, 1, 'Animal', 1),
(3, 1, 'Place', 1),
(4, 1, 'sunshine and light', 1),
(5, 2, 'Covid 1', 1),
(6, 2, 'covid 2', 0),
(7, 2, 'covid 3', 0),
(8, 3, 'hello1', 1),
(9, 3, 'ticked', 1),
(10, 3, 'ticked', 1),
(11, 3, 'hello4', 0),
(12, 3, 'ticked', 0),
(13, 3, 'hello', 0),
(14, 4, 'OPTION 1', 0),
(15, 4, 'OPTION 2', 0),
(16, 4, 'OPTION 3', 0),
(17, 4, 'OPTION 4', 0),
(18, 7, 'option 1', 0),
(19, 7, 'option 2', 1),
(20, 7, 'option 3', 1);

-- --------------------------------------------------------

--
-- Table structure for table `oexam_question`
--

DROP TABLE IF EXISTS `oexam_question`;
CREATE TABLE IF NOT EXISTS `oexam_question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `oexam_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `oexam_questions`
--

DROP TABLE IF EXISTS `oexam_questions`;
CREATE TABLE IF NOT EXISTS `oexam_questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `qgroup` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `question` text NOT NULL,
  `hint` varchar(255) NOT NULL,
  `mark` varchar(10) NOT NULL,
  `question_type` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oexam_questions`
--

INSERT INTO `oexam_questions` (`id`, `uid`, `qgroup`, `level`, `question`, `hint`, `mark`, `question_type`) VALUES
(1, 1, 1, 3, '<p>What is photosyntensis?    <br></p>', 'sunlight', '10', '1'),
(2, 1, 2, 1, 'What is COVID 19<br>', 'disease', '10', '1'),
(3, 1, 1, 3, '<p>Hello <br></p>', 'hello', '3', '2'),
(4, 1, 1, 3, 'hEY', 'hey', '4', '2'),
(7, 1, 2, 3, 'Hey', 'hey', '10', '2');

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

DROP TABLE IF EXISTS `parents`;
CREATE TABLE IF NOT EXISTS `parents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`id`, `uid`, `guardian_name`, `pic`, `father_name`, `father_dob`, `mother_name`, `mother_dob`, `father_prof`, `mother_prof`, `phone`, `address`) VALUES
(2, 4, 'Parent Guardian', '', 'Father\'s Name', '2020/03/10', 'Mother\'s Name', '1970/01/01', 'Welder', 'Tailor', '08299229988', '');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL,
  `roles` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `roles`) VALUES
(1, 'Super Admin', '{[\r\n\r\n]}');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

DROP TABLE IF EXISTS `sections`;
CREATE TABLE IF NOT EXISTS `sections` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL COMMENT 'Class ID',
  `name` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `capacity` varchar(10) NOT NULL,
  `tid` int(11) NOT NULL COMMENT 'Teacher ID',
  `note` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `cid`, `name`, `category`, `capacity`, `tid`, `note`) VALUES
(1, 6, 'nelson mandela', 'JSS1-GROUP', '20', 1, 'class for all'),
(2, 6, 'gold', 'Gold Class', '10', 1, 'Awesome       ');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `activities` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

DROP TABLE IF EXISTS `subjects`;
CREATE TABLE IF NOT EXISTS `subjects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tid` int(11) NOT NULL COMMENT 'Teacher ID',
  `cid` int(11) NOT NULL COMMENT 'Class ID',
  `sid` int(11) NOT NULL COMMENT 'Section ID',
  `subject` varchar(50) NOT NULL,
  `code` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `pass_mark` varchar(10) NOT NULL,
  `final_mark` varchar(10) NOT NULL,
  `author` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `tid`, `cid`, `sid`, `subject`, `code`, `type`, `pass_mark`, `final_mark`, `author`) VALUES
(1, 1, 6, 0, 'Maths', 'MTH101', '', '30', '70', 'Jegbengo');

-- --------------------------------------------------------

--
-- Table structure for table `submodules`
--

DROP TABLE IF EXISTS `submodules`;
CREATE TABLE IF NOT EXISTS `submodules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mid` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `iclass` varchar(20) DEFAULT NULL,
  `url` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `submodules`
--

INSERT INTO `submodules` (`id`, `mid`, `title`, `iclass`, `url`) VALUES
(1, 6, 'Classes', '', 'classes'),
(2, 6, 'Sections', '', 'sections'),
(3, 6, 'Subjects', '', 'subjects'),
(4, 6, 'Syllabus', '', 'syllabus'),
(5, 6, 'Assignments', '', 'assignments'),
(6, 6, 'Timetable', '', 'timetable'),
(7, 7, 'Students Attendance', '', 'sattendance'),
(8, 7, 'Teachers Attendance', '', 'tattendance'),
(9, 7, 'Users Attendance', '', 'uattendance'),
(10, 8, 'Exams', '', 'exams'),
(11, 8, 'Exam Schedule', '', 'examschedule'),
(12, 8, 'Grades', '', 'grades'),
(13, 8, 'Exam Attendance', '', 'eattendance'),
(14, 9, 'Marks', '', 'marks'),
(15, 9, 'Marks Distribution', '', 'marksdis'),
(16, 9, 'Promotion', '', 'promotion'),
(17, 13, 'Question Groups', '', 'oexams/groups'),
(18, 13, 'Question Levels', '', 'oexams/levels'),
(19, 13, 'Question Bank', '', 'oexams/bank'),
(20, 13, 'Online Exams', '', 'oexams'),
(21, 13, 'Instructions', '', 'oexams/instructions'),
(22, 14, 'Salary Template', '', 'salaries/template'),
(23, 14, 'Hourly Template', '', 'salaries/hourly'),
(24, 14, 'Manage Salary', '', 'salaries'),
(25, 14, 'Make Payment', '', 'salaries/pay'),
(26, 15, 'Vendor', '', 'assets/vendor'),
(27, 15, 'Location', '', 'assets/location'),
(28, 15, 'Asset Category', '', 'assets/category'),
(29, 15, 'Assets', '', 'assets'),
(30, 15, 'Asset Assignment', '', 'assets/assignment'),
(31, 15, 'Purchase', '', 'assets/purchase'),
(32, 16, 'Category', '', 'inventory/category'),
(33, 16, 'Product', '', 'inventory/product'),
(34, 16, 'Warehouse', '', 'inventory/warehouse'),
(35, 16, 'Supplier', '', 'inventory/supplier'),
(36, 16, 'Purchase', '', 'inventory/purchase'),
(37, 16, 'Sale', '', 'inventory/sale'),
(38, 17, 'Leave Category', '', 'leave/category'),
(39, 17, 'Leave Assign', '', 'leave/assign'),
(40, 17, 'Leave Apply', '', 'leave/apply'),
(41, 17, 'Leave Application', '', 'leave'),
(42, 18, 'Activities Category', '', 'activities/category'),
(43, 18, 'Activities ', '', 'activities'),
(44, 18, 'Child Care', '', 'activities/childcare'),
(45, 19, 'Members', '', 'library/members'),
(46, 19, 'Books', '', 'library'),
(47, 19, 'Issue', '', 'library/issue'),
(48, 19, 'E-Books', '', 'library/ebooks'),
(49, 20, 'Transport', '', 'transport'),
(50, 20, 'Members', '', 'transport/members'),
(51, 21, 'Hostel', '', 'hostel'),
(52, 21, 'Category', '', 'hostel/category'),
(53, 21, 'Members', '', 'hostel/members'),
(54, 22, 'Fee Type', '', 'accounting/fee'),
(55, 22, 'Invoice', '', 'accounting/invoice'),
(56, 22, 'Payment History', '', 'accounting/history'),
(57, 22, 'Expense', '', 'accounting/expense'),
(58, 22, 'Income', '', 'accounting/income'),
(59, 22, 'Global Payment', '', 'accounting/global'),
(60, 23, 'Notice', '', 'announcement/notice'),
(61, 23, 'Event', '', 'announcement/event'),
(62, 23, 'Holiday', '', 'announcement/holiday'),
(63, 24, 'Class Report', NULL, 'reports/class'),
(64, 24, 'Student Report', NULL, 'reports/student'),
(65, 24, 'ID Card Report', NULL, 'reports/idcard'),
(66, 24, 'Admit Card Report', NULL, 'reports/admitcard'),
(67, 24, 'Timetable Report', NULL, 'reports/timetable'),
(68, 24, 'Exam Schedule Report', NULL, 'reports/examschedule'),
(69, 24, 'Attendance Report', NULL, 'reports/attendance'),
(70, 24, 'Attendance Overview Report', NULL, 'reports/attendanceoverview'),
(71, 24, 'Library Books Report', NULL, 'reports/librarybooks'),
(72, 24, 'Library Card Report', NULL, 'reports/librarycard'),
(73, 24, 'Library Book Issue Report', NULL, 'reports/libraryissue'),
(74, 24, 'Terminal Report', NULL, 'reports/terminal'),
(75, 24, 'Merit Stage Report', NULL, 'reports/merit'),
(76, 24, 'Tabulation Sheet Report', NULL, 'reports/tabulation'),
(77, 24, 'Mark Sheet Report', NULL, 'reports/marksheet'),
(78, 24, 'Progress Card Report', NULL, 'reports/progress'),
(79, 24, 'Online Exam Report', NULL, 'reports/oexam'),
(80, 24, 'Online Exam Question Report', NULL, 'reports/oexamquestion'),
(81, 24, 'Certificate Report', NULL, 'reports/certificate'),
(82, 24, 'Leave Application Report', NULL, 'reports/leave'),
(83, 24, 'Product Purchase Report', NULL, 'reports/productpurchase'),
(84, 24, 'Product Sale Report', NULL, 'reports/productsale'),
(85, 24, 'Search Payment Fees Report', NULL, 'reports/searchpaymentfees'),
(86, 24, 'Fees Report', NULL, 'reports/fees'),
(87, 24, 'Due Fees Report', NULL, 'reports/duefees'),
(88, 24, 'Balance Fees Report', NULL, 'reports/balancefees'),
(89, 24, 'Transaction Report', NULL, 'reports/transaction'),
(90, 24, 'Student Fine Report', NULL, 'reports/studentfine'),
(91, 24, 'Salary Report', NULL, 'reports/salary'),
(92, 26, 'Academic Year', NULL, 'administration/year'),
(93, 26, 'Student Group', NULL, 'administration/sgroup'),
(94, 26, 'Complain', NULL, 'administration/complain'),
(95, 26, 'Certificate Templates', NULL, 'templates/certificate'),
(96, 26, 'Reset Password', NULL, 'administration/password'),
(97, 26, 'Social Link', NULL, 'administration/social'),
(98, 26, 'Mail / SMS', NULL, 'templates/mails'),
(99, 27, 'General Settings', NULL, 'settings'),
(100, 27, 'Payment Settings', NULL, 'settings/payment'),
(101, 27, 'SMS Settings', NULL, 'settings/sms');

-- --------------------------------------------------------

--
-- Table structure for table `syllabus`
--

DROP TABLE IF EXISTS `syllabus`;
CREATE TABLE IF NOT EXISTS `syllabus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL COMMENT 'class id',
  `sid` int(11) NOT NULL DEFAULT '0' COMMENT 'Section ID - 0 , which might be empty',
  `syllabus` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `time_uploaded` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `syllabus`
--

INSERT INTO `syllabus` (`id`, `cid`, `sid`, `syllabus`, `title`, `description`, `time_uploaded`) VALUES
(1, 6, 2, '', 'John doe syllabus', 'For JSS1 Gold', '2020-03-16 15:38:53');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

DROP TABLE IF EXISTS `teachers`;
CREATE TABLE IF NOT EXISTS `teachers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `dob` datetime NOT NULL,
  `designation` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `joined` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `uid`, `name`, `pic`, `phone`, `dob`, `designation`, `gender`, `religion`, `joined`, `address`) VALUES
(1, 6, 'Mr Teacher', '', '08199227788', '2020-03-16 00:00:00', 'Main Teacher', 'male', 'muslim', '2020/03/02', '540 a Aina Akingbala Street');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `status` varchar(20) NOT NULL DEFAULT 'active',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `title`, `email`, `password`, `salt`, `user_group`, `auth_code`, `ip`, `role`, `date_registered`, `last_login`, `status`) VALUES
(1, '', 'admin@gmail.com', '44e9b3c00790da33cd804ebc631a8a811d1a0d1ff8e2f93d10d9538cded31697', '0C7I8ll#GFpR!HOZ2twB67*@GKD=9y0?75szh(xwVNA3oQ#|tn', 'admin', '', '::1', 2, '2020-03-11 09:00:52', '2020-03-24 09:05:26', 'active'),
(4, '', 'parent@gmail.com', '9dca2f50b7e80f50f3de8af8b0d89131409e8f73dae4b1e861d99e18f7ae483d', '1$:jqM*E|h3cMkmuIW_)?LEIQbPDYHkyb@:ft$DPDO>@E64VNV', 'student', '', '::1', 0, '2020-03-11 13:29:31', '2020-03-11 13:29:31', 'active'),
(6, '', 'teacher@gmail.com', '6f2f1faf9b98c090fb6e1a831412eb1c1b52f8292caac1f2f7f437cd507ada3d', 'Z7+k?!e;%LlhAhGFKmCfj;&N+MnF8q%J(Le_#5D78.L@|H9prF', 'teacher', '', '::1', 0, '2020-03-11 16:27:51', '2020-03-11 16:27:51', 'active');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
