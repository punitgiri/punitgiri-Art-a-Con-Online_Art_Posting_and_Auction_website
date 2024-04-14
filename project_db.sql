-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2021 at 11:04 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bids`
--

CREATE TABLE `bids` (
  `id` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `bid_amount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bids`
--

INSERT INTO `bids` (`id`, `product_name`, `user_name`, `bid_amount`) VALUES
(7, 'Apple iphone ', 'aman', '55000'),
(8, 'Lenovo Laptop', 'aman', '53000'),
(9, 'Drawing', 'aman', '210'),
(10, 'Apple iphone ', 'hardik', '55500'),
(12, 'Agarbatti', 'hardik', '215'),
(13, 'Apple iphone ', 'sameer', '56000'),
(14, 'Lenovo Laptop', 'sameer', '54000'),
(16, 'Agarbatti', 'bhushan', '220'),
(17, 'Lenovo Laptop', 'rohan', '56000');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(7, 'Mobile'),
(8, 'Books'),
(12, 'Furniture'),
(26, 'Drawing'),
(33, 'Laptop');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`) VALUES
(2, 'demo ', 'demo@gmail.com', '0987654321', 'sample message demo');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `bid_amount` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `start_date_time` datetime(6) NOT NULL,
  `end_date_time` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `description`, `bid_amount`, `image`, `start_date_time`, `end_date_time`) VALUES
(11, 'Apple iphone ', 'Mobile', 'Apple iphon is the best phone to buy', '56000', 'images/apple.png', '2021-06-04 11:20:00.000000', '2021-06-05 11:21:00.080000'),
(15, 'Lenovo Laptop', 'Laptop', 'Lenovo IdeaPad Laptop', '56000', 'images/loptop.jpg', '2021-06-04 10:30:00.000000', '2021-06-05 10:30:00.111000'),
(16, 'Agarbatti', 'Agarbatti', 'Scented Agarbatti', '230', 'images/agarbatti.jpeg', '2021-06-04 10:00:00.000000', '2021-06-05 10:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `id` int(255) NOT NULL,
  `seller_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `bid_amount` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `start_date_time` datetime(6) NOT NULL,
  `end_date_time` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`id`, `seller_name`, `email`, `product_name`, `description`, `bid_amount`, `image`, `start_date_time`, `end_date_time`) VALUES
(1, 'Rohan Patil', 'rohanp@gmail.com', 'laptop', 'laptop', '50000', 'admin/images/loptop.jpg', '2021-05-30 10:00:00.000000', '2021-05-30 18:00:00.000000'),
(3, 'Aman Bhandekar', 'amanb@gmail.com', 'Vivo phone', 'vivo phone', '10000', 'admin/images/mobile.jpg', '2021-05-30 10:00:00.000000', '2021-05-30 18:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `access_level` varchar(255) NOT NULL DEFAULT '25'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `user_name`, `email`, `mobile`, `password`, `access_level`) VALUES
(1, 'Admin', 'admin', 'admin@gmail.com', '0987654321', '$2y$10$88oFRoclbfL2M53.Aq9.FuSI8cJFlm7RIVSJWoEIWWoGaTP2cMg/y', '100'),
(5, 'Aman', 'aman', 'aman@gmail.com', '2468101214', '$2y$10$4PIshbdR9LZAOiAS5bD5cOKIy77qux0hqpBlKnCyu8Q.ozoqwfqwG', '25'),
(6, 'Bhushan', 'bhushan', 'bhushan@gmail.com', '1111111111', '$2y$10$eeyEVmWjQVcC6IOcG8fQk.H.6cu7vifcBZoCyTRLeAfYLEOEW1Fmm', '25'),
(7, 'Hardik', 'hardik', 'hardik@gmail.com', '1034728935', '$2y$10$KpFMNCmyy2aCYrhmNtmGO.y73HDyLP5ablzJ2CK1MDFrhT/HN0pBK', '25'),
(8, 'Sameer', 'sameer', 'sameer@gmail.com', '6666666666', '$2y$10$Fw9sMf3qzx47eiB9CRv3T.6fs7ztDUfpKfrlfLqu8uxNzAPSmwCGC', '25'),
(17, 'Rohan', 'rohan', 'rohan@gmail.com', '5674839201', '$2y$10$rasTaHoNEcF.V7MGv.w9zet.7YQe1Qyz2Ml5C7n6vMFk0QH12REem', '25'),
(21, 'Demo', 'demo', 'demo@gmail.com', '111111111111', '$2y$10$Cz0CirSf7/.zj/pzmyIDW.RBUzkueJXgY7GuAqp3s0PgZ5JC8.uwq', '25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bids`
--
ALTER TABLE `bids`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bids`
--
ALTER TABLE `bids`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
