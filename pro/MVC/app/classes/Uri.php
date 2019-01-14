<?php

namespace app\classes;

class Uri {

	public static function load() {

		// REQUEST_URI retorna a url
		// PHP_URL_PATH retorna apenas a descrição após a barra sem parametros a mais
		return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

	}

}