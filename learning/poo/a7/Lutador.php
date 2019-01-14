<?php

class Lutador {
  //Atributos
  private $nome;
  private $nacionalidade;
  private $idade;
  private $altura;
  private $peso;
  private $categoria;
  private $vitorias;
  private $derrotas;
  private $empates;

  //Metodos
  public function apresentar(){
    echo "<p>------------------------------------------------</p>";
    echo "<p>CHEGOU A HORA! O lutador ". $this->getNome();
    echo "<br>veio diretamente de ". $this->getNacionalidade();
    echo " tem ". $this->getIdade() ." anos e pesa ". $this->getPeso() ." Kg";
    echo "<br>Ele tem ". $this->getVitorias() ." vitorias,";
    echo "<br>". $this->getDerrotas() ." derrotas e ". $this->getEmpates() ." empates.</p>";
  }

  public function status(){
    echo "<p>------------------------------------------------</p>";
    echo "<p>". $this->getNome() ." é um peso ". $this->getCategoria();
    echo " e já ganhou ". $this->getVitorias() ." vezes,";
    echo " perdeu ". $this->getDerrotas() ." vezes e ";
    echo " empatou ". $this->getEmpates() ." vezes </p>";
  }

  public function ganharLuta(){
    $this->setVitorias($this->getVitorias() + 1);
  }

  public function perderLuta(){
    $this->setDerrotas($this->getDerrotas() + 1);
  }

  public function empatarLuta(){
    $this->setEmpates($this->getEmpates() + 1);
  }

  // Construtor
  public function __construct(string $no, string $na, int $id, float $al, float $pe, int $vi, int $de, int $em){
    $this->nome = $no;
    $this->nacionalidade = $na;
    $this->idade = $id;
    $this->altura = $al;
    $this->setPeso($pe);
    $this->vitorias = $vi;
    $this->derrotas = $de;
    $this->empates = $em;
  }

  //Metodos Especiais

  //Getters
  public function getNome():string{ return $this->nome; }
  public function getNacionalidade():string{ return $this->nacionalidade; }
  public function getIdade():int{ return $this->idade; }
  public function getAltura():float{ return $this->altura; }
  public function getPeso():float{ return $this->peso; }
  public function getCategoria():string{ return $this->categoria; }
  public function getVitorias():int{ return $this->vitorias; }
  public function getDerrotas():int{ return $this->derrotas; }
  public function getEmpates():int{ return $this->empates; }

  //Setters
  public function setNome(string $no){ $this->nome = $no; }
  public function setNacionalidade(string $na){ $this->nacionalidade = $na; }
  public function setIdade(int $id){ $this->idade = $id; }
  public function setAltura(float $al){ $this->altura = $al; }

  public function setPeso(float $pe){
    $this->peso = $pe;
    $this->setCategoria();
  }

  private function setCategoria(){
    if($this->peso < 52.2){
      $this->categoria = "Inválido";
    }
    elseif($this->peso <= 70.3){
      $this->categoria = "Leve";
    }
    elseif($this->peso <= 83.9){
      $this->categoria = "Médio";
    }
    elseif($this->peso <= 120.2){
      $this->categoria = "Pesado";
    }
    else{
      $this->categoria = "Inválido";
    }
  }

  public function setVitorias(int $vi){ $this->vitorias = $vi; }
  public function setDerrotas(int $de){ $this->derrotas = $de; }
  public function setEmpates(int $em){ $this->empates = $em; }

}
