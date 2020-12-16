-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 16, 2020 at 08:30 AM
-- Server version: 5.7.31-log
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_8x`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2016_06_01_000001_create_oauth_auth_codes_table', 2),
(5, '2016_06_01_000002_create_oauth_access_tokens_table', 2),
(6, '2016_06_01_000003_create_oauth_refresh_tokens_table', 2),
(7, '2016_06_01_000004_create_oauth_clients_table', 2),
(8, '2016_06_01_000005_create_oauth_personal_access_clients_table', 2),
(9, '2020_12_15_220812_create_posts_table', 3),
(10, '2020_12_15_223858_create_products_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

DROP TABLE IF EXISTS `oauth_access_tokens`;
CREATE TABLE IF NOT EXISTS `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_access_tokens_user_id_index` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('f9a5a46fc9162b90f66cd12babdf046a129bb6c8e9f155da59f1f2be8ebb7af12869a50ef6e790c6', 101, 1, 'MyApp', '[]', 0, '2020-12-15 15:21:01', '2020-12-15 15:21:01', '2021-12-15 22:21:01'),
('a1e8c56d2947800e487eae4be1ab16b8a01a2d89f39a26e2ebdfc95ef099bd970cc4ae4f7c142f36', 101, 1, 'MyApp', '[]', 0, '2020-12-15 15:23:41', '2020-12-15 15:23:41', '2021-12-15 22:23:41'),
('14c188d251e9dc2aeb11536fa9530d689151147bb4069cd41dd1f2802b62cc4f31decc3c347d802c', 101, 1, 'MyApp', '[]', 0, '2020-12-15 15:23:54', '2020-12-15 15:23:54', '2021-12-15 22:23:54'),
('3605051160a070c12014bcab8c1d65de25cc4bc5b1515a4f55d8079078cdd1f7544651e5c342581e', 101, 1, 'MyApp', '[]', 0, '2020-12-15 15:24:15', '2020-12-15 15:24:15', '2021-12-15 22:24:15'),
('ab2beb6193f5d17e88a7f5453f976bfa38c5fcd6e6901dd25bbce4597775c5d8d7e28e78defcc0c5', 101, 1, 'MyApp', '[]', 0, '2020-12-15 15:25:33', '2020-12-15 15:25:33', '2021-12-15 22:25:33'),
('094ddae4d03de94b2813b9024ae1e4c018d894bbe0b95334beb991c3b5725e7fac9a6a2f40f78c8a', 101, 1, 'MyApp', '[]', 0, '2020-12-15 15:44:18', '2020-12-15 15:44:18', '2021-12-15 22:44:18'),
('b09ba7e7ab4777541467f318f6a4d8d67281660fa7a72b218b4e73592f672f89f45081b40332789d', 101, 1, 'MyApp', '[]', 0, '2020-12-15 15:44:21', '2020-12-15 15:44:21', '2021-12-15 22:44:21'),
('6d7889df82da21f613f847f34d6a300ecc651e56b197dcb59af2ed9cc90fc5b807f375cff0c887ec', 101, 1, 'MyApp', '[]', 0, '2020-12-15 15:47:52', '2020-12-15 15:47:52', '2021-12-15 22:47:52'),
('96c66d90a2702753d8588ff7ae3cbe8dde1321bdb6547c83c864d7c71b0a356060bcaf75fd8e29b6', 101, 1, 'MyApp', '[]', 0, '2020-12-15 22:52:30', '2020-12-15 22:52:30', '2021-12-16 05:52:30'),
('0fd3449c39535d48cdff5f03e3f838305075c4bd43d0f3647010c6f8db23beba2b71eaae9df327f7', 101, 1, 'MyApp', '[]', 0, '2020-12-15 23:56:04', '2020-12-15 23:56:04', '2021-12-16 06:56:04'),
('b6bc3be9af47b5e2bb16998e70b8a1ef31054cf86d4d8f4f2665fc0d9ebc510a1b64a29ccdd63718', 101, 1, 'MyApp', '[]', 0, '2020-12-15 23:56:07', '2020-12-15 23:56:07', '2021-12-16 06:56:07'),
('cd1702a9e9f488eea05e2836f7fb71504b703047d5bfbca02a5f6acc6ac4ad7df0d8f4ce7c569c9b', 101, 1, 'MyApp', '[]', 0, '2020-12-15 23:56:11', '2020-12-15 23:56:11', '2021-12-16 06:56:11'),
('14d2f11c32ae5b7658a804b6101497e46061267f713a920599f9186bd7aa0c49c9a4828f6d95710e', 101, 1, 'MyApp', '[]', 0, '2020-12-16 00:02:47', '2020-12-16 00:02:47', '2021-12-16 07:02:47'),
('0df5f49fcb85279d7c8fdd91271e3c1494f1ac206faa8dd0125e30cfcf627e63e2517813b5649096', 1, 1, 'MyApp', '[]', 0, '2020-12-16 00:03:24', '2020-12-16 00:03:24', '2021-12-16 07:03:24'),
('c9078ba7eb36ac9f0adbb06012a9c32eb6611f7eb48af1a9ff8861d5e54d2f2a0bc5574b5c3dfd5a', 2, 1, 'MyApp', '[]', 0, '2020-12-16 00:03:30', '2020-12-16 00:03:30', '2021-12-16 07:03:30'),
('7b72b56143a9ab913ca60280bec3ca32590ec85dc0218c2d50d5988fc90bac5514214f9ecdcee98f', 3, 1, 'MyApp', '[]', 0, '2020-12-16 00:03:37', '2020-12-16 00:03:37', '2021-12-16 07:03:37'),
('742f59504617860119930df83d331d7819cea02bd0c56ded5211e12576979630ead604a940001773', 1, 1, 'MyApp', '[]', 0, '2020-12-16 00:03:40', '2020-12-16 00:03:40', '2021-12-16 07:03:40'),
('c409ca2444b437948a8b7b4092dc269de2ee1e4935d1ab859c50a79aa47f0e125782df396dae1533', 2, 1, 'MyApp', '[]', 0, '2020-12-16 00:03:41', '2020-12-16 00:03:41', '2021-12-16 07:03:41'),
('29cc44e26def7bcadd8e454a58145543a3e383e095fb013860b8980b0c0c56bf5ea868894a60757f', 3, 1, 'MyApp', '[]', 0, '2020-12-16 00:03:41', '2020-12-16 00:03:41', '2021-12-16 07:03:41'),
('63eb4c0f87e5e52b603b4f6ef5d408c67f8e0b4ac26eb4c9ba36ee23875ac50f0dd6019b4d15d5ea', 1, 1, 'MyApp', '[]', 0, '2020-12-16 00:07:14', '2020-12-16 00:07:14', '2021-12-16 07:07:14'),
('17819ff6e852b6836225efb94df7c8f0d0c90003b79cee1eb7ae85008fec4feeb9eac46d2b3bdaa7', 2, 1, 'MyApp', '[]', 0, '2020-12-16 00:07:14', '2020-12-16 00:07:14', '2021-12-16 07:07:14'),
('358cca4a587b9ef1db38689c5773164832fdd101b1d7cef593930dc7d92664dbbe5a94a2534353fa', 3, 1, 'MyApp', '[]', 0, '2020-12-16 00:07:14', '2020-12-16 00:07:14', '2021-12-16 07:07:14'),
('7d0095fa2ff18bd3145ad2123e053c48a8808346e97b2d886ba9d60b2e5afa64d4eea2db566ff20f', 1, 1, 'MyApp', '[]', 0, '2020-12-16 00:07:45', '2020-12-16 00:07:45', '2021-12-16 07:07:45'),
('e759590f1437a4d2b939af446a50e4cb3ff7c9a1d06993b734e80f176eab18e5f3d038a2c59df379', 2, 1, 'MyApp', '[]', 0, '2020-12-16 00:07:46', '2020-12-16 00:07:46', '2021-12-16 07:07:46'),
('46c971d8d7979e8dcafa679329d49968361b949622b536161069f607fa3dae15b18a85d9639ef9e1', 3, 1, 'MyApp', '[]', 0, '2020-12-16 00:07:46', '2020-12-16 00:07:46', '2021-12-16 07:07:46'),
('7708bbf1ca68114ff38ab7a1b06d475b184ae77e1e583f71f49828f20d32f107dfe0e5c8b0d777ce', 1, 1, 'MyApp', '[]', 0, '2020-12-16 00:21:44', '2020-12-16 00:21:44', '2021-12-16 07:21:44'),
('de15a62a7b973075303bc0eedb762684087e334ce9d2d7d0e677366d85f6e7317e37554505bf9ac7', 2, 1, 'MyApp', '[]', 0, '2020-12-16 00:21:44', '2020-12-16 00:21:44', '2021-12-16 07:21:44'),
('57f29a5c7cb61d7698a0a385c02cddb2f5de481e0447fdc1c37194a4af67d4834c7345c1294b11bb', 3, 1, 'MyApp', '[]', 0, '2020-12-16 00:21:44', '2020-12-16 00:21:44', '2021-12-16 07:21:44'),
('36dfb9ecda7ea09d8e1557bf86eee3362f84fc01babe579dc6269ea6d90bc9c48d95dee2f13f4475', 1, 1, 'MyApp', '[]', 0, '2020-12-16 00:22:54', '2020-12-16 00:22:54', '2021-12-16 07:22:54'),
('039fcf7b84a289c22b8f1ed0bfa61b43c7e93ed263fb82d0fc70d05b482d75303475320191e0c638', 2, 1, 'MyApp', '[]', 0, '2020-12-16 00:22:54', '2020-12-16 00:22:54', '2021-12-16 07:22:54'),
('0bdda1e66409fd9b3b63aa5233e1e39aa6835cc1648be6483b4d722fe2433a7cd38d55081d613ac5', 3, 1, 'MyApp', '[]', 0, '2020-12-16 00:22:54', '2020-12-16 00:22:54', '2021-12-16 07:22:54'),
('e4c332389e822c9d6c3a78a6a35a769c40eda8c2f7f2580999614b5e3a37b3223f2b88a7bae70550', 1, 1, 'MyApp', '[]', 0, '2020-12-16 00:24:27', '2020-12-16 00:24:27', '2021-12-16 07:24:27'),
('df08af8b2e51e062855ba8177b41ad2f527e96c6babbfeb163910cb1dd9f28c0d5385c5b51a43ec6', 2, 1, 'MyApp', '[]', 0, '2020-12-16 00:24:27', '2020-12-16 00:24:27', '2021-12-16 07:24:27'),
('605d7a8f771f2d1cde15baf228537d6fedb8b7cd65727e9d413c0365a3be4c624ebe8772cd02e3dd', 3, 1, 'MyApp', '[]', 0, '2020-12-16 00:24:27', '2020-12-16 00:24:27', '2021-12-16 07:24:27'),
('09a595f3fe1591a80afa16b117acf27335b84223245573d7d71908b0ff95015ff84de3e34f1d3961', 1, 1, 'MyApp', '[]', 0, '2020-12-16 00:24:32', '2020-12-16 00:24:32', '2021-12-16 07:24:32'),
('64c17057eb0f0fc732c9970b1a980d3bac48d8b4c9adbe6dacbbd81eea424f2d2ffaa0990f71a279', 1, 1, 'MyApp', '[]', 0, '2020-12-16 00:24:32', '2020-12-16 00:24:32', '2021-12-16 07:24:32'),
('533b46ab945db3e1c124787dfe33a914418c462618d4c383a0c80dfbbe367c3b2a3ecfb2da93a72d', 2, 1, 'MyApp', '[]', 0, '2020-12-16 00:24:32', '2020-12-16 00:24:32', '2021-12-16 07:24:32'),
('ce5fe51f273214f8c151ee3e17ff6582c6e60d4ccce82572822fc963a1afdf37ac95264048a109b8', 2, 1, 'MyApp', '[]', 0, '2020-12-16 00:24:33', '2020-12-16 00:24:33', '2021-12-16 07:24:33'),
('e5a3eeca275dd0396d1fe2b2b671c7182231c3e700dd650ef4fe7861ec4582ac6eda1a0894cbcdd9', 3, 1, 'MyApp', '[]', 0, '2020-12-16 00:24:33', '2020-12-16 00:24:33', '2021-12-16 07:24:33'),
('7c97a17e99c1448151d1ca7e8a74b3bdcd208d8713c17f8b0453cfcd1a3f651b03f1d174a6cd6fe2', 3, 1, 'MyApp', '[]', 0, '2020-12-16 00:24:33', '2020-12-16 00:24:33', '2021-12-16 07:24:33'),
('c8a84cca14cf038b51da62c8504fc1208abd49452e65c7a8e677ad00441edeef93963a54e745840d', 1, 1, 'MyApp', '[]', 0, '2020-12-16 00:24:33', '2020-12-16 00:24:33', '2021-12-16 07:24:33'),
('14204d5fdb78bfff27bb29a8c9f2dbeea7fa5f6ae8fef396193afe2881d9b7805437369672b6f48e', 2, 1, 'MyApp', '[]', 0, '2020-12-16 00:24:33', '2020-12-16 00:24:33', '2021-12-16 07:24:33'),
('5e07fa5b1d7a558e931d94b8512420d798bfcce4f6a6992e902e6181795638c9f3e2750f16fb947d', 1, 1, 'MyApp', '[]', 0, '2020-12-16 00:24:33', '2020-12-16 00:24:33', '2021-12-16 07:24:33'),
('d41218385dfb23c835172ed00ae13c393a4aa4a591250cf24002e7df9564e8cb980068b1abc069b8', 3, 1, 'MyApp', '[]', 0, '2020-12-16 00:24:33', '2020-12-16 00:24:33', '2021-12-16 07:24:33'),
('924cfed0cdb5cf73c9a2af3fe9e69f366f37560a8cae4c68aa47f1545de08d5681bf941c61e390b2', 2, 1, 'MyApp', '[]', 0, '2020-12-16 00:24:33', '2020-12-16 00:24:33', '2021-12-16 07:24:33'),
('97a027df16542975102fb377b813822eedf3ab194ed8482f6fcf8017a2a29000db0c5aa55db12d5d', 1, 1, 'MyApp', '[]', 0, '2020-12-16 00:24:33', '2020-12-16 00:24:33', '2021-12-16 07:24:33'),
('167c86d6c8709279604544e024b3e9f2ee878e2e1a2b4f67cbd8153004e7a326c091eeaeda001d0f', 3, 1, 'MyApp', '[]', 0, '2020-12-16 00:24:33', '2020-12-16 00:24:33', '2021-12-16 07:24:33'),
('efc56224516277cb4f798ffc9d110cc926541d34581af9082047600d28b21bff6cd5afe2745dd3cf', 2, 1, 'MyApp', '[]', 0, '2020-12-16 00:24:33', '2020-12-16 00:24:33', '2021-12-16 07:24:33'),
('1d47ebd51e6ccc0c8d8ed016af0207bd1bd237c8803ffb76c7436bb6fb8adf4144151cb38721630d', 3, 1, 'MyApp', '[]', 0, '2020-12-16 00:24:34', '2020-12-16 00:24:34', '2021-12-16 07:24:34'),
('915669f8a90d1d43e087210521c44743ef18e58870b09d73d0a728cacf9244e9f5476f374958e294', 1, 1, 'MyApp', '[]', 0, '2020-12-16 00:25:09', '2020-12-16 00:25:09', '2021-12-16 07:25:09'),
('a937372356531f3674d3d1f8bf6a8e808ddf439a1b65702d42e996fad4f3f58593f5ec9564b8328b', 2, 1, 'MyApp', '[]', 0, '2020-12-16 00:25:09', '2020-12-16 00:25:09', '2021-12-16 07:25:09'),
('a4b33423f11e90ab3ec0af2f79a18bc3c733a2daa6c0ce5c3d1a450fb63e601a0bc743f1278abd52', 3, 1, 'MyApp', '[]', 0, '2020-12-16 00:25:09', '2020-12-16 00:25:09', '2021-12-16 07:25:09'),
('9fd60985e677b497f98f9d4391052cef196ab66c6eec91d910c3327b69fc9961ed392a9ee8d3c11f', 1, 1, 'MyApp', '[]', 0, '2020-12-16 00:25:30', '2020-12-16 00:25:30', '2021-12-16 07:25:30'),
('71a7dae7b2aaebb0a667f3d88d85f766db6d1fe204532fbd6b9dbec3636e1837846d0ef8619ca7a3', 2, 1, 'MyApp', '[]', 0, '2020-12-16 00:25:30', '2020-12-16 00:25:30', '2021-12-16 07:25:30'),
('ed493b566d790cd3bff38d3871c0292fe9b62b8937a7230ee404007b48a2dcca5b879018a7f07f11', 3, 1, 'MyApp', '[]', 0, '2020-12-16 00:25:31', '2020-12-16 00:25:31', '2021-12-16 07:25:31'),
('a1633e9fb2bdb272e9848bf178d23b656c07d04c2caa1fe425172fb9e5f9fa30c1225d8c87c71686', 1, 1, 'MyApp', '[]', 0, '2020-12-16 00:28:21', '2020-12-16 00:28:21', '2021-12-16 07:28:21'),
('02a811232a54347425d53907ef8c1a3713f0add4db9dafa0609368a556e3e41a65e819fabab7c9fd', 2, 1, 'MyApp', '[]', 0, '2020-12-16 00:28:21', '2020-12-16 00:28:21', '2021-12-16 07:28:21'),
('755211749f64b6bf2f9833d874257353106352300ae0b28ef506d5b7ce43c0b021afd49b0ea989d0', 3, 1, 'MyApp', '[]', 0, '2020-12-16 00:28:21', '2020-12-16 00:28:21', '2021-12-16 07:28:21'),
('cbd310234d71943f25106743446e1fdd3f8128c22645b5830fe5f025073ec6801ad9b4d5af2dba3a', 1, 1, 'MyApp', '[]', 0, '2020-12-16 00:30:03', '2020-12-16 00:30:03', '2021-12-16 07:30:03'),
('6542eb384cfbf71f8ae03acda17377c873588c4ff0cb83dc541935830c081e62ad4c96e7d4ae6cdb', 2, 1, 'MyApp', '[]', 0, '2020-12-16 00:30:03', '2020-12-16 00:30:03', '2021-12-16 07:30:03'),
('27f6257c06f8860272c3ed7ca1dfd195b01862489260b99e5fa105d973bbd10ba5fa96e70b0e5efd', 3, 1, 'MyApp', '[]', 0, '2020-12-16 00:30:03', '2020-12-16 00:30:03', '2021-12-16 07:30:03'),
('e390d657539bb3ec8c82c414f0163aa71b48bd14c24466a295987f40b3d18f4d75c701c58331a561', 1, 1, 'MyApp', '[]', 0, '2020-12-16 00:30:06', '2020-12-16 00:30:06', '2021-12-16 07:30:06'),
('75056bb036494f566acf629193c4a3d25faa6db725d7ff46d2ca5c27b8f465dbdbc6d52689211a3b', 2, 1, 'MyApp', '[]', 0, '2020-12-16 00:30:06', '2020-12-16 00:30:06', '2021-12-16 07:30:06'),
('6075d40a893b395cd69995e36324ebc4fb4658db544beb45176f619ed426f7594ee8a4e494b2242a', 3, 1, 'MyApp', '[]', 0, '2020-12-16 00:30:06', '2020-12-16 00:30:06', '2021-12-16 07:30:06'),
('5c7e342dc3b7f87f571f27c2183be4663f967d955131b595682567b74df4631f957b7254f90e1335', 1, 1, 'MyApp', '[]', 0, '2020-12-16 00:42:27', '2020-12-16 00:42:27', '2021-12-16 07:42:27'),
('6bbed154b8c0a044bbe4c5f7ca3cf4bc989889869eb1bb3fa294b5a83755900991026f9b7faba031', 2, 1, 'MyApp', '[]', 0, '2020-12-16 00:42:27', '2020-12-16 00:42:27', '2021-12-16 07:42:27'),
('a022e882c3a06e108f9ae03809843f0e3ed89a3c3b7a35cf0367dec14b30e8c82696770f323b86db', 3, 1, 'MyApp', '[]', 0, '2020-12-16 00:42:27', '2020-12-16 00:42:27', '2021-12-16 07:42:27'),
('c656d6140ce64126efb47a8b9b177cb9a7076becc4de5cf4b483d7ac114bfb034a0f84261e3646ee', 1, 1, 'MyApp', '[]', 0, '2020-12-16 00:54:35', '2020-12-16 00:54:35', '2021-12-16 07:54:35'),
('ddb4349d69868a313d15c2eb24062200699c2e5cace129bcbc96d7385b24e9db2d476326c99202f6', 2, 1, 'MyApp', '[]', 0, '2020-12-16 00:54:35', '2020-12-16 00:54:35', '2021-12-16 07:54:35'),
('d1a641045490d179a1f119ce980a16f0324a31c4bacaa2d0a7067bba5c562e4170cb334393bdd5cc', 3, 1, 'MyApp', '[]', 0, '2020-12-16 00:54:35', '2020-12-16 00:54:35', '2021-12-16 07:54:35'),
('607287f9a4440f27f9a3403cd1d6c1a595e9adc8a516654f54daa5651a610978ce7957a97257bde0', 1, 1, 'MyApp', '[]', 0, '2020-12-16 01:02:03', '2020-12-16 01:02:03', '2021-12-16 08:02:03'),
('cf3069021eed4c84884a8dde44dce3336a6ece6c8f8a776ec50acfb01170b531c205dba41d367fe5', 2, 1, 'MyApp', '[]', 0, '2020-12-16 01:02:03', '2020-12-16 01:02:03', '2021-12-16 08:02:03'),
('e359d8ee052be0823192131d579da4dfc125dc2a0adb01d16c58a7839becd6da7bf563911ae34745', 3, 1, 'MyApp', '[]', 0, '2020-12-16 01:02:04', '2020-12-16 01:02:04', '2021-12-16 08:02:04'),
('ad52ee1c47e91a244f7725758093b65452b553d7744dd4c7132f888748ded6008173a6a28bf8aa2d', 1, 1, 'MyApp', '[]', 0, '2020-12-16 01:02:14', '2020-12-16 01:02:14', '2021-12-16 08:02:14'),
('267fdcb8b573f8cca1164fed173481893dc7410bda0674268dad63cee89d405715e2bfdb3bba3f90', 2, 1, 'MyApp', '[]', 0, '2020-12-16 01:02:14', '2020-12-16 01:02:14', '2021-12-16 08:02:14'),
('675b813257df4590f92267eddad3918446f602af19439815c48d64a924255fe6dc546c0fcd84fd5d', 3, 1, 'MyApp', '[]', 0, '2020-12-16 01:02:14', '2020-12-16 01:02:14', '2021-12-16 08:02:14'),
('055eeb360c70f6ed5d0859d6a6b3eec22a60f638a7fb158f630bb972842f67fbb4ec9e2090edfc12', 4, 1, 'MyApp', '[]', 0, '2020-12-16 01:03:56', '2020-12-16 01:03:56', '2021-12-16 08:03:56'),
('7eafe102198d5f5d093065a891ff9faf2c1927038a797b69bef70da8671c55f67fca93386e8ccebd', 1, 1, 'MyApp', '[]', 0, '2020-12-16 01:17:45', '2020-12-16 01:17:45', '2021-12-16 08:17:45'),
('5b896df01d138c5b2357d243dc557876475e0c99b5a338fe17bca96503e25468b742c28f2874038d', 2, 1, 'MyApp', '[]', 0, '2020-12-16 01:17:45', '2020-12-16 01:17:45', '2021-12-16 08:17:45'),
('1d07998a4af4765bc66f967a85c44667e340a9c6ac89a9ec9092ed87faa06062bd7e36dd072a5453', 3, 1, 'MyApp', '[]', 0, '2020-12-16 01:17:45', '2020-12-16 01:17:45', '2021-12-16 08:17:45'),
('7470b3970082f4d457cd61cde74a55c21cd0b92f03a486c306204edc69c96099729b3f75c68d289b', 4, 1, 'MyApp', '[]', 0, '2020-12-16 01:17:45', '2020-12-16 01:17:45', '2021-12-16 08:17:45');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

DROP TABLE IF EXISTS `oauth_auth_codes`;
CREATE TABLE IF NOT EXISTS `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_auth_codes_user_id_index` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

DROP TABLE IF EXISTS `oauth_clients`;
CREATE TABLE IF NOT EXISTS `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'CPRoIrOVnj0qpyXL8hQAbSkn6ylFhdiCn9DzZRXc', NULL, 'http://localhost', 1, 0, 0, '2020-12-15 15:00:42', '2020-12-15 15:00:42'),
(2, NULL, 'Laravel Password Grant Client', '3z018DerdLmB3iFqgap8lKRxYHObVn8tpDI1rjGR', 'users', 'http://localhost', 0, 1, 0, '2020-12-15 15:00:42', '2020-12-15 15:00:42');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

