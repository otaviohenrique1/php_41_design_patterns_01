<?php

namespace Alura\DesignPattern\Observer\AcoesAoGerarPerdido;

use Alura\DesignPattern\Observer\AcaoAposGerarPedido;
use Alura\DesignPattern\Observer\Pedido;

class EnviarPedidoPorEmail implements AcaoAposGerarPedido
{
  public function executaAcao(Pedido $pedido): void
  {
    echo "Gerando log de geração de pedido" . PHP_EOL;
  }
}
