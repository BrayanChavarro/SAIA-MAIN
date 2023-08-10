-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2023 at 04:36 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4
SET
  SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET
  time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;

/*!40101 SET NAMES utf8mb4 */
;

--
-- Database: `saia`
--
DELIMITER $ $ --
-- Procedures
--
CREATE DEFINER = `root` @`localhost` PROCEDURE `pa_registrar_clientes` (
  IN `documento` VARCHAR(30),
  IN `apellidos` VARCHAR(100),
  IN `nombres` VARCHAR(100),
  IN `email` VARCHAR(80),
  IN `direccion` VARCHAR(50),
  IN `telefono` VARCHAR(25)
) BEGIN
INSERT INTO
  clientes (
    documento,
    apellidos,
    nombres,
    email,
    direccion,
    telefono
  )
VALUES
  (
    documento,
    apellidos,
    nombres,
    email,
    direccion,
    telefono
  );

END $ $ CREATE DEFINER = `root` @`localhost` PROCEDURE `pa_registrar_usuario` (
  IN `documento` VARCHAR(30),
  IN `apellidos` VARCHAR(100),
  IN `nombres` VARCHAR(100),
  IN `email` VARCHAR(80),
  IN `pass` VARCHAR(50),
  IN `telefono` VARCHAR(25),
  IN `foto` LONGBLOB,
  IN `id_rol` INT(10)
) BEGIN
INSERT INTO
  usuarios
VALUES
  (
    documento,
    apellidos,
    nombres,
    email,
    pass,
    telefono,
    foto,
    id_rol
  );

END $ $ DELIMITER;

