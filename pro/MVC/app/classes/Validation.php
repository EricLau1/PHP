<?php

namespace app\classes;

class Validation {

    private $validate = array();


    public function validate(array $request) {

        foreach($request as $key => $value) {

            $this->validate[$key] = filter_var($value, FILTER_SANITIZE_STRING);

        }

        return (object)$this->validate;

    } 

}