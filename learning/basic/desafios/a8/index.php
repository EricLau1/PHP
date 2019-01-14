<html>
<head>
   <meta charset="utf-8"/>
   <title>PHP - Template</title>
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
         $n1 = isset($_GET["n1"])? $_GET["n1"] : 0;
         $n2 = isset($_GET["n2"])? $_GET["n2"] : 0;

         $media = ($n1 + $n2) / 2;

         if($media < 5){
           $sit = "Reprovado!";
         }elseif($media < 7){
           $sit = "Recuperação.";
         }else{
           $sit = "Aprovado!";
         }

         echo "Media entre $n1 e $n2 = $media <br>";
         echo "Situação do Aluno: <span> $sit </span> <br>";
      ?>
      <br> <a href="form.html" style="color: silver;">Back</a>
  </div>

</body>
</html>
