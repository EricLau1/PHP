<?php

require_once 'Lobo.php';

class Cachorro extends Lobo {

  // Métodos
  public function enterrarOsso(){
    echo "<p>Enterrando o osso...</p>";
  }

  public function abanarRabo(){
    echo "<p>Abanou o rabo!</p>";
  }

   public function emitirSom(){
     echo "<p>Au! Au! Au!</p>";
   }

   # Finge que é Sobrecarga ;)

   public function reagirFrase(string $frase){
     if($frase == "Toma comida" || $frase == "Olá"){
       echo "<p> Abanar e Latir</p>";
     }
     else{
       echo "<p>Rosnar</p>";
     }
   }

   public function reagirHora(int $hora, int $min){
     if($hora < 12){
       echo "<p>Abanar o rabo</p>";
     }
     elseif($hora >= 18){
       echo "<p>Ignorar</p>";
     }
     else{
       echo "<p>Abanar e Latir</p>";
     }
   }

   public function reagirDono(bool $dono){
     if($dono){
       echo "<p>Abanar</p>";
     }
     else{
       echo "<p> Rosnar e Latir</p>";
     }
   }

   public function reagirIdadePeso(int $idade, float $peso){
     if($idade < 5){
       if($peso < 10){
         echo "<p>Abanar</p>";
       }
       else {
         echo "<p>Latir</p>";
       }
     }
     else{
       if($peso < 10){
         echo "<p>Rosnar</p>";
       }
       else{
         echo "<p>Ignorar</p>";
       }
     }
   }
}// fim Classe
