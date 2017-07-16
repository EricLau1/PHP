<?php

require_once 'AcoesVideo.php';

class Video implements AcoesVideo {

  // Atributos
  private $titulo;
  private $avaliacao;
  private $views;
  private $curtidas;
  private $reproduzindo;

  // Metodos
  public function play(){
    $this->setCurtidas($this->getCurtidas() + 1);
  }

  public function pause(){
    $this->setReproduzindo(false);
  }

  public function like(){
    $this->setReproduzindo(true);
  }

  // Métodos Especiais

  #Contrutor
  public function __construct(string $ti){
    $this->setTitulo($ti);
    $this->setAvaliacao(1);
    $this->setViews(0);
    $this->setCurtidas(0);
    $this->setReproduzindo(false);
  }

  #Getters
  public function getTitulo():string { return $this->titulo;}
  public function getAvaliacao():int { return $this->avaliacao; }
  public function getViews():int{ return $this->views; }
  public function getCurtidas():int{ return $this->curtidas; }
  public function getReproduzindo():bool{ return $this->reproduzindo; }

  #Setters
  public function setTitulo(string $ti){ $this->titulo = $ti; }
  public function setAvaliacao(int $av){ $this->avaliacao = $av; }
  public function setViews(int $vi){ $this->views = $vi; }
  public function setCurtidas(int $cur){ $this->curtidas = $cur; }
  public function setReproduzindo(bool $re){ $this->reproduzindo = $re; }

}
