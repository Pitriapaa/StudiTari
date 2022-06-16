# Host: localhost  (Version 5.5.5-10.4.22-MariaDB)
# Date: 2022-06-16 09:08:05
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "daftartari"
#

DROP TABLE IF EXISTS `daftartari`;
CREATE TABLE `daftartari` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_tari` varchar(25) DEFAULT NULL,
  `asal_tari` varchar(20) DEFAULT NULL,
  `jenis_tari` varchar(20) DEFAULT NULL,
  `jumlah_penari` varchar(15) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

#
# Data for table "daftartari"
#

INSERT INTO `daftartari` VALUES (1,'tari piring','sumatera barat','tari klasik','5','Tari-Piring-Solok.jpeg'),(2,'tari saman','aceh','tari traditional','8','tari-saman_width-800_jpegquality-80.jpg');

#
# Structure for table "user"
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama_depan` varchar(255) DEFAULT NULL,
  `nama_belakang` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `konfirpassword` varchar(255) DEFAULT NULL,
  `profile` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

#
# Data for table "user"
#

INSERT INTO `user` VALUES (7,'iqbal','sonata','iqbalsonata2@gmail.com','$argon2id$v=19$m=65536,t=4,p=1$SWJVSUY5YmdobVdPNU16TA$QZGyX+Mrp+tcfGgCPtMr3NWf3UFUT/vTpktUsWoAx8s','$2y$10$dpkx6jV.6/9w2IBelrKQ/eR5NtUPA3TEZN7qsbcUl6ZEKlG8WIm7u','profile1.png');
