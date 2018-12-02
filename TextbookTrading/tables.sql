drop database if exists umdlocalhackday2;
create database if not exists umdlocalhackday2;

use umdlocalhackday2;

CREATE TABLE Person (
	UserID INT PRIMARY KEY auto_increment,
    Email VARCHAR(100) NOT NULL UNIQUE,
    PassW CHAR(60) NOT NULL,
    UserName VARCHAR(30) NOT NULL,
    Department1 VARCHAR(4) DEFAULT NULL,
    Department2 VARCHAR(4) DEFAULT NULL,
    Department3 VARCHAR(4) DEFAULT NULL,
    Department4 VARCHAR(4) DEFAULT NULL
);
CREATE TABLE Courses (
	Department VARCHAR(4) NOT NULL,
    CourseKey VARCHAR(4),
    course int(10) not null,
    Primary Key (Department, CourseKey)
);

create index course on courses(course);

CREATE Table Textbook (
	Title VARCHAR(255) PRIMARY KEY,
    Author VARCHAR(100) NOT NULL,
    course int(10) NOT NULL,
	FOREIGN KEY (course) REFERENCES Courses (course)
);
CREATE TABLE Inventory (
	Title VARCHAR(255) NOT NULL ,
    Price DOUBLE NOT NULL,
    Wear VARCHAR(10) NOT NULL,
    Comments VARCHAR(255) DEFAULT NULL,
    Seller INT,
    FOREIGN KEY (Seller) REFERENCES Person(UserID),
    FOREIGN KEY (title) REFERENCES Textbook(Title)
);

insert courses values ("MATH",141,1), ("CMSC", 132, 2);
insert textbook values
("Calculus with concepts","Robert Ellis",1),
("Calculus with concepts edition 2","Robert Ellis II",1), ("Abstract Java","Nelson Paula-Perez",2);