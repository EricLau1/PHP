<html>
<head>
   <meta charset="utf-8"/>
   <title>PHP - Strings</title>
   <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="_css/style.css">
</head>
<body>

  <div class="animated bounceInDown main">
     <h1>Programando em PHP</h1>
      <?php
         echo "Funções de <b>Strings</b> <br><br>";

         echo "Função <b>printf()</b> <br>";
         $prod = "Leite";
         $preco = 4.5;
         printf("O %s custa R$ %.2f", $prod, $preco);
         /*
           Formatos usados no printf
           %d = numeros inteiros
           %u = numeros positivos apenas
           %s = strings
           %f = numeros reais, %.2f formata com 2 casas decimais após a virgula, é possivel alterar o valor
         */
         echo "<br>";
         echo "Função <b>print_r()</b> <br>";
         $x[0] = 4;
         $x[1] = 3;
         $x[2] = 8;
         // print_r imprime todos os valores de um vetor de uma vez
         print_r($x);

         echo "<br>";
         $vetor = array("Dipper", "Mabel", "Juju");
         print_r($vetor);

         // Outras Opções para imprimir Arrays
         echo "<br>";
         echo "<br> Função <b>var_dump()</b> <br>";
         var_dump($x);

         echo "Função <b>var_export()</b> <br>";
         var_export($x);

         echo "<br>";
         // função que qubra a linha dentro código html gerado
         // para vizualizar, inspecione o codigo fonte da pagina quando for carregada
         echo "Função <b>wordwrap()</b> <br>";
         $txt = "Era uma casa muito engraçada não tinha teto não tinha nada, ninguem podia morar ali...";
         $r = wordwrap($txt, 8); // quebra a linha após 8 caracteres apenas no codigo fonte
         echo $r ."<br>";
         $r = wordwrap($txt, 20, "<br>"); // quebra a linha após 20 caracteres apenas na pagina visual
         echo $r;
         $r = wordwrap($txt, 20, "<br>\n"); // quebra a linha na pagina e no codigo fonte

         //o parametro false, faz com que a linha quebre após o final de uma palavra
         //caso ela seja maior ou igual ao tamanho passado como parametro
         $r = wordwrap($txt, 5, "<br>\n", false);

         //o parametro true, quebra a linha, não importando se a palavra tenha sido terminada
         $r = wordwrap($txt, 5, "<br>\n", true);

         echo "<br>";
         echo "Função <b>strlen()</b> <br>";
         // função que retorna a quantidade de caracteres de uma string
         echo "Quantidade de caracteres: ". strlen($txt) ."<br>";

         echo "<br>";
         echo "Função <b>trim()</b> <br>";
         $nome = "   Single Player    ";
         echo "Tamanho do nome com espaços: ". strlen($nome) ."<br>";
         // função trim elemina os espaços antes da primeira palavra e os depois da ultima palavra
         $nome = trim($nome);
         // variações
         //$nome = ltrim($nome); elimina apenas os espaços do inicio
         //$nome = rtrim($nome); elimina apenas os espaços do final
         echo $nome ." tem ". strlen($nome) ."<br>";

         //mb_strlen($string, "utf-8"); função para strings com acentuações 

         echo "<br>";
         echo "Função <b>str_word_count()</b> <br>";
         $frase = "Quantidade de palavras nesta frase";
         // str_word_count retorn a quantidade de palavras numa string
         $p = str_word_count($frase, 0); // 0 indica que ira retornar apenas a quantidade de palavras
         echo $frase." = ". $p ."<br>";

         // variações
         $p = str_word_count($frase, 1); // 1 indica que irá retornar um vetor, onde cada palavra ocupa uma posicao
         print_r($p);
         echo "<br>";
         // 2 indica que também irá retornar um vetor, porém cada palavra será alocada de acordo,
         // com a posição dela dentro da string
         $p = str_word_count($frase, 2);
         print_r($p);
         echo "<br>";

         echo "Função <b>explode()</b> <br>";
         $game = "Super Metroid";
         // explode gera um vetor de palavras a partir de uma string, é uma função atualizada da função anterior
         $vetor = explode(" ", $game); // " " indica onde a string será quebrada
         print_r($vetor);
         echo "<br>";

         echo "Função <b>str_split()</b> <br>";
         $nome = "Annie";
         // função que gera um vetor de letras a partir de uma string
         $vetor = str_split($nome);
         print_r($vetor);
         echo "<br>";

         echo "Função <b>implode()</b> <br>";
         $vet[0] = "Funcoes";
         $vet[1] = "de";
         $vet[2] = "Strings";
         // implode irá separar cada palavra por um caractere passado  pelo usuario
         $txt = implode("~>", $vet); // O parametro "~>" pode ser alterado...
         echo $txt;
         echo "<br>";

         //outra alternativa igual ao implode
         $txt = join(" ", $vet);
         echo $txt;
         echo "<br>";

         echo "Função <b>chr</b> <br>";
         // está função retorna qual a letra do teclado referente ao valor passado como parametro
         $letra = chr(67);
         echo "$letra <br>";

         echo "Função <b>ord</b> <br>";
         $letra = "C";
         // está função retorna o codigo da letra do teclado
         $cod = ord($letra);
         echo "A letra $letra possui o codigo $cod <br>";

      ?>
  </div>

</body>
</html>
