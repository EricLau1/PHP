<?php

require "vendor/autoload.php";

require "app/functions/helpers.php";

// instanciando uma conexão unica para o banco de dados e guardando em um container
app\classes\Bind::bind('connection', app\models\Connection::connect());