<?php

use app\classes\Validation;
use app\models\User;
if(isset($_POST['submit'])) {
    if(isEmpty($_POST)) {
       $session->set('message', alert("Verifique os campos!"));
       redirect("cadastro"); 
       return;
    }
    $attributes = (new Validation)->validate(["name" => $_POST['name'], "password" => $_POST['password']]);
    $attributes->password = app\classes\Password::hash($attributes->password); 
    unset($_POST);
    $user = new User;
    if($user->create($attributes)){
        $session->set('message', alert("Conta criada com sucesso!"));
        redirect("cadastro"); 
        return;   
    }
    dd($user);
    return;
}

require $view->render("cadastro");