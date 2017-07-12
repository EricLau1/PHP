<html>
<head>
  <?php
      function imprima($vet){
        foreach($vet as $valor){
          echo "$valor, ";
        }
      }
  ?>
   <meta charset="utf-8"/>
   <title>PHP - Vetores e Matrizes</title>
   <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="_css/style.css">
</head>
<body>

  <div class="animated bounceInDown main">
     <h1>Programando em PHP</h1>
      <?php
         echo "Vetores e Matrizes - <b>Funções</b> <br>";

         $v = array("A", "J", "M", "X", "K");
         echo "<br><b> print_r()</b> <br>";
         print_r($v);

         echo "<br><b> print_r() + tag PRE</b> <br>";
         echo "<pre>";
         print_r($v);
         echo "</pre>";

         echo "<br><b> count()</b> <br>";
         $q = count($v);
         echo "O vetor tem $q elementos <br>";

         echo "<br><b> array_push()</b> <br>";
         // função que adiciona um novo elemento no final do vetor
         array_push($v, "O"); // ~> semelhante ao v[] = "O";
         print_r($v);

         echo "<br><b> array_pop()</b> <br>";
         // função que elimina a ultima posição do vetor
         array_pop($v);
         print_r($v);

         echo "<br><b> array_unshift()</b> <br>";
         // função coloca um elemento no inicio do vetor
         array_unshift($v, "Z");
         print_r($v);

         echo "<br><b> array_shift()</b> <br>";
         // função elimina o elemento no inicio do vetor
         array_shift($v);
         print_r($v);

         echo "<br><b> sort()</b> <br>";
         // Função que ordena Vetores
         $a = array("Dipper", "Jack", "Ana", "Ellen", "Haroldo");
         // Ordenando nomes
         print_r($a);
         sort($a);
         echo "<br>";
         print_r($a);

         // Ordenando Numeros
         echo "<br>";
         $n = array(10, 5, 0, 7, 3);
         print_r($n);
         sort($n);
         echo "<br>";
         print_r($n);

         echo "<br><b> rsort()</b> <br>";
         // Ordenando ao contrário
         $vet = array(0, 5, 7, 3, 11);
         print_r($vet);
         rsort($vet);
         echo "<br>";
         print_r($vet);

         echo "<br><b> asort()</b> <br>";

         $vet = array(9, 6, 2, 7, 1);
         print_r($vet);
         // Ordena o vetor sem trocar o valor/chave da suas posições
         asort($vet);
         echo "<br>";
         print_r($vet);

         echo "<br><b> arsort()</b> <br>";

         $vet = array(20, 100, 50, 30, 70);
         print_r($vet);
         // Ordena(Decrescente, do maior pro menor) o vetor sem trocar o valor/chave da suas posições
         arsort($vet);
         echo "<br>";
         print_r($vet);

         echo "<br><b> ksort()</b> <br>";
         $vet = array(4=>5, 1=>2, 3=>1, 0=>9);
         print_r($vet);
         // Ordena apenas as chaves/valores das posições do vetor
         ksort($vet);
         echo "<br>";
         print_r($vet);

         echo "<br><b> krsort()</b> <br>";
         $vet = array(2=>5, 1=>2, 3=>1, 5=>9);
         print_r($vet);
         // Ordena apenas as chaves/valores das posições do vetor em ordem Decrescente
         krsort($vet);
         echo "<br>";
         print_r($vet);


      ?>

  </div>

</body>
</html>
