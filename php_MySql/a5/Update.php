<?php

require 'Conexao.php';

$pdo = conectar();

//localhost/Projects/php_MySql/a5/Update.php?id=2&nome=Caderno&valor=18.5&qtde=30
//localhost/Projects/php_MySql/a5/Update.php?id=2&nome=Skate&valor=456.37&qtde=4

echo "PHP & MySQL: UPDATE <hr>";

$id = addslashes(trim($_GET['id']));
$nome = addslashes(trim($_GET['nome']));
$valor = addslashes(trim($_GET['valor']));
$qtde = addslashes(trim($_GET['qtde']));

$sql = "update Produto set nome=:nome, valor=:valor, qtde=:qtde ";
$sql .= "where id=:id";

$buscarUsuario = $pdo->prepare($sql);
$buscarUsuario->bindValue(":nome", $nome);
$buscarUsuario->bindValue(":valor", $valor);
$buscarUsuario->bindValue(":qtde", $qtde);
$buscarUsuario->bindValue(":id", $id);

if($buscarUsuario->execute()){
  echo $buscarUsuario->rowCount() ."<br>";
  if($buscarUsuario->rowCount() > 0){ // Retorna diferente de 0 somente se as modificaçãos alterarem algum valor anterior
    echo "<p>O Produto numero $id foi modificado!</p>";
  }
  else{
    echo "...";
  }
}
else{
  echo "<p>Erro! Nada foi alterado!</p>";
}
 ?>
