-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2023 at 01:07 AM
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
(1, 'Gabriel 4 Sticker Shop (G4 Sticker Works) is a printing and installation business which caters any type of sticker and tarpaulin needs of clients for personal or business purpose. Our 6 years of experience has enabled us to provide the best possible designing , printing and installation where we focus to quality resulting in satisfied client and have lasting business relationships. The foundation of our business is integrity, honesty and client relationship.', '', 'Mar 03, 2023 03:53:52 PM', '2023-03-03 15:53:52'),
(2, '', '6401a8129aada4.40780902.jpg', 'Mar 03, 2023 03:55:13 PM', '2023-03-03 15:55:13');

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
