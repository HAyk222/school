/*
Navicat MySQL Data Transfer

Source Server         : hayk
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : school11

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-01-20 23:45:43
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `ararka`
-- ----------------------------
DROP TABLE IF EXISTS `ararka`;
CREATE TABLE `ararka` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `type` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`ID`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of ararka
-- ----------------------------
INSERT INTO ararka VALUES ('7', 'Հայոց լեզու', 'Հայոց լեզվի և գրականության մեթոդամիավորում');
INSERT INTO ararka VALUES ('8', 'Կենսաբանություն', 'Բնագիտական');
INSERT INTO ararka VALUES ('9', 'Հանրահաշիվ', 'Մաթեմատիկաի մեթոդամիավորում');
INSERT INTO ararka VALUES ('10', 'Երկրաչափություն', 'Մաթեմատիկաի մեթոդամիավորում');
INSERT INTO ararka VALUES ('11', 'Անգլերեն', 'Օտար լեզու');
INSERT INTO ararka VALUES ('12', 'Ռուսաց լեզու', 'Օտար լեզու');

-- ----------------------------
-- Table structure for `ararka_dasaran`
-- ----------------------------
DROP TABLE IF EXISTS `ararka_dasaran`;
CREATE TABLE `ararka_dasaran` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ararka_id` int(10) unsigned DEFAULT NULL,
  `dasaran_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`ID`) USING BTREE,
  KEY `ararka_id` (`ararka_id`) USING BTREE,
  KEY `dasaran_id` (`dasaran_id`) USING BTREE,
  CONSTRAINT `ararka_dasaran_ibfk_1` FOREIGN KEY (`ararka_id`) REFERENCES `ararka` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `ararka_dasaran_ibfk_2` FOREIGN KEY (`dasaran_id`) REFERENCES `dasaran` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of ararka_dasaran
-- ----------------------------

-- ----------------------------
-- Table structure for `ashakert`
-- ----------------------------
DROP TABLE IF EXISTS `ashakert`;
CREATE TABLE `ashakert` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `surname` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `dasaran_id` int(10) unsigned DEFAULT NULL,
  `nkar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`) USING BTREE,
  KEY `dasaran_id` (`dasaran_id`) USING BTREE,
  CONSTRAINT `ashakert_ibfk_1` FOREIGN KEY (`dasaran_id`) REFERENCES `dasaran` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of ashakert
-- ----------------------------
INSERT INTO ashakert VALUES ('2', 'zdfcsdf222', 'dcvdvdf2222', '12', '1547996802.jpg');
INSERT INTO ashakert VALUES ('5', 'Հայկ', 'Եղիազարյան', '12', '1547997999.jpg');
INSERT INTO ashakert VALUES ('6', 'ֆղդբգվֆդսգ', 'դֆբգֆ', '12', '1547998019.jpg');

-- ----------------------------
-- Table structure for `ayl_anznakazm`
-- ----------------------------
DROP TABLE IF EXISTS `ayl_anznakazm`;
CREATE TABLE `ayl_anznakazm` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `surname` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `pashton` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `nkar` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of ayl_anznakazm
-- ----------------------------
INSERT INTO ayl_anznakazm VALUES ('2', '9ujfewef', 'dfgsdfbhgsg22', 'Հոգեբան', 'noavatarn.png');
INSERT INTO ayl_anznakazm VALUES ('5', 'oijfbgv', 'okb vmsdfgv', 'Սով. հետ դաստ. աշխ. կազմ-իչ', null);

-- ----------------------------
-- Table structure for `ayl_xorhurd`
-- ----------------------------
DROP TABLE IF EXISTS `ayl_xorhurd`;
CREATE TABLE `ayl_xorhurd` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `surname` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `pashton` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `nkar` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ayl_xorhurd
-- ----------------------------
INSERT INTO ayl_xorhurd VALUES ('1', 'իյսդֆգվսֆգ', 'դգբդֆհբֆդգբ', 'Տնօրենի տեղակալ ուս. աշխ. գծով', '1541651419.jpg');
INSERT INTO ayl_xorhurd VALUES ('3', 'պդվլկդսֆդսֆ', 'ֆբգֆդգվվ', 'Տնօրենի տեղակալ մասն. կրթ. աջակց. գծով', '1541651455.jpg');

-- ----------------------------
-- Table structure for `cnoxakan_xorhurd`
-- ----------------------------
DROP TABLE IF EXISTS `cnoxakan_xorhurd`;
CREATE TABLE `cnoxakan_xorhurd` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `surname` varchar(255) NOT NULL,
  `pashton` varchar(255) NOT NULL,
  `nkar` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cnoxakan_xorhurd
-- ----------------------------
INSERT INTO cnoxakan_xorhurd VALUES ('1', 'ինդֆիցասդֆ', 'սֆդգվսդֆգվ', 'Տնօրեն', '1541649782.jpg');
INSERT INTO cnoxakan_xorhurd VALUES ('3', 'իհբսդֆդնֆց22', 'իյհբնյվգնսդֆվ', 'Տնօրենի տեղակալ մասն. կրթ. աջակց. գծով', '1541649882.jpg');

-- ----------------------------
-- Table structure for `dasaran`
-- ----------------------------
DROP TABLE IF EXISTS `dasaran`;
CREATE TABLE `dasaran` (
  `ID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `dasxek` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `dasxek_nkar` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `cnox_komite` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `cnox_komite_nkar` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `number_id` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`ID`) USING BTREE,
  KEY `number_id` (`number_id`),
  CONSTRAINT `dasaran_ibfk_1` FOREIGN KEY (`number_id`) REFERENCES `dasaran_number` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of dasaran
-- ----------------------------
INSERT INTO dasaran VALUES ('9', 'Ա', 'dfgrsgts', '1547856307.jpg', 'dfgrsrdgt', '', '1');
INSERT INTO dasaran VALUES ('12', 'Բ', 'Կարինե Գրիգորյան', '1547860079.jpg', 'sdrgvsdrg', '', '1');
INSERT INTO dasaran VALUES ('13', 'Գ', 'dfgsdrg', '', 'fgthdtghdghy', '', '1');
INSERT INTO dasaran VALUES ('14', 'Ա', 'srgsgtett', '1547938975.jpg', 'soiuehfaewr', '', '3');

-- ----------------------------
-- Table structure for `dasaran_number`
-- ----------------------------
DROP TABLE IF EXISTS `dasaran_number`;
CREATE TABLE `dasaran_number` (
  `ID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dasaran_number
-- ----------------------------
INSERT INTO dasaran_number VALUES ('1', '1');
INSERT INTO dasaran_number VALUES ('2', '2');
INSERT INTO dasaran_number VALUES ('3', '3');
INSERT INTO dasaran_number VALUES ('4', '4');
INSERT INTO dasaran_number VALUES ('5', '5');
INSERT INTO dasaran_number VALUES ('6', '6');
INSERT INTO dasaran_number VALUES ('7', '7');
INSERT INTO dasaran_number VALUES ('8', '8');
INSERT INTO dasaran_number VALUES ('9', '9');
INSERT INTO dasaran_number VALUES ('10', '10');
INSERT INTO dasaran_number VALUES ('14', '11');
INSERT INTO dasaran_number VALUES ('15', '12');

-- ----------------------------
-- Table structure for `dasatu`
-- ----------------------------
DROP TABLE IF EXISTS `dasatu`;
CREATE TABLE `dasatu` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `surname` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `nkar` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`ID`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of dasatu
-- ----------------------------
INSERT INTO dasatu VALUES ('1', 'Նաիռ', 'Կարապետյան', '1541816740.jpg');
INSERT INTO dasatu VALUES ('4', 'Մեսրոպ', 'Վարդանյան', 'noavatarn.png');
INSERT INTO dasatu VALUES ('5', 'Անի', 'Սահակյան', '');

-- ----------------------------
-- Table structure for `dasatu_ararka`
-- ----------------------------
DROP TABLE IF EXISTS `dasatu_ararka`;
CREATE TABLE `dasatu_ararka` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dasatu_id` int(10) unsigned DEFAULT NULL,
  `ararka_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`ID`) USING BTREE,
  KEY `dasatu_id` (`dasatu_id`) USING BTREE,
  KEY `ararka_id` (`ararka_id`) USING BTREE,
  CONSTRAINT `dasatu_ararka_ibfk_1` FOREIGN KEY (`dasatu_id`) REFERENCES `dasatu` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `dasatu_ararka_ibfk_2` FOREIGN KEY (`ararka_id`) REFERENCES `ararka` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of dasatu_ararka
-- ----------------------------
INSERT INTO dasatu_ararka VALUES ('1', '1', '7');
INSERT INTO dasatu_ararka VALUES ('4', '4', '12');
INSERT INTO dasatu_ararka VALUES ('5', '5', '11');

-- ----------------------------
-- Table structure for `dasatu_ashakert`
-- ----------------------------
DROP TABLE IF EXISTS `dasatu_ashakert`;
CREATE TABLE `dasatu_ashakert` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dasatu_id` int(10) unsigned DEFAULT NULL,
  `ashakert_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`ID`) USING BTREE,
  KEY `dasatu_id` (`dasatu_id`) USING BTREE,
  KEY `ashakert_id` (`ashakert_id`) USING BTREE,
  CONSTRAINT `dasatu_ashakert_ibfk_1` FOREIGN KEY (`dasatu_id`) REFERENCES `dasatu` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `dasatu_ashakert_ibfk_2` FOREIGN KEY (`ashakert_id`) REFERENCES `ashakert` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of dasatu_ashakert
-- ----------------------------

-- ----------------------------
-- Table structure for `dasatu_dasaran`
-- ----------------------------
DROP TABLE IF EXISTS `dasatu_dasaran`;
CREATE TABLE `dasatu_dasaran` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dasatu_id` int(10) unsigned DEFAULT NULL,
  `dasaran_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`ID`) USING BTREE,
  KEY `dasatu_id` (`dasatu_id`) USING BTREE,
  KEY `dasaran_id` (`dasaran_id`) USING BTREE,
  CONSTRAINT `dasatu_dasaran_ibfk_1` FOREIGN KEY (`dasatu_id`) REFERENCES `dasatu` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `dasatu_dasaran_ibfk_2` FOREIGN KEY (`dasaran_id`) REFERENCES `dasaran` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of dasatu_dasaran
-- ----------------------------
INSERT INTO dasatu_dasaran VALUES ('1', '4', '9');
INSERT INTO dasatu_dasaran VALUES ('2', '5', '9');
INSERT INTO dasatu_dasaran VALUES ('12', '5', '14');

-- ----------------------------
-- Table structure for `matyan`
-- ----------------------------
DROP TABLE IF EXISTS `matyan`;
CREATE TABLE `matyan` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `gnahatakan` varchar(255) DEFAULT NULL,
  `ashakert_id` int(10) unsigned DEFAULT NULL,
  `ararka_id` int(10) unsigned DEFAULT NULL,
  `dasatu_id` int(10) unsigned DEFAULT NULL,
  `dasaran_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`ID`) USING BTREE,
  KEY `ashakert_id` (`ashakert_id`) USING BTREE,
  KEY `ararka_id` (`ararka_id`) USING BTREE,
  KEY `dasatu_id` (`dasatu_id`) USING BTREE,
  KEY `dasaran_id` (`dasaran_id`) USING BTREE,
  CONSTRAINT `matyan_ibfk_1` FOREIGN KEY (`ashakert_id`) REFERENCES `ashakert` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `matyan_ibfk_2` FOREIGN KEY (`ararka_id`) REFERENCES `ararka` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `matyan_ibfk_3` FOREIGN KEY (`dasatu_id`) REFERENCES `dasatu` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `matyan_ibfk_4` FOREIGN KEY (`dasaran_id`) REFERENCES `dasaran` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of matyan
-- ----------------------------

-- ----------------------------
-- Table structure for `spasarkox_anznakazm`
-- ----------------------------
DROP TABLE IF EXISTS `spasarkox_anznakazm`;
CREATE TABLE `spasarkox_anznakazm` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `surname` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `pashton` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `nkar` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of spasarkox_anznakazm
-- ----------------------------
INSERT INTO spasarkox_anznakazm VALUES ('1', 'dsfgvsgv', 'dgtbhdegre', 'Տնօրեն', '1538304694.jpg');
INSERT INTO spasarkox_anznakazm VALUES ('6', 'cfgbvhgfvb', 'gfcbhfg222', 'Հաշվետար', null);
INSERT INTO spasarkox_anznakazm VALUES ('7', 'fgdfgdg', 'fgnhfghfdhbfhb', 'Գրադարանի վարիչ', null);
INSERT INTO spasarkox_anznakazm VALUES ('8', 'ijadfvafc222', 'fgvbsdfgvdfv', 'Գլխավոր հաշվապահ', null);

-- ----------------------------
-- Table structure for `us_xorhurd`
-- ----------------------------
DROP TABLE IF EXISTS `us_xorhurd`;
CREATE TABLE `us_xorhurd` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `surname` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `pashton` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `nkar` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of us_xorhurd
-- ----------------------------

-- ----------------------------
-- Table structure for `varchakazm`
-- ----------------------------
DROP TABLE IF EXISTS `varchakazm`;
CREATE TABLE `varchakazm` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `surname` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `pashton` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `nkar` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of varchakazm
-- ----------------------------
INSERT INTO varchakazm VALUES ('20', 'ghnjgfnh22', 'fgnh gfh', 'Տնօրեն', 'Jellyfish.jpg');
INSERT INTO varchakazm VALUES ('21', 'grdrgft22', 'fghgthty', 'Տնօրեն', 'Hydrangeas.jpg');
INSERT INTO varchakazm VALUES ('22', 'fdgdsfg', 'ghjfyjyhju', 'Տնօրենի տեղակալ ուս. աշխ. գծով', '1538290126.jpg');
INSERT INTO varchakazm VALUES ('24', 'dfgvdsfgv132', 'dfbgfdg', 'Տնօրեն', null);
INSERT INTO varchakazm VALUES ('26', 'fcbgdxfgfd2', 'gvbbg2', 'Տնօրենի տեղակալ մասն. կրթ. աջակց. գծով', null);
INSERT INTO varchakazm VALUES ('27', 'cfghbfdhbfdh', 'gfbnhgfh', 'Տնօրեն', '');
INSERT INTO varchakazm VALUES ('28', 'dfgsdf fc', 'dfbgvdfgv', 'Տնօրեն', '');
INSERT INTO varchakazm VALUES ('29', 'fdgbdsfgv', 'gfcbhdfb', 'Տնօրեն', '1538306378.jpg');
INSERT INTO varchakazm VALUES ('30', 'aa', 'aaaa', 'Տնօրեն', '');
INSERT INTO varchakazm VALUES ('31', 'Պետրոս', 'Պողոսյան', 'Տնօրեն', 'Koala.jpg');
INSERT INTO varchakazm VALUES ('32', 'про', 'դֆգդսգռսդհֆհբ', 'Տնօրենի տեղակալ մասն. կրթ. աջակց. գծով', '1540077072.jpg');
INSERT INTO varchakazm VALUES ('33', 'oksdmovdf', 'fbofgv', 'Տնօրեն', '');
INSERT INTO varchakazm VALUES ('34', 'oksdmovdf', 'fbofgv', 'Տնօրեն', '');
INSERT INTO varchakazm VALUES ('35', 'okfmbhmfrgSDxaSX', 'XDVGFAFDBHGB', 'Տնօրեն', '');
