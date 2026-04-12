<?php

declare(strict_types=1);

class ContaBancaria 
{
    // Atributos
    public string $titular;
    public float $saldo;

    // Método Construtor
    public function __construct(string $titular, float $saldo)  
    {
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    // Método depositar
    public function depositar(float $valor): void
    {
        echo "Depósito realizado com sucesso!" . PHP_EOL;
        $this->saldo = $valor + $this->saldo;
    }

    // Método sacar
    public function sacar(float $valor): void
    {
        if ($this->saldo > $valor) {
            
            $this->saldo = $this->saldo - $valor;
            echo "Saque realizado com sucesso!" . PHP_EOL;
        }
        else {
            echo "Saldo insuficiente!" . PHP_EOL;
        }
    }

    // Método mostrarSaldo
    public function mostrarSaldo(): float
    {
        return $this->saldo;
    }
}