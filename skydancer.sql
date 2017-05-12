-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-05-2017 a las 13:05:52
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
(0, 41, 'dwqf', 'rewgwe', 'grewgrew4', 'grw', 6, 5, '2017-05-12', 500, '../img/flightpics/03 - JPT5dX0.jpg'),
(1, 300, 'Madrid', 'Hogwarts', 'Eneko', 'Paco', 300, 240, '2017-04-27', 50, ''),
(2, 221, 'Bilbao', 'Paris', 'Jokin', 'Naroa', 70, 55, '2017-04-29', 77, ''),
(44, 342, 'dasd', 'gregre', 'ghhg', 'gfdgfd', 456, 123, '2017-03-06', 70, ''),
(777, 24, 'China', 'Japon', 'Manuel', 'IÃ±aki', 300, 50, '2017-07-03', 30, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservations`
--

CREATE TABLE `reservations` (
  `res_id` int(4) NOT NULL,
  `date` date NOT NULL,
  `us_id` int(4) NOT NULL,
  `fl_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `email` varchar(50) DEFAULT NULL,
  `isAdmin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `dni`, `name`, `surname`, `birth`, `address`, `phone`, `username`, `passwd`, `email`, `isAdmin`) VALUES
(1, '123456789', 'Eneko', 'Perez', '2017-04-21', 'Calle', 123456789, 'NetShow', '1234', 'zerbait@gmail.com', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`res_id`),
  ADD KEY `id_idx1` (`us_id`),
  ADD KEY `fl_id` (`fl_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dni` (`dni`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `fl_id` FOREIGN KEY (`fl_id`) REFERENCES `flights` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `us_id` FOREIGN KEY (`us_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
