<?php

interface User{

public function Log();


}


class Humano implements User{

    function Log(){

        echo "Mais um humano no site uhull";
     }
    

}

$Wilas= new Humano;
$Wilas->log();