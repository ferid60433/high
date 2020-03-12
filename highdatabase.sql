-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 12, 2020 at 08:00 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `high`
--

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `iclass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gid` int(11) NOT NULL COMMENT 'Guadian ID',
  `dob` datetime NOT NULL,
  `gender` varchar(10) NOT NULL,
  `blood_group` varchar(3) NOT NULL,
  `profile_pic` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(100) NOT NULL,
  `admission_no` varchar(50) NOT NULL,
  `roll` varchar(10) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `submodules`
--

CREATE TABLE `submodules` (
  `id` int(11) NOT NULL,
  `mid` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `iclass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `name` varchar(255) NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `email`, `password`, `salt`, `user_group`, `auth_code`, `ip`, `role`, `date_registered`, `last_login`, `status`) VALUES
(1, '', 'admin@gmail.com', '44e9b3c00790da33cd804ebc631a8a811d1a0d1ff8e2f93d10d9538cded31697', '0C7I8ll#GFpR!HOZ2twB67*@GKD=9y0?75szh(xwVNA3oQ#|tn', 'admin', '', '::1', 2, '2020-03-11 09:00:52', '2020-03-11 09:35:32', ''),
(4, '', 'parent@gmail.com', '9dca2f50b7e80f50f3de8af8b0d89131409e8f73dae4b1e861d99e18f7ae483d', '1$:jqM*E|h3cMkmuIW_)?LEIQbPDYHkyb@:ft$DPDO>@E64VNV', 'teacher', '', '::1', 0, '2020-03-11 13:29:31', '2020-03-11 13:29:31', 'active'),
(6, '', 'teacher@gmail.com', '6f2f1faf9b98c090fb6e1a831412eb1c1b52f8292caac1f2f7f437cd507ada3d', 'Z7+k?!e;%LlhAhGFKmCfj;&N+MnF8q%J(Le_#5D78.L@|H9prF', 'teacher', '', '::1', 0, '2020-03-11 16:27:51', '2020-03-11 16:27:51', 'active');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `students`
--
ALTER TABLE `students`
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
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `submodules`
--
ALTER TABLE `submodules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
