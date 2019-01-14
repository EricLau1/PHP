<?php

class ContaBanco {

  //Atributos
  public $numConta; # int
  protected $tipo; # string
  private $dono; # string
  private $saldo; # float
  private $status; # bool

  # A partir do PHP 7 é possivel especificar Tipos  em funcões

  //Metodos
  public function abrirConta(string $ti){
    $this->setTipo($ti);
    $this->setStatus(true);
    if($ti == "CC"){
      $this->setSaldo(50);
    }
    elseif ($ti == "CP") {
      $this->setSaldo(150);
    }
  }

  public function fecharConta(){
    if($this->getSaldo() > 0){
      echo "<p>A conta de {$this->getDono()} ainda possui R$ {$this->getSaldo()} </p>";
    }
    elseif ($this->getSaldo() < 0) {
      echo "<p>A conta de {$this->getDono()} esta negativa R$ {$this->getSaldo()} </p>";
    }
    else{
      $this->setStatus(false);
      echo "<p>Conta de {$this->getDono()} fechada com sucesso!</p>";
    }
  }

  public function depositar(float $dep){
    if($this->getStatus()){
      $this->setSaldo($this->getSaldo() + $dep);
      echo "<p>Deposito de R$ $dep efetuado na conta de {$this->getDono()}</p>";
    }
    else{
      echo "<p>Erro! Esta conta foi fechada!</p>";
    }
  }

  public function sacar(float $sa){
    if($this->getStatus()){
      if($this->getSaldo() >= $sa){
        $this->setSaldo($this->getSaldo() - $sa);
        echo "<p>Saque de R$ $sa efetuado na conta de {$this->getDono()} </p>";
      }
      else{
        echo "<p>Saldo insuficiente para saque! </p>";
      }
    }
    else{
      echo "<p>Esta conta foi fechada!</p>";
    }
  }

  public function pagarMensal(){
    if($this->getTipo() == "CC"){
      $v = 12;
    }
    elseif($this->getTipo() == "CP"){
      $v = 20;
    }

    if($this->getStatus()){
      $this->setSaldo($this->getSaldo() - $v);
      echo "<p>Mensalidade de R$ $v debitada na conta de {$this->getDono()}</p>";
    }else{
      echo "<p>Esta conta foi fechada!</p>";
    }

  }

  //Construtor
  public function __construct(){
    $this->setSaldo(0);
    $this->setStatus(false);
    echo "<p>Conta criada com sucesso!</p>";
  }

  //Metodos Especiais

  public function getNumConta():int{
    return $this->numConta;
  }

  public function setNumConta(int $nc){
    $this->numConta = $nc;
  }

  public function getTipo():string{
    return $this->tipo;
  }

  public function setTipo(string $ti){
    $this->tipo = $ti;
  }

  public function getDono():string {
    return $this->dono;
  }

  public function setDono(string $do){
    $this->dono = $do;
  }

  public function getSaldo():float{
    return $this->saldo;
  }

  public function setSaldo(float $sa){
    $this->saldo = $sa;
  }

  public function getStatus():bool{
    return $this->status;
  }

  public function setStatus(bool $st){
    $this->status = $st;
  }

} // fim Classe
