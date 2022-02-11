-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 17, 2021 at 04:53 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `advance_salaries`
--

DROP TABLE IF EXISTS `advance_salaries`;
CREATE TABLE IF NOT EXISTS `advance_salaries` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `month` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `advanced_salary` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attendences`
--

DROP TABLE IF EXISTS `attendences`;
CREATE TABLE IF NOT EXISTS `attendences` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `att_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `att_year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attendence` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_name`, `created_at`, `updated_at`) VALUES
(4, 'Test', NULL, NULL),
(3, 'Rainbow', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `company`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'aminul islam', 'rainbow', '01727908089', '2020-02-27 01:21:29', '2020-02-27 01:21:29'),
(3, 'MD. SazzaMD. Sazzadurdur', 'MD. SazzaMD. Sazzadurd', '01463572655', '2020-02-27 06:41:18', '2020-02-27 06:41:18'),
(4, 'aminul islamfghfh', 'bd', '01727908089', '2020-02-27 12:57:20', '2020-02-28 06:21:05'),
(5, 'aminul islam', 'aminul', '01727908089', '2020-02-28 08:13:28', '2020-02-28 08:13:28'),
(6, 'aminul islam', 'caskdlf', '01727908089', '2020-02-28 08:43:26', '2020-02-28 08:43:26'),
(7, 'Masudurrahma', 'Masudurrahmana', '324567', '2020-02-28 22:09:39', '2020-02-28 22:09:39'),
(8, 'Masudurrahma', 'Masudurrahmana', '324567', '2020-02-28 22:09:42', '2020-02-28 22:09:42'),
(9, 'aminul islam', 'bd', '01727908089', '2020-02-28 22:10:41', '2020-02-28 22:10:41'),
(10, 'Firoz', 'bj', '01714303381', '2020-02-28 22:39:58', '2020-02-28 22:39:58'),
(11, 'aminul islam', 'rainbow', '01727908089', '2020-02-28 22:40:54', '2020-02-28 22:40:54'),
(12, 'aminul islam', 'rainbow', '01727908089', '2020-02-28 22:40:58', '2020-02-28 22:40:58'),
(13, 'Firoz', 'f', '01714303381', '2020-02-28 22:42:45', '2020-02-28 22:42:45'),
(14, 'imtiajuj islam', 'Atlanta', '01918926255', '2020-02-28 22:54:13', '2020-02-28 22:54:13'),
(15, 'imnan', 'asabur', '7654', '2020-02-28 23:57:57', '2020-02-28 23:57:57'),
(16, 'Salman sardar', 'Salman sarda', '018888867', '2020-02-29 00:08:58', '2020-02-29 00:08:58'),
(17, 'Aminul Islam', 'bdcrowdfunding', '01727908089', '2021-06-20 01:23:46', '2021-06-20 01:23:46'),
(18, 'Aminul Islam', 'bdtaxcare', '01727908089', '2021-06-20 02:30:49', '2021-06-20 02:30:49'),
(19, 'Aminul Islam', 'bdcrowdfunding', '01727908089', '2021-06-20 02:43:43', '2021-06-20 02:43:43'),
(20, 'Tawhid Nujaim', 'ilmaacademy', '01983100502', '2021-12-17 10:38:40', '2021-12-17 10:38:40');

-- --------------------------------------------------------

--
-- Table structure for table `dues`
--

DROP TABLE IF EXISTS `dues`;
CREATE TABLE IF NOT EXISTS `dues` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nid_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vacation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

DROP TABLE IF EXISTS `expenses`;
CREATE TABLE IF NOT EXISTS `expenses` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `details` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `month` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `details`, `amount`, `month`, `date`, `year`, `created_at`, `updated_at`) VALUES
(17, '100', '900', 'June', '20/06/21', '2021', NULL, NULL),
(16, 'frrfr', '900', 'February', '29/02/20', '2020', NULL, NULL),
(15, 'chir', '1000', 'February', '29/02/20', '2020', NULL, NULL),
(13, 'banner by', '900', 'February', '29/02/20', '2020', NULL, NULL),
(14, 'chir', '1000', 'February', '29/02/20', '2020', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `incomes`
--

DROP TABLE IF EXISTS `incomes`;
CREATE TABLE IF NOT EXISTS `incomes` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `details` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `month` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_12_08_130430_create_employees_table', 1),
(4, '2018_12_23_140414_create_customers_table', 1),
(5, '2018_12_24_154612_create_suppliers_table', 1),
(6, '2018_12_29_152541_create_salaries_table', 1),
(7, '2019_01_07_123547_create_categories_table', 1),
(8, '2019_01_07_130138_create_products_table', 1),
(9, '2019_01_13_114831_creat_expenses_table', 1),
(10, '2019_01_18_124159_creat_attendences_table', 1),
(11, '2019_02_09_073143_create_settings_table', 1),
(32, '2020_02_28_093217_create_orders_table', 5),
(22, '2019_02_25_061700_create_orderdetails_table', 2),
(14, '2020_02_25_205525_create_incomes_table', 1),
(27, '2020_02_28_084501_create_dues_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

DROP TABLE IF EXISTS `orderdetails`;
CREATE TABLE IF NOT EXISTS `orderdetails` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unitcost` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=81 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`id`, `order_id`, `product_id`, `quantity`, `unitcost`, `total`, `created_at`, `updated_at`) VALUES
(80, 11, 10, '2', '1111', '2688.62', NULL, NULL),
(79, 10, 10, '1', '1111', '1344.31', NULL, NULL),
(78, 9, 10, '1', '1111', '1344.31', NULL, NULL),
(77, 8, 1, '1', '9.1', '11.011', NULL, NULL),
(76, 7, 4, '1', '6', '7.26', NULL, NULL),
(75, 7, 1, '2', '9.1', '22.022', NULL, NULL),
(74, 7, 2, '3', '60', '217.79999999999998', NULL, NULL),
(73, 7, 3, '4', '5', '24.2', NULL, NULL),
(72, 6, 2, '40', '15', '726', NULL, NULL),
(71, 5, 5, '56', '14', '948.6400000000001', NULL, NULL),
(70, 4, 1, '100', '9.1', '1101.1', NULL, NULL),
(69, 4, 5, '10000', '200', '2420000', NULL, NULL),
(68, 3, 3, '156', '5', '943.8', NULL, NULL),
(67, 2, 2, '40', '60', '2904', NULL, NULL),
(66, 2, 1, '60', '8', '580.8', NULL, NULL),
(65, 1, 5, '71', '200', '17182', NULL, NULL),
(64, 1, 2, '16', '60', '1161.6', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `order_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_products` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_total` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pay` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `due` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `month` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `order_date`, `order_status`, `total_products`, `sub_total`, `vat`, `total`, `payment_status`, `pay`, `due`, `discount`, `month`, `year`, `created_at`, `updated_at`) VALUES
(1, 4, '29/02/20', 'pending', '87', '15,160.00', '3,183.60', '18,343.60', 'Handcash', '15160', '0', '0', 'February', '2020', NULL, NULL),
(2, 13, '29/02/20', 'pending', '100', '2,880.00', '604.80', '3,484.80', 'Handcash', '2800', '80', '00', 'February', '2020', NULL, NULL),
(3, 14, '29/02/20', 'pending', '156', '780.00', '163.80', '943.80', 'Handcash', '500', '200', '80', 'February', '2020', NULL, NULL),
(4, 5, '29/02/20', 'pending', '10100', '2,000,910.00', '420,191.10', '2,421,101.10', 'Handcash', '20009000', '0', '10', 'February', '2020', NULL, '2020-02-28 23:02:36'),
(5, 16, '29/02/20', 'pending', '56', '784.00', '164.64', '948.64', 'Handcash', '200', '84', '0', 'February', '2020', NULL, NULL),
(6, 9, '29/02/20', 'pending', '40', '600.00', '126.00', '726.00', 'Handcash', '600', '0', '0', 'February', '2020', NULL, NULL),
(7, 14, '26/09/20', 'pending', '10', '224.20', '47.08', '271.28', 'Handcash', '0', '90', '5', 'September', '2020', NULL, NULL),
(8, 5, '20/06/21', 'pending', '1', '9.10', '1.91', '11.01', 'Handcash', '0', '90', '5', 'June', '2021', NULL, NULL),
(9, 12, '21/06/21', 'pending', '1', '1,111.00', '233.31', '1,344.31', 'Handcash', '11110', '90', '5', 'June', '2021', NULL, '2021-06-20 21:45:14'),
(10, 11, '21/06/21', 'pending', '1', '1,111.00', '233.31', '1,344.31', 'Handcash', '0', '90', '5', 'June', '2021', NULL, NULL),
(11, 5, '17/12/21', 'pending', '2', '2,222.00', '466.62', '2,688.62', 'Handcash', '3242', '32', '232', 'December', '2021', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cat_id` int(11) NOT NULL,
  `sup_id` int(11) NOT NULL,
  `product_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_garage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_route` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `buy_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expire_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `buying_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `selling_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `cat_id`, `sup_id`, `product_code`, `product_garage`, `product_route`, `product_image`, `buy_date`, `expire_date`, `buying_price`, `selling_price`, `created_at`, `updated_at`) VALUES
