-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2021 at 05:06 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce1`
--

-- --------------------------------------------------------

--
-- Table structure for table `addtowishlist`
--

CREATE TABLE `addtowishlist` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `add_to_cart`
--

CREATE TABLE `add_to_cart` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attributesunits`
--

CREATE TABLE `attributesunits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attributesid` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attributesunits`
--

INSERT INTO `attributesunits` (`id`, `name`, `attributesid`, `status`, `created_at`, `updated_at`) VALUES
(14, 'Red', 2, '1', '2021-01-15 01:42:55', '2021-01-15 01:42:55'),
(16, 'Green', 2, '1', '2021-01-15 01:43:12', '2021-01-15 01:43:12'),
(17, 'Small', 1, '1', '2021-01-15 01:43:36', '2021-01-15 01:43:36'),
(18, 'Medium', 1, '1', '2021-01-15 01:43:42', '2021-01-15 01:43:42'),
(19, 'Large', 1, '1', '2021-01-15 01:43:51', '2021-01-15 01:43:51'),
(21, 'Extra Large', 1, '1', '2021-02-18 07:19:45', '2021-02-18 07:19:45');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_title` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `name`, `active`, `image`, `meta_title`, `meta_description`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Max', 1, '42001.png', 'Sunglasses', NULL, NULL, '2020-07-07 01:06:36', '2020-07-07 01:06:36'),
(2, 'Woodland', 1, '38037.png', 'watches', NULL, NULL, '2020-07-07 01:08:47', '2020-07-07 01:08:47'),
(3, 'Adidas', 1, '76427.png', 'Adidas', 'testing', NULL, '2020-07-07 01:12:05', '2020-07-07 01:12:05'),
(13, 'adidas', 1, '14371.png', 'abc test', 'adidas', NULL, '2021-02-19 02:18:11', '2021-02-19 02:18:11'),
(14, 'Levi\'s', 1, '85866.png', 'Levis', 'Levis', NULL, '2021-02-19 02:24:55', '2021-02-19 02:24:55'),
(16, 'maxima', 1, '28347.jpg', 'Watch', 'Watch', NULL, '2021-02-25 04:55:18', '2021-02-25 04:55:18');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_sub_group_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `order` int(11) DEFAULT 100,
  `meta_title` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_sub_group_id`, `name`, `slug`, `description`, `active`, `image`, `order`, `meta_title`, `meta_description`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 3, 'Shirts', 'test', 'test', 1, '38720.jpg', 100, 'test', 'shirt meta description', NULL, '2020-06-30 02:20:11', '2020-06-30 02:20:11'),
(4, 2, 'Wallets', 'fgd', 'fd', 1, '85745.jpg', 2, 'gf', 'dg', NULL, '2020-06-30 02:23:55', '2020-06-30 02:23:55'),
(5, 2, 'Bags & Luggage', 'Bags & Luggage', 'Bags & Luggage', 1, '33936.jpg', 100, 'Bags & Luggage', 'Bags & Luggage', NULL, '2020-07-01 02:32:09', '2020-07-01 02:32:09'),
(6, 2, 'Sunglasses', 'Sunglasses', 'Sunglasses', 1, '44851.jpg', 33, 'Sunglasses', 'Sunglasses', NULL, '2020-07-01 06:31:48', '2020-07-01 06:31:48'),
(8, 2, 'Jewellery', 'ew', 'we', 1, '38720.jpg', 32, 'ew', 'ew', NULL, '2020-07-01 23:45:04', '2020-07-01 23:45:04'),
(9, 2, 'Watches', 'nnm', 'hnjn', 1, '23996.png', 7, 'hjgjhg', 'dfgfg', NULL, '2020-07-07 00:49:39', '2020-07-07 00:49:39'),
(10, 2, 'Watch', 'ddwsww', 'wsdwdws', 1, '85745.jpg', 1, 'wdw', 'dwdwsw', NULL, '2020-09-24 00:19:39', '2020-09-24 00:19:39'),
(12, 2, 'ftry', 'ddwswwgty', 'fdrt', 1, '33936.jpg', 1, 'sddf', 'gdtg', NULL, '2020-10-03 00:59:40', '2020-10-03 00:59:40'),
(13, 2, 'lioj', 'kiuy', 'hjjhbh', 1, '27212.jpg', 3, 'mkjbh', 'njkjji', NULL, '2020-10-08 22:58:11', '2020-10-08 22:58:11'),
(17, 2, 'Jewellery', 'Jewellery', 'Jewellery', 1, NULL, 1, 'Jewellery', 'Jewellery', NULL, '2021-02-18 04:40:19', '2021-02-18 04:40:19');

-- --------------------------------------------------------

--
-- Table structure for table `category_groups`
--

CREATE TABLE `category_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `icon` varchar(100) COLLATE utf8_unicode_ci DEFAULT 'cube',
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `order` int(11) DEFAULT 100,
  `meta_title` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category_groups`
--

INSERT INTO `category_groups` (`id`, `name`, `slug`, `description`, `icon`, `active`, `order`, `meta_title`, `meta_description`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Mens Fashion', 'Mens Fashion', 'Mens Fashion', 'test', 1, 7, 'vegitable tomato', 'ty', NULL, '2020-06-23 03:27:32', '2020-06-23 03:27:32'),
(2, 'Mobiles, Computers', 'mobile computers', 'Mobile Computers', 'test', 1, 100, 'mobile computer', 'mobile computer', NULL, '2020-07-15 20:45:44', '2020-07-15 20:45:44'),
(3, 'Women\'s Fashion', 'womens fashion', 'womens fashion', 'womens', 1, 100, 'fashion', 'fashion', NULL, '2020-07-15 20:47:23', '2020-07-15 20:47:23'),
(4, 'Baby&Kids', 'sss', 'baby&kids', 'y', 1, 1, 'sddf', 'fhfvj', NULL, '2020-10-04 23:55:01', '2020-10-04 23:55:01'),
(5, 'Electronic', 'electronic', NULL, 'Electronic', 1, 100, 'electronic', 'electronic', NULL, '2021-02-04 11:01:36', '2021-02-04 11:01:36'),
(6, 'Kitchen', 'Kitchen', 'All Kitchen Store', '3', 1, 100, 'kitchen stote product', 'all types kitchen store', NULL, '2021-02-12 06:16:10', '2021-02-12 06:16:10'),
(7, 'Recharge', 'Recharge', 'Recharge all types', '1', 1, 100, 'Recharges store', 'all types of recharge', NULL, '2021-02-12 06:28:12', '2021-02-12 06:28:12');

-- --------------------------------------------------------

--
-- Table structure for table `category_sub_groups`
--

CREATE TABLE `category_sub_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_group_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `order` int(11) DEFAULT 100,
  `meta_title` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `offers` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category_sub_groups`
--

INSERT INTO `category_sub_groups` (`id`, `category_group_id`, `name`, `slug`, `description`, `active`, `order`, `meta_title`, `meta_description`, `deleted_at`, `created_at`, `updated_at`, `offers`) VALUES
(2, 1, 'ACCESSORIES', 'mens', 'Mens accessories', 1, 100, 'mens wear', 'mens all accessories', NULL, '2020-06-30 01:47:56', '2020-06-30 01:47:56', NULL),
(3, 3, 'baby pants', 'dsdws', 'sdwsdw', 1, 3, 'swdsw', 'sdcscxs', NULL, '2020-10-11 23:47:21', '2020-10-11 23:47:21', NULL),
(4, 2, 'Laptop', 'laptop', 'laptop', 1, 100, 'laptop', 'laptop', NULL, '2021-02-04 11:03:30', '2021-02-04 11:03:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `full_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `capital` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `currency_id` int(10) UNSIGNED DEFAULT NULL,
  `timezone_id` int(10) UNSIGNED DEFAULT NULL,
  `citizenship` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `iso_code` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `iso_numeric` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `calling_code` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `flag` varchar(6) COLLATE utf8_unicode_ci DEFAULT NULL,
  `eea` tinyint(1) DEFAULT 0,
  `active` tinyint(1) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `full_name`, `capital`, `currency_id`, `timezone_id`, `citizenship`, `iso_code`, `iso_numeric`, `calling_code`, `flag`, `eea`, `active`, `created_at`, `updated_at`) VALUES
