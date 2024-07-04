<?php

 class Humano{
   public $estudo= "Sim" ;
  private function Falar(){
    echo "Olá mundo";
   }
  function acessFalar(){
    $this->Falar();
   }
   protected function HumanoDev(){
     if ($this->estudo=="Sim") {
        echo "Humano pode virar programador";
     }
     
   }
   public function acessEstudo(){
    $this->HumanoDev();
   }
 }
  class Programador extends Humano{
 }
  
  $ze= new Programador;
  $ze->acessFalar();
  $ze->acessEstudo();