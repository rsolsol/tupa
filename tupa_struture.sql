/*
Navicat MySQL Data Transfer

Source Server         : el 77
Source Server Version : 50505
Source Host           : 192.168.2.77:3306
Source Database       : tupa

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-12-01 13:35:19
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for calificacion
-- ----------------------------
DROP TABLE IF EXISTS `calificacion`;
CREATE TABLE `calificacion` (
  `id_gerencias` int(2) NOT NULL,
  `id_procedimientos` int(2) NOT NULL,
  `id_subproced` int(2) NOT NULL,
  `calificacion` int(2) NOT NULL,
  `plazo_resolver` int(2) NOT NULL,
  `inicio_procedimiento` varchar(100) NOT NULL,
  `resuelve` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for detalle
-- ----------------------------
DROP TABLE IF EXISTS `detalle`;
CREATE TABLE `detalle` (
  `id_gerencias` int(2) NOT NULL,
  `id_procedimientos` int(2) NOT NULL,
  `id_subproced` int(2) NOT NULL,
  `id_detalle` int(2) NOT NULL,
  `detalle_tupa` varchar(1000) NOT NULL,
  `titulo_detalle` tinyint(1) unsigned zerofill DEFAULT NULL,
  `estado_detalle` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for gerencias
-- ----------------------------
DROP TABLE IF EXISTS `gerencias`;
CREATE TABLE `gerencias` (
  `id_gerencias` int(2) NOT NULL,
  `gerencia_dependencia` varchar(100) NOT NULL,
  `activacion` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for pago
-- ----------------------------
DROP TABLE IF EXISTS `pago`;
CREATE TABLE `pago` (
  `id_gerencias` int(2) NOT NULL,
  `id_procedimientos` int(2) NOT NULL,
  `id_subproced` int(2) NOT NULL,
  `id_pago` int(2) NOT NULL,
  `detalle_pago` varchar(60) NOT NULL,
  `pago_porc` varchar(10) NOT NULL,
  `pago_valor` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for procedimientos
-- ----------------------------
DROP TABLE IF EXISTS `procedimientos`;
CREATE TABLE `procedimientos` (
  `id_gerencias` int(2) NOT NULL,
  `id_procedimientos` int(2) NOT NULL,
  `detalles_proced` varchar(250) NOT NULL,
  `pro_ser` int(2) NOT NULL,
  `activacion` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for subprocedimientos
-- ----------------------------
DROP TABLE IF EXISTS `subprocedimientos`;
CREATE TABLE `subprocedimientos` (
  `id_gerencias` int(2) NOT NULL,
  `id_procedimientos` int(2) NOT NULL,
  `id_subproced` int(2) NOT NULL,
  `detalle_subproc` varchar(250) NOT NULL,
  `activacion` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