(4, 'Afghanistan', 'Islamic Republic of Afghanistan', 'Kabul', 2, NULL, 'Afghan', 'AF', '004', '93', 'AF.png', 0, 1, '2020-05-02 05:43:22', '2020-05-02 05:43:22'),
(8, 'Albania', 'Republic of Albania', 'Tirana', 3, NULL, 'Albanian', 'AL', '008', '355', 'AL.png', 0, 1, '2020-05-02 05:43:22', '2020-05-02 05:43:22'),
(10, 'Antarctica', 'Antarctica', 'Antartica', NULL, NULL, 'of Antartica', 'AQ', '010', '672', 'AQ.png', 0, 1, '2020-05-02 05:43:22', '2020-05-02 05:43:22'),
(12, 'Algeria', 'People’s Democratic Republic of Algeria', 'Algiers', 42, NULL, 'Algerian', 'DZ', '012', '213', 'DZ.png', 0, 1, '2020-05-02 05:43:22', '2020-05-02 05:43:22'),
(16, 'American Samoa', 'Territory of American', 'Pago Pago', 148, NULL, 'American Samoan', 'AS', '016', '1', 'AS.png', 0, 1, '2020-05-02 05:43:23', '2020-05-02 05:43:23'),
(20, 'Andorra', 'Principality of Andorra', 'Andorra la Vella', 46, NULL, 'Andorran', 'AD', '020', '376', 'AD.png', 0, 1, '2020-05-02 05:43:23', '2020-05-02 05:43:23'),
(24, 'Angola', 'Republic of Angola', 'Luanda', 6, NULL, 'Angolan', 'AO', '024', '244', 'AO.png', 0, 1, '2020-05-02 05:43:23', '2020-05-02 05:43:23'),
(28, 'Antigua and Barbuda', 'Antigua and Barbuda', 'St John’s', 162, NULL, 'of Antigua and Barbuda', 'AG', '028', '1', 'AG.png', 0, 1, '2020-05-02 05:43:23', '2020-05-02 05:43:23'),
(31, 'Azerbaijan', 'Republic of Azerbaijan', 'Baku', 10, NULL, 'Azerbaijani', 'AZ', '031', '994', 'AZ.png', 0, 1, '2020-05-02 05:43:23', '2020-05-02 05:43:23'),
(32, 'Argentina', 'Argentine Republic', 'Buenos Aires', 7, NULL, 'Argentinian', 'AR', '032', '54', 'AR.png', 0, 1, '2020-05-02 05:43:23', '2020-05-02 05:43:23'),
(36, 'Australia', 'Commonwealth of Australia', 'Canberra', 8, NULL, 'Australian', 'AU', '036', '61', 'AU.png', 0, 1, '2020-05-02 05:43:23', '2020-05-02 05:43:23'),
(40, 'Austria', 'Republic of Austria', 'Vienna', 46, NULL, 'Austrian', 'AT', '040', '43', 'AT.png', 1, 1, '2020-05-02 05:43:23', '2020-05-02 05:43:23'),
(44, 'Bahamas', 'Commonwealth of the Bahamas', 'Nassau', 21, NULL, 'Bahamian', 'BS', '044', '1', 'BS.png', 0, 1, '2020-05-02 05:43:23', '2020-05-02 05:43:23'),
(48, 'Bahrain', 'Kingdom of Bahrain', 'Manama', 15, NULL, 'Bahraini', 'BH', '048', '973', 'BH.png', 0, 1, '2020-05-02 05:43:23', '2020-05-02 05:43:23'),
(50, 'Bangladesh', 'People’s Republic of Bangladesh', 'Dhaka', 13, NULL, 'Bangladeshi', 'BD', '050', '880', 'BD.png', 0, 1, '2020-05-02 05:43:23', '2020-05-02 05:43:23'),
(51, 'Armenia', 'Republic of Armenia', 'Yerevan', 4, NULL, 'Armenian', 'AM', '051', '374', 'AM.png', 0, 1, '2020-05-02 05:43:23', '2020-05-02 05:43:23'),
(52, 'Barbados', 'Barbados', 'Bridgetown', 12, NULL, 'Barbadian', 'BB', '052', '1', 'BB.png', 0, 1, '2020-05-02 05:43:23', '2020-05-02 05:43:23'),
(56, 'Belgium', 'Kingdom of Belgium', 'Brussels', 46, NULL, 'Belgian', 'BE', '056', '32', 'BE.png', 1, 1, '2020-05-02 05:43:23', '2020-05-02 05:43:23'),
(60, 'Bermuda', 'Bermuda', 'Hamilton', 17, NULL, 'Bermudian', 'BM', '060', '1', 'BM.png', 0, 1, '2020-05-02 05:43:23', '2020-05-02 05:43:23'),
(64, 'Bhutan', 'Kingdom of Bhutan', 'Thimphu', 22, NULL, 'Bhutanese', 'BT', '064', '975', 'BT.png', 0, 1, '2020-05-02 05:43:23', '2020-05-02 05:43:23'),
(68, 'Bolivia, Plurinational State of', 'Plurinational State of Bolivia', 'Sucre (BO1)', 19, NULL, 'Bolivian', 'BO', '068', '591', 'BO.png', 0, 1, '2020-05-02 05:43:23', '2020-05-02 05:43:23'),
(70, 'Bosnia and Herzegovina', 'Bosnia and Herzegovina', 'Sarajevo', 11, NULL, 'of Bosnia and Herzegovina', 'BA', '070', '387', 'BA.png', 0, 1, '2020-05-02 05:43:24', '2020-05-02 05:43:24'),
(72, 'Botswana', 'Republic of Botswana', 'Gaborone', 23, NULL, 'Botswanan', 'BW', '072', '267', 'BW.png', 0, 1, '2020-05-02 05:43:24', '2020-05-02 05:43:24'),
(74, 'Bouvet Island', 'Bouvet Island', 'Bouvet island', NULL, NULL, 'of Bouvet island', 'BV', '074', '47', 'BV.png', 0, 1, '2020-05-02 05:43:24', '2020-05-02 05:43:24'),
(76, 'Brazil', 'Federative Republic of Brazil', 'Brasilia', 20, NULL, 'Brazilian', 'BR', '076', '55', 'BR.png', 0, 1, '2020-05-02 05:43:24', '2020-05-02 05:43:24'),
(84, 'Belize', 'Belize', 'Belmopan', 26, NULL, 'Belizean', 'BZ', '084', '501', 'BZ.png', 0, 1, '2020-05-02 05:43:24', '2020-05-02 05:43:24'),
(86, 'British Indian Ocean Territory', 'British Indian Ocean Territory', 'Diego Garcia', 148, NULL, 'Changosian', 'IO', '086', '246', 'IO.png', 0, 1, '2020-05-02 05:43:24', '2020-05-02 05:43:24'),
(90, 'Solomon Islands', 'Solomon Islands', 'Honiara', 122, NULL, 'Solomon Islander', 'SB', '090', '677', 'SB.png', 0, 1, '2020-05-02 05:43:24', '2020-05-02 05:43:24'),
(92, 'Virgin Islands, British', 'British Virgin Islands', 'Road Town', 148, NULL, 'British Virgin Islander;', 'VG', '092', '1', 'VG.png', 0, 1, '2020-05-02 05:43:24', '2020-05-02 05:43:24'),
(96, 'Brunei Darussalam', 'Brunei Darussalam', 'Bandar Seri Begawan', 18, NULL, 'Bruneian', 'BN', '096', '673', 'BN.png', 0, 1, '2020-05-02 05:43:24', '2020-05-02 05:43:24'),
(100, 'Bulgaria', 'Republic of Bulgaria', 'Sofia', 14, NULL, 'Bulgarian', 'BG', '100', '359', 'BG.png', 1, 1, '2020-05-02 05:43:24', '2020-05-02 05:43:24'),
(104, 'Myanmar', 'Union of Myanmar/', 'Yangon', 92, NULL, 'Burmese', 'MM', '104', '95', 'MM.png', 0, 1, '2020-05-02 05:43:24', '2020-05-02 05:43:24'),
(108, 'Burundi', 'Republic of Burundi', 'Bujumbura', 16, NULL, 'Burundian', 'BI', '108', '257', 'BI.png', 0, 1, '2020-05-02 05:43:24', '2020-05-02 05:43:24'),
(112, 'Belarus', 'Republic of Belarus', 'Minsk', 25, NULL, 'Belarusian', 'BY', '112', '375', 'BY.png', 0, 1, '2020-05-02 05:43:24', '2020-05-02 05:43:24'),
(116, 'Cambodia', 'Kingdom of Cambodia', 'Phnom Penh', 73, NULL, 'Cambodian', 'KH', '116', '855', 'KH.png', 0, 1, '2020-05-02 05:43:24', '2020-05-02 05:43:24'),
(120, 'Cameroon', 'Republic of Cameroon', 'Yaoundé', 155, NULL, 'Cameroonian', 'CM', '120', '237', 'CM.png', 0, 1, '2020-05-02 05:43:24', '2020-05-02 05:43:24'),
(124, 'Canada', 'Canada', 'Ottawa', 27, NULL, 'Canadian', 'CA', '124', '1', 'CA.png', 0, 1, '2020-05-02 05:43:24', '2020-05-02 05:43:24'),
(132, 'Cape Verde', 'Republic of Cape Verde', 'Praia', 37, NULL, 'Cape Verdean', 'CV', '132', '238', 'CV.png', 0, 1, '2020-05-02 05:43:24', '2020-05-02 05:43:24'),
(136, 'Cayman Islands', 'Cayman Islands', 'George Town', 78, NULL, 'Caymanian', 'KY', '136', '1', 'KY.png', 0, 1, '2020-05-02 05:43:24', '2020-05-02 05:43:24'),
(140, 'Central African Republic', 'Central African Republic', 'Bangui', 155, NULL, 'Central African', 'CF', '140', '236', 'CF.png', 0, 1, '2020-05-02 05:43:24', '2020-05-02 05:43:24'),
(144, 'Sri Lanka', 'Democratic Socialist Republic of Sri Lanka', 'Colombo', 82, NULL, 'Sri Lankan', 'LK', '144', '94', 'LK.png', 0, 1, '2020-05-02 05:43:24', '2020-05-02 05:43:24'),
(148, 'Chad', 'Republic of Chad', 'N’Djamena', 155, NULL, 'Chadian', 'TD', '148', '235', 'TD.png', 0, 1, '2020-05-02 05:43:25', '2020-05-02 05:43:25'),
(152, 'Chile', 'Republic of Chile', 'Santiago', 31, NULL, 'Chilean', 'CL', '152', '56', 'CL.png', 0, 1, '2020-05-02 05:43:25', '2020-05-02 05:43:25'),
(156, 'China', 'People’s Republic of China', 'Beijing', 32, NULL, 'Chinese', 'CN', '156', '86', 'CN.png', 0, 1, '2020-05-02 05:43:25', '2020-05-02 05:43:25'),
(158, 'Taiwan, Province of China', 'Republic of China, Taiwan (TW1)', 'Taipei', 144, NULL, 'Taiwanese', 'TW', '158', '886', 'TW.png', 0, 1, '2020-05-02 05:43:25', '2020-05-02 05:43:25'),
(162, 'Christmas Island', 'Christmas Island Territory', 'Flying Fish Cove', 8, NULL, 'Christmas Islander', 'CX', '162', '61', 'CX.png', 0, 1, '2020-05-02 05:43:25', '2020-05-02 05:43:25'),
(166, 'Cocos (Keeling) Islands', 'Territory of Cocos (Keeling) Islands', 'Bantam', 8, NULL, 'Cocos Islander', 'CC', '166', '61', 'CC.png', 0, 1, '2020-05-02 05:43:25', '2020-05-02 05:43:25'),
(170, 'Colombia', 'Republic of Colombia', 'Santa Fe de Bogotá', 33, NULL, 'Colombian', 'CO', '170', '57', 'CO.png', 0, 1, '2020-05-02 05:43:25', '2020-05-02 05:43:25'),
(174, 'Comoros', 'Union of the Comoros', 'Moroni', 74, NULL, 'Comorian', 'KM', '174', '269', 'KM.png', 0, 1, '2020-05-02 05:43:25', '2020-05-02 05:43:25'),
(175, 'Mayotte', 'Departmental Collectivity of Mayotte', 'Mamoudzou', 46, NULL, 'Mahorais', 'YT', '175', '262', 'YT.png', 0, 1, '2020-05-02 05:43:25', '2020-05-02 05:43:25'),
(178, 'Congo', 'Republic of the Congo', 'Brazzaville', 155, NULL, 'Congolese', 'CG', '178', '242', 'CG.png', 0, 1, '2020-05-02 05:43:25', '2020-05-02 05:43:25'),
(180, 'Congo, the Democratic Republic of the', 'Democratic Republic of the Congo', 'Kinshasa', 28, NULL, 'Congolese', 'CD', '180', '243', 'CD.png', 0, 1, '2020-05-02 05:43:25', '2020-05-02 05:43:25'),
(184, 'Cook Islands', 'Cook Islands', 'Avarua', 107, NULL, 'Cook Islander', 'CK', '184', '682', 'CK.png', 0, 1, '2020-05-02 05:43:25', '2020-05-02 05:43:25'),
(188, 'Costa Rica', 'Republic of Costa Rica', 'San José', 34, NULL, 'Costa Rican', 'CR', '188', '506', 'CR.png', 0, 1, '2020-05-02 05:43:25', '2020-05-02 05:43:25'),
(191, 'Croatia', 'Republic of Croatia', 'Zagreb', 59, NULL, 'Croatian', 'HR', '191', '385', 'HR.png', 1, 1, '2020-05-02 05:43:25', '2020-05-02 05:43:25'),
(192, 'Cuba', 'Republic of Cuba', 'Havana', 36, NULL, 'Cuban', 'CU', '192', '53', 'CU.png', 0, 1, '2020-05-02 05:43:25', '2020-05-02 05:43:25'),
(196, 'Cyprus', 'Republic of Cyprus', 'Nicosia', 46, NULL, 'Cypriot', 'CY', '196', '357', 'CY.png', 1, 1, '2020-05-02 05:43:25', '2020-05-02 05:43:25'),
(203, 'Czech Republic', 'Czech Republic', 'Prague', 38, NULL, 'Czech', 'CZ', '203', '420', 'CZ.png', 1, 1, '2020-05-02 05:43:25', '2020-05-02 05:43:25'),
(204, 'Benin', 'Republic of Benin', 'Porto Novo (BJ1)', 164, NULL, 'Beninese', 'BJ', '204', '229', 'BJ.png', 0, 1, '2020-05-02 05:43:25', '2020-05-02 05:43:25'),
(208, 'Denmark', 'Kingdom of Denmark', 'Copenhagen', 40, NULL, 'Danish', 'DK', '208', '45', 'DK.png', 1, 1, '2020-05-02 05:43:25', '2020-05-02 05:43:25'),
(212, 'Dominica', 'Commonwealth of Dominica', 'Roseau', 162, NULL, 'Dominican', 'DM', '212', '1', 'DM.png', 0, 1, '2020-05-02 05:43:25', '2020-05-02 05:43:25'),
(214, 'Dominican Republic', 'Dominican Republic', 'Santo Domingo', 41, NULL, 'Dominican', 'DO', '214', '1', 'DO.png', 0, 1, '2020-05-02 05:43:25', '2020-05-02 05:43:25'),
(218, 'Ecuador', 'Republic of Ecuador', 'Quito', 148, NULL, 'Ecuadorian', 'EC', '218', '593', 'EC.png', 0, 1, '2020-05-02 05:43:26', '2020-05-02 05:43:26'),
(222, 'El Salvador', 'Republic of El Salvador', 'San Salvador', 134, NULL, 'Salvadoran', 'SV', '222', '503', 'SV.png', 0, 1, '2020-05-02 05:43:26', '2020-05-02 05:43:26'),
(226, 'Equatorial Guinea', 'Republic of Equatorial Guinea', 'Malabo', 155, NULL, 'Equatorial Guinean', 'GQ', '226', '240', 'GQ.png', 0, 1, '2020-05-02 05:43:26', '2020-05-02 05:43:26'),
(231, 'Ethiopia', 'Federal Democratic Republic of Ethiopia', 'Addis Ababa', 45, NULL, 'Ethiopian', 'ET', '231', '251', 'ET.png', 0, 1, '2020-05-02 05:43:26', '2020-05-02 05:43:26'),
(232, 'Eritrea', 'State of Eritrea', 'Asmara', 44, NULL, 'Eritrean', 'ER', '232', '291', 'ER.png', 0, 1, '2020-05-02 05:43:26', '2020-05-02 05:43:26'),
(233, 'Estonia', 'Republic of Estonia', 'Tallinn', 46, NULL, 'Estonian', 'EE', '233', '372', 'EE.png', 1, 1, '2020-05-02 05:43:26', '2020-05-02 05:43:26'),
(234, 'Faroe Islands', 'Faeroe Islands', 'Tórshavn', 40, NULL, 'Faeroese', 'FO', '234', '298', 'FO.png', 0, 1, '2020-05-02 05:43:26', '2020-05-02 05:43:26'),
(238, 'Falkland Islands (Malvinas)', 'Falkland Islands', 'Stanley', 48, NULL, 'Falkland Islander', 'FK', '238', '500', 'FK.png', 0, 1, '2020-05-02 05:43:26', '2020-05-02 05:43:26'),
(239, 'South Georgia and the South Sandwich Islands', 'South Georgia and the South Sandwich Islands', 'King Edward Point (Grytviken)', NULL, NULL, 'of South Georgia and the South Sandwich Islands', 'GS', '239', '44', 'GS.png', 0, 1, '2020-05-02 05:43:26', '2020-05-02 05:43:26'),
(242, 'Fiji', 'Republic of Fiji', 'Suva', 47, NULL, 'Fijian', 'FJ', '242', '679', 'FJ.png', 0, 1, '2020-05-02 05:43:26', '2020-05-02 05:43:26'),
(246, 'Finland', 'Republic of Finland', 'Helsinki', 46, NULL, 'Finnish', 'FI', '246', '358', 'FI.png', 1, 1, '2020-05-02 05:43:26', '2020-05-02 05:43:26'),
(248, 'Åland Islands', 'Åland Islands', 'Mariehamn', 46, NULL, 'Åland Islander', 'AX', '248', '358', NULL, 0, 1, '2020-05-02 05:43:26', '2020-05-02 05:43:26'),
(250, 'France', 'French Republic', 'Paris', 46, NULL, 'French', 'FR', '250', '33', 'FR.png', 1, 1, '2020-05-02 05:43:26', '2020-05-02 05:43:26'),
(254, 'French Guiana', 'French Guiana', 'Cayenne', 46, NULL, 'Guianese', 'GF', '254', '594', 'GF.png', 0, 1, '2020-05-02 05:43:26', '2020-05-02 05:43:26'),
(258, 'French Polynesia', 'French Polynesia', 'Papeete', 166, NULL, 'Polynesian', 'PF', '258', '689', 'PF.png', 0, 1, '2020-05-02 05:43:26', '2020-05-02 05:43:26'),
(260, 'French Southern Territories', 'French Southern and Antarctic Lands', 'Port-aux-Francais', 46, NULL, 'of French Southern and Antarctic Lands', 'TF', '260', '33', 'TF.png', 0, 1, '2020-05-02 05:43:26', '2020-05-02 05:43:26'),
(262, 'Djibouti', 'Republic of Djibouti', 'Djibouti', 39, NULL, 'Djiboutian', 'DJ', '262', '253', 'DJ.png', 0, 1, '2020-05-02 05:43:26', '2020-05-02 05:43:26'),
(266, 'Gabon', 'Gabonese Republic', 'Libreville', 155, NULL, 'Gabonese', 'GA', '266', '241', 'GA.png', 0, 1, '2020-05-02 05:43:26', '2020-05-02 05:43:26'),
(268, 'Georgia', 'Georgia', 'Tbilisi', 50, NULL, 'Georgian', 'GE', '268', '995', 'GE.png', 0, 1, '2020-05-02 05:43:26', '2020-05-02 05:43:26'),
(270, 'Gambia', 'Republic of the Gambia', 'Banjul', 53, NULL, 'Gambian', 'GM', '270', '220', 'GM.png', 0, 1, '2020-05-02 05:43:26', '2020-05-02 05:43:26'),
(275, 'Palestinian Territory, Occupied', NULL, NULL, 53, NULL, 'Palestinian', 'PS', '275', '970', 'PS.png', 0, 1, '2020-05-02 05:43:26', '2020-05-02 05:43:26'),
(276, 'Germany', 'Federal Republic of Germany', 'Berlin', 46, NULL, 'German', 'DE', '276', '49', 'DE.png', 1, 1, '2020-05-02 05:43:26', '2020-05-02 05:43:26'),
(288, 'Ghana', 'Republic of Ghana', 'Accra', 51, NULL, 'Ghanaian', 'GH', '288', '233', 'GH.png', 0, 1, '2020-05-02 05:43:26', '2020-05-02 05:43:26'),
(292, 'Gibraltar', 'Gibraltar', 'Gibraltar', 52, NULL, 'Gibraltarian', 'GI', '292', '350', 'GI.png', 0, 1, '2020-05-02 05:43:27', '2020-05-02 05:43:27'),
(296, 'Kiribati', 'Republic of Kiribati', 'Tarawa', 8, NULL, 'Kiribatian', 'KI', '296', '686', 'KI.png', 0, 1, '2020-05-02 05:43:27', '2020-05-02 05:43:27'),
(300, 'Greece', 'Hellenic Republic', 'Athens', 46, NULL, 'Greek', 'GR', '300', '30', 'GR.png', 1, 1, '2020-05-02 05:43:27', '2020-05-02 05:43:27'),
(304, 'Greenland', 'Greenland', 'Nuuk', 40, NULL, 'Greenlander', 'GL', '304', '299', 'GL.png', 0, 1, '2020-05-02 05:43:27', '2020-05-02 05:43:27'),
(308, 'Grenada', 'Grenada', 'St George’s', 162, NULL, 'Grenadian', 'GD', '308', '1', 'GD.png', 0, 1, '2020-05-02 05:43:27', '2020-05-02 05:43:27'),
(312, 'Guadeloupe', 'Guadeloupe', 'Basse Terre', 46, NULL, 'Guadeloupean', 'GP', '312', '590', 'GP.png', 0, 1, '2020-05-02 05:43:27', '2020-05-02 05:43:27'),
(316, 'Guam', 'Territory of Guam', 'Agaña (Hagåtña)', 148, NULL, 'Guamanian', 'GU', '316', '1', 'GU.png', 0, 1, '2020-05-02 05:43:27', '2020-05-02 05:43:27'),
(320, 'Guatemala', 'Republic of Guatemala', 'Guatemala City', 55, NULL, 'Guatemalan', 'GT', '320', '502', 'GT.png', 0, 1, '2020-05-02 05:43:27', '2020-05-02 05:43:27'),
(324, 'Guinea', 'Republic of Guinea', 'Conakry', 54, NULL, 'Guinean', 'GN', '324', '224', 'GN.png', 0, 1, '2020-05-02 05:43:27', '2020-05-02 05:43:27'),
(328, 'Guyana', 'Cooperative Republic of Guyana', 'Georgetown', 56, NULL, 'Guyanese', 'GY', '328', '592', 'GY.png', 0, 1, '2020-05-02 05:43:27', '2020-05-02 05:43:27'),
(332, 'Haiti', 'Republic of Haiti', 'Port-au-Prince', 60, NULL, 'Haitian', 'HT', '332', '509', 'HT.png', 0, 1, '2020-05-02 05:43:27', '2020-05-02 05:43:27'),
(334, 'Heard Island and McDonald Islands', 'Territory of Heard Island and McDonald Islands', 'Territory of Heard Island and McDonald Islands', NULL, NULL, 'of Territory of Heard Island and McDonald Islands', 'HM', '334', '61', 'HM.png', 0, 1, '2020-05-02 05:43:27', '2020-05-02 05:43:27'),
(336, 'Holy See (Vatican City State)', 'the Holy See/ Vatican City State', 'Vatican City', 46, NULL, 'of the Holy See/of the Vatican', 'VA', '336', '39', 'VA.png', 0, 1, '2020-05-02 05:43:27', '2020-05-02 05:43:27'),
(340, 'Honduras', 'Republic of Honduras', 'Tegucigalpa', 58, NULL, 'Honduran', 'HN', '340', '504', 'HN.png', 0, 1, '2020-05-02 05:43:27', '2020-05-02 05:43:27'),
(344, 'Hong Kong', 'Hong Kong Special Administrative Region of the People’s Republic of China (HK2)', '(HK3)', 57, NULL, 'Hong Kong Chinese', 'HK', '344', '852', 'HK.png', 0, 1, '2020-05-02 05:43:27', '2020-05-02 05:43:27'),
(348, 'Hungary', 'Republic of Hungary', 'Budapest', 61, NULL, 'Hungarian', 'HU', '348', '36', 'HU.png', 1, 1, '2020-05-02 05:43:27', '2020-05-02 05:43:27'),
(352, 'Iceland', 'Republic of Iceland', 'Reykjavik', 67, NULL, 'Icelander', 'IS', '352', '354', 'IS.png', 1, 1, '2020-05-02 05:43:28', '2020-05-02 05:43:28'),
(356, 'India', 'Republic of India', 'New Delhi', 64, NULL, 'Indian', 'IN', '356', '91', 'IN.png', 0, 1, '2020-05-02 05:43:28', '2020-05-02 05:43:28'),
(360, 'Indonesia', 'Republic of Indonesia', 'Jakarta', 62, NULL, 'Indonesian', 'ID', '360', '62', 'ID.png', 0, 1, '2020-05-02 05:43:28', '2020-05-02 05:43:28'),
(364, 'Iran, Islamic Republic of', 'Islamic Republic of Iran', 'Tehran', 66, NULL, 'Iranian', 'IR', '364', '98', 'IR.png', 0, 1, '2020-05-02 05:43:28', '2020-05-02 05:43:28'),
(368, 'Iraq', 'Republic of Iraq', 'Baghdad', 65, NULL, 'Iraqi', 'IQ', '368', '964', 'IQ.png', 0, 1, '2020-05-02 05:43:28', '2020-05-02 05:43:28'),
(372, 'Ireland', 'Ireland (IE1)', 'Dublin', 46, NULL, 'Irish', 'IE', '372', '353', 'IE.png', 1, 1, '2020-05-02 05:43:28', '2020-05-02 05:43:28'),
(376, 'Israel', 'State of Israel', '(IL1)', 63, NULL, 'Israeli', 'IL', '376', '972', 'IL.png', 0, 1, '2020-05-02 05:43:28', '2020-05-02 05:43:28'),
(380, 'Italy', 'Italian Republic', 'Rome', 46, NULL, 'Italian', 'IT', '380', '39', 'IT.png', 1, 1, '2020-05-02 05:43:28', '2020-05-02 05:43:28'),
(384, 'Côte d\'Ivoire', 'Republic of Côte d’Ivoire', 'Yamoussoukro (CI1)', 164, NULL, 'Ivorian', 'CI', '384', '225', 'CI.png', 0, 1, '2020-05-02 05:43:28', '2020-05-02 05:43:28'),
(388, 'Jamaica', 'Jamaica', 'Kingston', 68, NULL, 'Jamaican', 'JM', '388', '1', 'JM.png', 0, 1, '2020-05-02 05:43:28', '2020-05-02 05:43:28'),
(392, 'Japan', 'Japan', 'Tokyo', 70, NULL, 'Japanese', 'JP', '392', '81', 'JP.png', 0, 1, '2020-05-02 05:43:28', '2020-05-02 05:43:28'),
(398, 'Kazakhstan', 'Republic of Kazakhstan', 'Astana', 79, NULL, 'Kazakh', 'KZ', '398', '7', 'KZ.png', 0, 1, '2020-05-02 05:43:28', '2020-05-02 05:43:28'),
(400, 'Jordan', 'Hashemite Kingdom of Jordan', 'Amman', 69, NULL, 'Jordanian', 'JO', '400', '962', 'JO.png', 0, 1, '2020-05-02 05:43:28', '2020-05-02 05:43:28'),
(404, 'Kenya', 'Republic of Kenya', 'Nairobi', 71, NULL, 'Kenyan', 'KE', '404', '254', 'KE.png', 0, 1, '2020-05-02 05:43:28', '2020-05-02 05:43:28'),
(408, 'Korea, Democratic People\'s Republic of', 'Democratic People’s Republic of Korea', 'Pyongyang', 75, NULL, 'North Korean', 'KP', '408', '850', 'KP.png', 0, 1, '2020-05-02 05:43:28', '2020-05-02 05:43:28'),
(410, 'Korea, Republic of', 'Republic of Korea', 'Seoul', 76, NULL, 'South Korean', 'KR', '410', '82', 'KR.png', 0, 1, '2020-05-02 05:43:28', '2020-05-02 05:43:28'),
(414, 'Kuwait', 'State of Kuwait', 'Kuwait City', 77, NULL, 'Kuwaiti', 'KW', '414', '965', 'KW.png', 0, 1, '2020-05-02 05:43:28', '2020-05-02 05:43:28'),
(417, 'Kyrgyzstan', 'Kyrgyz Republic', 'Bishkek', 72, NULL, 'Kyrgyz', 'KG', '417', '996', 'KG.png', 0, 1, '2020-05-02 05:43:28', '2020-05-02 05:43:28'),
(418, 'Lao People\'s Democratic Republic', 'Lao People’s Democratic Republic', 'Vientiane', 80, NULL, 'Lao', 'LA', '418', '856', 'LA.png', 0, 1, '2020-05-02 05:43:28', '2020-05-02 05:43:28'),
(422, 'Lebanon', 'Lebanese Republic', 'Beirut', 81, NULL, 'Lebanese', 'LB', '422', '961', 'LB.png', 0, 1, '2020-05-02 05:43:28', '2020-05-02 05:43:28'),
(426, 'Lesotho', 'Kingdom of Lesotho', 'Maseru', 84, NULL, 'Basotho', 'LS', '426', '266', 'LS.png', 0, 1, '2020-05-02 05:43:28', '2020-05-02 05:43:28'),
(428, 'Latvia', 'Republic of Latvia', 'Riga', 46, NULL, 'Latvian', 'LV', '428', '371', 'LV.png', 1, 1, '2020-05-02 05:43:28', '2020-05-02 05:43:28'),
(430, 'Liberia', 'Republic of Liberia', 'Monrovia', 83, NULL, 'Liberian', 'LR', '430', '231', 'LR.png', 0, 1, '2020-05-02 05:43:28', '2020-05-02 05:43:28'),
(434, 'Libya', 'Socialist People’s Libyan Arab Jamahiriya', 'Tripoli', 87, NULL, 'Libyan', 'LY', '434', '218', 'LY.png', 0, 1, '2020-05-02 05:43:29', '2020-05-02 05:43:29'),
(438, 'Liechtenstein', 'Principality of Liechtenstein', 'Vaduz', 29, NULL, 'Liechtensteiner', 'LI', '438', '423', 'LI.png', 1, 1, '2020-05-02 05:43:29', '2020-05-02 05:43:29'),
(440, 'Lithuania', 'Republic of Lithuania', 'Vilnius', 46, NULL, 'Lithuanian', 'LT', '440', '370', 'LT.png', 1, 1, '2020-05-02 05:43:29', '2020-05-02 05:43:29'),
(442, 'Luxembourg', 'Grand Duchy of Luxembourg', 'Luxembourg', 46, NULL, 'Luxembourger', 'LU', '442', '352', 'LU.png', 1, 1, '2020-05-02 05:43:29', '2020-05-02 05:43:29'),
(446, 'Macao', 'Macao Special Administrative Region of the People’s Republic of China (MO2)', 'Macao (MO3)', 94, NULL, 'Macanese', 'MO', '446', '853', 'MO.png', 0, 1, '2020-05-02 05:43:29', '2020-05-02 05:43:29'),
(450, 'Madagascar', 'Republic of Madagascar', 'Antananarivo', 90, NULL, 'Malagasy', 'MG', '450', '261', 'MG.png', 0, 1, '2020-05-02 05:43:29', '2020-05-02 05:43:29'),
(454, 'Malawi', 'Republic of Malawi', 'Lilongwe', 98, NULL, 'Malawian', 'MW', '454', '265', 'MW.png', 0, 1, '2020-05-02 05:43:29', '2020-05-02 05:43:29'),
(458, 'Malaysia', 'Malaysia', 'Kuala Lumpur (MY1)', 100, NULL, 'Malaysian', 'MY', '458', '60', 'MY.png', 0, 1, '2020-05-02 05:43:29', '2020-05-02 05:43:29'),
(462, 'Maldives', 'Republic of Maldives', 'Malé', 97, NULL, 'Maldivian', 'MV', '462', '960', 'MV.png', 0, 1, '2020-05-02 05:43:29', '2020-05-02 05:43:29'),
(466, 'Mali', 'Republic of Mali', 'Bamako', 164, NULL, 'Malian', 'ML', '466', '223', 'ML.png', 0, 1, '2020-05-02 05:43:29', '2020-05-02 05:43:29'),
(470, 'Malta', 'Republic of Malta', 'Valletta', 46, NULL, 'Maltese', 'MT', '470', '356', 'MT.png', 1, 1, '2020-05-02 05:43:29', '2020-05-02 05:43:29'),
(474, 'Martinique', 'Martinique', 'Fort-de-France', 46, NULL, 'Martinican', 'MQ', '474', '596', 'MQ.png', 0, 1, '2020-05-02 05:43:29', '2020-05-02 05:43:29'),
(478, 'Mauritania', 'Islamic Republic of Mauritania', 'Nouakchott', 95, NULL, 'Mauritanian', 'MR', '478', '222', 'MR.png', 0, 1, '2020-05-02 05:43:29', '2020-05-02 05:43:29'),
(480, 'Mauritius', 'Republic of Mauritius', 'Port Louis', 96, NULL, 'Mauritian', 'MU', '480', '230', 'MU.png', 0, 1, '2020-05-02 05:43:29', '2020-05-02 05:43:29'),
(484, 'Mexico', 'United Mexican States', 'Mexico City', 99, NULL, 'Mexican', 'MX', '484', '52', 'MX.png', 0, 1, '2020-05-02 05:43:29', '2020-05-02 05:43:29'),
(492, 'Monaco', 'Principality of Monaco', 'Monaco', 46, NULL, 'Monegasque', 'MC', '492', '377', 'MC.png', 0, 1, '2020-05-02 05:43:29', '2020-05-02 05:43:29'),
(496, 'Mongolia', 'Mongolia', 'Ulan Bator', 93, NULL, 'Mongolian', 'MN', '496', '976', 'MN.png', 0, 1, '2020-05-02 05:43:29', '2020-05-02 05:43:29'),
(498, 'Moldova, Republic of', 'Republic of Moldova', 'Chisinau', 89, NULL, 'Moldovan', 'MD', '498', '373', 'MD.png', 0, 1, '2020-05-02 05:43:29', '2020-05-02 05:43:29'),
(499, 'Montenegro', 'Montenegro', 'Podgorica', 46, NULL, 'Montenegrin', 'ME', '499', '382', NULL, 0, 1, '2020-05-02 05:43:29', '2020-05-02 05:43:29'),
(500, 'Montserrat', 'Montserrat', 'Plymouth (MS2)', 162, NULL, 'Montserratian', 'MS', '500', '1', 'MS.png', 0, 1, '2020-05-02 05:43:29', '2020-05-02 05:43:29'),
(504, 'Morocco', 'Kingdom of Morocco', 'Rabat', 88, NULL, 'Moroccan', 'MA', '504', '212', 'MA.png', 0, 1, '2020-05-02 05:43:29', '2020-05-02 05:43:29'),
(508, 'Mozambique', 'Republic of Mozambique', 'Maputo', 101, NULL, 'Mozambican', 'MZ', '508', '258', 'MZ.png', 0, 1, '2020-05-02 05:43:29', '2020-05-02 05:43:29'),
(512, 'Oman', 'Sultanate of Oman', 'Muscat', 108, NULL, 'Omani', 'OM', '512', '968', 'OM.png', 0, 1, '2020-05-02 05:43:29', '2020-05-02 05:43:29'),
(516, 'Namibia', 'Republic of Namibia', 'Windhoek', 102, NULL, 'Namibian', 'NA', '516', '264', 'NA.png', 0, 1, '2020-05-02 05:43:30', '2020-05-02 05:43:30'),
(520, 'Nauru', 'Republic of Nauru', 'Yaren', 8, NULL, 'Nauruan', 'NR', '520', '674', 'NR.png', 0, 1, '2020-05-02 05:43:30', '2020-05-02 05:43:30'),
(524, 'Nepal', 'Nepal', 'Kathmandu', 106, NULL, 'Nepalese', 'NP', '524', '977', 'NP.png', 0, 1, '2020-05-02 05:43:30', '2020-05-02 05:43:30'),
(528, 'Netherlands', 'Kingdom of the Netherlands', 'Amsterdam (NL2)', 46, NULL, 'Dutch', 'NL', '528', '31', 'NL.png', 1, 1, '2020-05-02 05:43:30', '2020-05-02 05:43:30'),
(531, 'Curaçao', 'Curaçao', 'Willemstad', 5, NULL, 'Curaçaoan', 'CW', '531', '599', NULL, 0, 1, '2020-05-02 05:43:30', '2020-05-02 05:43:30'),
(533, 'Aruba', 'Aruba', 'Oranjestad', 9, NULL, 'Aruban', 'AW', '533', '297', 'AW.png', 0, 1, '2020-05-02 05:43:30', '2020-05-02 05:43:30'),
(534, 'Sint Maarten (Dutch part)', 'Sint Maarten', 'Philipsburg', 5, NULL, 'Sint Maartener', 'SX', '534', '721', NULL, 0, 1, '2020-05-02 05:43:30', '2020-05-02 05:43:30'),
(535, 'Bonaire, Sint Eustatius and Saba', NULL, NULL, 148, NULL, 'of Bonaire, Sint Eustatius and Saba', 'BQ', '535', '599', NULL, 0, 1, '2020-05-02 05:43:30', '2020-05-02 05:43:30'),
(540, 'New Caledonia', 'New Caledonia', 'Nouméa', 166, NULL, 'New Caledonian', 'NC', '540', '687', 'NC.png', 0, 1, '2020-05-02 05:43:30', '2020-05-02 05:43:30'),
(548, 'Vanuatu', 'Republic of Vanuatu', 'Port Vila', 153, NULL, 'Vanuatuan', 'VU', '548', '678', 'VU.png', 0, 1, '2020-05-02 05:43:30', '2020-05-02 05:43:30'),
(554, 'New Zealand', 'New Zealand', 'Wellington', 107, NULL, 'New Zealander', 'NZ', '554', '64', 'NZ.png', 0, 1, '2020-05-02 05:43:30', '2020-05-02 05:43:30'),
(558, 'Nicaragua', 'Republic of Nicaragua', 'Managua', 104, NULL, 'Nicaraguan', 'NI', '558', '505', 'NI.png', 0, 1, '2020-05-02 05:43:30', '2020-05-02 05:43:30'),
(562, 'Niger', 'Republic of Niger', 'Niamey', 164, NULL, 'Nigerien', 'NE', '562', '227', 'NE.png', 0, 1, '2020-05-02 05:43:30', '2020-05-02 05:43:30'),
(566, 'Nigeria', 'Federal Republic of Nigeria', 'Abuja', 103, NULL, 'Nigerian', 'NG', '566', '234', 'NG.png', 0, 1, '2020-05-02 05:43:30', '2020-05-02 05:43:30'),
(570, 'Niue', 'Niue', 'Alofi', 107, NULL, 'Niuean', 'NU', '570', '683', 'NU.png', 0, 1, '2020-05-02 05:43:30', '2020-05-02 05:43:30'),
(574, 'Norfolk Island', 'Territory of Norfolk Island', 'Kingston', 8, NULL, 'Norfolk Islander', 'NF', '574', '672', 'NF.png', 0, 1, '2020-05-02 05:43:30', '2020-05-02 05:43:30'),
(578, 'Norway', 'Kingdom of Norway', 'Oslo', 105, NULL, 'Norwegian', 'NO', '578', '47', 'NO.png', 1, 1, '2020-05-02 05:43:30', '2020-05-02 05:43:30'),
(580, 'Northern Mariana Islands', 'Commonwealth of the Northern Mariana Islands', 'Saipan', 148, NULL, 'Northern Mariana Islander', 'MP', '580', '1', 'MP.png', 0, 1, '2020-05-02 05:43:30', '2020-05-02 05:43:30'),
(581, 'United States Minor Outlying Islands', 'United States Minor Outlying Islands', 'United States Minor Outlying Islands', 148, NULL, 'of United States Minor Outlying Islands', 'UM', '581', '1', 'UM.png', 0, 1, '2020-05-02 05:43:30', '2020-05-02 05:43:30'),
(583, 'Micronesia, Federated States of', 'Federated States of Micronesia', 'Palikir', 148, NULL, 'Micronesian', 'FM', '583', '691', 'FM.png', 0, 1, '2020-05-02 05:43:30', '2020-05-02 05:43:30'),
(584, 'Marshall Islands', 'Republic of the Marshall Islands', 'Majuro', 148, NULL, 'Marshallese', 'MH', '584', '692', 'MH.png', 0, 1, '2020-05-02 05:43:30', '2020-05-02 05:43:30'),
(585, 'Palau', 'Republic of Palau', 'Melekeok', 148, NULL, 'Palauan', 'PW', '585', '680', 'PW.png', 0, 1, '2020-05-02 05:43:30', '2020-05-02 05:43:30'),
(586, 'Pakistan', 'Islamic Republic of Pakistan', 'Islamabad', 113, NULL, 'Pakistani', 'PK', '586', '92', 'PK.png', 0, 1, '2020-05-02 05:43:30', '2020-05-02 05:43:30'),
(591, 'Panama', 'Republic of Panama', 'Panama City', 109, NULL, 'Panamanian', 'PA', '591', '507', 'PA.png', 0, 1, '2020-05-02 05:43:30', '2020-05-02 05:43:30'),
(598, 'Papua New Guinea', 'Independent State of Papua New Guinea', 'Port Moresby', 111, NULL, 'Papua New Guinean', 'PG', '598', '675', 'PG.png', 0, 1, '2020-05-02 05:43:31', '2020-05-02 05:43:31'),
(600, 'Paraguay', 'Republic of Paraguay', 'Asunción', 115, NULL, 'Paraguayan', 'PY', '600', '595', 'PY.png', 0, 1, '2020-05-02 05:43:31', '2020-05-02 05:43:31'),
(604, 'Peru', 'Republic of Peru', 'Lima', 110, NULL, 'Peruvian', 'PE', '604', '51', 'PE.png', 0, 1, '2020-05-02 05:43:31', '2020-05-02 05:43:31'),
(608, 'Philippines', 'Republic of the Philippines', 'Manila', 112, NULL, 'Filipino', 'PH', '608', '63', 'PH.png', 0, 1, '2020-05-02 05:43:31', '2020-05-02 05:43:31'),
(612, 'Pitcairn', 'Pitcairn Islands', 'Adamstown', 107, NULL, 'Pitcairner', 'PN', '612', '649', 'PN.png', 0, 1, '2020-05-02 05:43:31', '2020-05-02 05:43:31'),
(616, 'Poland', 'Republic of Poland', 'Warsaw', 114, NULL, 'Polish', 'PL', '616', '48', 'PL.png', 1, 1, '2020-05-02 05:43:31', '2020-05-02 05:43:31'),
(620, 'Portugal', 'Portuguese Republic', 'Lisbon', 46, NULL, 'Portuguese', 'PT', '620', '351', 'PT.png', 1, 1, '2020-05-02 05:43:31', '2020-05-02 05:43:31'),
(624, 'Guinea-Bissau', 'Republic of Guinea-Bissau', 'Bissau', 164, NULL, 'Guinea-Bissau national', 'GW', '624', '245', 'GW.png', 0, 1, '2020-05-02 05:43:31', '2020-05-02 05:43:31'),
(626, 'Timor-Leste', 'Democratic Republic of East Timor', 'Dili', 148, NULL, 'East Timorese', 'TL', '626', '670', 'TL.png', 0, 1, '2020-05-02 05:43:31', '2020-05-02 05:43:31'),
(630, 'Puerto Rico', 'Commonwealth of Puerto Rico', 'San Juan', 148, NULL, 'Puerto Rican', 'PR', '630', '1', 'PR.png', 0, 1, '2020-05-02 05:43:31', '2020-05-02 05:43:31'),
(634, 'Qatar', 'State of Qatar', 'Doha', 116, NULL, 'Qatari', 'QA', '634', '974', 'QA.png', 0, 1, '2020-05-02 05:43:31', '2020-05-02 05:43:31'),
(638, 'Réunion', 'Réunion', 'Saint-Denis', 46, NULL, 'Reunionese', 'RE', '638', '262', 'RE.png', 0, 1, '2020-05-02 05:43:31', '2020-05-02 05:43:31'),
(642, 'Romania', 'Romania', 'Bucharest', 117, NULL, 'Romanian', 'RO', '642', '40', 'RO.png', 1, 1, '2020-05-02 05:43:31', '2020-05-02 05:43:31'),
(643, 'Russian Federation', 'Russian Federation', 'Moscow', 119, NULL, 'Russian', 'RU', '643', '7', 'RU.png', 0, 1, '2020-05-02 05:43:31', '2020-05-02 05:43:31'),
(646, 'Rwanda', 'Republic of Rwanda', 'Kigali', 120, NULL, 'Rwandan; Rwandese', 'RW', '646', '250', 'RW.png', 0, 1, '2020-05-02 05:43:32', '2020-05-02 05:43:32'),
(652, 'Saint Barthélemy', 'Collectivity of Saint Barthélemy', 'Gustavia', 46, NULL, 'of Saint Barthélemy', 'BL', '652', '590', NULL, 0, 1, '2020-05-02 05:43:32', '2020-05-02 05:43:32'),
(654, 'Saint Helena, Ascension and Tristan da Cunha', 'Saint Helena, Ascension and Tristan da Cunha', 'Jamestown', 127, NULL, 'Saint Helenian', 'SH', '654', '290', 'SH.png', 0, 1, '2020-05-02 05:43:32', '2020-05-02 05:43:32'),
(659, 'Saint Kitts and Nevis', 'Federation of Saint Kitts and Nevis', 'Basseterre', 162, NULL, 'Kittsian; Nevisian', 'KN', '659', '1', 'KN.png', 0, 1, '2020-05-02 05:43:32', '2020-05-02 05:43:32'),
(660, 'Anguilla', 'Anguilla', 'The Valley', 162, NULL, 'Anguillan', 'AI', '660', '1', 'AI.png', 0, 1, '2020-05-02 05:43:32', '2020-05-02 05:43:32'),
(662, 'Saint Lucia', 'Saint Lucia', 'Castries', 162, NULL, 'Saint Lucian', 'LC', '662', '1', 'LC.png', 0, 1, '2020-05-02 05:43:32', '2020-05-02 05:43:32'),
(663, 'Saint Martin (French part)', 'Collectivity of Saint Martin', 'Marigot', 46, NULL, 'of Saint Martin', 'MF', '663', '590', NULL, 0, 1, '2020-05-02 05:43:32', '2020-05-02 05:43:32'),
(666, 'Saint Pierre and Miquelon', 'Territorial Collectivity of Saint Pierre and Miquelon', 'Saint-Pierre', 46, NULL, 'St-Pierrais; Miquelonnais', 'PM', '666', '508', 'PM.png', 0, 1, '2020-05-02 05:43:32', '2020-05-02 05:43:32'),
(670, 'Saint Vincent and the Grenadines', 'Saint Vincent and the Grenadines', 'Kingstown', 162, NULL, 'Vincentian', 'VC', '670', '1', 'VC.png', 0, 1, '2020-05-02 05:43:32', '2020-05-02 05:43:32'),
(674, 'San Marino', 'Republic of San Marino', 'San Marino', 46, NULL, 'San Marinese', 'SM', '674', '378', 'SM.png', 0, 1, '2020-05-02 05:43:32', '2020-05-02 05:43:32'),
(678, 'Sao Tome and Principe', 'Democratic Republic of São Tomé and Príncipe', 'São Tomé', 133, NULL, 'São Toméan', 'ST', '678', '239', 'ST.png', 0, 1, '2020-05-02 05:43:32', '2020-05-02 05:43:32'),
(682, 'Saudi Arabia', 'Kingdom of Saudi Arabia', 'Riyadh', 121, NULL, 'Saudi Arabian', 'SA', '682', '966', 'SA.png', 0, 1, '2020-05-02 05:43:32', '2020-05-02 05:43:32'),
(686, 'Senegal', 'Republic of Senegal', 'Dakar', 164, NULL, 'Senegalese', 'SN', '686', '221', 'SN.png', 0, 1, '2020-05-02 05:43:32', '2020-05-02 05:43:32'),
(688, 'Serbia', 'Republic of Serbia', 'Belgrade', 118, NULL, 'Serb', 'RS', '688', '381', NULL, 0, 1, '2020-05-02 05:43:32', '2020-05-02 05:43:32'),
(690, 'Seychelles', 'Republic of Seychelles', 'Victoria', 123, NULL, 'Seychellois', 'SC', '690', '248', 'SC.png', 0, 1, '2020-05-02 05:43:32', '2020-05-02 05:43:32'),
(694, 'Sierra Leone', 'Republic of Sierra Leone', 'Freetown', 129, NULL, 'Sierra Leonean', 'SL', '694', '232', 'SL.png', 0, 1, '2020-05-02 05:43:32', '2020-05-02 05:43:32'),
(702, 'Singapore', 'Republic of Singapore', 'Singapore', 126, NULL, 'Singaporean', 'SG', '702', '65', 'SG.png', 0, 1, '2020-05-02 05:43:32', '2020-05-02 05:43:32'),
(703, 'Slovakia', 'Slovak Republic', 'Bratislava', 46, NULL, 'Slovak', 'SK', '703', '421', 'SK.png', 1, 1, '2020-05-02 05:43:32', '2020-05-02 05:43:32'),
(704, 'Viet Nam', 'Socialist Republic of Vietnam', 'Hanoi', 152, NULL, 'Vietnamese', 'VN', '704', '84', 'VN.png', 0, 1, '2020-05-02 05:43:32', '2020-05-02 05:43:32'),
(705, 'Slovenia', 'Republic of Slovenia', 'Ljubljana', 46, NULL, 'Slovene', 'SI', '705', '386', 'SI.png', 1, 1, '2020-05-02 05:43:32', '2020-05-02 05:43:32'),
(706, 'Somalia', 'Somali Republic', 'Mogadishu', 130, NULL, 'Somali', 'SO', '706', '252', 'SO.png', 0, 1, '2020-05-02 05:43:32', '2020-05-02 05:43:32'),
(710, 'South Africa', 'Republic of South Africa', 'Pretoria (ZA1)', 170, NULL, 'South African', 'ZA', '710', '27', 'ZA.png', 0, 1, '2020-05-02 05:43:32', '2020-05-02 05:43:32'),
(716, 'Zimbabwe', 'Republic of Zimbabwe', 'Harare', NULL, NULL, 'Zimbabwean', 'ZW', '716', '263', 'ZW.png', 0, 1, '2020-05-02 05:43:33', '2020-05-02 05:43:33'),
(724, 'Spain', 'Kingdom of Spain', 'Madrid', 46, NULL, 'Spaniard', 'ES', '724', '34', 'ES.png', 1, 1, '2020-05-02 05:43:33', '2020-05-02 05:43:33'),
(728, 'South Sudan', 'Republic of South Sudan', 'Juba', 132, NULL, 'South Sudanese', 'SS', '728', '211', NULL, 0, 1, '2020-05-02 05:43:33', '2020-05-02 05:43:33'),
(729, 'Sudan', 'Republic of the Sudan', 'Khartoum', 124, NULL, 'Sudanese', 'SD', '729', '249', NULL, 0, 1, '2020-05-02 05:43:33', '2020-05-02 05:43:33'),
(732, 'Western Sahara', 'Western Sahara', 'Al aaiun', 88, NULL, 'Sahrawi', 'EH', '732', '212', 'EH.png', 0, 1, '2020-05-02 05:43:33', '2020-05-02 05:43:33'),
(740, 'Suriname', 'Republic of Suriname', 'Paramaribo', 131, NULL, 'Surinamese', 'SR', '740', '597', 'SR.png', 0, 1, '2020-05-02 05:43:33', '2020-05-02 05:43:33'),
(744, 'Svalbard and Jan Mayen', 'Svalbard and Jan Mayen', 'Longyearbyen', 105, NULL, 'of Svalbard', 'SJ', '744', '47', 'SJ.png', 0, 1, '2020-05-02 05:43:33', '2020-05-02 05:43:33'),
(748, 'Swaziland', 'Kingdom of Swaziland', 'Mbabane', 136, NULL, 'Swazi', 'SZ', '748', '268', 'SZ.png', 0, 1, '2020-05-02 05:43:33', '2020-05-02 05:43:33'),
(752, 'Sweden', 'Kingdom of Sweden', 'Stockholm', 125, NULL, 'Swedish', 'SE', '752', '46', 'SE.png', 1, 1, '2020-05-02 05:43:33', '2020-05-02 05:43:33'),
(756, 'Switzerland', 'Swiss Confederation', 'Berne', 29, NULL, 'Swiss', 'CH', '756', '41', 'CH.png', 1, 1, '2020-05-02 05:43:33', '2020-05-02 05:43:33'),
(760, 'Syrian Arab Republic', 'Syrian Arab Republic', 'Damascus', 135, NULL, 'Syrian', 'SY', '760', '963', 'SY.png', 0, 1, '2020-05-02 05:43:33', '2020-05-02 05:43:33'),
(762, 'Tajikistan', 'Republic of Tajikistan', 'Dushanbe', 138, NULL, 'Tajik', 'TJ', '762', '992', 'TJ.png', 0, 1, '2020-05-02 05:43:33', '2020-05-02 05:43:33'),
(764, 'Thailand', 'Kingdom of Thailand', 'Bangkok', 137, NULL, 'Thai', 'TH', '764', '66', 'TH.png', 0, 1, '2020-05-02 05:43:33', '2020-05-02 05:43:33'),
(768, 'Togo', 'Togolese Republic', 'Lomé', 164, NULL, 'Togolese', 'TG', '768', '228', 'TG.png', 0, 1, '2020-05-02 05:43:33', '2020-05-02 05:43:33'),
(772, 'Tokelau', 'Tokelau', '(TK2)', 107, NULL, 'Tokelauan', 'TK', '772', '690', 'TK.png', 0, 1, '2020-05-02 05:43:33', '2020-05-02 05:43:33'),
(776, 'Tonga', 'Kingdom of Tonga', 'Nuku’alofa', 141, NULL, 'Tongan', 'TO', '776', '676', 'TO.png', 0, 1, '2020-05-02 05:43:34', '2020-05-02 05:43:34'),
(780, 'Trinidad and Tobago', 'Republic of Trinidad and Tobago', 'Port of Spain', 143, NULL, 'Trinidadian; Tobagonian', 'TT', '780', '1', 'TT.png', 0, 1, '2020-05-02 05:43:34', '2020-05-02 05:43:34'),
(784, 'United Arab Emirates', 'United Arab Emirates', 'Abu Dhabi', 1, NULL, 'Emirian', 'AE', '784', '971', 'AE.png', 0, 1, '2020-05-02 05:43:34', '2020-05-02 05:43:34'),
(788, 'Tunisia', 'Republic of Tunisia', 'Tunis', 140, NULL, 'Tunisian', 'TN', '788', '216', 'TN.png', 0, 1, '2020-05-02 05:43:34', '2020-05-02 05:43:34'),
(792, 'Turkey', 'Republic of Turkey', 'Ankara', 142, NULL, 'Turk', 'TR', '792', '90', 'TR.png', 0, 1, '2020-05-02 05:43:34', '2020-05-02 05:43:34'),
(795, 'Turkmenistan', 'Turkmenistan', 'Ashgabat', 139, NULL, 'Turkmen', 'TM', '795', '993', 'TM.png', 0, 1, '2020-05-02 05:43:34', '2020-05-02 05:43:34'),
(796, 'Turks and Caicos Islands', 'Turks and Caicos Islands', 'Cockburn Town', 148, NULL, 'Turks and Caicos Islander', 'TC', '796', '1', 'TC.png', 0, 1, '2020-05-02 05:43:34', '2020-05-02 05:43:34'),
(798, 'Tuvalu', 'Tuvalu', 'Funafuti', 8, NULL, 'Tuvaluan', 'TV', '798', '688', 'TV.png', 0, 1, '2020-05-02 05:43:34', '2020-05-02 05:43:34'),
(800, 'Uganda', 'Republic of Uganda', 'Kampala', 147, NULL, 'Ugandan', 'UG', '800', '256', 'UG.png', 0, 1, '2020-05-02 05:43:34', '2020-05-02 05:43:34'),
(804, 'Ukraine', 'Ukraine', 'Kiev', 146, NULL, 'Ukrainian', 'UA', '804', '380', 'UA.png', 0, 1, '2020-05-02 05:43:34', '2020-05-02 05:43:34'),
(807, 'Macedonia, the former Yugoslav Republic of', 'the former Yugoslav Republic of Macedonia', 'Skopje', 91, NULL, 'of the former Yugoslav Republic of Macedonia', 'MK', '807', '389', 'MK.png', 0, 1, '2020-05-02 05:43:34', '2020-05-02 05:43:34'),
(818, 'Egypt', 'Arab Republic of Egypt', 'Cairo', 43, NULL, 'Egyptian', 'EG', '818', '20', 'EG.png', 0, 1, '2020-05-02 05:43:34', '2020-05-02 05:43:34'),
(826, 'United Kingdom', 'United Kingdom of Great Britain and Northern Ireland', 'London', 49, NULL, 'British', 'GB', '826', '44', 'GB.png', 1, 1, '2020-05-02 05:43:34', '2020-05-02 05:43:34'),
(831, 'Guernsey', 'Bailiwick of Guernsey', 'St Peter Port', NULL, NULL, 'of Guernsey', 'GG', '831', '44', NULL, 0, 1, '2020-05-02 05:43:34', '2020-05-02 05:43:34'),
(832, 'Jersey', 'Bailiwick of Jersey', 'St Helier', NULL, NULL, 'of Jersey', 'JE', '832', '44', NULL, 0, 1, '2020-05-02 05:43:34', '2020-05-02 05:43:34'),
(833, 'Isle of Man', 'Isle of Man', 'Douglas', NULL, NULL, 'Manxman; Manxwoman', 'IM', '833', '44', NULL, 0, 1, '2020-05-02 05:43:34', '2020-05-02 05:43:34'),
(834, 'Tanzania, United Republic of', 'United Republic of Tanzania', 'Dodoma (TZ1)', 145, NULL, 'Tanzanian', 'TZ', '834', '255', 'TZ.png', 0, 1, '2020-05-02 05:43:34', '2020-05-02 05:43:34'),
(840, 'United States', 'United States of America', 'Washington DC', 148, NULL, 'American', 'US', '840', '1', 'US.png', 0, 1, '2020-05-02 05:43:34', '2020-05-02 05:43:34'),
(850, 'Virgin Islands, U.S.', 'United States Virgin Islands', 'Charlotte Amalie', 148, NULL, 'US Virgin Islander', 'VI', '850', '1', 'VI.png', 0, 1, '2020-05-02 05:43:34', '2020-05-02 05:43:34'),
(854, 'Burkina Faso', 'Burkina Faso', 'Ouagadougou', 164, NULL, 'Burkinabe', 'BF', '854', '226', 'BF.png', 0, 1, '2020-05-02 05:43:34', '2020-05-02 05:43:34'),
(858, 'Uruguay', 'Eastern Republic of Uruguay', 'Montevideo', 149, NULL, 'Uruguayan', 'UY', '858', '598', 'UY.png', 0, 1, '2020-05-02 05:43:34', '2020-05-02 05:43:34'),
(860, 'Uzbekistan', 'Republic of Uzbekistan', 'Tashkent', 150, NULL, 'Uzbek', 'UZ', '860', '998', 'UZ.png', 0, 1, '2020-05-02 05:43:34', '2020-05-02 05:43:34'),
(862, 'Venezuela, Bolivarian Republic of', 'Bolivarian Republic of Venezuela', 'Caracas', 151, NULL, 'Venezuelan', 'VE', '862', '58', 'VE.png', 0, 1, '2020-05-02 05:43:34', '2020-05-02 05:43:34'),
(876, 'Wallis and Futuna', 'Wallis and Futuna', 'Mata-Utu', 166, NULL, 'Wallisian; Futunan; Wallis and Futuna Islander', 'WF', '876', '681', 'WF.png', 0, 1, '2020-05-02 05:43:34', '2020-05-02 05:43:34'),
(882, 'Samoa', 'Independent State of Samoa', 'Apia', 154, NULL, 'Samoan', 'WS', '882', '685', 'WS.png', 0, 1, '2020-05-02 05:43:34', '2020-05-02 05:43:34'),
(887, 'Yemen', 'Republic of Yemen', 'San’a', 169, NULL, 'Yemenite', 'YE', '887', '967', 'YE.png', 0, 1, '2020-05-02 05:43:34', '2020-05-02 05:43:34'),
(894, 'Zambia', 'Republic of Zambia', 'Lusaka', 172, NULL, 'Zambian', 'ZM', '894', '260', 'ZM.png', 0, 1, '2020-05-02 05:43:34', '2020-05-02 05:43:34');

