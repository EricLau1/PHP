<html>
<head>
   <meta charset="utf-8"/>
   <title>PHP - Funções Aritméticas</title>
   <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="_css/animate.css">
   <link rel="stylesheet" type="text/css" href="_css/style.css">
</head>
<body>

  <div class="animated bounceInDown main">
     <h1>Programando em PHP</h1>
      <?php
         echo "Funções Aritméticas <br>";
         // ~> http://localhost/Projects/_php/a3/funcoes.php?n1=5&n2=-10
         $n1 = $_GET["n1"];
         $n2 = $_GET["n2"];
         echo "<h2> Valores Recebidos via URL : $n1 e $n2 </h2>";

         // função que retorna o valor Absoluto do valor passado como parametro
         echo "Valor Absoluto de $n2 é ". abs($n2). "<br>";

         $valor = 2;
          // função de potenciação
         echo "Valor de $n1 <sup>$valor</sup> = ". pow($n1,$valor). "<br>";

         // função que retorna a raiz quadrada do valor passado como parametro
         echo "Raiz Quadrada de $n1 = ". sqrt($n1) ."<br>";

         // função que faz o Arredondamento Aritmético
         // Se menor que 5 arredonda para baixo, senão arredonda para cima
         $valor = 3.5;
         echo "Arredondamento Aritmético de $valor = ". round($valor) ."<br>";

         // função que sempre arredonda para cima
         $valor = 5.1;
         $cima = ceil($valor);
         echo "Arredondamento forçado para cima de $valor = " . $cima ."<br>";

         // função que sempre arredonda para baixo
         $valor = 9.9;
         $baixo = floor($valor);
         echo "Arredondamento forçado para baixo de $valor = ". $baixo ."<br>";

         // função que retorna a parte inteira de um número real
         $valor = 1.618;
         echo "Parte inteira de $valor = ". intval($valor) ."<br>";

         $PI = 3.14159;
          // função que formata a quantidade de casas decimais
         echo "$PI com três casas decimais = ". number_format($PI, 3) ."<br>";

         // usando number_format para formatar moedas
         echo "O valor de $n1 em moeda R$ ". number_format($n1,2, ",", ".") ."<br>";
      ?>
  </div>

</body>
</html>
