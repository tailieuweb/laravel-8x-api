-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 17, 2021 at 08:35 AM
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
-- Database: `sontoken`
--


-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Primary key',
  `context_id` int(11) NOT NULL COMMENT 'Context ID',
  `category_id_parent` int(11) DEFAULT NULL COMMENT 'ID of category parent',
  `category_id_parent_str` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'List of ids of category parent',
  `category_id_child_str` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'List of ids of category child',
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Category name',
  `category_order` int(11) NOT NULL COMMENT 'Order in list of categories',
  `category_slug` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Slug in URL',
  `category_url` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Category url',
  `category_icon` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Category icon',
  `category_overview` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Category overview',
  `category_description` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Category description',
  `category_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Image path',
  `status` tinyint(4) DEFAULT '1' COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) NOT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) NOT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `context_id`, `category_id_parent`, `category_id_parent_str`, `category_id_child_str`, `category_name`, `category_order`, `category_slug`, `category_url`, `category_icon`, `category_overview`, `category_description`, `category_image`, `status`, `sequence`, `created_user_id`, `updated_user_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 2, NULL, NULL, '{\"2\":1,\"3\":1}', 'Group A', 1, 'group-a', 'groupa', '1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>', NULL, 99, NULL, 1, 1, NULL, '2021-06-17 00:12:06', '2021-06-17 00:12:30'),
(2, 2, 1, '{\"1\":1}', NULL, 'Group A1', 1, 'group-a1', 'groupa', '1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>', NULL, 99, NULL, 1, 1, NULL, '2021-06-17 00:12:21', '2021-06-17 00:12:21'),
(3, 2, 1, '{\"1\":1}', NULL, 'Group A2', 1, 'group-a2', 'groupa', '1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>', NULL, 99, NULL, 1, 1, NULL, '2021-06-17 00:12:30', '2021-06-17 00:12:30'),
(4, 2, NULL, NULL, '{\"5\":1,\"6\":1}', 'Group B', 1, 'group-b', 'groupa', '1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>', NULL, 99, NULL, 1, 1, NULL, '2021-06-17 00:12:38', '2021-06-17 00:12:59'),
(5, 2, 4, '{\"4\":1}', NULL, 'Group B1', 1, 'group-b1', 'groupa', '1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>', NULL, 99, NULL, 1, 1, NULL, '2021-06-17 00:12:50', '2021-06-17 00:12:50'),
(6, 2, 4, '{\"4\":1}', NULL, 'Group B2', 1, 'group-b2', 'groupa', '1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>', NULL, 99, NULL, 1, 1, NULL, '2021-06-17 00:12:59', '2021-06-17 00:12:59');

-- --------------------------------------------------------

--
-- Table structure for table `contexts`
--

