-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-08-2024 a las 04:24:41
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
-- Base de datos: `bongiovanni_i`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--
-- Creación: 16-07-2024 a las 13:43:27
-- Última actualización: 16-07-2024 a las 13:45:15
--

CREATE TABLE `perfiles` (
  `id_perfil` int(11) NOT NULL,
  `descripción` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `perfiles`
--

INSERT INTO `perfiles` (`id_perfil`, `descripción`) VALUES
(1, 'admin'),
(2, 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--
-- Creación: 16-07-2024 a las 13:50:09
-- Última actualización: 09-08-2024 a las 11:26:23
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `repass` varchar(100) NOT NULL,
  `perfil_id` int(11) NOT NULL DEFAULT 2,
  `baja` varchar(2) NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `usuario`, `email`, `pass`, `repass`, `perfil_id`, `baja`) VALUES
(1, 'Iara ', 'Bongiovanni', 'bongio25', 'bongiovanni25@gmail.com', '$2y$10$gjifEHhf2vENofWszWoba.RhRN2c8d3ic.66BniiWtbEHGotDh6Iu', '$2y$10$15HJHZcsvaQ9.wfZnbKbpOKb4wO2VUy4eF5Kz6ds6GN5GhjlDS7yq', 2, 'NO'),
(2, 'Lara', 'Romero', 'laraRomero', 'laraRomero@gmail.com', '$2y$10$9vShMfD5G5LzUgw7lNom0.dP01YdyASVfYaDTyWeld9DXznJ9E3Hq', '$2y$10$yOS5xxJQjM53aUh60ndOkuQtypWu8pUaG7kXyhP32xcGbGjeqik9K', 2, 'NO'),
(3, 'Lautaro', 'Romero', 'laurato30', 'lautaroRomero@gmail.com', '$2y$10$R5LIxQBVqbch9BX.WNwI6e8KvZSlcchCd7CkgzQpXzfqQhEbzKuT.', '$2y$10$oJiCkIpt0istFBBvPzCl9.wTg6UF/Ckmp0YrtwdGaFxEoHZoGSEHS', 2, 'NO'),
(4, 'tamara', 'rodriguez', 'tamii23', 'tamaraRodriguez@gmail.com', '$2y$10$b84bzdieXUceiO1k79VVGOni7bDfBLXAmQJoL.YuZVtkdsqFKq73y', '$2y$10$RJnRPQtHoobW8JeJ6oNSYuinZcjojbJhkwZPj.LBN0np7iAIyjQ62', 2, 'NO'),
(5, 'logan', 'americano', 'logan12', 'loganAmeri@gmail.com', '$2y$10$MxhDdkFdDhbnR3A/SSnMiOpdtkf4LdBnfeDxvm7dZww0TF5evIig6', '$2y$10$k0CFXD6IwTz3Db8iuE/nTuTmuSQcm7JsJuh8gcYYUWkzQhvasdpyG', 2, 'NO'),
(6, 'maria', 'romero', 'mariii', 'mariaromero@gmail.com', '$2y$10$qtfCuS2/6v4Dhgx/MUXhRuelIJ8CCorsPqJWF/Utkh7m8JV0BnQVK', '$2y$10$qZeMhzpsmbNx35WllgHog.UZkQEcd.0xSxVdVYGrHDyAI8KESXH1y', 2, 'NO'),
(7, 'admin', 'admin', 'admin', 'admin12345@gmail.com', '$2y$10$YFCzMdghuzbNjaBsLSQTC.1aDolbGEdYmCtpa6XpAyvaPCCEs3Xte', '$2y$10$vIaiVPJtXX0DuWA3NPr9OOuiTLKzBfKhWOTzTOJFVuFbdAM.P85Wu', 1, 'NO'),
(8, 'iarita', 'bongio', 'iarabongio', 'iarabongio123@gmail.com', '$2y$10$3MbXYaHtFsWxk19xGlaetu5erMRVcb2XDaItKdCuvUeZRob/ZR6fe', '$2y$10$zahe262X0Tgd33kD3iyGouJaBnAR9mUkEV1NttlooyrzCzMle.RCK', 2, 'NO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  ADD PRIMARY KEY (`id_perfil`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  MODIFY `id_perfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
