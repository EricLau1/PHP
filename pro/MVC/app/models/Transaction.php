<?php

namespace app\models;

use Closure;

class Transaction extends Model {

    public function transactions(Closure $callback) {

        $this->connection->beginTransaction();

        try {

            $callback();

            $this->connection->commit();

        } catch (\Exception $e) {

            $this->connection->rollback();

        }

    }
    
    public function model($model) {
        return new $model;
    }

    public function __get($name) {

        // verifica se a propriedade existe dentro do objeto
        if(!property_exists($this, $name)) {
     
            // __NAMESPACE__ retorna o namespace da propria classe
            $model = __NAMESPACE__ .'\\'. ucfirst($name); // ucfirst => upercase na primeira letra da String

            //dd(new $model());

            return new $model();

        }
    }

}