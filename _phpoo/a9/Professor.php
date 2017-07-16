<?php

require_once 'Pessoa.php';

class Professor extends Pessoa {

  // Atributos
  private $especialidade;
  private $salario;

  // Métodos
  public function receberAum(float $aum){
    $this->setSalario($this->getSalario() + $aum);
  }

  # Métodos Especiais

  //Getters
  public function getEspecialidade():string{ return $this->especialidade; }
  public function getSalario():float{ return $this->salario; }

  //Setters
  public function setEspecialidade(string $es){ $this->especialidade = $es; }
  public function setSalario(float $sa){ $this->salario = $sa; }
}
