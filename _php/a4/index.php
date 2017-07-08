<html>
<head>
   <meta charset="utf-8"/>
   <title>PHP - Operadores de Atribuição</title>
   <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="_css/style.css">
</head>
<body>

  <div class="animated bounceInDown main">
     <h1>Programando em PHP</h1>
      <?php
         echo "Operadores de Atribuição <br>";

         $preco = $_GET["p"];
         $valor = $preco;
         echo "<h2> Preço recebido pela URL: R$ ". number_format($preco, 2, ",", ".") ."</h2>";

         $preco += ($preco * 0.1); // 0.1 = 10/100
         echo "Preço com aumento de 10% = R$ ". number_format($preco , 2, ",", ".") ."<br>";

         $valor -= ($valor * 0.1);
         echo "Preço com desconto de 10% = R$ ". number_format($valor, 2, ",", ".") ."<br>";

         echo "Operadores de incremento e decremento <br>";
         $ano = 2017;
         echo "Ano Atual $ano <br>";
         echo "Ano Anterior ". --$ano ."<br>"; // operador de pré decremento, decrementa na mesma linha
         $ano++; // operador de pós incremento, retorna o valor atual e depois incrementa
         echo "Ano Seguinte ". ++$ano ." <br>"; // pré incremento, incrementa na mesma linha

         # comentário inline
         //comentário inline
         /*
          comentários
          de
          múltiplas
          linhas
         */

         echo "Variáveis Referenciadas <br>";
         $txt1 = "Ola";
         $txt2 = &$txt1; // $txt2 recebe o endereço da variavel $txt1
         // concateação em php é o ponto (.)
         $txt2 .= " seja bem vindo";
         echo "$txt1 <br>"; // o valor foi modificado pois as variaveis possuem o mesmo endereço

         echo "Variáveis de variáveis <br>";
         $nome = "Laura";
         $$nome = "Meu nome é ";
         # $$nome  é uma variavel identificada pelo valor da variavel $nome
         # siginifica que $$nome = $Laura e, $Laura possui o valor "Meu nome é"
         echo "$Laura $nome <br>";
      ?>
  </div>

</body>
</html>
