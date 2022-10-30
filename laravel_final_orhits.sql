-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 30, 2022 at 05:18 AM
-- Server version: 5.7.33
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_final_orhits`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color_id` bigint(20) UNSIGNED DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `company`, `color_id`, `image`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Lenevo', 'Laptop', 3, '22-10-25-1666717713.jpg', 1, '2022-10-25 11:08:35', '2022-10-25 11:08:35'),
(2, 'Dell', 'Laptop', 3, '22-10-25-1666717831.jpg', 1, '2022-10-25 11:10:32', '2022-10-25 11:10:32');

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE `cards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `qty` double(8,2) NOT NULL DEFAULT '0.00',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cards`
--

INSERT INTO `cards` (`id`, `user_id`, `product_id`, `qty`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1.00, '2022-10-25 12:02:37', '2022-10-25 12:02:37'),
(2, 1, 1, 1.00, '2022-10-25 12:02:49', '2022-10-25 12:02:49'),
(3, 1, 1, 1.00, '2022-10-25 22:58:18', '2022-10-25 22:58:18'),
(4, 6, 2, 1.00, '2022-10-26 11:37:06', '2022-10-26 11:37:06'),
(5, 1, 2, 1.00, '2022-10-26 22:24:47', '2022-10-26 22:24:47');

-- --------------------------------------------------------

--
-- Table structure for table `carousels`
--

CREATE TABLE `carousels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carousels`
--

