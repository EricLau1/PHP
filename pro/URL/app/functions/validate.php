<?php


function validate(array $fields) {

    $request = request(); // retorna qual a requisição foi feita POST ou GET

    $validate = array();

    // laço para verificar o tipo dos valores dentro do vetor
    foreach($fields as $field => $type ) {

        switch($type) {

            case 's' : {

                $validate[$field] = filter_var($request[$field], FILTER_SANITIZE_STRING);
                break;

            }
            case 'i' : {

                $validate[$field] = filter_var($request[$field], FILTER_SANITIZE_NUMBER_INT);
                break;

            }
            case 'e' : {

                $validate[$field] = filter_var($request[$field], FILTER_SANITIZE_EMAIL);
                break;

            }

        } // end switch

    } // end foreach
    
    return (object) $validate; // transforma o array em objeto
} // end function

function isEmpty() {

    $request = request();

    $empty = false;

    foreach($request as $key => $value) {

        if(empty($request[$key])) {
            $empty = true;
            break;
        }
    
    }
    return $empty;
}