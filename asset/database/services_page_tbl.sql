-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2023 at 10:06 AM
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
-- Table structure for table `services_page_tbl`
--

CREATE TABLE `services_page_tbl` (
  `services_id` int(11) NOT NULL,
  `sub_title` text NOT NULL,
  `content` text NOT NULL,
  `created_at_varchar` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services_page_tbl`
--

INSERT INTO `services_page_tbl` (`services_id`, `sub_title`, `content`, `created_at_varchar`, `created_at`) VALUES
(2, '', '', 'Mar 04, 2023 11:13:18 AM', '2023-03-04 11:13:18'),
(4, '', 'Tarpaulin Printing,  Sticker,  Printing,  Wall Decor,  Office Glass Decor,  Product Labels,  Sintra Board Printing,  Motorcycle &amp; Car,  Company Vehicle,  Wrapping &amp; Customize Decals', 'Mar 04, 2023 11:29:30 AM', '2023-03-04 11:29:30'),
(5, 'Our printing service offers a wide range of printing services to meet the needs of businesses and individuals. From digital printing to offset printing, we have the technology and expertise to handle any project. We specialize in printing marketing materials such as business cards, brochures, and flyers, as well as larger format items like banners and posters. In addition to printing, we also offer design services to ensure that your materials look their best. Finally, we provide a range of finishing options such as binding, laminating, and embossing to add that extra touch of professionalism. Whatever your printing needs, we have the services to make your project a success.', '', 'Mar 04, 2023 11:29:43 AM', '2023-03-04 11:29:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `services_page_tbl`
--
ALTER TABLE `services_page_tbl`
  ADD PRIMARY KEY (`services_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `services_page_tbl`
--
ALTER TABLE `services_page_tbl`
  MODIFY `services_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
