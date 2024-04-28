/*
SQLyog Ultimate v13.1.1 (32 bit)
MySQL - 8.0.30 : Database - university_hr
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`university_hr` /*!40100 DEFAULT CHARACTER SET utf8mb3 */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `university_hr`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `Admin_Id` int NOT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Admin_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

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
  `Degree_Id` int NOT NULL,
  `Degree_Name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Degree_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

/*Data for the table `degrees` */

insert  into `degrees`(`Degree_Id`,`Degree_Name`) values 
(1,'Бакалавриат'),
(2,'Магистратура'),
(3,'Доктор философии PhD'),
(4,'Степень ассоциата'),
(5,'Diploma');

/*Table structure for table `departments` */

DROP TABLE IF EXISTS `departments`;

CREATE TABLE `departments` (
  `Department_Id` int NOT NULL,
  `Department_Name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Department_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

/*Data for the table `departments` */

insert  into `departments`(`Department_Id`,`Department_Name`) values 
(1,'Электроснабжение и автоматика'),
(2,'Программирование и информационные  системы'),
(3,'Инженерная экономика и менеджмент'),
(4,' Физики и химии'),
(5,'Автомобили и управление на транспорте'),
(6,'Строительства'),
(7,'Государственный язык и обществоведение'),
(8,'Финансы и кредит'),
(9,'Высшая математика и информатика'),
(10,'Дизайна и архитектуры'),
(11,'Пищевая продукция и агротехнология'),
(12,'Кафедры Языков');

/*Table structure for table `employees` */

DROP TABLE IF EXISTS `employees`;

