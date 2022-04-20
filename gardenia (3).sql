-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20 أبريل 2022 الساعة 15:04
-- إصدار الخادم: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gardenia`
--

-- --------------------------------------------------------

--
-- بنية الجدول `cart`
--

CREATE TABLE `cart` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `cart`
--

INSERT INTO `cart` (`id`, `name`, `price`, `image`, `quantity`) VALUES
(46, 'sdt', 234, 'pic10.jpg', 1);

-- --------------------------------------------------------

--
-- بنية الجدول `order`
--

CREATE TABLE `order` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `wtime` varchar(255) NOT NULL,
  `total_products` varchar(255) NOT NULL,
  `total_price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `order`
--

INSERT INTO `order` (`id`, `name`, `phone`, `email`, `city`, `date`, `wtime`, `total_products`, `total_price`) VALUES
(24, 'يزن', 947601916, 'faeza.aldarweesh@gmail.com', 'hama', '0055-05-05', '15:55', 'sdt (1) ', 234),
(25, 'يزن', 947601916, 'faeza.aldarweesh@gmail.com', 'hama', '0055-05-05', '06:55', 'sdt (1) ', 234);

-- --------------------------------------------------------

--
-- بنية الجدول `public_events`
--

CREATE TABLE `public_events` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `public_events`
--

INSERT INTO `public_events` (`id`, `name`, `price`, `image`) VALUES
(7, 'sdt', '234', 'pic10.jpg');

-- --------------------------------------------------------

--
-- بنية الجدول `special`
--

CREATE TABLE `special` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `special`
--

INSERT INTO `special` (`id`, `name`, `price`, `image`) VALUES
(5, 'faeza1111', '23456', 'pic11.jpg');

-- --------------------------------------------------------

--
-- بنية الجدول `wedding`
--

CREATE TABLE `wedding` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `wedding`
--

INSERT INTO `wedding` (`id`, `name`, `price`, `image`) VALUES
(17, 'faeza', '1234', 'pic3.jpg');

-- --------------------------------------------------------

--
-- بنية الجدول `wuser`
--

CREATE TABLE `wuser` (
  `wid` int(11) NOT NULL,
  `wname` varchar(20) NOT NULL,
  `wdate` date NOT NULL,
  `wusername` varchar(20) NOT NULL,
  `wpassword` varchar(20) NOT NULL,
  `wphone` varchar(5) NOT NULL,
  `wGender` varchar(20) NOT NULL,
  `wcity` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `wuser`
--

INSERT INTO `wuser` (`wid`, `wname`, `wdate`, `wusername`, `wpassword`, `wphone`, `wGender`, `wcity`) VALUES
(1, 'faeza', '2022-04-20', 'faeza000', '111', '11111', 'female', 'hama');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `public_events`
--
ALTER TABLE `public_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `special`
--
ALTER TABLE `special`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wedding`
--
ALTER TABLE `wedding`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wuser`
--
ALTER TABLE `wuser`
  ADD PRIMARY KEY (`wid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `public_events`
--
ALTER TABLE `public_events`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `special`
--
ALTER TABLE `special`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `wedding`
--
ALTER TABLE `wedding`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `wuser`
--
ALTER TABLE `wuser`
  MODIFY `wid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
