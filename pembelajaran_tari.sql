# Host: localhost  (Version 5.5.5-10.1.38-MariaDB)
# Date: 2022-06-14 15:12:01
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "tari daerah"
#

DROP TABLE IF EXISTS `tari daerah`;
CREATE TABLE `tari daerah` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama tari` varchar(25) DEFAULT NULL,
  `asal tari` varchar(20) DEFAULT NULL,
  `jenis tari` varchar(20) DEFAULT NULL,
  `jumlah penari` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "tari daerah"
#

