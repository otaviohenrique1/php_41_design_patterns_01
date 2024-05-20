<?php

namespace Alura\DesignPattern\Observer;

interface AcaoAposGerarPedido
{
  public function executaAcao(Pedido $pedido): void;
}
