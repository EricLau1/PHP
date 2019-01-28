<?php

namespace app\classes;

class Sessions {

    public function get($key) {
        if(isset($_SESSION[$key])) {
            return $_SESSION[$key];
        }
        return null;
    }

    public function flash() {
        $message = "";
        if(isset($_SESSION['message'])) {
            $message = $_SESSION['message'];
            unset($_SESSION['message']);
        }
        return $message;
    }

    public function set($key, $value) {
        $_SESSION[$key] = $value;
    }
}