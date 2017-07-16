<?php

require_once 'Usuario.php';
require_once 'Produto.php';

class Compra {

  // Atributos
  private $usuario;
  private $produto;
  private $dataCompra;

  //Construtor
  public function __construct(Usuario $u, Produto $p, DateTime $dc){
    $this->usuario = $u;
    $this->produto = $p;
    $this->dataCompra = $dc;
  }

  //Getters
  public function getUsuario():Usuario{ return $this->usuario; }
  public function getProduto():Produto{ return $this->produto; }
  public function getDataCompra():DateTime{ return $this->dataCompra; }

  //Setters
  private function setIdUser(Usuario $u){ $this->usuario = $u; }
  private function setIdProduto(Produto $p){ $this->produto = $p; }
  private function setDataCompra(DateTime $dc){ $this->dataCompra = $dc; }
}
