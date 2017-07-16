<?php

require_once 'Animal.php';

class Reptil extends Animal {
  private $corEscama;

  // Métodos Sobrepostos
  public function locomover(){
    echo "<p>Rastejando</p>";
  }

  public function alimentar(){
    echo "<p>Comendo vegetais</p>";
  }

  public function emitirSom(){
    echo "<p>Som de Réptil</p>";
  }

  //Getter
  public function getCorEscama():string{ return $this->corEscama; }
  //Setter
  public function setCorEscama(string $ce){ $this->corEscama = $ce; }
}
