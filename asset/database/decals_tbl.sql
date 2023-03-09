-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2023 at 01:59 PM
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
-- Table structure for table `decals_tbl`
--

CREATE TABLE `decals_tbl` (
  `decals_id` int(11) NOT NULL,
  `decals_type` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at_varchar` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `decals_tbl`
--

INSERT INTO `decals_tbl` (`decals_id`, `decals_type`, `brand`, `model`, `image`, `created_at_varchar`, `created_at`) VALUES
(1, 'Full Decals', 'Yamaha', 'Yamaha Mio i 125', '6406bb8f10bea3.78795006.png', 'Mar 07, 2023 12:20:31 PM', '2023-03-07 12:20:31'),
(2, 'Full Decals', 'Yamaha', 'Yamaha Mio i 125', '6406bb977298c9.18335667.png', 'Mar 07, 2023 12:20:39 PM', '2023-03-07 12:20:39'),
(3, 'Full Decals', 'Yamaha', 'Yamaha Mio i 125', '6406bb9dec8492.53467059.png', 'Mar 07, 2023 12:20:45 PM', '2023-03-07 12:20:45'),
(4, 'Full Decals', 'Yamaha', 'Yamaha Mio i 125', '6406bba89781a3.92569797.png', 'Mar 07, 2023 12:20:56 PM', '2023-03-07 12:20:56'),
(5, 'Stock Decals', 'Honda', 'Honda BeAT', '6406c9b1705bb0.98756266.png', 'Mar 07, 2023 01:20:49 PM', '2023-03-07 13:20:49'),
(6, 'Stock Decals', 'Yamaha', 'Yamaha Tracer 900', '6406c9be111850.36106499.png', 'Mar 07, 2023 01:21:02 PM', '2023-03-07 13:21:02'),
(7, 'Stock Decals', 'Honda', 'Honda TMX125 Alpha', '6406c9c6626cd0.30072475.png', 'Mar 07, 2023 01:21:10 PM', '2023-03-07 13:21:10'),
(8, 'Stock Decals', 'Suzuki Philippines', 'Suzuki GSX-S750', '6406c9d3492310.34241827.png', 'Mar 07, 2023 01:21:23 PM', '2023-03-07 13:21:23'),
(9, 'Full Decals', 'Honda', 'Honda BeAT', '6409d716cdca15.32704372.png', 'Mar 09, 2023 08:54:46 PM', '2023-03-09 20:54:46'),
(10, 'Full Decals', 'Honda', 'Honda Click', '6409d71c9a5fa5.78445877.png', 'Mar 09, 2023 08:54:52 PM', '2023-03-09 20:54:52'),
(11, 'Full Decals', 'Honda', 'Honda Genio', '6409d723531f13.61018914.png', 'Mar 09, 2023 08:54:59 PM', '2023-03-09 20:54:59'),
(12, 'Full Decals', 'Honda', 'Honda PCX', '6409d7299d6c36.23381233.png', 'Mar 09, 2023 08:55:05 PM', '2023-03-09 20:55:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `decals_tbl`
--
ALTER TABLE `decals_tbl`
  ADD PRIMARY KEY (`decals_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `decals_tbl`
--
ALTER TABLE `decals_tbl`
  MODIFY `decals_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
