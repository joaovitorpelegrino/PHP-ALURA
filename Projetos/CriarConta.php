<?php
function criarconta(string $cpf, float $saldo, string $nomedotitular): array{
    return [
        $cpf => [
            'cpf' => $cpf,
            'titular' =>$nomedotitular,
            'saldo ' => $saldo
        ]
    ];

}
