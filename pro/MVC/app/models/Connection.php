<?php

namespace app\models;

use PDO;

class Connection {

	public static function connect() {

		$config = require "../config.php"; // retorna apnas uma pasta pois


		$pdo = new PDO("mysql:host={$config['db']['host']};dbname={$config['db']['dbname']};charset={$config['db']['charset']}", 
			$config['db']['username'], $config['db']['password']);

		// os erros serão exibidos caso ocorram 
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		// padrão que retorna os dados como um objeto
		$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

		return $pdo;
	}

}