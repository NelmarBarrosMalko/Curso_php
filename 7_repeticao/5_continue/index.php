<?php


$a=10;

while ($a > 0) {
   if ($a == 5||$a == 7) {
    echo "skipando <br>";
    $a--;
    continue;
  }
  echo "etapa $a do loop"; 
  echo "<br>";
 
  $a--;
}