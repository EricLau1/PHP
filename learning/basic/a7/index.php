<html>
<head>

   <?php
      $txt = isset($_GET["txt"])? $_GET["txt"] : "[not info]";
      $tam = isset($_GET["tam"])? $_GET["tam"] : "14pt";
      $cor = isset($_GET["cor"])? $_GET["cor"] : "#000";
    ?>

   <meta charset="utf-8"/>
   <title>PHP - Cores e CSS</title>
   <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="_css/style.css">

   <style>
      span.texto{
        /* passando valores do php pro css */
        font-size: <?php echo $tam; ?>;
        color: <?php echo $cor;  ?>;
      }
   </style>

</head>
<body>

  <div class="animated bounceInDown main">
     <h1>Programando em PHP</h1>
      <?php
         echo "PHP - Cores & CSS <br>";

         echo "<span class='texto'> $txt </span>";
      ?>
      <br><br>
      <a href="form.html" style="color:silver;">Back</a>
  </div>

</body>
</html>