DROP TABLE IF EXISTS `contexts`;
CREATE TABLE IF NOT EXISTS `contexts` (
  `context_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Primary key',
  `context_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Context name',
  `context_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Context key',
  `context_ref` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Context references',
  `context_slug` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Context slug',
  `context_notes` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Category overview',
  `status` tinyint(4) DEFAULT '1' COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) NOT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) NOT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`context_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contexts`
--

INSERT INTO `contexts` (`context_id`, `context_name`, `context_key`, `context_ref`, `context_slug`, `context_notes`, `status`, `sequence`, `created_user_id`, `updated_user_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'User level', 'ab7e417e2dddc5e5240b586d454e', 'user/level', NULL, NULL, 99, NULL, 1, 1, NULL, '2021-04-26 01:56:47', '2021-04-26 01:56:47'),
(2, 'User department', 'ab7e417e2dddc5e5240b586d454f', 'user/department', NULL, NULL, 99, NULL, 1, 1, NULL, '2021-04-26 01:56:47', '2021-04-26 01:56:47'),
(3, 'User department', '3cdad13bbced95e9f7b4cc', 'admin/posts', NULL, NULL, 99, NULL, 1, 1, NULL, '2021-06-16 02:04:59', '2021-06-16 02:05:37');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci,
  `protected` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `groups_name_unique` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `permissions`, `protected`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', '{\"_superadmin\":1}', 0, '2021-04-26 01:56:47', '2021-04-26 01:56:47'),
(2, 'editor', '{\"_user-editor\":1,\"_group-editor\":1}', 0, '2021-04-26 01:56:47', '2021-04-26 01:56:47'),
(3, 'base admin', '{\"_user-editor\":1}', 0, '2021-04-26 01:56:47', '2021-04-26 01:56:47');

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
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(2, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(3, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(4, '2016_06_01_000004_create_oauth_clients_table', 1),
(5, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(6, '2021_02_23_084351_create_categories_table', 1),
(7, '2021_02_23_084351_create_posts_table', 1),
(8, '2021_02_23_084351_create_slideshow_styles_table', 1),
(9, '2021_02_23_084351_create_slideshows_table', 1),
(10, '2021_02_23_084421_create_contexts_table', 1),
(11, '2021_02_24_095545_create_users_table', 1),
(12, '2021_02_24_095623_create_user_groups_table', 1),
(13, '2021_02_24_095637_create_groups_table', 1),
(14, '2021_02_24_100000_create_password_resets_table', 1),
(15, '2021_02_24_122145_create_profile_field_types', 1),
(16, '2021_02_24_122155_create_profile_field', 1),
(17, '2021_02_24_160516_create_permission_table', 1),
(18, '2021_02_24_165011_create_user_profile_table', 1),
(19, '2021_02_24_225988_migration_cartalyst_sentry_install_throttle', 1);

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
('1e1aac1286cc07ec1f8df1f9bf76348fbdf6497da9e6add1d774c68c807ca1c681541efe2f23ad0e', 1, 1, 'MyApp', '[]', 0, '2021-04-26 01:59:30', '2021-04-26 01:59:30', '2022-04-26 08:59:30'),
('a165e7e62ef0feae0ae27cb78d11c0a8cd45573ff8a174d7d859c83b838ab37861aaea72b1c8190e', 2, 1, 'MyApp', '[]', 0, '2021-04-26 02:00:23', '2021-04-26 02:00:23', '2022-04-26 09:00:23'),
('1058517a4198b357a7b37a75a48626a5e5f01f954afc19aeb7b9e74ad940c7bb2b3122ad06bbef2f', 3, 1, 'MyApp', '[]', 0, '2021-04-26 02:01:36', '2021-04-26 02:01:36', '2022-04-26 09:01:36'),
('46bb46505ca4a7a3023d48527b151b9b65bd5ec3aa477e53211426148a4d3bf115bdc8d7aa26a6b6', 1, 1, 'MyApp', '[]', 0, '2021-04-26 02:03:47', '2021-04-26 02:03:47', '2022-04-26 09:03:47'),
('9cc71dbc5a8e8a6a16eee7ad310741497ddd6a1492fd9b1f8aa30593ff2efa4574705daccb3b3ba5', 2, 1, 'MyApp', '[]', 0, '2021-04-26 02:03:47', '2021-04-26 02:03:47', '2022-04-26 09:03:47'),
('71f378a56977055eefa9c5faf2bbf07fe153a1ca094aca5511574bdb4714aa0c500dba0860c23602', 3, 1, 'MyApp', '[]', 0, '2021-04-26 02:03:47', '2021-04-26 02:03:47', '2022-04-26 09:03:47'),
('f87588c6af1a4b8b0de1c63b25c5a3f442e3a39529440b6ad8a637a9367f6e0313d3385ca1e462c2', 1, 1, 'MyApp', '[]', 0, '2021-06-16 01:41:42', '2021-06-16 01:41:42', '2022-06-16 08:41:42'),
('55b9d286f4c452c1fafacb3c6c4b5bb5d4642888707fee4efb3ed9b69d8214625b13126db927f456', 4, 1, 'MyApp', '[]', 0, '2021-06-16 01:41:42', '2021-06-16 01:41:42', '2022-06-16 08:41:42'),
('9ddd3132ca33569b8c10495cc73757dfa13866e2b84fd5069f871b9e91368fca94727e7bebf2d322', 1, 1, 'MyApp', '[]', 0, '2021-06-16 01:47:40', '2021-06-16 01:47:40', '2022-06-16 08:47:40'),
('5a7f92215d7aee43f2d5a4ff5e810a51d609be71a00aa53b2fb3b8610b06cd5f0f7b5bbc0b63372e', 4, 1, 'MyApp', '[]', 0, '2021-06-16 01:47:40', '2021-06-16 01:47:40', '2022-06-16 08:47:40'),
('3f938edd3ce43fc6827dd484469c6832fa78c2836dd7c4d119d72c8f6d9d452cc0dadc9ca66e5e81', 1, 1, 'MyApp', '[]', 0, '2021-06-16 01:50:57', '2021-06-16 01:50:57', '2022-06-16 08:50:57'),
('ac91fac5ea7dc67a30eb3b119d1fa1bee4a7dc5eb3d0bdbf0e44a6968cb0e69a998498ad8b36c1a7', 4, 1, 'MyApp', '[]', 0, '2021-06-16 01:50:57', '2021-06-16 01:50:57', '2022-06-16 08:50:57'),
('be68a413f3ad624e8f4c1eef767551f90635170f058c9f07d5a41b5b5828c520e6151d53ac357972', 1, 1, 'MyApp', '[]', 0, '2021-06-16 01:52:26', '2021-06-16 01:52:26', '2022-06-16 08:52:26'),
('033cebc6caed52967fb3f74d85a11b37b65e19ae8091b6914ce91e7793d2df5084af902ddb059df5', 4, 1, 'MyApp', '[]', 0, '2021-06-16 01:52:26', '2021-06-16 01:52:26', '2022-06-16 08:52:26'),
('82f2d42c7a1eaa78907739ff689da5ee9d71c55173629b73dc0669948f8be9fbb1523eb78735cb6d', 1, 1, 'MyApp', '[]', 0, '2021-06-16 02:10:05', '2021-06-16 02:10:05', '2022-06-16 09:10:05'),
('dac3b8d50ab3652c3bf3fbae67687f3f8c250b1ce6749af01462db655f029e3a1072a71d1fd8f196', 4, 1, 'MyApp', '[]', 0, '2021-06-16 02:10:05', '2021-06-16 02:10:05', '2022-06-16 09:10:05'),
('9fcd267f8926f8d25f895080687caba451eef8f0c72484e6e08650e81a20d29555b94732edcba8db', 1, 1, 'MyApp', '[]', 0, '2021-06-16 02:15:27', '2021-06-16 02:15:27', '2022-06-16 09:15:27'),
('08012862f33a404e0af21b8e6a3a97801692520a9f34879d0f6775afe8f4faa6b22b7a42c3cf9a8c', 4, 1, 'MyApp', '[]', 0, '2021-06-16 02:15:27', '2021-06-16 02:15:27', '2022-06-16 09:15:27'),
('c9f7d6dc7db39bedbeb1b95fb7bf4537d35836ff197ec0261f2e2374a99f70d36299124d33dc4775', 1, 1, 'MyApp', '[]', 0, '2021-06-16 02:32:35', '2021-06-16 02:32:35', '2022-06-16 09:32:35'),
('4923b642bb6bc739f2b5468615c08ded427d507195915d8926a05a1a58ab9d6f7820dc86df61dca3', 1, 1, 'MyApp', '[]', 0, '2021-06-16 02:34:06', '2021-06-16 02:34:06', '2022-06-16 09:34:06'),
('ef831115a8a86e53c2ce8b54be501e9de18e1e873aec8232975951e16aae85ff59504d8af237b905', 5, 1, 'MyApp', '[]', 0, '2021-06-16 02:34:06', '2021-06-16 02:34:06', '2022-06-16 09:34:06'),
('f5ff97311649a80edf20beb6e23906b74b9a8404a2079a5e7a13f7af19b4e1a2acbc293b855c535c', 1, 1, 'MyApp', '[]', 0, '2021-06-16 02:34:32', '2021-06-16 02:34:32', '2022-06-16 09:34:32'),
('5004f57bcd17035528ecb299465bfebf7ac344f3bd7fb386f641e53345bfd8f48774143eb2d9b073', 5, 1, 'MyApp', '[]', 0, '2021-06-16 02:34:32', '2021-06-16 02:34:32', '2022-06-16 09:34:32'),
('d1e5a915ed0883904ebe691119ff06bea88273ded771040f9265b522c5de269b44e7935336242c60', 1, 1, 'MyApp', '[]', 0, '2021-06-16 23:43:47', '2021-06-16 23:43:47', '2022-06-17 06:43:47'),
('17fff292b28bbff9d7554f7f913437dc6295c1d06183b75e5ad3e957de82e378d2776278c5bff815', 5, 1, 'MyApp', '[]', 0, '2021-06-16 23:43:47', '2021-06-16 23:43:47', '2022-06-17 06:43:47'),
('03f17fa0c0a5254aed596901f7cbc62667f5154cd2bdd76e8bc3f1ae117af56c546a4dd570f6e09b', 1, 1, 'MyApp', '[]', 0, '2021-06-17 01:29:17', '2021-06-17 01:29:17', '2022-06-17 08:29:17'),
('bd561308e5d7b796821d5d729cb1746abe4227ba47d8b4cc853803f20a5fcf0005cb4fa2e8aa0b5f', 5, 1, 'MyApp', '[]', 0, '2021-06-17 01:29:17', '2021-06-17 01:29:17', '2022-06-17 08:29:17'),
('aa570c68210196e3ecc1ba60dcee7866438b66f0d44acf912fec2be497f3a2e5375ab45d4f51187d', 1, 1, 'MyApp', '[]', 0, '2021-06-17 01:29:22', '2021-06-17 01:29:22', '2022-06-17 08:29:22'),
('7fe727d3199c33dc7e0fa4f954c0079bca4edcb8f7b943c1fb925abc9bc48316ceae1ffef8545e07', 5, 1, 'MyApp', '[]', 0, '2021-06-17 01:29:22', '2021-06-17 01:29:22', '2022-06-17 08:29:22');

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
(1, NULL, 'Laravel Personal Access Client', 'LTj7bq4nEyIZmGOHU9dGzmO3YN2Jt46JHrBr3acz', NULL, 'http://localhost', 1, 0, 0, '2021-04-26 01:58:36', '2021-04-26 01:58:36'),
(2, NULL, 'Laravel Password Grant Client', '9eB0XeWSVOEwBS9I7U5LeUCAE3pN4DLNxd6iYAvp', 'users', 'http://localhost', 0, 1, 0, '2021-04-26 01:58:36', '2021-04-26 01:58:36');

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
(1, 1, '2021-04-26 01:58:36', '2021-04-26 01:58:36');

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
  `token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

DROP TABLE IF EXISTS `permission`;
CREATE TABLE IF NOT EXISTS `permission` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `overview` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permission` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `protected` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission`
--

INSERT INTO `permission` (`id`, `overview`, `description`, `url`, `permission`, `protected`, `created_at`, `updated_at`) VALUES
(1, '', 'superadmin', '', '_superadmin', 0, '2021-04-26 01:56:47', '2021-04-26 01:56:47'),
(2, '', 'user editor', '', '_user-editor', 0, '2021-04-26 01:56:47', '2021-04-26 01:56:47'),
(3, '', 'group editor', '', '_group-editor', 0, '2021-04-26 01:56:47', '2021-04-26 01:56:47'),
(4, '', 'permission editor', '', '_permission-editor', 0, '2021-04-26 01:56:47', '2021-04-26 01:56:47'),
(5, '', 'profile type editor', '', '_profile-editor', 0, '2021-04-26 01:56:47', '2021-04-26 01:56:47');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Primary key',
  `category_id` int(11) DEFAULT NULL COMMENT 'Category ID',
  `slideshow_id` int(11) DEFAULT NULL COMMENT 'Slideshow ID',
  `post_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Post name',
  `post_order` int(11) DEFAULT NULL COMMENT 'Order in list of categories',
  `post_slug` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Slug in URL',
  `post_overview` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Post overview',
  `post_description` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Post description',
  `post_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Image path',
  `post_files` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'The list of attachment filenames',
  `post_cache_comments` text COLLATE utf8mb4_unicode_ci COMMENT 'Comments of post',
  `post_cache_other_posts` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'The post id of related posts ',
  `post_cache_time` int(11) DEFAULT NULL COMMENT 'Order in list of categories',
  `status` tinyint(4) DEFAULT '1' COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) DEFAULT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) DEFAULT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `category_id`, `slideshow_id`, `post_name`, `post_order`, `post_slug`, `post_overview`, `post_description`, `post_image`, `post_files`, `post_cache_comments`, `post_cache_other_posts`, `post_cache_time`, `status`, `sequence`, `created_user_id`, `updated_user_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 'test1111', NULL, NULL, NULL, 'test1111', NULL, NULL, NULL, NULL, NULL, 1, NULL, 5, 5, NULL, '2021-06-17 01:25:00', '2021-06-17 01:25:00'),
(2, NULL, NULL, 'Tiêu đề 1', NULL, NULL, NULL, 'Data 1', NULL, NULL, NULL, NULL, NULL, 1, NULL, 5, 5, NULL, '2021-06-17 01:29:36', '2021-06-17 01:29:36');

-- --------------------------------------------------------

--
-- Table structure for table `profile_field`
--

DROP TABLE IF EXISTS `profile_field`;
CREATE TABLE IF NOT EXISTS `profile_field` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `profile_id` int(10) UNSIGNED NOT NULL,
  `profile_field_type_id` int(10) UNSIGNED NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `profile_field_profile_id_profile_field_type_id_unique` (`profile_id`,`profile_field_type_id`),
  KEY `profile_field_profile_field_type_id_foreign` (`profile_field_type_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profile_field_type`
--

DROP TABLE IF EXISTS `profile_field_type`;
CREATE TABLE IF NOT EXISTS `profile_field_type` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slideshows`
--

DROP TABLE IF EXISTS `slideshows`;
CREATE TABLE IF NOT EXISTS `slideshows` (
  `slideshow_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Primary key',
  `category_id` int(11) NOT NULL COMMENT 'Category ID',
  `style_id` int(11) NOT NULL COMMENT 'Style ID',
  `slideshow_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Slideshow name',
  `slideshow_overview` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Slideshow overview',
  `slideshow_description` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Slideshow description',
  `slideshow_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Image path',
  `slideshow_images` text COLLATE utf8mb4_unicode_ci COMMENT 'List of image paths',
  `status` tinyint(4) DEFAULT '1' COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) NOT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) NOT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`slideshow_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slideshow_styles`
--

DROP TABLE IF EXISTS `slideshow_styles`;
CREATE TABLE IF NOT EXISTS `slideshow_styles` (
  `style_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Primary key',
  `style_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Style name',
  `style_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Style image',
  `style_view_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'View file',
  `style_js_file` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Js file',
  `style_css_file` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Css file',
  `style_view_content` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'View content',
  `status` tinyint(4) DEFAULT '1' COMMENT '1: show, 0: hide',
  `sequence` int(11) DEFAULT NULL COMMENT 'Input order',
  `created_user_id` int(11) NOT NULL COMMENT 'Created by User Id',
  `updated_user_id` int(11) NOT NULL COMMENT 'Updated by User Id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`style_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `throttle`
--

DROP TABLE IF EXISTS `throttle`;
CREATE TABLE IF NOT EXISTS `throttle` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attempts` int(11) NOT NULL DEFAULT '0',
  `suspended` tinyint(1) NOT NULL DEFAULT '0',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `last_attempt_at` timestamp NULL DEFAULT NULL,
  `suspended_at` timestamp NULL DEFAULT NULL,
  `banned_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `throttle_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `throttle`
--

INSERT INTO `throttle` (`id`, `user_id`, `ip_address`, `attempts`, `suspended`, `banned`, `last_attempt_at`, `suspended_at`, `banned_at`) VALUES
(1, 1, '127.0.0.1', 0, 0, 0, NULL, NULL, NULL),
(2, 4, '127.0.0.1', 0, 0, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci,
  `activated` tinyint(1) NOT NULL DEFAULT '0',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `activation_code` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activated_at` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `persist_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reset_password_code` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `protected` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_activation_code_index` (`activation_code`),
  KEY `users_reset_password_code_index` (`reset_password_code`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `permissions`, `activated`, `banned`, `activation_code`, `activated_at`, `last_login`, `persist_code`, `reset_password_code`, `protected`, `created_at`, `updated_at`) VALUES
(1, 'admin@admin.com', '$2y$10$xCBkojYkIWSo.qet5BKhwe3KNzxFYpr97Qnvb6mFXHZWkqf7Uxs6G', NULL, 1, 0, NULL, NULL, '2021-06-17 00:11:12', '$2y$10$HcLdZ2XI0kxOH4z0M4XNXeWlPuZm5lOhUtn1PQRd4n12VktkKCisW', NULL, 0, '2021-04-26 01:56:47', '2021-06-17 00:11:12'),
(5, 'ptnhuan@gmail.com', '$2y$10$S4qonLHWV95ZBtclxKhdA.38sOv.Xyidn8edl.ttJ2MKyE.ueLrvO', NULL, 1, 0, NULL, '2021-06-16 02:33:42', NULL, NULL, NULL, 0, '2021-06-16 02:32:59', '2021-06-16 02:33:42');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

DROP TABLE IF EXISTS `users_groups`;
CREATE TABLE IF NOT EXISTS `users_groups` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `group_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`user_id`,`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`user_id`, `group_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

DROP TABLE IF EXISTS `user_profile`;
CREATE TABLE IF NOT EXISTS `user_profile` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `level_id` int(11) DEFAULT NULL,
  `avatar` blob,
  `code` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vat` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sex` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_profile_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`id`, `user_id`, `first_name`, `last_name`, `phone`, `category_id`, `level_id`, `avatar`, `code`, `vat`, `state`, `city`, `country`, `sex`, `address`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-26 01:56:47', '2021-04-26 01:56:47'),
(2, 2, 'asdf', 'asdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-26 02:00:08', '2021-04-26 02:00:08'),
(3, 3, 'Dang Manh', 'Son', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-26 02:01:22', '2021-04-26 02:01:22'),
(4, 4, 'test', 'test', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-16 01:40:50', '2021-06-16 01:40:50'),
(5, 5, 'Phan Thanh', 'Nhuần', NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, '2021-06-16 02:32:59', '2021-06-17 00:13:59');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
