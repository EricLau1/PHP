create database test;

use test;

create table if not exists users(
id int auto_increment primary key,
name varchar(50) unique not null,
password varchar(100) not null
);

create table if not exists feedback(
id int auto_increment primary key,
user int not null,
comment varchar(255) not null,
constraint feedback_user_fk foreign key(user) references users(id)
);

insert into users (name, password) values
('Jake', '$2y$10$vH4Nf0KKaU6Od.CP99LpQOD4If7OWKUjtFO1pnNnTtqokOb.hqglG');

insert into feedback (user, comment) values
(1, 'FIRST!');

select f.comment, u.name from feedback as f inner join users as u on u.id = f.user;