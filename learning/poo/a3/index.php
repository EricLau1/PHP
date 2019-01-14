<!doctype html>
<html lang="pt-br">
<head>
   <meta charset="utf-8"/>
   <title>PHP OO - Metodos de Acesso</title>
</head>
<body>
    <?php
        echo "Metodos: Getters, Setters e Construtor <br> <br>";
        require_once 'Caneta.php';
        $c1 = new Caneta();
        $c1->setModelo("BIC");
        $c1->setPonta(0.5);
        var_dump($c1);

        echo "<br>Usando metodos Getters <br>";
        echo "Modelo da caneta: {$c1->getModelo()} <br>";
        printf("Tipo da ponta: %.1f <br>", $c1->getPonta());

        echo "<br> Instanciando um Novo Objeto <br>";
        $c2 = new Caneta();
        $c2->Caneta("Faber Castell", 0.8, "Preta", false);
        var_dump($c2);
    ?>
</body>
</html>
