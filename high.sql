-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 30, 2020 at 04:17 PM
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
-- Table structure for table `attendance`
--

DROP TABLE IF EXISTS `attendance`;
CREATE TABLE IF NOT EXISTS `attendance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class` int(11) NOT NULL,
  `section` int(11) NOT NULL,
  `subject` varchar(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL COMMENT 'student|teacher|users',
  `attendance_type` varchar(20) NOT NULL,
  `attendance_date` date NOT NULL,
  `remark` int(11) NOT NULL COMMENT '1- present, 2 - absent, 3 - late, 4 - late with excuse',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `name`, `tid`, `class_numeric`, `note`) VALUES
(6, 'jss 1', 1, '123', 'jss1'),
(7, 'jss 2', 1, '2', 'Good');

-- --------------------------------------------------------

--
-- Table structure for table `general_settings`
--

DROP TABLE IF EXISTS `general_settings`;
CREATE TABLE IF NOT EXISTS `general_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `school_name` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `currency` varchar(5) NOT NULL,
  `language` int(11) NOT NULL,
  `default_academic_year` int(11) NOT NULL,
  `default_attendance` varchar(20) NOT NULL COMMENT 'per_day or per_subject',
  `weekends` varchar(500) NOT NULL,
  `google_analytics` text NOT NULL,
  `entry_class` int(11) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `times_school_open` int(5) NOT NULL,
  `next_term_begins` datetime NOT NULL,
  `show_class_position` tinyint(1) NOT NULL,
  `show_subject_position` tinyint(1) NOT NULL,
  `chs_on_report` tinyint(1) NOT NULL COMMENT 'cumulative high score',
  `cas_on_report` tinyint(1) NOT NULL COMMENT 'cumulative average score',
  `cls_on_report` tinyint(1) NOT NULL COMMENT 'cumulative low score',
  `marks_guide` varchar(100) NOT NULL,
  `captcha` tinyint(1) NOT NULL,
  `attendance_notification` varchar(10) NOT NULL COMMENT 'email or sms',
  `theme` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `message_thread`
--

DROP TABLE IF EXISTS `message_thread`;
CREATE TABLE IF NOT EXISTS `message_thread` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `creator` int(11) NOT NULL,
  `receiver` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL,
  `status` varchar(20) NOT NULL COMMENT 'active||thrash||draft',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `message_thread`
--

INSERT INTO `message_thread` (`id`, `creator`, `receiver`, `title`, `date_created`, `status`) VALUES
(1, 7, '6|1|4', 'Hello Nelson Mandela ', '2020-03-25 13:29:30', 'active'),
(2, 7, '6|1', 'JSS1 Gold Class', '2020-03-25 13:30:16', 'active'),
(3, 1, '', 'Draft Message', '2020-03-25 14:59:33', 'draft'),
(4, 1, '', 'Website is Down', '2020-04-13 16:19:37', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `messaging`
--

DROP TABLE IF EXISTS `messaging`;
CREATE TABLE IF NOT EXISTS `messaging` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `receiver` varchar(255) NOT NULL,
  `sender` int(11) NOT NULL,
  `message` text NOT NULL,
  `thread` varchar(20) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `open` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messaging`
--

