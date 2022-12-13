-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 13, 2022 at 02:11 PM
-- Server version: 10.1.48-MariaDB-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `6012231005`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `c_name`) VALUES
(1, 'ต้ม'),
(2, 'แกง'),
(3, 'ทอด'),
(4, 'ผัด'),
(5, 'เย็น'),
(6, 'ร้อน');

-- --------------------------------------------------------

--
-- Table structure for table `chart_tbl`
--

CREATE TABLE `chart_tbl` (
  `ch_id` int(11) NOT NULL,
  `ch_name` varchar(20) NOT NULL,
  `ch_price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chart_tbl`
--

INSERT INTO `chart_tbl` (`ch_id`, `ch_name`, `ch_price`) VALUES
(1, 'Product_A', '2900'),
(2, 'Product_B', '3900'),
(3, 'Product_C', '4900'),
(4, 'Product_D', '5900'),
(5, 'Product_E', '6900'),
(1, 'Product_A', '2900'),
(2, 'Product_B', '3900'),
(3, 'Product_C', '4900'),
(4, 'Product_D', '5900'),
(5, 'Product_E', '6900'),
(1, 'Product_A', '2900'),
(2, 'Product_B', '3900'),
(3, 'Product_C', '4900'),
(4, 'Product_D', '5900'),
(5, 'Product_E', '6900'),
(1, 'Product_A', '2900'),
(2, 'Product_B', '3900'),
(3, 'Product_C', '4900'),
(4, 'Product_D', '5900'),
(5, 'Product_E', '6900');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `o_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `item_rating`
--

CREATE TABLE `item_rating` (
  `ratingId` int(11) NOT NULL,
  `itemId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `ratingNumber` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comments` text COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 = Block, 0 = Unblock'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `item_rating`
--

INSERT INTO `item_rating` (`ratingId`, `itemId`, `userId`, `ratingNumber`, `title`, `comments`, `created`, `modified`, `status`) VALUES
(1, 12345678, 1, 5, 'เครื่องดื่ม', 'อร่อยมากๆ', '2021-07-31 21:59:06', '2021-07-31 21:59:06', 1),
(2, 12345678, 1, 4, 'เครี่องดื่ม', 'อร่อยดี', '2022-03-30 02:04:36', '2022-03-30 02:04:36', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mo`
--

CREATE TABLE `mo` (
  `id` int(11) NOT NULL,
  `item_name` text NOT NULL,
  `date` date NOT NULL,
  `m_name` varchar(255) NOT NULL,
  `amount` float(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mo`
--

INSERT INTO `mo` (`id`, `item_name`, `date`, `m_name`, `amount`) VALUES
(1, 'ค่าเดินทาง', '2564-08-26', 'ฐิติมา', 1000.00),
(2, 'ค่าประชุม', '2564-08-26', 'ฐิติมา', 1500.00),
(3, 'ค่าอาหาร', '2564-08-27', 'ฐิติมา', 500.00),
(4, 'ค่าอุปกรณ์', '2564-09-01', 'ฐิติมา', 800.00);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `d_id` int(10) NOT NULL,
  `o_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `d_qty` int(11) NOT NULL,
  `d_subtotal` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`d_id`, `o_id`, `p_id`, `d_qty`, `d_subtotal`) VALUES
(1, 1, 2, 1, 70),
(2, 2, 2, 1, 70);

-- --------------------------------------------------------

--
-- Table structure for table `order_head`
--

CREATE TABLE `order_head` (
  `o_id` int(10) NOT NULL,
  `o_dttm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `o_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `o_addr` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `o_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `o_phone` varchar(20) CHARACTER SET utf8 NOT NULL,
  `o_total` float NOT NULL,
  `o_status` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_head`
--

INSERT INTO `order_head` (`o_id`, `o_dttm`, `o_name`, `o_addr`, `o_email`, `o_phone`, `o_total`, `o_status`) VALUES
(1, '2021-12-01 09:39:38', 'ฐิติมา  พันธ์เพ็ง', '11', 'thitioo@hotmail', '0814083254', 70, 1),
(2, '2022-11-29 16:20:14', 'ฐิติมา  พันธ์เพ็ง', '11', 'thitioo@hotmail', '0814083254', 70, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(200) CHARACTER SET utf8 NOT NULL,
  `p_detail` text CHARACTER SET utf8 NOT NULL,
  `p_price` float DEFAULT NULL,
  `p_pic` varchar(20) CHARACTER SET utf8 NOT NULL,
  `p_view` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `p_detail`, `p_price`, `p_pic`, `p_view`) VALUES
(15, 'ข้าวผัด', 'ร้อน', 70, 'hobbies_hobby_activi', 1),
(2, 'ทอดปลาทูทอด', 'ดี', 70, '3bee15012019.jpg', 50),
(3, 'แกงส้ม', 'ดี', 80, '5bee15012019.jpg', 9),
(4, 'Cappuccino (คาปูชิโน)', 'ร้อน', 69, 'hot.jpg', 6),
(5, 'Americano (อเมริกาโน่)', 'ร้อน', 80, '06-Americano-3.jpg', 3),
(6, 'Mocca (มอคค่า)', 'เย็น', 80, 'images (1).jpg', 0),
(7, 'ช็อคโกแลตนมสด', 'เย็น', 70, 'dirty-chocolate.jpg', 0),
(8, 'ชานมมะพร้าว', 'เย็น', 70, 'nestea.jpg', 2),
(9, 'เนสกาแฟลาเต้ทูโทนเย็น', 'เย็น', 75, 'nescafe.jpg', 0),
(10, 'คโรเกะทูน่าสอดไส้ชีส', 'อาหารทานเล่น', 45, 'appetizer7.jpg', 0),
(11, 'อกไก่ชีสบอล', 'อาหารทานเล่น', 40, 'appetizer8.jpg', 0),
(12, 'ขนมปังปิ้งเสียบไม้', 'อาหารทานเล่น', 50, 'appetizer9.jpg', 0),
(13, 'กาแฟร้อน', 'ร้อน', 69, 'coffee.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `o_status` int(1) NOT NULL,
  `Status_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`o_status`, `Status_name`) VALUES
(1, 'รอชำระเงิน'),
(2, 'ชำระเงินแล้ว');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_adss`
--

CREATE TABLE `tbl_adss` (
  `id_coffee` int(10) NOT NULL,
  `m_name` varchar(500) NOT NULL,
  `cofee_name` varchar(500) NOT NULL,
  `m_phone` varchar(10) NOT NULL,
  `location` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_adss`
--

INSERT INTO `tbl_adss` (`id_coffee`, `m_name`, `cofee_name`, `m_phone`, `location`) VALUES
(3, 'ฐิติมา  พันธ์เพ็ง', 'MY-MO-CAFE', '0654230424', 'xxxx3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_basic`
--

CREATE TABLE `tbl_basic` (
  `b_id` int(10) NOT NULL,
  `m_name` varchar(50) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `m_email` text NOT NULL,
  `m_pass` varchar(13) NOT NULL,
  `m_address` text NOT NULL,
  `m_phone` varchar(10) NOT NULL,
  `member_level` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_basic`
--

INSERT INTO `tbl_basic` (`b_id`, `m_name`, `Username`, `m_email`, `m_pass`, `m_address`, `m_phone`, `member_level`) VALUES
(1, 'ชลิตา แก้วกำเนิด', '111', 'admin123@hotmail.com', '111', '374 ถนน ดำริพัฒนา  22200  65000', '0814083254', 'a'),
(2, 'จารุวรรณ ธาตุ', 'momo123', 'you@hotmail.cim', '1234', '141 หมู่10', '0654230424', 'a'),
(3, 'แสงนภา ชินนะมา', 'admin1', 'admin@hotmail.com', '123456', '374 ถนน ดำริพัฒนา  222', '088569823', 'a'),
(4, 'แสงนภา ชินนะมา', 'admin3', 'admin@hotmail.com', '111', '374 ถนน ดำริพัฒนา  22200  65000', '0611532736', 'a'),
(6, 'ศุภวัทน์ สีปาน', 'petch', 'supawat.se@psru.ac.th', '11111', 'พิษณุโลก', '0809928418', 'a'),
(7, 'เฟื่องลัดดา คงเจริญ', 'fug_noon	', 'fug_noon@gmail.com', '123', '123', '0615698542', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_income`
--

CREATE TABLE `tbl_income` (
  `id` int(11) NOT NULL,
  `detail` text NOT NULL,
  `amount` float(10,2) NOT NULL,
  `datesave` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='เงินได้';

--
-- Dumping data for table `tbl_income`
--

INSERT INTO `tbl_income` (`id`, `detail`, `amount`, `datesave`) VALUES
(9, 'รายได้จากการขายเครื่องดื่ม', 2000.00, '2020-09-10 06:27:03'),
(10, 'รายได้จากการขายอาหาร', 5000.00, '2021-08-03 01:03:48'),
(11, 'รายได้จากการขายอาหาร', 3500.00, '2021-08-03 01:03:55'),
(12, '123', 1666.00, '2022-12-08 17:01:05'),
(13, '', 0.00, '2022-12-08 17:01:05'),
(14, '111', 1.00, '2022-12-08 17:04:57'),
(15, '', 0.00, '2022-12-08 17:04:58');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_location`
--

CREATE TABLE `tbl_location` (
  `id` int(11) NOT NULL,
  `lat` varchar(50) NOT NULL,
  `lng` varchar(50) NOT NULL,
  `location_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_location`
--

INSERT INTO `tbl_location` (`id`, `lat`, `lng`, `location_name`) VALUES
(1, '16.498687999999998', '98.69393919999999', 'บ้านคลอง');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `member_id` int(10) NOT NULL,
  `member_username` varchar(50) NOT NULL,
  `m_pass` varchar(13) NOT NULL,
  `m_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `m_email` text CHARACTER SET utf8 NOT NULL,
  `m_address` text NOT NULL,
  `m_phone` varchar(50) NOT NULL,
  `LINE_id` varchar(50) CHARACTER SET utf8 NOT NULL,
  `member_level` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`member_id`, `member_username`, `m_pass`, `m_name`, `m_email`, `m_address`, `m_phone`, `LINE_id`, `member_level`) VALUES
(1, 'momo123', '111', 'ฐิติมา  พันธ์เพ็ง', 'thitioo@hotmail', '11', '0814083254', '1111', 'm'),
(8, 'Jeep', '1234', 'จารุวรรณ ธาตุ', 'jaruwan.ta@psru.ac.th', '9849 ต.แสนตอ อ.ขาณุวรลักษบุรี จ.กำแพงเพชร', '0969262820', 'Kame_game', 'm'),
(9, 'veeraporn.k', '123456', 'วีรพร  กาศธัญกรณ์', 'veeraporn.k@psru.ac.th', 'พิษณุโลก', '0953177609', '0873181497za', 'm'),
(10, 'petch', '11111', 'ศุภวัทน์ สีปาน', 'supawat.se@psru.ac.th', 'พิษณุโลก', '0809928418', 'supawat112', 'm'),
(11, 'fugnoon', '123', 'เฟื่องลัดดา คงเจริญ', 'fug_noon@gmail.com', '123', '06156985423', 'noon_12', 'm');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sales`
--

CREATE TABLE `tbl_sales` (
  `id` int(11) NOT NULL,
  `product_type` varchar(100) NOT NULL,
  `amount` float(10,2) NOT NULL,
  `date_save` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_sales`
--

INSERT INTO `tbl_sales` (`id`, `product_type`, `amount`, `date_save`) VALUES
(1, 'ทอดปลาทูทอด', 250.00, '2020-04-16'),
(2, 'ข้าวผัด', 400.00, '2020-04-16'),
(3, 'ทอดปลาทูทอด', 150.00, '2020-03-01'),
(4, 'Mocca (มอคค่า)', 500.00, '2020-03-01'),
(5, 'ทอดปลาทูทอด', 400.00, '2020-04-16'),
(6, 'Mocca (มอคค่า)', 1100.00, '2020-04-16'),
(7, 'ทอดปลาทูทอด', 100.00, '2020-03-01'),
(8, 'Mocca (มอคค่า)', 150.00, '2020-03-01'),
(9, 'ชานมมะพร้าว', 300.00, '2020-03-01'),
(10, 'ชานมมะพร้าว', 1400.00, '2020-04-01'),
(11, 'ทอดปลาทูทอด', 800.00, '2020-02-01'),
(12, 'Mocca (มอคค่า)', 100.00, '2020-02-01'),
(13, 'ชานมมะพร้าว', 400.00, '2020-02-02'),
(14, 'ข้าวผัด', 500.00, '2020-04-18'),
(15, 'ข้าวผัด', 500.00, '2020-03-01'),
(16, 'ขนมปังปิ้งเสียบไม้	', 600.00, '2021-10-27'),
(17, 'ขนมปังปิ้งเสียบไม้	', 400.00, '2021-10-27');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_type`
--

CREATE TABLE `tbl_type` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_type`
--

INSERT INTO `tbl_type` (`type_id`, `type_name`) VALUES
(1, 'อิเล็กทรอนิกส์'),
(2, 'รองเท้า'),
(4, 'แฟชั่น'),
(7, 'เครื่องแต่งกาย'),
(8, 'ของเล่น '),
(9, 'นาฬิกา'),
(10, 'เสื้อผ้า'),
(11, 'โทรศัพท์'),
(1, 'อิเล็กทรอนิกส์'),
(2, 'รองเท้า'),
(4, 'แฟชั่น'),
(7, 'เครื่องแต่งกาย'),
(8, 'ของเล่น '),
(9, 'นาฬิกา'),
(10, 'เสื้อผ้า'),
(11, 'โทรศัพท์');

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE `tb_order` (
  `order_id` int(10) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `order_status` int(1) NOT NULL,
  `order_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_order_detail`
--

CREATE TABLE `tb_order_detail` (
  `d_id` int(10) NOT NULL,
  `order_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `p_qty` int(11) NOT NULL,
  `total` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_slider`
--

CREATE TABLE `tb_slider` (
  `sid` int(11) NOT NULL,
  `slider` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_slider`
--

INSERT INTO `tb_slider` (`sid`, `slider`) VALUES
(1, '1.jpg\r\n'),
(2, 'hot.jpg'),
(3, 'nestea.jpg'),
(1, '1.jpg\r\n'),
(2, 'hot.jpg'),
(3, 'nestea.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `token` varchar(100) DEFAULT NULL,
  `token_date` datetime DEFAULT NULL,
  `status` tinyint(4) NOT NULL COMMENT '0=inactive, 1=active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `email`, `token`, `token_date`, `status`) VALUES
(1, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'Tawatsak Tangeaim', 'itoffside@hotmail.com', NULL, NULL, 1),
(1, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'Tawatsak Tangeaim', 'itoffside@hotmail.com', NULL, NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `item_rating`
--
ALTER TABLE `item_rating`
  ADD PRIMARY KEY (`ratingId`);

--
-- Indexes for table `mo`
--
ALTER TABLE `mo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `order_head`
--
ALTER TABLE `order_head`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`o_status`);

--
-- Indexes for table `tbl_adss`
--
ALTER TABLE `tbl_adss`
  ADD PRIMARY KEY (`id_coffee`);

--
-- Indexes for table `tbl_basic`
--
ALTER TABLE `tbl_basic`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `tbl_income`
--
ALTER TABLE `tbl_income`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_location`
--
ALTER TABLE `tbl_location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `tbl_sales`
--
ALTER TABLE `tbl_sales`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `o_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `item_rating`
--
ALTER TABLE `item_rating`
  MODIFY `ratingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `mo`
--
ALTER TABLE `mo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `d_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `order_head`
--
ALTER TABLE `order_head`
  MODIFY `o_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `o_status` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_adss`
--
ALTER TABLE `tbl_adss`
  MODIFY `id_coffee` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_basic`
--
ALTER TABLE `tbl_basic`
  MODIFY `b_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_income`
--
ALTER TABLE `tbl_income`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbl_location`
--
ALTER TABLE `tbl_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `member_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_sales`
--
ALTER TABLE `tbl_sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
