-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2023 at 11:42 AM
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
-- Table structure for table `about_us_page_tbl`
--

CREATE TABLE `about_us_page_tbl` (
  `about_us_page_id` int(11) NOT NULL,
  `sub_title` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at_varchar` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_us_page_tbl`
--

INSERT INTO `about_us_page_tbl` (`about_us_page_id`, `sub_title`, `image`, `created_at_varchar`, `created_at`) VALUES
(1, 'Our printing service specializes in providing high-quality printing solutions for businesses of all sizes. With state-of-the-art printing technology and a team of experienced professionals, we offer a wide range of printing services including flyers, brochures, business cards, and more. We are committed to delivering exceptional results on time and within budget, and we pride ourselves on our attention to detail and personalized customer service. Whether you need a small print run or a large-scale project, we are here to help you achieve your printing goals.', '', 'Mar 09, 2023 08:50:43 PM', '2023-03-09 20:50:43'),
(2, '', '6409d6f270ec98.69372437.jpg', 'Mar 09, 2023 08:54:10 PM', '2023-03-09 20:54:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us_page_tbl`
--
ALTER TABLE `about_us_page_tbl`
  ADD PRIMARY KEY (`about_us_page_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us_page_tbl`
--
ALTER TABLE `about_us_page_tbl`
  MODIFY `about_us_page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
