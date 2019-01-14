<?php

function flash($key, $mensagem, $tipo = 'danger') { // caso o ultimo parametro não seja passado ele recebe o valor 'danger' como padrão
    session_start();
    if(!isset($_SESSION['flash'][$key])) {
        $_SESSION['flash'][$key] = "<p class='alert alert-$tipo'>". $mensagem . "</p>";
    }

}

function get($key) {

    session_start();
    if(isset($_SESSION['flash'][$key])) {

        $mensagem = $_SESSION['flash'][$key];

        unset($_SESSION['flash'][$key]);

        return $mensagem ?? '';
    }


}