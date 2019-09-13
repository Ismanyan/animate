-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 13, 2019 at 10:05 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `animate`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` bigint(20) NOT NULL,
  `category_name` text NOT NULL,
  `category_count` varchar(255) NOT NULL,
  `product_category` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `category_count`, `product_category`) VALUES
(1, 'Anime TV', '0', 1),
(2, 'Manga', '0', 2),
(3, 'Light Novel', '0', 3);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` bigint(20) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_star` int(11) NOT NULL,
  `product_category` int(11) NOT NULL,
  `product_img` text NOT NULL,
  `product_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_price`, `product_star`, `product_category`, `product_img`, `product_desc`) VALUES
(24, 'Bakemonogatari Part 1', 174841, 4, 3, '1568138208.jpg', 'There are few authors in Japan who have reached the heights of success as NISIOISIN. Born in 1981, NISHIOISIN left of Ritsumeikan University in Kyoto, to pursue a career in story-telling. Initially he had ambitions to be a comic artist, but when he realized his art was not up to snuff, he began to focus on his writing. He would eventually win the 23rd Mephisto Prize, for Kubikiri Cycle (Del Rey), acknowledging his talents as a mystery writer, at the age of 20. Since his debut in 2002 he has penned more than 50 novels and a number of comics.  Nishio\'s works often cover themes of youth, but are framed in genres that are familiar to the masses. His works tend to mix mystery with comedy and touches or romance and/or the supernatural. He is a modern author in every sense, sometimes even experiementing with the Japanese language itself. Many of his works have been adapted into animated television series and films. His best known works are the Monogatari series and Katanagatari.'),
(25, 'Bakemonogatari Part 2', 196611, 0, 3, '1568138353.webp', ''),
(26, 'Bakemonogatari Part 3', 179766, 0, 3, '1568138394.jpg', ''),
(27, 'Nisemonogatari 1 : Fake Tale', 208123, 0, 3, '1568138444.jpg', ''),
(28, 'Nisemonogatari 2 : Fake Tale', 196614, 0, 3, '1568138479.jpg', ''),
(29, 'Hanamonogatari : Flower Tale', 209636, 0, 3, '1568138520.jpg', ''),
(30, 'Koimonogatari : Love Tale', 208123, 0, 3, '1568138586.jpg', ''),
(31, 'Kabukimonogatari : Dandy Tale', 229194, 0, 3, '1568138669.jpg', ''),
(32, 'Kizumonogatari : Wound Tale', 203268, 0, 3, '1568138747.jpg', ''),
(33, 'Koyomimonogatari, Part 1 : Calendar Tale', 181566, 0, 3, '1568138868.jpg', ''),
(34, 'Koyomimonogatari, Part 2 : Calendar Tale', 181566, 0, 3, '1568138911.jpg', ''),
(36, 'Nekomonogatari (white)', 208124, 0, 3, '1568139082.webp', ''),
(37, 'Onimonogatari : Demon Tale', 208123, 0, 3, '1568139132.jpg', ''),
(38, 'Otorimonogatari : Decoy Tale', 208123, 0, 3, '1568139190.jpg', ''),
(39, 'Tsukimonogatari', 208123, 0, 3, '1568139259.jpg', ''),
(42, 'Bakemonogatari Blu-ray Complete Set Limited Edition ', 316906, 0, 1, '1568140115.jpg', ''),
(43, 'Monogatari Second Season', 469066, 0, 1, '1568140287.jpg', ''),
(44, 'Fullmetal Alchemist: Fullmetal Edition, Vol. 4', 262584, 0, 2, '1568141021.webp', ''),
(45, 'Fullmetal Alchemist: Fullmetal Edition, Vol. 7', 305592, 0, 2, '1568141096.jpg', ''),
(46, 'Fullmetal Alchemist: Fullmetal Edition, Vol. 5', 269066, 0, 2, '1568141143.jpg', ''),
(47, 'Fullmetal Alchemist: Fullmetal Edition, Vol. 6', 302123, 0, 2, '1568141196.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `role_users`
--

CREATE TABLE `role_users` (
  `id` int(11) NOT NULL,
  `role_name` varchar(255) NOT NULL COMMENT 'Role Name Type',
  `role_code` varchar(255) NOT NULL COMMENT 'Role Code '
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role_users`
--

INSERT INTO `role_users` (`id`, `role_name`, `role_code`) VALUES
(1, 'Admin', '394053f0d6372f568209482af3f0bd36'),
(2, 'Guest', 'c0460cea97c9ebbb3f7fdb182a2117e4');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` varchar(255) NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role_id`, `update_at`, `created_at`) VALUES
(3, 'ismanyan', 'ismanyan@gmail.com', '$2y$10$Gw462hd/9aDWBr8Z93cR9upQx5zAdcEDvrb6stiOg0MDNsOUrHV5y', 'c0460cea97c9ebbb3f7fdb182a2117e4', '2019-09-13 10:22:24', '2019-09-13 10:08:32'),
(4, 'reynaldi112', 'reynaldi112@gmail.com', '$2y$10$Uf2ap0TyFNS8duoHCvpiiul7shv0Xq.IkifbJTR2mIrTL3y6QJLde', '394053f0d6372f568209482af3f0bd36', '2019-09-13 13:31:11', '2019-09-13 13:29:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_users`
--
ALTER TABLE `role_users`
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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `role_users`
--
ALTER TABLE `role_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
