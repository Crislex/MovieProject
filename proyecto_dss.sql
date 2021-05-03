-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 03-05-2021 a las 02:31:29
-- Versión del servidor: 5.7.26
-- Versión de PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_dss`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alquiler`
--

DROP TABLE IF EXISTS `alquiler`;
CREATE TABLE IF NOT EXISTS `alquiler` (
  `IdAlquiler` int(11) NOT NULL AUTO_INCREMENT,
  `FechaInicio` date NOT NULL,
  `FechaFinal` date NOT NULL,
  `IdPeliculaA` int(11) NOT NULL,
  `IdUsuarioA` int(11) NOT NULL,
  PRIMARY KEY (`IdAlquiler`),
  KEY `FK_IdPeliculaA` (`IdPeliculaA`) USING BTREE,
  KEY `IdUsuarioA` (`IdUsuarioA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

DROP TABLE IF EXISTS `compra`;
CREATE TABLE IF NOT EXISTS `compra` (
  `IdCompra` int(11) NOT NULL AUTO_INCREMENT,
  `FechaVenta` date NOT NULL,
  `IdPeliculaC` int(11) NOT NULL,
  `IdUsuarioC` int(11) NOT NULL,
  PRIMARY KEY (`IdCompra`),
  KEY `IdUsuarioC` (`IdUsuarioC`),
  KEY `IdPeliculaC` (`IdPeliculaC`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `multa`
--

DROP TABLE IF EXISTS `multa`;
CREATE TABLE IF NOT EXISTS `multa` (
  `IdMulta` int(11) NOT NULL AUTO_INCREMENT,
  `Estado` varchar(30) NOT NULL,
  `IdPeliculaM` int(11) NOT NULL,
  `IdUsuarioM` int(11) NOT NULL,
  PRIMARY KEY (`IdMulta`),
  KEY `FK_IdPeliculaM` (`IdPeliculaM`),
  KEY `FK_IdUsuarioM` (`IdUsuarioM`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelicula`
--

DROP TABLE IF EXISTS `pelicula`;
CREATE TABLE IF NOT EXISTS `pelicula` (
  `IdPelicula` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `Descripcion` varchar(255) NOT NULL,
  `Imagen` varchar(255) NOT NULL,
  `Estado` varchar(20) NOT NULL,
  `Stock` int(11) NOT NULL,
  `PrecioAlquiler` varchar(11) NOT NULL,
  `PrecioVenta` varchar(11) NOT NULL,
  `Favorito` int(11) NOT NULL,
  PRIMARY KEY (`IdPelicula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipousuario`
--

DROP TABLE IF EXISTS `tipousuario`;
CREATE TABLE IF NOT EXISTS `tipousuario` (
  `idTipo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  PRIMARY KEY (`idTipo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `IdUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(30) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Tipo` int(11) NOT NULL,
  PRIMARY KEY (`IdUsuario`),
  KEY `FK_Tipo` (`Tipo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alquiler`
--
ALTER TABLE `alquiler`
  ADD CONSTRAINT `alquiler_ibfk_1` FOREIGN KEY (`IdPeliculaA`) REFERENCES `pelicula` (`IdPelicula`),
  ADD CONSTRAINT `alquiler_ibfk_2` FOREIGN KEY (`IdUsuarioA`) REFERENCES `usuario` (`IdUsuario`)
  ON UPDATE CASCADE
  ON DELETE CASCADE;

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`IdUsuarioC`) REFERENCES `usuario` (`IdUsuario`),
  ADD CONSTRAINT `compra_ibfk_2` FOREIGN KEY (`IdPeliculaC`) REFERENCES `pelicula` (`IdPelicula`)
  ON UPDATE CASCADE
  ON DELETE CASCADE;

--
-- Filtros para la tabla `multa`
--
ALTER TABLE `multa`
  ADD CONSTRAINT `FK_IdPeliculaM` FOREIGN KEY (`IdPeliculaM`) REFERENCES `pelicula` (`IdPelicula`),
  ADD CONSTRAINT `FK_IdUsuarioM` FOREIGN KEY (`IdUsuarioM`) REFERENCES `usuario` (`IdUsuario`),
  ADD CONSTRAINT `multa_ibfk_1` FOREIGN KEY (`IdUsuarioM`) REFERENCES `usuario` (`IdUsuario`)
  ON UPDATE CASCADE
  ON DELETE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`Tipo`) REFERENCES `tipousuario` (`idTipo`)
  ON UPDATE CASCADE
  ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
