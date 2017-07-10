<html>
<head>
  <?php
      // função que recebe dois parametros, soma e imprime na tela
      function soma($a, $b){
        $r = $a + $b;
        echo "Função soma: $a + $b = $r <br>";
      }
     // função que recebe dois parametro, multiplica e retorna o valor
     function mult($a, $b){
       return $a * $b;
     }

     //função com parametros dinâmicos, pode receber 0 ou N argumentos...
     function dinamic_soma(){
       $p = func_get_args(); //esta função retorna uma vetor com os valores passados como parametros caso existam
       $tot = func_num_args(); // esta função retorna a quantidade de parametros passados como argumentos nesta função
       $s = 0;
       for($i = 0; $i < $tot; $i++){
        $s +=  $p[$i];
       }
       return $s;
     }

   ?>

   <meta charset="utf-8"/>
   <title>PHP - Funções Parte 1</title>
   <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="_css/style.css">
</head>
<body>

  <div class="animated bounceInDown main">
     <h1>Programando em PHP</h1>
      <?php
         echo "Funções - Parte 1 <br>";

         soma(3, 4);
         soma(20, 11);
         $x = 100;
         $y = 78;
         soma($x, $y);

         $x = 5;
         $y = 3;
         $r = mult($x, $y);
         echo "Função mult: $x x $y = $r <br>";

         echo "Função com parametros dinâmicos <br>";
         echo dinamic_soma(1,2,3,4,5,6) ."<br>";
         echo dinamic_soma(10,20,100) ."<br>";
         $r = dinamic_soma();
         echo "$r <br>";
      ?>
  </div>

</body>
</html>
