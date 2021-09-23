<?php

function exibeMensagem(string $mensagem)
{
    echo $mensagem . '<br>';
}
function sacar(array $saldoConta, float $valorSaque) : array
{
    if($valorSaque > $saldoConta['saldo']){
        exibeMensagem( "Você não pode sacar este valor");
    }else {
        $saldoConta['saldo'] -= $valorSaque;
    }
    return $saldoConta;
}
function depositar(array $saldoConta, float $valorDeposito) : array
{
    if($valorDeposito > 0){
        $saldoConta['saldo'] += $valorDeposito;
    } else {
        exibeMensagem("Depositos precisam ser positivos");
    }
    return $saldoConta;
}
function titularComLetrasMaiusculas(array &$saldoConta)
{
    $saldoConta['titular'] = strtoupper($saldoConta['titular']);
}

function exibeConta(array $conta)
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular Saldo: $saldo </li>";
}