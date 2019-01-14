<?php

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

use app\models\User;

$user = new User;

$userEncontrado = $user->find('id', $id);

$layout->add('user_edit');
