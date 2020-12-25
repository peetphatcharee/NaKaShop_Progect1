-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2020 at 03:48 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `naka_shops`
--

-- --------------------------------------------------------

--
-- Table structure for table `approve`
--

CREATE TABLE `approve` (
  `approve_id` int(11) NOT NULL,
  `approve_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `customer_password` varchar(100) NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `customer_tel` varchar(100) NOT NULL,
  `customer_address` varchar(100) NOT NULL,
  `Payment_id` int(11) DEFAULT NULL,
  `Delivery_id` int(11) DEFAULT NULL,
  `reviews_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_password`, `customer_email`, `customer_tel`, `customer_address`, `Payment_id`, `Delivery_id`, `reviews_id`) VALUES
(1, 'ppppp', '1234567', 'peet@gmail.com', '123456789', 'asdfghjkl;\'', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `delivery_id` int(11) NOT NULL,
  `delivery_tel` varchar(255) NOT NULL,
  `delivery_address` varchar(255) NOT NULL,
  `delivery_tracking` varchar(100) NOT NULL,
  `delivery_date` date NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `order_name` varchar(100) NOT NULL,
  `order_ image` text NOT NULL,
  `order_num` varchar(100) NOT NULL,
  `order_price` varchar(100) NOT NULL,
  `order_discount` varchar(100) NOT NULL,
  `order_amount` varchar(100) NOT NULL,
  `order_date` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `payment_bankname` varchar(255) NOT NULL,
  `payment_date` date NOT NULL,
  `payment_time` time NOT NULL,
  `payment_ Proof` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_num` varchar(100) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_image` blob NOT NULL,
  `product_detail` text NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `shop_id`, `product_name`, `product_num`, `product_price`, `product_image`, `product_detail`, `category_id`) VALUES
(25, 1, 'หมวกadsfgfhgjhj', '45', '4', 0x73686f7070696e672d636172742e706e67, '5555555555555555555', 2),
(26, 6, 'water', '45', '5', 0x4e414b412053484f502e706e67, 'ีัรนนสงว', 2),
(27, 8, 'น้ำมันมะพร้าว', '50', '300', 0x6c6f2e504e47, 'สกัดจากน้ำมะพร้าวแก้เก็บใหม่ จากสวนที่ดูแลแบบเกษตรธรรมชาติ \r\nสพอาดบริสุทธิ์ กลิ่นหอม ไม่ใส่สารกันหืน สามารถใช้รับประทานเพื่อสุขภาพ\r\nกลั้วปาก หรือใช้ภายนอกเพื่อบำรุวผิวและผมได้ดีมาก บรรจุลงขสดที่ผ่านการฆ่าเชื่อ ได้มาตรฐาน ฝาปิดมิดชิด น้ำมันมะพร้าวสกัดเย็น เหมาะสำหรับบริโภคเป็นประจำ ผลิตจากมะพร้าวพันธุ์ดี\r\n	น้ำมันมะพร้าวช่วยกระตุ้นกระบวนการเผาผลาญของร่างกาย ลดน้ำหนัก\r\nและ เพิ่มไขมันที่ดี(HDL) อีกทั้งยังช่วยสร้างภูมิต้านทานให้กับ\r\nร่างกายนอกจากนี้ยังสามารถนำใช้เพื่อบำรุงเส้นผมและผิวเพื่อความนุ่มชุ่มชื่น', 3),
(28, 9, 'น้ำมันมะพร้าว', '5', '100', 0x6c6f2e504e47, 'สกัดจากน้ำมะพร้าวแก้เก็บใหม่ จากสวนที่ดูแลแบบเกษตรธรรมชาติ \r\nสพอาดบริสุทธิ์ กลิ่นหอม ไม่ใส่สารกันหืน สามารถใช้รับประทานเพื่อสุขภาพ\r\nกลั้วปาก หรือใช้ภายนอกเพื่อบำรุวผิวและผมได้ดีมาก บรรจุลงขสดที่ผ่านการฆ่าเชื่อ ได้มาตรฐาน ฝาปิดมิดชิด น้ำมันมะพร้าวสกัดเย็น เหมาะสำหรับบริโภคเป็นประจำ ผลิตจากมะพร้าวพันธุ์ดี\r\n	น้ำมันมะพร้าวช่วยกระตุ้นกระบวนการเผาผลาญของร่างกาย ลดน้ำหนัก\r\nและ เพิ่มไขมันที่ดี(HDL) อีกทั้งยังช่วยสร้างภูมิต้านทานให้กับ\r\nร่างกายนอกจากนี้ยังสามารถนำใช้เพื่อบำรุงเส้นผมและผิวเพื่อความนุ่มชุ่มชื่น', 3),
(29, 11, 'น้ำมันมะพร้าว', '45', '100', 0x6c6f2e504e47, 'rtrtrtrrtrte', 3),
(30, 11, 'สบู่', '45', '50', 0x70726f322e504e47, 'asdfhgjkl;yl9il89', 3);

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`category_id`, `category_name`) VALUES
(1, 'เสื้อผ้า'),
(2, 'กีฬา'),
(3, 'ผิวกาย');

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

CREATE TABLE `promotion` (
  `promotion_id` int(11) NOT NULL,
  `promotion_name` varchar(255) NOT NULL,
  `promotion_discounts` int(11) NOT NULL,
  `promotion_coupon` varchar(255) NOT NULL,
  `promotion_details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `reviews_id` int(11) NOT NULL,
  `reviews_comment` varchar(255) NOT NULL,
  `reviews_score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `shop_id` int(11) NOT NULL,
  `shop_owner` varchar(255) NOT NULL,
  `shop_name` varchar(100) NOT NULL,
  `shop_password` varchar(255) NOT NULL,
  `shop_email` varchar(255) NOT NULL,
  `shop_tel` varchar(100) NOT NULL,
  `shop_address` varchar(100) NOT NULL,
  `shop_logo` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`shop_id`, `shop_owner`, `shop_name`, `shop_password`, `shop_email`, `shop_tel`, `shop_address`, `shop_logo`, `created_at`, `updated_at`) VALUES
(10, 'พัชรี  แอแป', 'kku', '123456', 'peet@gmail.com', '0999274854', '112 ม.7', 'images.jfif', NULL, NULL),
(11, 'พัชรี  แอแป', 'nkc', '123456', 'p@gmail.com', '0999274854', '112', 'download.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `summary`
--

CREATE TABLE `summary` (
  `summary_id` int(11) NOT NULL,
  `summary_month` varchar(255) NOT NULL,
  `summary_year` varchar(255) NOT NULL,
  `summary_sales` int(11) NOT NULL,
  `summary_allorders` varchar(255) NOT NULL,
  `summary_visitors` int(11) NOT NULL,
  `summary_bestproducts` varchar(255) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(11, 'พัชรี', 'phatcharee.ae@kkumail.com', '$2y$10$fx/KiuGKKy9x6VssDXxvu.Z2XunbKCvgFFdgbZkM06I8U0ZPaEMkW', '1606981859.jpg', NULL, '2020-12-03 00:51:00', '2020-12-03 00:51:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `approve`
--
ALTER TABLE `approve`
  ADD PRIMARY KEY (`approve_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`delivery_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`promotion_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`reviews_id`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`shop_id`);

--
-- Indexes for table `summary`
--
ALTER TABLE `summary`
  ADD PRIMARY KEY (`summary_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `approve`
--
ALTER TABLE `approve`
  MODIFY `approve_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `delivery_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `promotion_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `reviews_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `shop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `summary`
--
ALTER TABLE `summary`
  MODIFY `summary_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
