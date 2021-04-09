-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 09-04-2021 a las 18:24:13
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `blog_master`
--
CREATE DATABASE IF NOT EXISTS `blog_master` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `blog_master`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `CATEGORIAS`
--

DROP TABLE IF EXISTS `CATEGORIAS`;
CREATE TABLE IF NOT EXISTS `CATEGORIAS` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `CATEGORIAS`
--

INSERT INTO `CATEGORIAS` (`ID`, `NOMBRE`) VALUES
(1, 'Categoria I'),
(2, 'Categoria II'),
(3, 'Categoria III'),
(4, 'Categoria IV'),
(6, 'Categoria V'),
(7, 'Categoria VI'),
(9, 'asdasd'),
(10, 'gabriel');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ENTRADAS`
--

DROP TABLE IF EXISTS `ENTRADAS`;
CREATE TABLE IF NOT EXISTS `ENTRADAS` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `USUARIO_ID` int(255) NOT NULL,
  `CATEGORIA_ID` int(255) NOT NULL,
  `TITULO` varchar(255) NOT NULL,
  `DESCRIPCION` mediumtext,
  `FECHA` date NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_ENTRADAS_USUARIO` (`USUARIO_ID`),
  KEY `FK_ENTRADAS_CATEGORIA` (`CATEGORIA_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ENTRADAS`
--

INSERT INTO `ENTRADAS` (`ID`, `USUARIO_ID`, `CATEGORIA_ID`, `TITULO`, `DESCRIPCION`, `FECHA`) VALUES
(1, 1, 1, 'GTA V', 'JUEGO SANDBOX TRIPLE A', '2021-03-19'),
(2, 1, 2, 'WOW', 'JUEGO PARA FRIKIS', '2021-03-19'),
(3, 1, 3, 'FIFA 21', 'JUEGO DE FUTBOL HIPERREALISTA', '2021-03-19'),
(4, 1, 1, 'ASSASINS CREED', 'JUEGO SANDBOX BUENISIMO', '2021-03-19'),
(5, 1, 2, 'ZELDA', 'EL CLASICO FAVORITO DE TODOS', '2021-03-19'),
(6, 1, 3, 'MADDEN 20', 'JUEGO DE FUTBOL AMERICANO', '2021-03-19'),
(7, 1, 1, 'Titulo de post', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2021-03-19'),
(8, 1, 2, 'Titulo de post', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2021-03-19'),
(9, 1, 3, 'Titulo de post', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2021-03-19'),
(10, 1, 3, 'Titulo de post', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2021-03-19'),
(18, 20, 3, 'Noticia del dia', 'Piñera se cae por las escalerask', '2021-03-27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `USUARIOS`
--

DROP TABLE IF EXISTS `USUARIOS`;
CREATE TABLE IF NOT EXISTS `USUARIOS` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(100) DEFAULT NULL,
  `APELLIDOS` varchar(100) DEFAULT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `FECHA_REGISTRO` date DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `UQ_EMAIL` (`EMAIL`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `USUARIOS`
--

INSERT INTO `USUARIOS` (`ID`, `NOMBRE`, `APELLIDOS`, `EMAIL`, `PASSWORD`, `FECHA_REGISTRO`) VALUES
(1, 'GABRIEL', 'AMAYA', 'GABRIEL.AMAYA@MAIL.COM', '1234', '2021-03-18'),
(3, 'JUAN', 'PINTO', 'JUAN.PINTO@MAIL.COM', '1234', '2021-03-15'),
(4, 'DANIEL', 'PEREZ', 'DANIEL.PEREZ@MAIL.COM', '1234', '2021-03-10'),
(6, 'MARIA', 'ACEVEDO', 'MACEVEDO@MAIL.COM', 'ASDFAGJH', '2020-11-18'),
(7, 'gabriel', 'amaya', 'gabbriel.amaya@gmail.com', '$2y$04$VauXS2EjYw6HE115/JAGrefVM1CDg1QENHSGAjP8qqY.tayvEgMeW', '2021-03-26'),
(9, 'testing', 'rwrafas', 'gabob670@gmail.com', '$2y$04$XA84iADQc1o/yS1hoUIwL.4woKdG3pEkcZ0cEkFhZ36FcM1nE4nlO', '2021-03-26'),
(10, 'asfaf\', 'asfasf\', 'mail@mail.com', '$2y$04$oj4Rf4QYvSA178AgowyDlO4AAlbfBzMf8N3xrtiWxY7o3cbdnUC2y', '2021-03-26'),
(11, 'gabriel', 'amaya', 'angelita142009@gmail.com', '$2y$04$s.9X6/4TLFORcoHUYDIWaOqRn4AnIcllFgS/TjRolt2WSMoNfpLbe', '2021-03-26'),
(13, 'testing', 'rwrafas', 'mail1@mail.com', '$2y$04$am.gD9nP9KnQS9nuolFPneWUQTljA/LyEUIfbzolcM93Ovh99A2de', '2021-03-26'),
(14, 'afaf', 'afsasf', 'asfasf@gank.cl', '$2y$04$vEw/7uBjo0bBQO24Rv4Rz.3.1m7To.Vpn2n2XSVDN61.o0TQn5BJ2', '2021-03-26'),
(15, 'hola', 'que hay', 'hola@hola.com', '$2y$04$L4JKT1Gy.mjvXBxiw0pep.vFkuV8YckjsLDDGP0VpZDtSPHewEj0e', '2021-03-26'),
(16, 'asd', 'asd', 'asd@asd.com', '$2y$04$HF5WXd.uf1Hspk54HKoIf.WS7dPSDhdsARn/0haRskgqI.wA9NXHa', '2021-03-26'),
(17, 'testing', 'rwrafas', '123@123.com', '$2y$04$3r0pVT0C/.acNcVeK2BtPON7iHxd/chD.gqZnGKJQLVVCakreXzWO', '2021-03-26'),
(18, 'gabriel', 'amaya', 'gabo@gabo.com', '$2y$04$ysFPClwFDM08PlAxOWM8A...5F4Y/h2cAvFEEWPDz/mtRQe4.JMSe', '2021-03-26'),
(20, 'angelica', 'bobadilla', 'angelica@mail.com', '$2y$04$RZ/HlzyxhW4HB3.PI3G9Be2/ULnY5Ao4G5iMlcqdVEk8cIvh6.uy.', '2021-03-27');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ENTRADAS`
--
ALTER TABLE `ENTRADAS`
  ADD CONSTRAINT `FK_ENTRADAS_CATEGORIA` FOREIGN KEY (`CATEGORIA_ID`) REFERENCES `CATEGORIAS` (`ID`),
  ADD CONSTRAINT `FK_ENTRADAS_USUARIO` FOREIGN KEY (`USUARIO_ID`) REFERENCES `USUARIOS` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
