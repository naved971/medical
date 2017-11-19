-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2017 at 05:50 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
(123, 'heart', 'danish123'),
(1234, 'brain', 'yasir219');

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
  `doc_special` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doc_reg`
--

INSERT INTO `doc_reg` (`doc_id`, `doc_pass`, `doc_name`, `doc_dob`, `doc_phoneno`, `doc_catid`, `doc_certificateno`, `doc_certificateimage_path`, `doc_zip`, `doc_education`, `doc_age`, `doc_address`, `doc_country`, `doc_email`, `doc_gender`, `doc_desc`, `doc_special`) VALUES
('dae', 'dae', 'daesw', '0000-00-00', '', 0, '', '', '', '', 0, '', '', '', 'Male', '', NULL),
('danish123', 'danish123', 'AHMAD DANISH KHAN', '1998-01-02', '8755984902', 0, '123456', 'kmlfek/fa/fkef', '110006', 'university of aligarh , AMU', 20, 'h;no-971,pai street,H.H.H, ballimaran,chandnichok,delhi-110006', 'india', 'danish21752@gmail.com', 'Male', 'jaefnijb', NULL),
('yasir219', 'whocares', 'MOHAMMAD YASIR', '1997-04-01', '9587456014', 0, '1254245', 'HJNVJDKHNT', '202002', 'MD', 20, 'ROOM NO.04,NADEEM TARIN HALL,AMU,ALIGARH-202002', 'INDIA', 'dsgryuguyf@gmail.com', 'Male', '', NULL),
('yasirrrr', '', 'yasiirri', '0000-00-00', '', 0, '', '', '', '', 0, 'oihoiiojoij', '', '', 'Male', '', NULL);

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
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(30) NOT NULL,
  `doc_id` varchar(30) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `msg` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
('', '', '', '0000-00-00', '', 'N', '', 0, '', 'Male'),
('ade', 'ade', 'ades', '0000-00-00', '', 'N', '', 0, '', 'Male'),
('danish1234', 'danish1234', 'AHMAD DANISH KHAN', '1998-01-02', '8755984902', NULL, 'acsjnoj', 20, 'danish21752@gmail.com', 'Male'),
('kamran', 'kamran', 'kammu', '0000-00-00', '', 'N', '', 0, '', 'Male');

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
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`hos_id`),
  ADD KEY `idx_hospital` (`doc_id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doc_id` (`doc_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `doc_catid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1235;
--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;
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

--
-- Constraints for table `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `logs_ibfk_1` FOREIGN KEY (`doc_id`) REFERENCES `doc_reg` (`doc_id`),
  ADD CONSTRAINT `logs_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user_reg` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
