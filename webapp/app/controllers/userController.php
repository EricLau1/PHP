<?php

use app\classes\Validation;
use app\models\User;
use app\models\Feedback;

$id = $session->get('auth');
if(!$id) {
    $session->set('message', alert('Não autorizado!'));
    redirect('login');
    return;
}
$user = (new User)->getOne(['id', $id]);
$feedback = new Feedback;
$comments = $feedback->getByUser($id);
$route = "";

if (isset($_POST['currentRoute'])) {
    $route = ($_POST['currentRoute'] == "home")? "": "user";
}

if(isset($_POST['submit'])) {
    if(!isEmpty($_POST)) {
        $attributes = (new Validation)->validate(["user" => $id, "comment" => $_POST['comment']]);
        unset($_POST);
        if($feedback->create($attributes)) {
            $comments = $feedback->getByUser($id);
            redirect($route);
            return;
        } else {
            $session->set('message', alert('Ocorreu um erro!')); 
            redirect("user");
            return;
        }
    }
    unset($_POST);
    $session->set('message', alert('Escreva alguma coisa!'));
}

require $view->render("user");