INSERT INTO `messaging` (`id`, `receiver`, `sender`, `message`, `thread`, `date_time`, `open`) VALUES
(1, '6|1|4', 1, 'Random messages', '1', '2020-03-25 13:35:45', 0),
(2, '6|1', 1, 'Hello JSS1 God Class', '2', '2020-03-25 13:36:15', 0),
(3, '6|1|4', 1, 'Just doing this again.... Don\'t take it personal', '1', '2020-03-25 13:45:20', 0),
(4, '', 1, 'Draft message', '3', '2020-03-25 13:59:33', 0),
(5, '6|1|4', 1, 'Hello , what is good???', '1', '2020-04-08 14:07:29', 0),
(6, '', 1, '-- phpMyAdmin SQL Dump\r\n    -- version 4.9.0.1\r\n    -- https://www.phpmyadmin.net/\r\n    --\r\n\r\n    -- Host: localhost:8889\r\n    -- Generation Time: Apr 11, 2020 at 06:09 PM\r\n    -- Server version: 5.7.26\r\n    -- PHP Version: 7.3.8\r\nSET\r\n    SQL_MODE = \"NO_AUTO_VALUE_ON_ZERO\";\r\nSET\r\n    time_zone = \"+00:00\";\r\n    --\r\n\r\n    -- Database: `high`\r\n    --\r\n\r\n    -- --------------------------------------------------------\r\n    --\r\n\r\n    -- Table structure for table `assignments`\r\n    --\r\n\r\nCREATE TABLE `assignments`(\r\n    `id` INT(11) NOT NULL,\r\n    `cid` INT(11) NOT NULL,\r\n    `sid` INT(11) NOT NULL,\r\n    `uploader` INT(11) NOT NULL,\r\n    `title` VARCHAR(255) NOT NULL,\r\n    `description` TEXT NOT NULL,\r\n    `subject` INT(11) NOT NULL,\r\n    `file&#96; VARCHAR(255) NOT NULL,\r\n    &#96;time_uploaded` DATETIME NOT NULL,\r\n    `deadline` DATETIME NOT NULL\r\n) ENGINE = InnoDB DEFAULT CHARSET = utf8;\r\n--\r\n\r\n-- Dumping data for table `assignments`\r\n--\r\n\r\nINSERT INTO `assignments`(\r\n    `id`,\r\n    `cid`,\r\n    `sid`,\r\n    `uploader`,\r\n    `title`,\r\n    `description`,\r\n    `subject`,\r\n    `file&#96;,\r\n    &#96;time_uploaded`,\r\n    `deadline`\r\n)\r\nVALUES(\r\n    1,\r\n    6,\r\n    2,\r\n    1,\r\n    \'Algebra Assignment\',\r\n    \'Assignment for algebra\',\r\n    1,\r\n    \'\',\r\n    \'2020-03-17 13:33:15\',\r\n    \'2020-03-10 00:00:00\'\r\n);\r\n-- --------------------------------------------------------\r\n--\r\n\r\n-- Table structure for table `attendance`\r\n--\r\n\r\nCREATE TABLE `attendance`(\r\n    `id` INT(11) NOT NULL,\r\n    `class` INT(11) NOT NULL,\r\n    `section` INT(11) NOT NULL,\r\n    `subject` VARCHAR(11) DEFAULT NULL,\r\n    `user_id` INT(11) NOT NULL COMMENT \'student|teacher|users\',\r\n    `attendance_type` VARCHAR(20) NOT NULL,\r\n    `attendance_date` DATE NOT NULL,\r\n    `remark` INT(11) NOT NULL COMMENT \'1- present, 2 - absent, 3 - late, 4 - late with excuse\'\r\n) ENGINE = InnoDB DEFAULT CHARSET = utf8;\r\n-- --------------------------------------------------------\r\n--\r\n\r\n-- Table structure for table `classes`\r\n--\r\n\r\nCREATE TABLE `classes`(\r\n    `id` INT(11) NOT NULL,\r\n    `name` VARCHAR(20) NOT NULL,\r\n    `tid` INT(11) NOT NULL,\r\n    `class_numeric` VARCHAR(10) NOT NULL,\r\n    `note` VARCHAR(255) NOT NULL\r\n) ENGINE = InnoDB DEFAULT CHARSET = utf8;\r\n--\r\n\r\n-- Dumping data for table `classes`\r\n--\r\n\r\nINSERT INTO `classes`(\r\n    `id`,\r\n    `name`,\r\n    `tid`,\r\n    `class_numeric`,\r\n    `note`\r\n)\r\nVALUES(6, \'jss 1\', 1, \'123\', \'jss1\');\r\n-- --------------------------------------------------------\r\n--\r\n\r\n-- Table structure for table `message_thread`\r\n--\r\n\r\nCREATE TABLE `message_thread`(\r\n    `id` INT(11) NOT NULL,\r\n    `creator` INT(11) NOT NULL,\r\n    `receiver` VARCHAR(255) NOT NULL,\r\n    `title` VARCHAR(255) NOT NULL,\r\n    `date_created` DATETIME NOT NULL,\r\n    `status` VARCHAR(20) NOT NULL COMMENT \'active||thrash||draft\'\r\n) ENGINE = InnoDB DEFAULT CHARSET = utf8;\r\n--\r\n\r\n-- Dumping data for table `message_thread`\r\n--\r\n\r\nINSERT INTO `message_thread`(\r\n    `id`,\r\n    `creator`,\r\n    `receiver`,\r\n    `title`,\r\n    `date_created`,\r\n    `status`\r\n)\r\nVALUES(\r\n    1,\r\n    7,\r\n    \'6|1|4\',\r\n    \'Hello Nelson Mandela \',\r\n    \'2020-03-25 13:29:30\',\r\n    \'active\'\r\n),(\r\n    2,\r\n    7,\r\n    \'6|1\',\r\n    \'JSS1 Gold Class\',\r\n    \'2020-03-25 13:30:16\',\r\n    \'active\'\r\n),(\r\n    3,\r\n    1,\r\n    \'\',\r\n    \'Draft Message\',\r\n    \'2020-03-25 14:59:33\',\r\n    \'draft\'\r\n);\r\n-- --------------------------------------------------------\r\n--\r\n\r\n-- Table structure for table `messaging`\r\n--\r\n\r\nCREATE TABLE `messaging`(\r\n    `id` INT(11) NOT NULL,\r\n    `receiver` VARCHAR(255) NOT NULL,\r\n    `sender` INT(11) NOT NULL,\r\n    `message` TEXT NOT NULL,\r\n    `thread` VARCHAR(20) NOT NULL,\r\n    `date_time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,\r\n    `open` INT(1) NOT NULL DEFAULT \'0\'\r\n) ENGINE = InnoDB DEFAULT CHARSET = utf8;\r\n--\r\n\r\n-- Dumping data for table `messaging`\r\n--\r\n\r\nINSERT INTO `messaging`(\r\n    `id`,\r\n    `receiver`,\r\n    `sender`,\r\n    `message`,\r\n    `thread`,\r\n    `date_time`,\r\n    `open`\r\n)\r\nVALUES(\r\n    1,\r\n    \'6|1|4\',\r\n    1,\r\n    \'Random messages\',\r\n    \'1\',\r\n    \'2020-03-25 13:35:45\',\r\n    0\r\n),(\r\n    2,\r\n    \'6|1\',\r\n    1,\r\n    \'Hello JSS1 God Class\',\r\n    \'2\',\r\n    \'2020-03-25 13:36:15\',\r\n    0\r\n),(\r\n    3,\r\n    \'6|1|4\',\r\n    1,\r\n    \'Just doing this again.... Don\\\'t take it personal\',\r\n    \'1\',\r\n    \'2020-03-25 13:45:20\',\r\n    0\r\n),(\r\n    4,\r\n    \'\',\r\n    1,\r\n    \'Draft message\',\r\n    \'3\',\r\n    \'2020-03-25 13:59:33\',\r\n    0\r\n),(\r\n    5,\r\n    \'6|1|4\',\r\n    1,\r\n    \'Hello , what is good???\',\r\n    \'1\',\r\n    \'2020-04-08 14:07:29\',\r\n    0\r\n);\r\n-- --------------------------------------------------------\r\n--\r\n\r\n-- Table structure for table `modules`\r\n--\r\n\r\nCREATE TABLE `modules`(\r\n    `id` INT(11) NOT NULL,\r\n    `title` VARCHAR(30) NOT NULL,\r\n    `iclass` VARCHAR(20) NOT NULL,\r\n    `url` VARCHAR(100) NOT NULL\r\n) ENGINE = InnoDB DEFAULT CHARSET = utf8;\r\n--\r\n\r\n-- Dumping data for table `modules`\r\n--\r\n\r\nINSERT INTO `modules`(`id`, `title`, `iclass`, `url`)\r\nVALUES(\r\n    1,\r\n    \'Students\',\r\n    \'icon-school\',\r\n    \'students\'\r\n),(\r\n    2,\r\n    \'Parents\',\r\n    \'icon-people\',\r\n    \'parents\'\r\n),(\r\n    3,\r\n    \'Teachers\',\r\n    \'icon-user-tie\',\r\n    \'teachers\'\r\n),(4, \'Users\', \'icon-profile\', \'users\'),(\r\n    5,\r\n    \'Roles\',\r\n    \'icon-user-check\',\r\n    \'roles\'\r\n),(\r\n    6,\r\n    \'Academic\',\r\n    \'icon-address-book\',\r\n    \'\'\r\n),(7, \'Attendance\', \'icon-schedule\', \'\'),(8, \'Exams\', \'icon-file-text2\', \'\'),(9, \'Marks\', \'icon-checkmark\', \'\'),(\r\n    10,\r\n    \'Messages\',\r\n    \'icon-envelop\',\r\n    \'messages\'\r\n),(\r\n    11,\r\n    \'Media\',\r\n    \'icon-video-camera\',\r\n    \'media\'\r\n),(\r\n    12,\r\n    \'Mails / SMS\',\r\n    \'icon-mail\',\r\n    \'mails\'\r\n),(\r\n    13,\r\n    \'Online Exams\',\r\n    \'icon-display\',\r\n    \'\'\r\n),(\r\n    14,\r\n    \'Payroll\',\r\n    \'icon-credit-card\',\r\n    \'\'\r\n),(\r\n    15,\r\n    \'Assets Management\',\r\n    \'icon-database\',\r\n    \'\'\r\n),(\r\n    16,\r\n    \'Inventory\',\r\n    \'icon-briefcase\',\r\n    \'\'\r\n),(\r\n    17,\r\n    \'Leave Application\',\r\n    \'icon-airplane\',\r\n    \'\'\r\n),(18, \'Child\', \'icon-spell-check\', \'\'),(19, \'Library\', \'icon-books\', \'\'),(20, \'Transport\', \'icon-truck\', \'\'),(21, \'Hostel\', \'icon-home3\', \'\'),(\r\n    22,\r\n    \'Accounting\',\r\n    \'icon-calculator\',\r\n    \'\'\r\n),(\r\n    23,\r\n    \'Announcement\',\r\n    \'icon-bullhorn\',\r\n    \'\'\r\n),(24, \'Reports\', \'icon-stats-bars\', \'\'),(\r\n    25,\r\n    \'Visitors Information\',\r\n    \'icon-user-plus\',\r\n    \'visitors\'\r\n),(\r\n    26,\r\n    \'Administration\',\r\n    \'icon-shield\',\r\n    \'\'\r\n),(27, \'Settings\', \'icon-cogs\', \'\');\r\n-- --------------------------------------------------------\r\n--\r\n\r\n-- Table structure for table `oexam`\r\n--\r\n\r\nCREATE TABLE `oexam`(\r\n    `id` INT(11) NOT NULL,\r\n    `title` VARCHAR(255) NOT NULL,\r\n    `description` TEXT NOT NULL,\r\n    `cid` INT(11) NOT NULL,\r\n    `sid` INT(11) NOT NULL,\r\n    `subject` INT(11) NOT NULL,\r\n    `instruction` VARCHAR(255) NOT NULL,\r\n    `exam_status` VARCHAR(20) NOT NULL,\r\n    `exam_type` VARCHAR(20) NOT NULL,\r\n    `duration` INT(11) NOT NULL,\r\n    `start_date` DATE NOT NULL,\r\n    `start_time` TIME NOT NULL,\r\n    `end_time` TIME NOT NULL,\r\n    `mark_type` VARCHAR(20) NOT NULL,\r\n    `pass_mark` INT(11) NOT NULL,\r\n    `negative_mark` INT(11) NOT NULL,\r\n    `random` INT(1) NOT NULL,\r\n    `published` VARCHAR(20) NOT NULL,\r\n    `uid` INT(11) NOT NULL,\r\n    `url` VARCHAR(20) NOT NULL\r\n) ENGINE = InnoDB DEFAULT CHARSET = utf8;\r\n--\r\n\r\n-- Dumping data for table `oexam`\r\n--\r\n\r\nINSERT INTO `oexam`(\r\n    `id`,\r\n    `title`,\r\n    `description`,\r\n    `cid`,\r\n    `sid`,\r\n    `subject`,\r\n    `instruction`,\r\n    `exam_status`,\r\n    `exam_type`,\r\n    `duration`,\r\n    `start_date`,\r\n    `start_time`,\r\n    `end_time`,\r\n    `mark_type`,\r\n    `pass_mark`,\r\n    `negative_mark`,\r\n    `random`,\r\n    `published`,\r\n    `uid`,\r\n    `url`\r\n)\r\nVALUES(\r\n    1,\r\n    \'General Aptitude Test\',\r\n    \'General Aptitude Test exam testing\',\r\n    6,\r\n    2,\r\n    1,\r\n    \'Just do your thing...\',\r\n    \'\',\r\n    \'duration\',\r\n    30,\r\n    \'2020-03-28\',\r\n    \'15:05:00\',\r\n    \'17:30:00\',\r\n    \'percentage\',\r\n    30,\r\n    2,\r\n    1,\r\n    \'active\',\r\n    1,\r\n    \'52146879\'\r\n);\r\n-- --------------------------------------------------------\r\n--\r\n\r\n-- Table structure for table `oexam_group`\r\n--\r\n\r\nCREATE TABLE `oexam_group`(\r\n    `id` INT(11) NOT NULL,\r\n    `title` VARCHAR(255) NOT NULL,\r\n    `created_by` INT(11) NOT NULL\r\n) ENGINE = InnoDB DEFAULT CHARSET = utf8;\r\n--\r\n\r\n-- Dumping data for table `oexam_group`\r\n--\r\n\r\nINSERT INTO `oexam_group`(`id`, `title`, `created_by`)\r\nVALUES(1, \'FMCS exam\', 1),(2, \'UTME 2022\', 1);\r\n-- --------------------------------------------------------\r\n--\r\n\r\n-- Table structure for table `oexam_level`\r\n--\r\n\r\nCREATE TABLE `oexam_level`(\r\n    `id` INT(11) NOT NULL,\r\n    `title` VARCHAR(50) NOT NULL,\r\n    `created_by` INT(11) NOT NULL\r\n) ENGINE = InnoDB DEFAULT CHARSET = utf8;\r\n--\r\n\r\n-- Dumping data for table `oexam_level`\r\n--\r\n\r\nINSERT INTO `oexam_level`(`id`, `title`, `created_by`)\r\nVALUES(1, \'Low\', 1),(2, \'High\', 1),(3, \'Medium\', 1);\r\n-- --------------------------------------------------------\r\n--\r\n\r\n-- Table structure for table `oexam_options`\r\n--\r\n\r\nCREATE TABLE `oexam_options`(\r\n    `id` INT(11) NOT NULL,\r\n    `qid` INT(11) NOT NULL,\r\n    `option_value` VARCHAR(255) NOT NULL,\r\n    `is_answer` INT(1) NOT NULL DEFAULT \'0\'\r\n) ENGINE = InnoDB DEFAULT CHARSET = utf8;\r\n--\r\n\r\n-- Dumping data for table `oexam_options`\r\n--\r\n\r\nINSERT INTO `oexam_options`(\r\n    `id`,\r\n    `qid`,\r\n    `option_value`,\r\n    `is_answer`\r\n)\r\nVALUES(1, 1, \'Animal place or thing\', 1),(2, 1, \'Animal\', 1),(3, 1, \'Place\', 1),(4, 1, \'sunshine and light\', 1),(5, 2, \'Covid 1\', 1),(6, 2, \'covid 2\', 0),(7, 2, \'covid 3\', 0),(8, 3, \'hello1\', 1),(9, 3, \'ticked\', 1),(10, 3, \'ticked\', 1),(11, 3, \'hello4\', 0),(12, 3, \'ticked\', 0),(13, 3, \'hello\', 0),(14, 4, \'OPTION 1\', 0),(15, 4, \'OPTION 2\', 0),(16, 4, \'OPTION 3\', 0),(17, 4, \'OPTION 4\', 0),(18, 7, \'option 1\', 0),(19, 7, \'option 2\', 1),(20, 7, \'option 3\', 1);\r\n-- --------------------------------------------------------\r\n--\r\n\r\n-- Table structure for table `oexam_question`\r\n--\r\n\r\nCREATE TABLE `oexam_question`(\r\n    `id` INT(11) NOT NULL,\r\n    `oexam_id` INT(11) NOT NULL,\r\n    `question_id` INT(11) NOT NULL\r\n) ENGINE = InnoDB DEFAULT CHARSET = utf8;\r\n-- --------------------------------------------------------\r\n--\r\n\r\n-- Table structure for table `oexam_questions`\r\n--\r\n\r\nCREATE TABLE `oexam_questions`(\r\n    `id` INT(11) NOT NULL,\r\n    `uid` INT(11) NOT NULL,\r\n    `qgroup` INT(11) NOT NULL,\r\n    `level` INT(11) NOT NULL,\r\n    `question` TEXT NOT NULL,\r\n    `hint` VARCHAR(255) NOT NULL,\r\n    `mark` VARCHAR(10) NOT NULL,\r\n    `question_type` VARCHAR(20) NOT NULL\r\n) ENGINE = InnoDB DEFAULT CHARSET = utf8;\r\n--\r\n\r\n-- Dumping data for table `oexam_questions`\r\n--\r\n\r\nINSERT INTO `oexam_questions`(\r\n    `id`,\r\n    `uid`,\r\n    `qgroup`,\r\n    `level`,\r\n    `question`,\r\n    `hint`,\r\n    `mark`,\r\n    `question_type`\r\n)\r\nVALUES(\r\n    1,\r\n    1,\r\n    1,\r\n    3,\r\n    \'<p>What is photosyntensis?    <br></p>\',\r\n    \'sunlight\',\r\n    \'10\',\r\n    \'1\'\r\n),(\r\n    2,\r\n    1,\r\n    2,\r\n    1,\r\n    \'What is COVID 19<br>\',\r\n    \'disease\',\r\n    \'10\',\r\n    \'1\'\r\n),(\r\n    3,\r\n    1,\r\n    1,\r\n    3,\r\n    \'<p>Hello <br></p>\',\r\n    \'hello\',\r\n    \'3\',\r\n    \'2\'\r\n),(4, 1, 1, 3, \'hEY\', \'hey\', \'4\', \'2\'),(7, 1, 2, 3, \'Hey\', \'hey\', \'10\', \'2\');\r\n-- --------------------------------------------------------\r\n--\r\n\r\n-- Table structure for table `parents`\r\n--\r\n\r\nCREATE TABLE `parents`(\r\n    `id` INT(11) NOT NULL,\r\n    `uid` INT(11) NOT NULL,\r\n    `guardian_name` VARCHAR(50) NOT NULL,\r\n    `pic` VARCHAR(50) NOT NULL,\r\n    `father_name` VARCHAR(40) NOT NULL,\r\n    `father_dob` VARCHAR(20) NOT NULL,\r\n    `mother_name` VARCHAR(50) NOT NULL,\r\n    `mother_dob` VARCHAR(50) NOT NULL,\r\n    `father_prof` VARCHAR(50) NOT NULL,\r\n    `mother_prof` VARCHAR(50) NOT NULL,\r\n    `phone` VARCHAR(20) NOT NULL,\r\n    `address` VARCHAR(255) NOT NULL\r\n) ENGINE = InnoDB DEFAULT CHARSET = utf8;\r\n--\r\n\r\n-- Dumping data for table `parents`\r\n--\r\n\r\nINSERT INTO `parents`(\r\n    `id`,\r\n    `uid`,\r\n    `guardian_name`,\r\n    `pic`,\r\n    `father_name`,\r\n    `father_dob`,\r\n    `mother_name`,\r\n    `mother_dob`,\r\n    `father_prof`,\r\n    `mother_prof`,\r\n    `phone`,\r\n    `address`\r\n)\r\nVALUES(\r\n    2,\r\n    4,\r\n    \'Parent Guardian\',\r\n    \'\',\r\n    \'Father\\\'s Name\',\r\n    \'2020/03/10\',\r\n    \'Mother\\\'s Name\',\r\n    \'1970/01/01\',\r\n    \'Welder\',\r\n    \'Tailor\',\r\n    \'08299229988\',\r\n    \'\'\r\n);\r\n-- --------------------------------------------------------\r\n--\r\n\r\n-- Table structure for table `roles`\r\n--\r\n\r\nCREATE TABLE `roles`(\r\n    `id` INT(11) NOT NULL,\r\n    `title` VARCHAR(20) NOT NULL,\r\n    `roles` VARCHAR(255) NOT NULL\r\n) ENGINE = InnoDB DEFAULT CHARSET = utf8;\r\n--\r\n\r\n-- Dumping data for table `roles`\r\n--\r\n\r\nINSERT INTO `roles`(`id`, `title`, `roles`)\r\nVALUES(1, \'Super Admin\', \'{[\\r\\n\\r\\n]}\');\r\n-- --------------------------------------------------------\r\n--\r\n\r\n-- Table structure for table `sections`\r\n--\r\n\r\nCREATE TABLE `sections`(\r\n    `id` INT(11) NOT NULL,\r\n    `cid` INT(11) NOT NULL COMMENT \'Class ID\',\r\n    `name` VARCHAR(50) NOT NULL,\r\n    `category` VARCHAR(50) NOT NULL,\r\n    `capacity` VARCHAR(10) NOT NULL,\r\n    `tid` INT(11) NOT NULL COMMENT \'Teacher ID\',\r\n    `note` VARCHAR(255) NOT NULL\r\n) ENGINE = InnoDB DEFAULT CHARSET = utf8;\r\n--\r\n\r\n-- Dumping data for table `sections`\r\n--\r\n\r\nINSERT INTO `sections`(\r\n    `id`,\r\n    `cid`,\r\n    `name`,\r\n    `category`,\r\n    `capacity`,\r\n    `tid`,\r\n    `note`\r\n)\r\nVALUES(\r\n    1,\r\n    6,\r\n    \'nelson mandela\',\r\n    \'JSS1-GROUP\',\r\n    \'20\',\r\n    1,\r\n    \'class for all\'\r\n),(\r\n    2,\r\n    6,\r\n    \'gold\',\r\n    \'Gold Class\',\r\n    \'10\',\r\n    1,\r\n    \'Awesome       \'\r\n);\r\n-- --------------------------------------------------------\r\n--\r\n\r\n-- Table structure for table `students`\r\n--\r\n\r\nCREATE TABLE `students`(\r\n    `id` INT(11) NOT NULL,\r\n    `uid` INT(11) NOT NULL,\r\n    `name` VARCHAR(100) NOT NULL,\r\n    `cid` INT(11) NOT NULL,\r\n    `sid` INT(11) NOT NULL COMMENT \'Section ID\',\r\n    `gid` INT(11) NOT NULL COMMENT \'Guadian ID\',\r\n    `dob` DATE NOT NULL,\r\n    `gender` VARCHAR(10) NOT NULL,\r\n    `blood_group` VARCHAR(3) NOT NULL,\r\n    `pic` VARCHAR(50) NOT NULL,\r\n    `phone` VARCHAR(20) NOT NULL,\r\n    `address` VARCHAR(255) NOT NULL,\r\n    `state` VARCHAR(50) NOT NULL,\r\n    `country` VARCHAR(100) NOT NULL,\r\n    `religion` VARCHAR(20) NOT NULL,\r\n    `adm_no` VARCHAR(50) NOT NULL,\r\n    `roll` VARCHAR(10) NOT NULL,\r\n    `remarks` VARCHAR(255) DEFAULT NULL,\r\n    `activities` VARCHAR(255) NOT NULL\r\n) ENGINE = InnoDB DEFAULT CHARSET = utf8;\r\n--\r\n\r\n-- Dumping data for table `students`\r\n--\r\n\r\nINSERT INTO `students`(\r\n    `id`,\r\n    `uid`,\r\n    `name`,\r\n    `cid`,\r\n    `sid`,\r\n    `gid`,\r\n    `dob`,\r\n    `gender`,\r\n    `blood_group`,\r\n    `pic`,\r\n    `phone`,\r\n    `address`,\r\n    `state`,\r\n    `country`,\r\n    `religion`,\r\n    `adm_no`,\r\n    `roll`,\r\n    `remarks`,\r\n    `activities`\r\n)\r\nVALUES(\r\n    1,\r\n    7,\r\n    \'Student Account\',\r\n    6,\r\n    2,\r\n    4,\r\n    \'2020-03-23\',\r\n    \'male\',\r\n    \'A+\',\r\n    \'d25a971dc9c6e4cbeb4ffba6467a3982.jpeg\',\r\n    \'08199223300\',\r\n    \'540 a Aina Akingbala Street\',\r\n    \'lagos\',\r\n    \'nigeria\',\r\n    \'christianity\',\r\n    \'2543240\',\r\n    \'7\',\r\n    \'\',\r\n    \'football\'\r\n);\r\n-- --------------------------------------------------------\r\n--\r\n\r\n-- Table structure for table `subjects`\r\n--\r\n\r\nCREATE TABLE `subjects`(\r\n    `id` INT(11) NOT NULL,\r\n    `tid` INT(11) NOT NULL COMMENT \'Teacher ID\',\r\n    `cid` INT(11) NOT NULL COMMENT \'Class ID\',\r\n    `sid` INT(11) NOT NULL COMMENT \'Section ID\',\r\n    `subject` VARCHAR(50) NOT NULL,\r\n    `code` VARCHAR(20) NOT NULL,\r\n    `type` VARCHAR(20) NOT NULL,\r\n    `pass_mark` VARCHAR(10) NOT NULL,\r\n    `final_mark` VARCHAR(10) NOT NULL,\r\n    `author` VARCHAR(20) NOT NULL\r\n) ENGINE = InnoDB DEFAULT CHARSET = utf8;\r\n--\r\n\r\n-- Dumping data for table `subjects`\r\n--\r\n\r\nINSERT INTO `subjects`(\r\n    `id`,\r\n    `tid`,\r\n    `cid`,\r\n    `sid`,\r\n    `subject`,\r\n    `code`,\r\n    `type`,\r\n    `pass_mark`,\r\n    `final_mark`,\r\n    `author`\r\n)\r\nVALUES(\r\n    1,\r\n    1,\r\n    6,\r\n    0,\r\n    \'Maths\',\r\n    \'MTH101\',\r\n    \'\',\r\n    \'30\',\r\n    \'70\',\r\n    \'Jegbengo\'\r\n);\r\n-- --------------------------------------------------------\r\n--\r\n\r\n-- Table structure for table `submodules`\r\n--\r\n\r\nCREATE TABLE `submodules`(\r\n    `id` INT(11) NOT NULL,\r\n    `mid` INT(11) NOT NULL,\r\n    `title` VARCHAR(50) NOT NULL,\r\n    `iclass` VARCHAR(20) DEFAULT NULL,\r\n    `url` VARCHAR(100) NOT NULL\r\n) ENGINE = InnoDB DEFAULT CHARSET = utf8;\r\n--\r\n\r\n-- Dumping data for table `submodules`\r\n--\r\n\r\nINSERT INTO `submodules`(`id`, `mid`, `title`, `iclass`, `url`)\r\nVALUES(1, 6, \'Classes\', \'\', \'classes\'),(2, 6, \'Sections\', \'\', \'sections\'),(3, 6, \'Subjects\', \'\', \'subjects\'),(4, 6, \'Syllabus\', \'\', \'syllabus\'),(\r\n    5,\r\n    6,\r\n    \'Assignments\',\r\n    \'\',\r\n    \'assignments\'\r\n),(6, 6, \'Timetable\', \'\', \'timetable\'),(\r\n    7,\r\n    7,\r\n    \'Students Attendance\',\r\n    \'\',\r\n    \'sattendance\'\r\n),(\r\n    8,\r\n    7,\r\n    \'Teachers Attendance\',\r\n    \'\',\r\n    \'tattendance\'\r\n),(\r\n    9,\r\n    7,\r\n    \'Users Attendance\',\r\n    \'\',\r\n    \'uattendance\'\r\n),(10, 8, \'Exams\', \'\', \'exams\'),(\r\n    11,\r\n    8,\r\n    \'Exam Schedule\',\r\n    \'\',\r\n    \'examschedule\'\r\n),(12, 8, \'Grades\', \'\', \'grades\'),(\r\n    13,\r\n    8,\r\n    \'Exam Attendance\',\r\n    \'\',\r\n    \'eattendance\'\r\n),(14, 9, \'Marks\', \'\', \'marks\'),(\r\n    15,\r\n    9,\r\n    \'Marks Distribution\',\r\n    \'\',\r\n    \'marksdis\'\r\n),(16, 9, \'Promotion\', \'\', \'promotion\'),(\r\n    17,\r\n    13,\r\n    \'Question Groups\',\r\n    \'\',\r\n    \'oexams/groups\'\r\n),(\r\n    18,\r\n    13,\r\n    \'Question Levels\',\r\n    \'\',\r\n    \'oexams/levels\'\r\n),(\r\n    19,\r\n    13,\r\n    \'Question Bank\',\r\n    \'\',\r\n    \'oexams/bank\'\r\n),(20, 13, \'Online Exams\', \'\', \'oexams\'),(\r\n    21,\r\n    13,\r\n    \'Instructions\',\r\n    \'\',\r\n    \'oexams/instructions\'\r\n),(\r\n    22,\r\n    14,\r\n    \'Salary Template\',\r\n    \'\',\r\n    \'salaries/template\'\r\n),(\r\n    23,\r\n    14,\r\n    \'Hourly Template\',\r\n    \'\',\r\n    \'salaries/hourly\'\r\n),(\r\n    24,\r\n    14,\r\n    \'Manage Salary\',\r\n    \'\',\r\n    \'salaries\'\r\n),(\r\n    25,\r\n    14,\r\n    \'Make Payment\',\r\n    \'\',\r\n    \'salaries/pay\'\r\n),(\r\n    26,\r\n    15,\r\n    \'Vendor\',\r\n    \'\',\r\n    \'assets/vendor\'\r\n),(\r\n    27,\r\n    15,\r\n    \'Location\',\r\n    \'\',\r\n    \'assets/location\'\r\n),(\r\n    28,\r\n    15,\r\n    \'Asset Category\',\r\n    \'\',\r\n    \'assets/category\'\r\n),(29, 15, \'Assets\', \'\', \'assets\'),(\r\n    30,\r\n    15,\r\n    \'Asset Assignment\',\r\n    \'\',\r\n    \'assets/assignment\'\r\n),(\r\n    31,\r\n    15,\r\n    \'Purchase\',\r\n    \'\',\r\n    \'assets/purchase\'\r\n),(\r\n    32,\r\n    16,\r\n    \'Category\',\r\n    \'\',\r\n    \'inventory/category\'\r\n),(\r\n    33,\r\n    16,\r\n    \'Product\',\r\n    \'\',\r\n    \'inventory/product\'\r\n),(\r\n    34,\r\n    16,\r\n    \'Warehouse\',\r\n    \'\',\r\n    \'inventory/warehouse\'\r\n),(\r\n    35,\r\n    16,\r\n    \'Supplier\',\r\n    \'\',\r\n    \'inventory/supplier\'\r\n),(\r\n    36,\r\n    16,\r\n    \'Purchase\',\r\n    \'\',\r\n    \'inventory/purchase\'\r\n),(37, 16, \'Sale\', \'\', \'inventory/sale\'),(\r\n    38,\r\n    17,\r\n    \'Leave Category\',\r\n    \'\',\r\n    \'leave/category\'\r\n),(\r\n    39,\r\n    17,\r\n    \'Leave Assign\',\r\n    \'\',\r\n    \'leave/assign\'\r\n),(\r\n    40,\r\n    17,\r\n    \'Leave Apply\',\r\n    \'\',\r\n    \'leave/apply\'\r\n),(\r\n    41,\r\n    17,\r\n    \'Leave Application\',\r\n    \'\',\r\n    \'leave\'\r\n),(\r\n    42,\r\n    18,\r\n    \'Activities Category\',\r\n    \'\',\r\n    \'activities/category\'\r\n),(\r\n    43,\r\n    18,\r\n    \'Activities \',\r\n    \'\',\r\n    \'activities\'\r\n),(\r\n    44,\r\n    18,\r\n    \'Child Care\',\r\n    \'\',\r\n    \'activities/childcare\'\r\n),(\r\n    45,\r\n    19,\r\n    \'Members\',\r\n    \'\',\r\n    \'library/members\'\r\n),(46, 19, \'Books\', \'\', \'library\'),(47, 19, \'Issue\', \'\', \'library/issue\'),(\r\n    48,\r\n    19,\r\n    \'E-Books\',\r\n    \'\',\r\n    \'library/ebooks\'\r\n),(49, 20, \'Transport\', \'\', \'transport\'),(\r\n    50,\r\n    20,\r\n    \'Members\',\r\n    \'\',\r\n    \'transport/members\'\r\n),(51, 21, \'Hostel\', \'\', \'hostel\'),(\r\n    52,\r\n    21,\r\n    \'Category\',\r\n    \'\',\r\n    \'hostel/category\'\r\n),(\r\n    53,\r\n    21,\r\n    \'Members\',\r\n    \'\',\r\n    \'hostel/members\'\r\n),(\r\n    54,\r\n    22,\r\n    \'Fee Type\',\r\n    \'\',\r\n    \'accounting/fee\'\r\n),(\r\n    55,\r\n    22,\r\n    \'Invoice\',\r\n    \'\',\r\n    \'accounting/invoice\'\r\n),(\r\n    56,\r\n    22,\r\n    \'Payment History\',\r\n    \'\',\r\n    \'accounting/history\'\r\n),(\r\n    57,\r\n    22,\r\n    \'Expense\',\r\n    \'\',\r\n    \'accounting/expense\'\r\n),(\r\n    58,\r\n    22,\r\n    \'Income\',\r\n    \'\',\r\n    \'accounting/income\'\r\n),(\r\n    59,\r\n    22,\r\n    \'Global Payment\',\r\n    \'\',\r\n    \'accounting/global\'\r\n),(\r\n    60,\r\n    23,\r\n    \'Notice\',\r\n    \'\',\r\n    \'announcement/notice\'\r\n),(\r\n    61,\r\n    23,\r\n    \'Event\',\r\n    \'\',\r\n    \'announcement/event\'\r\n),(\r\n    62,\r\n    23,\r\n    \'Holiday\',\r\n    \'\',\r\n    \'announcement/holiday\'\r\n),(\r\n    63,\r\n    24,\r\n    \'Class Report\',\r\n    NULL,\r\n    \'reports/class\'\r\n),(\r\n    64,\r\n    24,\r\n    \'Student Report\',\r\n    NULL,\r\n    \'reports/student\'\r\n),(\r\n    65,\r\n    24,\r\n    \'ID Card Report\',\r\n    NULL,\r\n    \'reports/idcard\'\r\n),(\r\n    66,\r\n    24,\r\n    \'Admit Card Report\',\r\n    NULL,\r\n    \'reports/admitcard\'\r\n),(\r\n    67,\r\n    24,\r\n    \'Timetable Report\',\r\n    NULL,\r\n    \'reports/timetable\'\r\n),(\r\n    68,\r\n    24,\r\n    \'Exam Schedule Report\',\r\n    NULL,\r\n    \'reports/examschedule\'\r\n),(\r\n    69,\r\n    24,\r\n    \'Attendance Report\',\r\n    NULL,\r\n    \'reports/attendance\'\r\n),(\r\n    70,\r\n    24,\r\n    \'Attendance Overview Report\',\r\n    NULL,\r\n    \'reports/attendanceoverview\'\r\n),(\r\n    71,\r\n    24,\r\n    \'Library Books Report\',\r\n    NULL,\r\n    \'reports/librarybooks\'\r\n),(\r\n    72,\r\n    24,\r\n    \'Library Card Report\',\r\n    NULL,\r\n    \'reports/librarycard\'\r\n),(\r\n    73,\r\n    24,\r\n    \'Library Book Issue Report\',\r\n    NULL,\r\n    \'reports/libraryissue\'\r\n),(\r\n    74,\r\n    24,\r\n    \'Terminal Report\',\r\n    NULL,\r\n    \'reports/terminal\'\r\n),(\r\n    75,\r\n    24,\r\n    \'Merit Stage Report\',\r\n    NULL,\r\n    \'reports/merit\'\r\n),(\r\n    76,\r\n    24,\r\n    \'Tabulation Sheet Report\',\r\n    NULL,\r\n    \'reports/tabulation\'\r\n),(\r\n    77,\r\n    24,\r\n    \'Mark Sheet Report\',\r\n    NULL,\r\n    \'reports/marksheet\'\r\n),(\r\n    78,\r\n    24,\r\n    \'Progress Card Report\',\r\n    NULL,\r\n    \'reports/progress\'\r\n),(\r\n    79,\r\n    24,\r\n    \'Online Exam Report\',\r\n    NULL,\r\n    \'reports/oexam\'\r\n),(\r\n    80,\r\n    24,\r\n    \'Online Exam Question Report\',\r\n    NULL,\r\n    \'reports/oexamquestion\'\r\n),(\r\n    81,\r\n    24,\r\n    \'Certificate Report\',\r\n    NULL,\r\n    \'reports/certificate\'\r\n),(\r\n    82,\r\n    24,\r\n    \'Leave Application Report\',\r\n    NULL,\r\n    \'reports/leave\'\r\n),(\r\n    83,\r\n    24,\r\n    \'Product Purchase Report\',\r\n    NULL,\r\n    \'reports/productpurchase\'\r\n),(\r\n    84,\r\n    24,\r\n    \'Product Sale Report\',\r\n    NULL,\r\n    \'reports/productsale\'\r\n),(\r\n    85,\r\n    24,\r\n    \'Search Payment Fees Report\',\r\n    NULL,\r\n    \'reports/searchpaymentfees\'\r\n),(\r\n    86,\r\n    24,\r\n    \'Fees Report\',\r\n    NULL,\r\n    \'reports/fees\'\r\n),(\r\n    87,\r\n    24,\r\n    \'Due Fees Report\',\r\n    NULL,\r\n    \'reports/duefees\'\r\n),(\r\n    88,\r\n    24,\r\n    \'Balance Fees Report\',\r\n    NULL,\r\n    \'reports/balancefees\'\r\n),(\r\n    89,\r\n    24,\r\n    \'Transaction Report\',\r\n    NULL,\r\n    \'reports/transaction\'\r\n),(\r\n    90,\r\n    24,\r\n    \'Student Fine Report\',\r\n    NULL,\r\n    \'reports/studentfine\'\r\n),(\r\n    91,\r\n    24,\r\n    \'Salary Report\',\r\n    NULL,\r\n    \'reports/salary\'\r\n),(\r\n    92,\r\n    26,\r\n    \'Academic Year\',\r\n    NULL,\r\n    \'administration/year\'\r\n),(\r\n    93,\r\n    26,\r\n    \'Student Group\',\r\n    NULL,\r\n    \'administration/sgroup\'\r\n),(\r\n    94,\r\n    26,\r\n    \'Complain\',\r\n    NULL,\r\n    \'administration/complain\'\r\n),(\r\n    95,\r\n    26,\r\n    \'Certificate Templates\',\r\n    NULL,\r\n    \'templates/certificate\'\r\n),(\r\n    96,\r\n    26,\r\n    \'Reset Password\',\r\n    NULL,\r\n    \'administration/password\'\r\n),(\r\n    97,\r\n    26,\r\n    \'Social Link\',\r\n    NULL,\r\n    \'administration/social\'\r\n),(\r\n    98,\r\n    26,\r\n    \'Mail / SMS\',\r\n    NULL,\r\n    \'templates/mails\'\r\n),(\r\n    99,\r\n    27,\r\n    \'General Settings\',\r\n    NULL,\r\n    \'settings\'\r\n),(\r\n    100,\r\n    27,\r\n    \'Payment Settings\',\r\n    NULL,\r\n    \'settings/payment\'\r\n),(\r\n    101,\r\n    27,\r\n    \'SMS Settings\',\r\n    NULL,\r\n    \'settings/sms\'\r\n);\r\n-- --------------------------------------------------------\r\n--\r\n\r\n-- Table structure for table `syllabus`\r\n--\r\n\r\nCREATE TABLE `syllabus`(\r\n    `id` INT(11) NOT NULL,\r\n    `cid` INT(11) NOT NULL COMMENT \'class id\',\r\n    `sid` INT(11) NOT NULL DEFAULT \'0\' COMMENT \'Section ID - 0 , which might be empty\',\r\n    `syllabus` VARCHAR(50) NOT NULL,\r\n    `title` VARCHAR(255) NOT NULL,\r\n    `description` TEXT NOT NULL,\r\n    `time_uploaded` DATETIME NOT NULL\r\n) ENGINE = InnoDB DEFAULT CHARSET = utf8;\r\n--\r\n\r\n-- Dumping data for table `syllabus`\r\n--\r\n\r\nINSERT INTO `syllabus`(\r\n    `id`,\r\n    `cid`,\r\n    `sid`,\r\n    `syllabus`,\r\n    `title`,\r\n    `description`,\r\n    `time_uploaded`\r\n)\r\nVALUES(\r\n    1,\r\n    6,\r\n    2,\r\n    \'\',\r\n    \'John doe syllabus\',\r\n    \'For JSS1 Gold\',\r\n    \'2020-03-16 15:38:53\'\r\n);\r\n-- --------------------------------------------------------\r\n--\r\n\r\n-- Table structure for table `teachers`\r\n--\r\n\r\nCREATE TABLE `teachers`(\r\n    `id` INT(11) NOT NULL,\r\n    `uid` INT(11) NOT NULL,\r\n    `name` VARCHAR(100) NOT NULL,\r\n    `pic` VARCHAR(255) NOT NULL,\r\n    `phone` VARCHAR(20) NOT NULL,\r\n    `dob` DATETIME NOT NULL,\r\n    `designation` VARCHAR(100) NOT NULL,\r\n    `gender` VARCHAR(20) NOT NULL,\r\n    `religion` VARCHAR(20) NOT NULL,\r\n    `joined` VARCHAR(20) NOT NULL,\r\n    `address` VARCHAR(255) NOT NULL\r\n) ENGINE = InnoDB DEFAULT CHARSET = utf8;\r\n--\r\n\r\n-- Dumping data for table `teachers`\r\n--\r\n\r\nINSERT INTO `teachers`(\r\n    `id`,\r\n    `uid`,\r\n    `name`,\r\n    `pic`,\r\n    `phone`,\r\n    `dob`,\r\n    `designation`,\r\n    `gender`,\r\n    `religion`,\r\n    `joined`,\r\n    `address`\r\n)\r\nVALUES(\r\n    1,\r\n    6,\r\n    \'Mr Teacher\',\r\n    \'\',\r\n    \'08199227788\',\r\n    \'2020-03-16 00:00:00\',\r\n    \'Main Teacher\',\r\n    \'male\',\r\n    \'muslim\',\r\n    \'2020/03/02\',\r\n    \'540 a Aina Akingbala Street\'\r\n);\r\n-- --------------------------------------------------------\r\n--\r\n\r\n-- Table structure for table `users`\r\n--\r\n\r\nCREATE TABLE `users`(\r\n    `id` INT(11) NOT NULL,\r\n    `title` VARCHAR(255) NOT NULL,\r\n    `email` VARCHAR(100) NOT NULL,\r\n    `password` VARCHAR(100) NOT NULL,\r\n    `salt` VARCHAR(100) NOT NULL,\r\n    `user_group` VARCHAR(20) NOT NULL,\r\n    `auth_code` VARCHAR(50) NOT NULL,\r\n    `ip` VARCHAR(20) NOT NULL,\r\n    `role` INT(11) NOT NULL DEFAULT \'0\',\r\n    `date_registered` DATETIME NOT NULL,\r\n    `last_login` DATETIME NOT NULL,\r\n    `status` VARCHAR(20) NOT NULL DEFAULT \'active\'\r\n) ENGINE = InnoDB DEFAULT CHARSET = latin1;\r\n--\r\n\r\n-- Dumping data for table `users`\r\n--\r\n\r\nINSERT INTO `users`(\r\n    `id`,\r\n    `title`,\r\n    `email`,\r\n    `password`,\r\n    `salt`,\r\n    `user_group`,\r\n    `auth_code`,\r\n    `ip`,\r\n    `role`,\r\n    `date_registered`,\r\n    `last_login`,\r\n    `status`\r\n)\r\nVALUES(\r\n    1,\r\n    \'Phil\',\r\n    \'admin@gmail.com\',\r\n    \'44e9b3c00790da33cd804ebc631a8a811d1a0d1ff8e2f93d10d9538cded31697\',\r\n    \'0C7I8ll#GFpR!HOZ2twB67*@GKD=9y0?75szh(xwVNA3oQ#|tn\',\r\n    \'admin\',\r\n    \'\',\r\n    \'::1\',\r\n    2,\r\n    \'2020-03-11 09:00:52\',\r\n    \'2020-04-11 16:23:47\',\r\n    \'active\'\r\n),(\r\n    4,\r\n    \'\',\r\n    \'parent@gmail.com\',\r\n    \'9dca2f50b7e80f50f3de8af8b0d89131409e8f73dae4b1e861d99e18f7ae483d\',\r\n    \'1$:jqM*E|h3cMkmuIW_)?LEIQbPDYHkyb@:ft$DPDO>@E64VNV\',\r\n    \'student\',\r\n    \'\',\r\n    \'::1\',\r\n    0,\r\n    \'2020-03-11 13:29:31\',\r\n    \'2020-03-11 13:29:31\',\r\n    \'active\'\r\n),(\r\n    6,\r\n    \'\',\r\n    \'teacher@gmail.com\',\r\n    \'6f2f1faf9b98c090fb6e1a831412eb1c1b52f8292caac1f2f7f437cd507ada3d\',\r\n    \'Z7+k?!e;%LlhAhGFKmCfj;&N+MnF8q%J(Le_#5D78.L@|H9prF\',\r\n    \'teacher\',\r\n    \'\',\r\n    \'::1\',\r\n    0,\r\n    \'2020-03-11 16:27:51\',\r\n    \'2020-03-11 16:27:51\',\r\n    \'active\'\r\n),(\r\n    7,\r\n    \'Student\',\r\n    \'student@gmail.com\',\r\n    \'a1fec3e9c14f2e792fb71d63fb41a47709df1721990ba35dc265171288d6d521\',\r\n    \'UJe3VQuc>,7,gJDATk-_9xV)6ONgH8_6dSnp1iSmJ72JtsgTum\',\r\n    \'student\',\r\n    \'\',\r\n    \'::1\',\r\n    0,\r\n    \'2020-03-23 12:55:42\',\r\n    \'2020-03-23 12:55:42\',\r\n    \'active\'\r\n);\r\n--\r\n\r\n-- Indexes for dumped tables\r\n--\r\n\r\n--\r\n\r\n-- Indexes for table `assignments`\r\n--\r\n\r\nALTER TABLE\r\n    `assignments` ADD PRIMARY KEY(`id`);\r\n    --\r\n\r\n    -- Indexes for table `attendance`\r\n    --\r\n\r\nALTER TABLE\r\n    `attendance` ADD PRIMARY KEY(`id`);\r\n    --\r\n\r\n    -- Indexes for table `classes`\r\n    --\r\n\r\nALTER TABLE\r\n    `classes` ADD PRIMARY KEY(`id`);\r\n    --\r\n\r\n    -- Indexes for table `message_thread`\r\n    --\r\n\r\nALTER TABLE\r\n    `message_thread` ADD PRIMARY KEY(`id`);\r\n    --\r\n\r\n    -- Indexes for table `messaging`\r\n    --\r\n\r\nALTER TABLE\r\n    `messaging` ADD PRIMARY KEY(`id`);\r\n    --\r\n\r\n    -- Indexes for table `modules`\r\n    --\r\n\r\nALTER TABLE\r\n    `modules` ADD PRIMARY KEY(`id`);\r\n    --\r\n\r\n    -- Indexes for table `oexam`\r\n    --\r\n\r\nALTER TABLE\r\n    `oexam` ADD PRIMARY KEY(`id`);\r\n    --\r\n\r\n    -- Indexes for table `oexam_group`\r\n    --\r\n\r\nALTER TABLE\r\n    `oexam_group` ADD PRIMARY KEY(`id`);\r\n    --\r\n\r\n    -- Indexes for table `oexam_level`\r\n    --\r\n\r\nALTER TABLE\r\n    `oexam_level` ADD PRIMARY KEY(`id`);\r\n    --\r\n\r\n    -- Indexes for table `oexam_options`\r\n    --\r\n\r\nALTER TABLE\r\n    `oexam_options` ADD PRIMARY KEY(`id`);\r\n    --\r\n\r\n    -- Indexes for table `oexam_question`\r\n    --\r\n\r\nALTER TABLE\r\n    `oexam_question` ADD PRIMARY KEY(`id`);\r\n    --\r\n\r\n    -- Indexes for table `oexam_questions`\r\n    --\r\n\r\nALTER TABLE\r\n    `oexam_questions` ADD PRIMARY KEY(`id`);\r\n    --\r\n\r\n    -- Indexes for table `parents`\r\n    --\r\n\r\nALTER TABLE\r\n    `parents` ADD PRIMARY KEY(`id`);\r\n    --\r\n\r\n    -- Indexes for table `roles`\r\n    --\r\n\r\nALTER TABLE\r\n    `roles` ADD PRIMARY KEY(`id`);\r\n    --\r\n\r\n    -- Indexes for table `sections`\r\n    --\r\n\r\nALTER TABLE\r\n    `sections` ADD PRIMARY KEY(`id`);\r\n    --\r\n\r\n    -- Indexes for table `students`\r\n    --\r\n\r\nALTER TABLE\r\n    `students` ADD PRIMARY KEY(`id`);\r\n    --\r\n\r\n    -- Indexes for table `subjects`\r\n    --\r\n\r\nALTER TABLE\r\n    `subjects` ADD PRIMARY KEY(`id`);\r\n    --\r\n\r\n    -- Indexes for table `submodules`\r\n    --\r\n\r\nALTER TABLE\r\n    `submodules` ADD PRIMARY KEY(`id`);\r\n    --\r\n\r\n    -- Indexes for table `syllabus`\r\n    --\r\n\r\nALTER TABLE\r\n    `syllabus` ADD PRIMARY KEY(`id`);\r\n    --\r\n\r\n    -- Indexes for table `teachers`\r\n    --\r\n\r\nALTER TABLE\r\n    `teachers` ADD PRIMARY KEY(`id`);\r\n    --\r\n\r\n    -- Indexes for table `users`\r\n    --\r\n\r\nALTER TABLE\r\n    `users` ADD PRIMARY KEY(`id`),\r\n    ADD UNIQUE KEY `email`(`email`);\r\n    --\r\n\r\n    -- AUTO_INCREMENT for dumped tables\r\n    --\r\n\r\n    --\r\n\r\n    -- AUTO_INCREMENT for table `assignments`\r\n    --\r\n\r\nALTER TABLE\r\n    `assignments` MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT,\r\n    AUTO_INCREMENT = 2;\r\n    --\r\n\r\n    -- AUTO_INCREMENT for table `attendance`\r\n    --\r\n\r\nALTER TABLE\r\n    `attendance` MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT;\r\n    --\r\n\r\n    -- AUTO_INCREMENT for table `classes`\r\n    --\r\n\r\nALTER TABLE\r\n    `classes` MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT,\r\n    AUTO_INCREMENT = 7;\r\n    --\r\n\r\n    -- AUTO_INCREMENT for table `message_thread`\r\n    --\r\n\r\nALTER TABLE\r\n    `message_thread` MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT,\r\n    AUTO_INCREMENT = 4;\r\n    --\r\n\r\n    -- AUTO_INCREMENT for table `messaging`\r\n    --\r\n\r\nALTER TABLE\r\n    `messaging` MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT,\r\n    AUTO_INCREMENT = 6;\r\n    --\r\n\r\n    -- AUTO_INCREMENT for table `modules`\r\n    --\r\n\r\nALTER TABLE\r\n    `modules` MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT,\r\n    AUTO_INCREMENT = 28;\r\n    --\r\n\r\n    -- AUTO_INCREMENT for table `oexam`\r\n    --\r\n\r\nALTER TABLE\r\n    `oexam` MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT,\r\n    AUTO_INCREMENT = 2;\r\n    --\r\n\r\n    -- AUTO_INCREMENT for table `oexam_group`\r\n    --\r\n\r\nALTER TABLE\r\n    `oexam_group` MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT,\r\n    AUTO_INCREMENT = 3;\r\n    --\r\n\r\n    -- AUTO_INCREMENT for table `oexam_level`\r\n    --\r\n\r\nALTER TABLE\r\n    `oexam_level` MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT,\r\n    AUTO_INCREMENT = 4;\r\n    --\r\n\r\n    -- AUTO_INCREMENT for table `oexam_options`\r\n    --\r\n\r\nALTER TABLE\r\n    `oexam_options` MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT,\r\n    AUTO_INCREMENT = 21;\r\n    --\r\n\r\n    -- AUTO_INCREMENT for table `oexam_question`\r\n    --\r\n\r\nALTER TABLE\r\n    `oexam_question` MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT;\r\n    --\r\n\r\n    -- AUTO_INCREMENT for table `oexam_questions`\r\n    --\r\n\r\nALTER TABLE\r\n    `oexam_questions` MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT,\r\n    AUTO_INCREMENT = 8;\r\n    --\r\n\r\n    -- AUTO_INCREMENT for table `parents`\r\n    --\r\n\r\nALTER TABLE\r\n    `parents` MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT,\r\n    AUTO_INCREMENT = 3;\r\n    --\r\n\r\n    -- AUTO_INCREMENT for table `roles`\r\n    --\r\n\r\nALTER TABLE\r\n    `roles` MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT,\r\n    AUTO_INCREMENT = 2;\r\n    --\r\n\r\n    -- AUTO_INCREMENT for table `sections`\r\n    --\r\n\r\nALTER TABLE\r\n    `sections` MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT,\r\n    AUTO_INCREMENT = 3;\r\n    --\r\n\r\n    -- AUTO_INCREMENT for table `students`\r\n    --\r\n\r\nALTER TABLE\r\n    `students` MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT,\r\n    AUTO_INCREMENT = 2;\r\n    --\r\n\r\n    -- AUTO_INCREMENT for table `subjects`\r\n    --\r\n\r\nALTER TABLE\r\n    `subjects` MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT,\r\n    AUTO_INCREMENT = 2;\r\n    --\r\n\r\n    -- AUTO_INCREMENT for table `submodules`\r\n    --\r\n\r\nALTER TABLE\r\n    `submodules` MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT,\r\n    AUTO_INCREMENT = 102;\r\n    --\r\n\r\n    -- AUTO_INCREMENT for table `syllabus`\r\n    --\r\n\r\nALTER TABLE\r\n    `syllabus` MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT,\r\n    AUTO_INCREMENT = 2;\r\n    --\r\n\r\n    -- AUTO_INCREMENT for table `teachers`\r\n    --\r\n\r\nALTER TABLE\r\n    `teachers` MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT,\r\n    AUTO_INCREMENT = 2;\r\n    --\r\n\r\n    -- AUTO_INCREMENT for table `users`\r\n    --\r\n\r\nALTER TABLE\r\n    `users` MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT,\r\n    AUTO_INCREMENT = 8;', '4', '2020-04-13 15:19:37', 0);

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
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

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
(19, 'E-Library', 'icon-books', ''),
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oexam_group`
--

INSERT INTO `oexam_group` (`id`, `title`, `created_by`) VALUES
(1, 'FMCS exam', 1),
(2, 'UTME 2022', 1),
(3, 'FONOLO Foundation', 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oexam_question`
--

