<html>
<head>
   <meta charset="utf-8"/>
   <title>PHP - Vetores</title>
   <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="_css/style.css">
</head>
<body>

  <div class="animated bounceInDown main">
     <h1>Programando em PHP</h1>

      <?php
         echo "<b>Vetores</b> <br>";

         echo "Declaração de Arrays <br>";
         // vetor em PHP é criado dinamicamente sem precisar definir um tamanho final logo no inicio
         $n[0] = 3;
         $n[1] = 5;
         $n[2] = 8;
         $n[3] = 2;
         $n[4] = 7;
         print_r($n);
         echo "<br>";
         // outra forma de declarar Vetores
         $vetor = array(3, 5, 8, 2, 7);
         $vetor[] = 10; // aloca automaticamente um novo espaço na ultima posição para o novo valor
         print_r($vetor);

         echo "<br> Vetor usando <b>RANGE</b> <br>";
         $c = range(5 , 20, 5); // cria um vetor de 4 posições onde a primeira começa com 5 e a ultima 20
         // os outros espaços serão preenchidos por valores de 5 em 5
         print_r($c);
         echo "<br>";
         $r = range(10, 100, 10); // neste exemplo irá pular de 20 em 20
         print_r($r);
         echo "<br>";

         echo "<b>foreach</b> <br>";
         $vetor = array(3, 10, 45, -6, 30, 9, 17);
         foreach($vetor as $valor){
             echo "$valor ";
         }

         echo "<br> Vetores com chaves personalizadas <br>";
         // Neste vetor as posições são definidas na declaração
         $b = array(1=>"A", 10=>"B", 2=>"C", 0=>"D");
         // a nova posição alocada será a partir da maior chave existente no vetor atual
         $b[] = "E"; // <~ $b[11]
         print_r($b);
         echo "<br>";

         unset($b[1]); // destroi a posição do vetor passada como parametro
         print_r($b);
         echo "<br>";

         echo "Arrays com Chaves Associativas <br>";
         $pessoa = array(
                         "nome" => "Ana",
                         "idade" => 25,
                         "peso" => 60.7
                       );
         print_r($pessoa);
         // criando uma nova chave no vetor
         $pessoa["solteira"] = true;
         echo "<br>O nome dela é ". $pessoa["nome"] ."<br>";
         // usando foreach
         foreach ($pessoa as $chave => $valor) {
            echo "O campo $chave possui o valor $valor <br>";
         }

      ?>

  </div>

</body>
</html>
