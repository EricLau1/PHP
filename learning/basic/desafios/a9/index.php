<html>
<head>
   <meta charset="utf-8"/>
   <title>PHP - Desario 09</title>
   <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="_css/style.css">
   <style>
       span{
         color: red;
         font-weight: bold;
       }
   </style>
</head>
<body>

  <div class="animated bounceInDown main">
     <h1>Programando em PHP</h1>
      <?php
         echo "Desafio aula 09 <br>";

         $op = isset($_GET["uf"])? $_GET["uf"] : 0;
         switch($op){
           case 1:
              $regiao = "Norte";
              break;
           case 2:
              $regiao = "Nordeste";
              break;
           case 3:
              $regiao = "Centro-Oeste";
              break;
           case 4:
              $regiao = "Sudeste";
              break;
           case 5:
              $regiao = "Sul";
              break;
           default:
              $regiao = "Not Info";
         }//fim switch
         echo "Você mora na <span>Região $regiao </span>"
      ?>
      <br> <a href="form.html" style="color: silver;">Back</a>
  </div>

</body>
</html>
