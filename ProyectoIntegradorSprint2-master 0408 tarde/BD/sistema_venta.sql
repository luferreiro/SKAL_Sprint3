-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-08-2019 a las 02:39:02
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema_venta`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `muebles`
--

CREATE TABLE `muebles` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `precio` varchar(45) NOT NULL,
  `material` varchar(45) DEFAULT NULL,
  `alto` decimal(2,0) DEFAULT NULL,
  `ancho` decimal(2,0) DEFAULT NULL,
  `profundidad` decimal(2,0) DEFAULT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `descripcion` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `muebles`
--

INSERT INTO `muebles` (`id`, `nombre`, `precio`, `material`, `alto`, `ancho`, `profundidad`, `foto`, `descripcion`) VALUES
(4, 'LINEA EMILIA - BAJA', '12.000', 'Madera Laqueada', '1.2', '1.2', '1.2', '5d4a18706d2ad.jpg', '#000000'),
(5, 'LINEA EMILIA - VAJILLERO', '16.000', 'Madera Laqueada', '1.2', '1.2', '1.2', '5d4a18a1dfaf6.jpg', '#000000'),
(6, 'LINEA EMILIA - ALTA -', '10.000', 'Madera Laqueada', '1.2', '1.2', '1.2', '5d4a190258e11.jpg', '#000000'),
(7, 'LINEA EMILIA - BAJA', '7.000', 'Madera Laqueada', '1.2', '1.2', '1.2', '5d4a19393a13b.jpg', '#ffffff'),
(8, 'LINEA EMILIA - VAJILLERO', '7.000', 'Madera Laqueada', '1.2', '1.2', '1.2', '5d4a195ed75d1.jpg', '#000000'),
(9, 'LINEA EMILIA - ALTA', '7.000', 'Madera Laqueada', '1.2', '1.2', '1.2', '5d4a1981c0b9f.jpg', '#000000'),
(10, 'LINEA EMILIA - BAJA', '5.000', 'Madera Laqueada', '1.2', '1.2', '1.2', '5d4a19a8ac4a0.jpg', '#000000'),
(11, 'LINEA EMILIA - VAJILLERO', '6.000', 'Madera Laqueada', '1.2', '1.2', '1.2', '5d4a19d3580df.jpg', '#000000'),
(12, 'LINEA EMILIA - ALTA', '8.000', 'Madera Laqueada', '1.2', '1.2', '1.2', '5d4a19f429efe.jpg', '#000000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(200) NOT NULL,
  `avatar` varchar(45) DEFAULT NULL,
  `perfil` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombre`, `apellido`, `email`, `password`, `avatar`, `perfil`) VALUES
(1, 'Pedro', 'Malbran', 'pm@gmail.com', '$2y$10$i49LHz.3zVQ2vUkOyHNelOpeoSQkvZ6b/JWwmWml162aWHt.EMVSS', '5d3dac79d968b.jpg', 1),
(2, 'Emilia', 'Bolzano', 'emi@gmail.com', '$2y$10$x5QxEs04fJ2lIYLWntmkxuAgE9IUGbzKDTdQhgaiBoQKnp734TWne', '5cf70bc2ecac1.jpg', 9),
(3, 'Luciana', 'Ferreiro', 'luli@gmail.com', '$2y$10$7YR7QtbLenPkHmAMl0tcYu/yskYrfjGcLJ4DXrP3B6ioy.vTLZzyK', '5cf70afb7e85a.jpg', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `muebles`
--
ALTER TABLE `muebles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `muebles`
--
ALTER TABLE `muebles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
