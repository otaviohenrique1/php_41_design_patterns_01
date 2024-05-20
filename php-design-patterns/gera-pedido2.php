<?php

require_once 'vendor/autoload.php';

use Alura\DesignPattern\Observer\AcoesAoGerarPedido\CriarPedidoNoBanco;
use Alura\DesignPattern\Observer\AcoesAoGerarPedido\EnviarPedidoPorEmail;
use Alura\DesignPattern\Observer\AcoesAoGerarPedido\LogGerarPedido;
use Alura\DesignPattern\Observer\GerarPedido;
use Alura\DesignPattern\Observer\GerarPedidoHandler;

$valorOrcamento = $argv[1];
$numeroDeItens = $argv[2];
$nomeCliente = $argv[3];

$geraPedido = new GerarPedido(
  $valorOrcamento,
  $numeroDeItens,
  $nomeCliente
);
$geraPedidoHandler = new GerarPedidoHandler();
$geraPedidoHandler->attach(new CriarPedidoNoBanco());
$geraPedidoHandler->attach(new LogGerarPedido());
$geraPedidoHandler->attach(new EnviarPedidoPorEmail());
$geraPedidoHandler->execute($geraPedido);

// php gera-pedido2.php 1200.5 7 "Vinicius Dias"
