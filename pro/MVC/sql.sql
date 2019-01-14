create database phpmvc;

create table if not exists users(
id int(11) auto_increment,
name varchar(50) not null,
email varchar(50) unique not null,
password varchar(100) not null,
created_at timestamp null default current_timestamp(),
constraint users_id_pk primary key(id))
engine = InnoDB
default charset = utf8;

insert into users(name, email, password) values('admin', 'admin@email', 'admin');
insert into users(name, email, password) values
('Jane Doe', 'jane@email.com', '123'),
('Jon Doe', 'jon@email.com', '123'),
('Ana', 'ana@email.com', '123'),
('Kim', 'kim@email.com', '123'),
('Mille', 'camille@email.com', '123');

create table if not exists posts(
id int(11) auto_increment,
title varchar(50) not null,
user int(11) not null,
description text not null,
created_at timestamp null default current_timestamp(),
constraint posts_id_pk primary key(id))
engine = InnoDB
default charset = utf8;