(1, 'card', 1, 1, NULL, NULL, NULL, 'public/Products/dUbAm.jpg', NULL, NULL, NULL, '9.1', NULL, NULL),
(2, 'book', 1, 1, NULL, NULL, NULL, 'public/Products/EOo5T.jpg', NULL, NULL, NULL, '60', NULL, NULL),
(3, 'fatun', 1, 1, NULL, NULL, NULL, 'public/Products/SYcgh.jpg', NULL, NULL, NULL, '5', NULL, NULL),
(4, 'bannerjjhkb', 1, 1, 'iu0iui', 'u09u9', 'oioi', 'public/Products/yUyTV.jpg', '2020-02-21', '2020-02-21', '100', '6', NULL, NULL),
(5, 'banner', 1, 1, NULL, NULL, NULL, 'public/Products/ENZBd.jpg', NULL, NULL, NULL, '200', NULL, NULL),
(6, 'banner', 1, 1, NULL, NULL, NULL, 'public/Products/uDu13.jpg', NULL, NULL, NULL, '6.6', NULL, NULL),
(7, 'banner', 1, 1, NULL, NULL, NULL, 'public/Products/QAPZC.jpg', NULL, NULL, NULL, '5', NULL, NULL),
(8, 'Mobail', 1, 1, NULL, NULL, NULL, 'public/Products/1588I.jpg', NULL, NULL, NULL, '5', NULL, NULL),
(9, 'Mobail', 1, 1, NULL, NULL, NULL, 'public/Products/yMvsI.jpg', NULL, NULL, NULL, '5', NULL, NULL),
(10, 'banner', 3, 1, '12344', '1', '1', 'public/Products/N2W5N.jpg', '111111-11-11', '11111-11-11', '1111', '1111', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_zipcode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

DROP TABLE IF EXISTS `suppliers`;
CREATE TABLE IF NOT EXISTS `suppliers` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accountholder` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accountnumber` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bankname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branchname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `email`, `phone`, `address`, `type`, `photo`, `shop`, `accountholder`, `accountnumber`, `bankname`, `branchname`, `city`, `created_at`, `updated_at`) VALUES
(1, 'name', '', '', '', '', NULL, '', NULL, NULL, NULL, NULL, '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$ESh1SGQ9IYVFb21/4gvsZexqhcq9XEr8dPdQkTNtKtfr5Te.P1Tra', 'IrbcQwjZffOVbPrMeP5Qf8sDX3EjOMnIvZ1IBZVfYoFe11s5izI7Tslqmd9d', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
