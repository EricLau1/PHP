<?php

require_once 'Mamifero.php';

class Cachorro extends Mamifero {

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

}
