-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 17, 2023 at 01:16 PM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `info` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `info`, `image`, `price`) VALUES
(1, 'Arayik', 'Mi Hrashq Andznavorutyun', 'https://live.staticflickr.com/65535/53016479156_2d979c3afc_n.jpg  ', 9.99),
(2, 'Arayik jyktkjb', 'Mi Hrashq Andznavorutyun yjyjytytjuyjj', 'https://live.staticflickr.com/65535/53016479156_2d979c3afc_n.jpg  ', 1.65),
(3, 'Arayikvhtrh gjf', 'Mi Hrashq Andznavorutyunbghg hgh', 'https://live.staticflickr.com/65535/53016479156_2d979c3afc_n.jpg  ', 5.45),
(4, 'Arayikvhtrh gjfhgfh', 'Mi Hrashq Andznavorutyunbghg hghggffjn', 'https://live.staticflickr.com/65535/53016479156_2d979c3afc_n.jpg  ', 8.74),
(5, 'Arayiknmnhh hmm', 'Mi Hrashq Andznavorutyunhhmmbh  hm', 'https://live.staticflickr.com/65535/53016479156_2d979c3afc_n.jpg  ', 3.65),
(6, 'Gor', 'Mi Hrashq Andznavorutyun', 'https://live.staticflickr.com/65535/53016479156_2d979c3afc_n.jpg  ', 15.99);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
