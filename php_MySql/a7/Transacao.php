<?php
require 'Conexao.php';
$pdo = conectar();

# TABELAS do TIPO MyISAM NÂO SUPORTAM TRANSAÇÕES!
# MUDE A ENGINE DA TABELA PARA InnoDB
# Comando para Modificar de MyISAM pra InnoDB:
# alter table nome_da_tabela engine = InnoDB;

//Inicio da Transação
$pdo->beginTransaction();

$sql = "insert into Produto (nome, valor, qtde) values ";
$sql .= "('Ursinho de Pelúcia', '1.99', '12')";
//Cadastro de Produto
$dados = $pdo->query($sql);
if(!$dados){
  // função que encerra a execução do programa
  die("Houve um erro no cadastro do Produto!");
}

$sql = "insert into Usuario (nome, nascimento, sexo, email, senha) values ";
$sql .= "('Lain', '2000-02-10', 'F', 'lain@email.com', '01010*0111*')";
//Cadastro Final
$cadastro = $pdo->query($sql);
if(!$cadastro){
  //função que cancela as operações anteriores caso esta de erro
  $pdo->rollBack(); # o insert de Produto não é executado

  die("Houve um erro no cadastro final!");
}

//Confirmação da Transação
$pdo->commit();

//localhost/Projects/php_MySql/a7/Transacao.php
?>
