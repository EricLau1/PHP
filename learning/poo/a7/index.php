<!doctype html>
<html lang="pt-br">
<head>
   <meta charset="utf-8"/>
   <title>PHP OO - Agregação entre Objetos</title>
</head>
<body>
    <?php
       echo "Agregação entre Objetos <br>";

       require_once 'Luta.php';

       $l = array();

       $l[0] = new Lutador("Ryu", "Japão", 31, 1.75, 68.9, 11, 2, 1);

       $l[1] = new Lutador("Ken", "China", 29, 1.68, 57.8, 14, 2, 3);

       $l[2] = new Lutador("Guile", "EUA", 35, 1.65, 80.9, 12, 2, 1);

       $l[3] = new Lutador("Akuma", "Austrália", 28, 1.93, 81.6, 13, 0, 2);

       $l[4] = new Lutador("Blanka", "Brasil", 37, 1.70, 119.3, 5, 4, 3);

       $l[5] = new Lutador("M. Bison", "EUA", 30, 1.81, 105.7, 12, 2, 4);

        $SFC1 = new Luta;

        echo "<pre>";

        $SFC1->marcarLuta($l[0], $l[1]);
        $SFC1->lutar();

        $l[0]->status();
        $l[1]->status();

        echo "</pre>";

        echo "<br><b>Testes</b> <br>";
        $SFC1->marcarLuta($l[1], $l[1]);
        $SFC1->marcarLuta($l[1], $l[5]);
        $SFC1->marcarLuta($l[4], $l[5]);

        echo "<pre>";
        $SFC1->lutar();

        $l[4]->status();
        $l[5]->status();
        echo "</pre>";

    ?>
</body>
</html>
