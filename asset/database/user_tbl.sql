-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2023 at 02:07 PM
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
  `phone_number` varchar(15) NOT NULL,
  `created_at_varchar` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`user_id`, `email`, `password`, `status`, `activate_code`, `activate_key`, `update_pass_key`, `role`, `first_name`, `last_name`, `phone_number`, `created_at_varchar`, `created_at`) VALUES
(1, 'aprhokwmdzvyczt@valanides.com', 'aprhokwmdzvyczt@valanides.com', NULL, 114425, '', '', 'user', '', '', '', 'Mar 20, 2023 06:41:00 PM', '2023-03-20 18:41:00'),
(2, 'lvncjfh@valanides.com', 'lvncjfh@valanides.com', NULL, 205624, '', '', 'user', '', '', '', 'Mar 20, 2023 06:41:55 PM', '2023-03-20 18:41:55'),
(3, 'vcedwcnictyvkbt@valanides.com', 'vcedwcnictyvkbt@valanides.com', NULL, 595266, '', '', 'user', '', '', '', 'Mar 20, 2023 06:44:04 PM', '2023-03-20 18:44:04'),
(4, 'goavugc@valanides.com', 'goavugc@valanides.com', 'activated', 709717, '', '', 'user', '', '', '', 'Mar 20, 2023 06:45:10 PM', '2023-03-20 18:45:10'),
(5, 'ynqhnscvpt@valanides.com', 'ynqhnscvpt@valanides.com', 'activated', 142297, '', '', 'user', '', '', '', 'Mar 20, 2023 06:49:44 PM', '2023-03-20 18:49:44'),
(6, 'llxalaj@valanides.com', 'llxalaj@valanides.com', 'activated', 458217, '', '', 'user', '', '', '', 'Mar 20, 2023 06:53:05 PM', '2023-03-20 18:53:05'),
(7, 'xdjcamphmex@valanides.com', 'xdjcamphmex@valanides.com', 'activated', 945493, '', 'iaztsnreulqkwmycvdhx', 'user', '', '', '', 'Mar 20, 2023 06:53:31 PM', '2023-03-20 18:53:31');

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
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
