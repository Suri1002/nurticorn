-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2021 at 07:27 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nutricornsilage`
--

-- --------------------------------------------------------

--
-- Table structure for table `add-cart`
--

CREATE TABLE `add-cart` (
  `cust_id` varchar(200) NOT NULL,
  `product_id` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add-cart`
--

INSERT INTO `add-cart` (`cust_id`, `product_id`) VALUES
('15', '7'),
('15', '10'),
('15', '10'),
('15', '10'),
('11', '4');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`) VALUES
(1, 'Nutri Corn Silage', 'ncs@conzura', 'ncs@conzura');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `email`, `mobile`, `password`) VALUES
(11, 'surendrastar548@gmail.com', '6300083937', 'Suri@123'),
(12, 'kingsurendra614@gmail.com', '6300083937', 'Suri@123'),
(14, 'a@gmail.com', '6300083937', 'Suri@123'),
(15, 'suri@gmail.com', '6300083937', 'Suri@1234');

-- --------------------------------------------------------

--
-- Table structure for table `cust_info`
--

CREATE TABLE `cust_info` (
  `cust_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  `door_number` varchar(255) NOT NULL,
  `village` varchar(255) NOT NULL,
  `landmark` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `Product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cust_info`
--

INSERT INTO `cust_info` (`cust_id`, `name`, `phone_number`, `door_number`, `village`, `landmark`, `city`, `pincode`, `Product_id`) VALUES
(15, 'Surendra', '6300083937', '1/123', 'Kalavatala', 'Kalavatala', 'Kurnool', '518123', 6),
(11, 'Surendra', '6300083937', '1/123', 'Kalavatala', 'Kalavatala', 'Kurnool', '518123', 4),
(11, 'Surendra', '6300083937', '1/123', 'Kalavatala', 'Kalavatala', 'Kurnool', '518123', 5),
(11, 'Surendra', '6300083937', '1/123', 'Kalavatala', 'Kalavatala', 'Kurnool', '518123', 5),
(11, 'Surendra', '6300083937', '1-834', 'moolasagaram', 'moolasagaram', 'Kurnool', '518123', 1),
(11, 'Surendra', '6300083937', '1-834', 'Kalavatala', 'Kalavatala', 'Kurnool', '518123', 7),
(11, 'Surendra', '6300083937', '1/123', 'Kalavatala', 'Kalavatala', 'Kurnool', '518123', 4),
(14, 'Surendra', '6300083937', '1-81', 'main road', 'kalavatala', 'Kurnool', '518123', 7),
(14, 'Surendra', '6300083937', '1-81', 'main road', 'kalavatala', 'Kurnool', '518123', 1),
(0, 'Surendra', '1111111111', '1-81, kachiguda', 'kachiguda', 'kachiguda', 'Hyderabad', '518123', 12),
(0, 'Surendra', '1111111111', '1-81, kachiguda', 'kachiguda', 'kachiguda', 'Hyderabad', '518123', 12),
(0, 'Surendra', '354615453', '1-81, kachiguda', 'kachiguda', 'kachiguda', 'Hyderabad', '545645', 12),
(0, 'Surendra', '354615453', '1-81, kachiguda', 'kachiguda', 'kachiguda', 'Hyderabad', '545645', 12),
(0, 'Surendra', '42452', '1-81, kachiguda', 'kachiguda', 'kachiguda', 'Hyderabad', '524525', NULL),
(0, 'Surendra', '335634563', '1-81, kachiguda', 'kachiguda', 'kachiguda', 'Hyderabad', '657677', 11),
(0, 'Surendra', '5645645', '45645', '456', '456456', '456', '456456', 12),
(0, 'surendra', '789729823', '1', 'main road', 'Kalavatala', 'Kurnool', '278923', 12),
(0, 'Surendra', '-1', '1-81, kachiguda', 'kachiguda', 'kachiguda', 'Hyderabad', '-3', 13);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `comments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `email`, `state`, `country`, `comments`) VALUES
('surendra', 'surendrastar548@gmail.com', 'Andhra Pradesh', 'india', 'Good one'),
('Nagesh', 'a@gmail.com', 'Andhra Pradesh', 'india', 'Great website where i get my required milletes'),
('Surendra', 'surendrastar548@gmail.com', 'Andhra Pradesh', 'india', 'Great website'),
('surendra', 'kingsurendra614@gmail.com', 'Andhra Pradesh', 'india', 'Veery good');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `cust_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(255) NOT NULL,
  `qty` int(11) DEFAULT NULL,
  `total_amount` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`cust_id`, `product_id`, `order_date`, `status`, `qty`, `total_amount`) VALUES
(0, 11, '2021-09-21 11:13:53', 'Ordered', 1, 0),
(0, 11, '2021-09-21 11:58:40', 'Ordered', 1, 0),
(0, 12, '2021-09-21 11:59:13', 'Ordered', 12, 72000),
(0, 12, '2021-09-22 14:42:46', 'Ordered', 12, 72000);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `Description2` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `Name`, `Description`, `Image`, `Price`, `Description2`) VALUES
(13, 'Cattle feed', 'Food for animals', 'Millet-item-3502.jpg', '7000.00', 'Best food for animals to get good health');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
