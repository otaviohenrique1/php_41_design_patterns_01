<?php

namespace Alura\DesignPattern\Observer\EstadosOrcamento;

use Alura\DesignPattern\Observer\Orcamento;
use DomainException;

class Finalizado extends EstadoOrcamento
{
  public function calculaDescontoExtra(Orcamento $orcamento): float
  {
    throw new DomainException('Um orcamento finalizado não pode receber desconto');
  }
}