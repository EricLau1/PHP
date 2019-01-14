<?php


use app\models\User;
use app\classes\Validation;

$user = new User;
$validation = new Validation;

$dados = $validation->validate($_POST);

if($user->insert($dados)) {
    
    header('location:/');

} else {
    die('erro ao cadastrar.');
}