-- --------------------------------------------------------
--
-- Table structure for table `categorias`
--
CREATE TABLE `categorias` (
  `id` int(10) NOT NULL,
  `Nombre` varchar(50) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_general_ci;

-- --------------------------------------------------------
--
-- Table structure for table `clientes`
--
CREATE TABLE `clientes` (
  `documento` varchar(30) DEFAULT NULL,
  `apellidos` varchar(100) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `email` varchar(150) DEFAULT NULL,
  `direccion` varchar(80) DEFAULT NULL,
  `telefono` varchar(50) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_general_ci;

--
-- Dumping data for table `clientes`
--
INSERT INTO
  `clientes` (
    `documento`,
    `apellidos`,
    `nombres`,
    `email`,
    `direccion`,
    `telefono`
  )
VALUES
  (
    '123456789',
    'Sergio',
    'Leon',
    'leon@gmail.com',
    'carrera 11 - 25 39',
    '3123456859'
  ),
  (
    '1233495699',
    'Sergio',
    'Leon',
    'leon@gmail.com',
    'carrera 11 - 25 39',
    '3123456859'
  );

-- --------------------------------------------------------
--
-- Table structure for table `descripciones`
--
CREATE TABLE `descripciones` (
  `id` int(15) NOT NULL,
  `fecha` datetime NOT NULL,
  `descripcion` varchar(750) NOT NULL,
  `id_orden_servicio` int(10) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_general_ci;

-- --------------------------------------------------------
--
-- Table structure for table `documentos_contrato`
--
CREATE TABLE `documentos_contrato` (
  `id` int(10) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `documento` longblob NOT NULL,
  `fecha` date DEFAULT NULL,
  `documento_usuario` varchar(30) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_general_ci;

-- --------------------------------------------------------
--
-- Table structure for table `estados_del_producto`
--
CREATE TABLE `estados_del_producto` (
  `id` int(10) NOT NULL,
  `Nombre` varchar(50) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_general_ci;

-- --------------------------------------------------------
--
-- Table structure for table `facturas_de_compra`
--
CREATE TABLE `facturas_de_compra` (
  `codigo_factura` varchar(15) NOT NULL,
  `fecha` date NOT NULL,
  `factura` longblob NOT NULL,
  `Valor` double NOT NULL,
  `nit_proveedor` varchar(50) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_general_ci;

-- --------------------------------------------------------
--
-- Table structure for table `lista_productos_pedidos`
--
CREATE TABLE `lista_productos_pedidos` (
  `codigo_pedido` varchar(10) DEFAULT NULL,
  `codigo_producto` varchar(10) DEFAULT NULL,
  `cantidad_productos` int(10) DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_general_ci;

-- --------------------------------------------------------
--
-- Table structure for table `ordenes_de_servicio`
--
CREATE TABLE `ordenes_de_servicio` (
  `id` int(10) NOT NULL,
  `fecha_entrada` date NOT NULL,
  `fecha_salida` date DEFAULT NULL,
  `diagnostico` varchar(250) NOT NULL,
  `documento_usuario` varchar(30) NOT NULL,
  `placa_vehiculo` varchar(10) NOT NULL,
  `id_servicio` int(15) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_general_ci;

-- --------------------------------------------------------
--
-- Table structure for table `pedidos`
--
CREATE TABLE `pedidos` (
  `numero_pedido` varchar(10) NOT NULL,
  `fecha_pedido` date NOT NULL,
  `total_si` decimal(10, 2) NOT NULL,
  `iva_pedido` decimal(10, 2) DEFAULT NULL,
  `total_ci` decimal(10, 2) NOT NULL,
  `documento_cliente` varchar(30) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_general_ci;

-- --------------------------------------------------------
--
-- Table structure for table `productos`
--
CREATE TABLE `productos` (
  `codigo` varchar(10) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `marca` varchar(100) DEFAULT NULL,
  `referencia` varchar(50) NOT NULL,
  `tipo` varchar(80) DEFAULT NULL,
  `numero_factura` varchar(15) NOT NULL,
  `id_estado_producto` int(10) NOT NULL,
  `id_categoria` int(10) NOT NULL,
  `documento_usuario` varchar(30) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_general_ci;

-- --------------------------------------------------------
--
-- Table structure for table `proveedores`
--
CREATE TABLE `proveedores` (
  `nit` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `direccion` varchar(80) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `telefono` varchar(50) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_general_ci;

-- --------------------------------------------------------
--
-- Table structure for table `roles`
--
CREATE TABLE `roles` (
  `id` int(10) NOT NULL,
  `Nombre` varchar(25) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_general_ci;

--
-- Dumping data for table `roles`
--
INSERT INTO
  `roles` (`id`, `Nombre`)
VALUES
  (1, 'Admin');

-- --------------------------------------------------------
--
-- Table structure for table `servicios`
--
CREATE TABLE `servicios` (
  `id` int(15) NOT NULL,
  `Nombre` varchar(80) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_general_ci;

-- --------------------------------------------------------
--
-- Table structure for table `usuarios`
--
CREATE TABLE `usuarios` (
  `documento` varchar(30) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `email` varchar(80) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `telefono` varchar(25) DEFAULT NULL,
  `foto` longblob DEFAULT NULL,
  `id_rol` int(10) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_general_ci;

--
-- Dumping data for table `usuarios`
--
INSERT INTO
  `usuarios` (
    `documento`,
    `apellidos`,
    `nombres`,
    `email`,
    `pass`,
    `telefono`,
    `foto`,
    `id_rol`
  )
VALUES
  (
    '1233495699',
    'Chavarro',
    'Brayan',
    'brayantrabajo.21@gmail.com',
    'brayan12345',
    '3224286486',
    '',
    1
  ),
  (
    '123456789',
    'Leon',
    'Sergio',
    'sergio@gmail.com',
    'sergio12345',
    '3134256685',
    '',
    1
  ),
  (
    '987654123',
    'Limas',
    'Sergio',
    'limas@gmail.com',
    'limas12345',
    '3125867894',
    '',
    1
  );

-- --------------------------------------------------------
--
-- Table structure for table `vehiculos`
--
CREATE TABLE `vehiculos` (
  `placa` varchar(15) NOT NULL,
  `marca` varchar(25) DEFAULT NULL,
  `modelo` varchar(50) DEFAULT NULL,
  `tipo` varchar(50) DEFAULT NULL,
  `documento_cliente` varchar(30) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_general_ci;

-- --------------------------------------------------------
--
-- Stand-in structure for view `vw_clientes`
-- (See below for the actual view)
--
CREATE TABLE `vw_clientes` (
  `documento` varchar(30),
  `apellidos` varchar(100),
  `nombres` varchar(100),
  `email` varchar(150),
  `direccion` varchar(80),
  `Telefono` varchar(50)
);

-- --------------------------------------------------------
--
-- Stand-in structure for view `vw_usuarios`
-- (See below for the actual view)
--
CREATE TABLE `vw_usuarios` (
  `documento` varchar(30),
  `nombres` varchar(100),
  `apellidos` varchar(100),
  `email` varchar(80)
);

-- --------------------------------------------------------
--
-- Structure for view `vw_clientes`
--
DROP TABLE IF EXISTS `vw_clientes`;

CREATE ALGORITHM = UNDEFINED DEFINER = `root` @`localhost` SQL SECURITY DEFINER VIEW `vw_clientes` AS
SELECT
  `clientes`.`documento` AS `documento`,
  `clientes`.`apellidos` AS `apellidos`,
  `clientes`.`nombres` AS `nombres`,
  `clientes`.`email` AS `email`,
  `clientes`.`direccion` AS `direccion`,
  `clientes`.`telefono` AS `Telefono`
FROM
  `clientes`;

-- --------------------------------------------------------
--
-- Structure for view `vw_usuarios`
--
DROP TABLE IF EXISTS `vw_usuarios`;

CREATE ALGORITHM = UNDEFINED DEFINER = `root` @`localhost` SQL SECURITY DEFINER VIEW `vw_usuarios` AS
SELECT
  `usuarios`.`documento` AS `documento`,
  `usuarios`.`nombres` AS `nombres`,
  `usuarios`.`apellidos` AS `apellidos`,
  `usuarios`.`email` AS `email`
FROM
  `usuarios`;

--
-- Indexes for dumped tables
--
--
-- Indexes for table `categorias`
--
ALTER TABLE
  `categorias`
ADD
  PRIMARY KEY (`id`);

--
-- Indexes for table `descripciones`
--
ALTER TABLE
  `descripciones`
ADD
  PRIMARY KEY (`id`),
ADD
  KEY `ind_orden_servicio_descripcion` (`id_orden_servicio`);

--
-- Indexes for table `documentos_contrato`
--
ALTER TABLE
  `documentos_contrato`
ADD
  PRIMARY KEY (`id`),
ADD
  KEY `ind_usuarios_documentos_contrato` (`documento_usuario`);

--
-- Indexes for table `estados_del_producto`
--
ALTER TABLE
  `estados_del_producto`
ADD
  PRIMARY KEY (`id`);

--
-- Indexes for table `facturas_de_compra`
--
ALTER TABLE
  `facturas_de_compra`
ADD
  PRIMARY KEY (`codigo_factura`),
ADD
  KEY `ind_proveedores_facturas_compra` (`nit_proveedor`);

--
-- Indexes for table `lista_productos_pedidos`
--
ALTER TABLE
  `lista_productos_pedidos`
ADD
  KEY `ind_lista_productos_pedidos_pedidos` (`codigo_pedido`),
ADD
  KEY `ind_lista_productos_pedidos_productos` (`codigo_producto`);

--
-- Indexes for table `ordenes_de_servicio`
--
ALTER TABLE
  `ordenes_de_servicio`
ADD
  PRIMARY KEY (`id`),
ADD
  KEY `ind_usuarios_orden_servicio` (`documento_usuario`),
ADD
  KEY `ind_vechiculos_orden_servicio` (`placa_vehiculo`),
ADD
  KEY `servicios_ind_ordenes_servicio` (`id_servicio`);

--
-- Indexes for table `pedidos`
--
ALTER TABLE
  `pedidos`
ADD
  PRIMARY KEY (`numero_pedido`),
ADD
  KEY `ind_clientes_pedidos` (`documento_cliente`);

--
-- Indexes for table `productos`
--
ALTER TABLE
  `productos`
ADD
  PRIMARY KEY (`codigo`),
ADD
  KEY `ind_facturas_compra_productos` (`numero_factura`),
ADD
  KEY `ind_estado_producto_productos` (`id_estado_producto`),
ADD
  KEY `ind_categorias_productos` (`id_categoria`),
ADD
  KEY `ind_usuarios_productos` (`documento_usuario`);

--
-- Indexes for table `proveedores`
--
ALTER TABLE
  `proveedores`
ADD
  PRIMARY KEY (`nit`);

--
-- Indexes for table `roles`
--
ALTER TABLE
  `roles`
ADD
  PRIMARY KEY (`id`);

--
-- Indexes for table `servicios`
--
ALTER TABLE
  `servicios`
ADD
  PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE
  `usuarios`
ADD
  PRIMARY KEY (`documento`),
ADD
  KEY `ind_roles_usuarios` (`id_rol`);

--
-- Indexes for table `vehiculos`
--
ALTER TABLE
  `vehiculos`
ADD
  PRIMARY KEY (`placa`),
ADD
  KEY `ind_clientes_vehiculos` (`documento_cliente`);

--
-- AUTO_INCREMENT for dumped tables
--
--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE
  `categorias`
MODIFY
  `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `descripciones`
--
ALTER TABLE
  `descripciones`
MODIFY
  `id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `documentos_contrato`
--
ALTER TABLE
  `documentos_contrato`
MODIFY
  `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `estados_del_producto`
--
ALTER TABLE
  `estados_del_producto`
MODIFY
  `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ordenes_de_servicio`
--
ALTER TABLE
  `ordenes_de_servicio`
MODIFY
  `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE
  `roles`
MODIFY
  `id` int(10) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 2;

--
-- AUTO_INCREMENT for table `servicios`
--
ALTER TABLE
  `servicios`
MODIFY
  `id` int(15) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--
--
-- Constraints for table `descripciones`
--
ALTER TABLE
  `descripciones`
ADD
  CONSTRAINT `fk_ordenes_servicio_descripciones` FOREIGN KEY (`id_orden_servicio`) REFERENCES `ordenes_de_servicio` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `documentos_contrato`
--
ALTER TABLE
  `documentos_contrato`
ADD
  CONSTRAINT `fk_usuarios_documentos_contraro` FOREIGN KEY (`documento_usuario`) REFERENCES `usuarios` (`documento`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `facturas_de_compra`
--
ALTER TABLE
  `facturas_de_compra`
ADD
  CONSTRAINT `fk_proveedores_facturas_compra` FOREIGN KEY (`nit_proveedor`) REFERENCES `proveedores` (`nit`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lista_productos_pedidos`
--
ALTER TABLE
  `lista_productos_pedidos`
ADD
  CONSTRAINT `fk_lista_productos_pedidos_pedidos` FOREIGN KEY (`codigo_pedido`) REFERENCES `pedidos` (`numero_pedido`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD
  CONSTRAINT `fk_lista_productos_pedidos_productos` FOREIGN KEY (`codigo_producto`) REFERENCES `productos` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ordenes_de_servicio`
--
ALTER TABLE
  `ordenes_de_servicio`
ADD
  CONSTRAINT `fk_servicios_ordenes_servicio` FOREIGN KEY (`id_servicio`) REFERENCES `servicios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD
  CONSTRAINT `fk_usuarios_ordenes_servicio` FOREIGN KEY (`documento_usuario`) REFERENCES `usuarios` (`documento`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD
  CONSTRAINT `fk_vehiculos_ordenes_servicio` FOREIGN KEY (`placa_vehiculo`) REFERENCES `vehiculos` (`placa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pedidos`
--
ALTER TABLE
  `pedidos`
ADD
  CONSTRAINT `fk_clientes_pedidos` FOREIGN KEY (`documento_cliente`) REFERENCES `clientes` (`documento`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `productos`
--
ALTER TABLE
  `productos`
ADD
  CONSTRAINT `fk_categorias_productos` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD
  CONSTRAINT `fk_estados_producto_productos` FOREIGN KEY (`id_estado_producto`) REFERENCES `estados_del_producto` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD
  CONSTRAINT `fk_facturas_compra_productos` FOREIGN KEY (`numero_factura`) REFERENCES `facturas_de_compra` (`codigo_factura`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD
  CONSTRAINT `fk_usuarios_productos` FOREIGN KEY (`documento_usuario`) REFERENCES `usuarios` (`documento`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `usuarios`
--
ALTER TABLE
  `usuarios`
ADD
  CONSTRAINT `fk_roles_usuarios` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `vehiculos`
--
ALTER TABLE
  `vehiculos`
ADD
  CONSTRAINT `fk_clientes_vehiculos` FOREIGN KEY (`documento_cliente`) REFERENCES `clientes` (`documento`) ON DELETE CASCADE ON UPDATE CASCADE;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;