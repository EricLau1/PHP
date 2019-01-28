<?php

use app\classes\Validation;
use app\classes\Auth;

if(isset($_POST['submit'])){
    if(isEmpty($_POST)) {
        $session->set('message', alert("Verifique os campos!"));
        redirect("login"); 
        return;
     }
     $attributes = (new Validation)->validate(["name" => $_POST['name'], "password" => $_POST['password']]);
     unset($_POST);
     $auth = Auth::signin($attributes);
     if($auth != null) {
        $session->set('auth', $auth['id']);
        redirect("user");
        return;
     }
     $session->set('message', alert("Dados incorretos!"));
     redirect("login"); 
     return;
}

require $view->render("login");