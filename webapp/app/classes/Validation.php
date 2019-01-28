<?php

namespace app\classes;

class Validation {

    public $isValid = false;

    public function validate($data) {
        try {
            $data = $this->sanitized($data);
            $isValid = true;
        } catch(Exception $e) {
            die($e->getMessage());
        }
        return (object)$data;
    }

    private function sanitized($attributes){
        if(!isArray($attributes)) {
            throw new \Exception("[attributes] não é um Array.");
        }
        foreach($attributes as $key => $value){
            $attributes[$key] = filter_var($value, FILTER_SANITIZE_STRING);
        }
        return $attributes;
    }
}