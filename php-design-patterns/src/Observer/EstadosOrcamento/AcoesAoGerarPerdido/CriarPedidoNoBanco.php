<?php

namespace Alura\DesignPattern\Observer\AcoesAoGerarPerdido;

use Alura\DesignPattern\Observer\AcaoAposGerarPedido;
use Alura\DesignPattern\Observer\Pedido;

class CriarPedidoNoBanco implements AcaoAposGerarPedido
{
  public function executaAcao(Pedido $pedido): void
  {
    echo "Salvando pedido no banco de dados" . PHP_EOL;
  }
}
