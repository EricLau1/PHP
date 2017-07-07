<html>
<head>
   <meta charset="utf-8"/>
   <title>PHP - Operadores Aritméticos</title>
   <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="_css/style.css">
</head>
<body>

  <div class="animated bounceInDown main">
     <h1>Programando em PHP</h1>
      <?php
         echo "Operadores Aritméticos <br>";

         $n1 = 10;
         $n2 = 5;
         $soma = $n1 + $n2;
         //echo "$n1 + $n2 = $soma <br>";

         echo "Soma de $n1 + $n2 = ". ($n1 + $n2) ."<br>";
         echo "Subtração de $n1 - $n2 = ". ($n1 - $n2) ."<br>";
         echo "Multiplição de $n1 * $n2 = ". ($n1 * $n2) ."<br>";
         echo "Divisão de $n1 / $n2 = ". ($n1 / $n2) ."<br>";
         echo "Resto da Divisão de $n1 % $n2 = ". ($n1 % $n2) ."<br>";

         /*
         echo "Ordem de Precedência de Operadores <br>";
         echo "Parênteses: (...)<br>";
         echo "Multiplicação, Divisão, Módulo: * / % <br>";
         echo "Adição, Subtração: + - <br>";
         */

         $media = ($soma) / 2;
         echo "A média de $soma é $media <br>";

         echo "<br> Passando Valores pela URL <br>";
         // ~> http://localhost/Projects/_php/a3/index.php?n1=10&n2=20
         $n1 = $_GET['n1'];
         $n2 = $_GET['n2'];
         $soma = $n1 + $n2;
         echo "$n1 + $n2 = $soma <br>";
      ?>
  </div>

</body>
</html>
