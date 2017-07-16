<!doctype html>
<html lang="pt-br">
<head>
   <meta charset="utf-8"/>
   <title>PHP OO - Herança</title>
</head>
<body>
    <?php
        echo "Herança Parte 1<br>";

        require_once 'Pessoa.php';
        require_once 'Aluno.php';
        require_once 'Professor.php';
        require_once 'Funcionario.php';

        $p1 = new Pessoa();
        $p2 = new Aluno();
        $p3 = new Professor();
        $p4 = new Funcionario();

        $p1->setNome("Jhon");
        $p2->setNome("River");
        $p3->setNome("Finn");
        $p4->setNome("Jake");

        $p2->setCurso("Informática");
        $p3->setSalario(2500.75);
        $p4->setSetor("Estoque");

        $p1->setSexo("M");
        $p2->setSexo("F");

        $p3->receberAum(550.20);
        $p4->mudarTrampo();
        $p2->cancelarMatr();


        echo "<pre>";
        var_dump($p1);
        var_dump($p2);
        var_dump($p3);
        var_dump($p4);
        echo "</pre>"



    ?>
</body>
</html>
