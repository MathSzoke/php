<?php

$idade = 17;
$numeroDePessoas = 1;

echo "Idade permitida acima de 18 anos, se maior que 16 estiver acompanhado, ";
echo "está permitido também." . PHP_EOL . PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar";
} elseif ($idade >= 16 and $numeroDePessoas > 1) {
    echo "Você tem $idade anos. Porém está acompanhado, pode entrar!";
} else {
    echo "Você é menor e/ou não está acompanhado, não poderá entrar.";
}
