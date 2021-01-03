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
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `menu_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` int(11) NOT NULL DEFAULT '99',
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_order` tinyint(4) DEFAULT '1',
  `attachment` text COLLATE utf8mb4_unicode_ci,
  `thumbnail` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.menus: ~11 rows (approximately)
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` (`id`, `user_id`, `name`, `description`, `menu_class`, `menu_icon`, `position`, `meta_title`, `meta_description`, `meta_keywords`, `menu_order`, `attachment`, `thumbnail`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(1, 1, 'Home', '<p>Homepage</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>update</p>\r\n\r\n<p>update</p>', NULL, NULL, 99, 'home update', 'home update', 'update', 1, '/uploads/banner/1609519431.jpg', '/uploads/banner/thumbnail/1609519431.jpg', NULL, NULL, '2021-01-01 17:01:12'),
	(2, 1, 'Restaurants', '<p>Restaurants</p>', NULL, NULL, 99, NULL, NULL, NULL, 1, '/uploads/banner/1609519471.jpg', '/uploads/banner/thumbnail/1609519471.jpg', NULL, '2020-12-31 08:52:30', '2021-01-01 16:44:31'),
	(3, 1, 'Rooms & Suites', '<p>Rooms &amp; Suites</p>', NULL, NULL, 99, NULL, NULL, NULL, 1, '/uploads/banner/1609581760.jpg', '/uploads/banner/thumbnail/1609581760.jpg', NULL, '2020-12-31 08:53:04', '2021-01-02 10:02:40'),
	(4, 1, 'Meetings & Events', '<p>Meetings &amp; Events</p>', NULL, NULL, 99, NULL, NULL, NULL, 1, '/uploads/banner/1609586770.jpg', '/uploads/banner/thumbnail/1609586770.jpg', NULL, '2020-12-31 10:35:21', '2021-01-02 11:26:10'),
	(5, 1, 'Wellness', '<p><img alt="" src="http://localhost:8000/storage/uploads/getlstd-property-photo_1609594779.jpg" style="height:600px; width:900px" /></p>\r\n\r\n<p>Wellness</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Test case executed</p>', NULL, NULL, 99, NULL, NULL, NULL, 1, NULL, NULL, NULL, '2020-12-31 10:35:52', '2021-01-02 13:40:04'),
	(6, 1, 'Recreation', '<p>Recreation</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border="1" cellpadding="1" cellspacing="1" style="width:500px">\r\n	<tbody>\r\n		<tr>\r\n			<td>Image position test</td>\r\n			<td><img alt="" src="http://localhost:8000/storage/uploads/getlstd-property-photo_1609595046.jpg" style="height:267px; width:400px" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Image 2</td>\r\n			<td><img alt="" src="http://localhost:8000/storage/uploads/248307829_1609595078.jpg" style="height:300px; width:400px" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td><img alt="" src="http://localhost:8000/storage/uploads/getlstd-property-photo_1609595413.jpg" style="height:600px; width:900px" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', NULL, NULL, 99, NULL, NULL, NULL, 1, '/uploads/banner/1609595392.jpg', '/uploads/banner/thumbnail/1609595392.jpg', NULL, '2020-12-31 10:39:25', '2021-01-02 13:50:17'),
	(7, 1, 'Special Offers', 'Special Offers', NULL, NULL, 99, NULL, NULL, NULL, 1, NULL, NULL, NULL, '2020-12-31 10:39:45', '2020-12-31 10:39:45'),
	(8, 1, 'Reservation', 'Reservation', NULL, NULL, 99, 'Reservation', 'Reservation', NULL, 1, NULL, NULL, NULL, '2020-12-31 13:01:28', '2020-12-31 13:01:28'),
	(9, 1, 'Booking', '<p>Booking</p>', NULL, NULL, 99, 'Booking', 'Booking', NULL, 2, NULL, NULL, NULL, '2020-12-31 13:02:11', '2021-01-01 16:54:49'),
	(10, 1, 'Contact Us', 'Contact Us', NULL, NULL, 99, 'Contact Us', 'Contact Us', NULL, 1, NULL, NULL, NULL, '2020-12-31 13:02:26', '2020-12-31 13:02:26'),
	(14, 1, 'test case', '<p>test case</p>', NULL, NULL, 99, 'test case', 'test case', NULL, 1, '/uploads/banner/1609515637.jpg', '/uploads/banner/thumbnail/1609515637.jpg', NULL, '2021-01-01 15:40:37', '2021-01-01 15:40:37');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
