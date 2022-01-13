<?php
function exibemensagem($mensagem){
    echo $mensagem . PHP_EOL;
}
function Sacar($conta, $valorasacar){
    if($valorasacar > $conta['saldo']){
        exibemensagem('Você não pode sacar');
    }else{
        echo $conta['saldo'] -= $valorasacar . PHP_EOL;
        echo $conta;
        exibemensagem("Você conseguiu sacar");
    }
}
$conta1 = [
    'titular' => 'Vinicius',
    'saldo' => 1000
];

$conta2 = [
    'titular' => 'Maria',
    'saldo' => 10000
];

$conta3 = [
    'titular' => 'Alberto',
    'saldo' => 300
];
$contasCorrentes = [
    '12345678910' => $conta1,
    '12345678911' => $conta2,
    '12325678912' => $conta3
];
$contasCorrentes['12345678910'] = Sacar($contasCorrentes['12345678910'], 500);
