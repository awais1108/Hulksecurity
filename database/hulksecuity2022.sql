-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2020 at 11:16 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pakmart2020`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `creationDate`, `updationDate`) VALUES
(1, 'admin', '5c428d8875d2948607f3e3fe134d71b4', '2017-01-24 16:21:18', '25-01-2017 12:05:43 AM'),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', '2018-07-03 18:35:57', '');

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` int(11) NOT NULL,
  `image1` varchar(30) NOT NULL,
  `image2` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `image1`, `image2`) VALUES
(1, 'banner-3.png', 'f-banner-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `categoryName` varchar(255) NOT NULL,
  `mcid` int(11) NOT NULL,
  `categoryDescription` longtext NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `categoryName`, `mcid`, `categoryDescription`, `creationDate`, `updationDate`) VALUES
(10, 'Industrial Machinery', 10, '', '2018-11-03 09:13:08', '19-07-2020 02:42:59 PM'),
(11, 'Computer', 14, '', '2018-11-03 09:13:12', ''),
(12, 'Camera', 12, '', '2018-11-03 09:13:32', ''),
(13, 'Mobile accessories', 13, '', '2020-06-23 11:55:23', ''),
(14, 'Laptops', 14, '', '2020-06-23 11:55:23', ''),
(15, 'Timerland', 15, '', '2020-06-23 12:41:36', '23-06-2020 06:12:21 PM'),
(16, 'Back cover', 13, '', '2020-06-23 12:41:51', '23-06-2020 06:15:15 PM'),
(17, 'Web Cam', 14, '', '2020-07-28 07:56:49', ''),
(18, 'Warda', 16, '', '2020-07-28 08:13:06', ''),
(19, 'Tablet and bluetooth', 13, '', '2020-07-28 08:30:07', ''),
(20, 'Smarts Phones', 13, '', '2020-07-28 08:30:25', '28-07-2020 03:49:16 PM'),
(21, 'Hiki', 15, '', '2020-07-28 09:40:51', ''),
(22, 'Mobile Parts', 13, 'check it ', '2020-07-28 17:41:26', '04-08-2020 01:43:05 PM');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(30) NOT NULL,
  `c_email` varchar(30) NOT NULL,
  `c_subject` varchar(30) NOT NULL,
  `c_message` text NOT NULL,
  `c_uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`c_id`, `c_name`, `c_email`, `c_subject`, `c_message`, `c_uid`) VALUES
(1, 'wasibaba', 'wasi@gmail.com', 'Puma Grey jogar', 'demo message ', 3),
(2, 'wasibaba', 'wasi@gmail.com', 'teacher meeting', 'demo', 3),
(3, 'wasibaba', 'wasi@gmail.com', 'teacher meeting', 'demo', 3),
(4, 'wasibaba', 'wasi@gmail.com', 'Gucci Strips Sandel', 'demo', 3),
(5, 'aiden rod', 'aidenrodar@gmail.com', 'hello09', 'hjsdbdbwkbedcb', 2);

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `inq_id` int(11) NOT NULL,
  `inq_uid` int(11) NOT NULL,
  `inq_pid` int(11) NOT NULL,
  `inq_subject` varchar(191) NOT NULL,
  `inq_message` text NOT NULL,
  `inq_name` varchar(30) NOT NULL,
  `inq_email` varchar(30) NOT NULL,
  `inq_contact` varchar(30) NOT NULL,
  `inq_status` int(11) NOT NULL DEFAULT 0,
  `inq_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`inq_id`, `inq_uid`, `inq_pid`, `inq_subject`, `inq_message`, `inq_name`, `inq_email`, `inq_contact`, `inq_status`, `inq_date`) VALUES
(1, 15, 41, 'Puma Grey jogar', 'demo text', 'adnann', 'adnann@gmail.com', '0305-420-9838', 0, '2020-07-19'),
(2, 14, 41, 'Puma Grey jogar', 'demo text 2', 'adnann', 'adnann@gmail.com', '0305-420-9838', 0, '2020-07-19'),
(3, 13, 41, 'Puma Grey jogar', '', 'adnann', 'adnann@gmail.com', '0305-420-9838', 0, '2020-07-19'),
(4, 14, 41, 'Puma Grey jogar', 'HI dear', 'jojo', 'joonnyy38@gmail.com', '0333-689-2372', 1, '2020-07-19'),
(5, 13, 32, 'Gucci Strips Sandel', 'demo cehck', 'awais', 'awaisahmad1108@gmail.com', '9789-868-2783', 1, '2020-07-19'),
(6, 13, 37, 'Timber sandel', 'sdjkdhda', 'alibaba', 'alibaba@gmail.com', '3053-337-2387', 1, '2020-07-19'),
(7, 15, 37, 'Timber sandel', 'hasjas', 'alibaba', 'alibaba@gmail.com', '3053-337-2387', 1, '2020-07-09'),
(8, 13, 32, 'Gucci Strips Sandel', 'Gucci check demo', 'alibaba', 'alibaba@gmail.com', '3053-337-2387', 2, '2020-07-10'),
(9, 16, 33, 'Laptop For Kids', 'Testing', 'Abdulrahman', 'abdulrehmanshikh243@gmail.com', '0324-332-4488', 0, '2020-07-10'),
(10, 17, 32, 'Gucci Strips Sandel', 'qsqwsqswas', 'aiden rod', 'aidenrodar@gmail.com', '0324-332-4488', 0, '2020-07-12'),
(11, 2, 41, 'Puma Grey jogar', 'junjjijijijij', 'aiden rod', 'mustafa.sheikh777@gmail.com', '0324-332-4488', 0, '2020-07-13'),
(12, 2, 34, 'Puma sandel', 'testing new', 'aiden rod', 'aidenrodar@gmail.com', '0324-332-4488', 0, '2020-07-17'),
(13, 2, 34, 'Puma sandel', 'testing new', 'aiden rod', 'aidenrodar@gmail.com', '0324-332-4488', 0, '2020-07-17'),
(14, 17, 41, 'Puma Grey jogar', 'hello1234', 'aiden rod', 'aidenrodar@gmail.com', '0324-332-4488', 0, '2020-07-19'),
(15, 3, 34, 'Puma sandel', 'dsdas', 'wasibaba', 'wasi@gmail.com', '2323-212-2121', 0, '2020-08-04');

