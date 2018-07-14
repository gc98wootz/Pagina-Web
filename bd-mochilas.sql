-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-07-2018 a las 05:55:41
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd-mochilas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avisos`
--

CREATE TABLE `avisos` (
  `idaviso` int(11) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `precio` float NOT NULL,
  `rutaimagen` varchar(255) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `idusuario` int(11) NOT NULL,
  `idcategoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `avisos`
--

INSERT INTO `avisos` (`idaviso`, `titulo`, `precio`, `rutaimagen`, `stock`, `idusuario`, `idcategoria`) VALUES
(14, 'Adidas', 2, 'img/d7707bcbb46e2e63c3eb34fac6a5c326.jpeg', 200, 7, 2),
(15, 'Senderismo', 250, 'img/571e818be24d8ff26abb0be0997febef.jpeg', 8, 7, 3),
(16, 'Billabong', 150, 'img/3a4da36dd3b80c898cb2885fdaa45da8.jpeg', 20, 11, 3),
(17, 'Adidas', 80, 'img/f254a7cc477d70ca44f1b48875fdfa37.jpeg', 13, 14, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idcategoria` int(11) NOT NULL,
  `nombreCategoria` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idcategoria`, `nombreCategoria`) VALUES
(1, 'Escolar'),
(2, 'Deportiva'),
(3, 'Tecnologica'),
(4, 'Casual');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nombre`, `apellido`, `telefono`, `correo`, `password`) VALUES
(6, 'Elon', 'Musk', '983444211', 'emusk@gmail.com', '1234'),
(7, 'Gonzalo', 'Caira', '91327103', 'gcaira@gmail.com', '123'),
(8, 'Joao', 'Chavez', '980754999', 'joaochavezsalas@gmail.com', '123'),
(9, 'Francisco', 'Carpio', '945135423', 'f@gmail.com', '123'),
(10, 'Fabricio', 'Barrionuevo', '974624512', 'fbarrionuevo@gmail.com', '123'),
(11, 'Jose', 'Carpio', '9761031', 'jc@gmail.com', '123'),
(12, 'Mario', 'Pierola', '97412311', 'mp@gmail.com', '123'),
(13, 'Jose', 'Sanchez', '98125604', 'js@gmail.com', '123'),
(14, 'Lucas', 'Beras', '972313546', 'lb@gmail.com', '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `avisos`
--
ALTER TABLE `avisos`
  ADD PRIMARY KEY (`idaviso`),
  ADD KEY `fk_aviso_usuario_idx` (`idusuario`),
  ADD KEY `fk_aviso_categoria1_idx` (`idcategoria`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idcategoria`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `avisos`
--
ALTER TABLE `avisos`
  MODIFY `idaviso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idcategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `avisos`
--
ALTER TABLE `avisos`
  ADD CONSTRAINT `fk_aviso_categoria1` FOREIGN KEY (`idcategoria`) REFERENCES `categoria` (`idcategoria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_aviso_usuario` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
