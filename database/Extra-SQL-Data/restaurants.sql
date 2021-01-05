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

-- Dumping structure for table laravel.resturants
CREATE TABLE IF NOT EXISTS `resturants` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `property_label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feature_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `property_list` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery` longtext COLLATE utf8mb4_unicode_ci,
  `rate_in_bdt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rate_in_usd` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.resturants: ~2 rows (approximately)
/*!40000 ALTER TABLE `resturants` DISABLE KEYS */;
INSERT INTO `resturants` (`id`, `name`, `user_id`, `description`, `property_label`, `feature_image`, `property_list`, `gallery`, `rate_in_bdt`, `rate_in_usd`, `created_at`, `updated_at`) VALUES
	(1, 'Test 1 update', 1, 'Test 1 update', 'Test 1 update', '/uploads/feature_images/1609773666.jpg', 'Test 1 update,Test 1 update,Test 1 update', '/uploads/feature_images/160977362432.jpg,/uploads/feature_images/160977362414.jpg,/uploads/feature_images/160977362462.jpg', '2314234 update', '234234 update', '2021-01-04 15:20:24', '2021-01-04 15:21:06');
/*!40000 ALTER TABLE `resturants` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