INSERT INTO `oexam_question` (`id`, `oexam_id`, `question_id`) VALUES
(1, 1, 7),
(2, 1, 3);

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
  `question_type` varchar(20) NOT NULL COMMENT '1:Single Answer, 2:Multiple Answer, 3:Fill In Blank',
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `roles`) VALUES
(1, 'Admin', ''),
(2, 'Librarian', '10,19'),
(4, 'Accountant', '10,14,15,16,22');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `cid`, `name`, `category`, `capacity`, `tid`, `note`) VALUES
(1, 6, 'nelson mandela', 'JSS1-GROUP', '20', 1, 'class for all'),
(2, 6, 'gold', 'Gold Class', '10', 1, 'Awesome       '),
(3, 7, 'emerald', 'Science', '20', 1, 'Okay okay        ');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `dob` datetime NOT NULL,
  `gender` varchar(20) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `joined` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `uid`, `name`, `pic`, `phone`, `dob`, `gender`, `religion`, `joined`, `address`) VALUES
(1, 8, 'Admin Staff', '', '08199227788', '2020-03-16 00:00:00', 'male', 'muslim', '2020/03/02', '540 a Aina Akingbala Street'),
(2, 12, 'Adekoniye Adedoyin', '9ab8c77486e38f37826ebdc31e9cbdec.PNG', '08159277099', '1985-07-11 00:00:00', 'male', 'christian', '2020/04/30', '17babs street');

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
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `blood_group` varchar(3) NOT NULL,
  `pic` varchar(50) NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `uid`, `name`, `cid`, `sid`, `gid`, `dob`, `gender`, `blood_group`, `pic`, `phone`, `address`, `state`, `country`, `religion`, `adm_no`, `roll`, `remarks`, `activities`) VALUES