-- --------------------------------------------------------

--
-- Table structure for table `coupan`
--

CREATE TABLE `coupan` (
  `id` int(11) NOT NULL,
  `type` int(3) DEFAULT NULL,
  `offer` int(5) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `coupancode` varchar(30) DEFAULT NULL,
  `valid` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `couponname` varchar(255) NOT NULL,
  `startdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `enddate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coupan`
--

INSERT INTO `coupan` (`id`, `type`, `offer`, `status`, `cat_id`, `coupancode`, `valid`, `couponname`, `startdate`, `enddate`) VALUES
(1, 1, 5, 1, NULL, 'ADY2322', '2021-02-26 07:35:26', 'Diwali Offer', '2021-02-28 07:30:35', '2021-03-03 20:30:00'),
(2, 2, 10, 1, NULL, 'MAR2322', '2021-02-26 07:35:26', 'March Offer', '2021-02-28 07:30:35', '2021-03-03 20:30:00'),
(3, NULL, 12, 1, NULL, 'MARC5645CH', '2021-02-25 18:30:00', 'March Offer', '2021-02-25 18:30:00', '2021-02-25 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `phone`, `status`, `created_at`, `updated_at`) VALUES
(1, 'test', 'test@gmail.com', '12344567898', 'Active', '2021-02-24 08:49:32', '2021-02-24 08:49:32'),
(2, 'Sonali Test', 'sonalitest@gmail.com', '9876543212', 'Active', '2021-02-26 08:49:32', '2021-02-26 08:49:32');

-- --------------------------------------------------------

--
-- Table structure for table `customers_address`
--

CREATE TABLE `customers_address` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `address_line_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_line_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `landmark` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers_address`
--

INSERT INTO `customers_address` (`id`, `customer_id`, `address_line_1`, `address_line_2`, `landmark`, `area`, `address_type`, `city`, `state`, `zip_code`, `name`, `country_id`, `email`, `phone`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'maheshpur Industrial Area', 'Chandpur', 'mikes', 'nikes', 'Home', '34', '237', '221010', 'Neeraj', 356, 'neeral@gmail.com', '9898765456', '1', '2020-10-24 04:20:58', '2020-10-24 04:20:58'),
(2, 1, 'Faridabad', 'Gurgaon', 'hjh', 'hhh', 'Home', 'Howrah', 'ggg', 'ggg', 'neeraj', 1, 'akpatel5348@gmail.com', '9935094531', '1', '2020-10-27 01:08:30', '2020-10-27 01:08:30'),
(3, 4, 'Noida', 'Delhi', 'hj', 'u', 'Home', 'Howrah', 'ggg', 'ggg', 'manish', 4, 'manish@gmail.com', '8978675645', '0', '2021-01-22 03:53:31', '2021-01-22 03:53:31');

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customerid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customeraddress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Total` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Discount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TotalAmount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Payment_Type` int(11) DEFAULT NULL,
  `order_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '0=not confirmed\r\n1=confirmed\r\n2=packing pending \r\n3:- delivery process\r\n4;- delivered\r\n5-cancelled \r\n6:- other ',
  `DeliveryDate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `payment_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gtin_types`
--

CREATE TABLE `gtin_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gtin_types`
--

INSERT INTO `gtin_types` (`id`, `name`, `description`) VALUES
(1, 'UPC', 'Universal Product Code (UPC), also called GTIN-12 and UPC-A'),
(2, 'EAN', 'European Article Number (EAN), also called GTIN-13'),
(3, 'JAN', 'Japanese Article Number (JAN), also called GTIN-13'),
(4, 'ISBN', 'International Standard Book Number (ISBN)'),
(5, 'ITF', 'ITF barcodes, also known as Interleaved 2 of 5 barcodes, encode 14 numeric digits and are generally used for the packaging level of products. Since they can deal with high printing tolerances, ITF is a good choice when barcodes need to be printed on corrugated cardboard.');

-- --------------------------------------------------------

--
-- Table structure for table `inventories`
--

CREATE TABLE `inventories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shop_id` int(10) UNSIGNED DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `warehouse_id` int(10) UNSIGNED DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supplier_id` int(10) UNSIGNED DEFAULT NULL,
  `sku` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upc` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mpn` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `condition` enum('New','Used','Refurbished') COLLATE utf8mb4_unicode_ci NOT NULL,
  `condition_note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `key_features` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stock_quantity` int(11) NOT NULL DEFAULT 0,
  `damaged_quantity` int(11) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `purchase_price` decimal(20,6) DEFAULT NULL,
  `sale_price` decimal(20,6) NOT NULL,
  `offer_price` decimal(20,6) DEFAULT NULL,
  `offer_start` timestamp NULL DEFAULT NULL,
  `offer_end` timestamp NULL DEFAULT NULL,
  `shipping_weight` decimal(20,2) DEFAULT NULL,
  `free_shipping` tinyint(1) DEFAULT NULL,
  `available_from` timestamp NOT NULL DEFAULT current_timestamp(),
  `min_order_quantity` int(11) NOT NULL DEFAULT 1,
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linked_items` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stuff_pick` tinyint(1) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `feature_p_status` int(2) DEFAULT NULL COMMENT '1=feature'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inventories`
--

INSERT INTO `inventories` (`id`, `shop_id`, `title`, `warehouse_id`, `product_id`, `brand`, `supplier_id`, `sku`, `upc`, `mpn`, `condition`, `condition_note`, `description`, `key_features`, `stock_quantity`, `damaged_quantity`, `user_id`, `purchase_price`, `sale_price`, `offer_price`, `offer_start`, `offer_end`, `shipping_weight`, `free_shipping`, `available_from`, `min_order_quantity`, `slug`, `linked_items`, `meta_title`, `meta_description`, `stuff_pick`, `active`, `deleted_at`, `created_at`, `updated_at`, `feature_p_status`) VALUES
(1, NULL, 'T2', 18, 15, 'Abc', NULL, '113', '', '', 'New', 'tmdjd', 'hi nvnnvn', 'trerszxdc', 101, NULL, NULL, '1100.000000', '180.000000', '190.000000', NULL, NULL, NULL, 10, '2021-02-26 10:30:50', 1, 'Seconds', 'fgfgdsdx', 'thfd', 'fgdgs', NULL, 1, '2021-02-26 01:22:28', '2021-02-26 05:00:50', '2021-02-26 01:22:28', NULL),
(3, NULL, 'T', 1, 36, NULL, NULL, '11', '', '', 'New', 't', '<p>vbvgfvg</p>', 'trer', 10, NULL, NULL, '100.000000', '80.000000', '90.000000', NULL, NULL, NULL, 10, '2021-01-22 10:30:50', 1, '0', 'fgfgd', 'thf', 'fgdg', NULL, 1, NULL, '2021-01-22 05:00:50', '2021-01-22 05:00:50', NULL),
(5, NULL, 'T21', 181, 24, 'Abcsw', NULL, '1111', '', '', 'New', 'tmdjdc', 'hi nvnnsvn', 'trerszxdcd', 0, NULL, NULL, '400.000000', '200.000000', '100.000000', NULL, NULL, NULL, 40, '2021-02-26 10:30:50', 2, 'inventory', 'inventoryw', 'inventory', 'inventory id ndkjdjfu', NULL, 0, NULL, '2021-02-25 20:00:50', '2021-02-26 05:00:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `inventory_variations`
--

CREATE TABLE `inventory_variations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `inventoryid` int(11) NOT NULL,
  `variationvalues` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `variationsid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inventory_variations`
--

INSERT INTO `inventory_variations` (`id`, `inventoryid`, `variationvalues`, `created_at`, `updated_at`, `variationsid`) VALUES
(1, 3, 1, '2021-01-22 05:00:50', '2021-01-22 05:00:50', 3),
(2, 3, 4, '2021-01-22 05:00:50', '2021-01-22 05:00:50', 3);

-- --------------------------------------------------------

--
-- Table structure for table `manish`
--

CREATE TABLE `manish` (
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `manufacturers`
--

CREATE TABLE `manufacturers` (
  `id` int(10) UNSIGNED NOT NULL,
  `shop_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `country_id` int(10) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `brandlogo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `coverimage` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `manufacturers`
--

INSERT INTO `manufacturers` (`id`, `shop_id`, `name`, `slug`, `email`, `url`, `phone`, `description`, `country_id`, `active`, `brandlogo`, `coverimage`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 12321, 'Clothing Factory', 'Clothes', 'Clothes@gmail.com', 'www.Clothes.com', '9876543210', 'Clothes Shop', 52, 1, '', '', '2021-02-27 06:27:06', '2021-02-26 06:27:06', '2021-02-26 06:27:06'),
(4, NULL, 'Hello', NULL, 'hello@gmail.com', 'www.hello.com', '876525367', '<p>bcjcjbdnmv</p>', 356, 1, NULL, NULL, NULL, NULL, NULL);

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
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 2),
(4, '2020_07_08_063955_create_products_table', 3),
(5, '2020_07_10_113205_create_products_table', 4),
(6, '2020_07_16_080652_create_products_attribute_table', 5),
(7, '2020_07_20_051537_create_suppliers_table', 6),
(8, '2020_07_21_070001_create_warehouses_table', 7),
(9, '2020_07_21_101220_create_inventories_table', 8),
(10, '2020_09_23_105541_create_manish_table', 9),
(11, '2020_09_25_101922_create_attributes_table', 10),
(12, '2020_09_25_104201_create_variations_attributes_table', 10),
(13, '2020_09_26_064751_create_attributesunits_table', 11),
(14, '2020_10_01_062939_create_variations_table', 12),
(15, '2020_10_01_064309_create_variationscategory_table', 12),
(16, '2020_10_01_112038_create_variationvalues_table', 13),
(18, '2020_10_03_092700_create_shops_table', 14),
(19, '2020_10_05_090935_add_categoryid_to_products_table', 15),
(20, '2020_10_07_102749_create_inventory_variations_table', 16),
(21, '2020_10_14_051538_add_video_link_to_products_table', 17),
(22, '2020_10_14_052220_create_product_image_table', 17),
(23, '2020_10_21_070919_create_add_to_cart_table', 18),
(24, '2020_10_23_111202_create_customers_table', 19),
(25, '2020_10_23_111415_create_customers_address_table', 19),
(26, '2020_10_26_072553_create_customer_order_table', 20),
(27, '2020_10_26_074937_create_product_order_table', 20),
(28, '2020_10_29_073440_create_addtowishlist_table', 21),
(29, '2020_11_02_051015_create_member_table', 22),
(30, '2020_11_02_053530_create_product_package_table', 22);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `orderid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `DeliveryDate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `vendor_detail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `orderid`, `product_id`, `customer_id`, `status`, `quantity`, `price`, `DeliveryDate`, `created_at`, `updated_at`, `vendor_detail`) VALUES
(1, '2121', '1234565432', '7654', 'pending', 1, 400, '28-02-2021', '2021-02-24 06:04:28', '2021-02-24 06:04:28', 'RK Shop'),
(2, '3221', '98765456', '7653', 'delivered', 1, 4000, '27-02-2021', '2021-02-24 06:06:28', '2021-02-24 06:06:28', 'Hardware Shop');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `pagename` varchar(50) NOT NULL,
  `content` text DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `pagename`, `content`, `status`) VALUES
(2, 'About Us', 'This is about us page<p></p><p></p><p></p>', 1),
(3, 'Contact Us', 'Contact Us PAGE', 1),
(4, 'Terms & Conditions', '<div class=\"row-panel \" style=\"margin: 0px 0px 20px; padding: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 14px;\"><div class=\"row-inner \" style=\"margin: 0px;\"><h2 style=\"font-family: Georgia, &quot;Times New Roman&quot;, Times, serif; font-weight: 400; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\">1) Introduction</h2><div><ul class=\"aticle-txt \" style=\"margin-top: 10px;\"><li style=\"list-style: none; width: 640px; margin: 0px; padding: 0px 0px 8px; border-top: 0px solid rgb(196, 198, 200); display: block !important; float: none !important;\"><p class=\"mT15\" style=\"color: rgb(86, 86, 86); line-height: 20px; padding: 2px 0px; margin-bottom: 0px; font-family: &quot;Open Sans&quot;, sans-serif;\">This following sets out the terms and conditions on which you may use the content on<br style=\"margin: 0px; padding: 0px; height: 0px !important;\"><a href=\"https://www.business-standard.com/\" target=\"_blank\" style=\"color: rgb(86, 86, 86); outline: 0px;\">business-standard.com</a>&nbsp;website, business-standard.com\'s mobile browser site, Business Standard instore Applications and other digital publishing services (<a href=\"https://www.smartinvestor.in/\" target=\"_blank\" style=\"color: rgb(86, 86, 86); outline: 0px;\">www.smartinvestor.in</a>,&nbsp;<a href=\"https://www.bshindi.com/\" target=\"_blank\" style=\"color: rgb(86, 86, 86); outline: 0px;\">www.bshindi.com</a>&nbsp;and&nbsp;<a href=\"https://www.bsmotoring.com/\" target=\"_blank\" style=\"color: rgb(86, 86, 86); outline: 0px;\">www.bsmotoring,com</a>) owned by Business Standard Private Limited, all the services herein will be referred to as Business Standard Content Services.</p></li></ul></div></div></div><div class=\"row-panel \" style=\"margin: 0px 0px 20px; padding: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 14px;\"><div class=\"row-inner \" style=\"margin: 0px;\"><h2 style=\"font-family: Georgia, &quot;Times New Roman&quot;, Times, serif; font-weight: 400; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\">2) Registration Access and Use</h2><div><ul class=\"aticle-txt \" style=\"margin-top: 10px;\"><li style=\"list-style: none; width: 640px; margin: 0px; padding: 0px 0px 8px; border-top: 0px solid rgb(196, 198, 200); display: block !important; float: none !important;\"><p class=\"mT15\" style=\"color: rgb(86, 86, 86); line-height: 20px; padding: 2px 0px; margin-bottom: 0px; font-family: &quot;Open Sans&quot;, sans-serif;\">We welcome users to register on our digital platforms. We offer the below mentioned registration services which may be subject to change in the future. All changes will be appended in the terms and conditions page and communicated to existing users by email.</p><p class=\"mT15\" style=\"color: rgb(86, 86, 86); line-height: 20px; padding: 2px 0px; margin-bottom: 0px; font-family: &quot;Open Sans&quot;, sans-serif;\">Registration services are offered for individual subscribers only. If multiple individuals propose to access the same account or for corporate accounts kindly contact or write in to us. Subscription rates will vary for multiple same time access.</p><p class=\"mT15\" style=\"color: rgb(86, 86, 86); line-height: 20px; padding: 2px 0px; margin-bottom: 0px; font-family: &quot;Open Sans&quot;, sans-serif;\">The nature and volume of Business Standard content services you consume on the digital platforms will vary according to the type of registration you choose, on the geography you reside or the offer you subscribe to.</p><p class=\"mT15\" style=\"color: rgb(86, 86, 86); line-height: 20px; padding: 2px 0px; margin-bottom: 0px; font-family: &quot;Open Sans&quot;, sans-serif;\">a) Free Registration</p><p class=\"mT15\" style=\"color: rgb(86, 86, 86); line-height: 20px; padding: 2px 0px; margin-bottom: 0px; font-family: &quot;Open Sans&quot;, sans-serif;\">b) Premium Registration</p><p class=\"mT15\" style=\"color: rgb(86, 86, 86); line-height: 20px; padding: 2px 0px; margin-bottom: 0px; font-family: &quot;Open Sans&quot;, sans-serif;\">c) Special Offers</p><p class=\"mT15\" style=\"color: rgb(86, 86, 86); line-height: 20px; padding: 2px 0px; margin-bottom: 0px; font-family: &quot;Open Sans&quot;, sans-serif;\">d) Combo registrations with partners</p><p class=\"mT15\" style=\"color: rgb(86, 86, 86); line-height: 20px; padding: 2px 0px; margin-bottom: 0px; font-family: &quot;Open Sans&quot;, sans-serif;\">The details of the services and access offered for each account have been listed on<br style=\"margin: 0px; padding: 0px; height: 0px !important;\"><a href=\"https://www.business-standard.com/subscription-cart/product\" target=\"_blank\" style=\"color: rgb(86, 86, 86); outline: 0px;\">www.business-standard.com/subscription-cart/product</a></p><p class=\"mT15\" style=\"color: rgb(86, 86, 86); line-height: 20px; padding: 2px 0px; margin-bottom: 0px; font-family: &quot;Open Sans&quot;, sans-serif;\">We may in exceptional circumstances cease to provide subscription services. We will give you at least 7 days notice of this, if possible. If we do so, then we will have no further obligation to you.</p></li></ul></div></div></div><div class=\"row-panel \" style=\"margin: 0px 0px 20px; padding: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 14px;\"><div class=\"row-inner\" style=\"margin: 0px;\"><h2 style=\"font-family: Georgia, &quot;Times New Roman&quot;, Times, serif; font-weight: 400; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\">3) Privacy Policy and Registration</h2><div><ul class=\"aticle-txt\" style=\"margin-top: 10px;\"><li style=\"list-style: none; width: 640px; margin: 0px; padding: 0px 0px 8px; border-top: 0px solid rgb(196, 198, 200); display: block !important; float: none !important;\"><p class=\"mT15\" style=\"color: rgb(86, 86, 86); line-height: 20px; padding: 2px 0px; margin-bottom: 0px; font-family: &quot;Open Sans&quot;, sans-serif;\">All information received by us from your registration on business-standard.com or other digital products of Business Standard will be used by Business Standard in accordance with our Privacy Policy. Kindly read the below mentioned details.</p><p class=\"mT15\" style=\"color: rgb(86, 86, 86); line-height: 20px; padding: 2px 0px; margin-bottom: 0px; font-family: &quot;Open Sans&quot;, sans-serif;\">On registration, we expect you to provide Business Standard with an accurate and complete information of the compulsory fields. We also expect you to keep the information secure, specifically access passwords and payment information. Kindly update the information periodically to keep your account relevant. Business Standard will rely on any information you provide to us.</p><p class=\"mT15\" style=\"color: rgb(86, 86, 86); line-height: 20px; padding: 2px 0px; margin-bottom: 0px; font-family: &quot;Open Sans&quot;, sans-serif;\">Each registration is for a single user only. On registration, you will choose a user name and password (\"ID\"). You are not allowed to share your ID or give access to your account to anyone else. Business Standard Premium subscription does not allow multiple users on a network or within an organization to use the same ID.</p><p class=\"mT15\" style=\"color: rgb(86, 86, 86); line-height: 20px; padding: 2px 0px; margin-bottom: 0px; font-family: &quot;Open Sans&quot;, sans-serif;\">On knowledge, Business Standard may cancel or suspend your access to Business Standard premium services if it comes across you sharing your personal access without further obligation to you.</p></li></ul></div></div></div><p></p><p></p>', 1),
(5, 'Return & Exchanges', NULL, 1),
(6, 'Shipping & Delivery', NULL, 1),
(7, 'Shopping Policy', NULL, 1),
(8, 'Privacy Policy', NULL, 1),
(9, 'Dispute Resolution', NULL, 1),
(10, 'FAQ', NULL, 1),
(11, 'today\'s deal', NULL, 1),
(13, 'footer content', 'check', 1);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shop_id` int(10) UNSIGNED DEFAULT NULL,
  `manufacturer_id` int(10) UNSIGNED DEFAULT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mpn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gtin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gtin_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `min_price` decimal(20,6) DEFAULT 0.000000,
  `max_price` decimal(20,6) DEFAULT NULL,
  `origin_country` int(10) UNSIGNED DEFAULT NULL,
  `has_variant` tinyint(1) DEFAULT NULL,
  `requires_shipping` tinyint(1) DEFAULT 1,
  `downloadable` tinyint(1) DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sale_count` bigint(20) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `categoryid` int(11) NOT NULL,
  `videolink` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `shop_id`, `manufacturer_id`, `brand`, `name`, `model_number`, `mpn`, `sku`, `upc`, `gtin`, `gtin_type`, `description`, `min_price`, `max_price`, `origin_country`, `has_variant`, `requires_shipping`, `downloadable`, `slug`, `sale_count`, `image`, `active`, `deleted_at`, `created_at`, `updated_at`, `categoryid`, `videolink`) VALUES
(8, NULL, 1, '3', 'T-Shirt3', '34567', '2344', '545', '54', '343446', '3', '<p>drgdgr</p>', '700.000000', '800.000000', 356, NULL, 1, NULL, '343446', NULL, '45051.jpg', 1, NULL, '2020-10-08 22:37:49', '2020-10-08 22:37:49', 2, ''),
(9, NULL, 1, '5', 'T-Shirt4', '34567', '2344', '45676543', '654', '343447', '2', '<p>fgfdgdf</p>', '800.000000', '898.000000', 356, 1, 1, NULL, '343447', NULL, '32737.jpg', 1, NULL, '2020-10-08 22:38:46', '2020-10-08 22:38:46', 2, ''),
(11, 654, 1, '6', 'T-Shirt6', '34567', '2344', '54356', '865899', '343449', '3', '<p>efefe</p>', '400.000000', '700.000000', 356, NULL, 1, NULL, '343449', NULL, '59916.jpg', 1, NULL, '2020-10-08 22:41:02', '2020-10-08 22:41:02', 3, ''),
(12, NULL, 1, '6', 'T-Shirt7', '34567', '2344', '345', '876', '343430', '2', '<p>fgrr</p>', '600.000000', '900.000000', 356, NULL, 1, NULL, '343430', NULL, '24358.jpg', 1, NULL, '2020-10-08 22:42:45', '2020-10-08 22:42:45', 3, ''),
(13, NULL, 1, '4', 'T-Shirt8', '34567', '2344', '654', '678', '343431', '2', '<p>cdscd</p>', '900.000000', '1000.000000', 356, NULL, 1, NULL, '343431', NULL, '78412.jpg', 1, NULL, '2020-10-08 22:44:15', '2020-10-08 22:44:15', 4, ''),
(14, NULL, 1, '4', 'T-Shirt9', '34567', '2344', '', '', '343433', '3', '<p>ddadsw</p>', '300.000000', '800.000000', 356, NULL, 1, NULL, '343433', NULL, '15928.jpg', 1, NULL, '2020-10-08 22:46:36', '2020-10-08 22:46:36', 4, ''),
(15, NULL, 1, '5', 'T-Shirt10', '34567', '2344', '', '', '343434', '4', '<p>dsddd</p>', '400.000000', '597.000000', 356, NULL, 1, NULL, '343434', NULL, '28931.jpg', 1, NULL, '2020-10-08 22:47:38', '2020-10-08 22:47:38', 5, ''),
(16, NULL, 1, '5', 'T-Shirt11', '34567', '2344', '', '', '3434432', '2', '<p>deww</p>', '300.000000', '598.000000', 356, NULL, 1, NULL, '3434432', NULL, '13406.jpg', 1, NULL, '2020-10-08 22:49:08', '2020-10-08 22:49:08', 6, ''),
(18, NULL, 1, '3', 'T-Shirt14', '34567', '2344', '', '', '34344398', '2', '<p>ghuguy</p>', '600.000000', '800.000000', 356, NULL, 1, NULL, '34344398', NULL, '25256.jpg', 1, NULL, '2020-10-08 23:00:48', '2020-10-08 23:00:48', 7, ''),
(19, NULL, 1, '4', 'T-Shirt15', '34567', '2344', '', '', '34344377', '3', '<p>vbvj</p>', '800.000000', '900.000000', 356, NULL, 1, NULL, '34344377', NULL, '37846.jpg', 1, NULL, '2020-10-08 23:01:53', '2020-10-08 23:01:53', 7, ''),
(20, NULL, 1, '1', 'T-Shirt16', '34567', '2344', '', '', '34344343', '2', '<p>ffsd</p>', '500.000000', '800.000000', 356, NULL, 1, NULL, '34344343', NULL, '5851.jpg', 1, NULL, '2020-10-08 23:14:07', '2020-10-08 23:14:07', 5, ''),
(21, NULL, 1, '1', 'T-Shirt17', '34567', NULL, '', '', '34344354', '1', '<p>dscscd</p>', '455.000000', '789.000000', 356, NULL, 1, NULL, '34344354', NULL, '34164.jpg', 1, NULL, '2020-10-09 00:21:57', '2020-10-09 00:21:57', 9, ''),
(22, NULL, 3, '3', 'T-Shirt18', '34567', '2344', '', '', '34344390', '2', '<p>sds</p>', '567.000000', '987.000000', 356, NULL, 1, NULL, '34344390', NULL, '95659.jpg', 1, NULL, '2020-10-09 00:22:59', '2020-10-09 00:22:59', 10, ''),
(23, NULL, 3, '3', 'T-Shirt19', '34567', '2344', '', '', '34344375', '2', '<p>sss</p>', '980.000000', '3454.000000', 356, NULL, 1, NULL, '34344375', NULL, '67545.jpg', 1, NULL, '2020-10-09 00:24:15', '2020-10-09 00:24:15', 12, ''),
(24, NULL, 3, '4', 'T-Shirt20', '34567', '2344', '', '', '34344388', 'GTIN Type', '<p>ssxs</p>', '788.000000', '979.000000', 356, NULL, 1, NULL, '34344388', NULL, '96339.jpg', 1, NULL, '2020-10-09 00:25:04', '2020-10-09 00:25:04', 13, ''),
(25, NULL, 1, '5', 'T-Shirt21', '34567', '2344', '', '', '343443543', '3', '<p>sds</p>', '987.000000', '9087.000000', 356, NULL, 1, NULL, '343443543', NULL, '41857.jpg', 1, NULL, '2020-10-09 00:25:55', '2020-10-09 00:25:55', 14, ''),
(26, NULL, 1, '6', 'T-Shirt22', '34567', '2344', '', '', '343443326', '3', '<p>nhjjk</p>', '8976.000000', '98798.000000', 356, NULL, 1, NULL, '343443326', NULL, '90052.jpg', 1, NULL, '2020-10-09 00:28:33', '2020-10-09 00:28:33', 13, ''),
(27, NULL, 1, '2', 'T-Shirt23', '34567', '2344', '', '', '12765', '2', '<p>dsde</p>', '900.000000', '999.000000', 356, NULL, 1, NULL, '12765', NULL, '54049.jpg', 1, NULL, '2020-10-09 00:50:34', '2020-10-09 00:50:34', 14, ''),
(28, NULL, 1, '2', 'T-Shirt24', '34567', '2344', '', '', '8765', '4', '<p>jhjhjhv</p>', '890.000000', '900.000000', 356, NULL, 1, NULL, '8765', NULL, '65942.jpg', 1, NULL, '2020-10-09 00:51:32', '2020-10-09 00:51:32', 13, ''),
(29, NULL, 1, '5', 'T-Shirt25', '34567', '2344', '', '', '9087', '2', '<p>hjh</p>', '890.000000', '7689.000000', 356, NULL, 1, NULL, '9087', NULL, '73754.jpg', 1, NULL, '2020-10-09 00:55:09', '2020-10-09 00:55:09', 4, ''),
(30, NULL, 1, '6', 'T-Shirt26', '34567', '2344', '', '', '8976', '3', '<p>sdss</p>', '890.000000', '54666.000000', 356, NULL, 1, NULL, '8976', NULL, '92935.jpg', 1, NULL, '2020-10-09 00:55:58', '2020-10-09 00:55:58', 4, 'https://www.youtube.com/embed/BUWzX78Ye_8'),
(31, NULL, 1, '3', 'T-Shirt27', '34567', '234445', '', '', '232334', '3', '<p>sdwdw</p>', '5678.000000', '8777.000000', 356, NULL, 1, NULL, '232334', NULL, '17180.jpg', 1, NULL, '2020-10-09 00:57:19', '2020-10-09 00:57:19', 6, ''),
(32, NULL, 1, '3', 'T-Shirt28', '34567', '2344', '', '', '56434', '4', '<p>fedf</p>', '90988.000000', '986798.000000', 356, NULL, 1, NULL, '56434', NULL, '66870.jpg', 1, NULL, '2020-10-09 00:58:37', '2020-10-09 00:58:37', 9, ''),
(33, NULL, 1, '3', 'T-Shirt29', '34567', '2344', '', '', '9812', '2', '<p>ss</p>', '567.000000', '8767.000000', 356, NULL, 1, NULL, '9812', NULL, '77756.jpg', 1, NULL, '2020-10-09 01:00:28', '2020-10-09 01:00:28', 12, ''),
(34, NULL, 1, '1', 'T-Shirt30', '34567', '2344', '', '', '897654', '1', '<p>ddsds</p>', '700.000000', '900.000000', 356, NULL, 1, NULL, '897654', NULL, '55890.jpg', 1, NULL, '2020-10-10 00:18:53', '2020-10-10 00:18:53', 8, ''),
(36, NULL, 1, '1', 'T-Shirt65', '100001', 'A001', '', '', 'Z09876SD', '2', '<p>T-shirt New</p>', '800.000000', '900.000000', 276, 1, 1, NULL, 'Z09876SD', NULL, '83331.jpg', 1, NULL, '2021-01-15 02:04:54', '2021-01-15 02:04:54', 2, 'https://www.youtube.com/watch?v=DZC7zzgtPwM&list=RDCLAK5uy_ksEjgm3H_7zOJ_RHzRjN1wY-_FFcs7aAU&start_radio=1'),
(44, 1, 1, '3', 'Watch', '234543', '23456543', '', '', '3ee4df345', '3', '<p>azsxdcfvbvcs</p>', '3000.000000', '8000.000000', 356, 1, 1, NULL, '3ee4df345', NULL, '21995.png', 1, NULL, '2021-02-25 06:40:20', '2021-02-25 06:40:20', 9, 'sdfgnd'),
(45, 1, 1, '2', 'Clothes', '65432334564', '7654323445', '', '', 'drgf567g567', '3', '<p>bmxgjdgj</p>', '3899.000000', '9864.000000', 356, 1, 1, NULL, 'drgf567g567', NULL, '31679.jpg', 1, NULL, '2021-02-25 06:44:33', '2021-02-25 06:44:33', 13, 'toy');

-- --------------------------------------------------------

--
-- Table structure for table `products_attribute`
--

CREATE TABLE `products_attribute` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shop_id` int(10) UNSIGNED DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `warehouse_id` int(10) UNSIGNED DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supplier_id` int(10) UNSIGNED DEFAULT NULL,
  `sku` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `condition` enum('New','Used','Refurbished') COLLATE utf8mb4_unicode_ci NOT NULL,
  `condition_note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `key_features` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stock_quantity` int(11) NOT NULL DEFAULT 0,
  `damaged_quantity` int(11) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `purchase_price` decimal(20,6) DEFAULT NULL,
  `sale_price` decimal(20,6) NOT NULL,
  `offer_price` decimal(20,6) DEFAULT NULL,
  `offer_start` timestamp NULL DEFAULT NULL,
  `offer_end` timestamp NULL DEFAULT NULL,
  `shipping_weight` decimal(20,2) DEFAULT NULL,
  `free_shipping` tinyint(1) DEFAULT NULL,
  `available_from` timestamp NOT NULL DEFAULT current_timestamp(),
  `min_order_quantity` int(11) NOT NULL DEFAULT 1,
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linked_items` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stuff_pick` tinyint(1) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE `product_image` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `productid` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_order`
--

CREATE TABLE `product_order` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tracking_no` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_line_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_line_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` int(10) NOT NULL,
  `city` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pincode` int(10) NOT NULL,
  `product_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_mode` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orderid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `DeliveryDate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_order`
--

INSERT INTO `product_order` (`id`, `tracking_no`, `email`, `fullname`, `address_line_1`, `address_line_2`, `phone_no`, `city`, `state`, `pincode`, `product_name`, `payment_mode`, `payment_status`, `orderid`, `product_id`, `customer_id`, `name`, `image`, `status`, `quantity`, `price`, `DeliveryDate`, `created_at`, `updated_at`) VALUES
(1, '1234332', 'test@gmail.com', 'Shyam Sundar', 'Vaishali, Ghaziabad, U.P', 'Vasudhara, Ghaziabad, U.P', 1234566454, 'Ghaziabad', 'Uttar Pradesh', 201301, 'Test1', 'Cash On Delivery', 'Success', '123', '13', '233', 'T-Shirt8', '13', '6', 5, 1000, NULL, '2020-10-27 00:42:50', '2020-10-27 00:42:50'),
(2, '4321233', 'test1@gmail.com', 'Sonali Test', 'Noida, UP', 'Kanpur UP', 265432455, 'Kanpur', 'UP', 209210, 'T-Shirt29', 'UPI', 'Pending', '1', '33', '234', 'T-Shirt29', '33', '1', 3, 8767, NULL, '2020-10-27 00:42:50', '2020-10-27 00:42:50'),
(3, '234543276543234', 'jaya@gmail.com', 'JAYA Gupta', 'Bihar', 'Delhi', 2345679, 'Delhi', 'Delhi', 100006, 'T-Shirt23', 'Online', 'Pending', '1', '27', '654', 'T-Shirt23', '27', '1', 3, 999, NULL, '2020-10-27 00:42:50', '2020-10-27 00:42:50'),
(4, '5986755677', 'test2@gmail.com', 'Test2', 'Gujarat', 'Rewa, MP', 335678765, 'MP', 'MP', 6787679, 'T-Shirt11', 'UPI', 'Success', '1', '16', '2345', 'T-Shirt11', '16', '1', 1, 598, NULL, '2020-10-27 00:42:50', '2020-10-27 00:42:50'),
(5, '123456543', 'test3@gmail.com', 'Testing', 'Banaras', 'Haridwar', 123456767, 'Haridwar', 'Uttarakhand', 453212, 'T-Shirt8', 'Cash On Delivery', 'Pending', '2', '13', '6543', 'T-Shirt8', '13', '1', 2, 1000, NULL, '2020-10-27 01:08:30', '2020-10-27 01:08:30'),
(6, '234543276543237', 'test5@gmail.com', 'Test5', 'Noida', 'Noida', 1324356, 'Noida', 'Uttar Pradesh', 201301, 'T-Shirt17', 'Cash On Delivery', 'Not Pay', '6', '21', 'QWER543ERT65', 'T-Shirt17', '21', '2', 3, 789, '', '2020-11-10 01:49:39', '2020-11-10 01:49:39'),
(7, '1234567', 'test6@gmail.com', 'Test6', 'Gurgaon', 'Haryana', 76543234, 'Gurgaon', 'Haryana', 209786, 'T-Shirt4', 'POS', 'Success', '6', '9', 'ASDF765LKJH', 'T-Shirt4', '9', '3', 1, 898, NULL, '2020-11-10 01:49:39', '2020-11-10 01:49:39'),
(8, '876543', 'test4@gmail.com', 'Test4', 'Jaipur', 'Lucknow', 154364, 'Jaipur', 'Rajasthan', 201927, 'T-Shirt11', 'Debit Card', 'Success', '7', '16', 'uitrv6789', 'T-Shirt11', '16', '5', 1, 598, NULL, '2021-01-22 03:53:31', '2021-01-22 03:53:31'),
(9, '123e4554', 'test@gmail.com', 'Test', 'Mumbai', '', 24353647, 'Mumbai', 'Maharashtra', 456788, 'Watch', 'Credit Card', 'Success', '121', '22334', '456', 'Watch', NULL, '4', 1, 3000, '28-02-2021', '2021-02-24 06:33:01', '2021-02-24 06:33:01');

-- --------------------------------------------------------

--
-- Table structure for table `product_package`
--

CREATE TABLE `product_package` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `package_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `package_price` double DEFAULT NULL,
  `package_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BV` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CI` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `part_amount` double DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_package`
--

INSERT INTO `product_package` (`id`, `package_name`, `package_price`, `package_color`, `BV`, `CI`, `part_amount`, `status`, `created_at`, `updated_at`) VALUES
(1, '0Package', 0, 'Red', '0', '0', 0, 'Active', '2020-11-02 07:37:25', '2020-11-02 07:37:25'),
(2, '111 Package', 111, 'Orange', '0', '250', 0, 'Active', '2020-11-11 07:20:09', '2020-11-11 07:20:09'),
(3, '999 Package', 999, 'Yellow', '300', '850', 1500, 'Active', '2020-11-11 07:20:09', '2020-11-11 07:20:09'),
(4, '1999 Package', 1999, 'Green', '600', '1500', 3000, 'Active', '2020-11-11 07:24:09', '2020-11-11 07:24:09'),
(5, '3999 Package', 3999, 'Blue', '1200', '5000', 6000, 'active', '2020-11-11 07:24:09', '2020-11-11 07:24:09'),
(6, '7999 Package', 7999, 'Indigo', '2400', '30000', 12000, 'Active', '2020-11-11 07:27:27', '2020-11-11 07:27:27'),
(7, '15999 package', 15999, 'Violet', '4800', '90000', 24000, 'Active', '2020-11-11 07:27:27', '2020-11-11 07:27:27');

-- --------------------------------------------------------

--
-- Table structure for table `reward`
--

CREATE TABLE `reward` (
  `id` int(11) NOT NULL,
  `Reward_Name` varchar(255) NOT NULL,
  `Reward_Amount` double NOT NULL,
  `Matching_points` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reward`
--

INSERT INTO `reward` (`id`, `Reward_Name`, `Reward_Amount`, `Matching_points`, `created_at`, `updated_at`) VALUES
(1, 'Bag+Perfume', 5000, 5, '2021-01-09 10:16:17', '2021-01-09 10:16:17'),
(2, 'Bike-downpayment', 15000, 15, '2021-01-09 10:16:17', '2021-01-09 10:16:17'),
(3, 'smart-led', 30000, 30, '2021-01-09 10:19:14', '2021-01-09 10:19:14'),
(4, 'Alto-Car-Downpayment', 100000, 90, '2021-01-09 10:20:01', '2021-01-09 10:20:01'),
(5, '1.5 Lakh', 150000, 300, '2021-01-09 10:21:23', '2021-01-09 10:21:23'),
(6, '2 lakh', 200000, 1300, '2021-01-09 10:21:23', '2021-01-09 10:21:23'),
(7, '5lakh', 500000, 2500, '2021-01-09 10:23:17', '2021-01-09 10:23:17'),
(8, '30 lakh', 3000000, 25000, '2021-01-09 10:23:17', '2021-01-09 10:23:17'),
(9, '30 Lakh', 3000000, 50000, '2021-01-09 10:25:12', '2021-01-09 10:25:12'),
(10, 'Restaurant', 10000000, 100000, '2021-01-09 10:25:12', '2021-01-09 10:25:12'),
(11, 'Luxury Hotewl', 50000000, 500000, '2021-01-09 10:27:11', '2021-01-09 10:27:11'),
(12, 'Private Jet', 300000000, 2500000, '2021-01-09 10:27:11', '2021-01-09 10:27:11');

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `owner_id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shopname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `legal_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `external_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timezone_id` int(11) DEFAULT NULL,
  `current_billing_plan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stripe_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_holder_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_brand` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_last_four` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trial_ends_at` timestamp NULL DEFAULT NULL,
  `hide_trial_notice` tinyint(1) DEFAULT NULL,
  `active` tinyint(1) DEFAULT 0,
  `status` int(5) NOT NULL,
  `payment_verified` tinyint(1) DEFAULT NULL,
  `id_verified` tinyint(1) DEFAULT NULL,
  `phone_verified` tinyint(1) DEFAULT NULL,
  `address_verified` tinyint(1) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`id`, `owner_id`, `name`, `shopname`, `legal_name`, `slug`, `email`, `description`, `password`, `address`, `external_url`, `image`, `timezone_id`, `current_billing_plan`, `stripe_id`, `card_holder_name`, `card_brand`, `card_last_four`, `trial_ends_at`, `hide_trial_notice`, `active`, `status`, `payment_verified`, `id_verified`, `phone_verified`, `address_verified`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 9, 'Bhola', 'Baba Biryani', '8765423457', 'baba-biryani', 'admin@gmail.com', NULL, '0110', 'New Delhi, India', 'wer@wrfghn .com', NULL, NULL, '6787578', NULL, NULL, NULL, NULL, NULL, NULL, 1, 2, NULL, NULL, NULL, NULL, NULL, '2021-02-18 08:05:34', '2021-02-18 08:05:34'),
(3, 91, 'Bakery', 'Bakery & Shop', '9876543567', 'Bakery', 'Bakery@gmail.com', 'All Bakery', '12211', 'Sector 2, Noida, India', 'wer@wrfghn .com', NULL, NULL, '900000', NULL, NULL, NULL, NULL, NULL, NULL, 1, 3, NULL, NULL, NULL, NULL, NULL, '2021-02-26 08:05:34', '2021-02-26 08:05:34');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `text_style` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 100,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `text_style`, `content`, `link`, `order`, `status`, `image`, `created_at`, `updated_at`) VALUES
(1, 'kids', 'LED TV', 'gfd', '#', 5, 1, '48561.jpg', '2020-07-01 23:42:23', '2020-07-01 23:42:23'),
(2, 'Sony Braviya', 'LED TV', 'Save upto 70%', '#', 1, 1, '76612.jpg', '2020-07-01 23:44:16', '2020-07-01 23:44:16');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(10) UNSIGNED NOT NULL,
  `country_id` int(10) UNSIGNED NOT NULL,
  `iso_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `iso_numeric` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `calling_code` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` tinyint(1) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `country_id`, `iso_code`, `iso_numeric`, `name`, `calling_code`, `active`, `created_at`, `updated_at`) VALUES
(1, 40, '1', NULL, 'Burgenland', NULL, 1, '2020-05-02 11:13:35', '2020-05-02 11:13:35'),
(2, 40, '2', NULL, 'Kärnten', NULL, 1, '2020-05-02 11:13:35', '2020-05-02 11:13:35'),
(3, 40, '3', NULL, 'Niederösterreich', NULL, 1, '2020-05-02 11:13:35', '2020-05-02 11:13:35'),
(4, 40, '4', NULL, 'Oberösterreich', NULL, 1, '2020-05-02 11:13:35', '2020-05-02 11:13:35'),
(5, 40, '5', NULL, 'Salzburg', NULL, 1, '2020-05-02 11:13:35', '2020-05-02 11:13:35'),
(6, 40, '6', NULL, 'Steiermark', NULL, 1, '2020-05-02 11:13:35', '2020-05-02 11:13:35'),
(7, 40, '7', NULL, 'Tirol', NULL, 1, '2020-05-02 11:13:35', '2020-05-02 11:13:35'),
(8, 40, '8', NULL, 'Vorarlberg', NULL, 1, '2020-05-02 11:13:35', '2020-05-02 11:13:35'),
(9, 40, '9', NULL, 'Wien', NULL, 1, '2020-05-02 11:13:35', '2020-05-02 11:13:35'),
(10, 36, 'CX', NULL, 'Christmas Island', NULL, 1, '2020-05-02 11:13:35', '2020-05-02 11:13:35'),
(11, 36, 'CC', NULL, 'Cocos Islands', NULL, 1, '2020-05-02 11:13:35', '2020-05-02 11:13:35'),
(12, 36, 'HM', NULL, 'Heard Island and McDonald Islands', NULL, 1, '2020-05-02 11:13:35', '2020-05-02 11:13:35'),
(13, 36, 'NF', NULL, 'Norfolk Island', NULL, 1, '2020-05-02 11:13:35', '2020-05-02 11:13:35'),
(14, 36, 'NT', NULL, 'Northern Territory', NULL, 1, '2020-05-02 11:13:35', '2020-05-02 11:13:35'),
(15, 36, 'SA', NULL, 'South Australia', NULL, 1, '2020-05-02 11:13:35', '2020-05-02 11:13:35'),
(16, 36, 'WA', NULL, 'Western Australia', NULL, 1, '2020-05-02 11:13:35', '2020-05-02 11:13:35'),
(17, 50, 'A', NULL, 'Barisal', NULL, 1, '2020-05-02 11:13:35', '2020-05-02 11:13:35'),
(18, 50, 'B', NULL, 'Chittagong', NULL, 1, '2020-05-02 11:13:36', '2020-05-02 11:13:36'),
(19, 50, 'C', NULL, 'Dhaka', NULL, 1, '2020-05-02 11:13:36', '2020-05-02 11:13:36'),
(20, 50, 'D', NULL, 'Khulna', NULL, 1, '2020-05-02 11:13:36', '2020-05-02 11:13:36'),
(21, 50, 'H', NULL, 'Mymensingh', NULL, 1, '2020-05-02 11:13:36', '2020-05-02 11:13:36'),
(22, 50, 'E', NULL, 'Rajshahi', NULL, 1, '2020-05-02 11:13:36', '2020-05-02 11:13:36'),
(23, 50, 'F', NULL, 'Rangpur', NULL, 1, '2020-05-02 11:13:36', '2020-05-02 11:13:36'),
(24, 50, 'G', NULL, 'Sylhet', NULL, 1, '2020-05-02 11:13:36', '2020-05-02 11:13:36'),
(25, 76, 'AC', NULL, 'Acre', NULL, 1, '2020-05-02 11:13:36', '2020-05-02 11:13:36'),
(26, 76, 'AL', NULL, 'Alagoas', NULL, 1, '2020-05-02 11:13:36', '2020-05-02 11:13:36'),
(27, 76, 'AP', NULL, 'Amapá', NULL, 1, '2020-05-02 11:13:36', '2020-05-02 11:13:36'),
(28, 76, 'AM', NULL, 'Amazonas', NULL, 1, '2020-05-02 11:13:36', '2020-05-02 11:13:36'),
(29, 76, 'BA', NULL, 'Bahia', NULL, 1, '2020-05-02 11:13:36', '2020-05-02 11:13:36'),
(30, 76, 'CE', NULL, 'Ceará', NULL, 1, '2020-05-02 11:13:36', '2020-05-02 11:13:36'),
(31, 76, 'DF', NULL, 'Distrito Federal', NULL, 1, '2020-05-02 11:13:36', '2020-05-02 11:13:36'),
(32, 76, 'ES', NULL, 'Espírito Santo', NULL, 1, '2020-05-02 11:13:36', '2020-05-02 11:13:36'),
(33, 76, 'GO', NULL, 'Goiás', NULL, 1, '2020-05-02 11:13:36', '2020-05-02 11:13:36'),
(34, 76, 'MA', NULL, 'Maranhão', NULL, 1, '2020-05-02 11:13:36', '2020-05-02 11:13:36'),
(35, 76, 'MT', NULL, 'Mato Grosso', NULL, 1, '2020-05-02 11:13:36', '2020-05-02 11:13:36'),
(36, 76, 'MS', NULL, 'Mato Grosso do Sul', NULL, 1, '2020-05-02 11:13:36', '2020-05-02 11:13:36'),
(37, 76, 'MG', NULL, 'Minas Gerais', NULL, 1, '2020-05-02 11:13:37', '2020-05-02 11:13:37'),
(38, 76, 'PA', NULL, 'Pará', NULL, 1, '2020-05-02 11:13:37', '2020-05-02 11:13:37'),
(39, 76, 'PB', NULL, 'Paraíba', NULL, 1, '2020-05-02 11:13:37', '2020-05-02 11:13:37'),
(40, 76, 'PR', NULL, 'Paraná', NULL, 1, '2020-05-02 11:13:37', '2020-05-02 11:13:37'),
(41, 76, 'PE', NULL, 'Pernambuco', NULL, 1, '2020-05-02 11:13:37', '2020-05-02 11:13:37'),
(42, 76, 'PI', NULL, 'Piauí', NULL, 1, '2020-05-02 11:13:37', '2020-05-02 11:13:37'),
(43, 76, 'RJ', NULL, 'Rio de Janeiro', NULL, 1, '2020-05-02 11:13:37', '2020-05-02 11:13:37'),
(44, 76, 'RN', NULL, 'Rio Grande do Norte', NULL, 1, '2020-05-02 11:13:37', '2020-05-02 11:13:37'),
(45, 76, 'RS', NULL, 'Rio Grande do Sul', NULL, 1, '2020-05-02 11:13:37', '2020-05-02 11:13:37'),
(46, 76, 'RO', NULL, 'Rondônia', NULL, 1, '2020-05-02 11:13:37', '2020-05-02 11:13:37'),
(47, 76, 'RR', NULL, 'Roraima', NULL, 1, '2020-05-02 11:13:37', '2020-05-02 11:13:37'),
(48, 76, 'SC', NULL, 'Santa Catarina', NULL, 1, '2020-05-02 11:13:37', '2020-05-02 11:13:37'),
(49, 76, 'SP', NULL, 'São Paulo', NULL, 1, '2020-05-02 11:13:37', '2020-05-02 11:13:37'),
(50, 76, 'SE', NULL, 'Sergipe', NULL, 1, '2020-05-02 11:13:37', '2020-05-02 11:13:37'),
(51, 76, 'TO', NULL, 'Tocantins', NULL, 1, '2020-05-02 11:13:37', '2020-05-02 11:13:37'),
(52, 124, 'AB', NULL, 'Alberta', NULL, 1, '2020-05-02 11:13:37', '2020-05-02 11:13:37'),
(53, 124, 'BC', NULL, 'British Columbia', NULL, 1, '2020-05-02 11:13:37', '2020-05-02 11:13:37'),
(54, 124, 'MB', NULL, 'Manitoba', NULL, 1, '2020-05-02 11:13:37', '2020-05-02 11:13:37'),
(55, 124, 'NB', NULL, 'New Brunswick', NULL, 1, '2020-05-02 11:13:37', '2020-05-02 11:13:37'),
(56, 124, 'NL', NULL, 'Newfoundland and Labrador', NULL, 1, '2020-05-02 11:13:37', '2020-05-02 11:13:37'),
(57, 124, 'NS', NULL, 'Nova Scotia', NULL, 1, '2020-05-02 11:13:37', '2020-05-02 11:13:37'),
(58, 124, 'NU', NULL, 'Nunavut', NULL, 1, '2020-05-02 11:13:38', '2020-05-02 11:13:38'),
(59, 124, 'NT', NULL, 'Northwest Territories', NULL, 1, '2020-05-02 11:13:38', '2020-05-02 11:13:38'),
(60, 124, 'ON', NULL, 'Ontario', NULL, 1, '2020-05-02 11:13:38', '2020-05-02 11:13:38'),
(61, 124, 'PE', NULL, 'Prince Edward Island', NULL, 1, '2020-05-02 11:13:38', '2020-05-02 11:13:38'),
(62, 124, 'QC', NULL, 'Quebec', NULL, 1, '2020-05-02 11:13:38', '2020-05-02 11:13:38'),
(63, 124, 'SK', NULL, 'Saskatchewan', NULL, 1, '2020-05-02 11:13:38', '2020-05-02 11:13:38'),
(64, 124, 'YT', NULL, 'Yukon', NULL, 1, '2020-05-02 11:13:38', '2020-05-02 11:13:38'),
(65, 156, '渝', NULL, '重庆', NULL, 1, '2020-05-02 11:13:38', '2020-05-02 11:13:38'),
(66, 156, '黑', NULL, '黑龙江', NULL, 1, '2020-05-02 11:13:38', '2020-05-02 11:13:38'),
(67, 156, '吉', NULL, '吉林', NULL, 1, '2020-05-02 11:13:38', '2020-05-02 11:13:38'),
(68, 156, '琼', NULL, '海南', NULL, 1, '2020-05-02 11:13:38', '2020-05-02 11:13:38'),
(69, 156, '京', NULL, '北京', NULL, 1, '2020-05-02 11:13:38', '2020-05-02 11:13:38'),
(70, 156, '辽', NULL, '辽宁', NULL, 1, '2020-05-02 11:13:38', '2020-05-02 11:13:38'),
(71, 156, '蒙', NULL, '内蒙古', NULL, 1, '2020-05-02 11:13:38', '2020-05-02 11:13:38'),
(72, 156, '藏', NULL, '西藏', NULL, 1, '2020-05-02 11:13:38', '2020-05-02 11:13:38'),
(73, 156, '青', NULL, '青海', NULL, 1, '2020-05-02 11:13:38', '2020-05-02 11:13:38'),
(74, 156, '宁', NULL, '宁夏', NULL, 1, '2020-05-02 11:13:38', '2020-05-02 11:13:38'),
(75, 156, '新', NULL, '新疆', NULL, 1, '2020-05-02 11:13:38', '2020-05-02 11:13:38'),
(76, 156, '甘', NULL, '甘肃', NULL, 1, '2020-05-02 11:13:38', '2020-05-02 11:13:38'),
(77, 156, '冀', NULL, '河北', NULL, 1, '2020-05-02 11:13:38', '2020-05-02 11:13:38'),
(78, 156, '豫', NULL, '河南', NULL, 1, '2020-05-02 11:13:39', '2020-05-02 11:13:39'),
(79, 156, '鄂', NULL, '湖北', NULL, 1, '2020-05-02 11:13:39', '2020-05-02 11:13:39'),
(80, 156, '湘', NULL, '湖南', NULL, 1, '2020-05-02 11:13:39', '2020-05-02 11:13:39'),
(81, 156, '鲁', NULL, '山东', NULL, 1, '2020-05-02 11:13:39', '2020-05-02 11:13:39'),
(82, 156, '苏', NULL, '江苏', NULL, 1, '2020-05-02 11:13:39', '2020-05-02 11:13:39'),
(83, 156, '皖', NULL, '安徽', NULL, 1, '2020-05-02 11:13:39', '2020-05-02 11:13:39'),
(84, 156, '晋', NULL, '山西', NULL, 1, '2020-05-02 11:13:39', '2020-05-02 11:13:39'),
(85, 156, '陕', NULL, '陕西', NULL, 1, '2020-05-02 11:13:39', '2020-05-02 11:13:39'),
(86, 156, '川', NULL, '四川', NULL, 1, '2020-05-02 11:13:39', '2020-05-02 11:13:39'),
(87, 156, '滇', NULL, '云南', NULL, 1, '2020-05-02 11:13:39', '2020-05-02 11:13:39'),
(88, 156, '黔', NULL, '贵州', NULL, 1, '2020-05-02 11:13:39', '2020-05-02 11:13:39'),
(89, 156, '浙', NULL, '浙江', NULL, 1, '2020-05-02 11:13:39', '2020-05-02 11:13:39'),
(90, 156, '闽', NULL, '福建', NULL, 1, '2020-05-02 11:13:39', '2020-05-02 11:13:39'),
(91, 156, '桂', NULL, '广西', NULL, 1, '2020-05-02 11:13:39', '2020-05-02 11:13:39'),
(92, 156, '沪', NULL, '上海', NULL, 1, '2020-05-02 11:13:39', '2020-05-02 11:13:39'),
(93, 156, '津', NULL, '天津', NULL, 1, '2020-05-02 11:13:39', '2020-05-02 11:13:39'),
(94, 156, '港', NULL, '香港', NULL, 1, '2020-05-02 11:13:39', '2020-05-02 11:13:39'),
(95, 156, '澳', NULL, '澳门', NULL, 1, '2020-05-02 11:13:39', '2020-05-02 11:13:39'),
(96, 156, '台', NULL, '台湾', NULL, 1, '2020-05-02 11:13:39', '2020-05-02 11:13:39'),
(97, 156, '赣', NULL, '江西', NULL, 1, '2020-05-02 11:13:39', '2020-05-02 11:13:39'),
(98, 156, '粤', NULL, '广东', NULL, 1, '2020-05-02 11:13:39', '2020-05-02 11:13:39'),
(99, 276, 'BW', NULL, 'Baden-Württemberg', NULL, 1, '2020-05-02 11:13:39', '2020-05-02 11:13:39'),
(100, 276, 'BY', NULL, 'Bayern', NULL, 1, '2020-05-02 11:13:39', '2020-05-02 11:13:39'),
(101, 276, 'BE', NULL, 'Berlin', NULL, 1, '2020-05-02 11:13:40', '2020-05-02 11:13:40'),
(102, 276, 'BB', NULL, 'Brandenburg', NULL, 1, '2020-05-02 11:13:40', '2020-05-02 11:13:40'),
(103, 276, 'HB', NULL, 'Bremen', NULL, 1, '2020-05-02 11:13:40', '2020-05-02 11:13:40'),
(104, 276, 'HH', NULL, 'Hamburg', NULL, 1, '2020-05-02 11:13:40', '2020-05-02 11:13:40'),
(105, 276, 'HE', NULL, 'Hessen', NULL, 1, '2020-05-02 11:13:40', '2020-05-02 11:13:40'),
(106, 276, 'MV', NULL, 'Mecklenburg-Vorpommern', NULL, 1, '2020-05-02 11:13:40', '2020-05-02 11:13:40'),
(107, 276, 'NI', NULL, 'Niedersachsen', NULL, 1, '2020-05-02 11:13:40', '2020-05-02 11:13:40'),
(108, 276, 'NW', NULL, 'Nordrhein-Westfalen', NULL, 1, '2020-05-02 11:13:40', '2020-05-02 11:13:40'),
(109, 276, 'RP', NULL, 'Rheinland-Pfalz', NULL, 1, '2020-05-02 11:13:40', '2020-05-02 11:13:40'),
(110, 276, 'SL', NULL, 'Saarland', NULL, 1, '2020-05-02 11:13:40', '2020-05-02 11:13:40'),
(111, 276, 'SN', NULL, 'Sachsen', NULL, 1, '2020-05-02 11:13:40', '2020-05-02 11:13:40'),
(112, 276, 'ST', NULL, 'Sachsen-Anhalt', NULL, 1, '2020-05-02 11:13:40', '2020-05-02 11:13:40'),
(113, 276, 'SH', NULL, 'Schleswig-Holstein', NULL, 1, '2020-05-02 11:13:40', '2020-05-02 11:13:40'),
(114, 276, 'TH', NULL, 'Thüringen', NULL, 1, '2020-05-02 11:13:40', '2020-05-02 11:13:40'),
(115, 724, 'C', NULL, 'La Coruña', NULL, 1, '2020-05-02 11:13:40', '2020-05-02 11:13:40'),
(116, 724, 'LU', NULL, 'Lugo', NULL, 1, '2020-05-02 11:13:40', '2020-05-02 11:13:40'),
(117, 724, 'BI', NULL, 'Vizcaya', NULL, 1, '2020-05-02 11:13:40', '2020-05-02 11:13:40'),
(118, 724, 'SS', NULL, 'Guipúzcoa', NULL, 1, '2020-05-02 11:13:40', '2020-05-02 11:13:40'),
(119, 724, 'HU', NULL, 'Huesca', NULL, 1, '2020-05-02 11:13:40', '2020-05-02 11:13:40'),
(120, 724, 'L', NULL, 'Lérida', NULL, 1, '2020-05-02 11:13:41', '2020-05-02 11:13:41'),
(121, 724, 'GI', NULL, 'Gerona', NULL, 1, '2020-05-02 11:13:41', '2020-05-02 11:13:41'),
(122, 724, 'B', NULL, 'Barcelona', NULL, 1, '2020-05-02 11:13:41', '2020-05-02 11:13:41'),
(123, 724, 'T', NULL, 'Tarragona', NULL, 1, '2020-05-02 11:13:41', '2020-05-02 11:13:41'),
(124, 724, 'CS', NULL, 'Castellón', NULL, 1, '2020-05-02 11:13:41', '2020-05-02 11:13:41'),
(125, 724, 'V', NULL, 'Valencia', NULL, 1, '2020-05-02 11:13:41', '2020-05-02 11:13:41'),
(126, 724, 'A', NULL, 'Alicante', NULL, 1, '2020-05-02 11:13:41', '2020-05-02 11:13:41'),
(127, 724, 'MU', NULL, 'Murcia', NULL, 1, '2020-05-02 11:13:41', '2020-05-02 11:13:41'),
(128, 724, 'Z', NULL, 'Zaragoza', NULL, 1, '2020-05-02 11:13:41', '2020-05-02 11:13:41'),
(129, 724, 'TE', NULL, 'Teruel', NULL, 1, '2020-05-02 11:13:41', '2020-05-02 11:13:41'),
(130, 724, 'CU', NULL, 'Cuenca', NULL, 1, '2020-05-02 11:13:41', '2020-05-02 11:13:41'),
(131, 724, 'AB', NULL, 'Albacete', NULL, 1, '2020-05-02 11:13:41', '2020-05-02 11:13:41'),
(132, 724, 'AL', NULL, 'Almeria', NULL, 1, '2020-05-02 11:13:41', '2020-05-02 11:13:41'),
(133, 724, 'GR', NULL, 'Granada', NULL, 1, '2020-05-02 11:13:41', '2020-05-02 11:13:41'),
(134, 724, 'MA', NULL, 'Málaga', NULL, 1, '2020-05-02 11:13:41', '2020-05-02 11:13:41'),
(135, 724, 'TF', NULL, 'Tenerife', NULL, 1, '2020-05-02 11:13:41', '2020-05-02 11:13:41'),
(136, 724, 'CA', NULL, 'Cádiz', NULL, 1, '2020-05-02 11:13:41', '2020-05-02 11:13:41'),
(137, 724, 'SE', NULL, 'Sevilla', NULL, 1, '2020-05-02 11:13:41', '2020-05-02 11:13:41'),
(138, 724, 'H', NULL, 'Huelva', NULL, 1, '2020-05-02 11:13:41', '2020-05-02 11:13:41'),
(139, 724, 'GC', NULL, 'Las Palmas', NULL, 1, '2020-05-02 11:13:41', '2020-05-02 11:13:41'),
(140, 724, 'M', NULL, 'Madrid', NULL, 1, '2020-05-02 11:13:41', '2020-05-02 11:13:41'),
(141, 724, 'BA', NULL, 'Badajoz', NULL, 1, '2020-05-02 11:13:41', '2020-05-02 11:13:41'),
(142, 724, 'CC', NULL, 'Cáceres', NULL, 1, '2020-05-02 11:13:41', '2020-05-02 11:13:41'),
(143, 724, 'TO', NULL, 'Toledo', NULL, 1, '2020-05-02 11:13:41', '2020-05-02 11:13:41'),
(144, 724, 'CR', NULL, 'Ciudad Real', NULL, 1, '2020-05-02 11:13:42', '2020-05-02 11:13:42'),
(145, 724, 'SA', NULL, 'Salamanca', NULL, 1, '2020-05-02 11:13:42', '2020-05-02 11:13:42'),
(146, 724, 'CO', NULL, 'Córdoba', NULL, 1, '2020-05-02 11:13:42', '2020-05-02 11:13:42'),
(147, 724, 'J', NULL, 'Jaén', NULL, 1, '2020-05-02 11:13:42', '2020-05-02 11:13:42'),
(148, 724, 'AV', NULL, 'Ávila', NULL, 1, '2020-05-02 11:13:42', '2020-05-02 11:13:42'),
(149, 724, 'VA', NULL, 'Valladolid', NULL, 1, '2020-05-02 11:13:42', '2020-05-02 11:13:42'),
(150, 724, 'ZA', NULL, 'Zamora', NULL, 1, '2020-05-02 11:13:42', '2020-05-02 11:13:42'),
(151, 724, 'VI', NULL, 'Álava', NULL, 1, '2020-05-02 11:13:42', '2020-05-02 11:13:42'),
(152, 724, 'SG', NULL, 'Segovia', NULL, 1, '2020-05-02 11:13:42', '2020-05-02 11:13:42'),
(153, 724, 'BU', NULL, 'Burgos', NULL, 1, '2020-05-02 11:13:42', '2020-05-02 11:13:42'),
(154, 724, 'PO', NULL, 'Pontevedra', NULL, 1, '2020-05-02 11:13:42', '2020-05-02 11:13:42'),
(155, 724, 'LE', NULL, 'León', NULL, 1, '2020-05-02 11:13:42', '2020-05-02 11:13:42'),
(156, 724, 'OU', NULL, 'Orense', NULL, 1, '2020-05-02 11:13:42', '2020-05-02 11:13:42'),
(157, 724, 'P', NULL, 'Palencia', NULL, 1, '2020-05-02 11:13:42', '2020-05-02 11:13:42'),
(158, 724, 'LO', NULL, 'La Rioja', NULL, 1, '2020-05-02 11:13:42', '2020-05-02 11:13:42'),
(159, 724, 'SO', NULL, 'Soria', NULL, 1, '2020-05-02 11:13:42', '2020-05-02 11:13:42'),
(160, 724, 'GU', NULL, 'Guadalajara', NULL, 1, '2020-05-02 11:13:42', '2020-05-02 11:13:42'),
(161, 250, 'ARA', NULL, 'Auvergne-Rhône-Alpes', NULL, 1, '2020-05-02 11:13:42', '2020-05-02 11:13:42'),
(162, 250, 'BFC', NULL, 'Bourgogne-Franche-Comté', NULL, 1, '2020-05-02 11:13:42', '2020-05-02 11:13:42'),
(163, 250, 'BRE', NULL, 'Bretagne', NULL, 1, '2020-05-02 11:13:42', '2020-05-02 11:13:42'),
(164, 250, 'CVL', NULL, 'Centre-Val de Loire', NULL, 1, '2020-05-02 11:13:42', '2020-05-02 11:13:42'),
(165, 250, 'COR', NULL, 'Corse', NULL, 1, '2020-05-02 11:13:42', '2020-05-02 11:13:42'),
(166, 250, 'GES', NULL, 'Grand-Est', NULL, 1, '2020-05-02 11:13:42', '2020-05-02 11:13:42'),
(167, 250, 'GUA', NULL, 'Guadeloupe', NULL, 1, '2020-05-02 11:13:43', '2020-05-02 11:13:43'),
(168, 250, 'HDF', NULL, 'Hauts-de-France', NULL, 1, '2020-05-02 11:13:43', '2020-05-02 11:13:43'),
(169, 250, 'IDF', NULL, 'Île-de-France', NULL, 1, '2020-05-02 11:13:43', '2020-05-02 11:13:43'),
(170, 250, 'MAY', NULL, 'Mayotte', NULL, 1, '2020-05-02 11:13:43', '2020-05-02 11:13:43'),
(171, 250, 'NOR', NULL, 'Normandie', NULL, 1, '2020-05-02 11:13:43', '2020-05-02 11:13:43'),
(172, 250, 'NAQ', NULL, 'Nouvelle-Aquitaine', NULL, 1, '2020-05-02 11:13:43', '2020-05-02 11:13:43'),
(173, 250, 'OCC', NULL, 'Occitanie', NULL, 1, '2020-05-02 11:13:43', '2020-05-02 11:13:43'),
(174, 250, 'PDL', NULL, 'Pays-de-la-Loire', NULL, 1, '2020-05-02 11:13:43', '2020-05-02 11:13:43'),
(175, 250, 'PAC', NULL, 'Provence-Alpes-Côte-d’Azur', NULL, 1, '2020-05-02 11:13:43', '2020-05-02 11:13:43'),
(176, 250, 'LRE', NULL, 'La Réunion', NULL, 1, '2020-05-02 11:13:43', '2020-05-02 11:13:43'),
(177, 360, 'AC', NULL, 'Special Region of Aceh', NULL, 1, '2020-05-02 11:13:43', '2020-05-02 11:13:43'),
(178, 360, 'BA', NULL, 'Bali', NULL, 1, '2020-05-02 11:13:43', '2020-05-02 11:13:43'),
(179, 360, 'BB', NULL, 'Bangka–Belitung Islands', NULL, 1, '2020-05-02 11:13:43', '2020-05-02 11:13:43'),
(180, 360, 'BT', NULL, 'Banten', NULL, 1, '2020-05-02 11:13:43', '2020-05-02 11:13:43'),
(181, 360, 'BE', NULL, 'Bengkulu', NULL, 1, '2020-05-02 11:13:43', '2020-05-02 11:13:43'),
(182, 360, 'JT', NULL, 'Central Java', NULL, 1, '2020-05-02 11:13:43', '2020-05-02 11:13:43'),
(183, 360, 'KT', NULL, 'Central Kalimantan', NULL, 1, '2020-05-02 11:13:43', '2020-05-02 11:13:43'),
(184, 360, 'ST', NULL, 'Central Sulawesi', NULL, 1, '2020-05-02 11:13:44', '2020-05-02 11:13:44'),
(185, 360, 'JI', NULL, 'East Java', NULL, 1, '2020-05-02 11:13:44', '2020-05-02 11:13:44'),
(186, 360, 'KI', NULL, 'East Kalimantan', NULL, 1, '2020-05-02 11:13:44', '2020-05-02 11:13:44'),
(187, 360, 'NT', NULL, 'East Nusa Tenggara', NULL, 1, '2020-05-02 11:13:44', '2020-05-02 11:13:44'),
(188, 360, 'GO', NULL, 'Gorontalo', NULL, 1, '2020-05-02 11:13:44', '2020-05-02 11:13:44'),
(189, 360, 'JK', NULL, 'Jakarta Special Capital Region', NULL, 1, '2020-05-02 11:13:44', '2020-05-02 11:13:44'),
(190, 360, 'JA', NULL, 'Jambi', NULL, 1, '2020-05-02 11:13:44', '2020-05-02 11:13:44'),
(191, 360, 'LA', NULL, 'Lampung', NULL, 1, '2020-05-02 11:13:44', '2020-05-02 11:13:44'),
(192, 360, 'MA', NULL, 'Maluku', NULL, 1, '2020-05-02 11:13:44', '2020-05-02 11:13:44'),
(193, 360, 'KU', NULL, 'North Kalimantan', NULL, 1, '2020-05-02 11:13:44', '2020-05-02 11:13:44'),
(194, 360, 'MU', NULL, 'North Maluku', NULL, 1, '2020-05-02 11:13:44', '2020-05-02 11:13:44'),
(195, 360, 'SA', NULL, 'North Sulawesi', NULL, 1, '2020-05-02 11:13:44', '2020-05-02 11:13:44'),
(196, 360, 'SU', NULL, 'North Sumatra', NULL, 1, '2020-05-02 11:13:44', '2020-05-02 11:13:44'),
(197, 360, 'PA', NULL, 'Special Region of Papua', NULL, 1, '2020-05-02 11:13:44', '2020-05-02 11:13:44'),
(198, 360, 'RI', NULL, 'Riau', NULL, 1, '2020-05-02 11:13:44', '2020-05-02 11:13:44'),
(199, 360, 'KR', NULL, 'Riau Islands', NULL, 1, '2020-05-02 11:13:44', '2020-05-02 11:13:44'),
(200, 360, 'SG', NULL, 'Southeast Sulawesi', NULL, 1, '2020-05-02 11:13:44', '2020-05-02 11:13:44'),
(201, 360, 'KS', NULL, 'South Kalimantan', NULL, 1, '2020-05-02 11:13:44', '2020-05-02 11:13:44'),
(202, 360, 'SN', NULL, 'South Sulawesi', NULL, 1, '2020-05-02 11:13:44', '2020-05-02 11:13:44'),
(203, 360, 'SS', NULL, 'South Sumatra', NULL, 1, '2020-05-02 11:13:44', '2020-05-02 11:13:44'),
(204, 360, 'JB', NULL, 'West Java', NULL, 1, '2020-05-02 11:13:45', '2020-05-02 11:13:45'),
(205, 360, 'KB', NULL, 'West Kalimantan', NULL, 1, '2020-05-02 11:13:45', '2020-05-02 11:13:45'),
(206, 360, 'NB', NULL, 'West Nusa Tenggara', NULL, 1, '2020-05-02 11:13:45', '2020-05-02 11:13:45'),
(207, 360, 'PB', NULL, 'Special Region of West Papua', NULL, 1, '2020-05-02 11:13:45', '2020-05-02 11:13:45'),
(208, 360, 'SR', NULL, 'West Sulawesi', NULL, 1, '2020-05-02 11:13:45', '2020-05-02 11:13:45'),
(209, 360, 'SB', NULL, 'West Sumatra', NULL, 1, '2020-05-02 11:13:45', '2020-05-02 11:13:45'),
(210, 360, 'YO', NULL, 'Special Region of Yogyakarta', NULL, 1, '2020-05-02 11:13:45', '2020-05-02 11:13:45'),
(211, 356, 'AP', NULL, 'Andhra Pradesh', NULL, 1, '2020-05-02 11:13:45', '2020-05-02 11:13:45'),
(212, 356, 'AR', NULL, 'Arunachal Pradesh', NULL, 1, '2020-05-02 11:13:45', '2020-05-02 11:13:45'),
(213, 356, 'AS', NULL, 'Assam', NULL, 1, '2020-05-02 11:13:45', '2020-05-02 11:13:45'),
(214, 356, 'BR', NULL, 'Bihar', NULL, 1, '2020-05-02 11:13:45', '2020-05-02 11:13:45'),
(215, 356, 'CT', NULL, 'Chhattisgarh', NULL, 1, '2020-05-02 11:13:45', '2020-05-02 11:13:45'),
(216, 356, 'GA', NULL, 'Goa', NULL, 1, '2020-05-02 11:13:45', '2020-05-02 11:13:45'),
(217, 356, 'GJ', NULL, 'Gujarat', NULL, 1, '2020-05-02 11:13:45', '2020-05-02 11:13:45'),
(218, 356, 'HR', NULL, 'Haryana', NULL, 1, '2020-05-02 11:13:45', '2020-05-02 11:13:45'),
(219, 356, 'HP', NULL, 'Himachal Pradesh', NULL, 1, '2020-05-02 11:13:46', '2020-05-02 11:13:46'),
(220, 356, 'JK', NULL, 'Jammu and Kashmir', NULL, 1, '2020-05-02 11:13:46', '2020-05-02 11:13:46'),
(221, 356, 'JH', NULL, 'Jharkhand', NULL, 1, '2020-05-02 11:13:46', '2020-05-02 11:13:46'),
(222, 356, 'KA', NULL, 'Karnataka', NULL, 1, '2020-05-02 11:13:46', '2020-05-02 11:13:46'),
(223, 356, 'KL', NULL, 'Kerala', NULL, 1, '2020-05-02 11:13:46', '2020-05-02 11:13:46'),
(224, 356, 'MP', NULL, 'Madhya Pradesh', NULL, 1, '2020-05-02 11:13:46', '2020-05-02 11:13:46'),
(225, 356, 'MH', NULL, 'Maharashtra', NULL, 1, '2020-05-02 11:13:46', '2020-05-02 11:13:46'),
(226, 356, 'MN', NULL, 'Manipur', NULL, 1, '2020-05-02 11:13:46', '2020-05-02 11:13:46'),
(227, 356, 'ML', NULL, 'Meghalaya', NULL, 1, '2020-05-02 11:13:46', '2020-05-02 11:13:46'),
(228, 356, 'MZ', NULL, 'Mizoram', NULL, 1, '2020-05-02 11:13:46', '2020-05-02 11:13:46'),
(229, 356, 'NL', NULL, 'Nagaland', NULL, 1, '2020-05-02 11:13:46', '2020-05-02 11:13:46'),
(230, 356, 'OR', NULL, 'Odisha', NULL, 1, '2020-05-02 11:13:46', '2020-05-02 11:13:46'),
(231, 356, 'PB', NULL, 'Punjab', NULL, 1, '2020-05-02 11:13:46', '2020-05-02 11:13:46'),
(232, 356, 'RJ', NULL, 'Rajasthan', NULL, 1, '2020-05-02 11:13:46', '2020-05-02 11:13:46'),
(233, 356, 'SK', NULL, 'Sikkim', NULL, 1, '2020-05-02 11:13:46', '2020-05-02 11:13:46'),
(234, 356, 'TN', NULL, 'Tamil Nadu', NULL, 1, '2020-05-02 11:13:46', '2020-05-02 11:13:46'),
(235, 356, 'TG', NULL, 'Telangana', NULL, 1, '2020-05-02 11:13:46', '2020-05-02 11:13:46'),
(236, 356, 'TR', NULL, 'Tripura', NULL, 1, '2020-05-02 11:13:46', '2020-05-02 11:13:46'),
(237, 356, 'UP', NULL, 'Uttar Pradesh', NULL, 1, '2020-05-02 11:13:46', '2020-05-02 11:13:46'),
(238, 356, 'UT', NULL, 'Uttarakhand', NULL, 1, '2020-05-02 11:13:46', '2020-05-02 11:13:46'),
(239, 356, 'WB', NULL, 'West Bengal', NULL, 1, '2020-05-02 11:13:46', '2020-05-02 11:13:46'),
(240, 356, 'AN', NULL, 'Andaman and Nicobar Islands', NULL, 1, '2020-05-02 11:13:46', '2020-05-02 11:13:46'),
(241, 356, 'CH', NULL, 'Chandigarh', NULL, 1, '2020-05-02 11:13:46', '2020-05-02 11:13:46'),
(242, 356, 'DN', NULL, 'Dadra and Nagar Haveli', NULL, 1, '2020-05-02 11:13:47', '2020-05-02 11:13:47'),
(243, 356, 'DD', NULL, 'Daman and Diu', NULL, 1, '2020-05-02 11:13:47', '2020-05-02 11:13:47'),
(244, 356, 'LD', NULL, 'Lakshadweep', NULL, 1, '2020-05-02 11:13:47', '2020-05-02 11:13:47'),
(245, 356, 'DL', NULL, 'National Capital Territory of Delhi', NULL, 1, '2020-05-02 11:13:47', '2020-05-02 11:13:47'),
(246, 356, 'PY', NULL, 'Puducherry', NULL, 1, '2020-05-02 11:13:47', '2020-05-02 11:13:47'),
(247, 380, '65', NULL, 'Abruzzo', NULL, 1, '2020-05-02 11:13:47', '2020-05-02 11:13:47'),
(248, 380, '77', NULL, 'Basilicata', NULL, 1, '2020-05-02 11:13:47', '2020-05-02 11:13:47'),
(249, 380, '78', NULL, 'Calabria', NULL, 1, '2020-05-02 11:13:47', '2020-05-02 11:13:47'),
(250, 380, '72', NULL, 'Campania', NULL, 1, '2020-05-02 11:13:47', '2020-05-02 11:13:47'),
(251, 380, '45', NULL, 'Emilia-Romagna', NULL, 1, '2020-05-02 11:13:47', '2020-05-02 11:13:47'),
(252, 380, '62', NULL, 'Lazio', NULL, 1, '2020-05-02 11:13:47', '2020-05-02 11:13:47'),
(253, 380, '42', NULL, 'Liguria', NULL, 1, '2020-05-02 11:13:47', '2020-05-02 11:13:47'),
(254, 380, '25', NULL, 'Lombardy', NULL, 1, '2020-05-02 11:13:47', '2020-05-02 11:13:47'),
(255, 380, '57', NULL, 'Marche', NULL, 1, '2020-05-02 11:13:47', '2020-05-02 11:13:47'),
(256, 380, '67', NULL, 'Molise', NULL, 1, '2020-05-02 11:13:47', '2020-05-02 11:13:47'),
(257, 380, '21', NULL, 'Piedmont', NULL, 1, '2020-05-02 11:13:47', '2020-05-02 11:13:47'),
(258, 380, '75', NULL, 'Apulia', NULL, 1, '2020-05-02 11:13:47', '2020-05-02 11:13:47'),
(259, 380, '52', NULL, 'Tuscany', NULL, 1, '2020-05-02 11:13:47', '2020-05-02 11:13:47'),
(260, 380, '55', NULL, 'Umbria', NULL, 1, '2020-05-02 11:13:47', '2020-05-02 11:13:47'),
(261, 380, '34', NULL, 'Veneto', NULL, 1, '2020-05-02 11:13:47', '2020-05-02 11:13:47'),
(262, 380, '36', NULL, 'Friuli Venezia Giulia', NULL, 1, '2020-05-02 11:13:47', '2020-05-02 11:13:47'),
(263, 380, '88', NULL, 'Sardinia', NULL, 1, '2020-05-02 11:13:47', '2020-05-02 11:13:47'),
(264, 380, '82', NULL, 'Sicily', NULL, 1, '2020-05-02 11:13:47', '2020-05-02 11:13:47'),
(265, 380, '32', NULL, 'Trentino-South Tyrol', NULL, 1, '2020-05-02 11:13:48', '2020-05-02 11:13:48'),
(266, 380, '23', NULL, 'Aosta Valley', NULL, 1, '2020-05-02 11:13:48', '2020-05-02 11:13:48'),
(267, 484, 'AG', NULL, 'Aguascalientes', NULL, 1, '2020-05-02 11:13:48', '2020-05-02 11:13:48'),
(268, 484, 'BC', NULL, 'Baja California', NULL, 1, '2020-05-02 11:13:48', '2020-05-02 11:13:48'),
(269, 484, 'BS', NULL, 'Baja California Sur', NULL, 1, '2020-05-02 11:13:48', '2020-05-02 11:13:48'),
(270, 484, 'CM', NULL, 'Campeche', NULL, 1, '2020-05-02 11:13:48', '2020-05-02 11:13:48'),
(271, 484, 'CS', NULL, 'Chiapas', NULL, 1, '2020-05-02 11:13:48', '2020-05-02 11:13:48'),
(272, 484, 'CH', NULL, 'Chihuahua', NULL, 1, '2020-05-02 11:13:48', '2020-05-02 11:13:48'),
(273, 484, 'MX', NULL, 'Coahuila', NULL, 1, '2020-05-02 11:13:48', '2020-05-02 11:13:48'),
(274, 484, 'CL', NULL, 'Colima', NULL, 1, '2020-05-02 11:13:48', '2020-05-02 11:13:48'),
(275, 484, 'DF', NULL, 'Federal District', NULL, 1, '2020-05-02 11:13:48', '2020-05-02 11:13:48'),
(276, 484, 'DG', NULL, 'Durango', NULL, 1, '2020-05-02 11:13:48', '2020-05-02 11:13:48'),
(277, 484, 'GT', NULL, 'Guanajuato', NULL, 1, '2020-05-02 11:13:48', '2020-05-02 11:13:48'),
(278, 484, 'GR', NULL, 'Guerrero', NULL, 1, '2020-05-02 11:13:48', '2020-05-02 11:13:48'),
(279, 484, 'HG', NULL, 'Hidalgo', NULL, 1, '2020-05-02 11:13:48', '2020-05-02 11:13:48'),
(280, 484, 'JA', NULL, 'Jalisco', NULL, 1, '2020-05-02 11:13:48', '2020-05-02 11:13:48'),
(281, 484, 'ME', NULL, 'Mexico', NULL, 1, '2020-05-02 11:13:48', '2020-05-02 11:13:48'),
(282, 484, 'MI', NULL, 'Michoacán', NULL, 1, '2020-05-02 11:13:48', '2020-05-02 11:13:48'),
(283, 484, 'MO', NULL, 'Morelos', NULL, 1, '2020-05-02 11:13:48', '2020-05-02 11:13:48'),
(284, 484, 'NA', NULL, 'Nayarit', NULL, 1, '2020-05-02 11:13:48', '2020-05-02 11:13:48'),
(285, 484, 'NL', NULL, 'Nuevo León', NULL, 1, '2020-05-02 11:13:48', '2020-05-02 11:13:48'),
(286, 484, 'OA', NULL, 'Oaxaca', NULL, 1, '2020-05-02 11:13:48', '2020-05-02 11:13:48'),
(287, 484, 'PU', NULL, 'Puebla', NULL, 1, '2020-05-02 11:13:48', '2020-05-02 11:13:48'),
(288, 484, 'QE', NULL, 'Querétaro', NULL, 1, '2020-05-02 11:13:49', '2020-05-02 11:13:49'),
(289, 484, 'QR', NULL, 'Quintana Roo', NULL, 1, '2020-05-02 11:13:49', '2020-05-02 11:13:49'),
(290, 484, 'SL', NULL, 'San Luis Potosí', NULL, 1, '2020-05-02 11:13:49', '2020-05-02 11:13:49'),
(291, 484, 'SI', NULL, 'Sinaloa', NULL, 1, '2020-05-02 11:13:49', '2020-05-02 11:13:49'),
(292, 484, 'SO', NULL, 'Sonora', NULL, 1, '2020-05-02 11:13:49', '2020-05-02 11:13:49'),
(293, 484, 'TB', NULL, 'Tabasco', NULL, 1, '2020-05-02 11:13:49', '2020-05-02 11:13:49'),
(294, 484, 'TM', NULL, 'Tamaulipas', NULL, 1, '2020-05-02 11:13:49', '2020-05-02 11:13:49'),
(295, 484, 'TL', NULL, 'Tlaxcala', NULL, 1, '2020-05-02 11:13:49', '2020-05-02 11:13:49'),
(296, 484, 'VE', NULL, 'Veracruz', NULL, 1, '2020-05-02 11:13:49', '2020-05-02 11:13:49'),
(297, 484, 'YU', NULL, 'Yucatán', NULL, 1, '2020-05-02 11:13:49', '2020-05-02 11:13:49'),
(298, 484, 'ZA', NULL, 'Zacatecas', NULL, 1, '2020-05-02 11:13:49', '2020-05-02 11:13:49'),
(299, 528, 'DR', NULL, 'Drenthe', NULL, 1, '2020-05-02 11:13:49', '2020-05-02 11:13:49'),
(300, 528, 'FL', NULL, 'Flevoland', NULL, 1, '2020-05-02 11:13:49', '2020-05-02 11:13:49'),
(301, 528, 'FR', NULL, 'Friesland', NULL, 1, '2020-05-02 11:13:49', '2020-05-02 11:13:49'),
(302, 528, 'GD', NULL, 'Gelderland', NULL, 1, '2020-05-02 11:13:49', '2020-05-02 11:13:49'),
(303, 528, 'GR', NULL, 'Groningen', NULL, 1, '2020-05-02 11:13:49', '2020-05-02 11:13:49'),
(304, 528, 'LB', NULL, 'Limburg', NULL, 1, '2020-05-02 11:13:49', '2020-05-02 11:13:49'),
(305, 528, 'NB', NULL, 'Noord-Brabant', NULL, 1, '2020-05-02 11:13:49', '2020-05-02 11:13:49'),
(306, 528, 'NH', NULL, 'Noord-Holland', NULL, 1, '2020-05-02 11:13:49', '2020-05-02 11:13:49'),
(307, 528, 'OV', NULL, 'Overijssel', NULL, 1, '2020-05-02 11:13:49', '2020-05-02 11:13:49'),
(308, 528, 'UT', NULL, 'Utrecht', NULL, 1, '2020-05-02 11:13:49', '2020-05-02 11:13:49'),
(309, 528, 'ZH', NULL, 'Zuid-Holland', NULL, 1, '2020-05-02 11:13:49', '2020-05-02 11:13:49'),
(310, 528, 'ZL', NULL, 'Zeeland', NULL, 1, '2020-05-02 11:13:49', '2020-05-02 11:13:49'),
(311, 528, 'AW', NULL, 'Aruba', NULL, 1, '2020-05-02 11:13:49', '2020-05-02 11:13:49'),
(312, 528, 'BQ', NULL, 'Bonaire', NULL, 1, '2020-05-02 11:13:50', '2020-05-02 11:13:50'),
(313, 528, 'CW', NULL, 'Curaçao', NULL, 1, '2020-05-02 11:13:50', '2020-05-02 11:13:50'),
(314, 528, 'SX', NULL, 'Sint Maarten', NULL, 1, '2020-05-02 11:13:50', '2020-05-02 11:13:50'),
(315, 604, 'LMA', NULL, 'Municipalidad Metropolitana de Lima', NULL, 1, '2020-05-02 11:13:50', '2020-05-02 11:13:50'),
(316, 604, 'AMA', NULL, 'Amazonas', NULL, 1, '2020-05-02 11:13:50', '2020-05-02 11:13:50'),
(317, 604, 'ANC', NULL, 'Ancash', NULL, 1, '2020-05-02 11:13:50', '2020-05-02 11:13:50'),
(318, 604, 'APU', NULL, 'Apurímac', NULL, 1, '2020-05-02 11:13:50', '2020-05-02 11:13:50'),
(319, 604, 'ARE', NULL, 'Arequipa', NULL, 1, '2020-05-02 11:13:50', '2020-05-02 11:13:50'),
(320, 604, 'AYA', NULL, 'Ayacucho', NULL, 1, '2020-05-02 11:13:50', '2020-05-02 11:13:50'),
(321, 604, 'CAJ', NULL, 'Cajamarca', NULL, 1, '2020-05-02 11:13:50', '2020-05-02 11:13:50'),
(322, 604, 'CUS', NULL, 'Cusco', NULL, 1, '2020-05-02 11:13:50', '2020-05-02 11:13:50'),
(323, 604, 'CAL', NULL, 'El Callao', NULL, 1, '2020-05-02 11:13:50', '2020-05-02 11:13:50'),
(324, 604, 'HUV', NULL, 'Huancavelica', NULL, 1, '2020-05-02 11:13:50', '2020-05-02 11:13:50'),
(325, 604, 'HUC', NULL, 'Huánuco', NULL, 1, '2020-05-02 11:13:50', '2020-05-02 11:13:50'),
(326, 604, 'ICA', NULL, 'Ica', NULL, 1, '2020-05-02 11:13:50', '2020-05-02 11:13:50'),
(327, 604, 'JUN', NULL, 'Junín', NULL, 1, '2020-05-02 11:13:50', '2020-05-02 11:13:50'),
(328, 604, 'LAL', NULL, 'La Libertad', NULL, 1, '2020-05-02 11:13:50', '2020-05-02 11:13:50'),
(329, 604, 'LAM', NULL, 'Lambayeque', NULL, 1, '2020-05-02 11:13:50', '2020-05-02 11:13:50'),
(330, 604, 'LIM', NULL, 'Lima', NULL, 1, '2020-05-02 11:13:50', '2020-05-02 11:13:50'),
(331, 604, 'LOR', NULL, 'Loreto', NULL, 1, '2020-05-02 11:13:50', '2020-05-02 11:13:50'),
(332, 604, 'MDD', NULL, 'Madre de Dios', NULL, 1, '2020-05-02 11:13:50', '2020-05-02 11:13:50'),
(333, 604, 'MOQ', NULL, 'Moquegua', NULL, 1, '2020-05-02 11:13:50', '2020-05-02 11:13:50'),
(334, 604, 'PAS', NULL, 'Pasco', NULL, 1, '2020-05-02 11:13:50', '2020-05-02 11:13:50'),
(335, 604, 'PIU', NULL, 'Piura', NULL, 1, '2020-05-02 11:13:50', '2020-05-02 11:13:50'),
(336, 604, 'PUN', NULL, 'Puno', NULL, 1, '2020-05-02 11:13:51', '2020-05-02 11:13:51'),
(337, 604, 'SAM', NULL, 'San Martín', NULL, 1, '2020-05-02 11:13:51', '2020-05-02 11:13:51'),
(338, 604, 'TAC', NULL, 'Tacna', NULL, 1, '2020-05-02 11:13:51', '2020-05-02 11:13:51'),
(339, 604, 'TUM', NULL, 'Tumbes', NULL, 1, '2020-05-02 11:13:51', '2020-05-02 11:13:51'),
(340, 604, 'UCA', NULL, 'Ucayali', NULL, 1, '2020-05-02 11:13:51', '2020-05-02 11:13:51'),
(341, 764, '37', NULL, 'Amnat Charoen', NULL, 1, '2020-05-02 11:13:51', '2020-05-02 11:13:51'),
(342, 764, '15', NULL, 'Ang Thong', NULL, 1, '2020-05-02 11:13:51', '2020-05-02 11:13:51'),
(343, 764, '38', NULL, 'Bueng Kan', NULL, 1, '2020-05-02 11:13:51', '2020-05-02 11:13:51'),
(344, 764, '31', NULL, 'Buri Ram', NULL, 1, '2020-05-02 11:13:51', '2020-05-02 11:13:51'),
(345, 764, '24', NULL, 'Chachoengsao', NULL, 1, '2020-05-02 11:13:51', '2020-05-02 11:13:51'),
(346, 764, '18', NULL, 'Chai Nat', NULL, 1, '2020-05-02 11:13:51', '2020-05-02 11:13:51'),
(347, 764, '36', NULL, 'Chaiyaphum', NULL, 1, '2020-05-02 11:13:51', '2020-05-02 11:13:51'),
(348, 764, '22', NULL, 'Chanthaburi', NULL, 1, '2020-05-02 11:13:51', '2020-05-02 11:13:51'),
(349, 764, '50', NULL, 'Chiang Mai', NULL, 1, '2020-05-02 11:13:51', '2020-05-02 11:13:51'),
(350, 764, '57', NULL, 'Chiang Rai', NULL, 1, '2020-05-02 11:13:51', '2020-05-02 11:13:51'),
(351, 764, '20', NULL, 'Chon Buri', NULL, 1, '2020-05-02 11:13:51', '2020-05-02 11:13:51'),
(352, 764, '86', NULL, 'Chumphon', NULL, 1, '2020-05-02 11:13:51', '2020-05-02 11:13:51'),
(353, 764, '46', NULL, 'Kalasin', NULL, 1, '2020-05-02 11:13:51', '2020-05-02 11:13:51'),
(354, 764, '62', NULL, 'Kamphaeng Phet', NULL, 1, '2020-05-02 11:13:51', '2020-05-02 11:13:51'),
(355, 764, '71', NULL, 'Kanchanaburi', NULL, 1, '2020-05-02 11:13:51', '2020-05-02 11:13:51'),
(356, 764, '40', NULL, 'Khon Kaen', NULL, 1, '2020-05-02 11:13:51', '2020-05-02 11:13:51'),
(357, 764, '81', NULL, 'Krabi', NULL, 1, '2020-05-02 11:13:52', '2020-05-02 11:13:52'),
(358, 764, '52', NULL, 'Lampang', NULL, 1, '2020-05-02 11:13:52', '2020-05-02 11:13:52'),
(359, 764, '51', NULL, 'Lamphun', NULL, 1, '2020-05-02 11:13:52', '2020-05-02 11:13:52'),
(360, 764, '42', NULL, 'Loei', NULL, 1, '2020-05-02 11:13:52', '2020-05-02 11:13:52'),
(361, 764, '16', NULL, 'Lop Buri', NULL, 1, '2020-05-02 11:13:52', '2020-05-02 11:13:52'),
(362, 764, '58', NULL, 'Mae Hong Son', NULL, 1, '2020-05-02 11:13:52', '2020-05-02 11:13:52'),
(363, 764, '44', NULL, 'Maha Sarakham', NULL, 1, '2020-05-02 11:13:52', '2020-05-02 11:13:52'),
(364, 764, '49', NULL, 'Mukdahan', NULL, 1, '2020-05-02 11:13:52', '2020-05-02 11:13:52'),
(365, 764, '26', NULL, 'Nakhon Nayok', NULL, 1, '2020-05-02 11:13:52', '2020-05-02 11:13:52'),
(366, 764, '73', NULL, 'Nakhon Pathom', NULL, 1, '2020-05-02 11:13:52', '2020-05-02 11:13:52'),
(367, 764, '48', NULL, 'Nakhon Phanom', NULL, 1, '2020-05-02 11:13:52', '2020-05-02 11:13:52'),
(368, 764, '30', NULL, 'Nakhon Ratchasima', NULL, 1, '2020-05-02 11:13:52', '2020-05-02 11:13:52'),
(369, 764, '60', NULL, 'Nakhon Sawan', NULL, 1, '2020-05-02 11:13:52', '2020-05-02 11:13:52'),
(370, 764, '80', NULL, 'Nakhon Si Thammarat', NULL, 1, '2020-05-02 11:13:52', '2020-05-02 11:13:52'),
(371, 764, '55', NULL, 'Nan', NULL, 1, '2020-05-02 11:13:52', '2020-05-02 11:13:52'),
(372, 764, '96', NULL, 'Narathiwat', NULL, 1, '2020-05-02 11:13:52', '2020-05-02 11:13:52'),
(373, 764, '39', NULL, 'Nong Bua Lam Phu', NULL, 1, '2020-05-02 11:13:52', '2020-05-02 11:13:52'),
(374, 764, '43', NULL, 'Nong Khai', NULL, 1, '2020-05-02 11:13:52', '2020-05-02 11:13:52'),
(375, 764, '12', NULL, 'Nonthaburi', NULL, 1, '2020-05-02 11:13:52', '2020-05-02 11:13:52'),
(376, 764, '13', NULL, 'Pathum Thani', NULL, 1, '2020-05-02 11:13:52', '2020-05-02 11:13:52'),
(377, 764, '94', NULL, 'Pattani', NULL, 1, '2020-05-02 11:13:52', '2020-05-02 11:13:52'),
(378, 764, '82', NULL, 'Phangnga', NULL, 1, '2020-05-02 11:13:52', '2020-05-02 11:13:52'),
(379, 764, '93', NULL, 'Phatthalung', NULL, 1, '2020-05-02 11:13:52', '2020-05-02 11:13:52'),
(380, 764, '56', NULL, 'Phayao', NULL, 1, '2020-05-02 11:13:53', '2020-05-02 11:13:53'),
(381, 764, '67', NULL, 'Phetchabun', NULL, 1, '2020-05-02 11:13:53', '2020-05-02 11:13:53'),
(382, 764, '76', NULL, 'Phetchaburi', NULL, 1, '2020-05-02 11:13:53', '2020-05-02 11:13:53'),
(383, 764, '66', NULL, 'Phichit', NULL, 1, '2020-05-02 11:13:53', '2020-05-02 11:13:53'),
(384, 764, '65', NULL, 'Phitsanulok', NULL, 1, '2020-05-02 11:13:53', '2020-05-02 11:13:53'),
(385, 764, '54', NULL, 'Phrae', NULL, 1, '2020-05-02 11:13:53', '2020-05-02 11:13:53'),
(386, 764, '14', NULL, 'Phra Nakhon Si Ayutthaya', NULL, 1, '2020-05-02 11:13:53', '2020-05-02 11:13:53'),
(387, 764, '83', NULL, 'Phuket', NULL, 1, '2020-05-02 11:13:53', '2020-05-02 11:13:53'),
(388, 764, '25', NULL, 'Prachin Buri', NULL, 1, '2020-05-02 11:13:53', '2020-05-02 11:13:53'),
(389, 764, '77', NULL, 'Prachuap Khiri Khan', NULL, 1, '2020-05-02 11:13:53', '2020-05-02 11:13:53'),
(390, 764, '85', NULL, 'Ranong', NULL, 1, '2020-05-02 11:13:53', '2020-05-02 11:13:53'),
(391, 764, '70', NULL, 'Ratchaburi', NULL, 1, '2020-05-02 11:13:53', '2020-05-02 11:13:53'),
(392, 764, '21', NULL, 'Rayong', NULL, 1, '2020-05-02 11:13:53', '2020-05-02 11:13:53'),
(393, 764, '45', NULL, 'Roi Et', NULL, 1, '2020-05-02 11:13:53', '2020-05-02 11:13:53'),
(394, 764, '27', NULL, 'Sa Kaeo', NULL, 1, '2020-05-02 11:13:53', '2020-05-02 11:13:53'),
(395, 764, '47', NULL, 'Sakon Nakhon', NULL, 1, '2020-05-02 11:13:53', '2020-05-02 11:13:53'),
(396, 764, '11', NULL, 'Samut Prakan', NULL, 1, '2020-05-02 11:13:53', '2020-05-02 11:13:53'),
(397, 764, '74', NULL, 'Samut Sakhon', NULL, 1, '2020-05-02 11:13:53', '2020-05-02 11:13:53'),
(398, 764, '75', NULL, 'Samut Songkhram', NULL, 1, '2020-05-02 11:13:53', '2020-05-02 11:13:53'),
(399, 764, '19', NULL, 'Saraburi', NULL, 1, '2020-05-02 11:13:53', '2020-05-02 11:13:53'),
(400, 764, '91', NULL, 'Satun', NULL, 1, '2020-05-02 11:13:53', '2020-05-02 11:13:53'),
(401, 764, '17', NULL, 'Sing Buri', NULL, 1, '2020-05-02 11:13:53', '2020-05-02 11:13:53'),
(402, 764, '33', NULL, 'Si Sa Ket', NULL, 1, '2020-05-02 11:13:53', '2020-05-02 11:13:53'),
(403, 764, '90', NULL, 'Songkhla', NULL, 1, '2020-05-02 11:13:53', '2020-05-02 11:13:53'),
(404, 764, '64', NULL, 'Sukhothai', NULL, 1, '2020-05-02 11:13:53', '2020-05-02 11:13:53'),
(405, 764, '72', NULL, 'Suphan Buri', NULL, 1, '2020-05-02 11:13:53', '2020-05-02 11:13:53'),
(406, 764, '84', NULL, 'Surat Thani', NULL, 1, '2020-05-02 11:13:53', '2020-05-02 11:13:53'),
(407, 764, '32', NULL, 'Surin', NULL, 1, '2020-05-02 11:13:53', '2020-05-02 11:13:53'),
(408, 764, '63', NULL, 'Tak', NULL, 1, '2020-05-02 11:13:54', '2020-05-02 11:13:54'),
(409, 764, '92', NULL, 'Trang', NULL, 1, '2020-05-02 11:13:54', '2020-05-02 11:13:54'),
(410, 764, '23', NULL, 'Trat', NULL, 1, '2020-05-02 11:13:54', '2020-05-02 11:13:54'),
(411, 764, '34', NULL, 'Ubon Ratchathani', NULL, 1, '2020-05-02 11:13:54', '2020-05-02 11:13:54'),
(412, 764, '41', NULL, 'Udon Thani', NULL, 1, '2020-05-02 11:13:54', '2020-05-02 11:13:54'),
(413, 764, '61', NULL, 'Uthai Thani', NULL, 1, '2020-05-02 11:13:54', '2020-05-02 11:13:54'),
(414, 764, '53', NULL, 'Uttaradit', NULL, 1, '2020-05-02 11:13:54', '2020-05-02 11:13:54'),
(415, 764, '95', NULL, 'Yala', NULL, 1, '2020-05-02 11:13:54', '2020-05-02 11:13:54'),
(416, 764, '35', NULL, 'Yasothon', NULL, 1, '2020-05-02 11:13:54', '2020-05-02 11:13:54'),
(417, 840, 'AL', NULL, 'Alabama', NULL, 1, '2020-05-02 11:13:54', '2020-05-02 11:13:54'),
(418, 840, 'AK', NULL, 'Alaska', NULL, 1, '2020-05-02 11:13:54', '2020-05-02 11:13:54'),
(419, 840, 'AS', NULL, 'American Samoa', NULL, 1, '2020-05-02 11:13:54', '2020-05-02 11:13:54'),
(420, 840, 'AZ', NULL, 'Arizona', NULL, 1, '2020-05-02 11:13:54', '2020-05-02 11:13:54'),
(421, 840, 'AR', NULL, 'Arkansas', NULL, 1, '2020-05-02 11:13:54', '2020-05-02 11:13:54'),
(422, 840, 'CA', NULL, 'California', NULL, 1, '2020-05-02 11:13:54', '2020-05-02 11:13:54'),
(423, 840, 'CO', NULL, 'Colorado', NULL, 1, '2020-05-02 11:13:54', '2020-05-02 11:13:54'),
(424, 840, 'CT', NULL, 'Connecticut', NULL, 1, '2020-05-02 11:13:54', '2020-05-02 11:13:54'),
(425, 840, 'DE', NULL, 'Delaware', NULL, 1, '2020-05-02 11:13:54', '2020-05-02 11:13:54'),
(426, 840, 'DC', NULL, 'District Of Columbia', NULL, 1, '2020-05-02 11:13:54', '2020-05-02 11:13:54'),
(427, 840, 'FM', NULL, 'Federated States Of Micronesia', NULL, 1, '2020-05-02 11:13:54', '2020-05-02 11:13:54'),
(428, 840, 'FL', NULL, 'Florida', NULL, 1, '2020-05-02 11:13:54', '2020-05-02 11:13:54'),
(429, 840, 'GA', NULL, 'Georgia', NULL, 1, '2020-05-02 11:13:54', '2020-05-02 11:13:54'),
(430, 840, 'GU', NULL, 'Guam', NULL, 1, '2020-05-02 11:13:55', '2020-05-02 11:13:55'),
(431, 840, 'HI', NULL, 'Hawaii', NULL, 1, '2020-05-02 11:13:55', '2020-05-02 11:13:55'),
(432, 840, 'ID', NULL, 'Idaho', NULL, 1, '2020-05-02 11:13:55', '2020-05-02 11:13:55'),
(433, 840, 'IL', NULL, 'Illinois', NULL, 1, '2020-05-02 11:13:55', '2020-05-02 11:13:55'),
(434, 840, 'IN', NULL, 'Indiana', NULL, 1, '2020-05-02 11:13:55', '2020-05-02 11:13:55'),
(435, 840, 'IA', NULL, 'Iowa', NULL, 1, '2020-05-02 11:13:55', '2020-05-02 11:13:55'),
(436, 840, 'KS', NULL, 'Kansas', NULL, 1, '2020-05-02 11:13:55', '2020-05-02 11:13:55'),
(437, 840, 'KY', NULL, 'Kentucky', NULL, 1, '2020-05-02 11:13:55', '2020-05-02 11:13:55'),
(438, 840, 'LA', NULL, 'Louisiana', NULL, 1, '2020-05-02 11:13:55', '2020-05-02 11:13:55'),
(439, 840, 'ME', NULL, 'Maine', NULL, 1, '2020-05-02 11:13:55', '2020-05-02 11:13:55'),
(440, 840, 'MH', NULL, 'Marshall Islands', NULL, 1, '2020-05-02 11:13:55', '2020-05-02 11:13:55'),
(441, 840, 'MD', NULL, 'Maryland', NULL, 1, '2020-05-02 11:13:55', '2020-05-02 11:13:55'),
(442, 840, 'MA', NULL, 'Massachusetts', NULL, 1, '2020-05-02 11:13:55', '2020-05-02 11:13:55'),
(443, 840, 'MI', NULL, 'Michigan', NULL, 1, '2020-05-02 11:13:55', '2020-05-02 11:13:55'),
(444, 840, 'MN', NULL, 'Minnesota', NULL, 1, '2020-05-02 11:13:56', '2020-05-02 11:13:56'),
(445, 840, 'MS', NULL, 'Mississippi', NULL, 1, '2020-05-02 11:13:56', '2020-05-02 11:13:56'),
(446, 840, 'MO', NULL, 'Missouri', NULL, 1, '2020-05-02 11:13:56', '2020-05-02 11:13:56'),
(447, 840, 'MT', NULL, 'Montana', NULL, 1, '2020-05-02 11:13:56', '2020-05-02 11:13:56'),
(448, 840, 'NE', NULL, 'Nebraska', NULL, 1, '2020-05-02 11:13:56', '2020-05-02 11:13:56'),
(449, 840, 'NV', NULL, 'Nevada', NULL, 1, '2020-05-02 11:13:56', '2020-05-02 11:13:56'),
(450, 840, 'NH', NULL, 'New Hampshire', NULL, 1, '2020-05-02 11:13:56', '2020-05-02 11:13:56'),
(451, 840, 'NJ', NULL, 'New Jersey', NULL, 1, '2020-05-02 11:13:56', '2020-05-02 11:13:56'),
(452, 840, 'NM', NULL, 'New Mexico', NULL, 1, '2020-05-02 11:13:56', '2020-05-02 11:13:56'),
(453, 840, 'NY', NULL, 'New York', NULL, 1, '2020-05-02 11:13:56', '2020-05-02 11:13:56'),
(454, 840, 'NC', NULL, 'North Carolina', NULL, 1, '2020-05-02 11:13:56', '2020-05-02 11:13:56'),
(455, 840, 'ND', NULL, 'North Dakota', NULL, 1, '2020-05-02 11:13:56', '2020-05-02 11:13:56'),
(456, 840, 'MP', NULL, 'Northern Mariana Islands', NULL, 1, '2020-05-02 11:13:56', '2020-05-02 11:13:56'),
(457, 840, 'OH', NULL, 'Ohio', NULL, 1, '2020-05-02 11:13:56', '2020-05-02 11:13:56'),
(458, 840, 'OK', NULL, 'Oklahoma', NULL, 1, '2020-05-02 11:13:56', '2020-05-02 11:13:56'),
(459, 840, 'OR', NULL, 'Oregon', NULL, 1, '2020-05-02 11:13:56', '2020-05-02 11:13:56'),
(460, 840, 'PW', NULL, 'Palau', NULL, 1, '2020-05-02 11:13:56', '2020-05-02 11:13:56'),
(461, 840, 'PA', NULL, 'Pennsylvania', NULL, 1, '2020-05-02 11:13:56', '2020-05-02 11:13:56'),
(462, 840, 'PR', NULL, 'Puerto Rico', NULL, 1, '2020-05-02 11:13:56', '2020-05-02 11:13:56'),
(463, 840, 'RI', NULL, 'Rhode Island', NULL, 1, '2020-05-02 11:13:56', '2020-05-02 11:13:56'),
(464, 840, 'SC', NULL, 'South Carolina', NULL, 1, '2020-05-02 11:13:56', '2020-05-02 11:13:56'),
(465, 840, 'SD', NULL, 'South Dakota', NULL, 1, '2020-05-02 11:13:56', '2020-05-02 11:13:56'),
(466, 840, 'TN', NULL, 'Tennessee', NULL, 1, '2020-05-02 11:13:57', '2020-05-02 11:13:57'),
(467, 840, 'TX', NULL, 'Texas', NULL, 1, '2020-05-02 11:13:57', '2020-05-02 11:13:57'),
(468, 840, 'UT', NULL, 'Utah', NULL, 1, '2020-05-02 11:13:57', '2020-05-02 11:13:57'),
(469, 840, 'VT', NULL, 'Vermont', NULL, 1, '2020-05-02 11:13:57', '2020-05-02 11:13:57'),
(470, 840, 'VI', NULL, 'Virgin Islands', NULL, 1, '2020-05-02 11:13:57', '2020-05-02 11:13:57'),
(471, 840, 'VA', NULL, 'Virginia', NULL, 1, '2020-05-02 11:13:57', '2020-05-02 11:13:57'),
(472, 840, 'WA', NULL, 'Washington', NULL, 1, '2020-05-02 11:13:57', '2020-05-02 11:13:57'),
(473, 840, 'WV', NULL, 'West Virginia', NULL, 1, '2020-05-02 11:13:57', '2020-05-02 11:13:57'),
(474, 840, 'WI', NULL, 'Wisconsin', NULL, 1, '2020-05-02 11:13:57', '2020-05-02 11:13:57'),
(475, 840, 'WY', NULL, 'Wyoming', NULL, 1, '2020-05-02 11:13:57', '2020-05-02 11:13:57');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(10) UNSIGNED NOT NULL,
  `shop_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_person` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_line_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_line_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state_id` int(11) NOT NULL,
  `country_id` int(11) DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brandlogo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `roll_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `roll_id`, `user_id`) VALUES
(1, 'Priya', 'ps7819528@gmail.com', NULL, '$2y$10$01d7/j/YkYqMtjBhpT3rxe/2gOL3jg8vvPmeS1nBB4cDrcH8jzFG6', NULL, '2020-09-18 05:03:14', '2020-09-18 05:03:14', 1, 1),
(2, 'Neha', 'neha@gmail.com', NULL, '$2y$10$En/UF.DDE4Y7jWBWOGut3uiYjbLu.siVCvEdK5jJNg/H2KLB.PImy', 'GAr8EXWgRFEHXDWMdafnawnWe9hukQMIwRaTSYi3ajkQZItHhFaWEqgPxTac', '2020-09-18 05:16:07', '2020-09-18 05:16:07', 3, 3),
(3, 'amit', 'fghjh', NULL, '$2y$10$En/UF.DDE4Y7jWBWOGut3uiYjbLu.siVCvEdK5jJNg/H2KLB.PImy', NULL, '2020-10-03 05:12:02', '2020-10-03 05:12:02', 4, 1),
(4, 'Ashish', 'neerajyaduvanshi383@gmail.com', NULL, '$2y$10$En/UF.DDE4Y7jWBWOGut3uiYjbLu.siVCvEdK5jJNg/H2KLB.PImy', NULL, '2020-10-27 03:57:37', '2020-10-27 03:57:37', 3, 2),
(5, 'hamper', 'neerajyaduvanshioo383@gmail.com', NULL, '$2y$10$m.xGJ.mjlCnz8YYUCI06auaHZYjPYYd8lZFf.GvzEzSqa8JxgmCtC', NULL, '2020-12-02 01:51:07', '2020-12-02 01:51:07', 4, 3),
(6, 'tyuhyt', 'ffdfd@gmail.com', NULL, '$2y$10$fyzDL3y7dANGCxymbI89fu4NspE2dd1dFMwyUHOYvv4ITpPb0zxMy', NULL, '2020-12-03 00:07:47', '2020-12-03 00:07:47', 5, 14),
(7, 'Juhi', 'po@gmail.com', NULL, '$2y$10$NAHB6qvPbB0NbFVvc7/mGex0d0xIyJwh0/LphRC/fjeG78qxvRK2C', NULL, '2021-01-09 01:50:59', '2021-01-09 01:50:59', 5, 15),
(9, 'Juhii', 'pokj@gmail.com', NULL, '$2y$10$pbbDtmzTIkpUmxNaNobmeeNxQLCozCVTtK0EExKHzwMgZDDy3Fl3C', NULL, '2021-01-09 03:44:40', '2021-01-09 03:44:40', 5, 17),
(10, 'manish', 'manish@gmail.com', NULL, '$2y$10$BmhKJrjfIHxE4i66Bz0NpOmtRBoeSU6F2Rz27JDwOzASIY3JWyBym', NULL, '2021-01-22 03:51:04', '2021-01-22 03:51:04', 4, 4),
(11, 'manish', 'test@gmail.com', NULL, '$2y$10$4pb6itXIG.tf36.VfZ3MEeskSwv84fO2LiP1x7.bOt4AFwWoc5yga', NULL, '2021-01-22 04:15:04', '2021-01-22 04:15:04', 3, 3),
(12, 'hyper', 'reqer', NULL, '$2y$10$/588S/tE0P0AIRfs3mpkb.5tO3px7xZ9QCHZpfiWVosXjSVxwfqUa', NULL, '2021-01-22 04:19:36', '2021-01-22 04:19:36', 3, 4),
(13, 'Priya', 'nj@gmail.com', NULL, '$2y$10$dvX.2LmypGaIoUuqgGkJXeyxD1Xn/3mgnhLyE0buEWRAShznEsZ9.', NULL, '2021-01-27 02:33:01', '2021-01-27 02:33:01', 5, 18),
(14, 'Sweta', 'sweta@gmail.com', NULL, '$2y$10$rZAkSjLGld0ywNdEvXLmGeopQmgrGEz4In6R20ujyMr7g45XgOEVa', NULL, '2021-02-04 10:39:16', '2021-02-04 10:39:16', 5, 19),
(15, 'Pankaj', 'pankaj@gmail.com', NULL, '$2y$10$szpHsbUIK0izMyw3ZB3YOuPVkuJcd/9mdp5O8MpAIlFbXk01Az3bu', NULL, '2021-02-05 01:46:20', '2021-02-05 01:46:20', 4, 5),
(16, 'Priya', 'p@gmail.com', NULL, '$2y$10$SuCCo2OS4YFf6HbSBZWaruxt2fEZH7NUgnz7jCWZn.g5CwD.eZIwu', NULL, '2021-02-12 02:03:40', '2021-02-12 02:03:40', 3, 6),
(17, 'Swati', 'swatisingh@gmail.com', NULL, '$2y$10$oRfxzTUBakSPKRrhdnZvK.XRGw/1GvorjHelByPG51ZzQMtahOaZK', NULL, '2021-02-12 03:51:48', '2021-02-12 03:51:48', 3, 7),
(18, 'Bhola', 'admin@gmail.com', NULL, '$2y$10$nFB4fihI9KpkCSlSoemJ2eYjo4AxdPKL0yr35YIfofROOC.ZVM1wy', NULL, '2021-02-18 08:05:35', '2021-02-18 08:05:35', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `variations`
--

CREATE TABLE `variations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `types` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `variations`
--

INSERT INTO `variations` (`id`, `name`, `status`, `types`, `created_at`, `updated_at`) VALUES
(2, 'Size', '1', '1', '2021-01-15 01:44:55', '2021-01-15 01:44:55');

-- --------------------------------------------------------

--
-- Table structure for table `variationscategory`
--

CREATE TABLE `variationscategory` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `variationsid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoryid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `variationscategory`
--

INSERT INTO `variationscategory` (`id`, `variationsid`, `categoryid`, `created_at`, `updated_at`) VALUES
(1, '1', '1', '2021-01-15 01:44:34', '2021-01-15 01:44:34'),
(2, '1', '3', '2021-01-15 01:44:34', '2021-01-15 01:44:34'),
(3, '1', '2', '2021-01-15 01:44:34', '2021-01-15 01:44:34'),
(4, '2', '1', '2021-01-15 01:44:55', '2021-01-15 01:44:55'),
(5, '2', '3', '2021-01-15 01:44:55', '2021-01-15 01:44:55'),
(6, '2', '2', '2021-01-15 01:44:55', '2021-01-15 01:44:55'),
(7, '3', '1', '2021-02-22 05:22:52', '2021-02-22 05:22:52'),
(8, '4', '1', '2021-02-22 06:14:52', '2021-02-22 06:14:52'),
(9, '4', '3', '2021-02-22 06:14:52', '2021-02-22 06:14:52'),
(10, '5', '8', '2021-02-25 07:58:08', '2021-02-25 07:58:08'),
(11, '5', '13', '2021-02-25 07:58:08', '2021-02-25 07:58:08'),
(12, '5', '2', '2021-02-25 07:58:08', '2021-02-25 07:58:08'),
(13, '6', '5', '2021-02-25 23:42:45', '2021-02-25 23:42:45');

-- --------------------------------------------------------

--
-- Table structure for table `variations_attributes`
--

CREATE TABLE `variations_attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `variations_attributes`
--

INSERT INTO `variations_attributes` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Size', '1', '2021-01-15 01:41:29', '2021-01-15 01:41:29'),
(2, 'Color', '1', '2021-01-15 01:41:37', '2021-01-15 01:41:37'),
(4, 'Test', '0', '2021-02-25 07:50:08', '2021-02-25 07:50:08');

-- --------------------------------------------------------

--
-- Table structure for table `variationvalues`
--

CREATE TABLE `variationvalues` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `variationsid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `values` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unitid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `variationvalues`
--

INSERT INTO `variationvalues` (`id`, `variationsid`, `values`, `unitid`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', 'Black', '15', '1', '2021-01-15 01:45:25', '2021-01-15 01:45:25'),
(2, '1', 'Red', '14', '1', '2021-01-15 01:45:35', '2021-01-15 01:45:35'),
(3, '1', 'Green', '16', '1', '2021-01-15 01:45:49', '2021-01-15 01:45:49'),
(4, '2', 'S', '17', '1', '2021-01-15 01:46:20', '2021-01-15 01:46:20'),
(5, '2', 'M', '18', '1', '2021-01-15 01:46:31', '2021-01-15 01:46:31'),
(6, '2', 'XL', '19', '1', '2021-01-15 01:46:47', '2021-01-15 01:46:47'),
(7, '2', 'y', '18', '1', '2021-02-25 07:58:53', '2021-02-25 07:58:53');

-- --------------------------------------------------------

--
-- Table structure for table `warehouses`
--

CREATE TABLE `warehouses` (
  `id` int(10) UNSIGNED NOT NULL,
  `shop_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `incharge` bigint(20) UNSIGNED DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addtowishlist`
--
ALTER TABLE `addtowishlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_to_cart`
--
ALTER TABLE `add_to_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attributesunits`
--
ALTER TABLE `attributesunits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_category_sub_group_id_foreign` (`category_sub_group_id`);

--
-- Indexes for table `category_groups`
--
ALTER TABLE `category_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_groups_slug_unique` (`slug`);

--
-- Indexes for table `category_sub_groups`
--
ALTER TABLE `category_sub_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_sub_groups_slug_unique` (`slug`),
  ADD KEY `category_sub_groups_category_group_id_foreign` (`category_group_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `countries_timezone_id_foreign` (`timezone_id`),
  ADD KEY `countries_currency_id_foreign` (`currency_id`);

--
-- Indexes for table `coupan`
--
ALTER TABLE `coupan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers_address`
--
ALTER TABLE `customers_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gtin_types`
--
ALTER TABLE `gtin_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `gtin_types_name_unique` (`name`);

--
-- Indexes for table `inventories`
--
ALTER TABLE `inventories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `inventories_slug_unique` (`slug`),
  ADD KEY `inventories_product_id_foreign` (`product_id`);

--
-- Indexes for table `inventory_variations`
--
ALTER TABLE `inventory_variations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manish`
--
ALTER TABLE `manish`
  ADD UNIQUE KEY `manish_email_unique` (`email`);

--
-- Indexes for table `manufacturers`
--
ALTER TABLE `manufacturers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `manufacturers_slug_unique` (`slug`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`);

--
-- Indexes for table `products_attribute`
--
ALTER TABLE `products_attribute`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_attribute_slug_unique` (`slug`),
  ADD KEY `products_attribute_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_order`
--
ALTER TABLE `product_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_package`
--
ALTER TABLE `product_package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reward`
--
ALTER TABLE `reward`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `shops_slug_unique` (`slug`),
  ADD UNIQUE KEY `shops_email_unique` (`email`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`),
  ADD KEY `states_country_id_foreign` (`country_id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `variations`
--
ALTER TABLE `variations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `variationscategory`
--
ALTER TABLE `variationscategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `variations_attributes`
--
ALTER TABLE `variations_attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `variationvalues`
--
ALTER TABLE `variationvalues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `warehouses`
--
ALTER TABLE `warehouses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addtowishlist`
--
ALTER TABLE `addtowishlist`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `add_to_cart`
--
ALTER TABLE `add_to_cart`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attributesunits`
--
ALTER TABLE `attributesunits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `category_groups`
--
ALTER TABLE `category_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `category_sub_groups`
--
ALTER TABLE `category_sub_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=895;

--
-- AUTO_INCREMENT for table `coupan`
--
ALTER TABLE `coupan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customers_address`
--
ALTER TABLE `customers_address`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer_order`
--
ALTER TABLE `customer_order`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gtin_types`
--
ALTER TABLE `gtin_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `inventories`
--
ALTER TABLE `inventories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `inventory_variations`
--
ALTER TABLE `inventory_variations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `manufacturers`
--
ALTER TABLE `manufacturers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `products_attribute`
--
ALTER TABLE `products_attribute`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_image`
--
ALTER TABLE `product_image`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_order`
--
ALTER TABLE `product_order`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product_package`
--
ALTER TABLE `product_package`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reward`
--
ALTER TABLE `reward`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=476;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `variations`
--
ALTER TABLE `variations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `variationscategory`
--
ALTER TABLE `variationscategory`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `variations_attributes`
--
ALTER TABLE `variations_attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `variationvalues`
--
ALTER TABLE `variationvalues`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `warehouses`
--
ALTER TABLE `warehouses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_category_sub_group_id_foreign` FOREIGN KEY (`category_sub_group_id`) REFERENCES `category_sub_groups` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `category_sub_groups`
--
ALTER TABLE `category_sub_groups`
  ADD CONSTRAINT `category_sub_groups_category_group_id_foreign` FOREIGN KEY (`category_group_id`) REFERENCES `category_groups` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `inventories`
--
ALTER TABLE `inventories`
  ADD CONSTRAINT `inventories_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products_attribute`
--
ALTER TABLE `products_attribute`
  ADD CONSTRAINT `products_attribute_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `states`
--
ALTER TABLE `states`
  ADD CONSTRAINT `states_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
