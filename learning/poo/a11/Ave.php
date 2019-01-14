<?php

require_once 'Animal.php';

class Ave extends Animal {

  private $corPena;

  // Métodos Sobrepostos
  public function locomover(){
    echo "<p>Voando</p>";
  }

  public function alimentar(){
    echo "<p>Comendo frutas</p>";
  }

  public function emitirSom(){
    echo "<p>Piu! Piu!</p>";
  }

  //Getter
  public function getCorPena():string{ return $this->corPena; }
  //Setter
  public function setCorPena(string $cp){ $this->corPena = $cp; }
}
