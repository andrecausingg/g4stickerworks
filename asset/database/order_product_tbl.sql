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
-- Table structure for table `order_product_tbl`
--

CREATE TABLE `order_product_tbl` (
  `order_product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_id_product` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` decimal(65,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `page` varchar(20) NOT NULL,
  `status_order` varchar(20) NOT NULL,
  `deliver_method` varchar(20) NOT NULL,
  `reference_num` varchar(255) NOT NULL,
  `receipt` varchar(255) NOT NULL,
  `payment` varchar(20) NOT NULL,
  `created_at_varchar` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_product_tbl`
--

INSERT INTO `order_product_tbl` (`order_product_id`, `user_id`, `order_id_product`, `name`, `description`, `quantity`, `total_price`, `image`, `page`, `status_order`, `deliver_method`, `reference_num`, `receipt`, `payment`, `created_at_varchar`, `created_at`) VALUES
(1, 1, 'G420230404083429PMPSTPeJKX779472', 'mio', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos ab praesentium nesciunt id quasi sequi, temporibus assumenda, deserunt ipsam laudantium porro', 1, '4.00', '642c192fa0a438.48615047.png', 'NOTPAID', 'NOTPAID', '', '', '', 'NONE', 'Apr 04, 2023 08:34:29 PM', '2023-04-04 20:34:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_product_tbl`
--
ALTER TABLE `order_product_tbl`
  ADD PRIMARY KEY (`order_product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_product_tbl`
--
ALTER TABLE `order_product_tbl`
  MODIFY `order_product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
