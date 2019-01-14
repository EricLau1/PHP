<?php

function conectar(){
  try{
    $pdo = new PDO("mysql:host=localhost;dbname=php_exemplo", "root", "");
  }
  catch(PDOException $ex){
    echo "Erro ao Conectar! Informação: ". $ex->getMessage();
  }
  return $pdo;
}

?>
