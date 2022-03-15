/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 10.5.13-MariaDB-cll-lve : Database - u6055102_retribusi
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`u6055102_retribusi` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `u6055102_retribusi`;

/*Table structure for table `balances` */

DROP TABLE IF EXISTS `balances`;

CREATE TABLE `balances` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `staff_id` bigint(20) unsigned DEFAULT NULL,
  `type` enum('in','out') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `balances_staff_id_foreign` (`staff_id`),
  CONSTRAINT `balances_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `balances` */

insert  into `balances`(`id`,`staff_id`,`type`,`amount`,`notes`,`created_at`,`updated_at`,`deleted_at`) values 
(2,3,'in',65000,NULL,'2021-12-26 15:24:39','2021-12-26 15:24:39',NULL),
(3,3,'in',15000,NULL,'2021-12-28 16:00:07','2021-12-28 16:00:07',NULL),
(4,3,'in',25000,NULL,'2021-12-28 16:05:39','2021-12-28 16:05:39',NULL),
(5,3,'in',20000,NULL,'2021-12-29 00:24:37','2021-12-29 00:24:37',NULL),
(6,3,'in',10000,NULL,'2021-12-29 00:27:02','2021-12-29 00:27:02',NULL),
(7,3,'in',20000,'Retribusi nubek coffee','2021-12-29 23:39:00','2021-12-29 23:39:00',NULL),
(8,3,'out',155000,NULL,'2021-12-30 00:03:57','2021-12-30 00:03:57',NULL),
(9,3,'in',10000,'Retribusi nubek coffee','2021-12-30 00:06:03','2021-12-30 00:06:03',NULL),
(10,3,'in',25000,'Retribusi Kopi wisma','2021-12-30 15:31:33','2021-12-30 15:31:33',NULL),
(11,3,'in',25000,'Retribusi Kopi wisma','2021-12-30 15:34:10','2021-12-30 15:34:10',NULL);

/*Table structure for table `banjars` */

DROP TABLE IF EXISTS `banjars`;

CREATE TABLE `banjars` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `banjars` */

insert  into `banjars`(`id`,`name`,`address`,`created_at`,`updated_at`,`deleted_at`) values 
(1,'Schambergertown','444 Parker Wells\nAlisonberg, WI 82413-7997','2021-11-27 08:40:17','2021-11-27 08:40:17',NULL),
(2,'Port Darlenetown','659 Princess Via\nWest Maeganside, WY 24425','2021-11-27 08:40:17','2021-11-27 08:40:17',NULL),
(3,'Framiton','6129 Bergstrom Trace\nPort Astrid, NV 09275-8164','2021-11-27 08:40:17','2021-11-27 08:40:17',NULL),
(4,'Port Braden','570 West Run Suite 173\nEast Princess, WY 67919-6700','2021-11-27 08:40:17','2021-11-27 08:40:17',NULL),
(5,'New Yasmin','1089 Conn Green\nGiovannymouth, OR 82126-0176','2021-11-27 08:40:17','2021-11-27 08:40:17',NULL),
(6,'Kochbury','3909 Frami Walks\nLake Demarcoville, MS 62525','2021-11-27 08:40:17','2021-11-27 08:40:17',NULL),
(7,'West Maiabury','375 Hazle Bypass Apt. 532\nRusselfurt, WV 06204-1368','2021-11-27 08:40:17','2021-11-27 08:40:17',NULL),
(8,'Bridgetfort','531 Hills Junction\nSimonismouth, FL 31482','2021-11-27 08:40:17','2021-11-27 08:40:17',NULL),
(9,'West Maybellside','2514 Sydni Course\nLake Geraldineland, CT 67506-6788','2021-11-27 08:40:17','2021-11-27 08:40:17',NULL),
(10,'Laynehaven','8721 Aufderhar Burg Apt. 119\nWest Ahmadstad, MT 15921-1611','2021-11-27 08:40:17','2021-11-27 08:40:17',NULL);

/*Table structure for table `companies` */

DROP TABLE IF EXISTS `companies`;

CREATE TABLE `companies` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `subscription_id` bigint(20) unsigned DEFAULT NULL,
  `tempekan_id` bigint(20) unsigned DEFAULT NULL,
  `company_type_id` bigint(20) unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photos` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `documents` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('verified','wait_verified','blocked') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `verified_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `companies_user_id_foreign` (`user_id`),
  KEY `companies_tempekan_id_foreign` (`tempekan_id`),
  KEY `companies_subscription_id_foreign` (`company_type_id`),
  KEY `subscription_id` (`subscription_id`),
  CONSTRAINT `companies_company_type_id_foreign` FOREIGN KEY (`company_type_id`) REFERENCES `company_types` (`id`) ON DELETE CASCADE,
  CONSTRAINT `companies_ibfk_1` FOREIGN KEY (`subscription_id`) REFERENCES `subscriptions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `companies_tempekan_id_foreign` FOREIGN KEY (`tempekan_id`) REFERENCES `tempekans` (`id`) ON DELETE CASCADE,
  CONSTRAINT `companies_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `companies` */

insert  into `companies`(`id`,`user_id`,`subscription_id`,`tempekan_id`,`company_type_id`,`name`,`latitude`,`longitude`,`address`,`photos`,`documents`,`status`,`created_at`,`updated_at`,`deleted_at`,`verified_at`) values 
(1,13,NULL,1,1,'Finitree',-8.6358655,115.176299,'Jalan Sedap Malam','http://placekitten.com/200/300',NULL,'wait_verified','2021-11-28 11:14:03','2021-11-28 11:14:03',NULL,NULL),
(2,14,NULL,1,1,'Kedai Saya',-8.6358655,115.176299,'Jalan SKelan','http://placekitten.com/200/300','http://placekitten.com/100/300','wait_verified','2021-11-28 11:17:28','2021-11-28 11:17:28',NULL,NULL),
(3,15,NULL,1,1,'Kedai Kami',-8.6358655,115.176299,'Jalan Nangka','http://placekitten.com/200/300','http://placekitten.com/100/300','wait_verified','2021-11-28 11:37:48','2021-11-28 11:37:48',NULL,NULL),
(4,4,NULL,1,NULL,'Unud Jaya Teknik',-8.6358655,115.176299,'Jalan Sudirman','http://placekitten.com/200/300',NULL,'wait_verified','2021-12-06 13:42:48','2021-12-06 13:42:48',NULL,NULL),
(5,5,NULL,1,NULL,'TI Udayana PT',-8.6358655,115.176299,'Jalan Sudirman','http://placekitten.com/200/300',NULL,'wait_verified','2021-12-06 14:07:08','2021-12-06 14:07:08',NULL,NULL),
(6,5,NULL,1,NULL,'TI Udayana',-8.6358655,115.176299,'Jalan Sudirman','http://placekitten.com/200/300',NULL,'wait_verified','2021-12-06 14:33:04','2021-12-06 14:33:04',NULL,NULL),
(7,6,NULL,2,2,'PT. Gojek Update',-8.6358655,115.176299,'Jalan Sudirman Update','http://placekitten.com/200/300',NULL,'wait_verified','2021-12-06 14:35:49','2021-12-06 14:41:12',NULL,NULL),
(8,20,NULL,NULL,NULL,'Kedai Kami 2',-8.6358655,115.176299,'Jalan Nangka','http://placekitten.com/200/300','http://placekitten.com/100/300','wait_verified','2021-12-06 16:22:29','2021-12-06 16:22:29',NULL,NULL),
(9,21,1,NULL,NULL,'Kedai Kami 2',-8.6358655,115.176299,'Jalan Nangka','http://placekitten.com/200/300','http://placekitten.com/100/300','wait_verified','2021-12-06 16:41:40','2021-12-06 16:41:40',NULL,NULL),
(10,24,1,1,NULL,'Kedai Kami',-8.6358655,115.176299,'Jalan Nangka','http://placekitten.com/200/300','http://placekitten.com/100/300','verified','2021-12-07 00:58:52','2021-12-31 16:56:52',NULL,NULL),
(11,25,1,3,NULL,'Widi',-8.6358655,115.176299,'Jalan Sedap','http://placekitten.com/200/300','http://placekitten.com/100/300','verified','2021-12-07 01:57:02','2021-12-31 16:56:44',NULL,NULL),
(12,26,1,NULL,NULL,'Widi',-8.6358655,115.176299,'Jalan Sedap','http://placekitten.com/200/300','http://placekitten.com/100/300','wait_verified','2021-12-07 10:15:27','2021-12-07 10:15:27',NULL,NULL),
(13,27,1,NULL,1,'Widi',-8.6358655,115.176299,'Jalan Sedap','http://placekitten.com/200/300','http://placekitten.com/100/300','wait_verified','2021-12-07 10:16:32','2021-12-07 10:16:32',NULL,NULL),
(14,28,1,NULL,1,'Finitree',-8.6358655,115.176299,'Jalan Sedap Malam','http://placekitten.com/200/300','http://placekitten.com/100/300','wait_verified','2021-12-07 10:20:26','2021-12-07 10:20:26',NULL,NULL),
(15,30,1,NULL,1,'Finitree',-8.6358655,115.176299,'Jalan Sedap Malam','http://placekitten.com/200/300','http://placekitten.com/100/300','wait_verified','2021-12-07 10:22:14','2021-12-07 10:22:14',NULL,NULL),
(16,28,2,NULL,1,'Starup1',-8.6358655,115.176299,'Starup1Starup1Starup1','https://res.cloudinary.com/retribusi/image/upload/v1639376915/gbt7uo1aj3ryokw3ldvq.jpg','https://res.cloudinary.com/retribusi/image/upload/v1639376982/ew17onnpmh8v3vgvonvj.pdf','wait_verified','2021-12-07 10:48:19','2021-12-13 06:34:27',NULL,NULL),
(17,31,1,NULL,2,'Finitree',-8.6358655,115.176299,'Jalan Sedap Malam','https://res.cloudinary.com/retribusi/image/upload/v1640709896/vek3m8qwyxrwyjw3w1ca.jpg','https://res.cloudinary.com/retribusi/image/upload/v1640709916/flnsoyxkjayylrvf6519.pdf','wait_verified','2021-12-07 14:08:06','2021-12-29 00:45:19',NULL,NULL),
(18,31,2,1,1,'Startup Coffee',-8.6358655,115.176299,'Jalan Sedap Malam Gang Melati Nomor 15','https://res.cloudinary.com/retribusi/image/upload/v1639376915/gbt7uo1aj3ryokw3ldvq.jpg','https://res.cloudinary.com/retribusi/image/upload/v1639377562/qwzvrfsk6fym4r3hqqno.pdf','blocked','2021-12-09 14:10:45','2021-12-13 06:39:26',NULL,NULL),
(19,33,1,NULL,1,'nama usaha',-8.6561496,115.2499702,'Gg. Titibatu No.1 B, Sumerta Kelod, Kec. Denpasar Tim., Kota Denpasar, Bali 80237, Indonesia','https://res.cloudinary.com/retribusi/image/upload/v1639199253/i9v9vmjtf9q0u5pxjz7a.jpg',NULL,'wait_verified','2021-12-11 05:07:50','2021-12-11 05:07:50',NULL,'2021-12-11 05:19:34'),
(20,34,1,1,1,'delibali',-8.6561499,115.2499704,'Gg. Titibatu No.1 B, Sumerta Kelod, Kec. Denpasar Tim., Kota Denpasar, Bali 80237, Indonesia','https://res.cloudinary.com/retribusi/image/upload/v1639199966/aihqw2gai8hihnytnsgo.jpg',NULL,'verified','2021-12-11 05:19:34','2022-01-01 22:32:53',NULL,'2021-12-31 22:32:53'),
(21,31,1,1,1,'nubek coffee',-8.6561497,115.2499699,'Gg. Titibatu No.1 B, Sumerta Kelod, Kec. Denpasar Tim., Kota Denpasar, Bali 80237, Indonesia','https://res.cloudinary.com/retribusi/image/upload/v1640106874/cea1tpfq6shjt0dvk9fy.jpg','https://res.cloudinary.com/retribusi/image/upload/v1639462761/dnc5txbpripr5uvcuac6.pdf','verified','2021-12-14 06:19:34','2021-12-21 17:14:38',NULL,'2021-12-14 06:19:34'),
(22,31,2,NULL,1,'appmu',-8.6557162553112,115.25022547692,'Jl. Sedap Malam Gg. Titibatu No.5, Kesiman, Kec. Denpasar Tim., Kota Denpasar, Bali 80237, Indonesia','https://res.cloudinary.com/retribusi/image/upload/v1639463608/jdibtsaxdmkpr2b5w7pd.jpg','https://res.cloudinary.com/retribusi/image/upload/v1639463634/sxhro3spjyzgw2dixrvr.pdf','verified','2021-12-14 06:33:58','2021-12-14 06:33:58',NULL,'2021-12-14 06:33:58'),
(23,35,1,1,1,'Kopi wisma',-8.6539595264638,115.18592085689,'Gg. Merpati No.1x, Padangsambian Klod, Kec. Denpasar Bar., Kota Denpasar, Bali 80118, Indonesia','https://res.cloudinary.com/retribusi/image/upload/v1640350172/gnphq3nrozpzl7dompbb.jpg',NULL,'verified','2021-12-24 12:53:45','2021-12-24 12:53:45',NULL,'2021-12-24 19:54:45'),
(24,35,1,NULL,2,'Ayam Krispy wisma',-8.6552730963733,115.18679123372,'85VP+VQJ, Padangsambian, West Denpasar, Denpasar City, Bali 80118, Indonesia','https://res.cloudinary.com/retribusi/image/upload/v1640350921/oruafplmckfc2fuuu0m9.jpg',NULL,'wait_verified','2021-12-24 13:02:44','2021-12-24 13:41:24',NULL,NULL),
(25,36,1,1,1,'nama usaha',-8.656181,115.2500363,'Gg. Titibatu No.1 B, Sumerta Kelod, Kec. Denpasar Tim., Kota Denpasar, Bali 80237, Indonesia','https://res.cloudinary.com/retribusi/image/upload/v1640853423/em1kjumxxucm4q3jj87r.jpg',NULL,'verified','2021-12-30 16:37:37','2021-12-31 15:34:30',NULL,NULL),
(26,39,1,NULL,2,'wisma coffe',-8.6544328496847,115.18508870155,'Padang Griya VI No.14, Padangsambian, Kec. Denpasar Bar., Kota Denpasar, Bali 80118, Indonesia','https://res.cloudinary.com/retribusi/image/upload/v1645098423/hew59c6anzmjiiy52zuh.jpg',NULL,'wait_verified','2022-02-17 19:53:47','2022-02-17 19:53:47',NULL,NULL),
(27,39,1,1,3,'wisma samsung',-8.6539760994157,115.18628664315,'Jl. Tangkuban Perahu No.27, Padangsambian, Kec. Denpasar Bar., Kota Denpasar, Bali 80118, Indonesia','https://res.cloudinary.com/retribusi/image/upload/v1645099198/uarmzuctlktz5imrsld5.jpg',NULL,'verified','2022-02-17 20:01:22','2022-02-17 22:34:56',NULL,'2022-02-17 22:34:56');

/*Table structure for table `company_scales` */

DROP TABLE IF EXISTS `company_scales`;

CREATE TABLE `company_scales` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `scale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `company_scales` */

