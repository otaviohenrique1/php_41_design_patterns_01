<?php

require_once 'vendor/autoload.php';

use Alura\DesignPattern\Command\GerarPedido;
use Alura\DesignPattern\Command\GerarPedidoHandler;

$valorOrcamento = $argv[1];
$numeroDeItens = $argv[2];
$nomeCliente = $argv[3];

$geraPedido = new GerarPedido(
  $valorOrcamento,
  $numeroDeItens,
  $nomeCliente
);
$geraPedidoHandler = new GerarPedidoHandler();
$geraPedidoHandler->execute($geraPedido);

// php gera-pedido.php 1200.5 7 "Vinicius Dias"
