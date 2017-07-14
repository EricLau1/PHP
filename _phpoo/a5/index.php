<!doctype html>
<html lang="pt-br">
<head>
   <meta charset="utf-8"/>
   <title>PHP OO - Encapsulamento</title>
</head>
<body>

    <?php
        echo "Encapsulamento <br>";

        require_once 'ControleRemoto.php';

        $c1 = new ControleRemoto();


        $c1->ligar();
        $c1->maisVolume();
        $c1->menosVolume();
        $c1->menosVolume();


        echo "<pre>";
        $c1->abrirMenu();
        echo "</pre>";
    ?>

</body>
</html>
