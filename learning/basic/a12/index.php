<html>
<head>
   <meta charset="utf-8"/>
   <title>PHP - For</title>
   <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="_css/style.css">
</head>
<body>

  <div class="animated bounceInDown main">
     <h1>Programando em PHP</h1>
      <?php
         echo "Estrutura <b>for</b> <br>";
         for($c = 1; $c <= 10; $c++){
           echo "$c ";
         }
        echo "<br>";
         for($c = 10; $c >= 1; $c--){
           echo "$c ";
         }

         echo "<br>";
         for($c = 0; $c <= 100; $c += 5){
           echo "$c ";
         }

         echo "<br>";
         for($c = 100; $c >= 0; $c -= 5){
           print "$c ";
         }

         $n = isset($_GET["n"])? $_GET["n"] : 1;
         echo "<h2>Tabuada do $n </h2>";
         for($i = 1; $i <= 10; $i++){
           print "$n x $i = ". ($n * $i) ."<br>";
         }

      ?>
      <br/> <a href="form.php" style="color:silver;">Back</a>
  </div>

</body>
</html>
