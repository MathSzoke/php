<?php

// Uma lista sempre começa pelo "indice" 0, indice = colocação do objeto na lista.

$idadeList = [19, 18, 23, 20, 17, 21, 28];

list($idadeMatheus, $idadeLaiany, $idadeZé) = $idadeList;

$idadeList[] = 25;

foreach($idadeList as $idade){
    echo $idade . PHP_EOL;
}