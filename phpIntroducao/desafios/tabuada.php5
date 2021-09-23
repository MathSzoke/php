<?php

//Jeito que eu fiz:
echo "Jeito que eu fiz:" . PHP_EOL;
for ($t = 1; $t < 11; $t++){
    $resultado = 7 * $t;
    if($t){
        echo "7 x $t = $resultado" . PHP_EOL;
    }
}

echo PHP_EOL . PHP_EOL;
//Jeito que professor fez:
echo "Jeito que o professor fez:" . PHP_EOL;

$multiplicador = 7;
for ($i = 1; $i <= 10; $i++){
    echo "$multiplicador x $i = " . $multiplicador * $i . PHP_EOL;
}
