# Host: localhost  (Version 5.5.5-10.1.38-MariaDB)
# Date: 2022-05-12 09:16:44
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "admin"
#

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "admin"
#

INSERT INTO `admin` VALUES (1,'tera','202cb962ac59075b964b07152d234b70');

#
# Structure for table "anggota"
#

DROP TABLE IF EXISTS `anggota`;
CREATE TABLE `anggota` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `nik` int(11) NOT NULL,
  `alamat` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

#
# Data for table "anggota"
#

INSERT INTO `anggota` VALUES (2,'Junaidi',323234234,'Jl. Kenari No.91 Jakarta'),(3,'Admiral',2147483647,'Jl. Mutan Putih no.73 Jakarta'),(4,'Ferdian Alghazali',2147483647,'Jl. Tanjung Kleng No.87 Jakarta'),(5,'Muhammad Samsudin',2147483647,'Jl. Ule Kareeng no.87 Jakarta'),(6,'Ishak Yamali',2147483647,'Jl. Sempeda No.384 Jakarta'),(7,'Reza Jamalu',2147483647,'Jl. Merpati Merah No.87 Jakarta'),(8,'Rahmad Hidayat',1771,'Jl. Hang tuah No 23');

#
# Structure for table "buku"
#

DROP TABLE IF EXISTS `buku`;
CREATE TABLE `buku` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `tahun` year(4) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

#
# Data for table "buku"
#

INSERT INTO `buku` VALUES (1,'Tutorial Codeigniter Lengkap Membangun Sistem Informasi Perpustakaan',2018,'Diki Alfarabi Hadi',1),(2,'Belajar cepat codeigniter dengan studi kasus membuat aplikasi rental mobil',2017,'Diki Alfarabi Hadi',1),(3,'Belajar PHP dan MySQLi dari dasar sampai membuat sistem informasi laundry',2018,'Diki Alfarabi Hadi',1),(4,'Panduan Belajar JQuery Dari Dasar Sampai Mahir Untuk Pemula',2016,'Diki Alfarabi Hadi',1),(5,'Belajar HTML dan CSS dari Dasar Sampai Mahir',2016,'Diki Alfarabi Hadi',1),(6,'Panduan Rancangan Jembatan Lengkap',2018,'Ferdiansyah',1);

#
# Structure for table "peminjaman"
#

DROP TABLE IF EXISTS `peminjaman`;
CREATE TABLE `peminjaman` (
  `peminjaman_id` int(11) NOT NULL AUTO_INCREMENT,
  `peminjaman_buku` int(11) NOT NULL,
  `peminjaman_anggota` int(11) NOT NULL,
  `peminjaman_tanggal_mulai` date NOT NULL,
  `peminjaman_tanggal_sampai` date NOT NULL,
  `peminjaman_status` int(11) NOT NULL,
  PRIMARY KEY (`peminjaman_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

#
# Data for table "peminjaman"
#

INSERT INTO `peminjaman` VALUES (2,1,3,'2018-06-26','2018-06-28',1),(3,4,2,'2018-06-26','2018-06-30',1),(4,6,4,'2018-07-04','2018-07-07',1),(5,3,6,'2018-07-03','2018-07-12',1),(6,6,2,'2021-11-09','2021-11-12',1),(8,6,5,'2021-11-09','2021-11-12',1),(9,2,4,'2021-11-10','2021-11-17',1);

#
# Structure for table "petugas"
#

DROP TABLE IF EXISTS `petugas`;
CREATE TABLE `petugas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

#
# Data for table "petugas"
#

INSERT INTO `petugas` VALUES (2,'rabbaim','baim','570c396b3fc856eceb8aa7357f32af1a'),(3,'jill fathan','jill','202cb962ac59075b964b07152d234b70');
