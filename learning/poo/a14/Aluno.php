<?php

require_once 'Pessoa.php';

class Aluno extends Pessoa {

  //Atributos
  private $login;
  private $totAssistido;

  // Métodos
  public function assistirMaisUm(){
    $this->setTotAssistido($this->getTotAssistido() + 1);
  }

  public function ganharExp(){

  }

  // Métodos Especiais

  #Construtor
  public function __construct(string $no, int $id, string $se, string $lo){
    #chamando o construtor da classe Mãe
    parent::__construct($no, $id, $se);
    $this->setLogin($lo);
    $this->setTotAssistido(0);
  }

 #Getters
  public function getLogin():string{ return $this->login; }
  public function getTotAssistido():int{ return $this->totAssistido; }

  #Setters
  public function setLogin(string $lo){ $this->login = $lo; }
  public function setTotAssistido(int $ta){ $this->totAssistido = $ta; }
}
