<?php

require_once 'Model/Usuario.php';
require_once 'Model/Carteira.php';
require_once 'Model/Produto.php';
require_once 'Model/Compra.php';

$data = new DateTime('19-07-2017');
$u = new Usuario(1, "Mel", $data, "F", "mel@email.com", "qwert");

echo "<strong>Objeto Usuario</strong> <br><br>";
# Testando Getters
echo "id = {$u->getId()} <br>";
echo "nome = {$u->getNome()} <br>";
echo "nascimento = {$u->getNascimento()->format("d-m-Y")} <br>";
echo "sexo = {$u->getSexo()} <br>";
echo "email = {$u->getEmail()} <br>";
echo "senha = {$u->getSenha()} <br>";

# Testando Setters
$u->setNome("Dan");
$data = new DateTime('20-12-2010');
$u->setNascimento($data);
$u->setSexo("M");
$u->setEmail("dan@email.com");
$u->setSenha("123456");
var_dump($u);
echo "<hr>";

echo "<b>Objeto Carteira</b> <br><br>";

$ca = new Carteira($u, 939.55);
# Testando Getters
echo "idUsuario = {$ca->getIdUser()->getId()} <br>";
echo "saldo = {$ca->getSaldo()} <br>";

# Testando Setters
$ca->setSaldo(300);
var_dump($ca);
echo "<hr>";

echo "<b>Objeto Produto</b> <br><br>";

$p = new Produto(1, "PS4", 1900.55, 10);

#Testando Getters
echo "id = {$p->getId()} <br>";
echo "nome = {$p->getNome()} <br>";
echo "valor = {$p->getValor()} <br>";
echo "Quantidade = {$p->getQtde()} <br>";

#Testando Setters
$p->setNome("XBOX");
$p->setValor(1600.33);
$p->setQtde(15);
var_dump($p);
echo "<hr>";

echo "<b>Objeto Compra</b> <br><br>";

$date = new DateTime(); // Pega a Data e a Hora do Sistema
$fuso = new DateTimeZone('America/Sao_Paulo'); // Acertando o Fuso Horario
$c = new Compra($u, $p, $date);
$c->getDataCompra()->setTimezone($fuso);

# Testando Getters
echo "idUsuario = {$c->getUsuario()->getId()} <br>";
echo "idProduto = {$c->getProduto()->getId()} <br>";
echo "Data e Hora da Compra = {$c->getDataCompra()->format('d-m-Y H:i:s')}";
 ?>
