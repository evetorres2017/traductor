-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 21-12-2013 a las 14:37:59
-- Versión del servidor: 5.6.14
-- Versión de PHP: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `diccionario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tinformacion`
--

CREATE TABLE IF NOT EXISTS `tinformacion` (
  `espanol` varchar(21) COLLATE utf8_spanish_ci NOT NULL,
  `ingles` varchar(21) COLLATE utf8_spanish_ci NOT NULL,
  `tseltal` varchar(21) COLLATE utf8_spanish_ci NOT NULL,
  `chol` varchar(21) COLLATE utf8_spanish_ci NOT NULL,
  `tsotsil` varchar(21) COLLATE utf8_spanish_ci NOT NULL,
  `tojolabal` varchar(21) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`espanol`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tinformacion`
--

INSERT INTO `tinformacion` (`espanol`, `ingles`, `tseltal`, `chol`, `tsotsil`, `tojolabal`) VALUES
('cerdo', 'pig', 'chitam', 'estachitam', 'wechitam', 'rechitam'),
('tigre', 'tiger', 'choj', '---', '---', '---'),
('perro', 'dog', 'tsi', '---', '---', '---'),
('gato', 'cat', 'mis', '---', '---', '---'),
('vaca', 'cow', 'wacash', '---', '---', '---'),
('ardilla', 'squirrel', 'chuch', '---', '---', '---');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
