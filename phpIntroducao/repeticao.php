<?php

//Repetição com  "While"
/*
$contador = 1;

while ($contador <= 15){
    echo "#$contador" . PHP_EOL;
    $contador = $contador + 1;
}*/

//Repetição com "for"
for ($contador = 1; $contador <= 15; $contador ++){
    if ($contador == 13){
        break;
    }
    echo "#$contador" . PHP_EOL;
}