<?php

require_once 'Aluno.php';

class Bolsista extends Aluno {

  //Atributo
  private $bolsa;

  public function renovarBolsa(){
    echo "<p>Bolsa renovada!</p>";
  }

  // Sobrepondo Metodo herdado da Classe Aluno
  public function pagarMensalidade(){
    echo "<p>{$this->getNome()} é bolsista. Então paga com desconto!</p>";
  }

  //Getter
  public function getBolsa():int{ return $this->bolsa; }

  //Setter
  public function setBolsa(int $bo){ $this->bolsa = $bo; }
}
