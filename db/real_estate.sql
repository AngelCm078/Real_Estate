-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-10-2020 a las 05:52:30
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `real_estate`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `properties`
--

CREATE TABLE `properties` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `type` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `rooms` int(2) NOT NULL,
  `price` int(11) NOT NULL,
  `area` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELACIONES PARA LA TABLA `properties`:
--   `id_user`
--       `users` -> `id`
--

--
-- Volcado de datos para la tabla `properties`
--

INSERT INTO `properties` (`id`, `title`, `type`, `address`, `rooms`, `price`, `area`, `id_user`) VALUES(3, 'apartacho', 'Room', 'Calle siempre viva 2', 1, 2500, 23, 9);
INSERT INTO `properties` (`id`, `title`, `type`, `address`, `rooms`, `price`, `area`, `id_user`) VALUES(5, 'Casa en el Aire', 'Hostal', 'Titiribi', 3, 560000, 69, 9);
INSERT INTO `properties` (`id`, `title`, `type`, `address`, `rooms`, `price`, `area`, `id_user`) VALUES(6, 'Casa 3', 'House', 'car 54', 4, 785000, 74, 11);
INSERT INTO `properties` (`id`, `title`, `type`, `address`, `rooms`, `price`, `area`, `id_user`) VALUES(7, 'Prueba casa', 'House', 'calle 32 bb', 3, 3200000, 19, 12);
INSERT INTO `properties` (`id`, `title`, `type`, `address`, `rooms`, `price`, `area`, `id_user`) VALUES(12, 'Casa Campestre', 'House', 'car 54', 5, 65000, 52, 10);
INSERT INTO `properties` (`id`, `title`, `type`, `address`, `rooms`, `price`, `area`, `id_user`) VALUES(13, 'Finca ', 'Hostal', 'Santa Elena', 6, 350000, 75, 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `email` varchar(70) NOT NULL,
  `type_id` int(1) NOT NULL DEFAULT 1 COMMENT '1 CC:Cedula, 2 Pas: Pasaporte',
  `identification` varchar(20) NOT NULL,
  `password_user` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELACIONES PARA LA TABLA `users`:
--

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `email`, `type_id`, `identification`, `password_user`) VALUES(9, 'Miguel Angel', 'Cardenas Aguirre', 'anyelo.angel5@gmail.com', 1, '1152444555', '$2y$10$.BqTRH87fya.UJkPC7GZOezWXHNZvAj3Z1HyIRrAdX0Vtgu4k2ntq');
INSERT INTO `users` (`id`, `name`, `lastname`, `email`, `type_id`, `identification`, `password_user`) VALUES(10, 'Alejandra', 'Vasquez', 'ale01@gmail.com', 1, '95582', '$2y$10$KH2NEqrapLA.OBJLa/SXgOyMJa5afxncrfPqbAwGZw0SisOhxNNAy');
INSERT INTO `users` (`id`, `name`, `lastname`, `email`, `type_id`, `identification`, `password_user`) VALUES(11, 'Angel', 'Cardenas', 'angel@correo.es', 1, '52211223', '$2y$10$siUepZWAZD/96bOD.QmJLe.K5HkihVbQJoFeUKx3vCLUK6TX3Htnu');
INSERT INTO `users` (`id`, `name`, `lastname`, `email`, `type_id`, `identification`, `password_user`) VALUES(12, 'Lizz', 'Ateortua', 'lizz@correo.es', 1, '9999999', '$2y$10$ZRVbBSm/0cJ1fwAEWa1uGOa860U3IAK13FdfLDH7bx/yc9oGD98SW');
INSERT INTO `users` (`id`, `name`, `lastname`, `email`, `type_id`, `identification`, `password_user`) VALUES(13, 'Carlos Mario', 'Ateortua Valencia', 'carlosm@hotmail.com', 1, '444665588', '$2y$10$pdnbwRdp4udzpiXh8pnTNuVWt0zAsSoTgaenQsFuPaXFQhplh/dZS');
INSERT INTO `users` (`id`, `name`, `lastname`, `email`, `type_id`, `identification`, `password_user`) VALUES(14, 'Daniel ', 'Pineda ', 'daniel@hdhd.es', 1, '1125466225', '$2y$10$U7DM3XDzybuJpkEVRRiA7uHu3Qaa1ojveubvU/.M2NWhQJkhb8QoG');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_user` (`id_user`) USING BTREE;

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `properties`
--
ALTER TABLE `properties`
  ADD CONSTRAINT ` properties_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
