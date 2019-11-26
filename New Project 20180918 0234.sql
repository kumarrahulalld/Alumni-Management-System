-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.1.73-community


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema alumni
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ alumni;
USE alumni;

--
-- Table structure for table `alumni`.`event`
--

DROP TABLE IF EXISTS `event`;
CREATE TABLE `event` (
  `subject` varchar(20) NOT NULL,
  `place` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `describes` text NOT NULL,
  `image` varchar(25) NOT NULL,
  `sr` int(2) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`subject`),
  UNIQUE KEY `sr` (`sr`),
  UNIQUE KEY `sr_2` (`sr`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumni`.`event`
--

/*!40000 ALTER TABLE `event` DISABLE KEYS */;
/*!40000 ALTER TABLE `event` ENABLE KEYS */;


--
-- Table structure for table `alumni`.`feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE `feedback` (
  `fb_no` int(2) NOT NULL AUTO_INCREMENT,
  `name` char(20) NOT NULL,
  `email` char(40) NOT NULL,
  `moment` text NOT NULL,
  `subject` char(40) DEFAULT NULL,
  `comtype` char(10) NOT NULL,
  PRIMARY KEY (`fb_no`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumni`.`feedback`
--

/*!40000 ALTER TABLE `feedback` DISABLE KEYS */;
/*!40000 ALTER TABLE `feedback` ENABLE KEYS */;


--
-- Table structure for table `alumni`.`registration`
--

DROP TABLE IF EXISTS `registration`;
CREATE TABLE `registration` (
  `alumni_no` int(2) NOT NULL AUTO_INCREMENT,
  `fname` char(20) NOT NULL,
  `lname` char(20) NOT NULL,
  `gender` char(6) NOT NULL,
  `mobile` char(10) NOT NULL,
  `email` char(40) NOT NULL,
  `dob` char(15) NOT NULL,
  `yop` char(4) NOT NULL,
  `degree` char(6) NOT NULL,
  `work` char(20) NOT NULL,
  `co` char(60) NOT NULL,
  `jp` char(40) NOT NULL,
  `moment` text NOT NULL,
  `image` char(20) NOT NULL,
  `facebook` char(40) DEFAULT NULL,
  `twitter` char(40) DEFAULT NULL,
  `linkedin` char(60) DEFAULT NULL,
  `status` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`alumni_no`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumni`.`registration`
--

/*!40000 ALTER TABLE `registration` DISABLE KEYS */;
INSERT INTO `registration` (`alumni_no`,`fname`,`lname`,`gender`,`mobile`,`email`,`dob`,`yop`,`degree`,`work`,`co`,`jp`,`moment`,`image`,`facebook`,`twitter`,`linkedin`,`status`) VALUES 
 (6,'Rahul','Mishra','male','9999444422','rahulmishra@gmail.com','1994-03-05','2016','BCA','salaried','REACHED','N/A','eretryt','ravi.jpg','','','','YES');
/*!40000 ALTER TABLE `registration` ENABLE KEYS */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
