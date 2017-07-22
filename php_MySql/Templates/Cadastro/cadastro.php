<?php
require_once 'Conexao.php';
require_once 'Usuario.php';
require_once 'Carteira.php';
$pdo = conectar();

$u = new Usuario();
$u->setNome($_POST['nome'] ?? 'not info');
$data = new DateTime($_POST['nascimento'] ?? null);
$u->setNascimento($data);
$u->setSexo($_POST['sexo'] ?? '0');
$u->setEmail($_POST['email'] ?? 'not info');
$u->setSenha($_POST['senha'] ?? 'not info');

//var_dump($u);
$validar = $pdo->prepare("SELECT email FROM Usuario WHERE email=?");
$validar->bindValue(1, $u->getEmail());
$validar->execute();
if($validar->rowCount() != 0){
  die("Este email ja está cadastrado!");
}

// Iniciando Transação
$pdo->beginTransaction();

$sql = "INSERT INTO Usuario (nome, nascimento, sexo, email, senha) VALUES (?, ?, ?, ?, ?)";
$user = $pdo->prepare($sql);
$user->bindValue(1, $u->getNome());
$user->bindValue(2, $u->getNascimento()->format("Y-m-d"));
$user->bindValue(3, $u->getSexo());
$user->bindValue(4, $u->getEmail());
$user->bindValue(5, $u->getSenha());
if($user->execute()){
   $u->setId($pdo->lastInsertId());
  echo "<p>Usuario id = {$u->getId()} cadastrado com sucesso!</p>";
}else{
  die("Erro no cadastro do Usuário!");
}

$c = new Carteira($u, 0);
//var_dump($c);
$sql = "INSERT INTO Carteira (id, saldo) VALUES (?, ?)";
$carteira = $pdo->prepare($sql);
$carteira->bindValue(1, $c->getUser()->getId());
$carteira->bindValue(2, $c->getSaldo());
if($carteira->execute()){
  echo "<p> Usuário: {$c->getUser()->getNome()} Saldo: R$ {$c->getSaldo()} </p>";
}else{
  $pdo->rollBack(); // se esta operação der erro o cadastro do usuario nao é completado
  die("Erro na ao inserir na tabela Carteira!");
}
$pdo->commit(); // esta linha que valida todos os cadastros no banco

 ?>
