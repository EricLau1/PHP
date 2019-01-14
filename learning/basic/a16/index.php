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
         echo "Funções Strings Parte 2 <br>";

         echo "<br>";
         echo "Função <b>strtolower()</b> <br>";
         $nome = "AMANDA";
          echo $nome ."<br>";
         // strtolower retorna a palavra com todas as letras em minusculas
         echo strtolower($nome) ."<br>";

          echo "Função <b>strtoupper()</b> <br>";
          $nome = "scooby doo";
          echo $nome ."<br>";
          // strtolower retorna a palavra com todas as letras em maiusculas
          echo strtoupper($nome) ."<br>";

          echo "Função <b>ucfirst()</b> <br>";
          $nome = "jane do";
          echo $nome ."<br>";
          // ucfirst modifica a primeira letra da string para maiuscula
          echo ucfirst($nome) ."<br>";

          echo "Função <b>ucwords()</b> <br>";
          $nome = "johnny bravo";
          echo $nome ."<br>";
          // ucwords modifica a primeira letra de cada palavra na string para maiuscula
          echo ucwords($nome) ."<br>";

          echo "Função <b>strrev()</b> <br>";
          $nome = "Harry Potter";
          echo $nome ."<br>";
          // função que retorna a string ao contrário
          echo strrev($nome) ."<br>";

          echo "Função <b>strpos()</b> <br>";
          $nome = "Programando em PHP";
          echo $nome ."<br>";
          // função que retorna a posição de uma letra ou palavra dentro da string
          $pos = strpos($nome, "PHP"); // se a palavra nao existir na string, a função retorna false/vazio
          echo $pos ."<br>";

          echo "Função <b>stripos()</b> <br>";
          $nome = "Programando em PHP";
          echo $nome ."<br>";
          // função que retorna a posição de uma letra ou palavra dentro da string
          $pos = stripos($nome, "php"); // econtra a palavras mesmo em minusculas
          echo $pos ."<br>";

          echo "Função <b>substr_count()</b> <br>";
          $frase = "Estou aprendendo PHP no Curso em Video de PHP";
          // retorna a quantidade de palavras que existem na string que foi passado como parametro
          $c = substr_count($frase, "PHP"); // diferencia maiusculas de minusculas
          echo $frase ."<br>";
          echo "Quantidade da palavra PHP = $c <br>";

          echo "Função <b>substr()</b> <br>";
          $frase = "Linguagem de Programacao";
          echo $frase ."<br>";
          // função retorna a string dentro intervalo especificado.
          $sub = substr($frase, 0, 9);
          echo $sub ."<br>";

          echo "Função <b>str_pad()</b> <br>";
          $nome = "eric";
          //função aumenta o tamanho de um string
          $novo = str_pad($nome, 30, "~>", STR_PAD_RIGHT); // 20 sera a quantidade aumentada, "~>" caracter que irá completar os espaços
          echo $novo ."<br>";

          //variações
          $novo = str_pad($nome, 30, "()", STR_PAD_BOTH);
          echo $novo ."<br>";

          $novo = str_pad($nome, 30, "<~", STR_PAD_LEFT);
          echo $novo ."<br>";

          echo "Função <b>str_repeat()</b> <br>";
          // retorna a string repetida de acordo com a quantidade especificada
          $txt = str_repeat("PHP", 5); // retorna uma string com palavara PHP retpetida 5 vezes
          echo $txt ."<br>";

            echo "Função <b>str_replace()</b> <br>";

            $frase = "Gosto de Estudar Matematica";
            // substitui uma string por outra
            $novaFrase = str_replace("Matematica", "Linguagem de Programacao", $frase);
            // qualquer parte da string que tiver Matematica sera substituida
            // na faz diferenciação de maiusculas e minusculas
            $novaFrase = str_ireplace("matematica", "Linguagem de Programacao", $frase);
            echo $novaFrase ."<br>";

      ?>
  </div>

</body>
</html>
