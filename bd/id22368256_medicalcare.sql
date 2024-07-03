-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 03-07-2024 a las 16:28:53
-- Versión del servidor: 10.5.20-MariaDB
-- Versión de PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id22368256_medicalcare`
--
CREATE DATABASE IF NOT EXISTS `id22368256_medicalcare` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id22368256_medicalcare`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `contrasena` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellidos`, `correo`, `contrasena`) VALUES
(5, 'Brayan', 'Olivares', '2130441@upv.edu.mx', '$2y$10$0zbxGwmFW7FM4zrh3ixskOBrfHcfk2jtuaP93/K6nNz40Ydc5DByO'),
(7, 'Brayan', 'Oliv', 'brayan@upv.edu', '$2y$10$0rrA2ynJYADjIskiP.DsN.CtBBUy33bHkAwbA.g/an.ht1sdXtUiu'),
(8, 'demo', 'demo', 'demo@demo.com', '$2y$10$0wkzcS4T4qQH5VDSM84LSuAqvECL5ATLVZ5mGK4EGgFgpW5Krejr.'),
(9, 'Brayan', 'Olivares', '2130441@upv.edu.mx', '$2y$10$hxq1a9Ba8WukB1mmkzibh.zF5quuxeCKWXcsVTGkWZvn/hm2X2.Be'),
(10, 'Ana', 'Rdz', 'OLA@mail.com', '$2y$10$URswMH4sqNMv9lLND3Wzf.j8q69AMKJ7ZTKQKj8ZBcGod4Vovsriy'),
(11, 'Ana', 'Rdz', 'OLA@mail.com', '$2y$10$HQyxMG9LTBmRgBH3c6edxOtisy1RuLEVZs5AN83C3lZRGg4Anpy72'),
(12, 'Ana', 'Rdz', 'OLA@mail.com', '$2y$10$mD22qQqiYhSFCNpz1gh/tOxPRwm0sAH2iSW2bM39yfZJzVuDPZ8Na'),
(13, 'Ana', 'Rdz', 'OLA@mail.com', '$2y$10$0TB3bkM29KJqbl7kO9DDbOp0Yy34kj.sNgH2qGxiqG37oXKazOo.K'),
(14, 'Ana', 'Rdz', 'OLA@mail.com', '$2y$10$4/4BOfa9qYs9mJM3Seg08udRU7w24GLRD.WN5XDEMNYoovVM8qrPO'),
(15, 'Ana', 'Rdz', 'OLA@mail.com', '$2y$10$aFGrj5s1iqDYIpeoRO9Q5.57a3Ac.V7Tx45F6vbKrAhPukyG5lbmW'),
(16, 'Ana', 'Rdz', 'OLA@mail.com', '$2y$10$2lCPtFULwLzvixhOreDZCOj8lVyFClA2QsHfnijRIJB0cXKduDUdO'),
(17, 're', 're', 're@re.com', '$2y$10$Yfvj9IZbjtzXz3kLEq9noeMLEKHYC7Moz2UAlgHjjd90MkUQ5ISFe');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
