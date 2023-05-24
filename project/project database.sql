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