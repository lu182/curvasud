-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 12-06-2018 a las 10:14:39
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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

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
(14, 'Carlos Paz');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `id_tipo_doc`, `id_vehiculo`, `id_ciudad`, `usuario`, `pass`, `dni`, `nombre`, `apellido`, `fecha_nac`, `razon_social`, `domicilio`, `cod_postal`, `telefono`, `email`) VALUES
(2, 1, NULL, 1, 'pablof@gmail.com', '1234568u', 17963122, 'Pablo', 'Fernandez', '1964-03-22', NULL, 'av. santa ana 1800', 5004, '3516766657', 'pfernandez348@hotmail.com');

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
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalles_ordenes_reparacion`
--

INSERT INTO `detalles_ordenes_reparacion` (`id_detalle_orden`, `id_orden_reparacion`, `kilometraje`, `motivo_ingreso`, `observaciones`, `extra`, `mecanico`, `operacion_realizada`) VALUES
(1, 6, '20200', 'service 20.000 km', 'Nota manija puerta lado conductor floja', NULL, '3', 'Se realizó service correspondiente'),
(2, 7, '20200', 'service 20.000 km', 'Nota manija puerta lado conductor floja', NULL, '3', 'Se realizó service correspondiente'),
(3, 8, '20200', 'service 20.000 km', 'Nota manija puerta lado conductor floja', NULL, '3', 'Se realizó service correspondiente'),
(4, 9, '20200', 'service 20.000 km', 'Nota manija puerta lado conductor floja', NULL, '3', 'Se realizó service correspondiente'),
(5, 10, '20200', 'service 20.000 km', 'Nota manija puerta lado conductor floja', NULL, '3', 'Se realizó service correspondiente'),
(6, 11, '20200', 'service 20.000 km', 'Nota manija puerta lado conductor floja', NULL, '3', 'Se realizó service correspondiente'),
(7, 12, '20200', 'service 20.000 km', 'Nota manija puerta lado conductor floja', NULL, '3', 'Se realizó service correspondiente'),
(8, 13, '20200', 'service 20.000 km', 'Nota manija puerta lado conductor floja', NULL, '3', 'Se realizó service correspondiente'),
(9, 14, '20200', 'service 20.000 km', 'Nota manija puerta lado conductor floja', NULL, '3', 'Se realizó service correspondiente'),
(10, 15, '20200', 'service 20.000 km', 'Nota manija puerta lado conductor floja', NULL, '3', 'Se realizó service correspondiente'),
(11, 16, '20200', 'service 20.000 km', 'Nota manija puerta lado conductor floja', NULL, '3', 'Se realizó service correspondiente'),
(12, 17, '20200', 'service 20.000 km', 'Nota manija puerta lado conductor floja', NULL, '3', 'Se realizó service correspondiente'),
(13, 18, '20200', 'service 20.000 km', 'Nota manija puerta lado conductor floja', NULL, '3', 'Se realizó service correspondiente'),
(14, 19, '19900', 'service 20.000 km', 'Cliente nota ruido en puerta trasera. Encuentra manija de la puerta lado conductor, floja.', NULL, '3', 'Se realizó service de 20.000 km correspondiente, se controló puerta ok. Se ajustó manija de la puerta'),
(15, 20, '19900', 'service 20.000 km', 'Cliente nota ruido en puerta trasera. Encuentra manija de la puerta lado conductor, floja.', NULL, '3', 'Se realizó service de 20.000 km correspondiente, se controló puerta ok. Se ajustó manija de la puerta'),
(16, 21, '19900', 'service 20.000 km', 'Cliente nota ruido en puerta trasera. Encuentra manija de la puerta lado conductor, floja.', NULL, '3', 'Se realizó service de 20.000 km correspondiente, se controló puerta ok. Se ajustó manija de la puerta'),
(17, 22, '10128', 'gfgdfg', 'dggdfggdfg', NULL, '1', 'dgdfg'),
(18, 23, '10128', 'hghgghhg', 'hfghfghfgh', NULL, '2', 'hfghfgh'),
(19, 24, '19900', 'service 20.000 km', 'Cliente nota ruido en puerta trasera. Encuentra manija de la puerta lado conductor, floja.', NULL, '3', 'Se realizó service de 20.000 km correspondiente, se controló puerta ok. Se ajustó manija de la puerta'),
(20, 25, '10128', 'dgdgfdgfdgdgd', 'dgdfggdfg', NULL, '4', 'dgdgdgdg'),
(21, 26, '10128', 'dgdgfdgfdgdgd', 'dgdfggdfg', 'kkko', '4', 'dgdgdgdg'),
(22, 27, '10128', 'dgdgfdgfdgdgd', 'dgdfggdfg', 'kkko', '4', 'dgdgdgdg'),
(23, 28, '10128', 'dgdgfdgfdgdgd', 'dgdfggdfg', 'kkko', '4', 'dgdgdgdg'),
(24, 29, '10128', 'dgdgfdgfdgdgd', 'dgdfggdfg', 'kkko', '4', 'dgdgdgdg'),
(25, 30, '10128', 'dgdgfdgfdgdgd', 'dgdfggdfg', 'kkko', '4', 'dgdgdgdg'),
(26, 31, '10128', 'dgdgfdgfdgdgd', 'dgdfggdfg', 'kkko', '4', 'dgdgdgdg'),
(27, 32, '10128', 'dgdgfdgfdgdgd', 'dgdfggdfg', 'kkko', '4', 'dgdgdgdg'),
(28, 33, '10128', 'dgdgfdgfdgdgd', 'dgdfggdfg', 'kkko', '4', 'dgdgdgdg'),
(29, 34, '10128', 'dgdgfdgfdgdgd', 'dgdfggdfg', 'kkko', '4', 'dgdgdgdg'),
(30, 35, '10127', 'Service de 10.000 km', 'Cliente siente ruido en puerta trasera del lado izquierdo. Controlar manija  floja de la puerta lado acompañante', '--', '4', 'Se realizó service 10.000 km. Se controló puerta trasera y manija de la puerta ok'),
(31, 36, '20000', 'Service 20.000 km', 'Cliente no le sube vidrio lado conductor correctamente', '--', '4', 'Se realizó service 20.000 km y se controló vidrio de ventana lado conductor ok'),
(32, 37, '10128', 'dgdgfdgfdgdgd', 'dgdfggdfg', 'kkko', '4', 'dgdgdgdg'),
(33, 38, '45456456', 'dfggdgdg', 'dfgfdggdfg', 'dgdfgd', '1', 'dgfdgdf'),
(34, 39, '9800', 'Service 10.000 km', 'Clienta nota desperfecto en dirección', NULL, '5', 'Se realizó service 10.000 km correctamente y se verificó la dirección ok'),
(35, 40, '8000', 'Cambio de aceite', 'Notaba nivel de aceite elevado', NULL, '1', 'Se realizó cambio de aceite a modo de cortesía');

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
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `mecanicos`
--

INSERT INTO `mecanicos` (`id_mecanico`, `nombre`, `apellido`, `email`, `dni`, `id_tipo_doc`, `fecha_nac`, `domicilio`, `cod_postal`, `telefono`, `id_ciudad`) VALUES
(1, 'Matias ', 'Rodriguez', 'matirodriguez@hotmail.com', 33963544, 1, '1989-06-16', 'Bv. san juan', 5000, '3543640112', 1),
(2, 'Fernando', 'Freytes', 'ffreytes@yahoo.com', 30522113, 1, '1986-06-08', 'Bv. san juan', 5000, '3514789455', 1),
(3, 'Pablo', 'Molina', 'pmolina348@gmail.com', 36234993, 1, '1992-06-22', 'Bv. san juan', 5000, '3518566322', 1),
(4, 'Gustavo', 'Gonzalez', 'gustavog@hotmail.com', 35221455, 1, '1991-06-22', 'Bv. san juan', 5000, '3512666411', 13),
(5, 'Mariano', 'Martinez', 'mmartinez@gmail.com', 32544112, 1, '1988-08-21', '27 de abril 400', 5000, '3516874621', 1);

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
  `id_empleado` int(11) DEFAULT NULL,
  `id_estado_orden` int(11) NOT NULL,
  `fecha_ingreso_vehiculo` date NOT NULL,
  `fecha_egreso_vehiculo` date DEFAULT NULL,
  `id_mecanico` int(11) DEFAULT NULL,
  `id_vehiculo` int(50) DEFAULT NULL,
  `id_cliente` int(50) DEFAULT NULL,
  PRIMARY KEY (`id_orden_reparacion`),
  KEY `FK_ordenes_reparacion_empleados_idx` (`id_empleado`),
  KEY `FK_ordenes_reparacion_estados_ordenes_idx` (`id_estado_orden`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ordenes_reparacion`
