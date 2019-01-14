<?php

class Caneta {
  //Atributos
  private $modelo;
  private $ponta;
  private $cor;
  private $tampada;

  //Construtor padrão
  public function __construct(){ // é possivel Modificar a palavra __construct para o nome da Classe
    $this->modelo = "";
    $this->ponta = 0;
    $this->cor = "Azul";
    $this->tampar();
  }

  # Modificações a partir do PHP 7 especifica TIPOS de variaveis

  // PHP nao é possivel fazer dois construtores
  // significa que o metodo __construtc sempre sera chamado
  // criei o metodo abaixo apenas para poder modificar todos os atributos de uma vez
  public function Caneta(string $mo, float $po, string $co, bool $ta){
    $this->modelo = $mo;
    $this->ponta = $po;
    $this->cor = $co;
    $this->tampada = $ta;
  }

  public function getModelo():string{
    return $this->modelo;
  }

  public function setModelo(string $mo){
    $this->modelo = $mo;
  }

  public function getPonta():float{
    return $this->ponta;
  }

  public function setPonta(float $po){
    $this->ponta = $po;
  }

  public function tampar(){
    $this->tampada = true;
  }

} // fim Classe
