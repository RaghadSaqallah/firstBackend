-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2026 at 08:29 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Table structure for table `allnews`
--

CREATE TABLE `allnews` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `news_text` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allnews`
--

INSERT INTO `allnews` (`id`, `title`, `category_id`, `news_text`, `image`, `user_id`, `status`) VALUES
(58, 'victory', 9, '   رسمياً: ريال مدريد يعلن التعاقد مع كيليان مبابيمدريد – أعلن نادي ريال مدريد الإسباني رسمياً، في وقت سابق من شهر يونيو 2024، عن تعاقده مع النجم الفرنسي كيليان مبابي في صفقة انتقال حر، بعقد يمتد لخمس سنوات، وذلك بعد انتهاء عقده مع نادي باريس سان جيرمان. ', 'images.jfif', 8, 1),
(59, 'جوائز الأوسكار', 10, ' \"أوبنهايمر\" يكتسح جوائز الأوسكار لعام 2024\r\nلوس أنجلوس – حصد فيلم \"أوبنهايمر\" (Oppenheimer) للمخرج كريستوفر نولان سبع جوائز أوسكار في الحفل الـ96، بما في ذلك جائزة \"أفضل فيلم\"، ليصبح الفيلم الأكثر تتويجاً في تلك الليلة الاستثنائية التي أقيمت في مارس 2024', 'vintage-cinema-magic-stockcake.webp', 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `categ_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categ_name`) VALUES
(9, 'sport'),
(10, 'movies'),
(12, 'Esport');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `PASSWORD`) VALUES
(8, 'Raghad', 'raghad@gmail.com', '$2y$10$bhEvN.qyCo4codGIxZPJVOmpGrShy1Um4OlxjZVhdY6jmK2xrFGH6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allnews`
--
ALTER TABLE `allnews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `new_ibfk_2` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allnews`
--
ALTER TABLE `allnews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `allnews`
--
ALTER TABLE `allnews`
  ADD CONSTRAINT `allnews_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `allnews_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
