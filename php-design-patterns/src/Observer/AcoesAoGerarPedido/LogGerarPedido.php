<?php

namespace Alura\DesignPattern\Observer\AcoesAoGerarPedido;

use Alura\DesignPattern\Observer\AcaoAposGerarPedido;
use Alura\DesignPattern\Observer\Pedido;
use SplObserver;
use SplSubject;

class LogGerarPedido implements SplObserver
{
  public function update(SplSubject $pedido): void
  {
    echo "Envia e-mail de pedido gerado" . PHP_EOL;
  }
}
