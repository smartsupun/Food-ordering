-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2021 at 03:45 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_ordering`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(255) NOT NULL,
  `cat_name` varchar(500) DEFAULT NULL,
  `cat_img` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`, `cat_img`, `description`) VALUES
(1, 'RICE', 'images/rice.jpg', 'Healthy less oil delicious Sri Lankan rice styles'),
(2, 'PASTA', 'images/pasta.jpg', 'various pastas with unique tastes arround the world'),
(3, 'BURGERS', 'images/burgers.jpg', 'burgers with mavelous tastes around the world'),
(4, 'KOTTU', 'images/kottu.jpg', 'national food of Sri Lankan street food lovers '),
(5, 'SHORT EATS', 'images/short_eats.jpg', 'come and pick things for the small hungries '),
(6, 'PIZZA', 'images/pizza.jpg', 'Italian pizza with the unique Sri Lankan taste'),
(7, 'SOUP', 'images/soup.jpg', 'hot hot soups with your tounge twisting flavours'),
(8, 'DESERTS', 'images/desrts.jpg', 'Don\'t forget! it is the most important of meal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`),
  ADD UNIQUE KEY `cat_name` (`cat_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
