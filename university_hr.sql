
DROP DATABASE IF EXISTS `university_hr`;

CREATE DATABASE `university_hr` CHARACTER SET utf8 COLLATE utf8_general_ci;

USE `university_hr`;

DROP TABLE IF EXISTS `Admin`;

CREATE TABLE `Admin` (
  `Admin_Id` int NOT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Admin_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


DROP TABLE IF EXISTS `Degrees`;

CREATE TABLE `Degrees` (
  `Degree_Id` int NOT NULL,
  `Degree_Name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Degree_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


DROP TABLE IF EXISTS `Departments`;

CREATE TABLE `Departments` (
  `Department_Id` int NOT NULL,
  `Department_Name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Department_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


DROP TABLE IF EXISTS `Employee`;

CREATE TABLE `Employee` (
  `Employee_Id` decimal(10,0) NOT NULL,
  PRIMARY KEY (`Employee_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;



DROP TABLE IF EXISTS `Faculties`;

CREATE TABLE `Faculties` (
  `Faculty_Id` int NOT NULL,
  `Faculty_Name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Faculty_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


DROP TABLE IF EXISTS `Positions`;

CREATE TABLE `Positions` (
  `Position_Id` int NOT NULL,
  `Position_Name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Position_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


DROP TABLE IF EXISTS `Requests`;

CREATE TABLE `Requests` (
  `Employee_Id` int DEFAULT NULL,
  `Full_Name` varchar(255) DEFAULT NULL,
  `Reason` varchar(255) DEFAULT NULL,
  `Start_Date` date DEFAULT NULL,
  `End_Date` date DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


DROP TABLE IF EXISTS `Training`;

CREATE TABLE `Training` (
  `Training_Id` int NOT NULL,
  `Employee_Id` int DEFAULT NULL,
  PRIMARY KEY (`Training_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


DROP TABLE IF EXISTS `User_Roles`;

CREATE TABLE `User_Roles` (
  `User_Role_Id` int NOT NULL,
  `User_Type` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`User_Role_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


DROP TABLE IF EXISTS `Employees`;

CREATE TABLE `Employees` (
  `Employee_Id` int NOT NULL,
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
  PRIMARY KEY (`Employee_Id`),
  KEY `Degree_Id` (`Degree_Id`),
  KEY `Faculty_Id` (`Faculty_Id`),
  KEY `Department_Id` (`Department_Id`),
  KEY `User_Role_Id` (`User_Role_Id`),
  CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`Employee_Id`) REFERENCES `Positions` (`Position_Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `employees_ibfk_2` FOREIGN KEY (`Degree_Id`) REFERENCES `Degrees` (`Degree_Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `employees_ibfk_3` FOREIGN KEY (`Faculty_Id`) REFERENCES `Faculties` (`Faculty_Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `employees_ibfk_4` FOREIGN KEY (`Department_Id`) REFERENCES `Departments` (`Department_Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `employees_ibfk_5` FOREIGN KEY (`User_Role_Id`) REFERENCES `User_Roles` (`User_Role_Id`) ON DELETE CASCADE ON UPDATE CASCADE,
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


DROP TABLE IF EXISTS `Plans`;

CREATE TABLE `Plans` (
  `Plan_Id` int NOT NULL,
  `Plan_Name` varchar(255) DEFAULT NULL,
  `Plan_Credit` int DEFAULT NULL,
  `Status` int DEFAULT 0 NULL,
  `Employee_Id` int NOT NULL,
  PRIMARY KEY (`Plan_Id`),
  KEY `Employee_Id` (`Employee_Id`),
  CONSTRAINT `plans_ibfk_1` FOREIGN KEY (`Employee_Id`) REFERENCES `Employees` (`Employee_Id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


DROP TABLE IF EXISTS `Ratings`;

CREATE TABLE `Ratings` (
  `Rating_Id` int NOT NULL,
  `Employee_Id` int DEFAULT NULL,
  `Rating` decimal(3,2) DEFAULT NULL,
  PRIMARY KEY (`Rating_Id`),
  KEY `Employee_Id` (`Employee_Id`),
  CONSTRAINT `ratings_ibfk_1` FOREIGN KEY (`Employee_Id`) REFERENCES `Employees` (`Employee_Id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


DROP TABLE IF EXISTS `Vacancies`;

CREATE TABLE `Vacancies` (
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
  CONSTRAINT `vacancies_ibfk_1` FOREIGN KEY (`Position_Id`) REFERENCES `Positions` (`Position_Id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO Admin (Admin_Id, Email, Password) VALUES
(1, 'admin1@example.com', 'password1'),
(2, 'admin2@example.com', 'password2'),
(3, 'admin3@example.com', 'password3'),
(4, 'admin4@example.com', 'password4'),
(5, 'admin5@example.com', 'password5');

INSERT INTO Degrees (Degree_Id, Degree_Name) VALUES
(1, 'Bachelor'),
(2, 'Master'),
(3, 'PhD'),
(4, 'Associate'),
(5, 'Diploma');

INSERT INTO Departments (Department_Id, Department_Name) VALUES
(1, 'Department of Science'),
(2, 'Department of Arts'),
(3, 'Department of Literature'),
(4, 'Department of Engineering'),
(5, 'Department of Medicine');

INSERT INTO Faculties (Faculty_Id, Faculty_Name) VALUES
(1, 'Faculty of Science'),
(2, 'Faculty of Arts'),
(3, 'Faculty of Literature'),
(4, 'Faculty of Engineering'),
(5, 'Faculty of Medicine');

INSERT INTO Positions (Position_Id, Position_Name) VALUES
(1, 'Professor'),
(2, 'Associate Professor'),
(3, 'Assistant Professor'),
(4, 'Researcher'),
(5, 'Lecturer');

INSERT INTO User_Roles (User_Role_Id, User_Type) VALUES
(1, 'Admin'),
(2, 'Employee'),
(3, 'HR Manager'),
(4, 'Supervisor'),
(5, 'Director');

INSERT INTO Vacancies (Vacancy_Id, Position_Id, Description, Faculty_Id, Department_Id, Requirement, Salary, Publication_Date, Vacancy_Status, Employment_Type) VALUES
(1, 1, 'Professor of Computer Science', 1, 1, 'PhD in Computer Science required', 80000.00, '2024-04-01', 'Open', 'Full-time'),
(2, 2, 'Associate Professor of Fine Arts', 2, 2, 'Master in Fine Arts required', 60000.00, '2024-04-02', 'Open', 'Full-time'),
(3, 3, 'Assistant Professor of English Literature', 3, 3, 'Bachelor in English Literature required', 50000.00, '2024-04-03', 'Open', 'Full-time'),
(4, 4, 'Researcher in Mechanical Engineering', 4, 4, 'Bachelor in Mechanical Engineering required', 55000.00, '2024-04-04', 'Open', 'Part-time'),
(5, 5, 'Lecturer in Medicine', 5, 5, 'Doctor of Medicine required', 70000.00, '2024-04-05', 'Open', 'Full-time');

INSERT INTO Training (Training_Id, Employee_Id) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5);

INSERT INTO Ratings (Rating_Id, Employee_Id, Credit_Done, Credit_Full, Rating) VALUES
(1, 1, 80, 100, 4.5),
(2, 2, 75, 100, 4.2),
(3, 3, 90, 100, 4.8),
(4, 4, 65, 100, 3.9),
(5, 5, 95, 100, 4.9);

INSERT INTO Employees (Employee_Id, Full_Name, Date_of_Birth, Place_of_Birth, Position_Id, Degree_Id, Faculty_Id, Department_Id, User_Role_Id, Email, Phone_Number, Employee_Number, Date_Added) VALUES
(1, 'John Doe', '1990-05-15', 'New York', 1, 3, 1, 1, 2, 'john.doe@example.com', '123-456-7890', 'EMP001', '2023-01-01'),
(2, 'Jane Smith', '1985-10-20', 'Los Angeles', 2, 2, 2, 2, 2, 'jane.smith@example.com', '987-654-3210', 'EMP002', '2023-01-02'),
(3, 'Michael Johnson', '1988-03-25', 'Chicago', 3, 1, 3, 3, 2, 'michael.johnson@example.com', '111-222-3333', 'EMP003', '2023-01-03'),
(4, 'Emily Brown', '1995-07-10', 'Houston', 4, 4, 4, 4, 2, 'emily.brown@example.com', '444-555-6666', 'EMP004', '2023-01-04'),
(5, 'William Taylor', '1992-12-30', 'Boston', 5, 5, 5, 5, 2, 'william.taylor@example.com', '777-888-9999', 'EMP005', '2023-01-05');
