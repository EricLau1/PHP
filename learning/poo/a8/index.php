<!doctype html>
<html lang="pt-br">
<head>
   <meta charset="utf-8"/>
   <title>PHP OO - Exercício Prático</title>
</head>
<body>
    <?php
       echo "<b>PHP Orientado a Objetos</b> <br>";
       echo "<br> Exercício Prático <br>";

       require_once 'Pessoa.php';

       $p1 = new Pessoa("Joel", 35, "M");
       $p2 = new Pessoa("Lara", 28, "F");

       #var_dump($p1);
       #var_dump($p2);

       require_once "Livro.php";

       $l[0] = new Livro("Harry Potter", "JK Rowlling", 500, $p1);
       $l[1] = new Livro("Ilha do Tesouro", "Robert Louis", 289, $p2);
       //var_dump($l[0]);
       //var_dump($l[1]);

       //$l[0]->abrir();
       $l[0]->folhear(80);
       $l[0]->avancarPag();

       $l[1]->abrir();
       $l[1]->folhear(100);
       $l[1]->voltarPag();

       $l[0]->detalhes();

       $l[1]->detalhes();




    ?>
</body>
</html>
