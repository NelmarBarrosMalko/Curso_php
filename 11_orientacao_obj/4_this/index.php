<?php

class Animal{

public $nome;

function escolhernome ($nome){

$this->nome= $nome;
}
}

$frida = new Animal;
 $frida->escolhernome("Frida");

echo "o nome do animal é: $frida->nome <br>";