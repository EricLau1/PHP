<?php

use app\models\Feedback;

$feedbacks = (new Feedback)->getAllComments();

require $view->render("home");