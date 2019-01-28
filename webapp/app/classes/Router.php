<?php

namespace app\classes;

class Router {

    public static function load($uri, $routes) {
        if(!array_key_exists($uri, $routes)) {
            throw new \Exception("Route not found => $uri");
        }
        return "../app/{$routes[$uri]}.php";
    }
}