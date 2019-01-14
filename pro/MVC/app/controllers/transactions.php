<?php

// Arquivo para teste de Transações

use app\models\User;
use app\models\Post;
use app\models\Transaction;
use app\classes\Validation;


$user = new User;
$validation = new Validation;

$validate = $validation->validate($_POST);

$transaction = new Transaction;

$transaction->transactions( function () use ($transaction, $validate) {

    $transaction->model(User::class)->insert($validate);

    $transaction->model(Post::class)->insert([
        'title' => 'teste',
        'user' => 1,
        'description' => 'descrição teste...'
    ]);
});

die();


