-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2021 at 01:32 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `officeworks`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `add_id` int(11) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `b_address` varchar(200) DEFAULT NULL,
  `b_city` varchar(200) DEFAULT NULL,
  `b_postal` int(6) DEFAULT NULL,
  `b_country` varchar(200) DEFAULT NULL,
  `b_phone` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`add_id`, `email`, `b_address`, `b_city`, `b_postal`, `b_country`, `b_phone`) VALUES
(8, 'taslimahmedefty@gmail.com', '16/2, Daben babu road', 'Khulna', 9100, 'Bangladesh', '01715039303');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(2) NOT NULL,
  `pro_pic` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `admin_roles` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `pro_pic`, `name`, `phone`, `address`, `email`, `pass`, `admin_roles`) VALUES
(1, 'Photo 300×300.jpg', 'Shaikh Taslim Ahmed', '01719393563', '137 B.K. Roy Road, Khulna', 'ow_admin@gmail.com', '1adbb3178591fd5bb0c248518f39bf6d', 'admin'),
(3, '11167987_505613942959078_4206820611999089389_o.jpg', 'Sabbir Alam', '01715039303', '16/2, Daben babu road', 'sabbiralam833@gmail.com', '808de62abc5fe6380db8497b1331a1d0', 'editor');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `crt_id` int(11) NOT NULL,
  `u_email` varchar(200) NOT NULL,
  `pid` int(11) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `p_price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cid` int(11) NOT NULL,
  `cat_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cid`, `cat_name`) VALUES
(2, 'Kitchen supplies'),
(12, 'Stationaries'),
(13, 'office supplies'),
(14, 'furnitures');

-- --------------------------------------------------------

--
-- Table structure for table `paymethod`
--

CREATE TABLE `paymethod` (
  `pay_id` int(3) NOT NULL,
  `pay_method` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paymethod`
--

INSERT INTO `paymethod` (`pay_id`, `pay_method`) VALUES
(3, 'bKash'),
(5, 'Cash on Delivery');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `cat_name` varchar(200) NOT NULL,
  `-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2021 at 01:32 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `officeworks`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `add_id` int(11) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `b_address` varchar(200) DEFAULT NULL,
  `b_city` varchar(200) DEFAULT NULL,
  `b_postal` int(6) DEFAULT NULL,
  `b_country` varchar(200) DEFAULT NULL,
  `b_phone` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`add_id`, `email`, `b_address`, `b_city`, `b_postal`, `b_country`, `b_phone`) VALUES
(8, 'taslimahmedefty@gmail.com', '16/2, Daben babu road', 'Khulna', 9100, 'Bangladesh', '01715039303');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(2) NOT NULL,
  `pro_pic` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `admin_roles` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `pro_pic`, `name`, `phone`, `address`, `email`, `pass`, `admin_roles`) VALUES
(1, 'Photo 300×300.jpg', 'Shaikh Taslim Ahmed', '01719393563', '137 B.K. Roy Road, Khulna', 'ow_admin@gmail.com', '1adbb3178591fd5bb0c248518f39bf6d', 'admin'),
(3, '11167987_505613942959078_4206820611999089389_o.jpg', 'Sabbir Alam', '01715039303', '16/2, Daben babu road', 'sabbiralam833@gmail.com', '808de62abc5fe6380db8497b1331a1d0', 'editor');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `crt_id` int(11) NOT NULL,
  `u_email` varchar(200) NOT NULL,
  `pid` int(11) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `p_price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cid` int(11) NOT NULL,
  `cat_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cid`, `cat_name`) VALUES
(2, 'Kitchen supplies'),
(12, 'Stationaries'),
(13, 'office supplies'),
(14, 'furnitures');

-- --------------------------------------------------------

--
-- Table structure for table `paymethod`
--

