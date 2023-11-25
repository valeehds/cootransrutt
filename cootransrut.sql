-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.30 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Volcando estructura para tabla cootransrut.despachos
CREATE TABLE IF NOT EXISTS `despachos` (
  `idDespacho` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `direccion` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idDespacho`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla cootransrut.despachos: ~61 rows (aproximadamente)
INSERT INTO `despachos` (`idDespacho`, `nombre`, `direccion`, `created_at`, `updated_at`) VALUES
	(10, 'xd', 'xd', '2023-09-03 19:36:57', '2023-09-03 19:36:58'),
	(11, 'Despacho 1', 'Dirección 1', NULL, NULL),
	(12, 'Despacho 2', 'Dirección 2', NULL, NULL),
	(13, 'Despacho 3', 'Dirección 3', NULL, NULL),
	(14, 'Despacho 4', 'Dirección 4', NULL, NULL),
	(15, 'Despacho 5', 'Dirección 5', NULL, NULL),
	(16, 'Despacho 6', 'Dirección 6', NULL, NULL),
	(17, 'Despacho 7', 'Dirección 7', NULL, NULL),
	(18, 'Despacho 8', 'Dirección 8', NULL, NULL),
	(19, 'Despacho 9', 'Dirección 9', NULL, NULL),
	(20, 'Despacho 10', 'Dirección 10', NULL, NULL),
	(21, 'Despacho 11', 'Dirección 11', NULL, NULL),
	(22, 'Despacho 12', 'Dirección 12', NULL, NULL),
	(23, 'Despacho 13', 'Dirección 13', NULL, NULL),
	(24, 'Despacho 14', 'Dirección 14', NULL, NULL),
	(25, 'Despacho 15', 'Dirección 15', NULL, NULL),
	(26, 'Despacho 1', 'Dirección 1', NULL, NULL),
	(27, 'Despacho 2', 'Dirección 2', NULL, NULL),
	(28, 'Despacho 3', 'Dirección 3', NULL, NULL),
	(29, 'Despacho 4', 'Dirección 4', NULL, NULL),
	(30, 'Despacho 5', 'Dirección 5', NULL, NULL),
	(31, 'Despacho 6', 'Dirección 6', NULL, NULL),
	(32, 'Despacho 7', 'Dirección 7', NULL, NULL),
	(33, 'Despacho 8', 'Dirección 8', NULL, NULL),
	(34, 'Despacho 9', 'Dirección 9', NULL, NULL),
	(35, 'Despacho 10', 'Dirección 10', NULL, NULL),
	(36, 'Despacho 11', 'Dirección 11', NULL, NULL),
	(37, 'Despacho 12', 'Dirección 12', NULL, NULL),
	(38, 'Despacho 13', 'Dirección 13', NULL, NULL),
	(39, 'Despacho 14', 'Dirección 14', NULL, NULL),
	(40, 'Despacho 15', 'Dirección 15', NULL, NULL),
	(41, 'Despacho 1', 'Dirección 1', NULL, NULL),
	(42, 'Despacho 2', 'Dirección 2', NULL, NULL),
	(43, 'Despacho 3', 'Dirección 3', NULL, NULL),
	(44, 'Despacho 4', 'Dirección 4', NULL, NULL),
	(45, 'Despacho 5', 'Dirección 5', NULL, NULL),
	(46, 'Despacho 6', 'Dirección 6', NULL, NULL),
	(47, 'Despacho 7', 'Dirección 7', NULL, NULL),
	(48, 'Despacho 8', 'Dirección 8', NULL, NULL),
	(49, 'Despacho 9', 'Dirección 9', NULL, NULL),
	(50, 'Despacho 10', 'Dirección 10', NULL, NULL),
	(51, 'Despacho 11', 'Dirección 11', NULL, NULL),
	(52, 'Despacho 12', 'Dirección 12', NULL, NULL),
	(53, 'Despacho 13', 'Dirección 13', NULL, NULL),
	(54, 'Despacho 14', 'Dirección 14', NULL, NULL),
	(55, 'Despacho 15', 'Dirección 15', NULL, NULL),
	(56, 'Despacho 1', 'Dirección 1', NULL, NULL),
	(57, 'Despacho 2', 'Dirección 2', NULL, NULL),
	(58, 'Despacho 3', 'Dirección 3', NULL, NULL),
	(59, 'Despacho 4', 'Dirección 4', NULL, NULL),
	(60, 'Despacho 5', 'Dirección 5', NULL, NULL),
	(61, 'Despacho 6', 'Dirección 6', NULL, NULL),
	(62, 'Despacho 7', 'Dirección 7', NULL, NULL),
	(63, 'Despacho 8', 'Dirección 8', NULL, NULL),
	(64, 'Despacho 9', 'Dirección 9', NULL, NULL),
	(65, 'Despacho 10', 'Dirección 10', NULL, NULL),
	(66, 'Despacho 11', 'Dirección 11', NULL, NULL),
	(67, 'Despacho 12', 'Dirección 12', NULL, NULL),
	(68, 'Despacho 13', 'Dirección 13', NULL, NULL),
	(69, 'Despacho 14', 'Dirección 14', NULL, NULL),
	(70, 'Despacho 15', 'Dirección 15', NULL, NULL);

-- Volcando estructura para tabla cootransrut.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla cootransrut.failed_jobs: ~0 rows (aproximadamente)

-- Volcando estructura para tabla cootransrut.mantenimientos
CREATE TABLE IF NOT EXISTS `mantenimientos` (
  `idMantenimiento` int NOT NULL AUTO_INCREMENT,
  `idVehiculo` int NOT NULL,
  `fechaMantenimiento` date NOT NULL,
  `observaciones` varchar(100) DEFAULT NULL,
  `valorManoobra` decimal(12,2) NOT NULL,
  `valorPiezas` decimal(12,2) NOT NULL,
  `valorTotal` decimal(12,2) NOT NULL,
  `fotoFactura` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idMantenimiento`),
  KEY `fk_mantenimiento_vehiculo` (`idVehiculo`),
  CONSTRAINT `fk_mantenimiento_vehiculo` FOREIGN KEY (`idVehiculo`) REFERENCES `vehiculos` (`idVehiculo`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla cootransrut.mantenimientos: ~18 rows (aproximadamente)
INSERT INTO `mantenimientos` (`idMantenimiento`, `idVehiculo`, `fechaMantenimiento`, `observaciones`, `valorManoobra`, `valorPiezas`, `valorTotal`, `fotoFactura`, `created_at`, `updated_at`) VALUES
	(40, 11, '2023-09-03', 'XVCDF', 123232.00, 200000.00, 300000.00, 'jpg.jpg', '2023-09-03 18:42:37', '2023-09-03 18:42:38'),
	(41, 11, '2023-05-11', 'sdfgfghjkgfd', 123456.00, 123456.00, 234567.00, 'cootranscol.webp', '2023-09-04 00:45:47', '2023-09-04 00:45:47'),
	(42, 11, '2023-09-05', 'sdfgfghjkgfd', 123456.00, 123456.00, 1.00, 'cootranscol.webp', '2023-09-04 01:36:09', '2023-09-04 04:27:03'),
	(88, 11, '2023-09-01', 'Mantenimiento 1', 50.00, 100.00, 150.00, 'factura1.jpg', NULL, NULL),
	(89, 12, '2023-09-02', 'Mantenimiento 2', 60.00, 120.00, 180.00, 'factura2.jpg', NULL, NULL),
	(90, 13, '2023-09-03', 'Mantenimiento 3', 70.00, 140.00, 210.00, 'factura3.jpg', NULL, NULL),
	(91, 14, '2023-09-04', 'Mantenimiento 4', 80.00, 160.00, 240.00, 'factura4.jpg', NULL, NULL),
	(92, 15, '2023-09-05', 'Mantenimiento 5', 90.00, 180.00, 270.00, 'factura5.jpg', NULL, NULL),
	(93, 16, '2023-09-06', 'Mantenimiento 6', 100.00, 200.00, 300.00, 'factura6.jpg', NULL, NULL),
	(94, 17, '2023-09-07', 'Mantenimiento 7', 110.00, 220.00, 330.00, 'factura7.jpg', NULL, NULL),
	(95, 18, '2023-09-08', 'Mantenimiento 8', 120.00, 240.00, 360.00, 'factura8.jpg', NULL, NULL),
	(96, 19, '2023-09-09', 'Mantenimiento 9', 130.00, 260.00, 390.00, 'factura9.jpg', NULL, NULL),
	(97, 20, '2023-09-10', 'Mantenimiento 10', 140.00, 280.00, 420.00, 'factura10.jpg', NULL, NULL),
	(98, 21, '2023-09-11', 'Mantenimiento 11', 150.00, 300.00, 450.00, 'factura11.jpg', NULL, NULL),
	(99, 22, '2023-09-12', 'Mantenimiento 12', 160.00, 320.00, 480.00, 'factura12.jpg', NULL, NULL),
	(100, 23, '2023-09-13', 'Mantenimiento 13', 170.00, 340.00, 510.00, 'factura13.jpg', NULL, NULL),
	(101, 24, '2023-09-14', 'Mantenimiento 14', 180.00, 360.00, 540.00, 'factura14.jpg', NULL, NULL),
	(102, 25, '2023-09-15', 'Mantenimiento 15', 190.00, 380.00, 570.00, 'factura15.jpg', NULL, NULL);

-- Volcando estructura para tabla cootransrut.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla cootransrut.migrations: ~0 rows (aproximadamente)

-- Volcando estructura para tabla cootransrut.nominas
CREATE TABLE IF NOT EXISTS `nominas` (
  `idNomina` int NOT NULL AUTO_INCREMENT,
  `idUsuario` bigint unsigned NOT NULL,
  `horasTrabajadas` int NOT NULL,
  `horasExtras` int NOT NULL DEFAULT '0',
  `fechaInicio` date NOT NULL,
  `fechaFin` date NOT NULL,
  `valorHorastrabajadas` decimal(12,2) NOT NULL,
  `valorHorasextras` decimal(12,2) NOT NULL,
  `totalPago` decimal(12,2) NOT NULL,
  `porcenta` decimal(20,6) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idNomina`),
  KEY `fk_nomina_usuario` (`idUsuario`),
  CONSTRAINT `fk_nomina_usuario` FOREIGN KEY (`idUsuario`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla cootransrut.nominas: ~2 rows (aproximadamente)
INSERT INTO `nominas` (`idNomina`, `idUsuario`, `horasTrabajadas`, `horasExtras`, `fechaInicio`, `fechaFin`, `valorHorastrabajadas`, `valorHorasextras`, `totalPago`, `porcenta`, `created_at`, `updated_at`) VALUES
	(1, 109, 12, 12, '2023-09-03', '2023-09-03', 34.00, 2000.00, 1000000.00, 5.000000, '2023-09-03 19:13:31', '2023-09-04 01:44:25'),
	(2, 110, 12, 56768, '2023-09-15', '2023-09-23', 42.00, 32456.00, 324.00, 3456.000000, '2023-09-04 01:41:06', '2023-09-04 01:41:06'),
	(4, 1, 160, 20, '2023-09-01', '2023-09-15', 10.00, 12.00, 1720.00, 0.100000, NULL, NULL),
	(5, 2, 150, 15, '2023-09-01', '2023-09-15', 12.00, 14.00, 1860.00, 0.120000, NULL, NULL),
	(6, 3, 140, 10, '2023-09-01', '2023-09-15', 14.00, 16.00, 2000.00, 0.140000, NULL, NULL),
	(7, 4, 130, 5, '2023-09-01', '2023-09-15', 16.00, 18.00, 2140.00, 0.160000, NULL, NULL),
	(8, 5, 120, 0, '2023-09-01', '2023-09-15', 18.00, 20.00, 2280.00, 0.180000, NULL, NULL),
	(9, 6, 110, 0, '2023-09-01', '2023-09-15', 20.00, 22.00, 2420.00, 0.200000, NULL, NULL),
	(10, 7, 100, 0, '2023-09-01', '2023-09-15', 22.00, 24.00, 2560.00, 0.220000, NULL, NULL),
	(11, 8, 90, 0, '2023-09-01', '2023-09-15', 24.00, 26.00, 2700.00, 0.240000, NULL, NULL),
	(12, 9, 80, 0, '2023-09-01', '2023-09-15', 26.00, 28.00, 2840.00, 0.260000, NULL, NULL),
	(13, 10, 70, 0, '2023-09-01', '2023-09-15', 28.00, 30.00, 2980.00, 0.280000, NULL, NULL),
	(14, 11, 60, 0, '2023-09-01', '2023-09-15', 30.00, 32.00, 3120.00, 0.300000, NULL, NULL),
	(15, 12, 50, 0, '2023-09-01', '2023-09-15', 32.00, 34.00, 3260.00, 0.320000, NULL, NULL),
	(16, 13, 40, 0, '2023-09-01', '2023-09-15', 34.00, 36.00, 3400.00, 0.340000, NULL, NULL),
	(17, 14, 30, 0, '2023-09-01', '2023-09-15', 36.00, 38.00, 3540.00, 0.360000, NULL, NULL),
	(18, 15, 20, 0, '2023-09-01', '2023-09-15', 38.00, 40.00, 3680.00, 0.380000, NULL, NULL);

-- Volcando estructura para tabla cootransrut.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla cootransrut.password_resets: ~0 rows (aproximadamente)

-- Volcando estructura para tabla cootransrut.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla cootransrut.password_reset_tokens: ~3 rows (aproximadamente)
INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
	('pedro@gmail.com', '$2y$10$y5eylO4eNIcpOKZsRbDqC.zAd2pdlU7o7M2u7SqBTCJTeoQkwxDEu', '2023-09-04 06:44:12'),
	('valeehds@gmail.com', '$2y$10$.U8MD4FQZGdLOxV7uih8veHDXajs3biKWW20bwjSGBlNicAI6koI6', '2023-09-04 06:45:13'),
	('valu@gmail.com', '$2y$10$41qesCPMM8jI8W9Kou6JLOOxb1j.2I2oJTI6lKnQz4GCYAq2f0gTK', '2023-09-04 06:43:35');

-- Volcando estructura para tabla cootransrut.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla cootransrut.personal_access_tokens: ~0 rows (aproximadamente)

-- Volcando estructura para tabla cootransrut.recorridos
CREATE TABLE IF NOT EXISTS `recorridos` (
  `idRecorrido` int NOT NULL AUTO_INCREMENT,
  `idRuta` int NOT NULL,
  `idRotacion` int NOT NULL,
  `numPasajeros` int NOT NULL,
  `fechaHorainicio` datetime NOT NULL,
  `fechaHorafin` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idRecorrido`),
  KEY `fk_recorrido_ruta` (`idRuta`),
  KEY `fk_recorridos_rotaciones` (`idRotacion`),
  CONSTRAINT `fk_recorrido_ruta` FOREIGN KEY (`idRuta`) REFERENCES `rutas` (`idRuta`),
  CONSTRAINT `fk_recorridos_rotaciones` FOREIGN KEY (`idRotacion`) REFERENCES `rotaciones` (`idRotacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla cootransrut.recorridos: ~8 rows (aproximadamente)
INSERT INTO `recorridos` (`idRecorrido`, `idRuta`, `idRotacion`, `numPasajeros`, `fechaHorainicio`, `fechaHorafin`, `created_at`, `updated_at`) VALUES
	(35, 54, 3, 21, '2023-09-03 20:29:46', '2023-09-03 20:29:48', '2023-09-04 02:29:49', '2023-09-04 02:29:50'),
	(36, 59, 4, 20, '2023-09-03 20:29:58', '2023-09-03 20:29:57', '2023-09-04 02:29:55', '2023-09-04 02:29:56'),
	(37, 65, 2, 25, '2023-09-03 20:30:18', '2023-09-03 20:30:19', '2023-09-04 02:30:20', '2023-09-04 02:30:21'),
	(38, 72, 5, 19, '2023-09-03 20:30:39', '2023-09-03 20:30:39', '2023-09-04 02:30:40', '2023-09-04 02:30:41'),
	(39, 48, 14, 21, '2023-09-03 20:30:53', '2023-09-03 20:30:54', '2023-09-04 02:30:55', '2023-09-04 02:30:56'),
	(40, 65, 14, 23, '2023-09-03 20:31:12', '2023-09-03 20:31:13', '2023-09-04 02:31:14', '2023-09-04 02:31:15'),
	(41, 59, 11, 22, '2023-09-03 20:31:27', '2023-09-03 20:31:28', '2023-09-04 02:31:28', '2023-09-04 02:31:29'),
	(42, 71, 8, 20, '2023-09-03 20:31:49', '2023-09-03 20:31:50', '2023-09-04 02:31:50', '2023-09-04 02:31:51');

-- Volcando estructura para tabla cootransrut.rotaciones
CREATE TABLE IF NOT EXISTS `rotaciones` (
  `idRotacion` int NOT NULL AUTO_INCREMENT,
  `idVehiculo` int NOT NULL,
  `idUsuario` bigint unsigned NOT NULL,
  `fechaAsignacion` date NOT NULL,
  `fechaFinasignacion` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idRotacion`),
  KEY `fk_rotacion_vehiculo` (`idVehiculo`),
  KEY `fk_rotacion_usuario` (`idUsuario`),
  CONSTRAINT `fk_rotacion_usuario` FOREIGN KEY (`idUsuario`) REFERENCES `users` (`id`),
  CONSTRAINT `fk_rotacion_vehiculo` FOREIGN KEY (`idVehiculo`) REFERENCES `vehiculos` (`idVehiculo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla cootransrut.rotaciones: ~18 rows (aproximadamente)
INSERT INTO `rotaciones` (`idRotacion`, `idVehiculo`, `idUsuario`, `fechaAsignacion`, `fechaFinasignacion`, `created_at`, `updated_at`) VALUES
	(2, 11, 110, '2023-09-03', '2023-09-03', '2023-09-03 19:50:41', '2023-09-03 19:50:42'),
	(3, 11, 1, '2023-09-01', '2023-09-05', NULL, NULL),
	(4, 12, 2, '2023-09-02', '2023-09-06', NULL, NULL),
	(5, 13, 3, '2023-09-03', '2023-09-07', NULL, NULL),
	(6, 14, 4, '2023-09-04', '2023-09-08', NULL, NULL),
	(7, 15, 5, '2023-09-05', '2023-09-09', NULL, NULL),
	(8, 16, 6, '2023-09-06', '2023-09-10', NULL, NULL),
	(9, 17, 7, '2023-09-07', '2023-09-11', NULL, NULL),
	(10, 18, 8, '2023-09-08', '2023-09-12', NULL, NULL),
	(11, 19, 9, '2023-09-09', '2023-09-13', NULL, NULL),
	(12, 20, 10, '2023-09-10', '2023-09-14', NULL, NULL),
	(13, 21, 11, '2023-09-11', '2023-09-15', NULL, NULL),
	(14, 22, 12, '2023-09-12', '2023-09-16', NULL, NULL),
	(15, 23, 13, '2023-09-13', '2023-09-17', NULL, NULL),
	(16, 24, 14, '2023-09-14', '2023-09-18', NULL, NULL),
	(17, 25, 15, '2023-09-15', '2023-09-19', NULL, NULL),
	(18, 11, 1, '2023-09-01', '2023-09-05', NULL, NULL),
	(32, 25, 15, '2023-09-15', '2023-09-19', NULL, NULL);

-- Volcando estructura para tabla cootransrut.rutas
CREATE TABLE IF NOT EXISTS `rutas` (
  `idRuta` int NOT NULL AUTO_INCREMENT,
  `idDespacho` int NOT NULL,
  `tiempoEstimado` char(5) NOT NULL,
  `valorTiquete` decimal(12,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idRuta`),
  KEY `fk_rutas_despachollegada` (`idDespacho`),
  CONSTRAINT `fk_rutas_despacho` FOREIGN KEY (`idDespacho`) REFERENCES `despachos` (`idDespacho`),
  CONSTRAINT `fk_rutas_despachollegada` FOREIGN KEY (`idDespacho`) REFERENCES `despachos` (`idDespacho`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla cootransrut.rutas: ~26 rows (aproximadamente)
INSERT INTO `rutas` (`idRuta`, `idDespacho`, `tiempoEstimado`, `valorTiquete`, `created_at`, `updated_at`) VALUES
	(32, 10, '12:00', 2100.00, '2023-09-03 19:37:17', '2023-09-03 19:37:20'),
	(48, 10, '02:30', 5000.00, NULL, NULL),
	(49, 11, '03:00', 6000.00, NULL, NULL),
	(50, 12, '02:15', 4500.00, NULL, NULL),
	(51, 13, '03:30', 7000.00, NULL, NULL),
	(52, 14, '02:45', 5500.00, NULL, NULL),
	(53, 15, '02:00', 4000.00, NULL, NULL),
	(54, 16, '02:15', 4500.00, NULL, NULL),
	(55, 17, '03:00', 6000.00, NULL, NULL),
	(59, 21, '02:00', 4000.00, NULL, NULL),
	(60, 22, '02:15', 4500.00, NULL, NULL),
	(61, 23, '03:00', 6000.00, NULL, NULL),
	(62, 24, '02:30', 5000.00, NULL, NULL),
	(63, 25, '03:30', 7000.00, NULL, NULL),
	(64, 26, '02:45', 5500.00, NULL, NULL),
	(65, 27, '02:00', 4000.00, NULL, NULL),
	(66, 28, '02:15', 4500.00, NULL, NULL),
	(67, 29, '03:00', 6000.00, NULL, NULL),
	(68, 30, '02:30', 5000.00, NULL, NULL),
	(69, 31, '03:30', 7000.00, NULL, NULL),
	(70, 32, '02:45', 5500.00, NULL, NULL),
	(71, 33, '02:00', 4000.00, NULL, NULL),
	(72, 34, '02:15', 4500.00, NULL, NULL);

-- Volcando estructura para tabla cootransrut.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apellido` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rol` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipoDoc` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `documento` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `fechaAfiliacion` date DEFAULT NULL,
  `numLicencia` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=110 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla cootransrut.users: ~20 rows (aproximadamente)
INSERT INTO `users` (`id`, `name`, `apellido`, `rol`, `tipoDoc`, `documento`, `fechaNacimiento`, `fechaAfiliacion`, `numLicencia`, `estado`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Juan', 'López', 'Gerencia', 'Cédula de ciudadanía', '1234567890', '1990-01-01', '2020-01-01', 'Licencia1', 'Activo', 'juan@example.com', NULL, '$2y$10$hash1', 'token1', NULL, NULL),
	(2, 'María', 'González', 'Tesoreria', 'Cédula de ciudadanía', '2345678901', '1991-02-02', '2020-02-02', 'Licencia2', 'Inactivo', 'maria@example.com', NULL, '$2y$10$hash2', 'token2', NULL, NULL),
	(3, 'Carlos', 'Martínez', 'Conductores', 'Cédula de ciudadanía', '3456789012', '1992-03-03', '2020-03-03', 'Licencia3', 'Activo', 'carlos@example.com', NULL, '$2y$10$hash3', 'token3', NULL, NULL),
	(4, 'Ana', 'Rodríguez', 'Propietarios', 'Cédula de ciudadanía', '4567890123', '1993-04-04', '2020-04-04', 'Licencia4', 'Inactivo', 'ana@example.com', NULL, '$2y$10$hash4', 'token4', NULL, NULL),
	(5, 'Pedro', 'Pérez', 'Talentohumano', 'Cédula de ciudadanía', '5678901234', '1994-05-05', '2020-05-05', 'Licencia5', 'Activo', 'pedro@example.com', NULL, '$2y$10$hash5', 'token5', NULL, NULL),
	(6, 'Laura', 'Gómez', 'Secretaria', 'Cédula de ciudadanía', '6789012345', '1995-06-06', '2020-06-06', 'Licencia6', 'Inactivo', 'laura@example.com', NULL, '$2y$10$hash6', 'token6', NULL, NULL),
	(7, 'David', 'Hernández', 'Gerencia', 'Cédula de ciudadanía', '7890123456', '1996-07-07', '2020-07-07', 'Licencia7', 'Activo', 'david@example.com', NULL, '$2y$10$hash7', 'token7', NULL, NULL),
	(8, 'Sofía', 'Lara', 'Tesoreria', 'Cédula de ciudadanía', '8901234567', '1997-08-08', '2020-08-08', 'Licencia8', 'Inactivo', 'sofia@example.com', NULL, '$2y$10$hash8', 'token8', NULL, NULL),
	(9, 'Andrés', 'Fernández', 'Conductores', 'Cédula de ciudadanía', '9012345678', '1998-09-09', '2020-09-09', 'Licencia9', 'Activo', 'andres@example.com', NULL, '$2y$10$hash9', 'token9', NULL, NULL),
	(10, 'Elena', 'Sánchez', 'Propietarios', 'Cédula de ciudadanía', '0123456789', '1999-10-10', '2020-10-10', 'Licencia10', 'Inactivo', 'elena@example.com', NULL, '$2y$10$hash10', 'token10', NULL, NULL),
	(11, 'José', 'Díaz', 'Talentohumano', 'Cédula de ciudadanía', '1234567890', '2000-11-11', '2020-11-11', 'Licencia11', 'Activo', 'jose@example.com', NULL, '$2y$10$hash11', 'token11', NULL, NULL),
	(12, 'Luisa', 'Mendoza', 'Secretaria', 'Cédula de ciudadanía', '2345678901', '2001-12-12', '2020-12-12', 'Licencia12', 'Inactivo', 'luisa@example.com', NULL, '$2y$10$hash12', 'token12', NULL, NULL),
	(13, 'Gabriel', 'Ramírez', 'Gerencia', 'Cédula de ciudadanía', '3456789012', '2002-01-13', '2021-01-13', 'Licencia13', 'Activo', 'gabriel@example.com', NULL, '$2y$10$hash13', 'token13', NULL, NULL),
	(14, 'Paula', 'López', 'Tesoreria', 'Cédula de ciudadanía', '4567890123', '2003-02-14', '2021-02-14', 'Licencia14', 'Inactivo', 'paula@example.com', NULL, '$2y$10$hash14', 'token14', NULL, NULL),
	(15, 'Felipe', 'García', 'Conductores', 'Cédula de ciudadanía', '5678901234', '2004-03-15', '2021-03-15', 'Licencia15', 'Activo', 'felipe@example.com', NULL, '$2y$10$hash15', 'token15', NULL, NULL),
	(106, 'Valen', 'Salamanca', 'Secretaria', 'Cédula de ciudadanía', '1051065345', '2003-09-27', '2018-09-06', '1098329874', 'Inactivo', 'valu@gmail.com', NULL, '$2y$10$tLWcgIs7d0NEY/v3TjkcRuuEIAvtcdwg2jld7jAjfsqgvFnbMQdwu', 'hAg3s9DL45QUI5jpUFkdDmAlvByX919UuLF0wDbAReyv7qBLQFYx8lTkK8t1', '2023-09-03 10:38:28', '2023-09-03 22:52:46'),
	(109, 'ed', 'ed', 'Conductores', NULL, NULL, NULL, NULL, NULL, NULL, 'ed@gmail.com', NULL, '$2y$10$D0rgI9RqeF77L./LxHhz1OuPRFErUKNCRcvfYqacP./S/7A9xnI16', NULL, '2023-09-03 23:03:54', '2023-09-03 23:03:54'),
	(110, 'pedro', 'el escamoso', 'Conductores', NULL, NULL, NULL, NULL, NULL, NULL, 'pedro@gmail.com', NULL, '$2y$10$Rc2pWX.dtg89r0cY8Naz2eyKZXpK9LE/dZm5GXr599TICLc.qx.Qe', 'pYIopciaDLu8OVVr7OU59JYhJfa3tzIgH5MQ1hSWNOLsnjgYmnMm8v5uyFI6', '2023-09-04 00:38:16', '2023-09-04 00:38:16'),
	(111, 'Valentina', 'Salamanca', 'Gerencia', NULL, NULL, NULL, NULL, NULL, NULL, 'valeehds@gmail.com', NULL, '$2y$10$cKSOcwdNqJVBImFlPB6/A.Bl3esX3QxaZGguP98SnL6vWh.Iz4Lh2', NULL, '2023-09-04 06:44:48', '2023-09-04 06:44:48');

-- Volcando estructura para tabla cootransrut.vehiculos
CREATE TABLE IF NOT EXISTS `vehiculos` (
  `idVehiculo` int NOT NULL AUTO_INCREMENT,
  `idUsuario` bigint unsigned NOT NULL,
  `marca` varchar(50) NOT NULL DEFAULT '',
  `numPlaca` varchar(20) NOT NULL,
  `modeloVehiculo` varchar(20) NOT NULL,
  `capacidadPasajeros` int NOT NULL,
  `codigoUt` varchar(20) NOT NULL,
  `estado` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'Activo',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idVehiculo`),
  KEY `fk_vehiculo_usuario` (`idUsuario`),
  CONSTRAINT `fk_vehiculo_personas` FOREIGN KEY (`idUsuario`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla cootransrut.vehiculos: ~32 rows (aproximadamente)
INSERT INTO `vehiculos` (`idVehiculo`, `idUsuario`, `marca`, `numPlaca`, `modeloVehiculo`, `capacidadPasajeros`, `codigoUt`, `estado`, `created_at`, `updated_at`) VALUES
	(11, 109, 'TAO-098', 'TAO-098', '2020', 24, 'UT-098', 'Activo', NULL, '2023-09-04 02:55:18'),
	(12, 110, 'sdfghj', '2345c', 'sadfgh', 12, '34523c', 'activo', '2023-09-04 03:11:11', '2023-09-04 03:11:11'),
	(13, 5, 'Toyota', 'ABC123', 'Sedan', 5, 'UT001', 'Activo', NULL, NULL),
	(14, 2, 'Honda', 'XYZ789', 'SUV', 7, 'UT002', 'Activo', NULL, NULL),
	(15, 3, 'Ford', 'LMN456', 'Camioneta', 9, 'UT003', 'Activo', NULL, NULL),
	(16, 4, 'Chevrolet', 'PQR321', 'Pickup', 4, 'UT004', 'Activo', NULL, NULL),
	(17, 5, 'Nissan', 'JKL987', 'Sedan', 5, 'UT005', 'Activo', NULL, NULL),
	(18, 6, 'Hyundai', 'DEF654', 'SUV', 7, 'UT006', 'Activo', NULL, NULL),
	(19, 7, 'Toyota', 'GHI321', 'Camioneta', 9, 'UT007', 'Activo', NULL, NULL),
	(20, 8, 'Ford', 'OPQ987', 'Pickup', 4, 'UT008', 'Activo', NULL, NULL),
	(21, 9, 'Chevrolet', 'RST654', 'Sedan', 5, 'UT009', 'Activo', NULL, NULL),
	(22, 10, 'Nissan', 'UVW321', 'SUV', 7, 'UT010', 'Activo', NULL, NULL),
	(23, 11, 'Hyundai', 'MNO987', 'Camioneta', 9, 'UT011', 'Activo', NULL, NULL),
	(24, 12, 'Toyota', 'KLM654', 'Pickup', 4, 'UT012', 'Activo', NULL, NULL),
	(25, 13, 'Ford', 'HIJ321', 'Sedan', 5, 'UT013', 'Activo', NULL, NULL),
	(26, 14, 'Chevrolet', 'CDE987', 'SUV', 7, 'UT014', 'Activo', NULL, NULL),
	(27, 15, 'Nissan', 'XYZ654', 'Camioneta', 9, 'UT015', 'Activo', NULL, NULL),
	(28, 5, 'Toyota', 'ABC123', 'Sedan', 5, 'UT001', 'Activo', NULL, NULL),
	(29, 2, 'Honda', 'XYZ789', 'SUV', 7, 'UT002', 'Activo', NULL, NULL),
	(30, 3, 'Ford', 'LMN456', 'Camioneta', 9, 'UT003', 'Activo', NULL, NULL),
	(31, 4, 'Chevrolet', 'PQR321', 'Pickup', 4, 'UT004', 'Activo', NULL, NULL),
	(32, 5, 'Nissan', 'JKL987', 'Sedan', 5, 'UT005', 'Activo', NULL, NULL),
	(33, 6, 'Hyundai', 'DEF654', 'SUV', 7, 'UT006', 'Activo', NULL, NULL),
	(34, 7, 'Toyota', 'GHI321', 'Camioneta', 9, 'UT007', 'Activo', NULL, NULL),
	(35, 8, 'Ford', 'OPQ987', 'Pickup', 4, 'UT008', 'Activo', NULL, NULL),
	(36, 9, 'Chevrolet', 'RST654', 'Sedan', 5, 'UT009', 'Activo', NULL, NULL),
	(37, 10, 'Nissan', 'UVW321', 'SUV', 7, 'UT010', 'Activo', NULL, NULL),
	(38, 11, 'Hyundai', 'MNO987', 'Camioneta', 9, 'UT011', 'Activo', NULL, NULL),
	(39, 12, 'Toyota', 'KLM654', 'Pickup', 4, 'UT012', 'Activo', NULL, NULL),
	(40, 13, 'Ford', 'HIJ321', 'Sedan', 5, 'UT013', 'Activo', NULL, NULL),
	(41, 14, 'Chevrolet', 'CDE987', 'SUV', 7, 'UT014', 'Activo', NULL, NULL),
	(42, 15, 'Nissan', 'XYZ654', 'Camioneta', 9, 'UT015', 'Activo', NULL, NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
