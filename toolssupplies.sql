-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 23, 2024 at 03:31 AM
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
-- Database: `toolssupplies`
--

-- --------------------------------------------------------

--
-- Table structure for table `tools`
--

CREATE TABLE `tools` (
  `id` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tools`
--

INSERT INTO `tools` (`id`, `name`, `price`) VALUES
(1, 'Hammer', 12.99),
(2, 'Screwdriver', 5.50),
(3, 'Wrench', 8.00),
(4, 'Drill', 45.00),
(5, 'Saw', 25.00),
(6, 'Pliers', 7.50),
(7, 'Tape Measure', 3.99),
(8, 'Level', 9.99),
(9, 'Chisel', 6.00),
(10, 'Utility Knife', 4.50),
(11, 'Socket Set', 30.00),
(12, 'Toolbox', 20.00),
(13, 'Sander', 50.00),
(14, 'Paint Brush', 2.00),
(15, 'Ladder', 60.00),
(16, 'Work Gloves', 5.00),
(17, 'Safety Goggles', 3.00),
(18, 'Flashlight', 10.00),
(19, 'Circular Saw', 100.00),
(20, 'Cordless Drill', 80.00),
(21, 'Claw Hammer', 15.00),
(22, 'Adjustable Wrench', 12.00),
(23, 'Allen Wrench Set', 10.00),
(24, 'Wire Strippers', 7.50),
(25, 'Heat Gun', 40.00),
(26, 'Shop Vac', 85.00),
(27, 'Stud Finder', 20.00),
(28, 'Angle Grinder', 75.00),
(29, 'Extension Cord', 15.00),
(30, 'Dust Mask', 2.00),
(31, 'Hand Saw', 18.00),
(32, 'Ratchet Set', 35.00),
(33, 'Multimeter', 25.00),
(34, 'Workbench', 120.00),
(35, 'Tool Belt', 25.00),
(36, 'Jigsaw', 60.00),
(37, 'Reciprocating Saw', 70.00),
(38, 'Caulking Gun', 8.00),
(39, 'Pipe Cutter', 12.00),
(40, 'Hacksaw', 10.00),
(41, 'Crowbar', 18.00),
(42, 'Mallet', 10.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tools`
--
ALTER TABLE `tools`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tools`
--
ALTER TABLE `tools`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
