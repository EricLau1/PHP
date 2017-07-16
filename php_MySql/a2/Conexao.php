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

         echo "PHP & MySql: PDO - INSERT <br>";

         // Não especifiquei o id pois é uma chave primaria auto_increment
         $sql = "insert into Usuario (nome, nascimento, sexo, email, senha) values ";
         $sql .= "(:nome, :nasc, :sexo, :email, :senha)"; // linha concatenada

         $nome = "Mel";
         $data = new DateTime('01-01-2001');
         $nasc = $data->format('Y-m-d'); // banco de dados recebe datas no formato (YYYY-MM-DD)
         $sexo = "F";
         $email = "mel@email.com";
         $p = "111222333";

         try{
           //Preparando o Cadastro
           $buscaSegura = $pdo->prepare($sql);
           $buscaSegura->bindValue(":nome", $nome);
           $buscaSegura->bindValue(":nasc", $nasc);
           $buscaSegura->bindValue(":sexo", $sexo);
           $buscaSegura->bindValue(":email", $email);
           $buscaSegura->bindValue(":senha", $p);

           //Valida o Cadastro
           $validar = $pdo->prepare( "select * from Usuario where email=?");
           $validar->execute(array($email)); // Verifica se ja existe um email identico cadastrado

           if($validar->rowCount() == 0) { // se igual a 0 significa que pode ser cadastrado
              // Executa o Cadastro
              if($buscaSegura->execute()){
                echo "<p>Usuário cadastrado com sucesso! </p>";
              }
              else{
                # Houve algum erro no comando SQL, difderença de Tipos...
                echo "<p>Usuário <b>não</b> foi cadastrado! </p>";
              }
           }
           else{
             echo "<p>Este e-mail já está cadastrado!</p>";
           }

         }
         catch(PDOException $ex){
           echo "INSERT ERROR!: {$ex->getMessage()}";
         }

         // Desconecta o Banco
         $pdo = null;
       }
       catch(PDOException $ex){
         echo "<p>Conexão mal sucedida! Erro: {$ex->getMessage()}</p>";
         //echo $ex->getCode();
       }

?>
