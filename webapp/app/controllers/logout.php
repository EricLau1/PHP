<?php

$auth = $session->get('auth');
if ($auth != null) {
    unset($_SESSION['auth']);
}
redirect("");