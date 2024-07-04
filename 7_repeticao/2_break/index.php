<?php

$a=0;

while ($a < 50) {
  $a++;
  echo $a; 
  echo "<br>";
  if ($a == 25) {
    
    echo "chegou na metade, já está ótimo";
    break;
  }
}