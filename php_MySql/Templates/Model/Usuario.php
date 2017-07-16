<?php

class Usuario {

  // Atributos
  private $id; // int
  private $nome; // string
  private $nascimento; // data
  private $sexo; // string
  private $email; // string
  private $senha; // string

  // Construtor
  public function __construct(int $id, string $no, DateTime $na, string $se, string $em, string $pass){
    $this->id = $id;
    $this->nome = $no;
    $this->nascimento = $na;
    $this->sexo = $se;
    $this->email = $em;
    $this->senha = $pass;
  }

  //Getters
  public function getId():int{ return $this->id; }
  public function getNome():string{ return $this->nome; }
  public function getNascimento():DateTime{ return $this->nascimento; }
  public function getSexo():string{ return $this->sexo; }
  public function getEmail():string{ return $this->email; }
  public function getSenha():string{ return $this->senha; }

  //Setters
  private function setId(int $id){ $this->id = $id; }
  public function setNome(string $no){ $this->nome = $no; }
  public function setNascimento(DateTime $na){ $this->nascimento = $na; }
  public function setSexo(string $se){ $this->sexo = $se; }
  public function setEmail(string $em){ $this->email = $em; }
  public function setSenha(string $pass){ $this->senha = $pass; }

}
