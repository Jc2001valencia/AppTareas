-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-08-2022 a las 05:36:37
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `app_tareas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `id` int(250) NOT NULL,
  `Nombre` varchar(250) NOT NULL,
  `apellidos` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`email`, `password`, `id`, `Nombre`, `apellidos`) VALUES
('j@j.com', 'camilo', 4, 'camilo', ''),
('juan@gmail.com', 'camilo', 5, 'juan Camilo', 'Valencia'),
('cristian@gmail.com', '12345678', 6, 'Cristian', 'Mosquera');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareas`
--

CREATE TABLE `tareas` (
  `id` int(250) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `fecha` date NOT NULL,
  `descripcion` varchar(10000) NOT NULL,
  `id_user` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tareas`
--

INSERT INTO `tareas` (`id`, `titulo`, `fecha`, `descripcion`, `id_user`) VALUES
(20, 'ir al gym', '2022-08-13', 'ir al gym todos los viernes', 4),
(21, 'programar 2', '2022-08-13', 'debo hacer un app web', 5),
(22, 'programar 7', '2022-08-13', 'terminar proyecto de programación de la app web', 6),
(23, 'programar 7', '2022-08-13', 'terminar proyecto de programación de la app web', 0),
(24, 'programar 7', '2022-08-13', 'debo hacer un app web para id 4', 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tareas`
--
ALTER TABLE `tareas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tareas`
--
ALTER TABLE `tareas`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
