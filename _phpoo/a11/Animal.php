<?php

abstract class Animal {

  // Atributos
  protected $peso;
  protected $idade;
  protected $membros;

  // Métodos
  #metodos abstratos so podem ser criado em classes abstratas
  public abstract function locomover();
  public abstract function alimentar();
  public abstract function emitirSom();

  // Métodos Especiais

  //Getters
  public function getPeso():float{ return $this->peso; }
  public function getIdade():int{ return $this->idade; }
  public function getMembros():int{ return $this->membros; }

  //Setters
  public function setPeso(float $pe){ $this->peso = $pe; }
  public function setIdade(int $id){ $this->idade= $id; }
  public function setMembros(int $me){ $this->membros = $me; }

}
