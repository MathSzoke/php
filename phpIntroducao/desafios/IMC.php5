<?php

//Jeito que eu fiz:
echo "Jeito que eu fiz:" . PHP_EOL;

$altura = 1.72;
$peso = 65;

$imc = $peso / $altura ** 2;

if($imc < 18.5){
    echo "Seu IMC é de: $imc" . PHP_EOL;
    echo "Sua classificação é: Magreza." . PHP_EOL;
    echo "Seu IMC está muito abaixo do padrão, deve-se preocupar-se consigo mesmo e com sua saúde.";
} elseif($imc < 24.9){
    echo "Seu IMC é de: $imc" . PHP_EOL;
    echo "Sua classificação é: Normal." . PHP_EOL;
    echo "Seu IMC está normal, porém, deve-se sempre alimentar-se bem e sempre fazer o possivel para si mesmo.";
}elseif($imc < 29.9){
    echo "Seu IMC é de: $imc" . PHP_EOL;
    echo "Sua classificação é: Sobrepeso." . PHP_EOL;
    echo "Seu IMC está com sobrepeso, não é algo tão grave, mas já motivo para se preocupar.";
}elseif($imc < 39.9){
    echo "Seu IMC é de: $imc" . PHP_EOL;
    echo "Sua classificação é: Obesidade." . PHP_EOL;
    echo "Seu IMC é de obesidade. Deve-se procurar ajuda de imediato para saúde e se esforçar a melhoar.";
}elseif($imc > 40){
    echo "Seu IMC é de: $imc" . PHP_EOL;
    echo "Sua classificação é: Obesidade Grave." . PHP_EOL;
    echo "Seu IMC é de obesidade grave. Algo muito sério para saúde, ";
    echo "tanto mental quanto fisica, procure um médico imediatamente.";
}

echo PHP_EOL . PHP_EOL;

//Jeito que o professor fez:
echo "Jeito que o professor fez:" . PHP_EOL;

$altura = 1.72;
$peso = 65;
$imc = $peso / $altura ** 2;

echo "Seu IMC é de $imc. Você está com o IMC ";

if($imc < 18){
    echo "abaixo";
}elseif ($imc < 25){
    echo "dentro";
}else{
    echo "acima";
}

echo " do recomendado";