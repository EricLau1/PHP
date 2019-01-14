<html>
<head>
   <meta charset="utf-8"/>
   <title>PHP - Matrizes</title>
   <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="_css/style.css">
</head>
<body>

  <div class="animated bounceInDown main">
     <h1>Programando em PHP</h1>
      <?php
         echo "<b> Matrizes</b> <br>";
         // Matrizes em PHP são vetores dentro vetores
         $n = array(
           array(2,3), // $n[0][0] = 2, $n[0][1] = 3
           array(3,4), // $n[1][0] = 3, $n[1][1] = 4
           array(9,5) // $n[2][0] = 9, $n[2][1] = 5
         );
         $n[2][0] = $n[1][1];
         print_r($n);
         $n[] = array(11,-2);
         echo "<br>Novos valores adicionados ". $n[3][0] .", ". $n[3][1] ."<br>";
         $i = 0;
         echo "Quantidade de elementos na posição $i = ". count($n[$i]) ."<br>";
         
         foreach($n as list($a, $b)){
           echo $a .", ". $b ."<br>";
         }
      ?>
  </div>

</body>
</html>
