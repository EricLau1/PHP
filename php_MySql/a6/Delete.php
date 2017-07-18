<?php

require 'Conexao.php';

$pdo = conectar();

# Esta função insere um Usuario Repetido para que Possa ser usado de exemplo no Delete
function insertUser(){
  $pdo = conectar();
  $sql = "insert into Usuario (nome, nascimento, sexo, email, senha) values ";
  $sql .= "(:nome, :nasc, :sexo, :email, :senha)"; // linha concatenada

  $nome = "Mel";
  $data = new DateTime('01-01-2001');
  $nasc = $data->format('Y-m-d'); // banco de dados recebe datas no formato (YYYY-MM-DD)
  $sexo = "F";
  $email = "mel@email.com";
  $p = "111222333";

  $buscaSegura = $pdo->prepare($sql);
  $buscaSegura->bindValue(":nome", $nome);
  $buscaSegura->bindValue(":nasc", $nasc);
  $buscaSegura->bindValue(":sexo", $sexo);
  $buscaSegura->bindValue(":email", $email);
  $buscaSegura->bindValue(":senha", $p);
  $buscaSegura->execute();

  $ultimoID = $pdo->lastInsertId(); // retorna o valor do ultimo id cadastrado
  return $ultimoID;
}

echo "PHP & MySQL: DELETE <hr>";

# AVISO O CODIGO ABAIXO IRÁ APAGAR TODOS OS USUARIOS COM ID MAIOR QUE 5
$id = insertUser();
echo "Novo Usuario com id = $id <br>";

$deletarUsuario = $pdo->prepare("Delete from Usuario Where id=:id");
$deletarUsuario->bindValue(":id", $id);
if($deletarUsuario->execute()){
  echo "<p>O Usuario numero $id foi Deletado </p>";
}
else{
  echo "<p>Erro! Nenhum Usuario foi deletado!</p>";
}

 ?>
