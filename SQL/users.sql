-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 30, 2025 at 07:49 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `MKTIMEWATCHES`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'a', '$2y$10$jOYoymSAWbh2bATXtNV6zexIKrgKFdsJd14SeeSYjgVeGtiHSYWum', 'c@gmail.com'),
(2, 'Salome', '$2y$10$Aa88FVVEARA0GgGYLZ1stu4oz.DgsIU/9d4y/5SddTjgG4HMhIEQq', 'salo@gmail.com'),
(5, 'c', '$2y$10$C7WwnPU1xiGGjMrJrtuUiOUXWwx0fP0XyiMGa3cslWBJqzChIWyI6', 'a@gmail.com'),
(6, 'Arran', '$2y$10$6lj8xiBO6xF2wa.BlK/1ZueRIhHdsq4QLBkwDyiUlhzFwdHLWZT4W', 'arran@gmail.com'),
(7, 'Pablo', '$2y$10$YPOdRCvba/SBXdJL1B7e0Ox/.F738O9TobUvmft5ezzN/L33sfzXC', 'pe@gmail.com'),
(8, 'Annarita', '$2y$10$YiZ78uMoiojcC/M/X38Ca.ZtoUwXT57neNTLV5H.8tN46VJ0HxllG', 'at@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
