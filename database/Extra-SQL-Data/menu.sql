-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for laravel
DROP DATABASE IF EXISTS `laravel`;
CREATE DATABASE IF NOT EXISTS `laravel` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `laravel`;

-- Dumping structure for table laravel.menus
DROP TABLE IF EXISTS `menus`;
CREATE TABLE IF NOT EXISTS `menus` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` int(11) NOT NULL DEFAULT '99',
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.menus: ~11 rows (approximately)
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` (`id`, `user_id`, `name`, `description`, `menu_class`, `menu_icon`, `position`, `meta_title`, `meta_description`, `meta_keywords`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(1, 1, 'Home', 'Homepage', NULL, NULL, 99, 'home', 'home', NULL, NULL, NULL, NULL),
	(2, 1, 'Restaurants', 'Restaurants', NULL, NULL, 99, NULL, NULL, NULL, NULL, '2020-12-31 08:52:30', '2020-12-31 08:52:30'),
	(3, 1, 'Rooms & Suites', 'Rooms & Suites', NULL, NULL, 99, NULL, NULL, NULL, NULL, '2020-12-31 08:53:04', '2020-12-31 08:53:04'),
	(4, 1, 'Meetings & Events', 'Meetings & Events', NULL, NULL, 99, NULL, NULL, NULL, NULL, '2020-12-31 10:35:21', '2020-12-31 10:35:21'),
	(5, 1, 'Wellness', 'Wellness', NULL, NULL, 99, NULL, NULL, NULL, NULL, '2020-12-31 10:35:52', '2020-12-31 10:35:52'),
	(6, 1, 'Recreation', 'Recreation', NULL, NULL, 99, NULL, NULL, NULL, NULL, '2020-12-31 10:39:25', '2020-12-31 10:39:25'),
	(7, 1, 'Special Offers', 'Special Offers', NULL, NULL, 99, NULL, NULL, NULL, NULL, '2020-12-31 10:39:45', '2020-12-31 10:39:45'),
	(8, 1, 'Reservation', 'Reservation', NULL, NULL, 99, 'Reservation', 'Reservation', NULL, NULL, '2020-12-31 13:01:28', '2020-12-31 13:01:28'),
	(9, 1, 'Booking', 'Booking', NULL, NULL, 99, 'Booking', 'Booking', NULL, NULL, '2020-12-31 13:02:11', '2020-12-31 13:02:11'),
	(10, 1, 'Contact Us', 'Contact Us', NULL, NULL, 99, 'Contact Us', 'Contact Us', NULL, NULL, '2020-12-31 13:02:26', '2020-12-31 13:02:26'),
	(11, 1, 'Test page', 'Test page', NULL, NULL, 99, 'Test page', 'Test page', NULL, NULL, '2020-12-31 13:03:11', '2020-12-31 13:03:11');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
