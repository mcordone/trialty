-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 05-06-2017 a las 19:36:45
-- Versión del servidor: 5.5.54-cll
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `baynaodo_trialty`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuracion`
--

CREATE TABLE `configuracion` (
  `id` int(11) NOT NULL,
  `facebook` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `google` varchar(255) CHARACTER SET latin1 NOT NULL,
  `pinterest` varchar(255) CHARACTER SET latin1 NOT NULL,
  `linkedin` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `youtube` varchar(255) CHARACTER SET latin1 NOT NULL,
  `contacto` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `telefono` varchar(100) CHARACTER SET latin1 NOT NULL,
  `sugerencias` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `moneda_us` float DEFAULT NULL,
  `moneda_eur` float NOT NULL,
  `texto_busqueda` text COLLATE latin1_general_ci NOT NULL,
  `texto_contacto` text COLLATE latin1_general_ci NOT NULL,
  `texto_publicidad` text COLLATE latin1_general_ci NOT NULL,
  `personal` text COLLATE latin1_general_ci NOT NULL,
  `business` text COLLATE latin1_general_ci NOT NULL,
  `premium` text COLLATE latin1_general_ci NOT NULL,
  `precio_personal` varchar(4) COLLATE latin1_general_ci NOT NULL,
  `precio_business` varchar(4) COLLATE latin1_general_ci NOT NULL,
  `precio_premium` varchar(4) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Volcado de datos para la tabla `configuracion`
--

INSERT INTO `configuracion` (`id`, `facebook`, `twitter`, `instagram`, `google`, `pinterest`, `linkedin`, `youtube`, `contacto`, `telefono`, `sugerencias`, `moneda_us`, `moneda_eur`, `texto_busqueda`, `texto_contacto`, `texto_publicidad`, `personal`, `business`, `premium`, `precio_personal`, `precio_business`, `precio_premium`) VALUES
(1, 'http://facebook.com/trialty', 'https://mobile.twitter.com/Trialty1', 'http://instagram.com/trialty.bienesraices', 'http://google.com/trialty', 'http://pinterest.com/trialty', 'http://linkedin.com/trialty', 'http://pinterest.com/trialty', 'trialty1@gmail.com', '(809) 643 5112', '', 47.2, 52.5, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'No support<br>No update<br>1 user acces<br>32 MB bandwidth<br>1 user only<br>No Security', 'No support<br>No update<br>1 user acces<br>32 MB bandwidth<br>1 user only<br>No Security', 'No support<br>No update<br>1 user acces<br>32 MB bandwidth<br>1 user only<br>No Security', '10', '20', '30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `editor`
--

CREATE TABLE `editor` (
  `id` int(11) NOT NULL,
  `author` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `text` text CHARACTER SET latin1 COLLATE latin1_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `editor`
--

INSERT INTO `editor` (`id`, `author`, `text`) VALUES
(1, 'Nairoby  Beato', '<h2>NUESTRA HISTORIA</h2>\r\n<p>A los 16 A&ntilde;os, Valeriano Rafael Monestina llega a Santo Domingo, Rep. Dom. el d&iacute;a 3 de Diciembre en 1963 y empieza a trabajar en uno de los pocos supermercados de entonces. En esos a&ntilde;os esta industria empieza a desarrollarse y Rafael tiene la oportunidad de ser uno de los actores principales en estos cambios. Despu&eacute;s de haber ocupado posiciones claves por m&aacute;s de 25 a&ntilde;os en los supermercados m&aacute;s importantes del momento, decide empezar su propio negocio.</p>\r\n<p>En 1979, en compa&ntilde;a de su esposa crea uno de los supermecados de mayor &eacute;xito del pa&iacute;s. Iniciando con una estrategia agresiva de mercadeo no utilizada hasta entonces, que combinaba precios bajos, horario extendido y promociones constantes.</p>\r\n<p>Para empezar la primera tienda, la familia Monestina toma control total de Bemosa, una importadora que ten&iacute;an en sociedad con la familia Betances, y transforma lo que anteriormente era el almac&eacute;n de Bemosa en el primer supermercado trialty.</p>\r\n<p>trialty cala en el gusto del consumidor y se convierte en un rotundo &eacute;xito excediendo todas las expectativas y convirti&eacute;ndolos en el supermercado con mayor venta por metro cuadrado del pa&iacute;s. Hoy trialty gracias a la preferencia de los clientes cuenta con ocho supermercados, 7 en Santo Domingo y 1 en Santiago.</p>\r\n<p><br /> <strong>trialty Churchill:</strong> Ubicado en la Ave. Winston Churchill # 1452 que inicia el 29 de abril del 1998.<br /><br /> <strong>trialty San Vicente:</strong> Ubicado en la Ave. San Vicente de Paul # 114, inicia el 31 de Octubre del 1998.<br /><br /> <strong>trialty San Isidro:</strong> Ubicado en la plaza Coral Mall de la autopista de San Isidro inicia el 10 de Octubre del 2002.<br /><br /> <strong>trialty Enriquillo:</strong> Ubicado en la Ave. Enriquillo esq. Calle Cibao Este, en los Cacicazgos, inicia el 23 de Julio del 2006.<br /><br /> <strong>trialty N&uacute;&ntilde;ez de C&aacute;ceres:</strong> ubicado en la avenida N&uacute;&ntilde;ez de C&aacute;ceres esquina Gustavo Mej&iacute;a Ricart, Las Praderas, inicia el 1ero. de Octubre 2011.<br /><br /> <strong>trialty Santiago:</strong> Ave. Salvador Estrella Sadhal&aacute; esquina Ave. Rep&uacute;blica de Argentina, inicia el 12 de Noviembre 2012.<br /><br /> <strong>trialty Rep&uacute;blica de Colombia:</strong> Ave. Rep&uacute;blica de Colombia No.69 Arroyo Hondo, Inicia el 13 de Noviembre 2015.<br /><br /> <strong>trialty Independencia:</strong> Ave. Independencia Km.9 1/2, Buenos Aires del Mirador, Inicia el 4 de Marzo 2016.<br /><br /></p>\r\n<h2>NUESTRA MISION</h2>\r\n<p>Ser la mejor soluci&oacute;n para el consumidor que busca el mejor producto a un precio consciente y en un tiempo prudente.</p>\r\n<p>&nbsp;</p>\r\n<h2>NUESTRA VISION</h2>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li><strong>1-) Concentr&aacute;ndonos en venta al detalle de comestibles y productos de consumo masivo, sin distraernos con otros tipos de productos o de negocios.</strong><br /> Somos la &uacute;nica cadena de venta al detalle dedicada exclusivamente al &aacute;rea de supermercado y somos la que tiene el equipo humano m&aacute;s experimentado.</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li><strong> 2-) Ofreciendo un surtido eficiente de productos.</strong><br /> Tenemos una preelecci&oacute;n sabia de productos no repetitivos que entendemos son las mejores opciones, agiliz&aacute;ndole la toma de decisi&oacute;n a nuestro cliente y ahorr&aacute;ndole tiempo y dinero.<br /> Manejando excelentes relaciones con nuestros suplidores para minimizar los faltantes. Prestando atenci&oacute;n a nuestros clientes para saber cuales son los productos que ellos necesitan.</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li><strong> 3-) Ofreciendo espacios adecuados en nuestros establecimientos.</strong><br /> Tener un surtido eficiente nos ayuda ha tener tiendas con el espacio necesario. Lo suficientemente amplias para que nuestros clientes compren con comodidad pero no tan grandes que pierdan el tiempo transit&aacute;ndolas. Nuestras tiendas son bien iluminadas, modernas, con un ambiente agradable, limpias y seguras.<br /> Nuestros clientes no quieren tiendas lujosas sino p&aacute;cticas, por eso no gastamos en lujos ni los cobramos en el precio de nuestros productos.</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li><strong>4-) Ubicar establecimientos en lugares estrat&eacute;gicos.</strong> <br /> No escatimamos en las mejores ubicaciones, sabemos que la comodidad de acceso y el tiempo son clave para nuestros clientes. Adem&aacute;s tener tiendas no tan grandes y contar con un centro distribuci&oacute;n nos permite ubicarnos en espacios muy c&eacute;ntricos y de f&aacute;cil acceso.</li>\r\n</ul>\r\n<p>&nbsp;</p>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE `historial` (
  `id` int(11) NOT NULL,
  `actividad` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `usuario` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `historial`
--

INSERT INTO `historial` (`id`, `actividad`, `usuario`, `fecha`) VALUES
(1, 'Propiedad Creado PRUEBA', 'Nairoby  Beato', '2016-10-20'),
(2, 'Sector Creado DISTRITO NACIONAL', 'Pedro  Cordones', '2016-10-21'),
(3, 'Sector Creado SANTO DOMINGO', 'Pedro  Cordones', '2016-10-21'),
(4, 'Sector Creado LA ALTAGRACIA', 'Pedro  Cordones', '2016-10-21'),
(5, 'Sector Creado SANTO DOMINGO ESTE', 'Pedro  Cordones', '2016-10-21'),
(6, 'Sector Creado AZUA', 'Pedro  Cordones', '2016-10-21'),
(7, 'Sector Creado BAORUCO', 'Pedro  Cordones', '2016-10-21'),
(8, 'Sector Creado BARAHONA', 'Pedro  Cordones', '2016-10-21'),
(9, 'Sector Creado DAJABON', 'Pedro  Cordones', '2016-10-21'),
(10, 'Sector Creado EL SEIBO', 'Pedro  Cordones', '2016-10-21'),
(11, 'Sector Creado ELIAS PIÑA', 'Pedro  Cordones', '2016-10-21'),
(12, 'Sector Creado ESPAILLAT', 'Pedro  Cordones', '2016-10-21'),
(13, 'Sector Creado HATO MAYOR', 'Pedro  Cordones', '2016-10-21'),
(14, 'Sector Creado HERMATAS MIRABAL', 'Pedro  Cordones', '2016-10-21'),
(15, 'Sector Creado HERMANAS MIRABAL', 'Pedro  Cordones', '2016-10-21'),
(16, 'Sector Creado INDEPENDENCIA', 'Pedro  Cordones', '2016-10-21'),
(17, 'Sector Creado LA ROMANA', 'Pedro  Cordones', '2016-10-21'),
(18, 'Sector Creado LA VEGA', 'Pedro  Cordones', '2016-10-21'),
(19, 'Sector Creado MARIA TRINIDAD SANCHEZ', 'Pedro  Cordones', '2016-10-21'),
(20, 'Sector Creado MONSEÑOR NOUEL', 'Pedro  Cordones', '2016-10-21'),
(21, 'Sector Creado MONTE CRISTI', 'Pedro  Cordones', '2016-10-21'),
(22, 'Sector Creado MONTE PLATA', 'Pedro  Cordones', '2016-10-21'),
(23, 'Sector Creado PEDERNALES', 'Pedro  Cordones', '2016-10-21'),
(24, 'Sector Creado PEDERNALES', 'Pedro  Cordones', '2016-10-21'),
(25, 'Sector Creado PERAVIA', 'Pedro  Cordones', '2016-10-21'),
(26, 'Sector Creado PUERTO PLATA', 'Pedro  Cordones', '2016-10-21'),
(27, 'Sector Creado SAMANA', 'Pedro  Cordones', '2016-10-21'),
(28, 'Sector Creado SAN CRISTOBAL', 'Pedro  Cordones', '2016-10-21'),
(29, 'Sector Creado SAN JOSÉ DE OCOA', 'Pedro  Cordones', '2016-10-21'),
(30, 'Sector Creado SAN JUAN', 'Pedro  Cordones', '2016-10-21'),
(31, 'Sector Creado SAN PEDRO DE MACORIS', 'Pedro  Cordones', '2016-10-21'),
(32, 'Sector Creado SANCHEZ RAMIREZ', 'Pedro  Cordones', '2016-10-21'),
(33, 'Sector Creado SANTIAGO RODRIGUEZ', 'Pedro  Cordones', '2016-10-21'),
(34, 'Sector Creado SANTIAGO', 'Pedro  Cordones', '2016-10-21'),
(35, 'Sector Creado VALVERDE', 'Pedro  Cordones', '2016-10-21'),
(36, 'Sector Creado EL MILLON', 'Pedro  Cordones', '2016-10-21'),
(37, 'Propiedad Creado APARTAMENTO ALQUILER PIANTINI', 'Pedro  Cordones', '2016-10-21'),
(38, 'Sector Creado BAHORUCO', 'Pedro  Cordones', '2016-10-22'),
(39, 'Sector Creado LOS ALCARRIZOS', 'Nairoby  Beato', '2016-11-01'),
(40, 'Sector Creado LOS ALCARRIZOS', 'Nairoby  Beato', '2016-11-01'),
(41, 'Sector Creado LOS ALCARRIZOS', 'Nairoby  Beato', '2016-11-01'),
(42, 'Sector Creado LOS ALCARRIZOS', 'Nairoby  Beato', '2016-11-01'),
(43, 'Sector Actualizado EL MILLON', 'Nairoby  Beato', '2016-11-01'),
(44, 'Sector Actualizado EL MILLON', 'Nairoby  Beato', '2016-11-01'),
(45, 'Sector Actualizado EL MILLON', 'Nairoby  Beato', '2016-11-01'),
(46, 'Sector Actualizado EL MILLON', 'Nairoby  Beato', '2016-11-01'),
(47, 'Provincia Actualizada AZUAS', 'Nairoby  Beato', '2016-11-01'),
(48, 'Provincia Actualizada AZUA', 'Nairoby  Beato', '2016-11-01'),
(49, 'Usuario Creado Miguel', 'Pedro  Cordones', '2016-11-02'),
(50, 'Configuracion Actualizada', 'Nairoby  Beato', '2016-11-02'),
(51, 'Configuracion Actualizada', 'Nairoby  Beato', '2016-11-02'),
(52, 'Propiedad Creado nombre', 'Nairoby  Beato', '2016-11-02'),
(53, 'Foto agregada a Propiedad nombre', 'Nairoby  Beato', '2016-11-02'),
(54, 'Foto de Propiedad nombre Borrada', 'Nairoby  Beato', '2016-11-02'),
(55, 'Sector Creado EL MILLON', 'Pedro  Cordones', '2016-11-03'),
(56, 'Sector Creado PIANTINI', 'Pedro  Cordones', '2016-11-03'),
(57, 'Sector Creado BELLA VISTA', 'Pedro  Cordones', '2016-11-03'),
(58, 'Sector Creado EVARISTO MORALES', 'Pedro  Cordones', '2016-11-03'),
(59, 'Sector Creado NACO', 'Pedro  Cordones', '2016-11-03'),
(60, 'Sector Creado SERRALLES', 'Pedro  Cordones', '2016-11-03'),
(61, 'Sector Creado LA ESPERILLA', 'Pedro  Cordones', '2016-11-03'),
(62, 'Sector Creado MIRADOROSARIO NORTE', 'Pedro  Cordones', '2016-11-03'),
(63, 'Configuracion Actualizada', 'Pedro  Cordones', '2016-11-03'),
(64, 'Sector Actualizado MIRADOR NORTE', 'Pedro  Cordones', '2016-11-03'),
(65, 'Sector Creado Bella Vista', 'Pedro  Cordones', '2016-11-15'),
(66, 'Sector Creado Los Prados', 'Pedro  Cordones', '2016-11-15'),
(67, 'Sector Creado Ensanche Quisqueya', 'Pedro  Cordones', '2016-11-15'),
(68, 'Foto agregada a Propiedad APARTAMENTO ALQUILER PIANTINI', 'Pedro  Cordones', '2016-11-15'),
(69, 'Foto de Propiedad APARTAMENTO ALQUILER PIANTINI Borrada', 'Pedro  Cordones', '2016-11-16'),
(70, 'Foto agregada a Propiedad APARTAMENTO ALQUILER PIANTINI', 'Pedro  Cordones', '2016-11-16'),
(71, 'Configuracion Actualizada', 'Nairoby  Beato', '2016-11-18'),
(72, 'Propiedad Creado Prueba', 'Nairoby  Beato', '2016-11-18'),
(73, 'Propiedad Prueba Borrada Completa', 'Nairoby  Beato', '2016-11-18'),
(74, 'Propiedad Prueba Borrada Completa', 'Nairoby  Beato', '2016-11-18'),
(75, 'Propiedad nombre Borrada Completa', 'Nairoby  Beato', '2016-11-18'),
(76, 'Propiedad APARTAMENTO ALQUILER PIANTINI Publicado', 'Nairoby  Beato', '2016-11-18'),
(77, 'Propiedad APARTAMENTO ALQUILER PIANTINI Despublicado', 'Nairoby  Beato', '2016-11-18'),
(78, 'Configuracion Actualizada', 'Pedro  Cordones', '2016-11-19'),
(79, 'Sector Actualizado El Millón', 'Pedro  Cordones', '2016-11-19'),
(80, 'Sector Actualizado Evaristo Morales', 'Pedro  Cordones', '2016-11-19'),
(81, 'Sector Actualizado Gazcue', 'Pedro  Cordones', '2016-11-19'),
(82, 'Sector Actualizado La Esperilla', 'Pedro  Cordones', '2016-11-19'),
(83, 'Sector Actualizado Mirador Norte', 'Pedro  Cordones', '2016-11-19'),
(84, 'Sector Actualizado Naco', 'Pedro  Cordones', '2016-11-19'),
(85, 'Sector Actualizado Piantini', 'Pedro  Cordones', '2016-11-19'),
(86, 'Sector Creado Serralles', 'Pedro  Cordones', '2016-11-19'),
(87, 'Sector Creado La Julia', 'Pedro  Cordones', '2016-11-19'),
(88, 'Sector Creado Cacicazgo', 'Pedro  Cordones', '2016-11-19'),
(89, 'Sector Creado San Geronimo', 'Pedro  Cordones', '2016-11-19'),
(90, 'Sector Creado Julieta', 'Pedro  Cordones', '2016-11-19'),
(91, 'Sector Creado El Vergel', 'Pedro  Cordones', '2016-11-19'),
(92, 'Sector Creado Galå', 'Pedro  Cordones', '2016-11-19'),
(93, 'Sector Creado La Castellana', 'Pedro  Cordones', '2016-11-19'),
(94, 'Sector Creado Los Restauradores', 'Pedro  Cordones', '2016-11-19'),
(95, 'Sector Creado Paraiso', 'Pedro  Cordones', '2016-11-19'),
(96, 'Sector Creado Urbanización Fernandez', 'Pedro  Cordones', '2016-11-19'),
(97, 'Sector Actualizado Serrallés', 'Pedro  Cordones', '2016-11-19'),
(98, 'Sector Creado Puerto Isabela', 'Pedro  Cordones', '2016-11-19'),
(99, 'Sector Creado Renacimiento', 'Pedro  Cordones', '2016-11-19'),
(100, 'Sector Creado San Carlos', 'Pedro  Cordones', '2016-11-19'),
(101, 'Sector Creado San Diego', 'Pedro  Cordones', '2016-11-19'),
(102, 'Sector Creado San Juan Bosco', 'Pedro  Cordones', '2016-11-19'),
(103, 'Sector Creado Simón Bolivar', 'Pedro  Cordones', '2016-11-19'),
(104, 'Sector Creado 30 de Mayo', 'Pedro  Cordones', '2016-11-19'),
(105, 'Sector Creado Metaldón Tropical', 'Pedro  Cordones', '2016-11-19'),
(106, 'Sector Creado 24 de Abril', 'Pedro  Cordones', '2016-11-19'),
(107, 'Sector Creado Arroyo Hondo Viejo', 'Pedro  Cordones', '2016-11-19'),
(108, 'Sector Creado Villa Consuelo', 'Pedro  Cordones', '2016-11-19'),
(109, 'Sector Creado Villa Francisca', 'Pedro  Cordones', '2016-11-19'),
(110, 'Sector Creado Villa Juana', 'Pedro  Cordones', '2016-11-19'),
(111, 'Sector Creado Villas Agricolas', 'Pedro  Cordones', '2016-11-19'),
(112, 'Sector Creado Jardín Zoológico', 'Pedro  Cordones', '2016-11-19'),
(113, 'Sector Creado Jardines del Sur', 'Pedro  Cordones', '2016-11-19'),
(114, 'Sector Creado Julieta Morales', 'Pedro  Cordones', '2016-11-19'),
(115, 'Sector Creado La Agustina', 'Pedro  Cordones', '2016-11-19'),
(116, 'Sector Creado Los Jardines', 'Pedro  Cordones', '2016-11-19'),
(117, 'Sector Creado Los Ríos', 'Pedro  Cordones', '2016-11-19'),
(118, 'Sector Creado Mata Hambre', 'Pedro  Cordones', '2016-11-19'),
(119, 'Sector Creado Miraflores', 'Pedro  Cordones', '2016-11-19'),
(120, 'Sector Creado Miramar', 'Pedro  Cordones', '2016-11-19'),
(121, 'Sector Creado Atala', 'Pedro  Cordones', '2016-11-19'),
(122, 'Sector Creado Cacique', 'Pedro  Cordones', '2016-11-19'),
(123, 'Sector Creado Ciudad Universitaria', 'Pedro  Cordones', '2016-11-19'),
(124, 'Sector Creado Ensanche La Fé', 'Pedro  Cordones', '2016-11-19'),
(125, 'Sector Creado Cristo Rey', 'Pedro  Cordones', '2016-11-19'),
(126, 'Configuracion Actualizada', 'Pedro  Cordones', '2016-11-19'),
(127, 'Configuracion Actualizada', '', '0000-00-00'),
(128, 'Configuracion Actualizada', 'Pedro  Cordones', '2016-11-20'),
(129, 'Sector Creado hhdh', 'Nairoby  Beato', '2017-02-18'),
(130, 'Configuracion Actualizada', 'Nairoby  Beato', '2017-02-18'),
(131, 'Configuracion Actualizada', 'Nairoby  Beato', '2017-02-18'),
(132, 'Propiedad Creado Terreno en Venta en Santo Domingo D. N., Los Cacicazgos', 'Nairoby  Beato', '2017-02-18'),
(133, 'Propiedad Creado Terreno en Venta en Santo Domingo D. N., Los Cacicazgos', 'Nairoby  Beato', '2017-02-18'),
(134, 'Propiedad Terreno en Venta en Santo Domingo D. N., Los Cacicazgos Publicado', 'Nairoby  Beato', '2017-02-18'),
(135, 'Propiedad APARTAMENTO ALQUILER PIANTINI Borrada Completa', '', '0000-00-00'),
(136, 'Propiedad CASA EN VENTA PIANTINI Borrada Completa', '', '0000-00-00'),
(137, 'Propiedad Terreno en Venta en Santo Domingo D. N., Los Cacicazgos Borrada Completa', '', '0000-00-00'),
(138, 'Propiedad APARTAMENTO ALQUILER PIANTINI Despublicado', '', '0000-00-00'),
(139, 'Propiedad APARTAMENTO ALQUILER PIANTINI Publicado', '', '0000-00-00'),
(140, 'Propiedad CASA EN VENTA PIANTINI Despublicado', '', '0000-00-00'),
(141, 'Propiedad CASA EN VENTA PIANTINI Publicado', '', '0000-00-00'),
(142, 'Propiedad Terreno en Venta en Santo Domingo D. N., Los Cacicazgos Despublicado', '', '0000-00-00'),
(143, 'Propiedad Terreno en Venta en Santo Domingo D. N., Los Cacicazgos Publicado', '', '0000-00-00'),
(144, 'Propiedad Creado Apartamentos en Venta en Sto. Dgo., San Isidro Afuera', 'Nairoby  Beato', '2017-02-28'),
(145, 'Propiedad Apartamentos en Venta en Sto. Dgo., San Isidro Afuera Publicado', 'Nairoby  Beato', '2017-02-28'),
(146, 'Propiedad Creado PENTHOUSE EVARISTO MORALES ', 'Pedro  Cordones', '2017-02-28'),
(147, 'Foto agregada a Propiedad PENTHOUSE EVARISTO MORALES', 'Pedro  Cordones', '2017-02-28'),
(148, 'Foto agregada a Propiedad PENTHOUSE EVARISTO MORALES', 'Pedro  Cordones', '2017-02-28'),
(149, 'Foto agregada a Propiedad PENTHOUSE EVARISTO MORALES', 'Pedro  Cordones', '2017-02-28'),
(150, 'Foto agregada a Propiedad PENTHOUSE EVARISTO MORALES', 'Pedro  Cordones', '2017-02-28'),
(151, 'Foto agregada a Propiedad PENTHOUSE EVARISTO MORALES', 'Pedro  Cordones', '2017-02-28'),
(152, 'Foto agregada a Propiedad PENTHOUSE EVARISTO MORALES', 'Pedro  Cordones', '2017-02-28'),
(153, 'Foto agregada a Propiedad PENTHOUSE EVARISTO MORALES', 'Pedro  Cordones', '2017-02-28'),
(154, 'Foto agregada a Propiedad PENTHOUSE EVARISTO MORALES', 'Pedro  Cordones', '2017-02-28'),
(155, 'Foto agregada a Propiedad PENTHOUSE EVARISTO MORALES', 'Pedro  Cordones', '2017-02-28'),
(156, 'Foto agregada a Propiedad PENTHOUSE EVARISTO MORALES', 'Pedro  Cordones', '2017-02-28'),
(157, 'Foto agregada a Propiedad PENTHOUSE EVARISTO MORALES', 'Pedro  Cordones', '2017-02-28'),
(158, 'Propiedad PENTHOUSE EVARISTO MORALES Publicado', 'Pedro  Cordones', '2017-02-28'),
(159, 'Propiedad Creado ENSANCHE JULIETA CASA DE 2 NIVELES 300MT SOLAR Y 216 CONSTRUCCION PROYECTO CERRADO DE 4 CASAS', 'Pedro  Cordones', '2017-02-28'),
(160, 'Sector Creado Ensanche Julieta', 'Pedro  Cordones', '2017-02-28'),
(161, 'Sector Creado Ensanche Julieta', 'Pedro  Cordones', '2017-02-28'),
(162, 'Sector Creado Mirador Sur', 'Pedro  Cordones', '2017-03-01'),
(163, 'Sector Creado Urbanización Real', 'Pedro  Cordones', '2017-03-01'),
(164, 'Sector Creado Viejo Arroyo Hondo', 'Pedro  Cordones', '2017-03-01'),
(165, 'Configuracion Actualizada', 'Nairoby  Beato', '2017-03-06'),
(166, 'Configuracion Actualizada', 'Nairoby  Beato', '2017-03-06'),
(167, 'Configuracion Actualizada', 'Nairoby  Beato', '2017-03-06'),
(168, 'Anuncio creado cuadrado publicidad', 'Nairoby  Beato', '2017-03-08'),
(169, 'Anuncio creado cuadrado publicidad', 'Nairoby  Beato', '2017-03-08'),
(170, 'Anuncio Promo  Publicado', 'Nairoby  Beato', '2017-03-08'),
(171, 'Anuncio actualizado Cuadrado publicidad', 'Nairoby  Beato', '2017-03-08'),
(172, 'Anuncio Promo  borrado', 'Nairoby  Beato', '2017-03-08'),
(173, 'Anuncio Cuadrado  borrado', 'Nairoby  Beato', '2017-03-08'),
(174, 'Anuncio creado cuadrado publicidad', 'Nairoby  Beato', '2017-03-08'),
(175, 'Anuncio Promo  Publicado', 'Nairoby  Beato', '2017-03-08'),
(176, 'Anuncio Promo  Publicado', 'Nairoby  Beato', '2017-03-08'),
(177, 'Anuncio Promo  Publicado', 'Nairoby  Beato', '2017-03-08'),
(178, 'Anuncio Promo  Publicado', 'Nairoby  Beato', '2017-03-08'),
(179, 'Anuncio Promo  Publicado', 'Nairoby  Beato', '2017-03-08'),
(180, 'Anuncio Promo publicidad Despublicado', 'Nairoby  Beato', '2017-03-08'),
(181, 'Anuncio Cuadrado  borrado', 'Nairoby  Beato', '2017-03-08'),
(182, 'Anuncio Grande Chicken Breast borrado', 'Nairoby  Beato', '2017-03-08'),
(183, 'Anuncio grande portada', 'Nairoby  Beato', '2017-03-08'),
(184, 'Anuncio grande Anuncio grande', 'Nairoby  Beato', '2017-03-08'),
(185, 'Anuncio Grande Anuncio grande Publicado', 'Nairoby  Beato', '2017-03-08'),
(186, 'Configuracion Actualizada', 'Nairoby  Beato', '2017-03-09'),
(187, 'Anuncio creado cuadrado cuadro 1', 'Nairoby  Beato', '2017-03-09'),
(188, 'Anuncio Promo  Publicado', 'Nairoby  Beato', '2017-03-09'),
(189, 'Anuncio actualizado Cuadrado cuadro 1', 'Nairoby  Beato', '2017-03-09'),
(190, 'Anuncio creado cuadrado cuadro 2', 'Nairoby  Beato', '2017-03-09'),
(191, 'Anuncio Promo  Publicado', 'Nairoby  Beato', '2017-03-09'),
(192, 'Anuncio actualizado Cuadrado cuadro 2', 'Nairoby  Beato', '2017-03-09'),
(193, 'Propiedad Creado CASA ENSANCHE JULIETA PROYECTO CERRADO 216MT CONSTRUCCION, 300MT SOLAR', 'Nairoby  Beato', '2017-03-10'),
(194, 'Propiedad Creado CASA ENSANCHE JULIETA PROYECTO CERRADO 216MT CONSTRUCCION, 300MT SOLAR', 'Nairoby  Beato', '2017-03-10'),
(195, 'Propiedad Creado CASA ENSANCHE JULIETA PROYECTO CERRADO 216MT CONSTRUCCION, 300MT SOLAR', 'Nairoby  Beato', '2017-03-10'),
(196, 'Propiedad Creado HOLA', 'Nairoby  Beato', '2017-03-10'),
(197, 'Propiedad Creado CASA ENSANCHE JULIETA PROYECTO CERRADO 216MT CONSTRUCCION, 300MT SOLAR', 'Nairoby  Beato', '2017-03-10'),
(198, 'Propiedad Creado HOLA', 'Nairoby  Beato', '2017-03-10'),
(199, 'Propiedad Creado HOLA', 'Nairoby  Beato', '2017-03-10'),
(200, 'Propiedad Creado PROPIEDAD DE PRUEBA ', 'Pedro  Cordones', '2017-03-10'),
(201, 'Foto agregada a Propiedad PROPIEDAD DE PRUEBA', 'Pedro  Cordones', '2017-03-10'),
(202, 'Foto agregada a Propiedad PROPIEDAD DE PRUEBA', 'Pedro  Cordones', '2017-03-10'),
(203, 'Foto agregada a Propiedad PROPIEDAD DE PRUEBA', 'Pedro  Cordones', '2017-03-10'),
(204, 'Propiedad PROPIEDAD DE PRUEBA Publicado', 'Pedro  Cordones', '2017-03-10'),
(205, 'Sector Creado Ensanche Julieta', 'Pedro  Cordones', '2017-03-10'),
(206, 'Anuncio grande CUADRADO TRALTY', 'Pedro  Cordones', '2017-03-10'),
(207, 'Anuncio creado cuadrado ', 'Pedro  Cordones', '2017-03-10'),
(208, 'Anuncio Promo  Publicado', 'Pedro  Cordones', '2017-03-10'),
(209, 'Anuncio Promo  Publicado', 'Pedro  Cordones', '2017-03-10'),
(210, 'Anuncio Promo  Publicado', 'Pedro  Cordones', '2017-03-10'),
(211, 'Anuncio Promo  Publicado', 'Pedro  Cordones', '2017-03-10'),
(212, 'Anuncio grande TRIALTY 1', 'Pedro  Cordones', '2017-03-10'),
(213, 'Anuncio Grande TRIALTY 1 Publicado', 'Pedro  Cordones', '2017-03-10'),
(214, 'Anuncio Grande TRIALTY 1 Publicado', 'Pedro  Cordones', '2017-03-10'),
(215, 'Anuncio Grande CUADRADO TRALTY Publicado', 'Pedro  Cordones', '2017-03-10'),
(216, 'Anuncio actualizado Grande PORTADA FELIZ CON TRIALTY', 'Pedro  Cordones', '2017-03-10'),
(217, 'Anuncio Grande PORTADA FELIZ CON TRIALTY Publicado', 'Pedro  Cordones', '2017-03-10'),
(218, 'Propiedad PENTHOUSE EVARISTO MORALES Publicado', 'Pedro  Cordones', '2017-03-11'),
(219, 'Propiedad PENTHOUSE EVARISTO MORALES Publicado', 'Pedro  Cordones', '2017-03-11'),
(220, 'Anuncio actualizado Grande PORTADA FELIZ CON TRIALTY', 'Nairoby  Beato', '2017-03-11'),
(221, 'Anuncio actualizado Cuadrado cuadro 1', 'Nairoby  Beato', '2017-03-11'),
(222, 'Anuncio actualizado Cuadrado cuadro 2', 'Nairoby  Beato', '2017-03-11'),
(223, 'Propiedad Creado CASA ENSANCHE JULIETA PROYECTO CERRADO', 'Nairoby  Beato', '2017-03-11'),
(224, 'Propiedad nombre Borrada Completa', 'Nairoby  Beato', '2017-03-11'),
(225, 'Propiedad Creado CASA ENSANCHE JULIETA PROYECTO CERRADO 216MT CONSTRUCCION, 300MT SOLAR', 'Nairoby  Beato', '2017-03-11'),
(226, 'Configuracion Actualizada', 'Pedro  Cordones', '2017-04-28'),
(227, 'Configuracion Actualizada', 'Pedro  Cordones', '2017-04-28'),
(228, 'Configuracion Actualizada', '', '0000-00-00'),
(229, 'Configuracion Actualizada', 'Nairoby  Beato', '2017-04-28'),
(230, 'Configuracion Actualizada', 'Nairoby  Beato', '2017-04-28'),
(231, 'Configuracion Actualizada', 'Nairoby  Beato', '2017-04-28'),
(232, 'Configuracion Actualizada', 'Pedro  Cordones', '2017-05-02'),
(233, 'Configuracion Actualizada', 'Pedro  Cordones', '2017-05-02'),
(234, 'Configuracion Actualizada', 'Nairoby  Beato', '2017-05-08'),
(235, 'Configuracion Actualizada', 'Nairoby  Beato', '2017-05-08'),
(236, 'Propiedad Creado HOLA', 'Nairoby  Beato', '2017-05-17'),
(237, 'Propiedad Creado hola', 'Nairoby  Beato', '2017-05-17'),
(238, 'Propiedad Creado hola caracola', 'Nairoby  Beato', '2017-05-17'),
(239, 'Propiedad Creado Propiedad en venta marca de agua', 'Nairoby  Beato', '2017-05-17'),
(240, 'Propiedad Creado test 22', 'Nairoby  Beato', '2017-05-17'),
(241, 'Configuracion Actualizada', 'Nairoby  Beato', '2017-05-17'),
(242, 'Anuncio grande Trialty en black', 'Pedro  Cordones', '2017-05-18'),
(243, 'Anuncio Grande Trialty en black Publicado', 'Pedro  Cordones', '2017-05-18'),
(244, 'Anuncio Grande TRIALTY 1 Publicado', 'Pedro  Cordones', '2017-05-18'),
(245, 'Anuncio Grande CUADRADO TRALTY Publicado', 'Pedro  Cordones', '2017-05-18'),
(246, 'Anuncio Grande PORTADA FELIZ CON TRIALTY Publicado', 'Pedro  Cordones', '2017-05-18'),
(247, 'Anuncio grande CARRO CON MOÑO', 'Pedro  Cordones', '2017-05-18'),
(248, 'Anuncio grande Otro #2', 'Pedro  Cordones', '2017-05-18'),
(249, 'Anuncio Grande CARRO CON MO?O Publicado', 'Pedro  Cordones', '2017-05-18'),
(250, 'Anuncio Grande Otro  Publicado', 'Pedro  Cordones', '2017-05-18'),
(251, 'Configuracion Actualizada', 'Pedro  Cordones', '2017-05-18'),
(252, 'Propiedad CASA ENSANCHE JULIETA PROYECTO CERRADO 216MT CONSTRUCCION, 300MT SOLAR Publicado', 'Nairoby  Beato', '2017-05-26'),
(253, 'Propiedad Creado nombret trtr ', 'Nairoby  Beato', '2017-06-02'),
(254, 'Propiedad Creado nombret trtr ', 'Nairoby  Beato', '2017-06-02'),
(255, 'Propiedad Creado nombret trtr ', 'Nairoby  Beato', '2017-06-02'),
(256, 'Usuario Actualizado Nairoby ', 'Nairoby  Beato', '2017-06-02'),
(257, 'Usuario Actualizado Pedro ', 'Nairoby  Beato', '2017-06-02'),
(258, 'Usuario Actualizado Miguel', 'Nairoby  Beato', '2017-06-02'),
(259, 'Propiedad Creado test', 'Nairoby  Beato', '2017-06-02'),
(260, 'Propiedad Creado test', 'Nairoby  Beato', '2017-06-02'),
(261, 'Propiedad Creado test', 'Nairoby  Beato', '2017-06-02'),
(262, 'Propiedad Creado test', 'Nairoby  Beato', '2017-06-02'),
(263, 'Propiedad Creado test', 'Nairoby  Beato', '2017-06-02'),
(264, 'Propiedad Creado test', 'Nairoby  Beato', '2017-06-02'),
(265, 'Propiedad Creado test', 'Nairoby  Beato', '2017-06-02'),
(266, 'Propiedad Creado test', 'Nairoby  Beato', '2017-06-02'),
(267, 'Propiedad Creado test', 'Nairoby  Beato', '2017-06-02'),
(268, 'Propiedad Creado test 22', 'Nairoby  Beato', '2017-06-02'),
(269, 'Propiedad test 22 Publicado', 'Nairoby  Beato', '2017-06-02'),
(270, 'Configuracion Actualizada', 'Pedro  Cordones', '2017-06-03'),
(271, 'Propiedad Creado test', 'Nairoby  Beato', '2017-06-05'),
(272, 'Propiedad Creado test', 'Nairoby  Beato', '2017-06-05'),
(273, 'Propiedad Creado test', 'Nairoby  Beato', '2017-06-05'),
(274, 'Propiedad Creado test', 'Nairoby  Beato', '2017-06-05'),
(275, 'Propiedad Creado test 22', 'Nairoby  Beato', '2017-06-05'),
(276, 'Propiedad Creado nombre', 'Nairoby  Beato', '2017-06-05'),
(277, 'Propiedad Creado nombre', '', '0000-00-00'),
(278, 'Propiedad Creado test', 'Nairoby  Beato', '2017-06-05'),
(279, 'Usuario Actualizado Nairoby ', 'Nairoby  Beato', '2017-06-05'),
(280, 'Usuario Actualizado Nairoby ', 'Nairoby  Beato', '2017-06-05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `folder` varchar(255) DEFAULT NULL,
  `src` varchar(255) DEFAULT NULL,
  `id_book` int(4) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `image`
--

INSERT INTO `image` (`id`, `folder`, `src`, `id_book`, `created_at`) VALUES
(4, '../images/propiedades/8/', 'IMG-20170228-WA0030.jpg', 8, '2017-02-28 14:55:59'),
(5, '../images/propiedades/8/', 'IMG-20170228-WA0031.jpg', 8, '2017-02-28 14:56:31'),
(6, '../images/propiedades/8/', 'IMG-20170228-WA0043.jpg', 8, '2017-02-28 14:56:51'),
(7, '../images/propiedades/8/', 'IMG-20170228-WA0033.jpg', 8, '2017-02-28 14:57:11'),
(8, '../images/propiedades/8/', 'IMG-20170228-WA0049.jpg', 8, '2017-02-28 14:57:32'),
(9, '../images/propiedades/8/', 'IMG-20170228-WA0050.jpg', 8, '2017-02-28 14:57:56'),
(10, '../images/propiedades/8/', 'IMG-20170228-WA0029.jpg', 8, '2017-02-28 14:58:35'),
(11, '../images/propiedades/8/', 'IMG-20170228-WA0027.jpg', 8, '2017-02-28 14:59:02'),
(12, '../images/propiedades/8/', 'IMG-20170228-WA0023.jpg', 8, '2017-02-28 14:59:35'),
(13, '../images/propiedades/8/', 'IMG-20170228-WA0013.jpg', 8, '2017-02-28 15:00:14'),
(14, '../images/propiedades/8/', 'IMG-20170228-WA0015.jpg', 8, '2017-02-28 15:01:39'),
(15, '../images/propiedades/12/', 'IMG-20170309-WA0022.jpg', 12, '2017-03-10 12:17:27'),
(16, '../images/propiedades/12/', 'IMG-20170309-WA0012.jpg', 12, '2017-03-10 12:17:53'),
(17, '../images/propiedades/12/', 'IMG-20170309-WA0020.jpeg', 12, '2017-03-10 12:19:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `image_super`
--

CREATE TABLE `image_super` (
  `id` int(11) NOT NULL,
  `folder` varchar(255) DEFAULT NULL,
  `src` varchar(255) DEFAULT NULL,
  `id_super` int(4) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `image_super`
--

INSERT INTO `image_super` (`id`, `folder`, `src`, `id_super`, `created_at`) VALUES
(1, '../images/tiendas/20/', '1.jpg', 20, '2016-08-23 18:04:22'),
(2, '../images/tiendas/20/', '7.jpg', 20, '2016-08-23 18:10:36'),
(3, '../images/tiendas/20/', '7_1.jpg', 20, '2016-08-25 14:01:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lista_provincias`
--

