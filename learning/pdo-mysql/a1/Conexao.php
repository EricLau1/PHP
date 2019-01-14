<?php
       $host = "mysql:host=localhost;dbname=php_exemplo";
       $user = "root";
       $pass = "";
       try{
         $pdo = new PDO($host, $user, $pass);
         echo "<p>O Banco foi conectado com sucesso!</p>";

         #desconectando o Banco
         $pdo = null;
       }
       catch(PDOException $ex){
         echo "<p>Conexão mal sucedida! Erro: {$ex->getMessage()}</p>";
         //echo $ex->getCode();
       }


?>