-- --------------------------------------------------------

--
-- Table structure for table `maincategory`
--

CREATE TABLE `maincategory` (
  `id` int(11) NOT NULL,
  `categoryName` varchar(255) NOT NULL,
  `categoryDescription` longtext NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maincategory`
--

INSERT INTO `maincategory` (`id`, `categoryName`, `categoryDescription`, `creationDate`, `updationDate`) VALUES
(10, 'Industrial Machinery', '', '2018-11-03 09:13:08', '19-07-2020 02:42:59 PM'),
(11, 'women Shoes', '', '2018-11-03 09:13:12', ''),
(12, 'Electronics', '', '2018-11-03 09:13:32', ''),
(13, 'Mobiles and accessories', '', '2020-06-23 11:55:23', ''),
(14, 'Computers', 'All types', '2020-06-23 11:55:23', '28-07-2020 03:25:50 PM'),
(15, 'Men Shoes', '', '2020-06-23 12:41:36', '23-06-2020 06:12:21 PM'),
(16, 'Women Clothes', '', '2020-06-23 12:41:51', '23-06-2020 06:15:15 PM'),
(17, 'Children', 'All accessories  ', '2020-07-28 10:44:45', '');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `productId` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `orderDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `paymentMethod` varchar(50) DEFAULT NULL,
  `orderStatus` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `userId`, `productId`, `quantity`, `orderDate`, `paymentMethod`, `orderStatus`) VALUES
