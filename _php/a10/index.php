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
         echo "Estrutura <b>While</b> <br>";

         $c = 1;
         echo "Contando de 1 a 5 <br>";
         while($c <= 5){
           echo "$c <br>";
           $c++;
         }

         echo "Contando de 5 a 1 <br>";
         $c--;
         while($c >= 1){
           echo "$c <br>";
           $c--;
         }

         echo "<br> Valores Enviados do Formulário <br>";
         $i = 1;
         while($i <= 5){
           $v = "num".$i; // <~ $v = num1...

           //pega o nome da variaveis passadas pela url
           $url = "v".$i; // <~ $url = v1, v2, v3...

          // pega o conteudo das variaveis passadas pela url
           $$v = isset($_GET["$url"])? $_GET["$url"] : 0; // <~ $$v = num1, num2, num3...
           $i++;
         }

          //echo "$num1 $num2 $num3 $num4 $num5 <br>";

         $i = 1;
         while($i <= 5){
           $v = "num".$i;
           echo $i."° Valor: ". $$v ."<br>";
           $i++;
         }


          echo "PHP aceita os controles <b>break</b> e <b>continue</b> <br> ";
           Exemplo:
           $x = 0;
           while($x < 1000){
               $x += 5;
               if($x % 2 == 0){
                  continue; // ignora os comandos abaixo
               }
               
               if($x > 100) {
                break;
               }
               echo $x ."<br>";
           }

      ?>
          <br/> <a href="form.php" style="color:silver;">Back</a>
  </div>

</body>
</html>
