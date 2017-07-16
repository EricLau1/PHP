<?php

require_once 'Pessoa.php';

class Aluno extends Pessoa {

  // Atributos
  private $matr;
  private $curso;

  // Métodos
  public function cancelarMatr(){
    echo "<p>Matrícula cancelada!</p>";
  }

  public function pagarMensalidade(){
    echo "<p>Pagou a mensalidade do aluno {$this->getNome()}</p>";
  }

  # Métodos Especiais

  //Getters
  public function getMatr():int{ return $this->matr; }
  public function getCurso():string{ return $this->curso; }

  //Setters
  public function setMatr(int $ma){ $this->matr = $ma; }
  public function setCurso(string $cur){ $this->curso = $cur; }
}
