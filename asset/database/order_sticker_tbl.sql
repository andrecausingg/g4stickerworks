-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2023 at 02:37 PM
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
-- Table structure for table `order_sticker_tbl`
--

CREATE TABLE `order_sticker_tbl` (
  `order_sticker_main_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_id_sticker` varchar(255) NOT NULL,
  `width` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `cover` varchar(20) NOT NULL,
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
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_sticker_tbl`
--

INSERT INTO `order_sticker_tbl` (`order_sticker_main_id`, `user_id`, `order_id_sticker`, `width`, `height`, `image`, `cover`, `message`, `quantity`, `total_price`, `page`, `status_order`, `deliver_method`, `reference_num`, `receipt`, `payment`, `created_at_varchar`, `created_at`) VALUES
(1, 1, 'G420230404083458PMPSTxlhmL816388', 1, 1, '642c19726c8fd2.32012261.png', 'YES', 'wew', 1, '10.00', 'NOTPAID', 'NOTPAID', '', '', '', 'NONE', 'Apr 04, 2023 08:34:58 PM', '2023-04-04 20:34:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_sticker_tbl`
--
ALTER TABLE `order_sticker_tbl`
  ADD PRIMARY KEY (`order_sticker_main_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_sticker_tbl`
--
ALTER TABLE `order_sticker_tbl`
  MODIFY `order_sticker_main_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
