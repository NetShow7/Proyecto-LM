-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-06-2017 a las 12:59:56
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `skydancer`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `flights`
--

CREATE TABLE `flights` (
  `id` int(4) NOT NULL,
  `duration` int(3) DEFAULT NULL,
  `origin` varchar(15) DEFAULT NULL,
  `destination` varchar(15) DEFAULT NULL,
  `pilot1` varchar(12) DEFAULT NULL,
  `pilot2` varchar(12) DEFAULT NULL,
  `tickets` int(3) DEFAULT NULL,
  `tickets_sold` int(3) DEFAULT NULL,
  `fdate` date DEFAULT NULL,
  `price` float DEFAULT NULL,
  `photo` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `flights`
--

INSERT INTO `flights` (`id`, `duration`, `origin`, `destination`, `pilot1`, `pilot2`, `tickets`, `tickets_sold`, `fdate`, `price`, `photo`) VALUES
(2, 450, 'Valencia', 'Paris', 'Jokin', 'Mikel', 500, 433, '2017-09-27', 150, '../img/flightpics/paris.jpg'),
(4, 650, 'Madrid', 'Moscu', 'Petxa', 'Mario', 300, 74, '2020-09-04', 78, '../img/flightpics/moscu.jpg'),
(5, 800, 'Barcelona', 'Washington', 'Mikel', 'Ana', 400, 288, '2017-07-03', 270, '../img/flightpics/washington.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserv`
--

CREATE TABLE `reserv` (
  `id` int(4) NOT NULL,
  `u_id` int(4) NOT NULL,
  `f_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reserv`
--

INSERT INTO `reserv` (`id`, `u_id`, `f_id`) VALUES
(2, 1, 4),
(3, 1, 2),
(4, 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(4) NOT NULL,
  `dni` varchar(9) DEFAULT NULL,
  `name` varchar(12) DEFAULT NULL,
  `surname` varchar(20) DEFAULT NULL,
  `birth` date DEFAULT NULL,
  `address` varchar(40) DEFAULT NULL,
  `phone` int(9) DEFAULT NULL,
  `username` varchar(15) DEFAULT NULL,
  `passwd` varchar(512) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `dni`, `name`, `surname`, `birth`, `address`, `phone`, `username`, `passwd`, `email`) VALUES
(1, '123456789', 'Eneko', 'Perez', '2017-04-21', 'Calle', 123456789, 'NetShow', '1234', 'zerbait@gmail.com'),
(3, '57648648Q', 'Maider', 'GÃ³mez', '1996-04-20', 'Etxea', 637284551, 'Mai_623', 'maipass25', 'maider_g@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reserv`
--
ALTER TABLE `reserv`
  ADD PRIMARY KEY (`id`),
  ADD KEY `u_id` (`u_id`),
  ADD KEY `f_id` (`f_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dni` (`dni`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `flights`
--
ALTER TABLE `flights`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `reserv`
--
ALTER TABLE `reserv`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `reserv`
--
ALTER TABLE `reserv`
  ADD CONSTRAINT `reserv_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reserv_ibfk_2` FOREIGN KEY (`f_id`) REFERENCES `flights` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
