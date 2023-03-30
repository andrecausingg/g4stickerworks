-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2023 at 11:40 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `g4_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `order_ready_to_print_tbl`
--

CREATE TABLE `order_ready_to_print_tbl` (
  `order_ready_to_print_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_id_ready_to_print` varchar(255) NOT NULL,
  `width` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` decimal(65,2) NOT NULL,
  `page` varchar(20) NOT NULL,
  `status_order` varchar(20) NOT NULL,
  `deliver_method` varchar(20) NOT NULL,
  `reference_num` varchar(255) NOT NULL,
  `receipt` varchar(255) NOT NULL,
  `payment` varchar(20) NOT NULL,
  `created_at_varchar` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_ready_to_print_tbl`
--
ALTER TABLE `order_ready_to_print_tbl`
  ADD PRIMARY KEY (`order_ready_to_print_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_ready_to_print_tbl`
--
ALTER TABLE `order_ready_to_print_tbl`
  MODIFY `order_ready_to_print_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
