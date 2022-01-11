/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100136
 Source Host           : localhost:3306
 Source Schema         : datos_web

 Target Server Type    : MySQL
 Target Server Version : 100136
 File Encoding         : 65001

 Date: 04/03/2019 21:46:05
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for datos_web
-- ----------------------------
DROP TABLE IF EXISTS `datos_web`;
CREATE TABLE `datos_web`  (
  `ID` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `favicon` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `menu1` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `menu2` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `menu3` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `menu4` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `menu5` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `menu6` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `menu7` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `logo` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `titulo` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `descripcion_titulo` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `autor` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `carrousel_1` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `carrousel_2` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `carrousel_3` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `titulo_carrousel_1` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `titulo_carrousel_2` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `titulo_carrousel_3` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `desc_carrousel_1` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `desc_carrousel_2` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `desc_carrousel_3` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `boton_carrousel_1` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `boton_carrousel_2` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `boton_carrousel_3` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `boton_link_carrousel_1` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `boton_link_carrousel_2` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `boton_link_carrousel_3` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `icono_1` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `icono_2` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `icono_3` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `icono_4` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `titulo_icono_1` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `titulo_icono_2` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `titulo_icono_3` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `titulo_icono_4` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `desc_icono_1` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `desc_icono_2` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `desc_icono_3` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `desc_icono_4` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `descripcion_donaciones` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `detalle_rate_custom_exp` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `detalle_rate_custom_sp` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `detalle_rate_custom_adena` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `detalle_rate_custom_drop` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `detalle_rate_custom_offline_shop` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `detalle_rate_custom_autopickup` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `detalle_rate_custom_auto_learn_skills` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `detalle_rate_custom_safe_enchant` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `detalle_rate_custom_max_enchant` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `detalle_rate_custom_normal_enchant` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `detalle_rate_custom_ancient_enchant` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `detalle_rate_custom_divine_enchant` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `detalle_rate_custom_buffer` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `detalle_rate_custom_gmshop` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `detalle_rate_custom_quest` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `detalle_rate_custom_subclass` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `detalle_rate_custom_nobles` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `detalle_rate_custom_starting_level` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `detalle_rate_custom_subclass_acumulativa` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `facebook` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ip_servidor` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `link_cliente_1` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `link_cliente_2` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `link_cliente_3` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `link_parche_1` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `link_parche_2` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `link_donacion_1` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `link_donacion_2` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `link_donacion_3` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `link_donacion_4` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `link_donacion_5` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`favicon`) USING BTREE,
  INDEX `Índice 1`(`ID`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of datos_web
-- ----------------------------
INSERT INTO `datos_web` VALUES ('1', 'img/favicon.ico', 'INICIO', 'GALERIA', 'DESCARGAS', 'RATES', 'ESTADISTICAS', 'DONACIONES', 'FACEBOOK', 'img/logo.png', 'Lineage2Jeriko90', 'Estas es una plantilla web para tu server de lineage 2', 'L2DevsAdmins', 'img/carrousel_1.jpg', 'img/carrousel_2.jpg', 'img/carrousel_3.jpg', 'Bienvenidos al Lineage2', 'Bienvenidos al Lineage2', 'Bienvenidos al Lineage2', 'Aca va una descripcion', 'Aca va una descripcion', 'Aca va una descripcion', 'Boton 001', 'Boton 002', 'Boton 003', 'www.google.com.ar', 'www.google.com.ar', 'www.google.com.ar', 'fa-server', 'fa-user-secret', 'fa-credit-card', 'fa-code', 'Datacenter', 'Proteccion', 'Donaciones', 'Desarrollo', 'Contamos con el mejor servidor dedidato de latinoamerica .', 'Contamos con seguridad paga , soporta la mayoria de scripts.', 'El servidor es  totalmente gratiuto , pero puedes donar para su mantenimiento .', 'Nuevos eventos mes a mes para que siempre estes divirtiendote.', 'Medios de pagos activados ( Paypal - PagoMiscuentas - DineroMail - PagoFacil - RapiPago)', '1', '2', '3', '4', 'NO', 'SI', 'SI', '8', '9', '10', '11', '12', 'SI', 'SI', '40', 'NO', '76', '20', 'NO', 'lineage2', '181.114.198.4', 'www.linkdelcliente1.com', 'www.linkdelcliente2.com', 'www.linkdelcliente3.com', 'www.mediafire.com', 'www.mega.nz', 'http://mercadolibre.com.ar/', 'http://mercadolibre.com.ar/', 'http://mercadolibre.com.ar/', 'http://mercadolibre.com.ar/', 'http://mercadolibre.com.ar/');

-- ----------------------------
-- Table structure for galeria
-- ----------------------------
DROP TABLE IF EXISTS `galeria`;
CREATE TABLE `galeria`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 27 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of galeria
-- ----------------------------
INSERT INTO `galeria` VALUES (14, 'galeria001', '../assets/img/galeria001.jpg', NULL, NULL);
INSERT INTO `galeria` VALUES (15, 'galeria002', '../assets/img/galeria002.jpg', NULL, NULL);
INSERT INTO `galeria` VALUES (16, 'galeria003', '../assets/img/galeria003.jpg', NULL, NULL);
INSERT INTO `galeria` VALUES (17, 'galeria004', '../assets/img/galeria004.jpg', NULL, NULL);
INSERT INTO `galeria` VALUES (18, 'galeria005', '../assets/img/galeria005.jpg', NULL, NULL);
INSERT INTO `galeria` VALUES (19, 'galeria006', '../assets/img/galeria006.jpg', NULL, NULL);
INSERT INTO `galeria` VALUES (25, 'galeria007', '../assets/img/galeria007.jpg', NULL, NULL);
INSERT INTO `galeria` VALUES (26, 'galeria008', '../assets/img/galeria008.jpg', NULL, NULL);