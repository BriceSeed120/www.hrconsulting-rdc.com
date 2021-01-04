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
CREATE DATABASE IF NOT EXISTS `laravel` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `laravel`;

-- Dumping structure for table laravel.roomssuits
CREATE TABLE IF NOT EXISTS `roomssuits` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `property_label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feature_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `property_list` text COLLATE utf8mb4_unicode_ci,
  `gallery` longtext COLLATE utf8mb4_unicode_ci,
  `rate_in_bdt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rate_in_usd` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.roomssuits: ~6 rows (approximately)
/*!40000 ALTER TABLE `roomssuits` DISABLE KEYS */;
INSERT INTO `roomssuits` (`id`, `name`, `user_id`, `description`, `property_label`, `feature_image`, `property_list`, `gallery`, `rate_in_bdt`, `rate_in_usd`, `created_at`, `updated_at`) VALUES
	(2, 'Test 3 up', 1, 'tests up', 'tetp', '/uploads/feature_images/1609694232.jpg', 'p,sdfsf', '/uploads/feature_images/160969423272.jpg,/uploads/feature_images/160969423281.jpg', '12222p', '454p', '2021-01-03 15:30:40', '2021-01-03 17:19:59'),
	(3, 'scdsfdsf sd', 1, 'fsfsdf', 'sdfdsfsd', '/uploads/feature_images/1609688003.jpg', NULL, NULL, '54645645', '456456', '2021-01-03 15:33:23', '2021-01-03 15:33:23'),
	(4, 'Price test sc', 1, 'test', 'test property', NULL, NULL, NULL, '45454', '4554', '2021-01-03 16:12:33', '2021-01-03 16:12:33'),
	(5, 'Galalry list', 1, 'Galalry list', 'Galalry list', '/uploads/feature_images/1609690470.jpg', NULL, '/uploads/feature_images/160969047064.jpg,/uploads/feature_images/160969047011.jpg,/uploads/feature_images/160969047046.jpg', '2342', '23423', '2021-01-03 16:14:30', '2021-01-03 16:14:30'),
	(6, 'sdfsdf update', 1, 'sdfsdf update', 'sdf update', '/uploads/feature_images/1609690589.jpg', 'dhaka update,commila update,bandsd update,sdfsd update', '/uploads/feature_images/16096942606.jpg', '345345 update', '345345 update', '2021-01-03 16:16:29', '2021-01-03 17:17:40'),
	(7, 'sdfsdf update', 1, 'sdfsdf update', 'sdfupdate', '/uploads/feature_images/1609693982.jpg', 'dhaka update,bandsd update,add extra 4', '/uploads/feature_images/160969430293.jpg,/uploads/feature_images/160969430226.jpg', '345345update', '345345update', '2021-01-03 17:13:03', '2021-01-03 17:18:45'),
	(8, 'sdfsdf update', 1, 'sdfsdf update', 'sdf update', '/uploads/feature_images/1609694049.jpg', 'dhaka update,commila update,bandsd update,sdfsd update', '', '345345 update', '345345 update', '2021-01-03 17:14:09', '2021-01-03 17:14:09');
/*!40000 ALTER TABLE `roomssuits` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