INSERT INTO `carousels` (`id`, `name`, `is_active`, `deleted_at`, `image`, `created_at`, `updated_at`) VALUES
(1, 'WellCome To Ajob E-Com', 1, NULL, '22-10-27-1666845239.jpg', '2022-10-26 22:34:02', '2022-10-26 22:34:02'),
(2, 'Well Come to Bigest E-comm', 1, NULL, '22-10-27-1666845311.jpg', '2022-10-26 22:35:13', '2022-10-26 22:35:13'),
(3, 'Select Your Own Choice', 1, NULL, '22-10-27-1666845353.jpg', '2022-10-26 22:35:59', '2022-10-26 22:35:59');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `created_at`, `updated_at`, `deleted_at`, `is_active`) VALUES
(1, 'Computers', NULL, '2022-10-25 11:43:57', '2022-10-25 11:45:16', '2022-10-25 11:45:16', 1),
(3, 'Computer', NULL, '2022-10-25 11:45:39', '2022-10-25 11:45:39', NULL, 1),
(4, 'Garments', NULL, '2022-10-25 11:46:10', '2022-10-25 11:46:10', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `name`, `color_code`, `description`, `is_active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Red', '#940000', NULL, 0, '2022-10-24 09:54:31', '2022-10-24 09:54:31', NULL),
(2, 'Black', '#000000', NULL, 1, '2022-10-25 11:06:13', '2022-10-25 11:06:13', NULL),
(3, 'Blue', '#0620a2', NULL, 1, '2022-10-25 11:06:34', '2022-10-25 11:06:34', NULL),
(4, 'Green', '#0c8821', NULL, 1, '2022-10-25 11:06:51', '2022-10-25 11:06:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `color_product`
--

CREATE TABLE `color_product` (
  `color_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `color_product`
--

INSERT INTO `color_product` (`color_id`, `product_id`) VALUES
(2, 1),
(3, 1),
(1, 2),
(2, 2),
(3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `commentable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commentable_id` bigint(20) UNSIGNED NOT NULL,
  `commented_by` bigint(20) UNSIGNED NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `commentable_type`, `commentable_id`, `commented_by`, `body`, `read_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\Product', 2, 1, 'Good Product', NULL, '2022-10-25 23:15:54', '2022-10-25 23:15:54');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka', '2022-10-26 09:10:33', '2022-10-26 09:10:33'),
(2, 'Barishal', '2022-10-26 09:10:33', '2022-10-26 09:10:33'),
(3, 'Khulna', '2022-10-26 09:10:33', '2022-10-26 09:10:33'),
(4, 'Chittagong', '2022-10-26 09:10:33', '2022-10-26 09:10:33');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `imageable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageable_id` bigint(20) UNSIGNED NOT NULL,
  `uploated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `imageable_type`, `imageable_id`, `uploated_by`, `image`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\Brand', 1, 1, '22-10-25-1666717715.jpg', '2022-10-25 11:08:37', '2022-10-25 11:08:37'),
(2, 'App\\Models\\Brand', 2, 1, '22-10-25-1666717832.jpg', '2022-10-25 11:10:33', '2022-10-25 11:10:33'),
(3, 'App\\Models\\Category', 3, 1, '22-10-25-1666719939.jpg', '2022-10-25 11:45:41', '2022-10-25 11:45:41'),
(4, 'App\\Models\\Category', 4, 1, '22-10-25-1666719970.jpg', '2022-10-25 11:46:12', '2022-10-25 11:46:12'),
(5, 'App\\Models\\Product', 1, 1, '22-10-25-1666720025.jpg', '2022-10-25 11:47:08', '2022-10-25 11:47:08'),
(6, 'App\\Models\\Product', 1, 1, '22-10-25-1666720028.jpg', '2022-10-25 11:47:09', '2022-10-25 11:47:09'),
(7, 'App\\Models\\Product', 2, 1, '22-10-25-1666720101.jpg', '2022-10-25 11:48:24', '2022-10-25 11:48:24'),
(8, 'App\\Models\\Product', 2, 1, '22-10-25-1666720104.jpg', '2022-10-25 11:48:25', '2022-10-25 11:48:25'),
(9, 'App\\Models\\Product', 2, 1, '22-10-25-1666720105.jpg', '2022-10-25 11:48:28', '2022-10-25 11:48:28');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_09_26_161652_create_categories_table', 1),
(6, '2022_09_26_171806_create_products_table', 1),
(7, '2022_10_10_162136_alter_categories_table', 1),
(8, '2022_10_10_182505_alter_categories_table', 1),
(9, '2022_10_11_035113_alter_table_products_deleted_at', 1),
(10, '2022_10_11_163035_create_profiles_table', 1),
(11, '2022_10_12_030734_alter_table_products_category', 1),
(12, '2022_10_13_084342_create_colors_table', 1),
(13, '2022_10_13_100353_create_brands_table', 1),
(14, '2022_10_14_145252_create_roles_table', 1),
(15, '2022_10_14_161600_add_role_id_to_users_table', 1),
(16, '2022_10_15_062000_aler_table_products_add_brand_color', 1),
(17, '2022_10_16_192754_create_color_product_table', 1),
(18, '2022_10_17_035145_create_sizes_table', 1),
(19, '2022_10_17_050330_create_product_size_table', 1),
(20, '2022_10_18_150641_create_comments_table', 1),
(21, '2022_10_18_172003_create_notifications_table', 1),
(22, '2022_10_18_195833_create_images_table', 1),
(23, '2022_10_25_165217_create_cards_table', 2),
(24, '2022_10_21_172125_add_distric_id_to_users_table', 3),
(26, '2022_10_25_175558_create_districts_table', 4),
(27, '2022_10_25_213028_alter_district_id_at_table_user', 5),
(28, '2022_10_26_032635_alter_table_deleted_at_colors_table', 5),
(29, '2022_10_26_083529_create_orders_table', 5),
(30, '2022_10_26_083638_create_order_details_table', 5),
(31, '2022_10_27_021420_creat_table_carousels', 6);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('b2c874b6-e2fd-473d-8404-e8e297962f60', 'App\\Notifications\\NewNotification', 'App\\Models\\User', 1, '{\"message\":\"Shanto commented on \",\"action_url\":\"http:\\/\\/localhost:8000\\/products\\/2\"}', NULL, '2022-10-25 23:15:55', '2022-10-25 23:15:55');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `invoice_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `invoice_number`, `shipping_address`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '22-10-27-1666845069sadas', '2', 'Running', '2022-10-26 22:31:09', '2022-10-26 22:31:09'),
(2, 1, '22-10-27-1666848522sadas', '2', 'Running', '2022-10-26 23:28:42', '2022-10-26 23:28:42'),
(3, 1, '22-10-29-1667068865sadas', '2', 'Running', '2022-10-29 12:41:05', '2022-10-29 12:41:05'),
(4, 1, '22-10-30-1667105119sadas', '2', 'Running', '2022-10-29 22:45:19', '2022-10-29 22:45:19'),
(5, 1, '22-10-30-1667105171sadas', '2', 'Running', '2022-10-29 22:46:11', '2022-10-29 22:46:11'),
(6, 1, '22-10-30-1667105261sadas', '2', 'Running', '2022-10-29 22:47:41', '2022-10-29 22:47:41'),
(7, 1, '22-10-30-1667105949sadas', '2', 'Running', '2022-10-29 22:59:09', '2022-10-29 22:59:09');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `product_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_price` double(8,2) NOT NULL,
  `quantity` double(8,2) NOT NULL,
  `total_price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `user_id`, `product_id`, `product_title`, `unit_price`, `quantity`, `total_price`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 'saas', 555753.00, 4.00, 54765.00, '2022-10-26 22:31:09', '2022-10-26 22:31:09'),
(2, 1, 1, 1, 'saas', 555753.00, 4.00, 54765.00, '2022-10-26 22:31:09', '2022-10-26 22:31:09'),
(3, 1, 1, 1, 'saas', 555753.00, 4.00, 54765.00, '2022-10-26 22:31:09', '2022-10-26 22:31:09'),
(4, 1, 1, 2, 'saas', 555753.00, 4.00, 54765.00, '2022-10-26 22:31:09', '2022-10-26 22:31:09'),
(5, 2, 1, 1, 'saas', 555753.00, 4.00, 54765.00, '2022-10-26 23:28:42', '2022-10-26 23:28:42'),
(6, 2, 1, 1, 'saas', 555753.00, 4.00, 54765.00, '2022-10-26 23:28:42', '2022-10-26 23:28:42'),
(7, 2, 1, 1, 'saas', 555753.00, 4.00, 54765.00, '2022-10-26 23:28:42', '2022-10-26 23:28:42'),
(8, 2, 1, 2, 'saas', 555753.00, 4.00, 54765.00, '2022-10-26 23:28:42', '2022-10-26 23:28:42'),
(9, 2, 1, 2, 'saas', 555753.00, 4.00, 54765.00, '2022-10-26 23:28:42', '2022-10-26 23:28:42'),
(10, 3, 1, 1, 'saas', 555753.00, 4.00, 54765.00, '2022-10-29 12:41:05', '2022-10-29 12:41:05'),
(11, 3, 1, 1, 'saas', 555753.00, 4.00, 54765.00, '2022-10-29 12:41:05', '2022-10-29 12:41:05'),
(12, 3, 1, 1, 'saas', 555753.00, 4.00, 54765.00, '2022-10-29 12:41:05', '2022-10-29 12:41:05'),
(13, 3, 1, 2, 'saas', 555753.00, 4.00, 54765.00, '2022-10-29 12:41:05', '2022-10-29 12:41:05'),
(14, 3, 1, 2, 'saas', 555753.00, 4.00, 54765.00, '2022-10-29 12:41:05', '2022-10-29 12:41:05'),
(15, 3, 1, 1, 'saas', 555753.00, 4.00, 54765.00, '2022-10-29 12:41:05', '2022-10-29 12:41:05'),
(16, 4, 1, 1, 'saas', 555753.00, 4.00, 54765.00, '2022-10-29 22:45:19', '2022-10-29 22:45:19'),
(17, 4, 1, 1, 'saas', 555753.00, 4.00, 54765.00, '2022-10-29 22:45:19', '2022-10-29 22:45:19'),
(18, 4, 1, 1, 'saas', 555753.00, 4.00, 54765.00, '2022-10-29 22:45:19', '2022-10-29 22:45:19'),
(19, 4, 1, 2, 'saas', 555753.00, 4.00, 54765.00, '2022-10-29 22:45:19', '2022-10-29 22:45:19'),
(20, 5, 1, 1, 'saas', 555753.00, 4.00, 54765.00, '2022-10-29 22:46:11', '2022-10-29 22:46:11'),
(21, 5, 1, 1, 'saas', 555753.00, 4.00, 54765.00, '2022-10-29 22:46:11', '2022-10-29 22:46:11'),
(22, 5, 1, 1, 'saas', 555753.00, 4.00, 54765.00, '2022-10-29 22:46:11', '2022-10-29 22:46:11'),
(23, 5, 1, 2, 'saas', 555753.00, 4.00, 54765.00, '2022-10-29 22:46:11', '2022-10-29 22:46:11'),
(24, 6, 1, 1, 'saas', 555753.00, 4.00, 54765.00, '2022-10-29 22:47:41', '2022-10-29 22:47:41'),
(25, 6, 1, 1, 'saas', 555753.00, 4.00, 54765.00, '2022-10-29 22:47:41', '2022-10-29 22:47:41'),
(26, 6, 1, 1, 'saas', 555753.00, 4.00, 54765.00, '2022-10-29 22:47:41', '2022-10-29 22:47:41'),
(27, 6, 1, 2, 'saas', 555753.00, 4.00, 54765.00, '2022-10-29 22:47:41', '2022-10-29 22:47:41'),
(28, 7, 1, 1, 'saas', 555753.00, 4.00, 54765.00, '2022-10-29 22:59:09', '2022-10-29 22:59:09'),
(29, 7, 1, 1, 'saas', 555753.00, 4.00, 54765.00, '2022-10-29 22:59:09', '2022-10-29 22:59:09'),
(30, 7, 1, 1, 'saas', 555753.00, 4.00, 54765.00, '2022-10-29 22:59:09', '2022-10-29 22:59:09'),
(31, 7, 1, 2, 'saas', 555753.00, 4.00, 54765.00, '2022-10-29 22:59:09', '2022-10-29 22:59:09');

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `brand_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_alt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `brand_id`, `name`, `description`, `price`, `image`, `tags`, `img_alt`, `is_active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 3, 1, 'Computer', 'Good Product', 5633, NULL, 'gergve', 'bkajfdadsf', 1, '2022-10-25 11:47:05', '2022-10-25 11:47:05', NULL),
(2, 4, 2, 'Garments', 'Good Product', 25000, NULL, 'gergve', 'wef', 1, '2022-10-25 11:48:21', '2022-10-25 11:48:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_size`
--

CREATE TABLE `product_size` (
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `size_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_size`
--

INSERT INTO `product_size` (`product_id`, `size_id`) VALUES
(2, 1),
(1, 2),
(2, 2),
(2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `present_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permanent_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tweeter_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_no` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `biodata` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `present_address`, `permanent_address`, `facebook_url`, `tweeter_url`, `mobile_no`, `biodata`, `created_at`, `updated_at`) VALUES
(1, 1, 'Khulna', NULL, NULL, NULL, NULL, NULL, '2022-10-24 07:55:58', '2022-10-24 07:55:58'),
(2, 2, 'Khulna', NULL, NULL, NULL, NULL, NULL, '2022-10-26 10:44:52', '2022-10-26 10:44:52'),
(3, 3, 'Rajapur', NULL, NULL, NULL, NULL, NULL, '2022-10-26 10:45:51', '2022-10-26 10:45:51'),
(4, 4, 'Badda', NULL, NULL, NULL, NULL, NULL, '2022-10-26 10:53:04', '2022-10-26 10:53:04'),
(5, 5, 'Dhaka', NULL, NULL, NULL, NULL, NULL, '2022-10-26 10:55:51', '2022-10-26 10:55:51'),
(6, 6, 'Noakhali', NULL, NULL, NULL, NULL, NULL, '2022-10-26 10:59:03', '2022-10-26 10:59:03');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2022-10-24 07:10:39', '2022-10-24 07:10:39'),
(2, 'Manager', '2022-10-24 07:10:39', '2022-10-24 07:10:39'),
(3, 'Customer', '2022-10-24 07:10:39', '2022-10-24 07:10:39');

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `title`, `is_active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'XL', 0, NULL, NULL, NULL),
(2, 'L', 0, NULL, NULL, NULL),
(3, 'SM', 0, NULL, NULL, NULL);

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
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `disrtict_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role_id`, `disrtict_id`) VALUES
(1, 'Shanto', 'shantobepary575@gmail.com', NULL, '$2y$10$BWPxXsuUVNJR41jfSCvpBeJgQOE.v8MJe9ECgKbSM1N1yD.Sue.6i', NULL, '2022-10-24 07:55:58', '2022-10-24 07:55:58', 1, 2),
(2, 'Nahid', 'nahid@gmail.com', NULL, '$2y$10$tTV.C4xwK.Hpj3h2VMrQX.ik0lnjs7O75pwPbtJg7TkWNu7.GRqM6', NULL, '2022-10-26 10:44:51', '2022-10-26 10:44:51', 3, NULL),
(3, 'ashik', 'ashik@gmail.com', NULL, '$2y$10$L25XTVHrRB1Y0xO7CjzBg.Uo/q8KmnqBKO2Ja30AQd5SfoWZfv.ES', NULL, '2022-10-26 10:45:51', '2022-10-26 10:45:51', 3, NULL),
(4, 'Shanto Bepary', 'shantobepary717@gmail.com', NULL, '$2y$10$f/IjI.yXRbXI/UfVaReu6ef.Cf1iAZtCvJh5oGsUXRbwvmBWfFiqe', NULL, '2022-10-26 10:53:04', '2022-10-26 10:53:04', 3, NULL),
(5, 'Tanvir', 'tanvir@gmail.com', NULL, '$2y$10$YLltjetlSqoGdgvK/PfqkuctFZj8cMC37ae7w8qY6EkWnHAvgFNMi', NULL, '2022-10-26 10:55:51', '2022-10-26 10:55:51', 3, NULL),
(6, 'Shanto', 'shanto@gmail.basi', NULL, '$2y$10$EyWVVC6mIXQEp3hZeP7cNOZJm5HuIGFTs6QvN2dceea6g6tfJ5fgi', NULL, '2022-10-26 10:59:03', '2022-10-26 10:59:03', 3, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brands_color_id_foreign` (`color_id`);

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cards_user_id_foreign` (`user_id`),
  ADD KEY `cards_product_id_foreign` (`product_id`);

--
-- Indexes for table `carousels`
--
ALTER TABLE `carousels`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `carousels_name_unique` (`name`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `colors_name_unique` (`name`);

--
-- Indexes for table `color_product`
--
ALTER TABLE `color_product`
  ADD PRIMARY KEY (`color_id`,`product_id`),
  ADD KEY `color_product_product_id_foreign` (`product_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_commentable_type_commentable_id_index` (`commentable_type`,`commentable_id`),
  ADD KEY `comments_commented_by_foreign` (`commented_by`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `districts_name_unique` (`name`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_imageable_type_imageable_id_index` (`imageable_type`,`imageable_id`),
  ADD KEY `images_uploated_by_foreign` (`uploated_by`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orders_invoice_number_unique` (`invoice_number`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_order_id_foreign` (`order_id`),
  ADD KEY `order_details_user_id_foreign` (`user_id`),
  ADD KEY `order_details_product_id_foreign` (`product_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_brand_id_foreign` (`brand_id`);

--
-- Indexes for table `product_size`
--
ALTER TABLE `product_size`
  ADD PRIMARY KEY (`product_id`,`size_id`),
  ADD KEY `product_size_size_id_foreign` (`size_id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profiles_user_id_foreign` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sizes_title_unique` (`title`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`),
  ADD KEY `users_disrtict_id_foreign` (`disrtict_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cards`
--
ALTER TABLE `cards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `carousels`
--
ALTER TABLE `carousels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `brands`
--
ALTER TABLE `brands`
  ADD CONSTRAINT `brands_color_id_foreign` FOREIGN KEY (`color_id`) REFERENCES `colors` (`id`);

--
-- Constraints for table `cards`
--
ALTER TABLE `cards`
  ADD CONSTRAINT `cards_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `cards_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `color_product`
--
ALTER TABLE `color_product`
  ADD CONSTRAINT `color_product_color_id_foreign` FOREIGN KEY (`color_id`) REFERENCES `colors` (`id`),
  ADD CONSTRAINT `color_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_commented_by_foreign` FOREIGN KEY (`commented_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_uploated_by_foreign` FOREIGN KEY (`uploated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `order_details_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`),
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `product_size`
--
ALTER TABLE `product_size`
  ADD CONSTRAINT `product_size_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `product_size_size_id_foreign` FOREIGN KEY (`size_id`) REFERENCES `sizes` (`id`);

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_disrtict_id_foreign` FOREIGN KEY (`disrtict_id`) REFERENCES `districts` (`id`),
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
