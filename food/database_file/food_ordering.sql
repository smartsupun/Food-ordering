-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2021 at 03:54 PM
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
-- Table structure for table `additional_items`
--

CREATE TABLE `additional_items` (
  `id` int(11) NOT NULL,
  `name` varchar(10) NOT NULL,
  `price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `additional_items`
--

INSERT INTO `additional_items` (`id`, `name`, `price`) VALUES
(1, 'chicken', 50),
(2, 'fish', 40),
(3, 'egg', 25);

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

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL,
  `price` int(100) NOT NULL,
  `images` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `description`, `price`, `images`) VALUES
(1, 'Fried Rice', 'Fried Rice with three curries\r\nCan customize with chicken/fish/egg', 500, 'images/img1.jpg'),
(2, 'Biriyani', 'With three curries', 600, 'images/img2.jpg'),
(3, 'Yellow Rice', 'Yellow Rice with cashew \r\nThree curries are included', 750, 'images/img3.jpg'),
(4, 'Nasigurani', 'With three curries.', 780, 'images/img1.jpg'),
(5, 'Normal Rice', 'Three curries are included', 400, 'images/img2.jpg'),
(6, 'Naasigurani', 'With spicy chilly mix', 1750, 'images/img3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `oders`
--

CREATE TABLE `oders` (
  `oderId` int(255) NOT NULL,
  `oderItems` int(255) NOT NULL,
  `oderTime` time(6) NOT NULL,
  `oderDate` date NOT NULL,
  `oderPrice` decimal(20,0) NOT NULL,
  `userId` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_Id` int(255) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `account` varchar(20) NOT NULL,
  `account_balance` decimal(20,0) NOT NULL,
  `answer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `additional_items`
--
ALTER TABLE `additional_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`),
  ADD UNIQUE KEY `cat_name` (`cat_name`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oders`
--
ALTER TABLE `oders`
  ADD PRIMARY KEY (`oderId`),
  ADD UNIQUE KEY `userId` (`userId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `additional_items`
--
ALTER TABLE `additional_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `oders`
--
ALTER TABLE `oders`
  MODIFY `oderId` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_Id` int(255) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `oders`
--
ALTER TABLE `oders`
  ADD CONSTRAINT `oders_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`user_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
