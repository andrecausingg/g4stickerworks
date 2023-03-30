-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2023 at 07:22 AM
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
-- Table structure for table `contact_us_page_tbl`
--

CREATE TABLE `contact_us_page_tbl` (
  `contact_us_page_id` int(11) NOT NULL,
  `sub_title` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at_varchar` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us_page_tbl`
--

INSERT INTO `contact_us_page_tbl` (`contact_us_page_id`, `sub_title`, `image`, `created_at_varchar`, `created_at`) VALUES
(1, 'At our company, we value communication and are always eager to hear from our clients. Whether you have questions about our services, need a quote, or just want to say hello, we encourage you to get in touch. You can reach us by phone, email, or through our Social Media Pages. Our friendly and knowledgeable team is available to assist you with any inquiries you may have, and we strive to respond to all messages as quickly as possible. We look forward to hearing from you and working together to achieve your goals. Contact us today and let us start a conversation!', '', 'Mar 09, 2023 08:51:06 PM', '2023-03-09 20:51:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us_page_tbl`
--
ALTER TABLE `contact_us_page_tbl`
  ADD PRIMARY KEY (`contact_us_page_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us_page_tbl`
--
ALTER TABLE `contact_us_page_tbl`
  MODIFY `contact_us_page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
