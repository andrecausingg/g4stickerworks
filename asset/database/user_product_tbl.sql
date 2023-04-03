-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2023 at 08:23 AM
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
(1, 'mio', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci culpa doloribus eum sed, veniam amet reprehenderit ea voluptatibus iste voluptatem, similique nobis mollitia, architecto quidem? Et temporibus vel itaque magni!', '1.00', '642989e6d4e8f6.00200135.png', 'Apr 02, 2023 09:57:58 PM', '2023-04-02 21:57:58'),
(2, 'mio', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci culpa doloribus eum sed, veniam amet reprehenderit ea voluptatibus iste voluptatem, similique nobis mollitia, architecto quidem? Et temporibus vel itaque magni!', '2.00', '642989ef1083c5.71221118.png', 'Apr 02, 2023 09:58:07 PM', '2023-04-02 21:58:07'),
(3, 'mio', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci culpa doloribus eum sed, veniam amet reprehenderit ea voluptatibus iste voluptatem, similique nobis mollitia, architecto quidem? Et temporibus vel itaque magni!', '3.00', '642989f6cecaf7.47745958.png', 'Apr 02, 2023 09:58:14 PM', '2023-04-02 21:58:14'),
(4, 'mio', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci culpa doloribus eum sed, veniam amet reprehenderit ea voluptatibus iste voluptatem, similique nobis mollitia, architecto quidem? Et temporibus vel itaque magni!', '4.00', '642989ff36c1e7.67969614.png', 'Apr 02, 2023 09:58:23 PM', '2023-04-02 21:58:23');

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