CREATE TABLE `lista_provincias` (
  `id` int(6) NOT NULL,
  `opcion` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `lista_provincias`
--

INSERT INTO `lista_provincias` (`id`, `opcion`) VALUES
(1, 'DISTRITO NACIONAL'),
(2, 'SANTO DOMINGO'),
(3, 'LA ALTAGRACIA'),
(35, 'BAHORUCO'),
(5, 'AZUA'),
(7, 'BARAHONA'),
(8, 'DAJABON'),
(9, 'EL SEIBO'),
(10, 'ELIAS PIÑA'),
(11, 'ESPAILLAT'),
(12, 'HATO MAYOR'),
(14, 'HERMANAS MIRABAL'),
(15, 'INDEPENDENCIA'),
(16, 'LA ROMANA'),
(17, 'LA VEGA'),
(18, 'MARIA TRINIDAD SANCHEZ'),
(19, 'MONSEÑOR NOUEL'),
(20, 'MONTE CRISTI'),
(21, 'MONTE PLATA'),
(22, 'PEDERNALES'),
(24, 'PERAVIA'),
(25, 'PUERTO PLATA'),
(26, 'SAMANA'),
(27, 'SAN CRISTOBAL'),
(28, 'SAN JOSÉ DE OCOA'),
(29, 'SAN JUAN'),
(30, 'SAN PEDRO DE MACORIS'),
(31, 'SANCHEZ RAMIREZ'),
(32, 'SANTIAGO RODRIGUEZ'),
(33, 'SANTIAGO'),
(34, 'VALVERDE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lista_sectores`
--

CREATE TABLE `lista_sectores` (
  `id` int(5) UNSIGNED NOT NULL,
  `opcion` varchar(100) CHARACTER SET latin1 NOT NULL,
  `relacion` int(3) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Volcado de datos para la tabla `lista_sectores`
--

INSERT INTO `lista_sectores` (`id`, `opcion`, `relacion`) VALUES
(16, 'Cacicazgo', 1),
(2, 'Gazcue', 1),
(3, 'El Millón', 1),
(4, 'Piantini', 1),
(17, 'San Geronimo', 1),
(6, 'Evaristo Morales', 1),
(7, 'Naco', 1),
(15, 'La Julia', 1),
(9, 'La Esperilla', 1),
(10, 'Mirador Norte', 1),
(11, 'Bella Vista', 1),
(12, 'Los Prados', 1),
(13, 'Ensanche Quisqueya', 1),
(14, 'Serrallés', 1),
(19, 'El Vergel', 1),
(20, 'Galå', 0),
(21, 'La Castellana', 1),
(22, 'Los Restauradores', 1),
(23, 'Paraiso', 1),
(24, 'Urbanización Fernandez', 1),
(25, 'Puerto Isabela', 1),
(26, 'Renacimiento', 1),
(27, 'San Carlos', 1),
(28, 'San Diego', 1),
(29, 'San Juan Bosco', 1),
(30, 'Simón Bolivar', 1),
(31, '30 de Mayo', 1),
(32, 'Metaldón Tropical', 1),
(33, '24 de Abril', 1),
(34, 'Arroyo Hondo Viejo', 1),
(35, 'Villa Consuelo', 1),
(36, 'Villa Francisca', 1),
(37, 'Villa Juana', 1),
(38, 'Villas Agricolas', 1),
(39, 'Jardín Zoológico', 1),
(40, 'Jardines del Sur', 1),
(41, 'Julieta Morales', 1),
(42, 'La Agustina', 1),
(43, 'Los Jardines', 1),
(44, 'Los Ríos', 1),
(45, 'Mata Hambre', 1),
(46, 'Miraflores', 1),
(47, 'Miramar', 1),
(48, 'Atala', 1),
(49, 'Cacique', 1),
(50, 'Ciudad Universitaria', 1),
(51, 'Ensanche La Fé', 1),
(52, 'Cristo Rey', 1),
(56, 'Mirador Sur', 1),
(55, 'Ensanche Julieta', 1),
(57, 'Urbanización Real', 1),
(58, 'Viejo Arroyo Hondo', 0),
(59, 'Ensanche Julieta', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propiedades`
--

CREATE TABLE `propiedades` (
  `propiedades_id` int(11) NOT NULL,
  `nombre_propiedad` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `tipo_compra` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `moneda` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `precio_rd` int(20) DEFAULT NULL,
  `precio_us` int(20) DEFAULT NULL,
  `precio_eu` int(20) DEFAULT NULL,
  `cantidad_habitacion` int(3) DEFAULT NULL,
  `bano` varchar(5) COLLATE latin1_general_ci DEFAULT NULL,
  `parqueo` int(3) DEFAULT NULL,
  `jardin` int(1) DEFAULT NULL,
  `patio` int(1) DEFAULT NULL,
  `balcon` int(1) DEFAULT NULL,
  `terraza` int(1) DEFAULT NULL,
  `piscina` int(1) DEFAULT NULL,
  `gym` int(1) DEFAULT NULL,
  `area_social` int(1) DEFAULT NULL,
  `estudio` int(1) NOT NULL,
  `family` int(1) NOT NULL,
  `piso` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `nivel` varchar(5) CHARACTER SET latin1 DEFAULT NULL,
  `descripcion` text COLLATE latin1_general_ci,
  `ubicacion` text CHARACTER SET latin1,
  `metraje` int(20) DEFAULT NULL,
  `provincia` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `sector` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `imagen` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `tipo` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `publicado` int(1) DEFAULT NULL,
  `slideshow` int(1) DEFAULT NULL,
  `portada` int(1) DEFAULT NULL,
  `usuario` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Volcado de datos para la tabla `propiedades`
--

INSERT INTO `propiedades` (`propiedades_id`, `nombre_propiedad`, `tipo_compra`, `moneda`, `precio_rd`, `precio_us`, `precio_eu`, `cantidad_habitacion`, `bano`, `parqueo`, `jardin`, `patio`, `balcon`, `terraza`, `piscina`, `gym`, `area_social`, `estudio`, `family`, `piso`, `nivel`, `descripcion`, `ubicacion`, `metraje`, `provincia`, `sector`, `imagen`, `tipo`, `publicado`, `slideshow`, `portada`, `usuario`) VALUES
(7, 'Apartamentos en Venta en Sto. Dgo., San Isidro Afuera', 'venta', 'rd', 2900000, 63043, 55769, 0, '0', 0, 1, 1, 1, 1, 0, 0, NULL, 0, 0, 'Marmol', '3', 'Proyecto de apartamentos', '', 25890, '1', '28', '9-1481983115-8d9e2f1d240a3f134199d8e4b7719f92.jpg', 'apartamentos', 1, 1, 1, NULL),
(8, 'PENTHOUSE EVARISTO MORALES ', 'venta', 'us', 10350000, 225000, 199038, 3, '3.5', 2, 0, 0, 0, 1, 0, 0, NULL, 0, 0, 'ceramica_importada', '8', 'PRECIOSO PENT-HOUSE  CON A/A. OPCION MOBILIARIO ?DE 235M2 TITULADOS. EN 8vo y 9no PISO. EVARISTO MORALES De TASADO US$290,000.00<br>REBAJADO A USD$225,000.00.<br>?<br>Recibidor<br>2 salas.<br>Comedor.<br>Cocina con desayunador interconectado al comedor<br>Ba?os de visita en ambos pisos.<br>3 habitaciones c/u con su ba?o. Dos de ellas con su walking closet.<br>Terraza Techada con su jacuzzi.<br>Jacuzzi para 10 personas en la terraza.<br>Balc?n tipo mirador ?rea comedor<br>2 parqueos techados.<br>Ascensor.<br>Gas comun<br><br>7 aires acondicionados tipo art cool de 24,000 BTU, independientes, con equipos de ahorro de energ?a.<br>Todos los ambientes est?n climatizados.)<br>Terminaci?n?en?m?rmol, caoba en todos los ambientes.<br>Cocina modular italiana de Bellacasa<br>Intercom. Actualmente ocupando los espacios amueblados, 225 m2. Tinaco.<br><br>Planta el?ctrica full.??<br>Conserjer?a.?<br>Pisos en m?rmol travertino.?<br>Puertas multilock.?<br>8 c?maras de seguridad, 4 de ellas infrarrojas.?<br>Vista panor?mica? y seguridad.?<br>?Fortines de seguridad y anticicl?nicos en todas las habitaciones, balc?n y ba?os.?<br>Closetpara ropa blanca con tramer?as y 8 gavetas corredizas en cedro. Toldos y enrejado. Jambas y cornisas.?<br>Todos los closets est?n revestidos en cedro y sabina.<br>Estucado en todo el 1er nivel.<br><br>NO POSEE HABITACION DE SERVICIOS! TIPO AMERICANO Y EUROPEO!<br><br>Opcional .Muebles italianos, comedor para 8 comensales.<br><br>TASADO EN US$290,000.00?<br><br>REBAJADO A USD$225,000.00.<br><br>?<br>Pedro Cordones<br>Broker Owner<br>TRIALTY, Bienes Ra?ces<br>pbcordones@gmail.com<br>809 643 5112', '', 235, '1', '6', 'IMG-20170228-WA0046.jpg', 'pent_houses', 1, 1, 1, 21),
(9, 'Apartamentos en Alquiler en Sto. Dgo., San Isidro Afuera', 'alquiler', 'rd', 2900000, 63043, 55769, 0, '0', 0, 1, 1, 1, 1, 0, 0, NULL, 0, 0, 'Marmol', '3', 'Proyecto de apartamentos', '', 25890, '1', '28', '9-1481983115-8d9e2f1d240a3f134199d8e4b7719f92.jpg', 'apartamentos', 1, 1, 1, NULL),
(10, 'Apartamentos en Alquiler en Sto. Dgo., San Isidro Afuera', 'alquiler_amueblado', 'rd', 2900000, 63043, 55769, 0, '0', 0, 1, 1, 0, 1, 0, 0, NULL, 0, 0, 'Marmol', '3', 'Proyecto de apartamentos', '', 25890, '1', '28', '9-1481983115-8d9e2f1d240a3f134199d8e4b7719f92.jpg', 'apartamentos', 1, 1, 1, NULL),
(12, 'PROPIEDAD DE PRUEBA ', 'venta', 'rd', 8000000, 173913, 153846, 3, '3.5', 2, 1, 1, 1, 1, 0, 0, NULL, 0, 0, 'Marmol', '', 'Hola,hola, hola, Hola,hola, hola, Hola, hola, 1 hola, Hola, hola, hola, Hola,hola, hola, Hola, 2 hola, hola, Hola, hola, hola, Hola, hola, hola, 3 Hola,hola, hola, Hola,hola, hola, Hola, hola, 4  hola, Hola, hola, hola, Hola,hola, hola, Hola, 5 hola, hola, Hola, hola, hola, Hola, hola, hola, 6 Hola,hola, hola, Hola,hola, hola, Hola, hola, hola, Hola, hola, hola, 7 Hola,hola, hola, Hola,hola, hola, Hola, hola, hola, Hola, hola, hola, 8 Hola,hola, hola, Hola,hola, hola, Hola, hola, hola, Hola, hola, hola, 9 ', '', 250, '1', '3', 'IMG-20170309-WA0024.jpg', 'casas', 1, 1, 1, NULL),
(14, 'CASA ENSANCHE JULIETA PROYECTO CERRADO 216MT CONSTRUCCION, 300MT SOLAR', '', 'rd', 5488555, 119316, 105549, 0, '2', 0, 0, 0, 0, 1, 0, 0, NULL, 0, 0, 'Granito', '6', '100% REMODELADA<br><br>Dos Niveles<br>3 Habitaciones<br>2.5 Baños<br>4 Parqueos, (Uno techado)<br>Terraza<br>Estar familiar<br>Estudio (ó 4ta habitación)<br>Cuarto servicio completo<br>Patio con tierra<br><br>PRECIO REBAJADO RD$ 9.8 NEGOCIABLE<br>', '', 300, '1', '34', 'image1.jpg', 'casas', 1, 1, 1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE `provincias` (
  `id_provincia` int(6) NOT NULL,
  `nombre` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `provincias`
--

INSERT INTO `provincias` (`id_provincia`, `nombre`) VALUES
(1, 'DISTRITO NACIONAL'),
(2, 'SANTO DOMINGO'),
(3, 'LA ALTAGRACIA'),
(35, 'BAHORUCO'),
(5, 'AZUA'),
(7, 'BARAHONA'),
(8, 'DAJABON'),
(9, 'EL SEIBO'),
(10, 'ELIAS PIÑA'),
(11, 'ESPAILLAT'),
(12, 'HATO MAYOR'),
(14, 'HERMANAS MIRABAL'),
(15, 'INDEPENDENCIA'),
(16, 'LA ROMANA'),
(17, 'LA VEGA'),
(18, 'MARIA TRINIDAD SANCHEZ'),
(19, 'MONSEÑOR NOUEL'),
(20, 'MONTE CRISTI'),
(21, 'MONTE PLATA'),
(22, 'PEDERNALES'),
(24, 'PERAVIA'),
(25, 'PUERTO PLATA'),
(26, 'SAMANA'),
(27, 'SAN CRISTOBAL'),
(28, 'SAN JOSÉ DE OCOA'),
(29, 'SAN JUAN'),
(30, 'SAN PEDRO DE MACORIS'),
(31, 'SANCHEZ RAMIREZ'),
(32, 'SANTIAGO RODRIGUEZ'),
(33, 'SANTIAGO'),
(34, 'VALVERDE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sectores`
--

CREATE TABLE `sectores` (
  `id_sector` int(6) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `provincia_id` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slideshowg`
--

CREATE TABLE `slideshowg` (
  `slideshow_id` int(11) NOT NULL,
  `nombre_slideshow` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `seccion` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `imagen` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `url` varchar(255) NOT NULL,
  `publicado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `slideshowg`
--

INSERT INTO `slideshowg` (`slideshow_id`, `nombre_slideshow`, `seccion`, `imagen`, `url`, `publicado`) VALUES
(2, 'PORTADA FELIZ CON TRIALTY', 'portada', 'IMG-20170216-WA0006.jpg', 'https://baynao.do', 1),
(3, 'Anuncio grande', 'portada', 'portada_anuncio2.jpg', '#', 1),
(4, 'CUADRADO TRALTY', 'portada', 'IMG-20170216-WA0008.jpg', '#', 1),
(5, 'TRIALTY 1', 'portada', 'IMG-20170216-WA0007.jpg', '#', 1),
(6, 'Trialty en black', '', 'IMG-20170216-WA0009.jpg', '#', 1),
(7, 'CARRO CON MOÑO', '', 'IMG-20170514-WA0001.jpg', '#', 1),
(8, 'Otro #2', '', 'IMG_20170515_190753_716.jpg', '#', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slideshowp`
--

CREATE TABLE `slideshowp` (
  `slideshow_id` int(11) NOT NULL,
  `nombre_slideshow` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `seccion` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `posicion` int(1) NOT NULL,
  `imagen` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `url` varchar(255) NOT NULL,
  `publicado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `slideshowp`
--

INSERT INTO `slideshowp` (`slideshow_id`, `nombre_slideshow`, `seccion`, `posicion`, `imagen`, `url`, `publicado`) VALUES
(13, 'cuadro 1', 'detalle', 1, 'publicidad2.jpg', '#', 1),
(14, 'cuadro 2', 'detalle', 2, 'publicidad.jpg', 'https://baynao.do', 1),
(15, '', 'detalle', 2, 'IMG-20160629-WA0000.jpg', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `apellido` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `usuario` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `correo` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `imagen` varchar(255) NOT NULL,
  `tipo_usuario` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `usuario`, `password`, `correo`, `imagen`, `tipo_usuario`) VALUES
(21, 'Nairoby ', 'Beato', 'naybe10', '123456', 'naybe10@gmail.com', 'curry4.jpg', 'administrador'),
(22, 'Pedro ', 'Cordones', 'pedro', '123456', 'pcordones@yahoo.com', '', 'administrador'),
(23, 'Miguel', 'Cordones', 'Miguel', '123456', 'miguelcordones@yahoo.com', '', 'administrador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `configuracion`
--
ALTER TABLE `configuracion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `editor`
--
ALTER TABLE `editor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `historial`
--
ALTER TABLE `historial`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `image_super`
--
ALTER TABLE `image_super`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lista_provincias`
--
ALTER TABLE `lista_provincias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lista_sectores`
--
ALTER TABLE `lista_sectores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `codigo_pais` (`relacion`);

--
-- Indices de la tabla `propiedades`
--
ALTER TABLE `propiedades`
  ADD PRIMARY KEY (`propiedades_id`);

--
-- Indices de la tabla `provincias`
--
ALTER TABLE `provincias`
  ADD PRIMARY KEY (`id_provincia`);

--
-- Indices de la tabla `sectores`
--
ALTER TABLE `sectores`
  ADD PRIMARY KEY (`id_sector`);

--
-- Indices de la tabla `slideshowg`
--
ALTER TABLE `slideshowg`
  ADD PRIMARY KEY (`slideshow_id`);

--
-- Indices de la tabla `slideshowp`
--
ALTER TABLE `slideshowp`
  ADD PRIMARY KEY (`slideshow_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `configuracion`
--
ALTER TABLE `configuracion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `editor`
--
ALTER TABLE `editor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `historial`
--
ALTER TABLE `historial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=281;
--
-- AUTO_INCREMENT de la tabla `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `image_super`
--
ALTER TABLE `image_super`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `lista_provincias`
--
ALTER TABLE `lista_provincias`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT de la tabla `lista_sectores`
--
ALTER TABLE `lista_sectores`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT de la tabla `propiedades`
--
ALTER TABLE `propiedades`
  MODIFY `propiedades_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2514;
--
-- AUTO_INCREMENT de la tabla `provincias`
--
ALTER TABLE `provincias`
  MODIFY `id_provincia` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT de la tabla `sectores`
--
ALTER TABLE `sectores`
  MODIFY `id_sector` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `slideshowg`
--
ALTER TABLE `slideshowg`
  MODIFY `slideshow_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `slideshowp`
--
ALTER TABLE `slideshowp`
  MODIFY `slideshow_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
