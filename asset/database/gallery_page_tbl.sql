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
-- Table structure for table `gallery_page_tbl`
--

CREATE TABLE `gallery_page_tbl` (
  `gallery_page_id` int(11) NOT NULL,
  `caption` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at_varchar` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery_page_tbl`
--

INSERT INTO `gallery_page_tbl` (`gallery_page_id`, `caption`, `image`, `created_at_varchar`, `created_at`) VALUES
(1, 'Looking for a reliable printing service for your business needs? Look no further than our shop. Our high-quality prints are sure to make your business stand out, whether you need business cards, flyers, or brochures. Using the latest printing technology, we ensure that your prints are vibrant and crisp, and our printing experts can assist with design and layout to create a professional and eye-catching final product. Fast turnaround times and competitive pricing make us the go-to printing solution for businesses of all sizes. Trust us to handle all your printing needs with the utmost care and attention to detail.', '', 'Mar 09, 2023 08:50:15 PM', '2023-03-09 20:50:15'),
(2, '', '6409d69a12aa28.91234818.jpg', 'Mar 09, 2023 08:52:42 PM', '2023-03-09 20:52:42'),
(3, '', '6409d69c84e3a3.22065871.jpg', 'Mar 09, 2023 08:52:44 PM', '2023-03-09 20:52:44'),
(4, '', '6409d69edc6207.90923810.jpg', 'Mar 09, 2023 08:52:46 PM', '2023-03-09 20:52:46'),
(5, '', '6409d6a3c8e8f9.86121267.jpg', 'Mar 09, 2023 08:52:51 PM', '2023-03-09 20:52:51'),
(6, '', '6409d6a85bab01.61215956.jpg', 'Mar 09, 2023 08:52:56 PM', '2023-03-09 20:52:56'),
(7, '', '6409d6ab64f9a6.33413693.jpg', 'Mar 09, 2023 08:52:59 PM', '2023-03-09 20:52:59'),
(8, '', '6409d6b00aaac2.92059925.jpg', 'Mar 09, 2023 08:53:04 PM', '2023-03-09 20:53:04'),
(9, '', '6409d6b34fab63.37208418.jpg', 'Mar 09, 2023 08:53:07 PM', '2023-03-09 20:53:07'),
(10, '', '6409d6b6b597d1.88605119.jpg', 'Mar 09, 2023 08:53:10 PM', '2023-03-09 20:53:10'),
(11, '', '6409d6b9a91175.57908947.jpg', 'Mar 09, 2023 08:53:13 PM', '2023-03-09 20:53:13'),
(12, '', '6409d6bdbf1284.51036117.jpg', 'Mar 09, 2023 08:53:17 PM', '2023-03-09 20:53:17'),
(13, '', '6409d6c133f159.86693104.jpg', 'Mar 09, 2023 08:53:21 PM', '2023-03-09 20:53:21'),
(14, '', '6409d6c406f1e8.74615967.jpg', 'Mar 09, 2023 08:53:24 PM', '2023-03-09 20:53:24'),
(15, '', '6409d6d86afad4.26400008.jpg', 'Mar 09, 2023 08:53:44 PM', '2023-03-09 20:53:44'),
(16, '', '6409d6daca30e3.20640542.jpg', 'Mar 09, 2023 08:53:46 PM', '2023-03-09 20:53:46');

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
  MODIFY `gallery_page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
