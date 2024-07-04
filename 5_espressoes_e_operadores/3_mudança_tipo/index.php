<?php

if (is_float(5/2)) {
    echo "é float";
}
echo "<br>";


if (is_string(5 . 5)) {
    echo "É uma string";

}
echo "<br>";

$nome = "Nelmar";
$sobrenome = "Malko";


$nomecompleto = "Nelmar"." "."Malko";

echo $nomecompleto;
echo "<br>";