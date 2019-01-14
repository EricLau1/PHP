<!doctype html>
<html lang="pt-br">
<head>
   <meta charset="utf-8"/>
   <title>PHP OO - Visibilidade</title>
</head>
<body>
    <?php
        echo "Visibilidade de Atributos e Métodos <br>";

        require_once 'Caneta.php';

        $c1 = new Caneta;
        $c1->modelo = "BIC Cristal";
        $c1->cor = "Azul";
        //Atributos que não podem ser acessados Diretamente
        //$c1->ponta = 0.5; atributo private
        //$c1->carga = 80; atributo protected
        //$c1->tampada = false; atributo protected
        var_dump($c1);

        //$c1->rabiscar(); metodo private
        $c1->escrever(); // metodo public que chama o metodo rabiscar
        $c1->tampar(); // metodo public que acessa o atributo tampada
    ?>
</body>
</html>
