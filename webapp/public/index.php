<?php

require "../bootstrap.php";

use app\classes\Uri;
use app\classes\Router;
use app\models\User;

$routes = [
    "/"         => "controllers/homeController",
    "/cadastro" => "controllers/registerController",
    "/login"    => "controllers/loginController",
    "/user"     => "controllers/userController",
    "/logout"   => "controllers/logout"
];

$view = new app\classes\View;
$session = new app\classes\Sessions;

try {
    require Router::load(Uri::load(), $routes);
} catch (Exception $e) {
    die($e->getMessage());
}
