// Classe Caneta
<?php

 class Caneta {
   // atributos
   // var define uma visibilidade padrão = public
   var $modelo;
   var $cor;
   var $ponta;
   var $carga;
   var $tampada;

   // metodos
   function rabiscar(){
     if($this->tampada){
       echo "<p>A caneta está tampada!</p>";
     }
     else{
       echo "<p>Rabiscando...</p>";
     }
   }

   function tampar(){
     echo "<p>tampou</p>";
     $this->tampada = true;
   }

   function destampar(){
     echo "<p>destampou</p>";
     $this->tampada = false;
   }

 }// fim classe
