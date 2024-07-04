<?php

$a=1;

while ($a < 10000) {
  $a++;
  echo $a; 
  echo "<br>";

  if ($a == 2) {
    echo "calma ai paizão, quer mesmo imprimir 10000 números?";
    break;
  }
}