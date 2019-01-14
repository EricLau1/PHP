<?php

namespace app\models\querybuilder;

class Insert {

    public static function sql($table, $attributes) {

        $sql = "insert into {$table} (";

        $sql .= implode(',', array_keys($attributes));
        
        $sql .= ") values (:";
        
        $sql .= implode(',:', array_keys($attributes));

        $sql .= ")";

        return $sql;
    }
    

}