insert  into `company_scales`(`id`,`scale`,`created_at`,`updated_at`,`deleted_at`) values 
(1,'Kecil','2021-11-28 18:58:45','2021-11-28 18:58:48',NULL),
(2,'Menengah','2021-11-28 18:58:50','2021-11-28 18:58:52',NULL),
(3,'Besar','2021-11-28 18:58:54','2021-11-28 18:58:56',NULL);

/*Table structure for table `company_types` */

DROP TABLE IF EXISTS `company_types`;

CREATE TABLE `company_types` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `company_types` */

insert  into `company_types`(`id`,`type`,`created_at`,`updated_at`,`deleted_at`) values 
(1,'Mini Market','2021-11-30 00:06:06','2021-11-30 00:06:09',NULL),
(2,'Rumah Makan','2021-11-30 00:06:23','2021-11-30 00:06:25',NULL),
(3,'Elektronik','2021-11-30 00:06:38','2021-11-30 00:06:40',NULL);

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2019_08_19_000000_create_failed_jobs_table',1),
(4,'2019_12_14_000001_create_personal_access_tokens_table',1),
(5,'2021_11_27_064428_create_banjars_table',1),
(6,'2021_11_27_064637_create_company_types_table',1),
(7,'2021_11_27_064837_create_subscription_types_table',1),
(8,'2021_11_27_065047_create_company_scales_table',1),
(9,'2021_11_27_065123_create_tempekans_table',1),
(10,'2021_11_27_065312_create_penalties_table',1),
(11,'2021_11_27_065448_create_subscriptions_table',1),
(12,'2021_11_27_065541_create_companies_table',1),
(13,'2021_11_27_065630_create_staff_table',1),
(14,'2021_11_27_065807_create_transactions_table',1),
(15,'2021_11_27_065927_create_transaction_details_table',1),
(16,'2021_11_27_070113_create_balances_table',1),
(17,'2016_06_01_000001_create_oauth_auth_codes_table',2),
(18,'2016_06_01_000002_create_oauth_access_tokens_table',2),
(19,'2016_06_01_000003_create_oauth_refresh_tokens_table',2),
(20,'2016_06_01_000004_create_oauth_clients_table',2),
(21,'2016_06_01_000005_create_oauth_personal_access_clients_table',2);

/*Table structure for table `oauth_access_tokens` */

