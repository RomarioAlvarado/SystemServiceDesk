-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2021 at 07:44 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistema1`
--

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE `categoria` (
  `idCategoria` int(11) NOT NULL,
  `Categoria` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categoria`
--

INSERT INTO `categoria` (`idCategoria`, `Categoria`) VALUES
(1, 'Impresoras'),
(2, 'Red');

-- --------------------------------------------------------

--
-- Table structure for table `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `comentario` text CHARACTER SET latin1 NOT NULL,
  `usuario` int(11) NOT NULL,
  `reply` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `idTickets` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comentarios`
--

INSERT INTO `comentarios` (`id`, `comentario`, `usuario`, `reply`, `fecha`, `idTickets`) VALUES
(2, 'Prueba de seguimiento en el ticket 14', 1, 0, '2021-04-05 11:18:28', 14),
(3, '@romario Prueba dos del mismo seguimiento como respuesta', 1, 2, '2021-04-05 11:59:16', 14),
(4, 'Por lo que se ve toma el primer seguimiento mas no el contenido del ticket por esa misma razón si no hay seguimiento no se visualiza nada.', 1, 0, '2021-04-06 09:43:31', 15),
(7, '@romario prueba 2', 1, 2, '2021-04-06 12:32:57', 14),
(37, '@romario prueba', 1, 2, '0000-00-00 00:00:00', 14),
(38, '@romario Prueba', 1, 2, '0000-00-00 00:00:00', 14),
(39, '@romario Ahorita si', 1, 2, '0000-00-00 00:00:00', 14),
(40, '@romario Si no funciona sos hueco', 1, 2, '0000-00-00 00:00:00', 14),
(41, '@romario Jajajajaajajajajaja', 1, 2, '0000-00-00 00:00:00', 14),
(42, '@romario Prueba', 1, 2, '0000-00-00 00:00:00', 14),
(43, '@romario que pongo aqui', 1, 2, '0000-00-00 00:00:00', 14),
(44, ' Solución', 1, 0, '0000-00-00 00:00:00', 14),
(45, ' Prueba', 1, 0, '0000-00-00 00:00:00', 14),
(46, ' Solución', 1, 0, '0000-00-00 00:00:00', 14),
(47, ' Solución', 1, 0, '0000-00-00 00:00:00', 14),
(48, ' Son las diez', 1, 0, '2021-04-08 06:34:16', 14),
(49, ' Son las diez', 1, 0, '2021-04-08 06:41:22', 14),
(50, ' Son las diez', 1, 0, '2021-04-08 06:42:00', 14),
(51, ' Son las diez', 1, 0, '2021-04-08 06:43:10', 14),
(52, '@romario Este está relacionado con el id 50', 1, 50, '2021-04-08 06:44:10', 14),
(53, ' Prueba del covid', 1, 0, '2021-04-08 06:49:40', 15),
(54, '@romario covidiano', 1, 53, '2021-04-08 06:49:48', 15),
(55, '@romario covid1234', 18, 53, '2021-04-08 06:50:28', 15),
(56, '@brissia no se que poener', 18, 4, '2021-04-08 06:57:03', 15),
(57, ' Prueba 1', 1, 0, '2021-04-08 07:07:21', 16),
(58, '@romario respuesta 1', 18, 57, '2021-04-08 07:08:01', 16);

-- --------------------------------------------------------

--
-- Table structure for table `estados`
--

CREATE TABLE `estados` (
  `idEstado` int(11) NOT NULL,
  `Estado` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `estados`
--

INSERT INTO `estados` (`idEstado`, `Estado`) VALUES
(1, 'Abierto '),
(2, 'En Proceso'),
(3, 'Cerrado');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `idTickets` int(11) NOT NULL,
  `Solicitante` varchar(25) NOT NULL,
  `Fecha` varchar(25) NOT NULL,
  `idCategoria` int(11) NOT NULL,
  `idTipo` int(11) NOT NULL,
  `Descripcion` varchar(50) NOT NULL,
  `Area` varchar(25) NOT NULL,
  `idEstado` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `idComent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`idTickets`, `Solicitante`, `Fecha`, `idCategoria`, `idTipo`, `Descripcion`, `Area`, `idEstado`, `id`, `idComent`) VALUES
(14, 'romario', '2021-04-05', 1, 2, 'Prueba de creacion y reasigancion de tickets', 'cualquiera', 1, 1, 2),
(15, 'romario', '2021-04-06', 2, 2, 'PRUEBA DE SEGUIMEINTO NUMERO 3 DE RELACION DE INTE', 'CARTONES', 1, 1, 4),
(16, 'brissia', '2021-04-08', 1, 1, 'nuevo', 'saber', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tipo`
--

CREATE TABLE `tipo` (
  `idTipo` int(11) NOT NULL,
  `Tipo` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tipo`
--

INSERT INTO `tipo` (`idTipo`, `Tipo`) VALUES
(1, 'Orden de Compra'),
(2, 'Sin Internet');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `codigo` varchar(50) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `puesto` varchar(25) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `contrasena` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `codigo`, `nombre`, `puesto`, `usuario`, `contrasena`) VALUES
(1, 'Tec000001', 'ServiceDesk', 'Administrador', 'romario', '123'),
(18, 'Tec0018', 'Brissia Alejandra', 'Tecnico', 'brissia', '1234'),
(20, 'Tec0020', 'Josue Alvarez', 'Usuario', 'jalvarez', 'jalvarez');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indexes for table `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idTickets` (`idTickets`);

--
-- Indexes for table `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`idEstado`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`idTickets`),
  ADD KEY `idCategoria` (`idCategoria`),
  ADD KEY `idTipo` (`idTipo`),
  ADD KEY `id` (`id`),
  ADD KEY `idEstado` (`idEstado`),
  ADD KEY `idComent` (`idComent`);

--
-- Indexes for table `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`idTipo`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `estados`
--
ALTER TABLE `estados`
  MODIFY `idEstado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `idTickets` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tipo`
--
ALTER TABLE `tipo`
  MODIFY `idTipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`idTickets`) REFERENCES `tickets` (`idTickets`) ON DELETE CASCADE;

--
-- Constraints for table `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `tickets_ibfk_1` FOREIGN KEY (`idTipo`) REFERENCES `tipo` (`idTipo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tickets_ibfk_2` FOREIGN KEY (`idCategoria`) REFERENCES `categoria` (`idCategoria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tickets_ibfk_3` FOREIGN KEY (`id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tickets_ibfk_4` FOREIGN KEY (`idEstado`) REFERENCES `estados` (`idEstado`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
