<?php

$contasCorrentes = [
    '506.335.848-94' => ['titular' => 'Matheus', 'saldo' => 2000],
    '123.456.789-10' => ['titular' => 'Lalay', 'saldo' => 3000],
    '812.821.821-89' => ['titular' => 'Zé', 'saldo' => 10000]
];

$contasCorrentes['123.456.789-12'] = [
    'titular' => 'Claudia',
    'saldo' => 5000
];

foreach ($contasCorrentes as $cpf => $conta){
    echo $cpf . " " . $conta['titular'] .  PHP_EOL;
}