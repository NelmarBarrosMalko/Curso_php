<?php

class Car{

public $cor = "Azul";
public $rodas = 4;
public $aro = 20;

function ligar() {

    echo "Vrummmm";
}
}
$ferrari = new Car;


$ferrari->ligar();