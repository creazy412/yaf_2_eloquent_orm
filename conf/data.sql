/*
SQLyog Ultimate v11.27 (32 bit)
MySQL - 5.5.53 : Database - yaf
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`yaf` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `yaf`;

/*Table structure for table `yaf` */

DROP TABLE IF EXISTS `yaf`;

CREATE TABLE `yaf` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `name` varchar(255) DEFAULT '''''' COMMENT '用户名',
  `email` varchar(255) DEFAULT '''''' COMMENT '邮箱',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='00';

/*Data for the table `yaf` */

insert  into `yaf`(`id`,`name`,`email`) values (1,'小明','xiaoming@qq.com'),(2,'小红','xiaohong@qq.com'),(3,'laok888','laok5182@126.com'),(5,'yerui','yerui@qq.com');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
