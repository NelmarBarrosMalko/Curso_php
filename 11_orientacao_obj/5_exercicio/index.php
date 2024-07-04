<?php

class Car{


public $cor = "azul";
public $rodas = 4;
public $retrovisor = 2;
public $velocidade_maxima;

function setVelocidadeMaxima($vel){

  $this->velocidade_maxima= $vel;


}

function getVelocidademaxima(){

echo "A velocidade máxima do carro é: $this->velocidade_maxima";
}
}

$lamborguini= new Car;
$lamborguini-> setVelocidadeMaxima(520);
 $lamborguini->getVelocidademaxima();
