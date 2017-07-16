<!doctype html>
<html lang="pt-br">
<head>
   <meta charset="utf-8"/>
   <title>PHP OO - Herança</title>
</head>
<body>
    <?php
        echo "Herança Parte 2 <br>";

        require_once 'Pessoa.php';
        require_once 'Visitante.php';
        require_once 'Aluno.php';
        require_once 'Bolsista.php';

        // $p1 = new Pessoa(); # Pessoa é uma classe Abstrata e nao pode ser Instanciada

      /*  $v1 = new Visitante();
        $v1->setNome("Lana");
        $v1->setIdade(33);
        $v1->setSexo("F");
        var_dump($v1); */

        $a1 = new Aluno();
        $a1->setNome("Jake");
        $a1->setMatr(1111);
        $a1->setIdade(16);
        $a1->setSexo("M");
        $a1->setCurso("Informática");
        $a1->pagarMensalidade();

        var_dump($a1);

        $b1 = new Bolsista();
        $b1->setMatr(1112);
        $b1->setNome("Monica");
        $b1->setBolsa(12.5);
        $b1->setCurso("Administração");
        $b1->setIdade(17);
        $b1->pagarMensalidade();

        var_dump($b1);




    ?>
</body>
</html>
