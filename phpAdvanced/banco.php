<?php

/* include */ require_once 'funcoes.php';

$contasCorrentes = [
    '506.335.848-94' => ['titular' => 'Matheus', 'saldo' => 2000],
    '123.456.789-10' => ['titular' => 'Lalay', 'saldo' => 3000],
    '812.821.821-89' => ['titular' => 'Zé', 'saldo' => 10000]
];

$contasCorrentes['812.821.821-89'] = sacar($contasCorrentes['812.821.821-89'], 500);
$contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], 500);
$contasCorrentes['506.335.848-94'] = depositar($contasCorrentes['506.335.848-94'], 10000);

unset($contasCorrentes['812.821.821-89']);

titularComLetrasMaiusculas($contasCorrentes['506.335.848-94']);
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width", user-scalable=no, initial-scale=1.0>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contas Correntes</h1>

    <dl>
    <?php foreach($contasCorrentes as $cpf => $conta){ ?>
    <dt>
        <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
    </dt>
    <dd>
        Saldo: <?= $conta['saldo']; ?>
    </dd>
    <?php } ?>
    </dl>
</body>
</html>