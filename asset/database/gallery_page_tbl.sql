-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2023 at 10:05 AM
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
-- Table structure for table `gallery_page_tbl`
--

CREATE TABLE `gallery_page_tbl` (
  `gallery_page_id` int(11) NOT NULL,
  `caption` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at_varchar` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery_page_tbl`
--

INSERT INTO `gallery_page_tbl` (`gallery_page_id`, `caption`, `image`, `created_at_varchar`, `created_at`) VALUES
(8, 'Looking for a reliable printing service for your business needs? Look no further than our shop. Our high-quality prints are sure to make your business stand out, whether you need business cards, flyers, or brochures. Using the latest printing technology, we ensure that your prints are vibrant and crisp, and our printing experts can assist with design and layout to create a professional and eye-catching final product. Fast turnaround times and competitive pricing make us the go-to printing solution for businesses of all sizes. Trust us to handle all your printing needs with the utmost care and attention to detail.', '', 'Mar 03, 2023 03:33:44 PM', '2023-03-03 15:33:44'),
(10, '', '6401aa97899655.28756253.jpg', 'Mar 03, 2023 04:06:47 PM', '2023-03-03 16:06:47'),
(11, '', '6401aa9b43dff0.13231437.jpg', 'Mar 03, 2023 04:06:51 PM', '2023-03-03 16:06:51'),
(12, '', '6401aa9d79fd27.97937089.jpg', 'Mar 03, 2023 04:06:53 PM', '2023-03-03 16:06:53'),
(13, '', '6401aa9f9b4fc7.82034501.jpg', 'Mar 03, 2023 04:06:55 PM', '2023-03-03 16:06:55'),
(14, '', '6401aaa1de2406.91285324.jpg', 'Mar 03, 2023 04:06:57 PM', '2023-03-03 16:06:57'),
(15, '', '6401aaa43e7f24.35836009.jpg', 'Mar 03, 2023 04:07:00 PM', '2023-03-03 16:07:00'),
(16, '', '6401aaa8520f51.82207732.jpg', 'Mar 03, 2023 04:07:04 PM', '2023-03-03 16:07:04'),
(17, '', '6401aaaa827510.07452434.jpg', 'Mar 03, 2023 04:07:06 PM', '2023-03-03 16:07:06'),
(18, '', '6401aaadbc0513.86131870.jpg', 'Mar 03, 2023 04:07:09 PM', '2023-03-03 16:07:09'),
(19, '', '6401aab0addec1.01503950.jpg', 'Mar 03, 2023 04:07:12 PM', '2023-03-03 16:07:12'),
(20, '', '6401aab5464439.53154062.jpg', 'Mar 03, 2023 04:07:17 PM', '2023-03-03 16:07:17'),
(21, '', '6401aab92b74c9.77015741.jpg', 'Mar 03, 2023 04:07:21 PM', '2023-03-03 16:07:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gallery_page_tbl`
--
ALTER TABLE `gallery_page_tbl`
  ADD PRIMARY KEY (`gallery_page_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery_page_tbl`
--
ALTER TABLE `gallery_page_tbl`
  MODIFY `gallery_page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