DROP TABLE IF EXISTS `oauth_access_tokens`;

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `client_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_access_tokens_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `oauth_access_tokens` */

insert  into `oauth_access_tokens`(`id`,`user_id`,`client_id`,`name`,`scopes`,`revoked`,`created_at`,`updated_at`,`expires_at`) values 
('0026930b200db1da35f73a4f0d1662e66dadaad1d0fcb7cf0f8a361ead34e182aabb71457d1e6707',31,3,'authToken','[]',0,'2022-01-10 13:14:01','2022-01-10 13:14:01','2023-01-10 13:14:01'),
('02568c83cc7f9f45909ef5f75831d14064aef02cf7125f2f5fe73ac773b4bfabe2468b4485198321',31,3,'authToken','[]',0,'2022-01-10 14:17:45','2022-01-10 14:17:45','2023-01-10 14:17:45'),
('03aeae7c947f5b7739a4c112652b953daebc0861b86ed895e630e627db63b70bde6b21b27c5428f7',31,3,'authToken','[]',0,'2022-01-07 16:00:56','2022-01-07 16:00:56','2023-01-07 16:00:56'),
('048c60c21a619169f150e386b5fe4bbcfafc1f8840e9a267da131fc0d2fa6b9d6b788a4ae69b6877',12,3,'authToken','[]',0,'2021-12-26 15:13:37','2021-12-26 15:13:37','2022-12-26 15:13:37'),
('07c00e78aa355f811338325b10069a24d96dbc24618ae4237f20f972408c2fb9049b006604047bf4',35,3,'authToken','[]',0,'2021-12-24 14:07:13','2021-12-24 14:07:13','2022-12-24 14:07:13'),
('0843d830c7cb91ea5ba4cebbd64bab1cee3f3e34339c966f69152b7cd568c56a63af43db40d4425b',31,3,'authToken','[]',0,'2022-01-10 13:47:17','2022-01-10 13:47:17','2023-01-10 13:47:17'),
('093e7e3126184a2a153fa0307741a0c8202c19084b8aa1328f6e51dad8c61cb48048bc13a3fe333e',33,3,'authToken','[]',0,'2022-01-25 20:30:31','2022-01-25 20:30:31','2023-01-25 20:30:31'),
('0be2a9a83db78d605a34d641f637acefb878dc46a459f539392e5d94c40b19cece8b4e6b65faf4e7',31,3,'authToken','[]',0,'2022-01-10 12:02:42','2022-01-10 12:02:42','2023-01-10 12:02:42'),
('0ce677bf7feb93797372a87f4cb4c137acb14c0e529b9874f409b6122665b5102f42e69a93d9564f',31,3,'authToken','[]',0,'2022-01-05 16:51:08','2022-01-05 16:51:08','2023-01-05 16:51:08'),
('0e9fd55c1b11ecbd05e83fa3b22457919ebedb73052c39e00999769d419cbcda796808c4af068d43',31,3,'authToken','[]',0,'2021-12-28 14:08:56','2021-12-28 14:08:56','2022-12-28 14:08:56'),
('116a42d3eca4b8db6e8ed8932c7daad120c0a566e475cf0b7554e91f469610cad643ab7754621970',32,3,'authToken','[]',0,'2021-12-11 05:03:31','2021-12-11 05:03:31','2022-12-11 05:03:31'),
('12cb627fb73cd2bfbc9e87263f917bb1c26885f43b4595291826070e4096fad39b2e73e3c99121ca',31,3,'authToken','[]',0,'2022-01-07 16:10:33','2022-01-07 16:10:33','2023-01-07 16:10:33'),
('15e79782be739f852b72ae8cb4e156e8dda41a07012820cd3cf2064a284d171efd7856e0e684c517',31,3,'authToken','[]',0,'2022-01-10 13:27:32','2022-01-10 13:27:32','2023-01-10 13:27:32'),
('182515cf08d616eae404d57fb7d0e220fc68851788cd06fc6fe1b1bb3119f3bb07dba3861d070746',31,3,'authToken','[]',0,'2022-01-10 13:15:35','2022-01-10 13:15:35','2023-01-10 13:15:35'),
('1a3078036c96bbefa89be9b33e377e7eefc3f68881eb641fb35bb3e248bb7c70833be07ceb67687e',31,3,'authToken','[]',0,'2022-01-07 16:00:22','2022-01-07 16:00:22','2023-01-07 16:00:22'),
('1b0c707091f5020353de9cd02f66e60c1e04e135e186affddef32ff17e9343621cfed13cfb571857',31,3,'authToken','[]',0,'2022-01-25 20:39:35','2022-01-25 20:39:35','2023-01-25 20:39:35'),
('1bd6aabd5ad9811d59b138c73cb84ca2d8f775099491ee290b1144a004a1cb291ca64deb32b863b3',31,3,'authToken','[]',0,'2022-01-10 13:15:10','2022-01-10 13:15:10','2023-01-10 13:15:10'),
('1d1a014b80611d832c2d4fe1b16ccdf405080350007ae8fb860efbf6f6538be969cafe644a379a6c',31,3,'authToken','[]',0,'2022-01-07 17:33:04','2022-01-07 17:33:04','2023-01-07 17:33:04'),
('20792ed64729e45cabbd9865284732fa2f3de7bd0966edf40b2e13fce28d13d09b20e0eb648381df',31,3,'authToken','[]',0,'2022-01-25 22:21:01','2022-01-25 22:21:01','2023-01-25 22:21:01'),
('22e8b4e0f091a00347ea43e3ad9d3c3323db6bd27a0221f404e4e768c24a5f10abedd7e254c846e5',31,3,'authToken','[]',0,'2021-12-24 12:41:17','2021-12-24 12:41:17','2022-12-24 12:41:17'),
('233a18bea42e035294c37625269cba05c94898b6701422747a439fa0b60cf2d66abf935b92199aec',31,3,'authToken','[]',0,'2022-01-07 16:18:43','2022-01-07 16:18:43','2023-01-07 16:18:43'),
('27022131f3a43e0d12a4f910ae6bec346a4cecc4f5c2164f6029f1e11bd16a38ed6878f94987af8e',31,3,'authToken','[]',0,'2022-01-10 14:18:08','2022-01-10 14:18:08','2023-01-10 14:18:08'),
('2f1ba91164fda8e1a28fc2df4bed60933628c4824f5814e6a7680f8210747bc4d9cc14fd8dbee020',17,3,'authToken','[]',0,'2021-12-06 16:19:32','2021-12-06 16:19:32','2022-12-06 16:19:32'),
('2f9b4b693cd7ba41da5f8f9457a5cc89fb51b27a55cb4b4aa672117bc7624fd1b9f5fb84e47406a1',17,3,'authToken','[]',0,'2021-12-06 15:03:29','2021-12-06 15:03:29','2022-12-06 15:03:29'),
('3000015b7c634a947b64baccf84473ca6d08c2d0c8de15f8edb66efb5f62bbbc49a8c9845a76a3ea',12,3,'authToken','[]',0,'2022-02-17 19:35:32','2022-02-17 19:35:32','2023-02-17 19:35:32'),
('3352836af3a71b6cc06268c60c234e88dcc9cae89a51cc5015863f3d80b0343fd96c13f3fae6fb82',31,3,'authToken','[]',0,'2022-01-25 21:33:43','2022-01-25 21:33:43','2023-01-25 21:33:43'),
('3739a1f77f76d9d01124f3c6cf4dce85f000f52991f6b97122097c31c69c4169f3c7e77624ce5ddf',31,3,'authToken','[]',0,'2022-01-07 16:06:57','2022-01-07 16:06:57','2023-01-07 16:06:57'),
('3a37b73ec548e6f761a0c7a3bfda366e92082b6ea607f2f32644f9664783fbd4ef039b9f7d6f2867',31,3,'authToken','[]',0,'2022-01-25 23:11:07','2022-01-25 23:11:07','2023-01-25 23:11:07'),
('3c7ece9c0435cf7c55fe22ba1e618ff360cddd3c372b5e28e23be4491d709e0cddd02fd91bd27edf',31,3,'authToken','[]',0,'2022-01-23 22:58:19','2022-01-23 22:58:19','2023-01-23 22:58:19'),
('3cc69099d2e523dd9d1ac92c846a599824da4d02d6f393d01754150f0520fcc72483e147a7851795',31,3,'authToken','[]',0,'2022-01-25 22:21:12','2022-01-25 22:21:12','2023-01-25 22:21:12'),
('3d6086fd43629ef7bfc8afc79f7e45dd93d767434baab7737eb2acb8dbcc5af5d31e5bd855be69ab',31,3,'authToken','[]',0,'2022-01-07 15:55:06','2022-01-07 15:55:06','2023-01-07 15:55:06'),
('3d9e123cdc0b6e0984a8d3251dec5973c47383d4a9af4ada03b82234059972be6b28dcf81aa49f58',31,3,'authToken','[]',0,'2022-01-25 22:21:46','2022-01-25 22:21:46','2023-01-25 22:21:46'),
('3db1c0990adc5ed1064ad328b596fa4fb483df2cee6d5e519c87ee94c114d736e87cc8b4f5387bfa',31,3,'authToken','[]',0,'2022-01-25 21:38:36','2022-01-25 21:38:36','2023-01-25 21:38:36'),
('3dd83218a89d313ffd9a17ee10f77056b0ecc2677cafd2cdc548a07bc94d132377e77dfe6bb475a8',12,3,'authToken','[]',0,'2021-12-30 00:48:11','2021-12-30 00:48:11','2022-12-30 00:48:11'),
('3ddb62bdd9ef877611dc2d238e1a4419744e58b5e6c7888b229a3b717309458ab9538a3f819e4826',37,3,'authToken','[]',0,'2022-01-05 17:04:27','2022-01-05 17:04:27','2023-01-05 17:04:27'),
('40f6492875d11fab1b9e8de98242755d84e6305ded47bfdf120e3b77b7a89f768da326a1c9eba592',31,3,'authToken','[]',0,'2022-01-25 22:22:17','2022-01-25 22:22:17','2023-01-25 22:22:17'),
('45df6db56e2adad35ce8a5e9cf9ac986b136be23ce6a821dbdeec98ccbdea9408b416672024623ee',31,3,'authToken','[]',0,'2022-01-25 22:24:46','2022-01-25 22:24:46','2023-01-25 22:24:46'),
('478f56bb529e963600f8ec8b6cf96204eb5a3a9454c39cecdbc74aa54ff42785606d6a352c2ddeac',31,3,'authToken','[]',0,'2022-01-07 17:36:06','2022-01-07 17:36:06','2023-01-07 17:36:06'),
('47a0b929510c2d00c0577d182bc469a1350c937773724691d6acd96db64bc5801402fafdf2048309',28,3,'authToken','[]',0,'2021-12-07 10:22:37','2021-12-07 10:22:37','2022-12-07 10:22:37'),
('47babffc76ed16eeccd32b2d7074813bf07c1001148a3d7c7d323324ebb8823761e02bd9b1663c07',31,3,'authToken','[]',0,'2021-12-19 13:52:56','2021-12-19 13:52:56','2022-12-19 13:52:56'),
('4c8604b717cb21cec34816469cefad9333aa857ba1e072415e845e0e2c7d17fd04a558943824c699',31,3,'authToken','[]',0,'2022-01-07 16:00:47','2022-01-07 16:00:47','2023-01-07 16:00:47'),
('4e59c2518285e08ed4530a8f0f8334070d0170e3f8783debd28438075a9dd84c0473d4d42cf98c66',17,3,'authToken','[]',0,'2021-12-02 15:52:40','2021-12-02 15:52:40','2022-12-02 15:52:40'),
('4e7e9db9452aea479e20d34af4098a507a523d75d169d63716dddfe8799cb4343a01f5ab45e7c67e',31,3,'authToken','[]',0,'2022-01-25 22:22:40','2022-01-25 22:22:40','2023-01-25 22:22:40'),
('4ff816f8b17b833344322ac99a088151b3dcb7ae873b0be3766663aff21ba8535b359eed783b58f9',31,3,'authToken','[]',0,'2022-01-10 13:22:10','2022-01-10 13:22:10','2023-01-10 13:22:10'),
('5121d65b5a1edbf8c418f3f7217602cce2d9d608c29a1698071af592ccdec8f1cf1f9b00d20add52',31,3,'authToken','[]',0,'2022-01-07 16:55:14','2022-01-07 16:55:14','2023-01-07 16:55:14'),
('525e5b9020bcc24e9d9ea78aae8d07b5305ebe506e4f599af493a3308c494480f8bfdb739cd1bb58',31,3,'authToken','[]',0,'2022-01-23 22:52:33','2022-01-23 22:52:33','2023-01-23 22:52:33'),
('52965516060e440d9daa21cec753df06c8fccadb62e548f172fa5f87a2f045355f3d6c019aaba459',31,3,'authToken','[]',0,'2022-01-10 13:16:05','2022-01-10 13:16:05','2023-01-10 13:16:05'),
('538993a4370fa29223be5a890902f690c728219795d4640a741c9b5b2f03f7f324cb7d7b69d79d10',24,3,'authToken','[]',0,'2021-12-07 00:58:52','2021-12-07 00:58:52','2022-12-07 00:58:52'),
('555dbc5ce88182a01d2cb49ffa8319bf711a3c2d3add5fdb03ddaf56a2deb8e4af731f975e9c2604',31,3,'authToken','[]',0,'2022-01-25 20:48:06','2022-01-25 20:48:06','2023-01-25 20:48:06'),
('56d271675a75fc7bb403fade176b5320bce43695a6c3ddacee02add26be81f9834b85152e7c62330',28,3,'authToken','[]',0,'2021-12-07 10:20:52','2021-12-07 10:20:52','2022-12-07 10:20:52'),
('577388afaa15dc880d4885c070e0ca2a6e459dda72c3fb513c32c2bb78d666147e8199e7675532d1',31,3,'authToken','[]',0,'2022-02-17 19:32:15','2022-02-17 19:32:15','2023-02-17 19:32:15'),
('57be935ff517b57a45956223a1713a010be4e77219649a45a3f68824b85e9e8370d6b1ee75ea9349',31,3,'authToken','[]',0,'2022-01-10 12:05:35','2022-01-10 12:05:35','2023-01-10 12:05:35'),
('595e9c7cfee80eb29c3e1388939b5f69cc4365051d4eb06e6980acd8c07b6a2a2e7c0f7f9c69d0fa',15,1,'authToken','[]',0,'2021-11-28 11:37:48','2021-11-28 11:37:48','2022-11-28 11:37:48'),
('5b9b24e7a5721ff41bf2119d3eb860ed6b2db986cf6982d5bbb5826ccd587589d61179aa7165ae7f',38,3,'authToken','[]',0,'2022-02-17 19:52:11','2022-02-17 19:52:11','2023-02-17 19:52:11'),
('5bd57cdfdacb444ee4811d53dfd3da8cc4e3c81095c8fe527daaca592d89ba91316eafc837ecbabd',31,3,'authToken','[]',0,'2022-01-10 13:33:13','2022-01-10 13:33:13','2023-01-10 13:33:13'),
('5bef21186bcabc4ee35a17fa041d6b7133b92b7b37f8c13e16050405d5fccf81b70d52fee43a1381',31,3,'authToken','[]',0,'2022-02-17 19:48:27','2022-02-17 19:48:27','2023-02-17 19:48:27'),
('5c84bf6ee817dc7584554dade50e7f7cba029bfc6ebf407ab31afcdb9c67b3e61a389bfdf5aae343',31,3,'authToken','[]',0,'2022-01-25 23:13:38','2022-01-25 23:13:38','2023-01-25 23:13:38'),
('5f2106e985f293402b17745c0411ed0a8dfbb132767cfd59d79a728ef0b982343f590e37c02ce91c',31,3,'authToken','[]',0,'2022-01-07 16:08:55','2022-01-07 16:08:55','2023-01-07 16:08:55'),
('60bd8340b54c146157319bb634de871149c09203e36e329bf4261c0f94595224675531bfef9267d4',31,3,'authToken','[]',0,'2021-12-19 13:42:27','2021-12-19 13:42:27','2022-12-19 13:42:27'),
('62c495e685e2b88dbad7990bc1f780398cd383a6b2dedfcb07257e71aeb712eb6868f35199764f8a',31,3,'authToken','[]',0,'2022-01-10 14:06:33','2022-01-10 14:06:33','2023-01-10 14:06:33'),
('6ad49af49766ecc2506a0de96ee03df0ea4e41413388d013e8fc6a3626b73b89eaef4333d31ac731',31,3,'authToken','[]',0,'2022-01-25 21:45:08','2022-01-25 21:45:08','2023-01-25 21:45:08'),
('6b559d0a37db5408537b5c6b5e4b65ffaedf6ebcb6ed2abc684acb38ee3872b3cb9ec58ce8fb032a',34,3,'authToken','[]',0,'2021-12-11 05:19:34','2021-12-11 05:19:34','2022-12-11 05:19:34'),
('6b5747cb54ca2cfde934e9b9dba90e4640deda33a4b27b166fc0e45d27424c85718bb246e031eb5e',31,3,'authToken','[]',0,'2022-01-07 09:52:38','2022-01-07 09:52:38','2023-01-07 09:52:38'),
('6ebec93e555398d7453eb188a0deed4d39c520f7206c4561c955e7242b9f80bb8016a2c3500c0e03',31,3,'authToken','[]',0,'2022-01-10 12:03:31','2022-01-10 12:03:31','2023-01-10 12:03:31'),
('6f5576b13bbd5b58a73c48776e96be25ec354db4336c5322eb04141d0bba03530d679d6950815d09',31,3,'authToken','[]',0,'2022-01-05 14:56:04','2022-01-05 14:56:04','2023-01-05 14:56:04'),
('7257a3fa99b235255b567f7606a08b18c93cfe49b905e694ed6e7eb19365e9eefc36069d93f3cb14',31,3,'authToken','[]',0,'2022-01-25 21:31:46','2022-01-25 21:31:46','2023-01-25 21:31:46'),
('7375cda379b856938476e1f6e360c20d1f01a0fa5d9b99701a3b0393f355f7d51be1fc8fe2bdd375',31,3,'authToken','[]',0,'2022-01-25 21:30:31','2022-01-25 21:30:31','2023-01-25 21:30:31'),
('737adfea1389ad1b8b9d67442b859edf869a31ea2249796165a68272b1df120f13b5e9b0fdb46aac',31,3,'authToken','[]',0,'2021-12-19 13:50:20','2021-12-19 13:50:20','2022-12-19 13:50:20'),
('74a52d30f1413f54c184493becfdab63ccb887992628d4451700512e2e80367f1e4d43e1b0539e8c',31,3,'authToken','[]',0,'2022-01-10 13:23:53','2022-01-10 13:23:53','2023-01-10 13:23:53'),
('77317bde1b9a7eee7f57de61daf3ff66b09be340492f85324aada825a670adc555f656f63029fde9',31,3,'authToken','[]',0,'2022-01-10 12:06:50','2022-01-10 12:06:50','2023-01-10 12:06:50'),
('7769c93fe91ddd8050f69bab247881a3bb61dbbe883727ca5d5baba2c689ceb6129fa98625881abe',14,1,'authToken','[]',0,'2021-11-28 11:17:28','2021-11-28 11:17:28','2022-11-28 11:17:28'),
('7a14e45789ecb240e0fb675c1e5177cf508a828ef514d8487ef66201e383237b85bd1d2abf563c71',33,3,'authToken','[]',0,'2021-12-11 05:07:50','2021-12-11 05:07:50','2022-12-11 05:07:50'),
('7e01977bdefd5b46324069d42766ec2dd067f4d5b7ca39103ceda25be70572c930835b0705e5cadf',17,3,'authToken','[]',0,'2021-12-06 16:19:02','2021-12-06 16:19:02','2022-12-06 16:19:02'),
('7ffb54e95c2885128383aaac3a66e6e7dd77352f898751695874292ac67ae32dfb54d58c07d95b02',31,3,'authToken','[]',0,'2022-01-25 21:45:17','2022-01-25 21:45:17','2023-01-25 21:45:17'),
('812de2d8b23f527225234ef6395137d1da66e4ab4cbe5d4bb0d2484d7fa3fb007f6fb28028528867',17,3,'authToken','[]',0,'2021-12-06 16:19:04','2021-12-06 16:19:04','2022-12-06 16:19:04'),
('81d1bf1a6d9a5c1c6d8e902eb86a38aa9a8f62d2494f8d178e399cd967c97bf0d191eca45a394d8a',25,3,'authToken','[]',0,'2021-12-07 01:57:02','2021-12-07 01:57:02','2022-12-07 01:57:02'),
('81f0d70aeb68d4b3bb56e11e3369cbf6f234d1d9cbffba726b8cb3aeaedc393cc826d1647e58e211',31,3,'authToken','[]',0,'2022-01-25 22:55:45','2022-01-25 22:55:45','2023-01-25 22:55:45'),
('828481b0979290871bd141c4dc6704e40a22b27a6b2ea809dc1550008c4e89eea9abec41f2cc4e7d',31,3,'authToken','[]',0,'2022-01-24 21:08:04','2022-01-24 21:08:04','2023-01-24 21:08:04'),
('882559414ac940a54807056faf39a8f7b65f71c15f352f0fc8f38b454ec6ff821828981a1da1a96d',31,3,'authToken','[]',0,'2022-01-25 21:44:17','2022-01-25 21:44:17','2023-01-25 21:44:17'),
('8960d1be39a6c30152bdf8746efb2d6ecb11e7d4a12ebb8d0965786a218cb8267019874edf1a0555',31,3,'authToken','[]',0,'2022-01-07 09:09:06','2022-01-07 09:09:06','2023-01-07 09:09:06'),
('8d333d08c70da0c0c2c1fc26932a7d7f0cc350ea72bbab2559fb5019a9f35d733b46a1cd7f574566',31,3,'authToken','[]',0,'2021-12-19 13:50:41','2021-12-19 13:50:41','2022-12-19 13:50:41'),
('8dca1a0f3d814b604522acb0f75800e0954a3672ea42a6eab3af8eaa2ce2aa295ba58ec1390d9ff1',21,3,'authToken','[]',0,'2021-12-06 16:41:39','2021-12-06 16:41:39','2022-12-06 16:41:39'),
('8f08b43990950d79c3438c84b9556329e072b0607b6826dc7b20570e3b0dd42a9f3f53a84d9e78ba',31,3,'authToken','[]',0,'2022-01-10 13:07:33','2022-01-10 13:07:33','2023-01-10 13:07:33'),
('90eeae91d487459e5f3525211e0c9b62dec38ba1d67413484fec2f5feef106e2bd14e295115ce69f',31,3,'authToken','[]',0,'2022-01-07 16:05:22','2022-01-07 16:05:22','2023-01-07 16:05:22'),
('91897023c953b4eac822f8565e089d0ee099bd48cecfc178ae61d3a53430a6de6a0a280d92ca0c3d',31,3,'authToken','[]',0,'2022-01-07 16:42:46','2022-01-07 16:42:46','2023-01-07 16:42:46'),
('92bd2a622397e9792669ea646eaa1a026180baa2b598e53327bf93312d0ac4865de7271136b29ebb',31,3,'authToken','[]',0,'2022-01-05 14:54:58','2022-01-05 14:54:58','2023-01-05 14:54:58'),
('93c88b03beebbdec0ca7241724c7c4b6b47fe7973505f34b3fb64d9785b0d5851d4bc66e8e313bca',31,3,'authToken','[]',0,'2022-01-07 16:18:35','2022-01-07 16:18:35','2023-01-07 16:18:35'),
('9ada0f8aaa5abf00b4b5b9ebe96689aae30120816b86ec7c336895015918e34915ea974534e0aac3',39,3,'authToken','[]',0,'2022-02-17 19:53:47','2022-02-17 19:53:47','2023-02-17 19:53:47'),
('9de770aba43336219342ac4fddd3009682026c2270d57e20098b02298366296b6606b27e0453f806',31,3,'authToken','[]',0,'2022-01-25 21:31:57','2022-01-25 21:31:57','2023-01-25 21:31:57'),
('a0bd5acea7e1af052a05b9175dfc74b69afce4b459251dc4f0e44a49be04f29fe78ae1d3578d3173',37,3,'authToken','[]',0,'2022-01-05 17:04:31','2022-01-05 17:04:31','2023-01-05 17:04:31'),
('a50aa27bc428a49fb7c9441e0d38dcd7b619eb93f23f3601a35524714ee1c360689d6151551d1de3',31,3,'authToken','[]',0,'2022-01-05 14:54:52','2022-01-05 14:54:52','2023-01-05 14:54:52'),
('a518a79dbc5171b6e067386a23428113cf0e1fc3dbe208d99a652bf555f5c8f7b860400163396f03',31,3,'authToken','[]',0,'2022-01-10 13:16:45','2022-01-10 13:16:45','2023-01-10 13:16:45'),
('a56a307972f1668db4b7c8ab4ca4e131d3c272cd96d6b4c286b529a4f547c09ad68bfe11979df796',13,3,'authToken','[]',0,'2021-12-02 14:19:15','2021-12-02 14:19:15','2022-12-02 14:19:15'),
('a81f753a2c6aa1f90a4c16cb989575a11602acceec55ef6f131c70fc314e5e500f1799ab191973e9',31,3,'authToken','[]',0,'2022-01-25 22:26:03','2022-01-25 22:26:03','2023-01-25 22:26:03'),
('a85893fce927d7abe29235a7afe482947988a32fda78bfaecfa23a99f701d920383016aa43e69c7f',31,3,'authToken','[]',0,'2022-01-23 22:58:28','2022-01-23 22:58:28','2023-01-23 22:58:28'),
('a8ebf7738eb054fcbeb01bd41e201fff84347230b4b4bee0ae36e764133f6e94f37b4834f051da44',11,1,'authToken','[]',0,'2021-11-28 10:20:42','2021-11-28 10:20:42','2022-11-28 10:20:42'),
('aa737bb6afbe260b89cabc964e59185ce88ba714160328349394ba191d060049367acc7bc80b3187',31,3,'authToken','[]',0,'2022-01-07 16:28:15','2022-01-07 16:28:15','2023-01-07 16:28:15'),
('aad79efc6c9828ee60e1db5852c2ae09d46a58a1a06e4cd32863004535ef376dd3695c406bf0ea09',31,3,'authToken','[]',0,'2022-01-10 13:07:00','2022-01-10 13:07:00','2023-01-10 13:07:00'),
('abc2be9eb9c1f73063a692456aca2bf8d653fce16f04a25defbd5050c15f2140f69be8ee0587874f',31,3,'authToken','[]',0,'2022-01-25 22:24:57','2022-01-25 22:24:57','2023-01-25 22:24:57'),
('adb96eb55e4a3fea18da20edc965e990a75645e9247a94f72025c1cea074a0fc6f87d4761965c97d',35,3,'authToken','[]',0,'2021-12-24 12:53:45','2021-12-24 12:53:45','2022-12-24 12:53:45'),
('b100a79a0d69e8f455ce7a5bb188d06d3f2a7f364a7cee03c699cac1255e29e764d258eaef23c7ba',12,3,'authToken','[]',0,'2021-12-28 14:14:09','2021-12-28 14:14:09','2022-12-28 14:14:09'),
('b5828700dc94c30d758767a912b94b312fe95296bbd71e1f75f9d2a6ce77f3d66e46363fef7c201c',31,3,'authToken','[]',0,'2022-01-25 22:21:56','2022-01-25 22:21:56','2023-01-25 22:21:56'),
('b6687c78b5881dd65b5413511a93bf9933c89ec8fd798bbe97e96dfe551d9fcc989d5791585550f1',13,1,'authToken','[]',0,'2021-11-28 11:14:03','2021-11-28 11:14:03','2022-11-28 11:14:03'),
('b8a2632c3ca6ed851b66b990ae25575b388b8c79483debe2a6261a77542c90351388542484ddfea5',31,3,'authToken','[]',0,'2022-01-07 16:18:06','2022-01-07 16:18:06','2023-01-07 16:18:06'),
('b8c1e966f98abf0e782503299d714fb8f997fdf2ffbb133056e2591fe2fa6457dfa5b5899059cad4',31,3,'authToken','[]',0,'2022-01-25 22:43:39','2022-01-25 22:43:39','2023-01-25 22:43:39'),
('b9695ccef1cd64321b3ec93cfc7def646f23faf8b79bc6f8e2fd4b50b66e8e7cf18c3c7064a3564a',31,3,'authToken','[]',0,'2022-01-05 15:31:25','2022-01-05 15:31:25','2023-01-05 15:31:25'),
('b971fbad5a64f5e93edbcb19adbcd7adafd2f66a7d23704af4bf176a1acaa8b389c29392cabe77e9',31,3,'authToken','[]',0,'2022-01-10 13:23:25','2022-01-10 13:23:25','2023-01-10 13:23:25'),
('ba55f630f3fb9e5f9965c42a97b6e3a5339fb24a34fc8356a722eb456a17af38b05860f7b11b8f8c',31,3,'authToken','[]',0,'2021-12-19 13:39:14','2021-12-19 13:39:14','2022-12-19 13:39:14'),
('be5395485b6024c1eea16d2d24eb4557cfee72f44bad3916de1f0cbd26a1d7da0ae506526b6e9bc9',28,3,'authToken','[]',0,'2021-12-07 15:42:23','2021-12-07 15:42:23','2022-12-07 15:42:23'),
('bf85bc004c91d6b707a26bcc63ecaac4d56a46941141b21dd4f4536b93fc74d7a1db5ac270dfc3e1',31,3,'authToken','[]',0,'2021-12-11 05:31:51','2021-12-11 05:31:51','2022-12-11 05:31:51'),
('c15123c7f8a4c55a62e759c7c55fe997f9e7fa2c6e5e6bf9a47116e12ba37d57ebedc9751f943956',31,3,'authToken','[]',0,'2022-01-07 16:09:28','2022-01-07 16:09:28','2023-01-07 16:09:28'),
('c1885d6028c05abaa65ad30493ea9d4847fd8b92eb669178e736a8c00f787023e4a1117988fd0789',31,3,'authToken','[]',0,'2022-01-10 12:02:53','2022-01-10 12:02:53','2023-01-10 12:02:53'),
('c57d29b4deea8f01308b413e7c94e84124839a749b4f350fcd521619759455a5e1c804d9651cbb45',31,3,'authToken','[]',0,'2022-01-07 16:54:53','2022-01-07 16:54:53','2023-01-07 16:54:53'),
('c582df0eeee8caf5957eebd5ddf3dc00b0f27f4497e3ac542b4090987ee654e9534f7dd77da21dda',31,3,'authToken','[]',0,'2022-01-25 23:14:13','2022-01-25 23:14:13','2023-01-25 23:14:13'),
('c5a1860eb6347338c7d88f692f329b3b405ebda4a926a23fddc9ba041f81bcdf7a60e6553f20c445',31,3,'authToken','[]',0,'2022-01-10 13:09:22','2022-01-10 13:09:22','2023-01-10 13:09:22'),
('c6fe0e7bbd3c5a8ed585190e9a784b3b0df8fb3aa50bbafeedb27f5ca9fe5ddf7027e065fd9226e3',19,3,'authToken','[]',0,'2021-12-06 16:20:38','2021-12-06 16:20:38','2022-12-06 16:20:38'),
('c817aa64a9ad8401a73cad9160b12a46b36815e54e43c207e3525d28ad136a6b2085bb43106e97cc',31,3,'authToken','[]',0,'2022-01-07 15:53:00','2022-01-07 15:53:00','2023-01-07 15:53:00'),
('c832e2eb3096fa88fb39660a4236a9609dba6b8fc6565d3334dbe0a98128d15970dfdb890fe1eb31',31,3,'authToken','[]',0,'2022-01-25 22:48:51','2022-01-25 22:48:51','2023-01-25 22:48:51'),
('c8c26e6e00b644993d170cf8f5da94bffa3137a67a2c272b286a8f3e01022f0e21891b363f2ee292',31,3,'authToken','[]',0,'2022-01-25 21:39:11','2022-01-25 21:39:11','2023-01-25 21:39:11'),
('c94571fbe92ad4250e08c4d548035453af234e16691516f8187dca72cd3ef991065137eeed9efc32',30,3,'authToken','[]',0,'2021-12-07 10:22:12','2021-12-07 10:22:12','2022-12-07 10:22:12'),
('c9b626c7b8b5b0d97568792f43e1ebb9c131aa74338c9c068581713e1cac989b9c266f8cd4a7ba90',31,3,'authToken','[]',0,'2022-01-25 22:22:56','2022-01-25 22:22:56','2023-01-25 22:22:56'),
('cba6d78f16af7eed8a252eb77a67839bf1d6bc2dcf0176ea64e33ba49fe27b75c2cd82d8d61d4ed5',16,1,'authToken','[]',0,'2021-11-28 11:55:11','2021-11-28 11:55:11','2022-11-28 11:55:11'),
('cc6ca732f80544467fe9dbf2b975544156f335941f5727ceb62567671eadd70365eafa8b9c54561a',31,3,'authToken','[]',0,'2022-01-25 22:59:16','2022-01-25 22:59:16','2023-01-25 22:59:16'),
('cc7338bed01348b0a57cef4c65db28640f747b21e929947fdc2367f6517ba84e1c73effbffccea09',28,3,'authToken','[]',0,'2021-12-07 10:20:25','2021-12-07 10:20:25','2022-12-07 10:20:25'),
('cdbd16258e3c240e2ad441780b436802283b4a487648cb63608c8aac346e354a1ef30e8ba3f7ac03',31,3,'authToken','[]',0,'2022-01-10 12:04:50','2022-01-10 12:04:50','2023-01-10 12:04:50'),
('d05d57f36c45a5c8e73b857c227eef05d4098ec2f17f373a76b03f1e8c89021a057d90019f18229e',31,3,'authToken','[]',0,'2022-01-10 13:16:24','2022-01-10 13:16:24','2023-01-10 13:16:24'),
('d3c915a3b39605d9437fa25b2865c8a86ae7a6156377de4ddf4c0cebae30c80019d4094c79fc811d',31,3,'authToken','[]',0,'2022-01-07 09:47:09','2022-01-07 09:47:09','2023-01-07 09:47:09'),
('d6ae08ca285ce477019b5ae6b97802f5e42dafeec254e68ff08d0081ee5a1ffb7cf3b06352eb0fee',31,3,'authToken','[]',0,'2022-01-10 13:11:56','2022-01-10 13:11:56','2023-01-10 13:11:56'),
('d8202065aca8feb361f27e04d38fc10e25ea5ce478554045f07497d730ca0699d6e5a08ce4ca59f6',31,3,'authToken','[]',0,'2022-01-25 22:23:07','2022-01-25 22:23:07','2023-01-25 22:23:07'),
('d8ddc0bedfd077a58f5da5951265d794d589b2c714a0cf7eca6f3d7e6d1d6b67a6014b70d6d286e7',31,3,'authToken','[]',0,'2021-12-09 14:20:18','2021-12-09 14:20:18','2022-12-09 14:20:18'),
('dbc4680615728006a514d4b45044314f6ffe2d02f1a3b74436745cd10ae77d5a55cfd97eaf2db1fe',12,3,'authToken','[]',0,'2021-12-28 14:34:48','2021-12-28 14:34:48','2022-12-28 14:34:48'),
('dc4cd66e6abf45876d7c509f62e487db61cc4d4471b765e1c9f06efb1243d6a9b6edb892b4a7b196',27,3,'authToken','[]',0,'2021-12-07 10:16:29','2021-12-07 10:16:29','2022-12-07 10:16:29'),
('de7eb373166cf41e5d39470bd6ca6593cd7430e3641740548a71d9123e3f93a01ef296284c1a41b0',31,3,'authToken','[]',0,'2022-01-25 21:35:00','2022-01-25 21:35:00','2023-01-25 21:35:00'),
('df1d77cdd4de22a3ca1d611e66e7138c98c292d0c8099054066099c11e0d4ba7f4cad11e73a6d623',31,3,'authToken','[]',0,'2022-02-07 23:19:31','2022-02-07 23:19:31','2023-02-07 23:19:31'),
('df78b19f77cba09f1157a9e48deea74d914e94eadbaa38f6c5fb2dc2a370736fcf8c5bee650d045b',31,3,'authToken','[]',0,'2022-01-25 22:59:55','2022-01-25 22:59:55','2023-01-25 22:59:55'),
('dfe0f23841116f2a78ca1a21756780e3a9b176b678d6ec1227ee7af516ad2d838f6923929e15eea6',31,3,'authToken','[]',0,'2022-01-10 13:29:25','2022-01-10 13:29:25','2023-01-10 13:29:25'),
('e04bb3cbc891640351b98ade4b74491e5feae71683a8111edbd86ba3ea98fd2501b18c8bd5acfc9a',31,3,'authToken','[]',0,'2022-01-25 22:21:25','2022-01-25 22:21:25','2023-01-25 22:21:25'),
('e07d099dea4ff8ea6bdb9e6717502327d39a12a66b28cbb3f18d6262ddcac5e74a4cdc0ce7a1a737',31,3,'authToken','[]',0,'2022-01-07 16:18:52','2022-01-07 16:18:52','2023-01-07 16:18:52'),
('e2e90f24932ccca6c324a2f4cc3729a0549d77bb4894af56188c6cd077a539464de0d644ff9f3c21',31,3,'authToken','[]',0,'2022-01-10 12:05:23','2022-01-10 12:05:23','2023-01-10 12:05:23'),
('e491492b3c30e7feaae012e62b5bd914879c2bab7619d63995900dc713530aeea6661866901b25cc',31,3,'authToken','[]',0,'2022-01-25 21:33:50','2022-01-25 21:33:50','2023-01-25 21:33:50'),
('e530e507550be67e5314686ecea40352d5fd2b03d818cb08446f7c44f54ee7d47baddeedf9d60916',17,3,'authToken','[]',0,'2021-12-06 15:42:08','2021-12-06 15:42:08','2022-12-06 15:42:08'),
('e6e04c84ee23caa0330df568c4db7f8cc57612e279e454b87aceb17366ab396275e9d75e6a505907',31,3,'authToken','[]',0,'2022-01-05 16:50:48','2022-01-05 16:50:48','2023-01-05 16:50:48'),
('e8328489daaa89db430fe2e840a1e9ff7c8d4074c37510e8525d143518beddfe69f149084e4abee5',31,3,'authToken','[]',0,'2021-12-09 14:59:55','2021-12-09 14:59:55','2022-12-09 14:59:55'),
('e899ac38b7a140671da55dbd4e813097007cda94156dea6fa7a6400daeb138799b15e49510d1e6ce',17,3,'authToken','[]',0,'2021-12-02 15:52:25','2021-12-02 15:52:25','2022-12-02 15:52:25'),
('e972ce36a069677131975ba96ddde409f92a12f31bb73d9d629a0bc9c859495707255ffd44636932',31,3,'authToken','[]',0,'2021-12-09 14:17:13','2021-12-09 14:17:13','2022-12-09 14:17:13'),
('e97771d9b15bc7431919e9f3d6691e6cffaa80457bd4b76ed654570b8f717027716966cf367fb6f9',31,3,'authToken','[]',0,'2022-01-25 21:45:25','2022-01-25 21:45:25','2023-01-25 21:45:25'),
('e9e4943d5fee61435305fd0d70126b99285930377c6f5fd18ec30bf577539f5d235bd6907849b81f',26,3,'authToken','[]',0,'2021-12-07 10:15:23','2021-12-07 10:15:23','2022-12-07 10:15:23'),
('ea2db8e84872fcc8f043447ed8da3747998da8e7e823584959e25458b8af57597165bc4fafa37ca5',31,3,'authToken','[]',0,'2022-01-10 12:02:01','2022-01-10 12:02:01','2023-01-10 12:02:01'),
('ebd0e5b70dcac9fc48d98d6fe7b69124603cea01781b3c075f21db87db2b179912c77a0512eac78b',31,3,'authToken','[]',0,'2022-01-25 23:07:22','2022-01-25 23:07:22','2023-01-25 23:07:22'),
('edf97f5298d24b0b59392fbb2646a044a08672bdd1db1eee923a355b1530c0f89d40df37cbfc4731',31,3,'authToken','[]',0,'2022-01-10 13:21:52','2022-01-10 13:21:52','2023-01-10 13:21:52'),
('ee34166844c7aaf0ae5f16049def2bb942673cdc382f98fddae690ab1f88142f7066939d6f786b30',20,3,'authToken','[]',0,'2021-12-06 16:22:29','2021-12-06 16:22:29','2022-12-06 16:22:29'),
('ee60fb1bfbe97f92f337e6de97fc05f031ba83ea9f60df8f716a0379f3b683eb0a16f514d9dbe737',31,3,'authToken','[]',0,'2022-01-10 14:05:28','2022-01-10 14:05:28','2023-01-10 14:05:28'),
('efa3db038545a46040e12586147e2d8635e3a3d3031dd809e585a4c7bb4456236fc7d881df22805e',31,3,'authToken','[]',0,'2022-01-25 21:45:41','2022-01-25 21:45:41','2023-01-25 21:45:41'),
('efdb7e67a3d585539412a5f1dc3f9403fe6ce1c692c29e8db27d876d1c0a7dd30ced9908c36b5745',12,1,'authToken','[]',0,'2021-11-28 11:13:02','2021-11-28 11:13:02','2022-11-28 11:13:02'),
('f2d37b83224627f9ae008b68722718984373b2d756fea9a7fd309642ab3f6ba448a50dcdd0705eaf',31,3,'authToken','[]',0,'2022-01-25 22:22:34','2022-01-25 22:22:34','2023-01-25 22:22:34'),
('f2fed59a203855727f79ee214e7fb4e3e29f48603fbf48d6e107172c777da33411608ee955cc80f4',36,3,'authToken','[]',0,'2021-12-30 16:37:37','2021-12-30 16:37:37','2022-12-30 16:37:37'),
('f30ac8434657cd4b8e252a31ea9fdc83c893dfdd36fced0af58e3bffe57698ad24c52de33280d815',31,3,'authToken','[]',0,'2022-01-10 13:08:25','2022-01-10 13:08:25','2023-01-10 13:08:25'),
('f3356715e50b44c980c6ad8230bea52352d89ab6dda5c36a640691a4bbd94ac58f6d7cef23e86476',31,3,'authToken','[]',0,'2022-01-10 13:21:30','2022-01-10 13:21:30','2023-01-10 13:21:30'),
('f424dec1778aa970c08fc9f61bb333b8f29c15aea2b239ac2cf5fc2e0110fcbc8280bc807a73df87',37,3,'authToken','[]',0,'2022-01-05 17:04:30','2022-01-05 17:04:30','2023-01-05 17:04:30'),
('f519d60cdf541cf1ab7fba2b6246cb7cc1125c172e17cb55004999ec623fbe850e7c4924c2e90a86',31,3,'authToken','[]',0,'2021-12-09 14:08:06','2021-12-09 14:08:06','2022-12-09 14:08:06'),
('f6092dd6beeb3e211cac39fe40ed01657344fa477e694d60d96632cd021e540769c3ccb052827d53',31,3,'authToken','[]',0,'2021-12-13 06:26:56','2021-12-13 06:26:56','2022-12-13 06:26:56'),
('fc2d1f76b02bce2cad9bb81e1101c1dd7f552f90de0df54dede17536e3c5235cc9cb5ef0bb75bcbc',31,3,'authToken','[]',0,'2021-12-19 13:52:43','2021-12-19 13:52:43','2022-12-19 13:52:43'),
('fd8e08b63847d4e08c321ff38912a6211f71650e10fb4ccd6c52654adfb8b5fcf6d0437f137a9935',31,3,'authToken','[]',0,'2022-01-25 22:26:17','2022-01-25 22:26:17','2023-01-25 22:26:17'),
('fe784cb64825b4bfba669c923626f1caecbb28696fe0353fce3f6cb20f9f38d2a39c88fc5fbcfaff',31,3,'authToken','[]',0,'2021-12-10 13:24:07','2021-12-10 13:24:07','2022-12-10 13:24:07'),
('ff5fd47979c03234536e76737bd4baab1e396a5f71a8919122854b6e635f8cd5b2b24570d059f9b4',31,3,'authToken','[]',0,'2022-01-07 09:46:38','2022-01-07 09:46:38','2023-01-07 09:46:38'),
('ffac1e533e6fea612aa6a2907aa37151c955edb60cb66305793a91e1a37eea7499469b42d660e71a',11,1,'authToken','[]',0,'2021-11-28 10:24:00','2021-11-28 10:24:00','2022-11-28 10:24:00');

/*Table structure for table `oauth_auth_codes` */

DROP TABLE IF EXISTS `oauth_auth_codes`;

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `client_id` bigint(20) unsigned NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_auth_codes_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `oauth_auth_codes` */

/*Table structure for table `oauth_clients` */

DROP TABLE IF EXISTS `oauth_clients`;

CREATE TABLE `oauth_clients` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_clients_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `oauth_clients` */

insert  into `oauth_clients`(`id`,`user_id`,`name`,`secret`,`provider`,`redirect`,`personal_access_client`,`password_client`,`revoked`,`created_at`,`updated_at`) values 
(1,NULL,'Laravel Personal Access Client','tGGeUWMuW20mg47r1ZbEl2J5ygYwwDshGuEtANdo',NULL,'http://localhost',1,0,0,'2021-11-28 09:39:10','2021-11-28 09:39:10'),
(2,NULL,'Laravel Password Grant Client','gzgyED6daPBF2w5O6ebW6TGFVQ5MmRYNFFnNweAi','users','http://localhost',0,1,0,'2021-11-28 09:39:10','2021-11-28 09:39:10'),
(3,NULL,'Laravel Personal Access Client','lqCDmjBBpumAXSI2pFirJ1N5JY6LTJr4b6owlCzg',NULL,'http://localhost',1,0,0,'2021-12-02 14:19:09','2021-12-02 14:19:09'),
(4,NULL,'Laravel Password Grant Client','NvPq2nBdZkf8MorqVKhkkyV1PAoLTsV8DeDbU8cu','users','http://localhost',0,1,0,'2021-12-02 14:19:09','2021-12-02 14:19:09');

/*Table structure for table `oauth_personal_access_clients` */

DROP TABLE IF EXISTS `oauth_personal_access_clients`;

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `client_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `oauth_personal_access_clients` */

