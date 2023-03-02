/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 80031
 Source Host           : localhost:3306
 Source Schema         : bth

 Target Server Type    : MySQL
 Target Server Version : 80031
 File Encoding         : 65001

 Date: 02/03/2023 09:56:53
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for student
-- ----------------------------
DROP TABLE IF EXISTS `student`;
CREATE TABLE `student` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(80) NOT NULL,
  `age` int DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb3;

-- ----------------------------
-- Records of student
-- ----------------------------
BEGIN;
INSERT INTO `student` (`id`, `fullname`, `age`, `address`) VALUES (8, 'thanh', 23, 'hcm');
INSERT INTO `student` (`id`, `fullname`, `age`, `address`) VALUES (9, 'hưng', 12, 'hcm');
INSERT INTO `student` (`id`, `fullname`, `age`, `address`) VALUES (10, 'Tuấn Hưng Nguyễn', 12, 'nha trang');
INSERT INTO `student` (`id`, `fullname`, `age`, `address`) VALUES (11, 'tú', 29, 'đồng nai');
INSERT INTO `student` (`id`, `fullname`, `age`, `address`) VALUES (12, 'Nguyễn Thanh', 22, 'biên hòa');
INSERT INTO `student` (`id`, `fullname`, `age`, `address`) VALUES (13, 'Nguyễn Thị Cẩm Tú', 23, 'Huế');
INSERT INTO `student` (`id`, `fullname`, `age`, `address`) VALUES (14, 'Nguyễn Thanh Thảo', 21, 'Đồng Tháp');
INSERT INTO `student` (`id`, `fullname`, `age`, `address`) VALUES (15, ' Hoàng Thanh Nhi', 23, 'Bảo Lộc');
INSERT INTO `student` (`id`, `fullname`, `age`, `address`) VALUES (16, 'Nguyễn Bảo An', 23, 'Khánh Hòa');
INSERT INTO `student` (`id`, `fullname`, `age`, `address`) VALUES (17, 'Nguyễn Đan Thanh', 22, 'Đà Lạt');
INSERT INTO `student` (`id`, `fullname`, `age`, `address`) VALUES (18, 'Hà Anh Tuấn', 30, 'Lâm Đồng');
COMMIT;

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

-- ----------------------------
-- Records of user
-- ----------------------------
BEGIN;
INSERT INTO `user` (`id`, `username`, `password`) VALUES (1, 'admin', '123');
INSERT INTO `user` (`id`, `username`, `password`) VALUES (2, 'ad', '123');
INSERT INTO `user` (`id`, `username`, `password`) VALUES (3, 'hung', '1234');
INSERT INTO `user` (`id`, `username`, `password`) VALUES (4, 'hung1', '1234');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
