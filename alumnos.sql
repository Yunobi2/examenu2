-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-07-2024 a las 02:25:19
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
-- Base de datos: `examenu2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `curso` varchar(255) NOT NULL,
  `nota1` decimal(5,2) NOT NULL,
  `nota2` decimal(5,2) NOT NULL,
  `promedio` decimal(5,2) NOT NULL,
  `condicion` varchar(255) NOT NULL,
  `fecha_reg` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `nombre`, `curso`, `nota1`, `nota2`, `promedio`, `condicion`, `fecha_reg`, `created_at`, `updated_at`) VALUES
(1, 'Alumno 1', 'Laravel', 15.00, 16.00, 15.50, 'APROBADO', '2024-07-12', '2024-07-12 05:20:13', '2024-07-12 05:20:13'),
(2, 'Juan', 'Base de datos', 14.00, 17.00, 15.50, 'APROBADO', '2024-07-12', '2024-07-12 05:21:05', '2024-07-12 05:21:05'),
(3, 'Luis', 'Software', 12.00, 18.00, 15.00, 'APROBADO', '2024-07-12', '2024-07-12 05:21:38', '2024-07-12 05:21:38'),
(4, 'Luis Angel', 'IHC', 10.00, 9.00, 9.50, 'DESAPROBADO', '2024-07-12', '2024-07-12 05:22:03', '2024-07-12 05:22:03'),
(5, 'Carlos', 'IA', 8.00, 12.00, 10.00, 'DESAPROBADO', '2024-07-12', '2024-07-12 05:23:09', '2024-07-12 05:23:09');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
