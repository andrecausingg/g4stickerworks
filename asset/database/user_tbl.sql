-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2023 at 11:47 PM
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
-- Database: `g4_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `user_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(10) DEFAULT NULL,
  `activate_code` int(6) NOT NULL,
  `activate_key` varchar(255) NOT NULL,
  `update_pass_key` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL,
  `first_name` varchar(80) NOT NULL,
  `last_name` varchar(80) NOT NULL,
  `phone_number` int(15) NOT NULL,
  `created_at_varchar` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`user_id`, `email`, `password`, `status`, `activate_code`, `activate_key`, `update_pass_key`, `role`, `first_name`, `last_name`, `phone_number`, `created_at_varchar`, `created_at`) VALUES
(1, 'admin@gmail.com', 'admin@gmail.com', NULL, 0, '', '', 'admin', '', '', 0, 'Mar 09, 2023 08:56:07 PM', '2023-03-09 20:56:07'),
(2, 'rlsqbsyst@valanides.com', 'rlsqbsyst@valanides.com', NULL, 108756, '', '', '', '', '', 0, 'Mar 14, 2023 04:36:06 PM', '2023-03-14 16:36:06'),
(3, 'afjozbc@valanides.com', 'afjozbc@valanides.com', NULL, 538042, '', '', '', '', '', 0, 'Mar 14, 2023 04:39:33 PM', '2023-03-14 16:39:33'),
(4, 'bggtvfvqrh@valanides.com', 'bggtvfvqrh@valanides.com', 'activated', 417867, '', '', '', '', '', 0, 'Mar 14, 2023 05:16:04 PM', '2023-03-14 17:16:04'),
(7, 'bauclqugpxwpk@valanides.com', 'bauclqugpxwpk@valanides.com', NULL, 443163, '', '', 'user', '', '', 0, 'Mar 15, 2023 06:37:00 AM', '2023-03-15 06:37:00'),
(8, 'gkplvbt@valanides.com', 'gkplvbt@valanides.com', NULL, 352814, '', '', 'user', '', '', 0, 'Mar 15, 2023 06:42:46 AM', '2023-03-15 06:42:46'),
(9, 'dcxnreykjy@valanides.com', 'dcxnreykjy@valanides.com', NULL, 875248, '', '', 'user', '', '', 0, 'Mar 15, 2023 06:43:31 AM', '2023-03-15 06:43:31'),
(10, 'vdsltm@valanides.com', 'vdsltm@valanides.com', NULL, 782484, '', '', 'user', '', '', 0, 'Mar 15, 2023 06:44:31 AM', '2023-03-15 06:44:31'),
(11, 'cutbgvdpcklv@valanides.com', 'cutbgvdpcklv@valanides.com', NULL, 709652, '', '', 'user', '', '', 0, 'Mar 15, 2023 12:34:43 PM', '2023-03-15 12:34:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
