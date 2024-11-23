-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 23, 2024 at 03:21 AM
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
-- Database: `roofingsupplies`
--

-- --------------------------------------------------------

--
-- Table structure for table `roofingmaterials`
--

CREATE TABLE `roofingmaterials` (
  `id` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roofingmaterials`
--

INSERT INTO `roofingmaterials` (`id`, `name`, `price`) VALUES
(1, 'Asphalt Shingles', 25.99),
(2, 'Metal Roofing Sheets', 45.00),
(3, 'Slate Tiles', 15.50),
(4, 'Clay Tiles', 18.75),
(5, 'Wood Shakes', 30.00),
(6, 'Roofing Felt', 10.00),
(7, 'Roofing Nails', 0.07),
(8, 'Roof Sealant', 12.00),
(9, 'Gutter Guards', 5.50),
(10, 'Roof Vents', 20.00),
(11, 'Flashing', 2.00),
(12, 'Underlayment', 13.00),
(13, 'Roofing Membrane', 35.00),
(14, 'Ridge Cap Shingles', 22.00),
(15, 'Rubber Roofing', 40.00),
(16, 'TPO Roofing', 50.00),
(17, 'EPDM Roofing', 55.00),
(18, 'Solar Roof Panels', 150.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `roofingmaterials`
--
ALTER TABLE `roofingmaterials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `roofingmaterials`
--
ALTER TABLE `roofingmaterials`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
