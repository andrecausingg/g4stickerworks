-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2023 at 12:49 PM
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
-- Table structure for table `all_footer_tbl`
--

CREATE TABLE `all_footer_tbl` (
  `all_footer_id` int(11) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `tiktok` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cellphone_num` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at_varchar` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all_footer_tbl`
--

INSERT INTO `all_footer_tbl` (`all_footer_id`, `facebook`, `tiktok`, `instagram`, `email`, `cellphone_num`, `address`, `created_at_varchar`, `created_at`) VALUES
(3, '', '', 'https://www.instagram.com/g4_sticker_works/', '', '', '', 'Feb 27, 2023 08:14:40 PM', '2023-02-27 20:14:40'),
(4, '', '', '', 'g4kids2019@gmail.com', '', '', 'Feb 27, 2023 08:45:08 PM', '2023-02-27 20:45:08'),
(17, '', '', '', '', '', 'Blk2 Lot7 Sarmiento Homes, Muzon, San Jose del Monte City, Bulacan, San Jose del Monte, Philippines 0932 350 8154', 'Feb 28, 2023 02:52:15 PM', '2023-02-28 14:52:15'),
(18, '', '', '', '', '09123456789', '', 'Feb 28, 2023 02:52:30 PM', '2023-02-28 14:52:30'),
(25, 'https://web.facebook.com/G4StickerWorks/', '', '', '', '', '', 'Feb 28, 2023 06:19:36 PM', '2023-02-28 18:19:36'),
(26, '', 'https://www.tiktok.com/@g4stickerworks', '', '', '', '', 'Feb 28, 2023 06:34:27 PM', '2023-02-28 18:34:27');

-- --------------------------------------------------------

--
-- Table structure for table `cut_file_tbl`
--

CREATE TABLE `cut_file_tbl` (
  `cut_file_id` int(11) NOT NULL,
  `job_name` varchar(255) NOT NULL,
  `job_no` int(11) NOT NULL,
  `date_time_varchar` varchar(255) NOT NULL,
  `date_time` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cut_file_tbl`
--

INSERT INTO `cut_file_tbl` (`cut_file_id`, `job_name`, `job_no`, `date_time_varchar`, `date_time`) VALUES
(8, 'eagle', 1, 'Feb 25, 2023 03:54:40 PM', '2023-02-25 15:54:40'),
(9, 'asda', 1, 'Feb 25, 2023 03:54:42 PM', '2023-02-25 15:54:42'),
(10, 'xfvcas', 1, 'Feb 25, 2023 03:54:44 PM', '2023-02-25 15:54:44'),
(11, 'axaswr', 1, 'Feb 26, 2023 09:43:52 PM', '2023-02-26 21:43:52');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `user_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL,
  `created_at_varchar` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`user_id`, `email`, `password`, `role`, `created_at_varchar`, `created_at`) VALUES
(16, 'a@gmail.com', 'asdasdasdasda', 'admin', 'Feb 25, 2023 05:35:51 PM', '2023-02-25 17:35:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_footer_tbl`
--
ALTER TABLE `all_footer_tbl`
  ADD PRIMARY KEY (`all_footer_id`);

--
-- Indexes for table `cut_file_tbl`
--
ALTER TABLE `cut_file_tbl`
  ADD PRIMARY KEY (`cut_file_id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_footer_tbl`
--
ALTER TABLE `all_footer_tbl`
  MODIFY `all_footer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `cut_file_tbl`
--
ALTER TABLE `cut_file_tbl`
  MODIFY `cut_file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
