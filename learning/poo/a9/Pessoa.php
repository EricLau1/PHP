<?php

class Pessoa {

  //Atributos
  private $nome;
  private $idade;
  private $sexo;

  // Método
  public function fazerAniver(){
    $this->setIdade($this->getIdade() + 1);
  }

  // Métodos Especiais

  // Construtor Padrão
  public function __construct(){
    $this->nome = "";
    $this->idade = 0;
    $this->sexo = "";
  }

  // Construtor Parametrizado
/*  public function __construct(string $no, int $id, string $se) {
    $id = abs($id);
    $this->setNome($no);
    $this->setIdade($id);
    $this->setSexo($se);
  } */

  // Getters
  public function getNome():string{ return $this->nome; }
  public function getIdade():int{ return $this->idade; }
  public function getSexo():string{ return $this->sexo; }

  //Setters
  public function setNome(string $no){ $this->nome = $no; }
  public function setIdade(int $id){ $this->idade = $id; }
  public function setSexo(string $se){ $this->sexo = $se; }
}
