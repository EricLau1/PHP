create database php_exemplo default character set utf8 default collate utf8_general_ci;

use php_exemplo;

create table Usuario(
id int not null auto_increment,
nome varchar(35) not null,
nascimento date,
sexo enum('M', 'F'),
email varchar(50) not null,
senha varchar(20) not null,
primary key(id)
) default charset = utf8;

create table Carteira(
id int not null,
saldo decimal(7,2) default 0,
primary key(id),
foreign key(id) references Usuario(id)
);

create table Produto(
id int not null auto_increment,
nome varchar(35) not null,
valor decimal(7,2) not null,
qtde int default 0,
primary key(id)
)default charset = utf8;
 

create table Compra(
idUser int not null,
idProduto int not null,
dataCompra date,
horaCompra time,
primary key(idUser,idProduto),
foreign key(idUser)references Usuario(id),
foreign key(idProduto) references Produto(id) 
);