-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2023 at 12:49 PM
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
-- Table structure for table `cut_file_tbl`
--

CREATE TABLE `cut_file_tbl` (
  `cut_file_id` int(11) NOT NULL,
  `job_name` varchar(255) NOT NULL,
  `job_no` int(11) NOT NULL,
  `date_time_varchar` varchar(255) NOT NULL,
  `date_time` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cut_file_tbl`
--

INSERT INTO `cut_file_tbl` (`cut_file_id`, `job_name`, `job_no`, `date_time_varchar`, `date_time`) VALUES
(8, 'eagle', 1, 'Feb 25, 2023 03:54:40 PM', '2023-02-25 15:54:40'),
(9, 'asda', 1, 'Feb 25, 2023 03:54:42 PM', '2023-02-25 15:54:42'),
(10, 'xfvcas', 1, 'Feb 25, 2023 03:54:44 PM', '2023-02-25 15:54:44'),
(11, 'axaswr', 1, 'Feb 26, 2023 09:43:52 PM', '2023-02-26 21:43:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cut_file_tbl`
--
ALTER TABLE `cut_file_tbl`
  ADD PRIMARY KEY (`cut_file_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cut_file_tbl`
--
ALTER TABLE `cut_file_tbl`
  MODIFY `cut_file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
