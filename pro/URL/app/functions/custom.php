<?php

function dd($dump) {
    echo "<pre>";
    var_dump($dump);
    echo "</pre>";
    die();
}


function request() {

    $request = $_SERVER['REQUEST_METHOD']; // retorna o método que foi feita a requisição: POST ou  GET

    if($request == "POST") {
        return $_POST;
    }
    return $_GET;
}


function toJson($data) {

    header('Content-Type: application/json');

    echo json_encode($data, JSON_PRETTY_PRINT);

}

function redirect($pagina) {
    return header("location:/?page={$pagina}");
}

function redirectToHome() {
    return header("location:/");
}