<?php

$i=0;

while ($i < 20) {
  $i++;
  echo "loop externo $i <br>"; 
  echo "<br>";
  $j = 1;
  while ($j <= 10) {
    echo "loop interno $j <br>";
    
    
    $j++;
  }
}