<!doctype html>
<html lang="pt-br">
<head>
   <meta charset="utf-8"/>
   <title>Formulario - While</title>
   <link rel="stylesheet" type="text/css" href="_css/form.css"/>
   <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
</head>
<body>
  <h1>Programando em PHP - Formulário</h1>
   <div class="form animated rubberBand">
    <form method="get" action="index.php">
      <?php
      $c = 1;
      // escreva os valores do input com aspas simples para nao dar conflito com as aspas duplas da string em PHP
         while($c <= 5){
            echo "Valor $c: <input type='number' name='v$c' max='100' min='0' value='0'> <br>";
            $c++;
         }
      ?>
      <br/>
      <input type="submit" value="Enviar">
    </form>
   </div>

</body>
</html>
