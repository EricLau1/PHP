<?php
    function getOla(){
       echo "<h2>Olá, seja bem vindo! </h2>";
    }

    function fatorial($n){
      if($n < 2){
        return 1;
      }
      else{
        return $n * fatorial($n - 1);
      }
    }

    function fibo($x){
      if($x < 2){
        return 1;
      }
      else{
        return fibo($x - 1) + fibo($x - 2);
      }
    }
 ?>
