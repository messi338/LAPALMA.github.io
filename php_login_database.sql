-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-12-2020 a las 23:27:09
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `php_login_database`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_videojuegos`
--

CREATE TABLE `registro_videojuegos` (
  `id_videojuegos` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `telefono` varchar(11) NOT NULL,
  `trabajo` varchar(30) NOT NULL,
  `codigo_postal` varchar(30) NOT NULL,
  `colonia` varchar(30) NOT NULL,
  `localidad` varchar(30) NOT NULL,
  `estado` varchar(30) NOT NULL,
  `municipio` varchar(30) NOT NULL,
  `calle` varchar(30) NOT NULL,
  `numero_exterior` varchar(30) NOT NULL,
  `numero_interior` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro_videojuegos`
--

INSERT INTO `registro_videojuegos` (`id_videojuegos`, `nombre`, `telefono`, `trabajo`, `codigo_postal`, `colonia`, `localidad`, `estado`, `municipio`, `calle`, `numero_exterior`, `numero_interior`) VALUES
(1, 'KEVYN', '2554', 'lima', 'l454', '454', '454', '544', '454', '45454', '4545', '54545');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registro_videojuegos`
--
ALTER TABLE `registro_videojuegos`
  ADD PRIMARY KEY (`id_videojuegos`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registro_videojuegos`
--
ALTER TABLE `registro_videojuegos`
  MODIFY `id_videojuegos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