(11, 5, '34', 1, '2018-11-07 12:07:49', 'Cash', 'Delivered'),
(21, 5, '41', 1, '2018-11-08 09:58:44', 'Cash', NULL),
(23, 3, '33', 2, '2018-11-08 10:02:10', 'Cash', 'Delivered'),
(25, 3, '40', 1, '2018-11-08 10:03:56', 'Cash', 'Delivered'),
(27, 3, '37', 2, '2018-11-12 07:11:57', 'Cash', 'Delivered'),
(28, 3, '34', 1, '2018-11-12 08:02:30', 'Cash', 'Delivered'),
(29, 3, '37', 1, '2018-11-13 10:06:41', 'Cash', 'Delivered'),
(30, 3, '34', 4, '2018-11-15 11:18:58', 'Cash', 'Delivered'),
(31, 3, '55', 1, '2018-11-23 10:27:57', 'Cash', NULL),
(32, 3, '56', 1, '2018-11-23 10:27:57', 'Cash', NULL),
(33, 3, '58', 1, '2018-11-23 10:27:57', 'Cash', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ordertrackhistory`
--

CREATE TABLE `ordertrackhistory` (
  `id` int(11) NOT NULL,
  `orderId` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `remark` mediumtext NOT NULL,
  `postingDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordertrackhistory`
--

INSERT INTO `ordertrackhistory` (`id`, `orderId`, `status`, `remark`, `postingDate`) VALUES
(1, 3, 'in Process', 'Order has been Shipped.', '2017-03-10 19:36:45'),
(2, 1, 'Delivered', 'Order Has been delivered', '2017-03-10 19:37:31'),
(3, 3, 'Delivered', 'Product delivered successfully', '2017-03-10 19:43:04'),
(4, 4, 'in Process', 'Product ready for Shipping', '2017-03-10 19:50:36'),
(5, 7, 'Delivered', 'Ok', '2018-07-04 06:43:37'),
(6, 8, 'in Process', 'soon', '2018-08-29 14:51:50'),
(7, 8, 'Delivered', 'ok', '2018-10-10 20:58:52'),
(8, 9, 'in Process', 'ok', '2018-10-22 22:37:09'),
(9, 9, 'in Process', 'ok', '2018-11-03 08:43:57'),
(10, 9, 'Delivered', 'ok', '2018-11-03 08:46:32'),
(11, 10, 'in Process', 'ook', '2018-11-03 08:54:43'),
(12, 11, 'in Process', 'ok', '2018-11-09 14:58:53'),
(13, 23, 'Delivered', 'ok', '2018-11-09 14:59:11'),
(14, 25, 'Delivered', 'ok', '2018-11-12 09:42:04'),
(15, 28, 'Delivered', 'ok', '2018-11-12 09:43:03'),
(16, 29, 'Delivered', 'ok', '2018-11-13 10:18:22'),
(17, 11, 'Delivered', 'check', '2018-11-13 10:19:16'),
(18, 27, 'Delivered', 'ok', '2018-11-13 13:11:20'),
(19, 30, 'Delivered', 'ok', '2018-11-15 11:23:43');

-- --------------------------------------------------------

--
-- Table structure for table `productreviews`
--

CREATE TABLE `productreviews` (
  `id` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `quality` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `summary` varchar(255) NOT NULL,
  `review` longtext NOT NULL,
  `reviewDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productreviews`
--

INSERT INTO `productreviews` (`id`, `productId`, `userid`, `quality`, `price`, `value`, `name`, `summary`, `review`, `reviewDate`) VALUES
(24, 55, 3, 5, 0, 0, 'awais', 'awaisahmad1108@gmail.com', 'its good', '2018-11-13 08:07:29'),
(25, 56, 3, 5, 0, 0, 'awais', 'awaisahmad1108@gmail.com', 'its good', '2018-11-13 08:09:18'),
(26, 56, 3, 3, 0, 0, '', '', 'its fine but quality is low', '2018-11-15 11:20:51'),
(27, 56, 3, 3, 0, 0, '', '', 'its fine but quality is low', '2018-11-15 11:22:38'),
(28, 55, 3, 4, 0, 0, 'wasibaba', 'wasi@gmail.com', 'Demo text check', '2020-07-09 10:16:17'),
(29, 55, 3, 4, 0, 0, 'wasibaba', 'wasi@gmail.com', 'Demo text check', '2020-07-09 10:17:18'),
(30, 41, 15, 0, 0, 0, 'jojo', 'joonnyy38@gmail.com', 'jasdagskhdgakhdgla', '2020-07-09 10:39:32'),
(31, 55, 3, 0, 0, 0, 'wasibaba', 'wasi@gmail.com', 'Demo text', '2020-07-19 16:05:27');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `subCategory` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `productCompany` varchar(255) NOT NULL,
  `productPrice` varchar(15) NOT NULL,
  `productPriceBeforeDiscount` varchar(15) NOT NULL,
  `productMoq` int(11) NOT NULL,
  `productDescription` longtext NOT NULL,
  `productFeature` int(11) NOT NULL DEFAULT 0,
  `productDeal` int(11) NOT NULL DEFAULT 0,
  `productOffer` int(11) NOT NULL DEFAULT 0,
  `productImage1` varchar(255) NOT NULL,
  `productImage2` varchar(255) NOT NULL,
  `productImage3` varchar(255) NOT NULL,
  `shippingCharge` int(11) NOT NULL,
  `productAvailability` varchar(255) NOT NULL,
  `postingDate` date NOT NULL,
  `updationDate` varchar(255) NOT NULL,
  `sid` int(11) NOT NULL,
  `productStatus` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category`, `subCategory`, `productName`, `productCompany`, `productPrice`, `productPriceBeforeDiscount`, `productMoq`, `productDescription`, `productFeature`, `productDeal`, `productOffer`, `productImage1`, `productImage2`, `productImage3`, `shippingCharge`, `productAvailability`, `postingDate`, `updationDate`, `sid`, `productStatus`) VALUES
(32, 11, 37, 'Gucci Strips Sandel', '0', '6200-6500', '6700', 50, 'Gucci Strip Sandels<div>All colors&nbsp;<br>All Sizes</div>', 1, 1, 0, 'sbar-3.png', 'sbar-3.png', 'sbar-3.png', 480, 'In Stock', '2020-06-19', '', 11, 1),
(33, 12, 36, 'Laptop For Kids', '0', '3500-3700', '3900', 90, 'Pink Color&nbsp;<br>ALL sizes&nbsp;<br>with lases', 1, 1, 0, 'sbar-7.png', 'sbar-7.png', 'sbar-7.png', 400, 'In Stock', '2020-06-19', '', 11, 1),
(34, 14, 38, 'Puma sandel', '0', '3600-3800', '3900', 20, 'White Color Sandel<br>ALL sizes<br><br>', 1, 0, 0, 'y1.jpg', 'y5.jpg', 'y4.jpg', 200, 'In Stock', '2020-06-19', '', 11, 1),
(37, 20, 46, 'Timber sandel', '0', '6500-6700', '6800', 70, 'Timber Land Sandel<div>For Mens<div>All Sizes<div>All Colors<br></div></div></div>', 1, 0, 0, 'w2.jpg', 'w4.jpg', 'w5.jpg', 200, 'In Stock', '2020-06-19', '', 10, 1),
(41, 20, 45, 'Puma Grey jogar', '0', '7200', '7500', 100, 'ALL Sizes<br>Specially for Men<br>Easy to wear', 1, 1, 0, 'm1.jpg', 'm3.jpg', 'm4.jpg', 500, 'In Stock', '2018-11-13', '', 11, 1),
(54, 20, 46, 'ladies Shoes', '0', '6000-6300', '6500', 200, 'Soft Stuff<br>All Sizes&nbsp;<br>All Colors', 0, 1, 1, 'wr.jpg', 'wr1.jpg', 'wr.jpg', 400, 'In Stock', '2018-11-14', '', 10, 1),
(55, 20, 45, 'Puma ladies Sandel', '0', '3700-380', '3900', 10, 'All Sizes&nbsp;<br>All Colors<br>Comfortable Stuff<br>', 0, 1, 1, 'l2.jpg', 'l3.jpg', 'l5.jpg', 200, 'In Stock', '2018-11-14', '', 11, 1),
(56, 10, 34, 'adidas new Red', '0', '6000-6300', '6400', 50, '<span style=\"color: rgb(102, 102, 102); font-family: Poppins-Regular; font-size: 14px;\">Red Color&nbsp;</span><br style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(102, 102, 102); font-family: Poppins-Regular; font-size: 14px;\"><span style=\"color: rgb(102, 102, 102); font-family: Poppins-Regular; font-size: 14px;\">Mens Fashion&nbsp;</span><br style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(102, 102, 102); font-family: Poppins-Regular; font-size: 14px;\"><span style=\"color: rgb(102, 102, 102); font-family: Poppins-Regular; font-size: 14px;\">without lasses</span><br>', 0, 0, 1, 'e3.jpg', 'e4.jpg', 'e1.jpg', 300, 'In Stock', '2018-11-13', '', 9, 1),
(57, 11, 37, 'Gucci sandels', '0', '2300-2400', '2500', 40, 'All Sizes&nbsp;<br>All Color&nbsp;<br>Good Stuff', 0, 1, 0, 'i1.jpg', 'i4.jpg', 'i5.jpg', 300, 'In Stock', '2018-11-15', '', 7, 1),
(58, 20, 45, 'puma shoes', '0', '3600-3800', '3900', 10, 'all sizes&nbsp;<br>all colors<br><br>', 0, 0, 1, 'o3.jpg', 'o1.jpg', 'o2.jpg', 500, 'In Stock', '2018-11-15', '', 11, 1),
(59, 15, 40, 'Latest Smart phone', '0', '4500 - 4800', '5000', 20, 'All Mobile Colors&nbsp;<br>Available', 1, 1, 1, 'tab-2.png', 'tab-2.png', 'tab-2.png', 500, 'In Stock', '2020-06-25', '', 8, 1),
(60, 11, 35, 'Computer Set', '0', '2300-2400', '2600', 100, 'all color', 1, 1, 0, 'cart1.png', 'cart2.png', 'cart1.png', 200, 'In Stock', '2020-07-28', '', 11, 1);

