<?php

namespace app\classes;
use PDO;
class Database {

    public static function connect() {
        $config = require "../config.php";
        //dd($config);

        $pdo = new \PDO("{$config['db']['driver']}:host={$config['db']['host']};dbname={$config['db']['dbname']};charset=utf8",
                        $config['db']['user'], $config['db']['pass']);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
}