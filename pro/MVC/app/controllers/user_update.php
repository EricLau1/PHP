<?php

use app\models\User;
use app\classes\Validation;


$validate = (new Validation)->validate($_POST);

$user = new User;

$updated = $user->update($validate, [ "id" => $validate->id ] );

header('location:/');