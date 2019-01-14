<html>
<head>
   <meta charset="utf-8"/>
   <title>PHP - Operadores Relacionais</title>
   <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="_css/style.css">
</head>
<body>

  <div class="animated bounceInDown main">
     <h1>Programando em PHP</h1>
      <?php
         echo "Operadores Relacionais <br>";

         /*
         Operadores do PHP
         maior        >
         menor        <
         maior-igual  >=
         menor-giaul  <=
         diferente    !=
         igualdade    ==
         identico     ===
         */

         $n1 = $_GET["a"];
         $n2 = $_GET["b"];
         $tipo = $_GET["op"];
         // http://localhost/Projects/_php/a5/index.php?a=5&b=23&op=s
         echo "<h2> Valores passados pela URL: $n1, $n2, $tipo </h2>";

         echo "Operador Ternário <br>";
         // se tipo igual a s retorna a soma, senão, retorna a multiplicação
         $r = ($tipo == "s")? $n1+$n2 : $n1*$n2;
         echo "$r <br>";

         $num = 3; // int
         $valor = "3"; // string
         echo "Operador de Igualdade == <br>";
         // verifica se o conteúdo das variáveis são iguais, ignorando os tipos
         if($num == $valor){
           echo "$num(int) é igual $valor(string) <br>";
         }

         echo "Operador de Igualdade/Idêntico === <br>";
         // verifica se o conteudo e o TIPO das variáveis são iguais
         if($num === $valor){
           echo "$num é igual $valor <br>";
         }else{
           echo "$num(int) não é igual $valor(string) <br>";
         }

         echo "Operador Menor < <br>";
         $nota1 = 8;
         $nota2 = 5;
         $media = ($nota1 + $nota2) / 2;
         echo "Média = $media, situação = ". ( ($media < 6)? "Reprovado! <br>" : "Aprovado! <br>" );

         echo "Operadores Lógicos <br>";
         /*
         E = and &&
         OU = or ||
         XOU = xor (ou exclusivo)
         NÃO = !
         */
        $ano = 1990;
        $idade = 2017 - $ano ;
        $sexo = "M";
        // executa apenas se as duas opções forem verdadeiras
        if($idade > 17 && $sexo == "M"){
          echo "Esta é uma pessoa do sexo masculino, maior de idade <br>";
        }

        $sexo = "F";
        // executa se uma ou mais opções forem verdadeiras
        if($idade < 18 || $sexo == "F"){
          echo "Esta é uma pessoa do sexo feminino! <br>";
        }
      ?>
  </div>

</body>
</html>
