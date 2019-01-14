<?php

require_once 'Pessoa.php';

class Funcionario extends Pessoa {

  // Atributos
  private $setor;
  private $trabalhando;

  // Métodos
  public function mudarTrampo(){
    $this->trabalhando = !$this->trabalhando;
  }

  # Métodos Especiais

  //Getters
  public function getSetor():string{ return $this->setor; }
  public function getTrabalhando():bool{ return $this->trabalhando; }

  //Setters
  public function setSetor(string $se){ $this->setor = $se; }
  public function setTrabalhando(bool $tr){ $this->trabalhando = $tr; }
}
