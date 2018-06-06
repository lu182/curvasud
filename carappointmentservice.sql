-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 06-06-2018 a las 04:45:52
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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

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
(11, 'Otro'),
(12, 'Unquillo'),
(13, 'asddasasd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `id_tipo_doc` int(11) NOT NULL,
  `id_vehiculo` int(11) DEFAULT NULL,
  `id_ciudad` int(11) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `pass` varchar(45) NOT NULL,
  `dni` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `fecha_nac` date DEFAULT NULL,
  `razon_social` varchar(45) DEFAULT NULL,
  `domicilio` varchar(100) NOT NULL,
  `cod_postal` int(11) DEFAULT NULL,
  `telefono` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  PRIMARY KEY (`id_cliente`),
  UNIQUE KEY `usuario_UNIQUE` (`usuario`),
  UNIQUE KEY `dni_UNIQUE` (`dni`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  KEY `FK_clientes_tipos_documentos_idx` (`id_tipo_doc`),
  KEY `FK_clientes_vehiculos_idx` (`id_vehiculo`),
  KEY `FK_clientes_ciudades_idx` (`id_ciudad`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `id_tipo_doc`, `id_vehiculo`, `id_ciudad`, `usuario`, `pass`, `dni`, `nombre`, `apellido`, `fecha_nac`, `razon_social`, `domicilio`, `cod_postal`, `telefono`, `email`) VALUES
(1, 1, 1, 1, 'lulu', '1234567a', 35963113, 'Luciana', 'Fernandez', '1991-09-12', NULL, 'Bv. Chacabuco 182', 5000, '3516766657', 'luciana@gmail.com'),
(2, 1, NULL, 1, 'luciana@gmail.com', '1234568u', 17963122, 'Pablo', 'Fernandez', '1964-03-22', NULL, 'av. santa ana 1800', 5004, '3516766657', 'pfernandez348@hotmail.com'),
(6, 1, 15, 1, 'asdasaddasasd', 'asdasdasd1', 17963187, 'Pablo', 'Fernandez', '1964-03-22', NULL, 'av. santa ana 1800', 5004, '3516766657', 'pfernande1223248@hotmail.com'),
(7, 1, 16, 1, 'asdasaddasq1as1d', 'asdads112', 7060976, 'Pablo', 'Fernandez', '1964-03-22', NULL, 'av. santa ana 1800', 5004, '3516766657', 'pfernande12212qw3241128@hotmail.com'),
(8, 1, 17, 1, 'asdasaddasaq1as1d', 'qweqweeqw1', 7060909, 'Pablo', 'Fernandez', '1964-03-22', NULL, 'av. santa ana 1800', 5004, '3516766657', 'pfernande122a12qw3241128@hotmail.com'),
(9, 1, 18, 1, 'usuarioPrueba1', '123456789a', 36234997, 'Juan Pablo', 'Paillet', '2018-05-31', 'PAilletjp', 'Caseros 1180', 5000, '3543640112', 'email1@email.com'),
(10, 1, 19, 1, 'Marcelo', '12345679jh', 36963552, 'Marcelo', 'Tinelli', '1990-06-20', NULL, 'av valparaiso 2500', 5004, '3514789455', 'marce@hotmail.com'),
(11, 1, 20, 1, 'Sabrina45', 'sabri451', 33210254, 'Sabrina', 'Aguilera', '1989-07-28', NULL, 'Larrañaga 150', 5000, '3515179685', 'sabri45@hotmail.com'),
(12, 1, 21, 1, 'Nati86', 'nataliacba86', 30655998, 'Natalia', 'Sanchez', '1986-04-22', NULL, 'Pellegrini 1400', 5003, '3518174565', 'nataliacba@hotmail.com'),
(13, 1, 22, 1, 'Mari86', 'mari8612', 30231458, 'Mariela', 'Mercado', '1986-06-20', NULL, 'Bv.san juan 566', 5003, '3516766658', 'mmercado@hotmail.com'),
(14, 1, 23, 1, 'lele86', '98754jhk', 30223127, 'Leticia', 'Moreno', '1990-07-21', NULL, 'Mariano moreno 189', 5000, '3513445598', 'lele86@hotmail.com');

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
  PRIMARY KEY (`id_detalle_orden`),
  KEY `FK_detalles_ordenes_reparacion_ordenes_reparacion_idx` (`id_orden_reparacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

DROP TABLE IF EXISTS `empleados`;
CREATE TABLE IF NOT EXISTS `empleados` (
  `id_empleado` int(11) NOT NULL AUTO_INCREMENT,
  `id_tipo_empleado` int(11) NOT NULL,
  `id_tipo_doc` int(11) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `pass` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `dni` int(11) NOT NULL,
  `cuil` varchar(15) NOT NULL,
  `domicilio` varchar(100) NOT NULL,
  `fecha_nac` date NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  PRIMARY KEY (`id_empleado`),
  UNIQUE KEY `usuario_UNIQUE` (`usuario`),
  UNIQUE KEY `dni_UNIQUE` (`dni`),
  UNIQUE KEY `cuil_UNIQUE` (`cuil`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  KEY `FK_empleados_tipos_empleados_idx` (`id_tipo_empleado`),
  KEY `FK_empleados_tipos_documentos_idx` (`id_tipo_doc`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id_empleado`, `id_tipo_empleado`, `id_tipo_doc`, `usuario`, `pass`, `nombre`, `apellido`, `dni`, `cuil`, `domicilio`, `fecha_nac`, `telefono`, `email`) VALUES
(1, 1, 1, 'Mariana_fca', '3333333a', 'Mariana', 'Gutierrez', 32183654, '27-32183654-3', 'Av. Santa Ana 2500', '1987-05-16', '3516988788', 'mgutierrez@hotmail.com'),
(2, 2, 1, 'Carlos_fca', '5555555b', 'Carlos', 'Ramirez', 18966544, '20-18966544-5', 'Bv. Las Heras 530', '1963-06-09', '3517899122', 'carlosr@hotmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados_ordenes`
--

DROP TABLE IF EXISTS `estados_ordenes`;
CREATE TABLE IF NOT EXISTS `estados_ordenes` (
  `id_estado_orden` int(11) NOT NULL AUTO_INCREMENT,
  `estadoOrden` varchar(45) NOT NULL,
  PRIMARY KEY (`id_estado_orden`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `mecanicos`
--

INSERT INTO `mecanicos` (`id_mecanico`, `nombre`, `apellido`, `email`, `dni`, `id_tipo_doc`, `fecha_nac`, `domicilio`, `cod_postal`, `telefono`, `id_ciudad`) VALUES
(1, 'Matias Agustin', 'Fernandez', 'pfernandez348@hotmail.com', 13123123, 1, '2018-06-16', 'Bv. san juan', 5000, '3543640112', 1),
(2, 'Matias Agustin', 'Fernandez', 'marcelo@tinelli.com', 1223211, 1, '2018-06-08', 'Bv. san juan', 5000, '3514789455', 1),
(3, 'Matias Agustin', 'Fernandez', 'pfernandez348@hot2mail.com', 36234993, 1, '2018-06-22', 'Bv. san juan', 5000, '123122331', 1),
(4, 'Matias Agustin', 'Fernandez', 'pfernandez348@hot2mail.com', 36234997, 1, '2018-06-22', 'Bv. san juan', 5000, '1321321das', 13);

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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordenes_reparacion`
--

DROP TABLE IF EXISTS `ordenes_reparacion`;
CREATE TABLE IF NOT EXISTS `ordenes_reparacion` (
  `id_orden_reparacion` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) NOT NULL,
  `id_empleado` int(11) NOT NULL,
  `id_estado_orden` int(11) NOT NULL,
  `fecha_ingreso_vehiculo` date NOT NULL,
  `fecha_egreso_vehiculo` date DEFAULT NULL,
  PRIMARY KEY (`id_orden_reparacion`),
  KEY `FK_ordenes_reparacion_clientes_idx` (`id_cliente`),
  KEY `FK_ordenes_reparacion_empleados_idx` (`id_empleado`),
  KEY `FK_ordenes_reparacion_estados_ordenes_idx` (`id_estado_orden`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Estructura de tabla para la tabla `tipos_documentos`
--

DROP TABLE IF EXISTS `tipos_documentos`;
CREATE TABLE IF NOT EXISTS `tipos_documentos` (
  `id_tipo_doc` int(11) NOT NULL AUTO_INCREMENT,
  `tipoDocumento` varchar(45) NOT NULL,
  PRIMARY KEY (`id_tipo_doc`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

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
(3, 'Mecánico'),
(4, 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_servicios`
--

DROP TABLE IF EXISTS `tipos_servicios`;
CREATE TABLE IF NOT EXISTS `tipos_servicios` (
  `id_tipo_servicio` int(11) NOT NULL AUTO_INCREMENT,
  `tipoServicio` varchar(45) NOT NULL,
  `duracion` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_tipo_servicio`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipos_servicios`
--

INSERT INTO `tipos_servicios` (`id_tipo_servicio`, `tipoServicio`, `duracion`) VALUES
(1, '10000', 30),
(2, '20000', 50),
(3, '30000', 60),
(4, '40000', 70),
(5, '50000', 80),
(6, 'Recall', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_vehiculos`
--

DROP TABLE IF EXISTS `tipos_vehiculos`;
CREATE TABLE IF NOT EXISTS `tipos_vehiculos` (
  `id_tipo_vehiculo` int(11) NOT NULL AUTO_INCREMENT,
  `tipoVehiculo` varchar(45) NOT NULL,
  PRIMARY KEY (`id_tipo_vehiculo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

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
(3, 'Jefe de Taller', NULL, NULL),
(4, 'Administrador', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turnos`
--

DROP TABLE IF EXISTS `turnos`;
CREATE TABLE IF NOT EXISTS `turnos` (
  `id_turno` int(11) NOT NULL AUTO_INCREMENT,
  `id_tipo_servicio` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_estado_turno` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `id_vehiculo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_turno`),
  KEY `fk_turno_tipos_servicios_idx` (`id_tipo_servicio`),
  KEY `FK_turnos_estados_turnos_idx` (`id_estado_turno`),
  KEY `FK_turnos_clientes_idx` (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `turnos`
--

INSERT INTO `turnos` (`id_turno`, `id_tipo_servicio`, `id_cliente`, `id_estado_turno`, `fecha`, `hora`, `id_vehiculo`) VALUES
(1, 1, 9, 3, '2018-05-11', '11:00:00', NULL),
(2, 4, 9, 2, '2018-05-18', '14:00:00', NULL),
(3, 5, 2, 3, '2018-05-25', '09:00:00', NULL),
(4, 6, 2, 3, '2018-06-05', '14:00:00', NULL),
(5, 1, 2, 3, '2018-05-19', '08:00:00', NULL),
(6, 1, 2, 3, '2018-05-26', '15:00:00', NULL),
(7, 1, 2, 3, '2018-05-30', '14:00:00', NULL),
(8, 1, 2, 3, '2018-05-25', '08:00:00', NULL),
(9, 1, 2, 3, '2018-06-05', '08:00:00', NULL),
(10, 2, 2, 3, '2018-06-22', '13:00:00', NULL),
(11, 6, 2, 3, '2018-06-29', '10:00:00', NULL),
(12, 6, 2, 3, '2018-06-29', '15:00:00', NULL),
(13, 1, 2, 3, '2018-07-14', '09:00:00', NULL),
(14, 3, 2, 3, '2018-06-01', '11:00:00', NULL),
(15, 2, 2, 2, '2018-06-16', '09:00:00', NULL),
(16, 1, 2, 3, '2018-05-22', '15:00:00', NULL),
(17, 1, 2, 2, '2018-05-07', '10:00:00', NULL),
(18, 1, 2, 2, '2018-05-13', '12:00:00', NULL),
(19, 1, 2, 2, '2018-05-21', '10:00:00', NULL),
(20, 1, 2, 2, '2018-05-27', '13:00:00', 10),
(21, 1, 2, 3, '2018-05-06', '09:00:00', 10);

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
  `id_tipo_empleado` int(11) DEFAULT NULL,
  `cuil` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_tipo_user_id_foreign` (`tipo_user_id`),
  KEY `users_id_tipo_doc_foreign` (`id_tipo_doc`),
  KEY `users_id_ciudad_foreign` (`id_ciudad`),
  KEY `users_id_tipo_empleado_foreign` (`id_tipo_empleado`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `tipo_user_id`, `id_tipo_doc`, `id_ciudad`, `dni`, `nombre`, `apellido`, `fecha_nac`, `razon_social`, `domicilio`, `cod_postal`, `telefono`, `id_tipo_empleado`, `cuil`) VALUES
(1, 'jorge89', 'jorge_carranza89@gmail.com', '$2y$10$zl.hL9ooDIhDlxm2Y3gpM.JX0g04tXhu4cKQx3I0CP..MbNYVKM3C', 'D9BZbySaKjVctypNL3s1roswNosOrkYsUMBGDGq6Mgd3bvKTn793AsJf2bNK', '2018-05-20 04:18:38', '2018-05-20 04:18:38', 1, 1, 1, 33236587, 'Jorge', 'Carranza', '1989-03-19', '', '', 0, '3516996321', NULL, NULL),
(2, 'marce', 'marcelo@tinelli.com', '$2y$10$n/dDC50fxyiSjuoNUcXQM.UcnVIvHKx9Goz6HgUp0JtOlRmWfxdCm', 'fPAPVVrKLToWaQ1NhknIgILvaornTyZuPus6zOLXWNJOSgoS2N9bVaTTjOAX', '2018-05-20 04:21:24', '2018-06-06 03:54:34', 1, 1, 12, 35333210, 'Marcelo', 'Tinelli', '1983-08-20', 'Ideas del sur SA', 'Av. don bosco 1563', 5003, '3518235425', NULL, NULL),
(3, 'lucas58', 'lucas.venencia@hotmail.com', '$2y$10$oIqztiwaYdX4eHBdfU6GA.ZjUiYa/Dt2FlBPrvVhZP684/7laEsSO', NULL, '2018-05-20 05:29:07', '2018-05-20 05:29:07', 1, 1, 1, 33254877, 'Lucas', 'Venencia', '1990-09-21', '', '', 0, '351699845', NULL, NULL),
(4, 'caro23', 'caro.benitez@gmail.com', '$2y$10$FvLZMaVHfPtFxlyMdNiaY.3EhzqYgha2BNwqYbSwJiocgXENG9T7a', NULL, '2018-05-20 05:33:52', '2018-05-20 05:33:52', 1, 1, 1, 36303214, 'Carolina', 'Benitez', '1988-02-15', '', '', 0, '3515784569', NULL, NULL),
(8, 'juampi_88', 'juancho1@gmail.com', '$2y$10$.21042BLp6H.O1yHCAW7O.375wvUR/Uj3HXtuHhUwh3PYQLLZ/QpS', NULL, '2018-05-23 04:00:35', '2018-05-23 04:00:35', 1, 1, 1, 36234993, 'Juan Pablo', 'Paillet', '2018-05-31', '', 'Caseros 1180', 5000, '3543640112', NULL, NULL),
(7, 'hector86', 'hectorcaceres@gmail.com', '$2y$10$xTbuyCkqDxUAXdabFUecL.BWPsnMm9p8pRqWVbYoHlJJskhb1jmG6', NULL, '2018-05-23 04:00:11', '2018-05-23 04:00:11', 1, 1, 1, 36234993, 'Héctor', 'Cáceres', '2018-05-31', '', 'Bv. san juan 600', 5000, '3512566477', NULL, NULL),
(9, 'lucre29', 'lucrecia.m@hotmail.com', '25f9e794323b453885f5181f1b624d0b', 'siMrVhj7f8ymqStdAoWhMhSUkDLs64RgS4LV9W6EGxWoLhBnZkPAQjSjiIm1', '2018-05-23 04:01:07', '2018-05-23 04:01:07', 1, 1, 1, 36234999, 'Lucrecia', 'Martinez', '2018-05-31', '', 'Av. Duarte Quiros 1500', 5000, '3516985254', NULL, NULL),
(10, 'luli', 'lucianota@lucianota.com', '$2y$10$dvCizcP8kg5rKzzUKTNwIeu9AwdHE7y4BaIEHFN/9yzAg7Bf4mzIu', 'GrBRoyWRuLb4dgpfJ5C5rDl1OjuAtaI4PyZkZkKdWMqKB46cxgL3DlfiFE6z', '2018-06-02 02:12:39', '2018-06-02 02:12:39', 2, 1, 1, 14569874, 'Luciana', 'Fernandez', '1990-05-28', '', 'Av.Juan B Justo 600', 5000, '3513655410', NULL, NULL),
(12, 'carlosfca', 'carlosgomez@curvasud.com', '$2y$10$1miGxsLiXYUzKbDiQCgDfuaUwQXw/PVUwmvT74hkJVi4h8zG6VPai', 'xGuMRNwLnhGnVrW2Qm9IWVZoFJuMGV8eCFfJJHlIvmOQfeSKlBvuQjp06zJS', '2018-06-04 08:29:25', '2018-06-04 08:29:25', 3, 1, 1, 33333333, 'Carlos', 'Gómez', '1983-06-14', NULL, 'Bolivar 555', 5000, '3512654788', NULL, NULL),
(13, 'UsuarioPrueba', 'asdasd@asdasddas.com', '$2y$10$d.c/5IZ5Ui0cyVcCUNmiBO3rMyML9DB5bcUAAEJzDbCVvtUtIeAf6', 'OGC73nblHxEEdal16TWGJ6gg3rKfcuSXrixDQ3zJLJilUo7rd7xYodbvrPuH', '2018-06-06 06:20:04', '2018-06-06 06:20:04', 1, 1, 1, 1726372, 'Matias Agustin', 'Fernandez', '2018-06-09', 'PailletJP', 'Salta', 5000, '3543640117', NULL, NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`id_vehiculo`, `id_tipo_vehiculo`, `marca`, `modelo`, `anio`, `patente`, `nro_chasis`, `fecha_inicio_garantia`, `id_cliente`, `cancelado`) VALUES
(1, 2, 'Fiat', 'Toro Freedom', 2015, 'AB123CD', 'KB12345', '2017-11-14', 10, 0),
(2, 1, 'Fiat', 'Tipo', 2014, '1231231', '1231231', NULL, 10, 0),
(4, 2, 'Fiat', 'Toro Freedom', 2017, 'AB123FO', 'KB12348', '2016-12-15', 9, 0),
(5, 2, 'Fiat', 'Toro volcano', 2017, 'AB333FD', 'KB12223', NULL, 8, 0),
(7, 2, 'Fiat', 'Toro volcano', 2017, 'AB333FE', 'KB12221', NULL, 8, 0),
(10, 2, 'Fiat', 'Strada', 2017, 'AB333FB', 'KB12226', '2017-05-12', 2, 1),
(13, 2, 'Fiat', 'Toro volcano', 2017, 'AB333OI', 'KB122OI', NULL, 1, 0),
(15, 3, 'Fiat', 'Ducato', 2017, 'AB33123', 'KB12123', '2016-03-02', 2, 0),
(16, 2, 'Fiat', 'Toro volcano', 2017, 'AB33647', 'KB12647', NULL, 2, 0),
(17, 2, 'Fiat', 'Toro volcano', 2017, 'AB33609', 'KB12609', NULL, 2, 0),
(18, 3, 'Fiat', 'Dobló Cargo', 2018, '789456a', '78945av', '2018-05-24', 3, 0),
(19, 1, 'Fiat', 'Grand Siena', 2017, 'AC122GH', 'KB55555', '2016-06-20', 3, 0),
(20, 1, 'Fiat', 'Mobi Easy', 2017, 'AB456RE', 'KB12875', '2017-02-04', 4, 0),
(21, 1, 'Fiat', 'Argo Drive', 2017, 'AB489HG', 'KB78945', '2017-03-06', 3, 0),
(22, 1, 'Fiat', 'Mobi Way', 2017, 'AB123UY', 'KB1234E', '2017-02-20', 7, 0),
(23, 3, 'Fiat', 'Fiorino', 2014, 'AS123GF', 'OI45687', '2014-03-20', 8, 0),
(24, 1, 'Fiat', 'Cronos Drive', 2018, '12cd23w', 'kb11111', '2018-03-20', 9, 0),
(25, 1, 'Fiat', 'Argo Drive', 2018, 'A123212', 'KB12278', '2018-05-26', 9, 0),
(26, 1, 'Fiat', 'Cronos Drive', 2018, 'LO587OI', 'KB34567', '2018-06-01', 2, 0),
(27, 1, 'Fiat', 'Strada', 2014, 'AF123FD', 'CD12385', '2017-06-07', 12, 0),
(28, 1, 'Fiat', 'Cronos drive', 5852, 'AB123AE', 'KB34568', '2018-06-09', 13, 0),
(32, 1, 'Fiat', 'Cronos drive', 5852, 'AB123A5', 'KB34563', '2018-06-09', 13, 1),
(34, 1, 'Fiat', 'Cronos drive', 5858, 'AB828UY', 'AW45872', '2018-06-29', 13, 0),
(35, 1, 'Fiat', 'Cronos drive', 5858, 'AW784AO', '789456Y', '2018-06-29', 13, 0);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `FK_clientes_ciudades` FOREIGN KEY (`id_ciudad`) REFERENCES `ciudades` (`id_ciudad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_clientes_tipos_documentos` FOREIGN KEY (`id_tipo_doc`) REFERENCES `tipos_documentos` (`id_tipo_doc`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_clientes_vehiculos` FOREIGN KEY (`id_vehiculo`) REFERENCES `vehiculos` (`id_vehiculo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `detalles_ordenes_reparacion`
--
ALTER TABLE `detalles_ordenes_reparacion`
  ADD CONSTRAINT `FK_detalles_ordenes_reparacion_ordenes_reparacion` FOREIGN KEY (`id_orden_reparacion`) REFERENCES `ordenes_reparacion` (`id_orden_reparacion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `FK_empleados_tipos_documentos` FOREIGN KEY (`id_tipo_doc`) REFERENCES `tipos_documentos` (`id_tipo_doc`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_empleados_tipos_empleados` FOREIGN KEY (`id_tipo_empleado`) REFERENCES `tipos_empleados` (`id_tipo_empleado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ordenes_reparacion`
--
ALTER TABLE `ordenes_reparacion`
  ADD CONSTRAINT `FK_ordenes_reparacion_clientes` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_ordenes_reparacion_empleados` FOREIGN KEY (`id_empleado`) REFERENCES `empleados` (`id_empleado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_ordenes_reparacion_estados_ordenes` FOREIGN KEY (`id_estado_orden`) REFERENCES `estados_ordenes` (`id_estado_orden`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `turnos`
--
ALTER TABLE `turnos`
  ADD CONSTRAINT `FK_turnos_clientes` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
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
