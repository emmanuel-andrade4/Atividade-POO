<?php

declare(strict_types=1);

require_once('Produto.php');
require_once('Aluno.php');
require_once('ContaBancaria.php');
require_once('Funcionario.php');
require_once('Retangulo.php');
require_once('Pedido.php');

// EXERCÍCIO 1
$produto = new Produto("Teclado", 149.90, 10);

$produto->mostrarDados();
echo "Valor em estoque: R$ " . number_format($produto->calcularValorEstoque(), 2, ',', '.') . PHP_EOL . PHP_EOL;

// EXERCÍCIO 2
$aluno = new Aluno("Roberto", 10.0, 4.0);

echo "Nome do Aluno: " . $aluno->nome . PHP_EOL;
echo "Média: " . $aluno->calcularMedia(). PHP_EOL;
$aluno->verificarSituacao();

// EXERCÍCIO 3
$novaConta = new ContaBancaria("Jorge", 100.00);

echo "Titular: " . $novaConta->titular . PHP_EOL;
$novaConta->depositar(500.00);
$novaConta->sacar(400.00);
echo "Saldo atual: " . number_format($novaConta->mostrarSaldo(), 2, ',', '.') . PHP_EOL . PHP_EOL;

// EXERCÍCIO 4
$funcionario = new Funcionario("Memphis", 2000.00);

$funcionario->mostrarDados();
echo "Salário aumentado: " . number_format($funcionario->aplicarAumento(10.0), 2, ',', '.') . PHP_EOL . PHP_EOL;

// EXERCÍCIO 5
$retangulo = new Retangulo(10.0, 20.0);

$retangulo->mostrarDados();
echo "Área: " . $retangulo->calcularArea() . PHP_EOL;
echo "Perímetro: " . $retangulo->calcularPerimetro() . PHP_EOL . PHP_EOL;

// EXERCÍCIO 6
$pedido = new Pedido("Yuri Alberto", "X-Tudo", 2, 20.0);

$pedido->mostrarResumo();
echo "Total: R$ " . number_format($pedido->calcularTotal(), 2, ',', '.') . PHP_EOL . PHP_EOL;