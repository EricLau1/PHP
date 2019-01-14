<?php

require_once 'Animal.php';

class Peixe extends Animal {

  private $corEscama;

  // Métodos Sobrepostos
  public function locomover(){
    echo "<p>Nadando</p>";
  }

  public function alimentar(){
    echo "<p>Comendo substâncias</p>";
  }

  public function emitirSom(){
    echo "<p>Peixe não faz som</p>";
  }

  //Getter
  public function getCorEscama():string{ return $this->corEscama; }
  //Setter
  public function setCorEscama(string $ce){ $this->corEscama = $ce; }
}
