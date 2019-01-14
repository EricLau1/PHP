<html>
<head>
   <meta charset="utf-8"/>
   <title>PHP - Switch</title>
   <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="_css/style.css">
</head>
<body>

  <div class="animated bounceInDown main">
     <h1>Programando em PHP</h1>
      <?php
         echo "Estrutura <b>Switch</b>";

         $num = isset($_GET["num"])? $_GET["num"] : 0;
         $op = isset($_GET["oper"])? $_GET["oper"] : 1;

         echo "<h2> Valores enviados do formulario: $num e $op </h2>";

         switch($op){
           case 1:
              $r = $num * 2;
              $tipo = "Dobro";
              break;
           case 2:
              $r = pow($num, 3);
              $tipo = "Cubo";
              break;
           case 3:
              $r = sqrt($num);
              $tipo = "Raiz";
              break;
           default:
              echo "Erro! <br>";
         } // fim do switch
        echo "$tipo de $num = $r <br>";

        echo "<br> Switch com Multiplos Cases <br>";

        $d = isset($_GET["ds"])? $_GET["ds"]: 1;

        switch($d){
          case 2:
          case 3:
          case 4:
          case 5:
          case 6:
            echo "Dia de Estudar!!! :)";
            break;
          case 7:
            echo "Sábado... Dia de descansar! ;)";
            break;
          default:
            echo "Domingo... Dia de dormir até Tarde!!!";
        }

      ?>
      <br> <a href="form.html" style="color: silver;">Back</a>
  </div>

</body>
</html>
