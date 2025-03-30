-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 30, 2025 at 07:50 PM
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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `item_id` int(10) UNSIGNED NOT NULL,
  `item_name` varchar(20) NOT NULL,
  `item_desc` varchar(200) NOT NULL,
  `item_img` varchar(200) NOT NULL,
  `item_price` decimal(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`item_id`, `item_name`, `item_desc`, `item_img`, `item_price`) VALUES
(1, 'orologio 1', 'an elegant watch', '../images/watch3.jpeg', 49.90),
(2, 'orologio 2', 'a tech watch', '../images/orologio2.jpg', 49.90),
(3, 'orologio 3', 'a silver watch', '../images/orologio3.jpg', 45.50),
(4, 'orologio 4', 'a brown watch', '../images/orologio4 copy.jpg', 45.50),
(5, 'orologio 5', 'a brown elegant watch', '../images/orologio5.jpg', 45.50),
(6, 'orologio 6', 'a black and blue watch', '../images/orologio6.jpg', 45.50),
(7, 'orologio 7', 'a brown and blue watch', '../images/orologio7.jpg', 45.50),
(8, 'orologio 8', 'a basic watch', '../images/orologio8.jpg', 45.50),
(9, 'orologio 9', 'a casual chic watch', '../images/orologio9.jpg', 45.50),
(10, 'orologio 10', 'a basic chic watch', '../images/orologio10.jpg', 45.50),
(11, 'orologio 11', 'a black and brown watch', '../images/orologio11.jpeg', 49.99),
(12, 'orologio 12', 'a classical black watch', '../images/orologio12.jpg', 50.00),
(13, 'orologio 13', 'a casual but elegant watch', '../images/orologio13copy.jpg', 49.99),
(14, 'orologio 14', 'our first model', '../images/orologio14 copy.jpg', 45.99),
(15, 'orologio 15', 'another classic watch', '../images/orologio15 copy.jpg', 40.99);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `item_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
