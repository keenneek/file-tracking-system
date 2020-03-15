-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2020 at 07:44 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `file_tracking`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `auth` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `auth`) VALUES
(1, 'ICT', 'user'),
(2, 'RECORDS', 'admin'),
(3, 'ACCOUNTS', 'user'),
(4, 'AUDIT', 'user'),
(5, 'PLANNING', 'user'),
(6, 'FINANCE', 'user'),
(7, 'PROCUREMENT', 'use'),
(8, 'ANTI- GBV', 'user'),
(9, 'SOCIAL ECONOMIC', 'user'),
(10, 'GENDER MAINSTREAMING', 'user'),
(11, 'POLICY AND RESEARCH', 'user'),
(12, 'ADMINISTRATION', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `ref_number` varchar(30) NOT NULL,
  `holder` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `edition` varchar(30) NOT NULL,
  `follio` varchar(30) NOT NULL,
  `current_location` varchar(30) NOT NULL DEFAULT 'RECORDS',
  `possession` varchar(30) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`ref_number`, `holder`, `type`, `edition`, `follio`, `current_location`, `possession`) VALUES
('333', 'my file name', 'PERSONAL', '45', '7', 'ICT ', 'HEAD OF DEPARTMENT'),
('4445', 'file', 'PERSONAL', '5', '7', 'RECORDS', 'DIRECTOR'),
('asjisan', 'nbcxzx', 'PERSONAL', ' nbjsds', '309', 'RECORDS', ''),
('dkbs', 'jsaajkd', 'ADMINISRATION', '5', '8', 'RECORDS', 'DEPUTY DIRECTOR');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `ref_number` int(11) NOT NULL,
  `file_name` varchar(30) NOT NULL,
  `source_dept` varchar(30) NOT NULL,
  `source_position` varchar(30) NOT NULL,
  `request_date` varchar(30) NOT NULL,
  `target_dept` varchar(30) NOT NULL,
  `target_position` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `decline` varchar(100) DEFAULT NULL,
  `approve` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sharing`
--

CREATE TABLE `sharing` (
  `ref_number` int(11) NOT NULL,
  `file_name` varchar(30) NOT NULL,
  `file_type` varchar(30) NOT NULL,
  `department` varchar(30) NOT NULL,
  `position` varchar(30) NOT NULL,
  `date` varchar(30) NOT NULL,
  `status` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(90) NOT NULL,
  `department` varchar(30) NOT NULL,
  `position` varchar(30) NOT NULL,
  `auth` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `department`, `position`, `auth`) VALUES
(7, 'keen', 'fa1306b0cc5a4a85667f4bc5770babcb', 'FINANCE', 'HEAD OF DEPARTMENT', 'user'),
(10, 'kawinsky', '', 'RECORDS', 'HEAD OF DEPARTMENT', 'admin'),
(11, 'kawinsky', '', 'RECORDS', 'HEAD OF DEPARTMENT', 'admin'),
(12, 'kawinsky', '', 'RECORDS', 'HEAD OF DEPARTMENT', 'admin'),
(13, 'kawinsky', '', 'RECORDS', 'HEAD OF DEPARTMENT', 'admin'),
(14, 'kawinsky', '', 'RECORDS', 'HEAD OF DEPARTMENT', 'admin'),
(15, 'kawinsky', 'keen12', 'RECORDS', 'HEAD OF DEPARTMENT', 'admin'),
(16, 'kawinsky', 'keen12', 'RECORDS', 'HEAD OF DEPARTMENT', 'admin'),
(17, 'kawinsky', 'keen12', 'RECORDS', 'HEAD OF DEPARTMENT', 'admin'),
(18, 'kawinsky', 'keen12', 'RECORDS', 'HEAD OF DEPARTMENT', 'admin'),
(19, 'kawinsky', '68e7ae6d7697c27af25ad4d3db7eea18', 'RECORDS', 'HEAD OF DEPARTMENT', 'admin'),
(20, 'kawinsky', '68e7ae6d7697c27af25ad4d3db7eea18', 'RECORDS', 'HEAD OF DEPARTMENT', 'admin'),
(21, 'kawinsky', '68e7ae6d7697c27af25ad4d3db7eea18', 'RECORDS', 'HEAD OF DEPARTMENT', 'admin'),
(22, 'kawinsky', '68e7ae6d7697c27af25ad4d3db7eea18', 'RECORDS', 'HEAD OF DEPARTMENT', 'admin'),
(23, 'kawinsky', '68e7ae6d7697c27af25ad4d3db7eea18', 'RECORDS', 'HEAD OF DEPARTMENT', 'admin'),
(24, 'kawinsky', '68e7ae6d7697c27af25ad4d3db7eea18', 'RECORDS', 'HEAD OF DEPARTMENT', 'admin'),
(25, 'kawinsky', '68e7ae6d7697c27af25ad4d3db7eea18', 'RECORDS', 'HEAD OF DEPARTMENT', 'admin'),
(26, 'kawinsky', '32250170a0dca92d53ec9624f336ca24', 'RECORDS', 'DEPUTY DIRECTOR', 'admin'),
(27, 'keen', '32250170a0dca92d53ec9624f336ca24', 'RECORDS', 'HEAD OF DEPARTMENT', 'admin'),
(28, '222', 'f7177163c833dff4b38fc8d2872f1ec6', 'RECORDS', 'HEAD OF DEPARTMENT', 'admin'),
(29, 'keen', '6074c6aa3488f3c2dddff2a7ca821aab', 'RECORDS', 'HEAD OF DEPARTMENT', 'admin'),
(30, 'keen', '7a95bf926a0333f57705aeac07a362a2', 'ICT', 'DEPUTY DIRECTOR', 'user'),
(31, 'kawinsky', '1a1dc91c907325c69271ddf0c944bc72', 'RECORDS', 'DIRECTOR', 'admin'),
(32, 'keen', '1a1dc91c907325c69271ddf0c944bc72', 'RECORDS', 'DEPUTY DIRECTOR', 'admin'),
(33, 'keen', '1a1dc91c907325c69271ddf0c944bc72', 'ICT', 'DIRECTOR', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`ref_number`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`ref_number`);

--
-- Indexes for table `sharing`
--
ALTER TABLE `sharing`
  ADD PRIMARY KEY (`ref_number`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
