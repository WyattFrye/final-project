-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 23, 2024 at 03:16 AM
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
-- Database: `buildingmaterials`
--

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `id` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`id`, `name`, `price`) VALUES
(1, 'Lumber', 5.99),
(2, 'Cement', 3.49),
(3, 'Plywood', 12.75),
(4, 'Drywall', 6.50),
(5, 'Roofing Shingles', 24.99),
(6, 'Concrete Blocks', 1.25),
(7, 'Insulation', 10.00),
(8, 'Bricks', 0.50),
(9, 'Nails', 0.05),
(10, 'Screws', 0.10),
(11, 'PVC Pipes', 4.00),
(12, 'Copper Pipes', 15.00),
(13, 'Electrical Wiring', 25.00),
(14, 'Light Fixtures', 35.00),
(15, 'Paint', 20.00),
(16, 'Tiles', 2.50),
(17, 'Flooring', 30.00),
(18, 'Windows', 150.00),
(19, 'Doors', 100.00),
(20, 'Sand', 0.03);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
