<?php

class Conta
{
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo = 0;

    public function __construct(string $cpfTitular, string $nomeTitular){
        $this->cpfTitular = $cpfTitular;
        $this->nomeTitular = $nomeTitular;
    }

    public function sacar(float $valorASacar): void
    {
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorASacar;
    }

    public function depositar(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }

        $this->saldo += $valorADepositar;
    }

    public function transferir(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }

    public function recuperarSaldo() : float{
        return $this->saldo;
    }

    public function defineCPF(string $Cpf): string{
        return $this->cpfTitular = $Cpf;
    }

    public function DescobreCPF(): string{
        return $this->cpfTitular;
    }

}