DROP TABLE IF EXISTS `oauth_personal_access_clients`;
CREATE TABLE IF NOT EXISTS `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2020-12-15 15:00:42', '2020-12-15 15:00:42');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

DROP TABLE IF EXISTS `oauth_refresh_tokens`;
CREATE TABLE IF NOT EXISTS `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `detail`, `created_at`, `updated_at`) VALUES
(1, '3fDI6UfXZZ', '7modJLtNoBTxTtoFNPFwsv7LoH6RGpXiRBhcODbRdXSZY7R0A6z20vmjUxrrLLdGppTlcDCC8GiLiLw5NvqTGR0QIb4DjQnHI0Oj', '2020-12-16 01:30:04', '2020-12-16 01:30:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'user1', 'user1@gmail.com', NULL, '$2y$10$7D1ydyW/.pHRZ1tPZ3zbee58Umu2.HBJOC2./NhPKRqVLor/oCrmy', NULL, '2020-12-16 00:03:24', '2020-12-16 00:03:24'),
(2, 'user2', 'user2@gmail.com', NULL, '$2y$10$XJI3sypuIwG9KAcxS6GZk.oqjFYBy.S.6P01w3nCwZ4KggxBaXrGi', NULL, '2020-12-16 00:03:30', '2020-12-16 00:03:30'),
(3, 'user3', 'user3@gmail.com', NULL, '$2y$10$jFGCDLWjvxDxk8f4PqFPTO6Bctbkb/TgRGD8JFzWci20iX9LsCCAi', NULL, '2020-12-16 00:03:37', '2020-12-16 00:03:37'),
(4, 'user4', 'user4@gmail.com', NULL, '$2y$10$ahGDxUt2SAejBU/K8CeXg.WfM3V1/uPV94FWSMKHvFp8r8E/jGcqO', NULL, '2020-12-16 01:03:56', '2020-12-16 01:03:56');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