(1, 7, 'Student Account', 6, 2, 4, '2020-03-23', 'male', 'A+', 'd25a971dc9c6e4cbeb4ffba6467a3982.jpeg', '08199223300', '540 a Aina Akingbala Street', 'lagos', 'nigeria', 'christianity', '2543240', '7', '', 'football');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `tid`, `cid`, `sid`, `subject`, `code`, `type`, `pass_mark`, `final_mark`, `author`) VALUES
(1, 1, 6, 0, 'Maths', 'MTH101', '', '30', '70', 'Jegbengo'),
(2, 1, 7, 0, 'English', 'ENG101', 'mandatory', '50', '100', 'Ambali');

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
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;

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
(21, 14, 'Salary Template', '', 'salaries/template'),
(22, 14, 'Hourly Template', '', 'salaries/hourly'),
(23, 14, 'Manage Salary', '', 'salaries'),
(24, 14, 'Make Payment', '', 'salaries/pay'),
(25, 15, 'Vendor', '', 'assets/vendor'),
(26, 15, 'Location', '', 'assets/location'),
(27, 15, 'Asset Category', '', 'assets/category'),
(28, 15, 'Assets', '', 'assets'),
(29, 15, 'Asset Assignment', '', 'assets/assignment'),
(30, 15, 'Purchase', '', 'assets/purchase'),
(31, 16, 'Category', '', 'inventory/category'),
(32, 16, 'Product', '', 'inventory/product'),
(33, 16, 'Warehouse', '', 'inventory/warehouse'),
(34, 16, 'Supplier', '', 'inventory/supplier'),
(35, 16, 'Purchase', '', 'inventory/purchase'),
(36, 16, 'Sale', '', 'inventory/sale'),
(37, 17, 'Leave Category', '', 'leave/category'),
(38, 17, 'Leave Assign', '', 'leave/assign'),
(39, 17, 'Leave Apply', '', 'leave/apply'),
(40, 17, 'Leave Application', '', 'leave'),
(41, 18, 'Activities Category', '', 'activities/category'),
(42, 18, 'Activities ', '', 'activities'),
(43, 18, 'Child Care', '', 'activities/childcare'),
(44, 19, 'Members', '', 'library/members'),
(45, 19, 'Books', '', 'library'),
(46, 19, 'Issue', '', 'library/issue'),
(47, 19, 'E-Books', '', 'library/ebooks'),
(48, 20, 'Transport', '', 'transport'),
(49, 20, 'Members', '', 'transport/members'),
(50, 21, 'Hostel', '', 'hostel'),
(51, 21, 'Category', '', 'hostel/category'),
(52, 21, 'Members', '', 'hostel/members'),
(53, 22, 'Fee Type', '', 'accounting/fee'),
(54, 22, 'Invoice', '', 'accounting/invoice'),
(55, 22, 'Payment History', '', 'accounting/history'),
(56, 22, 'Expense', '', 'accounting/expense'),
(57, 22, 'Income', '', 'accounting/income'),
(58, 22, 'Global Payment', '', 'accounting/global'),
(59, 23, 'Notice', '', 'announcement/notice'),
(60, 23, 'Event', '', 'announcement/event'),
(61, 23, 'Holiday', '', 'announcement/holiday'),
(62, 24, 'Class Report', NULL, 'reports/class'),
(63, 24, 'Student Report', NULL, 'reports/student'),
(64, 24, 'ID Card Report', NULL, 'reports/idcard'),
(65, 24, 'Admit Card Report', NULL, 'reports/admitcard'),
(66, 24, 'Timetable Report', NULL, 'reports/timetable'),
(67, 24, 'Exam Schedule Report', NULL, 'reports/examschedule'),
(68, 24, 'Attendance Report', NULL, 'reports/attendance'),
(69, 24, 'Attendance Overview Report', NULL, 'reports/attendanceoverview'),
(70, 24, 'Library Books Report', NULL, 'reports/librarybooks'),
(71, 24, 'Library Card Report', NULL, 'reports/librarycard'),
(72, 24, 'Library Book Issue Report', NULL, 'reports/libraryissue'),
(73, 24, 'Terminal Report', NULL, 'reports/terminal'),
(74, 24, 'Merit Stage Report', NULL, 'reports/merit'),
(75, 24, 'Tabulation Sheet Report', NULL, 'reports/tabulation'),
(76, 24, 'Mark Sheet Report', NULL, 'reports/marksheet'),
(77, 24, 'Progress Card Report', NULL, 'reports/progress'),
(78, 24, 'Online Exam Report', NULL, 'reports/oexam'),
(79, 24, 'Online Exam Question Report', NULL, 'reports/oexamquestion'),
(80, 24, 'Certificate Report', NULL, 'reports/certificate'),
(81, 24, 'Leave Application Report', NULL, 'reports/leave'),
(82, 24, 'Product Purchase Report', NULL, 'reports/productpurchase'),
(83, 24, 'Product Sale Report', NULL, 'reports/productsale'),
(84, 24, 'Search Payment Fees Report', NULL, 'reports/searchpaymentfees'),
(85, 24, 'Fees Report', NULL, 'reports/fees'),
(86, 24, 'Due Fees Report', NULL, 'reports/duefees'),
(87, 24, 'Balance Fees Report', NULL, 'reports/balancefees'),
(88, 24, 'Transaction Report', NULL, 'reports/transaction'),
(89, 24, 'Student Fine Report', NULL, 'reports/studentfine'),
(90, 24, 'Salary Report', NULL, 'reports/salary'),
(91, 26, 'Academic Year', NULL, 'administration/year'),
(92, 26, 'Student Group', NULL, 'administration/sgroup'),
(93, 26, 'Complain', NULL, 'administration/complain'),
(94, 26, 'Certificate Templates', NULL, 'templates/certificate'),
(95, 26, 'Reset Password', NULL, 'administration/password'),
(96, 26, 'Social Link', NULL, 'administration/social'),
(97, 26, 'Mail / SMS', NULL, 'templates/mails'),
(98, 27, 'General Settings', NULL, 'settings'),
(99, 27, 'Payment Settings', NULL, 'settings/payment'),
(100, 27, 'SMS Settings', NULL, 'settings/sms');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `uid`, `name`, `pic`, `phone`, `dob`, `designation`, `gender`, `religion`, `joined`, `address`) VALUES
(1, 6, 'Mr Teacher', '', '08199227788', '2020-03-16 00:00:00', 'Main Teacher', 'male', 'muslim', '2020/03/02', '540 a Aina Akingbala Street'),
(2, 9, 'Adekoniye Adedoyin', 'd32c4a494bc4bcdc1726af05184d1d0c.jpg', '08159277099', '1995-02-07 00:00:00', 'Class Teacher', 'male', 'christian', '2020/04/30', '17babs street');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

