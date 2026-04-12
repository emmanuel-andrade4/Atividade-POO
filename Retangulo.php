<?php

declare(strict_types=1);

class Retangulo
{
    // Atributos
    public float $base;
    public float $altura;

    // Método Construtor
    public function __construct(float $base, float $altura)
    {
        $this->base = $base;
        $this->altura = $altura;
    }

    // Método calcularArea
    public function calcularArea(): float
    {
        return $this->base * $this->altura;
    }

    // Método calcularPerimetro
    public function calcularPerimetro(): float
    {
        return 2*($this->base + $this->altura);
    }
    
    // Método mostrarDados
    public function mostrarDados(): void
    {
        echo "Base: " . $this->base . PHP_EOL;
        echo "Altura: " . $this->altura . PHP_EOL;
    }
}