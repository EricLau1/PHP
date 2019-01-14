<!doctype html>
<html lang="pt-br">
<head>
   <meta charset="utf-8"/>
   <title>PHP OO - Classes e Objetos</title>
</head>
<body>
    <?php
        echo "Classes e Objetos <br>";

        require_once 'Caneta.php'; // importando a Classe Caneta

        //instanciando Objeto
        $c1 = new Caneta;
        // modificando atributos diretamente
        $c1->cor = "Azul";
        $c1->ponta = 0.5;
        $c1->tampada = true;

        // mostrando objeto
        var_dump($c1);

        // chamando um metodo
        $c1->destampar();
        $c1->rabiscar();
        $c1->tampar();

        echo "<br>";
        echo "Novo Objeto da Mesma Classe <br>";

        $c2 = new Caneta;
        $c2->cor = "Verde";
        $c2->carga = 50;
        $c2->tampar();

        var_dump($c2);
        $c1->rabiscar();


    ?>
</body>
</html>
