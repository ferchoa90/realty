/*
 Navicat Premium Data Transfer

 Source Server         : Localhost
 Source Server Type    : MySQL
 Source Server Version : 100125 (10.1.25-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : dbbabel

 Target Server Type    : MySQL
 Target Server Version : 100125 (10.1.25-MariaDB)
 File Encoding         : 65001

 Date: 16/05/2023 08:36:46
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for colaboradores
-- ----------------------------
DROP TABLE IF EXISTS `colaboradores`;
CREATE TABLE `colaboradores`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombres` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `titulo` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `programa` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `contenido` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `imagen` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `telefono` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `mail` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `orden` int NULL DEFAULT NULL,
  `isDeleted` tinyint NOT NULL DEFAULT 0,
  `fechacreacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `usuariocreacion` int NOT NULL DEFAULT 1,
  `estatus` enum('ACTIVO','INACTIVO') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'ACTIVO',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `fk_colaoradores_usuario`(`usuariocreacion` ASC) USING BTREE,
  CONSTRAINT `fk_colaoradores_usuario` FOREIGN KEY (`usuariocreacion`) REFERENCES `user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of colaboradores
-- ----------------------------
INSERT INTO `colaboradores` VALUES (1, 'PATRICIA SOSA', '', 'PORQUE NOS DA LA GANA', NULL, 'patriciasosa.png', '(593) 986313781', 'consultas@gygabogados.ec', 1, 0, '2017-10-29 02:34:40', 1, 'INACTIVO');
INSERT INTO `colaboradores` VALUES (2, 'AITOR ARJOL BERMEJO', '', 'Clandestino', 'Nació el 18 de julio de 1975 en Bilbao (España). Licenciado en Derecho por la Universidad del País Vasco. Desde hace 15 años vive entre España y Quito (Ecuador), donde ha trabajado en disciplinas como cooperación internacional, docencia de lengua y literatura, comunicación, consultoría académica; o, en los últimos años, asesoría en el sector público. Cuenta con 25 años de experiencia autodidacta, gestando sus propias iniciativas en el sector: lee, escribe, imparte talleres y conferencias, produce eventos o asiste como invitado a los principales programas de radio del país. Además de haber conducido el programa radial “Nómadas”, ejerce como colaborador en medios de comunicación latinoamericanos. Ha publicado un libro de poesía en el año 2006 y participado en algunas antologías, pero su universo creativo en funde en las redes sociales y en todo lugar donde se manifieste la literatura. Escritor extraño y libre en casi toda la extensión de la palabra..', 'Aitor-Arjol.jpg', 'Tel: (593) 986313781', 'consultas@gygabogados.ec', 2, 0, '2017-10-29 02:35:03', 1, 'ACTIVO');
INSERT INTO `colaboradores` VALUES (3, 'SAKUSPACHA', '', 'Sikuspacha Músicos Interculturales', '“Sikuspacha”es un grupo multicultural que vive en el corazón de Milán y cultiva el antiguo estilo musical andino llamado “Siku”que todavía se conserva en el Altiplano del Sud América. En este estílo se conservan nociones de la cosmovisión del mundo andino, enseña que la reciprocidad, la dualidad complementaria son los principios del femenino y masculino que estructuran el mundo en el sentido de la cooperación, elementos que se dinamizan para producir la música en ese estílo, el mismo lo proponemos como un arte de resistencia cultural frente a la occidentalización y banalización de esta tradición ancestral.', 'sikuspacha.jpg', NULL, NULL, 3, 0, '2018-01-11 19:41:07', 1, 'ACTIVO');
INSERT INTO `colaboradores` VALUES (4, 'ANDREA FERNANDA LEÓN', '', 'Raíz Libre', 'Nace con la finalidad de romper fronteras, de abrir mentes, de crear alas, de aliviar el ánimo, de motivar dudas, de respaldar curiosidades, de sentirnos un granito de arena y de ser a la vez nuestro enorme desierto. Cuando hablo de raíces no me refiero a algo físico sino mas bien emocional, de aquellas raíces que nacen de nuestra semilla interior, las raíces que elegimos que hagan parte de nuestra vida, mas allá de la raiz patriótica o familiar a la que pertenecemos, hablo de una raíz abierta,  de aquellos libros que nos han marcado, de la película que nos hizo derramar una lágrima, o morir de carcajadas, hablo de la poesía cuyos versos nos estremecieron en alguna noche estrellada, hablo de una danza popular en medio de la nada, hablo del teatro callejero, de los grafitis, de las fotografías, hablo de la música en toda sus armonías, de los malabares y las acrobacias que nos sorprenden en los circos, hablo de las raíces que se cultivan dentro de nosotros y las que nos hacen florecer como personas,  por eso este espacio intentará ampliar los horizontes, trataremos la cultura y el arte, no como cosas elevadas y lejanas dignas de los famosos museos y de las típicas películas que ganan un oscar, sino de aquellas formas de arte que nos permitan profundizar en unas raíces más  íntimas personales y desconocidas. Con este segmento quiero dar pie a que nuestras raíces libres florezcan y nos permitan crear jardines que nadie pueda quemar, ni arruinar… porque son los jardines perfumados de nuestra propia esencia y de lucha por no desvanecer en la tibia monotonía de la cotidianidad.', 'raizlibre.jpg', NULL, NULL, 4, 0, '2018-01-11 19:41:30', 1, 'ACTIVO');
INSERT INTO `colaboradores` VALUES (5, 'ISABEL GALEOTE', '', 'Clandestino', 'Lo oculto o secreto, no siempre es CLANDESTINO, aunque sí lo es todo aquello que se realiza al margen de una disposición legislativa, pero, y aunque del CLANDESTINO camina a veces sobre la delgada línea de lo legal, es decir, hasta ahora no ha infringido la ley, sí que ha dado voz y visibilidad reivindicando la dignidad de personas y colectivos considerados al margen de las leyes no solo civiles sino morales, según el rasero de quien ejerza el poder. En un pueblo andaluz, CAMPILLOS, se fragua CLANDESTINO, su programa de radio, dice Isabel, el de ella, como dejando claro que es la única responsable de la gestión del mismo y nadie más. Son pocos, muy pocos minutos los que dura el programa, pocos pero con buena sustancia, diría mi mamá; da igual si quien es entrevistado es una fulgurante estrella del saber o un analfabeto luchador, luchadora, por el pan de cada día. En ese espacio, CLANDESTINO, les da tratamiento igual, es un ejercicio de comunicación entre iguales.', 'clandestino-2.jpg', NULL, NULL, 5, 0, '2023-05-15 06:35:58', 1, 'ACTIVO');
INSERT INTO `colaboradores` VALUES (6, 'SARA MARÍA CUTIOPALA ALULEMA', '', 'Voces del Mundo', 'Nace en la provincia del Chimborazo en Ecuador, el 3 de Junio de 1989 se traslada a Murcia con 13 años, desarrolla su formación académica aquí en el municipio de Murcia.\r\n\r\nEs técnico Superior en Administración de Empresas en el IES Ramon y Cajal, actualmente se encuentra cursando el grado de Derecho y Ciencias Políticas en la Universidad de Murcia.\r\n• Empieza su activismo en el 2011 formando parte en los siguientes proyectos:\r\n• Seminario “Hablemos de discriminación” en Francia\r\n• “Red de jóvenes pro desarrollo” con la Fundación FADE\r\n• Talleres para Empleadas de Hogar, inmigrante, trabajadora con Derechos con ACSUR LAS SEGOVIAS.\r\n• Creadora del proyecto juvenil “Creemos en ti” en colaboración con el Consulado de Ecuador en Murcia.\r\n• Defensora de los Derechos Humanos y de la naturaleza.\r\n\r\nDesde el 2017 se encuentra presidiendo la Asociación Empleadas de Hogar de\r\nMurcia, trabaja para el empoderamiento, asesoramiento, y conocimiento de los\r\nDerechos Laborales de las trabajadoras de hogar.', 'voces-del-mundo.jpg', NULL, NULL, 6, 0, '2023-05-15 06:37:16', 1, 'ACTIVO');
INSERT INTO `colaboradores` VALUES (7, 'RICARDO PAZ', '', 'DJ PAZ', 'DJ PAZ nacido en Guayaquil – Ecuador empezó su carrera como DJ desde muy joven con los ritmos de los años 80 y 90 , es un apasionado de la combinar las melodías musicales que se reflejarán en su espacio de Babelatino.', 'djpaz-2.jpg', NULL, NULL, 7, 0, '2023-05-15 06:37:46', 1, 'ACTIVO');
INSERT INTO `colaboradores` VALUES (8, 'AMÉRICO SÁNCHEZ & GUIDO NAVARRO', '', 'QHAPAC ÑAN', 'Desde la perspectiva tradicional entendemos por Qhapaq Ñan como el camino Inca, en la interpretación del mundo andino es el camino a la espiritualidad, del crecimiento personal y comunitario y esa energía queremos transmitir en nuestro espacio. \r\nEsta red vial, está considerado como la columna vertebral que cubre aproximadamente 30,000 Km. En una geografía hostil y compleja conectado a la Costa del Pacífico con la amazonia. Este sistema vial conectaba a los 6 países andinos: Colombia, Ecuador, Perù, Bolivia, Chile y Argentina. Permitiendo al Inca la comunicación de todo el Tahuantinsuyo.', 'qhapaq-nan.jpg', NULL, NULL, 8, 0, '2023-05-15 06:38:27', 1, 'ACTIVO');
INSERT INTO `colaboradores` VALUES (9, 'PAOLO COGLIATI', '', 'CHIARAPA', 'Existe momento mágico, cuando llueve con el sol, el momento en el cual se genera el arco iris, donde el agua se hace vapor, cuando las hojas, aún empapada de lluvia, brillan como diamantes. Es un momento efímero, que dura pocos instantes, en los cuales todo es posible. En quechua para describir todo esto hay un vocablo, una sola palabra: CHIRAPA.\r\n\r\nChirapa es el nombre de nuestro espacio musical.', 'chirapa-2.jpg', NULL, NULL, 9, 0, '2023-05-15 06:39:08', 1, 'ACTIVO');

-- ----------------------------
-- Table structure for menu
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `menu` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `idparent` int NOT NULL DEFAULT 0,
  `link` varchar(400) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '#',
  `orden` int NULL DEFAULT NULL,
  `isDeleted` tinyint(1) NOT NULL DEFAULT 0,
  `estatus` enum('ACTIVO','INACTIVO') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'ACTIVO',
  `usuariocreacion` int NOT NULL,
  `fechacreacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `Usuario`(`usuariocreacion` ASC) USING BTREE,
  CONSTRAINT `Usuario` FOREIGN KEY (`usuariocreacion`) REFERENCES `user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 18 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES (1, 'INICIO', 0, '', 1, 0, 'ACTIVO', 1, '2023-05-14 00:00:00');
INSERT INTO `menu` VALUES (2, 'QUIENES SOMOS', 0, 'site/quienessomos', 2, 0, 'ACTIVO', 1, '2023-05-14 00:00:00');
INSERT INTO `menu` VALUES (3, 'PROGRAMAS', 0, 'site/programas', 3, 0, 'ACTIVO', 1, '2023-05-14 00:00:00');
INSERT INTO `menu` VALUES (4, 'EQUIPO', 0, 'site/equipo', 4, 0, 'ACTIVO', 1, '2023-05-14 00:00:00');
INSERT INTO `menu` VALUES (5, 'NOTICIAS', 0, '#', 5, 0, 'ACTIVO', 1, '2023-05-14 00:00:00');
INSERT INTO `menu` VALUES (6, 'BLOG', 0, 'site/blog', 6, 0, 'INACTIVO', 1, '2023-05-14 00:00:00');
INSERT INTO `menu` VALUES (7, 'CONTACTO', 0, 'site/contacto', 7, 0, 'ACTIVO', 1, '2023-05-14 00:00:00');
INSERT INTO `menu` VALUES (8, 'Clandestino', 3, 'site/clandestino', 1, 0, 'ACTIVO', 1, '2023-05-14 00:00:00');
INSERT INTO `menu` VALUES (9, 'Chiarapa', 3, '#', 2, 0, 'ACTIVO', 1, '2023-05-14 00:00:00');
INSERT INTO `menu` VALUES (10, 'DJ Paz', 3, '#', 3, 0, 'ACTIVO', 1, '2023-05-14 00:00:00');
INSERT INTO `menu` VALUES (11, 'Voces del mundo', 3, '#', 4, 0, 'ACTIVO', 1, '2023-05-14 00:00:00');
INSERT INTO `menu` VALUES (12, 'Qhapac Ñan', 3, '#', 5, 0, 'ACTIVO', 1, '2023-05-14 00:00:00');
INSERT INTO `menu` VALUES (13, 'Raíz Libre', 3, '#', 6, 0, 'ACTIVO', 1, '2023-05-14 00:00:00');
INSERT INTO `menu` VALUES (14, 'Sikuspacha', 3, '#', 7, 0, 'ACTIVO', 1, '2023-05-14 00:00:00');
INSERT INTO `menu` VALUES (15, 'Wara', 3, '#', 8, 0, 'ACTIVO', 1, '2023-05-14 00:00:00');
INSERT INTO `menu` VALUES (16, 'Aitor Arjol Bermejo', 3, '#', 9, 0, 'ACTIVO', 1, '2023-05-14 00:00:00');
INSERT INTO `menu` VALUES (17, 'Noticias Generales', 5, 'site/noticias', 1, 0, 'ACTIVO', 1, '2023-05-16 08:12:31');

-- ----------------------------
-- Table structure for noticias
-- ----------------------------
DROP TABLE IF EXISTS `noticias`;
CREATE TABLE `noticias`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(70) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `extracto` varchar(300) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `contenido` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `orden` int NULL DEFAULT NULL,
  `imagen` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `imagen2` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `imagen3` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `video` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `isDeleted` tinyint(1) NULL DEFAULT 0,
  `usuariocreacion` int NOT NULL,
  `fechavisual` datetime NOT NULL,
  `fechacreacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `estatus` enum('ACTIVO','INACTIVO') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'ACTIVO',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `fk_noticias_usuario`(`usuariocreacion` ASC) USING BTREE,
  CONSTRAINT `fk_noticias_usuario` FOREIGN KEY (`usuariocreacion`) REFERENCES `user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of noticias
-- ----------------------------
INSERT INTO `noticias` VALUES (1, 'Crisis Covid-19', 'A diferencia de lo que sucedió en muchas crisis anteriores, en el inicio de la pandemia se puso en marcha una respuesta decidida y de gran magnitud a través de políticas económicas que, en términos generales, lograron mitigar los costos humanos más graves a corto plazo.', 'La pandemia de COVID19 generó una onda expansiva que afectó a toda la economía mundial y desencadenó la mayor crisis en más de un siglo. Esto condujo a un aumento drástico de la desigualdad interna y entre los países . Las observaciones preliminares sugieren que la recuperación tras la crisis será tan desigual como sus impactos económicos iniciales: las economías emergentes y los grupos desfavorecidos necesitarán mucho más tiempo para sobreponerse a las pérdidas de ingresos y medios de vida causadas por la pandemiai.\r\n\r\nA diferencia de lo que sucedió en muchas crisis anteriores, en el inicio de la pandemia se puso en marcha una respuesta decidida y de gran magnitud a través de políticas económicas que, en términos generales, lograron mitigar los costos humanos más graves a corto plazo. Sin embargo, la respuesta a la emergencia también dio lugar a nuevos riesgos —como el fuerte aumento de los niveles de deuda privada y pública en la economía mundial— que, si no se abordan con determinación, pueden poner en peligro la recuperación equitativa.', NULL, 'crisiscovid.png', NULL, NULL, NULL, 0, 1, '2023-05-16 08:08:41', '2023-05-16 08:08:45', 'ACTIVO');

-- ----------------------------
-- Table structure for programas
-- ----------------------------
DROP TABLE IF EXISTS `programas`;
CREATE TABLE `programas`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `descripcion` longblob NULL,
  `video` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `contenido` longblob NULL,
  `usuariocreacion` int NOT NULL DEFAULT 1,
  `fechavisual` datetime NULL DEFAULT NULL,
  `fechacreacion` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `usuarioact` int NULL DEFAULT NULL,
  `fechaact` datetime NULL DEFAULT NULL,
  `isDeleted` tinyint(1) NOT NULL DEFAULT 0,
  `estatusprograma` enum('BORRADOR','PUBLICADO') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'BORRADOR',
  `estatus` enum('ACTIVO','INACTIVO') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'ACTIVO',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `fk_usuario`(`usuariocreacion` ASC) USING BTREE,
  CONSTRAINT `fk_usuario` FOREIGN KEY (`usuariocreacion`) REFERENCES `user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of programas
-- ----------------------------
INSERT INTO `programas` VALUES (1, 'Babelatino 366: Hablamos de Arte y redes', NULL, 'OcTf8YnmtS0', 0x426162656C6174696E6F203336363A204861626C616D6F7320646520417274652079207265646573, 1, '2023-05-14 13:52:32', '2023-05-14 13:52:35', NULL, NULL, 0, 'BORRADOR', 'ACTIVO');
INSERT INTO `programas` VALUES (2, 'Babelatino 365: Grupo MUNN innovan la forma de expresión musical', NULL, 'zg1_0U_PBBw', 0x426162656C6174696E6F203336353A20477275706F206D75736963616C204D554E4E20696E6E6F76616E206C6120666F726D612064652065787072657369F36E206D75736963616C0D0A436F6E76657273616D6F7320636F6E205061626C6F204D6F6C696E612C20696E74656772616E7465204D554E4E2070726F647563746F72206D75736963616C207920736F6E6F726F, 1, '2023-05-14 13:52:31', '2023-05-14 13:56:08', NULL, NULL, 0, 'BORRADOR', 'ACTIVO');
INSERT INTO `programas` VALUES (3, 'Babelatino 364 : Generosidad, solidaridad y Unidad', NULL, 'EpGRI5uN6oQ', 0x4D6172ED6120417567757374612043616C6C652096206578204173616D626C65ED7374612064656C2045637561646F72209620657820456D62616A61646F726120656E2043756261, 1, '2023-05-14 13:52:30', '2023-05-14 13:57:14', NULL, NULL, 0, 'BORRADOR', 'ACTIVO');

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` longblob NOT NULL,
  `descripcion` longblob NULL,
  `usuariocreacion` int NOT NULL DEFAULT 1,
  `fechacreacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `usuarioact` int NULL DEFAULT NULL,
  `fechaact` datetime NULL DEFAULT NULL,
  `isDeleted` int NOT NULL DEFAULT 0,
  `estatus` enum('ACTIVO','INACTIVO') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'ACTIVO',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `id`(`id` ASC) USING BTREE,
  INDEX `usuariocreacion`(`usuariocreacion` ASC) USING BTREE,
  CONSTRAINT `roles_ibfk_1` FOREIGN KEY (`usuariocreacion`) REFERENCES `user_ant` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 40 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES (1, 0x537570657241646D696E, 0x5573756172696F2064652053697374656D61, 1, '2021-12-01 19:54:52', 1, '2022-04-04 23:45:05', 0, 'ACTIVO');
INSERT INTO `roles` VALUES (2, 0x41646D696E6973747261646F72, 0x5573756172696F2041646D696E6973747261646F72, 1, '2021-12-01 20:59:14', NULL, NULL, 0, 'ACTIVO');
INSERT INTO `roles` VALUES (3, 0x4661637475726163696F6E, 0x4661637475726163696F6E, 1, '2021-12-01 20:00:43', NULL, NULL, 0, 'ACTIVO');
INSERT INTO `roles` VALUES (4, 0x5265706F72746573, 0x5265706F72746573, 1, '2021-12-01 20:00:55', NULL, NULL, 0, 'ACTIVO');
INSERT INTO `roles` VALUES (5, 0x426F64656761, 0x5573756172696F7320426F64656761, 1, '2021-12-01 20:01:23', NULL, NULL, 1, 'ACTIVO');
INSERT INTO `roles` VALUES (6, 0x436F6D70726F62616E746573, 0x5573756172696F7320436F6D70726F62616E7465, 1, '2021-12-01 20:33:17', NULL, NULL, 0, 'ACTIVO');
INSERT INTO `roles` VALUES (7, 0x537570657241646D696E, 0x5573756172696F2064652053697374656D61205341, 1, '2021-12-01 20:58:22', 1, '2022-04-01 17:34:03', 1, 'ACTIVO');
INSERT INTO `roles` VALUES (28, 0x726F6C206E7565766F, 0x726F6C206E7565766F, 1, '2022-01-20 18:21:24', NULL, NULL, 1, 'ACTIVO');
INSERT INTO `roles` VALUES (33, 0x7364736473, 0x647364736473, 1, '2022-04-01 18:27:40', NULL, NULL, 1, 'ACTIVO');
INSERT INTO `roles` VALUES (34, 0x7364736473, 0x647364736473, 1, '2022-04-01 18:27:52', NULL, NULL, 1, 'ACTIVO');
INSERT INTO `roles` VALUES (35, 0x7364736473, 0x647364736473, 1, '2022-04-01 18:28:35', NULL, NULL, 1, 'ACTIVO');
INSERT INTO `roles` VALUES (36, 0x446F63746F726573, 0x647364736473, 1, '2022-04-01 18:29:38', NULL, NULL, 0, 'ACTIVO');
INSERT INTO `roles` VALUES (37, 0x526563657063696F6E, 0x526F6C207061726120726563657063696F6E, 1, '2022-04-04 16:12:43', 1, '2022-04-21 16:40:30', 0, 'ACTIVO');
INSERT INTO `roles` VALUES (38, 0x707275656261, 0x707275656261, 1, '2022-04-04 16:55:47', NULL, NULL, 1, 'ACTIVO');
INSERT INTO `roles` VALUES (39, 0x4F70746F6D65747269737461, 0x526F6C2070617261206F70746F6D6574726973746173, 1, '2022-04-22 10:29:35', NULL, NULL, 0, 'ACTIVO');

-- ----------------------------
-- Table structure for rolesmodulo
-- ----------------------------
DROP TABLE IF EXISTS `rolesmodulo`;
CREATE TABLE `rolesmodulo`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` longblob NOT NULL,
  `descripcion` longblob NULL,
  `nameint` longblob NULL,
  `idmenu` int NOT NULL,
  `usuariocreacion` int NOT NULL,
  `fechacreacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isDeleted` int NOT NULL DEFAULT 0,
  `estatus` enum('ACTIVO','INACTIVO') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'ACTIVO',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `usuariocreacion`(`usuariocreacion` ASC) USING BTREE,
  INDEX `idmenu`(`idmenu` ASC) USING BTREE,
  CONSTRAINT `rolesmodulo_ibfk_1` FOREIGN KEY (`usuariocreacion`) REFERENCES `user_ant` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `rolesmodulo_ibfk_2` FOREIGN KEY (`idmenu`) REFERENCES `menuadmin` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of rolesmodulo
-- ----------------------------
INSERT INTO `rolesmodulo` VALUES (1, 0x5573756172696F73, 0x4D4F44554C4F205553554152494F53, 0x7573756172696F73, 19, 1, '2021-12-01 20:52:34', 0, 'ACTIVO');
INSERT INTO `rolesmodulo` VALUES (2, 0x436F6E746162696C69646164, 0x4D4F44554C4F20434F4E5441424C45, 0x636F6E746162696C69646164, 41, 1, '2021-12-01 20:53:40', 0, 'ACTIVO');
INSERT INTO `rolesmodulo` VALUES (3, 0x466163747572616369C3B36E, 0x4D4F44554C4120444520464143545552414349C3934E, 0x6661637475726163696F6E, 9, 1, '2021-12-01 20:54:07', 0, 'ACTIVO');
INSERT INTO `rolesmodulo` VALUES (4, 0x496E76656E746172696F, 0x4D4F44554C4F20444520494E56454E544152494F, 0x696E76656E746172696F, 2, 1, '2021-12-01 20:54:31', 0, 'ACTIVO');
INSERT INTO `rolesmodulo` VALUES (5, 0x522E2048756D616E6F73, 0x4D4F44554C4F204445205245435552534F532048554D414E4F53, 0x7265637572736F7368756D616E6F73, 64, 1, '2021-12-01 20:54:59', 0, 'ACTIVO');
INSERT INTO `rolesmodulo` VALUES (6, 0x5265706F72746573, 0x4D4F44554C4F204445205245504F52544553, 0x7265706F72746573, 34, 1, '2021-12-01 20:55:23', 0, 'ACTIVO');
INSERT INTO `rolesmodulo` VALUES (7, 0x4D616E74656E696D69656E746F73, 0x4D4F44554C4F204445204D414E54454E494D49454E544F53, 0x6D616E74656E696D69656E746F, 97, 1, '2021-12-01 20:55:46', 0, 'ACTIVO');
INSERT INTO `rolesmodulo` VALUES (8, 0x41756469746F726961, 0x4D4F44554C4F2044452041554449544F524941, 0x73697374656D61, 157, 1, '2021-12-01 20:56:12', 0, 'ACTIVO');
INSERT INTO `rolesmodulo` VALUES (9, 0x436F6E66696775726163696F6E6573, 0x4D4F44554C4F20444520434F4E46494755524143494F4E45532047454E4552414C4553, 0x636F6E66696775726163696F6E6573, 5, 1, '2021-12-01 20:56:51', 0, 'ACTIVO');
INSERT INTO `rolesmodulo` VALUES (11, 0x53697374656D61, 0x4DC39344554C4F2044452053495354454D41, 0x73697374656D61, 6, 1, '2022-03-24 10:30:28', 0, 'ACTIVO');
INSERT INTO `rolesmodulo` VALUES (12, 0x50616369656E746573, 0x4D4F44554C4F2044452050414349454E544553, 0x70616369656E7465, 152, 1, '2022-03-24 10:30:51', 0, 'ACTIVO');
INSERT INTO `rolesmodulo` VALUES (13, 0x4167656E64616D69656E746F73, 0x4DC39344554C4F204445204147454E44414D49454E544F53, 0x6167656E64616D69656E746F, 135, 1, '2022-03-24 10:31:09', 0, 'ACTIVO');
INSERT INTO `rolesmodulo` VALUES (14, 0x4573637269746F72696F, 0x4553435249544F52494F2044454C2053495354454D41, 0x6D656E756573637269746F72696F, 1, 1, '2022-03-28 12:26:06', 0, 'ACTIVO');

-- ----------------------------
-- Table structure for rolespermisodef
-- ----------------------------
DROP TABLE IF EXISTS `rolespermisodef`;
CREATE TABLE `rolespermisodef`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `idmodulo` int NOT NULL,
  `idsubmodulo` int NULL DEFAULT NULL,
  `idmenu` int NULL DEFAULT NULL,
  `nombreint` longblob NULL,
  `nombre` longblob NOT NULL,
  `descripcion` longblob NULL,
  `isDeleted` int NOT NULL DEFAULT 0,
  `usuariocreacion` int NOT NULL,
  `fechacreacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `estatus` enum('ACTIVO','INACTIVO') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'ACTIVO',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `usuariocreacion`(`usuariocreacion` ASC) USING BTREE,
  INDEX `idmodulo`(`idmodulo` ASC) USING BTREE,
  CONSTRAINT `rolespermisodef_ibfk_1` FOREIGN KEY (`usuariocreacion`) REFERENCES `user_ant` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `rolespermisodef_ibfk_2` FOREIGN KEY (`idmodulo`) REFERENCES `rolesmodulo` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of rolespermisodef
-- ----------------------------
INSERT INTO `rolespermisodef` VALUES (1, 14, NULL, 1, 0x6D656E756573637269746F72696F, 0x4573637269746F72696F, NULL, 0, 1, '2022-03-28 12:31:50', 'ACTIVO');
INSERT INTO `rolespermisodef` VALUES (2, 1, NULL, 19, 0x6D656E757573756172696F, 0x5573756172696F73, NULL, 0, 1, '2022-03-28 13:05:35', 'ACTIVO');
INSERT INTO `rolespermisodef` VALUES (3, 14, NULL, NULL, 0x6D656E73616A6573, 0x4D656E73616A6573, NULL, 0, 1, '2022-04-01 11:02:19', 'ACTIVO');
INSERT INTO `rolespermisodef` VALUES (4, 14, NULL, NULL, 0x6E6F74696669636163696F6E6573, 0x4E6F74696669636163696F6E6573, NULL, 0, 1, '2022-04-01 11:09:58', 'ACTIVO');
INSERT INTO `rolespermisodef` VALUES (7, 1, NULL, 19, 0x6D6970657266696C, 0x4D692070657266696C, NULL, 0, 1, '2022-04-03 22:04:48', 'ACTIVO');

-- ----------------------------
-- Table structure for rolespermisos
-- ----------------------------
DROP TABLE IF EXISTS `rolespermisos`;
CREATE TABLE `rolespermisos`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `idrol` int NOT NULL,
  `idmodulo` int NOT NULL,
  `idsubmodulo` int NULL DEFAULT NULL,
  `descripcion` longblob NULL,
  `isDeleted` int NOT NULL DEFAULT 0,
  `usuariocreacion` int NOT NULL,
  `fechacreacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `estatus` enum('ACTIVO','INACTIVO') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'ACTIVO',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `usuariocreacion`(`usuariocreacion` ASC) USING BTREE,
  INDEX `idmodulo`(`idmodulo` ASC) USING BTREE,
  INDEX `idrol`(`idrol` ASC) USING BTREE,
  CONSTRAINT `rolespermisos_ibfk_1` FOREIGN KEY (`usuariocreacion`) REFERENCES `user_ant` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `rolespermisos_ibfk_2` FOREIGN KEY (`idmodulo`) REFERENCES `rolesmodulo` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `rolespermisos_ibfk_3` FOREIGN KEY (`idrol`) REFERENCES `roles` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 639 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of rolespermisos
-- ----------------------------
INSERT INTO `rolespermisos` VALUES (10, 2, 1, NULL, '', 0, 1, '2021-12-01 20:59:57', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (11, 2, 2, NULL, '', 0, 1, '2021-12-01 21:00:00', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (12, 2, 3, NULL, '', 0, 1, '2021-12-01 21:00:03', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (13, 2, 4, NULL, '', 0, 1, '2021-12-01 21:00:06', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (14, 2, 5, NULL, '', 0, 1, '2021-12-01 21:00:09', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (15, 2, 6, NULL, '', 0, 1, '2021-12-01 21:00:12', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (16, 2, 7, NULL, '', 0, 1, '2021-12-01 21:00:15', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (17, 2, 9, NULL, '', 0, 1, '2021-12-01 21:00:18', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (75, 7, 1, NULL, NULL, 0, 1, '2022-04-01 17:34:03', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (76, 7, 2, NULL, NULL, 0, 1, '2022-04-01 17:34:03', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (77, 7, 3, NULL, NULL, 0, 1, '2022-04-01 17:34:03', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (78, 7, 4, NULL, NULL, 0, 1, '2022-04-01 17:34:03', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (79, 7, 5, NULL, NULL, 0, 1, '2022-04-01 17:34:03', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (80, 7, 6, NULL, NULL, 0, 1, '2022-04-01 17:34:03', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (81, 7, 7, NULL, NULL, 0, 1, '2022-04-01 17:34:03', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (82, 7, 8, NULL, NULL, 0, 1, '2022-04-01 17:34:03', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (83, 7, 9, NULL, NULL, 0, 1, '2022-04-01 17:34:03', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (84, 7, 11, NULL, NULL, 0, 1, '2022-04-01 17:34:03', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (85, 7, 12, NULL, NULL, 0, 1, '2022-04-01 17:34:03', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (86, 7, 13, NULL, NULL, 0, 1, '2022-04-01 17:34:03', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (87, 7, 14, NULL, NULL, 0, 1, '2022-04-01 17:34:03', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (88, 7, 9, 47, NULL, 0, 1, '2022-04-01 17:34:03', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (89, 7, 9, 48, NULL, 0, 1, '2022-04-01 17:34:03', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (90, 7, 9, 49, NULL, 0, 1, '2022-04-01 17:34:03', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (91, 7, 9, 50, NULL, 0, 1, '2022-04-01 17:34:03', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (92, 7, 1, 51, NULL, 0, 1, '2022-04-01 17:34:03', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (93, 7, 1, 52, NULL, 0, 1, '2022-04-01 17:34:03', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (94, 7, 9, 58, NULL, 0, 1, '2022-04-01 17:34:03', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (178, 36, 1, NULL, NULL, 0, 1, '2022-04-01 18:29:38', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (179, 36, 5, NULL, NULL, 0, 1, '2022-04-01 18:29:38', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (180, 36, 8, NULL, NULL, 0, 1, '2022-04-01 18:29:38', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (181, 36, 12, 65, NULL, 0, 1, '2022-04-01 18:29:38', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (183, 36, 1, 1, NULL, 0, 1, '2022-04-01 18:29:38', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (184, 36, 1, 2, NULL, 0, 1, '2022-04-01 18:29:38', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (185, 36, 1, 3, NULL, 0, 1, '2022-04-01 18:29:38', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (186, 36, 1, 4, NULL, 0, 1, '2022-04-01 18:29:38', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (193, 36, 12, 67, NULL, 0, 1, '2022-04-04 12:23:13', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (441, 38, 1, NULL, NULL, 0, 1, '2022-04-04 16:55:47', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (442, 38, 2, NULL, NULL, 0, 1, '2022-04-04 16:55:47', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (443, 38, 3, NULL, NULL, 0, 1, '2022-04-04 16:55:47', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (444, 38, 7, NULL, NULL, 0, 1, '2022-04-04 16:55:47', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (445, 38, 8, NULL, NULL, 0, 1, '2022-04-04 16:55:47', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (446, 38, 9, NULL, NULL, 0, 1, '2022-04-04 16:55:47', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (447, 38, 11, NULL, NULL, 0, 1, '2022-04-04 16:55:47', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (448, 38, 1, 51, NULL, 0, 1, '2022-04-04 16:55:47', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (449, 38, 1, 61, NULL, 0, 1, '2022-04-04 16:55:47', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (450, 38, 1, 62, NULL, 0, 1, '2022-04-04 16:55:47', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (451, 38, 1, 63, NULL, 0, 1, '2022-04-04 16:55:47', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (452, 38, 1, 64, NULL, 0, 1, '2022-04-04 16:55:47', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (492, 1, 1, NULL, NULL, 0, 1, '2022-04-04 23:45:05', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (493, 1, 2, NULL, NULL, 0, 1, '2022-04-04 23:45:05', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (494, 1, 3, NULL, NULL, 0, 1, '2022-04-04 23:45:05', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (495, 1, 4, NULL, NULL, 0, 1, '2022-04-04 23:45:05', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (496, 1, 5, NULL, NULL, 0, 1, '2022-04-04 23:45:05', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (497, 1, 6, NULL, NULL, 0, 1, '2022-04-04 23:45:05', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (498, 1, 7, NULL, NULL, 0, 1, '2022-04-04 23:45:06', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (499, 1, 8, NULL, NULL, 0, 1, '2022-04-04 23:45:06', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (500, 1, 9, NULL, NULL, 0, 1, '2022-04-04 23:45:06', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (501, 1, 11, NULL, NULL, 0, 1, '2022-04-04 23:45:06', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (502, 1, 12, NULL, NULL, 0, 1, '2022-04-04 23:45:06', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (503, 1, 13, NULL, NULL, 0, 1, '2022-04-04 23:45:06', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (504, 1, 14, NULL, NULL, 0, 1, '2022-04-04 23:45:06', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (505, 1, 1, 1, NULL, 0, 1, '2022-04-04 23:45:06', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (506, 1, 1, 2, NULL, 0, 1, '2022-04-04 23:45:06', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (507, 1, 1, 3, NULL, 0, 1, '2022-04-04 23:45:06', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (508, 1, 1, 4, NULL, 0, 1, '2022-04-04 23:45:06', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (509, 1, 2, 5, NULL, 0, 1, '2022-04-04 23:45:07', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (510, 1, 2, 6, NULL, 0, 1, '2022-04-04 23:45:07', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (511, 1, 2, 7, NULL, 0, 1, '2022-04-04 23:45:07', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (512, 1, 2, 8, NULL, 0, 1, '2022-04-04 23:45:07', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (513, 1, 2, 9, NULL, 0, 1, '2022-04-04 23:45:07', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (514, 1, 2, 10, NULL, 0, 1, '2022-04-04 23:45:07', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (515, 1, 2, 11, NULL, 0, 1, '2022-04-04 23:45:07', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (516, 1, 2, 12, NULL, 0, 1, '2022-04-04 23:45:07', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (517, 1, 2, 13, NULL, 0, 1, '2022-04-04 23:45:07', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (518, 1, 2, 14, NULL, 0, 1, '2022-04-04 23:45:07', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (519, 1, 2, 15, NULL, 0, 1, '2022-04-04 23:45:07', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (520, 1, 2, 16, NULL, 0, 1, '2022-04-04 23:45:07', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (521, 1, 2, 17, NULL, 0, 1, '2022-04-04 23:45:07', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (522, 1, 2, 18, NULL, 0, 1, '2022-04-04 23:45:07', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (523, 1, 2, 19, NULL, 0, 1, '2022-04-04 23:45:07', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (524, 1, 2, 20, NULL, 0, 1, '2022-04-04 23:45:07', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (525, 1, 2, 21, NULL, 0, 1, '2022-04-04 23:45:07', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (526, 1, 2, 22, NULL, 0, 1, '2022-04-04 23:45:07', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (527, 1, 2, 23, NULL, 0, 1, '2022-04-04 23:45:08', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (528, 1, 2, 24, NULL, 0, 1, '2022-04-04 23:45:08', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (529, 1, 2, 25, NULL, 0, 1, '2022-04-04 23:45:08', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (530, 1, 2, 26, NULL, 0, 1, '2022-04-04 23:45:08', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (531, 1, 2, 27, NULL, 0, 1, '2022-04-04 23:45:08', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (532, 1, 2, 28, NULL, 0, 1, '2022-04-04 23:45:08', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (533, 1, 3, 29, NULL, 0, 1, '2022-04-04 23:45:08', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (534, 1, 3, 30, NULL, 0, 1, '2022-04-04 23:45:08', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (535, 1, 3, 31, NULL, 0, 1, '2022-04-04 23:45:08', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (536, 1, 3, 32, NULL, 0, 1, '2022-04-04 23:45:08', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (537, 1, 4, 33, NULL, 0, 1, '2022-04-04 23:45:08', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (538, 1, 4, 34, NULL, 0, 1, '2022-04-04 23:45:08', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (539, 1, 4, 35, NULL, 0, 1, '2022-04-04 23:45:08', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (540, 1, 4, 36, NULL, 0, 1, '2022-04-04 23:45:08', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (541, 1, 5, 37, NULL, 0, 1, '2022-04-04 23:45:08', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (542, 1, 5, 38, NULL, 0, 1, '2022-04-04 23:45:08', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (543, 1, 5, 39, NULL, 0, 1, '2022-04-04 23:45:08', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (544, 1, 5, 40, NULL, 0, 1, '2022-04-04 23:45:08', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (545, 1, 6, 41, NULL, 0, 1, '2022-04-04 23:45:08', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (546, 1, 6, 42, NULL, 0, 1, '2022-04-04 23:45:08', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (547, 1, 7, 43, NULL, 0, 1, '2022-04-04 23:45:08', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (548, 1, 7, 44, NULL, 0, 1, '2022-04-04 23:45:08', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (549, 1, 7, 45, NULL, 0, 1, '2022-04-04 23:45:08', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (550, 1, 7, 46, NULL, 0, 1, '2022-04-04 23:45:08', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (551, 1, 9, 47, NULL, 0, 1, '2022-04-04 23:45:08', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (552, 1, 9, 48, NULL, 0, 1, '2022-04-04 23:45:08', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (553, 1, 9, 49, NULL, 0, 1, '2022-04-04 23:45:08', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (554, 1, 9, 50, NULL, 0, 1, '2022-04-04 23:45:08', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (555, 1, 1, 51, NULL, 0, 1, '2022-04-04 23:45:08', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (556, 1, 1, 52, NULL, 0, 1, '2022-04-04 23:45:08', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (557, 1, 3, 53, NULL, 0, 1, '2022-04-04 23:45:09', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (558, 1, 4, 54, NULL, 0, 1, '2022-04-04 23:45:09', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (559, 1, 5, 55, NULL, 0, 1, '2022-04-04 23:45:09', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (560, 1, 6, 56, NULL, 0, 1, '2022-04-04 23:45:09', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (561, 1, 7, 57, NULL, 0, 1, '2022-04-04 23:45:09', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (562, 1, 9, 58, NULL, 0, 1, '2022-04-04 23:45:09', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (563, 1, 12, 60, NULL, 0, 1, '2022-04-04 23:45:09', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (564, 1, 1, 61, NULL, 0, 1, '2022-04-04 23:45:09', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (565, 1, 1, 62, NULL, 0, 1, '2022-04-04 23:45:09', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (566, 1, 1, 63, NULL, 0, 1, '2022-04-04 23:45:09', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (567, 1, 1, 64, NULL, 0, 1, '2022-04-04 23:45:09', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (568, 1, 12, 65, NULL, 0, 1, '2022-04-04 23:45:09', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (569, 1, 13, 66, NULL, 0, 1, '2022-04-04 23:45:09', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (570, 1, 12, 67, NULL, 0, 1, '2022-04-04 23:45:09', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (571, 1, 6, 68, NULL, 0, 1, '2022-04-04 23:45:09', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (572, 1, 7, 71, NULL, 0, 1, '2022-04-04 23:45:09', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (573, 1, 7, 72, NULL, 0, 1, '2022-04-04 23:45:09', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (574, 1, 7, 73, NULL, 0, 1, '2022-04-04 23:45:09', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (575, 1, 7, 74, NULL, 0, 1, '2022-04-04 23:45:09', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (576, 1, 7, 75, NULL, 0, 1, '2022-04-04 23:45:09', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (577, 1, 7, 76, NULL, 0, 1, '2022-04-04 23:45:09', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (578, 1, 7, 77, NULL, 0, 1, '2022-04-04 23:45:09', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (579, 1, 7, 78, NULL, 0, 1, '2022-04-04 23:45:09', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (580, 1, 7, 79, NULL, 0, 1, '2022-04-04 23:45:09', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (581, 1, 7, 80, NULL, 0, 1, '2022-04-04 23:45:09', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (582, 1, 7, 81, NULL, 0, 1, '2022-04-04 23:45:09', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (583, 1, 7, 82, NULL, 0, 1, '2022-04-04 23:45:09', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (584, 1, 7, 83, NULL, 0, 1, '2022-04-04 23:45:09', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (585, 1, 7, 84, NULL, 0, 1, '2022-04-04 23:45:09', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (586, 1, 7, 85, NULL, 0, 1, '2022-04-04 23:45:09', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (587, 1, 8, 86, NULL, 0, 1, '2022-04-04 23:45:09', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (588, 1, 8, 87, NULL, 0, 1, '2022-04-04 23:45:10', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (589, 1, 8, 88, NULL, 0, 1, '2022-04-04 23:45:10', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (590, 1, 8, 89, NULL, 0, 1, '2022-04-04 23:45:10', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (591, 1, 8, 90, NULL, 0, 1, '2022-04-04 23:45:10', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (592, 1, 8, 91, NULL, 0, 1, '2022-04-04 23:45:10', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (593, 1, 8, 92, NULL, 0, 1, '2022-04-04 23:45:10', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (594, 1, 8, 93, NULL, 0, 1, '2022-04-04 23:45:10', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (595, 1, 13, 95, NULL, 0, 1, '2022-04-04 23:45:10', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (596, 1, 13, 96, NULL, 0, 1, '2022-04-04 23:45:10', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (597, 1, 13, 97, NULL, 0, 1, '2022-04-04 23:45:10', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (598, 1, 13, 98, NULL, 0, 1, '2022-04-04 23:45:10', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (599, 37, 6, NULL, NULL, 0, 1, '2022-04-21 16:40:30', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (600, 37, 7, NULL, NULL, 0, 1, '2022-04-21 16:40:30', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (601, 37, 13, NULL, NULL, 0, 1, '2022-04-21 16:40:30', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (602, 37, 14, NULL, NULL, 0, 1, '2022-04-21 16:40:30', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (603, 37, 7, 43, NULL, 0, 1, '2022-04-21 16:40:30', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (604, 37, 7, 44, NULL, 0, 1, '2022-04-21 16:40:30', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (605, 37, 7, 45, NULL, 0, 1, '2022-04-21 16:40:30', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (606, 37, 7, 46, NULL, 0, 1, '2022-04-21 16:40:30', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (607, 37, 7, 57, NULL, 0, 1, '2022-04-21 16:40:30', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (608, 37, 13, 66, NULL, 0, 1, '2022-04-21 16:40:30', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (609, 37, 7, 71, NULL, 0, 1, '2022-04-21 16:40:30', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (610, 37, 7, 72, NULL, 0, 1, '2022-04-21 16:40:30', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (611, 37, 7, 73, NULL, 0, 1, '2022-04-21 16:40:30', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (612, 37, 7, 74, NULL, 0, 1, '2022-04-21 16:40:30', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (613, 37, 7, 75, NULL, 0, 1, '2022-04-21 16:40:30', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (614, 37, 7, 76, NULL, 0, 1, '2022-04-21 16:40:30', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (615, 37, 7, 77, NULL, 0, 1, '2022-04-21 16:40:30', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (616, 37, 7, 78, NULL, 0, 1, '2022-04-21 16:40:30', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (617, 37, 7, 79, NULL, 0, 1, '2022-04-21 16:40:30', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (618, 37, 7, 80, NULL, 0, 1, '2022-04-21 16:40:30', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (619, 37, 7, 81, NULL, 0, 1, '2022-04-21 16:40:30', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (620, 37, 7, 82, NULL, 0, 1, '2022-04-21 16:40:30', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (621, 37, 7, 83, NULL, 0, 1, '2022-04-21 16:40:30', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (622, 37, 7, 84, NULL, 0, 1, '2022-04-21 16:40:30', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (623, 37, 7, 85, NULL, 0, 1, '2022-04-21 16:40:30', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (624, 37, 13, 95, NULL, 0, 1, '2022-04-21 16:40:30', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (625, 37, 13, 96, NULL, 0, 1, '2022-04-21 16:40:30', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (626, 37, 13, 97, NULL, 0, 1, '2022-04-21 16:40:30', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (627, 37, 13, 98, NULL, 0, 1, '2022-04-21 16:40:30', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (628, 37, 7, 99, NULL, 0, 1, '2022-04-21 16:40:30', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (629, 37, 7, 100, NULL, 0, 1, '2022-04-21 16:40:30', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (630, 37, 7, 101, NULL, 0, 1, '2022-04-21 16:40:30', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (631, 37, 7, 102, NULL, 0, 1, '2022-04-21 16:40:30', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (632, 37, 7, 103, NULL, 0, 1, '2022-04-21 16:40:30', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (633, 39, 1, NULL, NULL, 0, 1, '2022-04-22 10:29:35', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (634, 39, 12, NULL, NULL, 0, 1, '2022-04-22 10:29:35', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (635, 39, 1, 51, NULL, 0, 1, '2022-04-22 10:29:35', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (636, 39, 12, 60, NULL, 0, 1, '2022-04-22 10:29:35', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (637, 39, 12, 65, NULL, 0, 1, '2022-04-22 10:29:35', 'ACTIVO');
INSERT INTO `rolespermisos` VALUES (638, 39, 12, 67, NULL, 0, 1, '2022-04-22 10:29:35', 'ACTIVO');

-- ----------------------------
-- Table structure for rolessubmodulo
-- ----------------------------
DROP TABLE IF EXISTS `rolessubmodulo`;
CREATE TABLE `rolessubmodulo`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `idmodulo` int NOT NULL,
  `idmenu` int NULL DEFAULT NULL,
  `nombreint` longblob NULL,
  `nombre` longblob NOT NULL,
  `descripcion` longblob NULL,
  `isDeleted` int NOT NULL DEFAULT 0,
  `usuariocreacion` int NOT NULL,
  `fechacreacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `estatus` enum('ACTIVO','INACTIVO') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'ACTIVO',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `usuariocreacion`(`usuariocreacion` ASC) USING BTREE,
  INDEX `idmodulo`(`idmodulo` ASC) USING BTREE,
  CONSTRAINT `rolessubmodulo_ibfk_1` FOREIGN KEY (`usuariocreacion`) REFERENCES `user_ant` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `rolessubmodulo_ibfk_2` FOREIGN KEY (`idmodulo`) REFERENCES `rolesmodulo` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 104 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of rolessubmodulo
-- ----------------------------
INSERT INTO `rolessubmodulo` VALUES (1, 1, NULL, 0x7665727573756172696F, 0x566572205573756172696F, NULL, 0, 1, '2022-04-01 16:17:04', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (2, 1, NULL, 0x616772656761727573756172696F, 0x41677265676172205573756172696F, NULL, 0, 1, '2022-04-01 16:17:08', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (3, 1, NULL, 0x656C696D696E61727573756172696F, 0x456C696D696E6172205573756172696F, NULL, 0, 1, '2022-04-01 16:17:12', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (4, 1, NULL, 0x6564697461727573756172696F, 0x456469746172205573756172696F, NULL, 0, 1, '2022-04-01 16:17:18', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (5, 2, NULL, 0x766572637863, 0x56657220435843, NULL, 0, 1, '2022-03-24 12:24:15', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (6, 2, NULL, 0x61677265676172637863, 0x4167726567617220435843, NULL, 0, 1, '2022-03-24 12:24:20', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (7, 2, NULL, 0x656469746172637863, 0x45646974617220435843, NULL, 0, 1, '2022-03-24 12:24:25', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (8, 2, NULL, 0x656C696D696E6172637863, 0x456C696D696E617220435843, NULL, 0, 1, '2022-03-24 12:24:29', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (9, 2, NULL, 0x7665637863, 0x56657220435850, NULL, 0, 1, '2022-03-24 12:24:33', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (10, 2, NULL, 0x61677265676172637870, 0x4167726567617220435850, NULL, 0, 1, '2022-03-24 12:24:38', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (11, 2, NULL, 0x656469746172637870, 0x45646974617220435850, NULL, 0, 1, '2022-03-24 12:24:42', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (12, 2, NULL, 0x656C696D696E6172637870, 0x456C696D696E617220435850, NULL, 0, 1, '2022-03-24 12:24:46', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (13, 2, NULL, 0x76657264696172696F, 0x5665722044696172696F, NULL, 0, 1, '2022-03-24 12:24:52', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (14, 2, NULL, 0x6167726567617264696172696F, 0x416772656761722044696172696F, NULL, 0, 1, '2022-03-24 12:24:59', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (15, 2, NULL, 0x65646974617264696172696F, 0x4564697461722044696172696F, NULL, 0, 1, '2022-03-24 12:25:03', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (16, 2, NULL, 0x656C696D696E617264696172696F, 0x456C696D696E61722044696172696F, NULL, 0, 1, '2022-03-24 12:25:06', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (17, 2, NULL, 0x766572706572696F646F, 0x56657220506572696F646F, NULL, 0, 1, '2022-03-24 12:25:17', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (18, 2, NULL, 0x61677265676172706572696F646F, 0x4167726567617220506572696F646F, NULL, 0, 1, '2022-03-24 12:25:27', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (19, 2, NULL, 0x656469746172706572696F646F, 0x45646974617220506572696F646F, NULL, 0, 1, '2022-03-24 12:25:34', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (20, 2, NULL, 0x656C696D696E6172706572696F646F, 0x456C696D696E617220506572696F646F, NULL, 0, 1, '2022-03-24 12:25:38', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (21, 2, NULL, 0x76657262616E636F73, 0x5665722042616E636F73, NULL, 0, 1, '2022-03-24 12:25:42', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (22, 2, NULL, 0x6167726567617262616E636F73, 0x416772656761722042616E636F73, NULL, 0, 1, '2022-03-24 12:25:47', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (23, 2, NULL, 0x65646974617262616E636F73, 0x4564697461722042616E636F73, NULL, 0, 1, '2022-03-24 12:25:51', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (24, 2, NULL, 0x656C696D696E617262616E636F73, 0x456C696D696E61722042616E636F73, NULL, 0, 1, '2022-03-24 12:25:57', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (25, 2, NULL, 0x76657262616E636F736D6F76, 0x5665722042616E636F73204D6F76, NULL, 0, 1, '2022-03-24 12:26:03', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (26, 2, NULL, 0x6167726567617262616E636F736D6F76, 0x416772656761722042616E636F73204D6F76, NULL, 0, 1, '2022-03-24 12:26:12', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (27, 2, NULL, 0x65646974617262616E636F736D6F76, 0x4564697461722042616E636F73204D6F76, NULL, 0, 1, '2022-03-24 12:26:20', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (28, 2, NULL, 0x656C696D696E617262616E636F736D6F76, 0x456C696D696E61722042616E636F73204D6F76, NULL, 0, 1, '2022-03-24 12:26:25', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (29, 3, NULL, 0x7665726661637475726173, 0x566572206661637475726173, NULL, 0, 1, '2022-03-28 11:06:17', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (30, 3, NULL, 0x6564697461726661637475726173, 0x456469746172206661637475726173, NULL, 0, 1, '2022-03-28 11:06:34', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (31, 3, NULL, 0x656C696D696E61726661637475726173, 0x456C696D696E6172204661637475726173, NULL, 0, 1, '2022-03-28 11:06:50', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (32, 3, NULL, 0x616772656761726661637475726173, 0x41677265676172204661637475726173, NULL, 0, 1, '2022-03-28 11:07:11', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (33, 4, NULL, 0x76657270726F647563746F, 0x5665722050726F647563746F, NULL, 0, 1, '2022-03-28 11:07:45', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (34, 4, NULL, 0x6167726567617270726F647563746F, 0x416772656761722050726F647563746F, NULL, 0, 1, '2022-03-28 11:11:16', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (35, 4, NULL, 0x65646974617270726F647563746F, 0x4564697461722050726F647563746F, NULL, 0, 1, '2022-03-28 11:11:10', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (36, 4, NULL, 0x656C696D696E617270726F647563746F, 0x456C696D696E61722050726F647563746F, NULL, 0, 1, '2022-03-28 11:11:06', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (37, 5, NULL, 0x766572656D706C6561646F, 0x56657220456D706C6561646F, NULL, 0, 1, '2022-03-28 11:11:24', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (38, 5, NULL, 0x656469746172656D706C6561646F, 0x45646974617220456D706C6561646F, NULL, 0, 1, '2022-03-28 11:09:35', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (39, 5, NULL, 0x61677265676172656D706C6561646F, 0x4167726567617220456D706C6561646F, NULL, 0, 1, '2022-03-28 11:10:11', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (40, 5, NULL, 0x656C696D696E6172656D706C6561646F, 0x456C696D696E617220456D706C6561646F, NULL, 0, 1, '2022-03-28 11:10:27', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (41, 6, NULL, 0x7665727265706F727465, 0x566572205265706F72746573, NULL, 0, 1, '2022-03-28 11:13:29', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (42, 6, NULL, 0x67656E657261727265706F727465, 0x47656E65726172205265706F727465, NULL, 0, 1, '2022-03-28 11:14:14', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (43, 7, NULL, 0x766572646F63746F726573, 0x56657220446F63746F726573, NULL, 0, 1, '2022-03-28 11:14:48', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (44, 7, NULL, 0x61677265676172646F63746F726573, 0x4167726567617220446F63746F726573, NULL, 0, 1, '2022-03-28 11:15:05', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (45, 7, NULL, 0x656469746172646F63746F726573, 0x45646974617220446F63746F726573, NULL, 0, 1, '2022-03-28 11:15:17', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (46, 7, NULL, 0x656C696D696E6172646F63746F726573, 0x456C696D696E617220446F63746F726573, NULL, 0, 1, '2022-03-28 11:15:36', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (47, 9, NULL, 0x7665726D656E7561646D696E, 0x566572204D656EC3BA2041646D696E, NULL, 0, 1, '2022-03-28 11:16:45', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (48, 9, NULL, 0x616772656761726D656E7561646D696E, 0x41677265676172204D656EC3BA2041646D696E, NULL, 0, 1, '2022-03-28 11:17:04', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (49, 9, NULL, 0x6564697461726D656E7561646D696E, 0x456469746172204D656EC3BA2041646D696E, NULL, 0, 1, '2022-03-28 11:17:19', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (50, 9, NULL, 0x656C696D696E61726D656E7561646D696E, 0x456C696D696E6172204D656EC3BA2041646D696E, NULL, 0, 1, '2022-03-28 11:17:39', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (51, 1, NULL, 0x7573756172696F73, 0x5573756172696F73, NULL, 0, 1, '2022-04-01 16:18:35', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (52, 1, NULL, 0x726F6C6573, 0x526F6C6573205573756172696F, NULL, 0, 1, '2022-04-01 16:18:12', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (53, 3, NULL, 0x6D656E756661637475726163696F6E, 0x4D656EC3BA20466163747572616369C3B36E, NULL, 0, 1, '2022-03-28 11:26:11', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (54, 4, NULL, 0x6D656E75696E76656E746172696F, 0x496E76656E746172696F, NULL, 0, 1, '2022-04-04 10:33:31', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (55, 5, NULL, 0x6D656E757265637572736F7368, 0x4D656EC3BA20522E2048756D616E6F73, NULL, 0, 1, '2022-03-28 11:26:18', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (56, 6, NULL, 0x6D656E757265706F72746573, 0x4D656EC3BA205265706F72746573, NULL, 0, 1, '2022-03-28 11:26:19', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (57, 7, NULL, 0x6D656E756D616E74656E696D69656E746F, 0x4D656EC3BA204D616E74656E696D69656E746F, NULL, 0, 1, '2022-03-28 11:26:28', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (58, 9, NULL, 0x6D656E7561646D696E, 0x4D656EC3BA2041646D696E, NULL, 0, 1, '2022-04-01 17:41:41', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (59, 11, NULL, 0x6D656E7573697374656D61, 0x4D656EC3BA2053697374656D61, NULL, 0, 1, '2022-03-28 11:26:54', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (60, 12, NULL, 0x6D656E7570616369656E746573, 0x50616369656E746573, NULL, 0, 1, '2022-04-04 10:27:16', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (61, 1, NULL, 0x766572726F6C, 0x56657220526F6C, NULL, 0, 1, '2022-04-01 16:30:31', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (62, 1, NULL, 0x61677265676172726F6C, 0x4167726567617220526F6C, NULL, 0, 1, '2022-04-01 16:30:50', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (63, 1, NULL, 0x656469746172726F6C, 0x45646974617220526F6C, NULL, 0, 1, '2022-04-01 16:31:03', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (64, 1, NULL, 0x656C696D696E6172726F6C, 0x456C696D696E617220526F6C, NULL, 0, 1, '2022-04-01 16:31:25', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (65, 12, NULL, 0x686973746F726961636C696E696361, 0x486973746F72696120436CC3AD6E696361, NULL, 0, 1, '2022-04-04 10:26:47', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (66, 13, NULL, 0x6369746173, 0x4369746173, NULL, 0, 1, '2022-04-04 10:27:53', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (67, 12, NULL, 0x6167656E6461, 0x4167656E6461, NULL, 0, 1, '2022-04-04 12:22:54', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (68, 6, NULL, 0x6174656E63696F6E70616369656E746573, 0x4174656E6369C3B36E2050616369656E746573, NULL, 0, 1, '2022-04-04 12:43:44', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (71, 7, NULL, 0x70616369656E746573, 0x50616369656E746573, NULL, 0, 1, '2022-04-04 23:29:48', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (72, 7, NULL, 0x76657270656369656E7465, 0x5665722070616369656E7465, NULL, 0, 1, '2022-04-04 23:30:32', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (73, 7, NULL, 0x6167726567617270616369656E7465, 0x416772656761722050616369656E7465, NULL, 0, 1, '2022-04-04 23:30:49', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (74, 7, NULL, 0x656C696D696E617270616369656E7465, 0x456C696D696E61722070616369656E7465, NULL, 0, 1, '2022-04-04 23:31:07', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (75, 7, NULL, 0x65646974617270616369656E746573, 0x4564697461722050616369656E7465, NULL, 0, 1, '2022-04-04 23:31:28', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (76, 7, NULL, 0x6D6F7469766F636F6E73756C7461, 0x4D6F7469766F20436F6E73756C7461, NULL, 0, 1, '2022-04-04 23:33:08', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (77, 7, NULL, 0x7665726D6F7469766F, 0x566572204D6F7469766F, NULL, 0, 1, '2022-04-04 23:34:50', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (78, 7, NULL, 0x6564697461726D6F7469766F, 0x456469746172204D6F7469766F, NULL, 0, 1, '2022-04-04 23:33:37', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (79, 7, NULL, 0x616772656761726D6F7469766F, 0x41677265676172204D6F7469766F, NULL, 0, 1, '2022-04-04 23:33:59', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (80, 7, NULL, 0x656C696D696E61726D6F7469766F, 0x456C696D696E6172204D6F7469766F, NULL, 0, 1, '2022-04-04 23:34:15', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (81, 7, NULL, 0x636975646164, 0x436975646164, NULL, 0, 1, '2022-04-04 23:35:39', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (82, 7, NULL, 0x766572636975646164, 0x56657220436975646164, NULL, 0, 1, '2022-04-04 23:35:49', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (83, 7, NULL, 0x656469746172636975646164, 0x45646974617220436975646164, NULL, 0, 1, '2022-04-04 23:36:06', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (84, 7, NULL, 0x656C696D696E6172636975646164, 0x456C696D696E617220436975646164, NULL, 0, 1, '2022-04-04 23:36:18', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (85, 7, NULL, 0x61677265676172636975646164, 0x4167726567617220436975646164, NULL, 0, 1, '2022-04-04 23:36:30', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (86, 8, NULL, 0x6D6F64756C6F636F6E7461626C65, 0x4DC3B364756C6F20436F6E7461626C65, NULL, 0, 1, '2022-04-04 23:37:38', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (87, 8, NULL, 0x6D6F64756C6F72726868, 0x4DC3B364756C6F20522E2048756D616E6F73, NULL, 0, 1, '2022-04-04 23:37:51', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (88, 8, NULL, 0x6D6F64756C6F73697374656D6173, 0x4DC3B364756C6F2053697374656D6173, NULL, 0, 1, '2022-04-04 23:38:14', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (89, 8, NULL, 0x6D6F64756C6F6661637475726163696F6E, 0x4DC3B364756C6F20466163747572616369C3B36E, NULL, 0, 1, '2022-04-04 23:38:30', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (90, 8, NULL, 0x6D6F64756C6F6167656E64616D69656E746F, 0x4DC3B364756C6F204167656E64616D69656E746F, NULL, 0, 1, '2022-04-04 23:38:45', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (91, 8, NULL, 0x6D6F64756C6F70616369656E746573, 0x4DC3B364756C6F2050616369656E746573, NULL, 0, 1, '2022-04-04 23:39:02', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (92, 8, NULL, 0x6D6F64756C6F7573756172696F73, 0x4DC3B364756C6F205573756172696F73, NULL, 0, 1, '2022-04-04 23:39:47', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (93, 8, NULL, 0x6D6F64756C6F636F6E66696775726163696F6E6573, 0x4DC3B364756C6F20436F6E66696775726163696F6E6573, NULL, 0, 1, '2022-04-04 23:40:09', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (95, 13, NULL, 0x7665726369746173, 0x566572206369746173, NULL, 0, 1, '2022-04-04 23:41:05', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (96, 13, NULL, 0x616772656761726369746173, 0x41677265676172204369746173, NULL, 0, 1, '2022-04-04 23:41:19', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (97, 13, NULL, 0x656C696D696E61726369746173, 0x456C696D696E6172204369746173, NULL, 0, 1, '2022-04-04 23:41:37', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (98, 13, NULL, 0x6564697461726369746173, 0x456469746172204369746173, NULL, 0, 1, '2022-04-04 23:41:52', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (99, 7, NULL, 0x646F63746F726573, 0x446F63746F726573, NULL, 0, 1, '2022-04-21 16:38:08', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (100, 7, NULL, 0x766572646F63746F726573, 0x56657220446F63746F726573, NULL, 0, 1, '2022-04-21 16:39:08', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (101, 7, NULL, 0x656469746172646F63746F726573, 0x45646974617220446F63746F72, NULL, 0, 1, '2022-04-21 16:39:34', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (102, 7, NULL, 0x61677265676172646F63746F726573, 0x4167726567617220446F63746F72, NULL, 0, 1, '2022-04-21 16:39:55', 'ACTIVO');
INSERT INTO `rolessubmodulo` VALUES (103, 7, NULL, 0x656C696D696E6172646F63746F726573, 0x456C696D696E617220446F63746F72, NULL, 0, 1, '2022-04-21 16:40:13', 'ACTIVO');

-- ----------------------------
-- Table structure for rolesusuario
-- ----------------------------
DROP TABLE IF EXISTS `rolesusuario`;
CREATE TABLE `rolesusuario`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `idrol` int NOT NULL,
  `idusuario` int NOT NULL,
  `isDeleted` int NOT NULL DEFAULT 0,
  `fechacreacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `usuariocreacion` int NOT NULL DEFAULT 1,
  `estatus` enum('ACTIVO','INACTIVO') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'ACTIVO',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `usuariocreacion`(`usuariocreacion` ASC) USING BTREE,
  INDEX `idrol`(`idrol` ASC) USING BTREE,
  INDEX `idusuario`(`idusuario` ASC) USING BTREE,
  CONSTRAINT `rolesusuario_ibfk_1` FOREIGN KEY (`usuariocreacion`) REFERENCES `user_ant` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `rolesusuario_ibfk_2` FOREIGN KEY (`idrol`) REFERENCES `roles` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `rolesusuario_ibfk_3` FOREIGN KEY (`idusuario`) REFERENCES `user_ant` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of rolesusuario
-- ----------------------------
INSERT INTO `rolesusuario` VALUES (1, 1, 1, 0, '2022-03-28 13:28:11', 1, 'ACTIVO');
INSERT INTO `rolesusuario` VALUES (2, 3, 10001, 0, '2022-03-28 13:28:30', 1, 'ACTIVO');
INSERT INTO `rolesusuario` VALUES (3, 36, 10012, 0, '2022-04-04 10:59:14', 1, 'ACTIVO');
INSERT INTO `rolesusuario` VALUES (4, 36, 10013, 0, '2022-04-04 16:10:55', 1, 'ACTIVO');
INSERT INTO `rolesusuario` VALUES (5, 37, 10014, 0, '2022-04-04 16:13:38', 1, 'ACTIVO');
INSERT INTO `rolesusuario` VALUES (6, 36, 10015, 0, '2022-04-12 16:12:54', 1, 'ACTIVO');
INSERT INTO `rolesusuario` VALUES (7, 36, 10016, 0, '2022-04-12 16:16:45', 1, 'ACTIVO');
INSERT INTO `rolesusuario` VALUES (8, 36, 10017, 0, '2022-04-12 16:18:36', 1, 'ACTIVO');
INSERT INTO `rolesusuario` VALUES (9, 36, 10018, 0, '2022-04-12 16:20:21', 1, 'ACTIVO');
INSERT INTO `rolesusuario` VALUES (10, 36, 10019, 0, '2022-04-12 16:21:38', 1, 'ACTIVO');
INSERT INTO `rolesusuario` VALUES (11, 36, 10020, 0, '2022-04-12 16:22:53', 1, 'ACTIVO');
INSERT INTO `rolesusuario` VALUES (12, 37, 10021, 0, '2022-04-12 16:26:02', 1, 'ACTIVO');
INSERT INTO `rolesusuario` VALUES (13, 36, 10022, 0, '2022-04-21 16:51:33', 1, 'ACTIVO');

-- ----------------------------
-- Table structure for slider
-- ----------------------------
DROP TABLE IF EXISTS `slider`;
CREATE TABLE `slider`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `extracto` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `texto` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `image` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `link` varchar(300) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '#',
  `orden` int NOT NULL,
  `alt` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `isDeleted` tinyint(1) NOT NULL,
  `boton1` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `boton2` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `textob1` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `textob2` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `fechacreacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `usuariocreacion` int NOT NULL DEFAULT 1,
  `fechaact` datetime NULL DEFAULT NULL,
  `usuarioact` int NULL DEFAULT NULL,
  `estatus` enum('ACTIVO','INACTIVO') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'ACTIVO',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `fk_slider_usuario`(`usuariocreacion` ASC) USING BTREE,
  CONSTRAINT `fk_slider_usuario` FOREIGN KEY (`usuariocreacion`) REFERENCES `user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of slider
-- ----------------------------
INSERT INTO `slider` VALUES (1, 'Plataforma de Comunicación Intercultura de Europa', 'Consulte los horarios de transmisión, disponible para Ecuador, Europa y el mundo entero', 'Facebook Live Sábados 19:00 Europa- Radio Pichincha Comunicaciones 12:00 Ecuador (www.pichinchacomunicaciones.com.ec) Radio Sensación en Murcia lunes 15:00. (www.radiosensacionfm.com)\r\nBabelatino 366: Hablamos de Arte y redes\r\nPlataforma de Comunicación Intercultural en Europa\r\nFacebook Live Sábados 19:00 Europa- Radio Pichincha Comunicaciones 12:00 Ecuador (www.pichinchacomunicaciones.com.ec) Radio Sensación en Murcia lunes 15:00. (www.radiosensacionfm.com)\r\nBabelatino 365: Grupo MUNN innovan la forma de expresión musical\r\nPlataforma de Comunicación Intercultural en Europa\r\nFacebook Live Sábados 19:00 Europa- Radio Pichincha Comunicaciones 12:00 Ecuador (www.pichinchacomunicaciones.com.ec) Radio Sensación en Murcia lunes 15:00. (www.radiosensacionfm.com)\r\nBabelatino 364 : Generosidad, solidaridad y Unidad\r\n123\r\n', 'VICTOR.jpg', '#', 1, NULL, 0, '/site/noticia1', NULL, 'Consultar', NULL, '2017-10-28 12:42:07', 1, NULL, NULL, 'ACTIVO');

-- ----------------------------
-- Table structure for tblcaracteristicas
-- ----------------------------
DROP TABLE IF EXISTS `tblcaracteristicas`;
CREATE TABLE `tblcaracteristicas`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `descripcion` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `icono` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `color` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `orden` int NULL DEFAULT NULL,
  `fechacreacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `estatus` enum('ACTIVO') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'ACTIVO',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tblcaracteristicas
-- ----------------------------
INSERT INTO `tblcaracteristicas` VALUES (1, 'EXPERIENCIA', 'Somos la firma de Abogados, que cuenta con un equipo de profesionales capacitados en las distintas áreas del derecho', 'experiencia.png', '#000000', NULL, '2017-10-28 17:00:30', 'ACTIVO');
INSERT INTO `tblcaracteristicas` VALUES (2, 'CONFIANZAS', 'Somos la firma de Abogados, que cuenta con un equipo de profesionales capacitados en las distintas áreas del derecho ', 'confianza.png', '#CA9C61', NULL, '2017-10-28 17:01:12', 'ACTIVO');
INSERT INTO `tblcaracteristicas` VALUES (3, 'EFECTIVIDAD', 'Somos la firma de Abogados, que cuenta con un equipo de profesionales capacitados en las distintas áreas del derecho  ', 'efectividad.png', '#000000', NULL, '2017-10-28 17:01:40', 'ACTIVO');

-- ----------------------------
-- Table structure for tblconfiguraciones
-- ----------------------------
DROP TABLE IF EXISTS `tblconfiguraciones`;
CREATE TABLE `tblconfiguraciones`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `tipo` enum('FOOTER_DIRECCION','FOOTER_HORARIO','FOOTER_CORREO','FOOTER_TELEFONOS','FOOTER_FACEBOOK','FOOTER_TWITTER','FOOTER_INSTAGRAM','CORREO_CONSULTA','CONTACTOS_MAPLON','CONTACTOS_MAPLAT') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `contenido` varchar(300) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `fechacreacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `estatus` enum('ACTIVO','INACTIVO') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'ACTIVO',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tblconfiguraciones
-- ----------------------------
INSERT INTO `tblconfiguraciones` VALUES (1, 'FOOTER_DIRECCION', 'Cdla. Urbanor, diagonal a la Gasolinera de la Av. Las Aguas', '2017-10-29 11:42:23', 'ACTIVO');
INSERT INTO `tblconfiguraciones` VALUES (2, 'FOOTER_HORARIO', 'Lunes a Viernes 9:00 - 18:00', '2017-10-29 11:42:36', 'ACTIVO');
INSERT INTO `tblconfiguraciones` VALUES (3, 'FOOTER_CORREO', 'gglegales@hotmail.com', '2017-10-29 11:42:46', 'ACTIVO');
INSERT INTO `tblconfiguraciones` VALUES (4, 'FOOTER_TELEFONOS', '(593) 0986313786 - (593) 097 943 4399', '2017-10-29 11:42:53', 'ACTIVO');

-- ----------------------------
-- Table structure for tblpages
-- ----------------------------
DROP TABLE IF EXISTS `tblpages`;
CREATE TABLE `tblpages`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `seccion` enum('QUIENES SOMOS','CONTACTOS','MI CUENTA') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `background` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `fechacreacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `estatus` enum('ACTIVO','INACTIVO') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tblpages
-- ----------------------------
INSERT INTO `tblpages` VALUES (1, 'QUIENES SOMOS', 'background_quienessomos.jpg', '2017-10-29 20:00:35', 'ACTIVO');

-- ----------------------------
-- Table structure for tblservicios
-- ----------------------------
DROP TABLE IF EXISTS `tblservicios`;
CREATE TABLE `tblservicios`  (
  `id` int NOT NULL,
  `nombre` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `home` enum('SI','NO') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `imagen` varchar(120) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `orden` int NULL DEFAULT NULL,
  `fechacreacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `estatus` enum('ACTIVO','INACTIVO') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'ACTIVO',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tblservicios
-- ----------------------------
INSERT INTO `tblservicios` VALUES (1, 'Defensa', 'SI', 'servicio_defensa.jpg', 1, '2017-10-28 12:44:49', 'ACTIVO');
INSERT INTO `tblservicios` VALUES (2, 'Consultoria', 'SI', 'servicio_consultoria.jpg', 2, '2017-10-28 12:45:56', 'ACTIVO');
INSERT INTO `tblservicios` VALUES (3, 'Representación', 'SI', 'servicio_representacion.jpg', 3, '2017-10-28 12:46:20', 'ACTIVO');
INSERT INTO `tblservicios` VALUES (4, 'Patrocinio de Causa', 'SI', 'servicio_patrocinio.jpg', 4, '2017-10-28 12:46:53', 'ACTIVO');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nombres` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'a',
  `apellidos` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'a',
  `cedula` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '9999999999',
  `idrol` int NOT NULL,
  `auth_key` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint NOT NULL DEFAULT 10,
  `isDeleted` int NOT NULL DEFAULT 0,
  `created_at` int NOT NULL,
  `updated_at` int NOT NULL,
  `fotoperfil` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'user2-160x160.png',
  `fechacreacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `estatus` enum('Activo','Inactivo') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Activo',
  `idsucursal` int NOT NULL DEFAULT 1,
  `creado_por` varchar(60) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`, `cedula`) USING BTREE,
  UNIQUE INDEX `username`(`username` ASC) USING BTREE,
  UNIQUE INDEX `email`(`email` ASC) USING BTREE,
  UNIQUE INDEX `password_reset_token`(`password_reset_token` ASC) USING BTREE,
  INDEX `idsucursal`(`idsucursal` ASC) USING BTREE,
  INDEX `idrol`(`idrol` ASC) USING BTREE,
  INDEX `id`(`id` ASC) USING BTREE,
  CONSTRAINT `user_ibfk_1` FOREIGN KEY (`idsucursal`) REFERENCES `sucursal` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `user_ibfk_2` FOREIGN KEY (`idrol`) REFERENCES `roles` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 10023 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 'mario', 'Mario', 'Aguilar', '8888888888', 1, 'sPLOVRHcWZjqnQLCfFIQytZimLIuxXbl', '$2y$13$z/0M2JiQbcIJNrySYNp4s.HXWfPKRJGqvAVgAOPQaBmvwhGYsnIuK', NULL, 'marioaguilar1990@gmail.com', 10, 0, 1543813416, 1543813416, 'marioaguilar.png', '2019-07-14 19:48:00', 'Activo', 1, '1');

-- ----------------------------
-- Table structure for user_ant
-- ----------------------------
DROP TABLE IF EXISTS `user_ant`;
CREATE TABLE `user_ant`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `city_id` int NULL DEFAULT NULL,
  `identity` varchar(13) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `names` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `lastnames` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `birthday` date NOT NULL,
  `username` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `phone` varchar(9) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `cellphone` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sex` enum('MALE','FEMALE') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `type` enum('CLIENT','ADMIN') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'CLIENT',
  `auth_key` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status` enum('ACTIVE','INACTIVE') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'INACTIVE',
  `password_reset_token` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `sap_id` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `fk_has_many`(`city_id` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of user_ant
-- ----------------------------
INSERT INTO `user_ant` VALUES (1, NULL, '0930178462', 'Mario', 'Aguilar', '2015-12-02', 'marioaguilar1990@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2222222', '999999999', 'MALE', '2017-07-09 16:28:02', 'ADMIN', 'kmfYgLCF3rgdke9HLPMiVTztN5rOylP6', 'ACTIVE', 's9b0OLmv7cc0Ys5PSkOEW1h0-Hu0_5Dk_1452786912', 1107181);

-- ----------------------------
-- Table structure for usuariorol
-- ----------------------------
DROP TABLE IF EXISTS `usuariorol`;
CREATE TABLE `usuariorol`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `idrol` int NOT NULL,
  `idusuario` int NOT NULL,
  `fechacreacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `usuariocreacion` int NOT NULL DEFAULT 1,
  `estatus` enum('ACTIVO','INACTIVO') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'ACTIVO',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `usuariocreacion`(`usuariocreacion` ASC) USING BTREE,
  INDEX `idrol`(`idrol` ASC) USING BTREE,
  INDEX `idusuario`(`idusuario` ASC) USING BTREE,
  CONSTRAINT `usuariorol_ibfk_1` FOREIGN KEY (`usuariocreacion`) REFERENCES `user_ant` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `usuariorol_ibfk_2` FOREIGN KEY (`idrol`) REFERENCES `roles` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `usuariorol_ibfk_3` FOREIGN KEY (`idusuario`) REFERENCES `user_ant` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of usuariorol
-- ----------------------------

SET FOREIGN_KEY_CHECKS = 1;
