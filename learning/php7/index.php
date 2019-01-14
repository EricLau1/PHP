<html>
<head>
   <meta charset="utf-8"/>
   <title>PHP 7</title>
   <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="_css/style.css">
</head>
<body>

  <div class="animated bounceInDown main">
     <h1>Programando em PHP</h1>
      <?php

         echo "PHP 7 - Novas Funcionalidades <br>";
         echo "Versão: ". phpversion() ."<br>";

        // função espefificando tipos
        function soma(int $n): int{
          return $n/2;
        }
        $r = soma(5);
        echo "$r <br>";

        $a = 5;
        $b = 2;

        // função que retorna a divisão inteira entre dois numeros
        $d = intdiv($a, $b);
        echo "Divisao inteira de $a / $b = $d <br>";

         // ?? operador para controlar valores recebidos pela URL
         $n = $_GET['n'] ?? 'not info'; // caso nao recebe nenhum valor pela URL $n recebe 'not info'
         echo $n;

         echo "<br> Operador <=> <br>";
         $a = 10;
         $b = 5;
         $m = $a <=> $b; // se o numero da direita > que o da esquerda retorna 1 senão, -1, se igual retorna 0
         echo "Se $a maior que $b retorna $m <br>";

         $a = 1;
         $b = 9;
         $m = $a <=> $b;
         echo "Se $a menor que $b retorna $m <br>";

         $a = 6;
         $b = 6;
         $m = $a <=> $b;
         echo "Se $a igual à $b retorna $m <br>";
      ?>
  </div>

</body>
</html>
