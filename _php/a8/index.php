<html>
<head>
   <meta charset="utf-8"/>
   <title>PHP - Estrutuas Condicionais</title>
   <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="_css/style.css">
</head>
<body>

  <div class="animated bounceInDown main">
     <h1>Programando em PHP</h1>
      <?php
         echo "Estrutuas Condicionais <br>";

         $ano = isset($_GET["ano"])? $_GET["ano"] : date("Y");
         echo "Ano enviado do Formulário: $ano <br>";

         $idade = date("Y") - $ano;

        echo "Condicional Simples <br>";
         if($idade >= 18){
           $v = "pode votar";
           $d = "pode dirigir";
         }
         else{
           $v = "nao pode votar";
           $d = "nao pode dirigir";
         }
         echo "Com $idade anos você $v e $d. <br/>";

         echo "<br> Condicionais Aninhadas <br>";
         if($idade < 16){
           $tipoVoto = "nao pode votar";
         }
         else{

           if( ($idade >= 16 && $idade < 18) || ($idade > 65) ) {
             $tipoVoto = "voto e opcional";
           }
           else{
             $tipoVoto = "voto e obrigatorio";
           }

         }
         echo "Com $idade anos $tipoVoto. <br/>";

         echo "<br> Estrutura <b>elseif</b> <br>";
         if($idade < 16){
           $tipoVoto = "nao pode votar";
         }
         elseif( ($idade >= 16 && $idade < 18) || ($idade > 65) ){
             $tipoVoto = "voto e opcional";
         }
         else{
             $tipoVoto = "voto e obrigatorio";
         }
         echo "Com $idade anos $tipoVoto. <br/>";

      ?>
      <br> <a href="form.html" style="color: silver;">Back</a>
  </div>

</body>
</html>
