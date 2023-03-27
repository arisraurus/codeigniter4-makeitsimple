/*
Navicat MySQL Data Transfer

Source Server         : server_lte
Source Server Version : 80030
Source Host           : localhost:3306
Source Database       : starter_crud

Target Server Type    : MYSQL
Target Server Version : 80030
File Encoding         : 65001

Date: 2023-03-27 11:12:46
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for buku_tamu
-- ----------------------------
DROP TABLE IF EXISTS `buku_tamu`;
CREATE TABLE `buku_tamu` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tanggal_masuk` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `jam_masuk` varchar(10) DEFAULT NULL,
  `jam_keluar` varchar(10) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `dari_mana` varchar(50) DEFAULT NULL,
  `telpon` varchar(20) DEFAULT NULL,
  `keperluan` text,
  `created_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Tanggal Masuk';

-- ----------------------------
-- Records of buku_tamu
-- ----------------------------
INSERT INTO `buku_tamu` VALUES ('2', '2020-01-20', '09:22', '', 'Supardiyanto', 'FAAST', '0274 6788 900', 'Memberikan salam perdamaian untuk guru BK\r\nSalam sejahtera untuk seluruh warga negara yang berbahagia damai dan sentosa.', '2023-03-27 11:00:01', '2023-03-27 04:00:01', '2023-03-27 11:00:01');
INSERT INTO `buku_tamu` VALUES ('6', '2023-03-27', '09:00', '16:57', 'Andi Firmansyah', 'Depok Jawa Barat', '0877 899000', 'Bertemu dengan bapak negara republik indonesia tercinta yang tidak ada duanya di negeri kita tercinta ini , dari pada itu juga kita harus menghormati dia yang selalu memberikan kontribusi terbaik untuk bangsa ini karena kita tahu bahwa beliau adalah orang yang paling berjasa untuk negara tercinta ini.', '2023-03-27 10:57:26', '2023-03-27 03:57:26', '2023-03-27 10:57:26');
INSERT INTO `buku_tamu` VALUES ('7', '2023-03-27', '09:00', null, 'Gita Ramadhani', 'Babarsari', '087745678901', 'Gendong bayi', '2023-03-27 09:17:31', '2023-03-27 02:17:31', '2023-03-27 09:17:31');
INSERT INTO `buku_tamu` VALUES ('8', '2023-02-27', '10:53', null, 'Markonah Surinto', 'Jakarta', '021 789 908', 'Membajak sawa', '2023-03-27 10:53:08', '2023-03-27 03:53:08', '2023-03-27 10:53:08');
INSERT INTO `buku_tamu` VALUES ('10', '2023-03-26', '20:22', null, 'Tri Arisma', 'Sleman', '089688389687', 'Memberikan ucapan terimakasih kepada kepala sekolah yang sudah membantu dalam merencakanan pendidikan bagi seluruh rakyat indonesia yang sejahtera dan sentosa dalam rangka kemajua bangsa seluruh indonesia yang mana dari pada itu adalah tujuan dari Bangsa Indonesia seluruh nya \r\nMerdeka adalah nama yang baik untuk diberikan hanya kepada yang mana dia Adalah Anak Yang telah membantu negara indonesia tercinta dalam rangka menjaga kedamaian.', '2023-03-27 10:41:36', '2023-03-27 10:41:36', '2023-03-27 10:41:36');
INSERT INTO `buku_tamu` VALUES ('11', '2023-03-27', '09:17', '10:58', 'Sukirman', 'SMA N 1 Pajangan', '0888 788 222', 'Jenguk anak yang nakal di ruang BK', '2023-03-27 10:58:39', '2023-03-27 03:58:39', '2023-03-27 10:58:39');
INSERT INTO `buku_tamu` VALUES ('13', '2023-03-27', '10:51', null, 'Prasetyo Pamungkas', 'Ngentak Mangir', '0822 5678 9000', 'Bertemu dengan bapak kepala sekolah yang terhormat dan budiman pekertinya tiada yang bisa menandingi kebaikan beliau', '2023-03-27 03:52:52', '2023-03-27 03:52:52', null);
INSERT INTO `buku_tamu` VALUES ('14', '2023-03-27', '10:56', '16:57', 'Malaya Agustina', 'Malasya', '0272828', 'Selamat datang di negeri indonesia tercinta', '2023-03-27 03:57:09', '2023-03-27 03:57:09', null);
SET FOREIGN_KEY_CHECKS=1;
