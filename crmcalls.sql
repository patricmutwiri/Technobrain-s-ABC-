-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 23, 2017 at 01:27 PM
-- Server version: 10.0.31-MariaDB-0ubuntu0.16.04.2
-- PHP Version: 7.0.26-2+ubuntu16.04.1+deb.sury.org+2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `angani`
--

-- --------------------------------------------------------

--
-- Table structure for table `crmcalls`
--

CREATE TABLE `crmcalls` (
  `id` int(11) NOT NULL,
  `q1` varchar(5) DEFAULT NULL,
  `q2` varchar(5) DEFAULT NULL,
  `q2_notclientsnumber` varchar(20) DEFAULT NULL,
  `q2_datetime` varchar(20) DEFAULT NULL,
  `q3` varchar(5) DEFAULT NULL,
  `q4` varchar(5) DEFAULT NULL,
  `q5` varchar(20) DEFAULT NULL,
  `q5_others` varchar(100) DEFAULT NULL,
  `q6` varchar(20) DEFAULT NULL,
  `q6_others` varchar(100) DEFAULT NULL,
  `q7` varchar(20) DEFAULT NULL,
  `q8` varchar(20) DEFAULT NULL,
  `q9` varchar(20) DEFAULT NULL,
  `q10` varchar(10) DEFAULT NULL,
  `q10_datetime` varchar(20) DEFAULT NULL,
  `q11_email` varchar(50) DEFAULT NULL,
  `q12` varchar(10) DEFAULT NULL,
  `q12_details` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crmcalls`
--

INSERT INTO `crmcalls` (`id`, `q1`, `q2`, `q2_notclientsnumber`, `q2_datetime`, `q3`, `q4`, `q5`, `q5_others`, `q6`, `q6_others`, `q7`, `q8`, `q9`, `q10`, `q10_datetime`, `q11_email`, `q12`, `q12_details`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Yes', 'Yes', NULL, NULL, 'Yes', 'Yes', 'Excellent', NULL, 'Physical drives', NULL, 'Yes', 'Yes', 'Yes', 'Yes', NULL, 'patwiri@gmail.com', 'Yes', NULL, '2017-12-22 17:13:58', '2017-12-22 17:13:58', NULL),
(2, 'Yes', NULL, NULL, NULL, 'Yes', 'Yes', 'Excellent', NULL, 'Physical drives', NULL, 'Agree', 'Agree', 'Agree', 'Yes', NULL, 'patwiri@gmail.com', NULL, NULL, '2017-12-22 19:54:10', '2017-12-22 19:54:10', NULL),
(3, 'Yes', NULL, NULL, NULL, 'Yes', 'Yes', 'Good', NULL, 'Physical drives', NULL, 'Agree', 'Agree', 'Agree', 'Yes', NULL, 'patwiri@gmail.com', NULL, NULL, '2017-12-23 05:29:41', '2017-12-23 05:29:41', NULL),
(4, 'Yes', NULL, NULL, NULL, 'Yes', 'Yes', 'Good', NULL, 'Good', NULL, 'Agree', 'Agree', 'Agree', 'Yes', NULL, 'patwiri@gmail.com', NULL, NULL, '2017-12-23 05:43:55', '2017-12-23 05:43:55', NULL),
(5, 'Yes', NULL, NULL, NULL, 'Yes', 'Yes', 'Bad', NULL, 'Physical drives', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-23 06:05:54', '2017-12-23 06:05:54', NULL),
(6, 'Yes', NULL, NULL, NULL, 'Yes', 'Yes', 'Bad', NULL, 'Physical drives', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-23 06:06:15', '2017-12-23 06:06:15', NULL),
(7, 'Yes', NULL, NULL, NULL, 'Yes', 'Yes', 'Bad', NULL, 'Physical drives', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-23 06:07:10', '2017-12-23 06:07:10', NULL),
(8, 'Yes', NULL, NULL, NULL, 'Yes', 'Yes', 'Bad', NULL, 'Physical drives', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-23 06:07:30', '2017-12-23 06:07:30', NULL),
(9, 'Yes', NULL, NULL, NULL, 'Yes', 'Yes', 'Excellent', NULL, 'Physical drives', NULL, 'Agree', 'Agree', 'Agree', 'Yes', NULL, 'patwiri@gmail.com', NULL, NULL, '2017-12-23 06:10:58', '2017-12-23 06:10:58', NULL),
(10, 'Yes', NULL, NULL, NULL, 'Yes', 'Yes', 'Excellent', NULL, 'Physical drives', NULL, 'Agree', 'Agree', 'Agree', 'Yes', NULL, 'patwiri@gmail.com', NULL, NULL, '2017-12-23 06:19:09', '2017-12-23 06:19:09', NULL),
(11, 'Yes', NULL, NULL, NULL, 'Yes', 'Yes', 'Excellent', NULL, 'Physical drives', NULL, 'Agree', 'Agree', 'Agree', 'Yes', NULL, 'patwiri@gmail.com', NULL, NULL, '2017-12-23 06:20:08', '2017-12-23 06:20:08', NULL),
(12, 'Yes', NULL, NULL, NULL, 'Yes', 'Yes', 'Excellent', NULL, 'Physical drives', NULL, 'Agree', 'Agree', 'Agree', 'Yes', NULL, 'patwiri@gmail.com', NULL, NULL, '2017-12-23 06:23:20', '2017-12-23 06:23:20', NULL),
(13, 'Yes', NULL, NULL, NULL, NULL, NULL, 'Excellent', NULL, 'Physical drives', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-23 06:23:48', '2017-12-23 06:23:48', NULL),
(14, 'Yes', NULL, NULL, NULL, NULL, NULL, 'Excellent', NULL, 'Physical drives', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-23 06:23:58', '2017-12-23 06:23:58', NULL),
(15, 'Yes', NULL, NULL, NULL, NULL, NULL, 'Excellent', NULL, 'Physical drives', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-23 06:35:29', '2017-12-23 06:35:29', NULL),
(16, 'Yes', NULL, NULL, NULL, 'Yes', 'Yes', 'Poor', NULL, 'Physical drives', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-23 06:36:16', '2017-12-23 06:36:16', NULL),
(17, 'Yes', NULL, NULL, NULL, 'Yes', 'Yes', 'Bad', NULL, 'Physical drives', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-23 06:37:08', '2017-12-23 06:37:08', NULL),
(18, 'Yes', NULL, NULL, NULL, NULL, NULL, 'Excellent', NULL, 'Physical drives', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-23 07:03:29', '2017-12-23 07:03:29', NULL),
(19, 'Yes', NULL, NULL, NULL, 'Yes', 'Yes', 'Excellent', NULL, 'Physical drives', NULL, 'Agree', 'Agree', 'Agree', 'Yes', '2017-12-28', 'patwiri@gmail.com', 'Yes', NULL, '2017-12-23 07:05:53', '2017-12-23 07:05:53', NULL),
(20, 'Yes', NULL, NULL, NULL, 'Yes', 'Yes', 'Excellent', NULL, 'Physical drives', NULL, 'Agree', 'Agree', 'Agree', 'Yes', '2017-12-28', 'patwiri@gmail.com', 'Yes', 'Do you give discounts?', '2017-12-23 07:14:56', '2017-12-23 07:14:56', NULL),
(21, 'No', 'No', 'Not Clients Number', NULL, 'Yes', 'Yes', 'Excellent', NULL, 'Physical drives', NULL, 'Agree', 'Agree', 'Agree', 'Yes', '2017-12-29', 'patwiri@gmail.com', 'Yes', 'can i have the office number?', '2017-12-23 07:34:30', '2017-12-23 07:34:30', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crmcalls`
--
ALTER TABLE `crmcalls`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crmcalls`
--
ALTER TABLE `crmcalls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
