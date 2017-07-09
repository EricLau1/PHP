<html>
<head>
   <meta charset="utf-8"/>
   <title>PHP - Formulário</title>
   <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="_css/style.css">
</head>
<body>

  <div class="animated bounceInDown main">
     <h1>Programando em PHP</h1>
      <?php
         echo "HTML 5 & PHP <br>";
         // isset verifica se algum valor foi enviado pela URL
         $valor = isset($_GET["valor"])? $_GET["valor"] : 1;
         echo "Valor enviado pelo formulário: $valor <br>";
         $raiz = sqrt($valor);
         echo "Raiz quadrada de $valor é $raiz <br>";

         $nome = isset($_GET["nome"])? $_GET["nome"] : "[not info]";
         $ano = isset($_GET["ano"])? $_GET["ano"] : date("Y");
         $sexo = isset($_GET["sexo"])? $_GET["sexo"] : "[not info]";
         $data = date("Y"); // pegando o ano atual do sistema operacional
         //echo "Data atual: ". $data . "<br>";
         $idade = $data - $ano;
         echo "Dados do Usuário <br>";
         echo "Nome: $nome <br>";
         echo "Idade: $idade <br>";
         echo "Sexo: $sexo <br>";
      ?>
      <a href="form.html" style="color:silver;">Back</a>
  </div>

</body>
</html>
