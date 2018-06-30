-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 30-06-2018 a las 08:05:19
-- Versión del servidor: 5.7.21
-- Versión de PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `carappointmentservice`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudades`
--

DROP TABLE IF EXISTS `ciudades`;
CREATE TABLE IF NOT EXISTS `ciudades` (
  `id_ciudad` int(11) NOT NULL AUTO_INCREMENT,
  `ciudad` varchar(45) NOT NULL,
  PRIMARY KEY (`id_ciudad`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ciudades`
--

INSERT INTO `ciudades` (`id_ciudad`, `ciudad`) VALUES
(1, 'Córdoba'),
(2, 'Villa Maria'),
(3, 'Rio Cuarto'),
(4, 'Jesús María'),
(5, 'Alta Gracia'),
(6, 'Dean Funes'),
(7, 'La Falda'),
(8, 'Capilla Del Monte'),
(9, 'Rio Ceballos'),
(10, 'Agua De Oro'),
(12, 'Unquillo'),
(13, 'Salsipuedes'),
(14, 'Carlos Paz'),
(15, 'Calamuchita'),
(16, 'Anisacate'),
(17, 'Rio primero'),
(18, 'Rio segundo'),
(19, 'Tanti'),
(20, 'Rio tercero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_apicustom`
--

DROP TABLE IF EXISTS `cms_apicustom`;
CREATE TABLE IF NOT EXISTS `cms_apicustom` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `permalink` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tabel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aksi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kolom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orderby` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_query_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sql_where` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `method_type` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` longtext COLLATE utf8mb4_unicode_ci,
  `responses` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_apikey`
--

DROP TABLE IF EXISTS `cms_apikey`;
CREATE TABLE IF NOT EXISTS `cms_apikey` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `screetkey` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hit` int(11) DEFAULT NULL,
  `status` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_dashboard`
--

DROP TABLE IF EXISTS `cms_dashboard`;
CREATE TABLE IF NOT EXISTS `cms_dashboard` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_cms_privileges` int(11) DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_email_queues`
--

DROP TABLE IF EXISTS `cms_email_queues`;
CREATE TABLE IF NOT EXISTS `cms_email_queues` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `send_at` datetime DEFAULT NULL,
  `email_recipient` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_from_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_from_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_cc_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_content` text COLLATE utf8mb4_unicode_ci,
  `email_attachments` text COLLATE utf8mb4_unicode_ci,
  `is_sent` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_email_templates`
--

DROP TABLE IF EXISTS `cms_email_templates`;
CREATE TABLE IF NOT EXISTS `cms_email_templates` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cc_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cms_email_templates`
--

INSERT INTO `cms_email_templates` (`id`, `name`, `slug`, `subject`, `content`, `description`, `from_name`, `from_email`, `cc_email`, `created_at`, `updated_at`) VALUES
(1, 'Email Template Forgot Password Backend', 'forgot_password_backend', NULL, '<p>Hi,</p><p>Someone requested forgot password, here is your new password : </p><p>[password]</p><p><br></p><p>--</p><p>Regards,</p><p>Admin</p>', '[password]', 'System', 'system@crudbooster.com', NULL, '2018-06-17 08:36:33', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_logs`
--

DROP TABLE IF EXISTS `cms_logs`;
CREATE TABLE IF NOT EXISTS `cms_logs` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ipaddress` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `useragent` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci,
  `id_cms_users` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=112 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cms_logs`
--

INSERT INTO `cms_logs` (`id`, `ipaddress`, `useragent`, `url`, `description`, `details`, `id_cms_users`, `created_at`, `updated_at`) VALUES
(1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'http://curvasud.com/admin/login', 'admin@crudbooster.com login with IP Address ::1', '', 1, '2018-06-17 08:36:50', NULL),
(2, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'http://curvasud.com/admin/login', 'Ingreso de admin@crudbooster.com desde la Dirección IP ::1', '', 1, '2018-06-17 08:43:23', NULL),
(3, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'http://curvasud.com/admin/users15/add-save', 'Añadir nueva información Jorgelino4 en Usuarios', '', 1, '2018-06-17 08:59:57', NULL),
(4, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'http://curvasud.com/admin/login', 'Ingreso de admin@crudbooster.com desde la Dirección IP ::1', '', 1, '2018-06-17 09:01:16', NULL),
(5, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'http://curvasud.com/admin/statistic_builder/add-save', 'Añadir nueva información Escritorio en Statistic Builder', '', 1, '2018-06-17 09:02:34', NULL),
(6, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'http://curvasud.com/admin/menu_management/add-save', 'Añadir nueva información Escritorio en Menu Management', '', 1, '2018-06-17 09:05:28', NULL),
(7, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'http://curvasud.com/admin/users/add-save', 'Añadir nueva información Administrador en Users Management', '', 1, '2018-06-17 09:06:34', NULL),
(8, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'http://curvasud.com/admin/login', 'Ingreso de administrador@curvasud.com desde la Dirección IP ::1', '', 2, '2018-06-17 09:06:51', NULL),
(9, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'http://curvasud.com/admin/menu_management/edit-save/1', 'Actualizar información Ciudades en Menu Management', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>color</td><td></td><td>normal</td></tr></tbody></table>', 1, '2018-06-17 09:07:07', NULL),
(10, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'http://curvasud.com/admin/menu_management/edit-save/2', 'Actualizar información Mecanicos en Menu Management', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>color</td><td></td><td>normal</td></tr><tr><td>sorting</td><td>2</td><td></td></tr></tbody></table>', 1, '2018-06-17 09:07:13', NULL),
(11, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'http://curvasud.com/admin/menu_management/edit-save/3', 'Actualizar información Tipos de Empleados en Menu Management', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>color</td><td></td><td>normal</td></tr><tr><td>sorting</td><td>3</td><td></td></tr></tbody></table>', 1, '2018-06-17 09:07:18', NULL),
(12, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'http://curvasud.com/admin/menu_management/edit-save/3', 'Actualizar información Tipos de Empleados en Menu Management', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>sorting</td><td>3</td><td></td></tr></tbody></table>', 1, '2018-06-17 09:07:26', NULL),
(13, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'http://curvasud.com/admin/menu_management/edit-save/4', 'Actualizar información Usuarios en Menu Management', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>color</td><td></td><td>normal</td></tr><tr><td>sorting</td><td>4</td><td></td></tr></tbody></table>', 1, '2018-06-17 09:07:34', NULL),
(14, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'http://curvasud.com/admin/logout', 'administrador@curvasud.com se desconectó', '', 2, '2018-06-17 09:08:57', NULL),
(15, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'http://curvasud.com/admin/login', 'Ingreso de administrador@curvasud.com desde la Dirección IP ::1', '', 2, '2018-06-17 09:09:55', NULL),
(16, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'http://curvasud.com/admin/vehiculos/add-save', 'Añadir nueva información 40 en Vehiculos', '', 1, '2018-06-17 09:22:46', NULL),
(17, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'http://curvasud.com/admin/logout', 'administrador@curvasud.com se desconectó', '', 2, '2018-06-17 09:25:56', NULL),
(18, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'http://curvasud.com/admin/login', 'Ingreso de administrador@curvasud.com desde la Dirección IP ::1', '', 2, '2018-06-17 09:26:04', NULL),
(19, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'http://curvasud.com/admin/menu_management/edit-save/6', 'Actualizar información Vehiculos en Menu Management', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>color</td><td></td><td>normal</td></tr><tr><td>icon</td><td>fa fa-heart</td><td>fa fa-road</td></tr><tr><td>sorting</td><td>5</td><td></td></tr></tbody></table>', 1, '2018-06-17 09:26:49', NULL),
(20, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'http://curvasud.com/admin/vehiculos', 'Intentar ver :name en Vehiculos', '', 2, '2018-06-17 09:26:56', NULL),
(21, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'http://curvasud.com/admin/vehiculos', 'Intentar ver :name en Vehiculos', '', 2, '2018-06-17 09:26:59', NULL),
(22, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'http://curvasud.com/admin/vehiculos', 'Intentar ver :name en Vehiculos', '', 2, '2018-06-17 09:27:02', NULL),
(23, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'http://curvasud.com/admin/menu_management/edit-save/6', 'Actualizar información Vehiculos en Menu Management', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>sorting</td><td>5</td><td></td></tr></tbody></table>', 1, '2018-06-17 09:27:31', NULL),
(24, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'http://curvasud.com/admin/vehiculos', 'Intentar ver :name en Vehiculos', '', 2, '2018-06-17 09:28:23', NULL),
(25, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'http://curvasud.com/admin/vehiculos', 'Intentar ver :name en Vehiculos', '', 2, '2018-06-17 09:28:26', NULL),
(26, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'http://curvasud.com/admin/vehiculos', 'Intentar ver :name en Vehiculos', '', 2, '2018-06-17 09:28:33', NULL),
(27, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'http://curvasud.com/admin/vehiculos', 'Intentar ver :name en Vehiculos', '', 2, '2018-06-17 09:28:36', NULL),
(28, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'http://curvasud.com/admin/logout', 'administrador@curvasud.com se desconectó', '', 2, '2018-06-17 09:28:48', NULL),
(29, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'http://curvasud.com/admin/login', 'Ingreso de administrador@curvasud.com desde la Dirección IP ::1', '', 2, '2018-06-17 09:29:11', NULL),
(30, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'http://curvasud.com/admin/login', 'Ingreso de administrador@curvasud.com desde la Dirección IP ::1', '', 2, '2018-06-18 06:16:52', NULL),
(31, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'http://curvasud.com/admin/logout', 'administrador@curvasud.com se desconectó', '', 2, '2018-06-18 06:22:12', NULL),
(32, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'http://curvasud.com/admin/login', 'Ingreso de admin@crudbooster.com desde la Dirección IP ::1', '', 1, '2018-06-19 06:58:57', NULL),
(33, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'http://curvasud.com/admin/login', 'Ingreso de administrador@curvasud.com desde la Dirección IP ::1', '', 2, '2018-06-19 06:59:28', NULL),
(34, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'http://curvasud.com/admin/menu_management/edit-save/7', 'Actualizar información Órdenes de Reparación en Menu Management', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>color</td><td></td><td>normal</td></tr><tr><td>sorting</td><td>6</td><td></td></tr></tbody></table>', 1, '2018-06-19 07:15:56', NULL),
(35, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'http://curvasud.com/admin/ordenes_reparacion', 'Intentar ver :name en Órdenes de Reparación', '', 2, '2018-06-19 07:16:01', NULL),
(36, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'http://curvasud.com/admin/ordenes_reparacion', 'Intentar ver :name en Órdenes de Reparación', '', 2, '2018-06-19 07:16:05', NULL),
(37, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'http://curvasud.com/admin/ordenes_reparacion', 'Intentar ver :name en Órdenes de Reparación', '', 2, '2018-06-19 07:16:27', NULL),
(38, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'http://curvasud.com/admin/ordenes_reparacion', 'Intentar ver :name en Órdenes de Reparación', '', 2, '2018-06-19 07:16:30', NULL),
(39, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'http://curvasud.com/admin/logout', 'administrador@curvasud.com se desconectó', '', 2, '2018-06-19 07:16:36', NULL),
(40, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'http://curvasud.com/admin/login', 'Ingreso de administrador@curvasud.com desde la Dirección IP ::1', '', 2, '2018-06-19 07:16:44', NULL),
(41, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'http://curvasud.com/admin/login', 'Ingreso de admin@crudbooster.com desde la Dirección IP ::1', '', 1, '2018-06-19 17:07:23', NULL),
(42, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'http://curvasud.com/admin/login', 'Ingreso de admin@crudbooster.com desde la Dirección IP ::1', '', 1, '2018-06-19 18:05:43', NULL),
(43, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'http://curvasud.com/admin/logout', 'admin@crudbooster.com se desconectó', '', 1, '2018-06-19 18:56:45', NULL),
(44, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'http://curvasud.com/admin/login', 'Ingreso de admin@crudbooster.com desde la Dirección IP ::1', '', 1, '2018-06-19 19:12:23', NULL),
(45, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'http://curvasud.com/admin/menu_management/edit-save/8', 'Actualizar información Tipos de Servicios en Menu Management', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>color</td><td></td><td>normal</td></tr><tr><td>sorting</td><td>7</td><td></td></tr></tbody></table>', 1, '2018-06-19 19:19:28', NULL),
(46, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'http://curvasud.com/admin/logout', 'admin@crudbooster.com se desconectó', '', 1, '2018-06-19 19:19:51', NULL),
(47, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'http://curvasud.com/admin/login', 'Ingreso de administrador@curvasud.com desde la Dirección IP ::1', '', 2, '2018-06-19 19:23:15', NULL),
(48, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'http://curvasud.com/admin/users/delete-image', 'Intentar eliminar la imagen de Administrador en módulo Users Management', '', 2, '2018-06-19 19:23:43', NULL),
(49, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'http://curvasud.com/admin/users/delete-image', 'Intentar eliminar la imagen de Administrador en módulo Users Management', '', 2, '2018-06-19 19:24:13', NULL),
(50, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'http://curvasud.com/admin/logout', 'administrador@curvasud.com se desconectó', '', 2, '2018-06-19 20:28:10', NULL),
(51, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36', 'http://curvasud.com/admin/login', 'Ingreso de administrador@curvasud.com desde la Dirección IP ::1', '', 2, '2018-06-19 23:39:06', NULL),
(52, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'http://curvasud.com/admin/login', 'Ingreso de administrador@curvasud.com desde la Dirección IP ::1', '', 2, '2018-06-28 04:33:21', NULL),
(53, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'http://curvasud.com/admin/logout', 'administrador@curvasud.com se desconectó', '', 2, '2018-06-28 04:39:05', NULL),
(54, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'http://curvasud.com/admin/login', 'Ingreso de administrador@curvasud.com desde la Dirección IP ::1', '', 2, '2018-06-28 04:57:10', NULL),
(55, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'http://curvasud.com/admin/users15/add-save', 'Añadir nueva información pruebacurvasud en Usuarios', '', 2, '2018-06-28 05:14:04', NULL),
(56, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'http://curvasud.com/admin/logout', 'administrador@curvasud.com se desconectó', '', 2, '2018-06-28 05:15:02', NULL),
(57, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'http://curvasud.com/admin/login', 'Ingreso de administrador@curvasud.com desde la Dirección IP ::1', '', 2, '2018-06-29 01:25:21', NULL),
(58, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'http://curvasud.com/admin/logout', 'administrador@curvasud.com se desconectó', '', 2, '2018-06-29 01:27:48', NULL),
(59, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'http://curvasud.com/admin/login', 'Ingreso de administrador@curvasud.com desde la Dirección IP ::1', '', 2, '2018-06-29 01:44:45', NULL),
(60, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'http://curvasud.com/admin/logout', 'administrador@curvasud.com se desconectó', '', 2, '2018-06-29 01:46:35', NULL),
(61, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'http://curvasud.com/admin/login', 'Ingreso de administrador@curvasud.com desde la Dirección IP ::1', '', 2, '2018-06-29 07:06:24', NULL),
(62, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'http://curvasud.com/admin/users15/edit-save/27', 'Actualizar información pruebacurvasud en Usuarios', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>password</td><td>$2y$10$79Uc0WV4RA2CYvAnz00g8OdmjhIhVi50GIZ5SPa52/oFKB8Ng.Tzm</td><td>$2y$10$1mbWSV3nKSdDeWBV3vDfA.HLP83.lTKOs6c7m/7plQLThENlryCRG</td></tr><tr><td>remember_token</td><td>SRjLBtLWzylYOELu077GwH0vVp5txHB825MCW5zGHsH09uhg3MXXjTdPUIWl</td><td></td></tr></tbody></table>', 2, '2018-06-29 07:07:58', NULL),
(63, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'http://curvasud.com/admin/vehiculos/delete/46', 'Eliminar información 46 en Vehiculos', '', 2, '2018-06-29 07:08:34', NULL),
(64, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'http://curvasud.com/admin/login', 'Ingreso de admin@crudbooster.com desde la Dirección IP ::1', '', 1, '2018-06-29 07:08:58', NULL),
(65, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'http://curvasud.com/admin/ciudades/add-save', 'Añadir nueva información  en Ciudades', '', 1, '2018-06-29 07:13:56', NULL),
(66, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'http://curvasud.com/admin/ciudades/delete/21', 'Eliminar información  en Ciudades', '', 1, '2018-06-29 07:14:01', NULL),
(67, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'http://curvasud.com/admin/module_generator/delete/19', 'Eliminar información ciudades2 en Module Generator', '', 1, '2018-06-29 07:19:34', NULL),
(68, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'http://curvasud.com/admin/ciudades/edit-save/20', 'Actualizar información  en Ciudades', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>id_ciudad</td><td>20</td><td></td></tr></tbody></table>', 2, '2018-06-29 07:23:26', NULL),
(69, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'http://curvasud.com/admin/ciudades/edit-save/20', 'Actualizar información  en Ciudades', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>id_ciudad</td><td>20</td><td></td></tr></tbody></table>', 1, '2018-06-29 07:35:55', NULL),
(70, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'http://curvasud.com/admin/users15/edit-save/27', 'Actualizar información pruebacurvasud en Usuarios', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>password</td><td>$2y$10$1mbWSV3nKSdDeWBV3vDfA.HLP83.lTKOs6c7m/7plQLThENlryCRG</td><td>$2y$10$BX0yKjeLBU65SY.ru.BUyuB.ytqkq.guvgKq51wKcpOiDqzkqFcSy</td></tr><tr><td>remember_token</td><td>SRjLBtLWzylYOELu077GwH0vVp5txHB825MCW5zGHsH09uhg3MXXjTdPUIWl</td><td></td></tr></tbody></table>', 1, '2018-06-29 07:41:42', NULL),
(71, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'http://curvasud.com/admin/login', 'Ingreso de administrador@curvasud.com desde la Dirección IP ::1', '', 2, '2018-06-30 05:45:33', NULL),
(72, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'http://curvasud.com/admin/users/delete-image', 'Intentar eliminar la imagen de Administrador en módulo Users Management', '', 2, '2018-06-30 06:54:03', NULL),
(73, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'http://curvasud.com/admin/logout', 'administrador@curvasud.com se desconectó', '', 2, '2018-06-30 06:54:14', NULL),
(74, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'http://curvasud.com/admin/login', 'Ingreso de admin@crudbooster.com desde la Dirección IP ::1', '', 1, '2018-06-30 06:55:15', NULL),
(75, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'http://curvasud.com/admin/users/delete-image', 'Eliminar la imagen de Administrador en Users Management', '', 1, '2018-06-30 06:58:23', NULL),
(76, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'http://curvasud.com/admin/users/edit-save/2', 'Actualizar información Administrador en Users Management', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>photo</td><td></td><td>uploads/1/2018-06/admin.gif</td></tr><tr><td>password</td><td>$2y$10$J7WTe3mDu1lA.UNYJ1AaButQkm08twCbRNIXCHe7uN8EQn05pcH7a</td><td></td></tr><tr><td>status</td><td></td><td></td></tr></tbody></table>', 1, '2018-06-30 06:59:45', NULL),
(77, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'http://curvasud.com/admin/menu_management/edit-save/5', 'Actualizar información Escritorio en Menu Management', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>parent_id</td><td>0</td><td></td></tr><tr><td>sorting</td><td></td><td></td></tr></tbody></table>', 1, '2018-06-30 07:00:58', NULL),
(78, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'http://curvasud.com/admin/menu_management/edit-save/7', 'Actualizar información Órdenes de Reparación en Menu Management', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>icon</td><td>fa fa-heart</td><td>fa fa-check</td></tr><tr><td>sorting</td><td>6</td><td></td></tr></tbody></table>', 1, '2018-06-30 07:01:22', NULL),
(79, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'http://curvasud.com/admin/statistic_builder/edit-save/1', 'Actualizar información Escritorio en Statistic Builder', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>slug</td><td>escritorio</td><td></td></tr></tbody></table>', 1, '2018-06-30 07:01:56', NULL),
(80, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'http://curvasud.com/admin/menu_management/edit-save/10', 'Actualizar información Estados órdenes en Menu Management', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>color</td><td></td><td>normal</td></tr><tr><td>sorting</td><td>8</td><td></td></tr></tbody></table>', 1, '2018-06-30 07:23:51', NULL),
(81, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'http://curvasud.com/admin/menu_management/edit-save/10', 'Actualizar información Estados órdenes en Menu Management', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>sorting</td><td>8</td><td></td></tr></tbody></table>', 1, '2018-06-30 07:24:38', NULL),
(82, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'http://curvasud.com/admin/suscripciones/delete/2', 'Eliminar información 2 en Suscriptos', '', 1, '2018-06-30 07:37:26', NULL),
(83, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'http://curvasud.com/admin/tipos_empleados/delete/4', 'Eliminar información  en Tipos de Empleados', '', 1, '2018-06-30 07:42:59', NULL),
(84, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'http://curvasud.com/admin/tipos_vehiculos/add-save', 'Añadir nueva información  en Tipos de Vehículos', '', 1, '2018-06-30 07:49:47', NULL),
(85, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'http://curvasud.com/admin/tipos_vehiculos/delete/4', 'Eliminar información  en Tipos de Vehículos', '', 1, '2018-06-30 07:50:00', NULL),
(86, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'http://curvasud.com/admin/tipo_user/add-save', 'Añadir nueva información 4 en Tipos de Usuario', '', 1, '2018-06-30 07:54:43', NULL),
(87, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'http://curvasud.com/admin/tipo_user/delete/4', 'Eliminar información 4 en Tipos de Usuario', '', 1, '2018-06-30 07:55:15', NULL),
(88, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'http://curvasud.com/admin/tipo_user/delete/4', 'Eliminar información  en Tipos de Usuario', '', 1, '2018-06-30 07:55:15', NULL),
(89, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'http://curvasud.com/admin/tipos_servicios/add-save', 'Añadir nueva información  en Tipos de Servicios', '', 1, '2018-06-30 10:28:24', NULL),
(90, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'http://curvasud.com/admin/tipos_servicios/delete/7', 'Eliminar información  en Tipos de Servicios', '', 1, '2018-06-30 10:28:32', NULL),
(91, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'http://curvasud.com/admin/estados_ordenes/add-save', 'Añadir nueva información  en Estados órdenes', '', 1, '2018-06-30 10:30:36', NULL),
(92, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'http://curvasud.com/admin/estados_ordenes/delete/3', 'Eliminar información  en Estados órdenes', '', 1, '2018-06-30 10:30:41', NULL),
(93, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'http://curvasud.com/admin/estados_turnos/add-save', 'Añadir nueva información  en Estados Turnos', '', 1, '2018-06-30 10:31:33', NULL),
(94, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'http://curvasud.com/admin/estados_turnos/delete/5', 'Eliminar información  en Estados Turnos', '', 1, '2018-06-30 10:31:41', NULL),
(95, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'http://curvasud.com/admin/suscripciones/add-save', 'Añadir nueva información 17 en Suscriptos', '', 1, '2018-06-30 10:31:55', NULL),
(96, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'http://curvasud.com/admin/tipos_documentos/add-save', 'Añadir nueva información  en Tipos de documento', '', 1, '2018-06-30 10:33:21', NULL),
(97, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'http://curvasud.com/admin/tipos_documentos/delete/4', 'Eliminar información  en Tipos de documento', '', 1, '2018-06-30 10:33:27', NULL),
(98, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'http://curvasud.com/admin/tipos_vehiculos/add-save', 'Añadir nueva información  en Tipos de Vehículos', '', 1, '2018-06-30 10:34:31', NULL),
(99, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'http://curvasud.com/admin/tipos_vehiculos/delete/4', 'Eliminar información  en Tipos de Vehículos', '', 1, '2018-06-30 10:34:37', NULL),
(100, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'http://curvasud.com/admin/tipo_user/add-save', 'Añadir nueva información 4 en Tipos de Usuario', '', 1, '2018-06-30 10:35:11', NULL),
(101, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'http://curvasud.com/admin/tipo_user/delete/4', 'Eliminar información 4 en Tipos de Usuario', '', 1, '2018-06-30 10:35:17', NULL),
(102, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'http://curvasud.com/admin/menu_management/edit-save/11', 'Actualizar información Estados Turnos en Menu Management', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>color</td><td></td><td>normal</td></tr><tr><td>sorting</td><td>9</td><td></td></tr></tbody></table>', 1, '2018-06-30 10:53:30', NULL),
(103, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'http://curvasud.com/admin/menu_management/edit-save/12', 'Actualizar información Suscriptos en Menu Management', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>color</td><td></td><td>normal</td></tr><tr><td>sorting</td><td>10</td><td></td></tr></tbody></table>', 1, '2018-06-30 10:53:45', NULL),
(104, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'http://curvasud.com/admin/menu_management/edit-save/13', 'Actualizar información Tipos de documento en Menu Management', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>color</td><td></td><td>normal</td></tr><tr><td>sorting</td><td>11</td><td></td></tr></tbody></table>', 1, '2018-06-30 10:54:00', NULL),
(105, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'http://curvasud.com/admin/menu_management/edit-save/14', 'Actualizar información Tipos de Vehículos en Menu Management', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>color</td><td></td><td>normal</td></tr><tr><td>sorting</td><td>12</td><td></td></tr></tbody></table>', 1, '2018-06-30 10:54:10', NULL),
(106, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'http://curvasud.com/admin/menu_management/edit-save/15', 'Actualizar información Tipos de Usuario en Menu Management', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>color</td><td></td><td>normal</td></tr><tr><td>sorting</td><td>13</td><td></td></tr></tbody></table>', 1, '2018-06-30 10:54:22', NULL),
(107, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'http://curvasud.com/admin/menu_management/edit-save/16', 'Actualizar información Turnos en Menu Management', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>color</td><td></td><td>normal</td></tr><tr><td>sorting</td><td>14</td><td></td></tr></tbody></table>', 1, '2018-06-30 10:54:34', NULL),
(108, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'http://curvasud.com/admin/menu_management/edit-save/17', 'Actualizar información Detalles órdenes de reparación en Menu Management', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>color</td><td></td><td>normal</td></tr><tr><td>sorting</td><td>15</td><td></td></tr></tbody></table>', 1, '2018-06-30 10:54:46', NULL),
(109, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'http://curvasud.com/admin/logout', 'admin@crudbooster.com se desconectó', '', 1, '2018-06-30 10:56:46', NULL),
(110, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'http://curvasud.com/admin/login', 'Ingreso de administrador@curvasud.com desde la Dirección IP ::1', '', 2, '2018-06-30 10:57:19', NULL),
(111, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36', 'http://curvasud.com/admin/logout', 'administrador@curvasud.com se desconectó', '', 2, '2018-06-30 11:00:23', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_menus`
--

DROP TABLE IF EXISTS `cms_menus`;
CREATE TABLE IF NOT EXISTS `cms_menus` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'url',
  `path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `is_dashboard` tinyint(1) NOT NULL DEFAULT '0',
  `id_cms_privileges` int(11) DEFAULT NULL,
  `sorting` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cms_menus`
--

INSERT INTO `cms_menus` (`id`, `name`, `type`, `path`, `color`, `icon`, `parent_id`, `is_active`, `is_dashboard`, `id_cms_privileges`, `sorting`, `created_at`, `updated_at`) VALUES
(1, 'Ciudades', 'Route', 'AdminCiudadesControllerGetIndex', 'normal', 'fa fa-signal', 0, 1, 0, 1, 1, '2018-06-17 08:38:10', '2018-06-17 09:07:07'),
(2, 'Mecanicos', 'Route', 'AdminMecanicosControllerGetIndex', 'normal', 'fa fa-gear', 0, 1, 0, 1, 2, '2018-06-17 08:45:49', '2018-06-17 09:07:13'),
(3, 'Tipos de Empleados', 'Route', 'AdminTiposEmpleadosControllerGetIndex', 'normal', 'fa fa-times', 0, 1, 0, 1, 3, '2018-06-17 08:50:20', '2018-06-17 09:07:26'),
(4, 'Usuarios', 'Route', 'AdminUsers15ControllerGetIndex', 'normal', 'fa fa-tag', 0, 1, 0, 1, 4, '2018-06-17 08:51:05', '2018-06-17 09:07:34'),
(5, 'Escritorio', 'Statistic', 'statistic_builder/show/escritorio', 'normal', 'fa fa-star', 0, 1, 1, 1, NULL, '2018-06-17 09:05:28', '2018-06-30 07:00:58'),
(6, 'Vehiculos', 'Route', 'AdminVehiculosControllerGetIndex', 'normal', 'fa fa-road', 0, 1, 0, 1, 5, '2018-06-17 09:12:46', '2018-06-17 09:27:31'),
(7, 'Órdenes de Reparación', 'Route', 'AdminOrdenesReparacionControllerGetIndex', 'normal', 'fa fa-check', 0, 1, 0, 1, 6, '2018-06-19 07:09:58', '2018-06-30 07:01:22'),
(8, 'Tipos de Servicios', 'Route', 'AdminTiposServiciosControllerGetIndex', 'normal', 'fa fa-th-list', 0, 1, 0, 1, 7, '2018-06-19 18:07:19', '2018-06-19 19:19:28'),
(10, 'Estados órdenes', 'Route', 'AdminEstadosOrdenesControllerGetIndex', 'normal', 'fa fa-th-large', 0, 1, 0, 1, 8, '2018-06-30 07:19:07', '2018-06-30 07:24:38'),
(11, 'Estados Turnos', 'Route', 'AdminEstadosTurnosControllerGetIndex', 'normal', 'fa fa-glass', 0, 1, 0, 1, 9, '2018-06-30 07:30:40', '2018-06-30 10:53:30'),
(12, 'Suscriptos', 'Route', 'AdminSuscripcionesControllerGetIndex', 'normal', 'fa fa-star', 0, 1, 0, 1, 10, '2018-06-30 07:36:23', '2018-06-30 10:53:45'),
(13, 'Tipos de documento', 'Route', 'AdminTiposDocumentosControllerGetIndex', 'normal', 'fa fa-search', 0, 1, 0, 1, 11, '2018-06-30 07:40:07', '2018-06-30 10:54:00'),
(14, 'Tipos de Vehículos', 'Route', 'AdminTiposVehiculosControllerGetIndex', 'normal', 'fa fa-signal', 0, 1, 0, 1, 12, '2018-06-30 07:44:28', '2018-06-30 10:54:10'),
(15, 'Tipos de Usuario', 'Route', 'AdminTipoUserControllerGetIndex', 'normal', 'fa fa-road', 0, 1, 0, 1, 13, '2018-06-30 07:52:04', '2018-06-30 10:54:22'),
(16, 'Turnos', 'Route', 'AdminTurnosControllerGetIndex', 'normal', 'fa fa-times', 0, 1, 0, 1, 14, '2018-06-30 07:57:50', '2018-06-30 10:54:34'),
(17, 'Detalles órdenes de reparación', 'Route', 'AdminDetallesOrdenesReparacionControllerGetIndex', 'normal', 'fa fa-glass', 0, 1, 0, 1, 15, '2018-06-30 10:40:24', '2018-06-30 10:54:46');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_menus_privileges`
--

DROP TABLE IF EXISTS `cms_menus_privileges`;
CREATE TABLE IF NOT EXISTS `cms_menus_privileges` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_cms_menus` int(11) DEFAULT NULL,
  `id_cms_privileges` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cms_menus_privileges`
--

INSERT INTO `cms_menus_privileges` (`id`, `id_cms_menus`, `id_cms_privileges`) VALUES
(6, 1, 2),
(8, 2, 2),
(11, 3, 1),
(12, 4, 2),
(21, 5, 1),
(7, 1, 1),
(9, 2, 1),
(10, 3, 2),
(13, 4, 1),
(15, 6, 1),
(14, 6, 2),
(23, 7, 1),
(22, 7, 2),
(18, 8, 2),
(19, 8, 1),
(20, 9, 1),
(25, 10, 1),
(24, 10, 2),
(33, 11, 2),
(35, 12, 2),
(37, 13, 2),
(39, 14, 2),
(41, 15, 2),
(43, 16, 2),
(45, 17, 2),
(34, 11, 1),
(36, 12, 1),
(38, 13, 1),
(40, 14, 1),
(42, 15, 1),
(44, 16, 1),
(46, 17, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_moduls`
--

DROP TABLE IF EXISTS `cms_moduls`;
CREATE TABLE IF NOT EXISTS `cms_moduls` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_protected` tinyint(1) NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cms_moduls`
--

INSERT INTO `cms_moduls` (`id`, `name`, `icon`, `path`, `table_name`, `controller`, `is_protected`, `is_active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Notifications', 'fa fa-cog', 'notifications', 'cms_notifications', 'NotificationsController', 1, 1, '2018-06-17 08:36:33', NULL, NULL),
(2, 'Privileges', 'fa fa-cog', 'privileges', 'cms_privileges', 'PrivilegesController', 1, 1, '2018-06-17 08:36:33', NULL, NULL),
(3, 'Privileges Roles', 'fa fa-cog', 'privileges_roles', 'cms_privileges_roles', 'PrivilegesRolesController', 1, 1, '2018-06-17 08:36:33', NULL, NULL),
(4, 'Users Management', 'fa fa-users', 'users', 'cms_users', 'AdminCmsUsersController', 0, 1, '2018-06-17 08:36:33', NULL, NULL),
(5, 'Settings', 'fa fa-cog', 'settings', 'cms_settings', 'SettingsController', 1, 1, '2018-06-17 08:36:33', NULL, NULL),
(6, 'Module Generator', 'fa fa-database', 'module_generator', 'cms_moduls', 'ModulsController', 1, 1, '2018-06-17 08:36:33', NULL, NULL),
(7, 'Menu Management', 'fa fa-bars', 'menu_management', 'cms_menus', 'MenusController', 1, 1, '2018-06-17 08:36:33', NULL, NULL),
(8, 'Email Templates', 'fa fa-envelope-o', 'email_templates', 'cms_email_templates', 'EmailTemplatesController', 1, 1, '2018-06-17 08:36:33', NULL, NULL),
(9, 'Statistic Builder', 'fa fa-dashboard', 'statistic_builder', 'cms_statistics', 'StatisticBuilderController', 1, 1, '2018-06-17 08:36:33', NULL, NULL),
(10, 'API Generator', 'fa fa-cloud-download', 'api_generator', '', 'ApiCustomController', 1, 1, '2018-06-17 08:36:33', NULL, NULL),
(11, 'Log User Access', 'fa fa-flag-o', 'logs', 'cms_logs', 'LogsController', 1, 1, '2018-06-17 08:36:33', NULL, NULL),
(12, 'Ciudades', 'fa fa-heart', 'ciudades', 'ciudades', 'AdminCiudadesController', 0, 0, '2018-06-17 08:38:10', NULL, NULL),
(13, 'Mecanicos', 'fa fa-gear', 'mecanicos', 'mecanicos', 'AdminMecanicosController', 0, 0, '2018-06-17 08:45:49', NULL, NULL),
(14, 'Tipos de Empleados', 'fa fa-times', 'tipos_empleados', 'tipos_empleados', 'AdminTiposEmpleadosController', 0, 0, '2018-06-17 08:50:20', NULL, NULL),
(15, 'Usuarios', 'fa fa-tag', 'users15', 'users', 'AdminUsers15Controller', 0, 0, '2018-06-17 08:51:05', NULL, NULL),
(16, 'Vehículos', 'fa fa-envelope-o', 'vehiculos', 'vehiculos', 'AdminVehiculosController', 0, 0, '2018-06-17 09:12:46', NULL, NULL),
(17, 'Órdenes de Reparación', 'fa fa-search', 'ordenes_reparacion', 'ordenes_reparacion', 'AdminOrdenesReparacionController', 0, 0, '2018-06-19 07:09:58', NULL, NULL),
(18, 'Tipos de Servicios', 'fa fa-th-list', 'tipos_servicios', 'tipos_servicios', 'AdminTiposServiciosController', 0, 0, '2018-06-19 18:07:19', NULL, NULL),
(19, 'ciudades2', 'fa fa-glass', 'ciudades19', 'ciudades', 'AdminCiudades19Controller', 0, 0, '2018-06-29 07:17:53', NULL, '2018-06-29 07:19:34'),
(20, 'Estados órdenes', 'fa fa-cog', 'estados_ordenes', 'estados_ordenes', 'AdminEstadosOrdenesController', 0, 0, '2018-06-30 07:19:07', NULL, NULL),
(21, 'Estados Turnos', 'fa fa-glass', 'estados_turnos', 'estados_turnos', 'AdminEstadosTurnosController', 0, 0, '2018-06-30 07:30:40', NULL, NULL),
(22, 'Suscriptos', 'fa fa-star', 'suscripciones', 'suscripciones', 'AdminSuscripcionesController', 0, 0, '2018-06-30 07:36:23', NULL, NULL),
(23, 'Tipos de documento', 'fa fa-search', 'tipos_documentos', 'tipos_documentos', 'AdminTiposDocumentosController', 0, 0, '2018-06-30 07:40:07', NULL, NULL),
(24, 'Tipos de Vehículos', 'fa fa-cloud-download', 'tipos_vehiculos', 'tipos_vehiculos', 'AdminTiposVehiculosController', 0, 0, '2018-06-30 07:44:28', NULL, NULL),
(25, 'Tipos de Usuario', 'fa fa-road', 'tipo_user', 'tipo_user', 'AdminTipoUserController', 0, 0, '2018-06-30 07:52:04', NULL, NULL),
(26, 'Turnos', 'fa fa-times', 'turnos', 'turnos', 'AdminTurnosController', 0, 0, '2018-06-30 07:57:50', NULL, NULL),
(27, 'Detalles órdenes de reparación', 'fa fa-glass', 'detalles_ordenes_reparacion', 'detalles_ordenes_reparacion', 'AdminDetallesOrdenesReparacionController', 0, 0, '2018-06-30 10:40:24', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_notifications`
--

DROP TABLE IF EXISTS `cms_notifications`;
CREATE TABLE IF NOT EXISTS `cms_notifications` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_cms_users` int(11) DEFAULT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_read` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_privileges`
--

DROP TABLE IF EXISTS `cms_privileges`;
CREATE TABLE IF NOT EXISTS `cms_privileges` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_superadmin` tinyint(1) DEFAULT NULL,
  `theme_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cms_privileges`
--

INSERT INTO `cms_privileges` (`id`, `name`, `is_superadmin`, `theme_color`, `created_at`, `updated_at`) VALUES
(1, 'Super Administrator', 1, 'skin-red', '2018-06-17 08:36:33', NULL),
(2, 'Administrador', 0, 'skin-purple', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_privileges_roles`
--

DROP TABLE IF EXISTS `cms_privileges_roles`;
CREATE TABLE IF NOT EXISTS `cms_privileges_roles` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `is_visible` tinyint(1) DEFAULT NULL,
  `is_create` tinyint(1) DEFAULT NULL,
  `is_read` tinyint(1) DEFAULT NULL,
  `is_edit` tinyint(1) DEFAULT NULL,
  `is_delete` tinyint(1) DEFAULT NULL,
  `id_cms_privileges` int(11) DEFAULT NULL,
  `id_cms_moduls` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cms_privileges_roles`
--

INSERT INTO `cms_privileges_roles` (`id`, `is_visible`, `is_create`, `is_read`, `is_edit`, `is_delete`, `id_cms_privileges`, `id_cms_moduls`, `created_at`, `updated_at`) VALUES
(82, 1, 1, 1, 1, 1, 1, 25, NULL, NULL),
(81, 1, 1, 1, 1, 1, 1, 24, NULL, NULL),
(80, 1, 1, 1, 1, 1, 1, 23, NULL, NULL),
(79, 1, 1, 1, 1, 1, 1, 22, NULL, NULL),
(94, 1, 1, 1, 1, 1, 2, 14, NULL, NULL),
(68, 1, 1, 1, 1, 1, 1, 21, NULL, NULL),
(93, 1, 1, 1, 1, 1, 2, 23, NULL, NULL),
(58, 1, 1, 1, 1, 1, 1, 20, NULL, NULL),
(92, 1, 1, 1, 1, 1, 2, 22, NULL, NULL),
(49, 1, 1, 1, 1, 1, 1, 19, NULL, NULL),
(48, 1, 1, 1, 1, 1, 1, 16, NULL, NULL),
(47, 1, 1, 1, 1, 1, 1, 15, NULL, NULL),
(46, 1, 1, 1, 1, 1, 1, 4, NULL, NULL),
(45, 1, 1, 1, 1, 1, 1, 18, NULL, NULL),
(44, 1, 1, 1, 1, 1, 1, 14, NULL, NULL),
(91, 1, 1, 1, 1, 1, 2, 17, NULL, NULL),
(90, 1, 1, 1, 1, 1, 2, 13, NULL, NULL),
(89, 1, 1, 1, 1, 1, 2, 21, NULL, NULL),
(88, 1, 1, 1, 1, 1, 2, 20, NULL, NULL),
(43, 1, 1, 1, 1, 1, 1, 17, NULL, NULL),
(87, 1, 1, 1, 1, 1, 2, 27, NULL, NULL),
(42, 1, 1, 1, 1, 1, 1, 13, NULL, NULL),
(86, 1, 1, 1, 1, 1, 2, 19, NULL, NULL),
(41, 1, 1, 1, 1, 1, 1, 12, NULL, NULL),
(85, 1, 1, 1, 1, 1, 2, 12, NULL, NULL),
(83, 1, 1, 1, 1, 1, 1, 26, NULL, NULL),
(84, 1, 1, 1, 1, 1, 1, 27, NULL, NULL),
(95, 1, 1, 1, 1, 1, 2, 18, NULL, NULL),
(96, 1, 1, 1, 1, 1, 2, 25, NULL, NULL),
(97, 1, 1, 1, 1, 1, 2, 24, NULL, NULL),
(98, 1, 1, 1, 1, 1, 2, 26, NULL, NULL),
(99, 1, 1, 1, 1, 1, 2, 15, NULL, NULL),
(100, 1, 1, 1, 1, 1, 2, 16, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_settings`
--

DROP TABLE IF EXISTS `cms_settings`;
CREATE TABLE IF NOT EXISTS `cms_settings` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `content_input_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dataenum` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `helper` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `group_setting` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cms_settings`
--

INSERT INTO `cms_settings` (`id`, `name`, `content`, `content_input_type`, `dataenum`, `helper`, `created_at`, `updated_at`, `group_setting`, `label`) VALUES
(1, 'login_background_color', NULL, 'text', NULL, 'Input hexacode', '2018-06-17 08:36:33', NULL, 'Login Register Style', 'Login Background Color'),
(2, 'login_font_color', NULL, 'text', NULL, 'Input hexacode', '2018-06-17 08:36:33', NULL, 'Login Register Style', 'Login Font Color'),
(3, 'login_background_image', NULL, 'upload_image', NULL, NULL, '2018-06-17 08:36:33', NULL, 'Login Register Style', 'Login Background Image'),
(4, 'email_sender', 'support@crudbooster.com', 'text', NULL, NULL, '2018-06-17 08:36:33', NULL, 'Email Setting', 'Email Sender'),
(5, 'smtp_driver', 'mail', 'select', 'smtp,mail,sendmail', NULL, '2018-06-17 08:36:33', NULL, 'Email Setting', 'Mail Driver'),
(6, 'smtp_host', '', 'text', NULL, NULL, '2018-06-17 08:36:33', NULL, 'Email Setting', 'SMTP Host'),
(7, 'smtp_port', '25', 'text', NULL, 'default 25', '2018-06-17 08:36:33', NULL, 'Email Setting', 'SMTP Port'),
(8, 'smtp_username', '', 'text', NULL, NULL, '2018-06-17 08:36:33', NULL, 'Email Setting', 'SMTP Username'),
(9, 'smtp_password', '', 'text', NULL, NULL, '2018-06-17 08:36:33', NULL, 'Email Setting', 'SMTP Password'),
(10, 'appname', 'CurvaSud', 'text', NULL, NULL, '2018-06-17 08:36:33', NULL, 'Application Setting', 'Application Name'),
(11, 'default_paper_size', 'A4', 'text', NULL, 'Paper size, ex : A4, Legal, etc', '2018-06-17 08:36:33', NULL, 'Application Setting', 'Default Paper Print Size'),
(12, 'logo', 'uploads/2018-06/ec4ac10440203e981974e46118abddb6.png', 'upload_image', NULL, NULL, '2018-06-17 08:36:33', NULL, 'Application Setting', 'Logo'),
(13, 'favicon', NULL, 'upload_image', NULL, NULL, '2018-06-17 08:36:33', NULL, 'Application Setting', 'Favicon'),
(14, 'api_debug_mode', 'true', 'select', 'true,false', NULL, '2018-06-17 08:36:33', NULL, 'Application Setting', 'API Debug Mode'),
(15, 'google_api_key', NULL, 'text', NULL, NULL, '2018-06-17 08:36:33', NULL, 'Application Setting', 'Google API Key'),
(16, 'google_fcm_key', NULL, 'text', NULL, NULL, '2018-06-17 08:36:33', NULL, 'Application Setting', 'Google FCM Key');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_statistics`
--

DROP TABLE IF EXISTS `cms_statistics`;
CREATE TABLE IF NOT EXISTS `cms_statistics` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cms_statistics`
--

INSERT INTO `cms_statistics` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Escritorio', 'escritorio', '2018-06-17 09:02:34', '2018-06-30 07:01:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_statistic_components`
--

DROP TABLE IF EXISTS `cms_statistic_components`;
CREATE TABLE IF NOT EXISTS `cms_statistic_components` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_cms_statistics` int(11) DEFAULT NULL,
  `componentID` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `component_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area_name` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sorting` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `config` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cms_statistic_components`
--

INSERT INTO `cms_statistic_components` (`id`, `id_cms_statistics`, `componentID`, `component_name`, `area_name`, `sorting`, `name`, `config`, `created_at`, `updated_at`) VALUES
(1, 1, '7f47a5ac90c6e16ea32386c4b057d09d', 'smallbox', NULL, 0, 'Untitled', NULL, '2018-06-17 09:02:44', NULL),
(2, 1, 'f182fe2c59b8d61f111acc7f433f8097', 'smallbox', NULL, 0, 'Untitled', NULL, '2018-06-17 09:02:45', NULL),
(3, 1, 'af2f5aeb7aec2bae5eade85ac8837f91', 'smallbox', 'area1', 0, NULL, '{\"name\":\"Usuarios Registrados\",\"icon\":\"add-circle\",\"color\":\"bg-green\",\"link\":\"#\",\"sql\":\"SELECT COUNT(*)\\r\\nFROM users\"}', '2018-06-17 09:02:47', NULL),
(4, 1, 'c22ae118a3ce564f7d17ffc755497804', 'smallbox', 'area2', 0, NULL, '{\"name\":\"Ordenes Reparacion\",\"icon\":\"briefcase\",\"color\":\"bg-aqua\",\"link\":\"#\",\"sql\":\"Select count(*) from ordenes_reparacion\"}', '2018-06-17 09:04:20', NULL),
(5, 1, '8594de86b7f0bbd63aeec6c978e4bb93', 'chartarea', NULL, 0, 'Untitled', NULL, '2018-06-17 09:32:59', NULL),
(6, 1, '8594de86b7f0bbd63aeec6c978e4bb93', 'table', NULL, 0, 'Untitled', NULL, '2018-06-17 09:32:59', NULL),
(7, 1, '8594de86b7f0bbd63aeec6c978e4bb93', 'smallbox', NULL, 0, 'Untitled', NULL, '2018-06-17 09:32:59', NULL),
(8, 1, '1ac766e8ee649d7e9a1887dfcb6845f3', 'chartarea', NULL, 0, 'Untitled', NULL, '2018-06-17 09:33:01', NULL),
(9, 1, 'ec4c448044e49911d5e5364f64ca4e71', 'chartbar', 'area5', 0, NULL, '{\"name\":\"test\",\"sql\":\"select  count(id_vehiculo) as value, marca as label from vehiculos limit 10\",\"area_name\":\"vehiculo\",\"goals\":\"2\"}', '2018-06-17 09:38:18', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_users`
--

DROP TABLE IF EXISTS `cms_users`;
CREATE TABLE IF NOT EXISTS `cms_users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_cms_privileges` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cms_users`
--

INSERT INTO `cms_users` (`id`, `name`, `photo`, `email`, `password`, `id_cms_privileges`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Super Admin', NULL, 'admin@crudbooster.com', '$2y$10$ooh6kA2ztMzKSNm/u0TmPOgp6HWakFKpxxNfkPhkjsJdEFZBGJRaq', 1, '2018-06-17 08:36:33', NULL, 'Active'),
(2, 'Administrador', 'uploads/1/2018-06/admin.gif', 'administrador@curvasud.com', '$2y$10$J7WTe3mDu1lA.UNYJ1AaButQkm08twCbRNIXCHe7uN8EQn05pcH7a', 2, '2018-06-17 09:06:34', '2018-06-30 06:59:45', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles_ordenes_reparacion`
--

DROP TABLE IF EXISTS `detalles_ordenes_reparacion`;
CREATE TABLE IF NOT EXISTS `detalles_ordenes_reparacion` (
  `id_detalle_orden` int(11) NOT NULL AUTO_INCREMENT,
  `id_orden_reparacion` int(11) NOT NULL,
  `kilometraje` varchar(45) NOT NULL,
  `motivo_ingreso` varchar(200) NOT NULL,
  `observaciones` varchar(200) NOT NULL,
  `extra` varchar(100) DEFAULT NULL,
  `mecanico` varchar(45) NOT NULL,
  `operacion_realizada` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id_detalle_orden`),
  KEY `FK_detalles_ordenes_reparacion_ordenes_reparacion_idx` (`id_orden_reparacion`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalles_ordenes_reparacion`
--

INSERT INTO `detalles_ordenes_reparacion` (`id_detalle_orden`, `id_orden_reparacion`, `kilometraje`, `motivo_ingreso`, `observaciones`, `extra`, `mecanico`, `operacion_realizada`) VALUES
(26, 31, '10128', 'dgdgfdgfdgdgd', 'dgdfggdfg', 'kkko', '4', 'dgdgdgdg'),
(27, 32, '10128', 'dgdgfdgfdgdgd', 'dgdfggdfg', 'kkko', '4', 'dgdgdgdg'),
(28, 33, '10128', 'dgdgfdgfdgdgd', 'dgdfggdfg', 'kkko', '4', 'dgdgdgdg'),
(29, 34, '10128', 'dgdgfdgfdgdgd', 'dgdfggdfg', 'kkko', '4', 'dgdgdgdg'),
(30, 35, '10127', 'Service de 10.000 km', 'Cliente siente ruido en puerta trasera del lado izquierdo. Controlar manija  floja de la puerta lado acompañante', '--', '4', 'Se realizó service 10.000 km. Se controló puerta trasera y manija de la puerta ok'),
(31, 36, '20000', 'Service 20.000 km', 'Cliente no le sube vidrio lado conductor correctamente', '--', '4', 'Se realizó service 20.000 km y se controló vidrio de ventana lado conductor ok'),
(32, 37, '10128', 'dgdgfdgfdgdgd', 'dgdfggdfg', 'kkko', '4', 'dgdgdgdg'),
(33, 38, '45456456', 'dfggdgdg', 'dfgfdggdfg', 'dgdfgd', '1', 'dgfdgdf'),
(34, 39, '9800', 'Service 10.000 km', 'Clienta nota desperfecto en dirección', NULL, '5', 'Se realizó service 10.000 km correctamente y se verificó la dirección ok'),
(35, 40, '8000', 'Cambio de aceite', 'Notaba nivel de aceite elevado', NULL, '1', 'Se realizó cambio de aceite a modo de cortesía'),
(36, 41, '20000', 'Service prueba', 'prueba', '--', '3', 'probandooo'),
(37, 42, '5855', 'service 20.000 km', 'Cliente nota ruido en puerta trasera. Encuentra manija de la puerta lado conductor, floja.', 'asdsad', '1', 'Se realizó service de 20.000 km correspondiente, se controló puerta ok. Se ajustó manija de la puerta'),
(38, 43, '5855', 'service 20.000 km', 'Cliente nota ruido en puerta trasera. Encuentra manija de la puerta lado conductor, floja.', 'asdsad', '1', 'Se realizó service de 20.000 km correspondiente, se controló puerta ok. Se ajustó manija de la puerta'),
(39, 44, '19800', 'service 20.000 km', 'Siente puerta floja del lado del conductor. Manija de puerta lado acompañante floja', NULL, '5', 'Se realizó service de 20.000 km correspondiente, se controló puerta ok. Se ajustó manija de la puerta'),
(40, 45, '9800', 'Service 10.000 km', 'sddsfssd', NULL, '3', 'sdfsdfdsf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados_ordenes`
--

DROP TABLE IF EXISTS `estados_ordenes`;
CREATE TABLE IF NOT EXISTS `estados_ordenes` (
  `id_estado_orden` int(11) NOT NULL AUTO_INCREMENT,
  `estadoOrden` varchar(45) NOT NULL,
  PRIMARY KEY (`id_estado_orden`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estados_ordenes`
--

INSERT INTO `estados_ordenes` (`id_estado_orden`, `estadoOrden`) VALUES
(1, 'Finalizada'),
(2, 'En proceso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados_turnos`
--

DROP TABLE IF EXISTS `estados_turnos`;
CREATE TABLE IF NOT EXISTS `estados_turnos` (
  `id_estado_turno` int(11) NOT NULL AUTO_INCREMENT,
  `estadoTurno` varchar(45) NOT NULL,
  PRIMARY KEY (`id_estado_turno`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estados_turnos`
--

INSERT INTO `estados_turnos` (`id_estado_turno`, `estadoTurno`) VALUES
(1, 'Disponible'),
(2, 'Ocupado'),
(3, 'Cancelado'),
(4, 'Completado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mecanicos`
--

DROP TABLE IF EXISTS `mecanicos`;
CREATE TABLE IF NOT EXISTS `mecanicos` (
  `id_mecanico` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dni` int(8) NOT NULL,
  `id_tipo_doc` int(11) NOT NULL,
  `fecha_nac` date NOT NULL,
  `domicilio` varchar(150) NOT NULL,
  `cod_postal` int(11) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `id_ciudad` int(11) NOT NULL,
  PRIMARY KEY (`id_mecanico`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `mecanicos`
--

INSERT INTO `mecanicos` (`id_mecanico`, `nombre`, `apellido`, `email`, `dni`, `id_tipo_doc`, `fecha_nac`, `domicilio`, `cod_postal`, `telefono`, `id_ciudad`) VALUES
(1, 'Matias ', 'Rodriguez', 'matirodriguez@curvasud.com', 33963544, 1, '1989-06-16', 'Bv. san juan', 5000, '3543640112', 1),
(2, 'Fernando', 'Freytes', 'ffreytes@curvasud.com', 30522113, 1, '1986-06-08', 'Bv. san juan', 5000, '3514789455', 1),
(3, 'Pablo', 'Molina', 'pmolina348@curvasud.com', 36234993, 1, '1992-06-22', 'Bv. san juan', 5000, '3518566322', 1),
(4, 'Gustavo', 'Gonzalez', 'gustavog@curvasud.com', 35221455, 1, '1991-06-22', 'Bv. san juan', 5000, '3512666411', 13),
(5, 'Mariano', 'Martinez', 'mmartinez@curvasud.com', 32544112, 1, '1988-08-21', '27 de abril 400', 5000, '3516874621', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=80 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(77, '2016_11_17_102740_create_cms_statistic_components', 2),
(75, '2016_11_15_132350_create_cms_email_templates', 2),
(76, '2016_11_15_190410_create_cms_statistics', 2),
(74, '2016_11_14_141657_create_cms_menus', 2),
(73, '2016_10_01_144826_add_table_apikey', 2),
(72, '2016_10_01_141934_add_responses_apicustom', 2),
(70, '2016_10_01_141740_add_method_type_apicustom', 2),
(71, '2016_10_01_141846_add_parameters_apicustom', 2),
(69, '2016_09_17_104728_create_nullable_cms_apicustom', 2),
(68, '2016_09_16_045425_add_label_setting', 2),
(67, '2016_09_16_035347_add_group_setting', 2),
(65, '2016_08_20_125418_add_table_cms_notifications', 2),
(66, '2016_09_04_033706_add_table_cms_email_queues', 2),
(64, '2016_08_17_225409_add_status_cms_users', 2),
(63, '2016_08_07_154624_add_table_cms_moduls', 2),
(62, '2016_08_07_154624_add_table_cms_menus_privileges', 2),
(61, '2016_08_07_152421_add_table_cms_users', 2),
(60, '2016_08_07_152320_add_table_cms_settings', 2),
(59, '2016_08_07_152214_add_table_cms_privileges_roles', 2),
(58, '2016_08_07_152014_add_table_cms_privileges', 2),
(57, '2016_08_07_151211_add_details_cms_logs', 2),
(56, '2016_08_07_151210_add_table_cms_logs', 2),
(55, '2016_08_07_150834_add_table_cms_dashboard', 2),
(54, '2016_08_07_145904_add_table_cms_apicustom', 2),
(78, '2017_06_06_164501_add_deleted_at_cms_moduls', 2),
(79, '2018_05_22_235344_extender_usuarios_migration', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordenes_reparacion`
--

DROP TABLE IF EXISTS `ordenes_reparacion`;
CREATE TABLE IF NOT EXISTS `ordenes_reparacion` (
  `id_orden_reparacion` int(11) NOT NULL AUTO_INCREMENT,
  `id_estado_orden` int(11) NOT NULL,
  `fecha_ingreso_vehiculo` date NOT NULL,
  `fecha_egreso_vehiculo` date DEFAULT NULL,
  `id_mecanico` int(11) DEFAULT NULL,
  `id_vehiculo` int(50) DEFAULT NULL,
  `id_cliente` int(50) DEFAULT NULL,
  PRIMARY KEY (`id_orden_reparacion`),
  KEY `FK_ordenes_reparacion_estados_ordenes_idx` (`id_estado_orden`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ordenes_reparacion`
--

INSERT INTO `ordenes_reparacion` (`id_orden_reparacion`, `id_estado_orden`, `fecha_ingreso_vehiculo`, `fecha_egreso_vehiculo`, `id_mecanico`, `id_vehiculo`, `id_cliente`) VALUES
(30, 1, '2018-06-11', '2018-06-11', 4, 20, 4),
(31, 1, '2018-06-12', '2018-06-12', 4, 36, 14),
(32, 1, '2018-06-12', '2018-06-12', 4, 18, 3),
(33, 1, '2018-06-12', '2018-06-12', 4, 5, 8),
(34, 1, '2018-06-12', '2018-06-12', 4, 18, 3),
(35, 1, '2018-01-12', '2018-01-13', 4, 20, 13),
(36, 1, '2018-04-15', '2018-04-16', 3, 28, 13),
(37, 1, '2018-06-12', '2018-06-12', 4, 5, 8),
(38, 1, '2018-06-12', '2018-06-21', 1, 21, 3),
(39, 1, '2018-06-12', '2018-06-21', 5, 38, 20),
(40, 1, '2018-01-20', '2018-06-27', 1, 39, 20),
(41, 1, '2018-06-12', '2018-06-16', 3, 38, 20),
(42, 1, '2018-06-19', '2018-08-25', 1, 19, 3),
(43, 2, '2018-06-19', '2018-08-25', 1, 42, 24),
(44, 2, '2018-06-19', '2018-06-21', 5, 43, 24),
(45, 2, '2018-06-19', '2018-06-15', 3, 44, 25);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suscripciones`
--

DROP TABLE IF EXISTS `suscripciones`;
CREATE TABLE IF NOT EXISTS `suscripciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mail` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `suscripciones`
--

INSERT INTO `suscripciones` (`id`, `mail`) VALUES
(1, 'pfernandez348@hotmail.com'),
(17, 'laf.0182@gmail.com'),
(3, 'asdasda@hotmail.com'),
(4, 'asdasddas@asdasd.com'),
(5, 'pfernandez348@hotmail.com'),
(6, 'pfernandez348@hotmail.com'),
(7, 'claudiagibb@hotmail.com'),
(8, 'claudiagibb@hotmail.com'),
(9, 'marcelo@tinelli.com'),
(10, 'pfernandez348@hotmail.com'),
(11, 'marcelo@tinelli.com'),
(12, 'claudiaapesteguia@gmail.com'),
(13, 'pfernandez348@hotmail.com'),
(14, 'pfernandez348@hotmail.com'),
(15, 'pfernandez348@hotmail.com'),
(16, 'claudiagibb@hotmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_documentos`
--

DROP TABLE IF EXISTS `tipos_documentos`;
CREATE TABLE IF NOT EXISTS `tipos_documentos` (
  `id_tipo_doc` int(11) NOT NULL AUTO_INCREMENT,
  `tipoDocumento` varchar(45) NOT NULL,
  PRIMARY KEY (`id_tipo_doc`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipos_documentos`
--

INSERT INTO `tipos_documentos` (`id_tipo_doc`, `tipoDocumento`) VALUES
(1, 'DNI'),
(2, 'LE'),
(3, 'Pasaporte');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_empleados`
--

DROP TABLE IF EXISTS `tipos_empleados`;
CREATE TABLE IF NOT EXISTS `tipos_empleados` (
  `id_tipo_empleado` int(11) NOT NULL AUTO_INCREMENT,
  `tipoEmpleado` varchar(45) NOT NULL,
  PRIMARY KEY (`id_tipo_empleado`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipos_empleados`
--

INSERT INTO `tipos_empleados` (`id_tipo_empleado`, `tipoEmpleado`) VALUES
(1, 'EAC'),
(2, 'Jefe de Taller'),
(3, 'Mecánico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_servicios`
--

DROP TABLE IF EXISTS `tipos_servicios`;
CREATE TABLE IF NOT EXISTS `tipos_servicios` (
  `id_tipo_servicio` int(11) NOT NULL AUTO_INCREMENT,
  `tipoServicio` varchar(45) NOT NULL,
  PRIMARY KEY (`id_tipo_servicio`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipos_servicios`
--

INSERT INTO `tipos_servicios` (`id_tipo_servicio`, `tipoServicio`) VALUES
(1, '10000'),
(2, '20000'),
(3, '30000'),
(4, '40000'),
(5, '50000'),
(6, 'Recall');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_vehiculos`
--

DROP TABLE IF EXISTS `tipos_vehiculos`;
CREATE TABLE IF NOT EXISTS `tipos_vehiculos` (
  `id_tipo_vehiculo` int(11) NOT NULL AUTO_INCREMENT,
  `tipoVehiculo` varchar(45) NOT NULL,
  PRIMARY KEY (`id_tipo_vehiculo`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipos_vehiculos`
--

INSERT INTO `tipos_vehiculos` (`id_tipo_vehiculo`, `tipoVehiculo`) VALUES
(1, 'Auto'),
(2, 'Pick Up'),
(3, 'Utilitario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_user`
--

DROP TABLE IF EXISTS `tipo_user`;
CREATE TABLE IF NOT EXISTS `tipo_user` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_user`
--

INSERT INTO `tipo_user` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Cliente', NULL, NULL),
(2, 'Encargado de Atención al Cliente', NULL, NULL),
(3, 'Jefe de Taller', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turnos`
--

DROP TABLE IF EXISTS `turnos`;
CREATE TABLE IF NOT EXISTS `turnos` (
  `id_turno` int(11) NOT NULL AUTO_INCREMENT,
  `id_tipo_servicio` int(11) NOT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `id_estado_turno` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `id_vehiculo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_turno`),
  KEY `fk_turno_tipos_servicios_idx` (`id_tipo_servicio`),
  KEY `FK_turnos_estados_turnos_idx` (`id_estado_turno`),
  KEY `FK_turnos_clientes_idx` (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `turnos`
--

INSERT INTO `turnos` (`id_turno`, `id_tipo_servicio`, `id_cliente`, `id_estado_turno`, `fecha`, `hora`, `id_vehiculo`) VALUES
(20, 2, 2, 2, '2018-06-23', '11:00:00', 10),
(23, 6, 2, 3, '2019-04-30', '09:00:00', 15),
(26, 2, 2, 3, '2018-11-13', '09:00:00', 17),
(27, 1, 2, 2, '2018-07-03', '12:00:00', 10),
(28, 1, 2, 3, '2018-06-21', '08:00:00', 16),
(29, 1, 2, 3, '2018-06-15', '11:00:00', 10),
(30, 1, 2, 3, '2018-06-13', '09:00:00', 10),
(33, 1, 15, 2, '2018-06-21', '10:00:00', 37),
(34, 1, 14, 3, '2018-06-26', '12:00:00', 36),
(35, 2, 14, 2, '2018-07-13', '08:00:00', 36),
(36, 1, 20, 3, '2018-08-16', '08:00:00', 38),
(37, 1, 20, 3, '2018-07-10', '09:00:00', 39),
(38, 1, 20, 3, '2018-08-16', '08:00:00', 38),
(39, 1, 20, 3, '2018-09-20', '08:00:00', 38),
(40, 1, 20, 3, '2018-09-13', '11:00:00', 39),
(41, 1, 20, 3, '2018-06-17', '08:00:00', 38),
(42, 1, 20, 2, '2018-08-16', '08:00:00', 38),
(43, 2, 20, 3, '2018-10-18', '12:00:00', 39),
(44, 2, 20, 2, '2018-06-17', '12:00:00', 39),
(45, 1, 23, 2, '2018-06-17', '16:00:00', 41),
(46, 1, 24, 3, '2018-06-19', '12:00:00', 42),
(47, 2, 24, 3, '2018-07-11', '13:00:00', 42),
(48, 1, 24, 3, '2018-07-20', '08:00:00', 42),
(49, 1, 24, 3, '2018-08-30', '13:00:00', 42),
(50, 2, 24, 2, '2018-06-20', '10:00:00', 43),
(51, 1, 24, 3, '2018-06-19', '11:00:00', 42),
(52, 2, 25, 3, '2018-06-20', '16:00:00', 44),
(53, 1, 25, 2, '2018-06-20', '16:00:00', 44),
(54, 1, 26, 3, '2018-09-12', '08:00:00', 46),
(55, 1, 26, 3, '2018-08-16', '14:00:00', 46);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tipo_user_id` int(10) UNSIGNED DEFAULT NULL,
  `id_tipo_doc` int(11) NOT NULL,
  `id_ciudad` int(11) NOT NULL,
  `dni` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_nac` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `razon_social` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `domicilio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cod_postal` int(11) DEFAULT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cuil` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_tipo_user_id_foreign` (`tipo_user_id`),
  KEY `users_id_tipo_doc_foreign` (`id_tipo_doc`),
  KEY `users_id_ciudad_foreign` (`id_ciudad`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `tipo_user_id`, `id_tipo_doc`, `id_ciudad`, `dni`, `nombre`, `apellido`, `fecha_nac`, `razon_social`, `domicilio`, `cod_postal`, `telefono`, `cuil`) VALUES
(1, 'jorge89', 'jorge_carranza89@gmail.com', '$2y$10$zl.hL9ooDIhDlxm2Y3gpM.JX0g04tXhu4cKQx3I0CP..MbNYVKM3C', 'D9BZbySaKjVctypNL3s1roswNosOrkYsUMBGDGq6Mgd3bvKTn793AsJf2bNK', '2018-05-20 04:18:38', '2018-05-20 04:18:38', 1, 1, 1, 33236587, 'Jorge', 'Carranza', '1989-03-19', '', '', 5000, '3516996321', NULL),
(2, 'marce', 'marcelo@tinelli.com', '$2y$10$n/dDC50fxyiSjuoNUcXQM.UcnVIvHKx9Goz6HgUp0JtOlRmWfxdCm', 'ewsYIjDEPeGtoiDneRMqTVjL5zLfISs6qSNFHM8U7dclJNZYW5gYbaxQqcYC', '2018-05-20 04:21:24', '2018-06-08 02:30:21', 1, 1, 1, 35333210, 'Marcelo', 'Tinelli', '1983-08-20', 'Ideas del sur SA', 'Av. Colón 500', 5003, '3518235425', NULL),
(3, 'lucas58', 'lucas.venencia@hotmail.com', '$2y$10$oIqztiwaYdX4eHBdfU6GA.ZjUiYa/Dt2FlBPrvVhZP684/7laEsSO', NULL, '2018-05-20 05:29:07', '2018-05-20 05:29:07', 1, 1, 1, 33254877, 'Lucas', 'Venencia', '1990-09-21', '', '', 5004, '351699845', NULL),
(4, 'caro23', 'caro.benitez@gmail.com', '$2y$10$FvLZMaVHfPtFxlyMdNiaY.3EhzqYgha2BNwqYbSwJiocgXENG9T7a', NULL, '2018-05-20 05:33:52', '2018-05-20 05:33:52', 1, 1, 1, 36303214, 'Carolina', 'Benitez', '1988-02-15', '', '', 5000, '3515784569', NULL),
(8, 'juampi_88', 'juancho1@gmail.com', '$2y$10$.21042BLp6H.O1yHCAW7O.375wvUR/Uj3HXtuHhUwh3PYQLLZ/QpS', NULL, '2018-05-23 04:00:35', '2018-05-23 04:00:35', 1, 1, 1, 36234993, 'Pablo', 'Paillet', '2018-05-31', '', 'Caseros 1180', 5000, '3543640112', NULL),
(7, 'hector86', 'hectorcaceres@gmail.com', '$2y$10$xTbuyCkqDxUAXdabFUecL.BWPsnMm9p8pRqWVbYoHlJJskhb1jmG6', NULL, '2018-05-23 04:00:11', '2018-05-23 04:00:11', 1, 1, 1, 36234993, 'Héctor', 'Cáceres', '2018-05-31', '', 'Bv. san juan 600', 5000, '3512566477', NULL),
(9, 'lucre29', 'lucrecia.m@hotmail.com', '25f9e794323b453885f5181f1b624d0b', 'siMrVhj7f8ymqStdAoWhMhSUkDLs64RgS4LV9W6EGxWoLhBnZkPAQjSjiIm1', '2018-05-23 04:01:07', '2018-05-23 04:01:07', 1, 1, 1, 36234999, 'Lucrecia', 'Martinez', '2018-05-31', '', 'Av. Duarte Quiros 1500', 5000, '3516985254', NULL),
(10, 'luFCA', 'lueac@curvasud.com', '$2y$10$dvCizcP8kg5rKzzUKTNwIeu9AwdHE7y4BaIEHFN/9yzAg7Bf4mzIu', 'KDMyVncRQAnoTfxIKMNZrLFquJkiZU6o7Dut8C7JsK8itCH54pAbsGr76xAQ', '2018-06-02 02:12:39', '2018-06-19 06:15:13', 2, 1, 17, 14569874, 'Luciana', 'Fernandez', '1990-05-28', NULL, 'Av.Juan B Justo 603', 5002, '3513655412', NULL),
(12, 'carlosfca', 'carlosgomez@curvasud.com', '$2y$10$1miGxsLiXYUzKbDiQCgDfuaUwQXw/PVUwmvT74hkJVi4h8zG6VPai', 'Sbpd7fWn9HaXNnjken2vElM2kQf82xJiQYJQRRPEpyg7XqnIDgiEsYT9AzQ8', '2018-06-04 08:29:25', '2018-06-13 01:17:09', 3, 1, 18, 33333333, 'Carlos', 'Gómez', '1983-06-14', NULL, 'Bolivar 556', 5002, '3512654787', NULL),
(13, 'mat22', 'mat22@gmail.com', '$2y$10$d.c/5IZ5Ui0cyVcCUNmiBO3rMyML9DB5bcUAAEJzDbCVvtUtIeAf6', 'OGC73nblHxEEdal16TWGJ6gg3rKfcuSXrixDQ3zJLJilUo7rd7xYodbvrPuH', '2018-06-06 06:20:04', '2018-06-06 06:20:04', 1, 1, 1, 1726372, 'Matias ', 'Fernandez', '2018-06-09', '', 'Salta', 5000, '3543640117', NULL),
(14, 'JuPrueba', 'juprueba@gmail.com', '$2y$10$0RQv/ZFHLjyFKaFp/VuWTOlRRrig8UHAnGFGrKwCLjx.VnqF/3Lsm', 'Dzcd9VM3VoxxyyJIaBgSllFTf6hZW0030no6LXUKGsvy8ghaWLMl1XkVPT3E', '2018-06-07 03:25:28', '2018-06-07 03:25:28', 1, 1, 1, 35963113, 'Julieta', 'Dominguez', '2018-05-28', NULL, 'Bv. san juan 700', 5000, '3518179694', NULL),
(15, 'Jorgelino2', 'jor25@hotmail.com', '$2y$10$Pf.TKbZSuPuBNwdBHz4hNOy7EiBuIqjlKqRWBDFJsJOhagq6Be6dW', NULL, '2018-06-08 06:02:14', '2018-06-08 06:02:15', 1, 1, 14, 3658947, 'Juan', 'Quiroga', '2018-06-15', 'asdsad', 'asasd', 5000, '358978444', NULL),
(16, 'LuProbando', 'luprobando@gmail.com', '$2y$10$eJq1vlHbygrlEkdlLGtvAegn6dtM.3WNXE8/4IOO/WClZI10n3olS', 'scesCzNbw3vRFI9Y8hmZsEPWhigAPNjLptrWpNf3QNslRpdzeG8aVGSLs1uY', '2018-06-11 09:00:44', '2018-06-11 09:00:44', 1, 1, 1, 35966333, 'Ludmila', 'Spinetta', '1991-06-21', NULL, 'Dean funes 1322', 5000, '3516988755', NULL),
(18, 'julioPrueba', 'julio@gmail.com', '$2y$10$JpJ7Y6d53SkIBs1p1KqSIehmfIje8/BFjlPq2xMrMAHzjeG7c/xq.', 'Ddi12MGiRof6ZEcKqACsdPO8PBRQBZN3bNkH2bsBfVRU6I5Mw5o0SzbyqjdM', '2018-06-11 09:10:59', '2018-06-11 09:11:48', 1, 1, 2, 30233511, 'Julio', 'Cortazar', '1960-06-21', NULL, 'Av maipu 500', 5003, '3512455115', NULL),
(19, 'Pichu86', 'patricio_cba@gmail.com', '$2y$10$EZHlD0X.yj4msYSJtcP99uzY9oVKMdvgWStm8pEzuxkvQcRlIMvg6', 'MU7AScQiHutmdEtCZPPEPety4DjZgKVkQ6Bkcbm0uVJDpqqHKuAc9RcOzuLO', '2018-06-12 06:00:45', '2018-06-12 06:00:45', 1, 1, 1, 33655496, 'Patricio', 'Pérez', '2018-06-14', NULL, 'Bv. chacabuco 566', 5000, '3516885544', NULL),
(20, 'Jaz88', 'jazmin182@hotmail.com', '$2y$10$W0IAqxQI6umQ1cwRQSvGteKdRBkJjDwbcKrWXQM/ul5XCjgvQmxde', 'iDZKPV67E9Vj5HHjDI7AKMn5KojaeLYPpFvqagtKFYmh5eu94pWQg47TfZo6', '2018-06-12 11:53:06', '2018-06-13 00:53:28', 1, 1, 16, 36355422, 'Jazmin', 'Suárez', '1988-06-22', NULL, 'Caseros 602', 5000, '3512002182', NULL),
(25, 'mariela55', 'mariela55@gmail.com', '$2y$10$BqZ90z971lPuaRzOOcioJOSiWjd4lySwIKViQZuPCCfbIa6upsJ0u', 'IrnXKvWEFPnyDx2ITfeT1IwH7lqQSeBZU2SCosnCxtFfvOLV4knkPf4viwrc', '2018-06-19 23:19:55', '2018-06-19 23:28:29', 1, 1, 1, 36544721, 'Mariela', 'Mercado', '1987-06-14', NULL, 'Caseros 500', 5000, '3512455655', NULL),
(23, 'Jorgelino4', 'jorgelino4@hotmail.com', '$2y$10$rgtL6aUTCTN8p/Ze2C.gHO7oetX2X5Srb8gY6PLATiyoPhLDxZS0.', 'TFuwY4QKQSbNXb2Tengq1BC5cMo0BAqGDWa7X4QZ4TZCQfblzbmvgax6phKn', '2018-06-17 08:59:57', NULL, 1, 1, 5, 36258748, 'Jorgelino', 'Gonzales', '2018-05-03', 'CurvaSud', 'Salta 110', 5000, '3543640119', '29182918291'),
(24, 'joaquina55', 'joaquina55@gmail.com', '$2y$10$Ia4vS06N3VsKrPT6g7PSPe3jOl18GE0Cx7eD9SjAO8.YPRcdNvX9K', 'dN3p8EJGLHSTAOk9N1nvMr2TOB2Q5q9BtGYsEbc2pbddbzUgQB9Za9002Mnr', '2018-06-19 05:51:25', '2018-06-19 05:52:44', 1, 1, 19, 32123541, 'Joaquina', 'Galindez', '1987-06-14', NULL, 'Av santa ana 2355', 5002, '3512456987', NULL),
(26, 'noe44', 'noelia44@gmail.com', '$2y$10$EgyNrx0IbSAe3yr6hdZoI.cE/MccXihd9KSannWUI79rKJlgfBIaq', '6lCsv4bEt7y0o4tMEyWPGXBxw3xHzzvfoOzOALY9PnOWxjkELpDTPhZsS7LQ', '2018-06-24 19:42:40', '2018-06-28 01:27:22', 1, 1, 20, 32621120, 'Noelia', 'Pérez', '1988-04-14', NULL, 'Av. colón 187', 5000, '3518411745', NULL),
(27, 'pruebacurvasud', 'pruebacurvasud@curvasud.com', '$2y$10$BX0yKjeLBU65SY.ru.BUyuB.ytqkq.guvgKq51wKcpOiDqzkqFcSy', 'SRjLBtLWzylYOELu077GwH0vVp5txHB825MCW5zGHsH09uhg3MXXjTdPUIWl', '2018-06-28 05:14:04', '2018-06-29 07:41:42', 2, 1, 1, 35963113, 'pruebacurvasud', 'pruebacurvasud', '1991-05-28', 'asd', 'Bv. san juan 736 - 3 A', 5000, '3518179694', '27359631133'),
(28, 'Fernando23', 'fer2018@gmail.com', '$2y$10$NlEQ2Rrt.NICQhCzrnlZXOVcj7Wbik6/OZIz5ps2.1IO/8O30LhyC', 'mm3YYjQdy2tUe0CykkUxJ3f99C4t5xl4iQXnTqZvnv9P8yM2GDFZSJxJBO0U', '2018-06-29 19:03:40', '2018-06-29 19:03:40', 1, 1, 1, 36255413, 'Fernando', 'Villagra', '1990-06-21', NULL, 'Dean funes 854', 5000, '3512469874', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

DROP TABLE IF EXISTS `vehiculos`;
CREATE TABLE IF NOT EXISTS `vehiculos` (
  `id_vehiculo` int(11) NOT NULL AUTO_INCREMENT,
  `id_tipo_vehiculo` int(11) NOT NULL,
  `marca` varchar(10) NOT NULL,
  `modelo` varchar(45) NOT NULL,
  `anio` int(11) NOT NULL,
  `patente` varchar(7) NOT NULL,
  `nro_chasis` varchar(7) NOT NULL,
  `fecha_inicio_garantia` varchar(50) DEFAULT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `cancelado` int(1) DEFAULT '0',
  PRIMARY KEY (`id_vehiculo`),
  UNIQUE KEY `patente_UNIQUE` (`patente`),
  UNIQUE KEY `nro_chasis_UNIQUE` (`nro_chasis`),
  KEY `FK_vehiculos_tipos_vehiculos_idx` (`id_tipo_vehiculo`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`id_vehiculo`, `id_tipo_vehiculo`, `marca`, `modelo`, `anio`, `patente`, `nro_chasis`, `fecha_inicio_garantia`, `id_cliente`, `cancelado`) VALUES
(1, 2, 'Fiat', 'Toro Freedom', 2015, 'AB123CD', 'KB12345', '2015-11-14', 10, 0),
(2, 1, 'Fiat', 'Tipo', 2014, 'AL863LI', 'UR75942', '2014-03-12', 10, 0),
(4, 2, 'Fiat', 'Toro Freedom', 2017, 'AB123FO', 'KB12348', '2017-12-15', 9, 0),
(5, 2, 'Fiat', 'Toro volcano', 2017, 'AB333FD', 'KB12223', '2017-11-16', 8, 0),
(7, 2, 'Fiat', 'Toro volcano', 2017, 'AB333FE', 'KB12221', '2017-09-24', 8, 0),
(10, 2, 'Fiat', 'Strada', 2017, 'AB333FB', 'KB12226', '2017-05-12', 2, 1),
(13, 2, 'Fiat', 'Toro volcano', 2017, 'AB333OI', 'KB122OI', '2017-08-18', 1, 0),
(15, 3, 'Fiat', 'Ducato', 2017, 'AB33123', 'KB12123', '2017-03-02', 2, 1),
(16, 2, 'Fiat', 'Toro volcano', 2017, 'AB33647', 'KB12647', '2017-05-11', 2, 0),
(17, 2, 'Fiat', 'Toro volcano', 2017, 'AB33609', 'KB12609', '2017-07-26', 2, 0),
(18, 3, 'Fiat', 'Dobló Cargo', 2018, 'AG789CG', 'AV78945', '2018-05-24', 3, 0),
(19, 1, 'Fiat', 'Grand Siena', 2017, 'AC122GH', 'KB55555', '2017-06-20', 3, 0),
(20, 1, 'Fiat', 'Mobi Easy', 2017, 'AB456RE', 'KB12875', '2017-02-04', 4, 0),
(21, 1, 'Fiat', 'Argo Drive', 2017, 'AB489HG', 'KB78945', '2017-03-06', 3, 0),
(22, 1, 'Fiat', 'Mobi Way', 2017, 'AB123UY', 'KB1234E', '2017-02-20', 7, 0),
(23, 3, 'Fiat', 'Fiorino', 2014, 'AS123GF', 'OI45687', '2014-03-20', 8, 0),
(24, 1, 'Fiat', 'Cronos Drive', 2018, 'IU741KJ', 'UE35891', '2018-03-20', 9, 0),
(25, 1, 'Fiat', 'Argo Drive', 2018, 'A123212', 'KB12278', '2018-05-26', 9, 0),
(26, 1, 'Fiat', 'Cronos Drive', 2018, 'LO587OI', 'KB34567', '2018-06-01', 2, 0),
(27, 1, 'Fiat', 'Strada', 2014, 'AF123FD', 'CD12385', '2014-06-07', 12, 0),
(28, 1, 'Fiat', 'Cronos drive', 2018, 'AB123AE', 'KB34568', '2018-06-09', 13, 0),
(32, 1, 'Fiat', 'Cronos drive', 2018, 'AB123A5', 'KB34563', '2018-06-09', 13, 1),
(34, 1, 'Fiat', 'Cronos drive', 2018, 'AB828UY', 'AW45872', '2018-06-29', 7, 0),
(35, 1, 'Fiat', 'Cronos drive', 2018, 'AW784AO', '789456Y', '2018-06-29', 7, 0),
(36, 1, 'Fiat', 'Fiorino', 2016, 'AL566MO', 'JU56987', '2016-06-14', 14, 0),
(37, 1, 'Fiat', 'Cronos drive', 1878, 'AI874OQ', 'AW45878', '2018-06-09', 15, 0),
(38, 1, 'Fiat', 'Qubo', 2013, 'AP123PO', 'KJ55555', '2013-06-08', 20, 0),
(39, 3, 'Fiat', 'Fiorino', 2015, 'AS333PO', 'KU55698', '2015-06-18', 20, 0),
(40, 2, 'Fiat', 'Toro Freedom', 2018, 'AB777DA', 'KB12366', '2018-05-04', 7, 0),
(41, 1, 'Fiat', 'Siena', 2014, 'AE544OE', 'OP22387', '2014-06-08', 23, 0),
(42, 1, 'Fiat', 'Siena', 2013, 'AB344JH', 'TR65489', '2013-06-14', 24, 0),
(43, 2, 'Fiat', 'Toro Volcano', 2016, 'AS333JH', 'UI56489', '2016-06-19', 24, 0),
(44, 1, 'Fiat', 'Fiorino', 2015, 'TE223HG', 'OP12874', '2015-06-15', 25, 0),
(45, 2, 'Fiat', 'Toro Freedom', 2017, 'AG899IO', 'TY12698', '2017-06-15', 25, 0),
(46, 1, 'Fiat', 'Qubo', 2016, 'AB657HG', 'KB21038', '2016-06-20', 26, 0);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalles_ordenes_reparacion`
--
ALTER TABLE `detalles_ordenes_reparacion`
  ADD CONSTRAINT `FK_detalles_ordenes_reparacion_ordenes_reparacion` FOREIGN KEY (`id_orden_reparacion`) REFERENCES `ordenes_reparacion` (`id_orden_reparacion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ordenes_reparacion`
--
ALTER TABLE `ordenes_reparacion`
  ADD CONSTRAINT `FK_ordenes_reparacion_estados_ordenes` FOREIGN KEY (`id_estado_orden`) REFERENCES `estados_ordenes` (`id_estado_orden`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `turnos`
--
ALTER TABLE `turnos`
  ADD CONSTRAINT `FK_turnos_estados_turnos` FOREIGN KEY (`id_estado_turno`) REFERENCES `estados_turnos` (`id_estado_turno`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_turnos_tipos_servicios` FOREIGN KEY (`id_tipo_servicio`) REFERENCES `tipos_servicios` (`id_tipo_servicio`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD CONSTRAINT `FK_vehiculos_tipos_vehiculos` FOREIGN KEY (`id_tipo_vehiculo`) REFERENCES `tipos_vehiculos` (`id_tipo_vehiculo`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
