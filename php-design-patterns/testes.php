<?php
require_once 'vendor/autoload.php';

use Alura\DesignPattern\Strategy\CalculadoraDeImpostos;
use Alura\DesignPattern\Strategy\Impostos\Icms;
use Alura\DesignPattern\Strategy\Impostos\Iss;
use Alura\DesignPattern\Strategy\Orcamento;

$calculadora = new CalculadoraDeImpostos();
$orcamento = new Orcamento();
$orcamento->valor = 100;
echo $calculadora->calcula($orcamento, new Icms()) . PHP_EOL;
echo $calculadora->calcula($orcamento, new Iss()) . PHP_EOL;