--

INSERT INTO `ordenes_reparacion` (`id_orden_reparacion`, `id_empleado`, `id_estado_orden`, `fecha_ingreso_vehiculo`, `fecha_egreso_vehiculo`, `id_mecanico`, `id_vehiculo`, `id_cliente`) VALUES
(5, NULL, 2, '2018-06-08', '2018-06-08', 3, NULL, 0),
(6, NULL, 2, '2018-06-08', '2018-06-08', 3, NULL, 0),
(7, NULL, 2, '2018-06-08', '2018-06-08', 3, NULL, 0),
(8, NULL, 2, '2018-06-08', '2018-06-08', 3, NULL, 0),
(9, NULL, 2, '2018-06-08', '2018-06-08', 3, NULL, 0),
(10, NULL, 2, '2018-06-08', '2018-06-08', 3, NULL, 0),
(11, NULL, 2, '2018-06-08', '2018-06-08', 3, NULL, 0),
(12, NULL, 2, '2018-06-08', '2018-06-08', 3, NULL, 0),
(13, NULL, 2, '2018-06-08', '2018-06-08', 3, NULL, 0),
(14, NULL, 2, '2018-06-08', '2018-06-08', 3, NULL, 0),
(15, NULL, 2, '2018-06-08', '2018-06-08', 3, NULL, 0),
(16, NULL, 2, '2018-06-08', '2018-06-08', 3, NULL, 0),
(17, NULL, 2, '2018-06-08', '2018-06-08', 3, NULL, 0),
(18, NULL, 2, '2018-06-08', '2018-06-08', 3, NULL, 0),
(19, NULL, 2, '2018-06-11', '2018-06-12', 3, NULL, 0),
(20, NULL, 2, '2018-06-11', '2018-06-12', 3, NULL, 0),
(21, NULL, 2, '2018-06-11', '2018-06-12', 3, NULL, 0),
(22, NULL, 2, '2018-06-11', '2018-06-13', 1, NULL, 0),
(23, NULL, 2, '2018-06-11', '2018-06-14', 2, NULL, 0),
(24, NULL, 2, '2018-06-11', '2018-06-12', 3, NULL, 0),
(25, NULL, 2, '2018-06-12', '2018-06-12', 4, NULL, 0),
(26, NULL, 2, '2018-06-12', '2018-06-12', 4, 5, 0),
(27, NULL, 2, '2018-06-12', '2018-06-12', 4, 18, 0),
(28, NULL, 2, '2018-06-12', '2018-06-12', 4, 16, 0),
(29, NULL, 2, '2018-06-12', '2018-06-12', 4, 37, 0),
(30, NULL, 2, '2018-06-11', '2018-06-11', 4, 20, 4),
(31, NULL, 2, '2018-06-12', '2018-06-12', 4, 36, 14),
(32, NULL, 2, '2018-06-12', '2018-06-12', 4, 18, 3),
(33, NULL, 2, '2018-06-12', '2018-06-12', 4, 5, 8),
(34, NULL, 2, '2018-06-12', '2018-06-12', 4, 18, 3),
(35, NULL, 2, '2018-01-12', '2018-01-13', 4, 20, 13),
(36, NULL, 2, '2018-04-15', '2018-04-16', 3, 28, 13),
(37, NULL, 2, '2018-06-12', '2018-06-12', 4, 5, 8),
(38, NULL, 2, '2018-06-12', '2018-06-15', 1, 21, 3),
(39, NULL, 2, '2018-06-12', '2018-06-14', 5, 38, 20),
(40, NULL, 2, '2018-01-20', '2018-01-21', 1, 39, 20);

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
  `id_cliente` int(11) DEFAULT NULL,
  `id_estado_turno` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `id_vehiculo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_turno`),
  KEY `fk_turno_tipos_servicios_idx` (`id_tipo_servicio`),
  KEY `FK_turnos_estados_turnos_idx` (`id_estado_turno`),
  KEY `FK_turnos_clientes_idx` (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `turnos`
--

INSERT INTO `turnos` (`id_turno`, `id_tipo_servicio`, `id_cliente`, `id_estado_turno`, `fecha`, `hora`, `id_vehiculo`) VALUES
(20, 2, 2, 3, '2018-06-07', '11:00:00', 10),
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
(37, 1, 20, 2, '2018-07-10', '09:00:00', 39);

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
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `tipo_user_id`, `id_tipo_doc`, `id_ciudad`, `dni`, `nombre`, `apellido`, `fecha_nac`, `razon_social`, `domicilio`, `cod_postal`, `telefono`, `id_tipo_empleado`, `cuil`) VALUES
(1, 'jorge89', 'jorge_carranza89@gmail.com', '$2y$10$zl.hL9ooDIhDlxm2Y3gpM.JX0g04tXhu4cKQx3I0CP..MbNYVKM3C', 'D9BZbySaKjVctypNL3s1roswNosOrkYsUMBGDGq6Mgd3bvKTn793AsJf2bNK', '2018-05-20 04:18:38', '2018-05-20 04:18:38', 1, 1, 1, 33236587, 'Jorge', 'Carranza', '1989-03-19', '', '', 5000, '3516996321', NULL, NULL),
(2, 'marce', 'marcelo@tinelli.com', '$2y$10$n/dDC50fxyiSjuoNUcXQM.UcnVIvHKx9Goz6HgUp0JtOlRmWfxdCm', 'iQWe7ab550fJqpBw5PSarfEysFOxBG0UCjfKxYyaEsFDWLN5gdHuygdnZjE2', '2018-05-20 04:21:24', '2018-06-08 02:30:21', 1, 1, 1, 35333210, 'Marcelo', 'Tinelli', '1983-08-20', 'Ideas del sur SA', 'Av. Colón 500', 5003, '3518235425', NULL, NULL),
(3, 'lucas58', 'lucas.venencia@hotmail.com', '$2y$10$oIqztiwaYdX4eHBdfU6GA.ZjUiYa/Dt2FlBPrvVhZP684/7laEsSO', NULL, '2018-05-20 05:29:07', '2018-05-20 05:29:07', 1, 1, 1, 33254877, 'Lucas', 'Venencia', '1990-09-21', '', '', 5004, '351699845', NULL, NULL),
(4, 'caro23', 'caro.benitez@gmail.com', '$2y$10$FvLZMaVHfPtFxlyMdNiaY.3EhzqYgha2BNwqYbSwJiocgXENG9T7a', NULL, '2018-05-20 05:33:52', '2018-05-20 05:33:52', 1, 1, 1, 36303214, 'Carolina', 'Benitez', '1988-02-15', '', '', 5000, '3515784569', NULL, NULL),
(8, 'juampi_88', 'juancho1@gmail.com', '$2y$10$.21042BLp6H.O1yHCAW7O.375wvUR/Uj3HXtuHhUwh3PYQLLZ/QpS', NULL, '2018-05-23 04:00:35', '2018-05-23 04:00:35', 1, 1, 1, 36234993, 'Pablo', 'Paillet', '2018-05-31', '', 'Caseros 1180', 5000, '3543640112', NULL, NULL),
(7, 'hector86', 'hectorcaceres@gmail.com', '$2y$10$xTbuyCkqDxUAXdabFUecL.BWPsnMm9p8pRqWVbYoHlJJskhb1jmG6', NULL, '2018-05-23 04:00:11', '2018-05-23 04:00:11', 1, 1, 1, 36234993, 'Héctor', 'Cáceres', '2018-05-31', '', 'Bv. san juan 600', 5000, '3512566477', NULL, NULL),
(9, 'lucre29', 'lucrecia.m@hotmail.com', '25f9e794323b453885f5181f1b624d0b', 'siMrVhj7f8ymqStdAoWhMhSUkDLs64RgS4LV9W6EGxWoLhBnZkPAQjSjiIm1', '2018-05-23 04:01:07', '2018-05-23 04:01:07', 1, 1, 1, 36234999, 'Lucrecia', 'Martinez', '2018-05-31', '', 'Av. Duarte Quiros 1500', 5000, '3516985254', NULL, NULL),
(10, 'luFCA', 'lueac@curvasud.com', '$2y$10$dvCizcP8kg5rKzzUKTNwIeu9AwdHE7y4BaIEHFN/9yzAg7Bf4mzIu', 'iA9HnJYEsn4EE3zANMTssGvTI0TLyPsqSGHtcZAAyjwgMchIp3SYN1IIDRmg', '2018-06-02 02:12:39', '2018-06-12 12:26:20', 2, 1, 1, 14569874, 'Luciana', 'Fernandez', '1990-05-28', NULL, 'Av.Juan B Justo 601', 5000, '3513655411', NULL, NULL),
(12, 'carlosfca', 'carlosgomez@curvasud.com', '$2y$10$1miGxsLiXYUzKbDiQCgDfuaUwQXw/PVUwmvT74hkJVi4h8zG6VPai', 'NyEszzIBYMbiEFm2K3i9b8xx49Qqpy9GfB9xKGqFJpwGKFUb9oig4cwBJyrl', '2018-06-04 08:29:25', '2018-06-12 12:54:42', 3, 1, 1, 33333333, 'Carlos', 'Gómez', '1983-06-14', NULL, 'Bolivar 556', 5002, '3512654787', NULL, NULL),
(13, 'mat22', 'mat22@gmail.com', '$2y$10$d.c/5IZ5Ui0cyVcCUNmiBO3rMyML9DB5bcUAAEJzDbCVvtUtIeAf6', 'OGC73nblHxEEdal16TWGJ6gg3rKfcuSXrixDQ3zJLJilUo7rd7xYodbvrPuH', '2018-06-06 06:20:04', '2018-06-06 06:20:04', 1, 1, 1, 1726372, 'Matias ', 'Fernandez', '2018-06-09', '', 'Salta', 5000, '3543640117', NULL, NULL),
(14, 'JuPrueba', 'juprueba@gmail.com', '$2y$10$0RQv/ZFHLjyFKaFp/VuWTOlRRrig8UHAnGFGrKwCLjx.VnqF/3Lsm', 'Dzcd9VM3VoxxyyJIaBgSllFTf6hZW0030no6LXUKGsvy8ghaWLMl1XkVPT3E', '2018-06-07 03:25:28', '2018-06-07 03:25:28', 1, 1, 1, 35963113, 'Julieta', 'Dominguez', '2018-05-28', NULL, 'Bv. san juan 700', 5000, '3518179694', NULL, NULL),
(15, 'Jorgelino2', 'jor25@hotmail.com', '$2y$10$Pf.TKbZSuPuBNwdBHz4hNOy7EiBuIqjlKqRWBDFJsJOhagq6Be6dW', NULL, '2018-06-08 06:02:14', '2018-06-08 06:02:15', 1, 1, 14, 3658947, 'Juan', 'Quiroga', '2018-06-15', 'asdsad', 'asasd', 5000, '358978444', NULL, NULL),
(16, 'LuProbando', 'luprobando@gmail.com', '$2y$10$eJq1vlHbygrlEkdlLGtvAegn6dtM.3WNXE8/4IOO/WClZI10n3olS', 'scesCzNbw3vRFI9Y8hmZsEPWhigAPNjLptrWpNf3QNslRpdzeG8aVGSLs1uY', '2018-06-11 09:00:44', '2018-06-11 09:00:44', 1, 1, 1, 35966333, 'Ludmila', 'Spinetta', '1991-06-21', NULL, 'Dean funes 1322', 5000, '3516988755', NULL, NULL),
(18, 'julioPrueba', 'julio@gmail.com', '$2y$10$JpJ7Y6d53SkIBs1p1KqSIehmfIje8/BFjlPq2xMrMAHzjeG7c/xq.', 'Ddi12MGiRof6ZEcKqACsdPO8PBRQBZN3bNkH2bsBfVRU6I5Mw5o0SzbyqjdM', '2018-06-11 09:10:59', '2018-06-11 09:11:48', 1, 1, 2, 30233511, 'Julio', 'Cortazar', '1960-06-21', NULL, 'Av maipu 500', 5003, '3512455115', NULL, NULL),
(19, 'Pichu86', 'patricio_cba@gmail.com', '$2y$10$EZHlD0X.yj4msYSJtcP99uzY9oVKMdvgWStm8pEzuxkvQcRlIMvg6', 'MU7AScQiHutmdEtCZPPEPety4DjZgKVkQ6Bkcbm0uVJDpqqHKuAc9RcOzuLO', '2018-06-12 06:00:45', '2018-06-12 06:00:45', 1, 1, 1, 33655496, 'Patricio', 'Pérez', '2018-06-14', NULL, 'Bv. chacabuco 566', 5000, '3516885544', NULL, NULL),
(20, 'Jaz88', 'jazmin182@hotmail.com', '$2y$10$W0IAqxQI6umQ1cwRQSvGteKdRBkJjDwbcKrWXQM/ul5XCjgvQmxde', 'UuuBAcBlqi0OqWdL0LUZiRHzhrAVOU1IojHF0W55MQeiyR26y2sZiBeihWjQ', '2018-06-12 11:53:06', '2018-06-12 12:06:48', 1, 1, 1, 36355422, 'Jazmin', 'Suárez', '1988-06-22', NULL, 'Caseros 601', 5003, '3512002183', NULL, NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`id_vehiculo`, `id_tipo_vehiculo`, `marca`, `modelo`, `anio`, `patente`, `nro_chasis`, `fecha_inicio_garantia`, `id_cliente`, `cancelado`) VALUES
(1, 2, 'Fiat', 'Toro Freedom', 2015, 'AB123CD', 'KB12345', '2015-11-14', 10, 0),
(2, 1, 'Fiat', 'Tipo', 2014, '1231231', '1231231', '2014-03-12', 10, 0),
(4, 2, 'Fiat', 'Toro Freedom', 2017, 'AB123FO', 'KB12348', '2017-12-15', 9, 0),
(5, 2, 'Fiat', 'Toro volcano', 2017, 'AB333FD', 'KB12223', '2017-11-16', 8, 0),
(7, 2, 'Fiat', 'Toro volcano', 2017, 'AB333FE', 'KB12221', '2017-09-24', 8, 0),
(10, 2, 'Fiat', 'Strada', 2017, 'AB333FB', 'KB12226', '2017-05-12', 2, 1),
(13, 2, 'Fiat', 'Toro volcano', 2017, 'AB333OI', 'KB122OI', '2017-08-18', 1, 0),
(15, 3, 'Fiat', 'Ducato', 2017, 'AB33123', 'KB12123', '2017-03-02', 2, 1),
(16, 2, 'Fiat', 'Toro volcano', 2017, 'AB33647', 'KB12647', '2017-05-11', 2, 0),
(17, 2, 'Fiat', 'Toro volcano', 2017, 'AB33609', 'KB12609', '2017-07-26', 2, 0),
(18, 3, 'Fiat', 'Dobló Cargo', 2018, '789456a', '78945av', '2018-05-24', 3, 0),
(19, 1, 'Fiat', 'Grand Siena', 2017, 'AC122GH', 'KB55555', '2017-06-20', 3, 0),
(20, 1, 'Fiat', 'Mobi Easy', 2017, 'AB456RE', 'KB12875', '2017-02-04', 4, 0),
(21, 1, 'Fiat', 'Argo Drive', 2017, 'AB489HG', 'KB78945', '2017-03-06', 3, 0),
(22, 1, 'Fiat', 'Mobi Way', 2017, 'AB123UY', 'KB1234E', '2017-02-20', 7, 0),
(23, 3, 'Fiat', 'Fiorino', 2014, 'AS123GF', 'OI45687', '2014-03-20', 8, 0),
(24, 1, 'Fiat', 'Cronos Drive', 2018, '12cd23w', 'kb11111', '2018-03-20', 9, 0),
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
(39, 3, 'Fiat', 'Fiorino', 2015, 'AS333PO', 'KU55698', '2015-06-18', 20, 0);

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
  ADD CONSTRAINT `FK_ordenes_reparacion_empleados` FOREIGN KEY (`id_empleado`) REFERENCES `empleados` (`id_empleado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
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
