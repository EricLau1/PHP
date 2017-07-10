<html>
<head>
  <?php
     //Passagem por valor
     function dobro($x){
       $x += $x;
       return $x;
     }

    //Passagem por referencia
     function ref_dobro(&$arg){
       $arg += $arg;
     }
   ?>
   <meta charset="utf-8"/>
   <title>PHP - Funções Parte 2</title>
   <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="_css/style.css">
</head>
<body>

  <div class="animated bounceInDown main">
     <h1>Programando em PHP</h1>
      <?php
         echo "Funções Parte 2 <br>";

         echo "Passagem por Valor <br>";
         $x = 2;
         // a variavel é modificada dentro da função, mas continua a mesma fora dela
         echo dobro($x) . " é o dobro de $x <br>";
         $x = 400;
         echo dobro($x) . " é o dobro de $x <br>";

         echo "Passagem por Referência <br>";
         $x = 5;
         echo "Valor da variavel = $x <br>";
         ref_dobro($x); // a função irá dobrar o valor de $x, pois a função pega o endereço da variavel e nao apenas o valor
         echo "Valor da variavel passada por referencia = $x <br>";

         // chamando funções de arquivos externos

         // include: inclui um arquivo externo caso exista
         // caso não exista o arquivo, continua a o resto do script que nao necessita do arquivo externo
         //include "funcoes.php";

         //include_once "funcoes.php"; // carrega o arquivo apenas um vez caso o mesmo nao tenha sido carregado

         // require: é quase a mesma coisa que o include
         // entretanto, caso o arquivo nao exista ou de erro, o script será interrompido, se for requisitado
         // alguma operação do arquivo requerido externamente
         require "funcoes.php";

         //require_once "funcoes.php"; // carrega o arquivo apenas um vez caso o mesmo nao tenha sido carregado

         // todas as funções abaixo pertencem ao arquivo funcoes.php
         echo "<br> Funções Externas <br>";

         getOla();

         $x = 5;
         echo "Fatorial de !$x = ". fatorial($x) ."<br>";

         echo "Numeros de fibonacci: ";
         for($i = 0; $i < $x; $i++){
           echo fibo($i) ." ";
         }
      ?>
  </div>

</body>
</html>
