<?php

namespace app\classes;

class View {

    public function render($page) {
        $view = "../app/views/{$page}.php";
        if(!file_exists($view)) {
            throw new \Exception("{$page} not found.");
        }
        return $view;
    }
}