CREATE TABLE `employees` (
  `Employee_Id` int NOT NULL AUTO_INCREMENT,
  `Full_Name` varchar(255) DEFAULT NULL,
  `Date_of_Birth` date DEFAULT NULL,
  `Place_of_Birth` varchar(255) DEFAULT NULL,
  `Position_Id` int DEFAULT NULL,
  `Degree_Id` int DEFAULT NULL,
  `Faculty_Id` int DEFAULT NULL,
  `Department_Id` int DEFAULT NULL,
  `User_Role_Id` int DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Phone_Number` varchar(20) DEFAULT NULL,
  `Employee_Number` varchar(20) DEFAULT NULL,
  `Date_Added` date DEFAULT NULL,
  `Path_Photo` varchar(255) DEFAULT NULL,
  `Username` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Employee_Id`),
  KEY `Degree_Id` (`Degree_Id`),
  KEY `Faculty_Id` (`Faculty_Id`),
  KEY `Department_Id` (`Department_Id`),
  KEY `User_Role_Id` (`User_Role_Id`),
  KEY `employees_ibfk_1` (`Position_Id`),
  CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`Position_Id`) REFERENCES `positions` (`Position_Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `employees_ibfk_2` FOREIGN KEY (`Degree_Id`) REFERENCES `degrees` (`Degree_Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `employees_ibfk_3` FOREIGN KEY (`Faculty_Id`) REFERENCES `faculties` (`Faculty_Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `employees_ibfk_4` FOREIGN KEY (`Department_Id`) REFERENCES `departments` (`Department_Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `employees_ibfk_5` FOREIGN KEY (`User_Role_Id`) REFERENCES `user_roles` (`User_Role_Id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8mb3;

/*Data for the table `employees` */

insert  into `employees`(`Employee_Id`,`Full_Name`,`Date_of_Birth`,`Place_of_Birth`,`Position_Id`,`Degree_Id`,`Faculty_Id`,`Department_Id`,`User_Role_Id`,`Email`,`Phone_Number`,`Employee_Number`,`Date_Added`,`Path_Photo`,`Username`,`Password`) values 
(1,'Низамитдинов Ахлитдин Илёситдинович','1990-03-21','Конибодом',1,3,1,1,2,'john.doe@example.com','123-456-7890','EMP001','2023-01-01','',NULL,NULL),
(2,'Максудов Хуршед Темурович','1958-09-20','Исфара',2,2,2,2,2,'jane.smith@example.com','987-654-3210','EMP002','2023-01-02',NULL,NULL,NULL),
(3,'Худойбердиев Хуршед Атохонович','1980-04-10','Исфара',3,1,3,3,2,'michael.johnson@example.com','111-222-3333','EMP003','2023-01-03',NULL,NULL,NULL),
(4,'Солиев Одилходжа Махмудходжаевич','1977-04-01','Исфара',4,4,4,4,2,' osoliev@gmail.com','+992928373035','EMP004','2023-01-04',NULL,NULL,NULL),
(7,'Довудов Гулшан Мирбахоевич','1981-12-27','Исфара',2,1,1,2,1,'sada@gasd.csa','23123','12312','2024-04-26',NULL,'etse','ауыуаы'),
(8,'Усмонова Мохина Рустамовна','1981-08-24','Хучанд',2,1,1,2,1,'sada@gasd.csa','23123','12312','2024-04-26',NULL,'etse','ауыуаы'),
(9,'Косимов Абдунаби Абдурауфович','2024-04-26','ТЕмст',2,1,1,2,1,'sada@gasd.csa','23123','12312','2024-04-26',NULL,'etse','ауыуаы'),
(12,'Ашурова Шабнам Нуруллоевна','2024-04-26','asda',4,1,2,1,1,'sdasd@gasd.com','12312','1231','2024-04-26',NULL,'12312','12312'),
(13,'Ашурова Шабнам Нуруллоевна','2024-04-26','asda',4,1,2,1,1,'sdasd@gasd.com','12312','1231','2024-04-26',NULL,'12312','12312'),
(15,'Назаров Абдусамад Абдурахмонович','2024-04-26','12312',1,1,1,1,2,'21eqwew@sdas.fdg','12312','12312','2024-04-26',NULL,'werwer','werwer'),
(16,'Фозилова Мохирахон Музаффаровна','2024-04-26','wasd',1,3,3,1,1,'asasd@sdad.asd','123123','12312','2024-04-26',NULL,'qqqq','qqqq'),
(17,'Хакимова Ольга Ренатовна ','2024-04-26','ывф',4,3,2,1,1,'asda@sdas.com','12312','2312','2024-04-26',NULL,'12wad','asd'),
(18,'Зульфикорова Парвина Эгамовна','2024-04-26','ывф',4,3,2,1,1,'asda@sdas.com','12312','2312','2024-04-26',NULL,'12wad','asd'),
(21,'Фарзонаи Эрач','2024-04-26','sda',2,1,1,1,4,'asdas@sda.com','12312','12312','2024-04-26',NULL,'edsfsdfdsf','sdfsdf'),
(22,'Каюмова Дилафруз Дониёровна','2024-04-26','sda',2,1,1,1,4,'asdas@sda.com','12312','12312','2024-04-26',NULL,'edsfsdfdsf','sdfsdf'),
(23,'Левандовский Богдан Игоревич ','2024-04-26','sda',2,1,1,1,4,'asdas@sda.com','12312','12312','2024-04-26',NULL,'edsfsdfdsf','sdfsdf'),
(24,'Каландаров Ҳусейнчон Умарович','2024-04-26','sda',2,1,1,1,4,'asdas@sda.com','12312','12312','2024-04-26',NULL,'edsfsdfdsf','asdas'),
(26,'Рахимов Охунбобо Сайфиддинович','2024-04-26','asdas',4,1,4,2,1,'ASdas@sca.cs','12312','12312','2024-04-26',NULL,'2321','12312'),
(27,'Хочиев Анвар Абдуллоевич','2024-04-26','asdas',4,1,4,2,1,'ASdas@sca.cs','12312','12312','2024-04-26',NULL,'2321','12312'),
(28,'Чураев Дадахон Собирчонович ','2024-04-26','asdas',4,1,4,2,1,'ASdas@sca.cs','12312','12312','2024-04-26',NULL,'2321','32323'),
(29,'Исломов Илесходжа Икромходжаевич','2024-04-26','asdas',4,1,4,2,1,'ASdas@sca.cs','12312','12312','2024-04-26',NULL,'2321','32323'),
(30,'Тошхуҷаева Мухайё Исломовна','2024-04-26','asdas',4,1,4,2,1,'ASdas@sca.cs','12312','12312','2024-04-26',NULL,'2321','32323'),
(31,'Комилова Махбуба Ёдгоровна ','2024-04-26','asdas',4,1,4,2,1,'ASdas@sca.cs','12312','12312','2024-04-26',NULL,'2321','32323'),
(32,'Мирхоликова Дилафруз Сайдуллоевна ','2024-04-26','asdas',4,1,4,2,1,'ASdas@sca.cs','12312','12312','2024-04-26',NULL,'2321','32323'),
(33,'Дадобоев Шахбоз Толибчонович','2024-04-26','asdas',4,1,4,2,1,'ASdas@sca.cs','12312','12312','2024-04-26',NULL,'2321','32323'),
(34,'Акилов Ахмадчон Ашурович ','2024-04-26','asdas',4,1,4,2,1,'ASdas@sca.cs','12312','12312','2024-04-26',NULL,'2321','32323'),
(35,'Болтуев Бахромчон Мухамадович','2024-04-26','asdas',4,1,4,2,1,'ASdas@sca.cs','12312','12312','2024-04-26',NULL,'2321','32323'),
(36,'Исмоилов Исмоилчон Илхомович','2024-04-26','asdas',4,1,4,2,1,'ASdas@sca.cs','12312','12312','2024-04-26',NULL,'2321','32323'),
(37,'Вохидов Аюбчон Чумаевич','2024-04-26','asdas',4,1,4,2,1,'ASdas@sca.cs','12312','12312','2024-04-26',NULL,'2321','32323'),
(38,'Каримов Ибодкул Рахимкулович','2024-04-26','asdas',4,1,4,2,1,'ASdas@sca.cs','12312','12312','2024-04-26',NULL,'2321','32323'),
(39,'Муминова Шохзодахон Назири ','2024-04-26','asdas',4,1,4,2,1,'ASdas@sca.cs','12312','12312','2024-04-26',NULL,'2321','32323'),
(40,'Авезов Азизулло Хабибович','2024-04-26','asdas',4,1,4,2,1,'ASdas@sca.cs','12312','12312','2024-04-26',NULL,'2321','32323'),
(41,'Авезова Махбуба Мухамедовна','2024-04-26','3123',1,5,1,2,1,'adas@gmial.com','123','1232','2024-04-26',NULL,'sd','asd'),
(42,'Назаров Абдушукур Абдурахимович','2024-04-26','3123',1,5,1,2,1,'adas@gmial.com','123','1232','2024-04-26',NULL,'sd','asd'),
(43,'Ахмедов Усмончон Хомидчонович','2024-04-26','3123',1,5,1,2,1,'adas@gmial.com','123','1232','2024-04-26',NULL,'sd','asd'),
(44,'Султонова Манзура Музафаровна','2024-04-26','3123',1,5,1,2,1,'adas@gmial.com','123','1232','2024-04-26',NULL,'sd','asd'),
(45,'Баходурова Сулхия Азизходжаевна ','2024-04-27','111',1,1,1,2,3,'111@gas.dsfds','121212','12121','2024-04-26',NULL,'121','12'),
(46,'Хомидов Ином Мухиддинович','2024-04-27','111',1,1,1,2,3,'111@gas.dsfds','121212','12121','2024-04-26',NULL,'121','12'),
(47,'Акрамова Заррина Башировн','2024-04-27','111',1,1,1,2,3,'111@gas.dsfds','121212','12121','2024-04-26',NULL,'121','12'),
(48,'Аминчонова Мухиба Мухамаднасимовна ','2024-04-27','111',1,1,1,2,3,'111@gas.dsfds','121212','12121','2024-04-26',NULL,'121','12'),
(49,'Ишанова Сарвар Сафиюллаевна','2024-04-27','111',1,1,1,2,3,'111@gas.dsfds','121212','12121','2024-04-26',NULL,'121','12'),
(50,'Абдуллоева Хабиба Рузибоевна','2024-04-27','111',1,1,1,2,3,'111@gas.dsfds','121212','12121','2024-04-26',NULL,'121','12'),
(51,'Косимова Малика Хамидходжаевна','2024-04-08','asdas',1,1,1,1,4,'asdas@asada.coms','2123','12312','2024-04-26',NULL,'asa','sadas'),
(52,'Саидхочаева Дилафрузхон Муталибовна','2024-04-08','asdas',1,1,1,1,4,'asdas@asada.coms','2123','12312','2024-04-26',NULL,'asa','sadas'),
(53,'Набиева Хусничон Наимовна','2024-04-08','asdas',1,1,1,1,4,'asdas@asada.coms','2123','12312','2024-04-26',NULL,'asa','sadas'),
(54,'Қосимова Манзура Абдусаломовна','2024-04-08','asdas',1,1,1,1,4,'asdas@asada.coms','2123','12312','2024-04-26',NULL,'asa','sadas'),
(55,'Турсунова Матлуба Ибрагимовна ','2024-04-26','wewqaeq',2,2,2,1,1,'sdas@gasd.scm','23123','12312','2024-04-26',NULL,'asd','asdasd'),
(56,'Мазбудов Субхон Сухробович','2024-04-26','wewqaeq',2,2,2,1,1,'sdas@gasd.scm','23123','12312','2024-04-26',NULL,'asd','asdasd'),
(57,'Ахати Фирдавс','2024-04-26','wewqaeq',2,2,2,1,1,'sdas@gasd.scm','23123','12312','2024-04-26',NULL,'asd','asdasd'),
(58,'Бойматова Дилрабо Комилчоновна','2024-04-26','wewqaeq',2,2,2,1,1,'sdas@gasd.scm','23123','12312','2024-04-26',NULL,'asd','asdas'),
(59,'Юсупова Махбуба Зафаровн','2024-04-26','wewqaeq',2,2,2,1,1,'sdas@gasd.scm','23123','12312','2024-04-26',NULL,'asd','asdas'),
(60,'Дмитриева Диана Владимировна ','2024-04-26','wewqaeq',2,2,2,1,1,'sdas@gasd.scm','23123','12312','2024-04-26',NULL,'asd','asdas'),
(61,'Каюмова Азиза Абдувалиевна','2024-04-26','wewqaeq',2,2,2,1,1,'sdas@gasd.scm','23123','12312','2024-04-26',NULL,'asd','asdas'),
(62,'Рахимов Сохибназар Шарифович','2024-05-03','123123123',4,2,1,5,2,'123123@asfas.dsfg','123','123','2024-04-26',NULL,'123','12'),
(63,'Чалилов Файзулло ','2024-05-03','123123123',4,2,1,5,2,'123123@asfas.dsfg','123','123','2024-04-26',NULL,'123','12'),
(64,'Рахимова Алия Рахимовна','2024-04-26','777',4,1,1,4,4,'777777@gmqas.drfg','7777','777','2024-04-26',NULL,'777','777'),
(65,'Тошходжаев Насим Азимович ','2024-04-26','545445',2,1,3,1,2,'5454@gmasf.dfgd','54545','5454','2024-04-26',NULL,'45','454'),
(66,'Хофизов Хофиз Раджабович','2024-04-26','3',5,2,1,5,1,'453@gs.fd','23','342','2024-04-26',NULL,'234','23'),
(67,'Бобочонов Хуршеджон Аминчонович','2024-04-26','2222222222',2,4,2,2,3,'222222222@gas.gff','222','222','2024-04-26',NULL,'2','2'),
(68,'Бобочонов Чурабой Чумабоевич','2024-04-26','2222222222',2,4,2,2,3,'222222222@gas.gff','222','222','2024-04-26',NULL,'2','2');

/*Table structure for table `faculties` */

DROP TABLE IF EXISTS `faculties`;

CREATE TABLE `faculties` (
  `Faculty_Id` int NOT NULL,
  `Faculty_Name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Faculty_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

/*Data for the table `faculties` */

insert  into `faculties`(`Faculty_Id`,`Faculty_Name`) values 
(1,'Факультет информатики и энергетики'),
(2,'Факультет строительство и транспорта'),
(3,'Инженерно - экономический факультет'),
(4,'Инженерно - технологический факультет');

/*Table structure for table `plans` */

DROP TABLE IF EXISTS `plans`;

CREATE TABLE `plans` (
  `Plan_Id` int NOT NULL,
  `Plan_Name` varchar(255) DEFAULT NULL,
  `Plan_Credit` int DEFAULT NULL,
  `Employee_Id` int NOT NULL,
  `Status` int DEFAULT '0',
  PRIMARY KEY (`Plan_Id`),
  KEY `Employee_Id` (`Employee_Id`),
  CONSTRAINT `plans_ibfk_1` FOREIGN KEY (`Employee_Id`) REFERENCES `employees` (`Employee_Id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

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
  `Position_Id` int NOT NULL,
  `Position_Name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Position_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

/*Data for the table `positions` */

insert  into `positions`(`Position_Id`,`Position_Name`) values 
(1,'Директор'),
(2,'Заведующий кафедрой'),
(3,'Кандидат физико-математических наук,дотцент'),
(4,'Старшый преподователь'),
(5,'Ассистент'),
(6,'Кандидат технических наук,доцент'),
(7,'Кандидат технических наук,Старшый преподователь'),
(8,'Доктор экономических наук,Профессор'),
(9,'Кандидат экономических наук,Доцент'),
(10,'Кандидат экономических наук,Старшый преподователь'),
(12,'Кандидат химических наук,Доцент'),
(13,'Кандидат физико-математических наук,Старшый преподователь'),
(14,'Кандидат химических наук,Старшый преподователь'),
(15,'Кандидат филологических наук,Старшый преподователь');

/*Table structure for table `ratings` */

DROP TABLE IF EXISTS `ratings`;

CREATE TABLE `ratings` (
  `Rating_Id` int NOT NULL,
  `Employee_Id` int DEFAULT NULL,
  `Credit_Done` int DEFAULT NULL,
  `Credit_Full` int DEFAULT NULL,
  `Rating` decimal(3,2) DEFAULT NULL,
  PRIMARY KEY (`Rating_Id`),
  KEY `Employee_Id` (`Employee_Id`),
  CONSTRAINT `ratings_ibfk_1` FOREIGN KEY (`Employee_Id`) REFERENCES `employees` (`Employee_Id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

/*Data for the table `ratings` */

insert  into `ratings`(`Rating_Id`,`Employee_Id`,`Credit_Done`,`Credit_Full`,`Rating`) values 
(1,1,80,100,4.50),
(2,2,75,100,4.20),
(3,3,90,100,4.80),
(4,4,65,100,3.90);

/*Table structure for table `requests` */

DROP TABLE IF EXISTS `requests`;

CREATE TABLE `requests` (
  `Employee_Id` int DEFAULT NULL,
  `Full_Name` varchar(255) DEFAULT NULL,
  `Reason` varchar(255) DEFAULT NULL,
  `Start_Date` date DEFAULT NULL,
  `End_Date` date DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

/*Data for the table `requests` */

/*Table structure for table `training` */

DROP TABLE IF EXISTS `training`;

CREATE TABLE `training` (
  `Training_Id` int NOT NULL,
  `Employee_Id` int DEFAULT NULL,
  PRIMARY KEY (`Training_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

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
  `User_Role_Id` int NOT NULL,
  `User_Type` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`User_Role_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

/*Data for the table `user_roles` */

insert  into `user_roles`(`User_Role_Id`,`User_Type`) values 
(1,'Админ'),
(2,'Сотрудник'),
(3,'Менеджер отдел кадров'),
(4,'Начальник отдела кадров'),
(5,'Директор');

/*Table structure for table `vacancies` */

DROP TABLE IF EXISTS `vacancies`;

CREATE TABLE `vacancies` (
  `Vacancy_Id` int NOT NULL,
  `Position_Id` int DEFAULT NULL,
  `Description` text,
  `Faculty_Id` int DEFAULT NULL,
  `Department_Id` int DEFAULT NULL,
  `Requirement` text,
  `Salary` decimal(10,2) DEFAULT NULL,
  `Publication_Date` date DEFAULT NULL,
  `Vacancy_Status` varchar(50) DEFAULT NULL,
  `Employment_Type` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Vacancy_Id`),
  KEY `Position_Id` (`Position_Id`),
  CONSTRAINT `vacancies_ibfk_1` FOREIGN KEY (`Position_Id`) REFERENCES `positions` (`Position_Id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

/*Data for the table `vacancies` */

insert  into `vacancies`(`Vacancy_Id`,`Position_Id`,`Description`,`Faculty_Id`,`Department_Id`,`Requirement`,`Salary`,`Publication_Date`,`Vacancy_Status`,`Employment_Type`) values 
(1,1,'Professor of Computer Science',1,1,'PhD in Computer Science required',80000.00,'2024-04-01','Open','Full-time'),
(2,2,'Associate Professor of Fine Arts',2,2,'Master in Fine Arts required',60000.00,'2024-04-02','Open','Full-time'),
(3,3,'Assistant Professor of English Literature',3,3,'Bachelor in English Literature required',50000.00,'2024-04-03','Open','Full-time'),
(4,4,'Researcher in Mechanical Engineering',4,4,'Bachelor in Mechanical Engineering required',55000.00,'2024-04-04','Open','Part-time'),
(5,5,'Lecturer in Medicine',5,5,'Doctor of Medicine required',70000.00,'2024-04-05','Open','Full-time');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
