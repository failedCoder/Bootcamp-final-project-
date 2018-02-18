-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2018 at 06:11 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `utopija`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2014_10_12_000000_create_users_table', 1),
(4, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2018_02_05_153321_create_products_table', 2),
(10, '2018_02_11_154203_create_messages_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `category`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Crystal Venus', 10, 'Originalna bizuterija,cista kineska plastika.\r\nNije ovo neka fake kineska plastika', 'Ogrlice', 'products/CrystalVenus.jpeg', '2018-02-18 14:03:25', '2018-02-18 14:03:25'),
(2, 'Channel Ogrlica', 100, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eu neque justo. Cras maximus lorem non semper tristique. Curabitur massa elit, convallis sed sapien hendrerit, ultrices laoreet leo. Praesent volutpat ipsum in luctus posuere. Nunc elementum ullamcorper elit vitae cursus. Donec et iaculis dui. Ut eget dolor ac erat sollicitudin posuere ut vel purus. Etiam suscipit, tortor nec consectetur luctus, dui orci elementum erat, nec tempor nisl nunc efficitur eros. Cras quis diam leo. Nulla fermentum condimentum ligula, vel tempor ex. Suspendisse quis urna quis eros varius commodo. Sed nec leo urna. Fusce viverra turpis diam, vitae vulputate nunc congue ac. Integer ornare mollis libero sodales sagittis.\r\n\r\nSuspendisse neque erat, sagittis aliquet nibh nec, rutrum placerat libero. Integer dolor dui, sodales non quam ac, luctus tempor ex. Integer nec tincidunt orci. Etiam vel ipsum et justo condimentum faucibus. Aenean at risus vulputate, malesuada felis in, finibus ligula. Maecenas sit amet posuere nisl. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut sed interdum mauris. Maecenas fermentum nibh arcu, non semper libero facilisis a. Fusce in velit eget tellus fermentum ornare. Nunc et pharetra odio. Vestibulum efficitur sem a est dignissim convallis. Nullam eleifend, metus quis viverra gravida, leo augue lobortis est, et semper ante libero eget libero.', 'Ogrlice', 'products/ChannelOgrlica.jpeg', '2018-02-18 14:07:56', '2018-02-18 14:07:56'),
(3, 'Disk Necklace', 5000, 'Duis nec elit ut justo consequat tempor pellentesque id nisl. Pellentesque vestibulum vehicula dolor, at auctor risus interdum at. Nullam consectetur, quam efficitur dapibus pellentesque, velit dolor ultrices dui, eget ultrices lacus sem ac ipsum. Nam a ex vitae est lacinia eleifend. Phasellus eu tortor eget libero aliquet iaculis eget quis odio. Donec in dolor mattis tellus rhoncus mollis ac in lacus. In lobortis lorem egestas, pharetra eros ut, varius metus. Vivamus eu dolor laoreet, bibendum mauris tincidunt, bibendum sapien. Fusce vestibulum, odio quis porttitor hendrerit, sapien sapien luctus leo, id cursus justo lorem nec metus.', 'Ogrlice', 'products/DiskNecklace.jpeg', '2018-02-18 14:08:40', '2018-02-18 14:08:40'),
(4, 'Fashion', 585, 'Nullam ullamcorper erat nec porttitor placerat. Sed luctus vitae justo sed mattis. Donec in varius mi. Phasellus ultricies finibus sagittis. Suspendisse quis leo quis massa gravida tincidunt a eget metus.', 'Ogrlice', 'products/Fashion.jpeg', '2018-02-18 14:09:21', '2018-02-18 14:09:21'),
(5, 'Indigo Beach', 5441, 'Nullam ullamcorper erat nec porttitor placerat. Sed luctus vitae justo sed mattis. Donec in varius mi. Phasellus ultricies finibus sagittis. Suspendisse quis leo quis massa gravida tincidunt a eget metus.', 'Ogrlice', 'products/IndigoBeach.jpeg', '2018-02-18 14:09:49', '2018-02-18 14:09:49'),
(6, 'Example', 150, 'Nullam ullamcorper erat nec porttitor placerat. Sed luctus vitae justo sed mattis. Donec in varius mi. Phasellus ultricies finibus sagittis. Suspendisse quis leo quis massa gravida tincidunt a eget metus.', 'Ogrlice', 'products/Example.jpeg', '2018-02-18 14:10:28', '2018-02-18 14:10:28'),
(7, 'Rose Gold Heart', 4000, 'Nullam ullamcorper erat nec porttitor placerat. Sed luctus vitae justo sed mattis. Donec in varius mi. Phasellus ultricies finibus sagittis. Suspendisse quis leo quis massa gravida tincidunt a eget metus.', 'Ogrlice', 'products/RoseGoldHeart.jpeg', '2018-02-18 14:10:52', '2018-02-18 14:10:52'),
(8, 'Example2', 521, 'Nullam ullamcorper erat nec porttitor placerat. Sed luctus vitae justo sed mattis. Donec in varius mi. Phasellus ultricies finibus sagittis. Suspendisse quis leo quis massa gravida tincidunt a eget metus.', 'Ogrlice', 'products/Example2.jpeg', '2018-02-18 14:11:39', '2018-02-18 14:11:39'),
(9, 'Champagne colored narukvica', 700, 'Nullam ullamcorper erat nec porttitor placerat. Sed luctus vitae justo sed mattis. Donec in varius mi. Phasellus ultricies finibus sagittis. Suspendisse quis leo quis massa gravida tincidunt a eget metus.', 'Narukvice', 'products/Champagnecolorednarukvica.jpeg', '2018-02-18 14:13:03', '2018-02-18 14:13:03'),
(10, 'Pave Heart', 10, 'Nullam ullamcorper erat nec porttitor placerat. Sed luctus vitae justo sed mattis.', 'Narukvice', 'products/PaveHeart.jpeg', '2018-02-18 14:14:00', '2018-02-18 14:14:00'),
(11, 'Gold Crystal Charm', 800, 'Nullam ullamcorper erat nec porttitor placerat. Sed luctus vitae justo sed mattis.', 'Narukvice', 'products/GoldCrystalCharm.jpeg', '2018-02-18 14:14:52', '2018-02-18 14:14:52'),
(12, 'Men\'s Titanium', 100, 'Nullam ullamcorper erat nec porttitor placerat. Sed luctus vitae justo sed mattis.', 'Narukvice', 'products/Men\'sTitanium.jpeg', '2018-02-18 14:15:37', '2018-02-18 14:15:37'),
(13, 'Fresh Pearl', 100, 'Nullam ullamcorper erat nec porttitor placerat. Sed luctus vitae justo sed mattis.', 'Naušnice', 'products/FreshPearl.jpeg', '2018-02-18 14:16:24', '2018-02-18 14:16:24'),
(14, 'Example Earing', 520, 'Nullam ullamcorper erat nec porttitor placerat. Sed luctus vitae justo sed mattis.', 'Naušnice', 'products/ExampleEaring.jpeg', '2018-02-18 14:16:57', '2018-02-18 14:16:57'),
(15, 'Chrismas decoration', 50, 'Nullam ullamcorper erat nec porttitor placerat. Sed luctus vitae justo sed mattis.', 'Dekoracije', 'products/Chrismasdecoration.jpeg', '2018-02-18 14:18:08', '2018-02-18 14:18:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(1, 'admin@mail.net', '$2y$10$idZsw7yQobx368oyVPWpp.VT.sbH1xpVpu..rTKm75Jj2O3o2MXEe', 'kNXd5EJZitUlODnXHRvweBKgDdouUAl8pQ1Jhmcp9rRVCoHCFCLUWSkssn5V', '2018-02-04 16:38:45', '2018-02-04 16:38:45', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
