<?php

class pessoa {

    function falar(){
        echo "Olá Mundo";
    }
}

 $nelmar = new pessoa();
  
 $nelmar->nome = "Nelmar";

  echo $nelmar->nome;
  
   echo "<br>";
   $nelmar->falar();