insert  into `oauth_personal_access_clients`(`id`,`client_id`,`created_at`,`updated_at`) values 
(1,1,'2021-11-28 09:39:10','2021-11-28 09:39:10'),
(2,3,'2021-12-02 14:19:09','2021-12-02 14:19:09');

/*Table structure for table `oauth_refresh_tokens` */

DROP TABLE IF EXISTS `oauth_refresh_tokens`;

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `oauth_refresh_tokens` */

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `penalties` */

DROP TABLE IF EXISTS `penalties`;

CREATE TABLE `penalties` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `company_scale_id` bigint(20) unsigned DEFAULT NULL,
  `penalty_amount` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `penalties_company_scale_id_foreign` (`company_scale_id`),
  CONSTRAINT `penalties_company_scale_id_foreign` FOREIGN KEY (`company_scale_id`) REFERENCES `company_scales` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `penalties` */

insert  into `penalties`(`id`,`company_scale_id`,`penalty_amount`,`created_at`,`updated_at`,`deleted_at`) values 
(1,1,5000,'2021-11-29 23:32:17','2021-11-29 23:32:19',NULL),
(2,2,10000,'2021-11-29 23:32:33','2021-11-29 23:32:35',NULL);

/*Table structure for table `personal_access_tokens` */

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

/*Table structure for table `staff` */

