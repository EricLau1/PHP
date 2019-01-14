<!doctype html>
<html lang="pt-br">
<head>
   <meta charset="utf-8"/>
   <title>PHP OO - Polimorfismo</title>
</head>
<body>
    <?php
        echo "Polimorfismo: Sobreposição <br>";

        require_once 'Mamifero.php';
        require_once 'Reptil.php';
        require_once 'Peixe.php';
        require_once 'Ave.php';
        require_once 'Canguru.php';
        require_once 'Cachorro.php';
        require_once 'Cobra.php';
        require_once 'Tartaruga.php';
        require_once 'Goldfish.php';
        require_once 'Arara.php';

        $m = new Mamifero();
        $a = new Ave();
        $r = new Reptil();
        $p = new Peixe();

        $c = new Canguru();
        $k = new Cachorro();
        $t = new Tartaruga();
/*
        $m->setPeso(33.5);

        $m->locomover();
        $a->locomover();
        $r->locomover();
        $p->locomover(); */



        $m->locomover();
        $c->locomover();
        $k->locomover();
        $t->locomover();

        $m->emitirSom();
        $k->emitirSom();
        $c->emitirSom();


    ?>
</body>
</html>
