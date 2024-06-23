-- Adminer 4.8.1 MySQL 5.7.39 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `kamar`;
CREATE TABLE `kamar` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `no_kamar` varchar(255) NOT NULL,
  `id_tipe_kamar` bigint(20) unsigned NOT NULL,
  `status` enum('available','unavailable') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `no_kamar_unique` (`no_kamar`),
  KEY `id_tipe_kamar_foreign` (`id_tipe_kamar`),
  CONSTRAINT `kamar_ibfk_2` FOREIGN KEY (`id_tipe_kamar`) REFERENCES `tipe_kamar` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `kamar` (`id`, `no_kamar`, `id_tipe_kamar`, `status`, `created_at`, `updated_at`) VALUES
(1,	'100',	11,	'available',	NULL,	NULL);

DROP TABLE IF EXISTS `tipe_kamar`;
CREATE TABLE `tipe_kamar` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tipe` varchar(255) NOT NULL,
  `deskripsi` text,
  `harga` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_tipe` (`tipe`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `tipe_kamar` (`id`, `tipe`, `deskripsi`, `harga`, `created_at`, `updated_at`) VALUES
(9,	'single',	'single room type with 1-2 bed',	650000.00,	'2024-06-22 08:22:12',	'2024-06-22 08:22:12'),
(10,	'unique',	'unique room type with 2-4 bed',	750000.00,	'2024-06-22 08:23:46',	'2024-06-22 08:23:46'),
(11,	'simple',	'simple type room with 1-2 bed',	560000.00,	'2024-06-22 08:43:10',	'2024-06-23 02:10:47');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `no_hp` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `users` (`id`, `nama`, `email`, `no_hp`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(12,	'rido',	'zorrokeren3@gmail.com',	'082251063903',	'$2y$10$IjycK7hwsek7uv5jDFxaceY1z64EQPPapD9LUqIBSC4oZD9S5zZgq',	2,	1,	1718773275),
(13,	'admin',	'mr.narak3@gmail.com',	'089685080097',	'$2y$10$sO0/9jveQZEXz1x3dSOgaO4nE5E0ltI0ZlfmWLiUFyOnJHDRnXCSS',	1,	1,	1718778137),
(14,	'rido6',	'zorrokeren6@gmail.com',	'08225106390568',	'$2y$10$jAhhcatAy1qM0K0YxwCcAu0nCZeMeQ1ljS4v5Lwi4DckQ0Iw/LF72',	2,	1,	1718846373),
(15,	'Gilang',	'lang@gmail.com',	'08128712',	'$2y$10$WZsgPoVIUZ6WUOqxfzCVI.OmA0/eLLfX9XcLO/yVWgtsGDFq0sSAu',	2,	1,	1718846545),
(16,	'rido',	'zorrokeren6@gmail.com',	'13213252',	'$2y$10$cMc/LZtbTxhoPHlmp1f5kuwZ2qR8GEzwDl/DYOP3LiKt7c3DHqu/y',	2,	1,	1719067749);

DROP TABLE IF EXISTS `user_role`;
CREATE TABLE `user_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `user_role` (`id`, `role`) VALUES
(1,	'admin'),
(2,	'costumer');

-- 2024-06-23 10:38:36
