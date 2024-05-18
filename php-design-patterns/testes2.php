<?php
require_once 'vendor/autoload.php';

use Alura\DesignPattern\ChainOfResponsability\CalculadoraDeDescontos;
use Alura\DesignPattern\ChainOfResponsability\Orcamento;

$calculadora = new CalculadoraDeDescontos();
$orcamento = new Orcamento();
$orcamento->valor = 600;
$orcamento->quantidadeItens = 5;
echo $calculadora->calculaDescontos($orcamento);
