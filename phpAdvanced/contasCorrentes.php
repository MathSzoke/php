<?php

$conta1 = ['titular' => 'Matheus', 'saldo' => 2000];
$conta2 = ['titular' => 'Lalay', 'saldo' => 3000];
$conta3 = ['titular' => 'Zé', 'saldo' => 10000];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++){
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}