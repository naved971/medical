-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2017 at 02:46 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appointment_id` int(11) NOT NULL,
  `user_id` varchar(30) DEFAULT NULL,
  `doc_id` varchar(30) DEFAULT NULL,
  `date_info` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ar_internal_metadata`
--

CREATE TABLE `ar_internal_metadata` (
  `key` varchar(255) NOT NULL,
  `value` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ar_internal_metadata`
--

INSERT INTO `ar_internal_metadata` (`key`, `value`, `created_at`, `updated_at`) VALUES
('environment', 'development', '2017-07-29 20:31:54', '2017-07-29 20:31:54');

-- --------------------------------------------------------

--
-- Table structure for table `doc_cat`
--

CREATE TABLE `doc_cat` (
  `doc_catid` int(11) NOT NULL,
  `doc_cat` varchar(500) DEFAULT NULL,
  `doc_id` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doc_cat`
--

INSERT INTO `doc_cat` (`doc_catid`, `doc_cat`, `doc_id`) VALUES
(1, 'Heart', 'danish123'),
(2, 'GABC', 'yasirrrr');

-- --------------------------------------------------------

--
-- Table structure for table `doc_reg`
--

CREATE TABLE `doc_reg` (
  `doc_id` varchar(30) NOT NULL,
  `doc_pass` varchar(30) DEFAULT NULL,
  `doc_name` varchar(40) DEFAULT NULL,
  `doc_dob` date DEFAULT NULL,
  `doc_phoneno` varchar(10) DEFAULT NULL,
  `doc_catid` int(11) DEFAULT NULL,
  `doc_certificateno` varchar(40) DEFAULT NULL,
  `doc_certificateimage_path` varchar(500) DEFAULT NULL,
  `doc_zip` varchar(100) DEFAULT NULL,
  `doc_education` varchar(500) DEFAULT NULL,
  `doc_age` int(11) DEFAULT NULL,
  `doc_address` varchar(100) DEFAULT NULL,
  `doc_country` char(20) DEFAULT NULL,
  `doc_email` varchar(50) DEFAULT NULL,
  `doc_gender` char(20) DEFAULT NULL,
  `doc_desc` varchar(500) DEFAULT NULL,
  `doc_special` varchar(200) DEFAULT NULL,
  `doc_location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doc_reg`
--

INSERT INTO `doc_reg` (`doc_id`, `doc_pass`, `doc_name`, `doc_dob`, `doc_phoneno`, `doc_catid`, `doc_certificateno`, `doc_certificateimage_path`, `doc_zip`, `doc_education`, `doc_age`, `doc_address`, `doc_country`, `doc_email`, `doc_gender`, `doc_desc`, `doc_special`, `doc_location`) VALUES
('1', '', 'A1', '0000-00-00', '991', 1, '', '', '', '', 0, '', '', '', 'Male', '', NULL, 'New Delhi'),
('2', '', 'B2', '0000-00-00', '992', 2, '', '', '', '', 0, '', '', '', 'Male', '', NULL, 'Delhi'),
('3', 'be', 'C3', '0000-00-00', '993', 1, '', '', '', '', 0, '', '', '', 'Male', '', NULL, 'Ajmer'),
('5', '', 'D4', '0000-00-00', '994', 1, '', '', '', '', 0, '', '', '', 'Male', '', NULL, 'Aligarh'),
('7', '', 'D5', '0000-00-00', '995', 1, '', '', '', '', 0, '', '', '', 'Male', '', NULL, 'New Delhi'),
('danish123', 'danish123', 'Ahmed Danish Khan', '1998-01-02', '8755984902', 2, '123456', 'kmlfek/fa/fkef', '110006', 'university of aligarh , AMU', 20, 'h;no-971,pai street,H.H.H, ballimaran,chandnichok,delhi-110006', 'india', 'danish21752@gmail.com', 'Male', 'jaefnijb', NULL, 'Aligarh'),
('yasirrrr', '', 'yasiirri', '0000-00-00', '996', 1, '', '', '', '', 0, 'oihoiiojoij', '', '', 'Male', '', NULL, 'New Delhi');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `empid` int(10) NOT NULL,
  `empname` text NOT NULL,
  `empsal` int(11) NOT NULL,
  `emp_add` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`empid`, `empname`, `empsal`, `emp_add`) VALUES
(2, 'ronish', 200, ''),
(3, 'inaya', 300, ''),
(4, 'amin', 400, ''),
(1, 'naved', 100, '');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'a', '2', '2017-07-30 07:57:46', '2017-07-30 07:57:46');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `hos_id` int(11) NOT NULL,
  `hos_name` varchar(100) DEFAULT NULL,
  `hos_address` varchar(100) DEFAULT NULL,
  `hos_contact` varchar(20) DEFAULT NULL,
  `doc_id` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `schema_migrations`
