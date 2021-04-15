/*
SQLyog Community v13.1.5  (64 bit)
MySQL - 10.4.8-MariaDB : Database - ecomm
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`ecomm` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `ecomm`;

/*Table structure for table `barang` */

DROP TABLE IF EXISTS `barang`;

CREATE TABLE `barang` (
  `id_brg` int(10) NOT NULL AUTO_INCREMENT,
  `nama_brg` varchar(100) DEFAULT NULL,
  `harga` int(100) DEFAULT NULL,
  `kategori` varchar(100) DEFAULT NULL,
  `deskripsi` varchar(1000) DEFAULT NULL,
  `stok` int(10) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_brg`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `barang` */

insert  into `barang`(`id_brg`,`nama_brg`,`harga`,`kategori`,`deskripsi`,`stok`,`gambar`) values 
(1,'pensil',3000,'alat_tulis','pensil untuk menulis kata',100,'pensil.jpg'),
(2,'tv',1000000,'elektronik','tv lebih dari tv jadul',10,'tv.jpg'),
(3,'sapu lidi',15000,'rumah_tangga','untuk menyapu dosamu',25,'sapu.jpg'),
(4,'velg rossi',5000000,'otomotif','untuk motor resing',5,'velg.jpg');

/*Table structure for table `tb_file` */

DROP TABLE IF EXISTS `tb_file`;

CREATE TABLE `tb_file` (
  `kd_file` int(11) NOT NULL AUTO_INCREMENT,
  `nama_file` varchar(255) DEFAULT NULL,
  `tipe_file` varchar(100) DEFAULT NULL,
  `ukuran_file` float NOT NULL,
  PRIMARY KEY (`kd_file`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tb_file` */

insert  into `tb_file`(`kd_file`,`nama_file`,`tipe_file`,`ukuran_file`) values 
(1,'logo6.png','.png',8.93),
(2,'78a09b020504153e024f2c776371fe44.png','.png',8.93);

/*Table structure for table `tbl_detail_order` */

DROP TABLE IF EXISTS `tbl_detail_order`;

CREATE TABLE `tbl_detail_order` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(10) DEFAULT NULL,
  `produk` int(10) DEFAULT NULL,
  `qty` int(10) DEFAULT NULL,
  `harga` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_detail_order` */

insert  into `tbl_detail_order`(`id`,`order_id`,`produk`,`qty`,`harga`) values 
(1,1,9,1,'6100000'),
(2,1,2,1,'6250000');

/*Table structure for table `tbl_kategori` */

DROP TABLE IF EXISTS `tbl_kategori`;

CREATE TABLE `tbl_kategori` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_kategori` */

insert  into `tbl_kategori`(`id`,`nama_kategori`) values 
(1,'Laptop'),
(2,'Smartphone'),
(3,'Robot');

/*Table structure for table `tbl_order` */

DROP TABLE IF EXISTS `tbl_order`;

CREATE TABLE `tbl_order` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `tanggal` date DEFAULT NULL,
  `pelanggan` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_order` */

insert  into `tbl_order`(`id`,`tanggal`,`pelanggan`) values 
(1,'2021-04-15',1);

/*Table structure for table `tbl_pelanggan` */

DROP TABLE IF EXISTS `tbl_pelanggan`;

CREATE TABLE `tbl_pelanggan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_pelanggan` */

insert  into `tbl_pelanggan`(`id`,`nama`,`email`,`alamat`,`telp`) values 
(1,'rizki shafara','rizkishafara99@gmail.com','jalan','121313');

/*Table structure for table `tbl_produk` */

DROP TABLE IF EXISTS `tbl_produk`;

CREATE TABLE `tbl_produk` (
  `id_produk` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_produk` varchar(50) DEFAULT NULL,
  `deskripsi` varchar(50) DEFAULT NULL,
  `harga` varchar(10) DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL,
  `kategori` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_produk`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_produk` */

insert  into `tbl_produk`(`id_produk`,`nama_produk`,`deskripsi`,`harga`,`gambar`,`kategori`) values 
(1,'Laptop 1','laptop 1 bagus','3500000','laptop1.jpg',1),
(2,'Laptop 2','laptop 2 bagus banget','6250000','laptop2.jpg',1),
(3,'Laptop 3','laptop 3 keren','7250000','laptop3.jpg',1),
(4,'Smartphone 1','smartphone 1 canggih','3560000','hp1.jpg',2),
(5,'Smartphone 2','smartphone 2 gaming','4300000','hp2.jpg',2),
(6,'Smartphone 3','smartphone 3 bagus','5100000','hp3.jpg',2),
(7,'Robot 1','robot tank','3500000','robot1.jpg',3),
(8,'Robot 2','robot penganggkut','4500000','robot2.jpg',3),
(9,'Robot 3','robot mainan','6100000','robot3.jpg',3);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `role` enum('user','admin') NOT NULL DEFAULT 'user',
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `users` */

insert  into `users`(`id_user`,`nama`,`email`,`username`,`password`,`role`) values 
(1,'admin','admin@gmail.com','admin','21232f297a57a5a743894a0e4a801fc3','admin'),
(2,'Rizki','rizkishafara99@gmail.com','rizki','202cb962ac59075b964b07152d234b70','user'),
(4,'user','user@gmail.com','user','ee11cbb19052e40b07aac0ca060c23ee','user'),
(5,'coba','coba@gmail.com','coba','c3ec0f7b054e729c5a716c8125839829','user');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
