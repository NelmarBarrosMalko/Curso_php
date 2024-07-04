<?php

   $arr =[
    'sapato_courolegitimo' => 500,
    'blazer_importado' => 100,
    'corrente_prata' => 20,
    'calça_social' => 10
 ];



function outfit($arr){

  $arritenscaros = [];

  foreach ($arr as $item => $preço) {
    if ($preço>100) {
        array_push($arritenscaros, $item);
    }
  }
  return $arritenscaros;
}
  


$novoarr= outfit($arr);

 print_r($novoarr);