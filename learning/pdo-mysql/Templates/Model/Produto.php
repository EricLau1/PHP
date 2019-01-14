<?php

class Produto {

  //Atributos
  private $id;
  private $nome;
  private $valor;
  private $qtde;

  //Construtor
  public function __construct(int $id, string $no, float $va, int $qt){
    $this->id = $id;
    $this->nome = $no;
    $this->valor = $va;
    $this->qtde = $qt;
  }

  //Getters
  public function getId():int{ return $this->id; }
  public function getNome():string{ return $this->nome; }
  public function getValor():float{ return $this->valor; }
  public function getQtde():int{ return $this->qtde; }

  //Setters
  private function setId(int $id){ $this->id = $id; }
  public function setNome(string $no){ $this->nome = $no; }
  public function setValor(float $va){ $this->valor = $va; }
  public function setQtde(int $qt){ $this->qtde = $qt; }
}
