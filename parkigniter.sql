-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 25, 2022 at 02:45 AM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parkigniter`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `currency` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `name`, `address`, `message`, `currency`) VALUES
(1, 'Công ty ABC', '54 Triều Khúc, Thanh Xuân, Hà Nội', '<blockquote>Chỗ này là nội dung cho vui</blockquote>', 'VND');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `group_name` varchar(255) NOT NULL,
  `permission` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `group_name`, `permission`) VALUES
(1, 'Administrator', 'a:28:{i:0;s:10:\"createUser\";i:1;s:10:\"updateUser\";i:2;s:8:\"viewUser\";i:3;s:10:\"deleteUser\";i:4;s:11:\"createGroup\";i:5;s:11:\"updateGroup\";i:6;s:9:\"viewGroup\";i:7;s:11:\"deleteGroup\";i:8;s:14:\"createCategory\";i:9;s:14:\"updateCategory\";i:10;s:12:\"viewCategory\";i:11;s:14:\"deleteCategory\";i:12;s:11:\"createRates\";i:13;s:11:\"updateRates\";i:14;s:9:\"viewRates\";i:15;s:11:\"deleteRates\";i:16;s:11:\"createSlots\";i:17;s:11:\"updateSlots\";i:18;s:9:\"viewSlots\";i:19;s:11:\"deleteSlots\";i:20;s:13:\"createParking\";i:21;s:13:\"updateParking\";i:22;s:11:\"viewParking\";i:23;s:13:\"deleteParking\";i:24;s:13:\"updateCompany\";i:25;s:13:\"updateSetting\";i:26;s:11:\"viewReports\";i:27;s:11:\"viewProfile\";}'),
(5, 'Nhân viên', 'a:7:{i:0;s:11:\"createSlots\";i:1;s:11:\"updateSlots\";i:2;s:9:\"viewSlots\";i:3;s:13:\"createParking\";i:4;s:13:\"updateParking\";i:5;s:11:\"viewParking\";i:6;s:11:\"viewProfile\";}'),
(6, 'Bảo vệ', 'a:3:{i:0;s:9:\"viewSlots\";i:1;s:11:\"viewParking\";i:2;s:11:\"viewProfile\";}'),
(7, 'Lao công', 'a:4:{i:0;s:11:\"updateSlots\";i:1;s:9:\"viewSlots\";i:2;s:11:\"viewParking\";i:3;s:11:\"viewProfile\";}');

-- --------------------------------------------------------

--
-- Table structure for table `parking`
--

CREATE TABLE `parking` (
  `id` int(11) NOT NULL,
  `parking_code` varchar(255) NOT NULL,
  `vechile_cat_id` int(11) NOT NULL,
  `rate_id` int(11) NOT NULL,
  `slot_id` int(11) NOT NULL,
  `in_time` varchar(255) NOT NULL,
  `out_time` varchar(255) NOT NULL,
  `total_time` varchar(255) NOT NULL,
  `earned_amount` varchar(255) NOT NULL,
  `paid_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `parking`
--

INSERT INTO `parking` (`id`, `parking_code`, `vechile_cat_id`, `rate_id`, `slot_id`, `in_time`, `out_time`, `total_time`, `earned_amount`, `paid_status`) VALUES
(19, 'CA-751395', 4, 9, 8, '1653420180', '', '', '', 0),
(20, 'CA-65451F', 5, 7, 12, '1653420287', '', '', '', 0),
(21, 'CA-64FD0A', 3, 10, 1, '1653420588', '1653420761', '1', '5000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE `rate` (
  `id` int(11) NOT NULL,
  `rate_name` varchar(255) NOT NULL,
  `vechile_cat_id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rate`
--

INSERT INTO `rate` (`id`, `rate_name`, `vechile_cat_id`, `type`, `rate`, `active`) VALUES
(7, 'Xe điện có trạm sạc', 5, 2, '50000', 1),
(8, 'Xe gắn máy', 3, 2, '2000', 1),
(9, 'Xe ô tô ngoài trời', 4, 1, '20000', 1),
(10, 'Xe gắn máy giờ cố định', 3, 1, '5000', 1),
(11, 'Xe ô tô có mái che theo giờ', 4, 2, '10000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `slots`
--

CREATE TABLE `slots` (
  `id` int(11) NOT NULL,
  `slot_name` varchar(255) NOT NULL,
  `active` int(11) NOT NULL,
  `availability_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slots`
--

INSERT INTO `slots` (`id`, `slot_name`, `active`, `availability_status`) VALUES
(1, 'TW1', 1, 1),
(3, 'B1', 2, 1),
(6, 'TW2', 1, 1),
(7, 'B2', 1, 1),
(8, 'B3', 1, 2),
(9, 'B4', 1, 1),
(10, 'SS8', 1, 1),
(11, 'B12', 1, 1),
(12, 'A1 có trạm sạc xe điện', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `gender` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `firstname`, `lastname`, `phone`, `gender`) VALUES
(1, 'admin', '$2y$10$7rLSvRVyTQORapkDOqmkhetjF6H9lJHngr4hJMSM2lHObJbW5EQh6', 'admin@gmail.com', 'PSCI', 'Administrator', '7854441014', 1),
(5, 'hoivu', '$2y$10$nIgnl1rWPX4E8kbeVNp8AuwsqXb4/c76QPvFweAncQ44wZEnyw0NO', 'hoivu@gmail.com', 'Vũ', 'Hội', '0123932348', 2),
(6, 'hoducanh', '$2y$10$nmzncQH9mV.eEckkQZyuRetkSzatcif8QPE7VduK4CscaMfHdqgQO', 'hoducanh@gmail.com', 'Đức Anh', 'Hồ', '0129347234', 1),
(7, 'thoanguyen', '$2y$10$gRgbuww8b1khYEfXBtn9IOwOsTpy786EJi2WEGfY6Vn8fNJqmeqW6', 'thoanguyen@gmail.com', 'Thoả', 'Nguyễn', '019234712', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_group`
--

CREATE TABLE `user_group` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_group`
--

INSERT INTO `user_group` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(3, 2, 4),
(4, 3, 4),
(5, 4, 5),
(6, 5, 5),
(7, 6, 6),
(8, 7, 7);

-- --------------------------------------------------------

--
-- Table structure for table `vechile_category`
--

CREATE TABLE `vechile_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vechile_category`
--

INSERT INTO `vechile_category` (`id`, `name`, `active`) VALUES
(3, 'Xe mô tô 2 bánh', 1),
(4, 'Xe ô tô ', 1),
(5, 'Xe ô tô điện', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parking`
--
ALTER TABLE `parking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slots`
--
ALTER TABLE `slots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_group`
--
ALTER TABLE `user_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vechile_category`
--
ALTER TABLE `vechile_category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `parking`
--
ALTER TABLE `parking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `rate`
--
ALTER TABLE `rate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `slots`
--
ALTER TABLE `slots`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_group`
--
ALTER TABLE `user_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `vechile_category`
--
ALTER TABLE `vechile_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
