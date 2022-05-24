-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3305
-- Generation Time: Apr 06, 2022 at 07:05 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `law_firm`
--

-- --------------------------------------------------------

--
-- Table structure for table `case_`
--

CREATE TABLE `case_` (
  `case_id` int(11) NOT NULL,
  `status` varchar(40) DEFAULT NULL,
  `case_notes` varchar(1000) DEFAULT NULL,
  `no_of_hearings` int(11) DEFAULT NULL,
  `lawyer_id` int(11) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `fee` decimal(10,3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `case_`
--

INSERT INTO `case_` (`case_id`, `status`, `case_notes`, `no_of_hearings`, `lawyer_id`, `client_id`, `fee`) VALUES
(1, 'active', 'Involuntary manslaughter', 4, NULL, 1, '3000.000'),
(2, 'active', 'Accused of medical malpractice', 2, NULL, 4, '5006.000'),
(3, 'active', ' Murder charges agaibns defendant', 1, NULL, 5, '4000.000'),
(4, 'active', ' Defendant from ', 0, NULL, 4, '5000.000');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `client_id` int(11) NOT NULL,
  `first_name` varchar(40) DEFAULT NULL,
  `last_name` varchar(40) DEFAULT NULL,
  `door_no` int(11) DEFAULT NULL,
  `street_name` varchar(40) DEFAULT NULL,
  `contact` bigint(20) DEFAULT NULL,
  `client_password` varchar(40) DEFAULT NULL,
  `since` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_id`, `first_name`, `last_name`, `door_no`, `street_name`, `contact`, `client_password`, `since`) VALUES
(1, 'James', 'Albert', 67, 'Booth ave', 8978898910, 'pwdn', '1999-04-23'),
(2, 'Martin', 'Rodgers', 42, 'Cliff ave', 9812378231, 'pwd3', '2021-05-26'),
(3, 'Martha', 'Johnson', 45, 'East ave', 9123456789, 'pwd6', '2021-05-26'),
(4, 'Gregory', 'House', 13, 'Plainsboro ave', 8978898910, 'lupus', '1999-04-23'),
(5, 'Rachel', 'Brennen', 34, 'CCC', 9812378231, 'pwd8', '2021-05-27');

-- --------------------------------------------------------

--
-- Table structure for table `client_request`
--

CREATE TABLE `client_request` (
  `client_id` varchar(40) NOT NULL,
  `first_name` varchar(40) DEFAULT NULL,
  `last_name` varchar(40) DEFAULT NULL,
  `client_request_password` varchar(40) DEFAULT NULL,
  `street_name` varchar(40) DEFAULT NULL,
  `door_no` varchar(40) DEFAULT NULL,
  `contact` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `courts`
--

CREATE TABLE `courts` (
  `c_no` int(11) NOT NULL,
  `cheif_judge` varchar(40) DEFAULT NULL,
  `district` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courts`
--

INSERT INTO `courts` (`c_no`, `cheif_judge`, `district`) VALUES
(1, 'Rick Martin', 'City A');

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `case_id` int(11) NOT NULL,
  `document_id` int(11) NOT NULL,
  `document_name` varchar(40) DEFAULT NULL,
  `authenicity` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`case_id`, `document_id`, `document_name`, `authenicity`) VALUES
(1, 1, 'FIR', 'duplicate'),
(1, 2, 'FIR', 'duplicate'),
(1, 4, 'Bond', 'duplicate'),
(3, 3, 'Bond', 'original');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `employee_id` int(11) NOT NULL,
  `first_name` varchar(40) DEFAULT NULL,
  `last_name` varchar(40) DEFAULT NULL,
  `employee_password` varchar(40) DEFAULT NULL,
  `since` date DEFAULT NULL,
  `salary` decimal(10,3) DEFAULT NULL,
  `door_no` int(11) DEFAULT NULL,
  `street_name` varchar(50) DEFAULT NULL,
  `contact` bigint(20) DEFAULT NULL,
  `no_of_cases` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`employee_id`, `first_name`, `last_name`, `employee_password`, `since`, `salary`, `door_no`, `street_name`, `contact`, `no_of_cases`) VALUES
(3, 'Ricardo', 'Rodriguez', 'pwd6', '2021-05-27', '66000.000', 6, 'Medici', 9812543028, 0),
(4, 'Neil', 'Cormack', 'pwd6', '2021-05-28', '40000.000', 12, 'Medici', 9821345728, 0),
(5, 'prags', 'srini', 'pwd6', '2021-11-30', '10000.000', 89, 'Eguva kuravanka, ravindra nagar[8-9-3], Madanapall', 7013808505, 0),
(6, 'prags', 'srinivasan', 'prags', '2021-11-30', '10000.000', 89, 'Eguva kuravanka, ravindra nagar[8-9-3], Madanapall', 9490181973, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hearing`
--

CREATE TABLE `hearing` (
  `s_no` int(11) NOT NULL,
  `case_id` int(11) NOT NULL,
  `hearing_date` date DEFAULT NULL,
  `lawyer_id` int(11) DEFAULT NULL,
  `court` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hearing`
--

INSERT INTO `hearing` (`s_no`, `case_id`, `hearing_date`, `lawyer_id`, `court`) VALUES
(2, 1, '1999-04-01', NULL, 1),
(3, 2, '1999-04-02', NULL, 1),
(4, 2, '2020-12-12', NULL, 1),
(5, 1, '1978-04-01', NULL, 1),
(6, 1, '0000-00-00', NULL, 1),
(7, 3, '0000-00-00', NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `case_`
--
ALTER TABLE `case_`
  ADD PRIMARY KEY (`case_id`),
  ADD KEY `lawyer_id` (`lawyer_id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `client_request`
--
ALTER TABLE `client_request`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `courts`
--
ALTER TABLE `courts`
  ADD PRIMARY KEY (`c_no`);

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`case_id`,`document_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `hearing`
--
ALTER TABLE `hearing`
  ADD PRIMARY KEY (`s_no`,`case_id`),
  ADD KEY `lawyer_id` (`lawyer_id`),
  ADD KEY `court` (`court`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `case_`
--
ALTER TABLE `case_`
  ADD CONSTRAINT `case__ibfk_1` FOREIGN KEY (`lawyer_id`) REFERENCES `employees` (`employee_id`) ON DELETE SET NULL,
  ADD CONSTRAINT `case__ibfk_2` FOREIGN KEY (`client_id`) REFERENCES `clients` (`client_id`) ON DELETE SET NULL;

--
-- Constraints for table `hearing`
--
ALTER TABLE `hearing`
  ADD CONSTRAINT `hearing_ibfk_1` FOREIGN KEY (`lawyer_id`) REFERENCES `employees` (`employee_id`) ON DELETE SET NULL,
  ADD CONSTRAINT `hearing_ibfk_2` FOREIGN KEY (`court`) REFERENCES `courts` (`c_no`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
