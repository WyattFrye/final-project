-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 23, 2024 at 03:30 AM
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
-- Database: `plumbingsupplies`
--

-- --------------------------------------------------------

--
-- Table structure for table `plumbingmaterials`
--

CREATE TABLE `plumbingmaterials` (
  `id` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `plumbingmaterials`
--

INSERT INTO `plumbingmaterials` (`id`, `name`, `price`) VALUES
(1, 'PVC Pipes', 2.50),
(2, 'Copper Pipes', 10.00),
(3, 'PEX Pipes', 1.75),
(4, 'Pipe Fittings', 0.50),
(5, 'Pipe Insulation', 1.25),
(6, 'Faucets', 35.00),
(7, 'Shower Heads', 20.00),
(8, 'Toilets', 100.00),
(9, 'Sinks', 50.00),
(10, 'Bath Tubs', 150.00),
(11, 'Drain Cleaners', 5.00),
(12, 'Plungers', 10.00),
(13, 'Water Heaters', 200.00),
(14, 'Pipe Wrenches', 15.00),
(15, 'Teflon Tape', 0.75),
(16, 'Pipe Clamps', 1.00),
(17, 'Valves', 8.00),
(18, 'Water Pumps', 75.00),
(19, 'Septic Tanks', 500.00),
(20, 'Water Meters', 45.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `plumbingmaterials`
--
ALTER TABLE `plumbingmaterials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `plumbingmaterials`
--
ALTER TABLE `plumbingmaterials`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
