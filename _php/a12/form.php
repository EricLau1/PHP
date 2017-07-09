<!doctype html>
<html lang="pt-br">
<head>
   <meta charset="utf-8"/>
   <title>Formulario</title>
   <link rel="stylesheet" type="text/css" href="_css/form.css"/>
   <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
</head>
<body>
  <h1>Programando em PHP - Formulário</h1>
   <div class="form animated rubberBand">
    <form method="get" action="index.php">
      Numero: <select name="n">
            <?php
                for($i = 0; $i <= 10; $i++) {
                  echo "<option value='$i'>$i</option>";
                }
             ?>
      </select>
      <input type="submit" value="Tabuada">
    </form>
   </div>

</body>
</html>
