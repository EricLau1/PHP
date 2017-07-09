<html>
<head>
   <meta charset="utf-8"/>
   <title>PHP - Numeros Primos</title>
   <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="_css/style.css">
   <style>
       span {
         color: red;
       }
   </style>
</head>
<body>

  <div class="animated bounceInDown main">
     <h1>Programando em PHP</h1>
      <?php
         echo "Desafio 12 - Numeros Primos";

         $n = isset($_GET["valor"])? $_GET["valor"] : 1;
         echo "<h2>O numero enviado foi $n </h2>";

        $primo = ($n == 1)? "não é primo" : "é primo";

        echo "$n é mútiplo por 1 ";
         for($i = 2; $i < $n; $i++){
            if($n > 2 && $n % $i == 0){
              echo "$i ";
              $primo = "não é primo!";
            }
         }
        echo "e $n <br>";

         echo "<span>$n  <i>$primo</i> </span> <br>";
      ?>
      <br/> <a href="form.html" style="color:silver;">Back</a>
  </div>

</body>
</html>
