<?php

use app\models\User;

$user = new User;

$users = $user->findAll();

$layout->add("index");


