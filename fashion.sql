-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2022 at 11:09 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fashion`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'huthoine', 'cf34a0fb35eba5f59a91d5c95b23eb2f');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartId` int(11) NOT NULL,
  `customer` varchar(255) NOT NULL,
  `prodname` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `image` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartId`, `customer`, `prodname`, `price`, `image`, `qty`) VALUES
(1, 'thoai@gmail.com', 'Gentle', 99, 'category-image-04.jpg', 1),
(2, 'thoai@gmail.com', 'áo bông', 23, 'category-image-01.jpg', 1),
(3, 'thoai@gmail.com', 'Túi bé Na', 200, 'slider-image-01.png', 1),
(4, 'lttai@gmail.com', 'Le Tan Tai', 0, 'category-image-01.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category` varchar(20) NOT NULL,
  `sort` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `sort`) VALUES
(1, 'Sneaker', 1),
(4, 'Watches', 4),
(5, 'Footerwear', 3),
(6, 'Dresses', 5),
(10, 'ao', 6);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `password`) VALUES
(2, 'Nguyễn Hửu Thoại', 'thoainhpc04496@fpt.edu.vn', 'thoai123'),
(3, 'Le Thanh Duy ', 'duy@gmail.com', '12345678'),
(4, 'Nguyen Huu Thoai', 'thoai@gmail.com', '123456'),
(5, 'huthoine', 'huthoi@gmail.com', '23042003'),
(7, 'Le Tan Tai', 'lttai@gmail.com', 'taitai'),
(8, 'Nguyen Huu Thoai', 'admin@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `category` varchar(20) NOT NULL,
  `image` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`, `image`) VALUES
(11, 'Rolex', 124, 'Watches', 'category-image-02.jpg'),
(14, 'Gentle', 99, 'Sunglasses', 'category-image-04.jpg'),
(16, 'áo bông', 23, 'Dresses', 'category-image-01.jpg'),
(17, 'Sơ mi trắng', 199, 'Dresses', 'featured-product-image-05.jpg'),
(19, 'Accessories', 5, 'Bags', 'follow-image-01.jpg'),
(24, 'Đồng hồ', 200, 'Watches', 'category-image-02.jpg'),
(32, 'Le Tan Tai', 0, 'Footerwear', 'category-image-01.jpg'),
(35, 'Túi bé Na', 200, 'Footerwear', 'slider-image-01.png'),
(36, 'Đồng hồ ', 2000, 'Watches', 'featured-product-image-07.jpg'),
(37, 'Giày sida trắng', 5, 'category', 'follow-image-05.jpg'),
(38, 'quần Jean', 15, 'Footerwear', 'follow-image-02.jpg'),
(39, 'Giày Converse High', 99, 'Sneaker', 'category-image-05.jpg'),
(40, 'balo', 8, 'Footerwear', 'category-image-03.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

CREATE TABLE `receipt` (
  `id_hd` int(11) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `total` float NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp(),
  `id_cus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `receipt`
--

INSERT INTO `receipt` (`id_hd`, `phone`, `address`, `total`, `time`, `id_cus`) VALUES
(1, '0585114376', 'Ninh Kieu Can Tho', 441, '2022-08-19 11:40:35', 0),
(2, '0585114376', 'Ninh Kieu Can Tho', 149, '2022-08-19 11:59:04', 0),
(3, '0585114376', 'Can Tho', 230, '2022-08-19 12:11:56', 0),
(4, '0585114376', 'Ninh Kieu Can Tho', 313, '2022-08-19 12:33:13', 4),
(6, '0585114376', 'Can Tho', 108, '2022-08-19 12:41:31', 4),
(7, '0123456789', 'Ninh Kieu Can Tho', 204, '2022-08-19 12:43:52', 4),
(8, '0123456789', 'Can Tho', 2227, '2022-08-19 13:45:22', 4),
(10, '0585114376', 'Can Tho', 227, '2022-08-19 15:35:25', 8);

-- --------------------------------------------------------

--
-- Table structure for table `receiptdetail`
--

CREATE TABLE `receiptdetail` (
  `id_rd` int(11) NOT NULL,
  `id_receipt` int(11) NOT NULL,
  `id_prod` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `prod_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `receiptdetail`
--

INSERT INTO `receiptdetail` (`id_rd`, `id_receipt`, `id_prod`, `quantity`, `prod_price`) VALUES
(1, 1, 16, 5, 23),
(2, 1, 14, 2, 99),
(3, 1, 11, 1, 124),
(4, 2, 14, 1, 99),
(5, 2, 16, 2, 23),
(6, 3, 16, 1, 23),
(7, 3, 14, 2, 99),
(8, 3, 19, 1, 5),
(9, 4, 14, 1, 99),
(10, 4, 19, 2, 5),
(11, 4, 24, 1, 200),
(13, 6, 14, 1, 99),
(14, 7, 35, 1, 200),
(15, 8, 14, 1, 99),
(16, 8, 11, 1, 124),
(17, 8, 36, 1, 2000),
(19, 10, 11, 1, 124),
(20, 10, 14, 1, 99);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartId`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receipt`
--
ALTER TABLE `receipt`
  ADD PRIMARY KEY (`id_hd`);

--
-- Indexes for table `receiptdetail`
--
ALTER TABLE `receiptdetail`
  ADD PRIMARY KEY (`id_rd`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `receipt`
--
ALTER TABLE `receipt`
  MODIFY `id_hd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `receiptdetail`
--
ALTER TABLE `receiptdetail`
  MODIFY `id_rd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
