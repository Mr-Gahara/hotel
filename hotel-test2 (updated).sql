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
(4,	'103',	10,	'unavailable',	'2024-06-24 07:59:21',	'2024-06-24 07:59:21'),
(5,	'101',	10,	'unavailable',	'2024-06-25 16:35:20',	'2024-06-25 16:35:20'),
(6,	'110',	9,	'unavailable',	'2024-06-25 18:37:00',	'2024-06-25 18:37:00'),
(7,	'102',	10,	'unavailable',	'2024-06-25 23:11:36',	'2024-06-25 23:11:56'),
(8,	'104',	11,	'available',	'2024-06-30 06:54:53',	'2024-06-30 06:54:53'),
(9,	'105',	11,	'available',	'2024-06-30 06:55:14',	'2024-06-30 06:55:14');

DROP TABLE IF EXISTS `pembayaran`;
CREATE TABLE `pembayaran` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_pemesanan` bigint(20) unsigned NOT NULL,
  `total_harga` decimal(10,2) NOT NULL,
  `tanggal_pembayaran` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status_pembayaran` enum('sudah dibayar','belum dibayar') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_pemesanan` (`id_pemesanan`),
  CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`id_pemesanan`) REFERENCES `pemesanan` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `pembayaran` (`id`, `id_pemesanan`, `total_harga`, `tanggal_pembayaran`, `created_at`, `updated_at`, `status_pembayaran`) VALUES
(1,	12,	730000.00,	'2024-06-26',	NULL,	NULL,	'sudah dibayar'),
(7,	16,	830000.00,	'2024-06-26',	'2024-06-29 03:21:23',	'2024-06-29 03:21:23',	'sudah dibayar'),
(9,	13,	750000.00,	'2024-06-27',	'2024-06-29 03:53:25',	'2024-06-29 03:53:25',	'sudah dibayar');

DROP TABLE IF EXISTS `pemesanan`;
CREATE TABLE `pemesanan` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_user` bigint(20) unsigned NOT NULL,
  `id_kamar` bigint(20) unsigned NOT NULL,
  `tgl_check_in` date NOT NULL,
  `tgl_check_out` date NOT NULL,
  `total_harga` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `sarapan` enum('yes','no') NOT NULL,
  `harga_sarapan` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user_foreign` (`id_user`),
  KEY `id_kamar_foreign` (`id_kamar`),
  CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`id_kamar`) REFERENCES `kamar` (`id`) ON DELETE CASCADE,
  CONSTRAINT `pemesanan_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `pemesanan` (`id`, `id_user`, `id_kamar`, `tgl_check_in`, `tgl_check_out`, `total_harga`, `created_at`, `updated_at`, `sarapan`, `harga_sarapan`) VALUES
(12,	12,	6,	'2024-07-04',	'2024-07-05',	730000.00,	'2024-06-25 23:09:37',	'2024-06-29 10:38:03',	'yes',	80000.00),
(13,	12,	7,	'2024-06-26',	'2024-06-27',	750000.00,	'2024-06-25 23:12:24',	'2024-06-26 06:12:31',	'yes',	80000.00),
(14,	14,	5,	'2024-07-05',	'2024-07-06',	830000.00,	'2024-06-25 23:16:38',	'2024-06-26 06:16:38',	'yes',	80000.00),
(16,	15,	4,	'2024-06-26',	'2024-06-28',	830000.00,	'2024-06-25 23:40:51',	'2024-06-26 06:45:17',	'no',	0.00);

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
(9,	'single',	'single room type with 1 small bed',	650000.00,	'2024-06-22 08:22:12',	'2024-06-30 01:10:46'),
(10,	'family',	'unique room type with 2-4 bed',	750000.00,	'2024-06-22 08:23:46',	'2024-06-25 22:49:50'),
(11,	'simple',	'simple type room with 1-2 bed',	560000.00,	'2024-06-22 08:43:10',	'2024-06-23 02:10:47');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `no_hp` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `role_id` (`role_id`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `users` (`id`, `nama`, `email`, `no_hp`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(12,	'rido',	'zorrokeren3@gmail.com',	'082251063903',	'$2y$10$wHN3DEkt1zfqBhNWySMgsuf4t5r.0VjWESeBJ5qOpvyNlmbCg0qty',	2,	1,	1718773275),
(13,	'admin',	'mr.narak3@gmail.com',	'089685080097',	'$2y$10$sO0/9jveQZEXz1x3dSOgaO4nE5E0ltI0ZlfmWLiUFyOnJHDRnXCSS',	1,	1,	1718778137),
(14,	'rido6',	'zorrokeren6@gmail.com',	'08225106390568',	'$2y$10$jAhhcatAy1qM0K0YxwCcAu0nCZeMeQ1ljS4v5Lwi4DckQ0Iw/LF72',	2,	1,	1718846373),
(15,	'Gilang',	'lang@gmail.com',	'08128712',	'$2y$10$WZsgPoVIUZ6WUOqxfzCVI.OmA0/eLLfX9XcLO/yVWgtsGDFq0sSAu',	2,	1,	1718846545),
(17,	'Muhammad Akbar Saputra',	'm.akbar.saputra03@gmail.com',	'089685080097',	'$2y$10$Ajwxk6Mwd2eIicIamHXQUezy92WnEvVlJwqq1B.wV8WzVXH41DzHK',	1,	1,	1719653256);

DROP TABLE IF EXISTS `user_role`;
CREATE TABLE `user_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `user_role` (`id`, `role`) VALUES
(1,	'admin'),
(2,	'costumer');

-- 2024-06-30 15:20:07
