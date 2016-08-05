-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 05-08-2016 a las 16:34:42
-- Versión del servidor: 5.5.50-0+deb8u1
-- Versión de PHP: 5.6.24-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datospersonales`
--

CREATE TABLE IF NOT EXISTS `datospersonales` (
  `CI` varchar(10) DEFAULT NULL,
  `nombre` varchar(15) DEFAULT NULL,
  `apellido` varchar(20) DEFAULT NULL,
  `edad` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datospersonales`
--

INSERT INTO `datospersonales` (`CI`, `nombre`, `apellido`, `edad`) VALUES
('20309251', 'Asdrubal', 'Lugo', 26),
('22520821', 'Yoselyn', 'Ramirez', 22),
('6452020', 'Sonia', 'Diaz', 52);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Listado_Productos`
--

CREATE TABLE IF NOT EXISTS `Listado_Productos` (
  `IdProducto` int(2) DEFAULT NULL,
  `NombreProducto` varchar(40) DEFAULT NULL,
  `Proveedor` varchar(38) DEFAULT NULL,
  `Categoría` varchar(15) DEFAULT NULL,
  `CantidadPorUnidad` varchar(20) DEFAULT NULL,
  `PrecioUnidad` varchar(10) DEFAULT NULL,
  `UnidadesEnExistencia` int(3) DEFAULT NULL,
  `UnidadesEnPedido` int(3) DEFAULT NULL,
  `NivelNuevoPedido` int(2) DEFAULT NULL,
  `Suspendido` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Listado_Productos`
--

