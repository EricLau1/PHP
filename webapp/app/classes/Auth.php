<?php

namespace app\classes;
use app\models\User;
use app\classes\Password;

class Auth {

    public static function signin($params) {
        $user = (new User)->getOne(['name', $params->name]);
        if(Password::verify($params->password, $user['password'])) {
            return $user;
        }
        return null;
    }
}