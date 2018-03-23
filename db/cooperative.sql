-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2018 at 02:54 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cooperative`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(300) NOT NULL,
  `account_type` varchar(50) NOT NULL,
  `date_created` varchar(100) NOT NULL,
  `created_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `account_type`, `date_created`, `created_by`) VALUES
(12, 'Cooperative', '$2y$10$z6FEETw1gx0AVj.4kJOWXeDQs/RRDJf1pWEFJr3C9UUeAXek7mlIm', 'Admin', '2018-03-09 08:39:37 am', 'Cooperative Company'),
(13, 'hello', '$2y$10$RPRk06q1dJ.yrwFtLoAPge2KbBeKuNqSix7N0lCRTB/u7vEqVx4uu', '', '2018-03-20 11:26:06 pm', 'Cooperative Company');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `date_time` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `creator` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `date_time`, `category`, `creator`) VALUES
(1, '2018-03-23 08:43:58 am', 'qwertyuiop', 'Cooperative Company'),
(2, '2018-03-23 08:44:03 am', 'asdfghjkl', 'Cooperative Company');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(300) NOT NULL,
  `date_created` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `first_name`, `last_name`, `email`, `phone`, `address`, `username`, `password`, `date_created`) VALUES
(1, 'Lyleee', 'qwertyuiop', 'q@gmail.com', 0, '', 'qwertyuiop', '$2y$10$h13nuK28698rAJq/O6pGsu2pUmriTPOkIJ2PM1kFgDNnxDmz5jvTC', '2018-03-22 09:38:20 pm'),
(2, 'qwertyuiop', 'qwertyuiop', 'a@gmail.com', 0, '', 'asdfghjkl', '$2y$10$DvTas60TcXSrwuQ0DfOZ0.ovEaGnUGZfYlpcIQ2matP71y5LeurlS', '2018-03-23 09:17:34 am');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `date_time` varchar(50) NOT NULL,
  `creator` varchar(50) NOT NULL,
  `quantities` int(11) NOT NULL,
  `price` double NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `category`, `description`, `date_time`, `creator`, `quantities`, `price`, `status`) VALUES
(12, 'qwert', 'qwertyuiop', 'qwert', '2018-03-21 10:55:18 pm', 'Cooperative Company', 500, 100, 'Disposal'),
(13, 'qwertyuiop', 'qwertyuiop', 'qwertyuio', '2018-03-23 08:44:18 am', 'Cooperative Company', 900, 300, 'Available'),
(14, 'qweryuio', 'qwertyuiop', 'rsetghij', '2018-03-23 08:48:53 am', 'Cooperative Company', 0, 89, 'Available'),
(15, 'asdfghjkl', 'qwertyuiop', 'asdfghjkl', '2018-03-23 09:50:02 am', 'Cooperative Company', 444, 44, 'Available'),
(16, 'venjie', 'qwertyuiop', 'lalaki', '2018-03-23 09:51:33 am', 'Cooperative Company', 0, 123, 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `sale_id` int(11) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `item_id` varchar(100) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `item_price` double NOT NULL,
  `quantity` double NOT NULL,
  `sub_total` double NOT NULL,
  `date` varchar(50) NOT NULL,
  `month` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `week` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `sale_id`, `date_time`, `item_id`, `item_name`, `item_price`, `quantity`, `sub_total`, `date`, `month`, `year`, `week`) VALUES
(2, 393411928, '2018-03-09 10:23:51', '2', 'Titanic Gel', 80, 90, 7200, '2018-03-09', '03', '2018', '10'),
(3, 878574100, '2018-03-23 02:12:34', '12', 'qwert', 0, 5, 0, '2018-03-23', '03', '2018', '12'),
(4, 1962966407, '2018-03-23 02:37:06', '12', 'qwert', 0, 44, 0, '2018-03-23', '03', '2018', '12'),
(5, 241696246, '2018-03-23 08:52:26', '12', 'qwert', 0, 66, 0, '2018-03-23', '03', '2018', '12'),
(6, 1484807771, '2018-03-23 09:23:54', '13', 'qwertyuiop', 0, 1, 0, '2018-03-23', '03', '2018', '12'),
(7, 1871512585, '2018-03-23 09:27:45', '13', 'qwertyuiop', 0, 2, 0, '2018-03-23', '03', '2018', '12'),
(8, 2109944941, '2018-03-23 09:36:48', '13', 'qwertyuiop', 0, 1, 0, '2018-03-23', '03', '2018', '12');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `status_name` varchar(10) NOT NULL,
  `status_description` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `status_name`, `status_description`) VALUES
(1, 'Available', ''),
(2, 'Disposal', '');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(20) NOT NULL,
  `supplier_name` varchar(30) NOT NULL,
  `product` varchar(30) NOT NULL,
  `supplier_location` varchar(30) NOT NULL,
  `contact` int(11) NOT NULL,
  `date_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `supplier_name`, `product`, `supplier_location`, `contact`, `date_time`) VALUES
(4, 'asdfghj', 'rfgh', 'edfghjkm', 3546678, 2018);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
