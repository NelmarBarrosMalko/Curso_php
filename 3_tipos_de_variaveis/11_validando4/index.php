<?php

$frase = true;



  if (is_bool($frase)) {
    echo "é boolean";
}
 echo "<br>";
    
  if (is_bool(0)) {
    echo "é boolean";
}
echo "<br>";
    
    if (is_bool(false)) {
        echo "é boolean";
}
echo "<br>";
     
    if (0 == false) {
        echo "0 é considerado falso";
}
 