<html>
<head>
   <meta charset="utf-8"/>
   <title>PHP - Tabuada</title>
   <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="_css/style.css">
   <style>
        span {
          color: #333399;
          font-weight: bolder;
        }
  </style>
</head>
<body>

  <div class="animated bounceInDown main">
     <h1>Programando em PHP</h1>
      <?php
         echo "Desafio 11 - Tabuada <br>";
         $v = isset($_GET["v"])? $_GET["v"] : 1;
         echo "<h2> Tabuada do $v </h2>";
         $i = 1;
         do {
           echo "<span> $v x $i = ". ($v * $i) ."</span> <br>";
           $i++;
         }while($i <= 10);

      ?>
      <br/> <a href="form.php" style="color:silver;">Back</a>
  </div>

</body>
</html>
