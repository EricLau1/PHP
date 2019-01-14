<?php

require_once 'Controlador.php';

class ControleRemoto implements Controlador {
   // Atributos
   private $volume;
   private $ligado;
   private $tocando;

   // Implementando Metodos da Interface

   public function ligar(){
     $this->setLigado(true);
   }

   public function desligar(){
     $this->setLigado(false);
   }

   public function abrirMenu(){
     echo "------MENU------ <br>";
     echo "<br>Está ligado?: ". ($this->getLigado()? "SIM":"NÃO");
     echo "<br>Está tocando?: ". ($this->getTocando()? "SIM":"NÃO");
     echo "<br>Volume: ". $this->getVolume() . " ";
     for($i = 0; $i <= $this->getVolume(); $i += 10){
       echo "|";
     }
     echo "<br>";
   }

   public function fecharMenu(){
     echo "<p>Fechando menu...</p>";
   }

   public function maisVolume(){
     if($this->getLigado()){
       $this->setVolume($this->getVolume() + 10);
     }
     else{
       echo "<p>Erro! Volume não pode ser aumentado.</p>";
     }
   }

   public function menosVolume(){
     if($this->getLigado()){
       $this->setVolume($this->getVolume() - 10);
     }
     else{
       echo "<p>Erro! Volume não pode ser diminuido.</p>";
     }
   }

   public function ligarMudo(){
     if($this->getLigado() && $this->getVolume() > 0){
       $this->setVolume(0);
     }
   }

   public function desligarMudo(){
     if($this->getLigado() && $this->getVolume() == 0){
       $this->setVolume(50);
     }
   }

   public function play(){
     if($this->getLigado() && !($this->getTocando())){
       $this->setTocando(true);
     }
   }

   public function pause(){
     if($this->getLigado() && $this->getTocando()){
       $this->setTocando(false);
     }
   }

   //Metodos Especiais
   function __construct(){
     $this->volume = 50;
     $this->ligado = false;
     $this->tocando = false;
   }

   private function getVolume():int{
     return $this->volume;
   }

   private function setVolume(int $vo){
     $this->volume = $vo;
   }

   private function getLigado():bool{
     return $this->ligado;
   }

   private function setLigado(bool $li){
     $this->ligado = $li;
   }

   private function getTocando():bool{
     return $this->tocando;
   }

   private function setTocando(bool $to){
     $this->tocando = $to;
   }

}// Fim da Classe
