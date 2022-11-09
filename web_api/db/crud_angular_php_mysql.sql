-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 09, 2022 at 07:33 PM
-- Server version: 8.0.29
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_angular_php_mysql`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int NOT NULL,
  `p_name` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `p_description` text COLLATE utf8mb4_general_ci NOT NULL,
  `p_price` double NOT NULL,
  `p_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `p_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `p_name`, `p_description`, `p_price`, `p_created`, `p_modified`) VALUES
(1, 'Basketball', 'A ball used in the NBA.', 49.99, '2022-11-10 01:01:58', '2022-11-09 19:01:58'),
(2, 'Gatorade', 'This is a very good drink for athletes.', 1.99, '2022-11-10 01:01:58', '2022-11-09 19:01:58'),
(3, 'Eye Glasses', 'It will make you read better.', 6, '2022-11-10 01:01:58', '2022-11-09 19:01:58'),
(4, 'Trash Can', 'It will help you maintain cleanliness.', 3.95, '2022-11-10 01:01:58', '2022-11-09 19:01:58'),
(5, 'Mouse', 'Very useful if you love your computer.', 11.35, '2022-11-10 01:01:58', '2022-11-09 19:01:58'),
(6, 'Earphone', 'You need this one if you love music.', 7, '2022-11-10 01:01:58', '2022-11-09 19:01:58'),
(7, 'Pillow', 'Sleeping well is important.', 8.99, '2022-11-10 01:01:58', '2022-11-09 19:01:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
