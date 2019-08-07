-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-08-2019 a las 13:07:29
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
  `color` varchar(50) DEFAULT NULL,
  `foto` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `muebles`
--

INSERT INTO `muebles` (`id`, `nombre`, `precio`, `material`, `alto`, `ancho`, `profundidad`, `color`, `foto`) VALUES
(4, 'LINEA EMILIA - BAJA', '12000', 'Petiribí laqueado', '80', '99', '50', 'Blanco', '5d4aae67d1072.jpg'),
(5, 'LINEA EMILIA - VAJILLERO -', '15000', 'Madera laqueada y petiribí', '99', '99', '50', 'Blanco', '5d4aaf2a8886d.jpg'),
(6, 'LINEA EMILIA - ALTA', '9000', 'Madera pino hidrolaqueada', '99', '60', '50', 'Blanco', '5d4aaf692e072.jpg'),
(7, 'Mesa de Luz - Emilia', '7000', 'Petiribí con laca sintética', '80', '60', '50', 'Gris', '5d4aafae247f0.jpg'),
(8, 'Mesa de Luz - Luciana', '9800', 'Madera de Paraiso y Tapa Marmol', '75', '80', '50', 'Blanco', '5d4aaff62d198.jpg'),
(9, 'Mesa de Luz - Cintia', '7000', 'Madera laqueada y petiribí', '70', '50', '45', 'Gris', '5d4ab04103549.jpg'),
(10, 'Silla California', '7.000', 'Blanco laqueado', '95', '40', '40', 'Blanco', '5d4ab0696b5aa.jpg'),
(11, 'Silla Paris', '8000', 'Madera laqueada y petiribí', '95', '50', '50', 'Blanco', '5d4ab08f4c374.jpg'),
(12, 'Silla London', '9500', 'Madera laqueada y petiribí', '95', '50', '50', 'Blanco y Madera', '5d4ab0b542436.jpg');

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
