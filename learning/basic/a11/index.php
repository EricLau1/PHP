<html>
<head>
   <meta charset="utf-8"/>
   <title>PHP - Do While</title>
   <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="_css/style.css">
</head>
<body>

  <div class="animated bounceInDown main">
     <h1>Programando em PHP</h1>
      <?php
         echo "Estrutura <b>Do While</b> <br>";

         $c = 1;
         do {
           echo "$c ";
           $c++;
         }while($c <= 10);

         echo "<br>";
         $c--;
         do {
           echo "$c ";
           $c--;
         }while($c >= 1);

        $n = isset($_GET["valor"])? $_GET["valor"] : 1;
        echo "<br>Calculando fatorial de $n <br>";
        echo "!".$n;
        $fat = 1;
        do {
          $fat *= $n;
          $n--;
        } while($n >= 1);
        echo " =  $fat";
      ?>
      <br/> <a href="form.html" style="color:silver;">Back</a>
  </div>

</body>
</html>
