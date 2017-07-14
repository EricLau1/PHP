<!doctype html>
<html lang="pt-br">
<head>
   <meta charset="utf-8"/>
   <title>PHP OO - Conta de Banco</title>
</head>
<body>
  <pre>
    <?php
        echo "Exemplo Prático: Conta de Banco <br>";

        require_once 'ContaBanco.php';

        $p1 = new ContaBanco();
        $p2 = new ContaBanco();

        $p1->abrirConta("CC");
        $p1->setDono("James");
        $p1->setNumConta(111);

        $p2->abrirConta("CP");
        $p2->setDono("Jesse");
        $p2->setNumConta(222);

        $p1->depositar(300);
        $p2->depositar(500);

        $p2->sacar(1000);

        $p1->pagarMensal();
        $p2->pagarMensal();

        $p1->sacar(338);
        $p2->sacar(630);

        $p1->fecharConta();
        $p2->fecharConta();

        print_r($p1);
        print_r($p2);

    ?>
  </pre>
</body>
</html>