-- --------------------------------------------------------

--
-- Table structure for table `requirments`
--

CREATE TABLE `requirments` (
  `r_id` int(11) NOT NULL,
  `r_uid` int(11) NOT NULL,
  `r_requirment` varchar(191) NOT NULL,
  `r_name` varchar(30) NOT NULL,
  `r_email` varchar(30) NOT NULL,
  `r_company` varchar(30) NOT NULL,
  `r_contact` varchar(30) NOT NULL,
  `r_roll` varchar(30) NOT NULL,
  `r_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requirments`
--

INSERT INTO `requirments` (`r_id`, `r_uid`, `r_requirment`, `r_name`, `r_email`, `r_company`, `r_contact`, `r_roll`, `r_date`) VALUES
(1, 3, 'washing Service', 'wasibaba', 'wasi@gmail.com', 'Awais traders', '2332-343-1312', 'buyer', '2020-06-25 08:33:25'),
(2, 3, 'danting service', 'wasibaba', 'wasi@gmail.com', 'Awais traders', '2332-343-2342', 'buyer', '2020-07-29 08:34:30'),
(3, 3, 'cleaning', 'wasibaba', 'wasi@gmail.com', 'Awais traders', '2323-343-3223', 'buyer', '2020-07-29 08:35:34'),
(4, 3, 'check', 'wasibaba', 'wasi@gmail.com', 'Awais traders', '2433-323-2343', 'buyer', '2020-07-29 08:40:22'),
(5, 3, 'check 2', 'wasibaba', 'wasi@gmail.com', 'Awais traders', '2332-443-1231', 'buyer', '2020-07-29 08:41:55'),
(6, 3, 'check 2', 'wasibaba', 'wasi@gmail.com', 'Awais traders', '1332-231-2321', 'buyer', '2020-07-29 08:42:35'),
(7, 3, 'inhale', 'wasibaba', 'wasi@gmail.com', 'Awais traders', '6673-233-2342', 'buyer', '2020-07-29 10:27:01'),
(8, 3, 'inhale1', 'wasibaba', 'wasi@gmail.com', 'junaid works', '4444-444-4444', 'buyer', '2020-07-29 10:29:12'),
(9, 3, 'imahel 2', 'wasibaba', 'wasi@gmail.com', 'junaid works', '2222-222-2222', 'seller', '2020-07-29 10:30:03'),
(10, 3, 'hjj', 'wasibaba', 'wasi@gmail.com', '', '2222-222-2222', 'buyer', '2020-07-29 10:32:44'),
(11, 3, 'check 2', 'wasibaba', 'wasi@gmail.com', 'Awais traders', '2222-222-2222', 'seller', '2020-07-29 10:33:29'),
(12, 3, 'jhs', 'wasibaba', 'wasi@gmail.com', 'junaid works', '6633-333-3333', 'seller', '2020-07-29 10:35:14');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `id` int(11) NOT NULL,
  `image` varchar(91) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` int(11) NOT NULL COMMENT '1)Active 2)De active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`id`, `image`, `username`, `email`, `password`, `f_name`, `company`, `contact`, `address`, `status`) VALUES
(7, '', 'agent', '', 'b33aed8f3134996703dc39f9a7c95783', 'agent', 'Gucci', 'demo', 'demo', 1),
(8, '', 'touseef', '', '827ccb0eea8a706c4c34a16891f84e7b', 'Touseef Sheikh', 'Stylo', '03244866632', 'house no23812', 2),
(9, '', 'manager1', '', 'c240642ddef994358c96da82c0361a58', 'manager adidas', 'adidas', '031622925', 'jadkadadhanak ', 1),
(10, '', 'manager', '', '1d0258c2440a8d19e716292b231e3190', 'manager Timberland', 'Timberland', '031622925452', 'jadkadadhanak dhakana', 1),
(11, 'blog-03.jpg', 'puma', 'puma@gmail.com', 'd9f32436125b47e03d11fbf1fa62424a', 'Puma manager', 'Puma', '03056259', 'Lahore Walton ', 1),
(12, '', 'Airness', '', 'a9f36b85d0fe9a4581c352b9c2cb004a', 'Airness', 'Airness', '060262695', 'Lahore', 1),
(13, '', 'AbdullahSaqib', '', '43bbccf8ffa72064854c7fa715bd6291', 'Abdullah Saqib', 'Sockoye', '03368736417', 'Lahore', 1),
(14, '', 'awais123', 'awais@gmail.com', '7192b1d8fc5f69d16272f7b928b91645', 'awais', 'Awais traders', '0305-420-9838', 'Lahore        ', 2),
(15, '', 'abdullah123', 'saqib@gmail.com', '8c1da217916d4b028c858424f54afb84', 'Abdullah Saqib', 'Sockoye', '0324-332-4488', '        gulberg llahore', 2),
(16, 'about-02.jpg', 'junaid123', 'junaid@gmail.com', 'da45ac978676880b72d2ef9fcbe87a4c', 'junaid', 'junaid works', '0305-420-9838', 'lahore        ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `sl_id` int(11) NOT NULL,
  `sl_heading1` varchar(91) NOT NULL,
  `sl_subheading1` varchar(90) NOT NULL,
  `sl_smheading1` varchar(191) NOT NULL,
  `sl_image1` varchar(91) NOT NULL,
  `sl_heading2` varchar(91) NOT NULL,
  `sl_subheading2` varchar(91) NOT NULL,
  `sl_smheading2` varchar(191) NOT NULL,
  `sl_image2` varchar(91) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`sl_id`, `sl_heading1`, `sl_subheading1`, `sl_smheading1`, `sl_image1`, `sl_heading2`, `sl_subheading2`, `sl_smheading2`, `sl_image2`) VALUES
(1, 'New Products Collection 10', '20% sale off', 'Big sale', 'mega-2.jpg', 'Top Quality Products 10', '10 % sale', 'Regular Sale', 'mega-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(11) NOT NULL,
  `categoryid` int(11) NOT NULL,
  `subcategory` varchar(91) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `categoryid`, `subcategory`, `creationDate`, `updationDate`) VALUES
(34, 10, 'Outfitter', '2018-11-03 04:14:23', '01-07-2020 03:01:56 PM'),
(35, 11, 'adidas', '2018-11-03 04:14:29', '14-11-2018 01:06:35 PM'),
(36, 12, 'DELL', '2018-11-03 04:14:32', '01-07-2020 03:02:37 PM'),
(37, 11, 'Gucci', '2018-11-03 04:15:00', ''),
(38, 14, 'HP', '2018-11-03 04:15:30', '01-07-2020 03:02:58 PM'),
(39, 12, 'HP', '2018-11-03 04:15:50', '01-07-2020 03:03:18 PM'),
(40, 15, 'stylo', '2018-11-03 04:15:57', ''),
(42, 15, 'Puma', '2018-11-13 07:21:09', ''),
(45, 20, 'i Phone 8', '2018-11-14 03:15:44', ''),
(46, 20, 'i Phone X', '2018-11-14 03:35:05', ''),
(47, 10, 'Mask Machinery', '2020-07-19 04:17:06', ''),
(48, 10, 'Maskk', '2020-07-19 05:00:39', '19-07-2020 03:01:12 PM'),
(49, 19, 'Bluetooth Speakers', '2020-07-28 08:25:04', ''),
(50, 13, 'Mobile Charger', '2020-07-28 08:32:25', ''),
(51, 13, 'Mobile Cables', '2020-07-28 08:24:04', '');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `userip` binary(16) NOT NULL,
  `loginTime` timestamp NOT NULL DEFAULT current_timestamp(),
  `logout` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `userEmail`, `userip`, `loginTime`, `logout`, `status`) VALUES
(1, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-02-26 11:18:50', '', 1),
(2, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-02-26 11:29:33', '', 1),
(3, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-02-26 11:30:11', '', 1),
(4, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-02-26 15:00:23', '26-02-2017 11:12:06 PM', 1),
(5, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-02-26 18:08:58', '', 0),
(6, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-02-26 18:09:41', '', 0),
(7, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-02-26 18:10:04', '', 0),
(8, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-02-26 18:10:31', '', 0),
(9, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-02-26 18:13:43', '', 1),
(10, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-02-27 18:52:58', '', 0),
(11, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-02-27 18:53:07', '', 1),
(12, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-03-03 18:00:09', '', 0),
(13, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-03-03 18:00:15', '', 1),
(14, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-03-06 18:10:26', '', 1),
(15, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-03-07 12:28:16', '', 1),
(16, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-03-07 18:43:27', '', 1),
(17, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-03-07 18:55:33', '', 1),
(18, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-03-07 19:44:29', '', 1),
(19, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-03-08 19:21:15', '', 1),
(20, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-03-15 17:19:38', '', 1),
(21, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-03-15 17:20:36', '15-03-2017 10:50:39 PM', 1),
(22, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-03-16 01:13:57', '', 1),
(23, 'amit@gmail.com', 0x3a3a3100000000000000000000000000, '2018-07-03 16:55:01', '', 0),
(24, 'wasi@gmail.com', 0x3a3a3100000000000000000000000000, '2018-07-03 16:56:00', '', 1),
(25, 'wasi@gmail.com', 0x3a3a3100000000000000000000000000, '2018-07-04 06:39:17', '04-07-2018 12:15:59 PM', 1),
(26, 'wasi@gmail.com', 0x3a3a3100000000000000000000000000, '2018-07-04 06:48:08', '', 1),
(27, 'wasi@gmail.com', 0x3a3a3100000000000000000000000000, '2018-08-30 07:00:29', '', 1),
(28, 'wasi@gmail.com', 0x3a3a3100000000000000000000000000, '2018-09-17 21:30:31', '18-09-2018 03:00:33 AM', 1),
(29, 'wasi@gmail.com', 0x3a3a3100000000000000000000000000, '2018-09-17 22:20:19', '18-09-2018 03:50:34 AM', 1),
(30, 'wasi@gmail.com', 0x3a3a3100000000000000000000000000, '2018-10-22 22:32:47', '', 1),
(31, 'wasi@gmail.com', 0x3a3a3100000000000000000000000000, '2018-10-27 21:10:12', '', 1),
(32, 'wasi@gmail.com', 0x3a3a3100000000000000000000000000, '2018-10-31 21:06:47', '01-11-2018 02:37:48 AM', 1),
(33, 'zain@gmail.com', 0x3a3a3100000000000000000000000000, '2018-10-31 21:08:45', '', 1),
(34, 'ali@gmail.com', 0x3a3a3100000000000000000000000000, '2018-11-06 08:58:00', '06-11-2018 02:13:27 PM', 1),
(35, 'wasi@gmail.com', 0x3a3a3100000000000000000000000000, '2018-11-06 09:17:52', '06-11-2018 02:30:48 PM', 1),
(36, 'wasi@gmail.com', 0x3a3a3100000000000000000000000000, '2018-11-06 09:34:10', '06-11-2018 02:43:52 PM', 1),
(37, 'wasi@gmail.com', 0x3a3a3100000000000000000000000000, '2018-11-06 10:29:44', '', 1),
(38, 'wasi@gmail.com', 0x3a3a3100000000000000000000000000, '2018-11-06 10:29:53', '06-11-2018 03:54:58 PM', 1),
(39, 'wasi@gmail.com', 0x3a3a3100000000000000000000000000, '2018-11-06 18:07:31', '07-11-2018 12:22:24 PM', 1),
(40, 'wasi@gmail.com', 0x3a3a3100000000000000000000000000, '2018-11-07 07:26:27', '', 1),
(41, 'wasi@gmail.com', 0x3a3a3100000000000000000000000000, '2018-11-07 07:28:19', '07-11-2018 01:28:15 PM', 1),
(42, 'wasi@gmail.com', 0x3a3a3100000000000000000000000000, '2018-11-07 09:52:20', '07-11-2018 05:01:37 PM', 1),
(43, 'ali@gmail.com', 0x3a3a3100000000000000000000000000, '2018-11-07 12:07:20', '', 1),
(44, 'wasi@gmail.com', 0x3a3a3100000000000000000000000000, '2018-11-08 10:02:05', '09-11-2018 07:36:59 PM', 1),
(45, 'wasi@gmail.com', 0x3a3a3100000000000000000000000000, '2018-11-09 14:50:51', '12-11-2018 02:07:28 PM', 1),
(46, 'wasi@gmail.com', 0x3a3a3100000000000000000000000000, '2018-11-12 09:07:43', '12-11-2018 02:37:30 PM', 1),
(47, 'wasi@gmail.com', 0x3a3a3100000000000000000000000000, '2018-11-12 09:38:58', '', 1),
(48, 'wasi@gmail.com', 0x3a3a3100000000000000000000000000, '2018-11-12 10:03:34', '13-11-2018 01:25:20 PM', 1),
(49, 'ali@gmail.com', 0x3a3a3100000000000000000000000000, '2018-11-13 08:28:06', '', 1),
(50, 'wasi@gmail.com', 0x3a3a3100000000000000000000000000, '2018-11-13 10:06:34', '', 1),
(51, 'wasi@gmail.com', 0x3a3a3100000000000000000000000000, '2018-11-13 12:27:03', '13-11-2018 05:27:04 PM', 1),
(52, 'wasi@gmail.com', 0x3a3a3100000000000000000000000000, '2018-11-13 12:27:11', '', 1),
(53, 'wasi@gmail.com', 0x3a3a3100000000000000000000000000, '2018-11-15 11:18:16', '', 1),
(54, 'wasi@gmail.com', 0x3a3a3100000000000000000000000000, '2018-11-15 11:29:48', '15-11-2018 04:31:57 PM', 1),
(55, 'ali@gmail.com', 0x3a3a3100000000000000000000000000, '2018-11-15 11:32:09', '15-11-2018 04:42:18 PM', 1),
(56, 'wasi@gmail.com', 0x3a3a3100000000000000000000000000, '2018-11-15 11:42:27', '', 1),
(57, 'wasi@gmail.com', 0x3a3a3100000000000000000000000000, '2018-11-23 10:27:47', '', 1),
(58, 'wasi@gmail.com', 0x3a3a3100000000000000000000000000, '2020-07-07 08:26:15', '', 1),
(59, 'wasi@gmail.com', 0x3a3a3100000000000000000000000000, '2020-07-07 08:31:23', '', 1),
(60, 'alibaba@gmail.com', 0x3a3a3100000000000000000000000000, '2020-07-07 10:33:44', '', 1),
(61, 'alibaba@gmail.com', 0x3a3a3100000000000000000000000000, '2020-07-07 10:39:07', '', 1),
(62, 'wasi@gmail.com', 0x3a3a3100000000000000000000000000, '2020-07-07 10:39:28', '', 1),
(63, 'alibaba@gmail.com', 0x3a3a3100000000000000000000000000, '2020-07-07 10:55:56', '', 1),
(64, 'adnann@gmail.com', 0x3a3a3100000000000000000000000000, '2020-07-08 11:07:19', '', 1),
(65, 'wasi@gmail.com', 0x3a3a3100000000000000000000000000, '2020-07-09 09:33:16', '', 1),
(66, 'joonnyy38@gmail.com', 0x3139322e3136382e312e313032000000, '2020-07-09 10:38:42', '', 1),
(67, 'alibaba@gmail.com', 0x3a3a3100000000000000000000000000, '2020-07-09 12:00:28', '', 1),
(68, 'alibaba@gmail.com', 0x3131392e3135332e3136392e32343600, '2020-07-10 20:13:56', '', 1),
(69, 'alibaba@gmail.com', 0x3131392e3135332e3136392e32343600, '2020-07-10 20:14:40', '', 1),
(70, 'abdulrehmanshikh243@gmail.com', 0x3131302e33382e39342e313531000000, '2020-07-10 20:19:02', '', 1),
(71, 'aidenrodar@gmail.com', 0x3131302e33382e39342e313531000000, '2020-07-11 07:36:16', '', 1),
(72, 'aidenrodar@gmail.com', 0x3131302e33382e39342e313531000000, '2020-07-11 07:37:44', '', 1),
(73, 'aidenrodar@gmail.com', 0x3131302e33382e39342e313531000000, '2020-07-11 07:38:05', '', 1),
(74, 'aidenrodar@gmail.com', 0x3131302e33382e39342e313531000000, '2020-07-11 08:00:54', '', 1),
(75, 'aidenrodar@gmail.com', 0x3131302e33382e39342e313531000000, '2020-07-11 10:48:32', '', 1),
(76, 'aidenrodar@gmail.com', 0x3131302e33382e39342e313531000000, '2020-07-11 10:48:58', '', 1),
(77, 'aidenrodar@gmail.com', 0x3131302e33382e39342e313531000000, '2020-07-12 08:05:45', '', 1),
(78, 'aidenrodar@gmail.com', 0x3131302e33382e39342e313531000000, '2020-07-12 23:23:26', '', 1),
(79, 'wasi@gmail.com', 0x34322e3230312e3136392e3330000000, '2020-07-15 10:00:05', '', 1),
(80, 'wasi@gmail.com', 0x34322e3230312e3136392e3330000000, '2020-07-15 10:00:33', '', 1),
(81, 'wasi@gmail.com', 0x34322e3230312e3136392e3330000000, '2020-07-15 11:26:48', '', 1),
(82, 'aidenrodar@gmail.com', 0x34332e3234352e3230372e3136390000, '2020-07-15 16:25:02', '', 1),
(83, 'aidenrodar@gmail.com', 0x34332e3234352e3230372e3136390000, '2020-07-15 16:25:46', '', 1),
(84, 'aidenrodar@gmail.com', 0x34332e3234352e3230372e3136390000, '2020-07-15 16:57:11', '', 1),
(85, 'aidenrodar@gmail.com', 0x3131302e33382e39342e313531000000, '2020-07-16 14:05:10', '16-07-2020 07:08:06 PM', 1),
(86, 'b@gmail.com', 0x3131302e33382e39342e313531000000, '2020-07-16 14:26:55', '16-07-2020 07:27:02 PM', 1),
(87, 'b@gmail.com', 0x3131302e33382e39342e313531000000, '2020-07-16 14:27:38', '', 1),
(88, 'aidenrodar@gmail.com', 0x3131302e33382e39342e313531000000, '2020-07-17 08:48:31', '', 1),
(89, 'aidenrodar@gmail.com', 0x3131302e33382e39342e313531000000, '2020-07-17 18:32:27', '', 1),
(90, 'aidenrodar@gmail.com', 0x3131302e33382e39342e313531000000, '2020-07-19 09:09:25', '', 1),
(91, 'wasi@gmail.com', 0x3a3a3100000000000000000000000000, '2020-07-19 15:51:35', '', 1),
(92, 'wasi@gmail.com', 0x3a3a3100000000000000000000000000, '2020-07-19 16:03:02', '20-07-2020 04:03:47 PM', 1),
(93, 'wasi@gmail.com', 0x3a3a3100000000000000000000000000, '2020-07-20 10:54:43', '', 1),
(94, 'wasi@gmail.com', 0x3a3a3100000000000000000000000000, '2020-07-29 07:59:12', '29-07-2020 08:28:00 PM', 1),
(95, 'wasi@gmail.com', 0x3a3a3100000000000000000000000000, '2020-07-29 15:28:43', '', 1),
(96, 'wasi@gmail.com', 0x3a3a3100000000000000000000000000, '2020-07-29 15:33:07', '', 1),
(97, 'wasi@gmail.com', 0x3a3a3100000000000000000000000000, '2020-08-04 08:41:11', '04-08-2020 01:41:16 PM', 1),
(98, 'wasi@gmail.com', 0x3a3a3100000000000000000000000000, '2020-08-04 08:47:27', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contactno` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `shippingAddress` longtext NOT NULL,
  `shippingState` varchar(255) NOT NULL,
  `shippingCity` varchar(255) NOT NULL,
  `shippingPincode` int(11) NOT NULL,
  `billingAddress` longtext NOT NULL,
  `billingState` varchar(255) NOT NULL,
  `billingCity` varchar(255) NOT NULL,
  `billingPincode` int(11) NOT NULL,
  `regDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `contactno`, `password`, `shippingAddress`, `shippingState`, `shippingCity`, `shippingPincode`, `billingAddress`, `billingState`, `billingCity`, `billingPincode`, `regDate`, `updationDate`) VALUES
(3, 'wasibaba', 'wasi@gmail.com', '0324-332-4488', '011e1338c48168b8c8841f2af1e8e82f', 'Lahore Walton ', 'Punjab', 'Lahore', 54000, 'Lahore Walton ', 'Punjab', 'Lahore', 50000000, '2018-07-03 16:55:26', '07-11-2018 03:18:47 PM'),
(4, 'zain', 'zain@gmail.com', '876757575', '3ed9b95e4b6f2c345836def81e570ef1', '', '', '', 0, '', '', '', 0, '2018-10-31 21:08:27', ''),
(5, 'ali', 'ali@gmail.com', '675768687', '86318e52f5ed4801abe1d13d509443de', 'Lahore Walton karachi', 'Punjab', 'Lahore', 54000, 'Lahore Walton karachi', 'Punjab', 'Lahore', 54000, '2018-11-06 08:51:29', ''),
(6, 'awais', 'awaisahmad1108@gmail.com', '657576876', 'bf8f8bc114068709aafc9fa41c3d4b44', '', '', '', 0, '', '', '', 0, '2018-11-06 08:58:19', ''),
(7, 'ali', 'ali@gmail.com', '675567868', '86318e52f5ed4801abe1d13d509443de', '', '', '', 0, '', '', '', 0, '2018-11-07 12:07:09', ''),
(8, 'rehman', 'rehman@gmail.com', '3054209831', 'b86bb59cddf35f94c2bf4cebb065e366', '', '', '', 0, '', '', '', 0, '2020-07-07 09:40:04', ''),
(9, 'pakmart', 'pakmart@gmail.com', '7361783617', '427486ff22caa8b840a02290e5a26cb0', '', '', '', 0, '', '', '', 0, '2020-07-07 09:49:44', ''),
(13, 'alibaba', 'alibaba@gmail.com', '305', '46bd7daacfa326fc5794a8886b138104', '', '', '', 0, '', '', '', 0, '2020-07-07 10:29:03', ''),
(14, 'adnann', 'adnann@gmail.com', '0305-420-9838', '3e58094af4729366aafa51504db26f51', '', '', '', 0, '', '', '', 0, '2020-07-08 11:06:57', ''),
(15, 'jojo', 'joonnyy38@gmail.com', '0333-689-2372', 'edff5d0743df05b2deb7ccba5ec529ca', '', '', '', 0, '', '', '', 0, '2020-07-09 10:38:34', ''),
(16, 'Abdulrahman', 'abdulrehmanshikh243@gmail.com', '0324-332-4488', '9a607d3e8e663597dc071c4714cec8a2', '', '', '', 0, '', '', '', 0, '2020-07-10 20:18:54', ''),
(17, 'aiden rod', 'aidenrodar@gmail.com', '0324-332-4488', '9a607d3e8e663597dc071c4714cec8a2', '', '', '', 0, '', '', '', 0, '2020-07-11 07:36:03', ''),
(18, 'bilawal', 'b@gmail.com', '0324-332-4488', '9a607d3e8e663597dc071c4714cec8a2', '', '', '', 0, '', '', '', 0, '2020-07-16 14:26:37', '');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `postingDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `userId`, `productId`, `postingDate`) VALUES
(143, 3, 34, '2018-11-13 08:03:33'),
(144, 3, 41, '2018-11-13 12:27:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`inq_id`);

--
-- Indexes for table `maincategory`
--
ALTER TABLE `maincategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordertrackhistory`
--
ALTER TABLE `ordertrackhistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productreviews`
--
ALTER TABLE `productreviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sid` (`sid`);

--
-- Indexes for table `requirments`
--
ALTER TABLE `requirments`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`sl_id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `inq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `maincategory`
--
ALTER TABLE `maincategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `productreviews`
--
ALTER TABLE `productreviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `requirments`
--
ALTER TABLE `requirments`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `sl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
