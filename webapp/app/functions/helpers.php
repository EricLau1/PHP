<?php

function toJson($data) {
    header('Content-type', 'application/json');
    return json_encode($data);
}

function dd($dump) {
    var_dump($dump);
    die();
}

function redirect($route) {
    header("location: /{$route}");
}

function isArray($data) {
    if(!is_array($data)){
        return false;
    }
    return true;
}

function isEmpty($data) {
    foreach($data as $key => $value) {
        if(empty($value)) {
            return true;
        }
    }
    return false;;
}

function alert($message) {
    return "<p> {$message} </p>";
}
