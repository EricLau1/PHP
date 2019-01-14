<?php

require_once 'Lutador.php';

class Luta {
  //Atributos
  private $desafiado;
  private $desafiante;
  private $rounds;
  private $aprovada;

  //Metodos
  public function marcarLuta(Lutador $l1, Lutador $l2){
    if($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)){
      $this->setAprovada(true);
      $this->setDesafiado($l1);
      $this->setDesafiante($l2);
    }
    else{
      $this->setAprovada(false);
      $this->desafiado = null;
      $this->desafiante = null;
      //$this->setDesafiado(null);
      //$this->setDesafiante(null);
      echo "<p>A luta não pode acontecer!</p>";
    }
  }

  public function lutar(){
    if($this->getAprovada()){
      $this->getDesafiado()->apresentar();
      $this->getDesafiante()->apresentar();
      $vencedor = rand(0, 2); // sorteia uma numero de 0 a 2
      switch($vencedor){
        case 0: // Empate
             echo "<p>Empate!</p>";
             $this->getDesafiado()->empatarLuta();
             $this->getDesafiante()->empatarLuta();
             break;
        case 1: // Desafiado Vence
             echo "<p>{$this->getDesafiado()->getNome()} Venceu!</p>";
             $this->getDesafiado()->ganharLuta();
             $this->getDesafiante()->perderLuta();
             break;
        case 2: // Desafiante Vence
             echo "<p>{$this->getDesafiante()->getNome()} Venceu!</p>";
             $this->getDesafiante()->ganharLuta();
             $this->getDesafiado()->perderLuta();
      }
    }
  }

  // Metodos Especiais

  //Getters
  public function getDesafiado():Lutador{ return $this->desafiado; }
  public function getDesafiante():Lutador{ return $this->desafiante; }
  public function getRounds():int{ return $this->rounds; }
  public function getAprovada():bool{ return $this->aprovada; }

  //Setters
  public function setDesafiado(Lutador $lu){ $this->desafiado = $lu; }
  public function setDesafiante(Lutador $lu){ $this->desafiante = $lu; }
  public function setRounds(int $ro){ $this->rounds = $ro; }
  public function setAprovada(bool $ap) { $this->aprovada = $ap; }
}
