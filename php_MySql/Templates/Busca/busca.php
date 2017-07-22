<?php
require_once 'Conexao.php';
$pdo = conectar();

// Recuperar o valor da palavra
$prod = $_POST['palavra'] ?? ''; // casso nada for enviado pelo POST retorna vazio
$tam = strlen($prod) + 2; // add + 2 no tamanho da string para que possa ser ocupado pelo caracter de %
$prod = str_pad($prod, $tam, "%", STR_PAD_BOTH); // add % no inicio da palavra e no fim

#Metodo mais simples e menos seguro de executar o sql
//$produtos = $pdo->query("SELECT * FROM Produto WHERE nome like '%$prod%'");

#Metodo mais segura de executar o sql
$produtos = $pdo->prepare("SELECT * FROM Produto WHERE nome like ?");
$produtos->bindValue(1, $prod);
$produtos->execute();

if($produtos->rowCount() <= 0){ // significa que nao foi encontrada nenhuma palavra
  echo "Nenhum produto com este nome foi cadastrado...";
}else{
  echo "<table class='table'>";
  echo "<th> id </th> <th> nome </th> <th> valor </th> <th> quantidade </th>";
  while($linha = $produtos->fetch(PDO::FETCH_ASSOC)){
    echo "<tr>";
    echo "<td>".$linha['id']."</td>";
    echo "<td>".$linha['nome']."</td>";
    echo "<td>".$linha['valor']."</td>";
    echo "<td>".$linha['qtde']."</td>";
    echo "</tr>";
  }
  echo "</table>";
}
 ?>
