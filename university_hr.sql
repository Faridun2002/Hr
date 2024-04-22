/*
SQLyog Ultimate v12.14 (64 bit)
MySQL - 5.6.51 : Database - university_hr
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`university_hr` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `university_hr`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `Admin_Id` int(11) NOT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Admin_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `admin` */

insert  into `admin`(`Admin_Id`,`Email`,`Password`) values 
(1,'admin1@example.com','password1'),
(2,'admin2@example.com','password2'),
(3,'admin3@example.com','password3'),
(4,'admin4@example.com','password4'),
(5,'admin5@example.com','password5');

/*Table structure for table `degrees` */

DROP TABLE IF EXISTS `degrees`;

CREATE TABLE `degrees` (
  `Degree_Id` int(11) NOT NULL,
  `Degree_Name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Degree_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `degrees` */

insert  into `degrees`(`Degree_Id`,`Degree_Name`) values 
(1,'Bachelor'),
(2,'Master'),
(3,'PhD'),
(4,'Associate'),
(5,'Diploma');

/*Table structure for table `departments` */

DROP TABLE IF EXISTS `departments`;

CREATE TABLE `departments` (
  `Department_Id` int(11) NOT NULL,
  `Department_Name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Department_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `departments` */

insert  into `departments`(`Department_Id`,`Department_Name`) values 
(1,'Department of Science'),
(2,'Department of Arts'),
(3,'Department of Literature'),
(4,'Department of Engineering'),
(5,'Department of Medicine');

/*Table structure for table `employees` */

DROP TABLE IF EXISTS `employees`;

CREATE TABLE `employees` (
  `Employee_Id` int(11) NOT NULL,
  `Full_Name` varchar(255) DEFAULT NULL,
  `Date_of_Birth` date DEFAULT NULL,
  `Place_of_Birth` varchar(255) DEFAULT NULL,
  `Position_Id` int(11) DEFAULT NULL,
  `Degree_Id` int(11) DEFAULT NULL,
  `Faculty_Id` int(11) DEFAULT NULL,
  `Department_Id` int(11) DEFAULT NULL,
  `User_Role_Id` int(11) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Phone_Number` varchar(20) DEFAULT NULL,
  `Employee_Number` varchar(20) DEFAULT NULL,
  `Date_Added` date DEFAULT NULL,
  `Path_Photo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Employee_Id`),
  KEY `Degree_Id` (`Degree_Id`),
  KEY `Faculty_Id` (`Faculty_Id`),
  KEY `Department_Id` (`Department_Id`),
  KEY `User_Role_Id` (`User_Role_Id`),
  CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`Employee_Id`) REFERENCES `positions` (`Position_Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `employees_ibfk_2` FOREIGN KEY (`Degree_Id`) REFERENCES `degrees` (`Degree_Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `employees_ibfk_3` FOREIGN KEY (`Faculty_Id`) REFERENCES `faculties` (`Faculty_Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `employees_ibfk_4` FOREIGN KEY (`Department_Id`) REFERENCES `departments` (`Department_Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `employees_ibfk_5` FOREIGN KEY (`User_Role_Id`) REFERENCES `user_roles` (`User_Role_Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `employees_ibfk_6` FOREIGN KEY (`Employee_Id`) REFERENCES `training` (`Training_Id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `employees` */

insert  into `employees`(`Employee_Id`,`Full_Name`,`Date_of_Birth`,`Place_of_Birth`,`Position_Id`,`Degree_Id`,`Faculty_Id`,`Department_Id`,`User_Role_Id`,`Email`,`Phone_Number`,`Employee_Number`,`Date_Added`,`Path_Photo`) values 
(1,'John Doe','1990-05-15','New York',1,3,1,1,2,'john.doe@example.com','123-456-7890','EMP001','2023-01-01',NULL),
(2,'Jane Smith','1985-10-20','Los Angeles',2,2,2,2,2,'jane.smith@example.com','987-654-3210','EMP002','2023-01-02',NULL),
(3,'Michael Johnson','1988-03-25','Chicago',3,1,3,3,2,'michael.johnson@example.com','111-222-3333','EMP003','2023-01-03',NULL),
(4,'Emily Brown','1995-07-10','Houston',4,4,4,4,2,'emily.brown@example.com','444-555-6666','EMP004','2023-01-04',NULL),
(5,'William Taylor','1992-12-30','Boston',5,5,5,5,2,'william.taylor@example.com','777-888-9999','EMP005','2023-01-05',NULL);

/*Table structure for table `faculties` */

DROP TABLE IF EXISTS `faculties`;

CREATE TABLE `faculties` (
  `Faculty_Id` int(11) NOT NULL,
  `Faculty_Name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Faculty_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `faculties` */

insert  into `faculties`(`Faculty_Id`,`Faculty_Name`) values 
(1,'Faculty of Science'),
(2,'Faculty of Arts'),
(3,'Faculty of Literature'),
(4,'Faculty of Engineering'),
(5,'Faculty of Medicine');

/*Table structure for table `plans` */

DROP TABLE IF EXISTS `plans`;

CREATE TABLE `plans` (
  `Plan_Id` int(11) NOT NULL,
  `Plan_Name` varchar(255) DEFAULT NULL,
  `Plan_Credit` int(11) DEFAULT NULL,
  `Employee_Id` int(11) NOT NULL,
  `Status` int(11) DEFAULT '0',
  PRIMARY KEY (`Plan_Id`),
  KEY `Employee_Id` (`Employee_Id`),
  CONSTRAINT `plans_ibfk_1` FOREIGN KEY (`Employee_Id`) REFERENCES `employees` (`Employee_Id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `plans` */

insert  into `plans`(`Plan_Id`,`Plan_Name`,`Plan_Credit`,`Employee_Id`,`Status`) values 
(1,'Plan 1',3,1,0),
(2,'Plan 2',4,2,0),
(3,'Plan 3',5,1,0),
(4,'Plan 4',2,2,0),
(5,'Plan 5',2,1,0);

/*Table structure for table `positions` */

DROP TABLE IF EXISTS `positions`;

CREATE TABLE `positions` (
  `Position_Id` int(11) NOT NULL,
  `Position_Name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Position_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `positions` */

insert  into `positions`(`Position_Id`,`Position_Name`) values 
(1,'Professor'),
(2,'Associate Professor'),
(3,'Assistant Professor'),
(4,'Researcher'),
(5,'Lecturer');

/*Table structure for table `ratings` */

DROP TABLE IF EXISTS `ratings`;

CREATE TABLE `ratings` (
  `Rating_Id` int(11) NOT NULL,
  `Employee_Id` int(11) DEFAULT NULL,
  `Credit_Done` int(11) DEFAULT NULL,
  `Credit_Full` int(11) DEFAULT NULL,
  `Rating` decimal(3,2) DEFAULT NULL,
  PRIMARY KEY (`Rating_Id`),
  KEY `Employee_Id` (`Employee_Id`),
  CONSTRAINT `ratings_ibfk_1` FOREIGN KEY (`Employee_Id`) REFERENCES `employees` (`Employee_Id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ratings` */

insert  into `ratings`(`Rating_Id`,`Employee_Id`,`Credit_Done`,`Credit_Full`,`Rating`) values 
(1,1,80,100,'4.50'),
(2,2,75,100,'4.20'),
(3,3,90,100,'4.80'),
(4,4,65,100,'3.90'),
(5,5,95,100,'4.90');

/*Table structure for table `requests` */

DROP TABLE IF EXISTS `requests`;

CREATE TABLE `requests` (
  `Employee_Id` int(11) DEFAULT NULL,
  `Full_Name` varchar(255) DEFAULT NULL,
  `Reason` varchar(255) DEFAULT NULL,
  `Start_Date` date DEFAULT NULL,
  `End_Date` date DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `requests` */

/*Table structure for table `training` */

DROP TABLE IF EXISTS `training`;

CREATE TABLE `training` (
  `Training_Id` int(11) NOT NULL,
  `Employee_Id` int(11) DEFAULT NULL,
  PRIMARY KEY (`Training_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `training` */

insert  into `training`(`Training_Id`,`Employee_Id`) values 
(1,1),
(2,2),
(3,3),
(4,4),
(5,5);

/*Table structure for table `user_roles` */

DROP TABLE IF EXISTS `user_roles`;

CREATE TABLE `user_roles` (
  `User_Role_Id` int(11) NOT NULL,
  `User_Type` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`User_Role_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `user_roles` */

insert  into `user_roles`(`User_Role_Id`,`User_Type`) values 
(1,'Admin'),
(2,'Employee'),
(3,'HR Manager'),
(4,'Supervisor'),
(5,'Director');

/*Table structure for table `vacancies` */

DROP TABLE IF EXISTS `vacancies`;

CREATE TABLE `vacancies` (
  `Vacancy_Id` int(11) NOT NULL,
  `Position_Id` int(11) DEFAULT NULL,
  `Description` text,
  `Faculty_Id` int(11) DEFAULT NULL,
  `Department_Id` int(11) DEFAULT NULL,
  `Requirement` text,
  `Salary` decimal(10,2) DEFAULT NULL,
  `Publication_Date` date DEFAULT NULL,
  `Vacancy_Status` varchar(50) DEFAULT NULL,
  `Employment_Type` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Vacancy_Id`),
  KEY `Position_Id` (`Position_Id`),
  CONSTRAINT `vacancies_ibfk_1` FOREIGN KEY (`Position_Id`) REFERENCES `positions` (`Position_Id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `vacancies` */

insert  into `vacancies`(`Vacancy_Id`,`Position_Id`,`Description`,`Faculty_Id`,`Department_Id`,`Requirement`,`Salary`,`Publication_Date`,`Vacancy_Status`,`Employment_Type`) values 
(1,1,'Professor of Computer Science',1,1,'PhD in Computer Science required','80000.00','2024-04-01','Open','Full-time'),
(2,2,'Associate Professor of Fine Arts',2,2,'Master in Fine Arts required','60000.00','2024-04-02','Open','Full-time'),
(3,3,'Assistant Professor of English Literature',3,3,'Bachelor in English Literature required','50000.00','2024-04-03','Open','Full-time'),
(4,4,'Researcher in Mechanical Engineering',4,4,'Bachelor in Mechanical Engineering required','55000.00','2024-04-04','Open','Part-time'),
(5,5,'Lecturer in Medicine',5,5,'Doctor of Medicine required','70000.00','2024-04-05','Open','Full-time');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
