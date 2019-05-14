-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.30-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para proyecto_integrado(freelancers)
CREATE DATABASE IF NOT EXISTS `proyecto_integrado(freelancers)` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `proyecto_integrado(freelancers)`;

-- Volcando estructura para tabla proyecto_integrado(freelancers).ciudad
CREATE TABLE IF NOT EXISTS `ciudad` (
  `Id_ciudad` int(11) NOT NULL,
  `Id_pais` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`Id_ciudad`),
  KEY `FK_ciudad_pais` (`Id_pais`),
  CONSTRAINT `FK_ciudad_pais` FOREIGN KEY (`Id_pais`) REFERENCES `pais` (`Id_pais`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla proyecto_integrado(freelancers).ciudad: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `ciudad` DISABLE KEYS */;
/*!40000 ALTER TABLE `ciudad` ENABLE KEYS */;

-- Volcando estructura para tabla proyecto_integrado(freelancers).ente
CREATE TABLE IF NOT EXISTS `ente` (
  `NIF` varchar(50) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Apellidos` varchar(50) DEFAULT NULL,
  `Telefono` int(11) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Contrasenya` varchar(50) DEFAULT NULL,
  `Direccion` varchar(50) DEFAULT NULL,
  `Id_ciudad` int(11) DEFAULT NULL,
  `Cartera` int(11) DEFAULT NULL,
  PRIMARY KEY (`NIF`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla proyecto_integrado(freelancers).ente: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `ente` DISABLE KEYS */;
/*!40000 ALTER TABLE `ente` ENABLE KEYS */;

-- Volcando estructura para tabla proyecto_integrado(freelancers).ente_servicio
CREATE TABLE IF NOT EXISTS `ente_servicio` (
  `Id_ente_servicio` int(11) NOT NULL,
  `Fecha_inicio` date NOT NULL,
  `Fecha_final` date NOT NULL,
  `NIF` varchar(50) DEFAULT NULL,
  `Id_servicio` int(11) NOT NULL,
  PRIMARY KEY (`Id_ente_servicio`),
  KEY `FK_ente_servicio_ente` (`NIF`),
  KEY `FK_ente_servicio_servicio` (`Id_servicio`),
  CONSTRAINT `FK_ente_servicio_ente` FOREIGN KEY (`NIF`) REFERENCES `ente` (`NIF`),
  CONSTRAINT `FK_ente_servicio_servicio` FOREIGN KEY (`Id_servicio`) REFERENCES `servicio` (`Id_servicio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla proyecto_integrado(freelancers).ente_servicio: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `ente_servicio` DISABLE KEYS */;
/*!40000 ALTER TABLE `ente_servicio` ENABLE KEYS */;

-- Volcando estructura para tabla proyecto_integrado(freelancers).pais
CREATE TABLE IF NOT EXISTS `pais` (
  `Id_pais` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id_pais`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla proyecto_integrado(freelancers).pais: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `pais` DISABLE KEYS */;
/*!40000 ALTER TABLE `pais` ENABLE KEYS */;

-- Volcando estructura para tabla proyecto_integrado(freelancers).servicio
CREATE TABLE IF NOT EXISTS `servicio` (
  `Id_servicio` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `Horas` int(11) NOT NULL,
  `Precio` int(11) NOT NULL,
  `Descripcion` varchar(200) DEFAULT NULL,
  `tipo_servicio` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id_servicio`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla proyecto_integrado(freelancers).servicio: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `servicio` DISABLE KEYS */;
/*!40000 ALTER TABLE `servicio` ENABLE KEYS */;

-- Volcando estructura para tabla proyecto_integrado(freelancers).tipo
CREATE TABLE IF NOT EXISTS `tipo` (
  `Id_tipo` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id_tipo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla proyecto_integrado(freelancers).tipo: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tipo` DISABLE KEYS */;
INSERT INTO `tipo` (`Id_tipo`, `Nombre`) VALUES
	(3, 'Prueba');
/*!40000 ALTER TABLE `tipo` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