CREATE TABLE `paymethod` (
  `pay_id` int(3) NOT NULL,
  `pay_method` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paymethod`
--

INSERT INTO `paymethod` (`pay_id`, `pay_method`) VALUES
(3, 'bKash'),
(5, 'Cash on Delivery');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `cat_name` varchar(200) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `p_price` int(8) NOT NULL,
  `p_desc` longtext NOT NULL,
  `p_brand` varchar(200) NOT NULL,
  `p_stock` int(5) NOT NULL,
  `p_pic` varchar(200) NOT NULL,
  `p_gallery` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `cid`, `cat_name`, `p_name`, `p_price`, `p_desc`, `p_brand`, `p_stock`, `p_pic`, `p_gallery`) VALUES
(6, 14, 'furnitures', 'Desk', 10000, 'Foreign Plastic wood', 'Hatil', 16, 'R1d0fbfc1eefc18c0a2aa4bbcf474e15c.jpg', ''),
(10, 12, 'Stationaries', 'Paper busket', 60, 'good plastic', 'RFL', 41, '29200-4.jpg', ''),
(11, 13, 'office supplies', 'A4 Paper', 350, 'Eco friendly, original, good quality paper', 'Double A', 1178, 'download.jpg', ''),
(12, 2, 'Kitchen supplies', 'Tea Pot', 750, 'Induction Supported', 'KIAM', 15, '813yCjvi+gL._AC_SL1500_.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `sid` int(3) NOT NULL,
  `s_rate` int(5) NOT NULL,
  `s_city` varchar(200) NOT NULL,
  `s_country` varchar(200) NOT NULL,
  `s_time` int(5) NOT NULL,
  `s_method` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`sid`, `s_rate`, `s_city`, `s_country`, `s_time`, `s_method`) VALUES
(3, 100, 'Dhaka', 'Bangladesh', 7, 'Sundarban Courier'),
(4, 50, 'Khulna', 'Bangladesh', 3, 'SA Paribahan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_checkout`
--

CREATE TABLE `tbl_checkout` (
  `ch_id` int(11) NOT NULL,
  `order_ids` text NOT NULL,
  `u_email` varchar(200) NOT NULL,
  `shipping_cost` int(11) NOT NULL,
  `pay_method` varchar(200) NOT NULL,
  `final_total` int(11) NOT NULL,
  `order_status` varchar(200) NOT NULL,
  `checkout_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_checkout`
--

INSERT INTO `tbl_checkout` (`ch_id`, `order_ids`, `u_email`, `shipping_cost`, `pay_method`, `final_total`, `order_status`, `checkout_time`) VALUES
(15, '38', 'taslimahmedefty@gmail.com', 50, 'Cash on Delivery', 210050, 'confirm', '2021-02-23 07:33:51'),
(16, '39', 'taslimahmedefty@gmail.com', 50, 'Cash on Delivery', 10050, 'pending', '2021-02-23 07:34:10'),
(17, '40', 'taslimahmedefty@gmail.com', 50, 'Cash on Delivery', 110, 'pending', '2021-02-25 14:59:07'),
(18, '41', 'taslimahmedefty@gmail.com', 50, 'Cash on Delivery', 10050, 'pending', '2021-02-26 11:04:39'),
(19, '42,43,44', 'taslimahmedefty@gmail.com', 50, 'Cash on Delivery', 30050, 'pending', '2021-02-27 23:57:04'),
(20, '', 'taslimahmedefty@gmail.com', 50, 'Cash on Delivery', 30050, 'pending', '2021-02-27 23:57:44');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `or_id` int(11) NOT NULL,
  `u_email` varchar(200) NOT NULL,
  `pid` int(11) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `p_price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price_total` int(11) NOT NULL,
  `order_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`or_id`, `u_email`, `pid`, `p_name`, `p_price`, `qty`, `price_total`, `order_time`) VALUES
(38, 'taslimahmedefty@gmail.com', 6, 'Desk', 10000, 21, 210000, '2021-02-23 07:33:51'),
(39, 'taslimahmedefty@gmail.com', 6, 'Desk', 10000, 1, 10000, '2021-02-23 07:34:10'),
(40, 'taslimahmedefty@gmail.com', 10, 'Paper busket', 60, 1, 60, '2021-02-25 14:59:07'),
(41, 'taslimahmedefty@gmail.com', 6, 'Desk', 10000, 1, 10000, '2021-02-26 11:04:39'),
(42, 'taslimahmedefty@gmail.com', 6, 'Desk', 10000, 1, 10000, '2021-02-27 23:57:04'),
(43, 'taslimahmedefty@gmail.com', 6, 'Desk', 10000, 1, 10000, '2021-02-27 23:57:04'),
(44, 'taslimahmedefty@gmail.com', 6, 'Desk', 10000, 1, 10000, '2021-02-27 23:57:04');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transections`
--

CREATE TABLE `tbl_transections` (
  `t_id` int(11) NOT NULL,
  `ch_id` int(11) NOT NULL,
  `pay_method` varchar(100) NOT NULL,
  `trans_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_transections`
--

INSERT INTO `tbl_transections` (`t_id`, `ch_id`, `pay_method`, `trans_time`) VALUES
(12, 14, 'Cash on Delivery', '2021-02-23 07:11:56'),
(13, 15, 'Cash on Delivery', '2021-02-23 07:33:51'),
(14, 16, 'Cash on Delivery', '2021-02-23 07:34:10'),
(15, 17, 'Cash on Delivery', '2021-02-25 14:59:07'),
(16, 18, 'Cash on Delivery', '2021-02-26 11:04:39'),
(17, 19, 'Cash on Delivery', '2021-02-27 23:57:04'),
(18, 20, 'Cash on Delivery', '2021-02-27 23:57:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `pro_pic` varchar(200) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `phone` varchar(24) NOT NULL,
  `dob` date DEFAULT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `postal` int(6) DEFAULT NULL,
  `country` varchar(200) NOT NULL,
  `token` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `rtime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `pro_pic`, `full_name`, `email`, `pass`, `gender`, `phone`, `dob`, `address`, `city`, `postal`, `country`, `token`, `status`, `rtime`) VALUES
(4, '131568684_2233282253480780_1265515038876975365_o.jpg', 'Shaikh Taslim Ahmed', 'taslimahmedefty@gmail.com', '28a1666723a7ebcbb071b117c70a4c2a', 'male', '01719393563', '1996-03-15', '137 B.K Roy Road, Dal Mill More', 'Khulna', 9100, 'Bangladesh', '05a5cf06982ba7892ed2a6d38fe832d6', 'active', '2021-02-23 07:02:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`add_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`crt_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `paymethod`
--
ALTER TABLE `paymethod`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `tbl_checkout`
--
ALTER TABLE `tbl_checkout`
  ADD PRIMARY KEY (`ch_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`or_id`);

--
-- Indexes for table `tbl_transections`
--
ALTER TABLE `tbl_transections`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `add_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `crt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `paymethod`
--
ALTER TABLE `paymethod`
  MODIFY `pay_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `sid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_checkout`
--
ALTER TABLE `tbl_checkout`
  MODIFY `ch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `or_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `tbl_transections`
--
ALTER TABLE `tbl_transections`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
