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
(2, 'Full Decals', 'Honda', 'Honda BeAT', '642c188d2440d4.31566995.png', 'Apr 04, 2023 08:31:09 PM', '2023-04-04 20:31:09'),
(3, 'Full Decals', 'Honda', 'Honda Click', '642c1895b9fc95.67328885.png', 'Apr 04, 2023 08:31:17 PM', '2023-04-04 20:31:17'),
(4, 'Full Decals', 'Honda', 'Honda Genio', '642c189eeb1c03.88679922.png', 'Apr 04, 2023 08:31:26 PM', '2023-04-04 20:31:26'),
(5, 'Full Decals', 'Honda', 'Honda PCX', '642c18aaa4c225.68196007.png', 'Apr 04, 2023 08:31:38 PM', '2023-04-04 20:31:38');

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
  MODIFY `decals_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
