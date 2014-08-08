/*
MySQL Data Transfer
Source Host: localhost
Source Database: bot
Target Host: localhost
Target Database: bot
Date: 07/08/2014 19:22:47
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for libs
-- ----------------------------
DROP TABLE IF EXISTS `libs`;
CREATE TABLE `libs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) DEFAULT NULL,
  `divs` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

