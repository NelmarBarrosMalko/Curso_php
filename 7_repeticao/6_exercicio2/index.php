<?php

$i = 10;
$a= [$i];

  while ($i <= 100) {
   if ($i == 30||$i == 40) {
    echo "skipando <br>";
   $i = $i+10; 
   continue;
    
   }

    echo $i; 
    echo "<br>";
     $a[$i] = $i;
     $i = $i +10;
  }