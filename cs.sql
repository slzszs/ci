/*
Navicat MySQL Data Transfer

Source Server         : 127
Source Server Version : 50141
Source Host           : localhost:3306
Source Database       : cs

Target Server Type    : MYSQL
Target Server Version : 50141
File Encoding         : 65001

Date: 2012-09-14 16:56:41
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `user_id` int(30) NOT NULL AUTO_INCREMENT,
  `company_id` int(30) DEFAULT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_rname` varchar(30) DEFAULT NULL COMMENT '姓名',
  `user_ename` varchar(60) DEFAULT NULL,
  `user_pass` varchar(60) NOT NULL,
  `user_purview` int(1) NOT NULL DEFAULT '1',
  `user_phone` varchar(30) DEFAULT NULL,
  `user_sex` int(1) DEFAULT '0',
  `user_email` varchar(60) NOT NULL,
  `user_status` int(1) NOT NULL DEFAULT '0',
  `user_avatar` varchar(60) DEFAULT 'user_comm.png',
  PRIMARY KEY (`user_id`),
  KEY `id` (`user_id`) USING HASH
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', '1', 'stone', '施磊', null, 'e10adc3949ba59abbe56e057f20f883e', '1', '12345678', '0', 'slzszs@126.com', '1', '1.jpg');

-- ----------------------------
-- Table structure for `user_login_log`
-- ----------------------------
DROP TABLE IF EXISTS `user_login_log`;
CREATE TABLE `user_login_log` (
  `log_id` int(30) NOT NULL AUTO_INCREMENT,
  `user_id` int(30) NOT NULL,
  `login_ip` varchar(30) NOT NULL,
  `login_date` varchar(30) NOT NULL,
  PRIMARY KEY (`log_id`),
  KEY `id` (`log_id`) USING HASH
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_login_log
-- ----------------------------
INSERT INTO `user_login_log` VALUES ('12', '1', '127.0.0.1', '1347419878');
INSERT INTO `user_login_log` VALUES ('13', '1', '127.0.0.1', '1347420308');
INSERT INTO `user_login_log` VALUES ('14', '1', '127.0.0.1', '1347431550');
INSERT INTO `user_login_log` VALUES ('15', '1', '127.0.0.1', '1347433757');
INSERT INTO `user_login_log` VALUES ('16', '1', '127.0.0.1', '1347434419');
INSERT INTO `user_login_log` VALUES ('17', '1', '127.0.0.1', '1347435338');
INSERT INTO `user_login_log` VALUES ('18', '1', '127.0.0.1', '1347504447');
INSERT INTO `user_login_log` VALUES ('19', '1', '127.0.0.1', '1347520348');
INSERT INTO `user_login_log` VALUES ('20', '1', '127.0.0.1', '1347523070');
INSERT INTO `user_login_log` VALUES ('21', '1', '127.0.0.1', '1347529821');
INSERT INTO `user_login_log` VALUES ('22', '1', '127.0.0.1', '1347531662');
INSERT INTO `user_login_log` VALUES ('23', '1', '127.0.0.1', '1347587575');
INSERT INTO `user_login_log` VALUES ('24', '1', '192.168.6.134', '1347609599');
INSERT INTO `user_login_log` VALUES ('25', '1', '192.168.6.145', '1347609629');
INSERT INTO `user_login_log` VALUES ('26', '1', '192.168.6.134', '1347609846');
INSERT INTO `user_login_log` VALUES ('27', '1', '192.168.6.145', '1347611030');
INSERT INTO `user_login_log` VALUES ('28', '1', '192.168.6.144', '1347611105');
INSERT INTO `user_login_log` VALUES ('29', '1', '192.168.6.150', '1347611164');
INSERT INTO `user_login_log` VALUES ('30', '1', '192.168.6.150', '1347611164');
INSERT INTO `user_login_log` VALUES ('31', '1', '192.168.6.150', '1347611164');
INSERT INTO `user_login_log` VALUES ('32', '1', '192.168.6.150', '1347611164');
INSERT INTO `user_login_log` VALUES ('33', '1', '192.168.6.150', '1347611164');
INSERT INTO `user_login_log` VALUES ('34', '1', '192.168.6.150', '1347611164');
INSERT INTO `user_login_log` VALUES ('35', '1', '192.168.6.150', '1347611165');
