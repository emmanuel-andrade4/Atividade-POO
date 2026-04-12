<?php

declare(strict_types=1);

class Funcionario 
{
    // Atributos
    public string $nome;
    public float $salario;

    // Método construtor
    public function __construct(string $nome, float $salario)
    {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    // Método aplicarAumento
    public function aplicarAumento(float $percentual): float
    {
        return $this->salario + (($this->salario * $percentual)/100);
    }
    
    // Método mostrarDados
    public function mostrarDados(): void
    {
        echo "Nome: " . $this->nome . PHP_EOL;
        echo "Salário: " . number_format($this->salario, 2, ',', '.') . PHP_EOL;
    }

}