INSERT INTO `Listado_Productos` (`IdProducto`, `NombreProducto`, `Proveedor`, `Categoría`, `CantidadPorUnidad`, `PrecioUnidad`, `UnidadesEnExistencia`, `UnidadesEnPedido`, `NivelNuevoPedido`, `Suspendido`) VALUES
(1, 'Té Dharamsala', 'Exotic Liquids', 'Bebidas', '10 cajas x 20 bolsas', '18,00 €', 39, 0, 10, 0),
(2, 'Cerveza tibetana Barley', 'Exotic Liquids', 'Bebidas', '24 - bot. 12 l', '19,00 €', 17, 40, 25, 0),
(3, 'Sirope de regaliz', 'Exotic Liquids', 'Condimentos', '12 - bot. 550 ml', '10,00 €', 13, 70, 25, 0),
(4, 'Especias Cajun del chef Anton', 'New Orleans Cajun Delights', 'Condimentos', '48 - frascos 6 l', '22,00 €', 53, 0, 0, 0),
(5, 'Mezcla Gumbo del chef Anton', 'New Orleans Cajun Delights', 'Condimentos', '36 cajas', '21,35 €', 0, 0, 0, 1),
(6, 'Mermelada de grosellas de la abuela', 'Grandma Kelly''s Homestead', 'Condimentos', '12 - frascos 8 l', '25,00 €', 120, 0, 25, 0),
(7, 'Peras secas orgánicas del tío Bob', 'Grandma Kelly''s Homestead', 'Frutas/Verduras', '12 - paq. 1 kg', '30,00 €', 15, 0, 10, 0),
(8, 'Salsa de arándanos Northwoods', 'Grandma Kelly''s Homestead', 'Condimentos', '12 - frascos 12 l', '40,00 €', 6, 0, 0, 0),
(9, 'Buey Mishi Kobe', 'Tokyo Traders', 'Carnes', '18 - paq. 500 g', '97,00 €', 29, 0, 0, 1),
(10, 'Pez espada', 'Tokyo Traders', 'Pescado/Marisco', '12 - frascos 200 ml', '31,00 €', 31, 0, 0, 0),
(11, 'Queso Cabrales', 'Cooperativa de Quesos ''Las Cabras''', 'Lácteos', 'paq. 1 kg', '21,00 €', 22, 30, 30, 0),
(12, 'Queso Manchego La Pastora', 'Cooperativa de Quesos ''Las Cabras''', 'Lácteos', '10 - paq. 500 g', '38,00 €', 86, 0, 0, 0),
(13, 'Algas Konbu', 'Mayumi''s', 'Pescado/Marisco', 'caja 2 kg', '6,00 €', 24, 0, 5, 0),
(14, 'Cuajada de judías', 'Mayumi''s', 'Frutas/Verduras', '40 - paq. 100 g', '23,25 €', 35, 0, 0, 0),
(15, 'Salsa de soja baja en sodio', 'Mayumi''s', 'Condimentos', '24 - bot. 250 ml', '15,50 €', 39, 0, 5, 0),
(16, 'Postre de merengue Pavlova', 'Pavlova, Ltd.', 'Repostería', '32 - cajas 500 g', '17,45 €', 29, 0, 10, 0),
(17, 'Cordero Alice Springs', 'Pavlova, Ltd.', 'Carnes', '20 - latas 1 kg', '39,00 €', 0, 0, 0, 1),
(18, 'Langostinos tigre Carnarvon', 'Pavlova, Ltd.', 'Pescado/Marisco', 'paq. 16 kg', '62,50 €', 42, 0, 0, 0),
(19, 'Pastas de té de chocolate', 'Specialty Biscuits, Ltd.', 'Repostería', '10 cajas x 12 piezas', '9,20 €', 25, 0, 5, 0),
(20, 'Mermelada de Sir Rodney''s', 'Specialty Biscuits, Ltd.', 'Repostería', '30 cajas regalo', '81,00 €', 40, 0, 0, 0),
(21, 'Bollos de Sir Rodney''s', 'Specialty Biscuits, Ltd.', 'Repostería', '24 paq. x 4 piezas', '10,00 €', 3, 40, 5, 0),
(22, 'Pan de centeno crujiente estilo Gustaf''s', 'PB Knäckebröd AB', 'Granos/Cereales', '24 - paq. 500 g', '21,00 €', 104, 0, 25, 0),
(23, 'Pan fino', 'PB Knäckebröd AB', 'Granos/Cereales', '12 - paq. 250 g', '9,00 €', 61, 0, 25, 0),
(24, 'Refresco Guaraná Fantástica', 'Refrescos Americanas LTDA', 'Bebidas', '12 - latas 355 ml', '4,50 €', 20, 0, 0, 1),
(25, 'Crema de chocolate y nueces NuNuCa', 'Heli Süßwaren GmbH & Co. KG', 'Repostería', '20 - vasos 450 g', '14,00 €', 76, 0, 30, 0),
(26, 'Ositos de goma Gumbär', 'Heli Süßwaren GmbH & Co. KG', 'Repostería', '100 - bolsas 250 g', '31,23 €', 15, 0, 0, 0),
(27, 'Chocolate Schoggi', 'Heli Süßwaren GmbH & Co. KG', 'Repostería', '100 - piezas 100 g', '43,90 €', 49, 0, 30, 0),
(28, 'Col fermentada Rössle', 'Plutzer Lebensmittelgroßmärkte AG', 'Frutas/Verduras', '25 - latas 825 g', '45,60 €', 26, 0, 0, 1),
(29, 'Salchicha Thüringer', 'Plutzer Lebensmittelgroßmärkte AG', 'Carnes', '50 bolsas x 30 salch', '123,79 €', 0, 0, 0, 1),
(30, 'Arenque blanco del noroeste', 'Nord-Ost-Fisch Handelsgesellschaft mbH', 'Pescado/Marisco', '10 - vasos 200 g', '25,89 €', 10, 0, 15, 0),
(31, 'Queso gorgonzola Telino', 'Formaggi Fortini s.r.l.', 'Lácteos', '12 - paq. 100 g', '12,50 €', 0, 70, 20, 0),
(32, 'Queso Mascarpone Fabioli', 'Formaggi Fortini s.r.l.', 'Lácteos', '24 - paq. 200 g', '32,00 €', 9, 40, 25, 0),
(33, 'Queso de cabra', 'Norske Meierier', 'Lácteos', '500 g', '2,50 €', 112, 0, 20, 0),
(34, 'Cerveza Sasquatch', 'Bigfoot Breweries', 'Bebidas', '24 - bot. 12 l', '14,00 €', 111, 0, 15, 0),
(35, 'Cerveza negra Steeleye', 'Bigfoot Breweries', 'Bebidas', '24 - bot. 12 l', '18,00 €', 20, 0, 15, 0),
(36, 'Escabeche de arenque', 'Svensk Sjöföda AB', 'Pescado/Marisco', '24 - frascos 250 g', '19,00 €', 112, 0, 20, 0),
(37, 'Salmón ahumado Gravad', 'Svensk Sjöföda AB', 'Pescado/Marisco', '12 - paq. 500 g', '26,00 €', 11, 50, 25, 0),
(38, 'Vino Côte de Blaye', 'Aux joyeux ecclésiastiques', 'Bebidas', '12 - bot. 75 cl', '263,50 €', 17, 0, 15, 0),
(39, 'Licor verde Chartreuse', 'Aux joyeux ecclésiastiques', 'Bebidas', '750 cc por bot.', '18,00 €', 69, 0, 5, 0),
(40, 'Carne de cangrejo de Boston', 'New England Seafood Cannery', 'Pescado/Marisco', '24 - latas 4 l', '18,40 €', 123, 0, 30, 0),
(41, 'Crema de almejas estilo Nueva Inglaterra', 'New England Seafood Cannery', 'Pescado/Marisco', '12 - latas 12 l', '9,65 €', 85, 0, 10, 0),
(42, 'Tallarines de Singapur', 'Leka Trading', 'Granos/Cereales', '32 - 1 kg paq.', '14,00 €', 26, 0, 0, 1),
(43, 'Café de Malasia', 'Leka Trading', 'Bebidas', '16 - latas 500 g', '46,00 €', 17, 10, 25, 0),
(44, 'Azúcar negra Malacca', 'Leka Trading', 'Condimentos', '20 - bolsas 2 kg', '19,45 €', 27, 0, 15, 0),
(45, 'Arenque ahumado', 'Lyngbysild', 'Pescado/Marisco', 'paq. 1k', '9,50 €', 5, 70, 15, 0),
(46, 'Arenque salado', 'Lyngbysild', 'Pescado/Marisco', '4 - vasos 450 g', '12,00 €', 95, 0, 0, 0),
(47, 'Galletas Zaanse', 'Zaanse Snoepfabriek', 'Repostería', '10 - cajas 4 l', '9,50 €', 36, 0, 0, 0),
(48, 'Chocolate holandés', 'Zaanse Snoepfabriek', 'Repostería', '10 paq.', '12,75 €', 15, 70, 25, 0),
(49, 'Regaliz', 'Karkki Oy', 'Repostería', '24 - paq. 50 g', '20,00 €', 10, 60, 15, 0),
(50, 'Chocolate blanco', 'Karkki Oy', 'Repostería', '12 - barras 100 g', '16,25 €', 65, 0, 30, 0),
(51, 'Manzanas secas Manjimup', 'G''day, Mate', 'Frutas/Verduras', '50 - paq. 300 g', '53,00 €', 20, 0, 10, 0),
(52, 'Cereales para Filo', 'G''day, Mate', 'Granos/Cereales', '16 - cajas 2 kg', '7,00 €', 38, 0, 25, 0),
(53, 'Empanada de carne', 'G''day, Mate', 'Carnes', '48 porc.', '32,80 €', 0, 0, 0, 1),
(54, 'Empanada de cerdo', 'Ma Maison', 'Carnes', '16 tartas', '7,45 €', 21, 0, 10, 0),
(55, 'Paté chino', 'Ma Maison', 'Carnes', '24 cajas x 2 tartas', '24,00 €', 115, 0, 20, 0),
(56, 'Gnocchi de la abuela Alicia', 'Pasta Buttini s.r.l.', 'Granos/Cereales', '24 - paq. 250 g', '38,00 €', 21, 10, 30, 0),
(57, 'Raviolis Angelo', 'Pasta Buttini s.r.l.', 'Granos/Cereales', '24 - paq. 250 g', '19,50 €', 36, 0, 20, 0),
(58, 'Caracoles de Borgoña', 'Escargots Nouveaux', 'Pescado/Marisco', '24 porc.', '13,25 €', 62, 0, 20, 0),
(59, 'Raclet de queso Courdavault', 'Gai pâturage', 'Lácteos', 'paq. 5 kg', '55,00 €', 79, 0, 0, 0),
(60, 'Camembert Pierrot', 'Gai pâturage', 'Lácteos', '15 - paq. 300 g', '34,00 €', 19, 0, 0, 0),
(61, 'Sirope de arce', 'Forêts d''érables', 'Condimentos', '24 - bot. 500 ml', '28,50 €', 113, 0, 25, 0),
(62, 'Tarta de azúcar', 'Forêts d''érables', 'Repostería', '48 tartas', '49,30 €', 17, 0, 0, 0),
(63, 'Sandwich de vegetales', 'Pavlova, Ltd.', 'Condimentos', '15 - frascos 625 g', '43,90 €', 24, 0, 5, 0),
(64, 'Bollos de pan de Wimmer', 'Plutzer Lebensmittelgroßmärkte AG', 'Granos/Cereales', '20 bolsas x 4 porc.', '33,25 €', 22, 80, 30, 0),
(65, 'Salsa de pimiento picante de Luisiana', 'New Orleans Cajun Delights', 'Condimentos', '32 - bot. 8 l', '21,05 €', 76, 0, 0, 0),
(66, 'Especias picantes de Luisiana', 'New Orleans Cajun Delights', 'Condimentos', '24 - frascos 8 l', '17,00 €', 4, 100, 20, 0),
(67, 'Cerveza Laughing Lumberjack', 'Bigfoot Breweries', 'Bebidas', '24 - bot. 12 l', '14,00 €', 52, 0, 10, 0),
(68, 'Barras de pan de Escocia', 'Specialty Biscuits, Ltd.', 'Repostería', '10 cajas x 8 porc.', '12,50 €', 6, 10, 15, 0),
(69, 'Queso Gudbrandsdals', 'Norske Meierier', 'Lácteos', 'paq. 10 kg', '36,00 €', 26, 0, 15, 0),
(70, 'Cerveza Outback', 'Pavlova, Ltd.', 'Bebidas', '24 - bot. 355 ml', '15,00 €', 15, 10, 30, 0),
(71, 'Crema de queso Fløtemys', 'Norske Meierier', 'Lácteos', '10 - paq. 500 g', '21,50 €', 26, 0, 0, 0),
(72, 'Queso Mozzarella Giovanni', 'Formaggi Fortini s.r.l.', 'Lácteos', '24 - paq. 200 g', '34,80 €', 14, 0, 0, 0),
(73, 'Caviar rojo', 'Svensk Sjöföda AB', 'Pescado/Marisco', '24 - frascos150 g', '15,00 €', 101, 0, 5, 0),
(74, 'Queso de soja Longlife', 'Tokyo Traders', 'Frutas/Verduras', 'paq. 5 kg', '10,00 €', 4, 20, 5, 0),
(75, 'Cerveza Klosterbier Rhönbräu', 'Plutzer Lebensmittelgroßmärkte AG', 'Bebidas', '24 - bot. 0,5 l', '7,75 €', 125, 0, 25, 0),
(76, 'Licor Cloudberry', 'Karkki Oy', 'Bebidas', '500 ml', '18,00 €', 57, 0, 20, 0),
(77, 'Salsa verde original Frankfurter', 'Plutzer Lebensmittelgroßmärkte AG', 'Condimentos', '12 cajas', '13,00 €', 32, 0, 15, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE IF NOT EXISTS `pais` (
  `pais` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`pais`) VALUES
('Venezuela'),
('Canada'),
('Venezuela');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `codigoArticulo` varchar(4) DEFAULT NULL,
  `seccion` varchar(15) DEFAULT NULL,
  `nombreArticulo` varchar(30) DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `importado` tinyint(1) DEFAULT NULL,
  `paisOrigen` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`codigoArticulo`, `seccion`, `nombreArticulo`, `precio`, `fecha`, `importado`, `paisOrigen`) VALUES
('AR01', 'DEPORTES', 'BALON DE BASQUET', 5500, '2016-08-04', 0, 'VENEZUELA'),
('AR02', 'DAMAS', 'VESTIDO', 15900, '2016-08-04', 1, 'CHINA'),
('AR01', 'DEPORTES', 'BALON DE BASQUET', 5500, '2016-08-04', 0, 'VENEZUELA'),
('AR02', 'DAMAS', 'VESTIDO', 15900, '2016-08-04', 1, 'CHINA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `USUARIO_PASS`
--

CREATE TABLE IF NOT EXISTS `USUARIO_PASS` (
`ID` int(11) NOT NULL,
  `USUARIOS` varchar(20) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `USUARIO_PASS`
--

INSERT INTO `USUARIO_PASS` (`ID`, `USUARIOS`, `PASSWORD`) VALUES
(1, 'asdrubal', '123456'),
(2, 'root', 'root');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `USUARIO_PASS`
--
ALTER TABLE `USUARIO_PASS`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `USUARIO_PASS`
--
ALTER TABLE `USUARIO_PASS`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
