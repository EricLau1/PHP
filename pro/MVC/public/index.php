<?php


require "../bootstrap.php";

use app\classes\Uri;
use app\classes\Routes;

use app\classes\Layout;

$routes = [

	'/' => 'controllers/index',
	'/user_create' => 'controllers/user_create',
	'/user_store' => 'controllers/user_store',
	'/user_edit' => 'controllers/user_edit',
	'/user_update' => 'controllers/user_update',
	'/user_transaction' => 'controllers/user_transaction', // rota para  testar transações
	'/transactions' => 'controllers/transactions' // rota para teste de Transações

];

$uri = Uri::load();

$layout = new Layout;

try { 

	require Routes::load($routes, $uri);

} catch(Exception $e) {

	die("Erro: ". $e->getMessage());

}



require $layout->master("layout"); // carrega o template principal

