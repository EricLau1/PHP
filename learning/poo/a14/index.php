<!doctype html>
<html lang="pt-br">
<head>
   <meta charset="utf-8"/>
   <title>PHP OO - Projeto Final</title>
</head>
<body>
    <?php
        echo "Projeto Final - Parte 2";
        echo "<hr>";

        require_once 'Video.php';
        require_once 'Aluno.php';
        require_once 'Visualizacao.php';

        $v = array();
        $v[0] = new Video("Aula 1 de POO");
        $v[1] = new Video("Aula 12 de PHP");
        $v[2] = new Video("Aula 15 de HTML5");

      /*  echo "Videos <br>";
        var_dump($v[0]);
        var_dump($v[1]);
        var_dump($v[2]);

        echo "<hr>";

        echo "Alunos <br>"; */
        $a = array();
        $a[0] = new Aluno("Jujuba", 17, "F", "JuJu");
        $a[1] = new Aluno("Jake", 20, "M", "Totó");

      /*  var_dump($a[0]);
        var_dump($a[1]);
        echo "<hr>"; */

        $vis[0] = new Visualizacao($a[0], $v[2]); //Juju assiste o curso de HTML5
        $vis[1] = new Visualizacao($a[0], $v[1]); //JuJu assiste o curso de PHP

         $vis[0]->avaliar();
         $vis[1]->avaliarPorc(85);

        echo "<pre style='font-size: 14pt;'>";
        print_r($vis[0]);
        print_r($vis[1]);
        echo "</pre>";

    ?>
</body>
</html>
