// Classe Caneta
<?php

 class Caneta {
   // atributos
   public $modelo;
   public $cor;
   private $ponta;
   protected $carga;
   protected $tampada;

   // metodos
   public function escrever(){
      $this->rabiscar();
   }

   private function rabiscar(){
     if($this->tampada){
       echo "<p>A caneta está tampada!</p>";
     }
     else{
       echo "<p>Rabiscando...</p>";
     }
   }

   public function tampar(){
     echo "<p>tampou</p>";
     $this->tampada = true;
   }

   public function destampar(){
     echo "<p>destampou</p>";
     $this->tampada = false;
   }

 }// fim classe
