<html>
<head>
   <meta charset="utf-8"/>
   <title>PHP - Datas</title>
   <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="_css/style.css">
</head>
<body>

  <div class="animated bounceInDown main">
     <h1>Programando em PHP</h1>
      <?php
         echo "Biblioteca Date <br>";

         echo "Data atual do Sistema Operacional <br>";
         echo date("d/m/y") ."<br>";

         echo "Outra versão <br>";
         echo date("D/M/Y") ."<br>";

         echo "Apenas o Ano: ". date("Y") ."<br>";
         $ano = date("y");
         echo "Ano: ". $ano ."<br>";

         echo "Nome do Mês: ". date("M") ."<br>";
         $mes = date("m");
         echo "Mês: ". $mes ."<br>";

         echo "Dia da Semana: ". date("D") ."<br>";
         $dia = date("d");
         echo "Dia: ". $dia ."<br>";

         echo "Hora <br>" ;
         echo date("H:i:s"); // versão 24horas
         echo "<br>";
         echo date("h:i:s"); // versão 12horas
      ?>
  </div>

</body>
</html>