DROP TABLE IF EXISTS `timetable`;
CREATE TABLE IF NOT EXISTS `timetable` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `school_year` int(11) NOT NULL,
  `cid` int(11) NOT NULL COMMENT 'class id',
  `sid` int(11) NOT NULL COMMENT 'section id',
  `sub_id` int(11) NOT NULL COMMENT 'subject id',
  `day` varchar(20) NOT NULL,
  `tid` int(11) NOT NULL COMMENT 'teacher id',
  `start_time` varchar(20) NOT NULL,
  `end_time` varchar(20) NOT NULL,
  `room` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  `last_login` datetime DEFAULT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'active',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `title`, `email`, `password`, `salt`, `user_group`, `auth_code`, `ip`, `role`, `date_registered`, `last_login`, `status`) VALUES
(1, 'Phil', 'admin@gmail.com', '44e9b3c00790da33cd804ebc631a8a811d1a0d1ff8e2f93d10d9538cded31697', '0C7I8ll#GFpR!HOZ2twB67*@GKD=9y0?75szh(xwVNA3oQ#|tn', 'admin', '', '::1', 1, '2020-03-11 09:00:52', '2020-04-30 15:29:59', 'active'),
(4, '', 'parent@gmail.com', '9dca2f50b7e80f50f3de8af8b0d89131409e8f73dae4b1e861d99e18f7ae483d', '1$:jqM*E|h3cMkmuIW_)?LEIQbPDYHkyb@:ft$DPDO>@E64VNV', 'parent', '', '::1', 0, '2020-03-11 13:29:31', '2020-03-11 13:29:31', 'active'),
(6, '', 'teacher@gmail.com', '6f2f1faf9b98c090fb6e1a831412eb1c1b52f8292caac1f2f7f437cd507ada3d', 'Z7+k?!e;%LlhAhGFKmCfj;&N+MnF8q%J(Le_#5D78.L@|H9prF', 'teacher', '', '::1', 0, '2020-03-11 16:27:51', '2020-03-11 16:27:51', 'active'),
(7, 'Student', 'student@gmail.com', 'a1fec3e9c14f2e792fb71d63fb41a47709df1721990ba35dc265171288d6d521', 'UJe3VQuc>,7,gJDATk-_9xV)6ONgH8_6dSnp1iSmJ72JtsgTum', 'student', '', '::1', 0, '2020-03-23 12:55:42', '2020-03-23 12:55:42', 'active'),
(8, '', 'staff@gmail.com', '8ee46e66695f2b6eb35dfb181cb5053569f87624dc64e9eeee9d0be6bc0c188d', 'o.=TTHH=T-=X6sYD!3QRT1,=lV9O0<%Q$^(G0jnMd+R8UPtJ;u', 'admin', '', '::1', 2, '2020-03-11 16:27:51', '2020-04-30 08:49:01', 'active'),
(9, '', 'michaeladekoniye@gmail.com', '6945e7101bf8b13af3e8037fc5a42d13edb5f5ca8d348571cd2eae84f08fa432', '_b:abOPNAb<Ae-&(>?un<2>8k4W0yZQsDYtmH:Ci=FQLwPWKgF', 'teacher', '', '::1', 0, '2020-04-30 08:09:44', '2020-04-30 08:09:44', 'active'),
(12, '', 'acc001@gmail.com', '49249ae1b35860c3fdfd79473d18e28ad4abe3509c53dc0128d6ebf96ce7e21a', '9(0QCGSk=1YBKPi:a>LD;gYCrMQd>mRz3UU+haf3;3JIm6LlZc', 'admin', '', '::1', 4, '2020-04-30 08:43:57', '2020-04-30 15:25:22', 'active');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
