-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-01-2017 a las 20:05:40
-- Versión del servidor: 10.1.10-MariaDB
-- Versión de PHP: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `imagenes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `id` int(4) NOT NULL,
  `ruta` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`id`, `ruta`) VALUES
(1, 'imagenes/1 (2).jpg'),
(2, 'imagenes/1 (4).jpg'),
(3, 'imagenes/2 (1).jpg'),
(4, 'imagenes/1 (5).jpg'),
(5, 'imagenes/1 (7).jpg'),
(6, 'imagenes/1 (8).jpg'),
(7, 'imagenes/1 (9).jpg'),
(8, 'imagenes/1 (10).jpg'),
(9, 'imagenes/1 (14).jpg'),
(10, 'imagenes/3 (2).jpg'),
(11, 'imagenes/3 (4).jpg'),
(12, 'imagenes/1 (15).jpg'),
(13, 'imagenes/1 (16).jpg'),
(14, 'imagenes/2 (2).jpg'),
(15, 'imagenes/2 (3).jpg'),
(16, 'imagenes/2 (5).jpg'),
(17, 'imagenes/2 (6).jpg'),
(18, 'imagenes/2 (13).jpg'),
(19, 'imagenes/3 (19).jpg'),
(20, 'imagenes/baldor.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultado`
--

CREATE TABLE `resultado` (
  `idusr` varchar(50) NOT NULL,
  `edad` varchar(2) NOT NULL,
  `experiencia` varchar(20) NOT NULL,
  `division` varchar(2) NOT NULL,
  `tiempoOCR` varchar(10) NOT NULL,
  `tiempoNOOCR` varchar(10) NOT NULL,
  `preferido` varchar(18) NOT NULL,
  `comentario` varchar(555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `resultado`
--

INSERT INTO `resultado` (`idusr`, `edad`, `experiencia`, `division`, `tiempoOCR`, `tiempoNOOCR`, `preferido`, `comentario`) VALUES
('1', '21', 'Intermedia', '5', '0:7:56', '0:2:45', 'Metodo No OCR', 'buena');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- Indices de la tabla `resultado`
--
ALTER TABLE `resultado`
  ADD PRIMARY KEY (`idusr`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
