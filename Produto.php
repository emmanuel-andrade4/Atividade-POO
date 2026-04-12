<?php

declare(strict_types=1);

class Produto 
{
    // Atributos
    public string $nome;
    public float $preco;
    public int $quantidade;

    // Método Construtor
    public function __construct(string $nome, float $preco, int $quantidade) 
    {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
    }

    // Método mostrarDados
    public function mostrarDados(): void
    {
        echo "Nome: " . $this->nome . PHP_EOL;
        echo "Preço: R$ " . number_format($this->preco, 2, ',', '.') . PHP_EOL;
        echo "Quantidade: " . $this->quantidade . PHP_EOL;
    }
    
    // Método calcularValorEstoque 
    public function calcularValorEstoque(): float
    {
        return $this->preco * $this->quantidade;
    }
}