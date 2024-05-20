<?php

namespace Alura\DesignPattern\Observer\AcoesAoGerarPerdido;

use Alura\DesignPattern\Observer\AcaoAposGerarPedido;
use Alura\DesignPattern\Observer\Pedido;

class LogGerarPedido implements AcaoAposGerarPedido
{
  public function executaAcao(Pedido $pedido): void
  {
    echo "Envia e-mail de pedido gerado" . PHP_EOL;
  }
}