--

CREATE TABLE `schema_migrations` (
  `version` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schema_migrations`
--

INSERT INTO `schema_migrations` (`version`) VALUES
('20170729202426');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`) VALUES
(12, 'Hello'),
(101, 'Danish'),
(101, 'Danish');

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE `user_reg` (
  `user_id` varchar(30) NOT NULL,
  `user_pass` varchar(30) NOT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `user_dob` date DEFAULT NULL,
  `user_phone` varchar(20) DEFAULT NULL,
  `user_maritual_status` varchar(1) DEFAULT NULL,
  `user_desc` varchar(500) DEFAULT NULL,
  `user_age` int(11) DEFAULT NULL,
  `user_email` varchar(30) DEFAULT NULL,
  `user_gender` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`user_id`, `user_pass`, `user_name`, `user_dob`, `user_phone`, `user_maritual_status`, `user_desc`, `user_age`, `user_email`, `user_gender`) VALUES
('1', '222', 'sds', '0000-00-00', 'jkhn', 'N', 'huyuh', 21, 'htfhtgch', 'Male'),
('danish1234', 'danish1234', 'AHMAD DANISH KHAN', '1998-01-02', '8755984902', NULL, 'acsjnoj', 20, 'danish21752@gmail.com', 'Male'),
('esvgwg', 'gwrg', 'bw', '0000-00-00', '', NULL, '', 0, '', 'Male'),
('kamran', 'kamran', 'kammu', '0000-00-00', '', 'N', '', 0, '', 'Male'),
('mayank', 'mayank', 'my sahara', '0000-00-00', '', 'N', '', 30, '', 'Male'),
('minhajbro', 'minhaj123', 'bro', '0000-00-00', '', 'N', '', 12, '', 'Male'),
('rishaddd', 'rishadd123', 'rished', '2017-10-02', '187631', 'M', '', 30, 'djaj@gmial', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointment_id`),
  ADD KEY `idx_appointment` (`user_id`),
  ADD KEY `idx_appointment_0` (`doc_id`);

--
-- Indexes for table `ar_internal_metadata`
--
ALTER TABLE `ar_internal_metadata`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `doc_cat`
--
ALTER TABLE `doc_cat`
  ADD PRIMARY KEY (`doc_catid`),
  ADD KEY `idx_doc_cat` (`doc_id`);

--
-- Indexes for table `doc_reg`
--
ALTER TABLE `doc_reg`
  ADD PRIMARY KEY (`doc_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`hos_id`),
  ADD KEY `idx_hospital` (`doc_id`);

--
-- Indexes for table `schema_migrations`
--
ALTER TABLE `schema_migrations`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `user_reg`
--
ALTER TABLE `user_reg`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `doc_cat`
--
ALTER TABLE `doc_cat`
  MODIFY `doc_catid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `fk_appointment_doc_reg` FOREIGN KEY (`doc_id`) REFERENCES `doc_reg` (`doc_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_appointment_user_reg` FOREIGN KEY (`user_id`) REFERENCES `user_reg` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `doc_cat`
--
ALTER TABLE `doc_cat`
  ADD CONSTRAINT `fk_doc_cat_doc_reg` FOREIGN KEY (`doc_id`) REFERENCES `doc_reg` (`doc_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `hospital`
--
ALTER TABLE `hospital`
  ADD CONSTRAINT `fk_hospital_doc_reg` FOREIGN KEY (`doc_id`) REFERENCES `doc_reg` (`doc_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
