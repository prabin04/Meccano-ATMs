-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2018 at 06:15 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meccano`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_info`
--

CREATE TABLE `account_info` (
  `account_id` int(123) NOT NULL,
  `user_id` int(123) NOT NULL,
  `account_no` varchar(255) NOT NULL,
  `account_type` varchar(255) NOT NULL,
  `balance` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account_info`
--

INSERT INTO `account_info` (`account_id`, `user_id`, `account_no`, `account_type`, `balance`) VALUES
(1, 1, '123456', 'saving', '7900');

-- --------------------------------------------------------

--
-- Table structure for table `pay_bill`
--

CREATE TABLE `pay_bill` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `account_no` int(11) NOT NULL,
  `kid` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pay_bill`
--

INSERT INTO `pay_bill` (`id`, `user_id`, `account_no`, `kid`, `amount`, `date`) VALUES
(1, 1, 1123654789, 123456, 500, '2018-11-06 00:00:00'),
(2, 1, 12346, 123456, 500, '2018-11-07 00:00:00'),
(3, 1, 12346, 123456, 500, '2018-11-07 00:00:00'),
(4, 1, 12346, 123456, 500, '2018-11-07 00:00:00'),
(5, 1, 12346, 123456, 500, '2018-11-07 00:00:00'),
(6, 1, 500, 1223456, 500, '2018-11-08 00:00:00'),
(7, 1, 123456, 123456, 500, '2018-11-08 00:00:00'),
(8, 1, 1597534682, 123456, 100, '2018-11-08 00:00:00'),
(9, 1, 10000000, 1000, 100, '2018-11-08 00:00:00'),
(10, 1, 123456789, 123456, 100, '2018-11-08 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `u_id` int(123) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `m_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `u_address` varchar(255) NOT NULL,
  `pin` int(123) NOT NULL,
  `phone` int(123) NOT NULL,
  `u_dob` date NOT NULL,
  `six_digits` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`u_id`, `f_name`, `m_name`, `l_name`, `u_address`, `pin`, `phone`, `u_dob`, `six_digits`) VALUES
(1, 'Prabin', '', 'Parajuli', 'Oslo', 1234, 12345678, '2018-11-30', 583308);

-- --------------------------------------------------------

--
-- Table structure for table `withdraw`
--

CREATE TABLE `withdraw` (
  `id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `withdraw`
--

INSERT INTO `withdraw` (`id`, `u_id`, `amount`, `date`) VALUES
(1, 1, 500, '2018-11-08'),
(2, 1, 500, '2018-11-08'),
(3, 1, 500, '2018-11-08'),
(4, 1, 500, '2018-11-08'),
(5, 1, 1000, '2018-11-08'),
(6, 1, 200, '2018-11-08'),
(7, 1, 200, '2018-11-08'),
(8, 1, 300, '2018-11-08'),
(9, 1, 200, '2018-11-08'),
(10, 1, 200, '2018-11-08'),
(11, 1, 100, '2018-11-08'),
(12, 1, 100, '2018-11-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_info`
--
ALTER TABLE `account_info`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `pay_bill`
--
ALTER TABLE `pay_bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `withdraw`
--
ALTER TABLE `withdraw`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_info`
--
ALTER TABLE `account_info`
  MODIFY `account_id` int(123) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pay_bill`
--
ALTER TABLE `pay_bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `u_id` int(123) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `withdraw`
--
ALTER TABLE `withdraw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
