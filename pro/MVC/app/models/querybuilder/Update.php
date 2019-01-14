<?php

namespace app\models\querybuilder;

class Update {

    private $where;

    public function where(array $where) {

        $this->where = $where;

        return $this; // retorna o próprio objeto

    }

    public function sql($table, array $attributes) {

        unset($attributes[array_keys($this->where)[0]]); // removendo o atributo id do array de dados

        $sql = "update {$table} set ";

        $data = array_map( function($attr) { return "{$attr} = :{$attr}"; }, array_keys($attributes));

        $sql .= implode(',', $data);

        $where = array_keys($this->where);

        $sql .= " where {$where[0]} = :{$where[0]}";

        return $sql;
    }

}