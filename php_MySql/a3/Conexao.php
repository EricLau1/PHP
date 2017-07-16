<style>
    th,td {
      padding: 10px;
      border: 1px solid silver;
    }
</style>

<?php
       $host = "mysql:host=localhost;dbname=php_exemplo";
       $user = "root";
       $pass = "";

       try{
         $pdo = new PDO($host, $user, $pass);
         echo "<p>O Banco foi conectado com sucesso!</p>";

         echo "PHP & MySql: PDO - SELECT <br>";

         #SELECT

        // Buscando uma linha específica
        $id = 2;
        $email = "jujuba@email.com";

        #Busca menos Segura
        // $buscarUsuario = $pdo->query("select * from Usuario where id=$id");
        // echo " <br>Usuario com ID($id) = ". $buscarUsuario->rowCount();

        #Busca mais Segura utilizando ? ou :
        $buscaSegura = $pdo->prepare("select * from Usuario where id=:id and email=:email");
        $buscaSegura->bindValue(":id", $id);
        $buscaSegura->bindValue(":email", $email);
        $buscaSegura->execute();

        echo "<br>Buscando Usuario: ". $buscaSegura->rowCount() . "<br>";

        #utilizando os dois pontos(:) e possivel usar pseudonomes
        //$buscaSegura = $pdo->prepare("select * from Usuario where id=:id and email=:email");
          
        $buscaSegura = $pdo->prepare("select * from Usuario ");
        $buscaSegura->bindValue(":id", $id);
        $buscaSegura->bindValue(":email", $email);
        $buscaSegura->execute();


        // Imprimindo dados de uma Tabela
        $sql = "select * from Produto";
        $r = $pdo->query($sql);
        echo "<p>Imprimindo Dados da Tabela Produto </p>";
        echo "<table>";
        echo "<th>id</th> <th>Nome</th> <th>Valor</th> <th>Quantidade</th>";
         while($row = $r->fetch(PDO::FETCH_ASSOC)){
           echo "<tr> <td>{$row['id']} </td> <td> {$row['nome']} </td>";
           echo "<td> {$row['valor']} </td> <td> {$row['qtde']} </td> </tr>";
         }
        echo "</table>";

        // Desconectando o banco
         $pdo = null;
       }
       catch(PDOException $ex){
         echo "<p>Conexão mal sucedida! Erro: {$ex->getMessage()}</p>";
         //echo $ex->getCode();
       }

?>
