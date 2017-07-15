<?php

require_once 'Pessoa.php';
require_once 'Publicacao.php';

class Livro implements Publicacao {

  // Atributos
  private $titulo; # string
  private $autor; # string
  private $totPaginas; # int
  private $pagAtual; # int
  private $aberto; # bool
  private $leitor; # Pessoa

  // Metodos
  public function detalhes(){
    echo "<hr>";
    echo "Livro ". $this->getTitulo() ." escrito por ". $this->getAutor();
    echo "<br> Páginas: ". $this->getTotPaginas() ." atual ". $this->getPagAtual();
    echo "<br> Sendo lido por ". $this->getLetor()->getNome();
  }

  public function abrir(){
    $this->setAberto(true);
  }
  public function fechar(){
    $this->setAberto(false);
  }
  public function folhear(int $p){
    if($p > $this->getTotPaginas()){
      $this->setPagAtual(0);
    }
    elseif($this->getAberto()){
      $this->setPagAtual($p);
    }
    else{
      echo "<p>O livro {$this->getTitulo()} esta fechado</p>";
    }
  }
  public function avancarPag(){
    if($this->getPagAtual() < $this->getTotPaginas()){
      $this->setPagAtual($this->getPagAtual() + 1);
    }
    else{
      echo "<p>Fim do Livro</p>";
    }
  }
  public function voltarPag(){
    if($this->getPagAtual() > 0){
      $this->setPagAtual($this->getPagAtual() - 1);
    }
    else{
      echo "<p>Começo do Livro</p>";
    }
  }

  // Métodos Especiais

  //Construtor
  public function __construct(string $ti, string $au, int $tp, Pessoa $pe){
    $this->setTitulo($ti);
    $this->setAutor($au);
    $this->setTotPaginas($tp);
    $this->setLeitor($pe);
    $this->setPagAtual(0);
    $this->setAberto(false);
  }

  //Getters
  public function getTitulo():string{ return $this->titulo; }
  public function getAutor():string{ return $this->autor; }
  public function getTotPaginas():int{ return $this->totPaginas; }
  public function getPagAtual():int{ return $this->pagAtual; }
  public function getAberto():bool{ return $this->aberto; }
  public function getLetor():Pessoa{ return $this->leitor; }

  //Setters
  public function setTitulo(string $ti){ $this->titulo = $ti; }
  public function setAutor(string $au){ $this->autor = $au; }
  public function setTotPaginas(int $tp){ $this->totPaginas = $tp; }
  public function setPagAtual(int $pa){ $this->pagAtual = $pa; }
  public function setAberto(bool $ab){ $this->aberto = $ab; }
  public function setLeitor(Pessoa $pe){ $this->leitor = $pe; }
}
