-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 24-09-2013 a las 10:59:05
-- Versión del servidor: 5.5.32-MariaDB-log
-- Versión de PHP: 5.5.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `caballos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `animales`
--

CREATE TABLE IF NOT EXISTS `animales` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  `id_establo` int(2) NOT NULL,
  `id_propietario` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `animales`
--

INSERT INTO `animales` (`id`, `nombre`, `id_establo`, `id_propietario`) VALUES
(1, 'Tornado', 1, 1),
(2, 'Rocinante', 1, 2),
(5, 'Babieca', 1, 1),
(6, 'Perdigón', 2, 3),
(9, 'As de Oros', 1, 3),
(10, 'Sombra gris', 2, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `establos`
--

CREATE TABLE IF NOT EXISTS `establos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `establos`
--

INSERT INTO `establos` (`id`, `nombre`) VALUES
(1, 'Epicaste'),
(2, 'Fileo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propietarios`
--

CREATE TABLE IF NOT EXISTS `propietarios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  `apodo` varchar(200) NOT NULL,
  `nacionalidad` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `propietarios`
--

INSERT INTO `propietarios` (`id`, `nombre`, `apodo`, `nacionalidad`) VALUES
(1, 'Don Diego de la Vega', 'El Zorro', 'California'),
(2, 'Alonso Quijano', 'Don quijote de la Mancha', 'España'),
(3, 'Emiliano Zapata Salazar', 'Zapata', 'México'),
(4, 'Gandalf', 'Mago blanco', 'Tierra media');
