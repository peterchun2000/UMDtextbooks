CREATE TABLE Person (
	UserID int PRIMARY KEY auto_increment,
    Email VARCHAR(100) NOT NULL UNIQUE,
    PassW CHAR(60) NOT NULL,
    Department1 VARCHAR(4) DEFAULT NULL,
    Department2 VARCHAR(4) DEFAULT NULL,
    Department3 VARCHAR(4) DEFAULT NULL,
    Department4 VARCHAR(4) DEFAULT NULL
);
CREATE TABLE Courses (
	Department VARCHAR(4) NOT NULL,
    CourseKey VARCHAR(4) PRIMARY KEY,
    Textbook VARCHAR(255) DEFAULT NULL,
    FOREIGN KEY (Textbook) REFERENCES Textbook (Title)
);
CREATE Table Textbook (
	Title VARCHAR(255) PRIMARY KEY,
    Author VARCHAR(100) NOT NULL,
    Version DOUBLE NOT NULL,
    CourseNeed VARCHAR(10) NOT NULL
);
CREATE TABLE Inventory (
	Title VARCHAR(255) NOT NULL,
    Price DOUBLE NOT NULL,
    Wear VARCHAR(10) NOT NULL,
    Comments VARCHAR(255) DEFAULT NULL,
    Seller INT,
    FOREIGN KEY (Seller) REFERENCES Person(UserID)
);


	