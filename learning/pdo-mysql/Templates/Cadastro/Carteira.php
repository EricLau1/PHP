<?php

require_once 'Usuario.php';

class Carteira {

  //Atributos
  private $user;
  private $saldo;

  //Construtor
  public function __construct(Usuario $u, float $sa){
    $this->user = $u;
    $this->saldo = $sa;
  }

  //Getters
  public function getUser():Usuario{ return $this->user; }
  public function getSaldo():float{ return $this->saldo; }

  //Setters
  private function setUser(Usuario $u){ $this->user = $u; }
  public function setSaldo(float $sa){ $this->saldo = $sa; }
}
