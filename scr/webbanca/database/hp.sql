-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 23, 2023 at 12:49 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `cart_id` int NOT NULL AUTO_INCREMENT,
  `Product_Id` int NOT NULL,
  `Order_Id` int NOT NULL,
  `Product_Img` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Product_Qty` int NOT NULL,
  `Product_Name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Product_Price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Subtotal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`cart_id`),
  KEY `Product_Id` (`Product_Id`),
  KEY `order_id` (`Order_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `Product_Id`, `Order_Id`, `Product_Img`, `Product_Qty`, `Product_Name`, `Product_Price`, `Subtotal`) VALUES
(12, 8, 1, 'Screenshot 2023-11-26 202241.png', 3, 'Bánh Kem Lily Garden', '350000', '1050000'),
(13, 7, 1, 'Screenshot 2023-11-28 175230.png', 3, 'Bánh kem Laly of Rose', '350000', '1050000'),
(16, 8, 2, 'Screenshot 2023-11-26 202241.png', 1, 'Bánh Kem Lily Garden', '350000', '350000'),
(17, 9, 2, 'Screenshot 2023-11-26 202241.png', 2, 'Bánh kem Sweet Cream', '230000', '460000'),
(18, 8, 1, 'Screenshot 2023-11-26 202241.png', 1, 'Bánh Kem Lily Garden', '350000', '350000'),
(19, 8, 1, 'Screenshot 2023-11-26 202241.png', 1, 'Bánh Kem Lily Garden', '350000', '350000'),
(20, 9, 1, 'Screenshot 2023-11-26 202241.png', 1, 'Bánh kem Sweet Cream', '230000', '230000'),
(21, 8, 1, 'Screenshot 2023-11-26 202241.png', 2, 'Bánh Kem Lily Garden', '350000', '700000'),
(32, 8, 1, 'Screenshot 2023-11-26 202241.png', 1, 'Bánh Kem Lily Garden', '350000', '350000'),
(33, 8, 1, 'Screenshot 2023-11-26 202241.png', 1, 'Bánh Kem Lily Garden', '350000', '350000'),
(34, 8, 1, 'Screenshot 2023-11-26 202241.png', 1, 'Bánh Kem Lily Garden', '350000', '350000'),
(35, 8, 1, 'Screenshot 2023-11-26 202241.png', 1, 'Bánh Kem Lily Garden', '350000', '350000'),
(36, 7, 2, 'Screenshot 2023-11-28 175230.png', 2, 'Bánh kem Laly of Rose', '350000', '700000'),
(37, 19, 42, '', 2, 'Cà tím', '24000', '48000'),
(38, 15, 42, '', 3, 'Táo', '50000', '150000'),
(40, 21, 43, 'Screenshot 2023-11-26 181621 (3).png', 1, 'Táo', '45000', '45000'),
(41, 22, 43, 'Screenshot 2023-11-26 181608 (3).png', 1, 'Soài', '50000', '50000'),
(42, 24, 43, 'Screenshot 2023-11-26 181611.png', 1, 'Cà chua', '34000', '34000'),
(43, 25, 43, 'Screenshot 2023-11-26 181608 (23).png', 2, 'Khoai tây', '23000', '46000'),
(45, 26, 44, 'Screenshot 2023-11-26 181615.png', 1, 'Cà tím', '23000', '23000'),
(47, 21, 44, 'Screenshot 2023-11-26 181621 (3).png', 1, 'Táo', '45000', '45000');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `Category_Id` int NOT NULL AUTO_INCREMENT,
  `Category_Name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Category_Image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Category_Description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`Category_Id`),
  KEY `Category_Id` (`Category_Id`,`Category_Name`,`Category_Image`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Category_Id`, `Category_Name`, `Category_Image`, `Category_Description`) VALUES
(17, 'Trái cây', 'taixuong (29).jpg', 'Nhiều loại trái cây nhập khẩu tươi ngon'),
(18, 'Rau củ', 'taixuong(30).jpg', 'Rau củ Đà Lạt oganic');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `Customer_Id` int NOT NULL AUTO_INCREMENT,
  `Customer_Email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `First_Name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Last_Name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Postcode` int NOT NULL,
  `City` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phone` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`Customer_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Customer_Id`, `Customer_Email`, `First_Name`, `Last_Name`, `Password`, `Address`, `Postcode`, `City`, `Phone`) VALUES
(14, 'dinhkhoi@gmail.com', 'Tran', 'Dinh Khoi', '$2y$10$58/VnH5xmIPc1pI5eamBS.d8cEt1muRilEJwaCMvO7OW1zEkV.9lG', 'Ly Thai To Street', 28, 'TP HCM', '8346020123'),
(18, 'dinhkhoi123@gmail.com', 'Tran', 'Dinh Khoi', '$2y$10$Yk7RxsZrkK/tmX29/7J1w.Ol2FAvJ0kpOJoHgH6sAHQFZRCv7mLD6', 'Ly Thai To Street', 28, 'TP HCM', '8346020123'),
(19, 'dinhkhoi345@gmail.com', 'Tran', 'Dinh Khoi', '$2y$10$wel/GI/eYvF3b6QZF2RreuEK/jBonJIaQ1fXHmxZovstmL3Y332aK', 'Ly Thai To Street', 28, 'TP HCM', '8346020123'),
(33, 'trandinhkhoitvtp@gmail.com', 'Khôi', 'Trần Đình', '$2y$10$KQ4MIwLuZfOUATr.WhjR4eFHoUOIi0yTplVDNnOMZUxmLUjNS3sMW', '78/8 Cao lỗ, phường 4, quận 8, TP HCM', 283649, 'Hồ Chí Minh', '0907267362'),
(35, 'main@gmail.com', 'Khôi', 'Trần Đình', '$2y$10$VZN0pe.IQSvK7yukuZ3s9e0pJq5Jr1ii6aL1x7IYJiPxYRUqlCMpq', '78/8 Cao lỗ, phường 4, quận 8, TP HCM', 283649, 'Hồ Chí Minh', '0907267362');

-- --------------------------------------------------------

--
-- Table structure for table `order_tbl`
--

DROP TABLE IF EXISTS `order_tbl`;
CREATE TABLE IF NOT EXISTS `order_tbl` (
  `Order_Id` int NOT NULL AUTO_INCREMENT,
  `Order_Total` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Customer_Id` int NOT NULL,
  `State` int NOT NULL,
  PRIMARY KEY (`Order_Id`),
  KEY `Order_Id` (`Order_Id`,`Customer_Id`),
  KEY `Customer_Id` (`Customer_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_tbl`
--

INSERT INTO `order_tbl` (`Order_Id`, `Order_Total`, `Customer_Id`, `State`) VALUES
(1, '0', 8, 0),
(2, '1510000', 18, 0),
(40, '0', 8, 1),
(41, '0', 8, 1),
(42, '198000', 18, 0),
(43, '0', 18, 1),
(44, '0', 33, 1),
(45, '0', 34, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `Product_Id` int NOT NULL AUTO_INCREMENT,
  `Product_Name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Product_Desc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Product_FirstImg` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Product_SecondImg` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Product_ThirdImg` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Stock` int NOT NULL,
  `Category_Id` int NOT NULL,
  PRIMARY KEY (`Product_Id`),
  KEY `Product_Id` (`Product_Id`,`Product_Name`,`Product_Desc`,`Price`,`Stock`,`Category_Id`),
  KEY `Category_Id` (`Category_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_Id`, `Product_Name`, `Product_Desc`, `Product_FirstImg`, `Product_SecondImg`, `Product_ThirdImg`, `Price`, `Stock`, `Category_Id`) VALUES
(21, 'Táo', 'táo', '../upload/Screenshot 2023-11-26 181621 (3).png', '../upload/Screenshot 2023-11-26 181621 (4).png', '../upload/Screenshot 2023-11-26 181621 (5).png', '45000', 33, 17),
(22, 'Soài', 'Soài', '../upload/Screenshot 2023-11-26 181608 (3).png', '../upload/Screenshot 2023-11-26 181621 (6).png', '../upload/Screenshot 2023-11-26 181621 (8).png', '50000', 56, 17),
(23, 'Vãi', 'Vãi', '../upload/Screenshot 2023-11-26 181621 (18).png', '../upload/Screenshot 2023-11-26 181621 (19).png', '../upload/Screenshot 2023-11-26 181621 (21).png', '34000', 33, 17),
(24, 'Cà chua', 'Cà chua', '../upload/Screenshot 2023-11-26 181611.png', '../upload/Screenshot 2023-11-26 181612.png', '../upload/Screenshot 2023-11-26 181613.png', '34000', 44, 18),
(25, 'Khoai tây', 'Khoai tây', '../upload/Screenshot 2023-11-26 181608 (23).png', '../upload/Screenshot 2023-11-26 181608 (24).png', '../upload/Screenshot 2023-11-26 181608 (25).png', '23000', 12, 18),
(26, 'Cà tím', 'Cà tím', '../upload/Screenshot 2023-11-26 181615.png', '../upload/Screenshot 2023-11-26 181616.png', '../upload/Screenshot 2023-11-26 181617.png', '23000', 24, 18);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
