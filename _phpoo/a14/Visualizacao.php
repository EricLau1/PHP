<?php

require_once 'Video.php';
require_once 'Aluno.php';

class Visualizacao {

  // Atributos
  private $espectador;
  private $filme;

  // Métodos
  public function avaliar(){
    $this->getFilme()->setAvaliacao(5);
  }

  public function avaliarNota(int $nota){
    $this->getFilme()->setAvaliacao($nota);
  }

  public function avaliarPorc(int $porc){
    $x = 0;
    if($porc <= 20){
      $x = 3;
    }
    elseif($porc <= 50){
      $x = 5;
    }
    elseif ($porc <= 90) {
      $x = 8;
    }
    else{
      $x = 10;
    }
    $this->getFilme()->setAvaliacao($x);
  }

  // Métodos Especiais

  #Construtor
  public function __construct(Aluno $esp, Video $fi){
    $this->setEspectador($esp);
    $this->setFilme($fi);
    $this->getFilme()->setViews($this->getFilme()->getViews() + 1);
    $this->espectador->setTotAssistido($this->espectador->getTotAssistido() + 1);
  }

  //Getters
  public function getEspectador():Aluno{ return $this->espectador; }
  public function getFilme():Video{ return $this->filme; }

  //Setters
  public function setEspectador(Aluno $al){ $this->espectador = $al; }
  public function setFilme(Video $vi){ $this->filme = $vi; }
}
