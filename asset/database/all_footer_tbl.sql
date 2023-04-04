-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2023 at 02:36 PM
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
(3, '', '', 'https://www.instagram.com/g4_sticker_work/', '', '', '', 'Feb 27, 2023 08:14:40 PM', '2023-02-27 20:14:40'),
(4, '', '', '', 'g4kids2019@gmail.com', '', '', 'Feb 27, 2023 08:45:08 PM', '2023-02-27 20:45:08'),
(18, '', '', '', '', '09123456799', '', 'Feb 28, 2023 02:52:30 PM', '2023-02-28 14:52:30'),
(26, '', 'https://www.tiktok.com/@g4stickerwork/', '', '', '', '', 'Feb 28, 2023 06:34:27 PM', '2023-02-28 18:34:27'),
(42, '', '', '', '', '', 'Blk2 Lot7 Sarmiento Homes, Muzon, San Jose del Monte City, Bulacan, San Jose del Monte, Philippines 0932 350 8154', 'Mar 01, 2023 02:21:08 PM', '2023-03-01 14:21:08'),
(44, 'https://www.facebook.com/G4StickerWorks', '', '', '', '', '', 'Mar 03, 2023 01:12:18 PM', '2023-03-03 13:12:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_footer_tbl`
--
ALTER TABLE `all_footer_tbl`
  ADD PRIMARY KEY (`all_footer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_footer_tbl`
--
ALTER TABLE `all_footer_tbl`
  MODIFY `all_footer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
