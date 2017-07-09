<html>
<head>
   <meta charset="utf-8"/>
   <title>PHP - While</title>
   <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="_css/style.css">
</head>
<body>

  <div class="animated bounceInDown main">
     <h1>Programando em PHP</h1>
      <?php
         echo "Desafio 10 - While <br>";

         $i = isset($_GET["i"])? $_GET["i"] : 0;
         $f = isset($_GET["f"])? $_GET["f"] : 0;
         $x = isset($_GET["x"])? $_GET["x"] : 0;

         while($i <= $f){
           echo "$i ";

           if($i == $f){
             break;
           }
           
           $i += $x;
         }

         while($i >= $f){
           echo "$i <br>";
           $i -= $x;
         }
      ?>
      <br/> <a href="form.html" style="color:silver;">Back</a>
  </div>

</body>
</html>
