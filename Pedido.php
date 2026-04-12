<?php

declare(strict_types=1);

class Pedido
{
    // Atributos
    public string $cliente;
    public string $item;
    public int $quantidade;
    public float $precoUnitario;

    // Método Construtor
    public function __construct(string $cliente, string $item, int $quantidade, float $precoUnitario)
    {
        $this->cliente = $cliente;
        $this->item = $item;
        $this->quantidade = $quantidade;
        $this->precoUnitario = $precoUnitario;        
    }

    // Método calcularTotal
    public function calcularTotal(): float
    {
        return $this->precoUnitario * $this->quantidade;
    }

    // Método mostrarResumo
    public function mostrarResumo(): void
    {
        echo "Cliente: " . $this->cliente . PHP_EOL;
        echo "Item: " . $this->item . PHP_EOL;
        echo "Quantidade: " . $this->quantidade . PHP_EOL;
        echo "Preço Unitário: R$" . number_format($this->precoUnitario, 2, ',', '.') . PHP_EOL;
    }
}