-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 25-11-2019 a las 02:20:38
-- Versión del servidor: 5.6.13
-- Versión de PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `compras`
--
CREATE DATABASE IF NOT EXISTS `compras` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `compras`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE IF NOT EXISTS `compras` (
  `id_compra` int(11) NOT NULL AUTO_INCREMENT,
  `dni` int(11) NOT NULL,
  PRIMARY KEY (`id_compra`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`id_compra`, `dni`) VALUES
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_compra`
--

CREATE TABLE IF NOT EXISTS `detalle_compra` (
  `id_compra` int(11) NOT NULL AUTO_INCREMENT,
  `id_producto` int(11) NOT NULL,
  `cant` int(11) NOT NULL,
  `precio` decimal(10,0) NOT NULL,
  PRIMARY KEY (`id_compra`,`id_producto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `detalle_compra`
--

INSERT INTO `detalle_compra` (`id_compra`, `id_producto`, `cant`, `precio`) VALUES
(4, 1, 3, '5'),
(4, 3, 1, '6999'),
(4, 8, 2, '25'),
(5, 11, 2, '300'),
(5, 17, 1, '50'),
(6, 1, 10, '5'),
(6, 2, 10, '3'),
(6, 10, 1, '33562'),
(6, 17, 2, '50'),
(7, 1, 10, '5'),
(7, 2, 10, '3'),
(7, 10, 1, '33562'),
(7, 17, 2, '50'),
(8, 11, 1, '300'),
(10, 2, 1, '3'),
(11, 2, 1, '3'),
(11, 17, 1, '50'),
(12, 11, 3, '300'),
(13, 1, 1, '5'),
(14, 10, 1, '33562');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id_producto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(24) COLLATE utf8_spanish_ci NOT NULL,
  `precio` decimal(10,0) NOT NULL,
  `foto` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `cuotas` int(11) NOT NULL,
  `categoria` int(11) NOT NULL,
  PRIMARY KEY (`id_producto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=18 ;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre`, `precio`, `foto`, `cuotas`, `categoria`) VALUES
(1, 'resistencia', '5', 'res.jpg', 0, 1),
(2, 'led', '3', 'led.jpg', 0, 1),
(3, 'televisor', '6999', 'tele.jpg', 0, 2),
(8, 'bornera', '25', 'bornera.jpg', 0, 1),
(10, 'aire acondicionado', '33562', 'aire.jpg', 12, 2),
(11, 'caja electrica', '300', 'cajae.jpg', 0, 3),
(17, 'destornillador phillips', '50', 'destornilladorp.png', 0, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `nombre` varchar(24) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `dni` int(9) NOT NULL,
  `direccion` varchar(28) COLLATE utf8_spanish_ci NOT NULL,
  `cp` int(6) NOT NULL,
  `telefono` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `contra` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `avatar` int(11) NOT NULL DEFAULT '0',
  `isAdmin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`dni`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre`, `apellido`, `dni`, `direccion`, `cp`, `telefono`, `contra`, `avatar`, `isAdmin`) VALUES
('78', '87', 1, '89', 88, '98', '00', 3, 1),
('juan pablo', 'gardey', 43800987, 'miguel cane 343', 1667, '1169591671', '1234', 4, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
