<?php

namespace app\models;
use app\classes\Database;

abstract class Model {
    protected $connection = null;

    public function __construct() {
        $this->connection = Database::connect();
    }

    public function getAll() {
        $sql = "select * from {$this->table}";
        $rs = $this->connection->query($sql);
        return $rs->fetchAll();
    }

    public function create($attributes) {
        $attributes = (array) $attributes;
        $sql = "insert into {$this->table} ";
        $sql .= "(". implode(",", array_keys($attributes)) . ")";
        $sql .= " values ";
        $sql .= "(:". implode(",:", array_keys($attributes)) . ")";
        $created = $this->connection->prepare($sql);
        return $created->execute($attributes);
    }

    public function getOne($params) {
        $sql = "select * from {$this->table} where {$params[0]} = :{$params[0]}"; 
        $rs = $this->connection->prepare($sql);
        $rs->bindValue(":{$params[0]}", $params[1]);
        $rs->execute();
        return $rs->fetch();
    }
}