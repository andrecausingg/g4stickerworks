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
-- Table structure for table `user_product_tbl`
--

CREATE TABLE `user_product_tbl` (
  `user_product_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(65,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at_varchar` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_product_tbl`
--

INSERT INTO `user_product_tbl` (`user_product_id`, `name`, `description`, `price`, `image`, `created_at_varchar`, `created_at`) VALUES
(1, 'mio', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos ab praesentium nesciunt id quasi sequi, temporibus assumenda, deserunt ipsam laudantium porro', '1.00', '642c191b334170.52524552.png', 'Apr 04, 2023 08:33:31 PM', '2023-04-04 20:33:31'),
(2, 'mio1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos ab praesentium nesciunt id quasi sequi, temporibus assumenda, deserunt ipsam laudantium porro', '2.00', '642c1923a2cf28.81839107.png', 'Apr 04, 2023 08:33:39 PM', '2023-04-04 20:33:39'),
(3, 'mio', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos ab praesentium nesciunt id quasi sequi, temporibus assumenda, deserunt ipsam laudantium porro', '3.00', '642c1929b75fa2.29920589.png', 'Apr 04, 2023 08:33:45 PM', '2023-04-04 20:33:45'),
(4, 'mio', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos ab praesentium nesciunt id quasi sequi, temporibus assumenda, deserunt ipsam laudantium porro', '4.00', '642c192fa0a438.48615047.png', 'Apr 04, 2023 08:33:51 PM', '2023-04-04 20:33:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_product_tbl`
--
ALTER TABLE `user_product_tbl`
  ADD PRIMARY KEY (`user_product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_product_tbl`
--
ALTER TABLE `user_product_tbl`
  MODIFY `user_product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
