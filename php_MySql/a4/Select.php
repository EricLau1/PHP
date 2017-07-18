<style>
    th,td {
      padding: 10px;
      border: 1px solid silver;
    }
</style>

<?php

include 'Conexao.php';

$pdo = conectar();

echo "PHP & MySQL: SELECT <hr>";

echo "Utilizando <b>fetch</b> <br>";

$buscarUsuario = $pdo->prepare("select * from Usuario");
$buscarUsuario->execute();

while($linha = $buscarUsuario->fetch(PDO::FETCH_ASSOC)){ // <~ Retorna uma Array Associativo
  echo $linha["nome"] ."<br>";
}

echo "<hr>";


$buscarUsuario = $pdo->prepare("select * from Usuario");
$buscarUsuario->execute();

echo "Utilizando <b>fetchAll</b> <br>";
$linha = $buscarUsuario->fetchAll(PDO::FETCH_ASSOC);
foreach ($linha as $listar) {
  echo $listar["nome"] ."<br>";
}

echo "<hr>";


$buscarUsuario = $pdo->prepare("select * from Usuario");
$buscarUsuario->execute();

echo "Utilizando <b>PDO::FETCH_OBJ</b> <br>";

$linha = $buscarUsuario->fetchAll(PDO::FETCH_OBJ);
//var_dump($linha);

foreach ($linha as $listar) {
  echo $listar->nome ."<br>";
}

echo "<hr>";

echo "Imprimindo  Tabela Completa <br>";

$buscarUsuario = $pdo->prepare("select * from Usuario");
$buscarUsuario->execute();
$linha = $buscarUsuario->fetchAll(PDO::FETCH_OBJ);

echo "<table>";
echo "<th>id</th> <th>nome</th> <th>nascimento</th>";
echo "<th>sexo</th> <th>email</th> <th>senha</th>";
foreach ($linha as $listar) {
  echo "<tr>";
  echo "<td>{$listar->id}</td>";
  echo "<td>{$listar->nome}</td>";
  echo "<td>{$listar->nascimento}</td>";
  echo "<td>{$listar->sexo}</td>";
  echo "<td>{$listar->email}</td>";
  echo "<td>{$listar->senha}</td>";
  echo "<tr>";
}
echo "</table>";


//echo $buscarUsuario->rowCount();

 ?>
