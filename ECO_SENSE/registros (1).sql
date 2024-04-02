-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-04-2024 a las 05:48:36
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registros`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calidad_del_aire`
--

CREATE TABLE `calidad_del_aire` (
  `id_calidad_aire` int(30) NOT NULL,
  `fecha_medicion_calidad_aire` datetime(6) NOT NULL,
  `rango` varchar(10) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `calidad_del_aire`
--

INSERT INTO `calidad_del_aire` (`id_calidad_aire`, `fecha_medicion_calidad_aire`, `rango`, `id_usuario`) VALUES
(1, '2024-03-19 00:43:13.000000', 'bueno', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id_usuario` int(11) NOT NULL,
  `nombres` varchar(30) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `correo` varchar(70) NOT NULL,
  `telefono` bigint(10) NOT NULL,
  `usuario` varchar(25) NOT NULL,
  `contraseña` varchar(30) NOT NULL,
  `fech_registro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id_usuario`, `nombres`, `apellidos`, `correo`, `telefono`, `usuario`, `contraseña`, `fech_registro`) VALUES
(27, 'Esteban David', 'Jinete Martinez', 'davidesteban@gmail.com', 3015697542, 'ESTEBANOFF', 'Soyotaku_1', '2024-03-23 03:34:13'),
(29, 'Anders Enrique', 'Muñoz Pua', 'aemunoz@unibarranquilla.edu.co', 3045390596, 'aemunoz', 'Anders_12', '2024-04-02 03:37:02'),
(30, 'Anders Enrique', 'Muñoz Pua', 'aemunoz@unibarranquilla.edu.co', 3045390594, 'aemunoz', 'Anders_12', '2024-04-02 05:16:57');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `humedad`
--

CREATE TABLE `humedad` (
  `id_humedad` int(30) NOT NULL,
  `fecha_medicion_humedad` datetime(6) NOT NULL,
  `rango` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temperatura`
--

CREATE TABLE `temperatura` (
  `id_temperatura` int(30) NOT NULL,
  `fecha_medicion_temperatura` int(6) NOT NULL,
  `rango` varchar(10) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `calidad_del_aire`
--
ALTER TABLE `calidad_del_aire`
  ADD PRIMARY KEY (`id_calidad_aire`);

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `humedad`
--
ALTER TABLE `humedad`
  ADD PRIMARY KEY (`id_humedad`);

--
-- Indices de la tabla `temperatura`
--
ALTER TABLE `temperatura`
  ADD PRIMARY KEY (`id_temperatura`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `calidad_del_aire`
--
ALTER TABLE `calidad_del_aire`
  MODIFY `id_calidad_aire` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `humedad`
--
ALTER TABLE `humedad`
  MODIFY `id_humedad` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `temperatura`
--
ALTER TABLE `temperatura`
  MODIFY `id_temperatura` int(30) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `temperatura`
--
ALTER TABLE `temperatura`
  ADD CONSTRAINT `temperatura_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `datos` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
