-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2022 at 01:53 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ocms`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_stock`
--

CREATE TABLE `add_stock` (
  `id` int(11) NOT NULL,
  `water_capacity` int(100) NOT NULL,
  `working_pressure` int(100) NOT NULL,
  `oxygen_purity` int(100) NOT NULL,
  `gas_name` varchar(100) NOT NULL,
  `material` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `height` int(100) NOT NULL,
  `gas_type` varchar(100) NOT NULL,
  `photos` text CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `quantity` int(100) NOT NULL,
  `price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_stock`
--

INSERT INTO `add_stock` (`id`, `water_capacity`, `working_pressure`, `oxygen_purity`, `gas_name`, `material`, `country`, `height`, `gas_type`, `photos`, `quantity`, `price`) VALUES
(20, 5, 10, 90, 'os', 'steel', 'indin', 100, 'built', 'cylinder1.jpg', 50, 250),
(21, 5, 10, 90, 'apollo', 'steel', 'indin', 100, 'built', 'cylinder2.jpg', 100, 500),
(22, 5, 10, 90, 'shine', 'steel', 'indin', 100, 'built', 'cylinder3.jpg', 40, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `mobile`, `msg`) VALUES
(1, 'XYZ', 'XYZ@gmail.com', '1234567790', 'then better then most of ghostt uoer'),
(2, 'ABC', 'abc@gmail.com', '9654525225', 'this product is most using package is my new jounral then using procduct of new line of numeric about alll function then canteen mangmennt systeam');

-- --------------------------------------------------------

--
-- Table structure for table `horder`
--

CREATE TABLE `horder` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `address` varchar(250) NOT NULL,
  `quantity` int(10) NOT NULL,
  `hid` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `horder`
--

INSERT INTO `horder` (`id`, `name`, `email`, `mobile`, `address`, `quantity`, `hid`) VALUES
(1, 'hospital', 'hospital@gmail.com', '5896994655', 'rajkot', 2, 20);

-- --------------------------------------------------------

--
-- Table structure for table `hospital_register`
--

CREATE TABLE `hospital_register` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `pin` int(6) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital_register`
--

INSERT INTO `hospital_register` (`id`, `name`, `email`, `mobile`, `address`, `pin`, `password`) VALUES
(1, 'hospital', 'hospital@gmail.com', '8855668885', 'rajkot', 22222, '1234');
-- --------------------------------------------------------

--
-- Table structure for table `os_register`
--

CREATE TABLE `os_register` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` int(30) NOT NULL,
  `address` varchar(60) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `os_register`
--

INSERT INTO `os_register` (`id`, `name`, `email`, `mobile`, `address`, `password`) VALUES
(1, 'supplier', 'os@gmail.com', 1234567890, 'hvc', '1234');
-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` int(10) NOT NULL,
  `address` varchar(60) NOT NULL,
  `pin` int(6) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `mobile`, `address`, `pin`, `password`) VALUES
(1, 'user', 'user@gmail.com', 1253665888, 'user address', 362510, 'user123');

-- --------------------------------------------------------

--
-- Table structure for table `uorders`
--

CREATE TABLE `uorders` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `address` varchar(250) NOT NULL,
  `quantity` int(10) NOT NULL,
  `oid` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uorders`
--

INSERT INTO `uorders` (`id`, `name`, `email`, `mobile`, `address`, `quantity`, `oid`) VALUES
(1, 'user', 'user1@gmail.com', '8584568555', 'rjkt', 1, 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_stock`
--
ALTER TABLE `add_stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `horder`
--
ALTER TABLE `horder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital_register`
--
ALTER TABLE `hospital_register`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`,`email`,`mobile`,`password`);

--
-- Indexes for table `os_register`
--
ALTER TABLE `os_register`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `email` (`email`,`mobile`,`password`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`),
  ADD UNIQUE KEY `password` (`password`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `uorders`
--
ALTER TABLE `uorders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_stock`
--
ALTER TABLE `add_stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `hospital_register`
--
ALTER TABLE `hospital_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `os_register`
--
ALTER TABLE `os_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