DROP TABLE IF EXISTS `staff`;

CREATE TABLE `staff` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `tempekan_id` bigint(20) unsigned DEFAULT NULL,
  `balance` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `staff_user_id_foreign` (`user_id`),
  KEY `staff_tempekan_id_foreign` (`tempekan_id`),
  CONSTRAINT `staff_tempekan_id_foreign` FOREIGN KEY (`tempekan_id`) REFERENCES `tempekans` (`id`) ON DELETE CASCADE,
  CONSTRAINT `staff_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `staff` */

insert  into `staff`(`id`,`user_id`,`tempekan_id`,`balance`,`created_at`,`updated_at`) values 
(2,17,2,100000,'2021-12-06 22:48:27','2021-12-06 22:48:30'),
(3,12,1,60000,NULL,'2021-12-30 15:34:10'),
(4,37,1,0,'2021-12-31 15:21:17','2021-12-31 15:21:17');

/*Table structure for table `subscription_types` */

DROP TABLE IF EXISTS `subscription_types`;

CREATE TABLE `subscription_types` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `subscription_types` */

insert  into `subscription_types`(`id`,`category`,`created_at`,`updated_at`,`deleted_at`) values 
(1,'Harian','2021-11-28 19:00:58','2021-11-28 19:01:01',NULL),
(2,'Bulanan','2021-11-28 19:01:06','2021-11-28 19:01:08',NULL);

/*Table structure for table `subscriptions` */

DROP TABLE IF EXISTS `subscriptions`;

CREATE TABLE `subscriptions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `subscription_type_id` bigint(20) unsigned DEFAULT NULL,
  `company_scale_id` bigint(20) unsigned DEFAULT NULL,
  `subscription_amount` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `subscriptions_subscription_type_id_foreign` (`subscription_type_id`),
  KEY `subscriptions_company_scale_id_foreign` (`company_scale_id`),
  CONSTRAINT `subscriptions_company_scale_id_foreign` FOREIGN KEY (`company_scale_id`) REFERENCES `company_scales` (`id`) ON DELETE CASCADE,
  CONSTRAINT `subscriptions_subscription_type_id_foreign` FOREIGN KEY (`subscription_type_id`) REFERENCES `subscription_types` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `subscriptions` */

