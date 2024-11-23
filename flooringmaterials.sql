-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 23, 2024 at 03:26 AM
-- Server version: 8.0.39
-- PHP Version: 8.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flooringmaterials`
--

-- --------------------------------------------------------

--
-- Table structure for table `flooring`
--

CREATE TABLE `flooring` (
  `id` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flooring`
--

INSERT INTO `flooring` (`id`, `name`, `price`) VALUES
(1, 'Hardwood', 8.50),
(2, 'Laminate', 2.99),
(3, 'Vinyl', 3.25),
(4, 'Ceramic Tile', 5.00),
(5, 'Porcelain Tile', 6.50),
(6, 'Carpet', 4.00),
(7, 'Bamboo', 7.00),
(8, 'Cork', 4.50),
(9, 'Stone', 10.00),
(10, 'Engineered Wood', 5.99),
(11, 'Linoleum', 3.75),
(12, 'Rubber', 6.00),
(13, 'Concrete', 2.00),
(14, 'Terrazzo', 12.00),
(15, 'Luxury Vinyl Plank', 4.75),
(16, 'Epoxy', 8.00),
(17, 'Marble', 15.00),
(18, 'Granite', 12.50);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `flooring`
--
ALTER TABLE `flooring`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `flooring`
--
ALTER TABLE `flooring`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
