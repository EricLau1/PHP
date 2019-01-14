<!doctype html>
<html lang="pt-br">
<head>
   <meta charset="utf-8"/>
   <title>PHP OO - Polimorfismo</title>
</head>
<body>
    <?php
        echo "Polimorfismo: !Sobrecarga | ";
        echo " <u>php não suporta sobrecarga</u> <br>";
        echo "<hr>";

        require_once 'Mamifero.php';
        require_once 'Lobo.php';
        require_once 'Cachorro.php';

        $m = new Mamifero();
        $l = new Lobo();
        $c= new Cachorro();

        $m->emitirSom();
        $l->emitirSom();
        $c->emitirSom();

        $c->reagirFrase("Olá");
        $c->reagirFrase("Vai apanhar!");
        $c->reagirHora(11, 45);
        $c->reagirHora(21, 00);
        $c->reagirDono(true);
        $c->reagirDono(false);
        $c->reagirIdadePeso(2, 12.5);
        $c->reagirIdadePeso(17, 4.5);

    ?>
</body>
</html>
