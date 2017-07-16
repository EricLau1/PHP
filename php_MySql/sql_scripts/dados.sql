use php_exemplo;

insert into Usuario (nome, nascimento, sexo, email, senha) values
('Finn', '2001-01-13', 'M', 'finn@email.com', 'qwert123'),
('Jujuba', '1998-12-05', 'F', 'jujuba@email.com', 'chicletecomsorvete'),
('Jake', '2010-03-28', 'M', 'jake@email.com', 'zxccvzx2558'),
('Marceline', '1991-10-29','F','marceline@email.com', 'everthingstays');

select * from Usuario;

insert into Carteira  (id, saldo) values
(1, 100),
(2, 222),
(3, 10.11),
(4, 300);

select Usuario.nome, Carteira.saldo from Carteira join Usuario on Carteira.id = Usuario.id;

insert into Produto (nome, valor, qtde) values
('Notebook', 2500.75, 5),
('Skate', 645.93, 2),
('Play Station', 1999.59, 8),
('Guitarra', 800.88, 10);

select * from Produto;

insert into Compra (idUser, idProduto, dataCompra, horaCompra) values
(1, 2, '2017-07-16', '02:33:00'),
(2, 1, '2017-07-16', '02:33:00'),
(3, 3, '2017-07-16', '02:33:00'),
(4, 4, '2017-07-16', '02:33:00');

select * from Compra;

select Usuario.nome, Produto.nome, Produto.valor, Compra.dataCompra from Compra 
inner join Usuario on Compra.idUser=Usuario.id 
inner join Produto on Compra.idProduto=Produto.id;