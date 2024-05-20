<?php

require_once 'vendor/autoload.php';

use Alura\DesignPattern\Observer\AcoesAoGerarPerdido\CriarPedidoNoBanco;
use Alura\DesignPattern\Observer\AcoesAoGerarPerdido\EnviarPedidoPorEmail;
use Alura\DesignPattern\Observer\AcoesAoGerarPerdido\LogGerarPedido;
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
$geraPedidoHandler->adicionarAcaoAoGerarPedido(new CriarPedidoNoBanco());
$geraPedidoHandler->adicionarAcaoAoGerarPedido(new LogGerarPedido());
$geraPedidoHandler->adicionarAcaoAoGerarPedido(new EnviarPedidoPorEmail());
$geraPedidoHandler->execute($geraPedido);

// php gera-pedido2.php 1200.5 7 "Vinicius Dias"
