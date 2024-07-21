-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2024 at 01:59 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentals`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE Database rentals;

USE rentals;

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `contactNo` varchar(50) NOT NULL,
  `details` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

-- --------------------------------------------------------

--
-- Table structure for table `house_details`
--

CREATE TABLE `house_details` (
  `house_id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `availability` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `information` varchar(500) NOT NULL,
  `rooms` int(11) DEFAULT NULL,
  `price` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `house_details`
--

INSERT INTO `house_details` (`house_id`, `type`, `address`, `availability`, `contact`, `information`, `rooms`, `price`) VALUES
(1, 'Apartment', '123 Main St', '2024-06-02', '123-456-7890', 'Nice apartment in downtown.', 3, '1200'),
(2, 'Apartment', '124 Main St', '2024-06-05', '123-456-7891', 'Spacious apartment with a great view.', 2, '1500'),
(3, 'Apartment', '125 Main St', '2024-06-10', '123-456-7892', 'Cozy apartment close to public transport.', 1, '1000'),
(4, 'Apartment', '126 Main St', '2024-06-15', '123-456-7893', 'Modern apartment with all amenities.', 4, '1800'),
(5, 'Condo', '200 Oak St', '2024-06-20', '123-456-7894', 'Luxury condo with swimming pool.', 3, '2200'),
(6, 'Condo', '201 Oak St', '2024-06-25', '123-456-7895', 'Condo with gym and parking.', 2, '2100'),
(7, 'Condo', '202 Oak St', '2024-06-30', '123-456-7896', 'Condo with beautiful interiors.', 3, '2300'),
(8, 'Condo', '203 Oak St', '2024-07-05', '123-456-7897', 'Spacious condo in a prime location.', 4, '2500'),
(9, 'Townhouse', '300 Pine St', '2024-07-10', '123-456-7898', 'Townhouse with backyard.', 3, '2000'),
(10, 'Townhouse', '301 Pine St', '2024-07-15', '123-456-7899', 'Townhouse in a quiet neighborhood.', 3, '1950'),
(11, 'Townhouse', '302 Pine St', '2024-07-20', '123-456-7800', 'Townhouse with modern design.', 4, '2100'),
(12, 'Townhouse', '303 Pine St', '2024-07-25', '123-456-7801', 'Townhouse with garage and basement.', 2, '1900');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `house_details`
--
ALTER TABLE `house_details`
  ADD PRIMARY KEY (`house_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