insert  into `subscriptions`(`id`,`subscription_type_id`,`company_scale_id`,`subscription_amount`,`created_at`,`updated_at`,`deleted_at`) values 
(1,1,1,5000,'2021-11-28 19:01:29','2021-11-28 19:01:32',NULL),
(2,2,1,100000,NULL,NULL,NULL),
(3,1,2,8000,NULL,NULL,NULL),
(4,2,2,200000,NULL,NULL,NULL),
(5,1,3,10000,NULL,NULL,NULL),
(6,2,3,300000,NULL,NULL,NULL);

/*Table structure for table `tempekans` */

DROP TABLE IF EXISTS `tempekans`;

CREATE TABLE `tempekans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `banjar_id` bigint(20) unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tempekans_banjar_id_foreign` (`banjar_id`),
  CONSTRAINT `tempekans_banjar_id_foreign` FOREIGN KEY (`banjar_id`) REFERENCES `banjars` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tempekans` */

insert  into `tempekans`(`id`,`banjar_id`,`name`,`created_at`,`updated_at`,`deleted_at`) values 
(1,1,'Barat','2021-11-28 18:57:49','2021-11-28 18:57:52',NULL),
(2,2,'Utara','2021-11-28 18:58:09','2021-11-28 18:58:12',NULL),
(3,3,'Selatan','2021-11-28 18:58:29','2021-11-28 18:58:32',NULL);

/*Table structure for table `transaction_details` */

DROP TABLE IF EXISTS `transaction_details`;

CREATE TABLE `transaction_details` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `transaction_id` bigint(20) unsigned DEFAULT NULL,
  `subscription_id` bigint(20) unsigned DEFAULT NULL,
  `penalty_id` bigint(20) unsigned DEFAULT NULL,
  `subscription_amount` int(11) DEFAULT NULL,
  `penalty_amount` int(11) DEFAULT NULL,
  `subscription_qty` int(11) DEFAULT NULL,
  `penalty_qty` int(11) DEFAULT NULL,
  `transaction_amount` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `transaction_details_transaction_id_foreign` (`transaction_id`),
  KEY `transaction_details_subscription_id_foreign` (`subscription_id`),
  KEY `transaction_details_penalty_id_foreign` (`penalty_id`),
  CONSTRAINT `transaction_details_penalty_id_foreign` FOREIGN KEY (`penalty_id`) REFERENCES `penalties` (`id`) ON DELETE CASCADE,
  CONSTRAINT `transaction_details_subscription_id_foreign` FOREIGN KEY (`subscription_id`) REFERENCES `subscriptions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `transaction_details_transaction_id_foreign` FOREIGN KEY (`transaction_id`) REFERENCES `transactions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `transaction_details` */

insert  into `transaction_details`(`id`,`transaction_id`,`subscription_id`,`penalty_id`,`subscription_amount`,`penalty_amount`,`subscription_qty`,`penalty_qty`,`transaction_amount`,`created_at`,`updated_at`) values 
(2,5,1,NULL,5000,NULL,1,NULL,65000,'2021-12-26 15:24:38','2021-12-26 15:24:38'),
(3,6,1,NULL,5000,NULL,1,NULL,15000,'2021-12-28 16:00:07','2021-12-28 16:00:07'),
(4,7,1,NULL,5000,NULL,1,NULL,25000,'2021-12-28 16:05:39','2021-12-28 16:05:39'),
(5,8,1,NULL,5000,NULL,1,NULL,20000,'2021-12-29 00:24:37','2021-12-29 00:24:37'),
(6,9,1,NULL,5000,NULL,1,NULL,10000,'2021-12-29 00:27:02','2021-12-29 00:27:02'),
(7,10,1,NULL,5000,NULL,1,NULL,20000,'2021-12-29 23:39:00','2021-12-29 23:39:00'),
(8,11,1,NULL,5000,NULL,1,NULL,10000,'2021-12-30 00:06:03','2021-12-30 00:06:03'),
(9,12,1,NULL,5000,NULL,1,NULL,25000,'2021-12-30 15:31:33','2021-12-30 15:31:33'),
(10,13,1,NULL,5000,NULL,1,NULL,25000,'2021-12-30 15:34:10','2021-12-30 15:34:10');

/*Table structure for table `transactions` */

DROP TABLE IF EXISTS `transactions`;

CREATE TABLE `transactions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `staff_id` bigint(20) unsigned DEFAULT NULL,
  `company_id` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `transactions_staff_id_foreign` (`staff_id`),
  KEY `transactions_company_id_foreign` (`company_id`),
  CONSTRAINT `transactions_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE,
  CONSTRAINT `transactions_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `transactions` */

