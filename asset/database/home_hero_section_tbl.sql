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
-- Table structure for table `home_hero_section_tbl`
--

CREATE TABLE `home_hero_section_tbl` (
  `home_hero_section_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `sub_title` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at_varchar` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home_hero_section_tbl`
--

INSERT INTO `home_hero_section_tbl` (`home_hero_section_id`, `title`, `sub_title`, `image`, `created_at_varchar`, `created_at`) VALUES
(1, 'WE DESIGN,PRINT and INSTALL', '', '', 'Mar 09, 2023 08:57:12 PM', '2023-03-09 20:57:12'),
(2, '', 'Unleash Your Creativity with Our High-Quality Stickers and Tarpaulins', '', 'Mar 09, 2023 08:57:23 PM', '2023-03-09 20:57:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `home_hero_section_tbl`
--
ALTER TABLE `home_hero_section_tbl`
  ADD PRIMARY KEY (`home_hero_section_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `home_hero_section_tbl`
--
ALTER TABLE `home_hero_section_tbl`
  MODIFY `home_hero_section_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
