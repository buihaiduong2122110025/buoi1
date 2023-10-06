-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2023 at 03:14 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buihaiduong2122110025ltw`
--

-- --------------------------------------------------------

--
-- Table structure for table `0025_banner`
--

CREATE TABLE `0025_banner` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(1000) NOT NULL,
  `link` varchar(1000) NOT NULL,
  `sort_order` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `position` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `0025_brand`
--

CREATE TABLE `0025_brand` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(1000) NOT NULL,
  `slug` varchar(1000) NOT NULL,
  `image` varchar(1000) DEFAULT NULL,
  `sort_order` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `description` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `0025_brand`
--

INSERT INTO `0025_brand` (`id`, `name`, `slug`, `image`, `sort_order`, `description`, `created_at`, `created_by`, `updated_at`, `updated_by`, `status`) VALUES
(1, 'Lao 1', 'lao ', NULL, 1, 'lao', '2023-10-06 20:00:59', 1, NULL, NULL, 2),
(2, 'Việt Nam', 'viet nam ', NULL, 1, 'Việt Nam', '2023-10-06 20:10:14', 1, NULL, NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `0025_category`
--

CREATE TABLE `0025_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(1000) NOT NULL,
  `slug` varchar(1000) NOT NULL,
  `parent_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `sort_order` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `image` varchar(1000) DEFAULT NULL,
  `level` tinyint(3) UNSIGNED NOT NULL DEFAULT 1,
  `description` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `0025_contact`
--

CREATE TABLE `0025_contact` (
  `id` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` mediumtext NOT NULL,
  `replay_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `0025_menu`
--

CREATE TABLE `0025_menu` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `link` varchar(100) NOT NULL,
  `table_id` int(10) UNSIGNED NOT NULL,
  `type` varchar(255) NOT NULL,
  `parent_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `level` tinyint(3) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `0025_order`
--

CREATE TABLE `0025_order` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `deliveryname` varchar(255) DEFAULT NULL,
  `deliveryphone` varchar(255) DEFAULT NULL,
  `deliveryemail` varchar(255) DEFAULT NULL,
  `deliveryaddress` varchar(255) DEFAULT NULL,
  `note` varchar(1000) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `0025_orderdetail`
--

CREATE TABLE `0025_orderdetail` (
  `id` int(11) NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `price` float NOT NULL,
  `qty` int(10) UNSIGNED NOT NULL,
  `amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `0025_post`
--

CREATE TABLE `0025_post` (
  `id` int(10) UNSIGNED NOT NULL,
  `topic_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(1000) NOT NULL,
  `slug` varchar(1000) NOT NULL,
  `detail` mediumtext NOT NULL,
  `image` varchar(1000) NOT NULL,
  `type` varchar(100) NOT NULL DEFAULT 'post',
  `description` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `updated_at` datetime DEFAULT NULL,
  `updated_` int(10) UNSIGNED DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `0025_product`
--

CREATE TABLE `0025_product` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `brand_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(1000) NOT NULL,
  `slug` varchar(1000) NOT NULL,
  `price` float NOT NULL,
  `price_sale` float NOT NULL,
  `image` varchar(1000) NOT NULL,
  `qty` int(10) UNSIGNED NOT NULL,
  `detail` mediumtext NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `0025_topic`
--

CREATE TABLE `0025_topic` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(1000) NOT NULL,
  `slug` varchar(1000) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `0025_user`
--

CREATE TABLE `0025_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `roles` varchar(255) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `0025_banner`
--
ALTER TABLE `0025_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `0025_brand`
--
ALTER TABLE `0025_brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `0025_category`
--
ALTER TABLE `0025_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `0025_contact`
--
ALTER TABLE `0025_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `0025_menu`
--
ALTER TABLE `0025_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `0025_order`
--
ALTER TABLE `0025_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `0025_orderdetail`
--
ALTER TABLE `0025_orderdetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `0025_post`
--
ALTER TABLE `0025_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `0025_product`
--
ALTER TABLE `0025_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `0025_topic`
--
ALTER TABLE `0025_topic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `0025_user`
--
ALTER TABLE `0025_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `0025_banner`
--
ALTER TABLE `0025_banner`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `0025_brand`
--
ALTER TABLE `0025_brand`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `0025_category`
--
ALTER TABLE `0025_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `0025_contact`
--
ALTER TABLE `0025_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `0025_menu`
--
ALTER TABLE `0025_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `0025_order`
--
ALTER TABLE `0025_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `0025_orderdetail`
--
ALTER TABLE `0025_orderdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `0025_post`
--
ALTER TABLE `0025_post`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `0025_product`
--
ALTER TABLE `0025_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `0025_topic`
--
ALTER TABLE `0025_topic`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `0025_user`
--
ALTER TABLE `0025_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
