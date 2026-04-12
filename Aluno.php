<?php

declare(strict_types=1);

class Aluno 
{
    // Atributos
    public string $nome;
    public float $nota1;
    public float $nota2;

    // Método Construtor
    public function __construct(string $nome, float $nota1, float $nota2) 
    {
        $this->nome = $nome;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
    }

    // Método calcularMedia
    public function calcularMedia(): float
    {
        return ($this->nota1 + $this->nota2)/2;
    }
    
    // Método verificarSituacao
    public function verificarSituacao(): void
    {
    
    // Variável para guardar a média
    $media = $this->calcularMedia();

    if ($media >= 7.0) {
        echo "Situação: Aprovado!" . PHP_EOL . PHP_EOL;
    } elseif ($media >= 4.5) {
        echo "Situação: Recuperação!" . PHP_EOL . PHP_EOL;
    } else {
        echo "Situação: Reprovado!" . PHP_EOL . PHP_EOL;;
    }
}
        
}