insert  into `transactions`(`id`,`staff_id`,`company_id`,`created_at`,`updated_at`,`deleted_at`) values 
(5,3,21,'2021-12-26 15:24:38','2021-12-26 15:24:38',NULL),
(6,3,21,'2021-12-28 16:00:07','2021-12-28 16:00:07','2021-12-28 23:11:28'),
(7,3,23,'2021-12-28 16:05:39','2021-12-28 16:05:39','2021-12-29 22:02:31'),
(8,3,21,'2021-12-29 00:24:37','2021-12-29 00:24:37','2021-12-29 22:02:31'),
(9,3,23,'2021-12-29 00:27:02','2021-12-29 00:27:02','2021-12-29 22:02:31'),
(10,3,21,'2021-12-29 23:39:00','2021-12-29 23:39:00',NULL),
(11,3,21,'2021-12-30 00:06:03','2021-12-30 00:06:03',NULL),
(12,3,23,'2021-12-30 15:31:33','2021-12-30 15:31:33','2021-12-30 14:33:48'),
(13,3,23,'2021-12-30 15:34:10','2021-12-30 15:34:10',NULL);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','owner','staff') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'owner',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_phone_unique` (`phone`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`phone`,`photo`,`email_verified_at`,`password`,`role`,`remember_token`,`created_at`,`updated_at`,`deleted_at`) values 
(1,'Brooks Miller','macejkovic.alfreda@example.org','+17570157887',NULL,'2021-11-27 08:40:17','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','staff','vELxZeEd75','2021-11-27 08:40:17','2021-12-31 14:45:33','2021-12-31 14:45:33'),
(2,'Pascale Jacobs','admin@retribusi.com','1231231234',NULL,'2021-11-27 08:40:17','$2y$10$XhJz0zH4gCtiSpYXYpqU8.TAbfq035hbCA4fHVpZ8A0VXbNOGcXqO','staff','Y5soVHtns0','2021-11-27 08:40:17','2021-11-27 08:40:17',NULL),
(3,'Frederik Wiza','jaskolski.sheridan@example.net','+12569647844',NULL,'2021-11-27 08:40:17','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','owner','VYse4lruGm','2021-11-27 08:40:17','2021-11-27 08:40:17',NULL),
(4,'Norberto Mayert','odie25@example.org','+18151960380',NULL,'2021-11-27 08:40:17','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','staff','FQrCUwgAvl','2021-11-27 08:40:17','2021-11-27 08:40:17',NULL),
(5,'Prof. Pamela Casper MD','florence05@example.net','+17858635991',NULL,'2021-11-27 08:40:17','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','owner','fVmDcICjqB','2021-11-27 08:40:17','2021-11-27 08:40:17',NULL),
(6,'Prof. Wilma Mosciski Sr.','paula.nitzsche@example.net','+12836699327',NULL,'2021-11-27 08:40:17','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','owner','EEHFBcKxFy','2021-11-27 08:40:17','2021-11-27 08:40:17',NULL),
(7,'Odell Koss DDS','gfadel@example.com','+13207346956',NULL,'2021-11-27 08:40:17','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','staff','OamC4FB00M','2021-11-27 08:40:17','2021-11-27 08:40:17',NULL),
(8,'Alexys Strosin','markus.kovacek@example.net','+19017549496',NULL,'2021-11-27 08:40:17','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','staff','dg4keZOP0o','2021-11-27 08:40:17','2021-11-27 08:40:17',NULL),
(9,'Dr. Hillard Buckridge DDS','mavis07@example.net','+15635859173',NULL,'2021-11-27 08:40:17','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','owner','Bgm2xXqQ7I','2021-11-27 08:40:17','2021-11-27 08:40:17',NULL),
(10,'Felicity Homenick','gregorio56@example.com','+15518987692',NULL,'2021-11-27 08:40:17','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','staff','ak20VME5r2','2021-11-27 08:40:17','2021-11-27 08:40:17',NULL),
(11,'Widiana','widiana1@mail.com','081999111999',NULL,NULL,'$2y$10$kfOG5Y5dqufVh5vOHfCACu3A.4KYLdYIEEle/11rDCdEjwdpFojoK','owner',NULL,'2021-11-28 10:20:41','2021-11-28 10:20:41',NULL),
(12,'staff12','staff12@gmail.com','222222222',NULL,NULL,'$2y$10$ji1G5AlTV8/m6qOfEyuEK.Nbb1CPHYNL.plKVtGiDQfHU9ezWJOE.','staff',NULL,'2021-11-28 11:13:00','2021-12-28 14:16:38',NULL),
(13,'Krisna Bayu','krisnabayu@mail.com','081333000111',NULL,NULL,'$2y$10$qOi3rwOFLT9OJxamDzC6R.N4jUY7/Ee1fMfzaLeW/6swjG7uW6A1W','owner',NULL,'2021-11-28 11:14:02','2021-11-28 11:14:02',NULL),
(14,'Juliarta','juliarta@mail.com','081333012323',NULL,NULL,'$2y$10$TVMIxsW0WhC8wKkJQ18cQuwBGmSCL4Cvo5vjlrz1cvGrtSmgSIwbW','owner',NULL,'2021-11-28 11:17:28','2021-11-28 11:17:28',NULL),
(15,'Mang Tri','mangtri@mail.com','081330092930',NULL,NULL,'$2y$10$MeBeaWIks3YmkRSckp1NRuPk17I0oZF3/li6/dJvUx3.Y9JIzSsby','owner',NULL,'2021-11-28 11:37:48','2021-11-28 11:37:48',NULL),
(16,'Staff1','staff1@mail.com','0812312312',NULL,NULL,'$2y$10$STKzL4qUziS/cET3aOCYTu6c0M0l0ClJ2sHtGL6VfYxuyIApswzYG','staff',NULL,'2021-11-28 11:55:10','2021-11-28 11:55:10',NULL),
(17,'Staff 12','staff12@mail.com','081999000111',NULL,NULL,'$2y$10$e11mwlPiF18YNHZuIanZ4OrE0et4jnyJwYHGYR./ra7k/q62hQbxu','staff',NULL,'2021-12-02 15:52:21','2021-12-02 15:52:21',NULL),
(20,'Mang Tri 2','mangtri30@mail.com','081330092931',NULL,NULL,'$2y$10$w2e3YODo/FM38E76.xRTnOL/G0gPW/2mds.ScCZcvbkHfgKvt/PES','owner',NULL,'2021-12-06 16:22:28','2021-12-06 16:22:28',NULL),
(21,'Mang Tri 3','mangtri31@mail.com','081330092932',NULL,NULL,'$2y$10$WbcaDmTbtiKJFEkBcNCx1.Af5BYiMm72WUKraxjlSWuPrmk2XoFBq','owner',NULL,'2021-12-06 16:41:38','2021-12-06 16:41:38',NULL),
(24,'Mang Tri','manssgtri@mail.com','0813300930',NULL,NULL,'$2y$10$y4KOusWhzP5aeZAC.YkrVevqqeScaaNbSu.WmlVfvSjga6q4BNvIu','owner',NULL,'2021-12-07 00:58:47','2021-12-07 00:58:47',NULL),
(25,'widiana','widianapw@mail.com','111111111',NULL,NULL,'$2y$10$n5QB065OL.SDP94y6fVedO.5DoduZADdXNKJdex4hAFW4nvSO2nRC','owner',NULL,'2021-12-07 01:57:02','2021-12-07 01:57:02',NULL),
(26,'widiana','widianapaw@mail.com','1111111111',NULL,NULL,'$2y$10$zn7BhVjqir1NsCy1ks3cr.V3HVTnCct7QpvYMOM7DgVYO/Kb/ltJm','owner',NULL,'2021-12-07 10:15:20','2021-12-07 10:15:20',NULL),
(27,'widiana','widianapaw1@mail.com','11111111111',NULL,NULL,'$2y$10$0zFooVOpYWZR8X7w71ITWenWsGuY1x3DPo478oWtedrAmOInjCAum','owner',NULL,'2021-12-07 10:16:27','2021-12-07 10:16:27',NULL),
(28,'widiana','widianaputraa@mail.com','082146456432',NULL,NULL,'$2y$10$85ctHLFSYYi58AjrekoYwe5Iykqp5uBMybzs1o.ws9Pomi8CLJrse','owner',NULL,'2021-12-07 10:20:24','2021-12-07 10:20:24',NULL),
(30,'widiana','widianaputraaa@mail.com','0821464564321',NULL,NULL,'$2y$10$KlTe.E20MU2h2HC/pBSQjOydaWO7vCa6wBJVWymQAw/iZ9XgevXI2','owner',NULL,'2021-12-07 10:22:11','2021-12-07 10:22:11',NULL),
(31,'widiana','owner@mail.cox','0821464564320','https://res.cloudinary.com/retribusi/image/upload/v1645098040/bwgzxqb9o6lpfjpjihfs.jpg',NULL,'$2y$10$ji1G5AlTV8/m6qOfEyuEK.Nbb1CPHYNL.plKVtGiDQfHU9ezWJOE.','owner',NULL,'2021-12-09 14:08:05','2022-02-17 19:40:45',NULL),
(32,'widiana','widianaputraa@gmail.com','0821464564329',NULL,NULL,'$2y$10$xxWfWorAsh86jpp2blKkTeS2nLS7dUKXgiN7k/pWm68pk.xb1f2P6','owner',NULL,'2021-12-11 05:03:31','2021-12-11 05:03:31',NULL),
(33,'widianaaa','widianaputraa2@gmail.com','123123123',NULL,NULL,'$2y$10$fBUNOlwxj6qg705RpLdM5OHX7PtQmQ7FxDZ.QcO3v9J/M2vBpLv1u','owner',NULL,'2021-12-11 05:07:50','2021-12-11 05:07:50',NULL),
(34,'widiana putra winara','newwmail@finitree.com','666666666',NULL,NULL,'$2y$10$veoC8FCCRc4DKQMAJ/LTL.n7KnzUD/JMZclJQa9LZxI6eQ6pEjk8u','owner',NULL,'2021-12-11 05:19:34','2021-12-11 05:19:34',NULL),
(35,'Ngurah Wisma','hendrawanwisma26@gmail.com','082146811862',NULL,NULL,'$2y$10$46hdsxixK3DZtDEV8GUdy.n.1P14hmmIq9iXwWTtwN79AWZGHBesq','owner',NULL,'2021-12-24 12:53:45','2021-12-24 13:37:43',NULL),
(36,'widi','widiwidi@widi.com','08123123123','https://res.cloudinary.com/retribusi/image/upload/v1640854453/dhpepdiibdvwnf21ynvs.jpg',NULL,'$2y$10$XhJz0zH4gCtiSpYXYpqU8.TAbfq035hbCA4fHVpZ8A0VXbNOGcXqO','owner',NULL,'2021-12-30 16:37:37','2021-12-30 16:54:15',NULL),
(37,'widi','widi@me.com','08214645643',NULL,NULL,'$2y$10$Qb51qNj12EHPOWcD6sZZauSkDAU864xS1Mk/7oHl8HZ0ngjzXA6IW','staff',NULL,'2021-12-31 15:21:17','2021-12-31 15:21:17',NULL),
(38,'Ngurah Wisma','wisma@gmail.com','082222222',NULL,NULL,'$2y$10$TovVfFUicEAZ1/wiP7ZuguFWdc1TCQghrqovTexh4.jJJA8p9qkOy','owner',NULL,'2022-02-17 19:52:11','2022-02-17 19:52:11',NULL),
(39,'Ngurah Wisma','wis@gmail.com','081111111111','https://res.cloudinary.com/retribusi/image/upload/v1645099436/bglfnnmekoqvtbj18dpn.jpg',NULL,'$2y$10$/mRI23zwSFBtaNU3bF7kue00xOQp9EtlzIkfz2Oep4DXGoEVXFF16','owner',NULL,'2022-02-17 19:53:47','2022-02-17 20:03:59',NULL),
(40,'Gustu Rama','gustu@gmail.com','082672563523',NULL,NULL,'','admin',NULL,NULL,NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
