<?php

abstract class Pessoa {

  // Atributos
  protected $nome;
  protected $idade;
  protected $sexo;
  protected $experiencia;

  // Método
  public abstract function ganharExp();

  // Métodos Especiais

  # Construtor
  public function __construct(string $no, int $id, string $se){
    $this->setNome($no);
    $this->setIdade($id);
    $this->setSexo($se);
  }

  #Getters
  protected function getNome():string{ return $this->nome; }
  protected function getIdade():int{ return $this->idade; }
  protected function getSexo():string{ return $this->sexo; }
  protected function getExperiencia():int{ return $this->experiencia; }

  #Setters
  protected function setNome(string $no){ $this->nome = $no; }
  protected function setIdade(int $id){ $this->idade = $id; }
  protected function setSexo(string $se){ $this->sexo = $se; }
  protected function setExperiencia(int $ex){ $this->experiencia = $ex; }
}
