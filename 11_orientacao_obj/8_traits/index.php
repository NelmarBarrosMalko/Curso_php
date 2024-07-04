<?php

trait Objeto{

 public function Teste(){
    echo"Testando Objeto";
 }
}

class Central{
    use Objeto;
}

$x = new Central;
$x->Teste();