<?php

require_once 'Usuario.php';

class Carteira {

  //Atributos
  private $idUser;
  private $saldo;

  //Construtor
  public function __construct(Usuario $id, float $sa){
    $this->id = $id;
    $this->saldo = $sa;
  }

  //Getters
  public function getIdUser():Usuario{ return $this->id; }
  public function getSaldo():float{ return $this->saldo; }

  //Setters
  private function setIdUser(Usuario $id){ $this->id = $id; }
  public function setSaldo(float $sa){ $this->saldo = $sa; }
}
