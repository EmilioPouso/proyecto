-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 23-05-2024 a las 13:52:05
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pagina_web`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `iniciarsesion`
--

CREATE TABLE `iniciarsesion` (
  `ID` int(11) NOT NULL,
  `email` int(50) NOT NULL,
  `password` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `fecha_de_nacimiento` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `contrasena` varchar(50) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre`, `apellido`, `fecha_de_nacimiento`, `email`, `contrasena`, `ID`) VALUES
('Emilio', 'Pouso', '2000-02-02', 'emilio.s358943@cesurformacion.com', 'PEPE', 6),
('efe', 'efef', '2001-11-11', 'dfdf@gmgkfm.com', 'pepe', 7),
('efe', 'efef', '2001-11-11', 'dfdf@gmgdkfm.com', '3691308f2a4c2f6983f2880d32e29c84', 8),
('Emilio', 'Pouso', '2002-02-23', 'eo.s358943@cesurformacion.com', '7ee40a1e7fbf7c814122afdac05b8433', 9),
('Emilio', 'Pouso', '2005-09-08', 'emilio.s358943@cesurformacion.com', 'f6afa3b07c96f1ebe6064a11d6e39ee6', 10);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `iniciarsesion`
--
ALTER TABLE `iniciarsesion`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `iniciarsesion`
--
ALTER TABLE `iniciarsesion`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
