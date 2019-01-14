<?php

require_once 'Animal.php';

class Mamifero extends Animal {

  private $corPelo;

  //Sobrepondo metodos
  public function locomover(){
    echo "<p>Correndo</p>";
  }

  public function alimentar(){
    echo "<p>Mamando</p>";
  }

  public function emitirSom(){
    echo "<p>Som de Mamífero</p>";
  }

  //Getter
  public function getCorPelo():string{ return $this->corPelo; }
  //Setter 
  public function setCorPelo(string $cp){ $this->corPelo = $cp; }
}
