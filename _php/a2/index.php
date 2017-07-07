<html>
<head>
   <meta charset="utf-8"/>
   <title>PHP - Variáveis</title>
   <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="_css/style.css">
</head>
<body>

  <div class="animated bounceInDown main">
  <h1>Programando em PHP</h1>
      <?php
      echo "Variáveis <br>";

      /*
      echo "Typecast: <br>";
      echo "Inteiro: (int), (integer) <br>";
      echo "Real: (real), (float), (double) <br>";
      echo "Caractere: (string) <br>";
      */

      //Atribuição de Valores
      $idade = 18;
      $salario = 1456.97;
      $nome = "Lain";
      // tipo boolean em PHP, caso false var = vazio, caso true var = 1
      $casado = false;

      //Imprimindo Variáveis
      echo "Idade = $idade <br>";
      echo "Salario = $salario <br>";
      echo "Nome = $nome <br>";

      if(!$casado){
        echo "Casado = false <br>";
      }else{
        echo "Casado = true <br>";
      }

      //concatenação em php
      echo $nome." tem ".$idade." anos <br>";
      // echo "$nome tem $idade anos"; <- desta forma só funciona com aspas duplas ("")

      ?>

  </div>

</body>
</html>
