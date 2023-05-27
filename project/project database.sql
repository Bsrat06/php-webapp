create database project;
create table user_data(
username varchar(20),
department varchar(30),
email varchar(255),
userpassword char(100),
primary key(email));


create table books(
title varchar(30),
author varchar(40),
isbn varchar(30),
edition varchar(15),
primary key(isbn));


create table courses(
coursename varchar(30),
coursecode varchar(10),
dept varchar(30),
primary key(coursecode));

select *from user_data;
select *from courses;
select *from books;

-------------------------------------------------------------------------------------------------------------------------------

--Latest Final Used Database Query

CREATE TABLE Courses (
    course_name VARCHAR(50) PRIMARY KEY,
    title VARCHAR(100),
    description TEXT,
    level VARCHAR(50)
);
CREATE TABLE lectures (
    id INT AUTO_INCREMENT PRIMARY KEY,
    course_name VARCHAR(50),
    title VARCHAR(100),
    video VARCHAR(255),
    FOREIGN KEY (course_name) REFERENCES Courses(course_name)
);
CREATE TABLE books (
    id INT AUTO_INCREMENT PRIMARY KEY,
    course_name VARCHAR(50),
    title VARCHAR(100),
    author VARCHAR(100),
    isbn VARCHAR(20),
    edition INT,
    FOREIGN KEY (course_name) REFERENCES Courses(course_name)
);
CREATE TABLE course_outlines (
    id INT AUTO_INCREMENT PRIMARY KEY,
    course_name VARCHAR(50),
    topic VARCHAR(100),
    details TEXT,
    FOREIGN KEY (course_name) REFERENCES Courses(course_name)
);
CREATE TABLE video_tutorials (
    id INT AUTO_INCREMENT PRIMARY KEY,
    course_name VARCHAR(50),
    title VARCHAR(100),
    video VARCHAR(255),
    FOREIGN KEY (course_name) REFERENCES Courses(course_name)
);
